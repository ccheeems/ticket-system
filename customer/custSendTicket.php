<?php
include '../template/custTemp/custHeader.php';
?>

<main class="dash-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-8">
                <div class="card easion-card">
                    <div class="card-header">
                        <div class="easion-card-icon">
                            <i class="fa-solid fa-ticket-simple"></i>
                        </div>
                        <div class="easion-card-title"> Create Ticket </div>
                    </div>
                    <div class="card-body ">
                        <form>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="addTicCustomer">Customer</label>
                                    <input type="text" class="form-control" id="addCustTicSub" placeholder="John Doe" readonly>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="addTicSub">Subject</label>
                                    <input type="text" class="form-control" id="addCustTicSub" placeholder="Enter Subject">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="addCustTicMessage">Message</label>
                                <textarea type="text" class="form-control" id="addCustTicMessage"
                                    placeholder="1234 Main St"></textarea>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="addCustTicDept">Department</label>
                                    <select id="addCustTicDept" class="form-control" readonly>
                                    <option selected>Not Set</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="addCustTicCateg">Category</label>
                                    <select id="addCustTicCateg" class="form-control" readonly>
                                    <option selected>Not Set</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="addCustTicPrior">Priority</label>
                                    <select id="addCustTicStat" class="form-control" readonly>
                                    <option selected>Not Set</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="addCustTicStat">Status</label>
                                    <select id="addCustTicStat" class="form-control" readonly>
                                    <option selected>Pending</option>
                                    </select>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<!-- Continuation of Header -->
</div>
</div>