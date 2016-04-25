
function addDrugComplete(xhr,status){
	console.log(xhr.responseText);
  var obj = $.parseJSON(xhr.responseText);

  if(obj.result==0){
      alert(obj.message);
  }
  else{
    window.location="../View/tablepage.php";
  }
  alert(obj.message);
}

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


function addToolComplete(xhr,status){
	console.log(xhr.responseText);
  var obj = $.parseJSON(xhr.responseText);
  if(obj.result==0){
      alert(obj.message);
  }
  else{
    window.location="../View/tablepage.php";
  }
  alert(obj.message);
}

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


function addSupplier(){
  var suppliername = $("#suppliername").val();
  var supplierlocation=$("#supplierlocation").val();


  var theUrl="../Controller/homeAjax.php?cmd=15&suppliername="+suppliername+
  "&supplierlocation="+supplierlocation;

  $.ajax(theUrl,
    {async:true,
      complete:addSupplierComplete	});
}
