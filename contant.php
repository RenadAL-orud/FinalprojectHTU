<?php 

?>
<!DOCTYPE html>
<html>
<head>
     <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <style>


.container {
  border: 2px solid #dedede;
  background-color: #f1f1f1;
  border-radius: 5px;
  padding: 10px;
  margin: 10px 0;
}

.darker {
  border-color: #ccc;
  background-color: #ddd;
}


.container img {

  max-width: 60px;
  width: 6%;
  margin-right: 20px;
  border-radius: 50%;
  margin-left: 12px;
}

p{
        font-family: cursive
}
input {
    border: solid;
    border-radius: 23px;
     font-family: cursive
}
}
</style>
    <title></title>



</head>
<body>


<div class="container">
  
  <p>
Hello Customer, you have Options to contact Us<img src="images/face.png"></p>
  
  <input type="submit" name="Send" id="WorkingHours" value="WorkingHours" onclick="WorkingHours()"> 

  <input type="submit" name="Send" id="Phone" value="Phone"onclick="Phone()"> 
  <input type="submit" name="Send" id="Email" value="Email" onclick="Email()"> 
  <input type="submit" name="Send" id="Location" value="Location" onclick="Location()"> 
  <p id="demo"></p>
</div>



















</body>
</html>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
       <script>
function Phone() {
  var greeting;
 var Phone= $("#Phone").val();

      $.ajax(
                            {
                                type: "POST",
                                url: "chat.php",
                                data :
                                {
                                     "Phone":Phone,
                                     
                                },
                                  success: function(response)
                                {
                               console.log(response);
                                  document.getElementById("demo").innerHTML = response;
                              

                            
                                } 


                            });

}

function Email() {
  var greeting;
 var Email= $("#Email").val();

      $.ajax(
                            {
                                type: "POST",
                                url: "chat.php",
                                data :
                                {
                                     "Email":Email,
                                     
                                },
                                  success: function(response)
                                {
                               console.log(response);
                                  document.getElementById("demo").innerHTML = response;
                              

                            
                                } 


                            });

}


function Location() {
  var greeting;
 var Location= $("#Location").val();

      $.ajax(
                            {
                                type: "POST",
                                url: "chat.php",
                                data :
                                {
                                     "Location":Location,
                                     
                                },
                                  success: function(response)
                                {
                               console.log(response);
                                  document.getElementById("demo").innerHTML = response;
                              

                            
                                } 


                            });

}

function WorkingHours() {
  var greeting;
 var WorkingHours= $("#WorkingHours").val();
   console.log(WorkingHours);
      $.ajax(
                            {
                                type: "POST",
                                url: "chat.php",
                                data :
                                {
                                     "WorkingHours":WorkingHours,
                                     
                                },
                                  success: function(response)
                                {
                               console.log(response);
                                  document.getElementById("demo").innerHTML = response;
                              

                            
                                } 


                            });

}




</script>
