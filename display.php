<?php
session_start();

$username = $_SESSION["username"];

$vote = $_POST["color"];

$votesFile = "votes.txt";

// read votes
$votes = [];
if (file_exists($votesFile)) {
    $fileContent = file_get_contents($votesFile);
    $lines = explode("\n", trim($fileContent));
    foreach ($lines as $line) {
        list($user, $color) = explode(":", $line);
        $votes[$user] = $color;
    }
}

// check if user already voted
if (isset($votes[$username])) {
    echo "$username already voted for " . htmlspecialchars($votes[$username]);
} else {
    // store the new vote
    $votes[$username] = $vote;

    // save votes to the file
    $fileHandle = fopen($votesFile, "w");
    foreach ($votes as $user => $color) {
        fwrite($fileHandle, "$user:$color\n");
    }
    fclose($fileHandle);

    echo "$username voted for " . htmlspecialchars($vote);
}

