<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> We-SHARE</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
</head>
<link href="styles.css" rel="stylesheet"> <!-- Your custom CSS file -->

<style>
    .navbar-dark .navbar-nav .nav-link {
        color: rgba(255, 255, 255, .5);
    }

    .navbar-dark .navbar-nav .nav-link:hover {
        color: rgba(255, 255, 255, .75);
    }

    .carousel-item {
        text-align: center;
        /* Center align text */
    }


    img {
        width: 150px;
        /* Adjust image size */
        height: 150px;
        /* Adjust image size */
        border-radius: 50%;
        /* Make image circular */
        object-fit: cover;
        /* Ensure image covers the circle */
    }

    .color-changing-circle h5 {
        margin-top: 10px;
        /* Adjust spacing between image and text */
    }

    body {
        margin-top: 20px;
        color: #d0d1d4;

    }

    #animated-text {
        font-size: 24px;
        font-family: Arial, sans-serif;
        color: #333;
    }
</style>
</head>

<body class="bg-dark">

    <!-- Header -->
    <header class="bg-dark text-white py-4">
        <div class="container">
            <h1 class="text-center mb-0"> We-Share</h1>
            <div class="text-center text-white" id="animated-text"></div>
            <nav class="navbar navbar-expand-lg navbar-dark">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#"><i class="fas fa-home"></i> Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="login.php"><i class="fas fa-sign-in-alt"></i> Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="register.php"><i class="fas fa-user-plus"></i> Register</a>
                        </li>
                    </ul>

                </div>
            </nav>
        </div>
    </header>

    <!-- Main Content -->
    <main class="container mt-4">
        <!-- Horizontal Section with Carousel -->
        <section class="my-4">
            <h2 class="mb-4 text-center">Active Users</h2>

            <div id="userCarousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">

                    <div class="carousel-item active">
                        <div class="color-changing-circle">
                            <img src="images/law.jpg" class="mx-auto " alt="User 1">
                            <h5 class="text-center">Law P</h5>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="color-changing-circle">
                            <img src="images/jessy.jpg" class="mx-auto" alt="User 2">
                            <h5 class="text-center">Jessica</h5>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="color-changing-circle">
                            <img src="images/lil.jpg" class="mx-auto" alt="User 3">
                            <h5 class="text-center">Lil-Swag</h5>
                        </div>
                    </div>
                </div>


                <a class="carousel-control-prev" href="#userCarousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#userCarousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </section>

        <!-- Recent Topics -->
        <section class="bg-secondary">
            <h2 class="mb-4 text-center">Top Topics</h2>
            <div class="list-group">
                <div class="row">
                    <!-- Inner sidebar -->
                    <div class="col-lg-3">
                        <!-- Inner sidebar header -->
                        <div class="inner-sidebar-header justify-content-center">
                            <button class="btn btn-primary has-icon btn-block" type="button" data-toggle="modal" data-target="#threadModal">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus mr-2">
                                    <line x1="12" y1="5" x2="12" y2="19"></line>
                                    <line x1="5" y1="12" x2="19" y2="12"></line>
                                </svg>
                                Add Topic
                            </button>
                        </div>
                        <!-- /Inner sidebar header -->

                        <!-- Inner sidebar body -->
                        <div class="inner-sidebar-body p-0">
                            <div class="p-3" data-simplebar="init">
                                <nav class="nav nav-pills nav-gap-y-1 flex-column">
                                    <a href="#" class="nav-link nav-link-faded has-icon active">All Threads</a>
                                    <a href="#" class="nav-link nav-link-faded has-icon text-white">Popular all time</a>
                                </nav>
                            </div>
                        </div>
                        <!-- /Inner sidebar body -->
                    </div>
                    <!-- /Inner sidebar -->

                    <!-- Inner main -->
                    <div class="col-lg-9">
                        <!-- Inner main header -->
                        <div class="inner-main-header d-flex align-items-center">
                            <a class="nav-link nav-icon rounded-circle nav-link-faded mr-3 d-md-none" href="#" data-toggle="inner-sidebar"><i class="material-icons">arrow_forward_ios</i></a>
                            <select class="custom-select custom-select-sm w-auto mr-1">
                                <option selected="">Latest</option>
                                <option value="1">Popular</option>
                            </select>
                            <span class="input-icon input-icon-sm ml-auto w-auto">
                                <input type="text" class="form-control form-control-sm bg-gray-200 border-gray-200 shadow-none mb-4 mt-4" placeholder="Search forum" />
                            </span>
                        </div>
                        <!-- /Inner main header -->

                        <!-- Forum List -->
                        <div class="inner-main-body p-2 p-sm-3 collapse forum-content show">
                            <div class="card mb-2">
                                <div class="card-body p-2 p-sm-3">
                                    <div class="media forum-item">
                                        <a href="#" data-toggle="collapse" data-target=".forum-content"><img src="images/law.jpg" class="mr-3 rounded-circle" width="50" alt="User" /></a>
                                        <div class="media-body">
                                            <h6><a href="#" data-toggle="collapse" data-target=".forum-content" class="text-body">Realtime fetching data</a></h6>
                                            <p class="text-secondary">
                                                lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet
                                            </p>
                                            <p class="text-muted"><a href="javascript:void(0)">Law P</a> replied <span class="text-secondary font-weight-bold">13 minutes ago</span></p>
                                        </div>
                                        <div class="text-muted small text-center align-self-center">
                                            <span class="d-none d-sm-inline-block"><i class="far fa-eye"></i> 19</span>
                                            <span><i class="far fa-comment ml-2"></i> 3</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-2">
                                <div class="card-body p-2 p-sm-3">
                                    <div class="media forum-item">
                                        <a href="#" data-toggle="collapse" data-target=".forum-content"><img src="images/pau.jpg" class="mr-3 rounded-circle" width="50" alt="User" /></a>
                                        <div class="media-body">
                                            <h6><a href="#" data-toggle="collapse" data-target=".forum-content" class="text-body">Laravel 7 database backup</a></h6>
                                            <p class="text-secondary">
                                                lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet
                                            </p>
                                            <p class="text-muted"><a href="javascript:void(0)">Paulina</a> replied <span class="text-secondary font-weight-bold">3 hours ago</span></p>
                                        </div>
                                        <div class="text-muted small text-center align-self-center">
                                            <span class="d-none d-sm-inline-block"><i class="far fa-eye"></i> 18</span>
                                            <span><i class="far fa-comment ml-2"></i> 1</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-2">
                                <div class="card-body p-2 p-sm-3">
                                    <div class="media forum-item">
                                        <a href="#" data-toggle="collapse" data-target=".forum-content"><img src="images/lil.jpg" class="mr-3 rounded-circle" width="50" alt="User" /></a>
                                        <div class="media-body">
                                            <h6><a href="#" data-toggle="collapse" data-target=".forum-content" class="text-body">Http client post raw content</a></h6>
                                            <p class="text-secondary">
                                                lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet
                                            </p>
                                            <p class="text-muted"><a href="javascript:void(0)">Lil-Swag</a> replied <span class="text-secondary font-weight-bold">7 hours ago</span></p>
                                        </div>
                                        <div class="text-muted small text-center align-self-center">
                                            <span class="d-none d-sm-inline-block"><i class="far fa-eye"></i> 32</span>
                                            <span><i class="far fa-comment ml-2"></i> 2</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-2">
                                <div class="card-body p-2 p-sm-3">
                                    <div class="media forum-item">
                                        <a href="#" data-toggle="collapse" data-target=".forum-content"><img src="images/jessy.jpg" class="mr-3 rounded-circle" width="50" alt="User" /></a>
                                        <div class="media-body">
                                            <h6><a href="#" data-toggle="collapse" data-target=".forum-content" class="text-body">Top rated filter not working</a></h6>
                                            <p class="text-secondary">
                                                lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet
                                            </p>
                                            <p class="text-muted"><a href="javascript:void(0)">Jessica</a> replied <span class="text-secondary font-weight-bold">11 hours ago</span></p>
                                        </div>
                                        <div class="text-muted small text-center align-self-center">
                                            <span class="d-none d-sm-inline-block"><i class="far fa-eye"></i> 49</span>
                                            <span><i class="far fa-comment ml-2"></i> 9</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-2">
                                <div class="card-body p-2 p-sm-3">
                                    <div class="media forum-item">
                                        <a href="#" data-toggle="collapse" data-target=".forum-content"><img src="images/ble.jpg" class="mr-3 rounded-circle" width="50" alt="User" /></a>
                                        <div class="media-body">
                                            <h6><a href="#" data-toggle="collapse" data-target=".forum-content" class="text-body">Create a delimiter field</a></h6>
                                            <p class="text-secondary">
                                                lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet
                                            </p>
                                            <p class="text-muted"><a href="javascript:void(0)">Blessing</a> replied <span class="text-secondary font-weight-bold">12 hours ago</span></p>
                                        </div>
                                        <div class="text-muted small text-center align-self-center">
                                            <span class="d-none d-sm-inline-block"><i class="far fa-eye"></i> 65</span>
                                            <span><i class="far fa-comment ml-2"></i> 10</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-2">
                                <div class="card-body p-2 p-sm-3">
                                    <div class="media forum-item">
                                        <a href="#" data-toggle="collapse" data-target=".forum-content"><img src="images/lil.jpg" class="mr-3 rounded-circle" width="50" alt="User" /></a>
                                        <div class="media-body">
                                            <h6><a href="#" data-toggle="collapse" data-target=".forum-content" class="text-body">One model 4 tables</a></h6>
                                            <p class="text-secondary">
                                                lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet
                                            </p>
                                            <p class="text-muted"><a href="javascript:void(0)">Lil-Swag</a> replied <span class="text-secondary font-weight-bold">14 hours ago</span></p>
                                        </div>
                                        <div class="text-muted small text-center align-self-center">
                                            <span class="d-none d-sm-inline-block"><i class="far fa-eye"></i> 45</span>
                                            <span><i class="far fa-comment ml-2"></i> 4</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-2">
                                <div class="card-body p-2 p-sm-3">
                                    <div class="media forum-item">
                                        <a href="#" data-toggle="collapse" data-target=".forum-content"><img src="images/law.jpg" class="mr-3 rounded-circle" width="50" alt="User" /></a>
                                        <div class="media-body">
                                            <h6><a href="#" data-toggle="collapse" data-target=".forum-content" class="text-body">Auth attempt returns false</a></h6>
                                            <p class="text-secondary">
                                                lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet
                                            </p>
                                            <p class="text-muted"><a href="javascript:void(0)">Law P</a> replied <span class="text-secondary font-weight-bold">18 hours ago</span></p>
                                        </div>
                                        <div class="text-muted small text-center align-self-center">
                                            <span class="d-none d-sm-inline-block"><i class="far fa-eye"></i> 70</span>
                                            <span><i class="far fa-comment ml-2"></i> 3</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <ul class="pagination pagination-sm pagination-circle justify-content-center mb-0">
                                <li class="page-item disabled">
                                    <span class="page-link has-icon"><i class="fas fa-chevron-left"></i></span>
                                </li>
                                <li class="page-item"><a class="page-link" href="javascript:void(0)">1</a></li>
                                <li class="page-item active"><span class="page-link">2</span></li>
                                <li class="page-item"><a class="page-link" href="javascript:void(0)">3</a></li>
                                <li class="page-item">
                                    <a class="page-link has-icon" href="javascript:void(0)"><i class="fas fa-chevron-right"></i></a>
                                </li>
                            </ul>

                        </div>
                        <!-- /Forum List -->

                        <!-- Forum Detail -->
                        <div class="inner-main-body p-2 p-sm-3 collapse forum-content">
                            <a href="#" class="btn btn-light btn-sm mb-3 has-icon" data-toggle="collapse" data-target=".forum-content"><i class="fa fa-arrow-left mr-2"></i>Back</a>
                            <div class="card mb-2">
                                <div class="card-body">
                                    <div class="media forum-item">
                                        <a href="javascript:void(0)" class="card-link">
                                            <img src="images/law.jpg" class="rounded-circle" width="50" alt="User" />
                                            <small class="d-block text-center text-muted">Newbie</small>
                                        </a>
                                        <div class="media-body ml-3">
                                            <a href="javascript:void(0)" class="text-secondary">Mokrani</a>
                                            <small class="text-muted ml-2">1 hour ago</small>
                                            <h5 class="mt-1">Realtime fetching data</h5>
                                            <div class="mt-3 font-size-sm">
                                                <p>Hellooo :)</p>
                                                <p>
                                                    I'm newbie with laravel and i want to fetch data from database in realtime for my dashboard anaytics and i found a solution with ajax but it dosen't work if any one have a simple solution it will be
                                                    helpful
                                                </p>
                                                <p>Thank</p>
                                            </div>
                                        </div>
                                        <div class="text-muted small text-center">
                                            <span class="d-none d-sm-inline-block"><i class="far fa-eye"></i> 19</span>
                                            <span><i class="far fa-comment ml-2"></i> 3</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-2">
                                <div class="card-body">
                                    <div class="media forum-item">
                                        <a href="javascript:void(0)" class="card-link">
                                            <img src="images/jessy.jpg" class="rounded-circle" width="50" alt="User" />
                                            <small class="d-block text-center text-muted">Pro</small>
                                        </a>
                                        <div class="media-body ml-3">
                                            <a href="javascript:void(0)" class="text-secondary">drewdan</a>
                                            <small class="text-muted ml-2">1 hour ago</small>
                                            <div class="mt-3 font-size-sm">
                                                <p>What is the most important thing?</p>
                                                <p>Also, WebSockets are a great solution for realtime data on a dashboard. Laravel offers this out of the box using broadcasting</p>
                                            </div>
                                            <button class="btn btn-xs text-muted has-icon"><i class="fa fa-heart" aria-hidden="true"></i>1</button>
                                            <a href="javascript:void(0)" class="text-muted small">Reply</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Forum Detail -->
                    </div>
                    <!-- /Inner main -->
                </div>

                <!-- New Thread Modal -->
                <div class="modal fade" id="threadModal" tabindex="-1" role="dialog" aria-labelledby="threadModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <form>
                                <div class="modal-header d-flex align-items-center bg-primary text-white text-center">
                                    <h6 class="modal-title mb-0" id="threadModalLabel">Add New Topic </h6>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label for="threadTitle">Title</label>
                                        <input type="text" class="form-control" id="threadTitle" placeholder="Enter title" autofocus="" />
                                    </div>
                                    <textarea class="form-control summernote" style="display: none;"></textarea>

                                    <div class="custom-file form-control-sm mt-3" style="max-width: 300px;">
                                        <input type="file" class="custom-file-input" id="customFile" multiple="" />
                                        <label class="custom-file-label" for="customFile">Attachment</label>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-light" data-dismiss="modal">Cancel</button>
                                    <button type="button" class="btn btn-primary">Post</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </section>

    </main>

    <!-- Footer -->
    <footer class="bg-dark text-white py-4">
        <div class="container text-center">
            <p>&copy; 2024 We-SHARE. All rights reserved.</p>
        </div>
    </footer>

    <!-- Bootstrap and JavaScript -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        // Function to animate the text
        function animateText() {
            var text = "Welcome To We-share!";
            var newText = "Ask Questions & Get Anwers!";
            var element = document.getElementById('animated-text');
            var index = 0;

            // Function to show text with animation
            function showText() {
                element.textContent += text[index];
                index++;
                if (index < text.length) {
                    setTimeout(showText, 100); // Adjust the speed of animation as needed
                } else {
                    // Clear the text after a delay
                    setTimeout(function() {
                        element.textContent = "";
                        index = 0;
                        showNewText(); // Call the function to show the new text
                    }, 1000); // Wait for 1 second before clearing the text
                }
            }

            // Function to show new text with animation
            function showNewText() {
                index = 0;
                // Function to show text with animation
                function show() {
                    element.textContent += newText[index];
                    index++;
                    if (index < newText.length) {
                        setTimeout(show, 100); // Adjust the speed of animation as needed
                    } else {
                        setTimeout(function() {
                            element.textContent = ""; // Clear the text after a delay
                            index = 0;
                            showText(); // Restart the animation with the initial text
                        }, 1000); // Wait for 1 second before clearing the text
                    }
                }
                show(); // Start showing the new text
            }

            showText(); // Start showing the initial text
        }

        // Call the animateText function when the page loads
        window.onload = animateText;
    </script>
</body>

</html>