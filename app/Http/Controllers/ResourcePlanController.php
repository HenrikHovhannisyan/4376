<?php

namespace App\Http\Controllers;

use App\Models\ResourcePlan;
use App\Http\Requests\StoreResourcePlanRequest;
use App\Http\Requests\UpdateResourcePlanRequest;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Response;

class ResourcePlanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        return view('pages.dashboard.resource-plan.index');
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
     * @param StoreResourcePlanRequest $request
     * @return void
     */
    public function store(StoreResourcePlanRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param ResourcePlan $resourcePlan
     * @return void
     */
    public function show(ResourcePlan $resourcePlan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param ResourcePlan $resourcePlan
     * @return void
     */
    public function edit(ResourcePlan $resourcePlan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateResourcePlanRequest $request
     * @param ResourcePlan $resourcePlan
     * @return void
     */
    public function update(UpdateResourcePlanRequest $request, ResourcePlan $resourcePlan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param ResourcePlan $resourcePlan
     * @return void
     */
    public function destroy(ResourcePlan $resourcePlan)
    {
        //
    }
}
