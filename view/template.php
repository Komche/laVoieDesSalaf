<html lang="fr" class=" js flexbox flexboxlegacy canvas canvastext webgl no-touch geolocation postmessage websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers applicationcache svg inlinesvg smil svgclippaths">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Orbiter is a bootstrap minimal &amp; clean admin template">
    <meta name="keywords" content="admin, admin panel, admin template, admin dashboard, responsive, bootstrap 4, ui kits, ecommerce, web app, crm, cms, html, sass support, scss">
    <meta name="author" content="Themesbox">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title><?= $title ?></title>
    <!-- Fevicon -->
    <link rel="shortcut icon" href="public/img/favicon.ico">
    <!-- Start css -->
    <!-- Switchery css -->
    <link href="public/vendor/plugins/switchery/switchery.min.css" rel="stylesheet">
    <link href="public/vendor/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="public/vendor/css/icons.css" rel="stylesheet" type="text/css">
    <link href="public/vendor/css/flag-icon.min.css" rel="stylesheet" type="text/css">
    <link href="public/vendor/css/style.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="public/css/style.css">
    <!-- End css -->
</head>

<body class="vertical-layout">
    <!-- Start Infobar Setting Sidebar -->
    <div id="infobar-settings-sidebar" class="infobar-settings-sidebar">
        <div class="infobar-settings-sidebar-head d-flex w-100 justify-content-between">
            <h4>Settings</h4><a href="javascript:void(0)" id="infobar-settings-close" class="infobar-settings-close"><img src="public/vendor/images/svg-icon/close.svg" class="img-fluid menu-hamburger-close" alt="close"></a>
        </div>
        <div class="infobar-settings-sidebar-body">
            <div class="custom-mode-setting">
                <div class="row align-items-center pb-3">
                    <div class="col-8">
                        <h6 class="mb-0">Payment Reminders</h6>
                    </div>
                    <div class="col-4 text-right"><input type="checkbox" class="js-switch-setting-first" checked="" data-switchery="true" style="display: none;"><span class="switchery switchery-small" style="background-color: rgb(0, 128, 255); border-color: rgb(0, 128, 255); box-shadow: rgb(0, 128, 255) 0px 0px 0px 11px inset; transition: border 0.4s ease 0s, box-shadow 0.4s ease 0s, background-color 1.2s ease 0s;"><small style="left: 13px; background-color: rgb(255, 255, 255); transition: background-color 0.4s ease 0s, left 0.2s ease 0s;"></small></span></div>
                </div>
                <div class="row align-items-center pb-3">
                    <div class="col-8">
                        <h6 class="mb-0">Stock Updates</h6>
                    </div>
                    <div class="col-4 text-right"><input type="checkbox" class="js-switch-setting-second" checked="" data-switchery="true" style="display: none;"><span class="switchery switchery-small" style="background-color: rgb(0, 128, 255); border-color: rgb(0, 128, 255); box-shadow: rgb(0, 128, 255) 0px 0px 0px 11px inset; transition: border 0.4s ease 0s, box-shadow 0.4s ease 0s, background-color 1.2s ease 0s;"><small style="left: 13px; background-color: rgb(255, 255, 255); transition: background-color 0.4s ease 0s, left 0.2s ease 0s;"></small></span></div>
                </div>
                <div class="row align-items-center pb-3">
                    <div class="col-8">
                        <h6 class="mb-0">Open for New Products</h6>
                    </div>
                    <div class="col-4 text-right"><input type="checkbox" class="js-switch-setting-third" data-switchery="true" style="display: none;"><span class="switchery switchery-small" style="box-shadow: rgb(223, 223, 223) 0px 0px 0px 0px inset; border-color: rgb(223, 223, 223); background-color: rgb(255, 255, 255); transition: border 0.4s ease 0s, box-shadow 0.4s ease 0s;"><small style="left: 0px; transition: background-color 0.4s ease 0s, left 0.2s ease 0s;"></small></span></div>
                </div>
                <div class="row align-items-center pb-3">
                    <div class="col-8">
                        <h6 class="mb-0">Enable SMS</h6>
                    </div>
                    <div class="col-4 text-right"><input type="checkbox" class="js-switch-setting-fourth" checked="" data-switchery="true" style="display: none;"><span class="switchery switchery-small" style="background-color: rgb(0, 128, 255); border-color: rgb(0, 128, 255); box-shadow: rgb(0, 128, 255) 0px 0px 0px 11px inset; transition: border 0.4s ease 0s, box-shadow 0.4s ease 0s, background-color 1.2s ease 0s;"><small style="left: 13px; background-color: rgb(255, 255, 255); transition: background-color 0.4s ease 0s, left 0.2s ease 0s;"></small></span></div>
                </div>
                <div class="row align-items-center pb-3">
                    <div class="col-8">
                        <h6 class="mb-0">Newsletter Subscription</h6>
                    </div>
                    <div class="col-4 text-right"><input type="checkbox" class="js-switch-setting-fifth" checked="" data-switchery="true" style="display: none;"><span class="switchery switchery-small" style="background-color: rgb(0, 128, 255); border-color: rgb(0, 128, 255); box-shadow: rgb(0, 128, 255) 0px 0px 0px 11px inset; transition: border 0.4s ease 0s, box-shadow 0.4s ease 0s, background-color 1.2s ease 0s;"><small style="left: 13px; background-color: rgb(255, 255, 255); transition: background-color 0.4s ease 0s, left 0.2s ease 0s;"></small></span></div>
                </div>
                <div class="row align-items-center pb-3">
                    <div class="col-8">
                        <h6 class="mb-0">Show Map</h6>
                    </div>
                    <div class="col-4 text-right"><input type="checkbox" class="js-switch-setting-sixth" data-switchery="true" style="display: none;"><span class="switchery switchery-small" style="box-shadow: rgb(223, 223, 223) 0px 0px 0px 0px inset; border-color: rgb(223, 223, 223); background-color: rgb(255, 255, 255); transition: border 0.4s ease 0s, box-shadow 0.4s ease 0s;"><small style="left: 0px; transition: background-color 0.4s ease 0s, left 0.2s ease 0s;"></small></span></div>
                </div>
                <div class="row align-items-center pb-3">
                    <div class="col-8">
                        <h6 class="mb-0">e-Statement</h6>
                    </div>
                    <div class="col-4 text-right"><input type="checkbox" class="js-switch-setting-seventh" checked="" data-switchery="true" style="display: none;"><span class="switchery switchery-small" style="background-color: rgb(0, 128, 255); border-color: rgb(0, 128, 255); box-shadow: rgb(0, 128, 255) 0px 0px 0px 11px inset; transition: border 0.4s ease 0s, box-shadow 0.4s ease 0s, background-color 1.2s ease 0s;"><small style="left: 13px; background-color: rgb(255, 255, 255); transition: background-color 0.4s ease 0s, left 0.2s ease 0s;"></small></span></div>
                </div>
                <div class="row align-items-center">
                    <div class="col-8">
                        <h6 class="mb-0">Monthly Report</h6>
                    </div>
                    <div class="col-4 text-right"><input type="checkbox" class="js-switch-setting-eightth" checked="" data-switchery="true" style="display: none;"><span class="switchery switchery-small" style="background-color: rgb(0, 128, 255); border-color: rgb(0, 128, 255); box-shadow: rgb(0, 128, 255) 0px 0px 0px 11px inset; transition: border 0.4s ease 0s, box-shadow 0.4s ease 0s, background-color 1.2s ease 0s;"><small style="left: 13px; background-color: rgb(255, 255, 255); transition: background-color 0.4s ease 0s, left 0.2s ease 0s;"></small></span></div>
                </div>
            </div>
        </div>
    </div>
    <div class="infobar-settings-sidebar-overlay"></div>
    <!-- End Infobar Setting Sidebar -->
    <!-- Start Containerbar -->
    <div id="containerbar">
        <!-- Start Leftbar -->
        <div class="leftbar">
            <!-- Start Sidebar -->
            <div class="sidebar">
                <!-- Start Logobar -->
                <div class="logobar">
                    <a href="index.html" class="logo logo-large"><img src="public/img/Logo2.png" class="img-fluid" alt="logo"></a>
                    <a href="index.html" class="logo logo-small"><img src="public/img/Logo.png" class="img-fluid" alt="logo"></a>
                </div>
                <!-- End Logobar -->
                <!-- Start Navigationbar -->
                <div class="navigationbar active">
                    <ul class="vertical-menu in">

                        <?php
                        $sql = "SELECT * FROM module_role mr, module m WHERE mr.module = m.id AND m.is_menu=1 AND mr.role_id = ? ";
                        $res = Manager::getMultiplesRecords($sql, [$_SESSION['user']['roleId']]);
                        // $res = $res['data'];
                        $thisSMenu = array();
                        foreach ($res as $key => $value) {
                            $sql = "SELECT * FROM module WHERE is_menu=1 AND id = ?";
                            $name = Manager::getSingleRecords($sql, [$value['module']]);
                            // print_r($name);
                            if (empty($name['sub_module'])) {
                                //echo ($value['module']);
                                // $name = $name['data'];
                                $menu = new MenuManager($name['name']);
                                $sMenu = getActions($name['id']);
                                //print_r($sMenu); die;
                                if (is_array($sMenu) || is_object($sMenu)) {
                                    foreach ($sMenu as $key => $smValue) {
                                        if (haveAction($_SESSION['user']['roleId'], $smValue['id'])) {
                                            $thisSMenu["index.php?action=" . $smValue['action_url']] = $smValue['name'];
                                        }
                                    }
                                }
                                $menu->setmSousMenu($thisSMenu);
                                echo $menu->getMenu($name['icon']);
                                $thisSMenu = (array) null;
                            }
                        }
                        // $menu->setmSousMenu(['index.php?action=module'=> 'Test', 'index.php?action=test'=>'test 1']);
                        // echo $menu->getMenu();
                        ?>

                    </ul>
                </div>
                <!-- End Navigationbar -->
            </div>
            <!-- End Sidebar -->
        </div>
        <!-- End Leftbar -->
        <!-- Start Rightbar -->
        <div class="rightbar">
            <!-- Start Topbar Mobile -->
            <div class="topbar-mobile">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="mobile-logobar">
                            <a href="index.html" class="mobile-logo"><img src="public/vendor/images/logo.svg" class="img-fluid" alt="logo"></a>
                        </div>
                        <div class="mobile-togglebar">
                            <ul class="list-inline mb-0">
                                <li class="list-inline-item">
                                    <div class="topbar-toggle-icon">
                                        <a class="topbar-toggle-hamburger" href="javascript:void();">
                                            <img src="public/vendor/images/svg-icon/horizontal.svg" class="img-fluid menu-hamburger-horizontal" alt="horizontal">
                                            <img src="public/vendor/images/svg-icon/verticle.svg" class="img-fluid menu-hamburger-vertical" alt="verticle">
                                        </a>
                                    </div>
                                </li>
                                <li class="list-inline-item">
                                    <div class="menubar">
                                        <a class="menu-hamburger" href="javascript:void();">
                                            <img src="public/vendor/images/svg-icon/collapse.svg" class="img-fluid menu-hamburger-collapse" alt="collapse">
                                            <img src="public/vendor/images/svg-icon/close.svg" class="img-fluid menu-hamburger-close" alt="close">
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Start Topbar -->
            <div class="topbar">
                <!-- Start row -->
                <div class="row align-items-center">
                    <!-- Start col -->
                    <div class="col-md-12 align-self-center">
                        <div class="togglebar">
                            <ul class="list-inline mb-0">
                                <li class="list-inline-item">
                                    <div class="menubar">
                                        <a class="menu-hamburger" href="javascript:void();">
                                            <img src="public/vendor/images/svg-icon/collapse.svg" class="img-fluid menu-hamburger-collapse" alt="collapse">
                                            <img src="public/vendor/images/svg-icon/close.svg" class="img-fluid menu-hamburger-close" alt="close">
                                        </a>
                                    </div>
                                </li>
                                <li class="list-inline-item">
                                    <div class="searchbar">
                                        <form>
                                            <div class="input-group">
                                                <input id="inputSearch" type="search" class="form-control" placeholder="Recherche" aria-label="Search" aria-describedby="button-addon2">
                                                <div class="input-group-append">
                                                    <button class="btn" type="submit" id="button-addon2"><img src="public/vendor/images/svg-icon/search.svg" class="img-fluid" alt="search"></button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="infobar">
                            <ul class="list-inline mb-0">
                                <!-- <li class="list-inline-item">
                                    <div class="settingbar">
                                        <a href="javascript:void(0)" id="infobar-settings-open" class="infobar-icon">
                                            <img src="public/vendor/images/svg-icon/settings.svg" class="img-fluid" alt="settings">
                                        </a>
                                    </div>
                                </li> -->
                                <li class="list-inline-item">
                                    <div class="notifybar">
                                        <div class="dropdown">
                                            <a class="dropdown-toggle infobar-icon" href="#" role="button" id="notoficationlink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="public/vendor/images/svg-icon/notifications.svg" class="img-fluid" alt="notifications">
                                                <span class="live-icon"></span></a>
                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="notoficationlink">
                                                <div class="notification-dropdown-title">
                                                    <h4>Notifications</h4>
                                                </div>
                                                <ul class="list-unstyled">
                                                    <li class="media dropdown-item">
                                                        <span class="action-icon badge badge-primary-inverse"><i class="feather icon-dollar-sign"></i></span>
                                                        <div class="media-body">
                                                            <h5 class="action-title">$135 received</h5>
                                                            <p><span class="timing">Today, 10:45 AM</span></p>
                                                        </div>
                                                    </li>
                                                    <li class="media dropdown-item">
                                                        <span class="action-icon badge badge-success-inverse"><i class="feather icon-file"></i></span>
                                                        <div class="media-body">
                                                            <h5 class="action-title">Project X prototype approved</h5>
                                                            <p><span class="timing">Yesterday, 01:40 PM</span></p>
                                                        </div>
                                                    </li>
                                                    <li class="media dropdown-item">
                                                        <span class="action-icon badge badge-danger-inverse"><i class="feather icon-eye"></i></span>
                                                        <div class="media-body">
                                                            <h5 class="action-title">John requested to view wireframe</h5>
                                                            <p><span class="timing">3 Sep 2019, 05:22 PM</span></p>
                                                        </div>
                                                    </li>
                                                    <li class="media dropdown-item">
                                                        <span class="action-icon badge badge-warning-inverse"><i class="feather icon-package"></i></span>
                                                        <div class="media-body">
                                                            <h5 class="action-title">Sports shoes are out of stock</h5>
                                                            <p><span class="timing">15 Sep 2019, 02:55 PM</span></p>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <!-- <li class="list-inline-item">
                                    <div class="languagebar">
                                        <div class="dropdown">
                                            <a class="dropdown-toggle" href="#" role="button" id="languagelink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="flag flag-icon-us flag-icon-squared"></i></a>
                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="languagelink">
                                                <a class="dropdown-item" href="#"><i class="flag flag-icon-us flag-icon-squared"></i>English</a>
                                                <a class="dropdown-item" href="#"><i class="flag flag-icon-de flag-icon-squared"></i>German</a>
                                                <a class="dropdown-item" href="#"><i class="flag flag-icon-bl flag-icon-squared"></i>France</a>
                                                <a class="dropdown-item" href="#"><i class="flag flag-icon-ru flag-icon-squared"></i>Russian</a>
                                            </div>
                                        </div>
                                    </div>
                                </li> -->
                                <li class="list-inline-item">
                                    <div class="profilebar">
                                        <div class="dropdown">
                                            <a class="dropdown-toggle" href="#" role="button" id="profilelink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="<?= !empty($_SESSION['user']['photo']) ? $_SESSION['user']['photo'] : 'public/img/avatar.png' ?>" class="img-fluid" alt="profile"><span class="feather icon-chevron-down live-icon"></span></a>
                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="profilelink">
                                                <div class="dropdown-item">
                                                    <div class="profilename">
                                                        <h5><?= $_SESSION['user']['first_name'] . ' ' . $_SESSION['user']['last_name'] ?></h5>
                                                    </div>
                                                </div>
                                                <div class="userbox">
                                                    <ul class="list-unstyled mb-0">
                                                        <li class="media dropdown-item">
                                                            <a href="index.php?action=profile" class="profile-icon"><img src="public/vendor/images/svg-icon/user.svg" class="img-fluid" alt="user">Profile</a>
                                                        </li>
                                                        <!-- <li class="media dropdown-item">
                                                            <a href="#" class="profile-icon"><img src="public/vendor/images/svg-icon/email.svg" class="img-fluid" alt="email">Email</a>
                                                        </li> -->
                                                        <li class="media dropdown-item">
                                                            <a href="index.php?action=logout" class="profile-icon"><img src="public/vendor/images/svg-icon/logout.svg" class="img-fluid" alt="logout">Se deconnecter</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- End col -->
                </div>
                <!-- End row -->
            </div>
            <!-- End Topbar -->
            <!-- Start Breadcrumbbar -->

            <!-- End Breadcrumbbar -->
            <!-- Start Contentbar -->
            <?php
            echo $content;
            ?>
            <!-- End Contentbar -->
            <!-- Start Footerbar -->
            <div class="footerbar">
                <footer class="footer">
                    <p class="mb-0">© 2020 checker | 2iSoft - Tout droit reserver.</p>
                </footer>
            </div>
            <!-- End Footerbar -->
        </div>
        <!-- End Rightbar -->
    </div>
    <!-- End Containerbar -->
    <!-- Start js -->
    <script src="public/vendor/js/jquery.min.js"></script>
    <script src="public/vendor/js/popper.min.js"></script>
    <script src="public/vendor/js/bootstrap.min.js"></script>
    <script src="public/vendor/js/modernizr.min.js"></script>
    <script src="public/vendor/js/detect.js"></script>
    <script src="public/vendor/js/jquery.slimscroll.js"></script>
    <script src="public/vendor/js/vertical-menu.js"></script>
    <script src="public/vendor/js/display_profile_image.js"></script>
    <!-- Switchery js -->
    <script src="public/vendor/plugins/switchery/switchery.min.js"></script>
    <script src="public/vendor/plugins/select2/select2.min.js"></script>

    <!-- Datatable js -->
    <script src="public/vendor/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="public/vendor/plugins/datatables/dataTables.bootstrap4.min.js"></script>
    <script src="public/vendor/plugins/datatables/dataTables.buttons.min.js"></script>
    <script src="public/vendor/plugins/datatables/buttons.bootstrap4.min.js"></script>
    <script src="public/vendor/plugins/datatables/jszip.min.js"></script>
    <script src="public/vendor/plugins/datatables/pdfmake.min.js"></script>
    <script src="public/vendor/plugins/datatables/vfs_fonts.js"></script>
    <script src="public/vendor/plugins/datatables/buttons.html5.min.js"></script>
    <script src="public/vendor/plugins/datatables/buttons.print.min.js"></script>
    <script src="public/vendor/plugins/datatables/buttons.colVis.min.js"></script>
    <script src="public/vendor/plugins/datatables/dataTables.responsive.min.js"></script>
    <script src="public/vendor/plugins/datatables/responsive.bootstrap4.min.js"></script>
    <script src="public/vendor/js/custom/custom-table-datatable.js"></script>
    <script src="public/vendor/js/jquery.serializeObject.js"></script>
    <!-- Core js -->
    <!-- Core js -->
    <script src="public/vendor/js/core.js"></script>

    <!-- my js -->
    <script src="public/js/script.js"></script>
    <script src="public/js/data_handler.js"></script>
    <!-- End js -->
    <script>
        $(document).ready(function () { 
            $('.searchable').select2();
         })
        $(function() {
            $('#example1').DataTable()
            $('#example2').DataTable({
                'paging': true,
                'lengthChange': false,
                'searching': false,
                'ordering': true,
                'info': true,
                'autoWidth': false
            })
        })
    </script>
</body>

</html>