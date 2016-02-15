<?php

    // configuration
    require("../includes/config.php");

    // query first and last name of user
    $accountName = query("SELECT First_name, Last_name FROM clients WHERE IDCL = ?", $_SESSION["id"]);

    //query list of cars
    $listOfPartners = query("SELECT Name, Address, Telephone, Contact_person, Image FROM manufacturers ORDER BY Name");

    // render about company page
    render("about_partners.php", ["listOfPartners" => $listOfPartners, "accountName" => $accountName, "title" => "About Our Partners"]);

?>
