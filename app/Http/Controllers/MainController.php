<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use App\Models\Service;
use App\Models\Portfolio;
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
        $portfolios = Portfolio::latest()->get();
        // return $portfolios;
        return view('index', compact(
            'profile',
            'service',
            'skill',
            'certificate',
            'portfolios',
        ));
    }

     public function portfolio_detail($id)
    {
        $profile = PersonalProfile::first(); // karena data tunggal
        $portfolio_detail = Portfolio::findOrFail($id);
        // return $portfolios;
        // Split berdasarkan <p> dan bersihkan tag
        $paragraphs = preg_split('/<\/p>\s*<p>/', $portfolio_detail->detailed_description);

        // Bersihkan dan tambahkan kembali <p> ke masing-masing paragraf
        $paragraphs = array_map(function($para) {
            $para = trim($para, '<p>');
            $para = trim($para, '</p>');
            return '<p>' . $para . '</p>';
        }, $paragraphs);

        // Cek jika hanya satu paragraf
        if (count($paragraphs) === 1) {
            $firstHalf = $paragraphs;
            $secondHalf = [];
        } else {
            $mid = ceil(count($paragraphs) / 2);
            $firstHalf = array_slice($paragraphs, 0, $mid);
            $secondHalf = array_slice($paragraphs, $mid);
        }
        return view('portfolio_detail', compact(
            'profile',
            'portfolio_detail',
            'firstHalf',
             'secondHalf'
        ));
    }
}
