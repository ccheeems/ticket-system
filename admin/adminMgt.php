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
                            <i class="fa-solid fa-user-tie"></i>
                        </div>
                        <div class="easion-card-title"> Admin Management </div>
                        <div class="easion-card-menu">
                            <div class="col-md-2">
                                <button type="button" name="addAdmin" id="addAdmin" class="btn btn-success btn-xs"
                                data-bs-toggle="modal" data-bs-target="#addAdminModal"><i class='fa-solid fa-plus'></i></button>
                            </div>
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
                                        <td>John Doe</td>
                                        <td>john@example.com</td>
                                        <td>asdsad</td>
                                        <td>De Batumbakal</td>
                                        <td>09123456789</td>
                                        <td>
                                            <button type="button" name="editAdmin" id="editAdmin" class="btn btn-primary btn-sm"
                                            data-bs-toggle="modal" data-bs-target="#editAdminModal"><i class='fa-solid fa-user-pen'></i></button>
                                            <button class="btn btn-danger btn-sm"><i class='fa-solid fa-trash-can'></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Anne Doe</td>
                                        <td>john@example.com</td>
                                        <td>asdsad</td>
                                        <td>De Batumbakal</td>
                                        <td>09123456789</td>
                                        <td>
                                            <button type="button" name="editAdmin" id="editAdmin" class="btn btn-primary btn-sm"
                                            data-bs-toggle="modal" data-bs-target="#editAdminModal"><i class='fa-solid fa-user-pen'></i></button>
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


<!-- Add Admin Modal -->
<div class="modal fade" id="addAdminModal" tabindex="-1" role="dialog" data-bs-backdrop="static" aria-labelledby="addAdminModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title" id="addAdminModalLabel">Add Admin</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" style="max-height: 400px; overflow-y: auto;">
                <form method="#" action="#">
                    <div class="form-group">
                        <label for="admFName">First Name</label>
                        <input type="text" class="form-control" id="admFName" name="admFName" placeholder="Enter Your First Name" required>
                    </div>
                    <div class="form-group">
                        <label for="admMName">Middle Name</label>
                        <input type="text" class="form-control" id="admMName" name="admMName" placeholder="Enter Your Middle Name" required>
                    </div>
                    <div class="form-group">
                        <label for="admLName">Last Name</label>
                        <input type="text" class="form-control" id="admLName" name="admLName" placeholder="Enter Your Last Name" required>
                    </div>
                    <div class="form-group">
                        <label for="admEmail">Email</label>
                        <input type="email" class="form-control" id="admEmail" name="admEmail" placeholder="Enter Your Email" required>
                    </div>
                    <div class="form-group">
                        <label for="admPass">Password</label>
                        <input type="password" class="form-control" id="admPass" name="admPass" placeholder="Enter Your Password" required>
                    </div>
                    <div class="form-group">
                        <label for="admAddress">Address</label>
                        <textarea class="form-control" id="admAddress" name="admAddress" rows="2" placeholder="Enter Your Address" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="admContact">Contact #</label>
                        <input type="number" class="form-control" id="admContact" name="admContact" placeholder="Enter Your Contact #" onKeyPress="if(this.value.length==11) return false;" required>
                    </div>

                </form>
            </div>
                <div class="modal-footer">
                    <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
                    <button type="submit" class="btn btn-primary text-right">Submit</button>
            </div>
        </div>
    </div>
</div>


<!-- Edit Admin Modal -->
<div class="modal fade" id="editAdminModal" tabindex="-1" role="dialog" data-bs-backdrop="static" aria-labelledby="editAdminModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title" id="editAdminModalLabel">Edit Admin</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" style="max-height: 400px; overflow-y: auto;">
                <form method="#" action="#">
                    <div class="form-group">
                        <label for="admID">Admin ID</label>
                        <input type="text" class="form-control" id="admID" name="admID" disabled>
                    </div>
                    <div class="form-group">
                        <label for="editadmFName">First Name</label>
                        <input type="text" class="form-control" id="editadmFName" name="editadmFName" placeholder="" required>
                    </div>
                    <div class="form-group">
                        <label for="editadmMName">Middle Name</label>
                        <input type="text" class="form-control" id="editadmMName" name="editadmMName" placeholder="" required>
                    </div>
                    <div class="form-group">
                        <label for="editadmLName">Last Name</label>
                        <input type="text" class="form-control" id="editadmLName" name="editadmLName" placeholder="" required>
                    </div>
                    <div class="form-group">
                        <label for="editadmEmail">Email</label>
                        <input type="email" class="form-control" id="editadmEmail" name="editadmEmail" required>
                    </div>
                    <div class="form-group">
                        <label for="editadmPass">Password</label>
                        <input type="password" class="form-control" id="editadmPass" name="editadmPass" required>
                    </div>
                    <div class="form-group">
                        <label for="editadmAddress">Address</label>
                        <textarea class="form-control" id="editadmAddress" name="editadmAddress" rows="2" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="editadmContact">Contact #</label>
                        <input type="number" class="form-control" id="editadmContact" name="editadmContact" onKeyPress="if(this.value.length==11) return false;" required>
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