<?php

    // configuration
    require("../includes/config.php");

    // query first and last name of user
    $accountName = query("SELECT First_name, Last_name FROM clients WHERE IDCL = ?", $_SESSION["id"]);

    // if user reached page via GET (as by clicking a link or via redirect)
    if ($_SERVER["REQUEST_METHOD"] == "GET")
    {
        // render contact form page
        render("contact_form.php", ["accountName" => $accountName, "title" => "Contact"]);
    }

    // else if user reached page via POST (as by submitting a form via POST)
    else if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
		// validate submission
        if (empty($_POST["userName"]))
        {
            apologize("You must provide your name.");
        }
		else if (empty($_POST["userEmail"]))
		{
			apologize("You must provide your email.");
		}
        else if (empty($_POST["userPhone"]))
		{
			apologize("You must provide your telephone.");
		}
        else if (empty($_POST["userMsg"]))
		{
			apologize("You must provide a message.");
		}
    }

?>
