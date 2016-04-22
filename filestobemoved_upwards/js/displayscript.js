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
	$(#results_table).append(headerTr$);

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
			$('<td>').text(item.drugType),
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
	var ajaxurl="../ash-sweb-2016-group4/View/homepage.php?cmd=1";
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