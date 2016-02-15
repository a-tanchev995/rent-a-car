<?php

    // configuration
    require("../includes/config.php");

    // query first and last name of user
    $accountName = query("SELECT First_name, Last_name FROM clients WHERE IDCL = ?", $_SESSION["id"]);

    //query list of cars
    $listOfCars = query("SELECT IDCA, Name, Category, Color, Date_of_manufacture, Price, Image from cars order by Name");

    // render cars page
    render("cars.php", ["listOfCars" => $listOfCars, "accountName" => $accountName, "title" => "Cars"]);

?>
