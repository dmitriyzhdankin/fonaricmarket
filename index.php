<?php

$path = dirname(__FILE__).'/wa-config/SystemConfig.class.php';

if (file_exists($path)) {
	require_once($path);
	waSystem::getInstance(null, new SystemConfig())->dispatch();
} else {
	$path = dirname(__FILE__).'/wa-installer/install.php';
	if (file_exists($path)) {
		require_once($path);
	} else {
		//404
	}
}
// Install all DB updates
//$data = array();
//$updates = array();
//function glob_recursive($dir, $mask,&$data){
//    foreach(glob($dir.'/*') as $filename){
//        if(strtolower(substr($filename, strlen($filename)-strlen($mask), strlen($mask)))==strtolower($mask)) {
//            $data[] = $filename;
//        }
//        if(is_dir($filename)) glob_recursive($filename, $mask,$data);
//    }
//}
//glob_recursive("wa-apps", "updates",$data);
//
//foreach( $data as $up ) {
//    glob_recursive($up, ".php", $updates);    
//}
//$i=0;
//foreach($updates as $upt) {
//    $i++;
//    echo $i .'<br>';
//    if($i<=7 
//            || $i <=9 
//            || $i <=11 
//            || $i <=12
//            || $i <=14
//            || $i <=16
//            || $i <=20
//            || $i <=21
//            || $i <=22
//            || $i <=26
//            || $i <=35
//            || $i <=39
//            || $i <=42
//            || $i <=45
//            || $i <=47
//            || $i <=49
//            || $i <=55
//            || $i <=57
//            || $i <=61
//            || $i <=62
//            || $i <=69
//            || $i <=70
//            || $i <=73
//            || $i <=74
//            || $i <=75
//            || $i <=76
//            || $i <=83
//            || $i <=85
//    ) continue;
//    
//    
//    try {
//        require_once($upt);
//    } catch (Exception $ex) {
//        echo $ex.'<br>';
//        continue;
//    }
//}
//die;
