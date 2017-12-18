<?php

namespace App\Http\Controllers;
use App\Category;
use Illuminate\Http\Request;

class TicketsController extends Controller
{
    public function create(){
        $categories = Category::all();
        return view('tickets.create',compact('categories'));
    }

}
