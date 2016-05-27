<?php
function ascii_table($data) { 

    $keys = array_keys(end($data)); 
     
    # calculate optimal width 
   /* $wid = array_map('strlen', $keys); 
    foreach($data as $row) { 
        foreach(array_values($row) as $k => $v) 
            $wid[$k] = max($wid[$k], strlen($v)); 
    } */
	$wid=array();
	$wid[0]=6;
    $wid[1]=30;
	$wid[2]=20;	
	
    # build format and separator strings 
    foreach($wid as $k => $v) { 
        $fmt[$k] = "%-{$v}s"; 
        $sep[$k] = str_repeat('-', $v); 
    } 
    $fmt = '  ' . implode('   ', $fmt) . '  '; 
    $sep = '+-' . implode('-+-', $sep) . '-+'; 
     
    # create header 
    $buf = array($sep, vsprintf($fmt, $keys), $sep); 
     
    # print data 
	$dt=array();
    foreach($data as $r=>$row) { 
    foreach($row as $k => $v){
	echo str_pad($data[$r]['Donasi'],30," ",0)."<br>";	
	if(30 < strlen($v))
    $dt[$k]=substr($v,0,27)."...";	
	else
    $dt[$k]=$v;	
	}
	
	
	
		
	$buf[] = vsprintf($fmt, $dt); 
	
        
    } 
    $buf[] = $sep; 
    # finis 
    return implode("\n", $buf); 
} 


# example 

$data = array( 
    array('No' => 1, 'Nama' => 'Yudi Sulistiyo Bin Suratno + Ayu', 'Donasi' => '13.000.350.000', 'Tipe' => 'Infaq Ibunda Tabungan Wakaf'), 
    array('No' => 2, 'Nama' => 'Yudi Sulistiyo Bin Suratno + Ayu', 'Donasi' => '13.000.350.000', 'Tipe' => 'Infaq Ibunda Tabungan Wakaf'),  
); 
echo "<pre>"; 
echo ascii_table($data); 

?>