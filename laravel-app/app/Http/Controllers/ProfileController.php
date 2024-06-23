<?php

namespace App\Http\Controllers;

use App\Http\Requests\profileRequest;
use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function __construct()
    {
        // $this->middleware('auth')->except(['show']);
        // $this->middleware('auth')->only(['show']);
    }
    //show all profile
    public function index()
    {
        $profiles = Profile::paginate(9);
        return view('profile.profiles', compact('profiles'));
    }

    //show profile par id
    public function show(Profile $profile)
    {
        return view('profile.show', compact('profile'));
    }

    //create  profile
    public function create()
    {
        return view('profile.create');
    }
    //store methode  profile
    public function store(profileRequest $request)
    {
        // $name = $request->name;
        // $email = $request->email;
        // $password = $request->password;
        // $bio = $request->bio;
        // $image = $request->image;

        //Validation des fields
        $formfields = $request->validated();
        ////////make the image in file public
        if ($request->hasFile('image')) {
            $formfields['image'] = $request->file('image')->store('profile', 'public');
        }
        //Hash de mot de passe
        $formfields['password'] = Hash::make($request->password);

        //insertion au database using profile model
        Profile::create($formfields);
        return redirect()->route('profiles.index')->with('success', 'Votre profile est bien créer');
    }
    //delete profile par id
    public function destroy(Profile $profile)
    {
        $profile->delete();
        return to_route('profiles.index')->with('success', 'Profile deleted successfully');
    }

    //edit  profile
    public function edit(Profile $profile)
    {
        return view('profile.edit', compact('profile'));
    }

    //update  profile
    public function update(profileRequest $request, Profile $profile)
    {
        $formfields = $request->validated();
        ////////make the image in file public
        if ($request->hasFile('image')) {
            $formfields['image'] = $request->file('image')->store('profile', 'public');
        }
        //Hash de mot de passe
        $formfields['password'] = Hash::make($request->password);
        $profile->fill($formfields)->save();
        return to_route('profiles.show', $profile->id)->with('success', 'Profile updated successfully');
    }
}
