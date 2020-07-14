<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="assets/css/register.css" rel="stylesheet">
<link rel="shortcut icon" href="http://advaya8.com//img/favicon.png">
<title>Register</title>
</head>



<body>
    
    <?php
    include "connec.php";
    if(isset($_POST["SUBMIT"]))
    {
        $eventtype=$_POST["eventtype"];
    }
     
    ?>

    <div class="global-overlay">
				<div class="overlay skew-part">
					<div id='stars'></div>
					<div id='stars2'></div>
					<div id='stars3'></div>
				</div>
			</div>
<div id="id02" class="modal1">
  
  <form class="modal-content animate" action="/registerevent.php" method="POST">
    <div class="imgcontainer">
        <a href="hackathon.html"><span  class="close" title="Close Modal">&times;</span></a>
      <img src="../img/favicon.png" alt="Avatar" class="avatar">
      <div><h3>Event registration Form</h3></div>
      <div>
        <P>Contact number:9526558636</P>
      </div>

    </div>

    <div class="container">
        <form action="/registerevent.php" method="POST">

          <div class="form-group">
             <label for="event">Event</label>
            <?php
               echo '<input type="text" id="event" name="event" readonly value="'.$eventtype.'" placeholder="Your event..">'; ?>
            <label style="padding-top:10px" for="fname">First Name</label>
            <input type="text" id="fname" name="firstname" placeholder="Your name..">
          
            <label for="lname">Last Name</label>
            <input type="text" id="lname" name="lastname" placeholder="Your last name..">
          
           <label for="eml">Email</label>
            <input type="email" id="eml" name="email" placeholder="Your Email..">
           <label for="regno">College Registration number</label>
           <input type="text" id="regno" name="regno" placeholder="Your college registration number..">
           <label for="clg">College</label>
            <input type="text" id="clg" name="college" placeholder="Your college..">
            
           <label for="pno">Phone number</label>
           <input type="text" id="pno" name="phonenum" placeholder="Your Phone Number..">
        
            <label for="bran">Branch</label>
           <input type="text" id="bran" name="branch" placeholder="Your Branch..">

           <label for="sem">Semester</label>
           <select id="sem" name="sem" class="select-selected">
            <option value="0">Select Semester:</option>
            <option value="S1">S1</option>
            <option value="S2">S2</option>
            <option value="S3">S3</option>
            <option value="S4">S4</option>
            <option value="S5">S5</option>
            <option value="S6">S6</option>
            <option value="S7">S7</option>
            <option value="S8">S8</option>
            <option value="M1">M1</option>
            <option value="M2">M2</option>
            <option value="M3">M3</option>
            <option value="M4">M4</option>
           </select>
            <div class="submit">
                <input type="SUBMIT" value="SUBMIT" name="SUBMIT">
            </div>
          </div>
        </form>
    </div>

  </form>
</div>

<script>

// Get the modal
var modal = document.getElementById('id02');

// When the user clicks anywhere outside of the modal, close it

</script>

</body>
</html>
