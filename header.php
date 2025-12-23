<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Student Portfolio</title>
	<style>

	* {
        box-sizing: border-box;
    }

    body {
        font-family: "Segoe UI", Arial, sans-serif;
        background-color: #f2f5f9;
        margin: 0;
        padding: 0;
    }

    .container {
        max-width: 780px;
        margin: 40px auto;
        background-color: #ffffff;
        padding: 30px;
        border-radius: 10px;
        box-shadow: 0 6px 15px rgba(0, 0, 0, 0.08);
    }

    h2 {
        text-align: center;
        color: #333;
        margin-bottom: 20px;
    }

    h3 {
        color: #444;
        margin-bottom: 10px;
    }

    nav {
        text-align: center;
        margin-bottom: 25px;
    }

    nav a {
        text-decoration: none;
        color: #555;
        background-color: #eef2f7;
        padding: 8px 15px;
        border-radius: 20px;
        margin: 0 5px;
        font-size: 14px;
        transition: 0.3s;
    }

    nav a:hover {
        background-color: #4a90e2;
        color: #fff;
    }

    form {
        margin-top: 20px;
    }

    label {
        font-weight: 600;
        margin-bottom: 6px;
        display: block;
        color: #444;
    }

    input[type="text"],
    input[type="email"],
    input[type="file"] {
        width: 100%;
        padding: 10px;
        margin-bottom: 15px;
        border: 1px solid #ddd;
        border-radius: 6px;
        font-size: 14px;
    }

    button {
        background-color: #4a90e2;
        color: #fff;
        border: none;
        padding: 10px 20px;
        border-radius: 20px;
        cursor: pointer;
        font-size: 14px;
        transition: 0.3s;
    }

    button:hover {
        background-color: #357bd8;
    }

    .error {
        background-color: #ffecec;
        color: #c62828;
        padding: 10px;
        border-radius: 6px;
        margin-bottom: 15px;
    }

    .success {
        background-color: #eaf7ee;
        color: #2e7d32;
        padding: 10px;
        border-radius: 6px;
        margin-bottom: 15px;
    }

    .student {
        background-color: #f9fbff;
        padding: 15px;
        border-radius: 8px;
        border-left: 4px solid #4a90e2;
        margin-bottom: 15px;
    }

    footer {
        text-align: center;
        margin-top: 30px;
        color: #888;
        font-size: 13px;
    }
</style>

	</style>
</head>
<body>
	<div class="container">
	<h2>Student Portfolio</h2>

	<nav>
    <a href="index.php">Home</a>
    <a href="add_student.php">Add Student</a>
    <a href="upload.php">Upload Portfolio</a>
    <a href="students.php">View Students</a>
</nav>
	