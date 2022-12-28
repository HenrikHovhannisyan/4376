@extends('layouts.app')
@section('title')
    {{ __('phases') }}
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
{{--            @include('common.sidebar')--}}
            <div class="col-8 col-md-10 mt-3 mb-3 mx-auto">
                <div class="row">
                    <div class="col-12 col-md-4">
                        <p class="phases_title">Phases</p>
                        <h2>XYZ Industries (Project Abacus)</h2>
                    </div>
                    <div class="col-12 col-md-8">
                        <p class="phases_title">Totals</p>
                        <div class="table-responsive">
                            <table id="phases_table_totals" class="table table-bordered" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Days</th>
                                        <th>Revenue</th>
                                        <th>Cost</th>
                                        <th>Expenses</th>
                                        <th>Expense Recovery</th>
                                        <th>Margin</th>
                                        <th>Margin %</th>
                                        <th>Production @ rack</th>
                                        <th>Recovery %</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>468</td>
                                        <td>54.420</td>
                                        <td>38.945</td>
                                        <td>1.700</td>
                                        <td>1.700</td>
                                        <td>15.575</td>
                                        <td>29%</td>
                                        <td>58.000</td>
                                        <td>94%</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="w-100 bg-secondary py-3">
                        <div class="container-fluid">
                            <button class="btn btn-success">
                                <i class="fa-sharp fa-solid fa-circle-plus"></i>
                                Insert
                            </button>
                            <button class="btn btn-primary">
                                <i class="fa-solid fa-floppy-disk"></i>
                                Save
                            </button>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table id="phases_table" class="table table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th>
                                        <i class="fa-solid fa-trash"></i>
                                    </th>
                                    <th>Phase No</th>
                                    <th>Phase</th>
                                    <th>Hours</th>
                                    <th>Revenue</th>
                                    <th>Cost</th>
                                    <th>Expenses</th>
                                    <th>Expense Recovery</th>
                                    <th>Margin</th>
                                    <th>Margin %</th>
                                    <th>Production @ rack</th>
                                    <th>Recovery (time) %</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <button class="btn btn-sm btn-outline-danger">
                                            <i class="fa-sharp fa-solid fa-xmark"></i>
                                        </button>
                                    </td>
                                    <td>1</td>
                                    <td>Strategy</td>
                                    <td>343</td>
                                    <td>36.545</td>
                                    <td>24.370</td>
                                    <td>800</td>
                                    <td>800</td>
                                    <td>12.175</td>
                                    <td>33%</td>
                                    <td>40.025</td>
                                    <td>91%</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
