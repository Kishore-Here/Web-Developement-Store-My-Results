<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Storemyresults</title>
    <link rel="stylesheet" href="style.css">
    <!---we had linked our css file----->
</head>
<body>
    <div class="full-page">
        <div class="navbar">
            <div>
                <a href='website.html'>STOREmyRESULTS</a>
            </div>
            <nav>
                <ul id='MenuItems'>
                    <li><a href='#'>Home</a></li>
                    <li><a href='#'>About Us</a></li>
                    <li><a href='#'>Services</a></li>
                    <li><a href='#'>Contact</a></li>
                    <li><button class='loginbtn' onclick="document.getElementById('login-           form').style.display='block'" style="width:auto;">Login</button></li>
                </ul>
            </nav>
        </div>
        <div id='login-form'class='login-page'>
            <div class="form-box">
                <div class='button-box'>
                    <div id='btn'></div>
                    
                    <button type='button'onclick='login()'class='toggle-btn'>Log In</button>
                    <button type='button'onclick='result()'class='toggle-btn'>Result Data</button>
                    <button type='button'onclick='register()'class='toggle-btn'>Register</button>
                </div>
                <div>
               
                <form id='login' class='input-group-login' action='validate.php' method='post'>
                    <input type='text'class='input-field'placeholder='Username' name='username' required >
		    <input type='password'class='input-field'placeholder='Enter Password' name='password' required>
		    <input type='checkbox'class='check-box'><span>Remember Password</span>
		    <button type='submit'class='submit-btn'>Log in</button>
		 </form>
         <form id='result' class='input-group-result' action='viewresult.php' method='post'>
                    <input type='text'class='input-field'placeholder='Enter USN' name='usn' required >
		    <input type='password'class='input-field'placeholder='Enter SEM' name='sem' required>
		    <button type='submit'class='submit-btn'>Proceed</button>
		 </form>
         <form action='register.php' method='post' id='register' class='input-group-register'>
		     <input type='text'class='input-field'placeholder='First Name' name='firstname' required>
		     <input type='text'class='input-field'placeholder='Last Name ' name='lastname' required>
		     <input type='text'class='input-field'placeholder='Username' name='username' required>
		     <input type='password'class='input-field'placeholder='Enter Password' name='password' required>
		     <input type='password'class='input-field'placeholder='Confirm Password' name='cpassword'  required>
		     <input type='checkbox'class='check-box'><span>I agree to the terms and                                                   conditions</span>
                    <button type='submit'class='submit-btn'>Register</button>
             </form>
</div>
            </div>
        </div>
    </div>
    <script>
        
        var a=document.getElementById('result');
        var x=document.getElementById('login');
		var y=document.getElementById('register');
		var z=document.getElementById('btn');
        function login()
		{
            a.style.left='-400px';
			x.style.left='50px';
			y.style.left='-500px';
			z.style.left='-5px';
		}
        function result()
		{
            a.style.left='100px';
			x.style.left='-300px';
			y.style.left='-500px';
			z.style.left='100px';
		}
		function register()
		{
            a.style.left='-180px';
			x.style.left='-400px';
			y.style.left='50px';
			z.style.left='200px';
		}
       
	</script>
	<script>
        var modal = document.getElementById('login-form');
        window.onclick = function(event) 
        {
            if (event.target == modal) 
            {
                modal.style.display = "none";
            }
        }
    </script>
</body>
</html