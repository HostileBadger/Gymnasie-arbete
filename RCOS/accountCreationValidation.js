//Illegal character check
echo("hej");
return;

if(($user_email||$user_pwd||$user_first||$user_last||$user_uid)=="hej")
{
    echo("Illegal character. ")
    return;
}

//Email validation
if(!filter_var($user_email, FILTER_VALIDATE_EMAIL))
{
    echo("$user_email is not a valid email address!");
    echo("<br>");
    return;
}