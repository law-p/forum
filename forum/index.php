<?php
ob_start();
session_start();
?>
<!doctype html>
<html lang="en">
<head>
<title>forum</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet">
<script src="https://kit.fontawesome.com/5c74e339b7.js" crossorigin="anonymous"></script>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style type="text/css">
body{
    margin-top:20px;
    background:#eee;
    color: #708090;
}

.reply-trigger {
        cursor: pointer;
    }

.icon-1x {
    font-size: 24px !important;
}
a{
    text-decoration:none;    
}
.text-primary, a.text-primary:focus, a.text-primary:hover {
    color: #00ADBB!important;
}
.text-black, .text-hover-black:hover {
    color: #000 !important;
}
.font-weight-bold {
    font-weight: 700 !important;
}

.main-navigation .menu li a {
    display: block;
    font-size: 12px;
    color: #999;
    text-transform: uppercase;
    text-decoration: none;
    letter-spacing: .1em;
    padding-left: 20px;
    padding-right: 20px;
    -webkit-transition: color 0.3s;
    -o-transition: color 0.3s;
    transition: color 0.3s;
}
.floating-menu-btn {
    display: block;
    position: fixed;
    z-index: 100;
    top: 50px;
    right: 35px;
    width: 56px;
    height: 56px;
    border-radius: 50%;
}
.floating-menu-btn .floating-menu-toggle .bar {
    width: 22px;
    margin: 0 0 4px 0;
}
.mobile-menu-toggle .bar, .floating-menu-toggle .bar {
    display: block;
    will-change: transform, opacity;
    width: 32px;
    height: 2px;
    margin: 0 0 6px 0;
    background: #333;
    opacity: 1;
    -webkit-transform: translate(0) rotate(0deg);
    -moz-transform: translate(0) rotate(0deg);
    -ms-transform: translate(0) rotate(0deg);
    -o-transform: translate(0) rotate(0deg);
    transform: translate(0) rotate(0deg);
    -webkit-transition: all 0.2s ease-out;
    -o-transition: all 0.2s ease-out;
    transition: all 0.2s ease-out;
}
.floating-header {
    position: absolute;
    z-index: 100;
    display: block;
    width: 100%;
    padding: 35px
}

.floating-header .site-logo {
    max-width: 79px;
    padding: 0;
    margin: 0 !important
}

.floating-header+* {
    padding-top: 190px
}

@media screen and (max-width: 768px) {
    .floating-header {
        padding: 25px 15px
    }
    .floating-header+* {
        padding-top: 175px
    }
}

.floating-header .main-navigation-wrap {
    position: fixed;
    z-index: 110;
    display: table;
    width: 300px;
    height: 100%;
    top: 110px;
    left: 50%;
    margin-left: -150px;
    overflow: hidden;
    visibility: hidden
}

.floating-header .main-navigation {
    position: relative;
    display: table-cell;
    vertical-align: middle;
    top: auto;
    right: auto;
    padding: 0;
    text-align: center;
    top: -110px;
    overflow: hidden;
    opacity: 0;
    -webkit-transform: translateY(35px);
    -moz-transform: translateY(35px);
    -ms-transform: translateY(35px);
    -o-transform: translateY(35px);
    transform: translateY(35px);
    -webkit-transition: all 0.35s 0.2s;
    -o-transition: all 0.35s 0.2s;
    transition: all 0.35s 0.2s
}

.floating-header .main-navigation .menu {
    display: inline-block;
    width: 100%;
    -webkit-transform: translate3d(0, 0, 0);
    -moz-transform: translate3d(0, 0, 0);
    -ms-transform: translate3d(0, 0, 0);
    -o-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
    -webkit-transition: all 0.4s cubic-bezier(0.86, 0, 0.07, 1);
    -o-transition: all 0.4s cubic-bezier(0.86, 0, 0.07, 1);
    transition: all 0.4s cubic-bezier(0.86, 0, 0.07, 1)
}

.floating-header .main-navigation .menu.off-view {
    -webkit-transform: translate3d(-100%, 0, 0);
    -moz-transform: translate3d(-100%, 0, 0);
    -ms-transform: translate3d(-100%, 0, 0);
    -o-transform: translate3d(-100%, 0, 0);
    transform: translate3d(-100%, 0, 0)
}

.floating-header .main-navigation .menu.in-view {
    -webkit-transform: translate3d(0, 0, 0);
    -moz-transform: translate3d(0, 0, 0);
    -ms-transform: translate3d(0, 0, 0);
    -o-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0)
}

.floating-header .main-navigation .menu>li {
    position: static;
    border-bottom: none
}

.floating-header .main-navigation .menu>li>a {
    padding-top: 9px;
    padding-bottom: 9px
}

.floating-header .main-navigation .menu li {
    display: block
}

.floating-header .main-navigation .menu li a {
    display: block;
    font-size: 16px
}

.floating-header .main-navigation .menu li.menu-item-has-children>.sub-menu {
    position: absolute;
    display: block;
    width: 100%;
    height: auto;
    top: 0;
    left: auto;
    right: -100%;
    padding: 0;
    -webkit-box-shadow: none;
    box-shadow: none;
    -webkit-transform: translate3d(100%, 0, 0);
    -moz-transform: translate3d(100%, 0, 0);
    -ms-transform: translate3d(100%, 0, 0);
    -o-transform: translate3d(100%, 0, 0);
    transform: translate3d(100%, 0, 0);
    -webkit-transition: all 0.4s cubic-bezier(0.86, 0, 0.07, 1);
    -o-transition: all 0.4s cubic-bezier(0.86, 0, 0.07, 1);
    transition: all 0.4s cubic-bezier(0.86, 0, 0.07, 1)
}

.floating-header .main-navigation .menu li.menu-item-has-children>.sub-menu>li>a {
    padding-top: 9px;
    padding-bottom: 9px
}

.floating-header .main-navigation .menu li.menu-item-has-children>.sub-menu.in-view {
    -webkit-transform: translate3d(0, 0, 0);
    -moz-transform: translate3d(0, 0, 0);
    -ms-transform: translate3d(0, 0, 0);
    -o-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0)
}

.floating-header .main-navigation .menu li.menu-item-has-children>.sub-menu.off-view {
    -webkit-transform: translate3d(-100%, 0, 0);
    -moz-transform: translate3d(-100%, 0, 0);
    -ms-transform: translate3d(-100%, 0, 0);
    -o-transform: translate3d(-100%, 0, 0);
    transform: translate3d(-100%, 0, 0)
}

.floating-header .main-navigation .menu li.menu-item-has-children:hover .sub-menu {
    -webkit-animation: none;
    -o-animation: none;
    animation: none
}

.floating-header .main-navigation.is-visible {
    visibility: visible;
    opacity: 1;
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0)
}

.ie .floating-header .main-navigation-wrap .main-navigation,
.edge .floating-header .main-navigation-wrap .main-navigation,
.firefox .floating-header .main-navigation-wrap .main-navigation {
    top: 0
}

.android .floating-header .main-navigation-wrap .main-navigation,
.ios .floating-header .main-navigation-wrap .main-navigation {
    -webkit-transition: all 0.25s 0s;
    -o-transition: all 0.25s 0s;
    transition: all 0.25s 0s
}
.floating-menu-btn {
    display: block;
    position: fixed;
    z-index: 100;
    top: 50px;
    right: 35px;
    width: 56px;
    height: 56px;
    border-radius: 50%
}

.floating-menu-btn:before {
    display: block;
    position: absolute;
    z-index: -1;
    content: "";
    width: 56px;
    height: 56px;
    background-color: #fff;
    border-radius: 50%;
    -webkit-transform-origin: center 30%;
    -moz-transform-origin: center 30%;
    -ms-transform-origin: center 30%;
    transform-origin: center 30%;
    -webkit-transform: scale(1);
    -moz-transform: scale(1);
    -ms-transform: scale(1);
    -o-transform: scale(1);
    transform: scale(1);
    -webkit-transition: all 0.35s ease-out;
    -o-transition: all 0.35s ease-out;
    transition: all 0.35s ease-out;
    -webkit-box-shadow: 0px 12px 18px 0px rgba(0, 0, 0, 0.26);
    box-shadow: 0px 12px 18px 0px rgba(0, 0, 0, 0.26)
}

.floating-menu-btn .floating-menu-toggle-wrap {
    position: absolute;
    z-index: 1;
    width: 56px;
    height: 56px;
    border-radius: 50%;
    top: 28px;
    left: 27px;
    cursor: pointer
}

.floating-menu-btn .floating-menu-toggle {
    display: block;
    width: 22px;
    right: auto;
    left: 50%;
    margin-top: -6px;
    margin-left: -11px
}

.floating-menu-btn .floating-menu-toggle .bar {
    width: 22px;
    margin: 0 0 4px 0
}

.floating-menu-btn .floating-menu-toggle .bar:last-child {
    margin-bottom: 0
}

.floating-menu-btn.expanded .floating-menu-toggle {
    -webkit-transform: rotate(-180deg);
    -moz-transform: rotate(-180deg);
    -ms-transform: rotate(-180deg);
    -o-transform: rotate(-180deg);
    transform: rotate(-180deg)
}

.floating-menu-btn.expanded .floating-menu-toggle .bar:nth-child(1) {
    -webkit-transform: translate(-9px, 3px) rotate(-45deg) scale(0.5, 1);
    -moz-transform: translate(-9px, 3px) rotate(-45deg) scale(0.5, 1);
    -ms-transform: translate(-9px, 3px) rotate(-45deg) scale(0.5, 1);
    -o-transform: translate(-9px, 3px) rotate(-45deg) scale(0.5, 1);
    transform: translate(-9px, 3px) rotate(-45deg) scale(0.5, 1)
}

.floating-menu-btn.expanded .floating-menu-toggle .bar:nth-child(3) {
    -webkit-transform: translate(-9px, -3px) rotate(45deg) scale(0.5, 1);
    -moz-transform: translate(-9px, -3px) rotate(45deg) scale(0.5, 1);
    -ms-transform: translate(-9px, -3px) rotate(45deg) scale(0.5, 1);
    -o-transform: translate(-9px, -3px) rotate(45deg) scale(0.5, 1);
    transform: translate(-9px, -3px) rotate(45deg) scale(0.5, 1)
}

.floating-menu-btn.expanded:before {
    -webkit-transform: scale(80);
    -moz-transform: scale(80);
    -ms-transform: scale(80);
    -o-transform: scale(80);
    transform: scale(80)
}

@media screen and (max-width: 768px) {
    .floating-menu-btn {
        right: 15px
    }
}
    </style>
</head>
<body>

<header class="floating-header">
  <a href="#" style="font-size:30px;color:#5bc0de;font-weight:bold">
    Coders Forum
  </a><p>For coders: By coders</p>
  <div class="floating-menu-btn">
    <div class="floating-menu-toggle-wrap">
      <div class="floating-menu-toggle">
        <span class="bar"></span>
        <span class="bar"></span>
        <span class="bar"></span>
      </div>
    </div>
  </div>

  <div class="main-navigation-wrap">
    <nav class="main-navigation" data-back-btn-text="Back">
      <ul class="menu">
        <i class="fa-solid fa-right-to-bracket"> <a href="login">Login</a></i>
        <br></br>
        <li class="delay-2 fa-solid fa-users"> <a href="register">Register</a></li>
      </ul><!-- .menu -->
    </nav><!-- .main-navigation -->
  </div><!-- .main-navigation-wrap -->
</header>


<div class="container">
      <div class="row">
        <!-- Main content -->
        <div class="col-lg-9 mb-3">

          <div class="row text-left mb-5">
            <div class="col-lg-6 mb-3 mb-sm-0">
              <div class="dropdown bootstrap-select form-control form-control-lg bg-white bg-op-9 text-sm w-lg-50" style="width: 100%;">
              <select class="form-control form-control-lg bg-white bg-op-9 text-sm w-lg-50" data-toggle="select" tabindex="-98">
                <option> Categories </option>
                <option> Front End  </option>
                <option> Back end </option>
                <option> Other stuffs </option>
              </select>
              </div>
            </div>
            <div class="col-lg-6 text-lg-right">
              <div class="dropdown bootstrap-select form-control form-control-lg bg-white bg-op-9 ml-auto text-sm w-lg-50" style="width: 100%;">
                  <select class="form-control form-control-lg bg-white bg-op-9 ml-auto text-sm w-lg-50" data-toggle="select" tabindex="-98">
                    <option> Filter by </option>
                    <option> Likes </option>
                    <option> Replys </option>
                    <option> Views </option>
                  </select>
              </div>
            </div>
          </div>

<!-- Post Card -->
            <!-- Loop through posts and display post cards -->
            <?php

$host = "localhost";
$username = "bookworm_store";
$password = "1998.1989lawp";
$database = "bookworm_data";

$connection = mysqli_connect($host, $username, $password);

if (mysqli_connect_errno()) {
    echo(mysqli_connect_error());
    die();
}

mysqli_select_db($connection, $database);
if (mysqli_errno($connection)) {
    echo(mysqli_error($connection));
    die();
}

// Query to fetch data from the posts table along with user's first name
$query = "SELECT posts.*, admin.FNAME 
          FROM posts 
          INNER JOIN admin ON posts.user_id = admin.ID  LIMIT 10";
$result = mysqli_query($connection, $query);
            

if ($result && mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    $postTitle = $row['title'];
                    $postContent = $row['content'];
                    $time = $row['timestamp'];
                    $userFirstName = $row['FNAME'];
                    $postId = $row['post_id'];
                    $userId = $row['user_id']; 
                    $likes = $row['likes']; 
                    // Check if the current user's ID matches the post's user ID
                    if (isset($_SESSION['ID'])) {
                        //  $userId contains the user ID associated with the post
                        if ($_SESSION['ID'] == $userId) {
                            echo '<a href="#editModal' . $postId . '" data-toggle="modal" class="btn btn-primary">Edit Your Post</a>';
                        }
                    }
            ?>
            <!-- Post Card -->
            <div class="card row-hover pos-relative py-3 px-3 mb-3 border-warning border-top-0 border-right-0 border-bottom-0 rounded-0">
                <div class="row align-items-center">
                    <div class="col-md-8 mb-3 mb-sm-0">
                        <h5>
                            <a href="#" class="text-primary"><?php echo $postTitle; ?></a>
                        </h5>
                        <p class="text-sm"><span class="op-6">Posted On</span> <a class="text-black" href="#"><?php echo $time; ?></a> <span class="op-6">By</span> <a class="text-black" href="#"><?php echo $userFirstName; ?></a></p>
                        <div class="text-sm op-5">
                            <a class="text-black mr-2" href="#"><?php echo $postContent; ?></a>
                        </div>
                    </div>
                    <div class="col-md-4 op-7">
                        <div class="row text-center op-7">
        
<!-- Inside your loop that displays posts -->
<div class="col px-1">
  <?php
    if(isset($_SESSION['ID'])) {
      echo '<button class="btn btn-primary" onclick="likePost(' . $postId . ')">';
      echo '<i class="fas fa-thumbs-up"></i> Like';
      echo '</button>';
    } else {
      echo '<span class="text-muted">Log in to like <i class="fas fa-thumbs-up"></i></span>';
    }
  ?>
  <span class="d-block text-sm" id="likeCount-<?php echo $postId; ?>"><?php echo $likes; ?> Likes</span>
</div>


<!-- Your content -->
<div class="col px-1 d-block text-sm reply-trigger" data-toggle="modal" data-target="#commentModal">
<button class="btn btn-primary "><i class="fa-solid fa-comment"></i>
    <span class="d-block text-sm">Reply</span>
</button>
</div>


<!-- The comment submission modal -->
<div class="modal" id="commentModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Submit a Comment</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <!-- Comment submission form -->
                <?php
                // Check if user is logged in
                if (isset($_SESSION['ID'])) {
                    echo "<form id='commentForm' method='POST' action='comment.php'>";
                    echo "<input type='text' class='form-control' name='comment_id' placeholder='Comment Title' required><br>";
                    echo "<textarea class='form-control' name='comment_text' placeholder='Your Comment' required></textarea><br>";
                    echo "<input type='submit' class='btn btn-primary' value='Submit Comment'>";
                    echo "</form>";
                } else {
                    echo "Please <a href='login'>log in</a> to comment.";
                }
                ?>
            </div>
        </div>
    </div>
</div>



    <div class="col px-1"> <i class="ion-ios-eye-outline icon-1x"></i> <span class="d-block text-sm">290 Views</span> </div>
                        </div>
                    </div>
                </div>
            </div>

           <!-- Edit Modal -->
<div class="modal fade" id="editModal<?php echo $postId; ?>" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel">Edit Post</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="edit_post.php" method="POST">
                    <!-- Hidden field to store post ID -->
                    <input type="hidden" name="postId" value="<?php echo $postId; ?>">
                    <!-- Edit form fields for title and content -->
                    <div class="form-group">
                        <label for="editTitle">Title:</label>
                        <input type="text" class="form-control" id="editTitle" name="editTitle" value="<?php echo $postTitle; ?>">
                    </div>
                    <div class="form-group">
                        <label for="editContent">Content:</label>
                        <textarea class="form-control" id="editContent" name="editContent"><?php echo $postContent; ?></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Save Changes</button>
                </form>
            </div>
        </div>
    </div>
</div>

            <?php
                } // End of while loop
            } else {
                echo "No posts found.";
            }
            ?>

        </div>

    </div>
</div>

    

<div class="bg-white text-sm container">
  <h4 class="px-3 py-4 opacity-5 m-0 font-weight-bold text-center">
    Stats
  </h4>
  <hr class="my-0">
  <div class="row text-center">
    <div class="col-sm-6 py-3 border-bottom border-right">
      <a class="d-block lead font-weight-bold" href="#">
      <i class="fas fa-list-ul"></i><p>Topics</p>
         58 
      </a>
    </div>
    <div class="col-sm-6 py-3 border-bottom">
      <a class="d-block lead font-weight-bold" href="#">
      <i class="fas fa-pencil-alt"></i>
        <p>Posts</p>
         1856
      </a>
    </div>
  </div>
  <div class="row text-center">
    <div class="col-sm-6 py-3 border-right">
      <a class="d-block lead font-weight-bold" href="#">
      <i class="fas fa-users"></i><p>Total Users</p>
         300 
      </a>
    </div>
    <div class="col-sm-6 py-3">
      <a class="d-block lead font-weight-bold" href="#">
      <i class="fas fa-user"></i> <p> Newest Member</p>Lawrence
      </a>
    </div>
  </div>
</div>
</div>
</div>
</div>
</div>
</div>



<script>
    $(document).ready(function() {
        $('#commentForm').submit(function(event) {
            event.preventDefault(); // Prevent default form submission
            
            // Serialize form data
            var formData = $(this).serialize();
            
            // Perform AJAX request to submit the comment
            $.ajax({
                type: 'POST',
                url: $(this).attr('action'),
                data: formData,
                success: function(response) {
                    // Handle success response, if needed
                    // For example, you can show a success message and reload the page
                    alert('Comment submitted successfully.');
                    location.reload();
                },
                error: function(xhr, status, error) {
                    // Handle error response, if needed
                    //  display an error message
                    alert('An error occurred while submitting the comment.');
                }
            });
        });
    });
</script>


<script>
    const replyTriggers = document.querySelectorAll('.reply-trigger');
    const commentPopup = document.querySelector('.comment-popup');
    const closePopup = document.querySelector('.close-popup');
    
    // Attach event listeners to all reply triggers
    replyTriggers.forEach(replyTrigger => {
        replyTrigger.addEventListener('click', () => {
            commentPopup.style.display = 'block';
        });
    });
    
    closePopup.addEventListener('click', () => {
        commentPopup.style.display = 'none';
    });
</script>


<script>
   function likePost(postId) {
  if (!isUserLoggedIn()) {
    alert('Please log in to like.');
    return;
  }

  var xhr = new XMLHttpRequest();
  xhr.open('POST', 'update-likes.php', true);
  xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
  xhr.onreadystatechange = function () {
    if (xhr.readyState === XMLHttpRequest.DONE) {
      if (xhr.status === 200) {
        // Update the UI to reflect the new like count
        updateLikeCount(postId, xhr.responseText);
      } else {
        console.error('Error updating like count:', xhr.responseText);
      }
    }
  };
  xhr.send('post_id=' + encodeURIComponent(postId));
}

function updateLikeCount(postId, newLikeCount) {
  const likeCountElement = document.getElementById('likeCount-' + postId);
  likeCountElement.textContent = newLikeCount + (newLikeCount === '1' ? ' Like' : ' Likes');
}

function isUserLoggedIn() {
  return <?php echo isset($_SESSION['ID']) ? 'true' : 'false'; ?>;
}

</script>
<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript">
</script>
<!-- jQuery library -->   
<script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src = "https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src = "https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


<script>
  jQuery(document).ready(function($) {

 	var $floatingMenuToggle = $('.floating-menu-toggle-wrap'),
			$floatingMenu = $('.floating-header .main-navigation'),
			$floatingMenuItem = $('.floating-header .main-navigation .menu > li');
	if($floatingMenu.length) {
		$floatingMenuItem.each(function(index, element) {
			$(element).addClass('delay-' + index);
		});

		$floatingMenuToggle.click(function() {
		  var clicks = $(this).data('clicks');
		  if (clicks) {
				$floatingMenu.removeClass('is-visible');
				setTimeout(function(){
					$floatingMenuToggle.parent().removeClass('expanded');
				}, 500);
		  } else {
				$floatingMenuToggle.parent().addClass('expanded');
				$floatingMenu.addClass('is-visible');
		  }
		  $(this).data("clicks", !clicks);
		});

	}

	// Back Button
	var backBtnText = $floatingMenu.data( 'back-btn-text' ),
			subMenu = $( '.floating-header .main-navigation .sub-menu' );

	subMenu.each( function () {
		$( this ).prepend( '<li class="back-btn"><a href="#"><i class="fa fa-arrow-left" aria-hidden="true"></i>' + backBtnText + '</a></li>' );
	} );

	var hasChildLink = $( '.floating-header .menu-item-has-children > a' ),
		backBtn = $( '.floating-header .main-navigation .sub-menu .back-btn' );

	backBtn.on('click', function (e) {
		var self = this,
			parent = $( self ).parent(),
			siblingParent = $( self ).parent().parent().siblings().parent(),
			menu = $( self ).parents( '.menu' );

		parent.removeClass( 'in-view' );
		siblingParent.removeClass( 'off-view' );

		e.stopPropagation();
	});

	hasChildLink.on( 'click', function ( e ) {
		var self = this,
			parent = $( self ).parent().parent(),
			menu = $( self ).parents( '.menu' );

		parent.addClass( 'off-view' );
		$( self ).parent().find( '> .sub-menu' ).addClass( 'in-view' );

		e.preventDefault();
		return false;
	} );
    } ); 

</script>
<?php
ob_end_flush();
?>
</body>
</html>