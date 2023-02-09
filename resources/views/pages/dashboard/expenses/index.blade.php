@extends('layouts.app')
@section('title')
    {{ __('Expenses') }}
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            {{--            @include('common.sidebar')--}}
            @include('pages.dashboard.expenses.Insert-modal')
            @include('pages.dashboard.expenses.import-modal')
            <div class="col-8 col-md-10 mt-3 mb-3 mx-auto">
                @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                @endif
                <div class="row">
                    <div class="col-12 col-md-4">
                        <p class="phases_title">Expenses</p>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="w-100 bg-secondary py-3">
                        <div class="container-fluid">
                            <button type="button" class="btn btn-success m-1" data-bs-toggle="modal"
                                    data-bs-target="#exampleModalExpenses">
                                <i class="fa-sharp fa-solid fa-circle-plus"></i>
                                Insert
                            </button>
                            <button type="button" class="btn btn-warning m-1" data-bs-toggle="modal"
                                    data-bs-target="#insertExpensesModel">
                                <i class="fa-solid fa-file-import"></i>
                                Import
                            </button>
                            <a href="{{ route('expenses_export') }}" class="btn btn-primary m-1">
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
                                <th>Phase</th>
                                <th>Category</th>
                                <th>Description</th>
                                <th>Qty</th>
                                <th>Cost per unit</th>
                                <th>Cost</th>
                                <th>Recovery %</th>
                                <th>Recovery</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach($expenses as $item)
                                    <tr>
                                        <td>
                                            <form action="{{ route('expenses.destroy',$item->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-outline-danger">
                                                    <i class="fa-sharp fa-solid fa-xmark"></i>
                                                </button>
                                            </form>
                                        </td>
                                        <td>{{ $item->phase }}</td>
                                        <td>{{ $item->category }}</td>
                                        <td>{{ $item->description }}</td>
                                        <td>{{ $item->qty }}</td>
                                        <td>{{ $item->costPerUnit }}</td>
                                        <td>{{ $item->cost }}</td>
                                        <td>{{ $item->recoveryPercent }}</td>
                                        <td>{{ $item->recovery }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                    <div class="mt-3">
                        {!! $expenses->links() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
