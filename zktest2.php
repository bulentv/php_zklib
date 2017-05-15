<?php
    include("zklib/zklib.php");
    
    $zk = new ZKLib("10.22.150.49", 4370);
    
    $ret = $zk->connect();
    sleep(1);
    echo $zk->version();
    echo $zk->osversion();
    echo $zk->platform();
    echo $zk->fmVersion();
    echo print_r($zk->getAttendance());
?>
