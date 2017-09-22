<?php


echo "Anomaly Hackers Group\n";
echo "By Sc0rp1on\n";
echo "1-MD5\n2-CRC32\n3-SHA1\n4-BASE64\n";
echo "Modülünüzü Seçiniz:\n";


$switch = trim(fgets(STDIN, 1024));


switch ($switch) {
	case 1:

	echo "Kelimeyi giriniz:\n";
	$plaintext = trim(fgets(STDIN, 1024));
	$ciphertext = md5($plaintext);
	echo "Sifrelendi:\n";
	echo "$ciphertext\n";

		break;

	case 2:
	
	echo "Kelimeyi giriniz:\n";
	$plaintext2 = trim(fgets(STDIN, 1024));
	$ciphertext2 = crc32($plaintext2);
	echo "Sifrelendi:\n";
	echo "$ciphertext2\n";

	break;

	case 3:
	echo "Kelimeyi giriniz:\n";
	$plaintext3 = trim(fgets(STDIN, 1024));
	$ciphertext3 = sha1($plaintext3);
	echo "Sifrelendi:\n";
	echo "$ciphertext3\n";

	break;
	case 4:
	echo "Kelimeyi giriniz:\n";
	$plaintext4 = trim(fgets(STDIN, 1024));
	$ciphertext = base64_encode($plaintext4);
	echo "Sifrelendi:\n";
	echo "$ciphertext4\n";



	
	
	default:
		echo "Bir daha deneyiniz.";
		break;
}
















?>
