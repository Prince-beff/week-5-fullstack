<?php 
include 'header.php';
include 'functions.php';

$error = $success = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    try {
        $name = formatName($_POST['name']);
        $email = $_POST['email'];
        $skillsString = $_POST['skills'];

        if (empty($name) || empty($email) || empty($skillsString)) {
            throw new Exception("All fields are required");
        }

        if (!validateEmail($email)) {
            throw new Exception("Invalid email format");
        }

        $skillsArray = cleanSkills($skillsString);
        saveStudent($name, $email, $skillsArray);

        $success = "Student added successfully!";
    } catch (Exception $e) {
        $error = $e->getMessage();
    }
}
?>

<h3>Add Students</h3>

<?php if ($error) echo "<p class='error'>$error</p>"; ?>
<?php if ($success) echo "<p class='success'>$success</p>"; ?>

<form method="post">
    Name: <br>
    <input type="text" name="name"><br><br>

    Email: <br>
    <input type="email" name="email"><br><br>

    Skills (comma separated): <br>
    <input type="text" name="skills"><br><br>

    <button type="submit">Save Student</button>
</form>

<?php include 'footer.php'; ?>
