<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href = "res/css/loginpage.css" />
    <title>Document</title>
</head>
<body>
    <div class="page">
        <div class="container">
            <div class="left">
                <div class="login">Login</div>
                <div class="welcome">
                    <p>hello</p>
                </div>
                <svg viewBox="0 0 320 300">
                    <defs>
                        <linearGradient
                            inkscape:collect="always"
                            id="linearGradient"
                            x1="13"
                            y1="193.49992"
                            x2="307"
                            y2="193.49992"
                            gradientUnits="userSpaceOnUse">
                            <stop
                                style="stop-color:#ff00ff;"
                                offset="0"
                                id="stop876" />
                            <stop
                                style="stop-color:#ff0000;"
                                offset="1"
                                id="stop878" />
                        </linearGradient>
                    </defs>
                    <path d="m 40,120.00016 239.99984,-3.2e-4 c 0,0 24.99263,0.79932 25.00016,35.00016 0.008,34.20084 -25.00016,35 -25.00016,35 h -239.99984 c 0,-0.0205 -25,4.01348 -25,38.5 0,34.48652 25,38.5 25,38.5 h 215 c 0,0 20,-0.99604 20,-25 0,-24.00396 -20,-25 -20,-25 h -190 c 0,0 -20,1.71033 -20,25 0,24.00396 20,25 20,25 h 168.57143" />
                </svg>
                <div class="form">
                    <form action = "loginpage" method = "POST">
                    <!-- cross-site request forgery -->
                    @csrf
                    <label for="number">Number</label>
                    <input class = "log" type="text" id="number" name = "number">
                    <label for="password">Password</label>
                    <input class = "log" type="password" id="password">
                    <input class = "log" type="submit" id="submit" value="Submit">
                    </form>
                </div>
            </div>
            <div class="right">
                <div class="eula">
                    <img src = "images/logo.png" class = "logo">
                </div>
            </div>
        </div>
    </div>
</body>
<script src = "res/js/loginpage.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js"></script>
</html>

