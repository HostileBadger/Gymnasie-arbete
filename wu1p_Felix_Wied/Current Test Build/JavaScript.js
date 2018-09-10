/*Form JavaScript*/
window.onload = function() 
{
    document.getElementById("button").onclick = function(e) 
    {
        e.preventDefault();
        myFunction();
    }
}

function myFunction() 
{
    var x = document.forms[0];
    alert("E-mail: " + x.elements[0].value + ", Name: " + x.elements[1].value + ", Comment: " + x.elements[2].value);
    document.getElementById("frm").reset();

}