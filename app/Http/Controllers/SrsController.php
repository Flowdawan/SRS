<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SrsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Index
     *
     * @return response()
     */
    public function index()
    {
        return view('srs_creator');
    }

    /**
     * @return response()
     */
    public function store_name()
    {
        dump("Gespeichert name");
        die();
    }

    /**
     * @return response()
     */
    public function store_could()
    {
        dump("Gespeichert could");
        die();
    }

    /**
     * @return response()
     */
    public function store_must()
    {
        dump("Gespeichert must");
        die();
    }
    
    /**
     * @return response()
     */
    public function store_description()
    {
        dump("Gespeichert description");
        die();
    }

    /**
     * @return response()
     */
    public function store_scope()
    {
        dump("Gespeichert scope");
        die();
    }

    /**
     * @return response()
     */
    public function store_should()
    {
        dump("Gespeichert should");
        die();
    }

    /**
     * @return response()
     */
    public function store_team()
    {
        dump("Gespeichert team");
        die();
    }

    /**
     * @return response()
     */
    public function store_wont()
    {
        dump("Gespeichert wont");
        die();
    }
}
