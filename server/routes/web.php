<?php

use App\Models\Category;
use App\Models\Movie;
use App\Models\Tvshow;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/movies', function () {
    $movie = new Movie();
    $movie->title = "title";
    $movie->slug = Str::slug('title');
    $movie->img = 'movie/the-old-guard.jpg';
    $movie->country = 'USA';
    $movie->imdb = '7';
    $movie->duration = '200';
    $movie->released = '2020';
    $movie->description = "description";
   
    $movie->save();
    $movie->categories()->create(
        [
            'category'=>'category',
            'slug'=>Str::slug('category')
        ]
    );





     return view('welcome');   
});



Auth::routes();

Route::namespace('Front')->group(function() {
    Route::get('/', 'HomeController@index')->name('home');
    
});

Route::namespace('Back')->prefix('admin')->middleware('is_admin')->group(function() {
    Route::get('/', 'AdminController@index')->name('admin');
    Route::resource('/movie', 'MovieController');
    Route::resource('/tvshow', 'TvshowController');
    Route::post('/seasonstore/{id}', 'SeasonController@store')->name('season.store');
    Route::get('/{id}', 'SeasonController@season')->name('season.season');
});



// Route::get('/tvshow', function () {
//     $movie = new Tvshow();
//     $movie->title = "New mOVIE";
//     $movie->slug = Str::slug('New mOVIE');
//     $movie->img = 'movie/the-old-guard.jpg';
//     $movie->country = 'USA';
//     $movie->imdb = '7';
//     $movie->duration = '200';
//     $movie->released = '2020';
//     $movie->description = "description";
   
//     $movie->save();
    
   
//     $movie->categories()->attach(1);

//     $season = $movie->seasons()->create(
//         [
//             'season'=>'season 1',
//             'slug'=>Str::slug('season 1')
//         ]
//     );

//     $episode = $season->episodes()->create([
//         'episode_name'=>'first episode',
//         'slug'=>Str::slug('first episode')
//     ]);

//     $episode->resources()->create([
//         'resource_name'=>'Odno Klasnik',
//         'language'=>'dublaj',
//         'sources'=>'https://www.youtube.com/embed/SD2I1dBsiM4'
//     ]);
//     $episode->resources()->create([
//         'resource_name'=>'Odno Klasnik',
//         'language'=>'dublaj',
//         'sources'=>'https://www.youtube.com/embed/SD2I1dBsiM4'
//     ]);


//     $episode = $season->episodes()->create([
//         'episode_name'=>'second episode',
//         'slug'=>Str::slug('second episode')
//     ]);

//     $episode->resources()->create([
//         'resource_name'=>'Odno Klasnik',
//         'language'=>'dublaj',
//         'sources'=>'https://www.youtube.com/embed/SD2I1dBsiM4'
//     ]);
//     $episode->resources()->create([
//         'resource_name'=>'Odno Klasnik',
//         'language'=>'dublaj',
//         'sources'=>'https://www.youtube.com/embed/SD2I1dBsiM4'
//     ]);


//     $episode = $season->episodes()->create([
//         'episode_name'=>'second episode',
//         'slug'=>Str::slug('fourth episode')
//     ]);

//     $episode->resources()->create([
//         'resource_name'=>'Odno Klasnik',
//         'language'=>'dublaj',
//         'sources'=>'https://www.youtube.com/embed/SD2I1dBsiM4'
//     ]);
//     $episode->resources()->create([
//         'resource_name'=>'Odno Klasnik',
//         'language'=>'altyazi',
//         'sources'=>'https://www.youtube.com/embed/SD2I1dBsiM4'
//     ]);


    
   
    
//      return view('welcome');   
// });
