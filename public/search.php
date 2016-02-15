<?php

    // configuration
    require("../includes/config.php");

    // query first and last name of user
    $accountName = query("SELECT First_name, Last_name FROM clients WHERE IDCL = ?", $_SESSION["id"]);

    //query list of cars
    $query = "%" . $_POST["query"] . "%";
    $searchResults = query("SELECT IDCA, Name, Category, Color, Date_of_manufacture, Price, Image FROM cars WHERE name LIKE ? ORDER BY Name", $query);

    // render search page
    render("search.php", ["searchResults" => $searchResults, "accountName" => $accountName, "title" => "Search Results"]);

?>
