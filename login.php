<?php
# Recode ?? Ribed amat sih klw mau make:(
# TOOLS : ZLUCIFER , TU4N BADUT , MR.Y0UKN0WM3 , MR.TAMFANX

$username = "hans";
$password = "puTera01";

echo "\033[1;32m [!] Halaman Login [!]\n";
echo "[>] Insert Username : ";
$user = trim(fgets(STDIN));
echo "[>] Insert Password : ";
$pass = trim(fgets(STDIN));
sleep(1);
system('clear');
echo "[+] Validation Input [-]\n";

if ($user == $username && $pass == $password){
	sleep(1);
	system('clear');
	echo "[>>] Your Input is true [<<]\n";
	sleep(1);
	system('clear');
	echo "<<=============================>>\n";
	sleep(0.1);
	echo "<<=== ZLUCIFER - TU4N BADUT ===>>\n";
	sleep(0.1);
	echo "<<===      MR.Y0UKN0WM3     ===>>\n";
	sleep(0.1);
	echo "<<===       MR.TAMFANX      ===>>\n";
	sleep(0.1);
	echo "<<=============================>>\n";
	sleep(0.1);
	echo "{ 01 } ZLUCIFER\n";
	sleep(0.1);
	echo "{ 02 } TU4N BADUT\n";
	sleep(0.1);
	echo "{ 03 } MR.Y0UKN0WM3\n";
	sleep(0.1);
	echo "{ 04 } MR.TAMFANX\n";
	sleep(0.1);
	echo "{ 00 } Exit\n";
	sleep(1);
	echo "root@menu~# ";
	$menu = trim(fgets(STDIN));
	
	if ($menu == 01 || $menu == 1){
		system('php zlucifer.php');
	}
	
	if ($menu == 02 || $menu == 2){
		system('php tuanbadut.php');
	}
	
	if ($menu == 03 || $menu == 3){
		system('php mr.php');
	}
	
	if ($menu == 04 || $menu == 4){
		system('php tamfan.php');
	} 
	
	if ($menu == 00){
		echo "Goodbye !!\n";
	}
} else {
	echo "[!] Failed to Login [!]\n";
?>