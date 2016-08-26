<form action="app/form.php" method="post" enctype="multipart/form-data">
		        
        <h1 class="title">Kapcsolat</h1>
    
        
		<div class="form-group">
	    <label for="exampleInputEmail1">Név</label>
	    <input type="text" class="form-control" id="name" name="name" placeholder="Név" required="required">
	  </div>
	  <div class="form-group">
	    <label for="email">Email</label>
	    <input type="email" class="form-control" id="email" name="email" placeholder="Email" required="required">
	  </div>
	  <div class="form-group">
	    <label for="message">Üzenet</label>
	    <textarea class="form-control" rows="4" id="message" name="message" required="required"></textarea>
	  </div>
	  
	  <input id="submit" name="submit" type="submit" value="Üzenet elküldése">
	  <!-- <button type="submit" class="btn btn-default">Submit</button> -->

</form>