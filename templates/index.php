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
            <li class="active"><a href="index.php">Main</a></li>
            <li><a href="rent.php">Rent</a></li>
            <li><a href="cars.php">Cars</a></li>
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
				<h3>Welcome to Auto Europe</h3>
				<p class="para">For over 60 years, Auto Europe has been a leader in worldwide car rental services. We find you the best value and provide 24/7 service during your rental.</p>
                <p class="para">With over 20,000 car rental locations world wide, Auto Europe truly is your one stop travel shop. In addition to car rentals, we also offer sports and luxury car rentals, long term leases, chauffeur drive services as well as MiFi and GPS rentals.</p>
                <p class="para">Here at Auto Europe, we make it easy for you. Our call center based out of Portland, Maine is open 24 hours a day, 7 days a week. We can even be reached toll free from Europe if you need us. If you find a better rate with another company that matches up apples to apples, we will beat it for you, guaranteed. Customer service is a priority here at Auto Europe, so give is a call or visit our website and see for yourself!</p>
                <p class="para">We are dedicated to providing the ultimate travel experience. Our exemplary customer service is delivered with professionalism, friendliness, pride and company spirit.</p>
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
