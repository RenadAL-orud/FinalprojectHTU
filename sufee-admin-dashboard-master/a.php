
<html>
    <head>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function()
            {
                $("#userId").keyup(function()
                {
                    //get selected parent option 
                    var admin_id = $("#userId").val();
                    alert(admin_id);
                    $.ajax(
                            {
                                type: "GET",
                                url: "namesss.php?admin_id=" + admin_id,
                                 
                                success: function(data)
                                {
                                    
                                    $("#names").append(data);
                                    
                                }
                            });
                });

            });
        </script>
       
    </head>
    <body>        
        
        <form action="ajax23.php" method="post">
            <input type="text" name='userId' id='userId'>
             <table class="table">
 
    <tr>
      <p scope="row" id="names" ></p>
     
    </tr>
    
  </tbody>
</table>
        </form> 
    </body>
</html>    
