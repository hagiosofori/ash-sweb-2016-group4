<html>
<!--INCOMPLETE-->
	<head>
		<title>Home Page | Ashesi Clinic App</title>
	</head>
	
	<body>
		<!-- this is the navigation bar at the top. comprising the ashesi logo, home button, and any other actions you want the user to easily reach-->
		<div id = "nav"><img src = ""/><a>Home</a></div>
		<form action = "homepage.php" method = "GET">
		<!-- search box, and search button-->
		<input type= "text" name = "txtSearch" value = "<?php ?>"><input type ="submit" name= "search" value = "Search"> <br><br>
			<?php
			include_once("inventory.php");
			
			$drugs = new inventory();
			$result = $drugs->getAllInventory();
			$row = $drugs->fetch();	
				echo "Drugs<br><br>
				
				<table>
					<tr>
						<td>DRUG ID</td>
						<td>DRUG NAME</td>
						<td> QUANTITY</td>
						<td> SUPPLIER ID</td>
						<td> DRUG TYPE</td>
					</tr>";
				while($row!=false){
					//print_r($row);
					echo "<tr>
							<td>{$row['drugId']}</td>
							<td>{$row['drugName']}</td>
							<td>{$row['quantity']}</td>
							<td>{$row['supplierID']}</td>
							<td>{$row['drugType']}</td>
						</tr>";
						
					$row = $drugs->fetch();	
				}
				
				echo "</table><br><br>";
				
			?>
			
			<?php
			include_once("tools.php");
			
			$tools = new Tools();
			
						
			if(isset($_REQUEST['txtSearch'])){
				$filter = $_REQUEST['txtSearch'];
				$tools->searchTools($filter);
			}else{
				$tools->getTools();
			}
			$row = $tools->fetch();
				echo "Tools<br><br>";
				echo "
				<table>
					<tr>
						<td>TOOL ID</td>
						<td>TOOL NAME</td>
						<td> TOOL TYPE</td>
						<td> QUANTITY</td>
						<td> SUPPLIER</td>
						
					</tr>";
				
				while($row!=false){
					print_r($row);
					echo "<tr>
							<td>{$row['toolId']}</td>
							<td>{$row['toolName']}</td>
							<td>{$row['quantity']}</td>
							<td>{$row['supplierId']}</td>
							<td>{$row['toolType']}</td>
						</tr>";
						
						$row = $tools->fetch();
				}
				echo "</table><br><br>";
				
			?>
			
			<?php
			include_once("suppliers.php");
			
			$suppliers = new Suppliers();
			$suppliers->getSuppliers();
			$row = $suppliers->fetch();	
				echo "Suppliers<br><br>";
				echo "
				<table>
					<tr>
						<td>SUPPLIER ID</td>
						<td>SUPPLIER NAME</td>
						<td> LOCATION</td>
						
					</tr>";
				
				while($row!=false){
					print_r($row);
					echo "<tr>
							<td>{$row['suppliersId']}</td>
							<td>{$row['supplierName']}</td>
							<td>{$row['supplierLocation']}</td>
						</tr>";
						
					$row= $suppliers->fetch();
				}
				
				echo "</table>";
			?>
			<div><a href = "">Add New Inventory</a></div>
			</form>
	</body>

</html>
