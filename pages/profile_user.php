
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../resources/gobo.png" type="image/x-icon">
    <title>gobo</title>
    <link rel="stylesheet" href="../resources/style.css">
    <link rel="stylesheet" href="../resources/ionicons/css/ionicons.css">
</head>
<body>
    <!--header====-->
    <div id="header">
        <header>
            <img src="../resources/gobo.png" alt="gobo-logo">
            <nav>
                <a href="">About</a>
                <a href="" class="active">profile</a>
            </nav>
            <nav id="openbars">
               <div class="bars"></div>
               <div class="bars"></div>
               <div class="bars"></div>
            </nav>
        </header>  
    </div>     


    <!--all=contents-->
    <main>
        <section id="about">
            <div class="user">
                <div id="user_picture"></div>
                <div id="user_name" class="input-profile">
                    <input type="text" id="input_user_name" value="TAKONDWA">
                </div>
                <div id="user_address" class="input-profile">
                    <input type="text" id="input_user_address" value="zingwangwa">
                </div>
                <div id="user_contact" class="input-profile">
                    <input type="text" id="input_user_contact" value="03823423423">
                </div>
                <button class="ion-edit" id="edit_profile_btn">edit</button>
                <div id="result"></div>
            </div>

            <div class="post">
                <div id="post-what">
                    <p>separate what you can do <br> with cammas</p>
                    <div class="input-content">
                        <span id="input" class="value">js<button class="ion-close"></button></span>
                        <span id="input">
                            <input type="text" id="input_skill" placeholder="add work" > 
                            <button class="ion-plus" id="add_skill_btn"></button>
                        </span>
                    </div>
                </div>
                <div id="post-what">
                    <p>what have you <br>
                        worked on with clients</p>
                    <div class="input-content">
                        <input id="file" name="file" type="file" placeholder="file">
                        <span id="input" class="value">js<button class="ion-close"></button></span>
                        <span id="input">
                            <input type="text" id="input_work" placeholder="add work"> 
                            <button class="ion-plus" id="add_work_btn"></button>
                        </span>

                    </div> 
                    <div class="post-what-content">
                        <div class="post-image"
                            style="background-image: 
                            url('../resources/garden.jpg')"></div>
                        <i class="post-text">working at-Mr phiri -farm</i>
                        <span id="add-text">
                            <textarea type="text" name="post-what"
                            placeholder="add work" value="">
                            </textarea>
                            <button class="ion-plus"></button>
                        </span>
                        
                    </div>
                    
                </div>
                
            </div>
        </section>

   

    </main>


    <!--contact details-->
    <footer>
        <h1>contacts</h1>
        <a href="">phone</a>
        <a href="">facebook</a>
        <a href="">email</a>
        <p></p>
    </footer>


    <p id="id"></p>
    
    <!--ajax--->
    <script src="../resources/jquery-3.6.0.min.js"></script>
    <script src="../resources/main.js">
    </script>
</body>
</html>