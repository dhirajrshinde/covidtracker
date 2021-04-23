 function ValidateForm(form){
ErrorText= "";
if ( ( form.rating1[0].checked == false ) && ( form.rating1[1].checked == false ) )
{
alert ( "Please select rating" );
return false;
}
if (ErrorText= "") { form.submit() }
}
