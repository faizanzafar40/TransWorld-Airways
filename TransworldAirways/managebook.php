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
					
					echo "<form method=\"POST\" action=\"managebookdetail.php\">
					<label for=\"bookingref\">Booking reference:</label>
					<select name=\"bookingref\" id=\"bookingref\">";
						$sql = "SELECT * FROM books";
						$res = mysqli_query($link, $sql);
						while($row = mysqli_fetch_array($res)){
							$bookno=$row['booked_fl_no'];
							//var_dump($bookno);
							echo "<option value=\"$bookno\">$bookno</option>";
						};
						
						echo " </select>";
						
						echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label for=\"lastname\">Last name:</label>
						<select name=\"lastname\" id=\"lastname\">";
						$sql = "SELECT * FROM passenger";
						$res = mysqli_query($link, $sql);
						while($row = mysqli_fetch_array($res)){
							$lname=$row['last_name'];
							//var_dump($lname);
							echo "<option value=\"$lname\">$lname</option>";
						};
						
						echo " </select>";
						
						
					echo " </select>
					
						 <br><br><input type=\"submit\" value=\"Find Booking\" name=search>
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
