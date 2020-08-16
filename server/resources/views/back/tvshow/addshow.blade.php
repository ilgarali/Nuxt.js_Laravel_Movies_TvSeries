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
<form action="{{route('tvshow.store')}}" enctype="multipart/form-data" method="POST" class="dropzone dropzone-custom needsclick addcourse dz-clickable" id="demo1-upload" novalidate="novalidate">
   @csrf
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="form-group">
                <input name="title" type="text" class="form-control" placeholder="Title">
            </div>
            <div class="form-group">
                <input name="country" id="finish" type="text" class="form-control hasDatepicker" 
                placeholder="Country">
            </div>
            <div class="form-group">
                <input name="duration" type="text" class="form-control" placeholder="Duration">
            </div>
            <div class="form-group">
                <input name="imdb" type="text" class="form-control" placeholder="imdb">
            </div>
            <div class="form-group res-mg-t-15">
                <input name="released" type="text" class="form-control" placeholder="Released">
            </div>
          
         
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="form-group res-mg-t-15">
                <h4>Select Categories</h4>
                <select name="category[]" style="width: 100%" class="custom-select" multiple="multiple" size="5">
                    @foreach ($categories as $category)
                        
                    
                <option value="{{$category->id}}">{{$category->category}}</option>
                    @endforeach
                    </select>
            </div>
            <div class="form-group alert-up-pd">
                <h4 class="my-2">Add Image</h4>
                <input type="file" name="img" >
            </div>
            <div class="form-group">
                <textarea name="description" placeholder="Description"></textarea>
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