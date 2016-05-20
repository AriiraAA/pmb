<div class="ui large top fixed hidden menu">
  <div class="ui container">
  	<h3 class="item">Universitas Sriwijaya</h3>
    <div class="right menu">
      	<a class="item" href="http://bem.ilkom.unsri.ac.id">Home</a>
	    <a class="item" href="data.php">Data</a>
	    <?php  
	    	if (isset($_SESSION['nim'])) {
	    		echo '<a class="item" href="logout.php">Logout</a>';
	    	} else {
	    		echo '<a class="item" href="login2.php">Login</a>';
	    	}
	    ?>
    </div>
  </div>
</div>