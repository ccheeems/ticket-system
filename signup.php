<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- BOOTSTRAP CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- FONT AWESOME ICONS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- CUSTOM FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600|Open+Sans:400,600,700" rel="stylesheet">
    <!-- CUSTOM CSS -->
    <link rel="stylesheet" href="template/css/easion.css">

    <title>Ticketing | SignUp</title>
</head>

<body>
    <main class="dash-content">
        <a href="index.html" class="easion-logo my-4 justify-content-center"><i class="fa-solid fa-ticket"></i> <span>Ticketing System</span></a>
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-xl-7">
                    <div class="card easion-card mt-4 mb-4">
                        <div class="card-header bg-primary text-white">
                            <div class="easion-card-title"> CREATE AN ACCOUNT </div>
                        </div>
                        <div class="card-body ">
                            <form>
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label for="FName">First Name</label>
                                        <input type="text" class="form-control" id="FName" placeholder="Enter First Name">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="MName">Middle Name</label>
                                        <input type="text" class="form-control" id="MName" placeholder="Enter Middle Name">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="LName">Last Name</label>
                                        <input type="text" class="form-control" id="LName"
                                            placeholder="Enter Last Name">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputAddress">Address</label>
                                    <textarea type="text" class="form-control" id="inputAddress"
                                        placeholder="1234 Main St"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="inputPhone">Phone No.</label>
                                    <input type="number" class="form-control" id="inputAddress2"
                                        placeholder="Enter Phone No.">
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label for="inputEmail">Email</label>
                                        <input type="email" class="form-control" id="inputEmail" placeholder="Enter Email">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="inputPassword">Password</label>
                                        <input type="password" class="form-control" id="inputPassword"
                                            placeholder="Enter Password">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="inputRole">Role</label>
                                        <select id="inputRole" class="form-control" readonly>
                                            <option selected>Customer</option>
                                        </select>
                                    </div>
                                </div>
                                
                                <button type="submit" class="btn btn-primary">Sign Up</button>
                                <a class="account-dialog-link" href="index.php">Already have an account?</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Template BOOTSTRAP -->
    <script src="https://code.jquery.com/jquery-3.7.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
        crossorigin="anonymous"></script>

    <!-- CHARTS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.bundle.min.js"></script>
    <script src="../template/js/chart-js-config.js"></script>

    <!-- CUSTOM JS -->
    <script src="template/js/easion.js"></script>

</body>

</html>