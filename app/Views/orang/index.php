<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h1> Daftar User</h1>
            <form action="" method="post">
            
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Search" name="keyword">
                <button class="btn btn-outline-secondary" type="submit" name="submit">Cari</button>
            </div>
            </form>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <table class="table">
                <thead>
                    <tr style="color: white">
                        <th scope="col">#</th>
                        <th scope="col">UserName</th>
                        <th scope="col">Email</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1 + (10 * ($currentPage - 1)) ?>
                    <?php foreach ($orang as $o) : ?>
                        <tr style="color: white">
                            <th scope="row"><?= $i++; ?></th>
                            <td><?= $o['username']; ?></td>
                            <td><?= $o['email']; ?></td>
                            <td><a class="btn btn-success">Detail</a></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <?= $pager->links('orang', 'orang_pagination'); ?>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>