<?php

    // configuration
    require("../includes/config.php");

    // query first and last name of user
    $accountName = query("SELECT First_name, Last_name FROM clients WHERE IDCL = ?", $_SESSION["id"]);

    //query rent history
    $rentHistory = query("SELECT cars.Name, cars.Image, rents.IDCA, rents.Start_date, rents.End_date FROM rents INNER JOIN cars ON rents.IDCA = cars.IDCA WHERE IDCL = ?", $_SESSION["id"]);

    // render cars page
    render("rent_history.php", ["rentHistory" => $rentHistory, "accountName" => $accountName, "title" => "Rent History"]);

?>
