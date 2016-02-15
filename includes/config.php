<?php

    /**
     * config.php
     *
     * Aleksandar Tanchev
     * rent-a-car
     *
     * Configures pages.
     */

    // display errors, warnings, and notices
    ini_set("display_errors", true);
    error_reporting(E_ALL);

    // requirements
    require("constants.php");
    require("functions.php");

    // enable sessions
    session_start();

    // require authentication for all pages except /login.php, /logout.php, and /register.php
    if (!in_array($_SERVER["PHP_SELF"], ["/Projects/rent-a-car/public/login.php", "/Projects/rent-a-car/public/logout.php", "/Projects/rent-a-car/public/register.php"]))
    {
        if (empty($_SESSION["id"]))
        {
            redirect("/Projects/rent-a-car/public/login.php");
        }
    }

?>
