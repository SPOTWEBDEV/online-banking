<?php

  echo $_SERVER['DOCUMENT_ROOT'];

    include('../../server/connection.php');
    include("../../server/mailer.php");
    require('/PHPMailer/PHPMailer/PHPMailerAutoload.php');
    include('../../server/authorization/admin/index.php');

?>

<html lang="en">

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

</head>

<body class="dashboard-analytics">

  <!-- BEGIN LOADER -->

  <!--  END LOADER -->

  <!--  BEGIN NAVBAR  -->
  <?php include("../includes/navbar.php")  ?>
  <!--  END NAVBAR  -->

  <!--  BEGIN MAIN CONTAINER  -->
  <div class="main-container sidebar-closed" id="container">

    <div class="overlay"></div>
    <div class="search-overlay"></div>

    <!--  BEGIN SIDEBAR  -->
    <?php include("../includes/sidebar.php")  ?>
    <!--  END SIDEBAR  -->


    <!--  BEGIN CONTENT AREA  -->
    <div id="content" class="main-content">
      <div class="layout-px-spacing">

        <div class="row layout-top-spacing">

          <div id="basic" class="col-lg-12 layout-spacing">
            <div class="statbox widget box box-shadow">
              <div class="widget-header">
                <div class="row">
                  <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                    <h4>Register New Account</h4>
                  </div>
                </div>
              </div>
              <div class="widget-content widget-content-area">

                <div class="row">
                  <div class="col-lg-10 col-12 mx-auto">
                    <form method="post" enctype="multipart/form-data" autocomplete="off">


                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group mb-4">
                            <label for="">First Name</label>
                            <input type="text" value="" name="firstname" class="form-control" id=""
                              placeholder="First Name" required="" autocomplete="off">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group mb-4">
                            <label for="">Last Name</label>
                            <input type="text" value="" name="lastname" class="form-control" id=""
                              placeholder="Last Name" required="" autocomplete="off">
                          </div>
                        </div>
                      </div>

                      <div class="row">

                        <div class="col-md-6">
                          <div class="form-group mb-4">
                            <label for="">Account Balance</label>
                            <input value="" type="text" name="acct_balance" class="form-control" id=""
                              placeholder="Account Balance" required="" autocomplete="off">
                          </div>
                        </div>

                        <div class="col-md-6">
                          <div class="form-group mb-4">
                            <label for="">Social Security Number</label>
                            <input type="text" value="" name="ssn" class="form-control"
                              placeholder="Social Security Number" required="" autocomplete="off">
                          </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group mb-4">
                            <label for="">Account Type</label>
                            <select name="acct_type" class="form-control basic select2-hidden-accessible" required=""
                               aria-hidden="true">
                              <option selected="selected" data-select2-id="3">Select Account Type</option>
                              <option value="Savings" data-select2-id="13">Savings Account</option>
                              <option value="Current" data-select2-id="14">Current Account</option>
                              <option value="Checking" data-select2-id="15">Checking Account</option>
                              <option value="Fixed Deposit" data-select2-id="16">Fixed Deposit</option>
                              <option value="Non Resident" data-select2-id="17">Non Resident Account</option>
                              <option value="Online Banking" data-select2-id="18">Online Banking</option>
                              <option value="Domicilary Account" data-select2-id="19">Domicilary Account</option>
                              <option value="Joint Account" data-select2-id="20">Joint Account</option>
                            </select>

                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group mb-4">
                            <label for="">Account Gender</label>
                            <select name="acct_gender" class="form-control basic select2-hidden-accessible" required=""
                               >
                              <option selected="selected" data-select2-id="6">Select Gender</option>
                              <option value="female" data-select2-id="22">Female</option>
                              <option value="male" data-select2-id="23">Male</option>
                            </select>
                          </div>
                        </div>
                      </div>

                      <div class="row">

                        <div class="col-md-6">
                          <div class="form-group mb-4">
                            <label for="">Address</label>
                            <input value="" name="acct_address" type="text" class="form-control" id=""
                              placeholder="Address" required="" autocomplete="off">
                            <input value="single" name="marital_status" type="text" class="form-control" id=""
                              placeholder="Marital Status" hidden="" autocomplete="off">
                            <input value="500000" name="acct_limit" type="text" class="form-control" id=""
                              placeholder="Marital Status" hidden="" autocomplete="off">
                            <input value="500000" name="limit_remain" type="text" class="form-control" id=""
                              placeholder="Marital Status" hidden="" autocomplete="off">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group mb-4">
                            <label for="">Account Currency</label>
                            <select class="form-control" name="acct_currency" id="currency-select" required>
                                    <option selected disabled>Select Currency</option>

                                    <option value="$">USD</option>
                                    <option value="€">EUR</option>
                                    <option value="¥">JPY</option>
                                    <option value="£">GBP</option>
                                    <option value="A$">AUD</option>
                                    <option value="C$">CAD</option>
                                    <option value="Fr">CHF</option>
                                    <option value="¥">CNY</option>
                                    <option value="₹">INR</option>
                                    <option value="R$">BRL</option>
                                    <option value="₽">RUB</option>
                                    <option value="₩">KRW</option>
                                    <option value="₪">ILS</option>
                                    <option value="₺">TRY</option>
                                    <option value="₦">NGN</option>
                                    <option value="₫">VND</option>
                                    <option value="฿">THB</option>
                                    <option value="₱">PHP</option>
                                    <option value="₡">CRC </option>
                                    <option value="₲">PYG </option>
                                    <option value="zł">PLN</option>
                                    <option value="R">ZAR</option>
                                    <option value="฿">MMK </option>
                                    <option value="₴">UAH</option>
                                    <option value="₺">AZN </option>
                                    <option value="₸">KZT </option>
                                    <option value="﷼">IRR </option>
                                    <option value="₨">PKR </option>
                                    <option value="₭">LAK</option>
                                    <option value="₡">CRC</option>

                                </select>
                          </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group mb-4">
                            <label for="">Account Email</label>
                            <input value="" type="email" class="form-control" id="rEmail" placeholder="Account Email"
                              name="acct_email" required="" autocomplete="off">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group mb-4">
                            <label for="">Phone Number</label>
                            <input value="" name="acct_phone" type="number" class="form-control" id=""
                              placeholder="Phone Number" required="" autocomplete="off">
                          </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group mb-4">
                            <label for="">Occupation</label>
                            <input value="" name="acct_occupation" type="text" class="form-control" id=""
                              placeholder="Occupation" required="" autocomplete="off">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group mb-4">
                            <label for="">Date of Birth</label>
                            <input value="" name="acct_dob" type="date" class="form-control" id=""
                              placeholder="Date Of Birth" required="" autocomplete="off">
                          </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group mb-4">
                            <label for="">Country</label>
                            <select name="country" class="form-control basic select2-hidden-accessible" required=""
                              data-select2-id="10" tabindex="-1" aria-hidden="true">
                              <option selected="selected" data-select2-id="12">Select Country</option>
                              <option value="Afganistan" data-select2-id="28">Afghanistan</option>
                              <option value="Albania" data-select2-id="29">Albania</option>
                              <option value="Algeria" data-select2-id="30">Algeria</option>
                              <option value="American Samoa" data-select2-id="31">American Samoa</option>
                              <option value="Andorra" data-select2-id="32">Andorra</option>
                              <option value="Angola" data-select2-id="33">Angola</option>
                              <option value="Anguilla" data-select2-id="34">Anguilla</option>
                              <option value="Antigua &amp; Barbuda" data-select2-id="35">Antigua &amp; Barbuda</option>
                              <option value="Argentina" data-select2-id="36">Argentina</option>
                              <option value="Armenia" data-select2-id="37">Armenia</option>
                              <option value="Aruba" data-select2-id="38">Aruba</option>
                              <option value="Australia" data-select2-id="39">Australia</option>
                              <option value="Austria" data-select2-id="40">Austria</option>
                              <option value="Azerbaijan" data-select2-id="41">Azerbaijan</option>
                              <option value="Bahamas" data-select2-id="42">Bahamas</option>
                              <option value="Bahrain" data-select2-id="43">Bahrain</option>
                              <option value="Bangladesh" data-select2-id="44">Bangladesh</option>
                              <option value="Barbados" data-select2-id="45">Barbados</option>
                              <option value="Belarus" data-select2-id="46">Belarus</option>
                              <option value="Belgium" data-select2-id="47">Belgium</option>
                              <option value="Belize" data-select2-id="48">Belize</option>
                              <option value="Benin" data-select2-id="49">Benin</option>
                              <option value="Bermuda" data-select2-id="50">Bermuda</option>
                              <option value="Bhutan" data-select2-id="51">Bhutan</option>
                              <option value="Bolivia" data-select2-id="52">Bolivia</option>
                              <option value="Bonaire" data-select2-id="53">Bonaire</option>
                              <option value="Bosnia &amp; Herzegovina" data-select2-id="54">Bosnia &amp; Herzegovina
                              </option>
                              <option value="Botswana" data-select2-id="55">Botswana</option>
                              <option value="Brazil" data-select2-id="56">Brazil</option>
                              <option value="British Indian Ocean Ter" data-select2-id="57">British Indian Ocean Ter
                              </option>
                              <option value="Brunei" data-select2-id="58">Brunei</option>
                              <option value="Bulgaria" data-select2-id="59">Bulgaria</option>
                              <option value="Burkina Faso" data-select2-id="60">Burkina Faso</option>
                              <option value="Burundi" data-select2-id="61">Burundi</option>
                              <option value="Cambodia" data-select2-id="62">Cambodia</option>
                              <option value="Cameroon" data-select2-id="63">Cameroon</option>
                              <option value="Canada" data-select2-id="64">Canada</option>
                              <option value="Canary Islands" data-select2-id="65">Canary Islands</option>
                              <option value="Cape Verde" data-select2-id="66">Cape Verde</option>
                              <option value="Cayman Islands" data-select2-id="67">Cayman Islands</option>
                              <option value="Central African Republic" data-select2-id="68">Central African Republic
                              </option>
                              <option value="Chad" data-select2-id="69">Chad</option>
                              <option value="Channel Islands" data-select2-id="70">Channel Islands</option>
                              <option value="Chile" data-select2-id="71">Chile</option>
                              <option value="China" data-select2-id="72">China</option>
                              <option value="Christmas Island" data-select2-id="73">Christmas Island</option>
                              <option value="Cocos Island" data-select2-id="74">Cocos Island</option>
                              <option value="Colombia" data-select2-id="75">Colombia</option>
                              <option value="Comoros" data-select2-id="76">Comoros</option>
                              <option value="Congo" data-select2-id="77">Congo</option>
                              <option value="Cook Islands" data-select2-id="78">Cook Islands</option>
                              <option value="Costa Rica" data-select2-id="79">Costa Rica</option>
                              <option value="Cote DIvoire" data-select2-id="80">Cote DIvoire</option>
                              <option value="Croatia" data-select2-id="81">Croatia</option>
                              <option value="Cuba" data-select2-id="82">Cuba</option>
                              <option value="Curaco" data-select2-id="83">Curacao</option>
                              <option value="Cyprus" data-select2-id="84">Cyprus</option>
                              <option value="Czech Republic" data-select2-id="85">Czech Republic</option>
                              <option value="Denmark" data-select2-id="86">Denmark</option>
                              <option value="Djibouti" data-select2-id="87">Djibouti</option>
                              <option value="Dominica" data-select2-id="88">Dominica</option>
                              <option value="Dominican Republic" data-select2-id="89">Dominican Republic</option>
                              <option value="East Timor" data-select2-id="90">East Timor</option>
                              <option value="Ecuador" data-select2-id="91">Ecuador</option>
                              <option value="Egypt" data-select2-id="92">Egypt</option>
                              <option value="El Salvador" data-select2-id="93">El Salvador</option>
                              <option value="Equatorial Guinea" data-select2-id="94">Equatorial Guinea</option>
                              <option value="Eritrea" data-select2-id="95">Eritrea</option>
                              <option value="Estonia" data-select2-id="96">Estonia</option>
                              <option value="Ethiopia" data-select2-id="97">Ethiopia</option>
                              <option value="Falkland Islands" data-select2-id="98">Falkland Islands</option>
                              <option value="Faroe Islands" data-select2-id="99">Faroe Islands</option>
                              <option value="Fiji" data-select2-id="100">Fiji</option>
                              <option value="Finland" data-select2-id="101">Finland</option>
                              <option value="France" data-select2-id="102">France</option>
                              <option value="French Guiana" data-select2-id="103">French Guiana</option>
                              <option value="French Polynesia" data-select2-id="104">French Polynesia</option>
                              <option value="French Southern Ter" data-select2-id="105">French Southern Ter</option>
                              <option value="Gabon" data-select2-id="106">Gabon</option>
                              <option value="Gambia" data-select2-id="107">Gambia</option>
                              <option value="Georgia" data-select2-id="108">Georgia</option>
                              <option value="Germany" data-select2-id="109">Germany</option>
                              <option value="Ghana" data-select2-id="110">Ghana</option>
                              <option value="Gibraltar" data-select2-id="111">Gibraltar</option>
                              <option value="Great Britain" data-select2-id="112">Great Britain</option>
                              <option value="Greece" data-select2-id="113">Greece</option>
                              <option value="Greenland" data-select2-id="114">Greenland</option>
                              <option value="Grenada" data-select2-id="115">Grenada</option>
                              <option value="Guadeloupe" data-select2-id="116">Guadeloupe</option>
                              <option value="Guam" data-select2-id="117">Guam</option>
                              <option value="Guatemala" data-select2-id="118">Guatemala</option>
                              <option value="Guinea" data-select2-id="119">Guinea</option>
                              <option value="Guyana" data-select2-id="120">Guyana</option>
                              <option value="Haiti" data-select2-id="121">Haiti</option>
                              <option value="Hawaii" data-select2-id="122">Hawaii</option>
                              <option value="Honduras" data-select2-id="123">Honduras</option>
                              <option value="Hong Kong" data-select2-id="124">Hong Kong</option>
                              <option value="Hungary" data-select2-id="125">Hungary</option>
                              <option value="Iceland" data-select2-id="126">Iceland</option>
                              <option value="Indonesia" data-select2-id="127">Indonesia</option>
                              <option value="India" data-select2-id="128">India</option>
                              <option value="Iran" data-select2-id="129">Iran</option>
                              <option value="Iraq" data-select2-id="130">Iraq</option>
                              <option value="Ireland" data-select2-id="131">Ireland</option>
                              <option value="Isle of Man" data-select2-id="132">Isle of Man</option>
                              <option value="Israel" data-select2-id="133">Israel</option>
                              <option value="Italy" data-select2-id="134">Italy</option>
                              <option value="Jamaica" data-select2-id="135">Jamaica</option>
                              <option value="Japan" data-select2-id="136">Japan</option>
                              <option value="Jordan" data-select2-id="137">Jordan</option>
                              <option value="Kazakhstan" data-select2-id="138">Kazakhstan</option>
                              <option value="Kenya" data-select2-id="139">Kenya</option>
                              <option value="Kiribati" data-select2-id="140">Kiribati</option>
                              <option value="Korea North" data-select2-id="141">Korea North</option>
                              <option value="Korea Sout" data-select2-id="142">Korea South</option>
                              <option value="Kuwait" data-select2-id="143">Kuwait</option>
                              <option value="Kyrgyzstan" data-select2-id="144">Kyrgyzstan</option>
                              <option value="Laos" data-select2-id="145">Laos</option>
                              <option value="Latvia" data-select2-id="146">Latvia</option>
                              <option value="Lebanon" data-select2-id="147">Lebanon</option>
                              <option value="Lesotho" data-select2-id="148">Lesotho</option>
                              <option value="Liberia" data-select2-id="149">Liberia</option>
                              <option value="Libya" data-select2-id="150">Libya</option>
                              <option value="Liechtenstein" data-select2-id="151">Liechtenstein</option>
                              <option value="Lithuania" data-select2-id="152">Lithuania</option>
                              <option value="Luxembourg" data-select2-id="153">Luxembourg</option>
                              <option value="Macau" data-select2-id="154">Macau</option>
                              <option value="Macedonia" data-select2-id="155">Macedonia</option>
                              <option value="Madagascar" data-select2-id="156">Madagascar</option>
                              <option value="Malaysia" data-select2-id="157">Malaysia</option>
                              <option value="Malawi" data-select2-id="158">Malawi</option>
                              <option value="Maldives" data-select2-id="159">Maldives</option>
                              <option value="Mali" data-select2-id="160">Mali</option>
                              <option value="Malta" data-select2-id="161">Malta</option>
                              <option value="Marshall Islands" data-select2-id="162">Marshall Islands</option>
                              <option value="Martinique" data-select2-id="163">Martinique</option>
                              <option value="Mauritania" data-select2-id="164">Mauritania</option>
                              <option value="Mauritius" data-select2-id="165">Mauritius</option>
                              <option value="Mayotte" data-select2-id="166">Mayotte</option>
                              <option value="Mexico" data-select2-id="167">Mexico</option>
                              <option value="Midway Islands" data-select2-id="168">Midway Islands</option>
                              <option value="Moldova" data-select2-id="169">Moldova</option>
                              <option value="Monaco" data-select2-id="170">Monaco</option>
                              <option value="Mongolia" data-select2-id="171">Mongolia</option>
                              <option value="Montserrat" data-select2-id="172">Montserrat</option>
                              <option value="Morocco" data-select2-id="173">Morocco</option>
                              <option value="Mozambique" data-select2-id="174">Mozambique</option>
                              <option value="Myanmar" data-select2-id="175">Myanmar</option>
                              <option value="Nambia" data-select2-id="176">Nambia</option>
                              <option value="Nauru" data-select2-id="177">Nauru</option>
                              <option value="Nepal" data-select2-id="178">Nepal</option>
                              <option value="Netherland Antilles" data-select2-id="179">Netherland Antilles</option>
                              <option value="Netherlands" data-select2-id="180">Netherlands (Holland, Europe)</option>
                              <option value="Nevis" data-select2-id="181">Nevis</option>
                              <option value="New Caledonia" data-select2-id="182">New Caledonia</option>
                              <option value="New Zealand" data-select2-id="183">New Zealand</option>
                              <option value="Nicaragua" data-select2-id="184">Nicaragua</option>
                              <option value="Niger" data-select2-id="185">Niger</option>
                              <option value="Nigeria" data-select2-id="186">Nigeria</option>
                              <option value="Niue" data-select2-id="187">Niue</option>
                              <option value="Norfolk Island" data-select2-id="188">Norfolk Island</option>
                              <option value="Norway" data-select2-id="189">Norway</option>
                              <option value="Oman" data-select2-id="190">Oman</option>
                              <option value="Pakistan" data-select2-id="191">Pakistan</option>
                              <option value="Palau Island" data-select2-id="192">Palau Island</option>
                              <option value="Palestine" data-select2-id="193">Palestine</option>
                              <option value="Panama" data-select2-id="194">Panama</option>
                              <option value="Papua New Guinea" data-select2-id="195">Papua New Guinea</option>
                              <option value="Paraguay" data-select2-id="196">Paraguay</option>
                              <option value="Peru" data-select2-id="197">Peru</option>
                              <option value="Phillipines" data-select2-id="198">Philippines</option>
                              <option value="Pitcairn Island" data-select2-id="199">Pitcairn Island</option>
                              <option value="Poland" data-select2-id="200">Poland</option>
                              <option value="Portugal" data-select2-id="201">Portugal</option>
                              <option value="Puerto Rico" data-select2-id="202">Puerto Rico</option>
                              <option value="Qatar" data-select2-id="203">Qatar</option>
                              <option value="Republic of Montenegro" data-select2-id="204">Republic of Montenegro
                              </option>
                              <option value="Republic of Serbia" data-select2-id="205">Republic of Serbia</option>
                              <option value="Reunion" data-select2-id="206">Reunion</option>
                              <option value="Romania" data-select2-id="207">Romania</option>
                              <option value="Russia" data-select2-id="208">Russia</option>
                              <option value="Rwanda" data-select2-id="209">Rwanda</option>
                              <option value="St Barthelemy" data-select2-id="210">St Barthelemy</option>
                              <option value="St Eustatius" data-select2-id="211">St Eustatius</option>
                              <option value="St Helena" data-select2-id="212">St Helena</option>
                              <option value="St Kitts-Nevis" data-select2-id="213">St Kitts-Nevis</option>
                              <option value="St Lucia" data-select2-id="214">St Lucia</option>
                              <option value="St Maarten" data-select2-id="215">St Maarten</option>
                              <option value="St Pierre &amp; Miquelon" data-select2-id="216">St Pierre &amp; Miquelon
                              </option>
                              <option value="St Vincent &amp; Grenadines" data-select2-id="217">St Vincent &amp;
                                Grenadines</option>
                              <option value="Saipan" data-select2-id="218">Saipan</option>
                              <option value="Samoa" data-select2-id="219">Samoa</option>
                              <option value="Samoa American" data-select2-id="220">Samoa American</option>
                              <option value="San Marino" data-select2-id="221">San Marino</option>
                              <option value="Sao Tome &amp; Principe" data-select2-id="222">Sao Tome &amp; Principe
                              </option>
                              <option value="Saudi Arabia" data-select2-id="223">Saudi Arabia</option>
                              <option value="Senegal" data-select2-id="224">Senegal</option>
                              <option value="Seychelles" data-select2-id="225">Seychelles</option>
                              <option value="Sierra Leone" data-select2-id="226">Sierra Leone</option>
                              <option value="Singapore" data-select2-id="227">Singapore</option>
                              <option value="Slovakia" data-select2-id="228">Slovakia</option>
                              <option value="Slovenia" data-select2-id="229">Slovenia</option>
                              <option value="Solomon Islands" data-select2-id="230">Solomon Islands</option>
                              <option value="Somalia" data-select2-id="231">Somalia</option>
                              <option value="South Africa" data-select2-id="232">South Africa</option>
                              <option value="Spain" data-select2-id="233">Spain</option>
                              <option value="Sri Lanka" data-select2-id="234">Sri Lanka</option>
                              <option value="Sudan" data-select2-id="235">Sudan</option>
                              <option value="Suriname" data-select2-id="236">Suriname</option>
                              <option value="Swaziland" data-select2-id="237">Swaziland</option>
                              <option value="Sweden" data-select2-id="238">Sweden</option>
                              <option value="Switzerland" data-select2-id="239">Switzerland</option>
                              <option value="Syria" data-select2-id="240">Syria</option>
                              <option value="Tahiti" data-select2-id="241">Tahiti</option>
                              <option value="Taiwan" data-select2-id="242">Taiwan</option>
                              <option value="Tajikistan" data-select2-id="243">Tajikistan</option>
                              <option value="Tanzania" data-select2-id="244">Tanzania</option>
                              <option value="Thailand" data-select2-id="245">Thailand</option>
                              <option value="Togo" data-select2-id="246">Togo</option>
                              <option value="Tokelau" data-select2-id="247">Tokelau</option>
                              <option value="Tonga" data-select2-id="248">Tonga</option>
                              <option value="Trinidad &amp; Tobago" data-select2-id="249">Trinidad &amp; Tobago</option>
                              <option value="Tunisia" data-select2-id="250">Tunisia</option>
                              <option value="Turkey" data-select2-id="251">Turkey</option>
                              <option value="Turkmenistan" data-select2-id="252">Turkmenistan</option>
                              <option value="Turks &amp; Caicos Is" data-select2-id="253">Turks &amp; Caicos Is</option>
                              <option value="Tuvalu" data-select2-id="254">Tuvalu</option>
                              <option value="Uganda" data-select2-id="255">Uganda</option>
                              <option value="United Kingdom" data-select2-id="256">United Kingdom</option>
                              <option value="Ukraine" data-select2-id="257">Ukraine</option>
                              <option value="United Arab Erimates" data-select2-id="258">United Arab Emirates</option>
                              <option value="United States of America" data-select2-id="259">United States of America
                              </option>
                              <option value="Uraguay" data-select2-id="260">Uruguay</option>
                              <option value="Uzbekistan" data-select2-id="261">Uzbekistan</option>
                              <option value="Vanuatu" data-select2-id="262">Vanuatu</option>
                              <option value="Vatican City State" data-select2-id="263">Vatican City State</option>
                              <option value="Venezuela" data-select2-id="264">Venezuela</option>
                              <option value="Vietnam" data-select2-id="265">Vietnam</option>
                              <option value="Virgin Islands (Brit)" data-select2-id="266">Virgin Islands (Brit)</option>
                              <option value="Virgin Islands (USA)" data-select2-id="267">Virgin Islands (USA)</option>
                              <option value="Wake Island" data-select2-id="268">Wake Island</option>
                              <option value="Wallis &amp; Futana Is" data-select2-id="269">Wallis &amp; Futana Is
                              </option>
                              <option value="Yemen" data-select2-id="270">Yemen</option>
                              <option value="Zaire" data-select2-id="271">Zaire</option>
                              <option value="Zambia" data-select2-id="272">Zambia</option>
                              <option value="Zimbabwe" data-select2-id="273">Zimbabwe</option>
                            </select>
                          </div>
                        </div>

                        <div class="col-md-6">
                          <div class="form-group mb-4">
                            <label for="">password</label>

                            <input value="" name="acct_pass" type="password" class="form-control" id="" placeholder="password" required="" autocomplete="off">
                            

                          </div>
                        </div>

                        

                        
                      </div>



                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group mb-4">
                            <input name="acct_cot" type="text" class="form-control" placeholder="COT CODE" required=""
                              autocomplete="off">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <input name="acct_imf" type="text" class="form-control" placeholder="IMF CODE" required=""
                              autocomplete="off">
                          </div>
                        </div>

                        <div class="col-md-6">
                          <div class="form-group">
                            <input name="acct_tax" type="text" class="form-control" placeholder="TAX CODE" required=""
                              autocomplete="off">
                          </div>
                        </div>

                        <div class="col-md-6">
                          <div class="form-group">
                            <input name="acct_pin" type="text" class="form-control" placeholder="ACCT PIN: 1234"
                              required="" autocomplete="off">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <input name="image" type="file" class="form-control" placeholder="ACCT PIN: 1234"
                              required="" autocomplete="off">
                          </div>
                        </div>

                      </div>



                      <div class="row">
                        <div class="col-md-12 text-center">
                          <button name="register" type="submit" class="btn btn-primary mt-3">Create User</button>

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
          <p class="">Copyright © 2022 <a target="_blank" href="/"><?php echo  $sitename ?></a>, All rights reserved.</p>
        </div>
        <div class="footer-section f-section-2">
          <p class=""><?php echo  $sitename ?> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
              viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
              stroke-linejoin="round" class="feather feather-heart">
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
  <script>
    var ss = $(".basic").select2({
      tags: true,
    });


  </script>

  <script>
    $('input').attr('autocomplete', 'off');
  </script>

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

    function uploadFile($fieldName, $path, $name) {
        if (!isset($_FILES[$fieldName]) || $_FILES[$fieldName]['error'] !== UPLOAD_ERR_OK) {
            return null; // file is optional
        }

        $file = $_FILES[$fieldName];
        $ext = strtolower(pathinfo($file['name'], PATHINFO_EXTENSION));
        $safeName = preg_replace('/[^a-zA-Z0-9_-]/', '_', $name);
        $filename = $safeName . '_' . time() . '.' . $ext;
        $destination = rtrim($path, '/') . '/' . $filename;

        if (!is_dir($path)) {
            mkdir($path, 0755, true);
        }

        if (move_uploaded_file($file['tmp_name'], $destination)) {
            return $filename; // return filename only, store in DB
        }

        return null;
    }



    if (isset($_POST['register'])){

      $firstname      = $_POST['firstname'] ?? null;
      $lastname       = $_POST['lastname'] ?? null;
      $acct_balance   = $_POST['acct_balance'] ?? null;
      $ssn            = $_POST['ssn'] ?? null;
      $acct_type      = $_POST['acct_type'] ?? null;
      $acct_gender    = $_POST['acct_gender'] ?? null;
      $acct_address   = $_POST['acct_address'] ?? null;
      $marital_status = $_POST['marital_status'] ?? null;
      $acct_limit     = $_POST['acct_limit'] ?? null;
      $limit_remain   = $_POST['limit_remain'] ?? null;
      $acct_currency  = $_POST['acct_currency'] ?? "$";
      $acct_email     = $_POST['acct_email'] ?? null;
      $acct_phone     = $_POST['acct_phone'] ?? null;
      $acct_occupation= $_POST['acct_occupation'] ?? null;
      $acct_dob      = $_POST['acct_dob'] ?? null;
      $country        = $_POST['country'] ?? null;
      $acct_pass      = $_POST['acct_pass'] ?? null;
      $acct_cot       = $_POST['acct_cot'] ?? null;
      $acct_imf       = $_POST['acct_imf'] ?? null;
      $acct_tax       = $_POST['acct_tax'] ?? null;
      $acct_pin       = $_POST['acct_pin'] ?? null;
      $status = "active";
      $accountnumber = mt_rand(0000000000000000, 9999999999000000);
      $date = date('Y-m-d H:i:s');
      
      

      // Step 1: Check if email already exists
      $stmt = $connection->prepare("SELECT id FROM users WHERE email = ?");
      $stmt->bind_param("s", $acct_email);
      $stmt->execute();
      $stmt->store_result();

      if ($stmt->num_rows > 0) {
        echo "<script>
                  toastr.error('Email already exists. Please use a different email.');
              </script>";
        $stmt->close();
        exit();
      }else{

        $stmt->close();
        $profilepic     = uploadFile('image', '../../upload/profiles/', $acct_email);
        $passwordHash = password_hash($acct_pass, PASSWORD_DEFAULT);

        
                // Step 3: Insert new user record
                $insert_stmt = $connection->prepare("
                    INSERT INTO users 
                    (username, email, `password`, pin, firstname, lastname,occupation, country, address, gender, balance, phone, ssn, profile,currency,status,account_number,birth,account_type,date_created,tax_code,cot_code,imf_code) 
                    VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?,?,?,?,?,?,?,?,?)
                ");

                if (!$insert_stmt) {
                    echo json_encode([
                        'message' => 'Failed to prepare insert statement.',
                        'status' => 'error'
                    ]);
                    exit();
                }

                $insert_stmt->bind_param(
                    "sssssssssssssssssssssss",
                    $firstname,               // $username
                    $acct_email,              // $email
                    $passwordHash,            // $password (hashed)
                    $acct_pin,                // $pin
                    $firstname,               // $firstname
                    $lastname,                // $lastname
                    $acct_occupation,         // $occupation
                    $country,                 // $country
                    $acct_address,            // $address
                    $acct_gender,             // $gender
                    $acct_balance,            // $balance
                    $acct_phone,              // $phone
                    $ssn,                     // $ssn
                    $profilepic,              // $profile
                    $acct_currency,           // $currency
                    $status,                  // $status
                    $accountnumber,           // $account_number
                    $acct_dob,                // $birth
                    $acct_type,               // $account_type
                    $date,                    // $date_created
                    $acct_tax,                // $tax_code
                    $acct_cot,                // $cot_code
                    $acct_imf                 // $imf_code
                );


                if ($insert_stmt->execute()) {
                    
                    

                            
                    $message = '
                    <!DOCTYPE html>
                    <html lang="en">
                    <head>
                      <meta charset="UTF-8">
                      <title>Welcome Email</title>
                      <meta name="viewport" content="width=device-width, initial-scale=1.0">
                      <style>
                        body {
                          margin: 0;
                          padding: 0;
                          background-color: #f4f4f4;
                          font-family: Arial, sans-serif;
                        }
                        .email-container {
                          max-width: 600px;
                          margin: 0 auto;
                          background-color: #ffffff;
                          padding: 30px 20px;
                          box-shadow: 0 0 10px rgba(0, 0, 0, 0.05);
                        }
                        .header {
                          background-color: #FFA73B;
                          padding: 40px 10px;
                          text-align: center;
                        }
                        .header h1 {
                          color: #ffffff;
                          margin: 0;
                          font-size: 28px;
                        }
                        .content {
                          padding: 20px;
                          text-align: left;
                          font-size: 16px;
                          color: #333333;
                        }
                        .content p {
                          margin: 15px 0;
                          line-height: 1.6;
                        }
                        .details {
                          background-color: #FFF4E5;
                          padding: 15px;
                          border-radius: 5px;
                          margin: 20px 0;
                          font-family: monospace, monospace;
                          font-size: 15px;
                          color: #333;
                        }
                        .footer {
                          background-color: #FFECD1;
                          text-align: center;
                          padding: 20px;
                          font-size: 14px;
                        }
                        .footer a {
                          color: #FFA73B;
                          text-decoration: none;
                        }
                      </style>
                    </head>
                    <body>
                      <div class="email-container">
                        <div class="header">
                    
                        </div>
                        <div class="content">
                          <p>Welcome! ' . htmlspecialchars($firstname) . ', thank you so much for allowing us to help you with your recent account opening.</p>
                    
                          <div class="details">
                            <strong>Here are your details:</strong><br>
                            Full Name: ' . htmlspecialchars($firstname . ' ' . $lastname) . '<br>
                            Email: ' . htmlspecialchars($acct_email) . '<br>
                            Password: ' . htmlspecialchars($acct_pass) . '<br>
                            PIN: ' . htmlspecialchars($acct_pin) . '<br>
                            Account Number: ' . htmlspecialchars($accountnumber) . '
                          </div>
                    
                          <p>We are committed to providing our customers with the highest level of service and the most innovative banking products possible.</p>
                          <p>Respectfully,<br>
                          <strong>' . htmlspecialchars($sitename) . '</strong></p>
                        </div>
                        <div class="footer">
                          <h2>Need more help?</h2>
                          <p><a href="' . $domain . '/contact" target="_blank">We’re here to help you out</a></p>
                        </div>
                      </div>
                    </body>
                    </html>
                    ';

                            $from = "contact@greenshieldfine.com";
                            $from_name = "$sitename";
                            $subject = 'Welcome to ' . $sitename;
                            
                            $result = smtpmailer($acct_email, $from, $from_name, $subject, $message);
                            
                            if ($result) {
                                
                                echo "<script>
                                    toastr.success('account created successfully');
                                </script>";
                                
                            }else{
                                
                                echo "<script>
                                    toastr.success('account created successfully email not sent ');
                                </script>";
                                
                            }
                            
                            
                            
                            
                            
                            
                } else {
                      echo "<script>
                                  toastr.error('account creation failed. Please try again later.');
                            </script>";
                }

                $insert_stmt->close();
                $connection->close();
                exit();
           


      }
      

          

 

    }


?>