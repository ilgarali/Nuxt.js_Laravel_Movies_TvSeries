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
            <h4>Library List</h4>
            <div class="add-product">
            <a href="{{route('season.create')}}">Add Library</a>
            </div>
            <div class="asset-inner">
                <table>
                    <thead>
                        <tr>
                      
                            <th>Image</th>
                            <th>Title</th>
                            <th>Category</th>
                            <th>Post Description</th>
                            <th>Sources</th>
                            
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($seasons as $season)
                            
                        
                    <tr>
                
                    <td>{{$season->season}}</td>
                  
                        
                   
                    
               

                       
                
                       
                        <td>
        <a href="{{route('season.edit',$season->id)}}" data-toggle="tooltip" title="" class="pd-setting-ed" data-original-title="Edit"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
          <form action="{{route('season.destroy',$season->id)}}" method="post">
            @csrf
            @method('DELETE')
            <button data-toggle="tooltip" title="" class="pd-setting-ed" data-original-title="Trash">
                <i class="fa fa-trash-o" aria-hidden="true"></i>
            </button>
          </form>
        </td>
                  
                    </tr>
                    @endforeach
                   
                </tbody></table>
            </div>
            <div class="custom-pagination">
                <ul class="pagination">
                     {{ $seasons->links() }}
                </ul>
            </div>
        </div>
    </div>

</div>
</div>
</div>
@endsection