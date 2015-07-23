$(document).ready(function() {

	var globalUrl;
	var step = "r1";
	var count = 0;
	var counter = 0;
	var counter_old = 0;

	$("#progressbar").progressbar({ value: 0 });

	$.ajaxSetup({
	"error":function(request, status, error) {
	//reset state here;
		$("#error").show();
		$("#errorText").append(status+" -- "+error);
		$("#errorText").append("<br /><br />JSON url: "+globalUrl);
	}});

	function getSize(bytes, conv){

		return (bytes/conv).toFixed(2);

		}
	function appendIcon(icon){

		return '<span class="ui-icon ui-icon-'+icon+'" style="float:left;"></span>';

		}

	function xclonerRecurseMYSQL(url){

		globalUrl = url;
		step = "r1";

		$.getJSON(url, function(json) {

		if(!json){
			$("#error").show();
			$("#errorText").text(url);
		}

		if(json.dumpsize && !json.endDump){
					$("#mysqlProcess").append(" ("+getSize(json.dumpsize, 1024*1024)+" MB) <br />");
				}

		if(json.newDump){
				count++;
				//$("#mysqlProcess").append(appendIcon("arrowthick-1-e"));
				if(json.databaseName!="")
					$("#mysqlProcess").append("<b>["+json.databaseName+"]</b> <span id='db"+count+"'></span> tables ");
				counter = parseInt(json.startAtLine);

		}else{
				$("#db"+count).text(json.startAtLine - counter);
			}

		if(!parseInt(json.finished)){
		//get next records

			$("#db"+count).text(json.startAtLine - counter);

			recurseUrl = "index2.php?task=recurse_database&nohtml=1&dbbackup_comp="+json.dbbackup_comp+"&dbbackup_drop="+json.dbbackup_drop+"&startAtLine="+json.startAtLine+"&startAtRecord="+json.startAtRecord+"&dumpfile="+json.dumpfile;
			xclonerRecurseMYSQL(recurseUrl);

			}
		else{

			$("#fileSystem").show();
			var recurseUrl="index2.php?task=recurse_files&mode=start&nohtml=1";
			xclonerRecurseJSON(recurseUrl);

			}


		});
	}

	function xclonerRecurseJSON(url){

		$("#result").hide();

		globalUrl = url;
		step = "r2";

		$.getJSON(url, function(json) {

		if(!json){
			$("#error").show();
			$("#errorText").text(url);
		}

		if(!parseInt(json.finished)){

			$("#recurseStatus").text(json.tfiles);

			var recurseUrl = "index2.php?task=recurse_files&mode="+json.mode+"&nohtml=1";
			xclonerRecurseJSON(recurseUrl);

			}
		else{
			var size = parseFloat(json.size)/(1024*1024);
			$("#recurseStatus").text(" done! (Estimated size:"+size.toFixed(2)+"MB) in "+json.tfiles+" files");
			$("#result").show();
			returnUrl = "index2.php?option=com_cloner&lines="+json.tfiles+"&task=refresh&backup="+backupFile+"&excl_manual=";
			xclonerGetJSON(returnUrl);

			}


		});
	}

	function xclonerGetJSON(url){

	globalUrl = url;
	step = "r3";

	$.getJSON(url, function(json) {

		if(!json){
			$("#error").show();
			$("#errorText").append(url);
		}

		var percent = parseInt(json.percent);
		$("#progressbar").progressbar({ value: percent });
		$("#backupSize").text(json.backupSize);
		$("#nFiles").text(json.startf);
		$("#percent").text(json.percent);
		if(!json.finished){
			var url = "index2.php?option="+json.option+"&task="+json.task+"&json="+json.json+"&startf="+json.startf+"&lines="+json.lines+"&backup="+json.backup+"&excl_manual="+json.excl_manual;
			xclonerGetJSON(url);
		}else{

			$("#complete").show();
			$("#nFiles").text(json.lines);
			$("#backupFiles").text(json.lines);
			$("#backupSizeComplete").text(json.backupSize);
			$("#backupName").text(json.backup);
			$( "#dialog:ui-dialog" ).dialog( "destroy" );
			$( "#dialog-message" ).dialog({
				modal: true,
				width: 600,
				buttons: {
					Close: function() {
						$( this ).dialog( "close" );
					}
				}
			});

		}

	});

	}

	$("#retry").click(function(){
		$("#error").hide();
		$("#errorText").empty();
		if(step == "r1"){
			xclonerRecurseMYSQL(globalUrl);
		}
		else
		if(step == "r2"){
			xclonerRecurseJSON(globalUrl);
		}
		else if(step == "r3"){
			xclonerGetJSON(globalUrl);
		}
	});

});
