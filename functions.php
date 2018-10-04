<?php
require_once 'dbConn.php';

/*
 * Is used to select data from the database and return it as a multidimensional array, designed specifically for the about me content
 *
 * @param - PDO - $db - this is where the $db var should be used otherwise the function can't access the database(scope)
 * @param - string - $table - used to choose which table you want from the db, should be used in double quotes with backticks.
 * @param - string - $field - which field you want from the table, in double quotes with backticks
 *
 * @return - an array - should be an array of the field that's picked.
 */
function retrieveData (PDO $db, string $table, string $field): array
{
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    $query = $db->prepare("SELECT $field FROM $table;");
    $query->execute();
    $result = $query->fetchAll();
    if (is_array($result) == true) {
        return $result;
    }
}

/*
 * Is used to turn the array result into text that can be displayed on a page
 *
 * @param - array - this should be the array that you want to be text
 * @param - array key - this is the key of the array item you want to be displayed as text, as it will be found in the db
 *
 * @return - string - this will be the string pulled out of the array item
 */
function arrayToText (array $array, string $key): string
{
    if (array_key_exists(0, $array)) {
        return $array[0][$key];
    } else {
        return "this isn't an array";
    }
}

/*
 * This function is used to add a new project to the db
 *
 * @param - PDO - $db this is where the database variable will be inputted into the array
 * @param - string - $title choose the title of the project
 * @param - string - $text input the text displayed under the title in the project box
 * @param - string - $url this will be the url to the new project
 *
 * @return - mixed - type hinting on this breaks the function when submit is clicked
 */
function insertProject (PDO $db, string $title, string $text, string $url)
{
    $projectsInsertQuery = $db->prepare("INSERT INTO `projects` (`title`, `fillText`, `url`) VALUES (:projectsTitle, :projectsText, :projectsUrl)");
    $projectsInsertQuery->bindParam(':projectsTitle', $title);
    $projectsInsertQuery->bindParam(':projectsText', $text);
    $projectsInsertQuery->bindParam(':projectsUrl', $url);
    $projectsInsertQuery->execute();
    return $projectsInsertQuery;
}

/*
 * used to delete a project from inside the database
 *
 * @param - PDO - $db the $db variable should be used here
 * @param - int - $projectId a number that corresponds to the id of the row which the project is stored on, can be worked out by the data displayed at the top of the page
 *
 * @return - mixed - type hinting on this breaks the function when submit is clicked
 */
function deleteProject(PDO $db, int $projectId)
{
    $projectsDeleteQuery = $db->prepare("DELETE FROM `projects` WHERE `id` = :deleteId;");
    $projectsDeleteQuery->bindParam(':deleteId', $projectId);
    $projectsDeleteQuery->execute();
    return $projectsDeleteQuery;
}

/*
 * used to replace items in the database for the about me page
 *
 * @param - PDO - $db the database variable should be used here
 * @param - string - $aboutMeText the text you want to replace the about me description on the about me page
 * @param - string - $techText the text you want to be displayed in the technoligies box on the about me page
 * @param - string - $prevExpText the text you want displayed in the previous experience box
 * @param - string - $otherExpText text displayed in the other experience box
 *
 * @result - mixed - type hinting on this breaks the function when submit is clicked
 */
function replaceAboutMe(PDO $db, string $aboutMeText, string $techText, string $prevExpText, string $otherExpText)
{
    $aboutMeQuery = $db->prepare("UPDATE `aboutMe` SET `aboutMeText` = :aboutMeText, `technologiesText` = :techText, `prevExpText` = :prevExpText, `otherExpText` = :otherExpText ;");
    $aboutMeQuery->bindParam(':aboutMeText', $aboutMeText);
    $aboutMeQuery->bindParam(':techText', $techText);
    $aboutMeQuery->bindParam(':prevExpText', $prevExpText);
    $aboutMeQuery->bindParam(':otherExpText', $otherExpText);
    $aboutMeQuery->execute();
    return $aboutMeQuery;
}

/**
 * Retrieves all the data from the projects table bar the id, different from the other retrieve data fun as it doesn't work with the different structure on the about me page
 *
 * @param PDO $db This ill be the $db variable, my PDO
 *
 * @return array returns the table as a multidimensional array of each row
 */
function retrieveProjectData (PDO $db) : array
{
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    $query = $db->prepare("SELECT `title`, `fillText`, `url` FROM `projects`;");
    $query->execute();
    $result = $query->fetchAll();
    if (is_array($result) == true) {
        return $result;
    }
}

/**
 * This function is designed to turn the arrays from the projects table into text and html to be displayed on the portfolio page
 *
 * @param array $projectResult this param will be the multidimensional array retrieved from the projects table assigned to a variable that equals the retrieveProjectData function
 *
 * @return string returns the array parcelled up into html that can be displayed in the page and acted on by the pre-existing css
 */
function produceProject (array $projectResult) : string
{
    $result = '';
    if (is_array($projectResult) && array_key_exists(0, $projectResult)) {
        foreach ($projectResult as $project) {
            $result .= '<div class="pilotShopBox">' .
                '<h3>' . $project['title'] . '</h3>' .
                '<p>' . $project['fillText'] . '</p>' .
                '<a href=' . $project['url'] . '>CLICK HERE to view</a></div>';
        }
        return $result;
    } else {
        return "this isn't the expected piece of data, array or otherwise";
    }

}

/**
 * this function is displayed at the top of the admin page to work out which project has what id to prevent incorrect deletion
 *
 * @param array $projectsArray this is the multidimensional array produced by the retrieveData function
 *
 * @return string connects the data together in a readable way that can be displayed in html at the top of the admin page
 */
function printAdminProjects (array $projectsArray) : string
{
    $projectText = '';
    if (is_array($projectsArray) && array_key_exists(0, $projectsArray)) {
        foreach ($projectsArray as $project) {
            $projectText .= 'ID: ' . $project["id"] . "<br>" . $project["title"] . "<br>" . $project["fillText"] . "<br>" . $project["url"] . "<br>";
        }
        return $projectText;
    } else {
        return "the projects array has not been entered correctly";
    }
}