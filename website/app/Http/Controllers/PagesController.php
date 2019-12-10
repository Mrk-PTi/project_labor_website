<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = 'Welcome To Our Website!';
        return view('pages.index')->with('title', $title);
    }
	public function about(){
        $title = 'About Us';
        return view('pages.about')->with('title', $title);
    }
	public function services(){
        $data = array(
            'title' => 'Services',
            'services' => ['Web Design', 'Programming', 'Data', 'Security']
        );
        return view('pages.services')->with($data);
    }
}
?>