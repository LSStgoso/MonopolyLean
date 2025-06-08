<?php session_start();
if (isset($_SESSION['usuario'])) {
	header('Location: 1_principal.html');
} else {
	header('Location: 1_principal_s.html');
}
?>