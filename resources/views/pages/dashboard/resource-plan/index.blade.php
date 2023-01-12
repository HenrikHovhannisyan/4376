@extends('layouts.app')
@section('title')
    {{ __('Resource Plan') }}
@endsection

@section('content')
    @include('pages.dashboard.resource-plan.Insert-modal')
    <div class="container-fluid">
        <div class="row">
            <div class="col-8 col-md-10 mt-3 mb-3 mx-auto">
                <div class="row">
                    <div class="col-12 col-md-4">
                        <p class="phases_title">Resource Plan</p>
                        <div class="d-flex justify-content-between align-items-baseline">
                            <p>XYZ Industries (Project Abacus)</p>
                            <button class="btn btn-secondary">Apply job parameters</button>
                        </div>
                        <div class="d-flex justify-content-between align-items-baseline">
                            <table class="table table-bordered">
                                <tbody>
                                <tr>
                                    <th>Start date</th>
                                    <td class="text-center">7/1/2019</td>
                                </tr>
                                <tr>
                                    <th>Basis</th>
                                    <td class="text-center">Hours per week</td>
                                </tr>
                                <tr>
                                    <th>Weeks</th>
                                    <td class="text-center">52</td>
                                </tr>
                                <tr>
                                    <th>Recovery</th>
                                    <td class="text-center">95%</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-12 col-md-8">
                        <p class="phases_title">Totals</p>
                        <div class="table-responsive">
                            <table class="table table-bordered" style="width:100%">
                                <thead>
                                <tr>
                                    <th>Production at rack</th>
                                    <th>Rate</th>
                                    <th>Hours</th>
                                    <th>Revenue</th>
                                    <th>Time Cost</th>
                                    <th>Margin $</th>
                                    <th>Margin</th>
                                    <th>Recovery</th>
                                    <th>Budget Recovery</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>58.000</td>
                                    <td>116</td>
                                    <td>468</td>
                                    <td>54.520</td>
                                    <td>38.945</td>
                                    <td>15.575</td>
                                    <td>29%</td>
                                    <td>94%</td>
                                    <td>81%</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="w-100 bg-secondary py-3">
                        <div class="container-fluid">
                            <button type="button" class="btn btn-success mb-1 mt-1" data-bs-toggle="modal" data-bs-target="#exampleModalStaff">
                                <i class="fa-sharp fa-solid fa-circle-plus"></i>
                                Insert
                            </button>
                            <button class="btn btn-person_details mb-1 mt-1" onclick="person_details()">
                                <i class="fa-sharp fa-solid fa-eye" id="eye_pd"></i>
                                Person details
                            </button>
                            <button class="btn btn-financials mb-1 mt-1" onclick="financials()">
                                <i class="fa-sharp fa-solid fa-eye" id="eye_f"></i>
                                Financials
                            </button>
                            <button class="btn btn-hours_per_week mb-1 mt-1" onclick="hours_per_week()">
                                <i class="fa-sharp fa-solid fa-eye" id="eye_hw"></i>
                                Hours per week
                            </button>
                            <button class="btn btn-revenue mb-1 mt-1" onclick="revenue()">
                                <i class="fa-sharp fa-solid fa-eye" id="eye_r"></i>
                                Revenue
                            </button>
                            <button class="btn btn-standard_cost mb-1 mt-1" onclick="standard_cost()">
                                <i class="fa-sharp fa-solid fa-eye" id="eye_sc"></i>
                                Standard cost
                            </button>
                            <button class="btn btn-actual_hours mb-1 mt-1" onclick="actual_hours()">
                                <i class="fa-sharp fa-solid fa-eye" id="eye_ah"></i>
                                Cost @ actual hours
                            </button>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table id="resource-plan_table" class="table table-bordered" style="width:100%">
                            <thead>
                            <tr>
                                <th>
                                    <i class="fa-solid fa-trash"></i>
                                </th>
                                <th style="min-width: 150px">Phase | Task</th>
                                <th style="min-width: 200px">Person</th>
                                {{-- Start Person details --}}
                                <span>
                                    <th class="person_details">Band</th>
                                    <th class="person_details">LOB</th>
                                    <th class="person_details">BU</th>
                                    <th class="person_details">PG</th>
                                    <th class="person_details">Office</th>
                                    <th class="person_details">Rack Rate</th>
                                    <th class="person_details">Min. Rate</th>
                                    <th class="person_details">Client Rate</th>
                                    <th class="person_details">Rate override</th>
                                    <th class="person_details">Cost Rate</th>
                                    <th class="person_details">FTE</th>
                                    <th class="person_details">Bud. Util</th>
                                </span>

                                {{-- Start Financials --}}
                                <span>
                                    <th class="financials">Production @ rack</th>
                                    <th class="financials">Rate</th>
                                    <th class="financials">Total Hours</th>
                                    <th class="financials">Revenue</th>
                                    <th class="financials">Cost</th>
                                    <th class="financials">Margin ($)</th>
                                    <th class="financials">Margin (%)</th>
                                    <th class="financials">Recovery</th>
                                    <th class="financials">Bud. Recovery</th>
                                </span>

                                {{-- Start Hours per week --}}
                                <span>
                                    @for($i = 1; $i <= 30; $i++)
                                        <th class="hours_per_week">{{$i}} Jul 19</th>
                                    @endfor
                                </span>

                                {{-- Start Revenue --}}
                                <span>
                                    @for($i = 1; $i <= 30; $i++)
                                        <th class="revenue">{{$i}} Jul 19</th>
                                    @endfor
                                </span>

                                {{-- Start Standard cost --}}
                                <span>
                                    @for($i = 1; $i <= 30; $i++)
                                        <th class="standard_cost">{{$i}} Jul 19</th>
                                    @endfor
                                </span>

                                {{-- Start Cost @ actual hours --}}
                                <span>
                                    @for($i = 1; $i <= 30; $i++)
                                        <th class="actual_hours_cost">{{$i}} Jul 19</th>
                                    @endfor
                                </span>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>
                                    <button class="btn btn-sm btn-outline-danger">
                                        <i class="fa-sharp fa-solid fa-xmark"></i>
                                    </button>
                                </td>
                                <td style="min-width: 150px">Feasibility</td>
                                <td style="min-width: 200px">10032 | Odell Norris</td>
                                {{-- Person details --}}
                                <span>
                                    <td class="person_details person_details_td">SASS</td>
                                    <td class="person_details person_details_td">ABC</td>
                                    <td class="person_details person_details_td">AB</td>
                                    <td class="person_details person_details_td">ManSYD</td>
                                    <td class="person_details person_details_td">SYD</td>
                                    <td class="person_details person_details_td">110</td>
                                    <td class="person_details person_details_td">90</td>
                                    <td class="person_details person_details_td"></td>
                                    <td class="person_details person_details_td">50</td>
                                    <td class="person_details person_details_td"></td>
                                    <td class="person_details person_details_td"></td>
                                    <td class="person_details person_details_td"></td>
                                </span>

                                {{-- Financials --}}
                                <span>
                                    <td class="financials financials_td">47.650</td>
                                    <td class="financials financials_td">110</td>
                                    <td class="financials financials_td">390</td>
                                    <td class="financials financials_td">42.708</td>
                                    <td class="financials financials_td"></td>
                                    <td class="financials financials_td">42.708</td>
                                    <td class="financials financials_td">100%</td>
                                    <td class="financials financials_td">90%</td>
                                    <td class="financials financials_td"></td>
                                </span>

                                {{-- Hours per week --}}
                                <span>
                                    @for($i = 1; $i <= 6; $i++)
                                        <td class="hours_per_week hours_per_week_td">40</td>
                                        <td class="hours_per_week hours_per_week_td">40</td>
                                        <td class="hours_per_week hours_per_week_td">20</td>
                                        <td class="hours_per_week hours_per_week_td">10</td>
                                        <td class="hours_per_week hours_per_week_td"></td>
                                    @endfor
                                </span>

                                {{-- Revenue --}}
                                <span>
                                    @for($i = 1; $i <= 6; $i++)
                                        <td class="revenue revenue_td">0</td>
                                        <td class="revenue revenue_td">4.180</td>
                                        <td class="revenue revenue_td">2.090</td>
                                        <td class="revenue revenue_td">1.045</td>
                                        <td class="revenue revenue_td">0</td>
                                    @endfor
                                </span>

                                {{-- Standard cost --}}
                                <span>
                                    @for($i = 1; $i <= 30; $i++)
                                        <td class="standard_cost standard_cost_td"></td>
                                    @endfor
                                </span>

                                {{-- Cost @ actual hours --}}
                                <span>
                                    @for($i = 1; $i <= 30; $i++)
                                        <td class="actual_hours_cost actual_hours_cost_td"></td>
                                    @endfor
                                </span>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
