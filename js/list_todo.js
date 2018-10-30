var x = 1;
var y = 2;
var z;
var max = 10;
$(document).ready(function(){
    $("#add").click(function(){
        if (x < max){
            $("#end").before("<form class=" + y + " style=display:none> <input class=prio type=text> <input class=name type=text> <input class=desc type=text> <button type=button class='btn remove-button' id=" + y + ">Verwijderen</button> </form> <br class=" + y + ">");
            $("." + y).slideDown("fast");
            x++;
            y++;           
        };
    });
});

$(document).on("click", ".remove-button", function(){
    z = $(this).attr("id");
    x--;    
    $("." + z).slideUp("fast", function(){
        $(this).remove();
    });
});