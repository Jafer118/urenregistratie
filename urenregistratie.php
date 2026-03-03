<?php
// Step 1: Ask for user input via the terminal (CLI)
echo "Enter your work hours:\n";
$date    = readline("Date (YYYY-MM-DD): ");
$project = readline("Project name: ");
$hours   = readline("Number of hours: ");

// Step 2: Format the data string for the CSV file
// We separate values with a comma and end with a newline character (\n)
$txt = $date . "," . $project . "," . $hours . "\n";

// Step 3: Open the file (The 'a' mode stands for Append)
// If the file doesn't exist, PHP will create it for you
$myfile = fopen("urenregistratie.csv", "a") or die("Unable to open file!");

// Step 4: Write the formatted string to the file
fwrite($myfile, $txt);

// Step 5: Close the file to save changes and free up memory
fclose($myfile);

echo "Hours successfully saved to urenregistratie.csv!\n";
?>