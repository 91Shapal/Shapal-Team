<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Kaushan+Script|Montserrat:400,700&amp;subset=cyrillic-ext" rel="stylesheet">
    <title>Shapal Industry</title>
</head>
<body>


<header class="header">
    <div class="container">
        <div class="header__inner">
            <div class="header__logo">CSC-20B</div>

            <nav class="nav">
                <a class="nav__link active" href="#">About</a>
                <a class="nav__link" href="#">Service</a>
                <a class="nav__link" href="#">Blog</a>
                <a class="nav__link" href="#">Work</a>
                <a class="nav__link" href="#">Contact</a>
            </nav>
        </div>
    </div>
</header>


<div class="intro">
    <div class="container">
        <div class="intro__inner">
            <h2 class="intro__suptitle">Welcome To</h2>
            <h1 class="intro__title">Shapal Industry</h1>

            <a class="btn" href="#">Learn More</a>
        </div>
    </div>

    <div class="slider">
        <div class="container">
            <div class="slider__inner">
                <div class="slider__item active">
                    <span class="slider__num">01</span>
                    Intro
                </div>
                <div class="slider__item">
                    <span class="slider__num">02</span>
                    Work
                </div>
                <div class="slider__item">
                    <span class="slider__num">03</span>
                    About
                </div>
                <div class="slider__item">
                    <span class="slider__num">04</span>
                    Contacts
                </div>
            </div>
        </div>
    </div>
</div>


</body>
</html>
body {
    margin: 0;
    font-family: 'Montserrat', sans-serif;

    font-size: 15px;
    line-height: 1.6;
    color: #333;
}

*,
*:before,
*:after {
    box-sizing: border-box;
}

h1, h2, h3, h4, h5, h6 {
    margin: 0;
}


/* Container */
.container {
    width: 100%;
    max-width: 1200px;
    margin: 0 auto;
}



/* Intro */
.intro {
    display: flex;
    flex-direction: column;
    justify-content: center;
    width: 100%;
    height: 100vh;

    background: url("../images/intro.jpg") center no-repeat;
    -webkit-background-size: cover;
    background-size: cover;
}

.intro__inner {
    width: 100%;
    max-width: 880px;
    margin: 0 auto;

    text-align: center;
}

.intro__title {
    color: #fff;
    font-size: 150px;
    font-weight: 700;
    text-transform: uppercase;
    line-height: 1;
}

.intro__title:after {
    content: "";
    display: block;
    width: 60px;
    height: 3px;
    margin: 60px auto;

    background-color: #fff;
}

.intro__suptitle {
    margin-bottom: 20px;

    font-family: 'Kaushan Script', cursive;
    font-size: 72px;
    color: #fff;
}


/* Header */
.header {
    width: 100%;
    padding-top: 30px;

    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    z-index: 1000;
}

.header__inner {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.header__logo {
    font-size: 30px;
    font-weight: 700;
    color: #fff;
}


/* Nav */
.nav {
    font-size: 14px;
    text-transform: uppercase;
}

.nav__link {
    display: inline-block;
    vertical-align: top;
    margin: 0 15px;
    position: relative;

    color: #fff;
    text-decoration: none;

    transition: color .1s linear;
}

.nav__link:after {
    content: "";
    display: block;
    width: 100%;
    height: 3px;

    background-color: #fce38a;
    opacity: 0;

    position: absolute;
    top: 100%;
    left: 0;
    z-index: 1;

    transition: opacity .1s linear;
}

.nav__link:hover {
    color: #fce38a;
}

.nav__link:hover:after,
.nav__link.active:after {
    opacity: 1;
}

.nav__link.active {
    color: #fce38a;
}


/* Button */
.btn {
    display: inline-block;
    vertical-align: top;
    padding: 8px 30px;

    border: 3px solid #fff;

    font-size: 14px;
    font-weight: 700;
    color: #fff;
    text-transform: uppercase;
    text-decoration: none;

    transition: background .1s linear, color .1s linear;
}

.btn:hover {
    background-color: #fff;
    color: #333;
}



/* Slider */
.slider {
    width: 100%;

    position: absolute;
    bottom: 0;
    left: 0;
    z-index: 1;
}

.slider__inner {
    display: flex;
    justify-content: space-between;
}

.slider__item {
    width: 23%;
    padding: 20px 0;
    position: relative;

    border-top: 3px solid #fff;
    opacity: .7;

    font-size: 18px;
    color: #fff;
    text-transform: uppercase;
}

.slider__item.active {
    opacity: 1;
}

.slider__item.active:before {
    content: "";
    display: block;
    width: 70px;
    height: 3px;

    background-color: #f38181;

    position: absolute;
    top: -3px;
    left: 0;
    z-index: 1;
}

.slider__num {
    font-size: 24px;
    font-weight: 700;
}


