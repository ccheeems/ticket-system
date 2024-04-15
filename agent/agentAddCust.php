<?php
include '../template/agentTemp/agentHeader.php';
?>

<main class="dash-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-8">
                <div class="card easion-card">
                    <div class="card-header">
                        <div class="easion-card-icon">
                            <i class="fa-solid fa-user"></i>
                        </div>
                        <div class="easion-card-title"> Add Customer </div>
                    </div>
                    <div class="card-body ">
                        <form>
                        <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label for="custFName">First Name</label>
                                        <input type="text" class="form-control" id="custFName" placeholder="Enter First Name">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="custMName">Middle Name</label>
                                        <input type="text" class="form-control" id="custMName" placeholder="Enter Middle Name">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="custLName">Last Name</label>
                                        <input type="text" class="form-control" id="custLName"
                                            placeholder="Enter Last Name">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="custAddress">Address</label>
                                    <textarea type="text" class="form-control" id="custAddress"
                                        placeholder="1234 Main St"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="custPhone">Phone No.</label>
                                    <input type="number" class="form-control" id="custPhone"
                                    placeholder="" onKeyPress="if(this.value.length==11) return false;">
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label for="custEmail">Email</label>
                                        <input type="email" class="form-control" id="custEmail" placeholder="Enter Email">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="custPassword">Password</label>
                                        <input type="password" class="form-control" id="custPassword"
                                            placeholder="Enter Password">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="AddCustRole">Role</label>
                                        <select id="AddCustRole" class="form-control" readonly>
                                            <option selected>Customer</option>
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