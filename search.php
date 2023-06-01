<?php

$q = $_POST["q"];

$url = "https://www.google.co.il/search?q=" . urlencode($q);


header("Location: " . $url);


