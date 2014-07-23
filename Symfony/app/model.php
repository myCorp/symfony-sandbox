<?php
// SymfTestModel.php

function open_database_connection()
{
    $db_server = mysqli_connect('localhost', 'arch', 'q1w2e3r4', 'symfony');

    return $db_server;
}

function close_database_connection($db_server)
{
    mysqli_close($db_server);
}

function get_all_posts()
{
    $db_server = open_database_connection();

    $result = mysqli_query($db_server, 'SELECT id, title FROM post1');
    $posts = array();
    while ($row = mysqli_fetch_assoc($result)) 
    {
        $posts[] = $row;
    }
    close_database_connection($db_server);

    return $posts;
}

function get_post_by_id($id)
{
    $db_server = open_database_connection();

    $id = intval($id);
    $query = 'SELECT date, title, body FROM post1 WHERE id = '.$id;
    $result = mysqli_query($db_server, $query);
    $row = mysqli_fetch_assoc($result);

    close_database_connection($db_server);

    return $row;
}