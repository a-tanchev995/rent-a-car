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
            <li><a href="account.php">Account</a></li>
            <li class="active"><a href="rent_history.php">Rent history</a></li>
	    </ul>
	</div>
</div>

	<!-- start content_right -->
	<div class="content_right">
        <div class="image group">
        <div class="grid span_2_of_3">
            <table class="pure-table">
                <thead>
                    <tr>
                        <th>Start date</th>
                        <th>End date</th>
                        <th>Car</th>
                        <th>Image</th>
                    </tr>
                </thead>
                <tbody class="text-left">
                    <?php foreach ($rentHistory as $rent): ?>
                        <tr>
                            <td><?= $rent["Start_date"] ?></td>
                            <td><?= $rent["End_date"] ?></td>
                            <td><?= $rent["Name"] ?></td>
                            <td><?php echo ("<img src='images/cars/" . $rent["Image"] . ".jpg' height=81px width=150px />"); ?></td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>

        <div class="clear"></div>
        </div>
    </div>
	<div class="clear"></div>
</div>
</div>
</div>
</div>
</div>
