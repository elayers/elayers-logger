<?php header('Access-Control-Allow-Origin: *'); if($_POST['message'] != ""){ error_log("CONSOLE_LOG: ".$_POST['message']); }