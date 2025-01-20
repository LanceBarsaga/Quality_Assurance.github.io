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
include('departmentCSS/requirement.php');
include('departmentCSS/modal.php');
?>

    <!-- Requirements Section -->
    <div class="requirement">
        <a href="OCCSDashboard.php?folder_id=<?php echo '1'; ?>" class="open-modal-btn" onclick="openTab()">REQUIREMENTS 1</a>
        <a href="OCCSDashboard.php?folder_id=<?php echo '2'; ?>" class="open-modal-btn" onclick="openTab()">REQUIREMENTS 2</a>
        <a href="OCCSDashboard.php?folder_id=<?php echo '3'; ?>" class="open-modal-btn" onclick="openTab()">REQUIREMENTS 3</a>
        <a href="OCCSDashboard.php?folder_id=<?php echo '4'; ?>" class="open-modal-btn" onclick="openTab()">REQUIREMENTS 4</a>
        <a href="OCCSDashboard.php?folder_id=<?php echo '5'; ?>" class="open-modal-btn" onclick="openTab()">REQUIREMENTS 5</a>
        <a href="#" class="open-modal-btn">REQUIREMENTS 6</a>
        <a href="#" class="open-modal-btn">REQUIREMENTS 7</a>
        <a href="#" class="open-modal-btn">REQUIREMENTS 8</a>
        <a href="#" class="open-modal-btn">REQUIREMENTS 9</a>
        <a href="#" class="open-modal-btn">REQUIREMENTS 10</a>

            <!--- For opening folder--->
            <script>
              function openTab() {
                window.open("https://drive.google.com/drive/folders/1RhA9_x6fGPg9P-aeaN648L7R9onjpdrL", "_blank");
              }
            </script>
    </div>
            <?php
            if(isset($_GET['folder_id'])){
              $requirement_id = $_GET['folder_id'];

              $sql_requirementID = "SELECT * FROM occs_requirementtbl WHERE Req_ID='$requirement_id'";
              $result = mysqli_query($conn, $sql_requirementID);

              while($row = mysqli_fetch_array($result)){
              
                ?>

              <div class="ModalConfirmation1" id="Confirmation1">
                <div>
                    <h1 class="texts">Have you submitted the files?</h1>
                    
                    <button class="Yes" onclick="Confirm1()"><b>Yes</b></button>
                    <button class="No" onclick="back()" type="submit"><b>Not yet</b></button>
                    
                    <script>
                      function back() {
                        window.location.href='OCCSDashboard.php';
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
                    </script>
                </div>
              </div>

              <div class="ModalConfirmation2" id="Confirmation2">
                  <div>
                      <h1 class="texts">Are you sure?</h1>

                      <form action="UserStatusUpdate.php" method="post">
                        <input type="text" style="display: none;" name="Requerement_ID" value="<?php echo $row['Req_ID']  ?>" readonly/>
                        <input type="text" style="display: none;" name="Status_ID" value="<?php echo $row['StatusID']  ?>" readonly/>
                        <button class="Yes1" name="updatestatus" type="submit">Yes</button>                                              
                        <button class="No1" name="BackToUsersDashboard">No</button>
                      </form>
                  </div>
              </div>
              
            <?php
              } } ?>


    <!-- Other Content -->
<div class="container1">
        <!-- Progression Section -->
        <div class="progress-bar">
            <div class="progress" style="height: 30px;">
                <div></div>
            </div>
            <span>40%</span>
        </div>

        <!-- Generate Report Section -->
        <div class="generatereport">
            <a href="OCCSGenerateReport.php" class="btn-generate">GENERATE REPORT</a>
        </div>


        <!-- Table Section -->
        <table>
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
    
                    $sql_requirements = "SELECT * FROM occs_requirementtbl";
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>