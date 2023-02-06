@extends('layouts.app')
@section('title')
    {{ __('Staff') }}
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            {{--            @include('common.sidebar')--}}
            @include('pages.dashboard.staffs.Insert-modal')
            <div class="col-8 col-md-10 mt-3 mb-3 mx-auto">
                @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                @endif
                <div class="row">
                    <div class="col-12 col-md-4">
                        <p class="phases_title">Staff</p>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="w-100 bg-secondary py-3">
                        <div class="container-fluid">
                            <button type="button" class="btn btn-success m-1" data-bs-toggle="modal"
                                    data-bs-target="#exampleModalStaff">
                                <i class="fa-sharp fa-solid fa-circle-plus"></i>
                                Insert
                            </button>
                            <button type="button" class="btn btn-warning m-1" data-bs-toggle="modal"
                                    data-bs-target="#exampleModalStaff">
                                <i class="fa-solid fa-file-import"></i>
                                Import
                            </button>
                            <a href="{{ route('staff_export') }}" class="btn btn-primary m-1">
                                <i class="fa-solid fa-file-export"></i>
                                Export
                            </a>
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
                                @foreach($staff as $item)
                                    <tr>
                                        <td>
                                            <form action="{{ route('staff.destroy',$item->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-outline-danger">
                                                    <i class="fa-sharp fa-solid fa-xmark"></i>
                                                </button>
                                            </form>
                                        </td>
                                        <td>{{ $item->id + 10000 }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->id + 10000 }} | {{ $item->name }}</td>
                                        <td>{{ $item->grade }}</td>
                                        <td>{{ $item->lob }}</td>
                                        <td>{{ $item->shortLOB }}</td>
                                        <td>{{ $item->bu }}</td>
                                        <td>{{ $item->shortBU }}</td>
                                        <td>{{ $item->practiceGroup }}</td>
                                        <td>{{ $item->shortPG }}</td>
                                        <td>{{ $item->office }}</td>
                                        <td>{{ $item->rackRate }}</td>
                                        <td>{{ $item->budRecovey }}%</td>
                                        <td>{{ round(($item->rackRate * $item->budRecovey) / 100) }}</td>
                                        <td>{{ $item->costRate }}</td>
                                        <td>{{ $item->budgetUtil }}</td>
                                        <td>{{ $item->fte }}</td>
                                        <td>{{ round($item->budgetUtil / 225, 2)}}</td>
                                        <td>1</td>
                                        <td>{{ ++$i }}</td>
                                        <td>{{ $item->id + 10000 }} | {{ $item->name }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                    <div class="mt-3">
                        {!! $staff->links() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
