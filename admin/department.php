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
                            <i class="fa-solid fa-building"></i>
                        </div>
                        <div class="easion-card-title"> Department </div>
                        <div class="easion-card-menu">
                            <div class="col-md-2">
                                <button type="button" name="add" id="addDep" class="btn btn-success btn-xs"
                                data-bs-toggle="modal" data-bs-target="#addDeptModal"><i class='fa-solid fa-plus'></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="card-body ">
                        
                            <table id="example" class="table table-striped table-bordered" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Description</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>John Doe</td>
                                        <td>john@example.com</td>
                                        <td>
                                            <button type="button" name="editDept" id="editDept" class="btn btn-primary btn-sm"
                                            data-bs-toggle="modal" data-bs-target="#editDeptModal"><i class='fa-solid fa-user-pen'></i></button>
                                            <button class="btn btn-danger btn-sm"><i class="fa-solid fa-trash-can"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Anne Doe</td>
                                        <td>john@example.com</td>
                                        <td>
                                            <button type="button" name="editDept" id="editDept" class="btn btn-primary btn-sm"
                                            data-bs-toggle="modal" data-bs-target="#editDeptModal"><i class='fa-solid fa-user-pen'></i></button>
                                            <button class="btn btn-danger btn-sm"><i class="fa-solid fa-trash-can"></i></button>
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

<!-- Add Department Modal -->
<div class="modal fade" id="addDeptModal" tabindex="-1" role="dialog" data-bs-backdrop="static" aria-labelledby="addDeptModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title" id="addDeptModalLabel">Add Department</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" style="max-height: 400px; overflow-y: auto;">
                <form method="#" action="#">
                    <div class="form-group">
                        <label for="addDeptName">Department Name</label>
                        <input type="text" class="form-control" id="addDeptName" name="addDeptName" placeholder="Enter your Department Name" required>
                    </div>
                    <div class="form-group">
                        <label for="addDeptDisc">Description</label>
                        <textarea class="form-control" id="addDeptDisc" name="addDeptDisc" rows="2" placeholder="Enter your Department Description" required></textarea>
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

<!-- Edit Department Modal -->
<div class="modal fade" id="editDeptModal" tabindex="-1" role="dialog" data-bs-backdrop="static" aria-labelledby="editDeptModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title" id="editDeptModalLabel">Edit Department</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" style="max-height: 400px; overflow-y: auto;">
                <form method="#" action="#">
                    <div class="form-group">
                        <label for="deptID">Department ID</label>
                        <input type="text" class="form-control" id="deptID" name="deptID" disabled>
                    </div>
                    <div class="form-group">
                        <label for="editdeptName">Department Name</label>
                        <input type="text" class="form-control" id="editdeptName" name="editdeptName" required>
                    </div>
                    <div class="form-group">
                        <label for="editdeptDisc">Description</label>
                        <textarea class="form-control" id="editdeptDisc" name="editdeptDisc" rows="2" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="editdeptCat">Category</label>
                        <select name="editdeptCat" class="form-control" id="editdeptCat" name="editdeptCat" required>
                                <option disabled selected>Show Categories</option>
                                <option>Male</option>
                                <option>Female</option>
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