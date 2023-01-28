<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio Website</title>
    <link href = "frontPage.css" rel = "stylesheet"/>
    <script src = "frontPage.js"></script>
</head>
<body>
    <navbar class = "navbar">
        <div>
            <p id = "port-head">Portfolio</p>
        </div>
        <div>
            <ul>
                <li><a href = "#home">Home</a></li>
                <li><a  href = "#services">Services</a></li>
                <li><a href = "#About">About</a> </li>
                <li><a href = "#contact">Contact</a></li>
            </ul>
        </div>
    </navbar>
    <br/><br/>
    <div id = "home">
        <div>
            <h2> My name is </h2>
            <h1>Akash Kumar Singh</h1>
            <h3>and I am a Web Developer</h3>
            <h3>And I am a Java Developer</h3>
            <a><input type = "submit" name = "download-cv" value = "Download-Cv" id = "cvbtn"/></a>
            <a><input type = "submit" name = "hire-me" value = "Hire Me" id = "hirebtn"/></a>
        </div>
            <div class = "image-container">
                <img src = "akash.jpg" alt = "Akash image "/>
            </div>
    </div>
    <br/><br/>
    <h1 align = "center">Services </h1>
    <div id = "services">
        <div id = "ser1">Web Development </div>
        <div id = "ser2">Desktop Application Development  </div>
    </div>


    <!--About me Page starts from here -->


    <h1 align = "center">About Me</h1>
    <div>
        <div id = "des-about-me">
            <div>My Name is Akash Kumar Singh . This Porfolio website is created by Me . This is my own website </div>
        </div>
        <div id = "About">
            <div id = "languages">
                <div id = "head-lang">Languages</div><br/><br/>
                <div id = "java">Java</div><br/><br/>
                <div id = "c">C</div><br/><br/>
                <div id = "cpp">C++</div><br/><br/>
                <div id = "python">Python</div><br/><br/>
                <div id = "html">Html</div><br/><br/>
                <div id = "css">Css</div><br/><br/>
                <div id = "javascript">Javascript</div><br/><br/>
                <div id = "php">PHP</div>
            </div>
            <div id = "database">
                <div id = "head-data">Database</div><br/><br/>
                <div id = "mysql">Mysql</div><br/><br/>
                <div id = "mongodb">MongoDB</div>
            </div>
            <div id = "certifications">
                <div id = "head-certi">Certifications</div><br/><br/>
                <div>Python</div><br/><br/>
                <div>webDevelopment</div>
            </div>
        </div>
    </div>


    <!-- Contact page starts from here -->


    <h1 align = "center">
        Contact 
    </h1>
    <div id = "contact">
        <div>
            <div>
                <form action = "insert.php" target = "_blank" method = "post" onsubmit = "return validate()">
                    <input type = "text" name = "name" placeholder = "Enter your Name " id = "dectf" onkeyup = "validate()"/><br/>
                    <span id = "error-name">**Please Enter the above fields** </span><br/><br/>
                    <input type = "text" name = "email" placeholder = "Enter your Email Id here " id = "dectf"/><br/>
                    <span id = "error-email">**Please Enter the above fields** </span><br/><br/>
                    <input type = "text" name = "phone" placeholder = "Enter your phone number here " id = "dectf"/><br/>
                    <span id = "error-phone">**Please Enter the above fields** </span><br/><br/>
                    <textarea rows = "5" cols = "20 " placeholder="Enter your query here :" id = "decta" name = "query"></textarea><br/>
                    <span id = "error-ta">**Please Enter the above fields** </span><br/><br/>
                    <input type = "submit" name = "submit" value = "Submit" id = "sbtn"/> 
                </form>
            </div>
        </div>
    </div>
    <br/><br/>
    <footer id = "footer">
        <p>Copyright 2022 Portfolio</p>
    </footer>
</body>
</html>