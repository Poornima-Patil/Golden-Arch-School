function user(){
if(document.reg_form.username.value=="")
    {
        document.reg_form.username.style.borderColor='red';
		document.reg_form.username.style.borderWidth='thin';
		return false;
    }
}
function pass(){
if(document.reg_form.password.value=="")
    {
        document.reg_form.password.style.borderColor='red';
		document.reg_form.password.style.borderWidth='thin';
		return false;
    }
}
function fname(){
if(document.reg_form.first_name.value=="")
    {
        document.reg_form.first_name.style.borderColor='red';
		document.reg_form.first_name.style.borderWidth='thin';
		return false;
    }
}
function mname(){
if(document.reg_form.middle_name.value=="")
    {
        document.reg_form.middle_name.style.borderColor='red';
		document.reg_form.middle_name.style.borderWidth='thin';
		return false;
    }
}
function lname(){
if(document.reg_form.last_name.value=="")
    {
        document.reg_form.last_name.style.borderColor='red';
		document.reg_form.last_name.style.borderWidth='thin';
		return false;
    }
}
function emails(){
if(document.reg_form.email.value=="")
    {
        document.reg_form.email.style.borderColor='red';
		document.reg_form.email.style.borderWidth='thin';
		return false;
    }
}
function mobiles(){
if(document.reg_form.mobile.value=="")
    {
        document.reg_form.mobile.style.borderColor='red';
		document.reg_form.mobile.style.borderWidth='thin';
		return false;
    }
}
function educations(){
if(document.reg_form.education.value=="")
    {
        document.reg_form.education.style.borderColor='red';
		document.reg_form.education.style.borderWidth='thin';
		return false;
    }
}
function programs(){
if(document.reg_form.program.value=="")
    {
        document.reg_form.program.style.borderColor='red';
		document.reg_form.program.style.borderWidth='thin';
		return false;
    }
}


function echeck(str) {

		var at="@"
		var dot="."
		var lat=str.indexOf(at)
		var lstr=str.length
		var ldot=str.indexOf(dot)
		if (str.indexOf(at)==-1){
		   alert("Invalid E-mail ID");
		   return false
		}

		if (str.indexOf(at)==-1 || str.indexOf(at)==0 || str.indexOf(at)==lstr){
		   alert("Invalid E-mail ID");
		   return false
		}

		if (str.indexOf(dot)==-1 || str.indexOf(dot)==0 || str.indexOf(dot)==lstr){
		    alert("Invalid E-mail ID");
		    return false
		}

		 if (str.indexOf(at,(lat+1))!=-1){
		    alert("Invalid E-mail ID");
		    return false
		 }

		 if (str.substring(lat-1,lat)==dot || str.substring(lat+1,lat+2)==dot){
		    alert("Invalid E-mail ID");
		    return false
		 }

		 if (str.indexOf(dot,(lat+2))==-1){
		    alert("Invalid E-mail ID");
		    return false
		 }
		
		 if (str.indexOf(" ")!=-1){
		    alert("Invalid E-mail ID");
		    return false
		 }

 		return true; 					
	}


function submitform(formname){
		var formname;
		if(formname.username.value!=''){
			var uname = formname.username.value;
			if(uname.length > 5 && uname.length < 21){
				if(formname.password.value!=''){
					var pword = formname.password.value;
					if(pword.length > 7 && pword.length < 21){
						if(formname.first_name.value!=''){
							if(formname.last_name.value!=''){
								if(echeck(formname.email.value)){
									if(!isNaN(formname.mobile.value) && formname.mobile.value!=''){
										var mob = formname.password.value;
										if(mob.length < 16){
											if(formname.education.value!=''){
												if(formname.program.value!=''){
													}
												else{
													alert('You must enter a correct mobile');
													return false;
													}
												}
											else{
												alert('You must enter a education');
												return false;
												}
											}
										else{
											alert('You must enter a mobile lower the 15 ');
											return false;
											}
										}
									else{
										alert('You must enter a mobile');
										return false;
										}
									}
								else{
									alert('You must enter a email');
									return false;
									}
								}
							else{
								alert('You must enter a last name');
								return false;
								}
							}
						else{
							alert('You must enter a first name');
							return false;
							}
						}
					else{
						alert('You must enter a password above 8 and lower than 21');
						return false;
						}
					}
				else{
					alert('You must enter a password');
					return false;
					}
				}
			else{
				alert('You must enter a username above 6 and lower than 21');
				return false;
				}
			}
		else{
			alert('You must enter a username');
			return false;
			}
		
		
 }




