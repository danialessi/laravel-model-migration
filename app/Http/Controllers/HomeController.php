<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Travel;

class HomeController extends Controller
{
    public function index() {
        $travels = Travel::all();

        $data = [
            'travels' => $travels
        ];

        return view('home', $data);
    }

    public function detail($id) {
        $travel = Travel::findOrFail($id);

        $data = [
            'travel' => $travel
        ];

        return view('detail', $data);
    }
}
