<?php
$file = fopen(‘log.html’, ‘a’);
$time = date(‘H:i dS F’);
fwrite($file, ‘<b>Time:</b> $time<br/>’ );
fwrite( $file, ‘<b>Ip Address:</b> $REMOTE_ADDR<br/>’);
fwrite($file, ‘<b>Referer:</b> $HTTP_REFFERER<br/>’);
fwrite( $file, ‘<b>Browser:</b> $HTTP_USER_AGENT<hr/>’);
fclose( $file );
?>
