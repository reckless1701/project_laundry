<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />

    <title>Hello, world!</title>
  </head>

  <style>
    .nav-link:hover{
        background-color : grey;
    }
    input{
        width : 300px;
    }
    #sidebar{
        
        width: 190px;
        float: left;
        position: fixed;
        padding: 5px;
    }
  </style>

  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-primary fixed-top">
        <a class="navbar-brand" href="#">Welcome Kasir</a>
        
        <form class="form-inline my-2 my-lg-0 ml-auto">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
        <div class="icon ml-4">
            <i class="fas fa-user" data-toggle="tooltip" title="Hello Admin"></i>
        </div>
    </div>
    </nav>

    <div class="row no-gutters mt-5 mb-5" >
        <div class="col-md-2 bg-dark mt-2 pr-3 pt-4" style="height: 2850px;" > 
            <ul class="nav flex-column ml-3 mb-5 mt-5 " id="sidebar">
                <li class="nav-item mt-5">
                    <a class="nav-link text-white" href="#"><i class="fas fa-user-alt mr-2"></i>User</a>
                    <hr class="bg-secondary">
                </li>
                <li class="nav-item mt-5">
                    <a class="nav-link text-white" href="#"><i class="fas fa-user-alt mr-2"></i>Outlet</a>
                    <hr class="bg-secondary">
                </li>
                <li class="nav-item mt-5">
                    <a class="nav-link text-white" href="#"><i class="fas fa-user-alt mr-2">Laundry Package</a>
                    <hr class="bg-secondary">
                </li>
               
            </ul>
        </div>
            <div class="col-md-10 p-5 pt-2">
                    <h3><i class="fas fa-user-alt mr-2"></i>User</h3><hr style="width: 185%;">
  
          <!-- Form User -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Member Form</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal">
              <div class="box-body ">
                <div class="form-group">
                  <label for="inputID" class="col-sm-4 control-label">ID Member</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" id="inputID" placeholder="ID Member">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputNama" class="col-sm-4 control-label">Nama Member</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputNama" placeholder="Nama Member">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputJKL" class="col-sm-4 control-label">Jenis Kelamin</label>

                  <div class="col-sm-10">
                    <input type="radio" name="jenis_kelamin" value="Pria">Pria
                    <input type="radio" name="jenis_kelamin" value="Wanita">Wanita
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputTlp" class="col-sm-4 control-label">No. Telepon</label>

                  <div class="col-sm-10">
                    <input type="password" class="form-control" id="inputTlp" placeholder="No. Telepon">
                  </div>
                </div>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-default">Cancel</button>
                <button type="submit" class="btn btn-info pull-right">Sign in</button>
              </div>
              <!-- /.box-footer -->
            </form>
        </div>
            
    </div>
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

    <script>
        $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    })
    </script>
  </body>
</html>