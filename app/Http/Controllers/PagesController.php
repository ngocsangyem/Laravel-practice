<?php

namespace App\Http\Controllers;

class PagesController extends Controller
{
    public function index()
    {
        $title = 'Welcome to index page';
        // return view('pages.index', compact('title'));
        return view('pages.index')->with('title', $title);
    }
    public function about()
    {
        $title = 'Welcome to about page';
        return view('pages.about')->with('title', $title);
    }
    public function services()
    {
        $data = array(
            'title' => 'Welcome to services page',
            'services' => ['Web Design', 'Front-end', 'Back-end', 'SEO'],
        );
        return view('pages.services')->with($data);
    }
}
