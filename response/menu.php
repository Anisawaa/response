<!DOCTYPE html>
<html>
<head>
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
}

.navbar {
  overflow: hidden;
  background-color: #C3D5D8;
}

.navbar a {
  float: left;
  font-size: 16px;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

.dropdown {
  float: left;
  overflow: hidden;
}

.dropdown .dropbtn {
  font-size: 16px;  
  border: none;
  outline: none;
  color: black;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn {
  background-color: #17184F;
  color : white;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
  background-color: #ddd;
}

.dropdown:hover .dropdown-content {
  display: block;
}

.header-title {
    text-align : center;
    background-color : #17184F;
    padding : 20px;
    color : white;
    font-size : 30px;
    font-family : cooper;
}

.logout {
    text-align : right;
}

</style>
</head>
<body>
<div class = "header-title">LIST OF INVENTORY<br>EVERYTHING OFFICE</div>
<div class="navbar">
  <a href="home.php">Home</a>
  <a href="inventorylist.php">Inventory List</a>
  <div class="dropdown">
    <button class="dropbtn">List per Category 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="buildings.php">Buildings</a>
      <a href="vehicles.php">Vehicles</a>
      <a href="office.php">Office Inventory</a>
      <a href="electronic.php">Electronic</a>
    </div>
  </div>
  <div class="logout">
    <button type="button" background-color="#17184F"><a href="logout.php">Logout</a></button>
  </div>
</div>

</body>
</html>
