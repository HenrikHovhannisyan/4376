@extends('layouts.app')
@section('title')
    {{ __('Resource Profile') }}
@endsection

@section('content')
    @include('pages.dashboard.resource-plan.Insert-modal')
    <div class="container-fluid">
        <div class="row">
            <div class="col-8 col-md-10 mt-3 mb-3 mx-auto">
                <div class="row">
                    <div class="col-12 col-md-6">
                        <p class="phases_title">Resource Profile</p>
                        <div class="d-flex justify-content-between align-items-baseline">
                            <p>Timeline showing resource demand and over/under use of resources.</p>
                        </div>
                        <div class="d-flex justify-content-between align-items-baseline">
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th></th>
                                    <th>Total Hours</th>
                                    <th>Partner FTE</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th>All staff</th>
                                    <td class="text-center">468</td>
                                    <td class="text-center"></td>
                                </tr>
                                <tr>
                                    <th>Partner</th>
                                    <td class="text-center"></td>
                                    <td class="text-center"></td>
                                </tr>
                                <tr>
                                    <th>Leverage (hours)</th>
                                    <td class="text-center"></td>
                                    <td class="text-center"></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="table-responsive">
                        <table id="resource-plan_table" class="table table-bordered" style="width:100%">
                            <thead>
                            <tr>
                                <th>Resource</th>
                                <th style="">Level</th>
                                <th style="">Person Total Hours</th>
                                <th style="">Partner % Annual (rough)</th>
                                <th style="">Average</th>
                                <th style="">Margin</th>
                                <th style="">Avg Hours per period</th>

                                <span>
                                    @for($i = 1; $i <= 31; $i++)
                                        <th style="writing-mode: vertical-rl;text-orientation: mixed;transform: rotate(-180deg);">{{$i}}/12/2022</th>
                                    @endfor
                                </span>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td style="min-width: 200px">10032 | Odell Norris</td>
                                <td style=""></td>
                                <td style="">116</td>
                                <td style=""></td>
                                <td style="">80</td>
                                <td style="">38%</td>
                                <td style="">23</td>

                                <span>
                                        <td style="">16</td>
                                        <td style="">40</td>
                                        <td style="">40</td>
                                        <td style="">16</td>
                                        <td style="">4</td>
                                    @for($i = 1; $i <= 26; $i++)
                                        <td style="">-</td>
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
