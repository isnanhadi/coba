<form method="POST" action="">
<input type="text" name="a"> <input type="submit" name="b">
</form>

<?php 
if (isset($_POST['b'])) {
	$b = $_POST['a'];

	if ($b % 2 == 1) {
		echo "ganjil";
	}else{
		echo "Genap";
	}
}

 ?>


 <br>=========================<br>
 <?php 
for ($i=5; $i>=1; $i--) { 
	for ($j=1; $j<=$i; $j++) { 
		echo "&nbsp;";
	}
	for ($a=5; $a>=$i; $a--) { 
			echo "*";
		}
echo "<br>";
}
 ?>

 <br>=========================<br>

 <?php 

for ($i=1; $i<=5 ; $i++) { 
	for ($j=1; $j<=$i ; $j++) { 
		echo "&nbsp";
	}
	for ($c=5; $c>=$i; $c--) { 
		echo "*";
	}
	echo "<br>";
}

  ?>

  <br>=========================<br>
  <?php 
  $a=array('1','2','3','4','5');
for ($i=4; $i>=0 ; $i--) { 
	for ($a=1; $a<=$i ; $a++) { 
		echo "&nbsp";
	}
	for ($j=0; $j<=$i ; $j++) { 
		echo "$a[]";
	}
}
   ?>