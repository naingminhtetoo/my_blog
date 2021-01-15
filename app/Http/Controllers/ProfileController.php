<?php

namespace App\Http\Controllers;

use App\Rules\MatchOldPassword;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("admin.profile");
    }

    public function updateInfo(Request $request){
        $request->validate([
            "name" => "required|max:50|min:3",
            "email" => "required|max:50|email"
        ]);
        $user = User::find(Auth::id());
        $user->name = $request->name;
        $user->email = $request->email;
        $user->update();

        return redirect()->route("profile")->with("toast","Name Changed Successful");

    }
    public function updatePhoto(Request $request){
        $request->validate([
            "photo" => "required|mimetypes:image/jpeg,image/png|file|max:2500"
        ]);

        $dir="public/profile";
        $newName = uniqid()."_photo.".$request->file("photo")->getClientOriginalExtension();
        $request->file("photo")->storeAs($dir,$newName);

        $user = User::find(Auth::id());
        $user->photo = $newName;
        $user->update();

        return redirect()->route("profile")->with("toast","Photo change Successful");
    }

    public function updatePassword(Request $request){

//        return $request;
        $request->validate([
            'current_password' => ['required', new MatchOldPassword()],
            'new_password' => ['required','min:8'],
            'new_confirm_password' => ['same:new_password'],
        ]);

        User::find(auth()->user()->id)->update(['password'=> Hash::make($request->new_password)]);
        Auth::logout();
        return redirect()->route('login');

    }
}
