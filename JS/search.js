$(document).ready(function(){
    $("#live_search1").keyup(function(){
        var input = $(this).val();

        if(input !=""){
            $.ajax({
                url:"../Control/livesearch.php",
                method:"POST",
                data:{input:input},

                success: function(data){
                    $("#result").html(data);
                    $("#result").css("display","block");
                }
            });
        }else{
            $("#result").css("display","none");
        }
    });
});