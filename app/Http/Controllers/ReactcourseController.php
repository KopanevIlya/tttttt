<?php

namespace App\Http\Controllers;

use App\Models\Reactcourse;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;


class ReactcourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function base(): Response
    {

        return Inertia::render('Course/ReactVue', [
            'reactcourse' => Reactcourse::with('user:id,name')->latest()->get(),
        ]);
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
    public function show(Reactcourse $reactcourse)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Reactcourse $reactcourse)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Reactcourse $reactcourse)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Reactcourse $reactcourse)
    {
        //
    }
}
