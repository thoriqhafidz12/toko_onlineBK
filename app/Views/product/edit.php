<?= $this->extend('layout') ?>
<?= $this->section('content') ?>

<div class="container">
        <div class="row">
            <div class="col-lg-12">
                <form action="" method="post" id="text-editor">
                    <input type="hidden" name="id" value="<?= $barang->id ?>">
                    <div class="form-group">
                        <label>Nama Produk</label>
                        <input type="text" name="nama" class="form-control" placeholder="nama produk" value="<?= $barang->nama ?>"required>
                    </div>
                    <div class="form-group">
                        <label>Harga</label>
                        <input type="text" name="harga" class="form-control" placeholder="harga produk" value="<?= $barang->harga ?>" required>
                    </div>
                    <div class="form-group">    
                        <label>Stok</label>
                        <input type="text" name="stok" class="form-control" value="<?= $barang->stok ?>" required>
                    </div>
                    <div class="form-group">    
                        <label>Kategori</label>
                        <select name="id_kategori"class="form-control" value="<?= $barang->id_kategori ?>">
                            <option value="1">Men</option>
                            <option value="2">Women</option>
                            <option value="3">Kid</option>
                        </select>
                        
                    </div>
                    <div class="form-group">
                        <label>Gambar Produk</label>
                        <input type="file" name="gambar" class="costum-file-input" id="costumFile2">
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