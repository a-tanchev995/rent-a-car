<?php

    // configuration
    require("../includes/config.php");

    // query first and last name of user
    $accountName = query("SELECT First_name, Last_name FROM clients WHERE IDCL = ?", $_SESSION["id"]);

    //query user information
    $userInformation = query("SELECT IDCL, Username, First_name, Last_name, Age, Telephone, Address, Date_of_membership FROM clients WHERE IDCL = ?", $_SESSION["id"]);

    // render account page
    render("account.php", ["userInformation" => $userInformation, "accountName" => $accountName, "title" => "Account"]);

?>
