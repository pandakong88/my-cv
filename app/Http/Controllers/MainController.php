<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PersonalProfile;

class MainController extends Controller
{
    public function show()
    {
        $profile = PersonalProfile::first(); // karena data tunggal
        // return $profile;
        return view('index', compact('profile'));
    }
}
