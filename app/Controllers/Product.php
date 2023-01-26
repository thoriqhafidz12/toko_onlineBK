<?php namespace App\Controllers;

use App\Models\BarangModel;
use App\Models\KategoriModel;

class Product extends BaseController
{
    public function __construct()
	{ 
        helper('form'); 
		$this->kategori = new KategoriModel();
        $this->barang = new BarangModel();
        
	}
	public function index()
	{
		$barang = $this->barang->select('barang.*, kategori.nama AS kategori')->join('kategori', 'barang.id_kategori=kategori.id')->findAll();
        $kategori = $this->kategori->findAll();
		return view('product/index',[
			'barangs' => $barang,
            'kategoris' => $kategori,
		]);

        // $product = new ProductModel();
        // $data['productes'] = $product->findAll();
		// echo view('admin_list_product', $data);
	}

    //--------------------------------------------------------------------------
    
    // public function preview($id)
	// {
	// 	$product = new ProductModel();
	// 	$data['product'] = $product->where('id', $id)->first();
		
	// 	if(!$data['product']){
	// 		throw PageNotFoundException::forPageNotFound();
	// 	}
	// 	echo view('product_detail', $data);
    // }

    // //--------------------------------------------------------------------------
    
    public function create()
    {
        // lakukan validasi
        $validation =  \Config\Services::validation();
        $validation->setRules(['nama' => 'required']);
        $isDataValid = $validation->withRequest($this->request)->run();

        // jika data valid, simpan ke database
        if($isDataValid){
            $barang = new BarangModel();
            $barang->insert([
                "nama" => $this->request->getPost('nama'),
                "harga" => $this->request->getPost('harga'),
                "stok" => $this->request->getPost('stok'),
                "id_kategori" => $this->request->getPost('id_kategori'),
                "gambar" => $this->request->getPost('gambar')
            ]);
            return redirect('product');
        }
		
        // tampilkan form create
        echo view('product/new');
    }

    // //--------------------------------------------------------------------------

    public function edit($id)
    {
        // ambil artikel yang akan diedit
        $barang = new BarangModel();
        $data['barang'] = $barang->where('id', $id)->first();
        
        // lakukan validasi data artikel
        $validation =  \Config\Services::validation();
        $validation->setRules([
            'id' => 'required',
            'nama' => 'required'
        ]);
        $isDataValid = $validation->withRequest($this->request)->run();
        // jika data vlid, maka simpan ke database
        if($isDataValid){
            $barang->update($id, [
                "nama" => $this->request->getPost('nama'),
                "harga" => $this->request->getPost('harga'),
                "stok" => $this->request->getPost('stok'),
                "id_kategori" => $this->request->getPost('id_kategori'),
                "gambar" => $this->request->getPost('gambar')
            ]);
            return redirect('product');
        }

        // tampilkan form edit
        echo view('product/edit', $data);
    }

    //--------------------------------------------------------------------------

	public function delete($id){
        $barang = new BarangModel();
        $barang->delete($id);
        return redirect('product');
    }
}