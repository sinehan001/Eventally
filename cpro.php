<?php
ob_start();
session_start();

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
    <link rel="icon" href="logo1.png">
    <script>window.onbeforeunload = function() { return "Your account will not work, if you not complete your profile."; };</script>
	<title>Complete Your Profile - Eventally</title>
	<style>
         body
         {
         	background-color: #000000;
         	font-family: sans-serif;
         }
	    .heading
	    {
	    	font-family: sans-serif;
	    	color: white;
	    	display: flex;
	    	background-color: red;
	    	margin-top: -2em;
	    	padding-bottom: 0.5em;
	    	margin-left: -0.6em;
	    	margin-right: -0.5em;
	    }
	    .heading p
	    {
	    	font-size: 2em;
	    	padding-top: 2%;
	    	font-weight: bold;
	    }

         .container
         {
	      background-color: #ffffff;
	      text-align: center;
	      border-radius: 15px;
	      box-shadow: 0px 0px 12px grey;
	      width: 400px;
         }

    	    .container-center
         {
	     position: absolute;
	     top: 55%;
	     left: 50%;
	     transform: translate(-50%, -50%);
	     /*position: static;
	     margin-left: 37%;
	     margin-top: 5%;
	     margin-bottom: 5%;*/
          }


	    .div1
	    {
	    	margin-top: 2.3em;
	    	margin-left: 40%;
	    	padding-right: 1em;
	    }
	    @media only screen and (max-width: 1200px)
	    {
	    	.div1
	    	{
	    		margin-left: 35%;
	    	}
	    }
	    @media only screen and (max-width: 800px)
	    {
	    	.div1
	    	{
	    		margin-left: 25%;
	    	}
	    	.div2
	    	{
	    		margin-top: 1em;
	    	}
	    }
	    @media only screen and (max-width: 650px)
	    {
	    	.div1
	    	{
	    		margin-left: 20%;
	    	}
	    }
	    @media only screen and (max-width: 550px)
	    {
            .container
            {
                width: 350px;
            }
	    }
	    @media only screen and (max-width: 400px)
	    {
	    	.div1
	    	{
	    		margin-left: 10%;
	    	}
            .container
            {
                width: 250px;
            }
	    }
	    .div2
	    {
	    	margin-left: 1%;
	    	margin-top: 1em;
	    }

    	    .container h1
    	    {
    	    	background-color: red;
    	    	margin-top: -0.05em;
    	    	color: white;
    	    	border-top-left-radius: 15px;
    	    	border-top-right-radius: 15px;
    	    	padding-top: 0.4em;
    	    	padding-bottom: 0.4em;
    	    }
input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none;
}
	.rotate {
  animation: rotation 3s infinite linear;
}

@keyframes rotation {
  from {
    transform: rotate(0deg);
  }
  to {
    transform: rotate(359deg);
  }
}

input,button,select
{
    border-radius: 25px;
    margin: 18px;
    outline: none;
}
input,select
{
	height: 30px;
	width: 250px;
	border: 1px solid;
	text-indent: 10px;
	font-size: 18px;
	background-color: white;
}
input:focus,input:focus
{
	border: 2.5px solid red;
}
.sub
{
	height: 40px;
	width: 130px;
	border: 0px;
	background-color: red;
	color: white;
	font-size: 20px;
	cursor: pointer;
}
label
{
	color: black;
	font-size: 22px;
}
span
{
	color: white;
}
span a
{
	color: antiquewhite;
}

@media only screen and (max-width: 425px)
{
    .container
    {
        width: 90%;
    }
	input,select
	{
		width: 200px;
	}
}

.modal {
  display: none;
  position: fixed; 
  z-index: 1; 
  padding-top: 250px;
  left: 0;
  top: 0;
  display: block;
  width: 100%;
  height: 100%;
  overflow: auto;
  background-color: rgb(0,0,0); 
  background-color: rgba(0,0,0,0.4);
  }
  .modal-content {
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 80%;
}

.close {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}
.texts
{
  padding-top: 50px;
  text-align: center;
  font-size: 22px;
  font-family: arial;
  font-weight: bold;
}
.close:hover,.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}
	</style>
</head>
<body>
<div id="myModal" class="modal">
  <div class="modal-content">
    <span class="close">&times;</span>
    <p class="texts">Only on Completion of your profile setup, you will able to register to clubs and events. So, Be Aware!!!</p>
  </div>
</div>
	<div class="heading heading-center">
		<div class="div1" id="div1">
            <img src="logo1.png" class="rotate" width="70px">
        </div>
        <div class="div2">
        	<p>Eventally</p>
	    </div>
	</div>
	<div class="container container-center">
		<h1> Set Profile </h1>
		<form action="<?php echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data" method="POST">
			      			<!--<input type="text" name="college" placeholder="College" required>-->
			      			<select name="college">
			      			    <option selected disabled>Select College</option>
			      			    <option value="Velammal Engineering College">Velammal Engineering College</option>
			      			</select>
			<input type="text" name="ybs" placeholder="Year/Branch/Section" required>
			<input type="number" name="wnum" placeholder="Whatsapp Number" required>
			<input type="url" name="smedia" placeholder="Social Media URL(optional)" optional>
			    	<br>
			    	<label for="images">Upload Image(jpg/png)</label>
			    	<input type="file" id="images" accept="image/*" name="images" style="padding-top: 3px;" required>
			    <input type="submit" name="submit" class="sub" value="Complete">
            <br>
		</form>
	</div>
	<?php
     if($_SERVER['REQUEST_METHOD'] == "POST"){
          $dbserver="sg2plzcpnl462821";
          $dbuser="sinehan001";
          $dbpass="sinehan001";
          $dbname="eventally";
     	  $name = $_SESSION['name'];
     	  $email = $_SESSION['email'];
     	  $college = $_POST['college'];
     	  $ybs = $_POST['ybs'];
     	  $wnum = $_POST['wnum'];
     	  $smedia = $_POST['smedia'];
       if (isset($_POST['submit'])) {
 
        $filename = $_FILES["images"]["name"];
        $tempname = $_FILES["images"]["tmp_name"];   
        $folder = "img/profile/".$filename;

  $conn=mysqli_connect($dbserver,$dbuser,$dbpass,$dbname);  
  $result=mysqli_query($conn,"SELECT * from prof"); 
       while($row = mysqli_fetch_assoc($result))
       {
           if($folder == $row['photo'])
           {
               header("Location: rename.php");
               exit();
           }
       }
     
        // Now let's move the uploaded image into the folder: image
        if (move_uploaded_file($tempname, $folder))  {
            $msg = "Image uploaded successfully";
     	  $conn = mysqli_connect($dbserver, $dbuser, $dbpass, $dbname);
     	  	/*$sql = "INSERT into prof (name, email, college, ybs, wnum, smedia, photo) VALUES('$name', '$email', '$college', '$ybs', '$wnum', '$smedia', 'img/profile/$filename')";*/
     	  	$sql = "UPDATE prof SET college='".$college."' where email='".$email."'";
     	  	$sql1 = "UPDATE prof SET ybs='".$ybs."' where email='".$email."'";
     	  	$sql2 = "UPDATE prof SET wnum = '".$wnum."' where email='".$email."'";
     	  	$sql3 = "UPDATE prof SET smedia='".$smedia."' where email='".$email."'";
     	  	$sql4 = "UPDATE prof SET photo='img/profile/$filename' where email='".$email."'";
     	  	mysqli_query($conn,$sql);
     	  	mysqli_query($conn,$sql1);
     	  	mysqli_query($conn,$sql2);
     	  	mysqli_query($conn,$sql3);
     	  	mysqli_query($conn,$sql4);
     	    $_SESSION['college'] = $college;
     	    $_SESSION['ybs'] = $ybs;
     	    $_SESSION['num'] = $wnum;

            header("Location: clubs.php");
            exit();
        }else{
            $msg = "Failed to upload image";
      }
  }
     }?>
</body>
<script>
var modal = document.getElementById("myModal");
var spand = document.getElementsByClassName("close")[0];
spand.onclick = function() {
  modal.style.display = "none";
}
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>
</html>