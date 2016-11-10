<?php $logs = $_POST['console_logs'];
foreach($logs as $log){
    error_log("CONSOLE_LOG: ".$log);
}