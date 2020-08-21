@extends('back.layouts.master')
@section('content')



<div class="analytics-sparkle-area">
<div class="container-fluid">
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<div class="review-content-section">
<div id="dropzone1" class="pro-ad addcoursepro">
<form action="{{route('category.update',$category->id)}}" enctype="multipart/form-data" method="POST" class="dropzone dropzone-custom needsclick addcourse dz-clickable" id="demo1-upload" novalidate="novalidate">
   @csrf
   @method('PUT')
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="form-group">
            <input name="category" type="text" class="form-control" value="{{$category->category}}" placeholder="category">

            </div>
          
          
         
        </div>
      
    </div>
    <div class="row">
        <div class="col-lg-12 mb-5">
            <div class="payment-adress">
                <button type="submit" class="btn btn-primary waves-effect waves-light">Submit</button>
            </div>
        </div>
    </div>
</form>
</div>
</div>
</div>
</div>
</div>
</div>
@endsection