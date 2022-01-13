<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AdminTeam;

class TeamController extends Controller
{
    public function index()
    {
        $teams = AdminTeam::get();
        return view('team',compact('teams'));
    }
}
