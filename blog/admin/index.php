<?php
require_once "../vendor/autoload.php";
$login = new App\classes\LogIn;
$massage="";
if(isset($_POST['btn'])){
    $massage = $login->adminLogInCheck($_POST);
}
?>



<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <title>Admin Login</title>
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container" style="margin-top:160px;">
        <div class="row">
            <div class="col-sm-6 mx-auto">
                <div class="card">
                    <div class="card-header m-auto">
                        <h5>Admin pannel</h5>
                    </div>
                    <div class="card-body">

                        <form action="" method="post">
                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-3 col-form-label">Email</label>
                                <div class="col-sm-9">
                                    <input type="email" class="form-control" id="inputEmail3" name="email" placeholder="Email">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputPassword3" class="col-sm-3 col-form-label">Password</label>
                                <div class="col-sm-9">
                                    <input type="password" class="form-control" id="inputPassword3" name="password" placeholder="Password">
                                </div>
                            </div>


                            <div class="form-group row">
                                <div class="col-sm-12">
                                    <button type="submit" name="btn" class="btn btn-success btn-block">Sign in</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer">
                        <h6 style="color:red;"><?php echo $massage; ?></h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>