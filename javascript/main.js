var timer = 5;

function autoClick(){
		window.location = document.getElementById('cLink').href;
		}

function countdown(){

	 document.getElementById('countdown').innerText = timer;
	 if(timer > 0)
		timer = timer - 1;

	}

function cLink_load(){

	var time  = 5000;

	countdown();

	setTimeout('autoClick();', time);
	setInterval('countdown()', 1000);
	}

function checkAll( n, fldName ) {
  if (!fldName) {
     fldName = 'cb';
  }
	var f = document.adminForm;
	var c = f.toggle.checked;
	var n2 = 0;
	for (i=0; i < n; i++) {
		cb = eval( 'f.' + fldName + '' + i );
		if (cb) {
			cb.checked = c;
			n2++;
		}
	}
	if (c) {
		document.adminForm.boxchecked.value = n2;
	} else {
		document.adminForm.boxchecked.value = 0;
	}
}

function checkJAll(n, toggle, cb){

	if( $( "#"+toggle).is(":checked") )
		var checkall = true;
	else
		var checkal = false;

	for (var i=0; i < n; i++) {
			if(!checkall)
				$( "#"+cb+i ).removeAttr("checked").button("refresh");
			else
				$( "#"+cb+i ).attr("checked", true).button("refresh");

	}
}
