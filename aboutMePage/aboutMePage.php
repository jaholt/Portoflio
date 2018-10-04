<?php
require_once '../dbConn.php';
require_once '../functions.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../normalize.css" type="text/css" />
    <title>Joseph:Home</title>
    <link rel="stylesheet" href="styles.css" type="text/css" />
</head>
<body>
<nav>
    <div class="navContainer">
        <div class="logoName">
            JaHolt
        </div>
        <ul>
            <a href="../contactPage/contactPage.php"><li>CONTACT</li></a>
            <a href="../portfolioPage/portfolioPage.php"><li>PORTFOLIO</li></a>
            <a href="aboutMePage.php"><li>ABOUT</li></a>
            <a href="../index.php"><li>HOME</li></a>
        </ul>
        <div class="navAlignBox">
        </div>
    </div>
</nav>
<main>
    <section class="titleContainer">
        <div class="titleBox">
            <img src="css/pics/lightbulb.png" alt="lightbulb logo" />
            <h1>About Me</h1>
        </div>
        <div class="aboutMeBox">
            <h3>About Me</h3>
            <p><?php $aboutMeText = retrieveData($db, "`aboutMe`", "`aboutMeText`");
                echo arrayToText($aboutMeText, 'aboutMeText') ?></p>
        </div>
    </section>
    <section class="subcategoryContainer">
        <div class="aboutMeBoxSmall">
            <h3>About Me</h3>
            <p><?php $aboutMeText = retrieveData($db, "`aboutMe`", "`aboutMeText`");
                echo arrayToText($aboutMeText, 'aboutMeText') ?></p>
        </div>
        <div class="technologiesBox">
            <h3>Technologies</h3>
            <p><?php $aboutMeText = retrieveData($db, "`aboutMe`", "`technologiesText`");
                echo arrayToText($aboutMeText, 'technologiesText')?></p>
            <div>
                <img class="htmlCssImg" src="CSS/pics/htmlCss.png" alt="HTML/CSSimage">
                <img src="CSS/pics/nodejs.ico" alt="nodeJSLogo">
                <img src="CSS/pics/php.png" alt="sqlLogo">
                <img src="CSS/pics/js.png" alt="javascriptLogo">
            </div>
        </div>
        <div class="otherPrevExpContainer">
            <div class="prevExpBox">
                <div class="backgroundFade">
                    <h3 class="titleMaintainControl">Previous Experience</h3>
                    <p><?php $aboutMeText = retrieveData($db, "`aboutMe`", "`prevExpText`");
                        echo arrayToText($aboutMeText, 'prevExpText')?></p>
                </div>
            </div>
            <div class="otherExpBox">
                <div class="backgroundFade">
                    <h3 class="titleMaintainControl">Other Experience</h3>
                    <p><?php $aboutMeText = retrieveData($db, "`aboutMe`", "`otherExpText`");
                        echo arrayToText($aboutMeText, 'otherExpText')?></p>
                </div>
            </div>
        </div>
    </section>
    <footer>
        <div class="footerBox2">
            <h4>JaHolt</h4>
            <h5>&copy; 2018 JaHolt Web Developer</h5>
        </div>
    </footer>
</main>
</body>
</html>