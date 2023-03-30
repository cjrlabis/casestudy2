<!DOCTYPE html>  
<html lang="en">  
<head>  
  <title>COVID-19 Health Information Form</title>  
    
  <meta name="viewport" content="width=device-width, initial-scale=1">  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"> 
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="styles.css"> 
</head>  
<body>
    <div class="container-fluid" style="margin-bottom:50px !important;">
    </div>  
<div class="container-fluid">
    <div class="col-xs-12">
       <div class="col-xs-3 form-background">
        <h3 class="text-center"><strong>COVID-19 HEALTH INFORMATION FORM</strong></h3>
        <form style="padding:5px;" class="row g-3" action="connect.php" method="post">
            <div class="col-xs-12 input-text">
              <label for="full_name" class="form-label">Name</label>
              <input type="text" placeholder="Enter your Full Name (First , Middle , Last)" class="form-control" name="full_name">
            </div>
            <div class="col-xs-12 input-text">
              <label for="gender" class="form-label">Sex at Birth:</label>

                <div>
                  <label class="radio-inline">
                    <input type="radio" name="gender" id="genderMale" value="Female"> Female
                  </label>
                  <label class="radio-inline">
                    <input type="radio" name="gender" id="genderFemale" value="Male"> Male
                  </label>
                </div>
            </div>
            <div class="col-xs-12 input-text">
              <label for="age" class="form-label">Age</label>
              <div class="m-width-70">
                <input type="text" placeholder="eg. 20" class="form-control" name="age" maxlength="3" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1').replace(/^0[^.]/, '0');">
              </div>
            </div>
            <div class="col-xs-12 input-text">
              <label for="mobile_no" class="form-label">Mobile No</label>
              <div class="m-width-150">
                <input type="text" placeholder="0912346789" class="form-control m-width-300" name="mobile_no" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1').replace(/^0[^.]/, '0');" maxlength="11">
              </div>
            </div>
            <div class="col-xs-12 input-text">
              <label for="body_temp" class="form-label">Body Temperature</label>
              <div class="m-width-70">
                <input type="text" placeholder="eg. 35" class="form-control" name="body_temp" maxlength="3" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1').replace(/^0[^.]/, '0');">
              </div>
            </div>
            <div class="col-xs-12 input-text">
              <label for="covid_diagnosed" class="form-label">Covid Diagnosed?</label>

              <input type="checkbox" name="covid_diagnosed"> Yes
            </div>
            <div class="col-xs-12 input-text">
              <label for="covid_encounter" class="form-label">Covid Encounter?</label>
              <input type="checkbox" name="covid_encounter"> Yes
            </div>
            <div class="col-xs-12 input-text">
              <label for="vaccinated" class="form-label">Vaccinated?</label>

              <input type="checkbox" name="vaccinated"> Yes
            </div>
            <div class="col-xs-12 input-text">
              <label for="nationality" class="form-label">Nationality</label>
              <!-- <input type="text" placeholder="eg. Filipino" class="form-control" name="nationality"> -->

              <div class="m-width-150">
                <select class="form-control" name="nationality">
                  <option value=""></option>
                  <option value="American">American</option>
                  <option value="Filipino">Filipino</option>
                  <option value="Japanese">Japanese</option>
                  <option value="Korean">Korean</option>
                  <option value="Thai">Thai</option>
                </select>
              </div>
            </div>
           
            <div class="col-xs-12" style="padding-top:12px !important; padding-bottom: 15px !important;">
              <button type="submit" class="btn btn-primary">Save</button>
            </div>
          </form>

       </div>
       <div class="col-xs-9">

       <?php
                // $c=1;
                $conn = new mysqli('localhost','id20534056_kent','/r-7{v>~-jI$Rlnm','id20534056_covid');

                //SQL Query to Fetch Data from DB 
                $selVacc="SELECT count(id) as cnt FROM details where vaccinated = 'on'";
                $queryVacc=$conn->query($selVacc)->fetch_assoc();

                $selCovid="SELECT count(id) as cnt FROM details where covid_diagnosed = 'on'";
                $queryCovid=$conn->query($selCovid)->fetch_assoc();
                
              ?>
                <div>
                  <div class="col-xs-6 dashboard">Total Cases: <?php echo $queryCovid['cnt']; ?></div>
                  <div class="col-xs-6 dashboard">Vaccinated: <?php echo $queryVacc['cnt']; ?></div>
              </div>
        
        <table class="table table-striped">
            <thead style="background-color:rgb(233, 233, 233)">
              <tr>
                <th scope="col">#</th>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Gender</th>
                <th scope="col">Age</th>
                <th scope="col">Mobile</th>
                <th scope="col">Body Temp</th>
                <th scope="col">Covid Diagnosed</th>
                <th scope="col">Covid Encounter</th>
                <th scope="col">Vaccinated</th>
                <th scope="col">Nationality</th>
                <th scope="col">Actions</th>
              </tr>
            </thead>
            <tbody>
              <!--DB Connection-->
              <?php
                // $c=1;
                $conn = new mysqli('localhost','id20534056_kent','/r-7{v>~-jI$Rlnm','id20534056_covid');
                if($conn){
                  // echo "Connection Success";
                } else {
                  // echo "Connection Unsuccessful";
                }

                //SQL Query to Fetch Data from DB 
                $sel="SELECT * FROM details";
                $query=$conn->query($sel);
                $index = 1;
                while($row=$query->fetch_assoc())
                {
              ?>
                <tr>
                  <td><?php echo $index; ?></td>
                  <td><?php echo $row['id']; ?></td>
                  <td><?php echo $row['full_name']; ?></td>
                  <td><?php echo $row['gender']; ?></td>
                  <td><?php echo $row['age']; ?></td>
                  <td><?php echo $row['mobile_no']; ?></td>
                  <td><?php echo $row['body_temp']; ?></td>
                  <td><?php echo ($row['covid_diagnosed'] ==='on' ? "Yes":"No"); ?></td>
                  <td><?php echo ($row['covid_encounter'] ==='on' ? "Yes":"No"); ?></td>
                  <td><?php echo ($row['vaccinated'] ==='on' ? "Yes":"No"); ?></td>
                  <td><?php echo $row['nationality']; ?></td>
                  <td>
                      <button class="btn btn-info"><a style="color:white !important; font-weight:bold" href="update.php?id=<?php echo $row['id']; ?>" target="_blank">Edit</a></button>
                      <button class="btn btn-danger"><a style="color:white !important; font-weight:bold" href="delete.php?id=<?php echo $row["id"]; ?>" target="_blank">Delete</a></button>
                      
                    </td>
                </tr>
              <?php
                  $index++;
                }
              ?>
            </tbody>
          </table>
       </div>
    </div>
</div>  
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  

  <script type=”text/javascript”>
  setInterval(‘location.reload()’, 2000);
  </script>
</body>  
</html>  