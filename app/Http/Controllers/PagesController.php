<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        //'$title' variabele wordt gedeclareerd.
        $title = 'Welcome to laravelllll...';
        //Returnt pages.index waarbij de titel dynamisch wordt ingeladen vanuit de controller
        return view('pages.index')->with('title', $title);
    }

    public function about(){
        $title = 'About usssss';
        return view('pages.about')->with('title', $title);
    }

    public function services(){
        $data = array(
            'title' => 'Services',
            'services' => ['Webdesign', 'SEO', 'Programming']
        );
        return view('pages.services')->with($data);
    }

}