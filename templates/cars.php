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
            <li><a href="index.php">Main</a></li>
            <li><a href="rent.php">Rent</a></li>
            <li class="active"><a href="cars.php">Cars</a></li>
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
                        <th>Category</th>
                        <th>Date</th>
                        <th>Price</th>
                        <th>Image</th>
                    </tr>
                </thead>
                <tbody class="text-left">
                    <?php foreach ($listOfCars as $car): ?>
                        <tr>
                            <td><?= $car["Name"] ?></td>
                            <td><?= $car["Category"] ?></td>
                            <td><?= $car["Date_of_manufacture"] ?></td>
                            <td><?= $car["Price"] ?></td>
                            <td><?php echo ("<img src='images/cars/" . $car["Image"] . ".jpg' height=81px width=150px />"); ?></td>
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
