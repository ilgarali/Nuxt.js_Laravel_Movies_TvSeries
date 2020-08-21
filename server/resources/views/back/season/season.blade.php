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
           
            </div>
            <div class="asset-inner">
                <table>
                    <thead>
                        <tr>
                      
                            <th>Tvshow</th>
                            <th>Season</th>
                            <th>Episodes</th>
                          
                            
                        </tr>
                    </thead>
                    <tbody>

                     
                            
                        
                    <tr>
                    <td>{{$season->tvshow->title}} 
                  </td>
                <td>{{$season->season}} <a title="Edit" class="btn btn-info" href="{{route('season.edit',$season->id)}}"><i class="fas fa-pen-fancy"></i></a> 
                <form action="{{route('season.destroy',$season->id)}}" method="post" style="display: inline-block">
                    @csrf
                    @method('DELETE')
                            <button title="delete" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>        
                        </form>
                        <a title="Add New Episode"  class="btn btn-primary" href="{{route('episode.new',$season->id)}}"><i class="far fa-plus-square"></i></a>
                  
               </td>
              
                    <td> 
                        <ul>
                            @foreach ($season->episodes as $episode)
                            <li>{{$episode->episode_name}}
                            <a title="edit" class="btn btn-info" href="{{route('episode.edit',$episode->id)}}"><i class="fas fa-pen-fancy"></i></a> 
                            <form action="{{route('episode.destroy',$episode->id)}}" method="post" style="display: inline-block">
                                @csrf    
                                @method('DELETE')
                                    <button title="delete" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>        
                                </form>
                             
                            </li>   
                          
                            @endforeach 

                         
                        </ul>    
                    </td>    
                  
                    
                  
                
   
                  
                    </tr>
                  
                   
                </tbody></table>
            </div>
           
        </div>
    </div>

</div>
</div>
</div>
@endsection