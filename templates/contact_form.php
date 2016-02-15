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
</div>

	<!-- start content_right -->
	<div class="content_right">
        <div class="col span_2_of_4">
            <div class="contact-form">
              <h2 class="style">Contact Us</h2>
                     <form method="post" action="contact.php">
                      <div>
                          <span><label>Name</label></span>
                          <span><input name="userName" type="text" class="textbox"></span>
                      </div>
                      <div>
                          <span><label>Email</label></span>
                          <span><input name="userEmail" type="text" class="textbox"></span>
                      </div>
                      <div>
                          <span><label>Telephone</label></span>
                          <span><input name="userPhone" type="text" class="textbox"></span>
                      </div>
                      <div>
                          <span><label>Subject</label></span>
                          <span><textarea name="userMsg"> </textarea></span>
                      </div>
                     <div>
                          <span><input type="submit" value="Send Us"></span>
                    </div>
                  </form>

              </div>
        </div>
    </div>
	<div class="clear"></div>
</div>
</div>
</div>
</div>
</div>
