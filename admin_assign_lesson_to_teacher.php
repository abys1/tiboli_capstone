<?php
session_start();
$user_id = $_SESSION['user_id'];

if (isset($_GET['logout'])) {
    session_unset();
    session_destroy();
    header("Location: login.php?Logout");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en" class="menuitem-active">

<head>
    <meta charset="utf-8">
    <title>Admin Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description">
    <meta content="Coderthemes" name="author">
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">


    <!-- App css -->
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" id="light-style">
    <link href="assets/css/app-dark.min.css" rel="stylesheet" type="text/css" id="dark-style" disabled="disabled">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <!-- Quill css -->
    <link href="assets/css/vendor/quill.core.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/vendor/quill.snow.css" rel="stylesheet" type="text/css" />

</head>

<body class="show"
    data-layout-config="{&quot;leftSideBarTheme&quot;:&quot;dark&quot;,&quot;layoutBoxed&quot;:false, &quot;leftSidebarCondensed&quot;:false, &quot;leftSidebarScrollable&quot;:false,&quot;darkMode&quot;:false, &quot;showRightSidebarOnStart&quot;: false}"
    data-leftbar-theme="dark" data-leftbar-compact-mode="condensed" style="visibility: visible;">
    <!-- Begin page -->
    <div class="wrapper">
        <!-- ========== Left Sidebar Start ========== -->
        <div class="leftside-menu menuitem-active">

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

            <div class="h-100 show" id="leftside-menu-container" data-simplebar="init">
                <div class="simplebar-wrapper" style="margin: 0px;">
                    <div class="simplebar-height-auto-observer-wrapper">
                        <div class="simplebar-height-auto-observer"></div>
                    </div>
                    <div class="simplebar-mask">
                        <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
                            <div class="simplebar-content-wrapper" style="height: 100%; overflow: hidden;">
                                <div class="simplebar-content" style="padding: 0px;">

                                <!--- Sidemenu -->
                                <ul class="side-nav">


<li class="side-nav-item">
    <a href="admin_dashboard.php" class="side-nav-link">
        <i class="uil-home"></i>
        <span>Dashboard</span>
    </a>
</li>

<li class="side-nav-item">
    <a data-bs-toggle="collapse" href="#sidebarDashboards" aria-expanded="false"
        aria-controls="sidebarDashboards" class="side-nav-link collapsed">
        <i class="uil-user-plus"></i>
        <span class="badge bg-success float-end"></span>
        <span> Users </span>
        <span class="menu-arrow"></span>
    </a>
    <div class="collapse" id="sidebarDashboards" style="">
        <ul class="side-nav-second-level">
            <li>
                <a href="admin_addAccount.php">Admin</a>
            </li>
            <li>
                <a href="admin_student.php">Student</a>
            </li>
            <li>
                <a href="admin_teacher.php">Teacher</a>
            </li>

        </ul>
    </div>
</li>

<li class="side-nav-item">
    <a href="admin_manage_lesson.php" class="side-nav-link">
        <i class="fa fa-book"></i>
        <span>Manage Lesson</span>
    </a>
</li>

<li class="side-nav-item">
    <a data-bs-toggle="collapse" href="#sidebarDashboardsLessons"
        aria-expanded="false" aria-controls="sidebarDashboards"
        class="side-nav-link collapsed">
        <i class="uil-user-plus"></i>
        <span class="badge bg-success float-end"></span>
        <span> Manage Request Lessons </span>
        <span class="menu-arrow"></span>
    </a>
    <div class="collapse" id="sidebarDashboardsLessons" style="">
        <ul class="side-nav-second-level">
            <li>
                <a href="admin_accepted_lessons.php">Accepted Lessons</a>
            </li>
            <li>
                <a href="admin_pending_lessons.php">Pending Lessons</a>
            </li>
            <li>
                <a href="admin_archive_lessons.php">Archive Lessons</a>
            </li>

        </ul>
    </div>
</li>

<li class="side-nav-item">
    <a data-bs-toggle="collapse" href="#sidebarquiz"
        aria-expanded="false" aria-controls="sidebarquiz"
        class="side-nav-link collapsed">
        <i class="uil-user-plus"></i>
        <span class="badge bg-success float-end"></span>
        <span> Manage Quiz </span>
        <span class="menu-arrow"></span>
    </a>
    <div class="collapse" id="sidebarquiz">
            <ul class="side-nav-third-level">
              <li>
                <a href="admin_Add_QuizMultiple.php"><i class=" uil-list-ul"></i> Multiple Choice</a>
              </li>
              <li>
                <a href="admin_Add_QuizTrueOrfalse.php"><i class=" uil-check-circle"></i> <i
                    class="uil-times-circle"></i> True or False</a>
              </li>
              <li>
                <a href="admin_QuizView.php"><i class="uil-eye"></i> Quiz View</a>
              </li>

        </ul>
    </div>
</li>

<li class="side-nav-item">
    <a href="admin_assign_lesson_to_teacher.php " class="side-nav-link">
        <i class="uil-user-plus"></i>
        <span>Assign Lesson to Teacher</span>
    </a>
</li>
<li class="side-nav-item">
    <a data-bs-toggle="collapse" href="#sidebarclass" aria-expanded="false"
        aria-controls="sidebarclass" class="side-nav-link">
        <i class="uil-folder-plus"></i>
        <span> Manage Class/Section </span>
        <span class="menu-arrow"></span>
    </a>
    <div class="collapse" id="sidebarclass">
        <ul class="side-nav-second-level">
            <li>
                <a href="admin_class.php">Create Class/Section</a>
            </li>
            <li>
                <a href="admin_assign_teacher_class.php">Assign Teacher to
                    Class</a>
            </li>
        </ul>
    </div>
</li>
<li class="side-nav-item">
    <a data-bs-toggle="collapse" href="#sidebarArea" aria-expanded="false"
        aria-controls="sidebarArea" class="side-nav-link">
        <i class="uil-folder-plus"></i>
        <span> Manage Area </span>
        <span class="menu-arrow"></span>
    </a>
    <div class="collapse" id="sidebarArea">
        <ul class="side-nav-second-level">
            <li>
                <a href="admin_manage_area.php">Create/Register Area</a>
            </li>
            <li>
                <a href="admin_assign_teacher_lesson.php">Assign Teacher to
                    Area</a>
            </li>
            <li>
                <a href="admin_assign_class_area.php">Assign Class to Area</a>
            </li>
        </ul>
    </div>
</li>
<li class="side-nav-item">
    <a href="#" class="side-nav-link">
        <i class="uil-user-plus"></i>
        <span>Progress</span>
    </a>
</li>

<li class="side-nav-item">
    <a data-bs-toggle="collapse" href="#sidebarEmail" aria-expanded="false"
        aria-controls="sidebarEmail" class="side-nav-link">
        <i class="uil-folder-plus"></i>
        <span> Reports </span>
        <span class="menu-arrow"></span>
    </a>
    <div class="collapse" id="sidebarEmail">
        <ul class="side-nav-second-level">
            <li>
                <a href="#">List of Teacher</a>
            </li>
            <li>
                <a href="#">List of Admin</a>
            </li>
            <li>
                <a href="#">List of Learners</a>
            </li>
            <li>
                <a href="#">List of Lesson w/Content</a>
            </li>
        </ul>
    </div>
</li>

</ul>



<!-- End Sidebar -->


                                    <div class="clearfix"></div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="simplebar-placeholder" style="width: 70px; height: 1150px;"></div>
                </div>
                <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
                    <div class="simplebar-scrollbar" style="width: 0px; display: none;"></div>
                </div>
                <div class="simplebar-track simplebar-vertical" style="visibility: hidden;">
                    <div class="simplebar-scrollbar"
                        style="height: 0px; transform: translate3d(0px, 0px, 0px); display: none;"></div>
                </div>
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
                    <div class="navbar-custom">
                    <ul class="list-unstyled topbar-menu float-end mb-0">
                        <li class="dropdown notification-list d-lg-none">
                            <a class="nav-link dropdown-toggle arrow-none" data-bs-toggle="dropdown" href="#"
                                role="button" aria-haspopup="false" aria-expanded="false">
                                <i class="dripicons-search noti-icon"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-animated dropdown-lg p-0">
                                <form class="p-3">
                                    <input type="text" class="form-control" placeholder="Search ..."
                                        aria-label="Recipient's username">
                                </form>
                            </div>
                        </li>

                  



                        <li class="dropdown notification-list">
                            <a class="nav-link dropdown-toggle nav-user arrow-none me-0" data-bs-toggle="dropdown"
                                href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <span class="account-user-avatar">
                                    <img src="assets/images/users/avatar-1.jpg" alt="user-image" class="rounded-circle">
                                </span>
                                <span>
                                    <?php
                                    include 'dbcon.php';

                                    if (isset($_SESSION['user_id'])) {
                                        $user_id = $_SESSION['user_id'];

                                        $sql = "SELECT tbl_userinfo.user_id, tbl_userinfo.firstname, tbl_userinfo.middlename, tbl_userinfo.lastname, tbl_user_level.level
                                                    FROM tbl_admin
                                                    JOIN tbl_userinfo ON tbl_admin.user_id = tbl_userinfo.user_id
                                                    JOIN tbl_user_level ON tbl_admin.level_id = tbl_user_level.level_id
                                                    WHERE tbl_user_level.level = 'ADMIN' AND tbl_userinfo.user_id = '$user_id'
                                                    LIMIT 1;";

                                        $result = mysqli_query($conn, $sql);

                                        if ($result && mysqli_num_rows($result) > 0) {
                                            $row = mysqli_fetch_assoc($result);
                                            ?>
                                            <span class="account-user-name"><?php echo $row['firstname'] . ' ' . $row['lastname'] . ' ' . $row['lastname']; ?></span>
                                            <span class="account-position"><?php echo $row['level']; ?></span>
                                            <?php
                                        } else {
                                            echo "No records found in tbl_admin";
                                        }
                                    } else {
                                        echo "No user ID provided";
                                    }
                                    ?>
                                </span>
                            </a>
                            <div
                                class="dropdown-menu dropdown-menu-end dropdown-menu-animated topbar-dropdown-menu profile-dropdown">
                                <!-- item-->
                                <div class=" dropdown-header noti-title">
                                    <h6 class="text-overflow m-0">Welcome !</h6>
                                </div>

                                <!-- item-->
                                <a href="admin_profile.php" class="dropdown-item notify-item">
                                    <i class="mdi mdi-account-circle me-1"></i>
                                    <span>My Account</span>
                                </a>
                                <!-- item-->
                                <a href="login.php?logout=true" class="dropdown-item notify-item">
                                    <i class="mdi mdi-logout me-1"></i>
                                    <span>Logout</span>
                                </a>
                            </div>
                        </li>

                    </ul>
                    <button class="button-menu-mobile open-left">
                        <i class="mdi mdi-menu"></i>
                    </button>
                   
                </div>
                <!-- end Topbar -->

                  <!-- content -->
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-body">
                <div class="row mb-2">
                  <div class="col-sm-4">
                    <!-- Single Select -->
                    <select class="form-control select2" data-toggle="select2">
                      <option>Select</option>
                      <option value="AK">Literacy</option>
                      <option value="HI">Numeracy</option>
                    </select>
                  </div>
                  <div class="col-sm-8">
                    <div class="text-sm-end">
                    <button type="button" class="btn btn-info mb-2" data-bs-toggle="modal" data-bs-target="#assignTeacherModal">Assign Teacher</button>
                    </div>
                  </div>
                  <!-- end col -->
                </div>
                <div class="table-responsive">
                  <table class="table table-centered table-borderless table-hover w-100 dt-responsive nowrap" id="products-datatable">
                    <thead class="table-light">
                      <tr>
                        <th style="width: 20px;">
                          <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="customCheck1">
                            <label class="form-check-label" for="customCheck1">&nbsp;</label>
                          </div>
                        </th>
                        <th>Teacher Name</th>
                        <th>Full Address</th>
                        <th>Email</th>
                        <th>Lesson</th>
                        <th>Action</th>
                        <th>Status</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>
                          <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="customCheck2">
                            <label class="form-check-label" for="customCheck2">&nbsp;</label>
                          </div>
                        </td>
 
                        <td class="table-user">
                          <img src="assets/images/users/avatar-4.jpg" alt="table-user" class="me-2 rounded-circle">
                          <a href="javascript:void(0);" class="text-body fw-semibold">Paul J. Friend</a>
                        </td>
                        <td>gensan city</td>
                        <td>jvlaroco@gmail.com</td>
                        <td>Numeracy</td>
                        <td>
                          <a href="javascript:void(0);" class="action-icon">
                            <i class="uil-eye"></i>
                          </a>
                          <a href="javascript:void(0);" class="action-icon">
                            <i class="mdi mdi-square-edit-outline"></i>
                          </a>
                          <a href="javascript:void(0);" class="action-icon">
                            <i class="mdi mdi-delete"></i>
                          </a>
                        </td>
                        <td>
                          <span class="badge bg-success">Active</span>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
              <!-- end card-body-->
            </div>
            <!-- end card-->
          </div>
          <!-- end col -->
        </div>
        <!-- end row -->


        <!-- Assign Teacher Modal -->
<div class="modal fade" id="assignTeacherModal" tabindex="-1" role="dialog" aria-labelledby="assignTeacherModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="assignTeacherModalLabel">Assign Teacher</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <label for="topicTitle" class="form-label">Topic Title</label>
                        <select class="form-select" id="topicTitle">
                            <option value="literacy">Literacy</option>
                            <option value="numeracy">Numeracy</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="levelLearning" class="form-label">Level of Learning</label>
                        <select class="form-select" id="levelLearning">
                            <option value="beginner">Beginner</option>
                            <option value="intermediate">Intermediate</option>
                            <option value="advanced">Advanced</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="teacher" class="form-label">Teacher</label>
                        <select class="form-select" id="teacher">
                            <option value="teacher1">Teacher 1</option>
                            <option value="teacher2">Teacher 2</option>
                            <option value="teacher3">Teacher 3</option>
                        </select>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary">Assign</button>
            </div>
        </div>
    </div>
</div>

                <!-- Right Sidebar -->
                <div class="end-bar">

                    <div class="rightbar-title">
                        <a href="javascript:void(0);" class="end-bar-toggle float-end">
                            <i class="dripicons-cross noti-icon"></i>
                        </a>
                        <h5 class="m-0">Settings</h5>
                    </div>

                    <div class="rightbar-content h-100" data-simplebar="init">
                        <div class="simplebar-wrapper" style="margin: 0px;">
                            <div class="simplebar-height-auto-observer-wrapper">
                                <div class="simplebar-height-auto-observer"></div>
                            </div>
                            <div class="simplebar-mask">
                                <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
                                    <div class="simplebar-content-wrapper"
                                        style="height: 100%; overflow: hidden scroll;">
                                        <div class="simplebar-content" style="padding: 0px;">

                                            <div class="p-3">
                                                <div class="alert alert-warning" role="alert">
                                                    <strong>Customize </strong> the overall color scheme, sidebar menu,
                                                    etc.
                                                </div>

                                                <!-- Settings -->
                                                <h5 class="mt-3">Color Scheme</h5>
                                                <hr class="mt-1">

                                                <div class="form-check form-switch mb-1">
                                                    <input class="form-check-input" type="checkbox"
                                                        name="color-scheme-mode" value="light" id="light-mode-check"
                                                        checked="">
                                                    <label class="form-check-label" for="light-mode-check">Light
                                                        Mode</label>
                                                </div>

                                                <div class="form-check form-switch mb-1">
                                                    <input class="form-check-input" type="checkbox"
                                                        name="color-scheme-mode" value="dark" id="dark-mode-check">
                                                    <label class="form-check-label" for="dark-mode-check">Dark
                                                        Mode</label>
                                                </div>


                                                <!-- Width -->
                                                <h5 class="mt-4">Width</h5>
                                                <hr class="mt-1">
                                                <div class="form-check form-switch mb-1">
                                                    <input class="form-check-input" type="checkbox" name="width"
                                                        value="fluid" id="fluid-check" checked="">
                                                    <label class="form-check-label" for="fluid-check">Fluid</label>
                                                </div>

                                                <div class="form-check form-switch mb-1">
                                                    <input class="form-check-input" type="checkbox" name="width"
                                                        value="boxed" id="boxed-check">
                                                    <label class="form-check-label" for="boxed-check">Boxed</label>
                                                </div>


                                                <!-- Left Sidebar-->
                                                <h5 class="mt-4">Left Sidebar</h5>
                                                <hr class="mt-1">
                                                <div class="form-check form-switch mb-1">
                                                    <input class="form-check-input" type="checkbox" name="theme"
                                                        value="default" id="default-check">
                                                    <label class="form-check-label" for="default-check">Default</label>
                                                </div>

                                                <div class="form-check form-switch mb-1">
                                                    <input class="form-check-input" type="checkbox" name="theme"
                                                        value="light" id="light-check" checked="">
                                                    <label class="form-check-label" for="light-check">Light</label>
                                                </div>

                                                <div class="form-check form-switch mb-3">
                                                    <input class="form-check-input" type="checkbox" name="theme"
                                                        value="dark" id="dark-check">
                                                    <label class="form-check-label" for="dark-check">Dark</label>
                                                </div>

                                                <div class="form-check form-switch mb-1">
                                                    <input class="form-check-input" type="checkbox" name="compact"
                                                        value="fixed" id="fixed-check" checked="">
                                                    <label class="form-check-label" for="fixed-check">Fixed</label>
                                                </div>

                                                <div class="form-check form-switch mb-1">
                                                    <input class="form-check-input" type="checkbox" name="compact"
                                                        value="condensed" id="condensed-check">
                                                    <label class="form-check-label"
                                                        for="condensed-check">Condensed</label>
                                                </div>

                                                <div class="form-check form-switch mb-1">
                                                    <input class="form-check-input" type="checkbox" name="compact"
                                                        value="scrollable" id="scrollable-check">
                                                    <label class="form-check-label"
                                                        for="scrollable-check">Scrollable</label>
                                                </div>

                                                <div class="d-grid mt-4">
                                                    <button class="btn btn-primary" id="resetBtn">Reset to
                                                        Default</button>

                                                    
                                                </div>
                                            </div> <!-- end padding-->

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="simplebar-placeholder" style="width: 280px; height: 755px;"></div>
                        </div>
                        <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
                            <div class="simplebar-scrollbar" style="width: 0px; display: none;"></div>
                        </div>
                        <div class="simplebar-track simplebar-vertical" style="visibility: visible;">
                            <div class="simplebar-scrollbar"
                                style="height: 671px; transform: translate3d(0px, 0px, 0px); display: block;"></div>
                        </div>
                    </div>
                </div>

                <div class="rightbar-overlay"></div>
                <!-- /End-bar -->


                <!-- bundle -->
                <script src="assets/js/vendor.min.js"></script>
                <script src="assets/js/app.min.js"></script>

                <!-- quill js -->
                <script src="assets/js/vendor/quill.min.js"></script>
                <!-- quill Init js-->
                <script src="assets/js/pages/demo.quilljs.js"></script>



</body>

</html>