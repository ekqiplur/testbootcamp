<?php
$con=mysqli_connect("localhost","root","","perserta");

if (mysqli_connect_errno())
  {
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
  <body>
	<div class="container">
    <div class="row">
		  <div class='col-md-12'>
          <div class='content-panel'>
            <table class='table table-striped table-advance table-hover'>
              <h4><i class='fa fa-angle-right'></i> Daftar Peserta</h4>
              <hr>
              <thead>
                <tr>
                  <th class='hidden-phone'><i class='fa fa-question-circle'></i> No</th>
                  <th><i class='fa fa-bullhorn'></i> Nama Lengkap</th>
                  <th><i class='fa fa-info'></i> Tempat Lahir</th>
                  <th><i class='fa fa-info'></i> Tanggal Lahir</th>
                  <th><i class='fa fa-envelope-open'></i> No.Hp</th>
                  <th><i class='fa fa-university'></i> Alamat</th>
                  <th><i class='fa fa-bed'></i> Pendidikan Terahir</th>
                  <th><i class='fa fa-bed'></i> Agama</th>
                  <th><i class='fa fa-beer'></i> Hobi</th>
                  <th></th>
                </tr>
              </thead>
              <?php
                $que = "SELECT us.id,full_name,place_of_birth_id,ct.name,date_of_birth,phone_number,address,last_education,religion,uh.hobby_id 
                FROM users us, cities ct, users_hobbies uh WHERE us.place_of_birth_id = ct.id AND us.id = uh.biodata_id";
                
                $result=mysqli_query($con,$que);
                while($r=mysqli_fetch_array($result)){

              
              ?>
              <tbody>
                  <tr>
                      <td>
                      <p><?php echo "$r[id]"; ?></p>
                      </td>
                      <td><?php echo "$r[full_name]"; ?></td>
                      <td><?php echo "$r[name]"; ?></td>
                      <td><?php echo "$r[date_of_birth]"; ?></td>
                      <td><?php echo "$r[phone_number]"; ?></td>
                      <td><?php echo "$r[address]"; ?></td>
                      <td><?php echo "$r[last_education]"; ?></td>
                      <td><?php echo "$r[religion]"; ?></td>
                      <td><?php echo "$r[hobby_id]"; ?></td>
                      <td>
                      <a href="index.php?update=<?php echo $r['id'] ?>"><button value='Hapus' class='btn btn-success'><i class='fa fa-pencil-square-o'> Edit</i></button></a>
                      </td>
                      <td>
                      <a href="#"><button value='Hapus' class='btn btn-danger'><i class='fa fa-pencil-square-o'> Hapus</i></button></a>
                      </td>
                  </tr>
              </tbody>
              <?php } ?>
          </table>
          </div >
        </div>
	</div>

  </body>
</html>