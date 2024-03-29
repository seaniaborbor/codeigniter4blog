<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="<?=base_url('assets/vendor/bootstrap/css/dashboard-bootstrap.css')?>" rel="stylesheet" />
    <link href="<?=base_url('assets/vendor/bootstrap-icons/bootstrap-icons.css')?>" rel="stylesheet">
    <link rel="stylesheet" href="<?=base_url('assets/vendor/bootstrap/css/dashboard_style.css')?>" />
    <link href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css" rel="stylesheet">

    <title>Diverse Media |  </title>
    <style type="text/css">
        .bg-success, .btn-success{
            background-color: #008374!important;
        }
        .border-success{
            border-color: #008374!important;
        }
        .text-success{
            color:#008374!important;
        }
        .active{
            color:white !important;
        }
    </style>
</head>

<body>
    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <div class="bg-success" id="sidebar-wrapper">
            <div class="sidebar-heading text-center py-4 text-white fs-4 fw-bold text-uppercase border-bottom"><i
                    class=" me-2"></i>Diverse Media</div>
            <div class="list-group list-group-flush my-3">
                <a href="<?=base_url('/dashboard')?>" class="list-group-item list-group-item-action bg-transparent second-text active"><i
                        class="bi bi-speedometer me-2"></i>Dashboard</a>
                <a href="<?=base_url('/dashboard/portfolio')?>" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="bi  bi-backpack3 me-2"></i>Portfolio</a>
                <a href="<?=base_url('/dashboard/blog')?>" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="bi bi-pencil me-2"></i>Blog</a>
                <a href="<?=base_url('/dashboard/team')?>" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="bi bi-people me-2"></i>Team Members</a>
                <a href="<?=base_url('/dashboard/services')?>" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i class="bi bi-blockquote-left me-2"></i>Services</a>
                <a href="<?=base_url('/dashboard/testimonials')?>" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i class="bi bi-chat-square-quote me-2"></i>Testimonial</a>
                <a href="<?=base_url('/dashboard/faq')?>" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="bi bi-quora me-2"></i>FAQ</a>
                <a href="<?=base_url('/dashboard/faq')?>" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="bi bi-clipboard-check me-2"></i>Certifications</a>
                <a href="#" class="list-group-item list-group-item-action bg-transparent text-danger fw-bold"><i
                        class="fas fa-power-off me-2"></i>Logout</a>
            </div>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
                <div class="d-flex align-items-center">
                    <i class="bi bi-x display-4 me-3" id="menu-toggle"></i>
                    <h2 class="fs-2 m-0">Dashboard</h2>
                </div>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle second-text fw-bold" href="#" id="navbarDropdown"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fas fa-user me-2"></i>John Doe
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Profile</a></li>
                                <li><a class="dropdown-item" href="#">Settings</a></li>
                                <li><a class="dropdown-item" href="#">Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>

            <div class="container-fluid px-4">
                <?=$this->renderSection('main')?>
            </div>
        </div>
    </div>
    <!-- /#page-content-wrapper -->
    </div>

  <script src="<?=base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')?>"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.js"></script>

    <script>
        var el = document.getElementById("wrapper");
        var toggleButton = document.getElementById("menu-toggle");

        toggleButton.onclick = function () {
            el.classList.toggle("toggled");
        };
    </script>



    <?php if (session()->getFlashdata('success')) : ?>
    <!-- Button to Open the Modal -->
      <!-- The Modal -->
        <div class="modal fade" id="myModal">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                <!-- Modal body -->
                <div class="modal-body py-5 text-center">
                    <h2 class="display-1 text-success"><i class="bi bi-check2-circle"></i></h2>
                    <h3 class="text-success"><?= session()->getFlashdata('success') ?></h3>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                </div>

                </div>
            </div>
        </div>
        <script>
            const myModal = new bootstrap.Modal(document.getElementById('myModal'));
            myModal.show();
        </script>

<?php endif; ?>

<?php if(session()->getFlashdata('error')) : ?>
    <!-- The Modal -->
    <div class="modal fade" id="error" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <!-- Modal body -->
                <div class="modal-body py-5 text-center">
                    <h2 class="display-1 text-danger"><i class="bi bi-exclamation-diamond"></i></h2>
                    <h3 class="text-danger">
                        <?= session()->getFlashdata('error') ?: "You've Got Some Error.<br> Fix them and proceed"; ?>
                    </h3>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Your custom script to show the modal -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var errorModal = new bootstrap.Modal(document.getElementById('error'));
            errorModal.show();
        });
    </script>
<?php endif; ?>



<script>
    $(document).ready(function() {
      $('#dTable').DataTable();
      $('.dataTables_filter').addClass('mb-3');
    });

    

  </script>

<script>
    var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
    var popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
        return new bootstrap.Popover(popoverTriggerEl)
    })
</script>

</body>

</html>