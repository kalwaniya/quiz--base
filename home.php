<?php
error_reporting(0);
session_start();
if(!isset($_SESSION['username'])){
header('location:login.php');
}

$con = mysqli_connect('localhost','root');

mysqli_select_db($con, 'quizdbase');

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="bootstrap.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	 <link href="https://fonts.googleapis.com/css?family=Montserrat|Open+Sans" rel="stylesheet">
</head>
<body>

<?php

$unnnmae=$_SESSION['username'];
$row1="SELECT * FROM user where username='$unnnmae';";

$resultfour1 = mysqli_query($con, $row1);

$cnt=mysqli_num_rows($resultfour1);

if($cnt>0){
echo "<h4>you have already done this exam </h4>";
exit(); 
}




?>
<div class="container">


	<br> <h1 class="text-center text-primary"> SAMYAK WEBDEVELOPER QUIZ </h1><br>
	
	<h2 class="text-center text-success"> Welcome <?php echo $_SESSION['username']; ?> </h2> <br>

<div class="col-lg-10 m-auto d-block">
	<div class="card" >


		<h3 class="text-center card-header">  Welcome <?php echo $_SESSION['username']; ?>, you have to select only one out of 4. Best of Luck :)  </h3>

	 </div><br>

	 <form action="check.php" method="post">

	 <?php
    $abc = array();
              	 
    // $abc[0]=rand(1,7);
     //$abc[1]=rand(1,7);
     //$abc[2]=rand(1,7);
     //$abc[3]=rand(1,7);
    for($iii=0;$iii<8;$iii++)
    {
      $abc[$iii]=rand(1,8);
    }
	 $q = " select * from questions where qid in ($abc[0],$abc[1],$abc[2],$abc[3])";



   //for($j=1 ; $j < 8 ; $j++){
	 //$q = " select * from questions where qid = $j";
     $query = mysqli_query($con, $q);    
  $i=0;
	 while($rows = mysqli_fetch_array($query) ) {
	?>
	 	
	 	<div class="card">
	 		<h4 class="card-header"> <?php echo $rows['question']  ?>  </h4>


	 		<?php 
              
	 			 $q1 = "select * from answers where ans_id ='".$rows['qid']."'";
                 //$q1 = "select * from answers where ans_id =$j";

			     $query1 = mysqli_query($con, $q1);

				 while ($rows1 = mysqli_fetch_array($query1) ) {
                 
				 	?>

				 	<div class="card-body">
				 		
				 		<input type="radio" name=" quizcheck[<?php echo $rows1['ans_id']; ?>]" value="<?php echo  $rows1['aid']; ?>"> 
				 		<?php echo $rows1['answer']; ?>
                  
				 	</div>

<?php
     }
	 
$i++;
	 
	
}
	 ?>


	 <input type="submit" name="submit" value="Submit" class="  btn btn-success m-auto d-block">

</form>
</div>
</div><br><br>

	<div class="m-auto d-block">
	<a href="logout.php" class="btn btn-primary "> LOGOUT </a>
	</div><br>

	<div>
		<h5 class="text-center">  ©2018samyakclasses </h5>
	</div><br><br>


	</div>
	





	
</div>

</body>
</html>
