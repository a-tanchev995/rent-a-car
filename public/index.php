<?php

    // configuration
    require("../includes/config.php");

    // query first and last name of user
    $accountName = query("SELECT First_name, Last_name FROM clients WHERE IDCL = ?", $_SESSION["id"]);

    // render index
    render("index.php", ["accountName" => $accountName, "title" => "Main"]);

?>
