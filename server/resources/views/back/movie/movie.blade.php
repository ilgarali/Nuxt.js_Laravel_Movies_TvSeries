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
            <a href="{{route('movie.create')}}">Add Library</a>
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

                        @foreach ($movies as $movie)
                            
                        
                    <tr>
                    <td><img src="{{asset($movie->img)}}" alt=""></td>
                    <td>{{$movie->title}}</td>
                  
                        
                   
                    <td>
                        <ul>
                        @foreach ($movie->categories as $category)
                       
                            <li>
                                {{$category->category}}
                            </li>
                       
                        @endforeach
                    </ul>
                    </td>
               

                        <td>{{Str::words($movie->description,5)}}</td>
                        <td> @foreach ($movie->sources as $source)
                       
                            <li>
                                {{$source->language}}
                            </li>
                       
                        @endforeach
                    </ul></td>
                       
                        <td>
        <a href="{{route('movie.edit',$movie->id)}}" data-toggle="tooltip" title="" class="pd-setting-ed" data-original-title="Edit"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
          <form action="{{route('movie.destroy',$movie->id)}}" method="post">
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
                    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                </ul>
            </div>
        </div>
    </div>

</div>
</div>
</div>
@endsection