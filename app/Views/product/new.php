<?= $this->extend('layout') ?>
<?= $this->section('content') ?>
    <div class="breacrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text product-more">
                        <a ><i class="fa fa-home"></i> Home</a>
                        <a >Product</a>
                        <span>New</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>Nama Produk</label>
                        <input type="text" name="nama" class="form-control" placeholder="nama produk" required>
                    </div>
                    <div class="form-group">
                        <label>Harga</label>
                        <input type="text" name="harga" class="form-control" placeholder="harga produk" required>
                    </div>
                    <div class="form-group">    
                        <label>Stok</label>
                        <input type="text" name="stok" class="form-control" required>
                    </div>
                    <div class="form-group">    
                        <label>Kategori</label>
                        <select name="id_kategori"class="form-control">
                            <option value="1">Men</option>
                            <option value="2">Women</option>
                            <option value="3">Kid</option>
                        </select>
                        
                    </div>
                    <div class="form-group">
                        <label>Gambar Produk</label>
                        <input type="file" name="gambar" class="costum-file-input" id="gambar" required>
                    </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" name="status" value="published" class="btn btn-primary">SIMPAN</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

<?= $this->endSection() ?>