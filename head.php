<html>
<head>
    <meta charset='utf-8'>
<?php 
	$sitename='Libreo';
	$sitepath='http://people.oregonstate.edu/wymanl/libreo'; 
?>
	<meta name='viewport' content='width=devide-width, initial-scale=1'>
    <title><?php echo $sitename.' | '.$page?></title>
    <link rel="stylesheet" type="text/css" href="style.css">
	
	<!--Google Fonts-->
	<link href='http://fonts.googleapis.com/css?family=Lobster|Courgette|Vampiro+One|Pacifico|Lemon' rel='stylesheet' type='text/css'>
</head>
<body>
<div id="mainnav">
    <ul>
		<li><p class="logo">Libreo</p></li>
        <li><a href="index.php">Home</a></li>
        <li><a href="about.php">About</a></li>
	<?php
		if(!(isset($_SESSION['userid']))){	
			echo "<li><a href='login.php'>Login</a></li>";
        	echo "<li><a href='register.php'>Register</a></li>";
		}
		else{
			echo "<li><a href='logout.php'>Logout</a></li>";
		}
?>
    </ul>
</div>
<?php include 'sidebar.php';?>

<div class="content">


