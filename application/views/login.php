<?php 

if (isset($_POST['submit'])) {
    header("Location:". $this->load->view('base.php'));
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url('assets/css/login.css'); ?>">
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
        <div class="wrapper-page ">
            <div class="panel panel-color panel-primary panel-pages">

                <div class="panel-body">

		      <form class="form-horizontal m-t-20" id="form-login" action="" method="POST">
                    <div class="form-group ">
                        <div class="col-sm-4">
                            <input class="form-control input-lg " name="username" type="text" required="" placeholder="Username">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-4">
                            <input class="form-control input-lg" name="password" type="password" required="" placeholder="Password">
                        </div>
                    </div>

                    
                    <div class="form-group text-center m-t-20">
                        <div class="col-sm-2">
                            <button class="btn btn-primary btn-lg w-lg waves-effect waves-light" type="submit" id="submit" >Log In</button>
                        </div>
                    </div>

                    <div class="form-group m-t-10">
                    </div>
                </form> 
                </div>                                 
                
            </div>
        </div>
    </div>
</body>
</html>