<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>Document</title>
</head>

<style>
    .container{
        margin : 110px;
        opacity : 0.56;
    }
    a{
        font-size : 13px;
    }
    
    
</style>

<body background="baju.jpg">
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header bg-transparent mb-0">
                        <h5 class="text-center font-weight-bold text-primary">Register</h5>
                    </div>
                    <div class="card-body">
                        <form action="" method="POST">
                            <div class="form-group">
                                <label for="">Name</label>
                                <input type="text" name="name" class="form-control" placeholder="Enter Your Name">
                            </div>
                            <div class="form-group">
                                <label for="">Username</label>
                                <input type="text" name="username" class="form-control" placeholder="Enter Your Username">
                            </div>
                            <div class="form-group">
                                <label for="">Password</label>
                                <input type="password" name="password" class="form-control" placeholder="Enter Your Password">
                            </div>
                            <div class="form-group">
                                <a href="login.php">Already Have An Account </a>
                            </div>
                            <div>
                                <input type="submit" name="register" value="register" class="btn btn-primary btn-block">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>