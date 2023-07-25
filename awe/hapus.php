<?php 
require 'functions.php';

$id = $_GET["id"];

if( hapus($id) > 0 ) {
	echo "
		<script>
			alert('Terimakasih sudah berhasil dihapus!');
			document.location.href = 'product.php';
		</script>
	";
} else {
	echo "
		<script>
			alert('Selamat gagal ditambahkan!');
			document.location.href = 'index.php';
		</script>
	";
}
// Ini dibuat dengan bahasa pemograman PHP untuk sisi back end nya untuk sisi UI pakai boostrap
?>