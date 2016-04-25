/**
* The function below validates that the supplier entered by the user containts ID"s as the textfield takes in ID values as relating to the ID's of the supplier.
**/
function validateDrugSupplier()
{
var regexp1=new RegExp("[^0-9]");
if(regexp1.test($("#drugsupplier").val()))
{
alert("Only numbers are allowed in the supplier ID.");
return false;
}
window.location="../View/adddrug_interface.php";
}

/**
* The function below validates that the drug type entered by the user containts Tablets or Syrups or Repositories in the textfield as they are the 3 types of drug administration.
**/
function validateDrugType()
{
var regexp1=new RegExp("[^Tablets]");
var regexp2=new RegExp("[^Syrups]");
var regexp2=new RegExp("[^Repositories]");

if(regexp1.test($("#drugtype").val()) && regexp2.test($("#drugtype").val()) && regexp3.test($("#drugtype").val()) ){
  alert("Drug types can only be Tablets or Syrups or Repositories");
  window.location="../View/adddrug_interface.php";
  return false;
}
}


/**
* The function below validates entereed information and completes the addition of a drug.
**/
function addDrugComplete(xhr,status){
	console.log(xhr.responseText);
  var obj = $.parseJSON(xhr.responseText);

  validateDrugSupplier();
  validateDrugType();

  if(obj.result==0){
      alert(obj.message);
  }
  else{
    // window.location="../View/tablepage.php";
  }
  // alert(obj.message);
}

/**
* The function below takes in ID's from the webpage and inserts these values into an AJAX php page to insert the values into the database server.
**/
function addDrug(){
  var drugname = $("#drugname").val();
  var drugquantity=$("#drugquantity").val();
  var drugsupplier=$("#drugsupplier").val();
  var drugtype=$("#drugtype").val();

  var theUrl="../Controller/homeAjax.php?cmd=14&drugname="+drugname+
  "&drugquantity="+drugquantity+"&drugsupplier="+drugsupplier+"&drugtype="+drugtype;
  $.ajax(theUrl,
    {async:true,
      complete:addDrugComplete	});
}

/**
* The function below validates entereed information and completes the addition of a tool.
**/
function addToolComplete(xhr,status){
	console.log(xhr.responseText);
  var obj = $.parseJSON(xhr.responseText);

  validateToolSupplier();

  if(obj.result==0){
      alert(obj.message);
  }
  else{
    window.location="../View/tablepage.php";
  }
  alert(obj.message);
}

/**
* The function below takes in ID's from the webpage and inserts these values into an AJAX php page to insert the values into the database server.
**/
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
* The function below validates entereed information and completes the addition of a supplier.
**/
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
* The function below takes in ID's from the webpage and inserts these values into an AJAX php page to insert the values into the database server.
**/
function addSupplier(){
  var suppliername = $("#suppliername").val();
  var supplierlocation=$("#supplierlocation").val();


  var theUrl="../Controller/homeAjax.php?cmd=15&suppliername="+suppliername+
  "&supplierlocation="+supplierlocation;

  $.ajax(theUrl,
    {async:true,
      complete:addSupplierComplete	});
}
