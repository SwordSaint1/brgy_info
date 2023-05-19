<?php
include "../conn.php";
	
if(isset($_POST['submit'])) {
	
	$files_update = $_FILES['files_update']['name'];
	$id = $_POST['id_update'];
	$firstname = $_POST['firstname_update'];
	$middlename = $_POST['middlename_update'];
	$lastname = $_POST['lastname_update'];
	$suffix = $_POST['suffix_update'];
	$birthdate = $_POST['birthdate_update'];
	$age = $_POST['age_update'];
	$gender = $_POST['gender_update'];
	$civil = $_POST['civil_update'];
	$number = $_POST['number_update'];
	$occupation = $_POST['occupation_update'];
	$citizenship = $_POST['citizenship_update'];
	$address = $_POST['address_update'];
	$vaccinated = $_POST['vaccinated_update'];
	$voter = $_POST['voter_update'];
	$fullname = $lastname.','.' '.$firstname.' '.$middlename;

	if ($files_update == '') {
		$query = "SELECT id FROM resident_details WHERE first_name = '$firstname' AND middle_name = '$middlename' AND last_name = '$lastname' AND suffix = '$suffix' AND Birthdate = '$birthdate' AND age = '$age' AND gender = '$gender' AND civil_status = '$civil' AND vaccinated = '$vaccinated' AND voters = '$voter' AND full_name = '$fullname'";
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
			$stmt = NULL;
			$query = "UPDATE resident_details SET first_name = '$firstname', middle_name = '$middlename', last_name = '$lastname', suffix = '$suffix', Birthdate = '$birthdate', age = '$age', gender = '$gender' , contact_no = '$number',complete_address = '$address', occupation = '$occupation', citizenship = '$citizenship', civil_status = '$civil', vaccinated = '$vaccinated', voters = '$voter', full_name = '$fullname' WHERE id = '$id'";
			$stmt = $conn->prepare($query);
			if ($stmt->execute()) {
				echo '<script>
                    var x = confirm("Successfully Updated !!!");
                    if(x == true){
                        location.replace("../../page/admin/resident.php");
                    }else{
                        location.replace("../../page/admin/resident.php");
                    }
            	</script>';
			}else{
				echo '<script>
                    var x = confirm("Error!!!");
                    if(x == true){
                        location.replace("../../page/admin/resident.php");
                    }else{
                        location.replace("../../page/admin/resident.php");
                    }
            	</script>';
			}
		}
		
	}else{
		$stmt = NULL;
		$query = "SELECT id FROM resident_details WHERE first_name = '$firstname' AND middle_name = '$middlename' AND last_name = '$lastname' AND suffix = '$suffix' AND Birthdate = '$birthdate' AND age = '$age' AND gender = '$gender' AND civil_status = '$civil' AND vaccinated = '$vaccinated' AND voters = '$voter' AND full_name = '$fullname'";
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
			$stmt = NULL;
		// File name
		$filename = $_FILES['files_update']['name'];
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
				$_FILES['files_update']['tmp_name'],
				$target_file)
			) {
				
					$query = "UPDATE resident_details SET first_name = '$firstname', middle_name = '$middlename', last_name = '$lastname', suffix = '$suffix', Birthdate = '$birthdate', age = '$age', gender = '$gender' , contact_no = '$number',complete_address = '$address', occupation = '$occupation', citizenship = '$citizenship', civil_status = '$civil', vaccinated = '$vaccinated', voters = '$voter', full_name = '$fullname',file_name = '$filename', image = '$target_file' WHERE id = '$id'";
					$statement = $conn->prepare($query);

				// Execute query
				$statement->execute(
					array($filename,$target_file,$firstname,$middlename,$lastname,$suffix,$birthdate,$age,$gender,$civil,$number,$occupation,$citizenship,$address,$vaccinated,$voter,$fullname,$id)); 
				
				
			}
		}
	

			 echo '<script>
                    var x = confirm("Successfully Updated !!!");
                    if(x == true){
                        location.replace("../../page/admin/resident.php");
                    }else{
                        location.replace("../../page/admin/resident.php");
                    }
                </script>';
		}
	}
}
$conn = NULL;
?>