<?php
include "../conn.php";
	
if(isset($_POST['submit'])) {
	// Count total files
	$countfiles = count(($_FILES['files']['name']));

	$firstname = trim($_POST['firstname_add']);
	$middlename = trim($_POST['middlename_add']);
	$lastname = trim($_POST['lastname_add']);
	$suffix = trim($_POST['suffix_add']);
	$birthdate = trim($_POST['birthdate_add']);
	$gender = trim($_POST['gender_add']);
	$number = trim($_POST['number_add']);
	$occupation = trim($_POST['occupation_add']);
	$citizenship = trim($_POST['citizenship_add']);
	$vaccinated = trim($_POST['vaccinated_add']);
	$voter = trim($_POST['voter_add']);
	$age =trim($_POST['age_add']);
	$civil =trim($_POST['civil_add']);
	$address =trim($_POST['address_add']);
	$fullname = $lastname.','.' '.$firstname.' '.$middlename;
	//checking for duplicate
	$query = "SELECT id FROM resident_details WHERE first_name = '$firstname' AND middle_name ='$middlename' AND last_name = '$lastname'";
	$stmt = $conn->prepare($query);
	$stmt->execute();
	if ($stmt->rowCount() > 0) {	
	 	echo '<script>
                    var x = confirm("Duplicate Data !!!");
                    if(x == true){
                        location.replace("../../page/admin/resident.php");
                    }else{
                        location.replace("../../page/admin/resident.php");
                    }
            </script>';
	}else{

	
	// Prepared statement
	$query = "INSERT INTO resident_details (file_name,image,first_name,middle_name,last_name, suffix, Birthdate, age, gender, contact_no, complete_address, occupation, citizenship, civil_status, vaccinated, voters, full_name) VALUES(?,?,?,?,?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

	$statement = $conn->prepare($query);

	// Loop all files
	for($i = 0; $i < $countfiles; $i++) {

		// File name
		$filename = $_FILES['files']['name'][$i];
		if(strpos(" ",$filename)){
			$filename = str_replace(" ","-",$filename);
		}

		$random = mt_rand(100000,999999);
		$datecode = date('Ymd');
		$prefix = "UPLOAD";
		$unique = uniqid();

		$extn = pathinfo($filename,PATHINFO_EXTENSION);

		## NEW FILENAME
		$filename = $prefix."-".strtoupper(trim($filename))."-".$datecode."-".$random."-".$unique.".".$extn;

		// Location
		$target_file = 'upload/'.$filename;
	

		// file extension
		$file_extension = pathinfo(
			$target_file, PATHINFO_EXTENSION);
			
		$file_extension = strtolower($file_extension);
	
		// Valid image extension
		$valid_extension = array("png","jpeg","jpg");
	

		if(in_array($file_extension, $valid_extension)) {

			// Upload file
			if(move_uploaded_file(
				$_FILES['files']['tmp_name'][$i],
				$target_file)
			) {

				// Execute query
				$statement->execute(
					array($filename,$target_file,$firstname,$middlename,$lastname, $suffix, $birthdate, $age, $gender, $number, $address, $occupation, $citizenship, $civil, $vaccinated, $voter, $fullname));
			}
		}
	}
	 		echo '<script>
                    var x = confirm("Resident Registered Successfully !!!");
                    if(x == true){
                        location.replace("../../page/admin/resident.php");
                    }else{
                        location.replace("../../page/admin/resident.php");
                    }
                </script>';
	}
}
?>
