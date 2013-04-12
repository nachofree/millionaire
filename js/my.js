
$(document).ready(function(){
    
    /*if they click an answer, take care of it*/
    
    
    $("#question > p").click(function(){
        //correct_answer = question_something
        //alert(correct_answer)
        if(this.id === correct_answer){
            //$("#got_correct").toggle();
            $( "#got_correct" ).dialog(
            {
                open: function(event, ui) {
                    $(".ui-dialog-titlebar-close").hide();
                },
                modal: true
            });
        }
        else
        {
            //$("#got_incorrect").dialog({modal: true});
            //$( "#got_incorrect" ).dialog( "option", "buttons", { "Ok": function() { $(this).dialog("close"); } } );
            $( "#got_incorrect" ).dialog({
                open: function(event, ui) {
                    $(".ui-dialog-titlebar-close").hide();
                },
                modal: true
            });

        }
        
    })
    
    /**********************************************************
    Check to see what level they are on.  Set the approprate
    class on money tree
    For some reason, slice never selected the last value
    **********************************************************/
   
    $('#level li:last').addClass("achieved");
    turn_count = turn_count * -1;
    $('#level li').slice(turn_count, -1).addClass("achieved");
    
    
    /**********************************************************
     * play again functionality
     * 
     * 
     * 
     **********************************************************/
    $('#play_again').click(function(){
       //destroy php session?  send back to that page
       window.location.replace("./index.php?session=destroy");
    });
    
    $('#continue').click(function(){
       //destroy php session?  send back to that page
       window.location.replace("./index.php");
    });
   
});


