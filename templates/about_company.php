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
            <li class="active"><a href="about_company.php">Our Company</a></li>
            <li><a href="about_partners.php">Our Partners</a></li>
	    </ul>
	</div>
</div>

	<!-- start content_right -->
	<div class="content_right">
		<div class="image group">
		<div class="grids_of_2">
			<div class="grid images_3_of_1">
				<img src="images/autoeurope.jpg">
                <img src="images/pic1.jpg">
			</div>
			<div class="grid span_2_of_3">
				<h3>About Our Company</h3>
				<p class="para">Auto Europe is a large car rental wholesale company, working with approximately 20,000 car rental locations in 180 countries in Europe, Asia, Africa, Australia, as well as North and South America. Auto Europe has been accredited with the Better Business Bureau since April 2, 1993 with an A+ rating.</p>
                <p class="para">Auto Europe was founded in Germany in 1954 by Alex Cecil. The company got its start purchasing cars to rent to U.S. travelers in Europe. Cecil later moved to New York and eventually relocated the company to Maine. In 1997, Alex Cecil retired, passing the reins to Imad Khalidi, President and CEO of Auto Europe.</p>
                <p class="para">In 1995, Auto Europe began offering airfare and hotels under the name Destination Europe. In 2010, they re-branded this division as Fly International.</p>
		   </div>
		  	<div class="clear"></div>
   		</div>
	</div>
</div>
	<div class="clear"></div>
</div>
</div>
</div>
</div>
</div>
