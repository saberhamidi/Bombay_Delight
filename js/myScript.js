$("document").ready(function(){
	
	$("#chanPass").fancybox();
});

function deliveryMethod(){
	$("document").ready(function(){
		if($("#total").length===1){
			var dm =$('input[name=method]:checked').val();
			
			if(dm === "delivery" && parseFloat($("#total").text()) <12){ 	
				$("#checkout").attr( "disabled", "disabled");
				document.getElementById("minDelivery").innerHTML ="You need to spend &pound12.00 or more to order for delivery!";
			}
			
			else{
				
				if(document.getElementById("checkout").hasAttribute("disabled")){
					
					$("#checkout").removeAttr("disabled");
					document.getElementById("minDelivery").innerHTML ="";
				}
			}
		}

	})
}

function process(id) {
  if (id=="") {
    document.getElementById("items").innerHTML="";
    return;
  }
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else { // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
      document.getElementById("items").innerHTML=xmlhttp.responseText;
    }
  }
  var d_method = $('input[name=method]:checked').val();
  xmlhttp.open("GET","includes/shoppingCard.php?id="+id+"&method="+d_method,true);
  xmlhttp.send();
}

function removeItem(id){
	  if (id=="") {
    document.getElementById("items").innerHTML="";
    return;
  }
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else { // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
      document.getElementById("items").innerHTML=xmlhttp.responseText;
    }
  }
  var d_method = $('input[name=method]:checked').val();
  xmlhttp.open("GET","includes/removeItem.php?id="+id+"&method="+d_method,true);
  xmlhttp.send();
}

function setError(elm){
	elm.setAttribute("style","color:red");
};
						
function setCorrect(elm){
	 elm.setAttribute("style","color:black");
};

function validateRegister(form){
				var firstName=form.Fname.value.trim();
				var lastName=form.Lname.value.trim();
				var email=form.email.value.trim();
				var cemail=form.cemail.value.trim();
				var index=email.indexOf("@");
				var password=form.password.value.trim();
				var cpassword = form.cpassword.value.trim();
				var tel = form.tel.value.trim();
				var house = form.house.value.trim();
				var street = form.street.value.trim();
				var town = form.town.value.trim();
				var post = form.post.value.trim();
				
				var validated =true;
							
				if(firstName.length<=0){
				    setError(document.getElementById("Fname"));
				    validated=false;
				    }
							
				else{
				    setCorrect(document.getElementById("Fname"));
				    }
				    
				    
				if(lastName.length<=0){
				    setError(document.getElementById("Lname"));
				    validated=false;
				    }
							
				else{
				    setCorrect(document.getElementById("Lname"));
				    }
			       
				if(isNaN(firstName)){
				    setCorrect(document.getElementById("Fname"));
				}
				
				else{
				    setError(document.getElementById("Fname"));
				    validated=false;
				    }
				    
				if(isNaN(lastName)){
				    setCorrect(document.getElementById("Lname"));
				}
				
				else{
				    setError(document.getElementById("Lname"));
				    validated=false;
				    }
				
				if(email.length<=0){
				    setError(document.getElementById("email"));
				    validated=false;
				    }
				else{
				    setCorrect(document.getElementById("email"));
				    }
					
				if(index==-1){
				    setError(document.getElementById("email"));
				    validated=false;
				    }
				else{
				    setCorrect(document.getElementById("email"));
				    }
					
					if(cemail.length<=0){
				    setError(document.getElementById("cemail"));
				    validated=false;
				    }
				else{
				    setCorrect(document.getElementById("cemail"));
				    }
				if(password.length<=0){
				    setError(document.getElementById("password"));
				    validated=false;
				    }
							
				else{
				    setCorrect(document.getElementById("password"));
				    }
				if(cpassword.length<=0){
				    setError(document.getElementById("cpassword"));
				    validated=false;
				    }
							
				else{
				    setCorrect(document.getElementById("cpassword"));
				    }
				if(isNaN(tel)){
				    setError(document.getElementById("tel"));
				    validated=false;
				    }
							
				else{
				    setCorrect(document.getElementById("tel"));
				    }
				if(tel.length<=0){
				    setError(document.getElementById("tel"));
				    validated=false;
				    }		
				else{
				    setCorrect(document.getElementById("tel"));
				    }   
				if(house.length<=0){
				    setError(document.getElementById("house"));
				    validated=false;
				    }
							
				else{
				    setCorrect(document.getElementById("house"));
				    }
				if(street.length<=0){
				    setError(document.getElementById("street"));
				    validated=false;
				    }
							
				else{
				    setCorrect(document.getElementById("street"));
				    }
				if(isNaN(street)){
				    setCorrect(document.getElementById("street"));
				}
				
				else{
				    setError(document.getElementById("street"));
				    validated=false;
				    }
				if(town.length<=0){
				    setError(document.getElementById("town"));
				    validated=false;
				    }
							
				else{
				    setCorrect(document.getElementById("town"));
				    }
				if(isNaN(town)){
				    setCorrect(document.getElementById("town"));
				}
				
				else{
				    setError(document.getElementById("town"));
				    validated=false;
				    }
				if(post.length<=0){
				    setError(document.getElementById("post"));
				    validated=false;
				    }
							
				else{
				    setCorrect(document.getElementById("post"));
				    }
				    
	return validated;
};

function validateSignIn(form){
	
	var validated =true;
	var userName=form.userName.value.trim();
	var password=form.password.value.trim();
				
	if(userName.length<=0){
		setError(document.getElementById("user"));
		validated=false;
		}
							
		else{
			setCorrect(document.getElementById("user"));
			}
				    
				    
	if(password.length<=0){
			setError(document.getElementById("pass"));
			validated=false;
			}
							
		else{
			setCorrect(document.getElementById("pass"));
			}
		   
	return validated;

}