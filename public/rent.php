<?php

    // configuration
    require("../includes/config.php");

    // query first and last name of user
    $accountName = query("SELECT First_name, Last_name FROM clients WHERE IDCL = ?", $_SESSION["id"]);

    //query list of cars
    $listOfCars = query("SELECT IDCA, Name, Image from cars order by Name");

    // if user reached page via GET (as by clicking a link or via redirect)
    if ($_SERVER["REQUEST_METHOD"] == "GET")
    {
        // render rent form
        render("rent_form.php", ["listOfCars" => $listOfCars, "accountName" => $accountName, "title" => "Rent"]);
    }
    // else if user reached page via POST (as by submitting a form via POST)
    else if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        // check if start date is before end date
        if ($_POST["start_date"] > $_POST["end_date"])
        {
            apologize("End date must be after start date.");
        }
        else
        {
            // insert data about rent
            query("INSERT INTO rents (IDCA, IDCL, Start_date, End_date) VALUES (?, ?, ?, ?)", $_POST["car"], $_SESSION["id"], $_POST["start_date"], $_POST["end_date"]);
            redirect("/Projects/rent-a-car/public/rent_history.php");
        }
    }

?>
