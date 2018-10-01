<?php
$db = new PDO('MySQL: host = 127.0.0.1;dbname=portfolioProject', 'root');

$aboutMeTitle = $_POST['aboutMeTitle'];
$aboutMeText = $_POST['aboutMeTextContent'];

$projectsTitle = $_POST['portfolioTitle'];
$projectsText = $_POST['projectText'];
$projectsUrl = $_POST['projectUrl'];

$aboutMeQuery = $db->prepare("INSERT INTO `aboutMe` (`title`, `fillText`) VALUES ($aboutMeTitle, $aboutMeText);");
$aboutMeQuery->execute();

$projectsQuery = $db->prepare("INSERT INTO `projects` (`title`, `fillText`, `url`) VALUES ($projectsTitle, $projectsText, $projectsUrl)");
$projectsQuery->execute();


?>