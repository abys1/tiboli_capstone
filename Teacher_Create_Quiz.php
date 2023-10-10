<?php
// Ensure you start the session
session_start();
$user_id = $_SESSION['user_id'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Starter Page | Hyper - Responsive Bootstrap 5 Admin Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description">
    <meta content="Coderthemes" name="author">
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- App css -->
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" id="light-style">
    <link href="assets/css/app-dark.min.css" rel="stylesheet" type="text/css" id="dark-style">

    <!-- Quill css -->
    <link href="assets/css/vendor/quill.core.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/vendor/quill.snow.css" rel="stylesheet" type="text/css" />

    <!-- Add this inside your <head> tag -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Select2 CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.1.0/css/select2.min.css" rel="stylesheet" />

    <!-- jQuery (required for Select2) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- Select2 JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.1.0/js/select2.min.js"></script>

</head>

<body <?php include('dataconfig.php') ?>>
    <!-- Begin page -->
    <div class="wrapper">
        <!-- ========== Left Sidebar Start ========== -->
        <div class="leftside-menu">

            <!-- LOGO -->
            <a href="index.html" class="logo text-center logo-light">
                <span class="logo-lg">
                    <img src="assets/images/logo.png" alt="" height="16">
                </span>
                <span class="logo-sm">
                    <img src="assets/images/logo_sm.png" alt="" height="16">
                </span>
            </a>

            <!-- LOGO -->
            <a href="index.html" class="logo text-center logo-dark">
                <span class="logo-lg">
                    <img src="assets/images/logo-dark.png" alt="" height="16">
                </span>
                <span class="logo-sm">
                    <img src="assets/images/logo_sm_dark.png" alt="" height="16">
                </span>
            </a>

            <div class="h-100" id="leftside-menu-container" data-simplebar="">

                <!--- Sidemenu -->
                <?php include('teacher_sidemenu.php') ?>

                <!-- End Sidebar -->
                <div class="clearfix"></div>
            </div>
            <!-- Sidebar -left -->
        </div>
        <!-- Left Sidebar End -->

        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->

        <div class="content-page">
            <div class="content">
                <!-- Topbar Start -->
                <?php include('teacher_topbar.php') ?>

                <!-- Start Content-->
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box">
                                <div class="page-title-right">
                                </div>
                                <h4 class="page-title">Add List</h4>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <!-- Modal for adding a new quiz assignment -->
                    <div class="modal fade" id="addQuizModal" tabindex="-1" aria-labelledby="addQuizModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="addQuizModalLabel">Add Quiz Assignment</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <!-- Form for adding a new quiz assignment -->
                                    <form id="addQuizForm">
                                        <div class="mb-3">
                                            <label for="quizTitle" class="form-label">Title</label>
                                            <input type="text" class="form-control" id="quizTitle" name="quizTitle">
                                        </div>
                                        <div class="mb-3">
                                            <label for="pointsPerItem" class="form-label">Points per Item</label>
                                            <input type="text" class="form-control" id="pointsPerItem"
                                                name="pointsPerItem">
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary" id="addQuizButton">Add</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <script>
                    $(document).ready(function() {
                        // Handle form submission when the "Add" button is clicked
                        $("#addQuizButton").click(function() {
                            // Serialize the form data
                            var formData = $("#addQuizForm").serialize();

                            // Send an AJAX request to submit the form data
                            $.ajax({
                                type: "POST",
                                url: "process_add_quiz.php", // Replace with the URL to your PHP script to handle form submission
                                data: formData,
                                success: function(response) {
                                    // Handle the response from the server
                                    if (response == "success") {
                                        // Close the modal and reset the form
                                        $("#addQuizModal").modal("hide");
                                        $("#addQuizForm")[0].reset();
                                        // You can also reload or update the quiz list on success
                                        // Example: window.location.reload();
                                    } else {
                                        // Display an error message
                                        alert("Error occurred while adding quiz.");
                                    }
                                }
                            });
                        });
                    });
                    </script>




                    <!-- Table to display quiz assignments -->
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-hover table-centered table-nowrap mb-0">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Title</th>
                                                    <th>Instructions</th>
                                                    <th>Date Start</th>
                                                    <th>Due</th>
                                                    <th>Added By</th>
                                                    <th>Max Score</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php
                                            include 'dbcon.php';

                                            $quiz = "SELECT tbl_quiz_options.quiz_options_id, tbl_userinfo.firstname, tbl_userinfo.lastname, tbl_quiz_options.title, tbl_quiz_options.max_score, tbl_quiz_options.date_start, tbl_quiz_options.due, tbl_quiz_options.instructions 
                                            FROM tbl_quiz_options
                                            JOIN tbl_userinfo ON tbl_quiz_options.added_by = tbl_userinfo.user_id";

                                            $result = mysqli_query($conn, $quiz);

                                            if(mysqli_num_rows($result) > 0) {
                                                while($row = mysqli_fetch_assoc($result)) {
                                                    ?>
                                                    <tr>
                                                        <td><?php echo $row['quiz_options_id']; ?></td>
                                                        <td><?php echo $row['title']; ?></td>
                                                        <td><?php echo $row['instructions']; ?></td>
                                                        <td><?php echo $row['date_start']; ?></td>
                                                        <td><?php echo $row['due']; ?></td>
                                                        <td><?php echo $row['firstname'] . $row['lastname']; ?></td>
                                                        <td><?php echo $row['max_score']; ?></td>
                                                        <td>
                                                        <a href="teacher_create_quiz_multic.php?quiz_options_id=<?php echo $row['quiz_options_id']; ?>" class="btn btn-success btn-sm">Manage</a>
                                                        <a href="#" class="btn btn-primary btn-sm">Edit</a>
                                                        <a href="#" class="btn btn-danger btn-sm">Archive</a>
                                                        </td>
                                                    </tr>
                                                    <?php
                                                }
                                            }
                                            ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div> <!-- container -->
            </div> <!-- content -->
        </div>





        <!-- bundle -->
        <script src="assets/js/vendor.min.js"></script>
        <script src="assets/js/app.min.js"></script>

        <!-- quill js -->
        <script src="assets/js/vendor/quill.min.js"></script>
        <!-- quill Init js-->
        <script src="assets/js/pages/demo.quilljs.js"></script>

</body>

</html>