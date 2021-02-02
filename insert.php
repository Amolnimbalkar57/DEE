<html>
    <body>
    <form method="POST" class="enquiry-form" novalidate>
                    
                        <input type="text" name="name" id="enquiryName" placeholder="Enter Full Name"/><br/>
                        <div class="flex">
                            <div class="enquiry-phoneNumber">
                                
                                <input type="text" name="phone" id="phoneNumber" placeholder="Enter p"/><br/>
                            </div>
                            <div class="enquiry-email">
                    
                                <input type="text" name="email" id="email" placeholder="Enter Email"/><br/>
                            </div>
                        </div>
                  
                        <textarea name="message" id="message" placeholder="Enter Message"></textarea><br/>
                        <input type="submit" name="submit2" value="Send" onclick="sendEnquiry(this, 'dakshaenterprises5@gmail.com')"/>
                    </form>
</body>
                    </html>

                    !--PhP Starts here................................-->
<?php
   $dbhost = 'localhost';
   $dbuser = 'root';
   $dbpass = '';
   $dbname='daksha';
   $conn = mysqli_connect($dbhost, $dbuser, $dbpass,$dbname);
   error_reporting(0);
   if(! $conn ) {
      die('Could not connect: ' . mysqli_error());
   }
   
   echo 'Connected successfully';




   if($_POST['submit2'])
   {
    $un=$_POST['name'];
    $phone=$_POST['phone'];
	$email=$_POST['email'];
	$message=$_POST['message'];
	

	echo$un."  ".$phone." ".$email."  ".$message;
	if($un!="" && $phone!="" && $email!=""  && $message!="")
	{  
	 
	   $query2="Insert into enquiry values('$un','$phone','$email','$message')";
	   $data=mysqli_query($conn,$query2);
	   if($data)
	   {
		  # header('location:login.php');
		  echo '<script>alert("Message Sent... to  the Manager")</script>'; 
	   }


	}else{echo"All fields are Required...";}


   }





?>