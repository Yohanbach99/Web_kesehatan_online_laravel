<?php  
$obj_user = new User();
$data_user = $obj_user->dataUser();

$obj_kategori = new Kategori();
$data_kategori = $obj_kategori->dataKategori();

$obj_pertanyaan = new Pertanyaan();
$obj_Form = new form_pertanyaan();

$data_pertanyaan = $obj_pertanyaan->dataPertanyaan();
$data_form = $obj_Form->dataForm();

?>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<main id="main" class="main">

<div class="pagetitle">
  <h1>Pertanyaan</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.php">Home</a></li>
      <li class="breadcrumb-item">Tables</li>
      <li class="breadcrumb-item active">Form Pertanyaan</li>
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

<h4 align="center">Form Pertanyaan</h4>
<form action="Pertanyaan_controller.php" method="POST">
  <div class="form-group row">
    <label for="text" class="col-4 col-form-label">Masukkan Gejala</label> 
    <div class="col-8">
      <input id="text1" name="gejala" placeholder="Isi Gejala" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="text" class="col-4 col-form-label">Masukkan Keluhan</label> 
    <div class="col-8">
      <input id="text2" name="keluhan" placeholder="Isi Keluhan" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="text2" class="col-4 col-form-label">Masukkan Deskripsi/Penjelasan</label> 
    <div class="col-8">
      <input id="text3" name="deskripsi" placeholder="Isi Deskripsi/Penjelasan" type="text" class="form-control">
    </div>
  </div>
 
  <div class="form-group row">
    <label for="select" class="col-4 col-form-label">User</label> 
    <div class="col-8">
      <select id="select" name="user_id" class="custom-select">
        <option value="rabbit">--- Pilih User ---</option>
        <?php foreach( $data_user as $user ) : ?>
        <option value="<?= $user['id'] ?>"><?= $user['nama'] ?></option>
        <?php endforeach; ?>
      </select>
    </div>
  </div> 

  <div class="form-group row">
    <label for="select" class="col-4 col-form-label">Jenis Kategori</label> 
    <div class="col-8">
      <select id="select" name="kategori_id" class="custom-select">
        <option value="rabbit">--- Pilih Kategori ---</option>
        <?php foreach( $data_kategori as $kategori ) : ?>
        <option value="<?= $kategori['id'] ?>"><?=$kategori['nama_kategori'] ?></option>
        <?php endforeach; ?>
      </select>
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