<?php
    session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <input type="text" id="username" placeholder="username"> <br>
   <input type="password" id="password" placeholder="password"><br>
    <button type="button" id="btn-login"> Login</button>
    <script type="text/javascript" src="http://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript">
        
            $(document).ready(function(){
                $('#btn-login').click(function(){

                    var bangtiray={
                        username : $('#username').val(),
                        password : $('#password').val(),
                    }
                    $.ajax({
                        url:"login.php",
                        type:"POST",
                        data: bangtiray,
                        success:function(data){
                            var obj= $.parseJSON(data);

                            if(obj.status===1){
                                window.open('home.php','_self');
                            }else{
                                alert(obj.error);
                            }

                        }
                    })
                })
            })
            
            </script>
    </body>
</html>