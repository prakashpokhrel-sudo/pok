@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Sell Products</div>

                <div class="card-body">
                    <div class="row">
                   <div class="col-md-6" style="background: red; padding: 20px;">
                    <form action="{{route('postAddPurchase')}}" method="POST">
                        @csrf()
                        <fieldset class="form-group">
                            <label for="formGroupExampleInput">Client Mobile Number</label>
                            <input name="mobile" type="number" class="form-control">
                         
                        </fieldset>
                        <fieldset class="form-group">
                            <label for="formGroupExampleInput">Product</label>
                            <select name="product" type="text" class="form-control">
                                @foreach($products as $item)
                                <option value="{{$item->id}}">{{$item->name}}</option>
                                @endforeach
                            </select>
                        </fieldset>
                        <fieldset class="form-group">
                            <label for="formGroupExampleInput2">Qty</label>
                            <input type="text" name="qty" class="form-control">
                        </fieldset>

                        <fieldset class="form-group">
                            <label for="formGroupExampleInput2"></label>
                            <input type="submit" class="form-control" value="Add">
                        </fieldset>
                    </form>
                       
                   </div>
                   <div class="col-md-6">
                       <h3>Sumarry</h3>
                       @if(Session::get('code'))
                       @if($getproduct)
                       <form action="{{route('postSellPaid', Session::get('code') )}}" method="POST">
                        @csrf()
                       <table class="table table-hover table-inverse">
                           <thead>
                               <tr>
                                   <th>ID</th>
                                   <th>Product</th>
                                   <th>Cost</th>
                                   <th>QTY</th>
                                   <th>Total</th>
                               </tr>
                           </thead>
                           <tbody>
                            @foreach($getproduct as $abc)
                               <tr>
                                   <td>{{$abc->id}}</td>
                                   <td>{{$abc->product_id}}</td>
                                   <td>{{$abc->cost}}</td>
                                   <td>{{$abc->qty}}</td>
                                   <td>{{$abc->totalcost}}</td>
                               </tr>
                            @endforeach

                           </tbody>
                           <tfoot>
                               <tr></tr>>
                                   <td colspan="4"><strong>Grand Total</strong></td>
                                   <td>{{$grandtotal}}</td>
                               </tr>
                               <tr>
                                    <td colspan="4">Cash Amount</td>
                                    <input type="hidden" id="grandtotal" name="total" value="{{$grandtotal}}">
                                    <td><input type="number" id="cash" name="cash"></td>
                                </tr>
                                <tr>
                                    <td colspan="4">Return Amount</td>
                                    <td><input id="return1" type="number" name="return1" disabled></td>
                                </tr>
                           </tfoot>
                       </table>
                       <input type="submit" name="submit" value="Paid">
                       <a href="{{route('getCancelSell')}}" class="btn btn-primary">Cancel</a>
                   </form>
                       @endif
                       @endif
                   </div>
               </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('js')
<script type="text/javascript"src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script type="text/javascript">
    $(function(){
            $('#grandtotal, #cash').keyup(function(){
               var grandtotal = parseFloat($('#grandtotal').val()) || 0;
               var cash = parseFloat($('#cash').val()) || 0;
               $('#return1').val(cash - grandtotal);
            });
         });
</script>
@stop

