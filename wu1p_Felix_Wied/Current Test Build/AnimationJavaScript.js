window.onload = function() 
{
    //The onClick animation 
    $("#OnclickAnimation").click(function() 
    {
                                    //Toggles it to the second class
        $('.OnClicktransform').toggleClass('OnclickAnimationOn');
    });

    //The Hover animation 
    $("#HoverAnimation").hover(function() 
    {
                                    //Toggles it to the second class
        $('.Hovertransform').toggleClass('HoverAnimationOn');
    });
}