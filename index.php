<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Matthew Ly</title>
    <link href="css/style.css" type="text/css" rel="stylesheet" />
    <link href="css/animate.css" type="text/css" rel="stylesheet" />
    <link href="css/bootstrap.css" type="text/css" rel="stylesheet" />
</head>
<body>

<div class="header">

    <img src="img/signature.png">
    <nav>
        <ul class="animated fadeIn">
            <li>
                <a class="about-btn" href="#about"> About</a>
            </li>
            <li>
                <a href="#">Projects</a>
            </li>
        </ul>
    </nav>
</div>




<!-- Projects Section -->
<div class="home">
    <h2>Projects</h2>
    <br>

    <table align="center">
    <tr>
        <td valign="top">


    <blockquote id="projectOne">
        <div class="jumbotron">

            <h2>Weather Alert</h2>
            <hr>
            <p><i>Java web application that alerts the user through email if the current temperature for a certain zip code surpasses the specified low/high thresholds.</i></p>
            <hr>
            <p><b>Front End</b>: JSP, HTML/CSS, JavaScript, Bootstrap</p>
            <div class="projectImg">
                <img src="img/webalertFrontEnd.png">
            </div>
            <hr>
            <p><b>Back End</b>: Java, JSON parsing, JavaMail</p>
            <div class="projectImg">
                <img src="img/webalertBackEnd1.png">
                <hr>
                <img src="img/webalertBackEnd2.png">
            </div>
            <hr>
            <p><b>APIs</b>: Weather Underground, MailJet</p>
            <div class="companyLogos">
                <img src="img/weatherunderground.png">
                <img src="img/mailjet.png">
            </div>
            <hr>
            <p>Try it out at: <a href="http://webalert.elasticbeanstalk.com">http://webalert.elasticbeanstalk.com</a></p>
        </div>
    </blockquote>



    </td>
        <td valign="top">
        <blockquote id="projectTwo">
            <div class="jumbotron">
                <h2>Zappos Catalog Filter</h2>
                <hr>
                <p><i>PHP web application that filters the Zappos boots catalog based on the user's given budget.</i></p>
                <hr>
                <p><b>Front End</b>: PHP, HTML/CSS, JavaScript, Bootstrap</p>
                <div class="projectImg">
                    <img src="img/zapposFrontEnd.png">
                </div>
                <hr>
                <p><b>Back End</b>: PHP, JSON parsing</p>
                <div class="projectImg">
                    <img src="img/zapposBackEnd.png">
                </div>
                <hr>
                <p><b>APIs</b>: Zappos</p>
                <div class="companyLogos">
                    <img src="img/zapposLogo.png">
                </div>
                <hr>
                <p>Try it out at: <a href="http://SearchFilter.web.engr.illinois.edu">http://SearchFilter.web.engr.illinois.edu</a></p>
            </div>
        </blockquote>
        </td>
    </tr>
    </table>
</div>

<hr id="about">

<h2 id="who" align="center">Who am I?</h2>
<br>
<div class="container" align="center">
    <div class="jumbotron">
        <div class="companyLogos1" align="center">
            <img src="img/illiniLogo.png">
            <img src="img/cvsLogo.png">
        </div>
        <hr>
        <p>I am a student of Computer Engineering at the University of Illinois at Urbana-Champaign. Previous work experiences include an internship with CVS Caremark as a programmer analyst and a part-time job with ATLAS as a web developer. My interests center on web development and software engineering.</p>
    </div>
</div>
<hr>

<div id="footer">
    <img src="img/self_pic.jpg">
    <table class="contactTable">
        <tr>
            <td valign="top">
                <span class="glyphicon glyphicon-home"></span>
            </td>
            <td>
                405 E. White Street <br>
                University of Illinois <br>
                Champaign, IL 61820 <br><br>
            </td>
        </tr>
    </table>
    <table class="contactTable">
        <tr>
            <td>
                <span class="glyphicon glyphicon-phone-alt"></span>
                (847) 773-5485
            </td>
        </tr>
        <tr>
            <td>
                <span class="glyphicon glyphicon-envelope"></span>
                <a href="mailto:mmly2@illinois.edu">mmly2@illinois.edu</a>
            </td>
        </tr>
        <tr>
            <td>
                <div class="social-icons">
                    <a target="_blank" href="https://www.facebook.com/MattMLy" class="facebook"><img src="img/facebook.jpg"></a>
                    <a target="_blank" href="http://www.linkedin.com/pub/matthew-ly/61/358/41a" class="linkedin"><img src="img/linkedin.jpg"></a>
                </div>
            </td>
        </tr>
    </table>
</div>



<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/modal.js"></script>
<script src="js/animate.js"></script>
<script src="js/scrollspy.js"></script>
<script src="js/navbar.js"></script>
</body>
</html>