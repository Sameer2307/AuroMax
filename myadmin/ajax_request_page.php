<script type="text/javascript">
function dynamic_subcat(type,val)
{   
    //alert(val); 
	 if (window.XMLHttpRequest)
	  {// code for IE7+, Firefox, Chrome, Opera, Safari
	  xmlhttp=new XMLHttpRequest();
	  }
	else
	  {// code for IE6, IE5
	  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	  }
	xmlhttp.onreadystatechange=function()
	  {
	  if (xmlhttp.readyState==4 && xmlhttp.status==200)
	  {
		document.getElementById("dynamic_subcat").innerHTML=xmlhttp.responseText;
		
		document.getElementById("dynamic_subcat").style.border="0";
		}
	  }
	 //alert("search_state.php?type="+type+"&val="+val+"&status="+status);
xmlhttp.open("GET","dynamic_subcat.php?type="+type+"&val="+val,true);
xmlhttp.send();
	
}
</script>