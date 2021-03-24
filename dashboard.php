<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <style>
      body{
  margin: 0;
  padding: 0;
  font-family: "Roboto", sans-serif;
}

header{
  z-index: 1;
  position: fixed;
  background: #22242A;
  padding: 20px;
  width: calc(100% - 0%);
  top: 0;
  height: 30px;
}

.left_area h3{
  color: #fff;
  margin: 0;
  text-transform: uppercase;
  font-size: 22px;
  font-weight: 900;
}

.left_area span{
  color: #19B3D3;
}

.logout_btn{
  padding: 5px;
  background:  #22242A;
  text-decoration: none;
  float: right;
  margin-top: -30px;
  margin-right: 40px;
  border-radius: 2px;
  font-size: 15px;
  font-weight: 600;
  color: #fff;
  transition: 0.5s;
  transition-property: background;
}

.logout_btn:hover{
  background: #0B87A6;
}

.sidebar{
  z-index: 1;
  top: 0;
  background: #2f323a;
  margin-top: 70px;
  padding-top: 30px;
  position: fixed;
  left: 0;
  width: 250px;
  height: calc(100% - 9%);
  transition: 0.5s;
  transition-property: left;
  overflow-y: auto;
}

.profile_info{
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
}

.sidebar .profile_info .profile_image{
  width: 100px;
  height: 100px;
  border-radius: 100px;
  margin-bottom: 10px;
}

.sidebar .profile_info h4{
  color: #ccc;
  margin-top: 0;
  margin-bottom: 20px;
}

.sidebar a{
  color: #fff;
  display: block;
  width: 100%;
  line-height: 60px;
  text-decoration: none;
  padding-left: 40px;
  box-sizing: border-box;
  transition: 0.5s;
  transition-property: background;
}

.sidebar a:hover{
  background: #19B3D3;
}

.sidebar i{
  padding-right: 10px;
}

label #sidebar_btn{
  z-index: 1;
  color: #fff;
  position: fixed;
  cursor: pointer;
  left: 300px;
  font-size: 20px;
  margin: 5px 0;
  transition: 0.5s;
  transition-property: color;
}

label #sidebar_btn:hover{
  color: #19B3D3;
}

#check:checked ~ .sidebar{
  left: -185px;
}

#check:checked ~ .sidebar a span{
  display: none;
}

#check:checked ~ .sidebar a{
  font-size: 20px;
  margin-left: 165px;
  width: 100%;
}

.content{
  width: (100% - 250px);
  margin-top: 60px;
  padding: 20px;
  margin-left: 250px;
  background: url(background.png) no-repeat;
  background-position: center;
  background-size: cover;
  height: 100vh;
  transition: 0.5s;
}

#check:checked ~ .content{
  margin-left: 60px;
}

#check:checked ~ .sidebar .profile_info{
  display: none;
}

#check{
  display: none;
}

.mobile_nav{
  display: none;
}

.content .card p{
  background: #fff;
  padding: 15px;
  margin-bottom: 10px;
  font-size: 14px;
  opacity: 0.8;
}

    </style>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
  </head>
  <body>

    <input type="checkbox" id="check">

    <header>
      <label for="check">
        <i class="fas fa-bars" id="sidebar_btn"></i>
      </label>
      <div class="left_area">
        <h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Admin</h3>
      </div>
      <div class="right_area">
        <a href="admins.html" class="logout_btn">Logout</a>
      </div>
    </header>

    <div class="mobile_nav">
      <div class="nav_bar">
        <img src="1.png" class="mobile_profile_image" alt="">
        <i class="fa fa-bars nav_btn"></i>
      </div>
      <div class="mobile_nav_items">
        <a href="dashboard.php"><i class="fas fa-desktop"></i><span>Dashboard</span></a>
        <a href="userdetails.php"><i class="fas fa-users"></i><span>All users</span></a>
        <a href="productsadmin.php"><i class="fas fa-shopping-cart"></i><span>Products</span></a>
        <a href="viewfeedbacks.php"><i class="fa fa-comments-dollar"></i><span>Feedback</span></a>
      </div>
    </div>


    <div class="sidebar">
      <div class="profile_info">
        <img src="1.png" class="profile_image" alt="">
        <h4>MG</h4>
      </div>
      <a href="dashboard.php"><i class="fas fa-desktop"></i><span>Dashboard</span></a>
      <a href="userdetails.php"><i class="fas fa-users"></i><span>All Users</span></a>
      <a href="productsadmin.php"><i class="fas fa-shopping-cart"></i><span>Products</span></a>
      <a href="viewfeedback.php"><i class="fa fa-comments-dollar"></i><span>Feedback</span></a>
    </div>
     

  </body>
</html>