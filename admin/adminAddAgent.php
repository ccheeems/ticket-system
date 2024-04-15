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
                            <i class="fa-solid fa-user-secret"></i>
                        </div>
                        <div class="easion-card-title"> Add Agent </div>
                    </div>
                    <div class="card-body ">
                        <form>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="agentFName">First Name</label>
                                    <input type="text" class="form-control" id="custFName"
                                        placeholder="Enter First Name">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="agentMName">Middle Name</label>
                                    <input type="text" class="form-control" id="custMName"
                                        placeholder="Enter Middle Name">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="agentLName">Last Name</label>
                                    <input type="text" class="form-control" id="custLName"
                                        placeholder="Enter Last Name">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="agentAddress">Address</label>
                                <textarea type="text" class="form-control" id="agentAddress"
                                    placeholder="1234 Main St"></textarea>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="agentDept">Department</label>
                                    <select class="form-control" id="agentDept">
                                    <option disabled selected>Select Department</option>
                                    <option>IT Department</option>
                                    <option>Finance Department</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="agentPhone">Phone No.</label>
                                    <input type="number" class="form-control" id="agentPhone" placeholder=""
                                        onKeyPress="if(this.value.length==11) return false;">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="agentEmail">Email</label>
                                    <input type="email" class="form-control" id="agentEmail" placeholder="Enter Email">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="agentPassword">Password</label>
                                    <input type="password" class="form-control" id="agentPassword"
                                        placeholder="Enter Password">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="addAgentRole">Role</label>
                                    <select id="addAgentRole" class="form-control" readonly>
                                        <option selected>Agent</option>
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