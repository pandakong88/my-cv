<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use App\Models\Service;
use App\Models\Certificate;
use Illuminate\Http\Request;
use App\Models\PersonalProfile;

class MainController extends Controller
{
    public function show()
    {
        $profile = PersonalProfile::first(); // karena data tunggal
        $service = Service::all();
        $skill = Skill::all();
        $certificate = Certificate::all();
        // return $profile;
        return view('index', compact('profile','service','skill','certificate'));
    }
}
