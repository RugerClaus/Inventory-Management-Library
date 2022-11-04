<?php

include 'functions.php';

$contacts = create_connection();

echo "<table>";
echo "<tr>";
echo "<td>";
echo $contacts[0];
echo "</td>";
echo "<td>";
echo $contacts[1];
echo "</td>";
echo "<td>";
echo $contacts[2];
echo "</td>";
echo "</tr>";
echo "</table>";