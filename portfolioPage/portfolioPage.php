<?php
require_once '../functions.php';
require_once '../dbConn.php';

$retrievedProjects = retrieveProjectData($db);
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
            <a href="portfolioPage.php"><li>PORTFOLIO</li></a>
            <a href="../aboutMePage/aboutMePage.php"><li>ABOUT</li></a>
            <a href="../index.php"><li>HOME</li></a>
        </ul>
        <div class="navAlignBox">
        </div>
    </div>
</nav>
<main>
    <section class="titleContainer">
        <div class="titleBox">
            <img src="../css/pics/lightbulb.png" alt="lightbulb logo" />
            <h1>Portfolio</h1>
        </div>
    </section>
    <section class="subcategoryContainer">
        <?php echo produceProject($retrievedProjects);
        ?>
        <div class="futureProjectBox">
            <h3>Future projects</h3>
            <p>Future projects will be added here.</p>
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
