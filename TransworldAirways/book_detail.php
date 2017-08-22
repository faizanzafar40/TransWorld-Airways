<html>
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
			
						if(isset($_POST['book_flight'])) {
							$dept_loc = $_POST['departure'];
							$arr_loc = $_POST['arrival'];
							$dep_date = $_POST['dept_date'];
							$sql = "SELECT * FROM flight WHERE dept_location='$dept_loc' AND arrival_location='$arr_loc' AND dept_date='$dep_date'";
							$val=mysqli_query($link, $sql);


							echo "<table border=\"1\" cellspacing=\"0\" cellpadding=\"15\">
										<thead>
											<tr>
												<th style=\"font-size:18px;color:#A62D2D;\"><b>Flight Number</b></th>
												<th style=\"font-size:18px;color:#A62D2D;\"><b>Departure Location</b></th>
												<th style=\"font-size:18px;color:#A62D2D;\"><b>Arival Location</b></th>
												<th style=\"font-size:18px;color:#A62D2D;\"><b>Departure Date</b></th>
												<th style=\"font-size:18px;color:#A62D2D;\"><b>Arrival Date</b></th>
											</tr>
										</thead>
										<tbody>";
							while($row = mysqli_fetch_array($val)){
										echo "<tr>
												<td style=\"font-size:14px;color:grey;\"><b>".$row['fnumber']."</td>
												<td style=\"font-size:14px;color:grey;\"><b>".$row['dept_location']."</td>
												<td style=\"font-size:14px;color:grey;\"><b>".$row['arrival_location']."</td>
												<td style=\"font-size:14px;color:grey;\"><b>".$row['dept_date']."</td>
												<td style=\"font-size:14px;color:grey;\"><b>".$row['arrival_date']."</td>
											</tr>
										</table></br>";
							}
						}
					echo " <form>
				 <br><br><input type=\"submit\" value=\"Book\" name=book_flight>
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
    <div align="Center"> &copy;2016TRANSWORLD All Rights Reserved<br>
    </div>
  </footer>
</html>
