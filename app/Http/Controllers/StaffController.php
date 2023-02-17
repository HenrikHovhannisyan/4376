<?php

namespace App\Http\Controllers;

use App\Exports\StaffExport;
use App\Models\Staff;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Maatwebsite\Excel\Facades\Excel;

class StaffController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        $staff = Staff::latest()->paginate(5);

        return view('pages.dashboard.staffs.index', compact('staff'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create()
    {
        return view('pages.dashboard.staffs.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'grade' => 'required',
            'lob' => 'required',
            'shortLOB' => 'required',
            'bu' => 'required',
            'shortBU' => 'required',
            'practiceGroup' => 'required',
            'shortPG' => 'required',
            'office' => 'required',
            'rackRate' => 'required',
            'budRecovey' => 'required',
            'costRate' => 'required',
            'budgetUtil' => 'required',
            'fte' => 'required',
        ]);

        $request['minRate'] =round(($request['rackRate'] * $request['budRecovey']) / 100);
        $request['budgetUtil1'] =  round($request['budgetUtil'] / 225, 2);

        Staff::create($request->all());

        return redirect()->route('staff.index')
            ->with('success','Staff created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return void
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return void
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param int $id
     * @return void
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Staff $staff
     * @return RedirectResponse
     */
    public function destroy(Staff $staff)
    {
        $staff->delete();

        return redirect()->route('staff.index')
            ->with('success','Staff deleted successfully.');
    }



    public function export()
    {
        return Excel::download(new StaffExport, 'staff.xlsx');
    }
}
