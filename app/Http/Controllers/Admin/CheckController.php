<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Endpoint;
use Illuminate\Http\Request;

class CheckController extends Controller
{
    public function index(Endpoint $endpoint){

        $site = $endpoint->site;
        $this->authorize('ownerChecks', $endpoint);

        $checks = $endpoint->checks()->paginate();
        return view ('admin.endpoints.logs.index', compact('checks'));
    }
}
