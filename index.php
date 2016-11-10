<?php

function log($message, $component = "web", $program = "elayers-logger") {
  $sock = socket_create(AF_INET, SOCK_DGRAM, SOL_UDP);
  foreach(explode("\n", $message) as $line) {
    $syslog_message = "<22>" . date('M d H:i:s ') . $program . ' ' . $component . ': ' . $line;
    socket_sendto($sock, $syslog_message, strlen($syslog_message), 0, PAPERTRAIL_HOSTNAME, PAPERTRAIL_PORT);
  }
  socket_close($sock);
}

log("Test");
# send_remote_syslog("Any log message");
# send_remote_syslog("Something just happened", "other-component");
# send_remote_syslog("Something just happened", "a-background-job-name", "whatever-app-name");