<?php
// Konversi dd-mm-yy > yyy-mm-dd 
function tgl_ind_to_eng() {
	$tgl_eng=substr($tgl, 6,4). "-".substr($tgl,3,2)."-".substr($tgl,0,2);
	return $tgl_eng;
}

// Konversi yyyy-mm-dd -> dd-mm-yyyy
function tgl_eng_to_ind($tgl) {
	$tgl_ind=substr($tgl,8,2)."-".substr($tgl,5,2)."-".substr($tgl,0,4);
	return $tgl_ind;
}
?>