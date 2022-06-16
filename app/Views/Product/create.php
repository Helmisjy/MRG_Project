<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-8">
            <h2 class="my-3"> Form Tambah Product</h2>
            <form action="/product/save" method="post">
                <?= csrf_field(); ?>
                <div class="row mb-3">
                    <label for="kodebarang" class="col-sm-2 col-form-label">Kode Barang</label>
                    <div class="col-sm-10">
                        <input type="id" class="form-control" id="kodebarang">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="namaproduct" class="col-sm-2 col-form-label">Nama Barang</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="namaproduct">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="hargaproduct" class="col-sm-2 col-form-label">Harga Barang</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="hargaproduct">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="description" class="col-sm-2 col-form-label">Spesifikasi Barang</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="description">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Tambahkan</button>
            </form>
        </div>
    </div>
</div>
<?= $this->endsection(); ?>