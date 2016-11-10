<?php header('Access-Control-Allow-Origin: *');

header('Access-Control-Allow-Methods: GET, POST');

header("Access-Control-Allow-Headers: X-Requested-With"); 
$logs = $_POST['console_logs'];
if(sizeof($logs){
foreach($logs as $log){
    error_log("CONSOLE_LOG: ".$log);
}
}