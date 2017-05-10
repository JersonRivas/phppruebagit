<!DOCTYPE html>
 <html>
 <head>
 
 		<style>
		table, td, th {
		    border: 3px solid white;
		}
		
		table {
		    border-collapse: collapse;
		    width: 60%;
		}
		
		th {
		    text-align: left;
		}
		</style>
 
 </head>
 
 	<body>
 	
 	<div name="arriba" align="center">
 	<img src="images/arriba.jpg" width="1100" height="600"/>
 	</div>
 	<div name="middle" align="center">

  		<table>
				<?php
					  $servername = "us-cdbr-iron-east-03.cleardb.net";
					  $username = "be78e62addfd97";
					  $password = "eb817a8a";
					  $dbname = "ad_9d687f2d9e73e8e";
					  // Create connection
					  $conn = new mysqli($servername, $username, $password, $dbname);
					  // Check connection
					  if ($conn->connect_error) {
					  
					      die("Connection failed: " . $conn->connect_error);
					  }
					  $sql = "SELECT * from datos";
					  $result = $conn->query($sql);
					  if ($result->num_rows > 0) {
					?>   	
					  	<tr>
						<th>Id Empleado</th> 
						<th>Nombre</th> 
						<th>Apellido</th> 
						<th>Correo</th>
						</tr>	

						   <?php
						      while($row = $result->fetch_assoc()) {
							?>
						      <tr>
						      <td><?php echo $row['Iddatos']?></td>
						      <td><?php echo $row['Nombre']?></td>
						      <td><?php echo $row['Apellidos']?></td>
						       <td><?php echo $row['Correo']?></td>
						      </tr>
			    <?php          }
					  }else {
					      echo "0 results";
					  }
					 	 $conn->close();
		 		?> 
		 </table>
 	
			</div>
 			<div name="abajo" align="center">
		 	<img src="images/abajo.JPG" width="1100" height="450"/>
 			</div>

	 </body>
	 
 </html>