<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Portfolio</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
    crossorigin="anonymous" />
    <style>
        *{
            margin: 0;
            padding: 0;
        }
        .hero {
            height: 100vh;
            width: 100%;
            background: #edf2fc;
            font-family: sans-serif;
            position: relative;
        }
        nav {
            width: 84%;
            margin: auto;
            padding: 20px 0;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        .logo {
            width: 100px;
            cursor: pointer;
        }
        nav ul li {
            display: inline-block;
            list-style: none;
            margin: 10px 20px;
        }
        nav ul li a {
            text-decoration: none;
            color:#606163;
        }
        nav ul li a:hover {
            color: #ff4321;
            
        }
        .info {
            margin-left: 8%;
            margin-top: 15%;
        }
        .info h1 {
            font-size: 70px;
            color: #212121;
            margin-bottom: 20px;
        }
        span {
            color: #ff4321;
        }
        .info p {
            color: #606163;
            line-height: 22px;
        }
        .info a {
            background: #212121;
            padding: 10px 18px;
            text-decoration: none;
            color: #fff;
            display: inline-block;
            margin: 30px 0;
            border-radius: 5px;
        }
        .img-box {
            width: 45%;
            height: 80%;
            position: absolute;
            bottom: 0;
            right: 100px;
        }
        .img-box img {
            height: 100%;
            position: absolute;
            left: 50%;
            bottom: 0;
            transform: translateX(-50%);
            transition: bottom 1s, left 1s;
        }
        .img-box:hover .back-img {
            bottom: 40px;
        }
        .img-box:hover .main-img {
            left: 54%;
        }
        .social-links {
            margin-left: 8%;
            margin-top: 100px;
        }
        .social-links a {
            font-size: 30px;
            color: #606163;
            margin-right: 20px;
        }
        .social-links a:hover {
            color: #ff4321;
        }
    </style>
</head>
<body>
    <div class="hero">
        <nav>
            <img src="{{ asset('/assets/images/portfolio/logo.png') }}" alt="logo" class="logo">
            <ul>
                <li><a href="">HOME</a></li>
                <li><a href="">ABOUT</a></li>
                <li><a href="">PORTFOLIO</a></li>
                <li><a href="">SERVICES</a></li>
                <li><a href="">HIRE ME</a></li>
            </ul>
        </nav>
        <div class="info">
            <h1>I'm <span>Ali</span> Raza</h1>
            <p>This is my official portfolio website to showcase my
            all works related to web<br>development and UI design.</p>
            <a href="#">Download CV</a>
        </div>
        <div class="img-box">
            <img src="{{ asset('assets/images/portfolio/pattern.png') }}" alt="" class="back-img">
            <img src="{{ asset('assets/images/portfolio/girl.png') }}" alt="" class="main-img">
        </div>
        <div class="social-links">
            <a href="#"><i class="fab fa-linkedin-in"></i></a>
            <a href="#"><i class="fab fa-github"></i></a>
            <a href="#"><i class="fab fa-stack-overflow"></i></a>
        </div>
    </div>
</body>
</html>