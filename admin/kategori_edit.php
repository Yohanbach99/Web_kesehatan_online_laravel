<?php
$model = new Kategori();
$data_kategori = $model->editKategori($id, $nama_kategori);
?>

<?php 
if(isset($_GET['url']) && $_GET['url'] == 'kategori_edit') {
  $id = $_GET['id'];
  $model = new Kategori();

  // Update nama_kategori ketika form disubmit
  if(isset($_POST['submit'])) {
    $nama_kategori = $_POST['nama_kategori'];

    $edit_kategori = $model->editKategori($id, $nama_kategori);

    if($edit_kategori > 0) {
      echo "<script>alert('Berhasil mengedit kategori')</script>";
      echo "<script>window.location.href='index.php?url=kategori'</script>";
    }
  }

  $detail_kategori = $model->detailKategori($id);
?>

<main id="main" class="main">

  <div class="pagetitle">
    <h1>Edit Kategori</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item active">Kategori Gejala</li>
        <li class="breadcrumb-item active">Kategori</li>
        <li class="breadcrumb-item active">Edit Kategori</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section">
    <div class="row">
      <div class="col-lg-6">

        <div class="card">
          <div class="card-body">
            <form method="post">
              <div class="form-group">
                <label for="nama_kategori">Nama Kategori</label>
                <input type="text" class="form-control" id="nama_kategori" name="nama_kategori" value="<?= $detail_kategori['nama_kategori'] ?>">
              </div>
              <button type="submit" class="btn btn-primary" name="submit">Update</button>
              <a href="index.php?url=kategori" class="btn btn-secondary">Batal</a>
            </form>
          </div>
        </div>

      </div>
    </div>
  </section>

</main><!-- End #main -->

<?php } ?>