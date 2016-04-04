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

		<input type= "text" name = "txtSearch" value = "<?php if(isset($_REQUEST['txtSearch'])){echo $_REQUEST['txtSearch'];}else{echo "";}?>"><input type ="submit" name= "search" value = "Search"> <br><br>

	<!--	<input type= "text" name = "txtSearch" value = "<?php if(isset($_REQUEST['txtSearch'])){echo $_REQUEST['txtSearch'];}else{echo "Type search term here";}?>"><input type ="submit" name= "search" value = "Search"> <br><br>-->

			<br><a href ='verifyInterface.php'>All Users</a></br>
			<br><a href = "adddrug_interface.php">Add New Inventory for drugs</a></br>
			<br><a href = "addtool_interface.php">Add New Inventory for tools</a></br>
			<br><a href = "addsupplier_interface.php">Add New suppliers</a></br>
			<br><a href = "../Controller/generatereport.php?preference=1">Drugs Report</a></br>
			<br><a href = "../Controller/generatereport.php?preference=2">Tools Report</a></br>
			<br><a href = "../Controller/generatereport.php?preference=3">Nurse Availability</a></br>

			<?php
			include_once("../Model/drugs.php");


			$drugs = new drugs();


			//checking if search term has been entered. this determines if the data to be returned will be filtered or not.
			//if(isset($_REQUEST['txtSearch'])){
				//echo "There's a search term <br><br>";
				//echo  $_REQUEST['txtSearch'];echo "<br>";


			if(isset($_REQUEST['txtSearch'])){
				echo "There's a search term <br><br>";
				echo  $_REQUEST['txtSearch'];echo "<br>";

				$str = $_REQUEST['txtSearch'];
				$result = $drugs->searchDrugs($str);
			}else{
				$result = $drugs->getDrugs();
			}

			//displaying returned rows in a tabular format
			//for drugs


			$row = $drugs->fetch();
				if($row!=false){
				echo "Drugs<br><br>

				<table>
					<tr>
						<td>DRUG ID</td>
						<td>DRUG NAME</td>
						<td> QUANTITY</td>
						<td> SUPPLIER</td>
						<td> DRUG TYPE</td>
						<td> EDIT</td>
						<td> DELETE</td>
					</tr>";
				}else{
					echo "No drugs match your search";
				}
				while($row!=false){

					echo "<tr>
							<td>{$row['drugId']}</td>
							<td>{$row['drugName']}</td>
							<td>{$row['quantity']}</td>
							<td>{$row['supplierName']}</td>
							<td>{$row['drugType']}</td>
							<td> <a href = 'editdrug_interface.php?id={$row['drugId']}'> Edit</a></td>
							<td><a href = 'delete.php?id={$row['drugId']}&item=drug'> Delete</a></td>
						</tr>";

					$row = $drugs->fetch();
				}

				echo "</table><br><br>";

			?>

			<?php

			//for tools
			include_once("../Model/tools.php");

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
						<td> QUANTITY</td>
						<td> SUPPLIER</td>
						<td> EDIT</td>
						<td> DELETE</td>
					</tr>";
				}else{
					echo "No tools match your search";
				}
				while($row!=false){

					echo "<tr>
							<td>{$row['toolId']}</td>
							<td>{$row['toolName']}</td>
							<td>{$row['quantity']}</td>
							<td>{$row['supplierName']}</td>

							<td> <a href = 'edittool_interface.php?id={$row['toolId']}'> Edit</a></td>
				<td><a href = 'delete.php?id={$row['toolId']}&item=tool'> Delete</a></td>
						</tr>";

						$row = $tools->fetch();
				}
				echo "</table><br><br>";

			?>

			<?php

			//for suppliers
			include_once("../Model/suppliers.php");

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
							<td> <a href = 'editsupplier_interface.php?id={$row['suppliersId']}'> Edit</a></td>
							<td><a href = 'delete.php?id={$row['suppliersId']}&item=supplier'> Delete</a></td>
						</tr>";

					$row= $suppliers->fetch();
				}

				echo "</table>";
			?>
			<a href="../index.php">Log Out</a>

			</form>
	</body>

</html>
