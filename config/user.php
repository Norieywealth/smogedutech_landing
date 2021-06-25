<?php

require 'conn.php';


class User extends dbClass{

function __construct(){
	$this->dbConnect();
}

function register($first_name, $surname, $email, $phone_number, $school_or_organisation_option, $school_or_organisation_name, $country, $state, $address, $role, $population, $is_stem, $brief){

	

	$validate = $this->conn->query("SELECT * FROM register WHERE email='".$email."'");
	if($validate->num_rows > 0){

		echo "<script>

			swal.fire({
                title:'TRY AGAIN', 
                text:'".$email." has been registered.', 
                icon:'info',
                confirmButtonText:'I\'ll try again',
                

                }).then( (result) => {

                if(result.isConfirmed){
                swal.fire('Try a different email or check for proper spelling of this current email', '', 'success');
                }
                });

		</script>";
		
		return;
	}else{
		

		$stmt = $this->conn->prepare("INSERT INTO register VALUES (null, ?,?,?,?,?,?,?,?,?,?,?,?,?, CURRENT_TIMESTAMP)");

		$stmt->bind_param('sssssssssssss', $first_name, $surname, $email, $phone_number, $school_or_organisation_option, $school_or_organisation_name, $country, $state, $address, $role, $population, $is_stem, $brief);
		if($stmt->execute()){

			include('mail.php');
			$stmt->close();
			$this->conn->close();
			echo "<script>

				swal.fire({

	                title:'Thank You For Registering', 
	                text:'An email has been sent to you', 
	                icon:'success',   

	                }).then(() => window.location = 'index.php');

			</script>";
		}
	}


	
}




}
echo '<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>';
?>