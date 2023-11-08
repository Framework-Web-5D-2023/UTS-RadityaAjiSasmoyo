<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class ExtendsController extends BaseController {
	public function home() {
		$mahasiswa = $this->mahasiswaModel->getAllMahasiswa();
		$data = [
			"title" => "Keranjang",
			"nama" => "Radit",
			"biodata" => [
			[
			  "nama" => "Vyatta Airboom",
			  "harga" => "200000"
			],
			[
			  "nama" => "Redmi Earbuds",
			  "harga" => "500000"
			],
		  ],
		  "mahasiswa" => $mahasiswa,
		// ]);
		];
        return view('home', $data);
		var_dump($data); // Using var_dump for debugging
    }
	
	public function detailMahasiswa($id) {
		$mahasiswa = $this->mahasiswaModel->getDetailMahasiswa($id);
		$data = [
		  "title" => "Checkout",
		  "mahasiswa" => $mahasiswa
		];

		return view('detail', $data);
		var_dump($data); // Using var_dump for debugging
	}
	
	public function index2(): string {
		$data = [
		  "title" => "Items",
		];

		return view('create', $data);
		var_dump($data); // Using var_dump for debugging
	}

	public function create() {
		$nama = $this->request->getVar("nama");
		$harga = $this->request->getVar("harga");
		$lokasi = $this->request->getVar("lokasi");

		$data = [
		  "nama" => $nama,
		  "harga" => $harga,
		  "lokasi" => $lokasi,
		];

		if ($nama) {
		  $this->mahasiswaModel->Save($data);
		  $this->session->setFlashData("success", "Item Has been added");
		} else {
		  $this->session->setFlashData("error", "Item Failed for added");
		}

		return redirect()->to(base_url("/"));//url not view
		var_dump($data); // Using var_dump for debugging
	}
}
