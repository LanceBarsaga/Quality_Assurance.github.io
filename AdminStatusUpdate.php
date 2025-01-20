<?php 
include('config.php');
include('[ADMIN]OCCSDashboard.php');
  //---------------------------    ADMIN    -----------------------------------



          
  if(isset($_POST['ApproveDocument'])){
  
    $req_id = mysqli_real_escape_string($conn,$_POST['Requerement_ID']);
    $status_id = mysqli_real_escape_string($conn,$_POST['Status_ID']);

    if($status_id == 0){
        ?>
        <script>
            alert('Changes were not made, Due to MISSING documents\n\nReturning to Dashboard');
            window.location.href='[ADMIN]OCCSDashboard.php';
        </script>
        <?php
    }else if($status_id == 2){
        ?>
        <script>
            alert('Changes were not made, Due to documents being\nmarked as Approved already\n\nReturning to Dashboard');
            window.location.href='[ADMIN]OCCSDashboard.php';
        </script>
        <?php
    }else if($status_id == 3){
        ?>
        <script>
            alert('Changes were not made, Due to documents being\nmarked as Rejected\n\nReturning to Dashboard');
            window.location.href='[ADMIN]OCCSDashboard.php';
        </script>
        <?php
    }else{
    $sql_update = "UPDATE occs_requirementtbl SET
    Status = 'Approve',
    StatusID = 2,
    Date_Modified = CURRENT_TIMESTAMP
    WHERE Req_ID = '$req_id'";

    if($result_update = mysqli_query($conn, $sql_update)){
        ?>
        <script>
            alert('Successfully marked as Approve \nOCCS has been notified');
            window.location.href='[ADMIN]OCCSDashboard.php';
        </script>
        <?php
    } else {
    
        if(!$result_update) {die('Unsucessful added'. mysqli_error()); }
        ?>
        <script>
            alert('Unsuccesful');
            window.location.href='[ADMIN]OCCSDashboard.php';
        </script>
        <?php
        
    }
  
    mysqli_close($conn);
   
    }

  }


  
          
  if(isset($_POST['Reject_Document'])){
  
    $req_id = mysqli_real_escape_string($conn,$_POST['Requerement_ID']);
    $status_id = mysqli_real_escape_string($conn,$_POST['Status_ID']);

    if($status_id == 0){
        ?>
        <script>
            alert('Changes were not made, Due to MISSING documents\n\nReturning to Dashboard');
            window.location.href='[ADMIN]OCCSDashboard.php';
        </script>
        <?php
    }else if($status_id == 2){
        ?>
        <script>
            alert('Changes were not made, Due to documents being\nmarked as Approved already\n\nReturning to Dashboard');
            window.location.href='[ADMIN]OCCSDashboard.php';
        </script>
        <?php
    }else if($status_id == 3){
        ?>
        <script>
            alert('Changes were not made, Due to documents being\nmarked as Rejected already\n\nReturning to Dashboard');
            window.location.href='[ADMIN]OCCSDashboard.php';
        </script>
        <?php
    }else{
    $sql_update = "UPDATE occs_requirementtbl SET
    Status = 'Rejected',
    StatusID = 3,
    Date_Modified = CURRENT_TIMESTAMP
    WHERE Req_ID = '$req_id'";

    if($result_update = mysqli_query($conn, $sql_update)){
        ?>
        <script>
            alert('Document marked as Rejected');
            window.location.href='[ADMIN]OCCSDashboard.php';
        </script>
        <?php
    } else {
    
        if(!$result_update) {die('Unsucessful added'. mysqli_error()); }
        ?>
        <script>
            alert('Unsuccesful');
            window.location.href='[ADMIN]OCCSDashboard.php';
        </script>
        <?php
        
    }
  
    mysqli_close($conn);
   
    }

  }

  
  if(isset($_POST['BackToAdminDashboard'])){
    ?>
    <script>
        window.location.href='[ADMIN]OCCSDashboard.php';
    </script>

    <?php
mysqli_close($conn);

}
?>