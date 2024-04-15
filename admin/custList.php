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
                            <i class="fa-solid fa-user"></i>
                        </div>
                        <div class="easion-card-title"> Customers List </div>
                        <div class="easion-card-menu">
                            <!-- <div class="col-md-2">
                                <button type="button" name="addAdmin" id="addAdmin" class="btn btn-success btn-xs"
                                data-bs-toggle="modal" data-bs-target="#addAdminModal"><i class='fa-solid fa-plus'></i></button>
                            </div> -->
                        </div>
                    </div>
                    <div class="card-body ">
                        
                            <table id="example" class="table table-striped table-bordered" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Password</th>
                                        <th>Address</th>
                                        <th>Contact #</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>John P Day</td>
                                        <td>john@example.com</td>
                                        <td>asdsad</td>
                                        <td>De Batumbakal</td>
                                        <td>09123456789</td>
                                        <td>
                                            <button type="button" name="editCust" id="editCust" class="btn btn-primary btn-sm"
                                            data-bs-toggle="modal" data-bs-target="#editCustModal"><i class='fa-solid fa-user-pen'></i></button>
                                            <button class="btn btn-danger btn-sm"><i class="fa-solid fa-trash-can"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Anne Bowl Doeg</td>
                                        <td>john@example.com</td>
                                        <td>asdsad</td>
                                        <td>De Batumbakal</td>
                                        <td>09123456789</td>
                                        <td>
                                            <button type="button" name="editCust" id="editCust" class="btn btn-primary btn-sm"
                                            data-bs-toggle="modal" data-bs-target="#editCustModal"><i class='fa-solid fa-user-pen'></i></button>
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


<!-- Edit Customer Modal -->
<div class="modal fade" id="editCustModal" tabindex="-1" role="dialog" data-bs-backdrop="static" aria-labelledby="editCustModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title" id="editCustModalLabel">Edit Customer</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" style="max-height: 400px; overflow-y: auto;">
                <form method="#" action="#">
                    <div class="form-group">
                        <label for="custID">Customer ID</label>
                        <input type="text" class="form-control" id="custID" name="custID" disabled>
                    </div>
                    <div class="form-group">
                        <label for="editcustFName">First Name</label>
                        <input type="text" class="form-control" id="editcustFName" name="editcustFName" placeholder="" required>
                    </div>
                    <div class="form-group">
                        <label for="editcustMName">Middle Name</label>
                        <input type="text" class="form-control" id="editcustMName" name="editcustMName" placeholder="" required>
                    </div>
                    <div class="form-group">
                        <label for="editcustLName">Last Name</label>
                        <input type="text" class="form-control" id="editcustLName" name="editcustLName" placeholder="" required>
                    </div>
                    <div class="form-group">
                        <label for="editcustEmail">Email</label>
                        <input type="email" class="form-control" id="editcustEmail" name="editcustEmail" required>
                    </div>
                    <div class="form-group">
                        <label for="editcustPass">Password</label>
                        <input type="password" class="form-control" id="editcustPass" name="editcustPass" required>
                    </div>
                    <div class="form-group">
                        <label for="editcustAddress">Address</label>
                        <textarea class="form-control" id="editcustAddress" name="editcustAddress" rows="2" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="editcustContact">Contact #</label>
                        <input type="number" class="form-control" id="editcustContact" name="editcustContact" onKeyPress="if(this.value.length==11) return false;" required>
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