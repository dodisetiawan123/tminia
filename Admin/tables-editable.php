<?php include 'layouts/session.php'; ?>
<?php include 'layouts/head-main.php'; ?>

<head>

    <title>Editable | Minia - Admin & Dashboard Template</title>
    <?php include 'layouts/head.php'; ?>
    <?php include 'layouts/head-style.php'; ?>

</head>

<?php include 'layouts/body.php'; ?>

<!-- Begin page -->
<div id="layout-wrapper">

    <?php include 'layouts/menu.php'; ?>

    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0 font-size-18">Editable</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Tables</a></li>
                                    <li class="breadcrumb-item active">Editable</li>
                                </ol>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Table Edit</h4>
                                <p class="card-title-desc">Table Edits is a lightweight jQuery plugin for making table rows editable.</p>
                            </div>
                            <div class="card-body">

                                <div class="table-responsive">
                                    <table class="table table-editable table-nowrap align-middle table-edits">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Name</th>
                                                <th>Age</th>
                                                <th>Gender</th>
                                                <th>Edit</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr data-id="1">
                                                <td data-field="id" style="width: 80px">1</td>
                                                <td data-field="name">David McHenry</td>
                                                <td data-field="age">24</td>
                                                <td data-field="gender">Male</td>
                                                <td style="width: 100px">
                                                    <a class="btn btn-outline-secondary btn-sm edit" title="Edit">
                                                        <i class="fas fa-pencil-alt"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr data-id="2">
                                                <td data-field="id">2</td>
                                                <td data-field="name">Frank Kirk</td>
                                                <td data-field="age">22</td>
                                                <td data-field="gender">Male</td>
                                                <td>
                                                    <a class="btn btn-outline-secondary btn-sm edit" title="Edit">
                                                        <i class="fas fa-pencil-alt"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr data-id="3">
                                                <td data-field="id">3</td>
                                                <td data-field="name">Rafael Morales</td>
                                                <td data-field="age">26</td>
                                                <td data-field="gender">Male</td>
                                                <td>
                                                    <a class="btn btn-outline-secondary btn-sm edit" title="Edit">
                                                        <i class="fas fa-pencil-alt"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr data-id="4">
                                                <td data-field="id">4</td>
                                                <td data-field="name">Mark Ellison</td>
                                                <td data-field="age">32</td>
                                                <td data-field="gender">Male</td>
                                                <td>
                                                    <a class="btn btn-outline-secondary btn-sm edit" title="Edit">
                                                        <i class="fas fa-pencil-alt"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr data-id="5">
                                                <td data-field="id">5</td>
                                                <td data-field="name">Minnie Walter</td>
                                                <td data-field="age">27</td>
                                                <td data-field="gender">Female</td>
                                                <td>
                                                    <a class="btn btn-outline-secondary btn-sm edit" title="Edit">
                                                        <i class="fas fa-pencil-alt"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div> <!-- end col -->
                </div> <!-- end row -->

            </div> <!-- container-fluid -->
        </div>
        <!-- End Page-content -->


        <?php include 'layouts/footer.php'; ?>
    </div>
    <!-- end main content-->

</div>
<!-- END layout-wrapper -->


<!-- Right Sidebar -->
<?php include 'layouts/right-sidebar.php'; ?>
<!-- /Right-bar -->

<!-- JAVASCRIPT -->

<?php include 'layouts/vendor-scripts.php'; ?>

<!-- Table Editable plugin -->
<script src="assets/libs/table-edits/build/table-edits.min.js"></script>

<script src="assets/js/pages/table-editable.int.js"></script>

<script src="assets/js/app.js"></script>

</body>

</html>