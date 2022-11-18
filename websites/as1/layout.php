<?php
session_start();
if (isset($_SESSION['loggedin'])) {
	$logButton = 'href="../account/logout.php">Logout';
}
else {
	$logButton = 'href="../account/login.php">Login';
}

?>

<!DOCTYPE html>
<html>
	<head>
		<title>
           
        </title>
		<link rel="stylesheet" href="../assets/ibuy.css" />
	</head>

	<body>
		<header>

		</header>

		<nav>
			<ul>
				
				<li><a class="categoryLink" <?php echo $logButton?></a></li>
			</ul>
		</nav>
		<img src="../assets/banners/1.jpg" alt="Banner" />

		<main>
        <?php 
        echo $pageContent; 
        ?>
        <footer>

		</footer>
        </main>
	</body>
</html>