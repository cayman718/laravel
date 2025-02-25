<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class  StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        // 抓全部資料
        $data = [
            [
                'id' => 1,
                'name' => '台北店',
                'rank' => 'a1'
            ],
            [
                'id' => 2,
                'name' => '台中店',
                'rank' => 'a2'
            ],
            [
                'id' => 3,
                'name' => '高雄店',
                'rank' => 'a3'
            ],
        ];


        // dd('hello cars index');
        return view('student.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // dd('cars create ok');
        return view('car.create');
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
    public  function excel()
    {
        echo 'hello student controller excel';
    }
    public function sayHello()
    {
        return 'hello lin';
    }
}