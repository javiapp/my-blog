<?php
require_once(__DIR__ . "/../model/config.php");
   
    $title = filter_input(INPUT_POST, "title", FILTER_SANITIZE_STRING);
    $post = filter_input(INPUT_POST, "post", FILTER_SANITIZE_STRING);
    $date = new DateTime('today');
    $time = new Datetime('America/Los_Angeles');
    
    $query= $_SESSION["connection"]->query("INSERT INTO posts SET title = '$title', post = '$post'");
    
    if($query){
        echo "<p> Succesfully inserted post: $title</p>";
        echo "Posted on: " . $date->format("D: Y.m.d") . ".<b>" . $time->format("G:i") ."</b>";
    }
    else{
        echo "<p>" . $_SESSION["connection"] . "->error</p>";
    }
    