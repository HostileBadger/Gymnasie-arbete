/*Form JavaScript*/
window.onload = function() 
{
    document.getElementById("button").onclick = function(e) 
    {
        e.preventDefault();
        myFunction();
    };


};

function myFunction() 
{
    var x = document.forms[0];
    alert("E-mail: " + x.elements[0].value + ", Name: " + x.elements[1].value + ", Comment: " + x.elements[2].value +
    ". Because i don't have anywhere to send this information i'm just using an alert to display that the form works as intended. If you want to actualy send it somewhere you just put the 'send code' in place of this alert.");
    document.getElementById("frm").reset();
};