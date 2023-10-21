<?php
ob_start();
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>user profile</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<script src="https://kit.fontawesome.com/5c74e339b7.js" crossorigin="anonymous"></script>
<style type="text/css">
.p-4 {
    padding: 1.5rem!important;
}
.mb-0, .my-0 {
    margin-bottom: 0!important;
}
.shadow-sm {
    box-shadow: 0 .125rem .25rem rgba(0,0,0,.075)!important;
}    
/* user-dashboard-info-box */
.user-dashboard-info-box .candidates-list .thumb {
    margin-right: 20px;
}
.user-dashboard-info-box .candidates-list .thumb img {
    width: 80px;
    height: 80px;
    -o-object-fit: cover;
    object-fit: cover;
    overflow: hidden;
    border-radius: 50%;
}

.user-dashboard-info-box .title {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    padding: 30px 0;
}

.user-dashboard-info-box .candidates-list td {
    vertical-align: middle;
}

.user-dashboard-info-box td li {
    margin: 0 4px;
}

.user-dashboard-info-box .table thead th {
    border-bottom: none;
}

.table.manage-candidates-top th {
    border: 0;
}

.user-dashboard-info-box .candidate-list-favourite-time .candidate-list-favourite {
    margin-bottom: 10px;
}

.table.manage-candidates-top {
    min-width: 650px;
}

.user-dashboard-info-box .candidate-list-details ul {
    color: #969696;
}

/* Candidate List */
.candidate-list {
    background: #ffffff;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    border-bottom: 1px solid #eeeeee;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    padding: 20px;
    -webkit-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out;
}
.candidate-list:hover {
    -webkit-box-shadow: 0px 0px 34px 4px rgba(33, 37, 41, 0.06);
    box-shadow: 0px 0px 34px 4px rgba(33, 37, 41, 0.06);
    position: relative;
    z-index: 99;
}
.candidate-list:hover a.candidate-list-favourite {
    color: #e74c3c;
    -webkit-box-shadow: -1px 4px 10px 1px rgba(24, 111, 201, 0.1);
    box-shadow: -1px 4px 10px 1px rgba(24, 111, 201, 0.1);
}

.candidate-list .candidate-list-image {
    margin-right: 25px;
    -webkit-box-flex: 0;
    -ms-flex: 0 0 80px;
    flex: 0 0 80px;
    border: none;
}
.candidate-list .candidate-list-image img {
    width: 80px;
    height: 80px;
    -o-object-fit: cover;
    object-fit: cover;
}

.candidate-list-title {
    margin-bottom: 5px;
}

.candidate-list-details ul {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    margin-bottom: 0px;
}
.candidate-list-details ul li {
    margin: 5px 10px 5px 0px;
    font-size: 13px;
}

.candidate-list .candidate-list-favourite-time {
    margin-left: auto;
    text-align: center;
    font-size: 13px;
    -webkit-box-flex: 0;
    -ms-flex: 0 0 90px;
    flex: 0 0 90px;
}
.candidate-list .candidate-list-favourite-time span {
    display: block;
    margin: 0 auto;
}
.candidate-list .candidate-list-favourite-time .candidate-list-favourite {
    display: inline-block;
    position: relative;
    height: 40px;
    width: 40px;
    line-height: 40px;
    border: 1px solid #eeeeee;
    border-radius: 100%;
    text-align: center;
    -webkit-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out;
    margin-bottom: 20px;
    font-size: 16px;
    color: #646f79;
}
.candidate-list .candidate-list-favourite-time .candidate-list-favourite:hover {
    background: #ffffff;
    color: #e74c3c;
}

.candidate-banner .candidate-list:hover {
    position: inherit;
    -webkit-box-shadow: inherit;
    box-shadow: inherit;
    z-index: inherit;
}

.bg-white {
    background-color: #ffffff !important;
}
.p-4 {
    padding: 1.5rem!important;
}
.mb-0, .my-0 {
    margin-bottom: 0!important;
}
.shadow-sm {
    box-shadow: 0 .125rem .25rem rgba(0,0,0,.075)!important;
}

.user-dashboard-info-box .candidates-list .thumb {
    margin-right: 20px;
}

body{
    margin-top:20px;
    background-color:#e9ebee;
}

.profile-banner {
  width: 100%;
  height: 300px;
  background-position: center center;
  background-size: cover;
  position: relative;
  background-color: #252932;
  border-bottom: 4px solid #fff;
  box-shadow: 2px 0px 4px rgba(0,0,0,0.1);
}

.avatar-container {
  height: 300px;
  text-align: center;
}

.profile-avatar {
  width: 200px;
  position: relative;
  margin: 0px auto;
  margin-top: 196px;
  border: 4px solid #f3f3f3;
}

.profile-actions {
  position: absolute;
  bottom: 20px;
}

.user-profile-2 {
  margin-top: 50px;
}

.user-profile-sidebar {
  margin: 0 0 20px 0;
}

.user-profile-sidebar .user-identity {
  margin: 20px 0 0 0;
}

.user-profile-sidebar img {
  width: 90px;
}

.account-status-data {
  text-align: center;
  padding: 10px 0;
  border-top: 1px dashed #ddd;
  border-bottom: 1px dashed #ddd;
  margin: 10px 0 20px 0;
}

.account-status-data h5 {
  font-size: 11px;
  line-height: 150%;
  color: #909090;
}

.user-button {
  margin: 15px 0;
}

.user-button .btn {
  margin: 5px 0;
}

#social {
  padding: 10px;
  background: #E5E9EC;
  text-align: center;
}

#social a:hover {
  text-decoration: none;
}

.fa-circle.facebook {
  color: #5471AE;
}

.fa-circle.twitter {
  color: #4EC6F6;
}

.fa-circle.gplus {
  color: #E24E3E;
}

.fa-circle.tumblr {
  color: #4D77A3;
}

.fa-circle.linkedin {
  color: #3097CE;
}

.user-profile-content {
  margin: 30px 15px;
}

.tab-pane{
    padding-top:20px;    
}

.user-message{
width:50px;
height:50px;
}

    </style>
</head>
<body>

<div class="container">
  
<div class="content-page">
<div class="profile-banner" style="background:url(https://bootdey.com/img/Content/bg1.jpg); background-size: cover;">
    <div class="col-sm-3 avatar-container">
        <img src="https://pluspng.com/img-png/user-png-icon-young-user-icon-2400.png" class="img-circle profile-avatar" alt="User avatar" style="max-width: 60%; height: auto;">
    </div>
</div>


<div class="content">
<div class="row">
<div class="col-sm-3">

<div class="text-center user-profile-2" style="margin-top:120px">
<ul class="list-group">
<li class="list-group-item">
<span class="badge">1</span>
Followers
</li>
<li class="list-group-item">
<span class="badge">0</span>
Following
</li>
<li class="list-group-item">
<span class="badge">0</span>
Post
</li>
</ul>

<div class="user-button">
<div class="row">
<div class="col-lg-6">
<button type="button" class="btn btn-primary btn-sm btn-block"><i class="fa fa-envelope"></i> Send Message</button>
</div>
<div class="col-lg-6">
<button type="button" class="btn btn-primary btn-sm btn-block"><i class="fa fa-user"></i>Fellow</button>
</div>
</div>
</div>
</div>
</div>

<div class="col-sm-9">
            <div class="tab-pane animated fadeInRight" id="about">
                <div class="user-profile-content">
                    <h5><strong><i class="fa fa-user"></i> ABOUT</strong> ME</h5>
                    <?php
                    // servername, username, password, database name
$host = "localhost";
$username = "bookworm_store";
$password = "1998.1989lawp";
$database = "bookworm_data";

                    
                    $connection = mysqli_connect($host, $username, $password, $database);
                    if (!$connection) {
                        die("Connection failed: " . mysqli_connect_error());
                    }
                    
                    // Retrieve user-specific information from the database based on firstname and lastname
                    $fname = $_GET['fname'];
                    $lname = $_GET['lname'];
                    $query = "SELECT * FROM `admin` WHERE `FNAME`='$fname' AND `LNAME`='$lname' LIMIT 1";
                    $result = mysqli_query($connection, $query);

                    if ($result && mysqli_num_rows($result) > 0) {
                        $user_data = mysqli_fetch_assoc($result);
                        $about_me = $user_data['ABOUT_ME'];
                        $phone = $user_data['PHONE'];
                        $email = $user_data['EMAIL'];
                        $website = $user_data['WEBSITE'];
                        $skills = $user_data['SKILLS'];
                        ?>
                        <p>
                            <?php echo $about_me; ?>
                        </p>
                        <hr>
                        <div class="row">
                            <div class="col-sm-6">
                                <h5><strong><i class="fa-solid fa-address-book"></i> CONTACT</strong> ME</h5>
                                <address>
                                    <strong><i class="fa fa-phone"></i> Phone</strong><br>
                                    <abbr title="Phone"><?php echo $phone; ?></abbr>
                                </address>
                                <address>
                                    <strong><i class="fa fa-envelope"></i> Email</strong><br>
                                    <a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a>
                                </address>
                                <address>
                                    <strong><i class="fa fa-globe"></i> Website</strong><br>
                                    <a href="<?php echo $website; ?>"><?php echo $website; ?></a>
                                </address>
                            </div>
                            <div class="col-sm-6">
                                <h5><strong><i class="fa fa-graduation-cap"></i> MY</strong> SKILLS</h5>
                                <p><?php echo $skills; ?></p>
                            </div>
                        </div>
                        <?php
                    } else {
                        echo "<p>User not found.</p>";
                    }

                    mysqli_free_result($result);
                    ?>
                </div>
            </div>
        </div>


</div>
</div>
</div>
</div>

<?php
ob_end_flush();
?>
</body>
</html>