<?php
$model = new User();
$data_user = $model->dataUser();


?>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>User</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Tables</li>
          <li class="breadcrumb-item active">User</li>
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

              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Umur</th>
                    <th scope="col">Jenis Kelamin</th>
                    <th scope="col">Email</th>
                  </tr>
                </thead>
                <tbody>
                <?php
                  $no =1;
                   foreach ($data_user as $user){
                    ?>
                     <tr>
                    <th scope="row"><?= $no ?></th>
                    <!-- <td><?= $user['id']?></td> -->
                    <td><?= $user['nama']?></td>
                    <td><?= $user['umur']?></td>
                    <td><?= $user['jenis_kelamin']?></td>
                    <td><?= $user['email']?></td>
                  </tr>
                  <?php
                   $no ++;
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

 