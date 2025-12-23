<?php 
function formatName($name){
	return ucwords(strtolower(trim($name)));
}

function validateEmail($email) {
	return filter_var($email, FILTER_VALIDATE_EMAIL);
}

function cleanSkills($string) {

    // Make sure input is string
    if (!is_string($string)) {
        return [];
    }

    // Convert string to array
    $skills = explode(',', $string);

    // Remove empty values and trim spaces
    $cleanedSkills = [];

    foreach ($skills as $skill) {
        $skill = trim($skill);
        if ($skill !== '') {
            $cleanedSkills[] = $skill;
        }
    }

    return $cleanedSkills;
}


function saveStudent($name, $email, $skillsArray) {

    $skills = implode('|', $skillsArray);  // array → string
    $line = $name . ',' . $email . ',' . $skills . PHP_EOL;

    file_put_contents('students.txt', $line, FILE_APPEND);
}


function uploadPortfolioFile($file){
	$allowedTypes = ['pdf', 'jpg', 'png'];
	$maxSize = 2 * 1024 * 1024;

	$fileExt = strtolower(pathinfo($file['name'], PATHINFO_EXTENSION));

	if (!in_array($fileExt, $allowedTypes)){
		throw new Exception("Invalid file type");
	}

	if($file['size'] > $maxSize) {
		throw new Exception("Upload directory not found");
	}

	$newName = 'portfolio_' . time() . '.' . $fileExt;
	$destination = 'uploads/' . $newName;

	if (!move_uploaded_file($file['tmp_name'], $destination)){
		throw new Exception("File upload failed");
	}
	return $newName;
}
?>