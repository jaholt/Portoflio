<?php
require '../dbConn.php';

$projectsTitle = $_POST['portfolioTitle'];
$projectsText = $_POST['projectText'];
$projectsUrl = $_POST['projectUrl'];

$projectsInsertQuery = $db->prepare("INSERT INTO `projects` (`title`, `fillText`, `url`) VALUES (:projectsTitle, :projectsText, :projectsUrl)");
$projectsInsertQuery->bindParam(':projectsTitle',$projectsTitle);
$projectsInsertQuery->bindParam(':projectsText',$projectsText);
$projectsInsertQuery->bindParam(':projectsUrl',$projectsUrl);
$projectsInsertQuery->execute();

/*
 * Function that is designed to take in the db, select the projects table and fetch all its data. Being used to retrieve the data displayed on the admin page.
 *
 * @param - called $db, designed to take the pre-existing $db variable
 *
 * @return - an array - of all info in the projects table on the db
 */
function retrieveProjectsData($db) {
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    $projectsEditQuery = $db->prepare("SELECT * FROM `projects`;");
    $projectsEditQuery->execute();
    $projectsResult = $projectsEditQuery->fetchAll();
    return $projectsResult;
}
$projectsArray = retrieveProjectsData($db);

$projectsDeleteId = $_POST['deleteProjectId'];
$projectsDeleteQuery = $db->prepare("DELETE FROM `projects` WHERE `projects`.`id` = :deleteId;");
$projectsDeleteQuery->bindParam(':deleteId',$projectsDeleteId);
$projectsDeleteQuery->execute();

////comments here
//function retrieveAboutMeData($db) {
//    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
//    $aboutMeEditQuery = $db->prepare("SELECT * FROM `aboutMe`;");
//    $aboutMeEditQuery->execute();
//    $aboutMeResults = $aboutMeEditQuery->fetchAll();
//    return $aboutMeResults;
//}
//$aboutMeArray = retrieveAboutMeData($db);

$aboutMeText = $_POST['aboutMeText'];
$techText = $_POST['techText'];
$prevExpText = $_POST['prevExpText'];
$otherExpText = $_POST['otherExpText'];

$aboutMeQuery = $db->prepare("REPLACE INTO `aboutMe` (`aboutMeText`, `technologiesText`, `prevExpText`, `otherExpText` VALUES (:aboutMeText, :techText, :prevExpText, :otherExpText));");
$aboutMeQuery->bindParam(':aboutMeText',$aboutMeText);
$aboutMeQuery->bindParam(':techText',$techText);
$aboutMeQuery->bindParam(':prevExpText',$prevExpText);
$aboutMeQuery->bindParam(':otherExpText',$otherExpText);
$aboutMeQuery->execute();


?>