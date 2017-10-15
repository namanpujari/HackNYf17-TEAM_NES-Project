<?php

mysqli_connect("localhost", "anjix_andrew", "SayedSalah7421!");

if (mysqli_connect_error()) echo "0";
else echo "1";

mysqli_result::fetch_all([$resulttype = MYSQLI_NUM]);
?>