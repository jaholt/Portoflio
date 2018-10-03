<?php
require_once '../dbConn.php';
require_once 'adminPageActions.php';
require_once '../functions.php';

$projectsArray = retrieveData($db, "`projects`", "*");
foreach ($projectsArray as $project) {
    echo 'ID: ' . $project["id"] . "<br>" . $project["title"] . "<br>" . $project["fillText"] . "<br>" . $project["url"] . "<br>";
}
?>

<html lang="en-GB">
<head>
 <title>Admin Page</title>
</head>
<body>
    <div>
        <h1>Add Projects to the Portfolio</h1>
        <form action="adminPage.php" method="post">
            Title:<input type="text" name="portfolioTitle" />
            Project text:<input type="text" name="projectText" />
            Project URL:<input type="text" name="projectUrl" />
            <input type="submit" />
        </form>
<!--        <h1>Edit Projects in the Portfolio</h1>-->
<!--        <form action="adminPageActions.php" method="post">-->
<!--            Select by id from above:<input type="number" name="projectId" />-->
<!--            edit Title:<input type="text" name="editPortfolioTitle" />-->
<!--            edit Project text:<input type="text" name="editProjectText" />-->
<!--            edit Project URL:<input type="text" name="editProjectUrl" />-->
<!--            <input type="submit" />-->
<!--        </form>-->
        <h1>Delete Projects in the Portfolio</h1>
        <form action="adminPage.php" method="post">
            Select by id from above:<input type="number" name="deleteProjectId" />
            <input type="submit" />
        </form>
        <h1>Edit About Me Content</h1>
        <form action="adminPage.php" method="post">
            About Me text:<input type="text" name="aboutMeText" value="<?php ?>"/>
            Technologies text:<input type="text" name="techText" />
            Previous Experience text:<input type="text" name="prevExpText" />
            Other Experience text:<input type="text" name="otherExpText" />
            <input type="submit" />
        </form>
    </div>

</body>
</html>