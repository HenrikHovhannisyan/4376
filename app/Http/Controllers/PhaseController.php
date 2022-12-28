<?php

namespace App\Http\Controllers;

use App\Models\Phase;
use App\Http\Requests\StorePhaseRequest;
use App\Http\Requests\UpdatePhaseRequest;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Response;

class PhaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        return view('pages.dashboard.phases.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return void
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StorePhaseRequest $request
     * @return void
     */
    public function store(StorePhaseRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param Phase $phase
     * @return void
     */
    public function show(Phase $phase)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Phase $phase
     * @return void
     */
    public function edit(Phase $phase)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdatePhaseRequest $request
     * @param Phase $phase
     * @return void
     */
    public function update(UpdatePhaseRequest $request, Phase $phase)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Phase $phase
     * @return void
     */
    public function destroy(Phase $phase)
    {
        //
    }
}
