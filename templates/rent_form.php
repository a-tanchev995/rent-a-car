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
            <li class="active"><a href="rent.php">Rent</a></li>
            <li><a href="cars.php">Cars</a></li>
	    </ul>
	</div>
</div>

	<!-- start content_right -->
	<div class="content_right">
        <div class="image group">
        <div class="grid span_2_of_3">
        <form method="post" action="rent.php">
			<script>
				$(function(){
					$("#car").on('change', function(){
						$("#imageToSwap").attr("src", $(this).find(":selected").attr("data-src"));
					});
				});
			</script>
			<?php echo ('<img id="imageToSwap" src="images/cars/' . $listOfCars[0]["Image"] . '.jpg">') ?>
            <p class="para">Select a car</p>
            <?php
                echo ("<select name='car' id='car'>");

                foreach ($listOfCars as $row)
                {
                    echo ("<option data-src='images/cars/" . $row["Image"] . ".jpg' value='" . $row["IDCA"] . "'>" . $row["Name"] . "</option>");
                }

                echo ("</select>");
            ?>
            <p class="para">Select start date</p>
            <input type="date" name="start_date" />
            <p class="para">Select end date</p>
            <input type="date" name="end_date" />
            <div>
                <br>
                 <span><input type="submit" value="Rent"></span>
           </div>
        </form>
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
