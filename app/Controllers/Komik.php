<?php

namespace App\Controllers;

use App\Models\KomikModel;
use PDO;

class Komik extends BaseController
{
    protected $komikModel;
    public function __construct()
    {
        // $komikModel = new \App\Models\KomikModel()
        $this->komikModel = new KomikModel();
    }

    

    public function index()
    {
        // $komik = $this->komikModel ->findAll();
        $data = [
            'title' => 'Daftar Komik',
            'komik' => $this->komikModel->getKomik()
        ];

        return view('komik/index', $data);
    }

    public function detail($slug)
    {
        $data = [
            'title' => 'Detail Komik',
            'komik' => $this->komikModel->getKomik($slug)
        ];

        //if empty
        if(empty($data['komik'])){
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Judul '. $slug . 'Tidak ditemukan');   
        }
        
        return view('komik/detail', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Form Tambah Data Komik',
            'validation' => \Config\Services::validation()
        ];

        return view('komik/create', $data);
    }

    public function save(){

        // validasi input
        if(!$this->validate([
            'judul' => [
                'rules' => 'required|is_unique[komik.judul]',
                'errors' => [
                    'required' => '{field} komik harus diisi.',
                    'is_unique' => '{field} komik sudah ada'
                ]
            ],
            'sampul' => [
                'rules'=> 'uploaded[sampul]|max_size[sampul,5120]|is_image[sampul]|mime_in[sampul,image/jpg,image/jpeg,image/png]',
                'errors' =>[
                    'uploaded' => 'Pilih gambar sampul terlebih dahulu',
                    'max_size' => 'Ukuran gambar terlalu besar',
                    'is_image' => 'Yang anda pilih bukan gambar',
                    'mime_in' => 'Yang anda pilih bukan gambar'
                ]
            ]
        ])){
            // $validation = \Config\Services::validation();
            
            // return redirect()->to('/komik/create')->withInput()->with('validation',$validation);
            return redirect()->to('/komik/create')->withInput();
        }

        // ambil gambar
        $fileSampul = $this->request->getFile('sampul');
        // generate nama sampul random
        $namaSampul = $fileSampul->getRandomName();        
        // pindah file ke folder img
        $fileSampul->move('img',$namaSampul);
        // ambil nama file
        // $namaSampul = $fileSampul->getName();

        $slug = url_title($this->request->getVar('judul'),'-',true);
        $this->komikModel->save([
            'judul'=> $this->request->getVar('judul'),
            'slug'=> $slug,
            'keterangan'=> $this->request->getVar('penulis'),
            'penerbit'=> $this->request->getVar('penerbit'),
            'sampul'=> $namaSampul
        ]);

        session()->setFlashdata('pesan','Data Berhasil ditambahkan');

        return redirect()->to('/komik');
    }

    public function delete($id){
        //cari gambra berdasarkan id
        $komik = $this->komikModel->find($id);

        // hapus gambar
        unlink('img/'. $komik['sampul']);

        $this->komikModel->delete($id);
        session()->setFlashdata('pesan','Data Berhasil dihapus');

        return redirect()->to('/komik');
    }

    public function edit($slug){
        $data = [
            'title' => 'Form Ubah Data Komik',
            'validation' => \Config\Services::validation(),
            'komik' => $this->komikModel->getKomik($slug)
        ];

        return view('komik/edit', $data);
    }

    public function update($id){
        // cek judul
        $komikLama = $this->komikModel->getKomik($this->request->getVar('slug'));
        if($komikLama['judul'] == $this->request->getVar('judul')){
            $rule_judul = 'required';
        }else{
            $rule_judul ='required|is_unique[komik.judul]';
        }

        if(!$this->validate([
            'judul' => [
                'rules' => $rule_judul,
                'errors' => [
                    'required' => '{field} komik harus diisi.',
                    'is_unique' => '{field} komik sudah ada'
                ]
            ],
            'sampul' => [
                'rules'=> 'max_size[sampul,5120]|is_image[sampul]|mime_in[sampul,image/jpg,image/jpeg,image/png]',
                'errors' =>[
                    'max_size' => 'Ukuran gambar terlalu besar',
                    'is_image' => 'Yang anda pilih bukan gambar',
                    'mime_in' => 'Yang anda pilih bukan gambar'
                ]
            ]
        ])){
            // $validation = \Config\Services::validation();
            
            return redirect()->to('/komik/edit/'.$this->request->getVar('slug'))->withInput();
        }
        
        $fileSampul = $this->request->getFile('sampul');
        //cek gambar sama atau baru
        if($fileSampul->getError() == 4){
            $namaSampul = $this->request->getVar('sampulLama');
        }else{
            //generate file random
            $namaSampul = $fileSampul->getRandomName();
            $fileSampul->move('img',$namaSampul);
            unlink('img'. $this->request->getVar('sampulLama'));
        }
        
        $slug = url_title($this->request->getVar('judul'),'-',true);
        $this->komikModel->save([
            'id' => $id,
            'judul'=> $this->request->getVar('judul'),
            'slug'=> $slug,
            'keterangan'=> $this->request->getVar('penulis'),
            'penerbit'=> $this->request->getVar('penerbit'),
            'sampul'=> $namaSampul
        ]);
        session()->setFlashdata('pesan','Data Berhasil diubah');

        return redirect()->to('/komik');
    }
}
