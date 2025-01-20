<?php
include('config.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="website icon" type="png" href="OCLogo.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QA Records Management System</title>

    <link href="https://fonts.googleapis.com/css2?family=Anta&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/664337fd0f.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<style>
  *{
        font-family: "Anta", serif;
      }
      body{
        overflow: hidden;
      }

</style>

<body>
<?php 
include('departmentCSS/nav.php'); 
include('departmentCSS/generatereport.php');

?>

<!-- container 1 Section -->
<div class="container2">

          <!-- back Section -->
          <a href="OCCSDashboard.php">
            <button class="back1"><strong>BACK</strong></button>
          </a>

          <!-- progression Section -->
          <div class="progress-bar1">
              <div class="progress1" style="height: 40px;" >
                <div></div>
              </div>
            <span>40%</span>
          </div>

    <!-- generate report Section -->
      <!-- table Section -->
      <div  div class="table2">
         <table class="table1">
             <thead>
                <tr>
                    <th>REQUIREMENTS</th>
                    <th>STATUS</th>
                    <th>DATE & TIME</th>
                </tr>
             </thead>

             <tbody>
                  <?php
                      $count = 1;

                      $sql_requirements = "SELECT * FROM occs_requirementtbl WHERE StatusID > 1";
                      // StatusID>>>>>  Missing = 0    Pending = 1    Approved = 2    Rejected = 3
                      $result = mysqli_query($conn, $sql_requirements);

                      while($row = mysqli_fetch_array($result)){
                          $uid= $row['Req_ID'];

                  ?>
                  <tr style="Text-align: center;">
                      <td><?php echo $row['Req_Title']; ?></td>
                      <td><?php echo $row['Status']; ?></td>
                      <td><?php echo $row['Date_Modified']; ?></td>
                  </tr>
                  <?php
                      }
                  ?>
             </tbody>
         </table>
      </div>
</div>    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>