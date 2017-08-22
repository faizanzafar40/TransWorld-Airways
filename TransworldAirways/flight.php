<html 
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="style.css" />
<title>TRANSWORLD AIRWAYS</title>
</head>

<body>
<div id="container">
		<div id="mainpic">
        	<h1><i>TRANS</i><span class="lightblue">WORLD</span></h1>
            <h2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; AIRWAYS</h2>
        </div>   		
        <div id="menu">
        	<ul>
            	<li class="menuitem"><a href="index.php">HOME</a></li>
                <li class="menuitem"><a href="about.php">ABOUT US</a></li>
				<li class="menuitem"><a href="book.php">BOOK A FLIGHT</a></li>
				<li class="menuitem"><a href="managebook.php">MANAGE BOOKING</a></li>
				<li class="menuitem"><a href="flight.php">FLIGHT STATUS</a></li>
				<li class="menuitem"><a href="more.php">MORE</a></li>
            </ul>
        </div>
        
		<div id="content">
			<?php
			$link = mysqli_connect("localhost", "root", "", "airline_system");
			if($link === false){
				die("ERROR: Could not connect. " . mysqli_connect_error());
			}
			
			$sql = "SELECT * FROM flight";
		if($result = mysqli_query($link, $sql)){
					
					echo "<form method=\"POST\" action=\"flight_detail.php\">
					<label for=\"departure\">Departure:</label>
					<select name=\"departure\" id=\"departure\">";
						$sql = "SELECT * FROM flight";
						$res = mysqli_query($link, $sql);
						while($row = mysqli_fetch_array($res)){
							$depart=$row['dept_location'];
							//var_dump($depart);
							echo "<option value=\"$depart\">$depart</option>";
						};
						
						echo " </select>";
						
						echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label for=\"arrival\">Arrival:</label>
						<select name=\"arrival\" id=\"arrival\">";
						$sql = "SELECT * FROM flight";
						$res = mysqli_query($link, $sql);
						while($row = mysqli_fetch_array($res)){
							$arrival=$row['arrival_location'];
							//var_dump($depart);
							echo "<option value=\"$arrival\">$arrival</option>";
						};
						
						echo " </select>";
						
						echo "<br><br><label for=\"dept_date\">Departure Date:</label>
						<select name=\"dept_date\" id=\"dept_date\">";
						$sql = "SELECT * FROM flight";
						$res = mysqli_query($link, $sql);
						while($row = mysqli_fetch_array($res)){
							$dept_date=$row['dept_date'];
							//var_dump($depart);
							echo "<option value=\"$dept_date\">$dept_date</option>";
						};
						
						echo " </select>";
						
						echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label for=\"arr_date\">Arrival Date:</label>
						<select name=\"arr_date\" id=\"arr_date\">";
						$sql = "SELECT * FROM flight";
						$res = mysqli_query($link, $sql);
						while($row = mysqli_fetch_array($res)){
							$arr_date=$row['arrival_date'];
							//var_dump($depart);
							echo "<option value=\"$arr_date\">$arr_date</option>";
						};
						
					echo " </select>
					
						 <br><br><input type=\"submit\" value=\"Search Flight\" name=search>
						 </form>";
					echo "<hr style=\"border-width: 1px;\">";

				mysqli_free_result($result);
		} else{
			echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
		}
			
			mysqli_close($link);
			?>
		
            <div id="footer"></div>
        </div>
</div>
</body>
<footer>
    <div align="Center"> &copy;2016 TRANSWORLD All Rights Reserved<br>
    </div>
  </footer>
</html>
