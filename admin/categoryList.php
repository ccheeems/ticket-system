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
                            <i class="fas fa-chart-bar"></i>
                        </div>
                        <div class="easion-card-title"> Category List </div>
                        <div class="easion-card-menu">
                            <div class="col-md-2">
                                <button type="button" name="addCat" id="addCat" class="btn btn-success btn-xs"
                                data-bs-toggle="modal" data-bs-target="#addCatModal"><i class='fa-solid fa-plus'></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="card-body ">
                        
                            <table id="example" class="table table-striped table-bordered" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Department</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>John Doe</td>
                                        <td>john@example.com</td>
                                        <td>
                                            <button type="button" name="editCat" id="editCat" class="btn btn-primary btn-sm"
                                            data-bs-toggle="modal" data-bs-target="#editCatModal"><i class='fa-solid fa-pen'></i></button>
                                            <button class="btn btn-danger btn-sm"><i class='fa-solid fa-trash-can'></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Anne Doe</td>
                                        <td>john@example.com</td>
                                        <td>
                                            <button type="button" name="editCat" id="editCat" class="btn btn-primary btn-sm"
                                            data-bs-toggle="modal" data-bs-target="#editCatModal"><i class='fa-solid fa-pen'></i></button>
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


<!-- Add Category Modal -->
<div class="modal fade" id="addCatModal" tabindex="-1" role="dialog" data-bs-backdrop="static" aria-labelledby="addCatModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title" id="addCatModalLabel">Add Category</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" style="max-height: 400px; overflow-y: auto;">
                <form method="#" action="#">
                    <div class="form-group">
                        <label for="CatName">Category Name</label>
                        <input type="text" class="form-control" id="CatName" name="CatName" placeholder="Enter your Category Name" required>
                    </div>
                    <div class="form-group">
                        <label for="CatDept">Department</label>
                        <select name="CatDept" class="form-control" id="CatDept" name="CatDept" required>
                                <option disabled selected>Show Departments</option>
                                <option>Male</option>
                                <option>Female</option>
                        </select>
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


<!-- Edit Category Modal -->
<div class="modal fade" id="editCatModal" tabindex="-1" role="dialog" data-bs-backdrop="static" aria-labelledby="editCatModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title" id="editCatModalLabel">Edit Category</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" style="max-height: 400px; overflow-y: auto;">
                <form method="#" action="#">
                    <div class="form-group">
                        <label for="catID">Category ID</label>
                        <input type="number" class="form-control" id="catID" name="catID" disabled>
                    </div>
                    <div class="form-group">
                        <label for="editcatName">Category Name</label>
                        <input type="text" class="form-control" id="editcatName" name="editcatName" required>
                    </div>
                    <div class="form-group">
                        <label for="editcatDept">Department</label>
                        <select name="editcatDept" class="form-control" id="editcatDept" name="editcatDept" required>
                                <option disabled selected>Show Departments</option>
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