@extends('site.home')
@section('content')


<section id="contact">
<div class="container">
	<div class="row">
	<div class="col-md-6">
		<h1>Contact us</h1>

    <form>
        <fieldset class="form-group">
            <label for="formGroupExampleInput">Example label</label>
            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input">
        </fieldset>
        <fieldset class="form-group">
            <label for="formGroupExampleInput2">Another label</label>
            <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Example input">
        </fieldset>
        
        <fieldset class="form-group">
            <label for="formGroupExampleInput">Example label</label>
            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input">
        </fieldset>
        <fieldset class="form-group">
            <label for="formGroupExampleInput2">Another label</label>
            <textarea name="content" id="content"
                    class="input-field" cols="60" rows="6"></textarea>
        </fieldset>
        <button type="button" class="btn btn-success">Success</button>
    </form>
</div>
        <div class="col-md-6 send">
        	<ul>
                <li><i class="fas fa-map-marker-alt fa-2x"></i>
                    <p>San Francisco, CA 94126, USA</p>
                </li>

                <li><i class="fas fa-phone mt-4 fa-2x"></i>
                    <p>+ 01 234 567 89</p>
                </li>

                <li><i class="fas fa-envelope mt-4 fa-2x"></i>
                    <p>contact@mdbootstrap.com</p>
                </li>
            </ul>
        </div>
        

</div>
</div>
</div>
</section>



@stop