<?php 
include '../conn.php';

$method = $_POST['method'];

if ($method == 'vacination_status') {
	$query = "SELECT DISTINCT COUNT(IF(vaccinated = 'yes',id,NULL)) AS vaccinated,COUNT(IF(vaccinated = 'no',id,NULL)) AS not_vaccinated FROM resident_details;";
	$stmt = $conn->prepare($query);
	$stmt->execute();
	if ($stmt->rowCount() > 0) {
		foreach($stmt->fetchALL() as $j){
			echo '<tr>';
				echo '<td class="vaccinated">'.$j['vaccinated'].'</td>';
				echo '<td class="not_vaccinated">'.$j['not_vaccinated'].'</td>';
			echo '</tr>';
		}
	}
}

if ($method == 'voters_status') {
	$query = "SELECT DISTINCT COUNT(IF(voters = 'yes',id, NULL)) AS registered_voter,COUNT(IF(voters = 'no', id, NULL)) AS not_registered_voter FROM resident_details;";
	$stmt = $conn->prepare($query);
	$stmt->execute();
	if ($stmt->rowCount() > 0) {
		foreach($stmt->fetchALL() as $j){
			echo '<tr>';
				echo '<td class="registered_voter">'.$j['registered_voter'].'</td>';
				echo '<td class="not_registered_voter">'.$j['not_registered_voter'].'</td>';
			echo '</tr>';
		}
	}
}

if ($method == 'fetch_resident') {
	$fullname = $_POST['fullname'];
	$c = 0;

	$query = "SELECT * FROM resident_details WHERE full_name LIKE '$fullname%'";
	$stmt = $conn->prepare($query);
	$stmt->execute();
	if ($stmt->rowCount() > 0) {
		foreach($stmt->fetchALL() as $j){
			$c++;
			echo '<tr style="cursor:pointer;" class="modal-trigger" data-toggle="modal" data-target="#update_resident" onclick="get_resident_details(&quot;'.$j['id'].'~!~'.$j['first_name'].'~!~'.$j['middle_name'].'~!~'.$j['last_name'].'~!~'.$j['suffix'].'~!~'.$j['Birthdate'].'~!~'.$j['age'].'~!~'.$j['gender'].'~!~'.$j['contact_no'].'~!~'.$j['complete_address'].'~!~'.$j['occupation'].'~!~'.$j['citizenship'].'~!~'.$j['civil_status'].'~!~'.$j['vaccinated'].'~!~'.$j['voters'].'~!~'.$j['image'].'~!~'.$j['full_name'].'&quot;)">';
				echo '<td>'.$c.'</td>';
				echo '<td>'.strtoupper($j['full_name']).'</td>';
				echo '<td>'.$j['age'].'</td>';
				echo '<td>'.strtoupper($j['gender']).'</td>';
				echo '<td>'.$j['Birthdate'].'</td>';
				echo '<td>'.strtoupper($j['vaccinated']).'</td>';
				echo '<td>'.strtoupper($j['voters']).'</td>';
			echo '</tr>';
		}
	}else{
		echo '<tr>';
			echo '<td style="text-align:center; color:red;" colspan="7">No Result !!!</td>';
		echo '</tr>';
	}
}

if ($method == 'delete_resident') {
	$id = $_POST['id'];
	$query = "DELETE FROM resident_details WHERE id = '$id'";
	$stmt = $conn->prepare($query);
	if ($stmt->execute()) {
		echo 'success';
	}else{
		echo 'error';
	}
}

if ($method == 'fetch_account') {
	$fullname = $_POST['fullname'];
	$c = 0;

	$query = "SELECT * FROM user_accounts WHERE full_name LIKE '$fullname%'";
	$stmt = $conn->prepare($query);
	$stmt->execute();
	if ($stmt->rowCount() > 0) {
		foreach($stmt->fetchALL() as $j){
			$c++;
			echo '<tr style="cursor:pointer;" class="modal-trigger" data-toggle="modal" data-target="#edit_account" onclick="get_account_details(&quot;'.$j['id'].'~!~'.$j['full_name'].'~!~'.$j['username'].'~!~'.$j['password'].'&quot;)">';
				echo '<td>'.$c.'</td>';
				echo '<td>'.$j['full_name'].'</td>';
				echo '<td>'.$j['username'].'</td>';
			echo '</tr>';
		}
	}else{
		echo '<tr>';
			echo '<td style="text-align:center; color:red;" colspan="3">No Result !!!</td>';
		echo '</tr>';
	}
}

if ($method == 'add_account') {
	$fullname = $_POST['fullname'];
	$username = $_POST['username'];
	$password = $_POST['password'];

	$check = "SELECT id FROM user_accounts WHERE username = '$username'";
	$stmt = $conn->prepare($check);
	$stmt->execute();
	if ($stmt->rowCount() > 0) {
		echo 'duplicate';
	}else{
		$stmt = NULL;
		$query = "INSERT INTO user_accounts(`full_name`, `username`, `password`) VALUES ('$fullname','$username','$password')";
		$stmt = $conn->prepare($query);
		if ($stmt->execute()) {
			echo 'success';
		}else{
			echo 'error';
		}
	}
}

if ($method == 'update_account') {
	$id = $_POST['id'];
	$fullname = $_POST['fullname'];
	$username = $_POST['username'];
	$password = $_POST['password'];

	$check = "SELECT id FROM user_accounts WHERE username = '$username' AND full_name = '$fullname' AND password = '$password'";
	$stmt = $conn->prepare($check);
	$stmt->execute();
	if ($stmt->rowCount() > 0) {
		echo 'duplicate';
	}else{
		$stmt = NULL;
		$query = "UPDATE user_accounts SET full_name = '$fullname', username = '$username', password = '$password' WHERE id = '$id'";
		$stmt = $conn->prepare($query);
		if ($stmt->execute()) {
			echo 'success';
		}else{
			echo 'error';
		}
	}
}

if ($method == 'delete_account') {
	$id = $_POST['id'];

	$query = "DELETE FROM user_accounts WHERE id = '$id'";
	$stmt = $conn->prepare($query);
	if ($stmt->execute()) {
		echo 'success';
	}else{
		echo 'error';
	}
}
$conn = NULL;
?>