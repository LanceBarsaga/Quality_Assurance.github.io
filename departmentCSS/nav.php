<style>
     
/*nav css*/
* {
    box-sizing: border-box;
}

body {
    background-color: #A3D393;
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
    background-attachment: fixed;
    height: 100vh;
    overflow: hidden;
}

/*header*/
.container {
border-radius: 10px;
background-color:rgb(75, 119, 82);
width: 100%;
max-height: 170px;
border: solid 2px rgb(9, 94, 61);
transform: translateY(25px);

}
/*olivar4ez logo*/
.logo {
margin-top: 30px;
margin-left: 30px;
}
.text {
color: rgb(204, 203, 168);
transform: translateY(-110px);
margin-left: 200px;
font-size: 1.3vw;
}

/*logout css*/
.logout {
transform: translateY(-200px);
background-color:rgb(91, 147, 101);
color:rgb(204, 203, 168);
text-align: center;
border: solid 2px rgb(65, 104, 72);
padding: 12px;
text-decoration: none;
font-size: 1.3vw;
border-radius: 0.9vw;
float: right;
margin-right: 1vw;
transition: all 0.3s ease-in-out;
}
.logout:hover {
    transform: scale(1.2);
    transform: translateY(-210px);    
    transition: all 0.3s ease-in-out;

}

/*notification css*/
.notify {
height: 100px;
width: 100px;
transform: translateY(-210px);
float: right;


}
</style>

<body>
    <div class="container">
        <!-- Logo Section -->
        <div class="logo">
          <img src="images/system/OCLogo.png" alt="Logo" width="120px" height="120px">
        </div>
    
        <!-- Title Section -->
        <div class="text">
          <h1>OLIVAREZ COLLEGE COMPUTER STUDIES[OCCS]</h1>
        </div>
    
        <!-- Notifications Section -->
        <div class="notify">
          <a  onclick="openNotif()">
            <img src="images/notifications.png" alt="Notifications" width="80px" height="80px">
          </a>
        </div>
    
        <!-- Logout Section -->
        <a href="logout.php" target="_blank">
          <button class="logout"><strong>LOGOUT</strong></button>
        </a>
    </div>    
</body>
