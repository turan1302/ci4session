<!DOCTYPE html>
<html>
<head>
	<title>Anasayfa</title>
</head>
<body>
	<?php $email = session()->get("user")->email; 

	echo "Hoşşgeldiniz ".$email;

	?>
	<br><br>
	<a href="<?php echo base_url('cikis-yap'); ?>">Çıkış Yap</a>
</body>
</html>