<?php 
	session_start();
	include 'head.php';
	$page = "Home";
	require_once 'common.php';
?>
<h2>Hello!</h2>
<p>Welcome to Libreo!  We're a peer-to-peer library system that allows you to lend, give, or sell your books (as well as borrow, take, or buy them). No due dates, no fines, and no library card required!  Register above, enter a few of the books from your shelf, and start lending. Happy reading!</p>

<?php include 'foot.php';
?>
