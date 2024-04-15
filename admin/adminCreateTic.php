<?php
include '../template/adminTemp/adminHeader.php';
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
                                    <label for="admTicCustomer">Customer</label>
                                    <select class="form-control" id="admTicCustomer">
                                    <option disabled selected>Select Customer</option>
                                    <option>John Doe</option>
                                    <option>Anne Doe</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="admTicSub">Subject</label>
                                    <input type="text" class="form-control" id="admTicSub" placeholder="Enter Subject">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="admTicMessage">Message</label>
                                <textarea type="text" class="form-control" id="admTicMessage"
                                    placeholder="1234 Main St"></textarea>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="admTicDept">Department</label>
                                    <select class="form-control" id="admTicDept">
                                    <option disabled selected>Select Department</option>
                                    <option>IT Department</option>
                                    <option>Finance Department</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="admTicCateg">Category</label>
                                    <select class="form-control" id="admTicCateg">
                                    <option disabled selected>Select Category</option>
                                    <option>IT Department</option>
                                    <option>Finance Department</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="admTicPrior">Priority</label>
                                    <select class="form-control" id="admTicPrior">
                                    <option disabled selected>Select Department</option>
                                    <option>IT Department</option>
                                    <option>Finance Department</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="admTicStat">Status</label>
                                    <select id="admTicStat" class="form-control" readonly>
                                    <option selected>On Process</option>
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