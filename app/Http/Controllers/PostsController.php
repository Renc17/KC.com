<?php

namespace App\Http\Controllers;


use App\Post;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class PostsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create(Post $post)
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {

        $data = request()->validate([
            'title' => 'required',
            'description' => 'required',
            'bedrooms' => 'required',
            'baths' => 'required',
            'floors' => 'required',
            'parking' => 'required',
            'sqrm' => 'required',
            'price' => 'required',
            'full_price' => 'required',
            'road' => 'required',
            'no' => 'required',
            'city' => 'required',
            'relative_address' => 'required',
            'postal_code' => 'required',
            'image' => ['required|max=10', 'image'],
            'utilities' => 'required'
        ]);

        //dd(request('image'));
        $imagePathArray = array();
        foreach (request('image') as $image){
            $imagePath = $image->store('uploads', 'public');
            array_push($imagePathArray, $imagePath);
            $image = Image::make(public_path("storage/$imagePath"))->fit(1200,1200);
            $image->save();
        }

        auth()->user()->posts()->create(array_merge(
            $data,
            ['utilities' => implode(",", $request->input('utilities'))],
            ['image' => implode(",", $imagePathArray)]
        ));
        return redirect('/profile/' . auth()->user()->id);
    }

    public function edit(Post $post){
        return view('posts.edit', compact('post'));
    }

    public function images(Post $post){
        return view('posts.images', compact('post'));
    }

    public function update(Post $post){

        $data = request()->validate([
            //'image' => ['', 'image'],
            'title' => '',
            'description' => '',
            'bedrooms' => '',
            'baths' => '',
            'floors' => '',
            'parking' => '',
            'sqrm' => '',
            'price' => '',
            'full_price' => '',
            'road' => '',
            'no' => '',
            'city' => '',
            'relative_address' => '',
            'postal_code' => '',
            'utilities' => ''
        ]);

        if (request('image')){
            $imagePathArray = array();
            foreach (request('image') as $image){
                $imagePath = $image->store('uploads', 'public');
                array_push($imagePathArray, $imagePath);
                $image = Image::make(public_path("storage/$imagePath"))->fit(1200,1200);
                $image->save();
            }
            $imageArray = ['image' => implode(",", $imagePathArray)];
        }

        if (request('utilities')){
            $utilitiesArray = ['utilities' => implode(",", request('utilities'))];
        }

        $post->update(array_merge(
            $data,
            $utilitiesArray ?? [],
            $imageArray ?? []
        ));

        return redirect('/profile/' . auth()->user()->id);
    }

    public function destroy(Post $post){

        try {
            $post->delete();
        } catch (\Exception $e) {

        }
        return redirect('/profile/' . auth()->user()->id);
    }
}
