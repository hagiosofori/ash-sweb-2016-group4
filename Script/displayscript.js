var currentObject = null;
var notprinted_drug = true;
var notprinted_tool = true;
var notprinted_supplier = true;
var drugItemId=null;
var toolItemId = null;
var supplierItemId=null;
var myList = null;
/**
*method:  method to diaplay all the drugs in the database
*/

function displayAllDrugs(xhr,status){
	var result_table = document.getElementById('results_table');
	if(!status=="success"){ document.getElementById("update").innerText="problem oh" ;}else{
		document.getElementById("update").innerText="success";
	}
	var table = xhr.responseText;
	if(table==null){document.getElementById("update").innerText="empty response";}else{
		document.getElementById("update").innerText="there is something";
	};
	document.getElementById("update").innerText=xhr.responseText;
	<!--$(document).open();->
	myList=xhr.responseText;
	buildHtmlTable(result_table);
}


function addAllColumnHeaders(myList){
	var columnSet = [];
	var headerTr$ = $('<tr/>');

	for (var i = 0 ; i < myList.length ; i++) {
		var rowHash = myList[i];
		for (var key in rowHash) {
			if ($.inArray(key, columnSet) == -1){
				columnSet.push(key);
				headerTr$.append($('<th/>').html(key));
			}
		}
	}
	$("#results_table").append(headerTr$);

	return columnSet;
}



function displayAllTools(){
	var result_table = document.getElementById('results_table');
}

function displayAllSupplier(){
	var result_table = document.getElementById('results_table');
}


function testing(){
	var update = document.getElementById('update');
	update.innerHTML='working.........';
}
/**
*method to get all the drugs in the database 
*/
function getAllDrugs(){
	document.getElementById('button').innerText = "Add Drug";
	document.getElementById('addlink').href="../View/adddrug_interface.php";
	var ajaxurl="../Controller/homeAjax.php?cmd=1";
	$.ajax(ajaxurl,
		{
			async:true,
			complete:fillTableDrugs

		}
	);
}
/**
*  method to display all the drugs in the database
*/

function fillTableDrugs(xhr, status){
	var response = $.parseJSON(xhr.responseText);

	if(notprinted_drug==true)  {
		document.getElementById('results_table').innerHTML = "";
		$(function(){
			document.getElementById('results_table').innerHTML = " <thead><tr id='header'><th id='name'>Drug Name</th><th id='quantity'>Quantity</th><th id='supplier'>Supplier Name</th><th id='supplierid'>Supplier Id</th><th id='drugType'>Drug Type</th><th>Options</th></tr> </thead>";
			$.each(response, function(i, item){
				drugItemId=item.drugId;
				var index= i;
				var $tr = $('<tr>').append($('<td id='+index+'>').prepend(item.drugName).dblclick({object:this,drug:item.drugId},editDrugName),
				$('<td id='+index+'>').prepend(item.quantity).dblclick({object:this,drug:item.drugId},editDrugQuantity),
				$('<td>').text(item.supplierName),
				$('<td>').text(item.supplierID),
				$('<td>').text(item.drugType),
				$('<td>').append("<p onclick='delDrug(this,drugItemId)'>Delete</p>")
			).appendTo('#results_table');
			//console.log($tr.wrap('<p>').html());
		});
	});
	notprinted_drug=false;
	notprinted_tool=true;
	notprinted_supplier=true;

}

}

/**
*method:  method to request for all the drugs in the database and print them
*/
function getAllTools(){
	var ajaxurl="../Controller/homeAjax.php?cmd=2";
	document.getElementById('button').innerText = "Add Tools";
	document.getElementById('addlink').href="../View/addtool_interface.php";
	$.ajax(ajaxurl,
		{
			async:true,
			complete:fillTableTools

		}
	);
}
/**
*method:  method to display all the tools in the database
*/
function fillTableTools(xhr, status){
	var response = $.parseJSON(xhr.responseText);
	if(notprinted_tool==true)  {
		document.getElementById('results_table').innerHTML = "";
		$(function(){
			document.getElementById('results_table').innerHTML = " <thead><tr id='header'><th id='name'>Tool Name</th><th id='quantity'>Quantity</th><th id='supplier'>Supplier Name</th><th id='supplierid'>Supplier Id</th><th>Options</th></tr></thead>";
			$.each(response, function(i, item){
				toolItemId=item.toolId;
				var index= i;
				var $tr = $('<tr>').append($('<td id='+index+'>').prepend(item.toolName).dblclick({object:this,tool:item.toolId},editToolName),
				$('<td id='+index+'>').prepend(item.quantity).dblclick({object:this,tool:item.toolId},editToolQuantity),
				$('<td>').text(item.supplierName),
				$('<td>').text(item.supplierId),
				$('<td>').append("<p onclick='delTool(this,toolItemId)'>Delete</p>")
			).appendTo('#results_table');
			//console.log($tr.wrap('<p>').html());
		});
	});
	notprinted_tool=false;
	notprinted_drug=true;
	notprinted_supplier=true;
	}
}
/**
*method:  method to request for all the suppliers in the database
*/
function getAllSuppliers(){
	var ajaxurl="../Controller/homeAjax.php?cmd=3";
	document.getElementById('button').innerText = "Add Suppliers";
	document.getElementById('addlink').href="../View/addsupplier_interface.php";
	$.ajax(ajaxurl,
		{
			async:true,
			complete:fillTableSuppliers

		}
	);
}
/**
*method:  method to display all the suppliers in the database
*/
function fillTableSuppliers(xhr, status){
	var response = $.parseJSON(xhr.responseText);

	if(notprinted_supplier==true)  {
		document.getElementById('results_table').innerHTML = "";
		$(function(){
			document.getElementById('results_table').innerHTML = " <thead><tr id='header'><th id='name'>Supplier Name</th><th id='quantity'>Location</th><th>Options</th></tr></thead>";
			$.each(response, function(i, item){
				supplierItemId=item.suppliersId;
				var index= i;
				var $tr = $('<tr>').append($('<td id='+index+'>').prepend(item.supplierName).dblclick({object:this,supplier:item.suppliersId},editSupplierName),
				$('<td id='+index+'>').prepend(item.supplierLocation).dblclick({object:this,supplier:item.suppliersId},editSupplierLocation),
				$('<td>').append("<p onclick='delSupplier(this,supplierItemId)'>Delete</p>")
			).appendTo('#results_table');
			//console.log($tr.wrap('<p>').html());
		});
	});
	notprinted_tool=true;
	notprinted_drug=true;
	notprinted_supplier=false;

}

}
/**
*method:  method to edit a particular drug name
*/
function editDrugName(event){
	currentName=this.innerHTML;
	var x = event.data.object;
	var id = event.data.drug;
	this.innerHTML="<input id='DrugName' type='text' > <button class='clickspot' onclick='saveDrugName("+id+")' >save</button>";
	$("#DrugName").val(currentName);
	currentObject=this;
}
/**
*method:  method to save the drug name after editing it
*/
function saveDrugName(id){
	currentObject.innerHTML=$("#DrugName").val();
	var Drugname=currentObject.innerHTML;
	var theUrl="../Controller/homeAjax.php?cmd=5&dc="+id+"&Drugname="+Drugname;
	$.ajax(theUrl,
		{async:true,
			complete:editNameComplete}
		);
}

function editNameComplete(){
}

var currentQuantity;
/**
*method:  method to edit a particular drug Quantity
*/
function editDrugQuantity(event){
	currentQuantity=this.innerHTML;
	var x = event.data.object;
	var id = event.data.drug;
	this.innerHTML="<input id='DrugQuantity' type='text' > <button class='clickspot' onclick='saveDrugQuantity("+id+")' >save</button>";
	$("#DrugQuantity").val(currentQuantity);
	currentObject=this;
}
/**
*method:  method to save the drug quantity after entering a new value
*/
function saveDrugQuantity(id){
	currentObject.innerHTML=$("#DrugQuantity").val();
	var DrugQuantity=currentObject.innerHTML;
	var theUrl="../Controller/homeAjax.php?cmd=6&dc="+id+"&DrugQuantity="+DrugQuantity;
	$.ajax(theUrl,
		{async:true,
			complete:editQuantityComplete}
		);
}

function editQuantityComplete(){

}

var currentToolName=null;
/**
*method:  method to edit a tool name in the table
*/
function editToolName(event){
	currentToolName=this.innerHTML;
	var x = event.data.object;
	var id = event.data.tool;
	this.innerHTML="<input id='ToolName' type='text' > <button class='clickspot' onclick='saveToolName("+id+")' >save</button>";
	$("#ToolName").val(currentToolName);
	currentObject=this;
}
/**
*method:  method to save the edited tool name
*/
function saveToolName(id){
	currentObject.innerHTML=$("#ToolName").val();
	var Toolname=currentObject.innerHTML;
	var theUrl="../Controller/homeAjax.php?cmd=7&tc="+id+"&Toolname="+Toolname;
	$.ajax(theUrl,
		{async:true,
			complete:editToolNameComplete}
		);
}
function editToolNameComplete(){

}

var currentToolQuantity=null;
/**
*method:  method to edit a particular tool quantity
*/
function editToolQuantity(event){
	currentToolQuantity=this.innerHTML;
	var x = event.data.object;
	var id = event.data.tool;
	this.innerHTML="<input id='ToolQuantity' type='text' > <button class='clickspot' onclick='saveToolQuantity("+id+")' >save</button>";
	$("#ToolQuantity").val(currentToolQuantity);
	currentObject=this;
}
/**
*method:  method to save the edited tool quantity
*/
function saveToolQuantity(id){
	currentObject.innerHTML=$("#ToolQuantity").val();
	var Toolquantity=currentObject.innerHTML;
	var theUrl="../Controller/homeAjax.php?cmd=8&tc="+id+"&Toolquantity="+Toolquantity;
	$.ajax(theUrl,
		{async:true,
			complete:editToolQuantityComplete}
		);
	}
function editToolQuantityComplete(){

}

var currentSupplierName=null;
/**
*method:  method to edit a specific supplier name
*/
function editSupplierName(event){
	currentSupplierName=this.innerHTML;
	var x = event.data.object;
	var id = event.data.supplier;
	this.innerHTML="<input id='SupplierName' type='text' > <button class='clickspot' onclick='saveSupplierName("+id+")' >save</button>";
	$("#SupplierName").val(currentSupplierName);
	currentObject=this;
}
/**
*method:  method to save the supplier once editeds
*/
function saveSupplierName(id){
	currentObject.innerHTML=$("#SupplierName").val();
	var SupplierName=currentObject.innerHTML;
	var theUrl="../Controller/homeAjax.php?cmd=9&sc="+id+"&SupplierName="+SupplierName;
	$.ajax(theUrl,
		{async:true,
			complete:editSupplierNameComplete}
		);
	}
	function editSupplierNameComplete(){

	}

var currentSupplierLocation=null;
/**
*method:  method to edit a supplier's location
*/
function editSupplierLocation(event){
	currentSupplierLocation=this.innerHTML;
	var x = event.data.object;
	var id = event.data.supplier;
	this.innerHTML="<input id='SupplierLocation' type='text' > <button class='clickspot' onclick='saveSupplierLocation("+id+")' >save</button>";
	$("#SupplierLocation").val(currentSupplierLocation);
	currentObject=this;
}
/**
*method:  method to save the new value for a particular supplier's location
*/
function saveSupplierLocation(id){
	currentObject.innerHTML=$("#SupplierLocation").val();
	var SupplierLocation=currentObject.innerHTML;
	var theUrl="../Controller/homeAjax.php?cmd=10&sc="+id+"&SupplierLocation="+SupplierLocation;
	$.ajax(theUrl,
		{async:true,
			complete:editSupplierLocationComplete}
		);
}
function editSupplierLocationComplete(){

}

function sfillTableTools(xhr, status){
	var response = $.parseJSON(xhr.responseText);
	document.getElementById('update').innerHTML=xhr.responseText;
	if(!notprinted_tool)  {
		document.getElementById('results_table').innerHTML = "";
		$(function(){
			document.getElementById('results_table').innerHTML = " <thead><tr id='header'><th id='name'>Tool Name</th><th id='quantity'>Quantity</th><th id='supplier'>Supplier Name</th><th id='supplierid'>Supplier Id</th></tr> </thead>";

			//document.getElementById('editlink').innerHTML="<a href="">Edit</a>";


			$.each(response, function(i, item){
				var $tr = $('<tr>').append(

					$('<td>').text(item.toolName),
					$('<td>').text(item.quantity),
					$('<td>').text(item.supplierName),
					$('<td>').text(item.supplierId)


				).appendTo('#results_table');
				//console.log($tr.wrap('<p>').html());
			});
		});
		notprinted_tool=false;
		notprinted_drug=true;
		notprinted_supplier=true;

	}

}

function sfillTableSuppliers(xhr, status){
	var response = $.parseJSON(xhr.responseText);
	document.getElementById('update').innerHTML=xhr.responseText;
	if(!notprinted_supplier)  {
		document.getElementById('results_table').innerHTML = "";
		$(function(){
			document.getElementById('results_table').innerHTML = " <thead><tr id='header'><th id='name'>Supplier Name</th><th id='quantity'>Location</th></tr> </thead>";

			$.each(response, function(i, item){
				var $tr = $('<tr>').append(
					$('<td>').text(item.supplierName),
					$('<td>').text(item.supplierLocation),
					$('<td>').text("<a href=\"google.com\">do something</a>")

				).appendTo('#results_table');
				//console.log($tr.wrap('<p>').html());
			});
		});
		notprinted_tool=true;
		notprinted_drug=true;
		notprinted_supplier=false;

	}

}

function sfillTableDrugs(xhr, status){
	var response = $.parseJSON(xhr.responseText);
	document.getElementById('update').innerHTML=xhr.responseText;
	if(!notprinted_drug)  {
		document.getElementById('results_table').innerHTML = "";
		$(function(){
			document.getElementById('results_table').innerHTML = " <thead><tr id='header'><th id='name'>Drug Name</th><th id='quantity'>Quantity</th><th id='supplier'>Supplier Name</th><th id='supplierid'>Supplier Id</th><th id='supplierid'>Drug Type</th></tr> </thead>";
			$.each(response, function(i, item){
				var $tr = $('<tr>').append(

					$('<td>').text(item.drugName),
					$('<td>').text(item.quantity),
					$('<td>').text(item.supplierName),
					$('<td>').text(item.supplierID),
					$('<td>').text(item.drugType)
				).appendTo('#results_table');
				//console.log($tr.wrap('<p>').html());
			});
		});
		notprinted_drug=false;
		notprinted_tool=true;
		notprinted_supplier=true;

	}

}

function search(){
	var search = document.getElementById('searchtxt').value;
	document.getElementById('update').innerHTML='inside search';

	if(!notprinted_tool){
		document.getElementById('update').innerHTML='searching for tool '+search;
		var ajaxurl = '../Controller/homeAjax.php?cmd=12&searchtxt='+search;
		document.getElementById('update').innerHTML=ajaxurl+' in tools';
		$.ajax(ajaxurl, {async:true, complete:sfillTableTools });
	}else if(!notprinted_drug){
		document.getElementById('update').innerHTML=search+' in drugs';
		var ajaxurl = '../Controller/homeAjax.php?cmd=11&searchtxt='+search;
		document.getElementById('update').innerHTML=ajaxurl;
		$.ajax(ajaxurl, {async:true, complete:sfillTableDrugs } );
	}else if(!notprinted_supplier){
		document.getElementById('update').innerHTML==ajaxurl+' in suppliers';
		var ajaxurl = '/Controller/homeAjax.php?cmd=13&searchtxt='+search;
		$.ajax(ajaxurl, {async:true, complete:sfillTableSuppliers} );
	}
}

function deleteToolComplete(xhr,status){
	if(status!="success"){
    alert("Error whiles deleting Tool");
  }
  if (typeof(currentObject) == "object") {
        $(currentObject).closest("tr").remove();
    } else {
        alert("Could not delete Tool");
    }

  alert(xhr.responseText);

}

function delTool(object,id){

	var ajaxPageUrl="../Controller/homeAjax.php?cmd=17&uc="+id;
  $.ajax(ajaxPageUrl,
    {async:true,
      complete:deleteToolComplete	});
  currentObject=object;
}

function deleteSupplierComplete(xhr,status){
	if(status!="success"){
    alert("Error whiles deleting Supplier");
  }
  if (typeof(currentObject) == "object") {
        $(currentObject).closest("tr").remove();
    } else {
        alert("Could not delete Supplier");
    }

  alert(xhr.responseText);

}

function delSupplier(object,id){

	var ajaxPageUrl="../Controller/homeAjax.php?cmd=18&uc="+id;
  $.ajax(ajaxPageUrl,
    {async:true,
      complete:deleteSupplierComplete	});
  currentObject=object;
}

function deleteDrugComplete(xhr,status){
	if(status!="success"){
    alert("Error whiles deleting Drug");
  }
  if (typeof(currentObject) == "object") {
        $(currentObject).closest("tr").remove();
    } else {
        alert("Could not delete Drug");
    }

  alert(xhr.responseText);

}

function delDrug(object,id){

	var ajaxPageUrl="../Controller/homeAjax.php?cmd=19&uc="+id;
  $.ajax(ajaxPageUrl,
    {async:true,
      complete:deleteSupplierComplete	});
  currentObject=object;
}
