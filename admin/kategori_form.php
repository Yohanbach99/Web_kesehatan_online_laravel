<?php  

// $obj_user = new User();
// $data_user = $obj_user->dataUser();

$obj_kategori = new Kategori();
$data_kategori = $obj_kategori->dataKategori();

$obj_kategori = new Kategori();
$obj_Form = new form_kategori();

$data_kategori = $obj_kategori->dataKategori();
$data_form = $obj_Form->dataForm();

?>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<main id="main" class="main">

<div class="pagetitle">
  <h1>Kategori</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.php">Home</a></li>
      <li class="breadcrumb-item">Tables</li>
      <li class="breadcrumb-item active">Form Kategori</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

<section class="section">
  <div class="row">
    <div class="col-lg-12">
    <div class="card mb-4">
      


      <div class="card">
        <div class="card-body">
          <h5 class="card-title"></h5>
          <p></p>

<h4 align="center">Form Kategori</h4>
<form action="kategori_controller.php" method="POST">
  <div class="form-group row">
    <label for="text1" class="col-4 col-form-label">Masukkan kategori</label> 
    <div class="col-8">
      <input id="text1" name="nama_kategori" placeholder="Isi Kategori" type="text" class="form-control">
    </div>
  </div>

  
  <div class="form-group row">
    <div class="offset-4 col-8">
    <button name="proses" value="save" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>
</div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->