@extends('back.layouts.master')
@section('content')
    

<div class="analytics-sparkle-area">
    <div class="container-fluid">
    <div class="row">
    
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    @if (session('success'))
        <div class="alert alert-success">
        <h1>{{session('success')}}</h1>
        </div>
    @endif
    <div class="product-status-wrap">
        <h4>TvShows</h4>
        <div class="add-product">
        <a href="{{route('category.create')}}">Add Category</a>
        </div>
        <div class="asset-inner">
            <table>
                    <thead>
                        <tr>
                      
                            <th>Category</th>
                            <th>Action</th>                          
                            
                        </tr>
                    </thead>
                    <tbody>
                   @foreach ($categories as $category)
                       
                
                    <tr>
                    <td>{{$category->category}} 
                      </td>
                    <td> 
                   
                           
            
            <a title="edit" class="btn btn-info" href="{{route('category.edit',$category->id)}}"><i class="fas fa-pen-fancy"></i></a> 
            <form action="{{route('category.destroy',$category->id)}}" method="post" style="display: inline-block">
                @csrf    
                @method('DELETE')
                    <button title="delete" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>        
                </form>
                
            
            

                         
                    </td>   
            
                    </tr>
                    @endforeach     
                   
                </tbody></table>
            </div>
           
        </div>
    </div>

    {{ $categories->links() }}

</div>
</div>
</div>
@endsection