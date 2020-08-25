<?php
include 'header.php';
include'config.php';
if(isset($_POST['submit'])){
	$search_key=$_POST['search'];
	if($search_key=null){
		header("location:domain_search.php");
	}
	else{
		$query="SELECT * FROM domain where domain_name='{$search_key}'";
		$result=mysqli_query($conn,$query);
		
		
		if($result){
			echo "not avaiilable";
			
			
		}
		else {
			echo"Available";
		}
	}
}

?>
<section id="domain">
  <div class="container">
    <h1>It All starts With A Domain Name</h1>
    <p>You can search your domain here</p>
  <form class="example" action="" method="post">
  <input type="text" placeholder="Search your domain.." name="search">
  <button type="submit" name="submit"><i class="fa fa-search"></i>
  </button>
</form>

  </div>

</section>
