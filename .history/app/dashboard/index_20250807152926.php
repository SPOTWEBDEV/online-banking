<?php

    include('../../server/connection.php');
    include('../../server/authorization/user/index.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type; encoding" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>Dashboard - <?php echo  $sitename ?> </title>
    <link rel="icon" type="image/x-icon" href="../source/assets/img/favicon.ico" />
    <link href="../source/assets/css/loader.css" rel="stylesheet" type="text/css" />
    <script src="../source/assets/js/loader.js"></script>
    <!--     BEGIN GLOBAL MANDATORY STYLES-->
    <link href="https://fonts.googleapis.com/css?family=Quicksand:400,500,600,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway|Rock+Salt|Source+Code+Pro:300,400,600" rel="stylesheet">
    <link href="../source/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="../source/assets/css/plugins.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="../source/assets/css/forms/custom-clipboard.css">
    <!--     END GLOBAL MANDATORY STYLES-->

    <link rel="stylesheet" href="../source/plugins/font-icons/fontawesome/css/regular.css">
    <link rel="stylesheet" href="../source/plugins/font-icons/fontawesome/css/fontawesome.css">

    <!--     BEGIN PAGE LEVEL PLUGINS/CUSTOM STYLES-->
    <link href="../source/plugins/apex/apexcharts.css" rel="stylesheet" type="text/css">
    <link href="../source/assets/css/dashboard/dash_1.css" rel="stylesheet" type="text/css" />
    <link href="../source/assets/css/components/cards/card.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="../source/plugins/bootstrap-select/bootstrap-select.min.css">
    <!--    profile css-->
    <link rel="stylesheet" type="text/css" href="../source/plugins/dropify/dropify.min.css">
    <link href="../source/assets/css/users/account-setting.css" rel="stylesheet" type="text/css" />
    <link href="../source/assets/css/components/custom-modal.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="../source/assets/css/card/card.css">
    <link rel="stylesheet" href="../source/assets/css/card/displayCard.css">
    <!--    <link href="../source/assets/css/users/user-profile.css" rel="stylesheet" type="text/css" />-->

    <!--    end of table css-->


    <!-- toaster -->
    <link rel="stylesheet" type="text/css" href="../source/assets/css/elements/alert.css">
    <link href="../source/plugins/notification/snackbar/snackbar.min.css" rel="stylesheet" type="text/css" />
    <link href="../source/plugins/file-upload/file-upload-with-preview.min.css" rel="stylesheet" type="text/css" />
    <link href="../source/plugins/sweetalerts/sweetalert2.min.css" rel="stylesheet" type="text/css" />
    <link href="../source/plugins/sweetalerts/sweetalert.css" rel="stylesheet" type="text/css" />
    <link href="../source/assets/css/components/custom-sweetalert.css" rel="stylesheet" type="text/css" />
    <script src="../source/plugins/sweetalerts/promise-polyfill.js"></script>
    <script src="../source/assets/js/libs/jquery-3.1.1.min.js"></script>




    <!-- END PAGE LEVEL PLUGINS/CUSTOM STYLES -->

    <style>
        @media screen and (max-width: 600px) {
            .layout-visible {
                visibility: hidden;
                clear: both;
                float: left;
                margin: 10px auto 5px 20px;
                width: 28%;
                display: none;
            }
        }
    </style>





</head>

<body class="sidebar-noneoverflow">
    <!-- BEGIN LOADER -->
    <div id="load_screen">
        <div class="loader">
            <div class="loader-content">
                <div class="spinner-grow align-self-center"></div>
            </div>
        </div>
    </div>
    <!--  END LOADER -->

    <!--  BEGIN NAVBAR  -->
        <?php  include('../includes/nav.php')  ?>
    <!--  END NAVBAR  -->

    <!--  BEGIN MAIN CONTAINER  -->
    <div class="main-container" id="container">

        <div class="overlay"></div>
        <div class="search-overlay"></div>

        <!--  BEGIN SIDEBAR  -->

        <?php  include('../includes/sidebar.php')  ?>

        <!--  END SIDEBAR  -->




        <!--  BEGIN CONTENT AREA  -->
        <div id="content" class="main-content">
            <div class="layout-px-spacing">

                <div class="row layout-top-spacing">

                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-4 layout-spacing layout-visible">
                        <div class="widget widget-three">
                            <div class="widget-heading">
                                <h5 class="">Summary</h5>


                                <div class="task-action">
                                    <div class="dropdown">
                                        <a class="dropdown-toggle" href="index.html#" role="button" id="pendingTask"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-more-horizontal">
                                                <circle cx="12" cy="12" r="1"></circle>
                                                <circle cx="19" cy="12" r="1"></circle>
                                                <circle cx="5" cy="12" r="1"></circle>
                                            </svg>
                                        </a>

                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="pendingTask"
                                            style="will-change: transform;">
                                            <a class="dropdown-item" href="javascript:void(0);">View Report</a>
                                            <a class="dropdown-item" href="javascript:void(0);">Edit Report</a>
                                            <a class="dropdown-item" href="javascript:void(0);">Mark as Done</a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="widget-content">

                                <div class="order-summary">

                                    <div class="summary-list">
                                        <div class="w-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-shopping-bag">
                                                <path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path>
                                                <line x1="3" y1="6" x2="21" y2="6"></line>
                                                <path d="M16 10a4 4 0 0 1-8 0"></path>
                                            </svg>
                                        </div>
                                        <div class="w-summary-details">

                                            <div class="w-summary-info">
                                                <h6>Limit</h6>
                                                <p class="summary-count"><?php echo   $currency_type.$account_limit  ?></p>
                                            </div>

                                            

                                            <div class="w-summary-stats">
                                                <div class="progress">
                                                    <div class="progress-bar bg-gradient-secondary" role="progressbar"
                                                        style="width: 100%" aria-valuenow="90" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </div>

                                        </div>

                                    </div>

                                    <div class="summary-list">
                                        <div class="w-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-tag">
                                                <path
                                                    d="M20.59 13.41l-7.17 7.17a2 2 0 0 1-2.83 0L2 12V2h10l8.59 8.59a2 2 0 0 1 0 2.82z">
                                                </path>
                                                <line x1="7" y1="7" x2="7" y2="7"></line>
                                            </svg>
                                        </div>
                                        <div class="w-summary-details">

                                            <div class="w-summary-info">
                                                <h6>Loan Balance</h6>
                                                <p class="summary-count"><?php echo   $currency_type  . $loan_balance  ?></p>
                                            </div>

                                            <div class="w-summary-stats">
                                                <div class="progress">
                                                    <div class="progress-bar bg-gradient-success" role="progressbar"
                                                        style="width: 100%" aria-valuenow="65" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </div>

                                        </div>

                                    </div>

                                    <div class="summary-list">
                                        <div class="w-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-credit-card">
                                                <rect x="1" y="4" width="22" height="16" rx="2" ry="2"></rect>
                                                <line x1="1" y1="10" x2="23" y2="10"></line>
                                            </svg>
                                        </div>
                                        <div class="w-summary-details">

                                            <div class="w-summary-info">
                                                <h6>Stage</h6>
                                                <p class="summary-count">Trial 1</p>
                                            </div>

                                            <div class="w-summary-stats">
                                                <div class="progress">
                                                    <div class="progress-bar bg-gradient-warning" role="progressbar"
                                                        style="width: 100%" aria-valuenow="100" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-4 layout-spacing layout-visible">
                        <div class="widget-two">
                            <div class="widget-content">
                                <div class="w-numeric-value">
                                    <div class="w-content">
                                        <span class="w-value">Daily Stats</span>
                                        <span class="w-numeric-title"><a class="text-primary"
                                                href="">Go to Transaction for
                                                details.</a></span>
                                    </div>
                                    <div class="w-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-dollar-sign">
                                            <line x1="12" y1="1" x2="12" y2="23"></line>
                                            <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path>
                                        </svg>
                                    </div>
                                </div>
                                <div class="w-chart">
                                    <div id="daily-sales"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12 col-12 layout-spacing">

                        <div class="widget widget-account-invoice-three">

                            <div class="widget-heading">
                                <div class="wallet-usr-info">
                                    <div class="usr-name">
                                        <span><img src="<?php   echo $profile_pic ?>" alt="admin-profile"
                                                class="img-fluid">
                                            <?php   echo $fullname ?>
                                        </span>
                                    </div>
                                    <div class="add">
                                        <span><a data-toggle="modal" data-target="#exampleModal"><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-plus text-white">
                                                    <line x1="12" y1="5" x2="12" y2="19"></line>
                                                    <line x1="5" y1="12" x2="19" y2="12"></line>
                                                </svg></a></span>
                                    </div>
                                </div>
                                <div class="wallet-balance">
                                    <p>Balance</p>
                                    <h5 class=""><span class="w-currency">
                                            <?php   echo $currency_type ?>
                                        </span>
                                        <?php   echo formatNumber($balance) ?>
                                    </h5>
                                </div>
                            </div>

                            <div class="widget-amount">

                                <div class="w-a-info funds-received">
                                    <span>Deposit <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-chevron-down">
                                            <polyline points="6 9 12 15 18 9"></polyline>
                                        </svg></span>


                                    <p>
                                        <a class="btn btn-success btn-sm col-12" data-toggle="modal"
                                            data-target="#exampleModal" >Deposit</a>
                                    </p>
                                </div>

                                <div class="w-a-info funds-spent">
                                    <span>Transfer <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-chevron-up">
                                            <polyline points="18 15 12 9 6 15"></polyline>
                                        </svg></span>
                                    <p>
                                        <a href="../int_transfer/" class="btn btn-primary btn-sm col-12">Transfer
                                        </a>

                                    </p>
                                </div>
                            </div>

                            <div class="widget-content">


                                <div class="invoice-list">

                                    <div class="inv-detail">
                                        <div class="info-detail-1">
                                            <p>Account Status:</p>
                                            <p><span class="w-currency">
                                                </span> <span class="bill-amount">
                                                    
                                                    <?php

                                                            if ($account_status == 'active') {
                                                                echo '<span class="badge outline-badge-success shadow-none col-md-12">Active</span>';
                                                            } else {
                                                                echo '<span class="badge outline-badge-danger shadow-none col-md-12">suspended</span>';
                                                            }

                                                    ?>

                                                </span>
                                            </p>
                                        </div>
                                        <div class="info-detail-1">
                                            <p>Limit:</p>
                                            <p><span class="w-currency">
                                                    <?php  echo $currency_type ?>
                                                </span> <span class="bill-amount">
                                                    <?php  echo $account_limit ?>
                                                </span>
                                            </p>
                                        </div>





                                        <div class="info-detail-3">
                                            <p>Last Transaction:</p>
                                            <!--<p><span class="w-currency text-danger"></span> <span class="bill-amount text-danger"> $600</span></p>-->

                                            <p>
                                                <?php
                                                    $sql = "
                                                    (
                                                        SELECT id, amount, date, time, description, status, 'transfer' AS source FROM transfer WHERE user = '$id'
                                                    )
                                                    UNION ALL
                                                    (
                                                        SELECT id, amount, date, time, description, status, 'loan' AS source FROM loan WHERE user = '$id'
                                                    )
                                                    UNION ALL
                                                    (
                                                        SELECT id, amount, date, time, description, status, 'withdraw' AS source FROM withdraw WHERE user = '$id'
                                                    )
                                                    ORDER BY date DESC, time DESC
                                                    ";



                                                        $result = mysqli_query($connection, $sql);

                                                        if ($result && mysqli_num_rows($result) > 0) {
                                                            $row = mysqli_fetch_assoc($result);
                                                            echo " $currency_type " . htmlspecialchars($row['amount']);
                                                        } else {
                                                            echo "0.00";
                                                        }
                                                ?>


                                            </p>
                                        </div>



                                        <div class="info-detail-2">
                                            <p>Account Number:</p>
                                            <p class=""><span class="bill-amount text-primary">
                                                    <?php  echo $account_number ?>
                                                </span></p>
                                        </div>

                                        <div class="info-detail-1">
                                            <p>Kyc:</p>
                                            <p><span class="w-currency">
                                                </span> <span class="bill-amount">
                                                    
                                                    <?php

                                                            if ($kyc == 'verified') {
                                                                echo '<span class="badge outline-badge-success shadow-none col-md-12">verified</span>';
                                                            } else {
                                                                echo '<span class="badge outline-badge-danger shadow-none col-md-12">unverified</span>';
                                                            }

                                                    ?>

                                                </span>
                                            </p>
                                        </div>


                                        <div class="info-detail-2">
                                            <p></p>
                                            <p class=""><span class="bill-amount text-danger"> </span></p>
                                        </div>


                                    </div>

                                    <div class="inv-action">
                                        <a href="<?php echo $domain . 'app/transaction/'; ?>"
                                            class="btn btn-outline-primary view-details">View Transactions</a>
                                        <a href="../int_transfer/" class="btn btn-outline-primary pay-now">Wire
                                            Transfer</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing ">
                        <div class="widget widget-table-two">

                            <div class="widget-heading">
                                <h5 class="">Recent Transactions</h5>
                            </div>

                            <div class="widget-content">

                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>
                                                    <div class="th-content">S/N</div>
                                                </th>
                                                <!--                                    <th><div class="th-content">NAME</div></th>-->
                                                <th>
                                                    <div class="th-content">TYPE</div>
                                                </th>
                                                <th>
                                                    <div class="th-content th-heading">AMOUNT</div>
                                                </th>

                                                <th>
                                                    <div class="th-content th-heading">SENDER/RECEIVER</div>
                                                </th>

                                                <th>
                                                    <div class="th-content">DESCRIPTION</div>
                                                </th>
                                                <th>
                                                    <div class="th-content th-heading">CREATED_AT</div>
                                                </th>
                                                <th>
                                                    <div class="th-content th-heading">TIME_CREATED</div>
                                                </th>
                                                <th>
                                                    <div class="th-content">Status</div>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <?php
                                                            $sql = "
                                                            (
                                                                SELECT amount, time, date, status, description, type, receiver_name FROM transfer WHERE user = '$id'
                                                            )
                                                            UNION ALL
                                                            (
                                                                SELECT amount, time, date, status, description, type, NULL as receiver_name FROM loan WHERE user = '$id'
                                                            )
                                                            UNION ALL
                                                            (
                                                                SELECT amount, time, date, status, description, type, NULL as receiver_name FROM withdraw WHERE user = '$id'
                                                            )
                                                            ORDER BY date DESC, time DESC
                                                            LIMIT 5
                                                            ";

                                                            $statment = mysqli_query($connection, $sql);

                                                            if ($statment && mysqli_num_rows($statment) > 0) {
                                                                $count = 1;
                                                                while ($row = mysqli_fetch_assoc($statment)) {
                                                                    echo "<tr>";
                                                                    echo "<td>" . $count++ . "</td>";

                                                                    // Type with color class
                                                                    $type = ucfirst(strtolower($row['type']));
                                                                    $typeClass = ($type === 'Credit') ? 'text-success' : 'text-danger';
                                                                    echo "<td><div class='td-content product-invoice $typeClass'>" . htmlspecialchars($type) . "</div></td>";

                                                                    // Amount
                                                                    echo "<td><div class='td-content product-invoice'>" . $currency_type . ' ' . htmlspecialchars($row['amount']) . "</div></td>";


                                                                    // Receiver name or username fallback
                                                                    $receiver = (!empty($row['receiver_name'])) ? htmlspecialchars($row['receiver_name']) : htmlspecialchars($username);
                                                                    echo "<td><div class='td-content product-invoice'>$receiver</div></td>";

                                                                    // Description
                                                                    echo "<td><div class='td-content product-brand'>" . htmlspecialchars($row['description']) . "</div></td>";

                                                                    // Date
                                                                    echo "<td><div class='td-content product-invoice'>" . htmlspecialchars($row['date']) . "</div></td>";

                                                                    // Time
                                                                    echo "<td><div class='td-content pricing'><span>" . htmlspecialchars($row['time']) . "</span></div></td>";

                                                                    // Status badge
                                                                    $status = strtolower(trim($row['status']));
                                                                    switch ($status) {
                                                                        case 'pending':
                                                                            $badge = '<span class="badge outline-badge-secondary shadow-none col-md-12">Pending</span>';
                                                                            break;
                                                                        case 'approved':
                                                                            $badge = '<span class="badge outline-badge-primary shadow-none col-md-12">Confirmed</span>';
                                                                            break;
                                                                        case 'declined':
                                                                            $badge = '<span class="badge outline-badge-danger shadow-none col-md-12">Declined</span>';
                                                                            break;
                                                                        default:
                                                                            $badge = '<span class="badge outline-badge-dark shadow-none col-md-12">' . htmlspecialchars($row['status']) . '</span>';
                                                                            break;
                                                                    }
                                                                    echo "<td><div class='td-content'><span>$badge</span></div></td>";

                                                                    echo "</tr>";
                                                                }

                                                            } else {
                                                                echo "<tr><td colspan='8' class='dataTables_empty'>No transactions found for this user.</td></tr>";
                                                            }

                                            ?>





                                        </tbody>
                                    </table>
                                </div>
                                
                            </div>




                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Banking Details</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                                                    height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-x">
                                                    <line x1="18" y1="6" x2="6" y2="18"></line>
                                                    <line x1="6" y1="6" x2="18" y2="18"></line>
                                                </svg>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group mb-4 mt-4">
                                                        <label for="">Bank Name</label>
                                                        <div class="input-group ">
                                                            <input type="text" class="form-control" name="bank_name"
                                                                id="bank_name" placeholder="Usa Bank" value="Usa Bank"
                                                                aria-label="notification"
                                                                aria-describedby="basic-addon1" readonly>
                                                            <a class="btn btn-primary sm-2" href="javascript:;"
                                                                data-clipboard-action="copy"
                                                                data-clipboard-target="#bank_name"><svg
                                                                    xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24" fill="none"
                                                                    stroke="currentColor" stroke-width="2"
                                                                    stroke-linecap="round" stroke-linejoin="round"
                                                                    class="feather feather-copy">
                                                                    <rect x="9" y="9" width="13" height="13" rx="2"
                                                                        ry="2"></rect>
                                                                    <path
                                                                        d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1">
                                                                    </path>
                                                                </svg> Copy</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group mb-4 mt-4">
                                                        <label for="">Account Number</label>
                                                        <div class="input-group ">
                                                            <input type="text" class="form-control" name="acct_no"
                                                                id="acct_no" placeholder="764229211" value="764229211"
                                                                aria-label="notification"
                                                                aria-describedby="basic-addon1" readonly>
                                                            <a class="btn btn-primary sm-2" href="javascript:;"
                                                                data-clipboard-action="copy"
                                                                data-clipboard-target="#acct_no"><svg
                                                                    xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24" fill="none"
                                                                    stroke="currentColor" stroke-width="2"
                                                                    stroke-linecap="round" stroke-linejoin="round"
                                                                    class="feather feather-copy">
                                                                    <rect x="9" y="9" width="13" height="13" rx="2"
                                                                        ry="2"></rect>
                                                                    <path
                                                                        d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1">
                                                                    </path>
                                                                </svg> Copy</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group mb-4 mt-4">
                                                        <label for="">Routine Number</label>
                                                        <div class="input-group ">
                                                            <input type="text" class="form-control" name="routine_no"
                                                                id="routine_no" placeholder="637363636"
                                                                value="637363636" aria-label="notification"
                                                                aria-describedby="basic-addon1" readonly>
                                                            <a class="btn btn-primary sm-2" href="javascript:;"
                                                                data-clipboard-action="copy"
                                                                data-clipboard-target="#routine_no"><svg
                                                                    xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24" fill="none"
                                                                    stroke="currentColor" stroke-width="2"
                                                                    stroke-linecap="round" stroke-linejoin="round"
                                                                    class="feather feather-copy">
                                                                    <rect x="9" y="9" width="13" height="13" rx="2"
                                                                        ry="2"></rect>
                                                                    <path
                                                                        d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1">
                                                                    </path>
                                                                </svg> Copy</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group mb-4 mt-4">
                                                        <label for="">Swift Code</label>
                                                        <div class="input-group ">
                                                            <input type="text" class="form-control" name="swift_code"
                                                                id="swift_code" placeholder="SFDHHS86X"
                                                                value="SFDHHS86X" aria-label="notification"
                                                                aria-describedby="basic-addon1" readonly>
                                                            <a class="btn btn-primary sm-2" href="javascript:;"
                                                                data-clipboard-action="copy"
                                                                data-clipboard-target="#swift_code"><svg
                                                                    xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24" fill="none"
                                                                    stroke="currentColor" stroke-width="2"
                                                                    stroke-linecap="round" stroke-linejoin="round"
                                                                    class="feather feather-copy">
                                                                    <rect x="9" y="9" width="13" height="13" rx="2"
                                                                        ry="2"></rect>
                                                                    <path
                                                                        d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1">
                                                                    </path>
                                                                </svg> Copy</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>



                                        </div>
                                        <div class="modal-footer">
                                            <button class="btn" data-dismiss="modal"><i class="flaticon-cancel-12"></i>
                                                Discard</button>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>

                    </div>
                    <div class="footer-wrapper">
                        <div class="footer-section f-section-1">
                            <p class="">Copyright © <script>document.write(new Date().get)</script> <?php echo  $sitename ?>, All rights reserved.</p>
                        </div>
                        <div class="footer-section f-section-2">
                            <p class=""><?php echo  $sitename ?> </p>
                        </div>
                    </div>
                </div>
                <!--  END CONTENT AREA  -->


            </div>
        </div>
        <!-- END MAIN CONTAINER -->

        <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
        <!--<script src="../source/assets/js/libs/jquery-3.1.1.min.js"></script>-->
        <script src="../source/bootstrap/js/popper.min.js"></script>
        <script src="../source/bootstrap/js/bootstrap.min.js"></script>
        <script src="../source/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
        <script src="../source/plugins/bootstrap-select/bootstrap-select.min.js"></script>
        <script src="../source/plugins/file-upload/file-upload-with-preview.min.js"></script>
        <script src="../source/assets/js/app.js"></script>
        <script src="../source/assets/js/users/account-settings.js"></script>
        <script src="../source/plugins/dropify/dropify.min.js"></script>
        <script src="../source/plugins/blockui/jquery.blockUI.min.js"></script>

        <script>
            $(document).ready(function () {
                App.init();
            });
        </script>
        <script src="../source/assets/js/custom.js"></script>
        <script>
            var data = null;
            console.log(data);
            function crypto_type(id) {
                for (var i = 0; i < data.length; i++) {
                    if (id == data[i].id) {
                        $("#wallet_address").val(data[i].wallet_address);
                    }
                }
            }
            var firstUpload = new FileUploadWithPreview('myFirstImage')
        </script>
        <!-- END GLOBAL MANDATORY SCRIPTS -->


        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src="../source/plugins/table/datatable/datatables.js"></script>







        <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->

        <script src="../source/plugins/apex/apexcharts.min.js"></script>
        <script src="../source/assets/js/custom.js"></script>
        <script src="../source/assets/js/dashboard/dash_1.js"></script>
        <script src="../source/plugins/sweetalerts/sweetalert2.min.js"></script>
        <script src="../source/plugins/sweetalerts/custom-sweetalert.js"></script>
        <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->

        <script src="../source/plugins/notification/snackbar/snackbar.min.js"></script>
        <script src="../source/assets/js/clipboard/clipboard.min.js"></script>
        <script src="../source/assets/js/forms/custom-clipboard.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/imask/3.4.0/imask.min.js"></script>
        <script src="../source/assets/js/card/card.js"></script>
        <!-- END PAGE LEVEL PLUGINS -->

        <!--  BEGIN CUSTOM SCRIPTS FILE  -->
        <script src="../source/assets/js/components/notification/custom-snackbar.js"></script>



</body>

</html>