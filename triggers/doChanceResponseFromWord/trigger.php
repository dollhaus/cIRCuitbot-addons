<?php
function doActionFromWord($ircdata) {
    //We need to pull in the socket object so we can directly send an ACTION
    //with the proper control characters.
    global $socket;
    global $ircdata;

    
    $respond = (bool)rand(0,1);
    $options = parse_ini_file("./triggers/doActionFromWord/trigger.conf");
    if($options['action'] != "" && $respond) {
        fputs($socket, "PRIVMSG ".$ircdata['location']." :\001ACTION ".$options['action']."\001\n");
    }

    return true;
}
