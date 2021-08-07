<?php

    include "connection.php";
      
       // try{
        $name = $_POST['name'];
        $type = $_POST['type'];
        $city = $_POST['city'];
        $street = $_POST['street'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $pass = sha1($_POST['password']);
        
        
        /*$fileName = basename($_FILES["image"]["name"]); 
        $fileType = pathinfo($fileName, PATHINFO_EXTENSION);
        $allowTypes = array('jpg','png','jpeg','gif'); 
        
        $image = $_FILES['image']['tmp_name']; 
        $imgContent = addslashes(file_get_contents($image));*/ 

							 
							 
		 if(getimagesize($_FILES['image']['tmp_name']) == FALSE){


			 echo "Please select an image";

		 }else{


			 $image = addslashes($_FILES['image']['tmp_name']);
			 //$name = addslashes($_FILES['image']['name']);
			 $image = file_get_contents($image);
			 $image = base64_encode($image);
			 //saveimage($name , $image);


		 }



          $sql = "INSERT INTO users (username,email ,password,type,city,street,phone,image)
                 VALUES ('$name','$email','$pass','$type','$city','$street','$phone','$image')";

          $reselt=$con->exec($sql);

          if($reselt){
            header('location: ../login.php?do=success');
          }
        
        
  //  }
      /*  catch (PDOException $e) {
            header('location: ../signup.php?do=error');
        } catch (Exception $e) {
          header('location: ../signup.php?do=error');
        }   */
       
      ?>