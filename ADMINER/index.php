<?php
function adminer_object() {
    include_once "./plugin.php";
    include_once "./login-otp.php";
    
    $plugins = array(
        new AdminerLoginOtp(base64_decode('YourSecretKey')),
        // See https://www.adminer.org/en/plugins/otp/
    );
    
    return new AdminerPlugin($plugins);
}

// store original adminer.php somewhere not accessible from web
include "./not-accesible/adminer.php";
