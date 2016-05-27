<?php
$tmpdir = "C:\Users\Yudi\Desktop";   # ambil direktori temporary untuk simpan file.
$file =  tempnam($tmpdir, 'ctk');  # nama file temporary yang akan dicetak
$handle = fopen($file, 'w');
$condensed = Chr(27) . Chr(33) . Chr(4);
$bold1 = Chr(27) . Chr(69);
$bold0 = Chr(27) . Chr(70);

$condensed1 = chr(15);
$condensed0 = chr(18);
$Data = "";
$Data .= "==========================\n";
$Data .= "|     ".$bold1."OFIDZ MAJEZTY".$bold0."      |\n";
$Data .= "==========================\n";
$Data .= "Ofidz Majezty is here\n";
$Data .= "We Love PHP Indonesia\n";
$Data .= "We Love PHP Indonesia\n";
$Data .=Chr(12);
$Data .= "We Love PHP Indonesia\n";
$Data .= "We Love PHP Indonesia\n";
$Data .= "We Love PHP Indonesia\n";
$Data .= "--------------------------\n";
fwrite($handle, $Data);
fclose($handle);
//copy($file, "C:\PrtWrk\PRT1");  # Lakukan cetak
//unlink($file);
?>