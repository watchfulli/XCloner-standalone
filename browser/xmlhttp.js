var request;
var targetDiv;
function loadXMLDoc(url) {
    // for Mozilla and othes who support XMLHttpRequest
    if (window.XMLHttpRequest) {
        request = new XMLHttpRequest();
        request.onreadystatechange = processXMLRequest;
        request.open("GET", url, true);
        request.send(null);
    // for Interweb Explorer
    } else if (window.ActiveXObject) {
        request = new ActiveXObject("Microsoft.XMLHTTP");
            if(request){
        request.onreadystatechange = processXMLRequest;
        request.open("GET", url, true);
        request.send();
            }
    } else{
      return false;
      }
}

function processXMLRequest() {
    // only if data is loaded
    if (request.readyState == 4) {
        // only if result of HTTP request was an OK
        if (request.status == 200 || request.readyState ==304) {
                  useXML(request.responseXML);
        } else{
                  targetDiv=document.getElementById("browser");
                  targetDiv.innerHTML="Unable to load XML";
        }
    }
}

function do_browser(){
      targetDiv=document.getElementById("browser");

      if(loadXMLDoc("browser/files_xml.php")){
            targetDiv.className="searching";
            targetDiv.innerHTML="";
      }
}

function createCookie(name,value,days)
{
	if (days)
	{
		var date = new Date();
		date.setTime(date.getTime()+(days*24*60*60*1000));
		var expires = "; expires="+date.toGMTString();
	}
	else var expires = "";
	document.cookie = name+"="+value+expires+"; path=/";
}

function readCookie(name)
{
	var nameEQ = name + "=";
	var ca = document.cookie.split(';');

	for(var i=0;i < ca.length;i++)
	{
		var c = ca[i];
		while (c.charAt(0)==' ') c = c.substring(1,c.length);
		if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
	}
	return null;
}

function eraseCookie(name)
{
	createCookie(name,"",-1);
}

function checkp(value, loc){
                       if(readCookie('path_'+value)){
                            eraseCookie('path_'+value);
                        }
                        else{
                            createCookie('path_'+value,value,'1');
                        }




    }
function checkc(value){
    if(readCookie(value)){
                            check = 'checked';
                        }
                        else{
                            check = '';
                        }
    return check;
    }





function useXML(xmlInfo){
      targetDiv.className="";
      message  = "";

      var infoTags=xmlInfo.getElementsByTagName("directory");
      var loc=infoTags[0].getAttribute("location");
      if(loc == "")
       loc1 = 'Path Root';
      else
       loc1 = loc;

      var newloc1="browser/files_xml.php?dir=" + loc ;

      var stringHTML="<p><b>" + loc1 +"</b> <br /><br /></p>";

      if(loc.indexOf("/")!=-1){
      var newfile="browser/files_xml.php?dir=" + loc.slice(0, loc.lastIndexOf("/"));
      stringHTML=stringHTML+"<p><a href=\"#\" onclick=\"loadXMLDoc('" + newfile +"')\">[Up a level]</a> <a href='#' onclick=\"loadXMLDoc('" + newloc1 +"&amp;act=checkall')\" >[check all]</a> <a href='#' onclick=\"loadXMLDoc('" + newloc1 +"&amp;act=uncheckall')\" >[uncheck all]</a></p><br />"
      }
      if(infoTags[0].hasChildNodes){
            stringHTML=stringHTML+"<ul>";
            for(node=infoTags[0].firstChild; node!=null; node=node.nextSibling){

                  var newloc="browser/files_xml.php?dir=" + loc ;
                  path = loc+"/"+node.firstChild.nodeValue;

                  if(node.nodeName=="file"){

                        stringHTML=stringHTML+"<li class=\"file\"><img src='browser/file.gif' border='0'><input type=checkbox "+node.getAttribute('check')+" onclick=\"loadXMLDoc('" + newloc +"&amp;path="+path+"')\" name=cid[] value='"+path+"'><a href=\"" +node.getAttribute('link')+ "\">"+node.firstChild.nodeValue+"</a></li>";

                  }
                  if(node.nodeName=="message"){


                      message = message + "<a href='#' onclick=\"loadXMLDoc('" + newloc+"&amp;path="+node.firstChild.nodeValue+"')\">"+node.firstChild.nodeValue+"</a><br />";

                      }
                  if(node.nodeName=="folder"){


                        var newfile="browser/files_xml.php?dir=" + loc + "/" + node.firstChild.nodeValue;
                        stringHTML=stringHTML+"<li class=\"folder\"><img src='browser/folder.gif' border='0'><input type=checkbox "+node.getAttribute('check')+" onclick=\"loadXMLDoc('" + newloc +"&amp;path="+path+"')\" name=cid[] value='"+path+"'><a href='#' class=\"folder\" onclick=\"loadXMLDoc('" + newfile+"')\">"+node.firstChild.nodeValue+"</a></li>";
                  }
            }
            stringHTML=stringHTML+"</ul>";
      }
      else{
            stringHTML=stringHTML+"<p>No files in this directory</p>";
      }

      //stringHTML = stringHTML+ "</form>";
      targetDiv.innerHTML= "<table align='right' width='450'><tr><td align='right'><b>" + "Excluded items list:" + "</b><br />"+ message+"</td></tr></table>" + stringHTML ;
}
