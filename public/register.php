<?php

    // configuration
    require("../includes/config.php");

    // if user reached page via GET (as by clicking a link or via redirect)
    if ($_SERVER["REQUEST_METHOD"] == "GET")
    {
        // else render form
        render("register_form.php", ["title" => "Register"]);
    }

    // else if user reached page via POST (as by submitting a form via POST)
    else if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
		// validate submission
        if (empty($_POST["username"]))
        {
            apologize("You must provide a username.");
        }
		else if (empty($_POST["firstname"]))
		{
			apologize("You must provide your first name.");
		}
        else if (empty($_POST["lastname"]))
		{
			apologize("You must provide your last name.");
		}
        else if (empty($_POST["age"]))
		{
			apologize("You must provide your age.");
		}
        else if ($_POST["age"] < 21)
		{
			apologize("You must be over 21 to register.");
		}
        else if (empty($_POST["telephone"]))
		{
			apologize("You must provide your telephone.");
		}
        else if (empty($_POST["address"]))
		{
			apologize("You must provide your address.");
		}
		else if (empty($_POST["password"]))
		{
			apologize("You must provide a password.");
		}
		else if ($_POST["password"] != $_POST["confirmation"])
		{
			apologize("Passwords do not match.");
		}

		// insert new data into database
		$check = query("INSERT INTO clients (Username, Hash, First_name, Last_name, Age, Telephone, Address, Date_of_membership, Name_agency) VALUES(?, ?, ?, ?, ?, ?, ?, current_date(), ?)", $_POST["username"], crypt($_POST["password"]), $_POST["firstname"], $_POST["lastname"], $_POST["age"], $_POST["telephone"], $_POST["address"], AGENCY);

		// if query() returns false apologize
		if ($check === false)
		{
			apologize("Username already exists.");
		}
		else
		{
			// else log in the new user
			$rows = query("SELECT LAST_INSERT_ID() AS IDCL");
			$id = $rows[0]["IDCL"];
			// remember that user's now logged in by storing user's ID in session
            $_SESSION["id"] = $id;
            // redirect to portfolio
            redirect("/Projects/rent-a-car/public/index.php");
		}
    }

?>
