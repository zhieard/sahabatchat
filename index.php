<?php



$token = '1226561516:AAG9u_9oezoI2GL8HOb6ULhrKZrV2kbbbbU'; // Masukkin Bot Token Kamu Disini
$admin_chatid = '1376799606'; // Masukkin chat id kamu disini



$update = file_get_contents("php://input");
$update = json_decode($update, true);
$text = $update["message"]["text"];
$chat_id = $update["message"]["chat"]["id"];
$username = $update["message"]["from"]["username"];
$fname = $update["message"]["from"]["first_name"];
$lname = $update["message"]["from"]["last_name"];
$type = $update["message"]["chat"]["type"];
if ($type != "private"){
exit();
}



// Admin Mengirimkan Pengumuman
if(preg_match("/\/pengumuman/", $text)){
if ($chat_id == $admin_chatid){
$a = explode('/pengumuman ', $text);
$mes = $a[1];
$mes = rawurlencode($mes);

$getfile = file_get_contents("alluser.json");
$decode = json_decode($getfile, true);

foreach ($decode as $id_user){
$cc[] = $id_user;
}



$batas = count($cc);

$z = -1;


for ($jjjj=0;$jjjj<30;$jjjj++){
$a = $z+1;
$b = $a+1;
$c = $b+1;
$d = $c+1;
$e = $d+1;
$f = $e+1;
$g = $f+1;
$h = $g+1;
$i = $h+1;
$j = $i+1;
$k = $j+1;
$l = $k+1;
$m = $l+1;
$n = $m+1;
$o = $n+1;
$p = $o+1;
$q = $p+1;
$r = $q+1;
$s = $r+1;
$t = $s+1;
$u = $t+1;
$v = $u+1;
$w = $v+1;
$x = $w+1;
$y = $x+1;
$z = $y+1;

if ($a>$batas || $b>$batas || $c>$batas || $d>$batas || $e>$batas || $f>$batas || $f>$batas || $g>$batas || $h>$batas || $i>$batas || $j>$batas || $k>$batas || $l>$batas || $m>$batas || $n>$batas || $o>$batas || $p>$batas || $q>$batas || $r>$batas || $s>$batas || $t>$batas || $u>$batas || $v>$batas || $w>$batas || $x>$batas || $y>$batas || $z>$batas){
break;
}



$ch_1 = curl_init("https://api.telegram.org/bot$token/sendMessage?chat_id=$cc[$a]&text=$mes");
$ch_2 = curl_init("https://api.telegram.org/bot$token/sendMessage?chat_id=$cc[$b]&text=$mes");
$ch_3 = curl_init("https://api.telegram.org/bot$token/sendMessage?chat_id=$cc[$c]&text=$mes");
$ch_4 = curl_init("https://api.telegram.org/bot$token/sendMessage?chat_id=$cc[$d]&text=$mes");
$ch_5 = curl_init("https://api.telegram.org/bot$token/sendMessage?chat_id=$cc[$e]&text=$mes");
$ch_6 = curl_init("https://api.telegram.org/bot$token/sendMessage?chat_id=$cc[$f]&text=$mes");
$ch_7 = curl_init("https://api.telegram.org/bot$token/sendMessage?chat_id=$cc[$g]&text=$mes");
$ch_8 = curl_init("https://api.telegram.org/bot$token/sendMessage?chat_id=$cc[$h]&text=$mes");
$ch_9 = curl_init("https://api.telegram.org/bot$token/sendMessage?chat_id=$cc[$i]&text=$mes");
$ch_10 = curl_init("https://api.telegram.org/bot$token/sendMessage?chat_id=$cc[$j]&text=$mes");
$ch_11 = curl_init("https://api.telegram.org/bot$token/sendMessage?chat_id=$cc[$k]&text=$mes");
$ch_12 = curl_init("https://api.telegram.org/bot$token/sendMessage?chat_id=$cc[$l]&text=$mes");
$ch_13 = curl_init("https://api.telegram.org/bot$token/sendMessage?chat_id=$cc[$m]&text=$mes");
$ch_14 = curl_init("https://api.telegram.org/bot$token/sendMessage?chat_id=$cc[$n]&text=$mes");
$ch_15 = curl_init("https://api.telegram.org/bot$token/sendMessage?chat_id=$cc[$o]&text=$mes");
$ch_16 = curl_init("https://api.telegram.org/bot$token/sendMessage?chat_id=$cc[$p]&text=$mes");
$ch_17 = curl_init("https://api.telegram.org/bot$token/sendMessage?chat_id=$cc[$q]&text=$mes");
$ch_18 = curl_init("https://api.telegram.org/bot$token/sendMessage?chat_id=$cc[$r]&text=$mes");
$ch_19 = curl_init("https://api.telegram.org/bot$token/sendMessage?chat_id=$cc[$s]&text=$mes");
$ch_20 = curl_init("https://api.telegram.org/bot$token/sendMessage?chat_id=$cc[$t]&text=$mes");
$ch_21 = curl_init("https://api.telegram.org/bot$token/sendMessage?chat_id=$cc[$u]&text=$mes");
$ch_22 = curl_init("https://api.telegram.org/bot$token/sendMessage?chat_id=$cc[$v]&text=$mes");
$ch_23 = curl_init("https://api.telegram.org/bot$token/sendMessage?chat_id=$cc[$w]&text=$mes");
$ch_24 = curl_init("https://api.telegram.org/bot$token/sendMessage?chat_id=$cc[$x]&text=$mes");
$ch_25 = curl_init("https://api.telegram.org/bot$token/sendMessage?chat_id=$cc[$y]&text=$mes");
$ch_26 = curl_init("https://api.telegram.org/bot$token/sendMessage?chat_id=$cc[$z]&text=$mes");



curl_setopt($ch_1, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch_2, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch_3, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch_4, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch_5, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch_6, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch_7, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch_8, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch_9, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch_10, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch_11, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch_12, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch_13, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch_14, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch_15, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch_16, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch_17, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch_18, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch_19, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch_20, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch_21, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch_22, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch_23, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch_24, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch_25, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch_26, CURLOPT_RETURNTRANSFER, true);


// build the multi-curl handle, adding both $ch
$mh = curl_multi_init();
curl_multi_add_handle($mh, $ch_1);
curl_multi_add_handle($mh, $ch_2);
curl_multi_add_handle($mh, $ch_3);
curl_multi_add_handle($mh, $ch_4);
curl_multi_add_handle($mh, $ch_5);
curl_multi_add_handle($mh, $ch_6);
curl_multi_add_handle($mh, $ch_7);
curl_multi_add_handle($mh, $ch_8);
curl_multi_add_handle($mh, $ch_9);
curl_multi_add_handle($mh, $ch_10);
curl_multi_add_handle($mh, $ch_11);
curl_multi_add_handle($mh, $ch_12);
curl_multi_add_handle($mh, $ch_13);
curl_multi_add_handle($mh, $ch_14);
curl_multi_add_handle($mh, $ch_15);
curl_multi_add_handle($mh, $ch_16);
curl_multi_add_handle($mh, $ch_17);
curl_multi_add_handle($mh, $ch_18);
curl_multi_add_handle($mh, $ch_19);
curl_multi_add_handle($mh, $ch_20);
curl_multi_add_handle($mh, $ch_21);
curl_multi_add_handle($mh, $ch_22);
curl_multi_add_handle($mh, $ch_23);
curl_multi_add_handle($mh, $ch_24);
curl_multi_add_handle($mh, $ch_25);
curl_multi_add_handle($mh, $ch_26);

// execute all queries simultaneously, and continue when all are complete
  $running = null;
  do {
    curl_multi_exec($mh, $running);
  } while ($running);

//close the handles
curl_multi_remove_handle($mh, $ch_1);
curl_multi_remove_handle($mh, $ch_2);
curl_multi_remove_handle($mh, $ch_3);
curl_multi_remove_handle($mh, $ch_4);
curl_multi_remove_handle($mh, $ch_5);
curl_multi_remove_handle($mh, $ch_6);
curl_multi_remove_handle($mh, $ch_7);
curl_multi_remove_handle($mh, $ch_8);
curl_multi_remove_handle($mh, $ch_9);
curl_multi_remove_handle($mh, $ch_10);
curl_multi_remove_handle($mh, $ch_11);
curl_multi_remove_handle($mh, $ch_12);
curl_multi_remove_handle($mh, $ch_13);
curl_multi_remove_handle($mh, $ch_14);
curl_multi_remove_handle($mh, $ch_15);
curl_multi_remove_handle($mh, $ch_16);
curl_multi_remove_handle($mh, $ch_17);
curl_multi_remove_handle($mh, $ch_18);
curl_multi_remove_handle($mh, $ch_19);
curl_multi_remove_handle($mh, $ch_20);
curl_multi_remove_handle($mh, $ch_21);
curl_multi_remove_handle($mh, $ch_22);
curl_multi_remove_handle($mh, $ch_23);
curl_multi_remove_handle($mh, $ch_24);
curl_multi_remove_handle($mh, $ch_25);
curl_multi_remove_handle($mh, $ch_26);
curl_multi_close($mh);




}









$mes = "Pengiriman broadcast selesai";
$mes = rawurlencode($mes);
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://api.telegram.org/bot$token/sendMessage?chat_id=696907598&text=$mes");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($ch);


}
}



	// Menangkap User Dan Dimasukkan Kedalam alluser.json
$getfile = file_get_contents("alluser.json");
$decode = json_decode($getfile, true);
$id_users = array();
foreach ($decode as $id_user){
$id_users[] = $id_user;
}


if (!in_array($chat_id, $id_users)){

             // Ngecek Di Websitenya (database)
$alluser = file_get_contents("https://del.dog/raw/labamerabe");
$alluser = json_decode($alluser, true);
foreach ($alluser as $allusers){
$aas[] = $allusers;
}


// jika tidak ada di web
if (!in_array($chat_id, $aas)){
// tambah di alluser.json
$aas[] = $chat_id;
$en = json_encode($aas, JSON_PRETTY_PRINT);
file_put_contents("alluser.json", $en);
// tambah di website (database)
$headers[] = "content-type: application/json; charset=UTF-8";
$headers[] = "cookie: doggie_session=ffaf389591326607%2F550b2da74cc48f0fd6b08fe6d8d642e17a939fecab27ce16fac972fcdc9907a8";
$data = '{"content":"'.$en.'","slug":"labamerabe"}';
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://del.dog/documents?frontend=true");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
$result = curl_exec($ch);
}elseif (in_array($chat_id, $aas)){
$en = json_encode($aas, JSON_PRETTY_PRINT);
file_put_contents("alluser.json", $en);
}
}


// Menghitung Jumlah User
$suser = count($id_users);

	// Terdeteksi /alluser
if(preg_match("/\/alluser/i", $text)){

$message1 = "
Ada $suser User
";
$message1 = rawurlencode($message1);
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://api.telegram.org/bot$token/sendMessage?chat_id=$chat_id&text=$message1");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($ch);


}
$id_users = array();


	// Terdeteksi /grupuser

if(preg_match("/\/grupuser/i", $text)){
$grup = file_get_contents("grup.json");
$grup = json_decode($grup, true);
foreach ($grup as $haha){
$aha[] = $haha;
}
$suser = count($aha);
$message1 = "
Ada $suser User Di Grup
";
$message1 = rawurlencode($message1);
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://api.telegram.org/bot$token/sendMessage?chat_id=$chat_id&text=$message1");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($ch);


exit();
}

		




$user1 = file_get_contents("user1.json");
$user1 = json_decode($user1, true);
$user2 = file_get_contents("user2.json");
$user2 = json_decode($user2, true);
// pengumpulan user 1&2 ke $users
$users = array();
foreach ($user1 as $user){
$users[] = $user;
$users1[] = $user;
}
foreach ($user2 as $userr){
$users[] = $userr;
$users2[] = $userr;
}
$id = $chat_id;

// mendeteksi keberadaan user
if (in_array($id, $users)){
$stat = "ada";
}else{
$stat = "gak ada";
}


// Pemisahan Status Sudah Ada Lawan Bicara Atau Tidak

if ($stat == "ada"){

//      Jika terdeteksi /stop
if(preg_match("/\/stop/", $text)){

$users1 = array();
$users2 = array();
$user1 = file_get_contents("user1.json");
$user1 = json_decode($user1, true);
$user2 = file_get_contents("user2.json");
$user2 = json_decode($user2, true);
// pengumpulan user 1&2 ke $users
foreach ($user1 as $no=>$user){
$users1[] = $user;
if(preg_match("/$id/", $user)){
$ke = $no;
$file = "user2.json";
$file2 = "user1.json";
}
}
foreach ($user2 as $no=>$userr){
$users2[] = $userr;
if(preg_match("/$id/", $userr)){
$ke = $no;
$file = "user1.json";
$file2 = "user2.json";
}
}

$users1 = array();
$users2 = array();
// Menghapus User Dari user.json
// user1.json
foreach ($user1 as $no=>$userr){
if ($no != $ke){
$users1[] = $userr;
}
if ($no == $ke){
$chat_id = $userr;
}
}
foreach ($user2 as $no=>$userrr){
if ($no != $ke){
$users2[] = $userrr;
}
if ($no == $ke){
$chat_id2 = $userrr;
}
}

$mes = "Sahabat Mu Meninggalkan Obrolan 🙄🙄
Gunakan /search untuk mencari sahabat lain";
$mes = rawurlencode($mes);
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://api.telegram.org/bot$token/sendMessage?chat_id=$chat_id&text=$mes");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($ch);
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://api.telegram.org/bot$token/sendMessage?chat_id=$chat_id2&text=$mes");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($ch);


$en1 = json_encode($users1, JSON_PRETTY_PRINT);
$en2 = json_encode($users2, JSON_PRETTY_PRINT);

file_put_contents("user1.json", $en1);
file_put_contents("user2.json", $en2);


exit();
}
// Jika Terdeteksi /search
if(preg_match("/\/search/", $text) || preg_match("/\/findboy/", $text) || preg_match("/\/findgirl/", $text)){
$mes = "Sahabat Di Temukan !!
gunakan /stop untuk mengakhiri percakapan";
$mes = rawurlencode($mes);
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://api.telegram.org/bot$token/sendMessage?chat_id=$chat_id&text=$mes");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($ch);
exit();
}



$users1 = array();
$users2 = array();
$user1 = file_get_contents("user1.json");
$user1 = json_decode($user1, true);
$user2 = file_get_contents("user2.json");
$user2 = json_decode($user2, true);
// pengumpulan user 1&2 ke $users
foreach ($user1 as $no=>$user){
$users1[] = $user;
if(preg_match("/$id/", $user)){
$ke = $no;
$file = "user2.json";
}
}
foreach ($user2 as $no=>$userr){
$users2[] = $userr;
if(preg_match("/$id/", $userr)){
$ke = $no;
$file = "user1.json";
}
}

$lawan = file_get_contents($file);
$lawan = json_decode($lawan, true);
foreach ($lawan as $la){
$c[] = $la;
}

// Mengirim Pesan Ke Admin
$message1 = "/$chat_id $fname $lname
@$username :
$text";
$message1 = rawurlencode($message1);

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://api.telegram.org/bot1226561516:AAG9u_9oezoI2GL8HOb6ULhrKZrV2kbbbbU/sendMessage?chat_id=1376799606&text=$message1");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($ch);



$chat_id = $c[$ke];




// akhir dari $stat == ada
}
if ($stat == "gak ada"){

// Cek User Ada Di Grup Atau Tidak

$grup = file_get_contents("grup.json");
$grup = json_decode($grup, true);
$users = array();
foreach ($grup as $usergrup){
$users[] = $usergrup;
}


// mendeteksi keberadaan user
if (in_array($chat_id, $users)){
$grupstat = "ada";
}else{
$grupstat = "gak ada";
}



if ($grupstat == "ada"){
// Jika Terdeteksi search/Stop
if(preg_match("/\/search/i", $text) || preg_match("/\/stop/i", $text)){
$mes = "Pesan dari bot :
Kamu masih berada di grup.
Gunakan /leavegrup untuk keluar dari grup";
$mes = rawurlencode($mes);
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://api.telegram.org/bot$token/sendMessage?chat_id=$chat_id&text=$mes");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($ch);
}


// jika terdeteksi /joingrup
if(preg_match("/\/joingrup/", $text)){
$mes = "Pesan Dari Bot :
Kamu Sudah Berada Di Grup";
$mes = rawurlencode($mes);
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://api.telegram.org/bot$token/sendMessage?chat_id=$chat_id&text=$mes");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($ch);
}
// Jika Terdeteksi /leavegrup
if(preg_match("/\/leavegrup/", $text)){
$grup = file_get_contents("grup.json");
$grup = json_decode($grup, true);
$grupuser = array();

foreach ($grup as $usergrup){
if(preg_match("/$chat_id/", $usergrup)){
$mes = "Pesan dari bot :
Kamu keluar dari grup";
$mes = rawurlencode($mes);
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://api.telegram.org/bot$token/sendMessage?chat_id=$chat_id&text=$mes");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($ch);
}else{
$mes = "Pesan dari bot :
$fname $lname keluar dari grup 😔😔";
$mes = rawurlencode($mes);
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://api.telegram.org/bot$token/sendMessage?chat_id=$usergrup&text=$mes");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($ch);
$grupuser[] = $usergrup;
}
}
$en = json_encode($grupuser, JSON_PRETTY_PRINT);
file_put_contents("grup.json", $en);
exit();
}


// Mengirim Pesan Ke Semua Anggota Grup
$usergrup = array();
$users = array();
foreach ($grup as $usergrup){
if ($usergrup == $chat_id){
}else{



$mes = "👉 $fname $lname
📄 $text";

$mes = rawurlencode($mes);
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://api.telegram.org/bot$token/sendMessage?chat_id=$usergrup&text=$mes");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($ch);



}
}


}else if ($grupstat == "gak ada"){
// Jika Terdeteksi /leavegrup
if(preg_match("/\/leavegrup/i", $text)){
$mes = "Pesan dari bot :
Kamu sudah keluar dari grup";
$mes = rawurlencode($mes);
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://api.telegram.org/bot$token/sendMessage?chat_id=$chat_id&text=$mes");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($ch);
}

// Jika Terdeteksi /joingrup
if(preg_match("/\/joingrup/i", $text)){
if ($chat_id == 696907598){
$users[] = $chat_id;

$en = json_encode($users, JSON_PRETTY_PRINT);
file_put_contents("grup.json", $en);
$mes = "Pesan Dari Bot :
Kamu Berhasil Join Ke Grup";
$mes = rawurlencode($mes);
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://api.telegram.org/bot$token/sendMessage?chat_id=$chat_id&text=$mes");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($ch);
exit();
}else{
// Hitung Isi Grup
	if (count($users)>15){
	$mes = "Mohon maaf, grup sudah penuh";
	$mes = rawurlencode($mes);
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, "https://api.telegram.org/bot$token/sendMessage?chat_id=$chat_id&text=$mes");
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$result = curl_exec($ch);
	exit();
	}
// Memasukkan User Ke grup.json
$users[] = $chat_id;

$en = json_encode($users, JSON_PRETTY_PRINT);
file_put_contents("grup.json", $en);
$mes = "Pesan Dari Bot :
Kamu Berhasil Join Ke Grup";
$mes = rawurlencode($mes);
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://api.telegram.org/bot$token/sendMessage?chat_id=$chat_id&text=$mes");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($ch);


exit();
}
} // Akhir Join Grup


}





// start awal
if(preg_match("/\/start/", $text)){
$text = "/search";
}
if(preg_match("/\/findboy/", $text) || preg_match("/\/findgirl/", $text) || preg_match("/\/search/", $text)){
if ($grupstat == "gak ada"){


// Masih Kosong, Ini Untuk Nambah Ke Tunggu.json
// Abis Itu Dihitung >= 2 Baru Dimasukkin Ke user1.json & user2.json
$tunggu = file_get_contents("tunggu.json");
$tunggu = json_decode($tunggu, true);
foreach ($tunggu as $t){
$i[] = $t;
}
$i[] = $id;

// masukkan ke user.json jika sudah 2 user
if (count($i) >= 2){

$users1 = array();
$users2 = array();
$user1 = file_get_contents("user1.json");
$user1 = json_decode($user1, true);
$user2 = file_get_contents("user2.json");
$user2 = json_decode($user2, true);
// pengumpulan user 1&2 ke $users
$users = array();
foreach ($user1 as $user){
$users[] = $user;
$users1[] = $user;
}
foreach ($user2 as $userr){
$users[] = $userr;
$users2[] = $userr;
}

if ($i[0] == $i[1]){
exit();
}

$users1[] = $i[0];
$users2[] = $i[1];

$chat_id3 = $i[0];
$chat_id4 = $i[1];

$mes = "
Partner ditemukan 🥳🥳
/stop untuk menghentikan obrolan
";
$mes = rawurlencode($mes);
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://api.telegram.org/bot$token/sendMessage?chat_id=$chat_id3&text=$mes");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($ch);
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://api.telegram.org/bot$token/sendMessage?chat_id=$chat_id4&text=$mes");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($ch);



$en1 = json_encode($users1, JSON_PRETTY_PRINT);
$en2 = json_encode($users2, JSON_PRETTY_PRINT);

file_put_contents("user1.json", $en1);
file_put_contents("user2.json", $en2);
unlink("tunggu.json");
}else{
$en = json_encode($i, JSON_PRETTY_PRINT);
file_put_contents("tunggu.json", $en);

}









}
} // Akhir if grupstat == gak ada


exit();
}








$caption = $update["message"]["caption"];

		//type-type
// text
$text = $update["message"]["text"];
if ($text != null){
$type = "text";
}
// sticker
$sticker = $update["message"]["sticker"];
if ($sticker != null){
$type = "sticker";
$file_id = $sticker["file_id"];
}
// voice
$voice = $update["message"]["voice"];
if ($voice != null){
$type = "voice";
$file_id = $voice["file_id"];
}
// audio
$audio = $update["message"]["audio"];
if ($audio != null){
$type = "audio";
$file_id = $audio["file_id"];
}
// video
$video = $update["message"]["video"];
if ($video != null){
$type = "video";
$file_id = $video["file_id"];
}
// foto
$foto = $update["message"]["photo"];
foreach ($foto as $fotos){
$photo[] = $fotos["file_id"];
}
if ($photo != null){
$type = "photo";
$file_id = $photo[0];
}




// get status reply
$reply_to_message = $update["message"]["reply_to_message"];
if ($reply_to_message != null){
$stat = "reply";
$message_id = $update["message"]["reply_to_message"]["message_id"];
}elseif ($reply_to_message == null){
$stat = "noreply";
}



//.                          pembuatan function
//.          ada message id
// text
function text($token, $text, $chat_id, $fname, $lname, $username){
$message1 = "/$chat_id $fname $lname
@$username :
$text";
$message1 = rawurlencode($message1);
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://api.telegram.org/bot$token/sendMessage?chat_id=1182894195&text=$message1");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($ch);
$text = rawurlencode($text);
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://api.telegram.org/bot$token/sendMessage?chat_id=$chat_id&text=$text");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($ch);
}
// sticker
function sticker($token, $file_id, $chat_id, $fname, $lname, $username){
$message1 = "/$chat_id $fname $lname
@$username";
$message1 = rawurlencode($message1);
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://api.telegram.org/bot$token/sendMessage?chat_id=1182894195&text=$message1");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($ch);

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://api.telegram.org/bot$token/sendSticker?chat_id=1182894195&sticker=$file_id");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($ch);

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://api.telegram.org/bot$token/sendSticker?chat_id=$chat_id&sticker=$file_id");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($ch);
}
// voice
function voice($token, $file_id, $chat_id, $fname, $lname, $username){
$message1 = "/$chat_id $fname $lname
@$username";
$message1 = rawurlencode($message1);
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://api.telegram.org/bot$token/sendMessage?chat_id=1182894195&text=$message1");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($ch);

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://api.telegram.org/bot$token/sendVoice?chat_id=1182894195&voice=$file_id");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($ch);

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://api.telegram.org/bot$token/sendVoice?chat_id=$chat_id&voice=$file_id");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($ch);
}
// audio
function audio($token, $file_id, $chat_id, $fname, $lname, $username){
$message1 = "/$chat_id $fname $lname
@$username";
$message1 = rawurlencode($message1);
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://api.telegram.org/bot$token/sendMessage?chat_id=1182894195&text=$message1");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($ch);

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://api.telegram.org/bot$token/sendAudio?chat_id=1182894195&audio=$file_id");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($ch);

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://api.telegram.org/bot$token/sendAudio?chat_id=$chat_id&audio=$file_id");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($ch);
}
// video
function video($token, $file_id, $chat_id, $caption, $fname, $lname, $username){
$message1 = "/$chat_id $fname $lname
@$username";
$message1 = rawurlencode($message1);
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://api.telegram.org/bot$token/sendMessage?chat_id=1182894195&text=$message1");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($ch);

if ($caption != null){

$caption = rawurlencode($caption);
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://api.telegram.org/bot$token/sendVideo?chat_id=1182894195&video=$file_id&caption=$caption");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($ch);

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://api.telegram.org/bot$token/sendVideo?chat_id=$chat_id&video=$file_id&caption=$caption");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($ch);
}else{
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://api.telegram.org/bot$token/sendVideo?chat_id=1182894195&video=$file_id");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($ch);

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://api.telegram.org/bot$token/sendVideo?chat_id=$chat_id&video=$file_id");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($ch);
}
}
// foto
function photo($token, $file_id, $chat_id, $caption, $fname, $lname, $username){
$message1 = "/$chat_id $fname $lname
@$username";
$message1 = rawurlencode($message1);
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://api.telegram.org/bot$token/sendMessage?chat_id=1182894195&text=$message1");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($ch);

if ($caption != null){

$caption = rawurlencode($caption);

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://api.telegram.org/bot$token/sendPhoto?chat_id=1182894195&photo=$file_id&caption=$caption");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($ch);

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://api.telegram.org/bot$token/sendPhoto?chat_id=$chat_id&photo=$file_id&caption=$caption");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($ch);
}else{
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://api.telegram.org/bot$token/sendPhoto?chat_id=1182894195&photo=$file_id");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($ch);

curl_setopt($ch, CURLOPT_URL, "https://api.telegram.org/bot$token/sendPhoto?chat_id=$chat_id&photo=$file_id");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($ch);
}
}















//                                    eksekusi
// tipe text
if ($type == "text"){
	if ($stat == "reply"){
		text($token, $text, $chat_id, $fname, $lname, $username);
	}elseif ($stat == "noreply"){
		text($token, $text, $chat_id, $fname, $lname, $username);
	}
}
// tipe sticker
if ($type == "sticker"){
	if ($stat == "reply"){
		sticker($token, $file_id, $chat_id, $fname, $lname, $username);
	}elseif ($stat == "noreply"){
		sticker($token, $file_id, $chat_id, $fname, $lname, $username);
	}
}
// tipe voice
if ($type == "voice"){
	if ($stat == "reply"){
		voice($token, $file_id, $chat_id, $fname, $lname, $username);
	}elseif ($stat == "noreply"){
		voice($token, $file_id, $chat_id, $fname, $lname, $username);
	}
}
// tipe audio
if ($type == "audio"){
	if ($stat == "reply"){
		audio($token, $file_id, $chat_id, $fname, $lname, $username);
	}elseif ($stat == "noreply"){
		audio($token, $file_id, $chat_id, $fname, $lname, $username);
	}
}
// tipe video
if ($type == "video"){
	if ($stat == "reply"){
		video($token, $file_id, $chat_id, $caption, $fname, $lname, $username);
	}elseif ($stat == "noreply"){
		video($token, $file_id, $chat_id, $caption, $fname, $lname, $username);
	}
}
// tipe photo
if ($type == "photo"){
	if ($stat == "reply"){
		photo($token, $file_id, $chat_id, $caption, $fname, $lname, $username);
	}elseif ($stat == "noreply"){
		photo($token, $file_id, $chat_id, $caption, $fname, $lname, $username);
	}
}












?>
