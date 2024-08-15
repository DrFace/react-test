<?php

namespace App\Http\Controllers\Catagories;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function index()
    {
        return view('catagories.index');
    }
    public function create()
    {
        return view('catagories.create');
    }
    public function store(Request $request)
    {
        dd($request->all());
    }
    public function show($id)
    {
        //
    }
    public function destroy (string $id)
    {
        //
    }

}
