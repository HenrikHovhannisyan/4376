<!-- Modal -->
<div class="modal fade" id="exampleModalStaff" tabindex="-1" aria-labelledby="exampleModalLabelStaff"
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
                <form action="{{ route('staff.store') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-12 col-md-6 mb-2">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" name="name" class="form-control" id="name"
                                       placeholder="Name" required>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 mb-2">
                            <div class="form-group">
                                <label for="grade">Grade</label>
                                <input type="text" name="grade" class="form-control" id="grade"
                                       placeholder="Grade" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-md-6 mb-2">
                            <div class="form-group">
                                <label for="lob">LOB</label>
                                <input type="text" name="lob" class="form-control" id="lob"
                                       placeholder="LOB" required>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 mb-2">
                            <div class="form-group">
                                <label for="shortLOB">ShortLOB</label>
                                <input type="text" name="shortLOB" class="form-control" id="shortLOB"
                                       placeholder="ShortLOB" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-md-6 mb-2">
                            <div class="form-group">
                                <label for="bu">BU</label>
                                <input type="text" name="bu" class="form-control" id="bu"
                                       placeholder="BU" required>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 mb-2">
                            <div class="form-group">
                                <label for="shortBU">ShortBU</label>
                                <input type="text" name="shortBU" class="form-control" id="shortBU"
                                       placeholder="ShortBU" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-md-6 mb-2">
                            <div class="form-group">
                                <label for="practiceGroup">Practice Group</label>
                                <input type="text" name="practiceGroup" class="form-control" id="practiceGroup"
                                       placeholder="Practice Group" required>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 mb-2">
                            <div class="form-group">
                                <label for="shortPG">ShortPG</label>
                                <input type="text" name="shortPG" class="form-control" id="shortPG"
                                       placeholder="ShortPG" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-md-6 mb-2">
                            <div class="form-group">
                                <label for="office">Office</label>
                                <input type="text" name="office" class="form-control" id="office"
                                       placeholder="Office" required>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 mb-2">
                            <div class="form-group">
                                <label for="rackRate">Rack Rate</label>
                                <input type="number" name="rackRate" class="form-control" id="rackRate"
                                       placeholder="Rack Rate" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-md-6 mb-2">
                            <div class="form-group">
                                <label for="budRecovey">Bud. Recovey</label>
                                <input type="number" name="budRecovey" class="form-control" id="budRecovey"
                                       placeholder="Bud. Recovey" required>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 mb-2">
                            <div class="form-group">
                                <label for="costRate">Cost rate</label>
                                <input type="number" name="costRate" class="form-control" id="costRate"
                                       placeholder="Cost rate" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-md-6 mb-2">
                            <div class="form-group">
                                <label for="budgetUtil">Budget util</label>
                                <input type="number" name="budgetUtil" class="form-control" id="budgetUtil"
                                       placeholder="Budget util" required>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 mb-2">
                            <div class="form-group">
                                <label for="fte">FTE</label>
                                <input type="number" name="fte" class="form-control" id="fte"
                                       placeholder="FTE" required>
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
