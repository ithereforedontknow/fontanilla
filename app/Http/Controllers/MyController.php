<?php

namespace App\Http\Controllers;

use App\Models\MyModel;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class MyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('index');
    }

    public function about()
    {
        return view('about');
    }
    public function contact()
    {
        return view('contact');
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(MyModel $myModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(MyModel $myModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, MyModel $myModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(MyModel $myModel)
    {
        //
    }
}
