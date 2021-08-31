<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
class CategoriesController extends Controller
{
    //
    public function index(){
        //return 'Hola desde el controlador de las categorias';
        $categories = Category::all();//select * from 'categories';
        return view('welcome');
    }
}
