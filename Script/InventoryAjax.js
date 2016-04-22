
var currentObject = null;

function editNameComplete(xhr,status){

}



	function editDrugName(event){
 // var currentName=obj.innerHTML;
 var x = event.data.object;
 var sup = event.data.supplier;
  this.innerHTML="<input id='DrugName' type='text' > <button class='clickspot' onclick='saveUserName()' >save</button>";
  $("#DrugName").val(currentName);
  currentObject=obj;
}

function saveDrugName(id){
  currentObject.innerHTML=$("#UserName").val();
  var username=currentObject.innerHTML;
  var theUrl="../Controller/usersajax.php?cmd=1&uc="+id+"&username="+username;
  $.ajax(theUrl,
  {async:true,
   complete:editNameComplete}
 );
}







var notprinted_drug = true;
	var notprinted_tool = true;
	var notprinted_supplier = true;
	
	function testing(){
		var update = document.getElementById('update');
		update.innerHTML='working.........';
	}
	
	function getAllDrugs(){
	document.getElementById('button').innerText = "Add Drug";
	document.getElementById('addlink').href="../html/adddrug_interface.php";
	var ajaxurl="../ash-sweb-2016-group4/View/homepage.php?cmd=1";
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
        var $tr = $('<tr>').append($('<td>').prepend("<span class='clickspot' >"+item.drugName+"</span>").click({object:this,supplier:item.supplierID},editDrugName),$('<td>').text(item.quantity),$('<td>').text(item.supplierName),
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
	document.getElementById('addlink').href="../html/addtool_interface.php";
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
	
	function getAllSuppliers(){
	var ajaxurl="../ash-sweb-2016-group4/View/homepage.php?cmd=3";
	document.getElementById('button').innerText = "Add Suppliers";
	document.getElementById('addlink').href="../html/addsupplier_interface.php";
	$.ajax(ajaxurl,
	{
	async:true,
	complete:fillTableSuppliers

	}
	);
	}
	
	function fillTableSuppliers(xhr, status){
	var response = $.parseJSON(xhr.responseText);
	 var id;
  if(notprinted_supplier==true)  {
  document.getElementById('results_table').innerHTML = "";
	$(function(){
	 document.getElementById('results_table').innerHTML = " <thead><tr id='header'><th id='name'>Supplier Name</th><th id='quantity'>Location</th></tr> </thead>";
	 
	 
	
	 
    $.each(response, function(i, item){
	 id= item.suppliersId;
        var $tr = $('<tr>').append(
           
         
			$('<td>').text(item.suppliersId),
			$('<td>').text(item.supplierLocation),
			$('<td>').prepend("<a href=\"?id="+id+"\">do something</a>"),
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
	
	


function editFirstName(obj,id){
  var currentName=obj.innerHTML;
  obj.innerHTML="<input id='FirstName' type='text' > <button class='clickspot' onclick='saveFirstName("+id+")' >save</button>";
  $("#FirstName").val(currentName);
  currentObject=obj;
}

function saveLastName(id){
  currentObject.innerHTML=$("#LastName").val();
  var lastname=currentObject.innerHTML;
  var theUrl="../Controller/homepage.php?cmd=3&uc="+id+"&lastname="+lastname;
  $.ajax(theUrl,
  {async:true,
   complete:editNameComplete}
 );
}

function editLastName(obj,id){
  var currentName=obj.innerHTML;
  obj.innerHTML="<input id='LastName' type='text' > <button class='clickspot' onclick='saveLastName("+id+")' >save</button>";
  $("#LastName").val(currentName);
  currentObject=obj;
}

function deleteUserComplete(xhr,status){
  if(status!="success"){
    alert("Error whiles deleting user");
  }
  if (typeof(currentObject) == "object") {
        $(currentObject).closest("tr").remove();
    } else {
        alert("Could not delete user");
    }

}

function deleteUser(object,id){
  var ajaxPageUrl="../Controller/usersajax.php?cmd=4&uc="+id;
  $.ajax(ajaxPageUrl,
    {async:true,
      complete:deleteUserComplete	});
  currentObject=object;
}
