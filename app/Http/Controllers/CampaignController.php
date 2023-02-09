<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CampaignController extends Controller
{
    public function single(){
        return view('compaign.single_compaign');
    }
    public function all(){
        return view('compaign.all_compaign');
    }
}
