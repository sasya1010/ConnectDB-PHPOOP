<?php 
class DBconfig2 {
//class merupakan cetak biru untuk membuat objek atau mewakili sebuah kata benda, hewan, buah, dll.
//nama objek yang kugunakan adalah DBconfig2
	private $_host = 'localhost';
	private $_username = 'data-nilai';
	private $_password = '';
	private $_database = 'nilai';
 	//jika sebuah property atau method di set sebagai private, maka yang bisa mengakses satu-satunya adalah class itu sendiri
 	//class lain tidak bisa mengaksesnya, termasuk class turunan.
 	//line 5-8 berisi privileges yang kita buat

	protected $conn;
	//ketika sebuah property atau method di set menggunakan Protected, maka property tersebut hanya bisa diakses class turunan dan class itu sendiri

	public function kontruksi()
		//nama method 
	{				
		if (!isset($this->conn)) {
		//supaya eror dapat terdeteksi, gunakan isset

			$this->conn = new mysqli($this->_host, $this->_username, $this->_password, $this->_database);
			if (!$this->conn) {
				echo 'Cannot connect to database server';
				exit;
			//jika gagal menghubungkan ke database, maka tampilkan "cannot connect to database server"
			}
		}

		return $this->conn;
		//kembalikan nilai dari conn
	}
}
$cn = mysqli_connect('localhost', 'root', '', 'rpl_pbo');
//koneksi ke database

function query($query) {
	global $cn;
	$result = mysqli_query($cn, $query);

	$rows = [];
	while($row = mysqli_fetch_assoc($result)) {
		$rows[] = $row;
	//function ini untuk membuat tempat kosong, dan nanti akan menggunakan while untuk menampilkan nilai dari data di table
	}
	return $rows;
}
?>


