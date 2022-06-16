<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        // $data = [
        //     'title' => 'Home | Merry Riana Group',
        //     'tes' ['satu', 'dua', 'tiga']
        // ];

        return view('pages/home');
    }

    public function about()
    {
        return view('pages/about');
    }
}
