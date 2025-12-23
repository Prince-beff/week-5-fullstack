<?php
include 'header.php';

echo "<h3>View Students</h3>";

if (!file_exists('students.txt')) {
    echo "<p>No students found.</p>";
} else {

    $students = file('students.txt', FILE_IGNORE_NEW_LINES);

    if (count($students) === 0) {
        echo "<p>No students added yet.</p>";
    }

    foreach ($students as $student) {

        if (trim($student) === '') continue;

        // Split student line
        $parts = explode(',', $student);

        if (count($parts) !== 3) continue;

        $name = $parts[0];
        $email = $parts[1];
        $skills = $parts[2];

        // Convert skills back to array
        $skillsArray = explode('|', $skills);

        echo "<div class='student'>";
        echo "<strong>Name:</strong> $name <br>";
        echo "<strong>Email:</strong> $email <br>";
        echo "<strong>Skills:</strong> " . implode(', ', $skillsArray);
        echo "</div>";
    }
}

include 'footer.php';
?>
