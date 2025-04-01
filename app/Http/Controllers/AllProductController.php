<?php 
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AllProductController extends Controller
{
    public function index()
    {
        return view('pages.allproduct');
    }
}
?>