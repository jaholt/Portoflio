<?php
require_once '../dbConn.php';
require_once 'adminPageActions.php';
require_once '../functions.php';

echo printAdminProjects($projectsArray);
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
        <h1>Delete Projects in the Portfolio</h1>
        <form action="adminPage.php" method="post">
            Select by id from above:<input type="number" name="deleteProjectId" />
            <input type="submit" />
        </form>
        <h1>Edit About Me Content</h1>
        <form action="adminPage.php" method="post">
            About Me text:<input type="text" name="aboutMeText" value="<?php $aboutMeText = retrieveData($db, "`aboutMe`", "`aboutMeText`");
            echo arrayToText($aboutMeText, 'aboutMeText') ?>"/>
            Technologies text:<input type="text" name="techText" value="<?php $aboutMeText = retrieveData($db, "`aboutMe`", "`technologiesText`");
            echo arrayToText($aboutMeText, 'technologiesText')?>"/>
            Previous Experience text:<input type="text" name="prevExpText" value="<?php $aboutMeText = retrieveData($db, "`aboutMe`", "`prevExpText`");
            echo arrayToText($aboutMeText, 'prevExpText')?>"/>
            Other Experience text:<input type="text" name="otherExpText" value="<?php $aboutMeText = retrieveData($db, "`aboutMe`", "`otherExpText`");
            echo arrayToText($aboutMeText, 'otherExpText')?>"/>
            <input type="submit" />
        </form>
    </div>

</body>
</html>