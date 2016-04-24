<<<<<<< HEAD

var currentObject = null;
//Displays email alert message
function email(){
  alert("An email has been sent to the admin to reset your password");
}

/**
*@param server response, status
*Redirects to the home page after login
**/
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

//Passes the users information to be logged in
function LoginU(){
  var username=$("#Username").val();
  var password=$("#Password").val();
  var theUrl="Controller/usersajax.php?cmd=6&username="+username+"&password="+password;
  $.ajax(theUrl,{
    async:true,
    complete:LoginComplete
  });
}

/**
*@param id of the user
*Saves the edited username
**/

function saveUserName(id){
  currentObject.innerHTML=$("#UserName").val();
  var username=currentObject.innerHTML;
  var theUrl="../Controller/usersajax.php?cmd=1&uc="+id+"&username="+username;
  $.ajax(theUrl,
  {async:true,
   complete:editNameComplete}
 );
}


/**
*@param server response, status
*Displays a popup of whether
*the user information was updated
**/
function editNameComplete(xhr,status){
  alert(xhr.responseText);
}

/**
*@param table data object, id of the user
*Allows the user to edit usernames
**/

function editUserName(obj,id){
  var currentName=obj.innerHTML;
  obj.innerHTML="<input id='UserName' type='text' > <button class='clickspot' onclick='saveUserName("+id+")' >save</button>";
  $("#UserName").val(currentName);
  currentObject=obj;
}



/**
*@param id of the user
*Saves the edited firstname
**/

function saveFirstName(id){
  currentObject.innerHTML=$("#FirstName").val();
  var firstname=currentObject.innerHTML;
  var theUrl="../Controller/usersajax.php?cmd=2&uc="+id+"&firstname="+firstname;
  $.ajax(theUrl,
  {async:true,
   complete:editNameComplete}
 );
}


/**
*@param table data object, id of the user
*Allows the user to edit firstnames
**/

function editFirstName(obj,id){
  var currentName=obj.innerHTML;
  obj.innerHTML="<input id='FirstName' type='text' > <button class='clickspot' onclick='saveFirstName("+id+")' >save</button>";
  $("#FirstName").val(currentName);
  currentObject=obj;
}


/**
*@param id of the user
*Saves the edited lastname
**/

function saveLastName(id){
  currentObject.innerHTML=$("#LastName").val();
  var lastname=currentObject.innerHTML;
  var theUrl="../Controller/usersajax.php?cmd=3&uc="+id+"&lastname="+lastname;
  $.ajax(theUrl,
  {async:true,
   complete:editNameComplete}
 );
}

/**
*@param table data object, id of the user
*Allows the user to edit lastnames
**/

function editLastName(obj,id){
  var currentName=obj.innerHTML;
  obj.innerHTML="<input id='LastName' type='text' > <button class='clickspot' onclick='saveLastName("+id+")' >save</button>";
  $("#LastName").val(currentName);
  currentObject=obj;
}


/**
*@param server responses
*Displays messages concerning
*whether user was deleted
**/

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

/**
*@param table data object, id of the user
*Allows the an Admin to delete a user
**/
function deleteUser(object,id){
  var ajaxPageUrl="../Controller/usersajax.php?cmd=4&uc="+id;
  $.ajax(ajaxPageUrl,
    {async:true,
      complete:deleteUserComplete	});
  currentObject=object;
}


/**
*Displays message concerning whether user
* was added or not
**/
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

/**
*Allows the admin to add users
**/
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

//Tool tip for editing information
$(function() {
  $('.content').hover(function() {
    $('#edit_info').css('display', 'block');
  }, function() {
    $('#edit_info').css('display', 'none');
  });
});
=======

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
>>>>>>> 7090baf03fb76ff69f6373456299a06866cd1858
