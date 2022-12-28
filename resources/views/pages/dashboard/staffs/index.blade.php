@extends('layouts.app')
@section('title')
    {{ __('Tasks') }}
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
{{--            @include('common.sidebar')--}}
            @include('pages.dashboard.staffs.Insert-modal')
            <div class="col-8 col-md-10 mt-3 mb-3 mx-auto">
                <div class="row">
                    <div class="col-12 col-md-4">
                        <p class="phases_title">Staff</p>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="w-100 bg-secondary py-3">
                        <div class="container-fluid">
                            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModalStaff">
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
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>ID|Name</th>
                                    <th>Grade</th>
                                    <th>LOB</th>
                                    <th>ShortLOB</th>
                                    <th>BU</th>
                                    <th>ShortBU</th>
                                    <th>Practice Group</th>
                                    <th>ShortPG</th>
                                    <th>Office</th>
                                    <th>Rack Rate</th>
                                    <th>Bud. Recovey</th>
                                    <th>Min. Rate</th>
                                    <th>Cost rate</th>
                                    <th>Budget util</th>
                                    <th>FTE</th>
                                    <th>Budget util</th>
                                    <th>Helper1</th>
                                    <th>Helper2</th>
                                    <th>Helper3</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <button class="btn btn-sm btn-outline-danger">
                                            <i class="fa-sharp fa-solid fa-xmark"></i>
                                        </button>
                                    </td>
                                    <td>10001</td>
                                    <td>Kiana Holman</td>
                                    <td>10001 | Kiana Holman</td>
                                    <td>ASSC</td>
                                    <td>ABC Line</td>
                                    <td>ABC</td>
                                    <td>ABC unit</td>
                                    <td>AB</td>
                                    <td>22001 - Management - MLN</td>
                                    <td>ManMLN</td>
                                    <td>MLN</td>
                                    <td>360</td>
                                    <td>81%</td>
                                    <td>290</td>
                                    <td>300</td>
                                    <td>207</td>
                                    <td>0.75</td>
                                    <td>0.92</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>10001 | Kiana Holman</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
