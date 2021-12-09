<?php
if (isset($_POST['link'])) {
	$host = parse_url($_POST['link'], PHP_URL_HOST);
	$domain = str_ireplace('www.', '', $host);
	include_once __DIR__ .'/system/library/function.php';
	switch (true) {
		case($domain == "tiktok.com" || $domain == "m.tiktok.com" || $domain == "vm.tiktok.com" || $domain == "vt.tiktok.com"):
		include_once __DIR__ .'/system/library/tiktok-service.php';
		$download = new Download();
		$data = $download->from($_POST['link']);
		$data = json_decode($data);
		include_once __DIR__ .'/system/library/download-9.php';
		break;

		default:
		echo '<div class="alert alert-danger" role="alert">No data found!</div>';
		break;
	}
}
?>