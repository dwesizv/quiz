<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OnlyOneController extends Controller
{
    function history() {
        $histories = \App\Models\History::orderBy('points', 'desc')->take(10)->get();
        return response()->json(['histories' => $histories]);
    }
}
