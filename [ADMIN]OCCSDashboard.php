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
    <style>
      *{
        font-family: "Anta", serif;
      }
      body{
        overflow: hidden;
      }
    </style>
</head>

<body>
    <?php
    include('QACSS/requirement.php');
    include('QACSS/[ADMIN]NavBar.php');  
    include('QACSS/generatereport.php');
    include('QACSS/modal.php');
    ?>
    <!-- back Section -->
      <a href="departmentmap.php">
      <button class="back"><strong>BACK</strong></button>
      </a>
    <!-- Notification Section -->
      <div class="NotificationContainer" id="Notif" style="Height: 100%; width: 40%; position:absolute; right: -50%; top:0%; background-color: black; z-index:2; transition: .3s ease-in-out;">
        <div class="NotificationInternalContainer" style="height:96%; width:96%; margin-left:2%; margin-top:2%; background-color: #303030; border-radius: 10px;">
          <div class="ButtonList" style="Width:100%; display:flex; flex-direction:row; justify-content:space-evenly;">
            <button onclick="OpenInbox()" class="InboxBTN" 
                    style="color: rgb(255, 255, 255); background-color:rgb(63, 156, 55);font-size: 1.4vw; width:39%; padding: 10px; margin-top: .8vw; border-radius: 10px; a:hover{background-color:rgb(100, 247, 86)}"
                    onmouseover="this.style.backgroundColor='rgb(62, 255, 45)'; this.style.color='rgb(0, 0, 0)'"
                    onmouseout="this.style.backgroundColor='rgb(63, 156, 55)'; this.style.color='rgb(255, 255, 255)'">
              INBOX   <i class="fa-solid fa-envelope"></i>
            </button>
            <button onclick="OpenHistory()" class="HistoryBTN" 
                    style="color: rgb(255, 255, 255); background-color: #3779a0; font-size: 1.4vw; width:39%; padding: 10px; margin-top: .8vw; border-radius: 10px;"
                    onmouseover="this.style.backgroundColor='rgb(50, 180, 255)'; this.style.color='rgb(0, 0, 0)'"
                    onmouseout="this.style.backgroundColor=' #3779a0'; this.style.color='rgb(255, 255, 255)'">
              HISTORY   <i class="fa-solid fa-clock"></i>
            </button>
            <button class="BackBTN" style="background-color: #912828;font-size: 1.4vw; width:12%; padding: 10px; margin-top: .8vw; border-radius: 10px;"
                    onmouseover="this.style.backgroundColor='rgb(255, 25, 25)';"
                    onmouseout="this.style.backgroundColor=' #912828'"
                    onclick="closeNotif()">
              <i class="fa-solid fa-arrow-right"></i>
            </button>
          </div>
          <div id="NotifContentsInbox" style="position: absolute; background-color:rgb(121, 218, 112); height: 84%; width: 92%; margin-top: 1vw; margin-left: .8vw; border-radius: 10px;">

          </div>
          <div id="NotifContentsHistory" style="display:none; position: absolute; background-color:rgb(54, 120, 196); height: 84%; width: 92%; margin-top: 1vw; margin-left: .8vw; border-radius: 10px;">

          </div>
        </div>
      </div>

    <!-- requirements Section -->
    <div class="requirement">  
        <a href="https://drive.google.com/drive/folders/1RhA9_x6fGPg9P-aeaN648L7R9onjpdrL" 
         target="_blank" class="req-btn">REQUIREMENTS 1</a>
        <a href="https://drive.google.com/drive/folders/1KnTTgykiQkHC354NuBTdQl8iHohtCuoI"
         target="_blank" class="req-btn">REQUIREMENTS 2</a>
        <a href="ADMINGenerateReport.php"
         target="_blank" class="req-btn">REQUIREMENTS 3</a>
        <a href="ADMINGenerateReport.php" target="_blank" class="req-btn">REQUIREMENTS 4</a>
        <a href="ADMINGenerateReport.php" target="_blank" class="req-btn">REQUIREMENTS 5</a>
        <a href="ADMINGenerateReport.php" target="_blank" class="req-btn">REQUIREMENTS 6</a>
        <a href="ADMINGenerateReport.php" target="_blank" class="req-btn">REQUIREMENTS 7</a>
        <a href="ADMINGenerateReport.php" target="_blank" class="req-btn">REQUIREMENTS 8</a>
        <a href="ADMINGenerateReport.php" target="_blank" class="req-btn">REQUIREMENTS 9</a>
        <a href="ADMINGenerateReport.php" target="_blank" class="req-btn">REQUIREMENTS 10</a>
    </div>

<!-- container 1 Section -->
    <div class="container1">

<!-- progression Section -->
        <div class="progress-bar">
          <div class="progress" style="height: 30px;">
          <div></div></div>
        <span>40%</span>
    </div>

<!-- generate report Section -->
<div class="generatereport">
        <a href="ADMINGenerateReport.php" class="btn-generate">GENERATE REPORT</a>
</div>
<!-- table Section -->
    <table>
        <thead>
            <tr>
                <th>REQUIREMENTS</th>
                <th>STATUS</th>
                <th>APPROVE</th>
                <th>REJECT</th>
                <th>DATE & TIME</th>
            </tr>
        </thead>

        <tbody>
          <?php
              $count = 1;

              $sql_requirements = "SELECT * FROM occs_requirementtbl";
              $result = mysqli_query($conn, $sql_requirements);

              while($row = mysqli_fetch_array($result)){
                  $uid= $row['Req_ID'];
          ?>
          <tr style="Text-align: center;">
              <td><?php echo $row['Req_Title']; ?></td>
              <td><?php echo $row['Status']; ?></td>
              <td >
                    <a href="[ADMIN]OCCSDashboard.php?Approve_Document=<?php echo $row['Req_ID']; ?>" class="ApproveBTN">
                    <button><i class="fa-solid fa-check"></i></button></a>
              </td>
              <td >
                    <a href="[ADMIN]OCCSDashboard.php?Reject_Document=<?php echo $row['Req_ID']; ?>" class="RejectBTN">
                    <button><i class="fa-solid fa-circle-xmark"></i></button></a>
              </td>

              <td><?php echo $row['Date_Modified']; ?></td>
          </tr>
          <?php
              }
          ?>
      </tbody>

    </table>

    <?php
            if(isset($_GET['Approve_Document'])){
              $requirement_id = $_GET['Approve_Document'];

              $sql_requirementID = "SELECT * FROM occs_requirementtbl WHERE Req_ID='$requirement_id'";
              $result = mysqli_query($conn, $sql_requirementID);

              while($row = mysqli_fetch_array($result)){
              
                ?>

              <div class="ModalConfirmation1" id="Confirmation1">
                <div>
                    
                    <h1 class="texts">Mark this document as Approve?</h1>
                    
                    <button class="Yes" onclick="Confirm1()">Yes</button>
                    <button class="No" onclick="back()" type="submit">No</button>
                    
                </div>
              </div>

              <div class="ModalConfirmation2" id="Confirmation2">
                  <div>
                      <h1 class="texts" >Are you sure?</h1>

                      <form action="AdminStatusUpdate.php" method="post">
                        <input type="text" style="display: none;" name="Requerement_ID" value="<?php echo $row['Req_ID']  ?>" readonly/>
                        <input type="text" style="display: none;" name="Status_ID" value="<?php echo $row['StatusID']  ?>" readonly/>
                        <button class="Yes1" name="ApproveDocument" type="submit">Yes</button>                        
                      
                        <button class="No1" name="BackToAdminDashboard">No</button>
                      </form>
                  </div>
              </div>
              
            <?php
              } } 
              
            if(isset($_GET['Reject_Document'])){
              $requirement_id = $_GET['Reject_Document'];

              $sql_requirementID = "SELECT * FROM occs_requirementtbl WHERE Req_ID='$requirement_id'";
              $result = mysqli_query($conn, $sql_requirementID);

              while($row = mysqli_fetch_array($result)){
              
                ?>

              <div class="ModalConfirmation1" id="Confirmation1"  style="width: 30vw; background-color: rgb(27, 27, 27); border: 3px solid black; top: 5vw; right: 35vw; padding: 30px; border-radius: 10px; position: absolute; z-index:2;">
                <div>
                    
                    <h1 style="color: rgb(248, 222, 76); font-size: 3vw;">Mark this document as Rejected?</h1>
                    
                    <button style="background-color: rgb(101, 238, 71); color: rgb(0, 0, 0)" onclick="Confirm1()">Yes</button>
                    <button onclick="backADMIN()" style="background-color: rgb(245, 46, 46); color: rgb(0, 0, 0)" type="submit">No</button>
                    
                </div>
              </div>

              <div class="ModalConfirmation2" id="Confirmation2" style="display: none; width: 30vw; height: 10vw; background-color: rgb(27, 27, 27); top: 5vw; right: 35vw; border: 3px solid black; padding: 14px; border-radius: 10px; position: absolute; z-index:2;">
                  <div>
                      <h1 style="color: rgb(248, 222, 76); font-size: 2vw;">State the reason for rejection</h1>

                      <form action="AdminStatusUpdate.php" method="post">
                        <input type="text" style="display: none;" name="Requerement_ID" value="<?php echo $row['Req_ID']  ?>" readonly/>
                        <input type="text" style="display: none;" name="Status_ID" value="<?php echo $row['StatusID']  ?>" readonly/>
                        <input type="text"name="reason" style="width: 100%; font-size: 1vw;"/>
                        <button style="background-color: rgb(101, 238, 71); color: rgb(0, 0, 0)" name="Reject_Document" type="submit">Done</button>                        
                      
                        <button name="BackToAdminDashboard" style="background-color: rgb(245, 46, 46); color: rgb(0, 0, 0)">Cancel</button>
                      </form>
                  </div>
              </div>
              
            <?php
              } }
              
              
              ?>


      <script>
          function backADMIN() {
            window.location.href='[ADMIN]OCCSDashboard.php';
          }
          function Confirm1() {
              var x = document.getElementById("Confirmation1");
              var y = document.getElementById("Confirmation2");
              if (x.style.display === "none") {
                x.style.display = "block";
              } else {
                x.style.display = "none"
                y.style.display = "block";
              }
          }
          function OpenInbox() {
              var x = document.getElementById("NotifContentsInbox");
              var y = document.getElementById("NotifContentsHistory");
              if (x.style.display === "none") {
                x.style.display = "block";
                y.style.display = "none";
              }
          }function OpenHistory() {
              var x = document.getElementById("NotifContentsHistory");
              var y = document.getElementById("NotifContentsInbox");
              if (x.style.display === "none") {
                x.style.display = "block";
                y.style.display = "none";
              }
          }
          function openNotif() {
            document.getElementById("Notif").style.right = "0";
          }
          
          function closeNotif() {
                  document.getElementById("Notif").style.right = "-50%";
          }
      </script>

</div>    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>