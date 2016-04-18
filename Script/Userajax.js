
var currentObject = null;

function saveUserName(id){
  currentObject.innerHTML=$("#UserName").val();
  var username=currentObject.innerHTML;
  var theUrl="../Controller/usersajax.php?cmd=1&uc="+id+"&username="+username;
  $.ajax(theUrl,
  {async:true,
   complete:editNameComplete}
 );
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
      alert("Could not add user information");
  }
  else{
    window.location="../View/displayUser.php";
  }
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
