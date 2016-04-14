
var currentObject = null;

function editUserNameComplete(xhr,status){

}

function saveUserName(id){
  currentObject.innerHTML=$("#UserName").val();
  var username=currentObject.innerHTML;
  var theUrl="../Controller/usersajax.php?cmd=1&uc="+id+"&username="+username;
  $.ajax(theUrl,
  {async:true,
   complete:editUserNameComplete}
 );
}

function editUserName(obj,id){
  var currentName=obj.innerHTML;
  obj.innerHTML="<input id='UserName' type='text' > <span class='clickspot' onclick='saveUserName("+id+")' >save</span>";
  $("#UserName").val(currentName);
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
  var ajaxPageUrl="../Controller/usersajax.php?cmd=2&uc="+id;
  $.ajax(ajaxPageUrl,
    {async:true,
      complete:deleteUserComplete	});
  currentObject=object;
}
