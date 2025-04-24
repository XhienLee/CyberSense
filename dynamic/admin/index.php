<?php
//require_once 'actions.php';
require_once '../functions/student_function.php';
/*
session_start();
if (!isset($_SESSION['user_type']) || $_SESSION['user_type'] !== 'student') {
  header("Location: ../index.php");
  exit();
}
*/
$user = "Admin";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Student Dashboard</title>
  <style>
    .container{
        margin: 0;
        padding: 0;
    }
    .top-nav {
        display: flex;
        align-items: center;
        padding: 10px 20px;
        border-bottom: 1px solid #e0e0e0;
        background-color: white;
    }

    .profile-circle {
        width: 40px;
        height: 40px;
        background-color: #e0e0e0;
        border-radius: 50%;
    }

    .main-menu {
        display: flex;
        margin-left: 20px;
        gap: 30px;
    }

    .main-menu a {
        text-decoration: none;
        color: #333;
        padding: 10px 0;
    }

    .main-menu a.active {
        color: #b3a206;
        font-weight: bold;
    }

    .vertical-divider {
        width: 1px;
        height: 40px;
        background-color: #e0e0e0;
        margin: 0 auto;
    }

    /* */
    .button-container {
        margin-top: 40px;
        margin-left: 30px;
        display: flex;
        flex-direction: column;
        gap: 40px;
        height: auto;
    }

    .button-container  button{
        width: 200px;
        height: 40px;
        border: none;
        border-radius: 10px;
        font-size: 22px;
        color: white;
        background-color: #A20202;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }
    .button-container button:hover {
        transform: translateY(-2px);
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        text-decoration: none;
    }
    #contentContainer {
        display: flex;
        justify-content: space-between;
        align-items: flex-start;
        margin: 20px;
    }

    .box-container {
        width: 80%;
        margin-top: 15px;
        margin-right: 20px;
        margin-left: 30px;
        height: 325px;
        border: 2px solid black;
        border-radius: 5px;
        background-color: white;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }
  </style>
</head>

<body>
  <div class="container">
    <header class="top-nav">
      <div class="profile-circle"></div>
      <nav class="main-menu">
        <a href="dashboard.php" class="<?php echo isActive("home.php") ?>">Home</a>
        <a href="index.php" class="<?php echo isActive("index.php") ?>">Dashboard</a>
        <a href="report.php" class="<?php echo isActive("report.php") ?>">Report & Analysis</a>
      </nav>
      <div class="vertical-divider"></div>
      <div class="profile-circle"></div>
    </header>

    <main class="content">
      <h1 class="welcome-text" style="color: #A20202; margin-left: 40px;">Welcome, <?php echo $user; ?>!</h1>
      <h2 class="subtitle" style="margin-left: 50px; font-size: 20px;">Management overview</h2>
      <hr class="separator" style="background-color: #A20202; width: 96%; height: 2px;">    
    </main>
    <div id="actions">
        <div id="contentContainer">
            <div class="button-container">
                <a href="actions.php"><button id="addStudent">Add Student</button></a>
                <a href="actions.php"><button id="ManageStaff">Add Staff</button></a>
                <a href="manage.html"><button id="manageStudent" style="height: 60px;">Manage Student & Staff</button></a>
            </div>
            <div class="box-container">
            </div>
        </div>
    </div>
  </div>
</body>
</html>