update coding saya

// application/Models/MahasiswaModel.php
<?php

namespace App\Models;

use CodeIgniter\Model;

class MahasiswaModel extends Model {
	protected $table = 'mahasiswa';
	protected $primaryKey = 'id';
	protected $protectFields = false;
	protected $useTimestamps = true; //Dates
	public function getAllMahasiswa(){
		return $this->findAll();
	}
	public function create($data){
		return $this->insert($data);
	}
}

// application/Config/Database.php 
<?php

namespace Config;

use CodeIgniter\Database\Config;

/**
 * Database Configuration
 */
class Database extends Config
{
    public array $default = [
        'database'     => 'tugas_fw',

// application/controllers/ExtendsController.php
<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class ExtendsController extends BaseController {
	
	public function index() {
        $data['nickname'] = "Radit";
		$data['title'] = "Home";
		
		$mahasiswa = $this->mahasiswaModel->getAllMahasiswa();
		// $data = [ //overwritting
		$data = array_merge($data, [
			"title" => "Home",
			"mahasiswa" => $mahasiswa,
		]);
		
        return view('home', $data);
		var_dump($data); // Using var_dump for debugging
    }
	
	// public function profile() { 
    public function profile(): string {
        $data['name'] = "Raditya Aji Sasmoyo";
        $data['nickname'] = "Radit";
        $data['npm'] = "2010631170111";
        $data['class'] = "Framework Pemograman Web";
        $data['phone'] = "+62 812-9026-4815";
        $data['email'] = "2010631170111@student.unsika.ac.id";
        $data['username'] = "raditya2010631170111";
		$data['title'] = "About Us";

        return view('about_us', $data);
		var_dump($data); // Using var_dump for debugging

		$this->load->view('about_us', $data);
	}
	
	public function createMahasiswa() {
        $data['nickname'] = "Radit";
        return view('home', $data);

		$ama = $this->request->getVar ("nama") ;
		$npm = $his->request->getVar("npm");
		$prodi = $this-request->getVar("prodi");
		$minat = $this->request->getVar("minat") ;
		$domisili = $this->request->getVar("nama" );
		$jenis_kelamin = $this->request->getVar("jenis_kelamin");

		$data = [
		"nama"-> $nama,
		"npm" > $npm,
		"prodi" -> $prodi,
		"minat" => $minat,
		"domisili" => $domisili,
		"jenis kelamin" -> $jenis kelamin,
		$this->mahasiswaModel->create($data);
		$this->session->setFlashData("success", "Mahasiswa has been added");
		return redirect()->to(base url("/"));
		var_dump($data); // Using var_dump for debugging
    }
}


// application/controllers/BaseController.php
unchanged

<!-- application/views/navbar.php -->
unchanged

<!-- application/views/home.php -->
<!DOCTYPE html>
<html>
<head>
    <title><?= $title ?></title>
</head>
<body>
    <?= $this->include('navbar') ?>
	<div class="container">
		<h1>Hello, <?= $nickname ?></h1>
		<table class="table caption-top">
			<caption>List of users</caption>
			<thead>
				<tr>
					<th scope="col">#</th>
					<th scope="col">Nama</th>
					<th scope="col">NPM</th>
					<th scope="col">Prodi</th>
				</tr>
			</thead>
			<tbody>
				<?php $no = 1; ?>
				<?php foreach ($mahasiswa as $m) : ?>
					<tr>
						<th scope="row"><?= $no++; ?></th>
						<td><?= $m["nama"]; ?></td>
						<td><?= $m["npm"]; ?></td>
						<td><?= $m["prodi"]; ?></td>
					</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
	</div>
</body>
</html>


<!-- application/views/about_us.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
</head>
<body>
<?= $this->include('navbar') ?>
<div class="container">
    <div class="info">
		<table class="table table-bordered">
			<tr>
				<td colspan="2" class="text-start">
					<button class="btn btn-primary" onclick="changeName()">Change Name</button>
				</td>
            </tr>
            <tr>
                <td id="nameCellLabel"><h3>Nama:</h3></td>
                <td id="nameCellValue"><h3><?= $name ?></h3></td>
            </tr>
			<tr>
				<td>NPM:</td>
				<td><?= $npm ?></td>
			</tr>
			<tr>
				<td>Matkul:</td>
				<td><?= $class ?></td>
			</tr>
			<tr>
				<td>No. HP:</td>
				<td>
					<a href="https://wa.me/6281290264815" target="_blank">
						<i class="fab fa-whatsapp"></i> <?= $phone ?>
					</a>
				</td>
			</tr>
			<tr>
				<td>Email:</td>
				<td><?= $email ?></td>
			</tr>
			<tr>
				<td>Username:</td>
				<td><?= $username ?>
					<a href="https://github.com/raditya2010631170111" target="_blank" class="btn btn-secondary">
						<i class="fab fa-github"></i> GitHub Profile
					</a>
				</td>
			</tr>
		</table>
    </div>
</div>

<script>
    function changeName() {
        var nameCellLabel = document.getElementById("nameCellLabel");
        var nameCellValue = document.getElementById("nameCellValue");
        var classCell = document.getElementById("classCell");
        
        var newNameLabel = "Nickname:";
        var newNameValue = "<?= $nickname ?>"; 
        var newClass = "New Class";
        
        if (nameCellLabel.innerHTML.includes("Nama:")) {
            nameCellLabel.innerHTML = "<h3>" + newNameLabel + "</h3>";
            nameCellValue.innerHTML = "<h3>" + newNameValue + "</h3>";
            classCell.innerText = newClass;
        } else {
            nameCellLabel.innerHTML = "<h3>Nama:</h3>";
            nameCellValue.innerHTML = "<h3><?= $name ?></h3>";
            classCell.innerText = $class;
        }
    }
</script>

</body>
</html>

<!-- application/views/create.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
</head>
<body>
	<form action="<?= base_url("/create"); ?>" method-"post">
		<div class="modal-body">
			<div class=" row">
				<div class="col-12 row mb-3">
					<div class="col-6">
						<div class="form-group">
							<label for="nama">Nama</label>
							<input type="text" id="nama" name="nama" class="form-control" placeholder="Nama" aria-Label="Nama">
						</div>
					</div>
					<div class="col-6">
						<div class="form-group">
							<label for="npm">NPM</label>
							<input type="text" id="npm" name="npm" class="form-control" placeholder="NPM" aria-Label="NPM">
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class-" modal-footer">
			<button type-"button" class=" btn btn-secondary" data-bs-dismiss="modal">Close</button>
			<button type="submit" class="btn btn-primary"Save</button>
		</div>
	</form>
</body>
</html>

// application/config/routes.php
<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('home', 'ExtendsController::index');
$routes->get('about_us', 'ExtendsController::profile');
$routes->post('/create', 'ExtendsController::createMahasiswa');