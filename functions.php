<?php
require_once 'dbConn.php';


/*
 * Is used to select data from the database and return it as an array
 *
 * @param1 - PDO - this is where the $db var should be used otherwise the function can't access the database(scope)
 * @param2 - $table - used to choose which table you want from the db, should be used in double quotes with backticks.
 * @param3 - $field - which field you want from the table, in double quotes with backticks
 *
 * @return - an array - should be an array of the field that's picked.
 */
function retrieveData ($db, $table, $field) :array
{
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    $query = $db->prepare("SELECT $field FROM $table;");
    $query->execute();
    $result = $query->fetchAll();
    if (is_array($result) == true) {
        return $result;
    }
}

///*
// * Is used to turn the array result into text that can be displayed on a page
// *
// * @param1 - array - this should be the array that you want to be text
// * @param2 - array key - this is the key of the array item you want to be displayed as text, as it will be found in the db
// *
// * @return - string - this will be the string pulled out of the array item
// */
//function arrayToText ($array, $key) :string
//{
//    if (array_key_exists($key, $array) == true && is_string($key) == true) {
//        return "$array[$key]";
//    } else {
//        return 'failed to turn into text';
//    }
//}

/*
 * This function is used to add a new project to the db
 *
 * @param1 - PDO - this is where the database variable will be inputted into the array
 * @param2 - string - choose the title of the project
 * @param3 - string - input the text displayed under the title in the project box
 * @param4 - string - this will be the url to the new project
 *
 * @return - int - the no. of rows, truthy to know if the function worked
 */
function insertProject ($db, $title, $text, $url)
{
    $projectsInsertQuery = $db->prepare("INSERT INTO `projects` (`title`, `fillText`, `url`) VALUES (:projectsTitle, :projectsText, :projectsUrl)");
    $projectsInsertQuery->bindParam(':projectsTitle', $title);
    $projectsInsertQuery->bindParam(':projectsText', $text);
    $projectsInsertQuery->bindParam(':projectsUrl', $url);
    $projectsInsertQuery->execute();
    return $projectsInsertQuery;
}

/*
 * used to delete a porject from inside the database
 *
 * @param1 - PDO - the $db variable should be used here
 * @parma2 - int - a number that corresponds to the id of the row which the project is stored on, can be worked out by the data displayed at the top of the page
 *
 * @return - int - the no. of rows effected, truthy to know if the function worked
 */
function deleteProject($db, $projectId)
{
    $projectsDeleteQuery = $db->prepare("DELETE FROM `projects` WHERE `projects`.`id` = :deleteId;");
    $projectsDeleteQuery->bindParam(':deleteId', $projectId);
    $projectsDeleteQuery->execute();
}

/*
 * used to replace items in the database for the about me page
 *
 * @param1 - PDO - the database variable should be used here
 * @param2 - string - the text you want to replace the about me description on the about me page
 * @param3 - string - the text you want to be displayed in the technoligies box on the about me page
 * @param4 - string - the text you want displayed in the previous experience box
 * @param5 - string - text displayed in the other experience box
 *
 * @result - int - number of rows effected, will always be 1 so essentially truthy
 */
function replaceAboutMe($db, $aboutMeText, $techText, $prevExpText, $otherExpText)
{
    $aboutMeQuery = $db->prepare("UPDATE `aboutMe` SET `aboutMeText` = :aboutMeText, `technologiesText` = :techText, `prevExpText` = :prevExpText, `otherExpText` = :otherExpText ;");
    $aboutMeQuery->bindParam(':aboutMeText', $aboutMeText);
    $aboutMeQuery->bindParam(':techText', $techText);
    $aboutMeQuery->bindParam(':prevExpText', $prevExpText);
    $aboutMeQuery->bindParam(':otherExpText', $otherExpText);
    $aboutMeQuery->execute();
    return $aboutMeQuery;
}

