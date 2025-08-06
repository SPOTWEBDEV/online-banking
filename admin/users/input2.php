<?php

    include('../../server/connection.php');
    include('../../server/authorization/admin/index.php');

?>

<html lang="en" data-select2-id="308">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title><?php echo  $sitename ?>- Admin Dashboard</title>
    <link rel="icon" type="image/x-icon" href="../source/assets/img/favicon.ico">
    <link href="../source/assets/css/loader.css" rel="stylesheet" type="text/css">
    <script src="../source/assets/js/loader.js"></script>

    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Quicksand:400,500,600,700&amp;display=swap" rel="stylesheet">
    <link href="../source/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="../source/assets/css/plugins.css" rel="stylesheet" type="text/css">
    <link href="../source/assets/css/structure.css" rel="stylesheet" type="text/css" class="structure">
    <!-- END GLOBAL MANDATORY STYLES -->

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM STYLES -->
    <link href="../source/plugins/apex/apexcharts.css" rel="stylesheet" type="text/css">
    <link href="../source/assets/css/dashboard/dash_1.css" rel="stylesheet" type="text/css" class="dashboard-analytics">
    <link rel="stylesheet" type="text/css" href="../source/plugins/dropify/dropify.min.css">
    <link href="../source/assets/css/users/account-setting.css" rel="stylesheet" type="text/css">
    <link href="../source/assets/css/components/custom-modal.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="../source/plugins/select2/select2.min.css">
    <link rel="stylesheet" type="text/css" href="../source/plugins/table/datatable/datatables.css">
    <link rel="stylesheet" type="text/css" href="../source/assets/css/forms/switches.css">
    <link rel="stylesheet" type="text/css" href="../source/plugins/table/datatable/dt-global_style.css">
    <link rel="stylesheet" href="../assets/css/card/displayCard.css">
    <!-- END PAGE LEVEL PLUGINS/CUSTOM STYLES -->
    <link href="../source/plugins/sweetalerts/sweetalert2.min.css" rel="stylesheet" type="text/css">
    <link href="../source/plugins/sweetalerts/sweetalert.css" rel="stylesheet" type="text/css">
    <link href="../source/assets/css/components/custom-sweetalert.css" rel="stylesheet" type="text/css">
    <script src="../source/plugins/sweetalerts/promise-polyfill.js"></script>
    <script src="../source/assets/js/libs/jquery-3.1.1.min.js"></script>
          <!-- Toastr CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet" />

    <!-- jQuery (required by Toastr) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- Toastr JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script src="">
            toastr.options = {

            "closeButton": true,
            "progressBar": true,
            "positionClass": "toast-bottom-right", // other options: toast-bottom-left, toast-bottom-right, toast-top-left, toast-top-full-width, toast-bottom-full-width, toast-top-center, toast-bottom-center
            "timeOut": "2000" // milliseconds before toast disappears
        }
    </script>

    <style type="text/css" id="operaUserStyle"></style>
    <style type="text/css">
        .apexcharts-canvas {
            position: relative;
            user-select: none;
            /* cannot give overflow: hidden as it will crop tooltips which overflow outside chart area */
        }

        /* scrollbar is not visible by default for legend, hence forcing the visibility */
        .apexcharts-canvas ::-webkit-scrollbar {
            -webkit-appearance: none;
            width: 6px;
        }

        .apexcharts-canvas ::-webkit-scrollbar-thumb {
            border-radius: 4px;
            background-color: rgba(0, 0, 0, .5);
            box-shadow: 0 0 1px rgba(255, 255, 255, .5);
            -webkit-box-shadow: 0 0 1px rgba(255, 255, 255, .5);
        }

        .apexcharts-canvas.dark {
            background: #343F57;
        }

        .apexcharts-inner {
            position: relative;
        }

        .legend-mouseover-inactive {
            transition: 0.15s ease all;
            opacity: 0.20;
        }

        .apexcharts-series-collapsed {
            opacity: 0;
        }

        .apexcharts-gridline,
        .apexcharts-text {
            pointer-events: none;
        }

        .apexcharts-tooltip {
            border-radius: 5px;
            box-shadow: 2px 2px 6px -4px #999;
            cursor: default;
            font-size: 14px;
            left: 62px;
            opacity: 0;
            pointer-events: none;
            position: absolute;
            top: 20px;
            overflow: hidden;
            white-space: nowrap;
            z-index: 12;
            transition: 0.15s ease all;
        }

        .apexcharts-tooltip.light {
            border: 1px solid #e3e3e3;
            background: rgba(255, 255, 255, 0.96);
        }

        .apexcharts-tooltip.dark {
            color: #fff;
            background: rgba(30, 30, 30, 0.8);
        }

        .apexcharts-tooltip * {
            font-family: inherit;
        }

        .apexcharts-tooltip .apexcharts-marker,
        .apexcharts-area-series .apexcharts-area,
        .apexcharts-line {
            pointer-events: none;
        }

        .apexcharts-tooltip.active {
            opacity: 1;
            transition: 0.15s ease all;
        }

        .apexcharts-tooltip-title {
            padding: 6px;
            font-size: 15px;
            margin-bottom: 4px;
        }

        .apexcharts-tooltip.light .apexcharts-tooltip-title {
            background: #ECEFF1;
            border-bottom: 1px solid #ddd;
        }

        .apexcharts-tooltip.dark .apexcharts-tooltip-title {
            background: rgba(0, 0, 0, 0.7);
            border-bottom: 1px solid #0e1726;
        }

        .apexcharts-tooltip-text-value,
        .apexcharts-tooltip-text-z-value {
            display: inline-block;
            font-weight: 600;
            margin-left: 5px;
        }

        .apexcharts-tooltip-text-z-label:empty,
        .apexcharts-tooltip-text-z-value:empty {
            display: none;
        }

        .apexcharts-tooltip-text-value,
        .apexcharts-tooltip-text-z-value {
            font-weight: 600;
        }

        .apexcharts-tooltip-marker {
            width: 12px;
            height: 12px;
            position: relative;
            top: 0px;
            margin-right: 10px;
            border-radius: 50%;
        }

        .apexcharts-tooltip-series-group {
            padding: 0 10px;
            display: none;
            text-align: left;
            justify-content: left;
            align-items: center;
        }

        .apexcharts-tooltip-series-group.active .apexcharts-tooltip-marker {
            opacity: 1;
        }

        .apexcharts-tooltip-series-group.active,
        .apexcharts-tooltip-series-group:last-child {
            padding-bottom: 4px;
        }

        .apexcharts-tooltip-series-group-hidden {
            opacity: 0;
            height: 0;
            line-height: 0;
            padding: 0 !important;
        }

        .apexcharts-tooltip-y-group {
            padding: 6px 0 5px;
        }

        .apexcharts-tooltip-candlestick {
            padding: 4px 8px;
        }

        .apexcharts-tooltip-candlestick>div {
            margin: 4px 0;
        }

        .apexcharts-tooltip-candlestick span.value {
            font-weight: bold;
        }

        .apexcharts-tooltip-rangebar {
            padding: 5px 8px;
        }

        .apexcharts-tooltip-rangebar .category {
            font-weight: 600;
            color: #777;
        }

        .apexcharts-tooltip-rangebar .series-name {
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
        }

        .apexcharts-xaxistooltip {
            opacity: 0;
            padding: 9px 10px;
            pointer-events: none;
            color: #373d3f;
            font-size: 13px;
            text-align: center;
            border-radius: 2px;
            position: absolute;
            z-index: 10;
            background: #ECEFF1;
            border: 1px solid #90A4AE;
            transition: 0.15s ease all;
        }

        .apexcharts-xaxistooltip.dark {
            background: rgba(0, 0, 0, 0.7);
            border: 1px solid rgba(0, 0, 0, 0.5);
            color: #fff;
        }

        .apexcharts-xaxistooltip:after,
        .apexcharts-xaxistooltip:before {
            left: 50%;
            border: solid transparent;
            content: " ";
            height: 0;
            width: 0;
            position: absolute;
            pointer-events: none;
        }

        .apexcharts-xaxistooltip:after {
            border-color: rgba(236, 239, 241, 0);
            border-width: 6px;
            margin-left: -6px;
        }

        .apexcharts-xaxistooltip:before {
            border-color: rgba(144, 164, 174, 0);
            border-width: 7px;
            margin-left: -7px;
        }

        .apexcharts-xaxistooltip-bottom:after,
        .apexcharts-xaxistooltip-bottom:before {
            bottom: 100%;
        }

        .apexcharts-xaxistooltip-top:after,
        .apexcharts-xaxistooltip-top:before {
            top: 100%;
        }

        .apexcharts-xaxistooltip-bottom:after {
            border-bottom-color: #ECEFF1;
        }

        .apexcharts-xaxistooltip-bottom:before {
            border-bottom-color: #90A4AE;
        }

        .apexcharts-xaxistooltip-bottom.dark:after {
            border-bottom-color: rgba(0, 0, 0, 0.5);
        }

        .apexcharts-xaxistooltip-bottom.dark:before {
            border-bottom-color: rgba(0, 0, 0, 0.5);
        }

        .apexcharts-xaxistooltip-top:after {
            border-top-color: #ECEFF1
        }

        .apexcharts-xaxistooltip-top:before {
            border-top-color: #90A4AE;
        }

        .apexcharts-xaxistooltip-top.dark:after {
            border-top-color: rgba(0, 0, 0, 0.5);
        }

        .apexcharts-xaxistooltip-top.dark:before {
            border-top-color: rgba(0, 0, 0, 0.5);
        }


        .apexcharts-xaxistooltip.active {
            opacity: 1;
            transition: 0.15s ease all;
        }

        .apexcharts-yaxistooltip {
            opacity: 0;
            padding: 4px 10px;
            pointer-events: none;
            color: #373d3f;
            font-size: 13px;
            text-align: center;
            border-radius: 2px;
            position: absolute;
            z-index: 10;
            background: #ECEFF1;
            border: 1px solid #90A4AE;
        }

        .apexcharts-yaxistooltip.dark {
            background: rgba(0, 0, 0, 0.7);
            border: 1px solid rgba(0, 0, 0, 0.5);
            color: #fff;
        }

        .apexcharts-yaxistooltip:after,
        .apexcharts-yaxistooltip:before {
            top: 50%;
            border: solid transparent;
            content: " ";
            height: 0;
            width: 0;
            position: absolute;
            pointer-events: none;
        }

        .apexcharts-yaxistooltip:after {
            border-color: rgba(236, 239, 241, 0);
            border-width: 6px;
            margin-top: -6px;
        }

        .apexcharts-yaxistooltip:before {
            border-color: rgba(144, 164, 174, 0);
            border-width: 7px;
            margin-top: -7px;
        }

        .apexcharts-yaxistooltip-left:after,
        .apexcharts-yaxistooltip-left:before {
            left: 100%;
        }

        .apexcharts-yaxistooltip-right:after,
        .apexcharts-yaxistooltip-right:before {
            right: 100%;
        }

        .apexcharts-yaxistooltip-left:after {
            border-left-color: #ECEFF1;
        }

        .apexcharts-yaxistooltip-left:before {
            border-left-color: #90A4AE;
        }

        .apexcharts-yaxistooltip-left.dark:after {
            border-left-color: rgba(0, 0, 0, 0.5);
        }

        .apexcharts-yaxistooltip-left.dark:before {
            border-left-color: rgba(0, 0, 0, 0.5);
        }

        .apexcharts-yaxistooltip-right:after {
            border-right-color: #ECEFF1;
        }

        .apexcharts-yaxistooltip-right:before {
            border-right-color: #90A4AE;
        }

        .apexcharts-yaxistooltip-right.dark:after {
            border-right-color: rgba(0, 0, 0, 0.5);
        }

        .apexcharts-yaxistooltip-right.dark:before {
            border-right-color: rgba(0, 0, 0, 0.5);
        }

        .apexcharts-yaxistooltip.active {
            opacity: 1;
        }

        .apexcharts-xcrosshairs,
        .apexcharts-ycrosshairs {
            pointer-events: none;
            opacity: 0;
            transition: 0.15s ease all;
        }

        .apexcharts-xcrosshairs.active,
        .apexcharts-ycrosshairs.active {
            opacity: 1;
            transition: 0.15s ease all;
        }

        .apexcharts-ycrosshairs-hidden {
            opacity: 0;
        }

        .apexcharts-zoom-rect {
            pointer-events: none;
        }

        .apexcharts-selection-rect {
            cursor: move;
        }

        .svg_select_points,
        .svg_select_points_rot {
            opacity: 0;
            visibility: hidden;
        }

        .svg_select_points_l,
        .svg_select_points_r {
            cursor: ew-resize;
            opacity: 1;
            visibility: visible;
            fill: #888;
        }

        .apexcharts-canvas.zoomable .hovering-zoom {
            cursor: crosshair
        }

        .apexcharts-canvas.zoomable .hovering-pan {
            cursor: move
        }

        .apexcharts-xaxis,
        .apexcharts-yaxis {
            pointer-events: none;
        }

        .apexcharts-zoom-icon,
        .apexcharts-zoom-in-icon,
        .apexcharts-zoom-out-icon,
        .apexcharts-reset-zoom-icon,
        .apexcharts-pan-icon,
        .apexcharts-selection-icon,
        .apexcharts-menu-icon,
        .apexcharts-toolbar-custom-icon {
            cursor: pointer;
            width: 20px;
            height: 20px;
            line-height: 24px;
            color: #6E8192;
            text-align: center;
        }


        .apexcharts-zoom-icon svg,
        .apexcharts-zoom-in-icon svg,
        .apexcharts-zoom-out-icon svg,
        .apexcharts-reset-zoom-icon svg,
        .apexcharts-menu-icon svg {
            fill: #6E8192;
        }

        .apexcharts-selection-icon svg {
            fill: #444;
            transform: scale(0.76)
        }

        .dark .apexcharts-zoom-icon svg,
        .dark .apexcharts-zoom-in-icon svg,
        .dark .apexcharts-zoom-out-icon svg,
        .dark .apexcharts-reset-zoom-icon svg,
        .dark .apexcharts-pan-icon svg,
        .dark .apexcharts-selection-icon svg,
        .dark .apexcharts-menu-icon svg,
        .dark .apexcharts-toolbar-custom-icon svg {
            fill: #f3f4f5;
        }

        .apexcharts-canvas .apexcharts-zoom-icon.selected svg,
        .apexcharts-canvas .apexcharts-selection-icon.selected svg,
        .apexcharts-canvas .apexcharts-reset-zoom-icon.selected svg {
            fill: #008FFB;
        }

        .light .apexcharts-selection-icon:not(.selected):hover svg,
        .light .apexcharts-zoom-icon:not(.selected):hover svg,
        .light .apexcharts-zoom-in-icon:hover svg,
        .light .apexcharts-zoom-out-icon:hover svg,
        .light .apexcharts-reset-zoom-icon:hover svg,
        .light .apexcharts-menu-icon:hover svg {
            fill: #0e1726;
        }

        .apexcharts-selection-icon,
        .apexcharts-menu-icon {
            position: relative;
        }

        .apexcharts-reset-zoom-icon {
            margin-left: 5px;
        }

        .apexcharts-zoom-icon,
        .apexcharts-reset-zoom-icon,
        .apexcharts-menu-icon {
            transform: scale(0.85);
        }

        .apexcharts-zoom-in-icon,
        .apexcharts-zoom-out-icon {
            transform: scale(0.7)
        }

        .apexcharts-zoom-out-icon {
            margin-right: 3px;
        }

        .apexcharts-pan-icon {
            transform: scale(0.62);
            position: relative;
            left: 1px;
            top: 0px;
        }

        .apexcharts-pan-icon svg {
            fill: #fff;
            stroke: #6E8192;
            stroke-width: 2;
        }

        .apexcharts-pan-icon.selected svg {
            stroke: #008FFB;
        }

        .apexcharts-pan-icon:not(.selected):hover svg {
            stroke: #0e1726;
        }

        .apexcharts-toolbar {
            position: absolute;
            z-index: 11;
            top: 0px;
            right: 3px;
            max-width: 176px;
            text-align: right;
            border-radius: 3px;
            padding: 0px 6px 2px 6px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .apexcharts-toolbar svg {
            pointer-events: none;
        }

        .apexcharts-menu {
            background: #fff;
            position: absolute;
            top: 100%;
            border: 1px solid #ddd;
            border-radius: 3px;
            padding: 3px;
            right: 10px;
            opacity: 0;
            min-width: 110px;
            transition: 0.15s ease all;
            pointer-events: none;
        }

        .apexcharts-menu.open {
            opacity: 1;
            pointer-events: all;
            transition: 0.15s ease all;
        }

        .apexcharts-menu-item {
            padding: 6px 7px;
            font-size: 12px;
            cursor: pointer;
        }

        .light .apexcharts-menu-item:hover {
            background: #eee;
        }

        .dark .apexcharts-menu {
            background: rgba(0, 0, 0, 0.7);
            color: #fff;
        }

        @media screen and (min-width: 768px) {
            .apexcharts-toolbar {
                /*opacity: 0;*/
            }

            .apexcharts-canvas:hover .apexcharts-toolbar {
                opacity: 1;
            }
        }

        .apexcharts-datalabel.hidden {
            opacity: 0;
        }

        .apexcharts-pie-label,
        .apexcharts-datalabel,
        .apexcharts-datalabel-label,
        .apexcharts-datalabel-value {
            cursor: default;
            pointer-events: none;
        }

        .apexcharts-pie-label-delay {
            opacity: 0;
            animation-name: opaque;
            animation-duration: 0.3s;
            animation-fill-mode: forwards;
            animation-timing-function: ease;
        }

        .apexcharts-canvas .hidden {
            opacity: 0;
        }

        .apexcharts-hide .apexcharts-series-points {
            opacity: 0;
        }

        .apexcharts-area-series .apexcharts-series-markers .apexcharts-marker.no-pointer-events,
        .apexcharts-line-series .apexcharts-series-markers .apexcharts-marker.no-pointer-events,
        .apexcharts-radar-series path,
        .apexcharts-radar-series polygon {
            pointer-events: none;
        }

        /* markers */

        .apexcharts-marker {
            transition: 0.15s ease all;
        }

        @keyframes opaque {
            0% {
                opacity: 0;
            }

            100% {
                opacity: 1;
            }
        }
    </style>
    <style>
        @-webkit-keyframes swal2-show {
            0% {
                -webkit-transform: scale(.7);
                transform: scale(.7)
            }

            45% {
                -webkit-transform: scale(1.05);
                transform: scale(1.05)
            }

            80% {
                -webkit-transform: scale(.95);
                transform: scale(.95)
            }

            100% {
                -webkit-transform: scale(1);
                transform: scale(1)
            }
        }

        @keyframes swal2-show {
            0% {
                -webkit-transform: scale(.7);
                transform: scale(.7)
            }

            45% {
                -webkit-transform: scale(1.05);
                transform: scale(1.05)
            }

            80% {
                -webkit-transform: scale(.95);
                transform: scale(.95)
            }

            100% {
                -webkit-transform: scale(1);
                transform: scale(1)
            }
        }

        @-webkit-keyframes swal2-hide {
            0% {
                -webkit-transform: scale(1);
                transform: scale(1);
                opacity: 1
            }

            100% {
                -webkit-transform: scale(.5);
                transform: scale(.5);
                opacity: 0
            }
        }

        @keyframes swal2-hide {
            0% {
                -webkit-transform: scale(1);
                transform: scale(1);
                opacity: 1
            }

            100% {
                -webkit-transform: scale(.5);
                transform: scale(.5);
                opacity: 0
            }
        }

        @-webkit-keyframes swal2-animate-success-line-tip {
            0% {
                top: 1.1875em;
                left: .0625em;
                width: 0
            }

            54% {
                top: 1.0625em;
                left: .125em;
                width: 0
            }

            70% {
                top: 2.1875em;
                left: -.375em;
                width: 3.125em
            }

            84% {
                top: 3em;
                left: 1.3125em;
                width: 1.0625em
            }

            100% {
                top: 2.8125em;
                left: .875em;
                width: 1.5625em
            }
        }

        @keyframes swal2-animate-success-line-tip {
            0% {
                top: 1.1875em;
                left: .0625em;
                width: 0
            }

            54% {
                top: 1.0625em;
                left: .125em;
                width: 0
            }

            70% {
                top: 2.1875em;
                left: -.375em;
                width: 3.125em
            }

            84% {
                top: 3em;
                left: 1.3125em;
                width: 1.0625em
            }

            100% {
                top: 2.8125em;
                left: .875em;
                width: 1.5625em
            }
        }

        @-webkit-keyframes swal2-animate-success-line-long {
            0% {
                top: 3.375em;
                right: 2.875em;
                width: 0
            }

            65% {
                top: 3.375em;
                right: 2.875em;
                width: 0
            }

            84% {
                top: 2.1875em;
                right: 0;
                width: 3.4375em
            }

            100% {
                top: 2.375em;
                right: .5em;
                width: 2.9375em
            }
        }

        @keyframes swal2-animate-success-line-long {
            0% {
                top: 3.375em;
                right: 2.875em;
                width: 0
            }

            65% {
                top: 3.375em;
                right: 2.875em;
                width: 0
            }

            84% {
                top: 2.1875em;
                right: 0;
                width: 3.4375em
            }

            100% {
                top: 2.375em;
                right: .5em;
                width: 2.9375em
            }
        }

        @-webkit-keyframes swal2-rotate-success-circular-line {
            0% {
                -webkit-transform: rotate(-45deg);
                transform: rotate(-45deg)
            }

            5% {
                -webkit-transform: rotate(-45deg);
                transform: rotate(-45deg)
            }

            12% {
                -webkit-transform: rotate(-405deg);
                transform: rotate(-405deg)
            }

            100% {
                -webkit-transform: rotate(-405deg);
                transform: rotate(-405deg)
            }
        }

        @keyframes swal2-rotate-success-circular-line {
            0% {
                -webkit-transform: rotate(-45deg);
                transform: rotate(-45deg)
            }

            5% {
                -webkit-transform: rotate(-45deg);
                transform: rotate(-45deg)
            }

            12% {
                -webkit-transform: rotate(-405deg);
                transform: rotate(-405deg)
            }

            100% {
                -webkit-transform: rotate(-405deg);
                transform: rotate(-405deg)
            }
        }

        @-webkit-keyframes swal2-animate-error-x-mark {
            0% {
                margin-top: 1.625em;
                -webkit-transform: scale(.4);
                transform: scale(.4);
                opacity: 0
            }

            50% {
                margin-top: 1.625em;
                -webkit-transform: scale(.4);
                transform: scale(.4);
                opacity: 0
            }

            80% {
                margin-top: -.375em;
                -webkit-transform: scale(1.15);
                transform: scale(1.15)
            }

            100% {
                margin-top: 0;
                -webkit-transform: scale(1);
                transform: scale(1);
                opacity: 1
            }
        }

        @keyframes swal2-animate-error-x-mark {
            0% {
                margin-top: 1.625em;
                -webkit-transform: scale(.4);
                transform: scale(.4);
                opacity: 0
            }

            50% {
                margin-top: 1.625em;
                -webkit-transform: scale(.4);
                transform: scale(.4);
                opacity: 0
            }

            80% {
                margin-top: -.375em;
                -webkit-transform: scale(1.15);
                transform: scale(1.15)
            }

            100% {
                margin-top: 0;
                -webkit-transform: scale(1);
                transform: scale(1);
                opacity: 1
            }
        }

        @-webkit-keyframes swal2-animate-error-icon {
            0% {
                -webkit-transform: rotateX(100deg);
                transform: rotateX(100deg);
                opacity: 0
            }

            100% {
                -webkit-transform: rotateX(0);
                transform: rotateX(0);
                opacity: 1
            }
        }

        @keyframes swal2-animate-error-icon {
            0% {
                -webkit-transform: rotateX(100deg);
                transform: rotateX(100deg);
                opacity: 0
            }

            100% {
                -webkit-transform: rotateX(0);
                transform: rotateX(0);
                opacity: 1
            }
        }

        body.swal2-toast-shown.swal2-has-input>.swal2-container>.swal2-toast {
            flex-direction: column;
            align-items: stretch
        }

        body.swal2-toast-shown.swal2-has-input>.swal2-container>.swal2-toast .swal2-actions {
            flex: 1;
            align-self: stretch;
            justify-content: flex-end;
            height: 2.2em
        }

        body.swal2-toast-shown.swal2-has-input>.swal2-container>.swal2-toast .swal2-loading {
            justify-content: center
        }

        body.swal2-toast-shown.swal2-has-input>.swal2-container>.swal2-toast .swal2-input {
            height: 2em;
            margin: .3125em auto;
            font-size: 1em
        }

        body.swal2-toast-shown.swal2-has-input>.swal2-container>.swal2-toast .swal2-validationerror {
            font-size: 1em
        }

        body.swal2-toast-shown>.swal2-container {
            position: fixed;
            background-color: transparent
        }

        body.swal2-toast-shown>.swal2-container.swal2-shown {
            background-color: transparent
        }

        body.swal2-toast-shown>.swal2-container.swal2-top {
            top: 0;
            right: auto;
            bottom: auto;
            left: 50%;
            -webkit-transform: translateX(-50%);
            transform: translateX(-50%)
        }

        body.swal2-toast-shown>.swal2-container.swal2-top-end,
        body.swal2-toast-shown>.swal2-container.swal2-top-right {
            top: 0;
            right: 0;
            bottom: auto;
            left: auto
        }

        body.swal2-toast-shown>.swal2-container.swal2-top-left,
        body.swal2-toast-shown>.swal2-container.swal2-top-start {
            top: 0;
            right: auto;
            bottom: auto;
            left: 0
        }

        body.swal2-toast-shown>.swal2-container.swal2-center-left,
        body.swal2-toast-shown>.swal2-container.swal2-center-start {
            top: 50%;
            right: auto;
            bottom: auto;
            left: 0;
            -webkit-transform: translateY(-50%);
            transform: translateY(-50%)
        }

        body.swal2-toast-shown>.swal2-container.swal2-center {
            top: 50%;
            right: auto;
            bottom: auto;
            left: 50%;
            -webkit-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%)
        }

        body.swal2-toast-shown>.swal2-container.swal2-center-end,
        body.swal2-toast-shown>.swal2-container.swal2-center-right {
            top: 50%;
            right: 0;
            bottom: auto;
            left: auto;
            -webkit-transform: translateY(-50%);
            transform: translateY(-50%)
        }

        body.swal2-toast-shown>.swal2-container.swal2-bottom-left,
        body.swal2-toast-shown>.swal2-container.swal2-bottom-start {
            top: auto;
            right: auto;
            bottom: 0;
            left: 0
        }

        body.swal2-toast-shown>.swal2-container.swal2-bottom {
            top: auto;
            right: auto;
            bottom: 0;
            left: 50%;
            -webkit-transform: translateX(-50%);
            transform: translateX(-50%)
        }

        body.swal2-toast-shown>.swal2-container.swal2-bottom-end,
        body.swal2-toast-shown>.swal2-container.swal2-bottom-right {
            top: auto;
            right: 0;
            bottom: 0;
            left: auto
        }

        .swal2-popup.swal2-toast {
            flex-direction: row;
            align-items: center;
            width: auto;
            padding: .625em;
            box-shadow: 0 0 .625em #d9d9d9;
            overflow-y: hidden
        }

        .swal2-popup.swal2-toast .swal2-header {
            flex-direction: row
        }

        .swal2-popup.swal2-toast .swal2-title {
            justify-content: flex-start;
            margin: 0 .6em;
            font-size: 1em
        }

        .swal2-popup.swal2-toast .swal2-close {
            position: initial
        }

        .swal2-popup.swal2-toast .swal2-content {
            justify-content: flex-start;
            font-size: 1em
        }

        .swal2-popup.swal2-toast .swal2-icon {
            width: 2em;
            min-width: 2em;
            height: 2em;
            margin: 0
        }

        .swal2-popup.swal2-toast .swal2-icon-text {
            font-size: 2em;
            font-weight: 700;
            line-height: 1em
        }

        .swal2-popup.swal2-toast .swal2-icon.swal2-success .swal2-success-ring {
            width: 2em;
            height: 2em
        }

        .swal2-popup.swal2-toast .swal2-icon.swal2-error [class^=swal2-x-mark-line] {
            top: .875em;
            width: 1.375em
        }

        .swal2-popup.swal2-toast .swal2-icon.swal2-error [class^=swal2-x-mark-line][class$=left] {
            left: .3125em
        }

        .swal2-popup.swal2-toast .swal2-icon.swal2-error [class^=swal2-x-mark-line][class$=right] {
            right: .3125em
        }

        .swal2-popup.swal2-toast .swal2-actions {
            height: auto;
            margin: 0 .3125em
        }

        .swal2-popup.swal2-toast .swal2-styled {
            margin: 0 .3125em;
            padding: .3125em .625em;
            font-size: 1em
        }

        .swal2-popup.swal2-toast .swal2-styled:focus {
            box-shadow: 0 0 0 .0625em #fff, 0 0 0 .125em rgba(50, 100, 150, .4)
        }

        .swal2-popup.swal2-toast .swal2-success {
            border-color: #a5dc86
        }

        .swal2-popup.swal2-toast .swal2-success [class^=swal2-success-circular-line] {
            position: absolute;
            width: 2em;
            height: 2.8125em;
            -webkit-transform: rotate(45deg);
            transform: rotate(45deg);
            border-radius: 50%
        }

        .swal2-popup.swal2-toast .swal2-success [class^=swal2-success-circular-line][class$=left] {
            top: -.25em;
            left: -.9375em;
            -webkit-transform: rotate(-45deg);
            transform: rotate(-45deg);
            -webkit-transform-origin: 2em 2em;
            transform-origin: 2em 2em;
            border-radius: 4em 0 0 4em
        }

        .swal2-popup.swal2-toast .swal2-success [class^=swal2-success-circular-line][class$=right] {
            top: -.25em;
            left: .9375em;
            -webkit-transform-origin: 0 2em;
            transform-origin: 0 2em;
            border-radius: 0 4em 4em 0
        }

        .swal2-popup.swal2-toast .swal2-success .swal2-success-ring {
            width: 2em;
            height: 2em
        }

        .swal2-popup.swal2-toast .swal2-success .swal2-success-fix {
            top: 0;
            left: .4375em;
            width: .4375em;
            height: 2.6875em
        }

        .swal2-popup.swal2-toast .swal2-success [class^=swal2-success-line] {
            height: .3125em
        }

        .swal2-popup.swal2-toast .swal2-success [class^=swal2-success-line][class$=tip] {
            top: 1.125em;
            left: .1875em;
            width: .75em
        }

        .swal2-popup.swal2-toast .swal2-success [class^=swal2-success-line][class$=long] {
            top: .9375em;
            right: .1875em;
            width: 1.375em
        }

        .swal2-popup.swal2-toast.swal2-show {
            -webkit-animation: showSweetToast .5s;
            animation: showSweetToast .5s
        }

        .swal2-popup.swal2-toast.swal2-hide {
            -webkit-animation: hideSweetToast .2s forwards;
            animation: hideSweetToast .2s forwards
        }

        .swal2-popup.swal2-toast .swal2-animate-success-icon .swal2-success-line-tip {
            -webkit-animation: animate-toast-success-tip .75s;
            animation: animate-toast-success-tip .75s
        }

        .swal2-popup.swal2-toast .swal2-animate-success-icon .swal2-success-line-long {
            -webkit-animation: animate-toast-success-long .75s;
            animation: animate-toast-success-long .75s
        }

        @-webkit-keyframes showSweetToast {
            0% {
                -webkit-transform: translateY(-.625em) rotateZ(2deg);
                transform: translateY(-.625em) rotateZ(2deg);
                opacity: 0
            }

            33% {
                -webkit-transform: translateY(0) rotateZ(-2deg);
                transform: translateY(0) rotateZ(-2deg);
                opacity: .5
            }

            66% {
                -webkit-transform: translateY(.3125em) rotateZ(2deg);
                transform: translateY(.3125em) rotateZ(2deg);
                opacity: .7
            }

            100% {
                -webkit-transform: translateY(0) rotateZ(0);
                transform: translateY(0) rotateZ(0);
                opacity: 1
            }
        }

        @keyframes showSweetToast {
            0% {
                -webkit-transform: translateY(-.625em) rotateZ(2deg);
                transform: translateY(-.625em) rotateZ(2deg);
                opacity: 0
            }

            33% {
                -webkit-transform: translateY(0) rotateZ(-2deg);
                transform: translateY(0) rotateZ(-2deg);
                opacity: .5
            }

            66% {
                -webkit-transform: translateY(.3125em) rotateZ(2deg);
                transform: translateY(.3125em) rotateZ(2deg);
                opacity: .7
            }

            100% {
                -webkit-transform: translateY(0) rotateZ(0);
                transform: translateY(0) rotateZ(0);
                opacity: 1
            }
        }

        @-webkit-keyframes hideSweetToast {
            0% {
                opacity: 1
            }

            33% {
                opacity: .5
            }

            100% {
                -webkit-transform: rotateZ(1deg);
                transform: rotateZ(1deg);
                opacity: 0
            }
        }

        @keyframes hideSweetToast {
            0% {
                opacity: 1
            }

            33% {
                opacity: .5
            }

            100% {
                -webkit-transform: rotateZ(1deg);
                transform: rotateZ(1deg);
                opacity: 0
            }
        }

        @-webkit-keyframes animate-toast-success-tip {
            0% {
                top: .5625em;
                left: .0625em;
                width: 0
            }

            54% {
                top: .125em;
                left: .125em;
                width: 0
            }

            70% {
                top: .625em;
                left: -.25em;
                width: 1.625em
            }

            84% {
                top: 1.0625em;
                left: .75em;
                width: .5em
            }

            100% {
                top: 1.125em;
                left: .1875em;
                width: .75em
            }
        }

        @keyframes animate-toast-success-tip {
            0% {
                top: .5625em;
                left: .0625em;
                width: 0
            }

            54% {
                top: .125em;
                left: .125em;
                width: 0
            }

            70% {
                top: .625em;
                left: -.25em;
                width: 1.625em
            }

            84% {
                top: 1.0625em;
                left: .75em;
                width: .5em
            }

            100% {
                top: 1.125em;
                left: .1875em;
                width: .75em
            }
        }

        @-webkit-keyframes animate-toast-success-long {
            0% {
                top: 1.625em;
                right: 1.375em;
                width: 0
            }

            65% {
                top: 1.25em;
                right: .9375em;
                width: 0
            }

            84% {
                top: .9375em;
                right: 0;
                width: 1.125em
            }

            100% {
                top: .9375em;
                right: .1875em;
                width: 1.375em
            }
        }

        @keyframes animate-toast-success-long {
            0% {
                top: 1.625em;
                right: 1.375em;
                width: 0
            }

            65% {
                top: 1.25em;
                right: .9375em;
                width: 0
            }

            84% {
                top: .9375em;
                right: 0;
                width: 1.125em
            }

            100% {
                top: .9375em;
                right: .1875em;
                width: 1.375em
            }
        }

        body.swal2-shown:not(.swal2-no-backdrop):not(.swal2-toast-shown) {
            overflow-y: hidden
        }

        body.swal2-height-auto {
            height: auto !important
        }

        body.swal2-no-backdrop .swal2-shown {
            top: auto;
            right: auto;
            bottom: auto;
            left: auto;
            background-color: transparent
        }

        body.swal2-no-backdrop .swal2-shown>.swal2-modal {
            box-shadow: 0 0 10px rgba(0, 0, 0, .4)
        }

        body.swal2-no-backdrop .swal2-shown.swal2-top {
            top: 0;
            left: 50%;
            -webkit-transform: translateX(-50%);
            transform: translateX(-50%)
        }

        body.swal2-no-backdrop .swal2-shown.swal2-top-left,
        body.swal2-no-backdrop .swal2-shown.swal2-top-start {
            top: 0;
            left: 0
        }

        body.swal2-no-backdrop .swal2-shown.swal2-top-end,
        body.swal2-no-backdrop .swal2-shown.swal2-top-right {
            top: 0;
            right: 0
        }

        body.swal2-no-backdrop .swal2-shown.swal2-center {
            top: 50%;
            left: 50%;
            -webkit-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%)
        }

        body.swal2-no-backdrop .swal2-shown.swal2-center-left,
        body.swal2-no-backdrop .swal2-shown.swal2-center-start {
            top: 50%;
            left: 0;
            -webkit-transform: translateY(-50%);
            transform: translateY(-50%)
        }

        body.swal2-no-backdrop .swal2-shown.swal2-center-end,
        body.swal2-no-backdrop .swal2-shown.swal2-center-right {
            top: 50%;
            right: 0;
            -webkit-transform: translateY(-50%);
            transform: translateY(-50%)
        }

        body.swal2-no-backdrop .swal2-shown.swal2-bottom {
            bottom: 0;
            left: 50%;
            -webkit-transform: translateX(-50%);
            transform: translateX(-50%)
        }

        body.swal2-no-backdrop .swal2-shown.swal2-bottom-left,
        body.swal2-no-backdrop .swal2-shown.swal2-bottom-start {
            bottom: 0;
            left: 0
        }

        body.swal2-no-backdrop .swal2-shown.swal2-bottom-end,
        body.swal2-no-backdrop .swal2-shown.swal2-bottom-right {
            right: 0;
            bottom: 0
        }

        .swal2-container {
            display: flex;
            position: fixed;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            flex-direction: row;
            align-items: center;
            justify-content: center;
            padding: 10px;
            background-color: transparent;
            z-index: 1060;
            overflow-x: hidden;
            -webkit-overflow-scrolling: touch
        }

        .swal2-container.swal2-top {
            align-items: flex-start
        }

        .swal2-container.swal2-top-left,
        .swal2-container.swal2-top-start {
            align-items: flex-start;
            justify-content: flex-start
        }

        .swal2-container.swal2-top-end,
        .swal2-container.swal2-top-right {
            align-items: flex-start;
            justify-content: flex-end
        }

        .swal2-container.swal2-center {
            align-items: center
        }

        .swal2-container.swal2-center-left,
        .swal2-container.swal2-center-start {
            align-items: center;
            justify-content: flex-start
        }

        .swal2-container.swal2-center-end,
        .swal2-container.swal2-center-right {
            align-items: center;
            justify-content: flex-end
        }

        .swal2-container.swal2-bottom {
            align-items: flex-end
        }

        .swal2-container.swal2-bottom-left,
        .swal2-container.swal2-bottom-start {
            align-items: flex-end;
            justify-content: flex-start
        }

        .swal2-container.swal2-bottom-end,
        .swal2-container.swal2-bottom-right {
            align-items: flex-end;
            justify-content: flex-end
        }

        .swal2-container.swal2-grow-fullscreen>.swal2-modal {
            display: flex !important;
            flex: 1;
            align-self: stretch;
            justify-content: center
        }

        .swal2-container.swal2-grow-row>.swal2-modal {
            display: flex !important;
            flex: 1;
            align-content: center;
            justify-content: center
        }

        .swal2-container.swal2-grow-column {
            flex: 1;
            flex-direction: column
        }

        .swal2-container.swal2-grow-column.swal2-bottom,
        .swal2-container.swal2-grow-column.swal2-center,
        .swal2-container.swal2-grow-column.swal2-top {
            align-items: center
        }

        .swal2-container.swal2-grow-column.swal2-bottom-left,
        .swal2-container.swal2-grow-column.swal2-bottom-start,
        .swal2-container.swal2-grow-column.swal2-center-left,
        .swal2-container.swal2-grow-column.swal2-center-start,
        .swal2-container.swal2-grow-column.swal2-top-left,
        .swal2-container.swal2-grow-column.swal2-top-start {
            align-items: flex-start
        }

        .swal2-container.swal2-grow-column.swal2-bottom-end,
        .swal2-container.swal2-grow-column.swal2-bottom-right,
        .swal2-container.swal2-grow-column.swal2-center-end,
        .swal2-container.swal2-grow-column.swal2-center-right,
        .swal2-container.swal2-grow-column.swal2-top-end,
        .swal2-container.swal2-grow-column.swal2-top-right {
            align-items: flex-end
        }

        .swal2-container.swal2-grow-column>.swal2-modal {
            display: flex !important;
            flex: 1;
            align-content: center;
            justify-content: center
        }

        .swal2-container:not(.swal2-top):not(.swal2-top-start):not(.swal2-top-end):not(.swal2-top-left):not(.swal2-top-right):not(.swal2-center-start):not(.swal2-center-end):not(.swal2-center-left):not(.swal2-center-right):not(.swal2-bottom):not(.swal2-bottom-start):not(.swal2-bottom-end):not(.swal2-bottom-left):not(.swal2-bottom-right)>.swal2-modal {
            margin: auto
        }

        @media all and (-ms-high-contrast:none),
        (-ms-high-contrast:active) {
            .swal2-container .swal2-modal {
                margin: 0 !important
            }
        }

        .swal2-container.swal2-fade {
            transition: background-color .1s
        }

        .swal2-container.swal2-shown {
            background-color: rgba(0, 0, 0, .4)
        }

        .swal2-popup {
            display: none;
            position: relative;
            flex-direction: column;
            justify-content: center;
            width: 32em;
            max-width: 100%;
            padding: 1.25em;
            border-radius: .3125em;
            background: #fff;
            font-family: inherit;
            font-size: 1rem;
            box-sizing: border-box
        }

        .swal2-popup:focus {
            outline: 0
        }

        .swal2-popup.swal2-loading {
            overflow-y: hidden
        }

        .swal2-popup .swal2-header {
            display: flex;
            flex-direction: column;
            align-items: center
        }

        .swal2-popup .swal2-title {
            display: block;
            position: relative;
            max-width: 100%;
            margin: 0 0 .4em;
            padding: 0;
            color: #595959;
            font-size: 1.875em;
            font-weight: 600;
            text-align: center;
            text-transform: none;
            word-wrap: break-word
        }

        .swal2-popup .swal2-actions {
            align-items: center;
            justify-content: center;
            margin: 1.25em auto 0
        }

        .swal2-popup .swal2-actions:not(.swal2-loading) .swal2-styled[disabled] {
            opacity: .4
        }

        .swal2-popup .swal2-actions:not(.swal2-loading) .swal2-styled:hover {
            -webkit-transform: translateY(-3px);
            transform: translateY(-3px);
        }

        .swal2-popup .swal2-actions:not(.swal2-loading) .swal2-styled:active {
            background-image: linear-gradient(rgba(0, 0, 0, .2), rgba(0, 0, 0, .2))
        }

        .swal2-popup .swal2-actions.swal2-loading .swal2-styled.swal2-confirm {
            width: 2.5em;
            height: 2.5em;
            margin: .46875em;
            padding: 0;
            border: .25em solid transparent;
            border-radius: 100%;
            border-color: transparent;
            background-color: transparent !important;
            color: transparent;
            cursor: default;
            box-sizing: border-box;
            -webkit-animation: swal2-rotate-loading 1.5s linear 0s infinite normal;
            animation: swal2-rotate-loading 1.5s linear 0s infinite normal;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none
        }

        .swal2-popup .swal2-actions.swal2-loading .swal2-styled.swal2-cancel {
            margin-right: 30px;
            margin-left: 30px
        }

        .swal2-popup .swal2-actions.swal2-loading :not(.swal2-styled).swal2-confirm::after {
            display: inline-block;
            width: 15px;
            height: 15px;
            margin-left: 5px;
            border: 3px solid #888ea8;
            border-radius: 50%;
            border-right-color: transparent;
            box-shadow: 1px 1px 1px #fff;
            content: '';
            -webkit-animation: swal2-rotate-loading 1.5s linear 0s infinite normal;
            animation: swal2-rotate-loading 1.5s linear 0s infinite normal
        }

        .swal2-popup .swal2-styled {
            margin: 0 .3125em;
            padding: .625em 2em;
            font-weight: 500;
            box-shadow: none
        }

        .swal2-popup .swal2-styled:not([disabled]) {
            cursor: pointer
        }

        .swal2-popup .swal2-styled.swal2-confirm {
            border: 0;
            border-radius: .25em;
            background: initial;
            background-color: #1b55e2;
            color: #fff;
            font-size: 14px
        }

        .swal2-popup .swal2-styled.swal2-cancel {
            background-color: #fff;
            color: #1b55e2;
            font-weight: 700;
            border: 1px solid #e8e8e8;
        }

        .swal2-popup .swal2-styled:focus {
            outline: 0;
            box-shadow: 0 0 0 2px #fff, 0 0 0 4px rgba(50, 100, 150, .4)
        }

        .swal2-popup .swal2-styled::-moz-focus-inner {
            border: 0
        }

        .swal2-popup .swal2-footer {
            justify-content: center;
            margin: 1.25em 0 0;
            padding-top: 1em;
            border-top: 1px solid #eee;
            color: #545454;
            font-size: 1em
        }

        .swal2-popup .swal2-image {
            max-width: 100%;
            margin: 1.25em auto
        }

        .swal2-popup .swal2-close {
            position: absolute;
            top: 0;
            right: 0;
            justify-content: center;
            width: 1.2em;
            height: 1.2em;
            padding: 0;
            transition: color .1s ease-out;
            border: none;
            border-radius: 0;
            background: 0 0;
            color: #ccc;
            font-family: serif;
            font-size: 2.5em;
            line-height: 1.2;
            cursor: pointer;
            overflow: hidden
        }

        .swal2-popup .swal2-close:hover {
            -webkit-transform: none;
            transform: none;
            color: #f27474
        }

        .swal2-popup>.swal2-checkbox,
        .swal2-popup>.swal2-file,
        .swal2-popup>.swal2-input,
        .swal2-popup>.swal2-radio,
        .swal2-popup>.swal2-select,
        .swal2-popup>.swal2-textarea {
            display: none
        }

        .swal2-popup .swal2-content {
            justify-content: center;
            margin: 0;
            padding: 0;
            color: #545454;
            font-size: 1.125em;
            font-weight: 300;
            line-height: normal;
            word-wrap: break-word
        }

        .swal2-popup #swal2-content {
            text-align: center
        }

        .swal2-popup .swal2-checkbox,
        .swal2-popup .swal2-file,
        .swal2-popup .swal2-input,
        .swal2-popup .swal2-radio,
        .swal2-popup .swal2-select,
        .swal2-popup .swal2-textarea {
            margin: 1em auto
        }

        .swal2-popup .swal2-file,
        .swal2-popup .swal2-input,
        .swal2-popup .swal2-textarea {
            width: 100%;
            transition: border-color .3s, box-shadow .3s;
            border: 1px solid #d9d9d9;
            border-radius: .1875em;
            font-size: 1.125em;
            box-shadow: inset 0 1px 1px rgba(0, 0, 0, .06);
            box-sizing: border-box
        }

        .swal2-popup .swal2-file.swal2-inputerror,
        .swal2-popup .swal2-input.swal2-inputerror,
        .swal2-popup .swal2-textarea.swal2-inputerror {
            border-color: #f27474 !important;
            box-shadow: 0 0 2px #f27474 !important
        }

        .swal2-popup .swal2-file:focus,
        .swal2-popup .swal2-input:focus,
        .swal2-popup .swal2-textarea:focus {
            border: 1px solid #b4dbed;
            outline: 0;
            box-shadow: 0 0 3px #c4e6f5
        }

        .swal2-popup .swal2-file::-webkit-input-placeholder,
        .swal2-popup .swal2-input::-webkit-input-placeholder,
        .swal2-popup .swal2-textarea::-webkit-input-placeholder {
            color: #ccc
        }

        .swal2-popup .swal2-file:-ms-input-placeholder,
        .swal2-popup .swal2-input:-ms-input-placeholder,
        .swal2-popup .swal2-textarea:-ms-input-placeholder {
            color: #ccc
        }

        .swal2-popup .swal2-file::-ms-input-placeholder,
        .swal2-popup .swal2-input::-ms-input-placeholder,
        .swal2-popup .swal2-textarea::-ms-input-placeholder {
            color: #ccc
        }

        .swal2-popup .swal2-file::placeholder,
        .swal2-popup .swal2-input::placeholder,
        .swal2-popup .swal2-textarea::placeholder {
            color: #ccc
        }

        .swal2-popup .swal2-range input {
            width: 80%
        }

        .swal2-popup .swal2-range output {
            width: 20%;
            font-weight: 600;
            text-align: center
        }

        .swal2-popup .swal2-range input,
        .swal2-popup .swal2-range output {
            height: 2.625em;
            margin: 1em auto;
            padding: 0;
            font-size: 1.125em;
            line-height: 2.625em
        }

        .swal2-popup .swal2-input {
            height: 2.625em;
            padding: .75em
        }

        .swal2-popup .swal2-input[type=number] {
            max-width: 10em
        }

        .swal2-popup .swal2-file {
            font-size: 1.125em
        }

        .swal2-popup .swal2-textarea {
            height: 6.75em;
            padding: .75em
        }

        .swal2-popup .swal2-select {
            min-width: 50%;
            max-width: 100%;
            padding: .375em .625em;
            color: #545454;
            font-size: 1.125em
        }

        .swal2-popup .swal2-checkbox,
        .swal2-popup .swal2-radio {
            align-items: center;
            justify-content: center
        }

        .swal2-popup .swal2-checkbox label,
        .swal2-popup .swal2-radio label {
            margin: 0 .6em;
            font-size: 1.125em
        }

        .swal2-popup .swal2-checkbox input,
        .swal2-popup .swal2-radio input {
            margin: 0 .4em
        }

        .swal2-popup .swal2-validationerror {
            display: none;
            align-items: center;
            justify-content: center;
            padding: .625em;
            background: #f0f0f0;
            color: #666;
            font-size: 1em;
            font-weight: 300;
            overflow: hidden
        }

        .swal2-popup .swal2-validationerror::before {
            display: inline-block;
            width: 1.5em;
            min-width: 1.5em;
            height: 1.5em;
            margin: 0 .625em;
            border-radius: 50%;
            background-color: #f27474;
            color: #fff;
            font-weight: 600;
            line-height: 1.5em;
            text-align: center;
            content: '!';
            zoom: normal
        }

        @supports (-ms-accelerator:true) {
            .swal2-range input {
                width: 100% !important
            }

            .swal2-range output {
                display: none
            }
        }

        @media all and (-ms-high-contrast:none),
        (-ms-high-contrast:active) {
            .swal2-range input {
                width: 100% !important
            }

            .swal2-range output {
                display: none
            }
        }

        @-moz-document url-prefix() {
            .swal2-close:focus {
                outline: 2px solid rgba(50, 100, 150, .4)
            }
        }

        .swal2-icon {
            position: relative;
            justify-content: center;
            width: 5em;
            height: 5em;
            margin: 1.25em auto 1.875em;
            border: .25em solid transparent;
            border-radius: 50%;
            line-height: 5em;
            cursor: default;
            box-sizing: content-box;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            zoom: normal
        }

        .swal2-icon-text {
            font-size: 3.75em
        }

        .swal2-icon.swal2-error {
            border-color: #f27474
        }

        .swal2-icon.swal2-error .swal2-x-mark {
            position: relative;
            flex-grow: 1
        }

        .swal2-icon.swal2-error [class^=swal2-x-mark-line] {
            display: block;
            position: absolute;
            top: 2.3125em;
            width: 2.9375em;
            height: .3125em;
            border-radius: .125em;
            background-color: #f27474
        }

        .swal2-icon.swal2-error [class^=swal2-x-mark-line][class$=left] {
            left: 1.0625em;
            -webkit-transform: rotate(45deg);
            transform: rotate(45deg)
        }

        .swal2-icon.swal2-error [class^=swal2-x-mark-line][class$=right] {
            right: 1em;
            -webkit-transform: rotate(-45deg);
            transform: rotate(-45deg)
        }

        .swal2-icon.swal2-warning {
            border-color: #facea8;
            color: #f8bb86
        }

        .swal2-icon.swal2-info {
            border-color: #9de0f6;
            color: #3fc3ee
        }

        .swal2-icon.swal2-question {
            border-color: #c9dae1;
            color: #87adbd
        }

        .swal2-icon.swal2-success {
            border-color: #a5dc86
        }

        .swal2-icon.swal2-success [class^=swal2-success-circular-line] {
            position: absolute;
            width: 3.75em;
            height: 7.5em;
            -webkit-transform: rotate(45deg);
            transform: rotate(45deg);
            border-radius: 50%
        }

        .swal2-icon.swal2-success [class^=swal2-success-circular-line][class$=left] {
            top: -.4375em;
            left: -2.0635em;
            -webkit-transform: rotate(-45deg);
            transform: rotate(-45deg);
            -webkit-transform-origin: 3.75em 3.75em;
            transform-origin: 3.75em 3.75em;
            border-radius: 7.5em 0 0 7.5em
        }

        .swal2-icon.swal2-success [class^=swal2-success-circular-line][class$=right] {
            top: -.6875em;
            left: 1.875em;
            -webkit-transform: rotate(-45deg);
            transform: rotate(-45deg);
            -webkit-transform-origin: 0 3.75em;
            transform-origin: 0 3.75em;
            border-radius: 0 7.5em 7.5em 0
        }

        .swal2-icon.swal2-success .swal2-success-ring {
            position: absolute;
            top: -.25em;
            left: -.25em;
            width: 100%;
            height: 100%;
            border: .25em solid rgba(165, 220, 134, .3);
            border-radius: 50%;
            z-index: 2;
            box-sizing: content-box
        }

        .swal2-icon.swal2-success .swal2-success-fix {
            position: absolute;
            top: .5em;
            left: 1.625em;
            width: .4375em;
            height: 5.625em;
            -webkit-transform: rotate(-45deg);
            transform: rotate(-45deg);
            z-index: 1
        }

        .swal2-icon.swal2-success [class^=swal2-success-line] {
            display: block;
            position: absolute;
            height: .3125em;
            border-radius: .125em;
            background-color: #a5dc86;
            z-index: 2
        }

        .swal2-icon.swal2-success [class^=swal2-success-line][class$=tip] {
            top: 2.875em;
            left: .875em;
            width: 1.5625em;
            -webkit-transform: rotate(45deg);
            transform: rotate(45deg)
        }

        .swal2-icon.swal2-success [class^=swal2-success-line][class$=long] {
            top: 2.375em;
            right: .5em;
            width: 2.9375em;
            -webkit-transform: rotate(-45deg);
            transform: rotate(-45deg)
        }

        .swal2-progresssteps {
            align-items: center;
            margin: 0 0 1.25em;
            padding: 0;
            font-weight: 600
        }

        .swal2-progresssteps li {
            display: inline-block;
            position: relative
        }

        .swal2-progresssteps .swal2-progresscircle {
            width: 2em;
            height: 2em;
            border-radius: 2em;
            background: #3085d6;
            color: #fff;
            line-height: 2em;
            text-align: center;
            z-index: 20
        }

        .swal2-progresssteps .swal2-progresscircle:first-child {
            margin-left: 0
        }

        .swal2-progresssteps .swal2-progresscircle:last-child {
            margin-right: 0
        }

        .swal2-progresssteps .swal2-progresscircle.swal2-activeprogressstep {
            background: #3085d6
        }

        .swal2-progresssteps .swal2-progresscircle.swal2-activeprogressstep~.swal2-progresscircle {
            background: #add8e6
        }

        .swal2-progresssteps .swal2-progresscircle.swal2-activeprogressstep~.swal2-progressline {
            background: #add8e6
        }

        .swal2-progresssteps .swal2-progressline {
            width: 2.5em;
            height: .4em;
            margin: 0 -1px;
            background: #3085d6;
            z-index: 10
        }

        [class^=swal2] {
            -webkit-tap-highlight-color: transparent
        }

        .swal2-show {
            -webkit-animation: swal2-show .3s;
            animation: swal2-show .3s
        }

        .swal2-show.swal2-noanimation {
            -webkit-animation: none;
            animation: none
        }

        .swal2-hide {
            -webkit-animation: swal2-hide .15s forwards;
            animation: swal2-hide .15s forwards
        }

        .swal2-hide.swal2-noanimation {
            -webkit-animation: none;
            animation: none
        }

        [dir=rtl] .swal2-close {
            right: auto;
            left: 0
        }

        .swal2-animate-success-icon .swal2-success-line-tip {
            -webkit-animation: swal2-animate-success-line-tip .75s;
            animation: swal2-animate-success-line-tip .75s
        }

        .swal2-animate-success-icon .swal2-success-line-long {
            -webkit-animation: swal2-animate-success-line-long .75s;
            animation: swal2-animate-success-line-long .75s
        }

        .swal2-animate-success-icon .swal2-success-circular-line-right {
            -webkit-animation: swal2-rotate-success-circular-line 4.25s ease-in;
            animation: swal2-rotate-success-circular-line 4.25s ease-in
        }

        .swal2-animate-error-icon {
            -webkit-animation: swal2-animate-error-icon .5s;
            animation: swal2-animate-error-icon .5s
        }

        .swal2-animate-error-icon .swal2-x-mark {
            -webkit-animation: swal2-animate-error-x-mark .5s;
            animation: swal2-animate-error-x-mark .5s
        }

        @-webkit-keyframes swal2-rotate-loading {
            0% {
                -webkit-transform: rotate(0);
                transform: rotate(0)
            }

            100% {
                -webkit-transform: rotate(360deg);
                transform: rotate(360deg)
            }
        }

        @keyframes swal2-rotate-loading {
            0% {
                -webkit-transform: rotate(0);
                transform: rotate(0)
            }

            100% {
                -webkit-transform: rotate(360deg);
                transform: rotate(360deg)
            }
        }
    </style>
</head>

<body class="dashboard-analytics">

    <!-- BEGIN LOADER -->

    <!--  END LOADER -->

    <!--  BEGIN NAVBAR  -->
      <?php include("../includes/navbar.php")  ?>
    <!--  END NAVBAR  -->

    <!--  BEGIN MAIN CONTAINER  -->
    <div class="main-container" id="container">

        <div class="overlay"></div>
        <div class="search-overlay"></div>

        <!--  BEGIN SIDEBAR  -->
        <?php include("../includes/sidebar.php")  ?>
        <!--  END SIDEBAR  -->


        <!--  BEGIN CONTENT AREA  -->
        <div id="content" class="main-content">
            <div class="layout-px-spacing" data-select2-id="307">
                <div class="row layout-top-spacing" data-select2-id="306">

                    <div id="basic" class="col-lg-12 layout-spacing" data-select2-id="basic">
                        <div class="statbox widget box box-shadow" data-select2-id="305">
                            <div class="widget-header">
                                <div class="row">
                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                        <h4>Transfer</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="widget-content widget-content-area">

                                <div class="row">
                                    <div class="col-lg-10 col-12 mx-auto" >
                                        <form method="post" >
                                            <div class="row">
                                                <div class="col-md-6" >
                                                    <div class="form-group mb-4" data-select2-id="30">
                                                        <label for="">Users</label>

                                                        <select name="user_id" class="form-control basic select2-hidden-accessible" required="" aria-hidden="true">
                                                            <option value="">Select User</option>
                                                            <?php
                                                            // // ...existing code...
                                                                $result = mysqli_query($connection, "SELECT * FROM users ORDER BY id DESC");
                                                                if ($result && mysqli_num_rows($result) > 0) {
                                                                    while ($row = mysqli_fetch_assoc($result)) {
                                                                        echo '<option value="' . $row['id'] . '">' . $row['email'] . '</option>';
                                                                    }
                                                                } elseif ($result) {
                                                                    echo '<option value="">No users found</option>';
                                                                } else {
                                                                    echo '<option value="">Error loading users</option>';
                                                                }
                                                            ?>


                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="">Amount</label>
                                                        <div class="input-group ">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text" id="basic-addon1"><svg
                                                                        xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="feather feather-dollar-sign">
                                                                        <line x1="12" y1="1" x2="12" y2="23"></line>
                                                                        <path
                                                                            d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6">
                                                                        </path>
                                                                    </svg></span>
                                                            </div>
                                                            <input type="number" class="form-control" name="amount"
                                                                value="" placeholder="Amount" aria-label="notification"
                                                                aria-describedby="basic-addon1" required=""
                                                                autocomplete="off">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="">Beneficiary Account Name</label>
                                                        <div class="input-group ">
                                                            <input type="text" class="form-control" name="acct_name"
                                                                placeholder="Beneficiary Account Name"
                                                                aria-label="notification"
                                                                aria-describedby="basic-addon1" value="" required=""
                                                                autocomplete="off">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="">Bank Name</label>
                                                        <div class="input-group ">
                                                            <input type="text" class="form-control" name="bank_name"
                                                                placeholder="Bank Name" value=""
                                                                aria-label="notification"
                                                                aria-describedby="basic-addon1" required=""
                                                                autocomplete="off">
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>

                                            <div class="row">

                                                <div class="col-md-6">
                                                    <div class="form-group mb-4 mt-4">
                                                        <label for="">Beneficiary Account No</label>
                                                        <div class="input-group ">
                                                            <input type="number" class="form-control" name="acct_number"
                                                                placeholder="Beneficiary Account Name"
                                                                aria-label="notification"
                                                                aria-describedby="basic-addon1" value="" required=""
                                                                autocomplete="off">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group mb-4 mt-4">
                                                        <label for="">Swift Code</label>
                                                        <div class="input-group ">
                                                            <input type="text" class="form-control" name="acct_swift"
                                                                placeholder="Swift Code" value=""
                                                                aria-label="notification"
                                                                aria-describedby="basic-addon1" required=""
                                                                autocomplete="off">
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>



                                            <div class="row">
                                                <div class="col-md-6">

                                                    <div class="form-group mb-4 mt-4">
                                                        <label for="">Select Country</label>
                                                        <div class="input-group">
                                                            <select name="acct_country"
                                                                class="form-control basic select2-hidden-accessible"
                                                                required="" 
                                                                aria-hidden="true">
                                                                <option data-select2-id="6">Select Country</option>
                                                                <option value="Afganistan" data-select2-id="38">
                                                                    Afghanistan</option>
                                                                <option value="Albania" data-select2-id="39">Albania
                                                                </option>
                                                                <option value="Algeria" data-select2-id="40">Algeria
                                                                </option>
                                                                <option value="American Samoa" data-select2-id="41">
                                                                    American Samoa</option>
                                                                <option value="Andorra" data-select2-id="42">Andorra
                                                                </option>
                                                                <option value="Angola" data-select2-id="43">Angola
                                                                </option>
                                                                <option value="Anguilla" data-select2-id="44">Anguilla
                                                                </option>
                                                                <option value="Antigua &amp; Barbuda"
                                                                    data-select2-id="45">Antigua &amp; Barbuda</option>
                                                                <option value="Argentina" data-select2-id="46">Argentina
                                                                </option>
                                                                <option value="Armenia" data-select2-id="47">Armenia
                                                                </option>
                                                                <option value="Aruba" data-select2-id="48">Aruba
                                                                </option>
                                                                <option value="Australia" data-select2-id="49">Australia
                                                                </option>
                                                                <option value="Austria" data-select2-id="50">Austria
                                                                </option>
                                                                <option value="Azerbaijan" data-select2-id="51">
                                                                    Azerbaijan</option>
                                                                <option value="Bahamas" data-select2-id="52">Bahamas
                                                                </option>
                                                                <option value="Bahrain" data-select2-id="53">Bahrain
                                                                </option>
                                                                <option value="Bangladesh" data-select2-id="54">
                                                                    Bangladesh</option>
                                                                <option value="Barbados" data-select2-id="55">Barbados
                                                                </option>
                                                                <option value="Belarus" data-select2-id="56">Belarus
                                                                </option>
                                                                <option value="Belgium" data-select2-id="57">Belgium
                                                                </option>
                                                                <option value="Belize" data-select2-id="58">Belize
                                                                </option>
                                                                <option value="Benin" data-select2-id="59">Benin
                                                                </option>
                                                                <option value="Bermuda" data-select2-id="60">Bermuda
                                                                </option>
                                                                <option value="Bhutan" data-select2-id="61">Bhutan
                                                                </option>
                                                                <option value="Bolivia" data-select2-id="62">Bolivia
                                                                </option>
                                                                <option value="Bonaire" data-select2-id="63">Bonaire
                                                                </option>
                                                                <option value="Bosnia &amp; Herzegovina"
                                                                    data-select2-id="64">Bosnia &amp; Herzegovina
                                                                </option>
                                                                <option value="Botswana" data-select2-id="65">Botswana
                                                                </option>
                                                                <option value="Brazil" data-select2-id="66">Brazil
                                                                </option>
                                                                <option value="British Indian Ocean Ter"
                                                                    data-select2-id="67">British Indian Ocean Ter
                                                                </option>
                                                                <option value="Brunei" data-select2-id="68">Brunei
                                                                </option>
                                                                <option value="Bulgaria" data-select2-id="69">Bulgaria
                                                                </option>
                                                                <option value="Burkina Faso" data-select2-id="70">
                                                                    Burkina Faso</option>
                                                                <option value="Burundi" data-select2-id="71">Burundi
                                                                </option>
                                                                <option value="Cambodia" data-select2-id="72">Cambodia
                                                                </option>
                                                                <option value="Cameroon" data-select2-id="73">Cameroon
                                                                </option>
                                                                <option value="Canada" data-select2-id="74">Canada
                                                                </option>
                                                                <option value="Canary Islands" data-select2-id="75">
                                                                    Canary Islands</option>
                                                                <option value="Cape Verde" data-select2-id="76">Cape
                                                                    Verde</option>
                                                                <option value="Cayman Islands" data-select2-id="77">
                                                                    Cayman Islands</option>
                                                                <option value="Central African Republic"
                                                                    data-select2-id="78">Central African Republic
                                                                </option>
                                                                <option value="Chad" data-select2-id="79">Chad</option>
                                                                <option value="Channel Islands" data-select2-id="80">
                                                                    Channel Islands</option>
                                                                <option value="Chile" data-select2-id="81">Chile
                                                                </option>
                                                                <option value="China" data-select2-id="82">China
                                                                </option>
                                                                <option value="Christmas Island" data-select2-id="83">
                                                                    Christmas Island</option>
                                                                <option value="Cocos Island" data-select2-id="84">Cocos
                                                                    Island</option>
                                                                <option value="Colombia" data-select2-id="85">Colombia
                                                                </option>
                                                                <option value="Comoros" data-select2-id="86">Comoros
                                                                </option>
                                                                <option value="Congo" data-select2-id="87">Congo
                                                                </option>
                                                                <option value="Cook Islands" data-select2-id="88">Cook
                                                                    Islands</option>
                                                                <option value="Costa Rica" data-select2-id="89">Costa
                                                                    Rica</option>
                                                                <option value="Cote DIvoire" data-select2-id="90">Cote
                                                                    DIvoire</option>
                                                                <option value="Croatia" data-select2-id="91">Croatia
                                                                </option>
                                                                <option value="Cuba" data-select2-id="92">Cuba</option>
                                                                <option value="Curaco" data-select2-id="93">Curacao
                                                                </option>
                                                                <option value="Cyprus" data-select2-id="94">Cyprus
                                                                </option>
                                                                <option value="Czech Republic" data-select2-id="95">
                                                                    Czech Republic</option>
                                                                <option value="Denmark" data-select2-id="96">Denmark
                                                                </option>
                                                                <option value="Djibouti" data-select2-id="97">Djibouti
                                                                </option>
                                                                <option value="Dominica" data-select2-id="98">Dominica
                                                                </option>
                                                                <option value="Dominican Republic" data-select2-id="99">
                                                                    Dominican Republic</option>
                                                                <option value="East Timor" data-select2-id="100">East
                                                                    Timor</option>
                                                                <option value="Ecuador" data-select2-id="101">Ecuador
                                                                </option>
                                                                <option value="Egypt" data-select2-id="102">Egypt
                                                                </option>
                                                                <option value="El Salvador" data-select2-id="103">El
                                                                    Salvador</option>
                                                                <option value="Equatorial Guinea" data-select2-id="104">
                                                                    Equatorial Guinea</option>
                                                                <option value="Eritrea" data-select2-id="105">Eritrea
                                                                </option>
                                                                <option value="Estonia" data-select2-id="106">Estonia
                                                                </option>
                                                                <option value="Ethiopia" data-select2-id="107">Ethiopia
                                                                </option>
                                                                <option value="Falkland Islands" data-select2-id="108">
                                                                    Falkland Islands</option>
                                                                <option value="Faroe Islands" data-select2-id="109">
                                                                    Faroe Islands</option>
                                                                <option value="Fiji" data-select2-id="110">Fiji</option>
                                                                <option value="Finland" data-select2-id="111">Finland
                                                                </option>
                                                                <option value="France" data-select2-id="112">France
                                                                </option>
                                                                <option value="French Guiana" data-select2-id="113">
                                                                    French Guiana</option>
                                                                <option value="French Polynesia" data-select2-id="114">
                                                                    French Polynesia</option>
                                                                <option value="French Southern Ter"
                                                                    data-select2-id="115">French Southern Ter</option>
                                                                <option value="Gabon" data-select2-id="116">Gabon
                                                                </option>
                                                                <option value="Gambia" data-select2-id="117">Gambia
                                                                </option>
                                                                <option value="Georgia" data-select2-id="118">Georgia
                                                                </option>
                                                                <option value="Germany" data-select2-id="119">Germany
                                                                </option>
                                                                <option value="Ghana" data-select2-id="120">Ghana
                                                                </option>
                                                                <option value="Gibraltar" data-select2-id="121">
                                                                    Gibraltar</option>
                                                                <option value="Great Britain" data-select2-id="122">
                                                                    Great Britain</option>
                                                                <option value="Greece" data-select2-id="123">Greece
                                                                </option>
                                                                <option value="Greenland" data-select2-id="124">
                                                                    Greenland</option>
                                                                <option value="Grenada" data-select2-id="125">Grenada
                                                                </option>
                                                                <option value="Guadeloupe" data-select2-id="126">
                                                                    Guadeloupe</option>
                                                                <option value="Guam" data-select2-id="127">Guam</option>
                                                                <option value="Guatemala" data-select2-id="128">
                                                                    Guatemala</option>
                                                                <option value="Guinea" data-select2-id="129">Guinea
                                                                </option>
                                                                <option value="Guyana" data-select2-id="130">Guyana
                                                                </option>
                                                                <option value="Haiti" data-select2-id="131">Haiti
                                                                </option>
                                                                <option value="Hawaii" data-select2-id="132">Hawaii
                                                                </option>
                                                                <option value="Honduras" data-select2-id="133">Honduras
                                                                </option>
                                                                <option value="Hong Kong" data-select2-id="134">Hong
                                                                    Kong</option>
                                                                <option value="Hungary" data-select2-id="135">Hungary
                                                                </option>
                                                                <option value="Iceland" data-select2-id="136">Iceland
                                                                </option>
                                                                <option value="Indonesia" data-select2-id="137">
                                                                    Indonesia</option>
                                                                <option value="India" data-select2-id="138">India
                                                                </option>
                                                                <option value="Iran" data-select2-id="139">Iran</option>
                                                                <option value="Iraq" data-select2-id="140">Iraq</option>
                                                                <option value="Ireland" data-select2-id="141">Ireland
                                                                </option>
                                                                <option value="Isle of Man" data-select2-id="142">Isle
                                                                    of Man</option>
                                                                <option value="Israel" data-select2-id="143">Israel
                                                                </option>
                                                                <option value="Italy" data-select2-id="144">Italy
                                                                </option>
                                                                <option value="Jamaica" data-select2-id="145">Jamaica
                                                                </option>
                                                                <option value="Japan" data-select2-id="146">Japan
                                                                </option>
                                                                <option value="Jordan" data-select2-id="147">Jordan
                                                                </option>
                                                                <option value="Kazakhstan" data-select2-id="148">
                                                                    Kazakhstan</option>
                                                                <option value="Kenya" data-select2-id="149">Kenya
                                                                </option>
                                                                <option value="Kiribati" data-select2-id="150">Kiribati
                                                                </option>
                                                                <option value="Korea North" data-select2-id="151">Korea
                                                                    North</option>
                                                                <option value="Korea Sout" data-select2-id="152">Korea
                                                                    South</option>
                                                                <option value="Kuwait" data-select2-id="153">Kuwait
                                                                </option>
                                                                <option value="Kyrgyzstan" data-select2-id="154">
                                                                    Kyrgyzstan</option>
                                                                <option value="Laos" data-select2-id="155">Laos</option>
                                                                <option value="Latvia" data-select2-id="156">Latvia
                                                                </option>
                                                                <option value="Lebanon" data-select2-id="157">Lebanon
                                                                </option>
                                                                <option value="Lesotho" data-select2-id="158">Lesotho
                                                                </option>
                                                                <option value="Liberia" data-select2-id="159">Liberia
                                                                </option>
                                                                <option value="Libya" data-select2-id="160">Libya
                                                                </option>
                                                                <option value="Liechtenstein" data-select2-id="161">
                                                                    Liechtenstein</option>
                                                                <option value="Lithuania" data-select2-id="162">
                                                                    Lithuania</option>
                                                                <option value="Luxembourg" data-select2-id="163">
                                                                    Luxembourg</option>
                                                                <option value="Macau" data-select2-id="164">Macau
                                                                </option>
                                                                <option value="Macedonia" data-select2-id="165">
                                                                    Macedonia</option>
                                                                <option value="Madagascar" data-select2-id="166">
                                                                    Madagascar</option>
                                                                <option value="Malaysia" data-select2-id="167">Malaysia
                                                                </option>
                                                                <option value="Malawi" data-select2-id="168">Malawi
                                                                </option>
                                                                <option value="Maldives" data-select2-id="169">Maldives
                                                                </option>
                                                                <option value="Mali" data-select2-id="170">Mali</option>
                                                                <option value="Malta" data-select2-id="171">Malta
                                                                </option>
                                                                <option value="Marshall Islands" data-select2-id="172">
                                                                    Marshall Islands</option>
                                                                <option value="Martinique" data-select2-id="173">
                                                                    Martinique</option>
                                                                <option value="Mauritania" data-select2-id="174">
                                                                    Mauritania</option>
                                                                <option value="Mauritius" data-select2-id="175">
                                                                    Mauritius</option>
                                                                <option value="Mayotte" data-select2-id="176">Mayotte
                                                                </option>
                                                                <option value="Mexico" data-select2-id="177">Mexico
                                                                </option>
                                                                <option value="Midway Islands" data-select2-id="178">
                                                                    Midway Islands</option>
                                                                <option value="Moldova" data-select2-id="179">Moldova
                                                                </option>
                                                                <option value="Monaco" data-select2-id="180">Monaco
                                                                </option>
                                                                <option value="Mongolia" data-select2-id="181">Mongolia
                                                                </option>
                                                                <option value="Montserrat" data-select2-id="182">
                                                                    Montserrat</option>
                                                                <option value="Morocco" data-select2-id="183">Morocco
                                                                </option>
                                                                <option value="Mozambique" data-select2-id="184">
                                                                    Mozambique</option>
                                                                <option value="Myanmar" data-select2-id="185">Myanmar
                                                                </option>
                                                                <option value="Nambia" data-select2-id="186">Nambia
                                                                </option>
                                                                <option value="Nauru" data-select2-id="187">Nauru
                                                                </option>
                                                                <option value="Nepal" data-select2-id="188">Nepal
                                                                </option>
                                                                <option value="Netherland Antilles"
                                                                    data-select2-id="189">Netherland Antilles</option>
                                                                <option value="Netherlands" data-select2-id="190">
                                                                    Netherlands (Holland, Europe)</option>
                                                                <option value="Nevis" data-select2-id="191">Nevis
                                                                </option>
                                                                <option value="New Caledonia" data-select2-id="192">New
                                                                    Caledonia</option>
                                                                <option value="New Zealand" data-select2-id="193">New
                                                                    Zealand</option>
                                                                <option value="Nicaragua" data-select2-id="194">
                                                                    Nicaragua</option>
                                                                <option value="Niger" data-select2-id="195">Niger
                                                                </option>
                                                                <option value="Nigeria" data-select2-id="196">Nigeria
                                                                </option>
                                                                <option value="Niue" data-select2-id="197">Niue</option>
                                                                <option value="Norfolk Island" data-select2-id="198">
                                                                    Norfolk Island</option>
                                                                <option value="Norway" data-select2-id="199">Norway
                                                                </option>
                                                                <option value="Oman" data-select2-id="200">Oman</option>
                                                                <option value="Pakistan" data-select2-id="201">Pakistan
                                                                </option>
                                                                <option value="Palau Island" data-select2-id="202">Palau
                                                                    Island</option>
                                                                <option value="Palestine" data-select2-id="203">
                                                                    Palestine</option>
                                                                <option value="Panama" data-select2-id="204">Panama
                                                                </option>
                                                                <option value="Papua New Guinea" data-select2-id="205">
                                                                    Papua New Guinea</option>
                                                                <option value="Paraguay" data-select2-id="206">Paraguay
                                                                </option>
                                                                <option value="Peru" data-select2-id="207">Peru</option>
                                                                <option value="Phillipines" data-select2-id="208">
                                                                    Philippines</option>
                                                                <option value="Pitcairn Island" data-select2-id="209">
                                                                    Pitcairn Island</option>
                                                                <option value="Poland" data-select2-id="210">Poland
                                                                </option>
                                                                <option value="Portugal" data-select2-id="211">Portugal
                                                                </option>
                                                                <option value="Puerto Rico" data-select2-id="212">Puerto
                                                                    Rico</option>
                                                                <option value="Qatar" data-select2-id="213">Qatar
                                                                </option>
                                                                <option value="Republic of Montenegro"
                                                                    data-select2-id="214">Republic of Montenegro
                                                                </option>
                                                                <option value="Republic of Serbia"
                                                                    data-select2-id="215">Republic of Serbia</option>
                                                                <option value="Reunion" data-select2-id="216">Reunion
                                                                </option>
                                                                <option value="Romania" data-select2-id="217">Romania
                                                                </option>
                                                                <option value="Russia" data-select2-id="218">Russia
                                                                </option>
                                                                <option value="Rwanda" data-select2-id="219">Rwanda
                                                                </option>
                                                                <option value="St Barthelemy" data-select2-id="220">St
                                                                    Barthelemy</option>
                                                                <option value="St Eustatius" data-select2-id="221">St
                                                                    Eustatius</option>
                                                                <option value="St Helena" data-select2-id="222">St
                                                                    Helena</option>
                                                                <option value="St Kitts-Nevis" data-select2-id="223">St
                                                                    Kitts-Nevis</option>
                                                                <option value="St Lucia" data-select2-id="224">St Lucia
                                                                </option>
                                                                <option value="St Maarten" data-select2-id="225">St
                                                                    Maarten</option>
                                                                <option value="St Pierre &amp; Miquelon"
                                                                    data-select2-id="226">St Pierre &amp; Miquelon
                                                                </option>
                                                                <option value="St Vincent &amp; Grenadines"
                                                                    data-select2-id="227">St Vincent &amp; Grenadines
                                                                </option>
                                                                <option value="Saipan" data-select2-id="228">Saipan
                                                                </option>
                                                                <option value="Samoa" data-select2-id="229">Samoa
                                                                </option>
                                                                <option value="Samoa American" data-select2-id="230">
                                                                    Samoa American</option>
                                                                <option value="San Marino" data-select2-id="231">San
                                                                    Marino</option>
                                                                <option value="Sao Tome &amp; Principe"
                                                                    data-select2-id="232">Sao Tome &amp; Principe
                                                                </option>
                                                                <option value="Saudi Arabia" data-select2-id="233">Saudi
                                                                    Arabia</option>
                                                                <option value="Senegal" data-select2-id="234">Senegal
                                                                </option>
                                                                <option value="Seychelles" data-select2-id="235">
                                                                    Seychelles</option>
                                                                <option value="Sierra Leone" data-select2-id="236">
                                                                    Sierra Leone</option>
                                                                <option value="Singapore" data-select2-id="237">
                                                                    Singapore</option>
                                                                <option value="Slovakia" data-select2-id="238">Slovakia
                                                                </option>
                                                                <option value="Slovenia" data-select2-id="239">Slovenia
                                                                </option>
                                                                <option value="Solomon Islands" data-select2-id="240">
                                                                    Solomon Islands</option>
                                                                <option value="Somalia" data-select2-id="241">Somalia
                                                                </option>
                                                                <option value="South Africa" data-select2-id="242">South
                                                                    Africa</option>
                                                                <option value="Spain" data-select2-id="243">Spain
                                                                </option>
                                                                <option value="Sri Lanka" data-select2-id="244">Sri
                                                                    Lanka</option>
                                                                <option value="Sudan" data-select2-id="245">Sudan
                                                                </option>
                                                                <option value="Suriname" data-select2-id="246">Suriname
                                                                </option>
                                                                <option value="Swaziland" data-select2-id="247">
                                                                    Swaziland</option>
                                                                <option value="Sweden" data-select2-id="248">Sweden
                                                                </option>
                                                                <option value="Switzerland" data-select2-id="249">
                                                                    Switzerland</option>
                                                                <option value="Syria" data-select2-id="250">Syria
                                                                </option>
                                                                <option value="Tahiti" data-select2-id="251">Tahiti
                                                                </option>
                                                                <option value="Taiwan" data-select2-id="252">Taiwan
                                                                </option>
                                                                <option value="Tajikistan" data-select2-id="253">
                                                                    Tajikistan</option>
                                                                <option value="Tanzania" data-select2-id="254">Tanzania
                                                                </option>
                                                                <option value="Thailand" data-select2-id="255">Thailand
                                                                </option>
                                                                <option value="Togo" data-select2-id="256">Togo</option>
                                                                <option value="Tokelau" data-select2-id="257">Tokelau
                                                                </option>
                                                                <option value="Tonga" data-select2-id="258">Tonga
                                                                </option>
                                                                <option value="Trinidad &amp; Tobago"
                                                                    data-select2-id="259">Trinidad &amp; Tobago</option>
                                                                <option value="Tunisia" data-select2-id="260">Tunisia
                                                                </option>
                                                                <option value="Turkey" data-select2-id="261">Turkey
                                                                </option>
                                                                <option value="Turkmenistan" data-select2-id="262">
                                                                    Turkmenistan</option>
                                                                <option value="Turks &amp; Caicos Is"
                                                                    data-select2-id="263">Turks &amp; Caicos Is</option>
                                                                <option value="Tuvalu" data-select2-id="264">Tuvalu
                                                                </option>
                                                                <option value="Uganda" data-select2-id="265">Uganda
                                                                </option>
                                                                <option value="United Kingdom" data-select2-id="266">
                                                                    United Kingdom</option>
                                                                <option value="Ukraine" data-select2-id="267">Ukraine
                                                                </option>
                                                                <option value="United Arab Erimates"
                                                                    data-select2-id="268">United Arab Emirates</option>
                                                                <option value="United States of America"
                                                                    data-select2-id="269">United States of America
                                                                </option>
                                                                <option value="Uraguay" data-select2-id="270">Uruguay
                                                                </option>
                                                                <option value="Uzbekistan" data-select2-id="271">
                                                                    Uzbekistan</option>
                                                                <option value="Vanuatu" data-select2-id="272">Vanuatu
                                                                </option>
                                                                <option value="Vatican City State"
                                                                    data-select2-id="273">Vatican City State</option>
                                                                <option value="Venezuela" data-select2-id="274">
                                                                    Venezuela</option>
                                                                <option value="Vietnam" data-select2-id="275">Vietnam
                                                                </option>
                                                                <option value="Virgin Islands (Brit)"
                                                                    data-select2-id="276">Virgin Islands (Brit)</option>
                                                                <option value="Virgin Islands (USA)"
                                                                    data-select2-id="277">Virgin Islands (USA)</option>
                                                                <option value="Wake Island" data-select2-id="278">Wake
                                                                    Island</option>
                                                                <option value="Wallis &amp; Futana Is"
                                                                    data-select2-id="279">Wallis &amp; Futana Is
                                                                </option>
                                                                <option value="Yemen" data-select2-id="280">Yemen
                                                                </option>
                                                                <option value="Zaire" data-select2-id="281">Zaire
                                                                </option>
                                                                <option value="Zambia" data-select2-id="282">Zambia
                                                                </option>
                                                                <option value="Zimbabwe" data-select2-id="283">Zimbabwe
                                                                </option>

                                                            </select>


                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group mb-4 mt-4">
                                                        <label for="">Select Account Type</label>
                                                        <div class="input-group">
                                                            <select name="acct_type"
                                                                class="form-control basic select2-hidden-accessible"
                                                                required="" data-select2-id="7" tabindex="-1"
                                                                aria-hidden="true">
                                                                <option value="" data-select2-id="9">Select Account Type
                                                                </option>
                                                                <option value="Savings" data-select2-id="285">Savings
                                                                    Account</option>
                                                                <option value="Current" data-select2-id="286">Current
                                                                    Account</option>
                                                                <option value="Checking" data-select2-id="287">Checking
                                                                    Account</option>
                                                                <option value="Fixed Deposit" data-select2-id="288">
                                                                    Fixed Deposit</option>
                                                                <option value="Non Resident" data-select2-id="289">Non
                                                                    Resident Account</option>
                                                                <option value="Online Banking" data-select2-id="290">
                                                                    Online Banking</option>
                                                                <option value="Domicilary Account"
                                                                    data-select2-id="291">Domicilary Account</option>
                                                                <option value="Joint Account" data-select2-id="292">
                                                                    Joint Account</option>
                                                            </select>

                                                        </div>
                                                    </div>

                                                </div>

                                            </div>

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group mb-4 mt-4">
                                                        <label for="">Routing Number</label>
                                                        <div class="input-group ">
                                                            <input type="number" class="form-control"
                                                                name="acct_routing" value=""
                                                                placeholder="Routing Number" aria-label="notification"
                                                                aria-describedby="basic-addon1" required=""
                                                                autocomplete="off">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group mb-4 mt-4">
                                                        <label for="">Date</label>
                                                        <input value="" type="date" name="created_at"
                                                            class="form-control" id="" placeholder="date" required=""
                                                            autocomplete="off">
                                                    </div>
                                                </div>

                                            </div>

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group mb-4 mt-4">
                                                        <label for="">Naration/Purpose</label>
                                                        <div class="input-group ">
                                                            <textarea class="form-control mb-4" rows="3"
                                                                id="textarea-copy" placeholder="Fund Description"
                                                                name="acct_remarks"></textarea>
                                                        </div>
                                                    </div>
                                                </div>


                                            </div>


                                            <div class="row">
                                                <div class="col-md-12 text-center">
                                                    <button class="btn btn-primary mb-2 mr-2"
                                                        name="transfer">Transfer</button>
                                                </div>
                                            </div>
                                        </form>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>


            </div>

            <div class="footer-wrapper">
                <div class="footer-section f-section-1">
                    <p class="">Copyright © 2022 <a target="_blank" href="/"><?php echo  $sitename ?></a>, All rights
                        reserved.</p>
                </div>
                <div class="footer-section f-section-2">
                    <p class=""><?php echo  $sitename ?> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart">
                            <path
                                d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z">
                            </path>
                        </svg></p>
                </div>
            </div>
        </div>
        <!--  END CONTENT AREA  -->


    </div>
    <!-- END MAIN CONTAINER -->

    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="../source/bootstrap/js/popper.min.js"></script>
    <script src="../source/bootstrap/js/bootstrap.min.js"></script>
    <script src="../source/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="../source/assets/js/app.js"></script>
    <script>
        $(document).ready(function () {
            App.init();
        });
    </script>
    <script src="../source/assets/js/custom.js"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
    <script src="../source/plugins/apex/apexcharts.min.js"></script>
    <script src="../source/assets/js/dashboard/dash_1.js"></script>
    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->

    <script src="../source/plugins/dropify/dropify.min.js"></script>
    <script src="../source/plugins/blockui/jquery.blockUI.min.js"></script>
    <!-- <script src="plugins/tagInput/tags-input.js"></script> -->
    <script src="../source/assets/js/users/account-settings.js"></script>

    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    <script src="../source/plugins/highlight/highlight.pack.js"></script>
    <script src="../source/plugins/table/datatable/datatables.js"></script>
    <script src="../source/plugins/select2/select2.min.js"></script>
    <script src="../source/plugins/select2/custom-select2.js"></script>

    <script src="../source/plugins/sweetalerts/sweetalert2.min.js"></script>
    <script src="../source/plugins/sweetalerts/custom-sweetalert.js"></script>




    <!-- END PAGE LEVEL SCRIPTS -->


    <svg id="SvgjsSvg1001" width="2" height="0" xmlns="http://www.w3.org/2000/svg" version="1.1"
        xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs"
        style="overflow: hidden; top: -100%; left: -100%; position: absolute; opacity: 0;">
        <defs id="SvgjsDefs1002"></defs>
        <polyline id="SvgjsPolyline1003" points="0,0"></polyline>
        <path id="SvgjsPath1004" d="M0 0 "></path>
    </svg>
</body>

</html>

<?php 
    if (isset($_POST['transfer'])) {
        // Get POST variables safely
        $user_id        = $_POST['user_id'] ?? null;
        $amount         = $_POST['amount'] ?? null;
        $acct_name      = $_POST['acct_name'] ?? null;
        $bank_name      = $_POST['bank_name'] ?? null;
        $acct_number    = $_POST['acct_number'] ?? null;
        $acct_swift     = $_POST['acct_swift'] ?? null;
        $acct_country   = $_POST['acct_country'] ?? null;
        $acct_type      = $_POST['acct_type'] ?? null;
        $acct_routing   = $_POST['acct_routing'] ?? null;
        $created_at     = $_POST['created_at'] ?? date('Y-m-d');
        $acct_remarks   = $_POST['acct_remarks'] ?? null;

        if (!$user_id || !$amount || !$acct_name) {
            echo "<script>toastr.error('Missing required transfer data.');</script>";
            exit;
        }

        // Fetch user from DB
        $statement = $connection->prepare("SELECT * FROM users WHERE id = ?");
        $statement->bind_param("i", $user_id);
        $statement->execute();
        $result = $statement->get_result();

        if ($result->num_rows > 0) {
            $user = $result->fetch_assoc();

            if (floatval($amount) > 0) {
                $amount = floatval($amount);
                $current_balance = isset($user['balance']) ? floatval($user['balance']) : 0.0;
                $balance = $current_balance + $amount;

                // Prepare transfer insert statement
                $update = $connection->prepare(
                    "INSERT INTO `transfer`(
                        `user`, `amount`, `type`, `sender_name`, `description`, 
                        `date`, `time`, `status`, 
                        `receiver_account_number`, `receiver_bank`, `swift_code`, 
                        `routine_number`, `country`,`receiver_account_type`
                    ) VALUES (?, ?, 'credit', ?, ?, ?, ?, 'approved', ?, ?, ?, ?, ?,?)"
                );

                $time = date('H:i:s');

                // Corrected type string with 11 parameters: 1 int, 1 double, 9 strings
                $update->bind_param(
                    "idssssssssss",
                    $user_id,
                    $amount,
                    $acct_name,
                    $acct_remarks,
                    $created_at,
                    $time,
                    $acct_number,
                    $bank_name,
                    $acct_swift,
                    $acct_routing,
                    $acct_country,
                    $acct_type
                );

                if ($update->execute()) {
                    // Update user balance
                    $update_balance = $connection->prepare("UPDATE users SET balance = ? WHERE id = ?");
                    $update_balance->bind_param("di", $balance, $user_id);

                    if ($update_balance->execute()) {
                        echo "<script>toastr.success('Transfer successful!');</script>";
                    } else {
                        echo "<script>toastr.error('Failed to update user balance.');</script>";
                    }
                } else {
                    echo "<script>toastr.error('Failed to record transfer.');</script>";
                }
            } else {
                echo "<script>toastr.error('Invalid amount. Please enter a valid amount.');</script>";
            }
        } else {
            echo "<script>toastr.error('No user found with the provided ID.');</script>";
        }
    }
?>

