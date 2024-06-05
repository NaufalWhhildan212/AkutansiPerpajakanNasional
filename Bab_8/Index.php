<html>
</head>
    <meta charset ="UTF-8">
    <meta http-equiv = "X-UA_Compatible" content = "IE=edge">
    <meta name = "viewport" content = "width=device-width,initial-scale = 1.0">
    <title> Akutansi Perpajakan Negara </title>
    <style>
        *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', 'sans-serif';
}

header {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    padding: 10px 130px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    z-index: 99;
}

.navigation a {
    position: relative;
    font-size: 1.1em;
    color: rgb(0, 0, 0);
    text-decoration: none;
    font-weight: 500;
    margin-left: 50px;
}

.navigation a::after {
    content: '';
    position: absolute;
    left: 0;
    bottom: -6px;
    width: 100%;
    height: 3px;
    background: navy;
    border-radius: 5px;
    transform-origin: right;
    transform: scaleX(0);
    transition: transform 0.5s;
}

.navigation a:hover::after {
    transform-origin: left;
    transform: scaleX(1);
}

body{
    display: flex;
    align-items: center;
    min-height: 100vh;
    background: url('./assets/image/Home.jpg') no-repeat;
    background-size: cover;
    background-position: center;
}

.btnLogin-popup {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 130px;
    height: 50px;
    background: transparent;
    border: 2px solid black;
    outline: none;
    border-radius: 6px;
    cursor: pointer;
    font-size: 1.1em;
    color: Black;
    font-weight: 500;
    margin-left: 40px;
    transition: 0.5s;
    display: flex;
    justify-content: center;
    align-items: center;
}

.btnLogin-popup:hover {
    background: rgba(1, 1, 139, 0.786);
    color: black;
}
.carousel {
    width: 100%;
            /* overflow: hidden; */
            position: relative;
            margin-top: 40px;
            text-align: center; 
        }
.carousel-item {
            flex: 0 0 auto;
            max-width: 50%;
            margin: 0 10px; 
        }
        .carousel-container {
            display: flex;
            justify-content: center; 
            transition: transform 0.5s ease;
            border-radius: 30px;
        }
        .carousel-item {
            flex: 0 0 auto;
            max-width: 50%;
            margin: 0 10px; 
        }
        .carousel-item img {
            width: 300;
            height: 300; 
        }
        .carousel-button {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer;
            background-color: rgba(0, 0, 0, 0.5);
            color: #ffffff;
            border: none;
            padding: 10px 20px;
            font-size: 18px;
            z-index: 1;
            border-radius: 50px;
        }
        .prev {
            left: 100px;
        }
        .next {
            right: 5px;
        }

@media (max-width: 375px) and (max-height: 812px) {
    header {
        padding: 20px 30px;
    }

    .navigation a {
        margin-left: 40px;
        font-size: 1em;
        font-family: 'Poppins', 'sans-serif';
    }

    .btnLogin-popup {
        width: 100px;
        height: 40px;
        font-size: 1em;
        margin-left: 20px;
    }   
    
}
    </style> 
<body>
    <header>
         <img src="./assets/image/Logo.png">
         <nav class="navigation">
            <a href ="#">Home</a>
            <a href ="#">About</a>
            <a href ="#">Services</a>
            <a href ="#">Contact</a>
            <a href="Login.php"><button class="btnLogin-popup">Login</button></a>
        </nav>
    </header>
    <main>
        <nav class="nav1">
      <h1>Kami Hadir</h1>
      <h2>Mempermudah Anda Membayar Pajak</h2>
    </nav>
    <div class="carousel">
        <div class="carousel-container">
            <div class="carousel-item"><img src="./assets/image/Icon3.png" alt="Image 1"></div>
            <div class="carousel-item"><img src="./assets/image/Icon2.jpg" alt="Image 2"></div>
        </div>
        <button class="carousel-button prev" onclick="prevSlide()">&#10094;</button>
        <button class="carousel-button next" onclick="nextSlide()">&#10095;</button>
    </div>
    </main>
    <script>
        var slideIndex = 0;
        showSlide(slideIndex);
        function prevSlide() {
        showSlide(slideIndex -= 1);
        }
        function nextSlide() {
        showSlide(slideIndex += 1);
        }
        function showSlide(index) {
        var slides =
        document.getElementsByClassName("carousel-item");
        if (index >= slides.length) { slideIndex = 0; }
        if (index < 0) { slideIndex = slides.length - 1; }
        for (var i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
        }
        slides[slideIndex].style.display = "block";
        }
        </script>
</body>
</html>