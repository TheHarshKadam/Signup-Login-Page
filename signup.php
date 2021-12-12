<?php include('db_con.php');?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="description" content="This is a login page template based on Bootstrap 5">
    <title>Register Here!</title>
    <style>
        body {
            background-image: url("assets/backgrounds/background2.jpg");
            background-color: #cccccc;
            height: 500px;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            position: relative;
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>

<body>
    <div class="container-lg">
        <div class="row justify-content-center pt-5 mt-5">
            <div class="col-md-9">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 offset-md-3">
                            <div class="login-form mt-5 p-3 rounded-3" style="background: #d48b33;">
                                <form action="signup.php" method="post" class="row g-4">
                                    <?php include ('errors.php');?>
                                    <h1 style="text-align: center; font-weight:bolder">SIGN UP!!</h1>

                                    <div class="col-12">
                                        <label>Username</label>
                                        <input type="text" name="firstName" class="form-control" placeholder="Username" value="<?php echo $username; ?>">
                                    </div>
                                    <div class="col-12 mb-4"  >
                                        <label>Email ID</label>
                                        <input type="text" name="email" class="form-control" placeholder="Email" value="<?php echo $email; ?>">
                                    </div>&nbsp;
                                    <div class="row">
                                        <div class="col-6">
                                            <label>Password</label>
                                            <input type="password" name="password1" class="form-control" placeholder="Password">
                                        </div>
                                        <div class="col-6">
                                            <label>Confirm Password</label>
                                            <input type="password" name="password2" class="form-control" placeholder="Confirm Password">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-dark float-end">Signup</button>
                                    </div>
                                </form>
                                <hr class="mt-4">
                                <div class="col-12">
                                    <p class="text-center mb-0">Already have an account?<a href="login.php">Login</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>