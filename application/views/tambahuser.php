<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>Document</title>
</head>
<style>
    #sidebar{
        
        width: 190px;
        float: left;
        position: fixed;
        padding: 5px;
    }

</style>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-primary fixed-top">
        <a class="navbar-brand" href="#">Welcome Admin</a>
        
        <form class="form-inline my-2 my-lg-0 ml-auto">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
        <!-- <div class="icon ml-4">
            <i class="fas fa-user" data-toggle="tooltip" title="Hello Admin"></i>
        </div> -->
    </div>
    </nav>

    <div class="row no-gutters mt-5 mb-5 fixed-top" >
        <div class="col-md-2 bg-dark mt-2 pr-3 pt-4" style="height: 2850px;" > 
            <ul class="nav flex-column ml-3 mb-5 mt-5" id="sidebar">
                <li class="nav-item mt-2">
                    <a class="nav-link text-white" href="#"><i class="fas fa-user-alt mr-2"></i>Dashboard</a>
                    <hr class="bg-secondary">
                </li>
                <li class="nav-item mt-2">
                    <a class="nav-link text-white" href="#"><i class="fas fa-user-alt mr-2"></i>User</a>
                    <hr class="bg-secondary">
                </li>
                <li class="nav-item mt-2">
                    <a class="nav-link text-white" href="#"><i class="fas fa-user-alt mr-2"></i>Outlet</a>
                    <hr class="bg-secondary">
                </li>
                <li class="nav-item mt-2">
                    <a class="nav-link text-white" href="#"><i class="fas fa-user-alt mr-2"></i>Laundry Package</a>
                    <hr class="bg-secondary">
                </li>
                <li class="nav-item mt-2">
                    <a class="nav-link text-white" href="#"><i class="fas fa-user-alt mr-2"></i>Transaction</a>
                    <hr class="bg-secondary">
                </li>
                <li class="nav-item mt-2">
                    <a class="nav-link text-white" href="#"><i class="fas fa-user-alt mr-2"></i>Log Out</a>
                    <hr class="bg-secondary">
                </li>
            </ul>
        </div>
        <div class="col-md-10 p-5 pt-2">
        <div class='row'>
<div class='col-sm-12'>
    <!-- <ol class='breadcrumb pull-right'>
        <li><a href='admin.php'>Beranda</a></li>
        <li class='active'>Tambah Data Customer</li>
    </ol> -->
</div>
</div>

<div class='col-sm-12'>
<div class='panel panel-default'>
    <div class='panel-heading'><h3 class='panel-title'>Tambah Data Customer</h3></div>
    <div class='panel-body mt-5'>
        <div class='form'><form method='post' action='customer/aksi_customer.php?act=input' class='cmxform form-horizontal tasi-form' id='commentForm'>
    
    <div class='form-group'>
   <label for='cname' class='control-label col-lg-2'>Nama Lengkap</label>
   <div class='col-lg-10'>
    <input type='text' class='form-control' name='nama' placeholder='Masukan Nama customer' required>
    </div>
	</div>
	
	<div class='form-group'>
   <label for='cname' class='control-label col-lg-2'>Alamat Lengkap</label>
  <div class='col-lg-10'>
  <textarea class='form-control' id='ccomment' name='alamat' required='' aria-required='true' placeholder='Alamat Customer'></textarea>
	</div>
	</div>
	
	
	 <div class='form-group'>
   <label for='cname' class='control-label col-lg-2'>Telepon</label>
  <div class='col-lg-10'>
		<input type='number' class='form-control' name='telp' placeholder='Masukan No. Telepon' required>
	</div>
	</div>
	
	 <div class='form-group'>
   <label for='cname' class='control-label col-lg-2'>Gender</label>
  <div class='col-lg-10'>
		<select class='form-control' name='gender'>
		<option value='Laki laki'>Laki laki</option>
		<option value='Perempuan'>Perempuan</option>
		</select>
	</div>
	</div>
	
   <div class='form-group '>
        <div class='col-lg-offset-2 col-lg-10'>
            <button class='btn btn-primary waves-effect waves-light' type='submit'>Tambah</button>
            <a class='btn btn-danger' href='?p=customer'>Batal</a>
        </div>
    </div>
</form>
</div>
</div>
</div>

</div>
        </div>
</body>
</html>