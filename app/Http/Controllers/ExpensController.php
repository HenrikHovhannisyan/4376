<?php

namespace App\Http\Controllers;

use App\Exports\ExpensesExport;
use App\Imports\ExpensesImport;
use App\Models\Expens;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Maatwebsite\Excel\Facades\Excel;

class ExpensController extends Controller
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

        $expenses = Expens::latest()->paginate(5);

        return view('pages.dashboard.expenses.index', compact('expenses'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create()
    {
        return view('pages.dashboard.expenses.index');
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
            'phase' => 'required',
            'category' => 'required',
            'description' => 'required',
            'qty' => 'required|numeric',
            'costPerUnit' => 'required|numeric',
            'recoveryPercent' => 'required|numeric',
        ]);

        $request['cost'] = $request['qty'] * $request['costPerUnit'];
        $request['recovery'] = $request['cost'] * $request['recoveryPercent'] / 100;

        Expens::create($request->all());

        return redirect()->route('expenses.index')
            ->with('success','Expenses created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param Expens $expens
     * @return void
     */
    public function show(Expens $expens)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Expens $expens
     * @return void
     */
    public function edit(Expens $expens)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Expens $expens
     * @return void
     */
    public function update(Request $request, Expens $expens)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param $id
     * @return RedirectResponse
     */
    public function destroy($id)
    {
        Expens::find($id)->delete();

        return redirect()->route('expenses.index')
            ->with('success','Expenses deleted successfully.');
    }

    public function uploadExpenses(Request $request)
    {
        Excel::import(new ExpensesImport, $request->file);

        return redirect()->route('expenses.index')->with('success', 'Expenses Imported Successfully');
    }

    public function export()
    {
        return Excel::download(new ExpensesExport, 'expenses.xlsx');
    }
}
