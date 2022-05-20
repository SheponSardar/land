<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function clientdashboard(){

        return view('backend.layouts.client.clientdash');
    }
}
