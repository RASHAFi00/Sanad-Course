<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

use Illuminate\Support\Facades\DB;
use App\Models\Category;
use App\Models\Post;

class HomeController extends Controller
{

    public function index(Request $request)
    {
        // Query Builder Implementation
        // $cats = DB::table('categories')->get();

        // Model Implementation
        $cats = Category::all();

        // $posts = Post::where("id" , request("category_id"))->latest()->get();

        $posts = Post::query()
            ->when(request("categoryId") , fn($q) => $q->where("categoryId", $request->input("categoryId")))
            ->get();

        $featuredpost = Post::query()->latest()->first();


        return view("home", ["cats" => $cats, "posts" => $posts ,"featuredpost"=> $featuredpost ]);
    }


    public function store(Request $request)
    {
        //
    }


    public function show(string $id)
    {
        //
    }


    public function update(Request $request, string $id)
    {
        //
    }


    public function destroy(string $id)
    {
        //
    }
}
