<?php
require '../dbConn.php';

$projectsTitle = $_POST['portfolioTitle'];
$projectsText = $_POST['projectText'];
$projectsUrl = $_POST['projectUrl'];

$projectsInsertQuery = $db->prepare("INSERT INTO `projects` (`title`, `fillText`, `url`) VALUES ($projectsTitle, $projectsText, $projectsUrl)");
$projectsInsertQuery->execute();

//comments here
function retrieveProjectsData($db) {
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    $projectsEditQuery = $db->prepare("SELECT * FROM `projects`;");
    $projectsEditQuery->execute();
    $projectsResult = $projectsEditQuery->fetchAll();
    return $projectsResult;
}
$projectsArray = retrieveProjectsData($db);

//comments here
function retrieveAboutMeData($db) {
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    $aboutMeEditQuery = $db->prepare("SELECT * FROM `aboutMe`;");
    $aboutMeEditQuery->execute();
    $aboutMeResults = $aboutMeEditQuery->fetchAll();
    return $aboutMeResults;
}
$aboutMeArray = retrieveAboutMeData($db);


?>