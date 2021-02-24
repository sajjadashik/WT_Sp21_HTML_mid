<!DOCTYPE HTML>
<html>
	<head>
		<title>REGISTRATION</title>
	</head>
	<body>
		<?php
			$name="";
			$err_name="";
			$uname="";
			$err_uname="";
			$password="";
			$err_password="";
			$cpass="";
			$err_cpassword="";
			$email="";
			$err_email="";
			$code="";
			$err_code="";
			$phone="";
			$err_phone="";
			$street="";
			$err_street="";
			$city="";
			$err_city="";
			$state="";
			$err_state="";
			$zip="";
			$err_zip="";
			$err_bio="";
			
			$hasError=false;
			
			if($_SERVER['REQUEST_METHOD'] == "POST"){
				
				if(empty($_POST["name"])){
					$err_name="*Name Required";
					$hasError=true;
				}
				else{
					$name=htmlspecialchars($_POST["name"]);
				}
				if(empty($_POST["uname"])){
					$err_uname="*User Name Required";
					$hasError=true;
				}
				else if(strlen($_POST["uname"]) < 6){
					$err_uname="*Username should be at least 6 characters";
					$hasError=true;
				}
				else{
					$uname=htmlspecialchars($_POST["uname"]);
				}
				if(empty($_POST["password"])){
					$err_password = "*Password Required";
					$hasError=true;
				}
				else if(strlen($_POST["password"]) < 8){
					$err_password="*Password should be at least 8 characters";
					$hasError=true;
				}
				else if(strpos($_POST["email"],"#")){
				$err_uname="*Password should be contains Special Charcter";
				$hasError=true;}
				else if(strpos($_POST["email"],"?")){
				$err_uname="*Password should be contains Special Charcter";
				$hasError=true;}
				else if(ctype_upper($_POST["password"])){
					$err_password="*Password should be contains LowerCase";
					$hasError=true;
				}
				else if(ctype_lower($_POST["password"])){
					$err_password="*Password should be contains UpperCase";
					$hasError=true;
				}
				else{
					$password=$_POST["password"];
				}
				if(empty($_POST["cpass"])){
					$err_cpassword = "*Confirm Password Required";
					$hasError=true;
				}
				else if($cpass!=$password){
					$err_cpassword = "*Password & Confirm Password is Not Same";
				}
				else{
					$cpass=$_POST["cpass"];
				}
				if(empty($_POST["email"])){
               $err_email="*Please enter email";
			   $hasError=true;
				}
			    else{
					$i=strpos($_POST["email"],"@");
					if($i!=false){
						$j=strpos($_POST["email"],".com", $i+1);
						if($j!=false){
							$email=$_POST["email"];
						}
						else{
                        $err_email="*Invalid email";
						$hasError=true;
						}
					}
					else{
                    $err_email="*Invalid email";
					$hasError=true;
					}
				}
				if(empty($_POST["code"])){
               $err_phone="*Please enter code";
			   $hasError=true;
				}
			   else if(is_numeric($_POST["code"])==false){
                $err_phone="*Invalid Code";
				$hasError=true;
				}
            else{
                $code=$_POST["code"];
            } 
			if(empty($_POST["phone"])){
               $err_phone="*Please enter number";
			   $hasError=true;
				}
			   else if(is_numeric($_POST["phone"])==false){
                $err_phone="*Invalid Phone Number";
				$hasError=true;
				}
            else{
                $code=$_POST["phone"];
            } 
			if(empty($_POST["street"])){
                $err_street="*Please enter Street";
				$hasError=true;
            }
            else{
                $street=$_POST["street"];
            }

            if(empty($_POST["city"])){
                $err_city="*Please enter City ";
				$hasError=true;
            }
            else{
                $city=$_POST["city"];
            }
            if(empty($_POST["state"])){
                $err_state="*Please Enter State";
				$hasError=true;
            }
            else{
                $state=$_POST["state"];
            }
            if(empty($_POST["zip"])){
                $err_zip="*Please enter zip";
				$hasError=true;
            }
            else if(is_numeric($_POST["zip"])==false){
                $err_zip="*Zip number must be Number";
				$hasError=true;
            }
            else{
                $zip=$_POST["zip"];
            }
			if(empty($_POST["bio"])){
                $err_bio="*Bio Required";
				$hasError=true;
            }
            else{
                $bio=$_POST["bio"];
				
            }
				if(!$hasError){
					echo "Name: $name";
					echo "Username: $uname";
					echo "Password: $password";
					echo "Confirm Password: $cpass";
					echo "Email: $email";
					echo "Code: $code";
					echo "Number: $phone";
					echo "Street: $street";
					echo "City: $city";
					echo "State: $state";
					
				}
			}
		?>
		<fieldset>
			<legend><h1>Club Member Registration</h1></legend>
			<form action="" method="POST">
				<table >
					<tr>
						<td align=right ><span>Name:</span></td>
						<td><input type="text" value="<?php  echo $name; ?>" name="name">
						<span><?php echo $err_name;?></span></td>
					</tr>
					<tr>
						<td align=right ><span>Username:</span></td>
						<td><input type="text" value="<?php  echo $uname; ?>" name="uname">
						<span><?php echo $err_uname;?></span></td>
					</tr>
					<tr>
						<td align=right><span>Password:</span></td>
						<td><input type="password" value="<?php echo $password;?>"name="password">
						<span><?php echo $err_password;?></span></td>
					</tr>
					<tr>
						<td align=right ><span>Confirm Password:</span></td>
						<td><input type="password" name="cpass">
						<span><?php echo $err_cpassword;?></span></td>
					</tr>
					<tr>
						<td align=right ><span>Email:</span></td>
						<td><input type="text" value="<?php echo $email;?>" name="email">
						<span><?php echo $err_email;?></span></td>
						
					</tr>
					<tr>
						<td align=right ><span>Phone:<span></td>
						<td><input type="text" placeholder="code" name="code" size="4"><b> - </b><input type="text" placeholder="Number" name="phone" size="9"><span><?php echo $err_phone;?></span></td></td>
					</tr>
					<tr >
						<td align=right rowspan="3" ><span>Address:<span></td>
						<td><input type="text" placeholder="Street Address" name="street"><span><?php echo $err_street;?></span></td></td>
					</tr>
					<tr>
						<td><input type="text" placeholder="City" name="city" size="6"<span></span><b> - </b><input type="text" placeholder="State" name="state" size="7"><span><?php echo $err_city;?></span><span><?php echo $err_state;?></span></td>
						
					</tr>
					<tr>
						<td><input type="text" placeholder="Postal/Zip Code" name="zip"><span><?php echo $err_zip;?></span></td></td>
					</tr>
					<tr>
						<td align=right ><span>Birth Date:<span></td>
						<td>
							<select>
								<option>Day</option>
								<?php
									for($i=1;$i<=31;$i++)
									{
										echo "<option>$i</option>";
									}
								?>
							</select>
							<select>
								<option>Month</option>
								<?php
								    $month = array("January","February","March","April","May","June","July","August","September","October","November","December");
									foreach($month as $m)
									{
										echo "<option>$m</option>";	
									}
								?>
							</select>
							<select>
								<option >Year</option>
								<?php
									for($i=2021;$i>=1960;$i--)
									{
										echo "<option>$i</option>";
									}
								?>
							</select>
						</td>
					</tr>
					<tr>
						<td align=right ><span>Gender:</span></td>
						<td><input type="radio" value="Male" name="gender">Male<input type="radio" value="Female" name="gender">Female</td>
					</tr>
					<tr>
						<td align=right rowspan="4" ><span>Where Did You Hear <br> About Us?</span></td>
						<td><input type="checkbox" value="A Friend or Colleague" name="Hear[]">A Friend or Colleague</td>
					</tr>
					<tr>
							<td><input type="checkbox" value="Google" name="Hear[]">Google</td>
					</tr>
					<tr>
							<td><input type="checkbox" value="Blog Post" name="Hear[]">Blog Post</td>
					</tr>
					<tr>
							<td><input type="checkbox" value="News Article" name="Hear[]">News Article</td>
					</tr>
					<tr>
						<td align=right><span>Bio:</span></td>
						<td><textarea name="bio"></textarea><span><?php echo $err_bio;?></span></td></td>
					</tr>
					<tr>
					<td align="center" colspan="2" ><input type="Submit" value="Register"></td>
					</tr>
				</table>
			</form>
	   </fieldset>
	</body>
</html>