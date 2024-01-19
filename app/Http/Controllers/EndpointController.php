<?php

namespace App\Http\Controllers;

use App\Models\Site;
use Illuminate\Http\Request;

class EndpointController extends Controller
{
    public function index(string $siteId){
        
        $site = Site::with('endpoints')->find($siteId);
        if(!$site){
            return back();
        }
        $endpoints = $site->endpoints;
        
        return view('admin.endpoints', compact('site', 'endpoints'));
    }
}
