

<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<head>

    <style>
        button {
            background-color: transparent;
            color: white;
            border-color: transparent;
        }

        button:hover {
            background-color: white;
            color: black;
            border-radius: 50px;
            font-weight: bold;
        }
    </style>

</head>

<!-- <div class="container">
    <div class="row">
        <div class="col">
            <h2 class="mt-2">Detail Komik</h2>
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <img src="/img/<?= $komik['sampul']; ?>" class="card-img" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title"><?= $komik['judul']; ?></h5>
                            <p class="card-text">Penulis : <b><?= $komik['rating']; ?></b></p>
                            <p class="card-text"><small class="text-muted"><b>Penerbit : <?= $komik['penerbit']; ?></b></small></p>
                            <a href="/komik/edit/<?= $komik['slug']; ?>" class="btn btn-warning">Edit</a>
                            <form class="d-inline" action="/komik/<?= $komik['id']; ?>" method="POST">
                                <?= csrf_field(); ?>
                                <input type="hidden" name="_method" value="DELETE">
                                <button type="submit" class="btn btn-danger" onclick="return confirm('apakah anda yakin')"> Delete</button>
                            </form>
                            <br>
                            <a href="/komik" class="btn">Kembali kedaftar komik</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->
<link rel="stylesheet" href="komik/detail.css">

<!-- <a style="margin: 20px; color: white;" href="/komik" class="btn"> << Kembali kedaftar komik</a> -->
    <!-- <div style="margin: 20px; color: white;" href="/komik" class="button"><< Kembali</div> -->
    <form method="post" action="/komik">
        <button style="margin: 20px;" type="submit" name="kembali"> 
        << Kembali
        </button>
    </form>

<div class="container">
    <div class="row">
        <div class="col">
            <div class="row no-gutters">
                <div class="col-md-4">
                    <img src="/img/<?= $komik['sampul']; ?>" class="card-img ">
                </div>
                <div class="col-md-4">
                    <h2 class="mt-2"><?= $komik['judul']; ?></h2>

                    <p class="card-text">Rating : <b><?= $komik['rating']; ?></b></p>
                    <p class="card-text"><small class="text-muted"><b>Penerbit : <?= $komik['penerbit']; ?></b></small></p>
                    <div class="row">
                        <div class="col">
                            <button>-</button>
                            <input type="number" width="10em" class="jum_prod">
                            <button>+</button>
                            <a href="/komik/edit/<?= $komik['slug']; ?>" class="btn btn-warning">Edit</a>
                        </div>

                    </div>
                    <form class="d-inline" action="/komik/<?= $komik['id']; ?>" method="POST">
                        <?= csrf_field(); ?>
                        <input type="hidden" name="_method" value="DELETE">
                        <button type="submit" class="btn btn-danger" onclick="return confirm('apakah anda yakin')"> Delete</button>
                    </form>
                    <br>

                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col">
            <h5>Spesifikasi Produk</h5>
            <p><?= $komik['keterangan']; ?></p>
        </div>
    </div>


</div>
<?= $this->endSection(); ?>