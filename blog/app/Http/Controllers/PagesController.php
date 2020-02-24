<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function index(){
        //return view('pages.index', compact('title'));
        $data = array(
            'tagline' => '1mn firebrands | an African renaissance',
            'title' => 'tumbula tribe'
        );
        return view('pages.index')->with($data);
    
    }

    public function about(){
        return view('pages.about');
    }

    //iceberg
    public function kabubu(){
        $data = array(
            'tagline' => 'a new African narrative',
            'title' => 'kaBuBu',
            'bottomlines' => ['products','services','systems']
        );
        return view('pages.kabubu')->with($data);
    }
    public function kb(){
        $data = array(
            'tagline' => 'Cape2Cairo Caravan Show',
            'title' => 'kaBinika',
            'bottomlines' => ['roots','vision','mission','dream']
        );
        return view('pages.kb')->with($data);
    }
    public function kakeeka(){
        $data = array(
            'tagline' => 'a new species of African',
            'title' => 'kakeeka',
            'bottomlines' => ['head','heart','hands', 'heel','homeland']
        );
        return view('pages.kakeeka')->with($data);
    }

    //ABCDE
    public function architecture(){
        return view('pages.architecture');
    }
    public function brochure(){
        return view('pages.brochure');
    }
    public function catalogue(){
        return view('pages.catalogue');
    }
    public function directory(){
        return view('pages.directory');
    }
    public function engagement(){
        return view('pages.engagement');
    }

    //brand
    public function products(){
        return view('pages.products');
    }
    public function services(){
        return view('pages.services');
    }
    public function systems(){
        return view('pages.systems');
    }

    //story
    public function roots(){
        return view('pages.roots');
    }
    public function vision(){
        return view('pages.vision');
    }
    public function mission(){
        return view('pages.mission');
    }
    public function dream(){
        return view('pages.dream');
    }
}
