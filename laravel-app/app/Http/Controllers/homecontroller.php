<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homecontroller extends Controller
{
    public function index(Request $request){
        $users=[
            ['id' => 1, 'nom' => 'Baid', 'metier' => 'Expert tecknique'],
            ['id' => 2, 'nom' => 'saidi', 'metier' => 'Directeur'],
            ['id' => 3, 'nom' => 'ba3ali', 'metier' => 'Jardinier'],
        ];
        
        return view('home',compact('users'));
    }
}
