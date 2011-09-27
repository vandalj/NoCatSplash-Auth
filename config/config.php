<?php
    /*
        These are the settings I used in DD-WRT, I'd imagine they also apply to other implementations
        of NoCatSplash as well.
        
        NoCatSplash: Enable
        
        Gateway IP Addr: 192.168.1.1
        Gateway Name: Generic Hotspot
        Interface: LAN
        
        Homepage: http://www.google.com
        Homepage Redirection: Enable (if you want the client to be redirected to Homepage after a successful login.)
        
        Allowed Web Hosts: www.example.com (Make sure you add your website otherwise the client will be in a constant redirection loop.)
        Document Root: /www
        Splash URL: http://www.example.com/hotspot/redirect.php
        
        Exclude Ports: (See NoCatSplash Documentation for more information.)
        MAC White List: (See NoCatSplash Documentation for more information.)
        
        Login Timeout: 3600 (Seconds to allow client to have access to network for. I.e: 1 Hour = 3600 Seconds).
        Verbosity: (See NoCatSplash Documentation for more information.)
        Route Only: Disable
    */

    // Splash Settings
    $splash_url   = "http://www.example.com/hotspot";  // URL to Hotspot Files. I.e: http://www.example.com/hotspot
    $splash_title = "Generic Hotspot";                // Page Title
    
    // NoCatSplash Settings
    $cat_gateway  = "192.168.1.1";             // Default Gateway specified in Router Settings
    
?>
