<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\CategoryMovieResource;
use App\Http\Resources\CategoryResource;
use App\Http\Resources\CategoryTvshowResource;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::paginate(12);
        return CategoryResource::collection($categories);
    }

    public function movies()
    {
        $categories = Category::paginate(12);
        return CategoryMovieResource::collection($categories);
    }

    public function tvshows()
    {
        $categories = Category::paginate(12);
        return CategoryTvshowResource::collection($categories);
    }
}
