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
    <a href="{{route('tvshow.create')}}">Add Tvshow</a>
    </div>
    <div class="asset-inner">
        <table>
            <thead>
                <tr>
                
                    <th>Image</th>
                    <th>Title</th>
                    <th>Category</th>
                    <th>Post Description</th>
                    <th>Season</th>
                    
                </tr>
            </thead>
            <tbody>

                @foreach ($tvshows as $tvshow)
                    
                
            <tr>
            <td><img src="{{asset($tvshow->img)}}" alt=""></td>
            <td>{{$tvshow->title}}</td>
            
                
            
            <td>
                <ul>
                @foreach ($tvshow->categories as $category)
                
                    <li>
                        {{$category->category}}
                    </li>
                
                @endforeach
            </ul>
            </td>
        

                <td>{{Str::words($tvshow->description,5)}}</td>
                <td> 
                    
                    @isset($tvshow->seasons)
                    @foreach ($tvshow->seasons as $season)
                
                    <ul>
                    <li>
                        {{$season->season}} - <a href="{{route('season.show',$season->id)}}">Go Season</a>
                        
                        </li>
                    </ul>
                
                @endforeach
                    @endisset
            </ul></td>
                
                <td>
<a href="{{route('tvshow.edit',$tvshow->id)}}" data-toggle="tooltip" 
    title="" class="pd-setting-ed" data-original-title="Edit"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
    <form class="my-2" action="{{route('tvshow.destroy',$tvshow->id)}}" method="post">
    @csrf
    @method('DELETE')
    <button data-toggle="tooltip" title="" class="pd-setting-ed" data-original-title="Trash">
        <i class="fa fa-trash-o" aria-hidden="true"></i>
    </button>
    </form>
    <a href="{{route('season.createSeason',$tvshow->id)}}" 
    title="Add New Season" class="btn btn-primary my-2">
    <i class="far fa-plus-square"></i>
</a> 
</td>
            
            </tr>
            @endforeach
            
        </tbody></table>
    </div>
    <div class="custom-pagination">
        <ul class="pagination">
                {{ $tvshows->links() }}
        </ul>
    </div>
</div>
</div>

</div>
</div>
</div>
@endsection