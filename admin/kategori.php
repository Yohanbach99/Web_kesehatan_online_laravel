<?php
$model = new Kategori();
$data_kategori = $model->dataKategori();


?>

<main id="main" class="main">

  <div class="pagetitle">
    <h1>Kategori</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item active">Kategori Gejala</li>
        <li class="breadcrumb-item active">Kategori</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section">
    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title"></h5>
            <p></p>

            <!-- tombol -->
<div class="card mb-4">
 <div class="card-header">
     <a href="index.php?url=kategori_form">
         <button class="btn btn-sm btn-primary">Tambah</button>
       </a>
    </div>
            <!-- Table with stripped rows -->
            <table class="table datatable">
             <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Kategori</th>
      <th scope="col">Actions</th> <!-- Add a new column for the button -->
    </tr>
  </thead>
  <tbody>
    <?php
    $no = 1;
    foreach ($data_kategori as $kategori) {
    ?>
      <tr>
        <th scope="row"><?= $no ?></th>
        <td><?= $kategori['nama_kategori'] ?></td>
        <td>
          <form>
            <a href="index.php?url=kategori_detail&id=<?=$kategori['id']?>">
              <button type="button" class="btn btn-outline-primary">Detail</button>
            </a>
            <a href="index.php?url=kategori_edit&id=<?=$kategori['id']?>">
              <button type="button" class="btn btn-primary">Edit</button>
            </a>
          </form>
        </td>
      
      </tr>
    <?php
      $no++;
    }
    ?>
  </tbody>
</table>

            <!-- End Table with stripped rows -->

          </div>
        </div>

      </div>
    </div>
  </section>

</main><!-- End #main -->