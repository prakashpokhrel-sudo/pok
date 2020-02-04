<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\service;
use App\Product;
use App\Purchase;
use App\Order;
use Session;
use GuzzleHttp\Client;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function getAddProduct()
    {
        return view('layouts.product.add');
    }

    public function postAddProduct(Request $request){
        $name = $request->input('product');
        $detail = $request->input('detail');
        $cost = $request->input('cost');
        $photo = $request->file('photo');
        $stock = $request->input('stock');

        $getphotoextensionname = $photo->getClientOriginalExtension();
        $makeuniquename = sha1(time());
        $realname = $makeuniquename.'.'.$getphotoextensionname;

        $photo->move('uploads/', $realname);

        $product = New Product;
        $product->name = $name;
        $product->detail = $detail;
        $product->photo = $realname;
        $product->cost = $cost;
        $product->stock = $stock;
        $product->save();
    }

    public function getManageProduct(){
        $data =[
            'products'=>Product::all()
        ];
        return view('layouts.product.manage', $data);
    }

    public function getSell(){
        
        if(Session::get('code')){
            $data['getproduct'] = Purchase::where('code', Session::get('code'))->get();
            $data['grandtotal']= Purchase::where('code', Session::get('code'))->sum('totalcost');
        }

        $data['products'] = Product::all();
        return view('layouts.sell.index', $data);
    }

    public function postAddPurchase(Request $request){
        $pid = $request->input('product');
        $qty = $request->input('qty');
        $mobile = $request->input('mobile');
        if(Session::get('code')){
            $code = Session::get('code');
        }
        else{
            $code = mt_rand(1000,9999);
            Session::put('code', $code);
        }
        
        // to get cost
        $getcost = Product::where('id', $pid)->limit(1)->first();
        $cost = $getcost->cost;
        $totalcost = $cost * $qty;


        $gfname = New Purchase;
        $gfname->code = $code;
        $gfname->product_id = $pid;
        $gfname->cost = $cost ;
        $gfname->qty = $qty ;
        $gfname->totalcost = $totalcost;
        $gfname->mobile = $mobile;
        $gfname->save();
        return redirect()->back();

    }

    public function getCancelSell(){
        session()->forget('code');
        return redirect()->back();
    }

    public function postSellPaid( Request $request, $code){
        //calculate total cost of item
        $getitemstotalcost = Purchase::where('code', $code)->sum('totalcost');

        //save into order table
        $order = New Order;
        $order->code = $code;
        $order->status = 'P';
        $order->total_cost = $getitemstotalcost;
        $order->save();

        //get get mobile
        $getmobile = Purchase::where('code', $code)->limit(1)->first();
        //dd($getmobile->mobile);

        // send sms to client
        $client = new \GuzzleHttp\Client();
        $text_message = 'Thank you for your visit . Your total Purchase cost is'.$getitemstotalcost;
        $res = $client->request('POST','http://103.233.58.138/admin/public/sms/v3/send', [
            'form_params' => [
                'auth_token' =>'e17b9097e6ec4450ed488ee536924d2b41e4ec8a6ffdac7cff5e2aed0cf4a3c7',
                'from' => '31002',
                'to' => $getmobile->mobile,
                'text'=> $text_message,
            ]

        ]);
       
  

        // delete code from session
        session()->forget('code');

        return redirect()->back();

    }

    public function getSMS(){
        return view('layouts.testing.sendsms');
    }

} 