<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div style="background-color: black; padding:30px">
    <div class="container">
        <div class="row">
            <div class="col">
                <!-- <a href="komik/create" class="btn btn-primary mt-3">Tambah Data Komik</a> -->
                <h1 style="color: white"> Daftar Hotel</h1>
                <?php if (session()->getFlashdata('pesan')) : ?>
                <div class="alert alert-success" role="alert">
                    <?= session()->getFlashdata('pesan'); ?>
                </div>
                <?php endif; ?>

                <div class="container">
                    <div class="row">
                        <?php foreach ($komik as $k) : ?>

                    <div class="col-4" style="background-color: transparent; color: white;">
                        
                        <a href="/komik/<?= $k['slug']; ?>">
                                <!-- <div class="card" style="background-color: transparent; color: white; border: 1px solid #D500F9"> -->
                                <img src="/img/<?= $k['sampul']; ?>" class="card-img-top" width="200px" height="200px">
                        </a>

                        <div class="card-body">
                            <h5 class="card-title"><?= $k['judul']; ?></h5>
                            <p class="card-text"><?= $k['rating']; ?></p>
                            <p class="card-text"><?= $k['keterangan']; ?></p>
                            <p class="card-text"><?= $k['penerbit']; ?></p>
                            <!-- <center><a href="/komik/<?= $k['slug']; ?>" class="btn btn-primary"
                                    style="margin-top: 20px;">Detail produk</a></center> -->
                        </div>
                        <!-- </div> -->
                        <br>
                    </div>

                    <?php endforeach; ?>
                </div>




                <!-- <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Sampul</th>
                        <th scope="col">Judul</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1 ?>
                    <?php foreach ($komik as $k) : ?>
                        <tr>
                            <th scope="row"><?= $i++; ?></th>
                            <td><img src="/img/<?= $k['sampul']; ?>" alt="" class="sampul"></td>
                            <td><?= $k['judul']; ?></td>
                            <td><a href="/komik/<?= $k['slug']; ?>" class="btn btn-success">Detail</a></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table> -->
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>