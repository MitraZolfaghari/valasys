<?php

namespace App\Http\Controllers;

use App\Academy;
use App\Http\Requests\AcademyStore;
use App\Http\Requests\AcademyUpdate;
use Illuminate\Http\Request;

class AcademyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $academies = Academy::all();
        return view('admin.academy.index', compact('academies'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.academy.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AcademyStore $request)
    {
        Academy::create($request->all());
        return redirect()->route('academies.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Academy  $academy
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $academy = Academy::findOrFail($id);
        return view('admin.academy.show', compact('academy'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Academy  $academy
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $academy = Academy::findOrFail($id);
        return view('admin.academy.edit', compact('academy'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Academy  $academy
     * @return \Illuminate\Http\Response
     */
    public function update(AcademyUpdate $request, $id)
    {
        $academy = Academy::findOrFail($id);
        $academy->update($request->all());
        return  redirect()->route('academies.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Academy  $academy
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $academy = Academy::findOrFail($id);
        $academy->delete();
        return redirect()->route('academies.index');
    }
}
