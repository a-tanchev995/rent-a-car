<!-- start content -->
<div class="content_bg">
<div class="wrap">
<div class="wrapper">
	<div class="main">
	<!-- start content_left -->
	<div class="content_left">
        <div class="search1">
	 	 	<h2>Logged in:</h2>
			<label><?php print($accountName[0]["First_name"] . " " . $accountName[0]["Last_name"]); ?></label>
            <label><a href="logout.php">Logout</a></label>
    	</div>
	    <div class="search">
		    <h2>search</h2>
			<form method="POST" action="search.php">
    			<input type="text" value="" placeholder="Enter Your search..." name="query">
    			<input type="submit" value="">
    		</form>
		</div>
		<div class="text1-nav">
		<h2>menu</h2>
		<ul>
            <li class="active"><a href="account".php">Account</a></li>
            <li><a href="rent_history.php">Rent history</a></li>
	    </ul>
	</div>
</div>

	<!-- start content_right -->
	<div class="content_right">
        <div class="col span_2_of_4">
          <div class="contact-form">
            <h2 class="style">Account Information</h2>
                    <div>
                        <span><label>Username</label></span>
                        <?php print("<span><input readonly type='text' class='textbox' value='" . $userInformation[0]["Username"] . "' /></span>"); ?>
                    </div>
                    <div>
                        <span><label>First name</label></span>
                        <?php print("<span><input readonly type='text' class='textbox' value='" . $userInformation[0]["First_name"] . "' /></span>"); ?>
                    </div>
                    <div>
                        <span><label>Last name</label></span>
                        <?php print("<span><input readonly type='text' class='textbox' value='" . $userInformation[0]["Last_name"] . "' /></span>"); ?>
                    </div>
                    <div>
                        <span><label>Age</label></span>
                        <?php print("<span><input readonly type='text' class='textbox' value='" . $userInformation[0]["Age"] . "' /></span>"); ?>
                    </div>
                    <div>
                        <span><label>Telephone</label></span>
                        <?php print("<span><input readonly type='text' class='textbox' value='" . $userInformation[0]["Telephone"] . "' /></span>"); ?>
                    </div>
                    <div>
                        <span><label>Address</label></span>
                        <?php print("<span><input readonly type='text' class='textbox' value='" . $userInformation[0]["Address"] . "' /></span>"); ?>
                    </div>
                    <div>
                        <span><label>Date of membership</label></span>
                        <?php print("<span><input readonly type='text' class='textbox' value='" . $userInformation[0]["Date_of_membership"] . "' /></span>"); ?>
                    </div>
            </div>
        </div>
    </div>
	<div class="clear"></div>
</div>
</div>
</div>
</div>
</div>
