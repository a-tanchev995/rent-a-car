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
            <li><a href="about_company.php">Our Company</a></li>
            <li class="active"><a href="about_partners.php">Our Partners</a></li>
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
                        <th>Name</th>
                        <th>Address</th>
                        <th>Telephone</th>
                        <th>Contact Person</th>
                        <th>Image</th>
                    </tr>
                </thead>
                <tbody class="text-left">
                    <?php foreach ($listOfPartners as $partner): ?>
                        <tr>
                            <td><?= $partner["Name"] ?></td>
                            <td><?= $partner["Address"] ?></td>
                            <td><?= $partner["Telephone"] ?></td>
                            <td><?= $partner["Contact_person"] ?></td>
                            <td><?php echo ("<img src='images/partners/" . $partner["Image"] . ".jpg' />"); ?></td>
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
