<!-- Modal -->
<div class="modal fade" id="exampleModalExpenses" tabindex="-1" aria-labelledby="exampleModalLabelStaff"
     aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabelStaff">
                    Insert Staff
                </h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('expenses.store') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-12 col-md-6 mb-2">
                            <div class="form-group">
                                <label for="phase">Phase</label>
                                <input type="text" name="phase" class="form-control" id="phase"
                                       placeholder="Phase">
                            </div>
                        </div>
                        <div class="col-12 col-md-6 mb-2">
                            <div class="form-group">
                                <label for="category">Category</label>
                                <select class="form-select" name="category" id="category" aria-label="Default select example">
                                    <option value="travel" selected>Travel</option>
                                    <option value="accommodation">Accommodation</option>
                                    <option value="meals">Meals</option>
                                    <option value="counsel">Counsel</option>
                                    <option value="printing">Printing</option>
                                    <option value="telecommunications">Telecommunications</option>
                                    <option value="licences">Licences</option>
                                    <option value="other">Other</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-md-6 mb-2">
                            <div class="form-group">
                                <label for="description">Description</label>
                                <input type="text" name="description" class="form-control" id="description"
                                       placeholder="Description">
                            </div>
                        </div>
                        <div class="col-12 col-md-6 mb-2">
                            <div class="form-group">
                                <label for="qty">Qty</label>
                                <input type="number" name="qty" class="form-control" id="qty"
                                       placeholder="Qty">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-md-6 mb-2">
                            <div class="form-group">
                                <label for="costPerUnit">Cost per unit</label>
                                <input type="number" name="costPerUnit" class="form-control" id="costPerUnit"
                                       placeholder="Cost per unit">
                            </div>
                        </div>
                        <div class="col-12 col-md-6 mb-2">
                            <div class="form-group">
                                <label for="recoveryPercent">Recovery %</label>
                                <input type="number" name="recoveryPercent" class="form-control" id="recoveryPercent"
                                       placeholder="Recovery %">
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
