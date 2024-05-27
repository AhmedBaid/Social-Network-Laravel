<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    //show all profile
    public function index()
    {
        $profiles = Profile::paginate(9);
        return view('profile.profiles', compact('profiles'));
    }

    //show profile par id
    public function show(Profile $profile)
    {
        // $id = (int)$Request->id;
        // $profile = Profile::findOrfail($id);
        return view('profile.show', compact('profile'));
    }

    //create  profile
    public function create()
    {
        return view('profile.create');
    }
    public function store(Request $request)
    {
        $name = $request->name;
        $email = $request->email;
        $password = $request->password;
        $bio = $request->bio;

        //Validation des fields
        $formfields = $request->validate([
            'name' => 'required|min:3|max:25',
            'email' => 'required|email|unique:profiles',
            'password' => 'required|min:4|max:25|confirmed',
            'bio' => 'required',
        ]);

        //Hash de mot de passe
        $formfields['password'] = Hash::make($request->password);

        //insertion au database using profile model
        Profile::create($formfields);
        return redirect()->route('profiles.index')->with('success','Votre profile est bien créer');
    }
}
