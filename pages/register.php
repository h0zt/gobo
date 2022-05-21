<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../resources/gobo.png" type="image/x-icon">
    <title>Login</title>
    <link rel="stylesheet" href="../resources/style.css">
    <link rel="stylesheet" href="../resources/ionicons/css/ionicons.css">


</head>
<body>


    <!--all=contents-->
    <main>
        <section id="login_form">
        <div class="back">
            <a href="../index.html"><< back</a>
        </div>
            <form id="registration_form">
                <input id="fname" type="text" placeholder="full name" name="name">
                <input id="email-phone" type="text" placeholder="email/phonenumber" name="uname">
                <input id="pwd" type="password" placeholder="password" name="pwd">
                <input id="cpwd" type="password" placeholder="confirm password" name="cpwd">

                <button type="submit" id="btn_register" class="btn btn-success>register</button>

                <div id="login_more">
                    
                    <a href="login.php">login</a>
                        </br>
                    <a href="#">forgot password</a>
                </div>
            </form>
        </section>

    </main>

    <script src="../jquery-3.6.0.min.js"><script>

    <script>
         $(document).on('click','#btn_register',function(e){
             e.preventDefault();

             var username = $('#fname').val();
             var email-phone = $('#email-phone').val();
             var password = $('#pwd').val();
             var cpassword = $('#cpwd').val();

             var atpos = email.indexOf('@');
             var dotpos = email.lastIndexOf('.com');

             if(username == '') 
             {
                 // check full name not empty}
                 alert('please enter username !!');
             }
             else if (!/^[a-z A-Z]+$/.test(username))
             {
                 // check username allowed capital and small letter
                 alert('username only capital and small letters are allowed !!');
             }
             else if(email == '')
             {
                 //check email not empty
                 alert('please enter email address !!');
             }
             else if(atpos < 1 || dotpos < atpos + 2 || dotpos + 2 >= email.length)
             {
                 //check valid email format
                 alert('please enter valid email address !!');
             }
             else if(password == '')
             {
                 alert('please enter password !!');
             }
             else if(password.length < 6)
             {
                 //check password value length six
                 alert('password lenght must be 6 or greater !!');
             }
             else{
                 $.ajax({
                     url: 'process.php ',
                     type: 'post',
                     data:
                        {newusername:username,
                         newemail.email,
                         newpassword:password
                        },
                    success: function(response)
                    {
                        $('#message').html(response);
                    }
                 });

                 $('#registration_form')[0].reset();
            }
         });
    </script>
    
</body>


</html>

