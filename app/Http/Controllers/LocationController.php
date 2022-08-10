<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LocationController extends Controller
{
    //
    public $backUrl = 'location';
    public function index()
    {
        $ip = $_SERVER['REMOTE_ADDR'];
        $details = json_decode(file_get_contents("http://ipinfo.io/{$ip}/json"));
        // dd($details);
        return view($this->backUrl . '.index', [
            'detailss' => $details]);
    }
}
