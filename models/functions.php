<?php
function getAllTowns($database, $country_id)
{
    $query = "SELECT * FROM towns WHERE country_id = '".$country_id."' ORDER BY town_name ASC;";
    $database->query($query);
    $rows = $database->resultset();

    return $rows;
}

function checkUserExists($database, $email)
{
    $query = "SELECT * FROM users WHERE email = '".$email."';";
    $database->query($query);
    $rows = $database->resultset();
    if(empty($rows))
    {
        return false;
    }else{
        return true;
    }
}
?>