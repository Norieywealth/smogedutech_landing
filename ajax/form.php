<?php

                  // Get inputs
                  $first_name = $_POST['first_name']; $surname = $_POST['surname'];
                  $email = $_POST['email']; $phone_number = $_POST['phone_number'];
                  $school_or_organisation_option = $_POST['school_or_organisation']; 

                  if($school_or_organisation_option == 'SCHOOL'){

                    $school_or_organisation_name = $_POST['school_name'];  $country = $_POST['school_country'];

                    if($country == 'Nigeria'){
                      $state = $_POST['school_state'];
                    }else{
                      $state = $_POST['school_other_state'];
                    }
                    
                     $address = $_POST['school_address'];
                     $role = $_POST['role_in_school'];  $school_population = $_POST['school_population'];
                    $is_stem = $_POST['is_stem'];


                  }else if($school_or_organisation_option == 'ORGANISATION'){


                     $school_or_organisation_name = $_POST['organisation_name']; $country = $_POST['organisation_country'];

                    if($country == 'Nigeria'){
                      $state = $_POST['organisation_state'];
                    }else{
                      $state = $_POST['organisation_other_state'];
                    }
                    
                    $address = $_POST['organisation_address'];
                    $role = $_POST['role_in_organisation']; 
                    $brief = $_POST['brief'];

                  }

                  if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                    echo '<div class="alert aler-danger">Email Format Incorrect</div>';
                  }else{

                     // import module
                    require '../config/user.php';

                    // Create Instance of User Class extended from DbClass
                    $user = new User();

                    $user->register($first_name, $surname, $email, $phone_number, $school_or_organisation_option, $school_or_organisation_name, $country, $state,$address, $role, (isset($population)) ? $population : '', (isset($is_stem)) ? $is_stem : '', (isset($brief)) ? $brief : '');

                  }
?>