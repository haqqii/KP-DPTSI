<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
 
class absensiController extends Controller
{
    public function index()
    {
        return view("absensi.index");
    }
}