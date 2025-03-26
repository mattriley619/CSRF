<?php
session_start();

$username = $_SESSION["username"];
$vote = $_POST["color"];
$votesFile = "votes.txt";

// read votes
$votes = [];
if (file_exists($votesFile)) {
    $lines = file($votesFile, FILE_IGNORE_NEW_LINES);
    foreach ($lines as $line) {
        list($user, $color) = explode(":", $line);
        $votes[$user] = $color;
    }
}

// check if user already voted
if (isset($votes[$username])) {
    echo "$username already voted for " . $votes[$username];
} else {
    // store the vote
    $votes[$username] = $vote;

    // save votes to the file
    $file = fopen($votesFile, "w");
    foreach ($votes as $user => $color) {
        fwrite($file, "$user:$color\n");
    }
    fclose($file);

    echo "$username voted for " . $vote;
}

