<?php
require_once '../dbConn.php';
require_once '../functions.php';

if($_POST['portfolioTitle']
    && $_POST['projectText']
    && $_POST['projectUrl']){
    $projectsTitle = $_POST['portfolioTitle'];
    $projectsText = $_POST['projectText'];
    $projectsUrl = $_POST['projectUrl'];
    insertProject($db, $projectsTitle, $projectsText, $projectsUrl);
}

if ($_POST['deleteProjectId']) {
    $projectsDeleteId = $_POST['deleteProjectId'];
    deleteProject($db, $projectsDeleteId);
}

if ($_POST['aboutMeText']
    && $_POST['techText']
    && $_POST['prevExpText']
    && $_POST['otherExpText']) {
    $aboutMeText = $_POST['aboutMeText'];
    $techText = $_POST['techText'];
    $prevExpText = $_POST['prevExpText'];
    $otherExpText = $_POST['otherExpText'];
    replaceAboutMe($db, $aboutMeText, $techText, $prevExpText, $otherExpText);
}

$projectsArray = retrieveData($db, "`projects`", "*");

?>