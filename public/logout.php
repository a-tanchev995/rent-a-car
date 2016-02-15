<?php

    // configuration
    require("../includes/config.php");

    // log out current user, if any
    logout();

    // redirect user
    redirect("/Projects/rent-a-car/public/login.php");

?>
