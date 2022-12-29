<?php
session_start();
if ((empty($_SESSION['username'])) and (empty($_SESSION['password']))) {

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>.:Form Login:.</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    <div class="container-fluid mt-4">
        <div class="row justify-content-center">
            <div class="col-lg-3 mt-4">
                <div class="card mt-4">
                    <div class="card-header">
                          <strong class="text-center d-block">Form <span class="text-primary">Login</span></strong>
                    </div>
                    <div class="card-body">
                        <form action="cek_login.php" method="POST">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Username</label>
                                <input type="text" name="username" class="form-control" placeholder="Enter Username" required
                                value="<?php echo (isset($_COOKIE["username"])) ? $_COOKIE['username']:'' ?>">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                <input type="password" name="password" class="form-control" placeholder="Enter Password" required
                                value="<?php echo (isset($_COOKIE['password'])) ? $_COOKIE['password']:'' ?>">
                            </div>
                            <div class="form-group form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1" name="remember"
                                <?php echo ((isset($_COOKIE["username"])) and (isset($_COOKIE["password"]))) ? "checked":"" ?> >
                                <label class="form-check-label" for="exampleCheck1">Remember Me</label>
                            </div>
                            <button type="submit" class="btn btn-primary float-right">Login</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</html>

<?php
    } else {
        echo "<script>window.history.go(-1)</script>";
    }
?>