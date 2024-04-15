<?php
include '../template/agentTemp/agentHeader.php';
?>

<main class="dash-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card easion-card">
                    <div class="card-header ">
                        <div class="easion-card-icon">
                            <i class="fa-solid fa-ticket-simple"></i>
                        </div>
                        <div class="easion-card-title"> Tickets List </div>
                        <div class="easion-card-menu">
                            <!-- <div class="col-md-2">
                                <button type="button" name="addCat" id="addCat" class="btn btn-success btn-xs"
                                data-bs-toggle="modal" data-bs-target="#addCatModal"><i class='fa-solid fa-plus'></i></button>
                            </div> -->
                        </div>
                    </div>
                    <div class="card-body ">
                        <div class="custom-dropdown mb-3 col-md-2">
                        <select class="form-control" id="statusFilter">
                            <option value="">All</option>
                            <option value="Pending">Pending</option>
                            <option value="On Process">On Process</option>
                            <option value="Closed">Closed</option>
                        </select>

                        </div>
                        
                            <table id="ticket" class="table table-striped table-bordered" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Ticket #</th>
                                        <th>Date Created</th>
                                        <th>Name</th>
                                        <th>Subject</th>
                                        <th>Department</th>
                                        <th>Priority</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Date Stated</td>
                                        <td>John Doe</td>
                                        <td>broke</td>
                                        <td>Not Set</td>
                                        <td><span class="badge badge-pill badge-secondary">Not Set</span></td>
                                        <td><span class="badge badge-pill badge-success">Pending</span></td>
                                        <td>
                                            <button type="button" name="editTick" id="editTick" class="btn btn-primary btn-sm"
                                            data-bs-toggle="modal" data-bs-target="#editTickModal"><i class='fa-solid fa-pen'></i></button>
                                            <button class="btn btn-danger btn-sm"><i class='fa-solid fa-ban'></i></button>
                                            <a href="comments.php" class="btn btn-secondary btn-sm disabled-button" disabled> <i class="fa-solid fa-comments"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Date Stated</td>
                                        <td>Anne Doe</td>
                                        <td>broke asf</td>
                                        <td>IT Department</td>
                                        <td><span class="badge badge-pill badge-warning">Mid</span></td>
                                        <td><span class="badge badge-pill badge-danger">Closed</span></td>
                                        <td>
                                            <button type="button" name="editTick" id="editTick" class="btn btn-primary btn-sm"
                                            data-bs-toggle="modal" data-bs-target="#editTickModal"><i class='fa-solid fa-pen'></i></button>
                                            <button class="btn btn-danger btn-sm"><i class='fa-solid fa-ban'></i></button>
                                            <a href="comments.php" class="btn btn-secondary btn-sm disabled-button" disabled> <i class="fa-solid fa-comments"></i></a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>


                    </div>
                </div>
            </div>
        </div>
    </div>
</main>


<!-- Edit Tickets Modal -->
<div class="modal fade" id="editTickModal" tabindex="-1" role="dialog" data-bs-backdrop="static" aria-labelledby="editTickModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title" id="editTickModalLabel">View Ticket</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" style="max-height: 400px; overflow-y: auto;">
                <form method="#" action="#">
                    <div class="form-group">
                        <label for="tickID">Ticket ID</label>
                        <input type="number" class="form-control" id="tickID" name="tickID" disabled>
                    </div>
                    <div class="form-group">
                        <label for="tickNo">Ticket #</label>
                        <input type="number" class="form-control" id="tickNo" name="tickNo" disabled>
                    </div>
                    <div class="form-group">
                        <label for="ticketDate">Date Created</label>
                        <input type="text" class="form-control" id="ticketDate" name="ticketDate" disabled>
                    </div>
                    <div class="form-group">
                        <label for="viewCustName">Customer Name</label>
                        <input type="text" class="form-control" id="viewCustName" name="viewCustName" disabled>
                    </div>
                    <div class="form-group">
                        <label for="viewTickSub">Subject</label>
                        <input type="text" class="form-control" id="viewTickSub" name="viewTickSub" required>
                    </div>
                    <div class="form-group">
                        <label for="viewTickMessage">Message</label>
                        <textarea class="form-control" id="viewTickMessage" name="viewTickMessage" rows="3" placeholder="" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="viewTickDept">Department</label>
                        <select name="viewTickDept" class="form-control" id="viewTickDept" name="viewTickept" required>
                                <option disabled selected>Select Department</option>
                                <option>Male</option>
                                <option>Female</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="viewTickCat">Category</label>
                        <select name="viewTickCat" class="form-control" id="viewTickCat" name="viewTickCat" required>
                                <option disabled selected>Select Category</option>
                                <option>Male</option>
                                <option>Female</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="viewTickPrior">Priority</label>
                        <select name="viewTickPrior" class="form-control" id="viewTickPrior" name="viewTickPrior" required>
                                <option disabled selected>Select Priority</option>
                                <option>Low</option>
                                <option>Medium</option>
                                <option>High</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="viewTickStat">Status</label>
                        <select name="viewTickStat" class="form-control" id="viewTickStat" name="viewTickStat" required>
                                <option disabled selected>Select Status</option>
                                <option>Open</option>
                                <option>Pending</option>
                                <option>Closed</option>
                        </select>
                    </div>
                    

                </form>
            </div>
                <div class="modal-footer">
                    <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
                    <button type="submit" class="btn btn-primary text-right">Save</button>
            </div>
        </div>
    </div>
</div>


<!-- Continuation of Header -->
</div>
</div>