<?php


echo "Anomaly Hackers Group\n"
echo "By Sc0rp1on";
echo "Kelimeyi Giriniz:\n";
$switch = trim(fgets(STDIN, 1024));


switch ($switch) {
	case 1:

	echo "Kelimeyi giriniz:\n"
	$plaintext = trim(fgets(STDIN, 1024));
	$ciphertext = md5($plaintext)
	echo "Sifrelendi:\n";
	echo $ciphertext


	
		break;
	
	default:
		echo "Bir daha deneyiniz.";
		break;
}
















?>
