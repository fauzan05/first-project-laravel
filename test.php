<?php

$date = new DateTime(null, new DateTimeZone('Asia/Jakarta'));
echo $date->format('Y-m-d H:i:sP') . "\n";