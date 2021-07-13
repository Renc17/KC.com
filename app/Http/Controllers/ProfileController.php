<?php

namespace App\Http\Controllers;

use App\User;
use Intervention\Image\Facades\Image;

class ProfileController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(User $user)
    {
        $this->authorize('view', $user->profile);
        return view('profiles.index', compact('user'));
    }

    public function edit(User $user){
        return view('profiles.edit', compact('user'));
    }

    public function update(User $user){

        $data = request()->validate([
            'image' => '',
            'cel' => 'required',
            'call_hours' => ''
        ]);

        if (request('image')){
            $imagePath =  request('image')->store('profile', 'public');

            $image = Image::make(public_path("storage/$imagePath"))->fit(500,500);
            $image->save();

            $imageArray = ['image' => $imagePath];
        }

        $user->profile()->update(array_merge(
            $data,
            $imageArray ?? []
        ));

        return redirect("/profile/$user->id");
    }

    public function destroy(User $user){
        $user->delete();
        return redirect("/");
    }
}
