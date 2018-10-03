<?php
require_once '../dbConn.php';
require_once '../functions.php';

$projectsTitle = $_POST['portfolioTitle'];
$projectsText = $_POST['projectText'];
$projectsUrl = $_POST['projectUrl'];

$projectsDeleteId = $_POST['deleteProjectId'];

$aboutMeText = $_POST['aboutMeText'];
$techText = $_POST['techText'];
$prevExpText = $_POST['prevExpText'];
$otherExpText = $_POST['otherExpText'];

insertProject($db, $projectsTitle, $projectsText, $projectsUrl);

deleteProject($db, $projectsDeleteId);

replaceAboutMe($db, $aboutMeText, $techText, $prevExpText, $otherExpText);


//function retrieveAboutMeData($db) {
//    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
//    $aboutMeEditQuery = $db->prepare("SELECT * FROM `aboutMe`;");
//    $aboutMeEditQuery->execute();
//    $aboutMeResults = $aboutMeEditQuery->fetchAll();
//    return $aboutMeResults;
//}
//$aboutMeArray = retrieveAboutMeData($db);




?>