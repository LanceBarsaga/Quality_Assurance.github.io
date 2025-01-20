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
    
</head>

<body>
    <div class="container">
        <!-- Logo Section -->
        <div class="logo">
          <img src="images/system/OCLogo.png" alt="Logo" width="120px" height="120px">
        </div>
    
        <!-- Title Section -->
        <div class="text">
          <h1>Quality Assurance Records Management System</h1>
        </div>
    
        <!-- Notifications Section -->
        <div class="notify">
          <a href="QAdashboard.html" target="_blank">
            <img src="images/system/notifications.png" alt="Notifications" width="80px" height="80px">
          </a>
        </div>
    
        <!-- Logout Section -->
        <a href="logout.php" target="_blank">
          <button class="logout"><strong>LOGOUT</strong></button>
        </a>
      </div>

<!-- container 1 Section -->
    <div class="container2">

<!-- back Section -->
<a href="[ADMIN]OCCSDashboard.php">
  <button class="back1"><strong>BACK</strong></button>
  </a>

<!-- progression Section -->
        <div class="progress-bar1">
          <div class="progress1" style="height: 40px;" >
          <div></div></div>
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
                   <th>APPROVED ON</th>
               </tr>
            </thead>

            <tbody>
                 <?php
                     $count = 1;

                     $sql_requirements = "SELECT * FROM occs_requirementtbl WHERE StatusID = 2";
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