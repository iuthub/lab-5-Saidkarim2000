<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">

<?php
$firstname = $_POST['firstname'];
$section = $_POST['section'];
$card = $_POST['card'];
$visa = $_POST['visa']
?>

<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Buy Your Way to a Better Education!</title>
		<link href="http://www.cs.washington.edu/education/courses/cse190m/09sp/labs/4-buyagrade/buyagrade.css" type="text/css" rel="stylesheet" />
	</head>

	<body>

		<h1>Thanks, sucker!</h1>

		<p>Your information has been recorded.</p>

		<dl>
			<dt>Name</dt>
			<dd><?php $firstname =$_GET['firstname'];
                echo $firstname ?></dd>

			<dt>Section</dt>
            <dd><?php
                $section = $_GET['section'];
                echo $section
                ?></dd>

			<dt>Credit Card</dt>
			<dd><?php
                $card = $_GET['card'];
                echo $card;

                ?>

                <?php

                $visa = $_GET['visa'];
                echo $visa;

                ?>


                </dd>
		</dl>
	</body>
</html>
<?php
$file = fopen("sucker.txt","a");
fwrite($file,$firstname);
fwrite($file,$section);
fwrite($file,$card);
fwrite($file,$visa);
fclose($file)
?>

