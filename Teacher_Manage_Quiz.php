<?php
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
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Hyper</a></li>
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Pages</a></li>
                                        <li class="breadcrumb-item active">Starter</li>
                                    </ol>
                                </div>
                                <h4 class="page-title">Add quiz assignment</h4>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                </div> <!-- container -->

            </div> <!-- content -->





            <div class="row">

                <div class="card">
                    <div class="card-header mb-3">
                        <h4>Add Assignment</h4>
                    </div>
                    <form action="#">
                        <div class="mb-3 me-5 ms-4">
                            <label for="simpleinput" class="form-label">Title</label>
                            <input type="text" id="simpleinput" class="form-control">
                        </div>
                        <div class="row">
                            <div class="col-lg-2 ms-4">
                                <div class="mb-3">
                                    <label for="Max Score" class="form-label">Max Score</label>
                                    <input type="text" id="Max Score" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-3 me-4">
                                <div class="mb-3">
                                    <label for="inputState" class="form-label">Category</label>
                                    <select id="inputState" class="form-select">
                                        <option>Choose</option>
                                        <option>Option 1</option>
                                        <option>Option 2</option>
                                        <option>Option 3</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="mb-3 position-relative" id="datepicker1">
                                    <label class="form-label">Start</label>
                                    <input type="text" class="form-control" data-provide="datepicker"
                                        data-date-container="#datepicker1">
                                </div>
                            </div>
                            <div class="col-lg-2 me-5">
                                <div class="mb-3">
                                    <label for="inputState" class="form-label">Module</label>
                                    <select id="inputState" class="form-select">
                                        <option>Choose</option>
                                        <option>Option 1</option>
                                        <option>Option 2</option>
                                        <option>Option 3</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-2 ms-4 mt-4">
                                <div class="mb-3 p-0">
                                    <input type="checkbox" class="form-check-input" id="customCheck1">
                                    <label for="customCheck1" class="form-check-label">Allow Late?</label>
                                </div>
                            </div>
                            <div class="col-lg-3 me-4">
                                <div class="mb-3">
                                    <label for="Grading" class="form-label">Grading</label>
                                    <select id="Grading" class="form-select">
                                        <option>Choose</option>
                                        <option>Option 1</option>
                                        <option>Option 2</option>
                                        <option>Option 3</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="mb-3 position-relative" id="datepicker1">
                                    <label class="form-label">Due</label>
                                    <input type="text" class="form-control" data-provide="datepicker"
                                        data-date-container="#datepicker1">
                                </div>
                            </div>
                            <div class="col-lg-2 me-4">
                                <div class="mb-3">
                                    <label for="inputState" class="form-label">Grading Score</label>
                                    <select id="inputState" class="form-select">
                                        <option>Choose</option>
                                        <option>Option 1</option>
                                        <option>Option 2</option>
                                        <option>Option 3</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <h3 class="ms-4 mt-3 mb-3">Options</h3>
                        <div class="row">
                            <div class="mb-1 me-5 ms-4">
                                <label for="simpleinput" class="form-label">Grading</label>
                            </div>
                            <div class="mb-3 me-5 ms-4">
                                <div class="form-check form-check-inline">
                                    <input type="radio" id="customRadio5" name="grading" class="form-check-input">
                                    <label class="form-check-label" for="customRadio5">Use Latest Score</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input type="radio" id="customRadio6" name="grading" class="form-check-input">
                                    <label class="form-check-label" for="customRadio6">Use Best Score</label>
                                </div>
                            </div>
                        </div>
                        <div class="row me-5 ms-4">
                            <h3 class="mt-4 mb-4">Instructions</h3>
                            <div id="snow-editor" style="height: 300px;">
                                <br>
                                <br>
                                <h3>Type your text here........</h3>
                            </div>
                        </div>
                        <!-- <div class="card-footer col-sm-4 ms-2 mt-2 d-grid">
                            <div class="row">
                                <div class="col-sm-3">
                                    <input type="reset" class="btn btn-primary text-center" value="Clear" />
                                </div>
                                <div class="col-sm-3">
                                    <input type="submit" class="btn btn-primary" value="Submit" />
                                </div>
                            </div>
                        </div> -->


                        <div class="row justify-content-md-center mt-4">
                            <div class="card col-sm-11">
                                <div class="card-body">
                                    <div class="row mb-4">
                                        <div class="col-sm-9">
                                            <label for="project-overview" class="form-label">Please select
                                                subject</label>
                                            <select class="form-control select2" data-toggle="select2">
                                                <option>Select Category</option>
                                                <option value="AZ">Literacy</option>
                                                <option value="CO">Numeracy</option>
                                            </select>
                                        </div>

                                    </div>

                                    <form action="" method="POST">
                                        <div class="mb-3">
                                            <label for="simpleinput" class="form-label">Quiz Title</label>
                                            <input type="text" id="simpleinput" class="form-control">
                                        </div>

                                        <div class="question-list">
                                            <div class="question-container mb-2">
                                                <label>Question #1</label>
                                                <textarea class="form-control mb-3" name="" id="" cols="130" rows="5"
                                                    placeholder="Enter your Questions here"></textarea>
                                                <table class="table table-hover">
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <div class="row">
                                                                    <div class="col-sm-1">
                                                                        <div class="form-check form-check-inline mt-1">
                                                                            <input type="radio" id="customRadio1a"
                                                                                name="choices1"
                                                                                class="form-check-input">
                                                                            <label class="form-check-label"
                                                                                for="customRadio1a">a</label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-11">
                                                                        <div>
                                                                            <input type="text" class="form-control">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="row">
                                                                    <div class="col-sm-1">
                                                                        <div class="form-check form-check-inline mt-1">
                                                                            <input type="radio" id="customRadio1b"
                                                                                name="choices1"
                                                                                class="form-check-input">
                                                                            <label class="form-check-label"
                                                                                for="customRadio1b">b</label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-11">
                                                                        <div>
                                                                            <input type="text" class="form-control">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="row">
                                                                    <div class="col-sm-1">
                                                                        <div class="form-check form-check-inline mt-1">
                                                                            <input type="radio" id="customRadio1c"
                                                                                name="choices1"
                                                                                class="form-check-input">
                                                                            <label class="form-check-label"
                                                                                for="customRadio1c">c</label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-11">
                                                                        <div>
                                                                            <input type="text" class="form-control">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="row">
                                                                    <div class="col-sm-1">
                                                                        <div class="form-check form-check-inline mt-1">
                                                                            <input type="radio" id="customRadio1d"
                                                                                name="choices1"
                                                                                class="form-check-input">
                                                                            <label class="form-check-label"
                                                                                for="customRadio1d">d</label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-11">
                                                                        <div>
                                                                            <input type="text" class="form-control">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="row mt-4">
                                            <div class="col-sm-6">
                                                <input type="button" class="btn btn-primary" value="Create Quiz">
                                            </div>
                                            <div class="col-sm-6 text-sm-end">
                                                <input type="button" class="btn btn-primary add-question-btn"
                                                    value="Add Question">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                </div>


                </form>
            </div>
        </div>


        <script>
            document.addEventListener('DOMContentLoaded', function () {
                const addQuestionBtn = document.querySelector('.add-question-btn');
                const questionList = document.querySelector('.question-list');
                let questionNumber = 2; // Starting question number

                addQuestionBtn.addEventListener('click', function () {
                    const questionContainer = document.createElement('div');
                    questionContainer.classList.add('question-container', 'mb-2');
                    questionContainer.innerHTML = `
                    <label>Question #${questionNumber}</label>
                    <textarea class="form-control mb-3" name="" id="" cols="130" rows="5"
                        placeholder="Enter your Questions here"></textarea>
                    <table class="table table-hover">
                        <tbody>
                            <tr>
                                <td>
                                    <div class="row">
                                        <div class="col-sm-1">
                                            <div class="form-check form-check-inline mt-1">
                                                <input type="radio" id="customRadio${questionNumber}a" name="choices${questionNumber}"
                                                    class="form-check-input">
                                                <label class="form-check-label" for="customRadio${questionNumber}a">a</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-11">
                                            <div>
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="row">
                                        <div class="col-sm-1">
                                            <div class="form-check form-check-inline mt-1">
                                                <input type="radio" id="customRadio${questionNumber}b" name="choices${questionNumber}"
                                                    class="form-check-input">
                                                <label class="form-check-label" for="customRadio${questionNumber}b">b</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-11">
                                            <div>
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="row">
                                        <div class="col-sm-1">
                                            <div class="form-check form-check-inline mt-1">
                                                <input type="radio" id="customRadio${questionNumber}c" name="choices${questionNumber}"
                                                    class="form-check-input">
                                                <label class="form-check-label" for="customRadio${questionNumber}c">c</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-11">
                                            <div>
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="row">
                                        <div class="col-sm-1">
                                            <div class="form-check form-check-inline mt-1">
                                                <input type="radio" id="customRadio${questionNumber}d" name="choices${questionNumber}"
                                                    class="form-check-input">
                                                <label class="form-check-label" for="customRadio${questionNumber}d">d</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-11">
                                            <div>
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                `;

                    questionList.appendChild(questionContainer);
                    questionNumber++;
                });
            });
        </script>















        <!-- end content here -->
    </div>
    <!-- <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                                <p class="mb-0">...</p>
                            </div> -->
    </div> <!-- end tab-content-->
    </div> <!-- end col-->
    </div>
    <!-- end row-->




    <!-- Footer Start -->
    <footer class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <script>document.write(new Date().getFullYear())</script> © Hyper - Coderthemes.com
                </div>
                <div class="col-md-6">
                    <div class="text-md-end footer-links d-none d-md-block">
                        <a href="javascript: void(0);">About</a>
                        <a href="javascript: void(0);">Support</a>
                        <a href="javascript: void(0);">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- end Footer -->

    </div>

    <!-- ============================================================== -->
    <!-- End Page content -->
    <!-- ============================================================== -->


    </div>
    <!-- END wrapper -->


    <!-- Start right sidebar -->
    <?php include('Teacher_Settings.php'); ?>
    <!-- End right side bar -->


    <!-- bundle -->
    <script src="assets/js/vendor.min.js"></script>
    <script src="assets/js/app.min.js"></script>

    <!-- quill js -->
    <script src="assets/js/vendor/quill.min.js"></script>
    <!-- quill Init js-->
    <script src="assets/js/pages/demo.quilljs.js"></script>

</body>

</html>