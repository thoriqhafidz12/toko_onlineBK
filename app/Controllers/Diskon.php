<?php namespace App\Controllers;
 
use App\Models\DiskonModel;
 
class Diskon extends BaseController
{
    public function index()
    {
        $diskons = new DiskonModel();
        $data = $diskons->getDiskons();
        return view('diskon', compact('data'));
    }
}