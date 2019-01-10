buttonList = document.getElementsByClassName("inputFields");
alert("buttonList.length=" + buttonList.length);
for (var i = 0; i < buttonList.length; i++)
{
    buttonList.item(i).addEventListener("change", displayDate);
}
function displayDate() 
{
    alert("hej");
    //buttonList.item();

//////////////////////Fixa så att alla php variabler är förståliga för JavaScript!!!!!!//////////////////////////

    if(($user_email=="hej")||($user_pwd=="hej")||($user_first=="hej")||($user_last=="hej")||($user_uid=="hej"))
    {
        alert("Illegal Character Detected");
        document.getElementById("demo").innerHTML = "hej";
    }

}
/*
//Illegal character check
console.log("hej");

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
}*/