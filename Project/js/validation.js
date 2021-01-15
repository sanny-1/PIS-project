function validate_email(field,field_id)
{
	email=field.value;
	apos=email.indexOf('@');
	dotpos=email.lastIndexOf('.');
	if(apos<1 || dotpos-apos<2)
	{
		document.getElementById(field_id).innerHTML="*Invalid Email";
		document.getElementById(field_id).style.color="red";
		field.style.backgroundColor="#FEACB2";
		document.getElementById(field_id).style.fontSize="0.8em";
		field.focus();
	}
	else
	{
		document.getElementById(field_id).innerHTML="";
		field.style.backgroundColor="#FFF";
	}
}

x=""

function validate_pass(field,field_id)
{
	password=field.value
	pattern= /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z0-9])(?!.*\s).{8,15}$/;
	if(!password.match(pattern))
	{
		field.focus();
		document.getElementById(field_id).innerHTML="*Invalid Password<br>Password must be 8-15 characters long and must have an uppercase, a lower case and a numeric value";
		document.getElementById(field_id).style.color="red";
		document.getElementById(field_id).style.fontSize="0.8em";
		field.style.backgroundColor="#FEACB2";
	}
	else
	{
		document.getElementById(field_id).innerHTML="";
		field.style.backgroundColor="#FFF";
		x=password;
	}
}

function confirm_password(password2,field_id)
{
	if(x===(password2.value))
	{
		document.getElementById(field_id).innerHTML="Passwords match";
		document.getElementById(field_id).style.color="green";
		document.getElementById(field_id).style.fontSize="0.8em";
	}
	else
	{
		document.getElementById(field_id).innerHTML="Passwords do not match";
		document.getElementById(field_id).style.color="red";
		document.getElementById(field_id).style.fontSize="0.8em";
		password2.focus();
	}
}

function validate_phone(field,field_id)
{
	phone=field.value;
	pattern=/\d{10,10}/g;
	if(!phone.match(pattern) || phone.length!=10)
	{
		field.focus();
		document.getElementById(field_id).innerHTML="*Invalid Phone Number";
		document.getElementById(field_id).style.color="red";
		document.getElementById(field_id).style.fontSize="0.8em";
		field.style.backgroundColor="#FEACB2";
	}
	else
	{
		document.getElementById(field_id).innerHTML="";
		field.style.backgroundColor="#FFF";
	}
}