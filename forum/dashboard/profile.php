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

<?php

$host = "localhost";
$username = "bookworm_store";
$password = "1998.1989lawp";
$database = "bookworm_data";

$connection = mysqli_connect($host, $username, $password, $database);
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}

$user_email = $_SESSION['EMAIL'];

// First Query: Retrieve user's first name
$query1 = "SELECT `FNAME` FROM `admin` WHERE `EMAIL` = '$user_email'";
$result1 = mysqli_query($connection, $query1);

if ($result1 && mysqli_num_rows($result1) > 0) {
    $row1 = mysqli_fetch_assoc($result1);
    $user_name = $row1['FNAME'];
} else {
    mysqli_free_result($result1); // Free the result set
    mysqli_close($connection);    // Close the database connection
    header("Location: forum.php"); // Redirect to the home page
    exit(); // Stop further execution
}

// Second Query: Retrieve user's profile information
$query2 = "SELECT * FROM `admin` WHERE `EMAIL` = '$user_email'";
$result2 = mysqli_query($connection, $query2);

if ($result2 && mysqli_num_rows($result2) > 0) {
    $row2 = mysqli_fetch_assoc($result2);
    $about_me = $row2['ABOUT_ME'];
    $phone = $row2['PHONE'];
    $email = $row2['EMAIL'];
    $website = $row2['WEBSITE'];
    $skills = $row2['SKILLS'];
} else {
    // Handle user not found scenario 
    $about_me = "nothing here";
    $phone = "234xxxxxxxxxx";
    $email = "nothing here";
    $website = "http://example.com";
    $skills = "no data";
}

 // Fetch the latest registered users from the database, excluding the current user
$latestCandidatesQuery = "SELECT FNAME, LNAME, SKILLS FROM `admin` WHERE EMAIL != '$user_email' ORDER BY `ID` DESC LIMIT 5";
$latestCandidatesResult = mysqli_query($connection, $latestCandidatesQuery);

$newCandidates = [];

if ($latestCandidatesResult && mysqli_num_rows($latestCandidatesResult) > 0) {
    while ($row = mysqli_fetch_assoc($latestCandidatesResult)) {
        $newCandidates[] = [
            'fname' => $row['FNAME'],
            'lname' => $row['LNAME'],
            'skills' => $row['SKILLS']
        ];
    }
}

mysqli_free_result($latestCandidatesResult);
mysqli_free_result($result1);
mysqli_free_result($result2);
mysqli_close($connection);
?>

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
<h4>Howdy, <b> <?php echo $user_name; ?></b></h4>
</li>
<li class="list-group-item">
<span class="badge">1,245</span>
Followers
</li>
<li class="list-group-item">
<span class="badge">2</span>
Following
</li>
<li class="list-group-item">
<span class="badge">1,245</span>
Post
</li>
</ul>

<div class="user-button">
<div class="row">
<button type="button" class="btn btn-primary btn-sm btn-block col-sm-6">
    <i class="fa fa-envelope"></i> Inbox
</button>

<button type="button" class="btn btn-primary btn-sm btn-block col-sm-6">
    <i class="fa fa-user"></i> Fellow other coders
</button>

</div>
</div>
</div>

</div>
<div class="col-sm-9">
<div class="widget widget-tabbed">

<ul class="nav nav-tabs nav-justified">
<li class="active"><a href="#my-timeline" data-toggle="tab"><i class="fa fa-pencil"></i>Create Post</a></li>
<li><a href="#about" data-toggle="tab"><i class="fa fa-user"></i> About Me</a></li>
</ul>

<div class="tab-content">
<div class="tab-pane animated active fadeInRight" id="my-timeline">
<div class="user-profile-content">

<div class="the-timeline">

<form role="form" class="post-to-timeline" action="post_handler" method="POST">
    <!-- Title Input -->
    <div class="form-group">
        <label for="title">Title:</label>
        <input type="text" class="form-control" id="title" name="title" placeholder="Enter a title">
    </div>
    
    <!-- Content Section -->
    <div class="form-group">
        <label for="content">Content:</label>
        <textarea class="form-control" id="content" name="content" style="height: 150px; margin-bottom: 10px;" placeholder="What's on your mind..."></textarea>
    </div>
    
    <div class="row">
        <div class="col-sm-6">
            <div class="col-sm-6 text-right">
                <button name="POST" type="submit" class="btn btn-primary">
                    <i class="fa fa-pencil"></i> Post
                </button>
            </div>
        </div>
    </div>
</form>



<br><br>
</div>
</div>

</div>


<div class="tab-pane animated fadeInRight" id="about">
        <div class="user-profile-content">
            <h5><strong>ABOUT</strong> Me</h5>
            <p>
                <?php echo $about_me; ?>
            </p>
            <hr>
            <div class="row">
                <div class="col-sm-6">
                    <h5><strong>CONTACT</strong> Me</h5>
                    <address>
                        <strong>Phone</strong><br>
                        <abbr title="Phone"><?php echo $phone; ?></abbr>
                    </address>
                    <address>
                        <strong>Email</strong><br>
                        <a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a>
                    </address>
                    <address>
                        <strong>Website</strong><br>
                        <a href="<?php echo $website; ?>"><?php echo $website; ?></a>
                    </address>
                </div>
                <div class="col-sm-6">
                    <h5><strong>MY</strong> SKILLS</h5>
                    <p><?php echo $skills; ?></p>
                </div>
                <button type="button" class="btn btn-primary btn-sm btn-block col-sm-6">
                <i class="fa-solid fa-pen-to-square"></i>Edit Profile
</button>
            </div>
        </div>
    </div>

</div>
</div>
</div>
</div>
</div>
</div>
</div>


<div class="container mt-3 mb-4">
    <div class="col-lg-9 mt-4 mt-lg-0">
        <div class="row">
            <div class="col-md-12">
                <div class="user-dashboard-info-box table-responsive mb-0 bg-white p-4 shadow-sm">
                    <table class="table manage-candidates-top mb-0">
                        <thead>
                            <tr>
                            <th> Connect With other Coders</th>
                            </tr>
                        </thead>
                        <tbody>     
                         <!-- Display new candidate HTML here -->
                         <?php foreach ($newCandidates as $newCandidate): ?>
                <tr class="candidates-list">
                    <td class="title">
                        <div class="thumb">
                            <img class="img-fluid" src="https://pluspng.com/img-png/user-png-icon-young-user-icon-2400.png" alt="User Avatar">
                        </div>
                        <div class="candidate-list-details">
                            <div class="candidate-list-info">
                                <div class="candidate-list-title">
                                    <h5 class="mb-0"><?php echo $newCandidate['fname'] . ' ' . $newCandidate['lname'];?> </h5>
                                </div>
                                <div class="candidate-list-info">
                                <a href="user_profile.php?fname=<?php echo urlencode($newCandidate['fname']); ?>&lname=<?php echo urlencode($newCandidate['lname']); ?>" class="btn btn-primary">
    <i class="fa fa-user"></i> View Profile
</a>

                                    </div>
                            </div>
                        </div>
                    </td>
                </tr>
            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="https://netdna.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<?php
ob_end_flush();
?>
</body>
</html>