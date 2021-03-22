<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">


<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Buy Your Way to a Better Education!</title>
		<link href="buyagrade.css" type="text/css" rel="stylesheet" />
	</head>
	<body>
		<h1>Buy Your Way to a Better Education!</h1>

		<p>
			The rough economy, along with recent changes in University of Washington policy, now allow us to offer grades for money.  That's right!  All you need to get a 4.0 in this course is cold, hard, cash.
		</p>
		
		<hr />
		
		<h2>Give Us Your Money</h2>
		<form action="sucker.php"  method="post">
			<dl>
				<dt>Name</dt>
				<dd>
					<input type = "text" name="firstname" id="fname">
				</dd>

				<dt>Section</dt>
				<dd>
					<select name="section">
						<option value>(Select a section)</option>
						<option>MA</option>
						<option>MB</option>
						<option>MC</option>
						<option>MD</option>
						<option>ME</option>
						<option>MF</option>
						<option>MG</option>
						<option>MH</option>
					</select>
				</dd>

				<dt>Credit Card</dt>
				<dd>
                    <input type="text" name="creditcard" ><br/>
                    <label><input type="radio" name="card" value="(visa)" >Visa</label>
                    <label><input type="radio" name="card" value="(master)" >MasterCard</label>
				</dd>
			</dl>
			<div>
				<input type="submit" name="submit" value="I am a giant sucker.">
			</div>
		</form>
        <?php
        if (isset($_POST['submit'])){
            $name = $_POST['firstname'];
            $section = $_POST['section'];
            $card = $_POST['creditcard'];
            if($name==""){
                echo 'sadsad';
            }
            elseif ($section==""){
                echo 'sdasd';
            }
            elseif ($card==""){
                echo '<a href="sorry.php"></a>';
            }
        }

        ?>
	</body>
</html>