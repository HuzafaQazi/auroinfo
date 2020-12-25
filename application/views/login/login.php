<!DOCTYPE html>
<?php

if($_POST['submit']==1){
    $db = getDatabase();
	$email=addslashes($_POST['username']);
	$sql="select USER_ID FROM USERS WHERE EMAIL_ID='$email'";
	$res=$db->executeQuery($sql);
    $row1=$db->fetchArray($res); 
	IF($row1['USER_ID']>0){
		$password=$_POST['password'];
		$password = md5($password); 
		$sql2="SELECT * FROM USERS WHERE PASSWORD='$password'";
		$res2=$db->executeQuery($sql2);
		$row=$db->fetchArray($res2);
		if($row['USER_ID']>0){   
			$_SESSION['USER_ID']=$row['USER_ID'];
			$_SESSION['FULL_NAME']=$row['FULL_NAME'];
			$_SESSION['MOBILE_NUMBER']=$row['MOBILE_NUMBER'];
			$_SESSION['EMAIL_ID']=$row['EMAIL_ID'];
			//$_SESSION['TOKEN']=$token; 
			?> <script> window.location.href='add_ticket'; </script> <?php
		}else{ 
			$xxx=1;
		} 
	}ELSE{ 
		$xxx=2;
	}		
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PeerXp Support</title>
    <link rel="stylesheet" type="text/css" href="assets/dist/css/styles.css">
	<link rel="icon" type="image/png" sizes="16x16" href="images/pwslab-gear-white.png">
</head>
<body style="background: #f3f5f7;margin:0px;">
  <?php
   
   include('includes/header.php');
   //include($css_path);
   ?>

        <div class="Layout__oneColumn Layout__fullWidth" id="layoutContainer" style="min-height: 401px;">
            <div class="Layout__layout1" style="width: 100%;">
                <div class="Signin__wrapper">
                    <div class="Signin__loginBox commonStyle__dFlexJcAc">
                        <div class="Signin__details undefined">
                            <div class="Signin__part commonStyle__Wd50"><span class="Signin__title commonStyle__displayBlock commonStyle__fweight600">Already a member?</span><span data-id="portal_signin" class="Signin__subTitle commonStyle__displayBlock">Sign In</span>
                                <section class="signinoutersection">
                                        <section class="signincontainer">
                                            <form action="" name="signinform" id="signinform" method="post" class="form" novalidate="true" autocomplete="off">
                                                <dl>
                                                    <dd>
                                                        <input class="inputBox" type="text" name="username" id="username" placeholder="Email Address" autofocus="">
                                                    </dd>
                                                </dl>
                                                <dl>
                                                    <dd>
                                                        <input class="inputBox" type="password" name="password" id="password" placeholder="Password">
                                                    </dd>
                                                </dl>
                                                <dl class="za-captcha-container" style="display: none;">
                                                    <dd>
                                                        <input class="inputBox" type="text" name="captcha" placeholder="Enter the word seen in the below image" disabled=""> <img src="/accounts/images/spacer.gif" class="za-captcha">
                                                    </dd>
                                                </dl>
                                                <dl>
                                                    <dd class="checkBox">
                                                        <label class="rememberMe">
                                                            <input type="checkbox" name="sremember" value="true"> Remember me
                                                        </label>
                                                       <button type="submit" class="btn big-btn primary" name="submit" id="submit" value="1">Sign In</button>
                                                    </dd>
                                                </dl>
                                            </form>
                                        </section>
                                    </section>
                            </div>
                            </div>
                        </div>
                    </div>
                        </div>
                    </div>
                  <?php
				  include('includes/footer.php');
				  include($js_path);
				  ?>
</body>
<script src="assets/node_modules/jquery/jquery-3.2.1.min.js"></script>
<script src="assets/dist/js/jquery.validate.min.js"></script>


	
	<script>

$.validator.addMethod("regx", function(value, element, regexpr) {          
return regexpr.test(value);
}, "Letters only");

(function($,W,D)
{

    var JQUERY4U = {};
 
    JQUERY4U.UTIL =
    {
        setupFormValidation: function()
        {
            //form validation rules
            $("#signinform").validate({
                rules: {
                      username: {
                          required:true,
						  email:true
                          
                      },  
                      password: {
                            required:true
                            
                       } 
					  
                 },
                messages: {
                      username: {
                          required:"<font color='red'>Enter Email Id </font>",
                          email:"<font color='red'>Please enter a valid email address. </font>"
                          
                      },
                      password: {
                          required:"<font color='red'>Enter Password </font>"
                          
                      }
					  
                },
                submitHandler: function(form) {
                 form.submit();
                }
            });
        }
    }
 
    //when the dom has loaded setup form validation rules
    $(D).ready(function($) {
        JQUERY4U.UTIL.setupFormValidation();
		

    });
 
})(jQuery, window, document);

</script>

<?php if($xxx==1){ ?>
			<script> 
			Swal.fire({
					 text:"Invalid Password",
					type: 'error',
					showConfirmButton: false,
					timer: 2500
			}).then((result) => {});
			</script>	
	<?php }elseif($xxx==2){ ?>
		<script> 
		Swal.fire({
                 text:"Invalid Email Id",
                type: 'error',
				showConfirmButton: false,
                timer: 2500
        }).then((result) => {});
		</script>	
	<?php } ?>
</html>