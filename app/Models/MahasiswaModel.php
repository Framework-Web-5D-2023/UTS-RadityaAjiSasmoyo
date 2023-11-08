<?php

namespace App\Models;

use CodeIgniter\Model;

class MahasiswaModel extends Model {
	protected $table = 'mahasiswa';
	protected $primaryKey = 'id';
	protected $protectFields = false;
	protected $useTimestamps = true; //Dates = required to alter .sql created_at, updated_at
	public function getAllMahasiswa(){
		return $this->findAll();
	}
	public function getDetailMahasiswa($id){
		return $this->find($id);
	}
	public function create($data){
		return $this->insert($data);
	}
}