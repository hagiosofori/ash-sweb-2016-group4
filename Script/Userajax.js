
var currentObject = null;
function email(){
  alert("An email has been sent to the admin to reset your password");
}
function LoginComplete(xhr,status){
  var obj = $.parseJSON(xhr.responseText);
  if(obj.result==1){
    window.location="View/hm.php";
  }
  else{
    if(obj.email==null){
      alert(obj.message);
    }
    else{
      pwordForgot.innerHTML="Forgot your password?";
      $("#pwordForgot").attr("href", "Controller/email.php?email="+obj.email);
      alert(obj.message);
    }
  }

}

function LoginFunc(){
  var username=$("#Username").val();
  var password=$("#Password").val();
  var theUrl="Controller/usersajax.php?cmd=6&username="+username+"&password="+password;
  $.ajax(theUrl,{
    async:true,
    complete:LoginComplete
  });
}

function saveUserName(id){
  currentObject.innerHTML=$("#UserName").val();
  var username=currentObject.innerHTML;
  var theUrl="../Controller/usersajax.php?cmd=1&uc="+id+"&username="+username;
  $.ajax(theUrl,
  {async:true,
   complete:editNameComplete}
 );
}

function editNameComplete(xhr,status){
  alert(xhr.responseText);
}

function editUserName(obj,id){
  var currentName=obj.innerHTML;
  obj.innerHTML="<input id='UserName' type='text' > <button class='clickspot' onclick='saveUserName("+id+")' >save</button>";
  $("#UserName").val(currentName);
  currentObject=obj;
}

function saveFirstName(id){
  currentObject.innerHTML=$("#FirstName").val();
  var firstname=currentObject.innerHTML;
  var theUrl="../Controller/usersajax.php?cmd=2&uc="+id+"&firstname="+firstname;
  $.ajax(theUrl,
  {async:true,
   complete:editNameComplete}
 );
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
  var theUrl="../Controller/usersajax.php?cmd=3&uc="+id+"&lastname="+lastname;
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
  alert(xhr.responseText);

}

function deleteUser(object,id){
  var ajaxPageUrl="../Controller/usersajax.php?cmd=4&uc="+id;
  $.ajax(ajaxPageUrl,
    {async:true,
      complete:deleteUserComplete	});
  currentObject=object;
}

function addUserComplete(xhr,status){
  var obj = $.parseJSON(xhr.responseText);
  if(obj.result==0){
      alert(obj.message);
  }
  else{
    window.location="../View/displayUser.php";
  }
  alert(obj.message);
}

function addUser(){
  var firstname = $("#firstname").val();
  var username=$("#username").val();
  var lastname=$("#lastname").val();
  var password=$("#password").val();
  var email=$("#email").val();
  var type;

  if ($('#Admin').is(':checked')){
    type=1;
  }
  else if ($('#User').is(':checked')){
    type=0;
  }

  var theUrl="../Controller/usersajax.php?cmd=5&username="+username+
  "&firstname="+firstname+"&lastname="+lastname+"&email="
  +email+"&password="+password+"&type="+type;

  $.ajax(theUrl,
    {async:true,
      complete:addUserComplete	});
}

function addDrugComplete(xhr,status){
  var obj = $.parseJSON(xhr.responseText);
  if(obj.result==0){
      alert(obj.message);
  }
  else{
    window.location="../View/displayUser.php";
  }
  alert(obj.message);
}

function addDrug(){
  var drugname = $("#drugname").val();
  var drugquantity=$("#drugquantity").val();
  var drugsupplier=$("#drugsupplier").val();
  var drugtype=$("#drugtype").val();

alert(drugname);
  var theUrl="../Controller/usersajax.php?cmd=7&drugname="+drugname+
  "&drugquantity="+drugquantity+"&drugsupplier="+drugsupplier+"&drugtype="+drugtype;
alert("I reach here too");
  $.ajax(theUrl,
    {async:true,
      complete:addDrugComplete	});
}


function addToolComplete(xhr,status){
  var obj = $.parseJSON(xhr.responseText);
  if(obj.result==0){
      alert(obj.message);
  }
  else{
    window.location="../View/displayUser.php";
  }
  alert(obj.message);
}

function addTool(){
  var toolname = $("#toolname").val();
  var toolquantity=$("#toolquantity").val();
  var toolsupplier=$("#toolsupplier").val();


  var theUrl="../Controller/usersajax.php?cmd=8&toolname="+toolname+
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
    window.location="../View/displayUser.php";
  }
  alert(obj.message);
}


function addSupplier(){
  var suppliername = $("#suppliername").val();
  var supplierlocation=$("#supplierlocation").val();


  var theUrl="../Controller/usersajax.php?cmd=9&suppliername="+suppliername+
  "&supplierlocation="+supplierlocation;

  $.ajax(theUrl,
    {async:true,
      complete:addSupplierComplete	});
}
