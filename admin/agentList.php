<?php
include '../template/adminTemp/adminHeader.php';
?>

<main class="dash-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card easion-card">
                    <div class="card-header ">
                        <div class="easion-card-icon">
                            <i class="fa-solid fa-user-secret"></i>
                        </div>
                        <div class="easion-card-title"> Agents List </div>
                        <div class="easion-card-menu">
                            <!-- <div class="col-md-2">
                                <button type="button" name="addAdmin" id="addAdmin" class="btn btn-success btn-xs"
                                data-bs-toggle="modal" data-bs-target="#addAdminModal"><i class='fa-solid fa-plus'></i></button>
                            </div> -->
                        </div>
                    </div>
                    <div class="card-body ">
                        <div class="custom-dropdown mb-3 col-md-3">
                        <select class="form-control" id="deptFilter">
                            <option value="">All Department</option>
                            <option value="IT Department">IT Department</option>
                            <option value="Finance Department">Finance Department</option>
                        </select>

                        </div>
                        
                            <table id="agent" class="table table-striped table-bordered" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Department</th>
                                        <th>Address</th>
                                        <th>Contact #</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>John Doe</td>
                                        <td>john@example.com</td>
                                        <td>IT Department</td>
                                        <td>De Batumbakal</td>
                                        <td>09123456789</td>
                                        <td>
                                            <button type="button" name="editAgent" id="editAgent" class="btn btn-primary btn-sm"
                                            data-bs-toggle="modal" data-bs-target="#editAgentModal"><i class='fa-solid fa-user-pen'></i></button>
                                            <button class="btn btn-danger btn-sm"><i class='fa-solid fa-trash-can'></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Anne Doe</td>
                                        <td>john@example.com</td>
                                        <td>Finance Department</td>
                                        <td>De Batumbakal</td>
                                        <td>09123456789</td>
                                        <td>
                                            <button type="button" name="editAgent" id="editAgent" class="btn btn-primary btn-sm"
                                            data-bs-toggle="modal" data-bs-target="#editAgentModal"><i class='fa-solid fa-user-pen'></i></button>
                                            <button class="btn btn-danger btn-sm"><i class='fa-solid fa-trash-can'></i></button>
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


<!-- Edit Agent Modal -->
<div class="modal fade" id="editAgentModal" tabindex="-1" role="dialog" data-bs-backdrop="static" aria-labelledby="editAgentModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title" id="editAgentModalLabel">Edit Agent</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" style="max-height: 400px; overflow-y: auto;">
                <form method="#" action="#">
                    <div class="form-group">
                        <label for="agentID">Agent ID</label>
                        <input type="text" class="form-control" id="agentID" name="agentID" disabled>
                    </div>
                    <div class="form-group">
                        <label for="editAgentFName">First Name</label>
                        <input type="text" class="form-control" id="editAgentFName" name="editAgentFName" placeholder="" required>
                    </div>
                    <div class="form-group">
                        <label for="editAgentMName">Middle Name</label>
                        <input type="text" class="form-control" id="editAgentMName" name="editAgentMName" placeholder="" required>
                    </div>
                    <div class="form-group">
                        <label for="editAgentLName">Last Name</label>
                        <input type="text" class="form-control" id="editAgentLName" name="editAgentLName" placeholder="" required>
                    </div>
                    <div class="form-group">
                        <label for="editAgentEmail">Email</label>
                        <input type="email" class="form-control" id="editAgentEmail" name="editAgentEmail" required>
                    </div>
                    <div class="form-group">
                        <label for="editAgentPass">Password</label>
                        <input type="password" class="form-control" id="editAgentPass" name="editAgentPass" required>
                    </div>
                    <div class="form-group">
                        <label for="editAgentDept">Department</label>
                        <select name="editAgentDept" class="form-control" id="editAgentDept" name="editAgentDept" required>
                                <option disabled selected>Select Department</option>
                                <option>IT Department</option>
                                <option>Finance Department</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="editAgentAddress">Address</label>
                        <textarea class="form-control" id="editAgentAddress" name="editAgentAddress" rows="2" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="editAgentContact">Contact #</label>
                        <input type="number" class="form-control" id="editAgentContact" name="editAgentContact" onKeyPress="if(this.value.length==11) return false;" required>
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