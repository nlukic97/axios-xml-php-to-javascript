<?php
    date_default_timezone_set('Europe/Belgrade');
    $time = date('h:m:i:s', time());
    echo $time; //mozda ovde treba json encode. Sta god ehujes, to dobija axios request (ili xml)