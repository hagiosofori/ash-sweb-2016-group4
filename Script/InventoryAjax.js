/**
* The function below validates the the supplier entered by the user contains
* ID's as the textfield takes in ID values as relating to the ID's of the supplier
*/
function validateDrugSupplier()
{
	var regexp1=new RegExp("[^]0-9");
	if(regexp1.test($("#drugsupplier").val()))
	{
		alert("Only numbers are allowed in the supplier ID.");
		return false;
	}
	window.location="../View/adddrug_interface.php";
}

/**
* The function below validates the the supplier entered by the user contains
 ID's as the textfield takes in ID values as relating to the ID's of the supplier
*/
function validateToolSupplier()
{
	var regexp1=new RegExp("[^]0-9");
	if(regexp1.test($("#toolsupplier").val()))
	{
		alert("Only numbers are allowed in the supplier ID.");
		return false;
	}
	window.location="../View/addtool_interface.php";
}

/**
* The function below validates entered information and completes the addition of a drug
* @param xhr server side parameter
* @param status gives the status of success or fail from the ajax object
*/
function addDrugComplete(xhr,status){

  var obj = $.parseJSON(xhr.responseText);
	validateDrugSupplier();

  if(obj.result==0){
      alert(obj.message);
  }
  else{
    window.location="../View/tablepage.php";
  }
	alert(obj.message);
}

var drugSelected=null;

/**
* The function below takes in ID's form the webpage and inserts these values into
* an AJAX php page to insert the values into the database server
*/
function addDrug(){
  var drugname = $("#drugname").val();
  var drugquantity=$("#drugquantity").val();
  var drugsupplier=$("#drugsupplier").val();
  var drugtype=drugSelected;
	console.log(drugtype);
  var theUrl="../Controller/homeAjax.php?cmd=14&drugname="+drugname+
  "&drugquantity="+drugquantity+"&drugsupplier="+drugsupplier+"&drugtype="+drugtype;
  $.ajax(theUrl,
    {async:true,
      complete:addDrugComplete	});
}


/**
* Helper method for retrieving values from the drop down menu in the interface.
*/
function getDrugType(drugType){
	drugSelected=drugType.value;
}

/**
* The function below validates entered information and completes the addition of a drug
* @param xhr server side parameter
* @param status gives the status of success or fail from the ajax object
*/
function addToolComplete(xhr,status){
	console.log(xhr.responseText);
	validateToolSupplier();
  var obj = $.parseJSON(xhr.responseText);
  if(obj.result==0){
      alert(obj.message);
  }
  else{
    window.location="../View/tablepage.php";
  }
  alert(obj.message);
}

/**
* The function below takes in ID's form the webpage and inserts these values into
* an AJAX php page to insert the values into the database server
*/
function addTool(){
  var toolname = $("#toolname").val();
  var toolquantity=$("#toolquantity").val();
  var toolsupplier=$("#toolsupplier").val();
  var theUrl="../Controller/homeAjax.php?cmd=16&toolname="+toolname+
  "&toolquantity="+toolquantity+"&toolsupplier="+toolsupplier;

  $.ajax(theUrl,
    {async:true,
      complete:addToolComplete	});
}

/**
* The function below validates entered information and completes the addition of a drug
* @param xhr server side parameter
* @param status gives the status of success or fail from the ajax object
*/
function addSupplierComplete(xhr,status){
  var obj = $.parseJSON(xhr.responseText);
  if(obj.result==0){
      alert(obj.message);
  }
  else{
    window.location="../View/tablepage.php";
  }
  alert(obj.message);
}

/**
* The function below takes in ID's form the webpage and inserts these values into
* an AJAX php page to insert the values into the database server
*/
function addSupplier(){
  var suppliername = $("#suppliername").val();
  var supplierlocation=$("#supplierlocation").val();
  var theUrl="../Controller/homeAjax.php?cmd=15&suppliername="+suppliername+
  "&supplierlocation="+supplierlocation;

  $.ajax(theUrl,
    {async:true,
      complete:addSupplierComplete	});
}
