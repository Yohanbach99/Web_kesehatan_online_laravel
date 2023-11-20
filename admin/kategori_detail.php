<?php
$model = new Kategori();
$data_kategori = $model->detailKategori($id);


?>

<?php 
if(isset($_GET['url']) && $_GET['url'] == 'kategori_detail') {
  $id = $_GET['id'];
  $model = new Kategori();
  $detail_kategori = $model->detailKategori($id);
?>

<main id="main" class="main">

  <div class="pagetitle">
    <h1>Kategori Detail</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item active">Kategori Gejala</li>
        <li class="breadcrumb-item active">Kategori</li>
        <li class="breadcrumb-item active">Kategori Detail</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section">
    <div class="row">
      <div class="col-lg-6">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title"><?= $detail_kategori['nama_kategori'] ?></h5>
            <p class="card-text"></p>
            <a href="index.php?url=kategori" class="btn btn-primary">Kembali</a>
            
          </div>
        </div>
      </div>
    </div>
  </section>

</main><!-- End #main -->

<?php } ?>


