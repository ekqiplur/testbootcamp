<?php
    $con=mysqli_connect("localhost","root","","perserta");

    if (mysqli_connect_errno()){
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel='stylesheet' href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
	<link rel="stylesheet" href="css/Style.css">

    <title>Data Diri</title>
  </head>
  <?php

    $id = $_GET['id'];
    
    $que = "SELECT us.id,full_name,place_of_birth_id,ct.name,date_of_birth,phone_number,address,last_education,religion,uh.hobby_id 
    FROM users us, cities ct, users_hobbies uh WHERE us.place_of_birth_id = ct.id AND us.id = uh.biodata_id and us.id = '$id'";
    
    $result=mysqli_query($con,$que);
    $r=mysqli_fetch_array($result);

    
    ?>
  <body>
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<form>
				  <div class="form-group">
					<label for="nama">Nama Lengkap</label>
					<input type="text" class="form-control" name="nama_lengkap" value="<?php $r[nama_lengkap] ?>" placeholder="">
				  </div>
				  
				  <div class="form-group">
					<label for="TempatLahir">Tempat Lahir</label>
					<select class="form-control" id="control" name="tempat_lahir">
					  <option>jombang</option>
					  <option>ragunan</option>
					</select>
				  </div>
				  <div class="form-group">
					<label for="TanggalLahir">Tanggal Lahir</label>
					<input type="text" class="form-control" id="control" name="tanggal_lahir" value="<?php $r[tanggal_lahir] ?>" placeholder="">
				  </div>
				  <div class="form-group">
					<label for="Nohp">No.Hp</label>
					<input type="text" class="form-control" name="no_hp" value="<?php $r[phone_number] ?>" placeholder="">
				  </div>
				  <div class='form-group'>
					<label for='Alamat'>Alamat</label>
					<textarea rows='5' type='text' name='alamat' class='form-control'></textarea>
				  </div>
				  <div class="form-group">
					<label for="Pendidikan">Pendidikan Terahir</label>
					<select class="form-control" id="control" name="pendidikan_terahir">
					  <option>sd</option>
					  <option>smp</option>
					</select>
				  </div>
				  <div class="form-group">
					<label for="Agama">Agama</label>
					  <div class="form-check">
						<label class="form-check-label" style="background:#A9BCF5">
						  <input type="radio" class="form-check-input" name="optradio">Islam
						</label>
					  </div>
					  <div class="form-check">
						<label class="form-check-label" style="background:#E0F8F1">
						  <input type="radio" class="form-check-input" name="optradio">Kristen
						</label>
					  </div>
					  <div class="form-check">
						<label class="form-check-label" style="background:#A9F5F2">
						  <input type="radio" class="form-check-input" name="optradio">Katolik
						</label>
					  </div>
				  </div>
				  <div class="form-group">
					<label for="Hobi">Hobi</label>
					  <div class="form-check">
						<label class="form-check-label" style="background:#A9BCF5">
						  <input type="radio" class="form-check-input" name="optradio">Renang
						</label>
					  </div>
					  <div class="form-check">
						<label class="form-check-label" style="background:#E0F8F1">
						  <input type="radio" class="form-check-input" name="optradio">Mancing
						</label>
					  </div>
					  <div class="form-check">
						<label class="form-check-label" style="background:#A9F5F2">
						  <input type="radio" class="form-check-input" name="optradio">Game
						</label>
					  </div>
					  <div class="form-check">
						<label class="form-check-label" style="background:#CEF6CE">
						  <input type="radio" class="form-check-input" name="optradio">Gibah
						</label>
					  </div>
					  <div class="form-check">
						<label class="form-check-label" style="background:#F3E2A9">
						  <input type="radio" class="form-check-input" name="optradio">Programming
						</label>
					  </div>
				  </div>
				  <div class="form-group">
					<button type="submit" class="btn btn-primary">Submit</button> &nbsp;&nbsp;<a href="#" style="color:black"><i class='fas fa-magic' style='color:#F7D358'></i>Edit Label</label>
				  </div>
				</form>
			</div>
		</div>
	</div>

  </body>
</html>