buttonList = document.getElementsByClassName("inputFields");
alert("buttonList.length=" + buttonList.length);
for (var i = 0; i < buttonList.length; i++)
{
    buttonList.item(i).addEventListener("change", checkCharacters);
}

function checkCharacters()
{
    //buttonList.item();
        //Alerts what is written in the field nr 0.
    //alert(document.getElementsByClassName("inputFields")[0].value);    
    var letters = /^[A-Za-z]+$/;
    for(i = 0; i < 5; i++)
    {
        inputtxt = document.getElementsByClassName("inputFields")[i].value;
        if(inputtxt.value.match(letters))
        {
            alert("Illegal Character Detected");
            document.getElementById("demo").innerHTML = "test";
        }
    }
}

//Define a variable as "document.getElementsByClassName("inputFields")[i].value" Then subject the 
//variable to a function that searches for a specific character. Inside of the search parenthesis 
//have an array which contains the illegal characters and loop through all of the elements in the array.