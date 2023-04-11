<style>
	.logo {
    margin:auto;
    font-size: 20px;
    /*//background: black;*/
    padding: 5px 5px;
    border-radius: 50% 50%;
    color: #000000b3;
}
	h5{
		
	    color: white;
		font-size: large;
	}
</style>

<nav class="navbar navbar-dark bg-dark fixed-top " style="padding:0;">
  <div class="container-fluid mt-2 mb-2">
  	<div class="col-lg-12">
  		<div class="col-md-1 float-left" style="display: flex;">
  			<div class="logo">
  				<img src="sharvaya1.png" alt="..." width="100%">
  			</div>
  		</div>
		  <h5>Sharvaya Miniature Enterprise </h5>
	  	<div class="col-md-2 float-right text-white">
	  		<a href="ajax.php?action=logout" class="text-white"><?php echo $_SESSION['login_name'] ?> <i class="fa fa-power-off"></i></a>
	    </div>
    </div>
  </div>
  
</nav>