<?php
require_once('ParentClass.php');
require_once('ChildClass.php');
if(isset($_COOKIE['theobject'])){
	$object=new ParentClass((int)$_COOKIE['theobject']);
}else{
	$object=new ParentClass(0);
}


if(isset($_POST['button1'])){
	$object->addcookie(1);
}

if(isset($_POST['button2'])){
	$object->addcookie(2);
}

if(isset($_POST['button3'])){
	$object=new ChildClass($object->getcookie());
	$object->multiplycookie(2);
}
?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Assignment 3</title>

	<link rel="stylesheet" href="assignment3.css">
</head>
<body>
	<form id="form1" method="post">
		<input type="submit" name="button1" value="Get a cookie">
		<input type="submit" name="button2" value="Get 2 cookies">
		<input type="submit" name="button3" value="Double them cookies">
		<?php
		setcookie('theobject',$object);
		echo '<h2>You Have '.$object.' COOKIES!!!</h2>';
		?>
	</form>

</body>
</html>
