<?= $this->extend('layout') ?>
<?= $this->section('content') ?>
<!-- Breadcrumb Section Begin -->
    <div class="breacrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <a href="#"><i class="fa fa-home"></i> Home</a>
                        <span>Product</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- Breadcrumb Section Begin -->
    
   
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
            <a href="<?= base_url('product/new') ?>" class="btn btn-primary">Barang Baru</a>
                <table class="table">
                <thead>
                <tr>
                    <th>Nama Produk</th>
                    <th>Harga</th>
                    <th>Stok</th>
                    <th>Gambar</th>
                    <th>Kategori</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach($barangs as $index=>$barang):  ?>
                <tr>
                    <td><?= $barang->nama ?></td>
                    <td>
                        <a href="<?= site_url('shop/product/'.$barang->id.'') ?>"></a>
                    <?= $barang->harga ?> 
                    </td>
                    <td>
                        <?= $barang->stok ?>
                    </td>
                    <td>
                        <img src="<?= base_url('uploads/'.$barang->gambar.'') ?>" alt="">
                    </td>
                    <td><?= $barang->kategori ?></td>
                    <td>
                        <a href="<?= base_url('product/'.$barang->id.'/edit') ?>" class="btn btn-sm btn-outline-secondary">Edit</a>
                        <a href="#" data-href="<?= base_url('product/'.$barang->id.'/delete') ?>" onclick="confirmToDelete(this)" class="btn btn-sm btn-outline-danger">Delete</a>
                    </td>
                </tr>
                <?php endforeach ?>
                </tbody>
                </table>
            </div>
        </div>
    </div>
    <div id="confirm-dialog" class="modal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-body">
                <h2 class="h2">Apakah anda yakin menghapus?</h2>
                <p>Barang Tersebut akan dihapus</p>
            </div>
            <div class="modal-footer">
                <a href="#" role="button" id="delete-button" class="btn btn-danger">Delete</a>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            </div>
            </div>
        </div>
    </div>

    <script>
        function confirmToDelete(el){
            $("#delete-button").attr("href", el.dataset.href);
            $("#confirm-dialog").modal('show');
        }
    </script>

<?= $this->endSection() ?>