<?= $this->extend('layout') ?>
<?= $this->section('content') ?>

<?php
if (session()->getFlashData('success')) {
?>
<div class="alert alert-info alert-dismissible fade show" role="alert">
    <?= session()->getFlashData('success') ?>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
<?php
}
?>
<?php 
if (session('validation')) { 
?>
    <div class="alert alert-danger">
        <ul>
            <?php foreach (session('validation') as $error): ?>
                <li><?= esc($error) ?></li>
            <?php endforeach ?>
        </ul>
    </div>
<?php 
}
?>
<?php
if (session()->getFlashData('failed')) {
?>
<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <?= session()->getFlashData('failed') ?>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
<?php
}
?>
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addModal">
    Tambah Data
</button>

<!-- Table with stripped rows -->
<table class="table datatable">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Tanggal</th>
            <th scope="col">Nominal (Rp)</th>
            <th scope="col"></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($diskon as $index => $diskon) : ?>
        <tr>
            <th scope="row"><?php echo $index + 1; ?></th>
            <td><?php echo $diskon['tanggal']; ?></td>
            <td><?php echo $diskon['nominal']; ?></td>
            <td>
                <button type="button" class="btn btn-success" data-bs-toggle="modal"
                    data-bs-target="#editModal-<?= $diskon['id'] ?>">
                    Ubah
                </button>
                <a href="<?= base_url('diskon/delete/' . $diskon['id']) ?>" class="btn btn-danger"
                    onclick="return confirm('Yakin hapus data ini ?')">
                    Hapus
                </a>
            </td>
        </tr>

        <!-- Edit Modal Begin -->
        <div class="modal fade" id="editModal-<?= $diskon['id'] ?>" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Edit Data</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="<?= base_url('diskon/edit/' . $diskon['id']) ?>" method="post"
                        enctype="multipart/form-data">
                        <?= csrf_field() ?>
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="tanggal">Tanggal</label>
                                <input type="date" name="tanggal" id="tanggal" class="form-control"
                                    value="<?= $diskon['tanggal'] ?>" readonly>
                            </div>
                            <br />
                            <div class="form-group">
                                <label for="nominal">Diskon (Rp)</label>
                                <input type="text" name="nominal" class="form-control" id="nominal"
                                    value="<?= $diskon['nominal'] ?>" placeholder="Harga Diskon" required>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Edit Modal End -->

        <?php endforeach ?>
    </tbody>
</table>
<!-- End Table with stripped rows -->

<!-- Add Modal Begin -->
<div class="modal fade" id="addModal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Data</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="<?= base_url('diskon') ?>" method="post" enctype="multipart/form-data">
                <?= csrf_field() ?>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="tanggal">Tanggal</label>
                        <input type="date" name="tanggal" id="tanggal" class="form-control">
                    </div>
                    <br />
                    <div class="form-group">
                        <label for="nominal">Diskon (Rp)</label>
                        <input type="text" name="nominal" class="form-control" id="nominal" placeholder="Harga Diskon" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Add Modal End -->
<?= $this->endSection() ?>
