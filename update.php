<?php
$conn = new mysqli('localhost','root','','covid');
if(count($_POST)>0) {
    mysqli_query($conn,"UPDATE details SET 
                    full_name='" . $_POST['full_name'] . "', 
                    gender='" . $_POST['gender'] . "', 
                    age='" . $_POST['age'] . "' ,
                    mobile_no='" . $_POST['mobile_no'] . "',
                    body_temp='" . $_POST['body_temp'] . "', 
                    covid_diagnosed='" . $_POST['covid_diagnosed'] . "',
                    covid_encounter='" . $_POST['covid_encounter'] . "', 
                    vaccinated='" . $_POST['vaccinated'] . "', 
                    nationality='" . $_POST['nationality'] . "' 
                    WHERE id='" . $_GET["id"] . "'");
        //  $message = "Record Modified Successfully";
        $message = 
            "<!DOCTYPE html>
            <script>
            function redir()
            {
            alert('Data Successfully Updated!   ');
            window.location.assign('index.php');
            }
            </script>
            <body onload='redir();'></body>";
    }
$result = mysqli_query($conn,"SELECT * FROM details WHERE id='" . $_GET['id'] . "'");
$row= mysqli_fetch_array($result);
?>



<html>
<head>
<title>Update Existing Record</title>
<meta name="viewport" content="width=device-width, initial-scale=1">  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"> 
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="styles.css"> 
</head>
<body>
<form name="frmUser" method="post" action="">
<div><?php if(isset($message)) { echo $message; } ?>
</div>

<div class="col-xs-12" style="padding-top:50px !important;">
       <div class="col-xs-4"></div>
       <div class="col-xs-4 form-background">
        <h2 class="text-center"><strong>COVID-19 HEALTH INFORMATION FORM <br>(Update Information)</strong></h3>
        <form style="padding:5px;" class="row g-3" action="" method="post">
            <div class="col-xs-12 input-text">
              <label for="full_name" class="form-label">Name</label>
              <input type="text" placeholder="Enter your Full Name" class="form-control" name="full_name" value="<?php echo $row['full_name']; ?>">
            </div>
            <div class="col-xs-12 input-text">
              <label for="gender" class="form-label">Gender</label>
              <input type="text" placeholder="Male/Female" class="form-control" name="gender" value="<?php echo $row['gender']; ?>">
            </div>
            <div class="col-xs-12 input-text">
              <label for="age" class="form-label">Age</label>
              <input type="text" placeholder="eg. 20" class="form-control" name="age" value="<?php echo $row['age']; ?>">
            </div>
            <div class="col-xs-12 input-text">
              <label for="mobile_no" class="form-label">Mobile No</label>
              <input type="text" placeholder="0912346789" class="form-control" name="mobile_no" value="<?php echo $row['mobile_no']; ?>">
            </div>
            <div class="col-xs-12 input-text">
              <label for="body_temp" class="form-label">Body Temperature</label>
              <input type="text" placeholder="eg. 35" class="form-control" name="body_temp" value="<?php echo $row['body_temp']; ?>">
            </div>
            <div class="col-xs-12 input-text">
              <label for="covid_diagnosed" class="form-label">Covid Diagnosed?</label>
              <input type="text" placeholder="Yes/No" class="form-control" name="covid_diagnosed" value="<?php echo $row['covid_diagnosed']; ?>">
            </div>
            <div class="col-xs-12 input-text">
              <label for="covid_encounter" class="form-label">Covid Encounter?</label>
              <input type="text" placeholder="Yes/No" class="form-control" name="covid_encounter" value="<?php echo $row['covid_encounter']; ?>">
            </div>
            <div class="col-xs-12 input-text">
              <label for="vaccinated" class="form-label">Vaccinated?</label>
              <input type="text" placeholder="Yes/No" class="form-control" name="vaccinated" value="<?php echo $row['vaccinated']; ?>">
            </div>
            <div class="col-xs-12 input-text">
              <label for="nationality" class="form-label">Nationality</label>
              <input type="text" placeholder="eg. Filipino" class="form-control" name="nationality" value="<?php echo $row['nationality']; ?>">
            </div>
           
            <div class="col-xs-12" style="padding-top:12px !important; padding-bottom: 15px !important;">
              <button type="submit" class="btn btn-primary">Save</button>
            </div>
          </form>
        </div>
        <div class="col-xs-4"></div>
    </div>

</form>
</body>
</html>