<?php
	include "connect.php";
	$radig = $_POST['radig'];
	$orkom = $_POST['orkom'];
	$so = $_POST['so'];
	$komdat = $_POST['komdat'];
	$rpl = $_POST['rpl'];
	$si = $_POST['si'];
	$imk = $_POST['imk'];
	$metkuan = $_POST['metkuan'];
	$ai = $_POST['ai'];
	$daming = $_POST['daming'];
	$sispak = $_POST['sispak'];
	
$a2 = mysqli_query($conn, "select lab from data_training where lab='seis'");
$seis = mysqli_num_rows($a2);
$seisi = $seis/25;
$a3 = mysqli_query($conn, "select lab from data_training where lab='aci'");
$aci = mysqli_num_rows($a3);
$acii = $aci/25;
$a4 = mysqli_query($conn, "select lab from data_training where lab='ncc'");
$ncc = mysqli_num_rows($a4);
$ncci = $ncc/25;

$a5 = mysqli_query($conn, "select radig from data_training where radig = 'A' and lab='seis'");
$radig_a_seis = mysqli_num_rows($a2);
$radig_a_seis_asli = ($radig_a_seis/$seis);

$a6 = mysqli_query($conn, "select radig from data_training where radig = 'A' and lab='aci'");
$radig_a_aci = mysqli_num_rows($a6);
$radig_a_aci_asli = $radig_a_aci/$aci;

$a7 = mysqli_query($conn, "select radig from data_training where radig = 'A' and lab='ncc'");
$radig_a_ncc = mysqli_num_rows($a7);
$radig_a_ncc_asli = $radig_a_ncc/$ncc;

$a8 = mysqli_query($conn, "select radig from data_training where radig = 'AB' and lab='seis'");
$radig_ab_seis = mysqli_num_rows($a8);
$radig_ab_seis_asli = $radig_ab_seis/$seis;

$a9 = mysqli_query($conn, "select radig from data_training where radig = 'AB' and lab='aci'");
$radig_ab_aci = mysqli_num_rows($a9);
$radig_ab_aci_asli = $radig_ab_aci/$aci;

$a10 = mysqli_query($conn, "select radig from data_training where radig = 'AB' and lab='ncc'");
$radig_ab_ncc = mysqli_num_rows($a10);
$radig_ab_ncc_asli = $radig_ab_ncc/$ncc;

$a11 = mysqli_query($conn, "select radig from data_training where radig = 'B' and lab='seis'");
$radig_b_seis = mysqli_num_rows($a11);
$radig_b_seis_asli = $radig_b_seis/$seis;

$a12 = mysqli_query($conn, "select radig from data_training where radig = 'B' and lab='aci'");
$radig_b_aci = mysqli_num_rows($a12);
$radig_b_aci_asli = $radig_b_aci/$aci;

$a13 = mysqli_query($conn, "select radig from data_training where radig = 'B' and lab='ncc'");
$radig_b_ncc = mysqli_num_rows($a13);
$radig_b_ncc_asli = $radig_b_ncc/$ncc;

$a14 = mysqli_query($conn, "select radig from data_training where radig = 'BC' and lab='seis'");
$radig_bc_seis = mysqli_num_rows($a14);
$radig_bc_seis_asli = $radig_bc_seis/$seis;


$a15 = mysqli_query($conn, "select radig from data_training where radig = 'BC' and lab='aci'");
$radig_bc_aci = mysqli_num_rows($a15);
$radig_bc_aci_asli = $radig_bc_aci/$aci;

$a16 = mysqli_query($conn, "select radig from data_training where radig = 'BC' and lab='ncc'");
$radig_bc_ncc = mysqli_num_rows($a16);
$radig_bc_ncc_asli = $radig_bc_ncc/$ncc;

$a17 = mysqli_query($conn, "select radig from data_training where radig = 'C' and lab='seis'");
$radig_c_seis = mysqli_num_rows($a17);
$radig_c_seis_asli = $radig_c_seis/$seis;

$a18 = mysqli_query($conn, "select radig from data_training where radig = 'C' and lab='aci'");
$radig_c_aci = mysqli_num_rows($a18);
$radig_c_aci_asli = $radig_c_aci/$aci;

$a19 = mysqli_query($conn, "select radig from data_training where radig = 'C' and lab='ncc'");
$radig_c_ncc = mysqli_num_rows($a19);
$radig_c_ncc_asli = $radig_c_ncc/$ncc;

$a20 = mysqli_query($conn, "select radig from data_training where radig = 'D' and lab='seis'");
$radig_d_seis = mysqli_num_rows($a20);
$radig_d_seis_asli = $radig_d_seis/$seis;

$a21 = mysqli_query($conn, "select radig from data_training where radig = 'D' and lab='aci'");
$radig_d_aci = mysqli_num_rows($a21);
$radig_d_aci_asli = $radig_d_aci/$aci;

$a22 = mysqli_query($conn, "select radig from data_training where radig = 'D' and lab='ncc'");
$radig_d_ncc = mysqli_num_rows($a22);
$radig_d_ncc_asli = $radig_d_ncc/$ncc;

$a23 = mysqli_query($conn, "select radig from data_training where radig = 'E' and lab='ncc'");
$radig_e_seis = mysqli_num_rows($a23);
$radig_e_seis_asli = $radig_e_seis/$seis;

$a24 = mysqli_query($conn, "select radig from data_training where radig = 'E' and lab='aci'");
$radig_e_aci = mysqli_num_rows($a24);
$radig_e_aci_asli = $radig_e_aci/$aci;

$a25 = mysqli_query($conn, "select radig from data_training where radig = 'E' and lab='ncc'");
$radig_e_ncc = mysqli_num_rows($a25);
$radig_e_ncc_asli = $radig_e_ncc/$ncc;


$a26 = mysqli_query($conn, "select so from data_training where so = 'A' and lab='seis'");
$so_a_seis = mysqli_num_rows($a26);
$so_a_seis_asli = $so_a_seis/$seis;

$a27 = mysqli_query($conn, "select so from data_training where so = 'A' and lab='aci'");
$so_a_aci = mysqli_num_rows($a27);
$so_a_aci_asli = $so_a_aci/$aci;

$a28 = mysqli_query($conn, "select so from data_training where so = 'A' and lab='ncc'");
$so_a_ncc = mysqli_num_rows($a28);
$so_a_ncc_asli = $so_a_ncc/$ncc;

$a29 = mysqli_query($conn, "select so from data_training where so = 'AB' and lab='seis'");
$so_ab_seis = mysqli_num_rows($a29);
$so_ab_seis_asli = $so_ab_seis/$seis;

$a30 = mysqli_query($conn, "select so from data_training where so = 'AB' and lab='aci'");
$so_ab_aci = mysqli_num_rows($a30);
$so_ab_aci_asli = $so_ab_aci/$aci;

$a31 = mysqli_query($conn, "select so from data_training where so = 'AB' and lab='ncc'");
$so_ab_ncc = mysqli_num_rows($a31);
$so_ab_ncc_asli = $so_ab_ncc/$ncc;

$a32 = mysqli_query($conn, "select so from data_training where so = 'B' and lab='seis'");
$so_b_seis = mysqli_num_rows($a32);
$so_b_seis_asli = $so_b_seis/$seis;

$a33 = mysqli_query($conn, "select so from data_training where so = 'B' and lab='aci'");
$so_b_aci = mysqli_num_rows($a33);
$so_b_aci_asli = $so_b_aci/$aci;

$a34 = mysqli_query($conn, "select so from data_training where so = 'B' and lab='ncc'");
$so_b_ncc = mysqli_num_rows($a34);
$so_b_ncc_asli = $so_b_ncc/$ncc;

$a35 = mysqli_query($conn, "select so from data_training where so = 'BC' and lab='seis'");
$so_bc_seis = mysqli_num_rows($a35);
$so_bc_seis_asli = $so_bc_seis/$seis;

$a36 = mysqli_query($conn, "select so from data_training where so = 'BC' and lab='aci'");
$so_bc_aci = mysqli_num_rows($a36);
$so_bc_aci_asli = $so_bc_aci/$aci;

$a37 = mysqli_query($conn, "select so from data_training where so = 'BC' and lab='ncc'");
$so_bc_ncc = mysqli_num_rows($a37);
$so_bc_ncc_asli = $so_bc_ncc/$ncc;

$a38 = mysqli_query($conn, "select so from data_training where so = 'C' and lab='seis'");
$so_c_seis = mysqli_num_rows($a38);
$so_c_seis_asli = $so_c_seis/$seis;

$a39 = mysqli_query($conn, "select so from data_training where so = 'C' and lab='aci'");
$so_c_aci = mysqli_num_rows($a39);
$so_c_aci_asli = $so_c_aci/$aci;

$a40 = mysqli_query($conn, "select so from data_training where so = 'C' and lab='ncc'");
$so_c_ncc = mysqli_num_rows($a40);
$so_c_ncc_asli = $so_c_ncc/$ncc;

$a41 = mysqli_query($conn, "select so from data_training where so = 'D' and lab='seis'");
$so_d_seis = mysqli_num_rows($a41);
$so_d_seis_asli = $so_d_seis/$seis;

$a42 = mysqli_query($conn, "select so from data_training where so = 'D' and lab='aci'");
$so_d_aci = mysqli_num_rows($a42);
$so_d_aci_asli = $so_d_aci/$aci;

$a43 = mysqli_query($conn, "select so from data_training where so = 'D' and lab='ncc'");
$so_d_ncc = mysqli_num_rows($a43);
$so_d_ncc_asli = $so_d_ncc/$ncc;

$a44 = mysqli_query($conn, "select so from data_training where so = 'E' and lab='ncc'");
$so_e_seis = mysqli_num_rows($a44);
$so_e_seis_asli = $so_e_seis/$seis;

$a45 = mysqli_query($conn, "select so from data_training where so = 'E' and lab='aci'");
$so_e_aci = mysqli_num_rows($a45);
$so_e_aci_asli = $so_e_aci/$aci;

$a46 = mysqli_query($conn, "select so from data_training where so = 'E' and lab='ncc'");
$so_e_ncc = mysqli_num_rows($a46);
$so_e_ncc_asli = $so_e_ncc/$ncc;




$a47 = mysqli_query($conn, "select komdat from data_training where komdat = 'A' and lab='seis'");
$komdat_a_seis = mysqli_num_rows($a47);
$komdat_a_seis_asli = $komdat_a_seis/$seis;
$komdat_a_seis_asli = $komdat_a_seis/$seis;

$a48 = mysqli_query($conn, "select komdat from data_training where komdat = 'A' and lab='aci'");
$komdat_a_aci = mysqli_num_rows($a48);
$komdat_a_aci_asli = $komdat_a_aci/$aci;

$a49 = mysqli_query($conn, "select komdat from data_training where komdat = 'A' and lab='ncc'");
$komdat_a_ncc = mysqli_num_rows($a49);
$komdat_a_ncc_asli = $komdat_a_ncc/$ncc;

$a50 = mysqli_query($conn, "select komdat from data_training where komdat = 'AB' and lab='seis'");
$komdat_ab_seis = mysqli_num_rows($a50);
$komdat_ab_seis_asli = $komdat_ab_seis/$seis;

$a51 = mysqli_query($conn, "select komdat from data_training where komdat = 'AB' and lab='aci'");
$komdat_ab_aci = mysqli_num_rows($a51);
$komdat_ab_aci_asli = $komdat_ab_aci/$aci;

$a52 = mysqli_query($conn, "select komdat from data_training where komdat = 'AB' and lab='ncc'");
$komdat_ab_ncc = mysqli_num_rows($a52);
$komdat_ab_ncc_asli = $komdat_ab_ncc/$ncc;

$a53 = mysqli_query($conn, "select komdat from data_training where komdat = 'B' and lab='seis'");
$komdat_b_seis = mysqli_num_rows($a53);
$komdat_b_seis_asli = $komdat_b_seis/$seis;

$a54 = mysqli_query($conn, "select komdat from data_training where komdat = 'B' and lab='aci'");
$komdat_b_aci = mysqli_num_rows($a54);
$komdat_b_aci_asli = $komdat_b_aci/$aci;

$a55 = mysqli_query($conn, "select komdat from data_training where komdat = 'B' and lab='ncc'");
$komdat_b_ncc = mysqli_num_rows($a55);
$komdat_b_ncc_asli = $komdat_b_ncc/$ncc;

$a56 = mysqli_query($conn, "select komdat from data_training where komdat = 'BC' and lab='seis'");
$komdat_bc_seis = mysqli_num_rows($a56);
$komdat_bc_seis_asli = $komdat_bc_seis/$seis;

$a57 = mysqli_query($conn, "select komdat from data_training where komdat = 'BC' and lab='aci'");
$komdat_bc_aci = mysqli_num_rows($a57);
$komdat_bc_aci_asli = $komdat_bc_aci/$aci;

$a58 = mysqli_query($conn, "select komdat from data_training where komdat = 'BC' and lab='ncc'");
$komdat_bc_ncc = mysqli_num_rows($a58);
$komdat_bc_ncc_asli = $komdat_bc_ncc/$ncc;

$a59 = mysqli_query($conn, "select komdat from data_training where komdat = 'C' and lab='seis'");
$komdat_c_seis = mysqli_num_rows($a59);
$komdat_c_seis_asli = $komdat_c_seis/$seis;

$a60 = mysqli_query($conn, "select komdat from data_training where komdat = 'C' and lab='aci'");
$komdat_c_aci = mysqli_num_rows($a60);
$komdat_c_aci_asli = $komdat_c_aci/$aci;

$a61 = mysqli_query($conn, "select komdat from data_training where komdat = 'C' and lab='ncc'");
$komdat_c_ncc = mysqli_num_rows($a61);
$komdat_c_ncc_asli = $komdat_c_ncc/$ncc;

$a62 = mysqli_query($conn, "select komdat from data_training where komdat = 'D' and lab='seis'");
$komdat_d_seis = mysqli_num_rows($a62);
$komdat_d_seis_asli = $komdat_d_seis/$seis;

$a63 = mysqli_query($conn, "select komdat from data_training where komdat = 'D' and lab='aci'");
$komdat_d_aci = mysqli_num_rows($a63);
$komdat_d_aci_asli = $komdat_d_aci/$aci;

$a64 = mysqli_query($conn, "select komdat from data_training where komdat = 'D' and lab='ncc'");
$komdat_d_ncc = mysqli_num_rows($a64);
$komdat_d_ncc_asli = $komdat_d_ncc/$ncc;

$a65 = mysqli_query($conn, "select komdat from data_training where komdat = 'E' and lab='ncc'");
$komdat_e_seis = mysqli_num_rows($a65);
$komdat_e_seis_asli = $komdat_e_seis/$seis;

$a66 = mysqli_query($conn, "select komdat from data_training where komdat = 'E' and lab='aci'");
$komdat_e_aci = mysqli_num_rows($a66);
$komdat_e_aci_asli = $komdat_e_aci/$aci;

$a67 = mysqli_query($conn, "select komdat from data_training where komdat = 'E' and lab='ncc'");
$komdat_e_ncc = mysqli_num_rows($a67);
$komdat_e_ncc_asli = $komdat_e_ncc/$ncc;


$a68 = mysqli_query($conn, "select si from data_training where si = 'A' and lab='seis'");
$si_a_seis = mysqli_num_rows($a68);
$si_a_seis_asli = $si_a_seis/$seis;

$a69 = mysqli_query($conn, "select si from data_training where si = 'A' and lab='aci'");
$si_a_aci = mysqli_num_rows($a69);
$si_a_aci_asli = $si_a_aci/$aci;

$a70 = mysqli_query($conn, "select si from data_training where si = 'A' and lab='ncc'");
$si_a_ncc = mysqli_num_rows($a70);
$si_a_ncc_asli = $si_a_ncc/$ncc;

$a71 = mysqli_query($conn, "select si from data_training where si = 'AB' and lab='seis'");
$si_ab_seis = mysqli_num_rows($a71);
$si_ab_seis_asli = $si_ab_seis/$seis;

$a72 = mysqli_query($conn, "select si from data_training where si = 'AB' and lab='aci'");
$si_ab_aci = mysqli_num_rows($a72);
$si_ab_aci_asli = $si_ab_aci/$aci;

$a73 = mysqli_query($conn, "select si from data_training where si = 'AB' and lab='ncc'");
$si_ab_ncc = mysqli_num_rows($a73);
$si_ab_ncc_asli = $si_ab_ncc/$ncc;

$a74 = mysqli_query($conn, "select si from data_training where si = 'B' and lab='seis'");
$si_b_seis = mysqli_num_rows($a74);
$si_b_seis_asli = $si_b_seis/$seis;

$a75 = mysqli_query($conn, "select si from data_training where si = 'B' and lab='aci'");
$si_b_aci = mysqli_num_rows($a75);
$si_b_aci_asli = $si_b_aci/$aci;

$a76 = mysqli_query($conn, "select si from data_training where si = 'B' and lab='ncc'");
$si_b_ncc = mysqli_num_rows($a76);
$si_b_ncc_asli = $si_b_ncc/$ncc;

$a77 = mysqli_query($conn, "select si from data_training where si = 'BC' and lab='seis'");
$si_bc_seis = mysqli_num_rows($a77);
$si_bc_seis_asli = $si_bc_seis/$seis;

$a78 = mysqli_query($conn, "select si from data_training where si = 'BC' and lab='aci'");
$si_bc_aci = mysqli_num_rows($a78);
$si_bc_aci_asli = $si_bc_aci/$aci;

$a79 = mysqli_query($conn, "select si from data_training where si = 'BC' and lab='ncc'");
$si_bc_ncc = mysqli_num_rows($a79);
$si_bc_ncc_asli = $si_bc_ncc/$ncc;

$a80 = mysqli_query($conn, "select si from data_training where si = 'C' and lab='seis'");
$si_c_seis = mysqli_num_rows($a80);
$si_c_seis_asli = $si_c_seis/$seis;

$a81 = mysqli_query($conn, "select si from data_training where si = 'C' and lab='aci'");
$si_c_aci = mysqli_num_rows($a81);
$si_c_aci_asli = $si_c_aci/$aci;

$a82 = mysqli_query($conn, "select si from data_training where si = 'C' and lab='ncc'");
$si_c_ncc = mysqli_num_rows($a82);
$si_c_ncc_asli = $si_c_ncc/$ncc;

$a83 = mysqli_query($conn, "select si from data_training where si = 'D' and lab='seis'");
$si_d_seis = mysqli_num_rows($a83);
$si_d_seis_asli = $si_d_seis/$seis;

$a84 = mysqli_query($conn, "select si from data_training where si = 'D' and lab='aci'");
$si_d_aci = mysqli_num_rows($a84);
$si_d_aci_asli = $si_d_aci/$aci;

$a85 = mysqli_query($conn, "select si from data_training where si = 'D' and lab='ncc'");
$si_d_ncc = mysqli_num_rows($a85);
$si_d_ncc_asli = $si_d_ncc/$ncc;

$a86 = mysqli_query($conn, "select si from data_training where si = 'E' and lab='ncc'");
$si_e_seis = mysqli_num_rows($a86);
$si_e_seis_asli = $si_e_seis/$seis;

$a87 = mysqli_query($conn, "select si from data_training where si = 'E' and lab='aci'");
$si_e_aci = mysqli_num_rows($a87);
$si_e_aci_asli = $si_e_aci/$aci;

$a88 = mysqli_query($conn, "select si from data_training where si = 'E' and lab='ncc'");
$si_e_ncc = mysqli_num_rows($a88);
$si_e_ncc_asli = $si_e_ncc/$ncc;

$z5 = mysqli_query($conn, "select ai from data_training where ai = 'A' and lab='seis'");
$ai_a_seis = mysqli_num_rows($z5);
$ai_a_seis_asli = $ai_a_seis/$seis;

$z6 = mysqli_query($conn, "select ai from data_training where ai = 'A' and lab='aci'");
$ai_a_aci = mysqli_num_rows($z6);
$ai_a_aci_asli = $ai_a_aci/$aci;

$z7 = mysqli_query($conn, "select ai from data_training where ai = 'A' and lab='ncc'");
$ai_a_ncc = mysqli_num_rows($z7);
$ai_a_ncc_asli = $ai_a_ncc/$ncc;

$z8 = mysqli_query($conn, "select ai from data_training where ai = 'AB' and lab='seis'");
$ai_ab_seis = mysqli_num_rows($z8);
$ai_ab_seis_asli = $ai_ab_seis/$seis;

$z9 = mysqli_query($conn, "select ai from data_training where ai = 'AB' and lab='aci'");
$ai_ab_aci = mysqli_num_rows($z9);
$ai_ab_aci_asli = $ai_ab_aci/$aci;

$z10 = mysqli_query($conn, "select ai from data_training where ai = 'AB' and lab='ncc'");
$ai_ab_ncc = mysqli_num_rows($z10);
$ai_ab_ncc_asli = $ai_ab_ncc/$ncc;

$z11 = mysqli_query($conn, "select ai from data_training where ai = 'B' and lab='seis'");
$ai_b_seis = mysqli_num_rows($z11);
$ai_b_seis_asli = $ai_b_seis/$seis;

$z12 = mysqli_query($conn, "select ai from data_training where ai = 'B' and lab='aci'");
$ai_b_aci = mysqli_num_rows($z12);
$ai_b_aci_asli = $ai_b_aci/$aci;

$z13 = mysqli_query($conn, "select ai from data_training where ai = 'B' and lab='ncc'");
$ai_b_ncc = mysqli_num_rows($z13);
$ai_b_ncc_asli = $ai_b_ncc/$ncc;

$z14 = mysqli_query($conn, "select ai from data_training where ai = 'BC' and lab='seis'");
$ai_bc_seis = mysqli_num_rows($z14);
$ai_bc_seis_asli = $ai_bc_seis/$seis;

$z15 = mysqli_query($conn, "select ai from data_training where ai = 'BC' and lab='aci'");
$ai_bc_aci = mysqli_num_rows($z15);
$ai_bc_aci_asli = $ai_bc_aci/$aci;

$z16 = mysqli_query($conn, "select ai from data_training where ai = 'BC' and lab='ncc'");
$ai_bc_ncc = mysqli_num_rows($z16);
$ai_bc_ncc_asli = $ai_bc_ncc/$ncc;

$z17 = mysqli_query($conn, "select ai from data_training where ai = 'C' and lab='seis'");
$ai_c_seis = mysqli_num_rows($z17);
$ai_c_seis_asli = $ai_c_seis/$seis;

$z18 = mysqli_query($conn, "select ai from data_training where ai = 'C' and lab='aci'");
$ai_c_aci = mysqli_num_rows($z18);
$ai_c_aci_asli = $ai_c_aci/$aci;

$z19 = mysqli_query($conn, "select ai from data_training where ai = 'C' and lab='ncc'");
$ai_c_ncc = mysqli_num_rows($z19);
$ai_c_ncc_asli = $ai_c_ncc/$ncc;

$z20 = mysqli_query($conn, "select ai from data_training where ai = 'D' and lab='seis'");
$ai_d_seis = mysqli_num_rows($z20);
$ai_d_seis_asli = $ai_d_seis/$seis;

$z21 = mysqli_query($conn, "select ai from data_training where ai = 'D' and lab='aci'");
$ai_d_aci = mysqli_num_rows($z21);
$ai_d_aci_asli = $ai_d_aci/$aci;

$z22 = mysqli_query($conn, "select ai from data_training where ai = 'D' and lab='ncc'");
$ai_d_ncc = mysqli_num_rows($z22);
$ai_d_ncc_asli = $ai_d_ncc/$ncc;

$z23 = mysqli_query($conn, "select ai from data_training where ai = 'E' and lab='ncc'");
$ai_e_seis = mysqli_num_rows($z23);
$ai_e_seis_asli = $ai_e_seis/$seis;

$z24 = mysqli_query($conn, "select ai from data_training where ai = 'E' and lab='aci'");
$ai_e_aci = mysqli_num_rows($z24);
$ai_e_aci_asli = $ai_e_aci/$aci;

$z25 = mysqli_query($conn, "select ai from data_training where ai = 'E' and lab='ncc'");
$ai_e_ncc = mysqli_num_rows($z25);
$ai_e_ncc_asli = $ai_e_ncc/$ncc;

$b1 = mysqli_query($conn, "select orkom from data_training where orkom = 'A' and lab='seis'");
$orkom_a_seis = mysqli_num_rows($b1);
$orkom_a_seis_asli = $orkom_a_seis/$seis;
$b2 = mysqli_query($conn, "select orkom from data_training where orkom = 'A' and lab='aci'");
$orkom_a_aci = mysqli_num_rows($b2);
$orkom_a_aci_asli = $orkom_a_aci/$aci;
$b3 = mysqli_query($conn, "select orkom from data_training where orkom = 'A' and lab='ncc'");
$orkom_a_ncc = mysqli_num_rows($b3);
$orkom_a_ncc_asli = $orkom_a_ncc/$ncc;
$b4 = mysqli_query($conn, "select orkom from data_training where orkom = 'AB' and lab='seis'");
$orkom_ab_seis = mysqli_num_rows($b4);
$orkom_ab_seis_asli = $orkom_ab_seis/$seis;
$b5 = mysqli_query($conn, "select orkom from data_training where orkom = 'AB' and lab='aci'");
$orkom_ab_aci = mysqli_num_rows($b5);
$orkom_ab_aci_asli = $orkom_ab_aci/$aci;
$b6 = mysqli_query($conn, "select orkom from data_training where orkom = 'AB' and lab='ncc'");
$orkom_ab_ncc = mysqli_num_rows($b6);
$orkom_ab_ncc_asli = $orkom_ab_ncc/$ncc;
$b7 = mysqli_query($conn, "select orkom from data_training where orkom = 'B' and lab='seis'");
$orkom_b_seis = mysqli_num_rows($b7);
$orkom_b_seis_asli = $orkom_b_seis/$seis;
$b8 = mysqli_query($conn, "select orkom from data_training where orkom = 'B' and lab='aci'");
$orkom_b_aci = mysqli_num_rows($b8);
$orkom_b_aci_asli = $orkom_b_aci/$aci;
$b9 = mysqli_query($conn, "select orkom from data_training where orkom = 'B' and lab='ncc'");
$orkom_b_ncc = mysqli_num_rows($b9);
$orkom_b_ncc_asli = $orkom_b_ncc/$ncc;
$b10 = mysqli_query($conn, "select orkom from data_training where orkom = 'BC' and lab='seis'");
$orkom_bc_seis = mysqli_num_rows($b10);
$orkom_bc_seis_asli = $orkom_bc_seis/$seis;
$b11 = mysqli_query($conn, "select orkom from data_training where orkom = 'BC' and lab='aci'");
$orkom_bc_aci = mysqli_num_rows($b11);
$orkom_bc_aci_asli = $orkom_bc_aci/$aci;
$b12 = mysqli_query($conn, "select orkom from data_training where orkom = 'BC' and lab='ncc'");
$orkom_bc_ncc = mysqli_num_rows($b12);
$orkom_bc_ncc_asli = $orkom_bc_ncc/$ncc;
$b13 = mysqli_query($conn, "select orkom from data_training where orkom = 'C' and lab='seis'");
$orkom_c_seis = mysqli_num_rows($b13);
$orkom_c_seis_asli = $orkom_c_seis/$seis;
$b14 = mysqli_query($conn, "select orkom from data_training where orkom = 'C' and lab='aci'");
$orkom_c_aci = mysqli_num_rows($b14);
$orkom_c_aci_asli = $orkom_c_aci/$aci;
$b15 = mysqli_query($conn, "select orkom from data_training where orkom = 'C' and lab='ncc'");
$orkom_c_ncc = mysqli_num_rows($b1);
$orkom_c_ncc_asli = $orkom_c_ncc/$ncc;
$b16 = mysqli_query($conn, "select orkom from data_training where orkom = 'D' and lab='seis'");
$orkom_d_seis = mysqli_num_rows($b16);
$orkom_d_seis_asli = $orkom_d_seis/$seis;
$b17 = mysqli_query($conn, "select orkom from data_training where orkom = 'D' and lab='aci'");
$orkom_d_aci = mysqli_num_rows($b17);
$orkom_d_aci_asli = $orkom_d_aci/$aci;
$b18 = mysqli_query($conn, "select orkom from data_training where orkom = 'D' and lab='ncc'");
$orkom_d_ncc = mysqli_num_rows($b18);
$orkom_d_ncc_asli = $orkom_d_ncc/$ncc;
$b19 = mysqli_query($conn, "select orkom from data_training where orkom = 'E' and lab='seis'");
$orkom_e_seis = mysqli_num_rows($b19);
$orkom_e_seis_asli = $orkom_e_seis/$seis;
$b20 = mysqli_query($conn, "select orkom from data_training where orkom = 'E' and lab='aci'");
$orkom_e_aci = mysqli_num_rows($b20);
$orkom_e_aci_asli = $orkom_e_aci/$aci;
$b21 = mysqli_query($conn, "select orkom from data_training where orkom = 'E' and lab='ncc'");
$orkom_e_ncc = mysqli_num_rows($b21);
$orkom_e_ncc_asli = $orkom_e_ncc/$ncc;

$c1 = mysqli_query($conn, "select rpl from data_training where rpl = 'A' and lab='seis'");
$rpl_a_seis = mysqli_num_rows($b1);
$rpl_a_seis_asli = $rpl_a_seis/$seis;
$c2 = mysqli_query($conn, "select rpl from data_training where rpl = 'A' and lab='aci'");
$rpl_a_aci = mysqli_num_rows($b2);
$rpl_a_aci_asli = $rpl_a_aci/$aci;
$c3 = mysqli_query($conn, "select rpl from data_training where rpl = 'A' and lab='ncc'");
$rpl_a_ncc = mysqli_num_rows($b3);
$rpl_a_ncc_asli = $rpl_a_ncc/$ncc;
$c4 = mysqli_query($conn, "select rpl from data_training where rpl = 'AB' and lab='seis'");
$rpl_ab_seis = mysqli_num_rows($b4);
$rpl_ab_seis_asli = $rpl_ab_seis/$seis;
$c5 = mysqli_query($conn, "select rpl from data_training where rpl = 'AB' and lab='aci'");
$rpl_ab_aci = mysqli_num_rows($b5);
$rpl_ab_aci_asli = $rpl_ab_aci/$aci;
$c6 = mysqli_query($conn, "select rpl from data_training where rpl = 'AB' and lab='ncc'");
$rpl_ab_ncc = mysqli_num_rows($b6);
$rpl_ab_ncc_asli = $rpl_ab_ncc/$ncc;
$c7 = mysqli_query($conn, "select rpl from data_training where rpl = 'B' and lab='seis'");
$rpl_b_seis = mysqli_num_rows($b7);
$rpl_b_seis_asli = $rpl_b_seis/$seis;
$c8 = mysqli_query($conn, "select rpl from data_training where rpl = 'B' and lab='aci'");
$rpl_b_aci = mysqli_num_rows($b8);
$rpl_b_aci_asli = $rpl_b_aci/$aci;
$c9 = mysqli_query($conn, "select rpl from data_training where rpl = 'B' and lab='ncc'");
$rpl_b_ncc = mysqli_num_rows($b9);
$rpl_b_ncc_asli = $rpl_b_ncc/$ncc;
$c10 = mysqli_query($conn, "select rpl from data_training where rpl = 'BC' and lab='seis'");
$rpl_bc_seis = mysqli_num_rows($b10);
$rpl_bc_seis_asli = $rpl_bc_seis/$seis;
$c11 = mysqli_query($conn, "select rpl from data_training where rpl = 'BC' and lab='aci'");
$rpl_bc_aci = mysqli_num_rows($b11);
$rpl_bc_aci_asli = $rpl_bc_aci/$aci;
$c12 = mysqli_query($conn, "select rpl from data_training where rpl = 'BC' and lab='ncc'");
$rpl_bc_ncc = mysqli_num_rows($b12);
$rpl_bc_ncc_asli = $rpl_bc_ncc/$ncc;
$c13 = mysqli_query($conn, "select rpl from data_training where rpl = 'C' and lab='seis'");
$rpl_c_seis = mysqli_num_rows($b13);
$rpl_c_seis_asli = $rpl_c_seis/$seis;
$c14 = mysqli_query($conn, "select rpl from data_training where rpl = 'C' and lab='aci'");
$rpl_c_aci = mysqli_num_rows($b14);
$rpl_c_aci_asli = $rpl_c_aci/$aci;
$c15 = mysqli_query($conn, "select rpl from data_training where rpl = 'C' and lab='ncc'");
$rpl_c_ncc = mysqli_num_rows($b1);
$rpl_c_ncc_asli = $rpl_c_ncc/$ncc;
$c16 = mysqli_query($conn, "select rpl from data_training where rpl = 'D' and lab='seis'");
$rpl_d_seis = mysqli_num_rows($b16);
$rpl_d_seis_asli = $rpl_d_seis/$seis;
$c17 = mysqli_query($conn, "select rpl from data_training where rpl = 'D' and lab='aci'");
$rpl_d_aci = mysqli_num_rows($b17);
$rpl_d_aci_asli = $rpl_d_aci/$aci;
$c18 = mysqli_query($conn, "select rpl from data_training where rpl = 'D' and lab='ncc'");
$rpl_d_ncc = mysqli_num_rows($b18);
$rpl_d_ncc_asli = $rpl_d_ncc/$ncc;
$c19 = mysqli_query($conn, "select rpl from data_training where rpl = 'E' and lab='seis'");
$rpl_e_seis = mysqli_num_rows($b19);
$rpl_e_seis_asli = $rpl_e_seis/$seis;
$c20 = mysqli_query($conn, "select rpl from data_training where rpl = 'E' and lab='aci'");
$rpl_e_aci = mysqli_num_rows($b20);
$rpl_e_aci_asli = $rpl_e_aci/$aci;
$c21 = mysqli_query($conn, "select rpl from data_training where rpl = 'E' and lab='ncc'");
$rpl_e_ncc = mysqli_num_rows($b21);
$rpl_e_ncc_asli = $rpl_e_ncc/$ncc;

$d1 = mysqli_query($conn, "select imk from data_training where imk = 'A' and lab='seis'");
$imk_a_seis = mysqli_num_rows($b1);
$imk_a_seis_asli = $imk_a_seis/$seis;
$d2 = mysqli_query($conn, "select imk from data_training where imk = 'A' and lab='aci'");
$imk_a_aci = mysqli_num_rows($b2);
$imk_a_aci_asli = $imk_a_aci/$aci;
$d3 = mysqli_query($conn, "select imk from data_training where imk = 'A' and lab='ncc'");
$imk_a_ncc = mysqli_num_rows($b3);
$imk_a_ncc_asli = $imk_a_ncc/$ncc;
$d4 = mysqli_query($conn, "select imk from data_training where imk = 'AB' and lab='seis'");
$imk_ab_seis = mysqli_num_rows($b4);
$imk_ab_seis_asli = $imk_ab_seis/$seis;
$d5 = mysqli_query($conn, "select imk from data_training where imk = 'AB' and lab='aci'");
$imk_ab_aci = mysqli_num_rows($b5);
$imk_ab_aci_asli = $imk_ab_aci/$aci;
$d6 = mysqli_query($conn, "select imk from data_training where imk = 'AB' and lab='ncc'");
$imk_ab_ncc = mysqli_num_rows($b6);
$imk_ab_ncc_asli = $imk_ab_ncc/$ncc;
$d7 = mysqli_query($conn, "select imk from data_training where imk = 'B' and lab='seis'");
$imk_b_seis = mysqli_num_rows($b7);
$imk_b_seis_asli = $imk_b_seis/$seis;
$d8 = mysqli_query($conn, "select imk from data_training where imk = 'B' and lab='aci'");
$imk_b_aci = mysqli_num_rows($b8);
$imk_b_aci_asli = $imk_b_aci/$aci;
$d9 = mysqli_query($conn, "select imk from data_training where imk = 'B' and lab='ncc'");
$imk_b_ncc = mysqli_num_rows($b9);
$imk_b_ncc_asli = $imk_b_ncc/$ncc;
$d10 = mysqli_query($conn, "select imk from data_training where imk = 'BC' and lab='seis'");
$imk_bc_seis = mysqli_num_rows($b10);
$imk_bc_seis_asli = $imk_bc_seis/$seis;
$d11 = mysqli_query($conn, "select imk from data_training where imk = 'BC' and lab='aci'");
$imk_bc_aci = mysqli_num_rows($b11);
$imk_bc_aci_asli = $imk_bc_aci/$aci;
$d12 = mysqli_query($conn, "select imk from data_training where imk = 'BC' and lab='ncc'");
$imk_bc_ncc = mysqli_num_rows($b12);
$imk_bc_ncc_asli = $imk_bc_ncc/$ncc;
$d13 = mysqli_query($conn, "select imk from data_training where imk = 'C' and lab='seis'");
$imk_c_seis = mysqli_num_rows($b13);
$imk_c_seis_asli = $imk_c_seis/$seis;
$d14 = mysqli_query($conn, "select imk from data_training where imk = 'C' and lab='aci'");
$imk_c_aci = mysqli_num_rows($b14);
$imk_c_aci_asli = $imk_c_aci/$aci;
$d15 = mysqli_query($conn, "select imk from data_training where imk = 'C' and lab='ncc'");
$imk_c_ncc = mysqli_num_rows($b1);
$imk_c_ncc_asli = $imk_c_ncc/$ncc;
$d16 = mysqli_query($conn, "select imk from data_training where imk = 'D' and lab='seis'");
$imk_d_seis = mysqli_num_rows($b16);
$imk_d_seis_asli = $imk_d_seis/$seis;
$d17 = mysqli_query($conn, "select imk from data_training where imk = 'D' and lab='aci'");
$imk_d_aci = mysqli_num_rows($b17);
$imk_d_aci_asli = $imk_d_aci/$aci;
$d18 = mysqli_query($conn, "select imk from data_training where imk = 'D' and lab='ncc'");
$imk_d_ncc = mysqli_num_rows($b18);
$imk_d_ncc_asli = $imk_d_ncc/$ncc;
$d19 = mysqli_query($conn, "select imk from data_training where imk = 'E' and lab='seis'");
$imk_e_seis = mysqli_num_rows($b19);
$imk_e_seis_asli = $imk_e_seis/$seis;
$d20 = mysqli_query($conn, "select imk from data_training where imk = 'E' and lab='aci'");
$imk_e_aci = mysqli_num_rows($b20);
$imk_e_aci_asli = $imk_e_aci/$aci;
$d21 = mysqli_query($conn, "select imk from data_training where imk = 'E' and lab='ncc'");
$imk_e_ncc = mysqli_num_rows($b21);
$imk_e_ncc_asli = $imk_e_ncc/$ncc;

$e1 = mysqli_query($conn, "select metkuan from data_training where metkuan = 'A' and lab='seis'");
$metkuan_a_seis = mysqli_num_rows($b1);
$metkuan_a_seis_asli = $metkuan_a_seis/$seis;
$e2 = mysqli_query($conn, "select metkuan from data_training where metkuan = 'A' and lab='aci'");
$metkuan_a_aci = mysqli_num_rows($b2);
$metkuan_a_aci_asli = $metkuan_a_aci/$aci;
$e3 = mysqli_query($conn, "select metkuan from data_training where metkuan = 'A' and lab='ncc'");
$metkuan_a_ncc = mysqli_num_rows($b3);
$metkuan_a_ncc_asli = $metkuan_a_ncc/$ncc;
$e4 = mysqli_query($conn, "select metkuan from data_training where metkuan = 'AB' and lab='seis'");
$metkuan_ab_seis = mysqli_num_rows($b4);
$metkuan_ab_seis_asli = $metkuan_ab_seis/$seis;
$e5 = mysqli_query($conn, "select metkuan from data_training where metkuan = 'AB' and lab='aci'");
$metkuan_ab_aci = mysqli_num_rows($b5);
$metkuan_ab_aci_asli = $metkuan_ab_aci/$aci;
$e6 = mysqli_query($conn, "select metkuan from data_training where metkuan = 'AB' and lab='ncc'");
$metkuan_ab_ncc = mysqli_num_rows($b6);
$metkuan_ab_ncc_asli = $metkuan_ab_ncc/$ncc;
$e7 = mysqli_query($conn, "select metkuan from data_training where metkuan = 'B' and lab='seis'");
$metkuan_b_seis = mysqli_num_rows($b7);
$metkuan_b_seis_asli = $metkuan_b_seis/$seis;
$e8 = mysqli_query($conn, "select metkuan from data_training where metkuan = 'B' and lab='aci'");
$metkuan_b_aci = mysqli_num_rows($b8);
$metkuan_b_aci_asli = $metkuan_b_aci/$aci;
$e9 = mysqli_query($conn, "select metkuan from data_training where metkuan = 'B' and lab='ncc'");
$metkuan_b_ncc = mysqli_num_rows($b9);
$metkuan_b_ncc_asli = $metkuan_b_ncc/$ncc;
$e10 = mysqli_query($conn, "select metkuan from data_training where metkuan = 'BC' and lab='seis'");
$metkuan_bc_seis = mysqli_num_rows($b10);
$metkuan_bc_seis_asli = $metkuan_bc_seis/$seis;
$e11 = mysqli_query($conn, "select metkuan from data_training where metkuan = 'BC' and lab='aci'");
$metkuan_bc_aci = mysqli_num_rows($b11);
$metkuan_bc_aci_asli = $metkuan_bc_aci/$aci;
$e12 = mysqli_query($conn, "select metkuan from data_training where metkuan = 'BC' and lab='ncc'");
$metkuan_bc_ncc = mysqli_num_rows($b12);
$metkuan_bc_ncc_asli = $metkuan_bc_ncc/$ncc;
$e13 = mysqli_query($conn, "select metkuan from data_training where metkuan = 'C' and lab='seis'");
$metkuan_c_seis = mysqli_num_rows($b13);
$metkuan_c_seis_asli = $metkuan_c_seis/$seis;
$e14 = mysqli_query($conn, "select metkuan from data_training where metkuan = 'C' and lab='aci'");
$metkuan_c_aci = mysqli_num_rows($b14);
$metkuan_c_aci_asli = $metkuan_c_aci/$aci;
$e15 = mysqli_query($conn, "select metkuan from data_training where metkuan = 'C' and lab='ncc'");
$metkuan_c_ncc = mysqli_num_rows($b1);
$metkuan_c_ncc_asli = $metkuan_c_ncc/$ncc;
$e16 = mysqli_query($conn, "select metkuan from data_training where metkuan = 'D' and lab='seis'");
$metkuan_d_seis = mysqli_num_rows($b16);
$metkuan_d_seis_asli = $metkuan_d_seis/$seis;
$e17 = mysqli_query($conn, "select metkuan from data_training where metkuan = 'D' and lab='aci'");
$metkuan_d_aci = mysqli_num_rows($b17);
$metkuan_d_aci_asli = $metkuan_d_aci/$aci;
$e18 = mysqli_query($conn, "select metkuan from data_training where metkuan = 'D' and lab='ncc'");
$metkuan_d_ncc = mysqli_num_rows($b18);
$metkuan_d_ncc_asli = $metkuan_d_ncc/$ncc;
$e19 = mysqli_query($conn, "select metkuan from data_training where metkuan = 'E' and lab='seis'");
$metkuan_e_seis = mysqli_num_rows($b19);
$metkuan_e_seis_asli = $metkuan_e_seis/$seis;
$e20 = mysqli_query($conn, "select metkuan from data_training where metkuan = 'E' and lab='aci'");
$metkuan_e_aci = mysqli_num_rows($b20);
$metkuan_e_aci_asli = $metkuan_e_aci/$aci;
$e21 = mysqli_query($conn, "select metkuan from data_training where metkuan = 'E' and lab='ncc'");
$metkuan_e_ncc = mysqli_num_rows($b21);
$metkuan_e_ncc_asli = $metkuan_e_ncc/$ncc;

$f1 = mysqli_query($conn, "select daming from data_training where daming = 'A' and lab='seis'");
$daming_a_seis = mysqli_num_rows($b1);
$daming_a_seis_asli = $daming_a_seis/$seis;
$f2 = mysqli_query($conn, "select daming from data_training where daming = 'A' and lab='aci'");
$daming_a_aci = mysqli_num_rows($b2);
$daming_a_aci_asli = $daming_a_aci/$aci;
$f3 = mysqli_query($conn, "select daming from data_training where daming = 'A' and lab='ncc'");
$daming_a_ncc = mysqli_num_rows($b3);
$daming_a_ncc_asli = $daming_a_ncc/$ncc;
$f4 = mysqli_query($conn, "select daming from data_training where daming = 'AB' and lab='seis'");
$daming_ab_seis = mysqli_num_rows($b4);
$daming_ab_seis_asli = $daming_ab_seis/$seis;
$f5 = mysqli_query($conn, "select daming from data_training where daming = 'AB' and lab='aci'");
$daming_ab_aci = mysqli_num_rows($b5);
$daming_ab_aci_asli = $daming_ab_aci/$aci;
$f6 = mysqli_query($conn, "select daming from data_training where daming = 'AB' and lab='ncc'");
$daming_ab_ncc = mysqli_num_rows($b6);
$daming_ab_ncc_asli = $daming_ab_ncc/$ncc;
$f7 = mysqli_query($conn, "select daming from data_training where daming = 'B' and lab='seis'");
$daming_b_seis = mysqli_num_rows($b7);
$daming_b_seis_asli = $daming_b_seis/$seis;
$f8 = mysqli_query($conn, "select daming from data_training where daming = 'B' and lab='aci'");
$daming_b_aci = mysqli_num_rows($b8);
$daming_b_aci_asli = $daming_b_aci/$aci;
$f9 = mysqli_query($conn, "select daming from data_training where daming = 'B' and lab='ncc'");
$daming_b_ncc = mysqli_num_rows($b9);
$daming_b_ncc_asli = $daming_b_ncc/$ncc;
$f10 = mysqli_query($conn, "select daming from data_training where daming = 'BC' and lab='seis'");
$daming_bc_seis = mysqli_num_rows($b10);
$daming_bc_seis_asli = $daming_bc_seis/$seis;
$f11 = mysqli_query($conn, "select daming from data_training where daming = 'BC' and lab='aci'");
$daming_bc_aci = mysqli_num_rows($b11);
$daming_bc_aci_asli = $daming_bc_aci/$aci;
$f12 = mysqli_query($conn, "select daming from data_training where daming = 'BC' and lab='ncc'");
$daming_bc_ncc = mysqli_num_rows($b12);
$daming_bc_ncc_asli = $daming_bc_ncc/$ncc;
$f13 = mysqli_query($conn, "select daming from data_training where daming = 'C' and lab='seis'");
$daming_c_seis = mysqli_num_rows($b13);
$daming_c_seis_asli = $daming_c_seis/$seis;
$f14 = mysqli_query($conn, "select daming from data_training where daming = 'C' and lab='aci'");
$daming_c_aci = mysqli_num_rows($b14);
$daming_c_aci_asli = $daming_c_aci/$aci;
$f15 = mysqli_query($conn, "select daming from data_training where daming = 'C' and lab='ncc'");
$daming_c_ncc = mysqli_num_rows($b1);
$daming_c_ncc_asli = $daming_c_ncc/$ncc;
$f16 = mysqli_query($conn, "select daming from data_training where daming = 'D' and lab='seis'");
$daming_d_seis = mysqli_num_rows($b16);
$daming_d_seis_asli = $daming_d_seis/$seis;
$f17 = mysqli_query($conn, "select daming from data_training where daming = 'D' and lab='aci'");
$daming_d_aci = mysqli_num_rows($b17);
$daming_d_aci_asli = $daming_d_aci/$aci;
$f18 = mysqli_query($conn, "select daming from data_training where daming = 'D' and lab='ncc'");
$daming_d_ncc = mysqli_num_rows($b18);
$daming_d_ncc_asli = $daming_d_ncc/$ncc;
$f19 = mysqli_query($conn, "select daming from data_training where daming = 'E' and lab='seis'");
$daming_e_seis = mysqli_num_rows($b19);
$daming_e_seis_asli = $daming_e_seis/$seis;
$f20 = mysqli_query($conn, "select daming from data_training where daming = 'E' and lab='aci'");
$daming_e_aci = mysqli_num_rows($b20);
$daming_e_aci_asli = $daming_e_aci/$aci;
$f21 = mysqli_query($conn, "select daming from data_training where daming = 'E' and lab='ncc'");
$daming_e_ncc = mysqli_num_rows($b21);
$daming_e_ncc_asli = $daming_e_ncc/$ncc;

$g1 = mysqli_query($conn, "select sispak from data_training where sispak = 'A' and lab='seis'");
$sispak_a_seis = mysqli_num_rows($b1);
$sispak_a_seis_asli = $sispak_a_seis/$seis;
$g2 = mysqli_query($conn, "select sispak from data_training where sispak = 'A' and lab='aci'");
$sispak_a_aci = mysqli_num_rows($b2);
$sispak_a_aci_asli = $sispak_a_aci/$aci;
$g3 = mysqli_query($conn, "select sispak from data_training where sispak = 'A' and lab='ncc'");
$sispak_a_ncc = mysqli_num_rows($b3);
$sispak_a_ncc_asli = $sispak_a_ncc/$ncc;
$g4 = mysqli_query($conn, "select sispak from data_training where sispak = 'AB' and lab='seis'");
$sispak_ab_seis = mysqli_num_rows($b4);
$sispak_ab_seis_asli = $sispak_ab_seis/$seis;
$g5 = mysqli_query($conn, "select sispak from data_training where sispak = 'AB' and lab='aci'");
$sispak_ab_aci = mysqli_num_rows($b5);
$sispak_ab_aci_asli = $sispak_ab_aci/$aci;
$g6 = mysqli_query($conn, "select sispak from data_training where sispak = 'AB' and lab='ncc'");
$sispak_ab_ncc = mysqli_num_rows($b6);
$sispak_ab_ncc_asli = $sispak_ab_ncc/$ncc;
$g7 = mysqli_query($conn, "select sispak from data_training where sispak = 'B' and lab='seis'");
$sispak_b_seis = mysqli_num_rows($b7);
$sispak_b_seis_asli = $sispak_b_seis/$seis;
$g8 = mysqli_query($conn, "select sispak from data_training where sispak = 'B' and lab='aci'");
$sispak_b_aci = mysqli_num_rows($b8);
$sispak_b_aci_asli = $sispak_b_aci/$aci;
$g9 = mysqli_query($conn, "select sispak from data_training where sispak = 'B' and lab='ncc'");
$sispak_b_ncc = mysqli_num_rows($b9);
$sispak_b_ncc_asli = $sispak_b_ncc/$ncc;
$g10 = mysqli_query($conn, "select sispak from data_training where sispak = 'BC' and lab='seis'");
$sispak_bc_seis = mysqli_num_rows($b10);
$sispak_bc_seis_asli = $sispak_bc_seis/$seis;
$g11 = mysqli_query($conn, "select sispak from data_training where sispak = 'BC' and lab='aci'");
$sispak_bc_aci = mysqli_num_rows($b11);
$sispak_bc_aci_asli = $sispak_bc_aci/$aci;
$g12 = mysqli_query($conn, "select sispak from data_training where sispak = 'BC' and lab='ncc'");
$sispak_bc_ncc = mysqli_num_rows($b12);
$sispak_bc_ncc_asli = $sispak_bc_ncc/$ncc;
$g13 = mysqli_query($conn, "select sispak from data_training where sispak = 'C' and lab='seis'");
$sispak_c_seis = mysqli_num_rows($b13);
$sispak_c_seis_asli = $sispak_c_seis/$seis;
$g14 = mysqli_query($conn, "select sispak from data_training where sispak = 'C' and lab='aci'");
$sispak_c_aci = mysqli_num_rows($b14);
$sispak_c_aci_asli = $sispak_c_aci/$aci;
$g15 = mysqli_query($conn, "select sispak from data_training where sispak = 'C' and lab='ncc'");
$sispak_c_ncc = mysqli_num_rows($b1);
$sispak_c_ncc_asli = $sispak_c_ncc/$ncc;
$g16 = mysqli_query($conn, "select sispak from data_training where sispak = 'D' and lab='seis'");
$sispak_d_seis = mysqli_num_rows($b16);
$sispak_d_seis_asli = $sispak_d_seis/$seis;
$g17 = mysqli_query($conn, "select sispak from data_training where sispak = 'D' and lab='aci'");
$sispak_d_aci = mysqli_num_rows($b17);
$sispak_d_aci_asli = $sispak_d_aci/$aci;
$g18 = mysqli_query($conn, "select sispak from data_training where sispak = 'D' and lab='ncc'");
$sispak_d_ncc = mysqli_num_rows($b18);
$sispak_d_ncc_asli = $sispak_d_ncc/$ncc;
$g19 = mysqli_query($conn, "select sispak from data_training where sispak = 'E' and lab='seis'");
$sispak_e_seis = mysqli_num_rows($b19);
$sispak_e_seis_asli = $sispak_e_seis/$seis;
$g20 = mysqli_query($conn, "select sispak from data_training where sispak = 'E' and lab='aci'");
$sispak_e_aci = mysqli_num_rows($b20);
$sispak_e_aci_asli = $sispak_e_aci/$aci;
$g21 = mysqli_query($conn, "select sispak from data_training where sispak = 'E' and lab='ncc'");
$sispak_e_ncc = mysqli_num_rows($b21);
$sispak_e_ncc_asli = $sispak_e_ncc/$ncc;
	
	//seis
	if($radig=='A') $radig_seis=$radig_a_seis_asli;
	else if($radig=='AB') $radig_seis=$radig_ab_seis_asli;
	else if($radig=='B') $radig_seis=$radig_b_seis_asli;
	else if($radig=='BC') $radig_seis=$radig_bc_seis_asli;
	else if($radig=='C') $radig_seis=$radig_c_seis_asli;
	else if($radig=='D') $radig_seis=$radig_d_seis_asli;
	else $radig_seis=$radig_e_seis_asli;
	
	
	if($orkom=='A') $orkom_seis=$orkom_a_seis_asli;
	else if($orkom=='AB') $orkom_seis=$orkom_ab_seis_asli;
	else if($orkom=='B') $orkom_seis=$orkom_b_seis_asli;
	else if($orkom=='BC') $orkom_seis=$orkom_bc_seis_asli;
	else if($orkom=='C') $orkom_seis=$orkom_c_seis_asli;
	else if($orkom=='D') $orkom_seis=$orkom_d_seis_asli;
	else $orkom_seis=$orkom_e_seis_asli;
	
	
	if($so=='A') $so_seis=$so_a_seis_asli;
	else if($so=='AB') $so_seis=$so_ab_seis_asli;
	else if($so=='B') $so_seis=$so_b_seis_asli;
	else if($so=='BC') $so_seis=$so_bc_seis_asli;
	else if($so=='C') $so_seis=$so_c_seis_asli;
	else if($so=='D') $so_seis=$so_d_seis_asli;
	else $so_seis=$so_e_seis_asli;
	
	
	if($komdat=='A') $komdat_seis=$komdat_a_seis_asli;
	else if($komdat=='AB') $komdat_seis=$komdat_ab_seis_asli;
	else if($komdat=='B') $komdat_seis=$komdat_b_seis_asli;
	else if($komdat=='BC') $komdat_seis=$komdat_bc_seis_asli;
	else if($komdat=='C') $komdat_seis=$komdat_c_seis_asli;
	else if($komdat=='D') $komdat_seis=$komdat_d_seis_asli;
	else $komdat_seis=$komdat_e_seis_asli;
	
	
	if($rpl=='A') $rpl_seis=$rpl_a_seis_asli;
	else if($rpl=='AB') $rpl_seis=$rpl_ab_seis_asli;
	else if($rpl=='B') $rpl_seis=$rpl_b_seis_asli;
	else if($rpl=='BC') $rpl_seis=$rpl_bc_seis_asli;
	else if($rpl=='C') $rpl_seis=$rpl_c_seis_asli;
	else if($rpl=='D') $rpl_seis=$rpl_d_seis_asli;
	else $rpl_seis=$rpl_e_seis_asli;
	
	
	if($si=='A') $si_seis=$si_a_seis_asli;
	else if($si=='AB') $si_seis=$si_ab_seis_asli;
	else if($si=='B') $si_seis=$si_b_seis_asli;
	else if($si=='BC') $si_seis=$si_bc_seis_asli;
	else if($si=='C') $si_seis=$si_c_seis_asli;
	else if($si=='D') $si_seis=$si_d_seis_asli;
	else $si_seis=$si_e_seis_asli;

	
	if($imk=='A') $imk_seis=$imk_a_seis_asli;
	else if($imk=='AB') $imk_seis=$imk_ab_seis_asli;
	else if($imk=='B') $imk_seis=$imk_b_seis_asli;
	else if($imk=='BC') $imk_seis=$imk_bc_seis_asli;
	else if($imk=='C') $imk_seis=$imk_c_seis_asli;
	else if($imk=='D') $imk_seis=$imk_d_seis_asli;
	else $imk_seis=$imk_e_seis_asli;
	
	
	if($metkuan=='A') $metkuan_seis=$metkuan_a_seis_asli;
	else if($metkuan=='AB') $metkuan_seis=$metkuan_ab_seis_asli;
	else if($metkuan=='B') $metkuan_seis=$metkuan_b_seis_asli;
	else if($metkuan=='BC') $metkuan_seis=$metkuan_bc_seis_asli;
	else if($metkuan=='C') $metkuan_seis=$metkuan_c_seis_asli;
	else if($metkuan=='D') $metkuan_seis=$metkuan_d_seis_asli;
	else $metkuan_seis=$metkuan_e_seis_asli;
	
	if($ai=='A') $ai_seis=$ai_a_seis_asli;
	else if($ai=='AB') $ai_seis=$ai_ab_seis_asli;
	else if($ai=='B') $ai_seis=$ai_b_seis_asli;
	else if($ai=='BC') $ai_seis=$ai_bc_seis_asli;
	else if($ai=='C') $ai_seis=$ai_c_seis_asli;
	else if($ai=='D') $ai_seis=$ai_d_seis_asli;
	else $ai_seis=$ai_e_seis_asli;
	
	
	if($daming=='A') $daming_seis=$daming_a_seis_asli;
	else if($daming=='AB') $daming_seis=$daming_ab_seis_asli;
	else if($daming=='B') $daming_seis=$daming_b_seis_asli;
	else if($daming=='BC') $daming_seis=$daming_bc_seis_asli;
	else if($daming=='C') $daming_seis=$daming_c_seis_asli;
	else if($daming=='D') $daming_seis=$daming_d_seis_asli;
	else $daming_seis=$daming_e_seis_asli;
	

	
	if($sispak=='A') $sispak_seis=$sispak_a_seis_asli;
	else if($sispak=='AB') $sispak_seis=$sispak_ab_seis_asli;
	else if($sispak=='B') $sispak_seis=$sispak_b_seis_asli;
	else if($sispak=='BC') $sispak_seis=$sispak_bc_seis_asli;
	else if($sispak=='C') $sispak_seis=$sispak_c_seis_asli;
	else if($sispak=='D') $sispak_seis=$sispak_d_seis_asli;
	else $sispak_seis=$sispak_e_seis_asli;

	
	
	if($radig_seis==0) $radig_seis=1;
	if($orkom_seis==0) $orkom_seis=1;
	if($so_seis==0) $so_seis=1;
	if($komdat_seis==0) $komdat_seis=1;
	if($rpl_seis==0) $rpl_seis=1;
	if($si_seis==0) $si_seis=1;
	if($imk_seis==0) $imk_seis=1;
	if($metkuan_seis==0) $metkuan_seis=1;
	if($ai_seis==0) $ai_seis=1;
	if($daming_seis==0) $daming_seis=1;
	if($sispak_seis==0) $sispak_seis=1;
	$peluang_seis = $radig_seis*$orkom_seis*$so_seis*$komdat_seis*$rpl_seis*$si_seis*$imk_seis*$metkuan_seis*$ai_seis*$daming_seis*$sispak_seis*$seisi;
	//aci
		if($radig=='A') $radig_aci=$radig_a_aci_asli;
	else if($radig=='AB') $radig_aci=$radig_ab_aci_asli;
	else if($radig=='B') $radig_aci=$radig_b_aci_asli;
	else if($radig=='BC') $radig_aci=$radig_bc_aci_asli;
	else if($radig=='C') $radig_aci=$radig_c_aci_asli;
	else if($radig=='D') $radig_aci=$radig_d_aci_asli;
	else $radig_aci=$radig_e_aci_asli;
	
	if($orkom=='A') $orkom_aci=$orkom_a_aci_asli;
	else if($orkom=='AB') $orkom_aci=$orkom_ab_aci_asli;
	else if($orkom=='B') $orkom_aci=$orkom_b_aci_asli;
	else if($orkom=='BC') $orkom_aci=$orkom_bc_aci_asli;
	else if($orkom=='C') $orkom_aci=$orkom_c_aci_asli;
	else if($orkom=='D') $orkom_aci=$orkom_d_aci_asli;
	else $orkom_aci=$orkom_e_aci_asli;
	
	if($so=='A') $so_aci=$so_a_aci_asli;
	else if($so=='AB') $so_aci=$so_ab_aci_asli;
	else if($so=='B') $so_aci=$so_b_aci_asli;
	else if($so=='BC') $so_aci=$so_bc_aci_asli;
	else if($so=='C') $so_aci=$so_c_aci_asli;
	else if($so=='D') $so_aci=$so_d_aci_asli;
	else $so_aci=$so_e_aci_asli;
	
	if($komdat=='A') $komdat_aci=$komdat_a_aci_asli;
	else if($komdat=='AB') $komdat_aci=$komdat_ab_aci_asli;
	else if($komdat=='B') $komdat_aci=$komdat_b_aci_asli;
	else if($komdat=='BC') $komdat_aci=$komdat_bc_aci_asli;
	else if($komdat=='C') $komdat_aci=$komdat_c_aci_asli;
	else if($komdat=='D') $komdat_aci=$komdat_d_aci_asli;
	else $komdat_aci=$komdat_e_aci_asli;
	
	if($rpl=='A') $rpl_aci=$rpl_a_aci_asli;
	else if($rpl=='AB') $rpl_aci=$rpl_ab_aci_asli;
	else if($rpl=='B') $rpl_aci=$rpl_b_aci_asli;
	else if($rpl=='BC') $rpl_aci=$rpl_bc_aci_asli;
	else if($rpl=='C') $rpl_aci=$rpl_c_aci_asli;
	else if($rpl=='D') $rpl_aci=$rpl_d_aci_asli;
	else $rpl_aci=$rpl_e_aci_asli;
	
	if($si=='A') $si_aci=$si_a_aci_asli;
	else if($si=='AB') $si_aci=$si_ab_aci_asli;
	else if($si=='B') $si_aci=$si_b_aci_asli;
	else if($si=='BC') $si_aci=$si_bc_aci_asli;
	else if($si=='C') $si_aci=$si_c_aci_asli;
	else if($si=='D') $si_aci=$si_d_aci_asli;
	else $si_aci=$si_e_aci_asli;
	
	if($imk=='A') $imk_aci=$imk_a_aci_asli;
	else if($imk=='AB') $imk_aci=$imk_ab_aci_asli;
	else if($imk=='B') $imk_aci=$imk_b_aci_asli;
	else if($imk=='BC') $imk_aci=$imk_bc_aci_asli;
	else if($imk=='C') $imk_aci=$imk_c_aci_asli;
	else if($imk=='D') $imk_aci=$imk_d_aci_asli;
	else $imk_aci=$imk_e_aci_asli;
	
	if($metkuan=='A') $metkuan_aci=$metkuan_a_aci_asli;
	else if($metkuan=='AB') $metkuan_aci=$metkuan_ab_aci_asli;
	else if($metkuan=='B') $metkuan_aci=$metkuan_b_aci_asli;
	else if($metkuan=='BC') $metkuan_aci=$metkuan_bc_aci_asli;
	else if($metkuan=='C') $metkuan_aci=$metkuan_c_aci_asli;
	else if($metkuan=='D') $metkuan_aci=$metkuan_d_aci_asli;
	else $metkuan_aci=$metkuan_e_aci_asli;
	
	if($ai=='A') $ai_aci=$ai_a_aci_asli;
	else if($ai=='AB') $ai_aci=$ai_ab_aci_asli;
	else if($ai=='B') $ai_aci=$ai_b_aci_asli;
	else if($ai=='BC') $ai_aci=$ai_bc_aci_asli;
	else if($ai=='C') $ai_aci=$ai_c_aci_asli;
	else if($ai=='D') $ai_aci=$ai_d_aci_asli;
	else $ai_aci=$ai_e_aci_asli;
	
	if($daming=='A') $daming_aci=$daming_a_aci_asli;
	else if($daming=='AB') $daming_aci=$daming_ab_aci_asli;
	else if($daming=='B') $daming_aci=$daming_b_aci_asli;
	else if($daming=='BC') $daming_aci=$daming_bc_aci_asli;
	else if($daming=='C') $daming_aci=$daming_c_aci_asli;
	else if($daming=='D') $daming_aci=$daming_d_aci_asli;
	else $daming_aci=$daming_e_aci_asli;
	
	if($sispak=='A') $sispak_aci=$sispak_a_aci_asli;
	else if($sispak=='AB') $sispak_aci=$sispak_ab_aci_asli;
	else if($sispak=='B') $sispak_aci=$sispak_b_aci_asli;
	else if($sispak=='BC') $sispak_aci=$sispak_bc_aci_asli;
	else if($sispak=='C') $sispak_aci=$sispak_c_aci_asli;
	else if($sispak=='D') $sispak_aci=$sispak_d_aci_asli;
	else $sispak_aci=$sispak_e_aci_asli;
	
	if($radig_aci==0) $radig_aci=1;
	if($orkom_aci==0) $orkom_aci=1;
	if($so_aci==0) $so_aci=1;
	if($komdat_aci==0) $komdat_aci=1;
	if($rpl_aci==0) $rpl_aci=1;
	if($si_aci==0) $si_aci=1;
	if($imk_aci==0) $imk_aci=1;
	if($metkuan_aci==0) $metkuan_aci=1;
	if($ai_aci==0) $ai_aci=1;
	if($daming_aci==0) $daming_aci=1;
	if($sispak_aci==0) $sispak_aci=1;
	$peluang_aci = $radig_aci*$orkom_aci*$so_aci*$komdat_aci*$rpl_aci*$si_aci*$imk_aci*$metkuan_aci*$ai_aci*$daming_aci*$sispak_aci*$acii;
	//ncc
			if($radig=='A') $radig_ncc=$radig_a_ncc_asli;
	else if($radig=='AB') $radig_ncc=$radig_ab_ncc_asli;
	else if($radig=='B') $radig_ncc=$radig_b_ncc_asli;
	else if($radig=='BC') $radig_ncc=$radig_bc_ncc_asli;
	else if($radig=='C') $radig_ncc=$radig_c_ncc_asli;
	else if($radig=='D') $radig_ncc=$radig_d_ncc_asli;
	else $radig_ncc=$radig_e_ncc_asli;
	
	if($orkom=='A') $orkom_ncc=$orkom_a_ncc_asli;
	else if($orkom=='AB') $orkom_ncc=$orkom_ab_ncc_asli;
	else if($orkom=='B') $orkom_ncc=$orkom_b_ncc_asli;
	else if($orkom=='BC') $orkom_ncc=$orkom_bc_ncc_asli;
	else if($orkom=='C') $orkom_ncc=$orkom_c_ncc_asli;
	else if($orkom=='D') $orkom_ncc=$orkom_d_ncc_asli;
	else $orkom_ncc=$orkom_e_ncc_asli;
	
	if($so=='A') $so_ncc=$so_a_ncc_asli;
	else if($so=='AB') $so_ncc=$so_ab_ncc_asli;
	else if($so=='B') $so_ncc=$so_b_ncc_asli;
	else if($so=='BC') $so_ncc=$so_bc_ncc_asli;
	else if($so=='C') $so_ncc=$so_c_ncc_asli;
	else if($so=='D') $so_ncc=$so_d_ncc_asli;
	else $so_ncc=$so_e_ncc_asli;
	
	if($komdat=='A') $komdat_ncc=$komdat_a_ncc_asli;
	else if($komdat=='AB') $komdat_ncc=$komdat_ab_ncc_asli;
	else if($komdat=='B') $komdat_ncc=$komdat_b_ncc_asli;
	else if($komdat=='BC') $komdat_ncc=$komdat_bc_ncc_asli;
	else if($komdat=='C') $komdat_ncc=$komdat_c_ncc_asli;
	else if($komdat=='D') $komdat_ncc=$komdat_d_ncc_asli;
	else $komdat_ncc=$komdat_e_ncc_asli;
	
	if($rpl=='A') $rpl_ncc=$rpl_a_ncc_asli;
	else if($rpl=='AB') $rpl_ncc=$rpl_ab_ncc_asli;
	else if($rpl=='B') $rpl_ncc=$rpl_b_ncc_asli;
	else if($rpl=='BC') $rpl_ncc=$rpl_bc_ncc_asli;
	else if($rpl=='C') $rpl_ncc=$rpl_c_ncc_asli;
	else if($rpl=='D') $rpl_ncc=$rpl_d_ncc_asli;
	else $rpl_ncc=$rpl_e_ncc_asli;
	
	if($si=='A') $si_ncc=$si_a_ncc_asli;
	else if($si=='AB') $si_ncc=$si_ab_ncc_asli;
	else if($si=='B') $si_ncc=$si_b_ncc_asli;
	else if($si=='BC') $si_ncc=$si_bc_ncc_asli;
	else if($si=='C') $si_ncc=$si_c_ncc_asli;
	else if($si=='D') $si_ncc=$si_d_ncc_asli;
	else $si_ncc=$si_e_ncc_asli;
	
	if($imk=='A') $imk_ncc=$imk_a_ncc_asli;
	else if($imk=='AB') $imk_ncc=$imk_ab_ncc_asli;
	else if($imk=='B') $imk_ncc=$imk_b_ncc_asli;
	else if($imk=='BC') $imk_ncc=$imk_bc_ncc_asli;
	else if($imk=='C') $imk_ncc=$imk_c_ncc_asli;
	else if($imk=='D') $imk_ncc=$imk_d_ncc_asli;
	else $imk_ncc=$imk_e_ncc_asli;
	
	if($metkuan=='A') $metkuan_ncc=$metkuan_a_ncc_asli;
	else if($metkuan=='AB') $metkuan_ncc=$metkuan_ab_ncc_asli;
	else if($metkuan=='B') $metkuan_ncc=$metkuan_b_ncc_asli;
	else if($metkuan=='BC') $metkuan_ncc=$metkuan_bc_ncc_asli;
	else if($metkuan=='C') $metkuan_ncc=$metkuan_c_ncc_asli;
	else if($metkuan=='D') $metkuan_ncc=$metkuan_d_ncc_asli;
	else $metkuan_ncc=$metkuan_e_ncc_asli;
	
	if($ai=='A') $ai_ncc=$ai_a_ncc_asli;
	else if($ai=='AB') $ai_ncc=$ai_ab_ncc_asli;
	else if($ai=='B') $ai_ncc=$ai_b_ncc_asli;
	else if($ai=='BC') $ai_ncc=$ai_bc_ncc_asli;
	else if($ai=='C') $ai_ncc=$ai_c_ncc_asli;
	else if($ai=='D') $ai_ncc=$ai_d_ncc_asli;
	else $ai_ncc=$ai_e_ncc_asli;
	
	if($daming=='A') $daming_ncc=$daming_a_ncc_asli;
	else if($daming=='AB') $daming_ncc=$daming_ab_ncc_asli;
	else if($daming=='B') $daming_ncc=$daming_b_ncc_asli;
	else if($daming=='BC') $daming_ncc=$daming_bc_ncc_asli;
	else if($daming=='C') $daming_ncc=$daming_c_ncc_asli;
	else if($daming=='D') $daming_ncc=$daming_d_ncc_asli;
	else $daming_ncc=$daming_e_ncc_asli;
	
	if($sispak=='A') $sispak_ncc=$sispak_a_ncc_asli;
	else if($sispak=='AB') $sispak_ncc=$sispak_ab_ncc_asli;
	else if($sispak=='B') $sispak_ncc=$sispak_b_ncc_asli;
	else if($sispak=='BC') $sispak_ncc=$sispak_bc_ncc_asli;
	else if($sispak=='C') $sispak_ncc=$sispak_c_ncc_asli;
	else if($sispak=='D') $sispak_ncc=$sispak_d_ncc_asli;
	else $sispak_ncc=$sispak_e_ncc_asli;
	
	if($radig_ncc==0) $radig_ncc=1;
	if($orkom_ncc==0) $orkom_ncc=1;
	if($so_ncc==0) $so_ncc=1;
	if($komdat_ncc==0) $komdat_ncc=1;
	if($rpl_ncc==0) $rpl_ncc=1;
	if($si_ncc==0) $si_ncc=1;
	if($imk_ncc==0) $imk_ncc=1;
	if($metkuan_ncc==0) $metkuan_ncc=1;
	if($ai_ncc==0) $ai_ncc=1;
	if($daming_ncc==0) $daming_ncc=1;
	if($sispak_ncc==0) $sispak_ncc=1;
	$peluang_ncc = $radig_ncc*$orkom_ncc*$so_ncc*$komdat_ncc*$rpl_ncc*$si_ncc*$imk_ncc*$metkuan_ncc*$ai_ncc*$daming_ncc*$sispak_ncc*$ncci;

	
		if(1){
				if($peluang_seis > $peluang_ncc &&  $peluang_seis > $peluang_aci) $hasil = 'SEIS';
				else if($peluang_ncc > $peluang_seis && $peluang_ncc > $peluang_aci) $hasil = 'NCC';
				else $hasil = 'ACI';
				
				$sql = "INSERT INTO hasil VALUES('','$peluang_seis','$peluang_aci','$peluang_ncc','$hasil')";
				mysqli_query($conn,$sql);
						
				$sqli = mysqli_query($conn, "SELECT id FROM hasil ORDER BY id DESC LIMIT 1;");
				$sqlii = mysqli_fetch_array($sqli);
				echo "Memproses Data, Silakan Tunggu...";
				?>
				<script language="javascript">alert("Input Berhasil");</script>
				<script>document.location.href='selamat-<?php echo $sqlii['id'];?>';</script>
		<?php
		}
		else{
		?>
			<script language="javascript">alert("Pendaftaran Gagal");</script>
			<script>document.location.href='forms.php';</script>
		<?php
		}
mysqli_close($conn);
?>
	