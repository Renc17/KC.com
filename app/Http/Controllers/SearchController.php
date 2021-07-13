<?php

namespace App\Http\Controllers;

use App\Post;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
    protected $all_post;

    public function index(Request $request){
        $all_posts = DB::table('posts')
            ->where('city', '=', request('zona'))
            ->pluck('posts.id');

        $posts = DB::table('posts')
            ->whereIn('id', $all_posts)
            ->latest()
            ->paginate(10);

        //dd($posts);
        return view('search.index', compact('posts'));
    }


    public function show(Post $post){
        return view('search.show', compact('post'));
    }

    public function images(Post $post){
        return view('search.images', compact('post'));
    }

    public function filter(){
        //dd(request('price_from'));
        dd(request());
        $var = $this->all_post
            ->where(['price', '>', request('price_from')])
            ->pluck('posts.id');

        dd($var);
        $posts = DB::table('posts')
            ->whereIn('id', $var)
            ->latest()
            ->paginate(10);
        return view('search.index', compact('posts'));
    }
    /*public function autocomplete(Request $request)
    {
        $data = Post::select("")
            ->where("name","LIKE","%{$request->query}%")
            ->get();

        return response()->json($data);
    }*/

}
