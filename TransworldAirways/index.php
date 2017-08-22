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
			echo "<p style=\"font-size:30px;font: candara; color:#BC6F09;\"><b>Fly with us</p><br></b>";
			echo "<p style=\"font-size:18px;font: candara; color:#D77E0A;\"> Whether its your first flight or simply your latest, we work to anticipate your every need.</p>";
	
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

