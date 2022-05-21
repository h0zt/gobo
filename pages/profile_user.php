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
                <div class="user-picture"></div>
                <div class="user-name">TAKONDWA LABANA</div>
                <div class="user-address">zingwangwa</div>
                <div class="user-contact">0387234</div>
            </div>

            <div class="post">
                <div id="post-what">
                    <p>separate what you can do <br> with cammas</p>
                    <div class="input-content">
                        <span id="input">js <button>exit</button></span>
                        <span id="input">
                            <input type="text" name="post-what"
                            placeholder="add work" value=""> 
                            <button>input</button>
                        </span>
                        
                    </div>
                </div>
                <div id="post-what">
                    <p>what have you worked one <br> with cammas</p>
                    <div class="input-content">
                        <span id="input">js</span>
                        <span id="input">jsfdafda</span>
                        <span id="input">js</span>
                        <span id="input">
                            <input type="text" name="post-what"
                            placeholder="add work" value=""> 
                            <button>input</button>
                        </span>
                    </div>
                </div>
                <div id="post-what">
                    <p>what have you <br>
                        worked on with clients</p>
                    <div class="input-content">
                        <input id="input" type="file" name="post-what"
                            placeholder="file">
                        <span id="input">js</span>
                        <span id="input">jsfdafda</span>
                        <span id="input">jsdfadfaddf</span>
                        <span id="input">jsfdafda</span>
                        <span id="input">jsdfadfaddf</span>
                        <span id="input">
                            <input type="text" name="post-what"
                            placeholder="add work" value=""> 
                            <button>input</button>
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
                            <button class="">input</button>
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


    <!--ajax--->
    <script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
    <script src="resources/main.js">
    </script>
</body>
</html>