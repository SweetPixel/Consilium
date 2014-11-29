<?php require_once '../connections/connection.php'; ?>
<?php 
	if(isset($_GET['article'])) {
		$article_id = $_GET['article'];

		$query = "SELECT * FROM gallery WHERE g_id = $article_id AND g_type='article'";
		$result = mysqli_query($con, $query);
		$row = mysqli_fetch_array($result);
		$num_rows = mysqli_num_rows($result);
		if($num_rows > 0) {
			$date = $row['g_date'];
			$title = $row['g_title'];
			$content = $row['g_content'];
			$author = $row['g_author'];
			$image = $row['g_image'];
			$alt = $row['g_alt'];
		}
		else {
			echo "Error Occured";
			echo mysqli_error($con);
		}
		$extra_query = "SELECT * FROM gallery WHERE g_type='article' ORDER BY RAND() LIMIT 10";
		$extra_result = mysqli_query($con, $extra_query);
		$extra_row = mysqli_fetch_array($extra_result);
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Consilium - <?php echo $title ?></title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/header.css">
    <link rel="stylesheet" type="text/css" href="../css/footer.css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="../css/main.css">
    <link rel="stylesheet" type="text/css" href="../css/article.css">
</head>
<body>
	<?php require_once('includes/header.php') ?>
	<div class="container">
		<div class="row">
			<div class="col-lg-9">
				<h1 class="a-title"><?php echo $title ?></h1>
				<p class="col-sm-2">Created on: <?php echo $date ?></p>
				<p class="col-sm-2 col-sm-offset-8 text-right">By: <?php echo $author ?></p>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-9">
				<img src="../gallery/images/<?php echo $image ?>" class="img-responsive a-img">

				<div class="content">
					<?php echo $content ?>
				</div>
			</div>
			<div class="col-lg-3 more-articles">
				<h2>You might also like...</h2>
				<ul>
					<?php do { ?>
						<li class="">
		                    <a href="article.php?article='<?php echo $extra_row['g_id'] ?>'"><img class="img-responsive thumbnail" src="../gallery/images/<?php echo $extra_row['g_image'] ?>"/></a>
		                </li>
					<?php }while($extra_row = mysqli_fetch_array($extra_result)) ?>
				</ul>
			</div>
			
		</div>
	</div>
	<?php require_once 'includes/footer.php'; ?>
</body>
</html>