<?php 
include 'header.php';
include 'functions.php';

$error = $success = "";

if($_SERVER['REQUEST_METHOD'] == 'POST'){
	try{
		if(!isset($_FILES['portfolio'])){
			throw new Exception("No file selected");
		}

		$fileName = uploadPortfolioFile($_FILES['portfolio']);
		$success = "File uploaded successfully: $fileName";
	}catch(Exception $e){
		$error = $e ->getMessage();
	}
} 
?>
<h3>Upload Portfolio</h3>

<?php if($error) echo "<p class = 'error'>$error</p>"; ?>
<?php if($success) echo "<p class = 'success'>$success</p>" ?>

<form method="post" enctype="multipart/form-data">
	Select file (PDF, JPG, PNG – max 2MB):<br>
	<input type="file" name="portfolio"><br><br>
	<button type="submit">Upload</button>
</form>

<?php include 'footer.php'; ?>