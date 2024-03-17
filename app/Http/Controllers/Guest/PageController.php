<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Train;

class PageController extends Controller
{
    public function index() {

        $today_s_trains = Train::where('orario_di_partenza', 'like', date('Y-m-d', strtotime(today())) . '%')->get();

        return view('pages.home', compact('today_s_trains'));
    }
}
