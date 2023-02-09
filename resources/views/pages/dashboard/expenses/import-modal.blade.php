<!-- Modal -->
<div class="modal fade" id="insertExpensesModel" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabelStaff">
                    Import Expenses
                </h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{route('expensesUpload')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-12 mb-2">
                            <div class="form-group">
                                <p>Please Upload CSV in Given Format <a href="{{ asset('files/sample-expenses.csv') }}" target="_blank">Sample CSV Format</a></p>
                                <label for="file">Import csv</label>
                                <input type="file" name="file" class="form-control" id="file" required>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 text-center">
                        <button type="submit" class="btn btn-success w-25">Add</button>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
