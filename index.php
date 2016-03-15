<html>
<!--INCOMPLETE-->
	<head>
		<title>Home Page | Ashesi Clinic App</title>
	</head>
	
	<body>
		<!-- this is the navigation bar at the top. comprising the ashesi logo, home button, and any other actions you want the user to easily reach-->
		<div id = "nav"><img src = ""/><a>Home</a></div>
		<form action = "index.php" method = "GET">
		<!-- search box, and search button-->
		<input type= "text" name = "txtSearch" value = "<?php echo $_REQUEST['txtSearch']?>"><input type ="submit" name= "search" value = "Search"> <br><br>
			<?php
			include_once("drugs.php");
			
			
			$drugs = new drugs();
			
			
			if(isset($_REQUEST['txtSearch'])){
				echo "There's a search term <br><br>";
				echo  $_REQUEST['txtSearch'];echo "<br>";
				$str = $_REQUEST['txtSearch'];
				$result = $drugs->searchDrugs($str);
			}else{
				$result = $drugs->getDrugs();
			}
			$row = $drugs->fetch();	
				if($row!=false){
				echo "Drugs<br><br>
				
				<table>
					<tr>
						<td>DRUG ID</td>
						<td>DRUG NAME</td>
						<td> QUANTITY</td>
						<td> SUPPLIER ID</td>
						<td> DRUG TYPE</td>
						<td> EDIT</td>
						<td> DELETE</td>
					</tr>";
				}else{
					echo "No drugs match your search";
				}	
				while($row!=false){
					//print_r($row);
					echo "<tr>
							<td>{$row['drugId']}</td>
							<td>{$row['drugName']}</td>
							<td>{$row['quantity']}</td>
							<td>{$row['supplierName']}</td>
							<td>{$row['drugType']}</td>
							<td> <a href = ''> Edit</a></td>
							<td><a href = 'delete.php?id={$row['drugId']}&item=drug'> Delete</a></td>
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
				if($row!=false){
				echo "Tools<br><br>";
				echo "
				<table>
					<tr>
						<td>TOOL ID</td>
						<td>TOOL NAME</td>
						<td> TOOL TYPE</td>
						<td> QUANTITY</td>
						<td> SUPPLIER</td>
						<td> EDIT</td>
						<td> DELETE</td>
					</tr>";
				}else{
					echo "No tools match your search";
				}
				while($row!=false){
					print_r($row);
					echo "<tr>
							<td>{$row['toolId']}</td>
							<td>{$row['toolName']}</td>
							<td>{$row['toolType']}</td>
							<td>{$row['quantity']}</td>
							<td>{$row['supplierName']}</td>
							
							<td> <a href = ''> Edit</a></td>
				<td><a href = 'delete.php?id={$row['toolId']}&item=tool'> Delete</a></td>
						</tr>";
						
						$row = $tools->fetch();
				}
				echo "</table><br><br>";
				
			?>
			
			<?php
			include_once("suppliers.php");
			
			$suppliers = new Suppliers();
			if(isset($_REQUEST['txtSearch'])){
				$str = $_REQUEST['txtSearch'];
				$result = $suppliers->searchSuppliers($str);
			}else{
				$suppliers->getSuppliers();
			}
			$row = $suppliers->fetch();	
				if($row!=false){
				echo "Suppliers<br><br>";
				echo "
				<table>
					<tr>
						<td>SUPPLIER ID</td>
						<td>SUPPLIER NAME</td>
						<td> LOCATION</td>
						<td> EDIT</td>
						<td> DELETE</td>
					</tr>";
				}else{
					echo "No suppliers match your search";
				}
				while($row!=false){
					//print_r($row);
					echo "<tr>
							<td>{$row['suppliersId']}</td>
							<td>{$row['supplierName']}</td>
							<td>{$row['supplierLocation']}</td>
							<td> <a href = ''> Edit</a></td>
							<td><a href = 'delete.php?id={$row['suppliersId']}'&item=supplier'> Delete</a></td>
						</tr>";
						
					$row= $suppliers->fetch();
				}
				
				echo "</table>";
			?>
			<div><a href = "">Add New Inventory</a></div>
			</form>
	</body>

</html>
