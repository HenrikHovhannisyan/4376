@extends('layouts.app')
@section('title')
    {{ __('Tasks') }}
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
{{--            @include('common.sidebar')--}}
            <div class="col-8 col-md-10 mt-3 mb-3 mx-auto">
                <div class="row">
                    <div class="col-12 col-md-4">
                        <p class="phases_title">Tasks</p>
                        <h2>XYZ Industries (Project Abacus)</h2>
                    </div>
                    <div class="col-12 col-md-8">
                        <p class="phases_title">Totals</p>
                        <div class="table-responsive">
                            <table id="tasks_table_totals" class="table table-bordered" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Days</th>
                                        <th>Revenue</th>
                                        <th>Cost</th>
                                        <th>Margin</th>
                                        <th>Margin %</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>468</td>
                                        <td>54.420</td>
                                        <td>38.945</td>
                                        <td>15.575</td>
                                        <td>29%</td>
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
                        <table id="tasks_table" class="table table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th>
                                        <i class="fa-solid fa-trash"></i>
                                    </th>
                                    <th>Phase ID</th>
                                    <th>Task ID</th>
                                    <th>Phase</th>
                                    <th>Task</th>
                                    <th>Optional</th>
                                    <th>Phase | Task</th>
                                    <th>Hours</th>
                                    <th>Revenue</th>
                                    <th>Cost</th>
                                    <th>Margin</th>
                                    <th>Margin %</th>
                                    <th>Production @ rack</th>
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
                                    <td>1_1</td>
                                    <td>Strategy</td>
                                    <td>Draft</td>
                                    <td></td>
                                    <td>1_1 Strategy | Draft</td>
                                    <td>125</td>
                                    <td>14.320</td>
                                    <td>9.370</td>
                                    <td>4950</td>
                                    <td>35%</td>
                                    <td>17.800</td>
                                </tr>
                                <tr>
                                    <td>
                                        <button class="btn btn-sm btn-outline-danger">
                                            <i class="fa-sharp fa-solid fa-xmark"></i>
                                        </button>
                                    </td>
                                    <td>2</td>
                                    <td>3_1</td>
                                    <td>Build</td>
                                    <td>Task 3A</td>
                                    <td>Yes</td>
                                    <td>3_1 Build | Task 3A</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
