<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
 
class rekapanController extends Controller
{
    public function index()
    {
        return view("rekapan.index");
    }
}