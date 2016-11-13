<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Chat</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
  </head>
  <body>
  <div class="container-fluid">
	<section style="padding: 15%;">
	    <div class="row">
	        <h1>Chat:<small>Welcome to my chat</small></h1>
	    </div>
	    <div class="row">
            <form id="formChat" role="form">
                <div class="form-group">
                    <label for="user">USER</label>
                    <input type="text" id="user" name="user" class="form-control" placeholder="enter your name"/>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-12">
                            <div id="conversation" style="height:200px;border:1px solid #ccc;padding:12px;border-radius:5px;overflow-x: hidden;">
                                
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea id="message" class="form-control" placeholder="Enter Message" name="message" rows="3"></textarea>
                </div>
                <button class="btn btn-primary" id="send">Send</button>
            </form>
	    </div>
	</section>
  </div>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>		
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	<script>
      $(document).on("ready", function(){
        registerMessages();  
        $.ajaxSetup({"cache":false});
        setInterval("loadOldMessages()" , 500);
      });
        
        var registerMessages = function(){
        $("#send").on("click", function(e){
            e.preventDefault();
            var frm = $("#formChat").serialize();
            $.ajax({
                type:"POST",
                url:"register.php",
                data:frm
            }).done(function(info){
                console.log(info);
            })  
        });
        }
        
        var loadOldMessages = function(){
            $.ajax({
                type:"POST",
                url:"conversation.php"
            }).done(function(info){
                $("#conversation").html(info);
                $("#conversation p:last-child").css({"background-color":"lightgreen","padding-bottom":"20px"});
            });
        }
    </script>
  </body>
</html>