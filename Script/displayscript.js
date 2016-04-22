	var currentObject = null;
	var notprinted_drug = true;
	var notprinted_tool = true;
	var notprinted_supplier = true;

	var myList = null;

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

		function fillTableDrugs(xhr, status){
		var response = $.parseJSON(xhr.responseText);

		$(function() {
	    $.each(response, function(i, item) {

	        var $tr = $('<tr>').append(
	            $('<td>').text(item.DrugId),
	            $('<td>').text(item.drugName),
	            $('<td>').text(item.quantity),
				$('<td>').text(item.supplierName),
				$('<td>').text(item.supplierID),
				$('<td>').text(item.drugType)
	        ); //.appendTo('#records_table');
	        console.log($tr.wrap('<p>').html());
	    });
	});

		}

		function displayAllTools(){
		var result_table = document.getElementById('results_table');
		}

		function displayAllSupplier(){
		var result_table = document.getElementById('results_table');
		}

		function getAllDrugs(){
		var ajaxurl="../Controller/homeAjax.php?cmd=1";
		$.ajax(ajaxurl,
		{
		async:true,
		complete:fillTableDrugs

		}
		);
		}



		function testing(){
			var update = document.getElementById('update');
			update.innerHTML='working.........';
		}

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

	function fillTableDrugs(xhr, status){
	var response = $.parseJSON(xhr.responseText);

  if(notprinted_drug==true)  {
   document.getElementById('results_table').innerHTML = "";
	$(function(){
	document.getElementById('results_table').innerHTML = " <thead><tr id='header'><th id='name'>Drug Name</th><th id='quantity'>Quantity</th><th id='supplier'>Supplier Name</th><th id='supplierid'>Supplier Id</th><th id='supplierid'>Drug Type</th></tr> </thead>";
    $.each(response, function(i, item){
	    var index= i;
        var $tr = $('<tr>').append($('<td id='+index+'>').prepend("<span class='clickspot' >"+item.drugName+"</span>").dblclick({object:this,drug:item.drugId},editDrugName),
		    $('<td id='+index+'>').prepend("<span class='clickspot' >"+item.quantity+"</span>").dblclick({object:this,drug:item.drugId},editDrugQuantity),
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


	function getAllTools(){
	var ajaxurl="../ash-sweb-2016-group4/View/homepage.php?cmd=2";
	document.getElementById('button').innerText = "Add Tools";
	document.getElementById('addlink').href="../View/addtool_interface.php";
	$.ajax(ajaxurl,
	{
	async:true,
	complete:fillTableTools

	}
	);
	}

	function fillTableTools(xhr, status){
	var response = $.parseJSON(xhr.responseText);
  if(notprinted_tool==true)  {
  document.getElementById('results_table').innerHTML = "";
	$(function(){
	 document.getElementById('results_table').innerHTML = " <thead><tr id='header'><th id='name'>Tool Name</th><th id='quantity'>Quantity</th><th id='supplier'>Supplier Name</th><th id='supplierid'>Supplier Id</th></tr> </thead>";

	 //document.getElementById('editlink').innerHTML="<a href="">Edit</a>";


    $.each(response, function(i, item){
        var index= i;
        var $tr = $('<tr>').append($('<td id='+index+'>').prepend("<span class='clickspot' >"+item.toolName+"</span>").dblclick({object:this,tool:item.toolId},editToolName),
		    $('<td id='+index+'>').prepend("<span class='clickspot' >"+item.quantity+"</span>").dblclick({object:this,tool:item.toolId},editToolQuantity),


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

	function getAllSuppliers(){
	var ajaxurl="../ash-sweb-2016-group4/View/homepage.php?cmd=3";
	document.getElementById('button').innerText = "Add Suppliers";
	document.getElementById('addlink').href="../View/addsupplier_interface.php";
	$.ajax(ajaxurl,
	{
	async:true,
	complete:fillTableSuppliers

	}
	);
	}

	function fillTableSuppliers(xhr, status){
	var response = $.parseJSON(xhr.responseText);

  if(notprinted_supplier==true)  {
  document.getElementById('results_table').innerHTML = "";
	$(function(){
	 document.getElementById('results_table').innerHTML = " <thead><tr id='header'><th id='name'>Supplier Name</th><th id='quantity'>Location</th></tr> </thead>";




    $.each(response, function(i, item){
	 var index= i;
        var $tr = $('<tr>').append($('<td id='+index+'>').prepend("<span class='clickspot' >"+item.supplierName+"</span>").dblclick({object:this,supplier:item.suppliersId},editSupplierName),
		    $('<td id='+index+'>').prepend("<span class='clickspot' >"+item.supplierLocation+"</span>").dblclick({object:this,supplier:item.suppliersId},editSupplierLocation),



			$('<td>').prepend("<a href=\"?id="+index+"\">do something</a>"),
			$('<td>').prepend("<span class='clickspot' onclick=\"displaySupplierform(this)\">do something</span>")

        ).appendTo('#results_table');
        //console.log($tr.wrap('<p>').html());
    });
});
notprinted_tool=true;
notprinted_drug=true;
notprinted_supplier=false;

}

	}

	function editDrugName(event){
   currentName=this.innerHTML;
 var x = event.data.object;
 var id = event.data.drug;
  this.innerHTML="<input id='DrugName' type='text' > <button class='clickspot' onclick='saveDrugName("+id+")' >save</button>";
  $("#DrugName").val(currentName);
  currentObject=this;
}

function saveDrugName(id){
  currentObject.innerHTML=$("#DrugName").val();
  var Drugname=currentObject.innerHTML;
  var theUrl=".../Controller/homeAjax.php?cmd=5&dc="+id+"&Drugname="+Drugname;
  $.ajax(theUrl,
  {async:true,
   complete:editNameComplete}
 );
}
function editNameComplete(){

}

	var currentQuantity;

	function editDrugQuantity(event){
   currentQuantity=this.innerHTML;
 var x = event.data.object;
 var id = event.data.drug;
  this.innerHTML="<input id='DrugQuantity' type='text' > <button class='clickspot' onclick='saveDrugQuantity("+id+")' >save</button>";
  $("#DrugQuantity").val(currentQuantity);
  currentObject=this;
}

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
function editToolName(event){
   currentToolName=this.innerHTML;
 var x = event.data.object;
 var id = event.data.tool;
  this.innerHTML="<input id='ToolName' type='text' > <button class='clickspot' onclick='saveToolName("+id+")' >save</button>";
  $("#ToolName").val(currentToolName);
  currentObject=this;
}

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
function editToolQuantity(event){
   currentToolQuantity=this.innerHTML;
 var x = event.data.object;
 var id = event.data.tool;
  this.innerHTML="<input id='ToolQuantity' type='text' > <button class='clickspot' onclick='saveToolQuantity("+id+")' >save</button>";
  $("#ToolQuantity").val(currentToolQuantity);
  currentObject=this;
}

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
function editSupplierName(event){
   currentSupplierName=this.innerHTML;
 var x = event.data.object;
 var id = event.data.supplier;
  this.innerHTML="<input id='SupplierName' type='text' > <button class='clickspot' onclick='saveSupplierName("+id+")' >save</button>";
  $("#SupplierName").val(currentSupplierName);
  currentObject=this;
}

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
function editSupplierLocation(event){
   currentSupplierLocation=this.innerHTML;
 var x = event.data.object;
 var id = event.data.supplier;
  this.innerHTML="<input id='SupplierLocation' type='text' > <button class='clickspot' onclick='saveSupplierLocation("+id+")' >save</button>";
  $("#SupplierLocation").val(currentSupplierLocation);
  currentObject=this;
}

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
