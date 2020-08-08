<?php 

if (isset($_POST['tambah'])) {
    header("Location:". $this->load->view('tambahuser.php'));
}

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />

    <title><?php echo $title; ?></title>
  </head>

  <style>
    .nav-link:hover{
        background-color : grey;
    }
    input{
        width : 100px;
    }
    #sidebar{
        
        width: 190px;
        float: left;
        position: fixed;
        padding: 5px;
        color : black;
     }
  </style>

  <body class="fixed-left">
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

    <div class="row no-gutters mt-5 mb-5" >
        <div class="col-md-2 bg-dark mt-2 pr-3 pt-4 " style="height: 800px; " > 
            <ul class="nav flex-column ml-3 mb-5 mt-5" id="sidebar">
                <li class="nav-item mt-2">
                    <a class="nav-link text-white" href="<?php echo base_url() ?>home "><i class="fas fa-user-alt mr-2"></i>Dashboard</a>
                    <hr class="bg-secondary">
                </li>
                <li class="nav-item mt-2">
                    <a class="nav-link text-white" href="<?php echo base_url() ?> admin.php"><i class="fas fa-user-alt mr-2"></i>User</a>
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
                    <h3><i class="fas fa-user-alt mr-2"></i>User</h3><hr style="width: 100%;">
  
          <!-- Form User -->
          <div class='panel panel-border panel-primary'>
    <div class='panel-heading'> 
        <h3 class='panel-title'><i class='fa fa-user'></i> Data Customer</h3> 
    </div>  
    <div class='panel-body mt-4'> 
    <p align='left'><a class='btn btn-primary' href='tambahuser.php'><i class='icon-plus' id="tambah"></i>Tambah Customer</a></p>
    <br/>
    <table id='datatable' class='table table-hover'>
	<thead>
		<tr>
		<th><i class='icon-terminal'></i> No.</th>
			<th><i class='icon-terminal'></i> Nama</th>
			<th><i class='icon-signal'></i> Alamat</th>
			<th><i class='icon-signal'></i> Telp</th>
		<th><i class='icon-chevron-right'></i> Aksi</th>
		</tr>
	</thead>
	<tbody>
    <tr>
<td>1</td>
<td>Saiful</td>
	<td>Jl in aja dulu</td>
	<td>0888898889</td>
	<td><a class='btn btn-primary' href='?p=customer&aksi=edit&id=80'><i class='icon-edit'></i>Edit</a>
	 <a href='#' class='btn btn-danger' onClick="return confirm('Anda yakin ingin menghapus ini?');"><i class='icon-trash'></i>Hapus</td>
	
</tr><tr>
<td>2</td>
<td>ida</td>
	<td>tes</td>
	<td>4334</td>
	<td><a class='btn btn-primary' href='?p=customer&aksi=edit&id=79'><i class='icon-edit'></i>Edit</a>
	 <a href='#' class='btn btn-danger' onClick="return confirm('Anda yakin ingin menghapus ini?');"><i class='icon-trash'></i>Hapus</td>
	
</tr><tr>
<td>3</td>
<td>Weeabooocode</td>
	<td>Japan</td>
	<td>123456789</td>
	<td><a class='btn btn-primary' href='?p=customer&aksi=edit&id=78'><i class='icon-edit'></i>Edit</a>
	 <a href='#' class='btn btn-danger' onClick="return confirm('Anda yakin ingin menghapus ini?');"><i class='icon-trash'></i>Hapus</td>
	
</tr><tr>
<td>4</td>
<td>andr</td>
	<td>nana</td>
	<td>1122121</td>
	<td><a class='btn btn-primary' href='?p=customer&aksi=edit&id=77'><i class='icon-edit'></i>Edit</a>
	 <a href='#' class='btn btn-danger' onClick="return confirm('Anda yakin ingin menghapus ini?');"><i class='icon-trash'></i>Hapus</td>
	
</tr><tr>
<td>5</td>
<td>test</td>
	<td>tes</td>
	<td>08312083298</td>
	<td><a class='btn btn-primary' href='?p=customer&aksi=edit&id=76'><i class='icon-edit'></i>Edit</a>
	 <a href='#' class='btn btn-danger' onClick="return confirm('Anda yakin ingin menghapus ini?');"><i class='icon-trash'></i>Hapus</td>
	
</tr><tr>
<td>6</td>
<td>andi</td>
	<td>jl sudirman </td>
	<td>02156789</td>
	<td><a class='btn btn-primary' href='?p=customer&aksi=edit&id=75'><i class='icon-edit'></i>Edit</a>
	 <a href='#' class='btn btn-danger' onClick="return confirm('Anda yakin ingin menghapus ini?');"><i class='icon-trash'></i>Hapus</td>
	
</tr><tr>
<td>7</td>
<td>Kemal</td>
	<td>Bandung</td>
	<td>6543234567</td>
	<td><a class='btn btn-primary' href='?p=customer&aksi=edit&id=74'><i class='icon-edit'></i>Edit</a>
	 <a href='#' class='btn btn-danger' onClick="return confirm('Anda yakin ingin menghapus ini?');"><i class='icon-trash'></i>Hapus</td>
	
</tr><tr>
<td>8</td>
<td>Muhammad Mujahid</td>
	<td>qwqwe</td>
	<td>99888</td>
	<td><a class='btn btn-primary' href='?p=customer&aksi=edit&id=73'><i class='icon-edit'></i>Edit</a>
	 <a href='#' class='btn btn-danger' onClick="return confirm('Anda yakin ingin menghapus ini?');"><i class='icon-trash'></i>Hapus</td>
	
</tr><tr>
<td>9</td>
<td>nbaru</td>
	<td>baru</td>
	<td>088</td>
	<td><a class='btn btn-primary' href='?p=customer&aksi=edit&id=72'><i class='icon-edit'></i>Edit</a>
	 <a href='#' class='btn btn-danger' onClick="return confirm('Anda yakin ingin menghapus ini?');"><i class='icon-trash'></i>Hapus</td>
	
</tr><tr>
<td>10</td>
<td>Romeo</td>
	<td>Jakarat</td>
	<td>12456789787</td>
	<td><a class='btn btn-primary' href='?p=customer&aksi=edit&id=71'><i class='icon-edit'></i>Edit</a>
	 <a href='#' class='btn btn-danger' onClick="return confirm('Anda yakin ingin menghapus ini?');"><i class='icon-trash'></i>Hapus</td>
	
</tr><tr>
<td>11</td>
<td>Ridq</td>
	<td>Kudus</td>
	<td>085636746956</td>
	<td><a class='btn btn-primary' href='?p=customer&aksi=edit&id=70'><i class='icon-edit'></i>Edit</a>
	 <a href='#' class='btn btn-danger' onClick="return confirm('Anda yakin ingin menghapus ini?');"><i class='icon-trash'></i>Hapus</td>
	
</tr><tr>
<td>12</td>
<td>Eka</td>
	<td>Cilebut</td>
	<td>081234567</td>
	<td><a class='btn btn-primary' href='?p=customer&aksi=edit&id=69'><i class='icon-edit'></i>Edit</a>
	 <a href='#' class='btn btn-danger' onClick="return confirm('Anda yakin ingin menghapus ini?');"><i class='icon-trash'></i>Hapus</td>
	
</tr><tr>
            
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