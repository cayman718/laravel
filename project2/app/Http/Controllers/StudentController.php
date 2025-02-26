<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = DB::table('dog')->get();

        return view('student.index', ['data' => $data]);

        /**
         * Show the form for creating a new resource.
         */
        // public function create()
        // {
        //     // dd('cars create ok');
        //     return view('car.create');
        // }
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
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    public function excel()
    {
        echo 'hello student controller excel';
    }
    public function sayHello()
    {
        echo 'hello lin';
    }
    public function apple()
    {
        echo 'hello lin';
    }
}
