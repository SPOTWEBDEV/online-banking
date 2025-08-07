<?php

    include('../../server/connection.php');
    include('../../server/authorization/user/index.php');

?>

<html lang="en">

<head>
  <meta http-equiv="Content-Type; encoding" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" />
  <title>Crypto Funding - <?php echo  $sitename ?></title>
  <link rel="icon" type="image/x-icon" href="../source/assets/img/favicon.ico" />
  <link href="../source/assets/css/loader.css" rel="stylesheet" type="text/css" />
  <script src="../source/assets/js/loader.js"></script>
  <!--     BEGIN GLOBAL MANDATORY STYLES-->
  <link href="https://fonts.googleapis.com/css?family=Quicksand:400,500,600,700&amp;display=swap" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css?family=Raleway|Rock+Salt|Source+Code+Pro:300,400,600" rel="stylesheet" />
  <link href="../source/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
  <link href="../source/assets/css/plugins.css" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" type="text/css" href="../source/assets/css/forms/custom-clipboard.css" />
  <!--     END GLOBAL MANDATORY STYLES-->

  <link rel="stylesheet" href="../source/plugins/font-icons/fontawesome/css/regular.css" />
  <link rel="stylesheet" href="../source/plugins/font-icons/fontawesome/css/fontawesome.css" />

  <!--     BEGIN PAGE LEVEL PLUGINS/CUSTOM STYLES-->
  <link href="../source/plugins/apex/apexcharts.css" rel="stylesheet" type="text/css" />
  <link href="../source/assets/css/dashboard/dash_1.css" rel="stylesheet" type="text/css" />
  <link href="../source/assets/css/components/cards/card.css" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" type="text/css" href="../source/plugins/bootstrap-select/bootstrap-select.min.css" />
  <!--    profile css-->
  <link rel="stylesheet" type="text/css" href="../source/plugins/dropify/dropify.min.css" />
  <link href="../source/assets/css/users/account-setting.css" rel="stylesheet" type="text/css" />
  <link href="../source/assets/css/components/custom-modal.css" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" href="../source/assets/css/card/card.css" />
  <link rel="stylesheet" href="../source/assets/css/card/displayCard.css" />
  <!--    <link href="../source/assets/css/users/user-profile.css" rel="stylesheet" type="text/css" />-->

  <!--    end of table css-->

  <!-- toaster -->
  <link rel="stylesheet" type="text/css" href="../source/assets/css/elements/alert.css" />
  <link href="../source/plugins/notification/snackbar/snackbar.min.css" rel="stylesheet" type="text/css" />
  <link href="../source/plugins/file-upload/file-upload-with-preview.min.css" rel="stylesheet" type="text/css" />
  <link href="../source/assets/css/components/custom-sweetalert.css" rel="stylesheet" type="text/css" />
  <script src="../source/plugins/sweetalerts/promise-polyfill.js"></script>
  <script src="../source/assets/js/libs/jquery-3.1.1.min.js"></script>

      <!-- SweetAlert2 CSS -->
      <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css" rel="stylesheet">

      <!-- SweetAlert2 JS -->
      <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>



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
      background-color: rgba(0, 0, 0, 0.5);
      box-shadow: 0 0 1px rgba(255, 255, 255, 0.5);
      -webkit-box-shadow: 0 0 1px rgba(255, 255, 255, 0.5);
    }

    .apexcharts-canvas.dark {
      background: #343f57;
    }

    .apexcharts-inner {
      position: relative;
    }

    .legend-mouseover-inactive {
      transition: 0.15s ease all;
      opacity: 0.2;
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
      background: #eceff1;
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
      background: #eceff1;
      border: 1px solid #90a4ae;
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
      border-bottom-color: #eceff1;
    }

    .apexcharts-xaxistooltip-bottom:before {
      border-bottom-color: #90a4ae;
    }

    .apexcharts-xaxistooltip-bottom.dark:after {
      border-bottom-color: rgba(0, 0, 0, 0.5);
    }

    .apexcharts-xaxistooltip-bottom.dark:before {
      border-bottom-color: rgba(0, 0, 0, 0.5);
    }

    .apexcharts-xaxistooltip-top:after {
      border-top-color: #eceff1;
    }

    .apexcharts-xaxistooltip-top:before {
      border-top-color: #90a4ae;
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
      background: #eceff1;
      border: 1px solid #90a4ae;
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
      border-left-color: #eceff1;
    }

    .apexcharts-yaxistooltip-left:before {
      border-left-color: #90a4ae;
    }

    .apexcharts-yaxistooltip-left.dark:after {
      border-left-color: rgba(0, 0, 0, 0.5);
    }

    .apexcharts-yaxistooltip-left.dark:before {
      border-left-color: rgba(0, 0, 0, 0.5);
    }

    .apexcharts-yaxistooltip-right:after {
      border-right-color: #eceff1;
    }

    .apexcharts-yaxistooltip-right:before {
      border-right-color: #90a4ae;
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
      cursor: crosshair;
    }

    .apexcharts-canvas.zoomable .hovering-pan {
      cursor: move;
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
      color: #6e8192;
      text-align: center;
    }

    .apexcharts-zoom-icon svg,
    .apexcharts-zoom-in-icon svg,
    .apexcharts-zoom-out-icon svg,
    .apexcharts-reset-zoom-icon svg,
    .apexcharts-menu-icon svg {
      fill: #6e8192;
    }

    .apexcharts-selection-icon svg {
      fill: #444;
      transform: scale(0.76);
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
      fill: #008ffb;
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
      transform: scale(0.7);
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
      stroke: #6e8192;
      stroke-width: 2;
    }

    .apexcharts-pan-icon.selected svg {
      stroke: #008ffb;
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
        -webkit-transform: scale(0.7);
        transform: scale(0.7);
      }

      45% {
        -webkit-transform: scale(1.05);
        transform: scale(1.05);
      }

      80% {
        -webkit-transform: scale(0.95);
        transform: scale(0.95);
      }

      100% {
        -webkit-transform: scale(1);
        transform: scale(1);
      }
    }

    @keyframes swal2-show {
      0% {
        -webkit-transform: scale(0.7);
        transform: scale(0.7);
      }

      45% {
        -webkit-transform: scale(1.05);
        transform: scale(1.05);
      }

      80% {
        -webkit-transform: scale(0.95);
        transform: scale(0.95);
      }

      100% {
        -webkit-transform: scale(1);
        transform: scale(1);
      }
    }

    @-webkit-keyframes swal2-hide {
      0% {
        -webkit-transform: scale(1);
        transform: scale(1);
        opacity: 1;
      }

      100% {
        -webkit-transform: scale(0.5);
        transform: scale(0.5);
        opacity: 0;
      }
    }

    @keyframes swal2-hide {
      0% {
        -webkit-transform: scale(1);
        transform: scale(1);
        opacity: 1;
      }

      100% {
        -webkit-transform: scale(0.5);
        transform: scale(0.5);
        opacity: 0;
      }
    }

    @-webkit-keyframes swal2-animate-success-line-tip {
      0% {
        top: 1.1875em;
        left: 0.0625em;
        width: 0;
      }

      54% {
        top: 1.0625em;
        left: 0.125em;
        width: 0;
      }

      70% {
        top: 2.1875em;
        left: -0.375em;
        width: 3.125em;
      }

      84% {
        top: 3em;
        left: 1.3125em;
        width: 1.0625em;
      }

      100% {
        top: 2.8125em;
        left: 0.875em;
        width: 1.5625em;
      }
    }

    @keyframes swal2-animate-success-line-tip {
      0% {
        top: 1.1875em;
        left: 0.0625em;
        width: 0;
      }

      54% {
        top: 1.0625em;
        left: 0.125em;
        width: 0;
      }

      70% {
        top: 2.1875em;
        left: -0.375em;
        width: 3.125em;
      }

      84% {
        top: 3em;
        left: 1.3125em;
        width: 1.0625em;
      }

      100% {
        top: 2.8125em;
        left: 0.875em;
        width: 1.5625em;
      }
    }

    @-webkit-keyframes swal2-animate-success-line-long {
      0% {
        top: 3.375em;
        right: 2.875em;
        width: 0;
      }

      65% {
        top: 3.375em;
        right: 2.875em;
        width: 0;
      }

      84% {
        top: 2.1875em;
        right: 0;
        width: 3.4375em;
      }

      100% {
        top: 2.375em;
        right: 0.5em;
        width: 2.9375em;
      }
    }

    @keyframes swal2-animate-success-line-long {
      0% {
        top: 3.375em;
        right: 2.875em;
        width: 0;
      }

      65% {
        top: 3.375em;
        right: 2.875em;
        width: 0;
      }

      84% {
        top: 2.1875em;
        right: 0;
        width: 3.4375em;
      }

      100% {
        top: 2.375em;
        right: 0.5em;
        width: 2.9375em;
      }
    }

    @-webkit-keyframes swal2-rotate-success-circular-line {
      0% {
        -webkit-transform: rotate(-45deg);
        transform: rotate(-45deg);
      }

      5% {
        -webkit-transform: rotate(-45deg);
        transform: rotate(-45deg);
      }

      12% {
        -webkit-transform: rotate(-405deg);
        transform: rotate(-405deg);
      }

      100% {
        -webkit-transform: rotate(-405deg);
        transform: rotate(-405deg);
      }
    }

    @keyframes swal2-rotate-success-circular-line {
      0% {
        -webkit-transform: rotate(-45deg);
        transform: rotate(-45deg);
      }

      5% {
        -webkit-transform: rotate(-45deg);
        transform: rotate(-45deg);
      }

      12% {
        -webkit-transform: rotate(-405deg);
        transform: rotate(-405deg);
      }

      100% {
        -webkit-transform: rotate(-405deg);
        transform: rotate(-405deg);
      }
    }

    @-webkit-keyframes swal2-animate-error-x-mark {
      0% {
        margin-top: 1.625em;
        -webkit-transform: scale(0.4);
        transform: scale(0.4);
        opacity: 0;
      }

      50% {
        margin-top: 1.625em;
        -webkit-transform: scale(0.4);
        transform: scale(0.4);
        opacity: 0;
      }

      80% {
        margin-top: -0.375em;
        -webkit-transform: scale(1.15);
        transform: scale(1.15);
      }

      100% {
        margin-top: 0;
        -webkit-transform: scale(1);
        transform: scale(1);
        opacity: 1;
      }
    }

    @keyframes swal2-animate-error-x-mark {
      0% {
        margin-top: 1.625em;
        -webkit-transform: scale(0.4);
        transform: scale(0.4);
        opacity: 0;
      }

      50% {
        margin-top: 1.625em;
        -webkit-transform: scale(0.4);
        transform: scale(0.4);
        opacity: 0;
      }

      80% {
        margin-top: -0.375em;
        -webkit-transform: scale(1.15);
        transform: scale(1.15);
      }

      100% {
        margin-top: 0;
        -webkit-transform: scale(1);
        transform: scale(1);
        opacity: 1;
      }
    }

    @-webkit-keyframes swal2-animate-error-icon {
      0% {
        -webkit-transform: rotateX(100deg);
        transform: rotateX(100deg);
        opacity: 0;
      }

      100% {
        -webkit-transform: rotateX(0);
        transform: rotateX(0);
        opacity: 1;
      }
    }

    @keyframes swal2-animate-error-icon {
      0% {
        -webkit-transform: rotateX(100deg);
        transform: rotateX(100deg);
        opacity: 0;
      }

      100% {
        -webkit-transform: rotateX(0);
        transform: rotateX(0);
        opacity: 1;
      }
    }

    body.swal2-toast-shown.swal2-has-input>.swal2-container>.swal2-toast {
      flex-direction: column;
      align-items: stretch;
    }

    body.swal2-toast-shown.swal2-has-input>.swal2-container>.swal2-toast .swal2-actions {
      flex: 1;
      align-self: stretch;
      justify-content: flex-end;
      height: 2.2em;
    }

    body.swal2-toast-shown.swal2-has-input>.swal2-container>.swal2-toast .swal2-loading {
      justify-content: center;
    }

    body.swal2-toast-shown.swal2-has-input>.swal2-container>.swal2-toast .swal2-input {
      height: 2em;
      margin: 0.3125em auto;
      font-size: 1em;
    }

    body.swal2-toast-shown.swal2-has-input>.swal2-container>.swal2-toast .swal2-validationerror {
      font-size: 1em;
    }

    body.swal2-toast-shown>.swal2-container {
      position: fixed;
      background-color: transparent;
    }

    body.swal2-toast-shown>.swal2-container.swal2-shown {
      background-color: transparent;
    }

    body.swal2-toast-shown>.swal2-container.swal2-top {
      top: 0;
      right: auto;
      bottom: auto;
      left: 50%;
      -webkit-transform: translateX(-50%);
      transform: translateX(-50%);
    }

    body.swal2-toast-shown>.swal2-container.swal2-top-end,
    body.swal2-toast-shown>.swal2-container.swal2-top-right {
      top: 0;
      right: 0;
      bottom: auto;
      left: auto;
    }

    body.swal2-toast-shown>.swal2-container.swal2-top-left,
    body.swal2-toast-shown>.swal2-container.swal2-top-start {
      top: 0;
      right: auto;
      bottom: auto;
      left: 0;
    }

    body.swal2-toast-shown>.swal2-container.swal2-center-left,
    body.swal2-toast-shown>.swal2-container.swal2-center-start {
      top: 50%;
      right: auto;
      bottom: auto;
      left: 0;
      -webkit-transform: translateY(-50%);
      transform: translateY(-50%);
    }

    body.swal2-toast-shown>.swal2-container.swal2-center {
      top: 50%;
      right: auto;
      bottom: auto;
      left: 50%;
      -webkit-transform: translate(-50%, -50%);
      transform: translate(-50%, -50%);
    }

    body.swal2-toast-shown>.swal2-container.swal2-center-end,
    body.swal2-toast-shown>.swal2-container.swal2-center-right {
      top: 50%;
      right: 0;
      bottom: auto;
      left: auto;
      -webkit-transform: translateY(-50%);
      transform: translateY(-50%);
    }

    body.swal2-toast-shown>.swal2-container.swal2-bottom-left,
    body.swal2-toast-shown>.swal2-container.swal2-bottom-start {
      top: auto;
      right: auto;
      bottom: 0;
      left: 0;
    }

    body.swal2-toast-shown>.swal2-container.swal2-bottom {
      top: auto;
      right: auto;
      bottom: 0;
      left: 50%;
      -webkit-transform: translateX(-50%);
      transform: translateX(-50%);
    }

    body.swal2-toast-shown>.swal2-container.swal2-bottom-end,
    body.swal2-toast-shown>.swal2-container.swal2-bottom-right {
      top: auto;
      right: 0;
      bottom: 0;
      left: auto;
    }

    .swal2-popup.swal2-toast {
      flex-direction: row;
      align-items: center;
      width: auto;
      padding: 0.625em;
      box-shadow: 0 0 0.625em #d9d9d9;
      overflow-y: hidden;
    }

    .swal2-popup.swal2-toast .swal2-header {
      flex-direction: row;
    }

    .swal2-popup.swal2-toast .swal2-title {
      justify-content: flex-start;
      margin: 0 0.6em;
      font-size: 1em;
    }

    .swal2-popup.swal2-toast .swal2-close {
      position: initial;
    }

    .swal2-popup.swal2-toast .swal2-content {
      justify-content: flex-start;
      font-size: 1em;
    }

    .swal2-popup.swal2-toast .swal2-icon {
      width: 2em;
      min-width: 2em;
      height: 2em;
      margin: 0;
    }

    .swal2-popup.swal2-toast .swal2-icon-text {
      font-size: 2em;
      font-weight: 700;
      line-height: 1em;
    }

    .swal2-popup.swal2-toast .swal2-icon.swal2-success .swal2-success-ring {
      width: 2em;
      height: 2em;
    }

    .swal2-popup.swal2-toast .swal2-icon.swal2-error [class^="swal2-x-mark-line"] {
      top: 0.875em;
      width: 1.375em;
    }

    .swal2-popup.swal2-toast .swal2-icon.swal2-error [class^="swal2-x-mark-line"][class$="left"] {
      left: 0.3125em;
    }

    .swal2-popup.swal2-toast .swal2-icon.swal2-error [class^="swal2-x-mark-line"][class$="right"] {
      right: 0.3125em;
    }

    .swal2-popup.swal2-toast .swal2-actions {
      height: auto;
      margin: 0 0.3125em;
    }

    .swal2-popup.swal2-toast .swal2-styled {
      margin: 0 0.3125em;
      padding: 0.3125em 0.625em;
      font-size: 1em;
    }

    .swal2-popup.swal2-toast .swal2-styled:focus {
      box-shadow: 0 0 0 0.0625em #fff, 0 0 0 0.125em rgba(50, 100, 150, 0.4);
    }

    .swal2-popup.swal2-toast .swal2-success {
      border-color: #a5dc86;
    }

    .swal2-popup.swal2-toast .swal2-success [class^="swal2-success-circular-line"] {
      position: absolute;
      width: 2em;
      height: 2.8125em;
      -webkit-transform: rotate(45deg);
      transform: rotate(45deg);
      border-radius: 50%;
    }

    .swal2-popup.swal2-toast .swal2-success [class^="swal2-success-circular-line"][class$="left"] {
      top: -0.25em;
      left: -0.9375em;
      -webkit-transform: rotate(-45deg);
      transform: rotate(-45deg);
      -webkit-transform-origin: 2em 2em;
      transform-origin: 2em 2em;
      border-radius: 4em 0 0 4em;
    }

    .swal2-popup.swal2-toast .swal2-success [class^="swal2-success-circular-line"][class$="right"] {
      top: -0.25em;
      left: 0.9375em;
      -webkit-transform-origin: 0 2em;
      transform-origin: 0 2em;
      border-radius: 0 4em 4em 0;
    }

    .swal2-popup.swal2-toast .swal2-success .swal2-success-ring {
      width: 2em;
      height: 2em;
    }

    .swal2-popup.swal2-toast .swal2-success .swal2-success-fix {
      top: 0;
      left: 0.4375em;
      width: 0.4375em;
      height: 2.6875em;
    }

    .swal2-popup.swal2-toast .swal2-success [class^="swal2-success-line"] {
      height: 0.3125em;
    }

    .swal2-popup.swal2-toast .swal2-success [class^="swal2-success-line"][class$="tip"] {
      top: 1.125em;
      left: 0.1875em;
      width: 0.75em;
    }

    .swal2-popup.swal2-toast .swal2-success [class^="swal2-success-line"][class$="long"] {
      top: 0.9375em;
      right: 0.1875em;
      width: 1.375em;
    }

    .swal2-popup.swal2-toast.swal2-show {
      -webkit-animation: showSweetToast 0.5s;
      animation: showSweetToast 0.5s;
    }

    .swal2-popup.swal2-toast.swal2-hide {
      -webkit-animation: hideSweetToast 0.2s forwards;
      animation: hideSweetToast 0.2s forwards;
    }

    .swal2-popup.swal2-toast .swal2-animate-success-icon .swal2-success-line-tip {
      -webkit-animation: animate-toast-success-tip 0.75s;
      animation: animate-toast-success-tip 0.75s;
    }

    .swal2-popup.swal2-toast .swal2-animate-success-icon .swal2-success-line-long {
      -webkit-animation: animate-toast-success-long 0.75s;
      animation: animate-toast-success-long 0.75s;
    }

    @-webkit-keyframes showSweetToast {
      0% {
        -webkit-transform: translateY(-0.625em) rotateZ(2deg);
        transform: translateY(-0.625em) rotateZ(2deg);
        opacity: 0;
      }

      33% {
        -webkit-transform: translateY(0) rotateZ(-2deg);
        transform: translateY(0) rotateZ(-2deg);
        opacity: 0.5;
      }

      66% {
        -webkit-transform: translateY(0.3125em) rotateZ(2deg);
        transform: translateY(0.3125em) rotateZ(2deg);
        opacity: 0.7;
      }

      100% {
        -webkit-transform: translateY(0) rotateZ(0);
        transform: translateY(0) rotateZ(0);
        opacity: 1;
      }
    }

    @keyframes showSweetToast {
      0% {
        -webkit-transform: translateY(-0.625em) rotateZ(2deg);
        transform: translateY(-0.625em) rotateZ(2deg);
        opacity: 0;
      }

      33% {
        -webkit-transform: translateY(0) rotateZ(-2deg);
        transform: translateY(0) rotateZ(-2deg);
        opacity: 0.5;
      }

      66% {
        -webkit-transform: translateY(0.3125em) rotateZ(2deg);
        transform: translateY(0.3125em) rotateZ(2deg);
        opacity: 0.7;
      }

      100% {
        -webkit-transform: translateY(0) rotateZ(0);
        transform: translateY(0) rotateZ(0);
        opacity: 1;
      }
    }

    @-webkit-keyframes hideSweetToast {
      0% {
        opacity: 1;
      }

      33% {
        opacity: 0.5;
      }

      100% {
        -webkit-transform: rotateZ(1deg);
        transform: rotateZ(1deg);
        opacity: 0;
      }
    }

    @keyframes hideSweetToast {
      0% {
        opacity: 1;
      }

      33% {
        opacity: 0.5;
      }

      100% {
        -webkit-transform: rotateZ(1deg);
        transform: rotateZ(1deg);
        opacity: 0;
      }
    }

    @-webkit-keyframes animate-toast-success-tip {
      0% {
        top: 0.5625em;
        left: 0.0625em;
        width: 0;
      }

      54% {
        top: 0.125em;
        left: 0.125em;
        width: 0;
      }

      70% {
        top: 0.625em;
        left: -0.25em;
        width: 1.625em;
      }

      84% {
        top: 1.0625em;
        left: 0.75em;
        width: 0.5em;
      }

      100% {
        top: 1.125em;
        left: 0.1875em;
        width: 0.75em;
      }
    }

    @keyframes animate-toast-success-tip {
      0% {
        top: 0.5625em;
        left: 0.0625em;
        width: 0;
      }

      54% {
        top: 0.125em;
        left: 0.125em;
        width: 0;
      }

      70% {
        top: 0.625em;
        left: -0.25em;
        width: 1.625em;
      }

      84% {
        top: 1.0625em;
        left: 0.75em;
        width: 0.5em;
      }

      100% {
        top: 1.125em;
        left: 0.1875em;
        width: 0.75em;
      }
    }

    @-webkit-keyframes animate-toast-success-long {
      0% {
        top: 1.625em;
        right: 1.375em;
        width: 0;
      }

      65% {
        top: 1.25em;
        right: 0.9375em;
        width: 0;
      }

      84% {
        top: 0.9375em;
        right: 0;
        width: 1.125em;
      }

      100% {
        top: 0.9375em;
        right: 0.1875em;
        width: 1.375em;
      }
    }

    @keyframes animate-toast-success-long {
      0% {
        top: 1.625em;
        right: 1.375em;
        width: 0;
      }

      65% {
        top: 1.25em;
        right: 0.9375em;
        width: 0;
      }

      84% {
        top: 0.9375em;
        right: 0;
        width: 1.125em;
      }

      100% {
        top: 0.9375em;
        right: 0.1875em;
        width: 1.375em;
      }
    }

    body.swal2-shown:not(.swal2-no-backdrop):not(.swal2-toast-shown) {
      overflow-y: hidden;
    }

    body.swal2-height-auto {
      height: auto !important;
    }

    body.swal2-no-backdrop .swal2-shown {
      top: auto;
      right: auto;
      bottom: auto;
      left: auto;
      background-color: transparent;
    }

    body.swal2-no-backdrop .swal2-shown>.swal2-modal {
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.4);
    }

    body.swal2-no-backdrop .swal2-shown.swal2-top {
      top: 0;
      left: 50%;
      -webkit-transform: translateX(-50%);
      transform: translateX(-50%);
    }

    body.swal2-no-backdrop .swal2-shown.swal2-top-left,
    body.swal2-no-backdrop .swal2-shown.swal2-top-start {
      top: 0;
      left: 0;
    }

    body.swal2-no-backdrop .swal2-shown.swal2-top-end,
    body.swal2-no-backdrop .swal2-shown.swal2-top-right {
      top: 0;
      right: 0;
    }

    body.swal2-no-backdrop .swal2-shown.swal2-center {
      top: 50%;
      left: 50%;
      -webkit-transform: translate(-50%, -50%);
      transform: translate(-50%, -50%);
    }

    body.swal2-no-backdrop .swal2-shown.swal2-center-left,
    body.swal2-no-backdrop .swal2-shown.swal2-center-start {
      top: 50%;
      left: 0;
      -webkit-transform: translateY(-50%);
      transform: translateY(-50%);
    }

    body.swal2-no-backdrop .swal2-shown.swal2-center-end,
    body.swal2-no-backdrop .swal2-shown.swal2-center-right {
      top: 50%;
      right: 0;
      -webkit-transform: translateY(-50%);
      transform: translateY(-50%);
    }

    body.swal2-no-backdrop .swal2-shown.swal2-bottom {
      bottom: 0;
      left: 50%;
      -webkit-transform: translateX(-50%);
      transform: translateX(-50%);
    }

    body.swal2-no-backdrop .swal2-shown.swal2-bottom-left,
    body.swal2-no-backdrop .swal2-shown.swal2-bottom-start {
      bottom: 0;
      left: 0;
    }

    body.swal2-no-backdrop .swal2-shown.swal2-bottom-end,
    body.swal2-no-backdrop .swal2-shown.swal2-bottom-right {
      right: 0;
      bottom: 0;
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
      -webkit-overflow-scrolling: touch;
    }

    .swal2-container.swal2-top {
      align-items: flex-start;
    }

    .swal2-container.swal2-top-left,
    .swal2-container.swal2-top-start {
      align-items: flex-start;
      justify-content: flex-start;
    }

    .swal2-container.swal2-top-end,
    .swal2-container.swal2-top-right {
      align-items: flex-start;
      justify-content: flex-end;
    }

    .swal2-container.swal2-center {
      align-items: center;
    }

    .swal2-container.swal2-center-left,
    .swal2-container.swal2-center-start {
      align-items: center;
      justify-content: flex-start;
    }

    .swal2-container.swal2-center-end,
    .swal2-container.swal2-center-right {
      align-items: center;
      justify-content: flex-end;
    }

    .swal2-container.swal2-bottom {
      align-items: flex-end;
    }

    .swal2-container.swal2-bottom-left,
    .swal2-container.swal2-bottom-start {
      align-items: flex-end;
      justify-content: flex-start;
    }

    .swal2-container.swal2-bottom-end,
    .swal2-container.swal2-bottom-right {
      align-items: flex-end;
      justify-content: flex-end;
    }

    .swal2-container.swal2-grow-fullscreen>.swal2-modal {
      display: flex !important;
      flex: 1;
      align-self: stretch;
      justify-content: center;
    }

    .swal2-container.swal2-grow-row>.swal2-modal {
      display: flex !important;
      flex: 1;
      align-content: center;
      justify-content: center;
    }

    .swal2-container.swal2-grow-column {
      flex: 1;
      flex-direction: column;
    }

    .swal2-container.swal2-grow-column.swal2-bottom,
    .swal2-container.swal2-grow-column.swal2-center,
    .swal2-container.swal2-grow-column.swal2-top {
      align-items: center;
    }

    .swal2-container.swal2-grow-column.swal2-bottom-left,
    .swal2-container.swal2-grow-column.swal2-bottom-start,
    .swal2-container.swal2-grow-column.swal2-center-left,
    .swal2-container.swal2-grow-column.swal2-center-start,
    .swal2-container.swal2-grow-column.swal2-top-left,
    .swal2-container.swal2-grow-column.swal2-top-start {
      align-items: flex-start;
    }

    .swal2-container.swal2-grow-column.swal2-bottom-end,
    .swal2-container.swal2-grow-column.swal2-bottom-right,
    .swal2-container.swal2-grow-column.swal2-center-end,
    .swal2-container.swal2-grow-column.swal2-center-right,
    .swal2-container.swal2-grow-column.swal2-top-end,
    .swal2-container.swal2-grow-column.swal2-top-right {
      align-items: flex-end;
    }

    .swal2-container.swal2-grow-column>.swal2-modal {
      display: flex !important;
      flex: 1;
      align-content: center;
      justify-content: center;
    }

    .swal2-container:not(.swal2-top):not(.swal2-top-start):not(.swal2-top-end):not(.swal2-top-left):not(.swal2-top-right):not(.swal2-center-start):not(.swal2-center-end):not(.swal2-center-left):not(.swal2-center-right):not(.swal2-bottom):not(.swal2-bottom-start):not(.swal2-bottom-end):not(.swal2-bottom-left):not(.swal2-bottom-right)>.swal2-modal {
      margin: auto;
    }

    @media all and (-ms-high-contrast: none),
    (-ms-high-contrast: active) {
      .swal2-container .swal2-modal {
        margin: 0 !important;
      }
    }

    .swal2-container.swal2-fade {
      transition: background-color 0.1s;
    }

    .swal2-container.swal2-shown {
      background-color: rgba(0, 0, 0, 0.4);
    }

    .swal2-popup {
      display: none;
      position: relative;
      flex-direction: column;
      justify-content: center;
      width: 32em;
      max-width: 100%;
      padding: 1.25em;
      border-radius: 0.3125em;
      background: #fff;
      font-family: inherit;
      font-size: 1rem;
      box-sizing: border-box;
    }

    .swal2-popup:focus {
      outline: 0;
    }

    .swal2-popup.swal2-loading {
      overflow-y: hidden;
    }

    .swal2-popup .swal2-header {
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    .swal2-popup .swal2-title {
      display: block;
      position: relative;
      max-width: 100%;
      margin: 0 0 0.4em;
      padding: 0;
      color: #595959;
      font-size: 1.875em;
      font-weight: 600;
      text-align: center;
      text-transform: none;
      word-wrap: break-word;
    }

    .swal2-popup .swal2-actions {
      align-items: center;
      justify-content: center;
      margin: 1.25em auto 0;
    }

    .swal2-popup .swal2-actions:not(.swal2-loading) .swal2-styled[disabled] {
      opacity: 0.4;
    }

    .swal2-popup .swal2-actions:not(.swal2-loading) .swal2-styled:hover {
      -webkit-transform: translateY(-3px);
      transform: translateY(-3px);
    }

    .swal2-popup .swal2-actions:not(.swal2-loading) .swal2-styled:active {
      background-image: linear-gradient(rgba(0, 0, 0, 0.2),
          rgba(0, 0, 0, 0.2));
    }

    .swal2-popup .swal2-actions.swal2-loading .swal2-styled.swal2-confirm {
      width: 2.5em;
      height: 2.5em;
      margin: 0.46875em;
      padding: 0;
      border: 0.25em solid transparent;
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
      user-select: none;
    }

    .swal2-popup .swal2-actions.swal2-loading .swal2-styled.swal2-cancel {
      margin-right: 30px;
      margin-left: 30px;
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
      content: "";
      -webkit-animation: swal2-rotate-loading 1.5s linear 0s infinite normal;
      animation: swal2-rotate-loading 1.5s linear 0s infinite normal;
    }

    .swal2-popup .swal2-styled {
      margin: 0 0.3125em;
      padding: 0.625em 2em;
      font-weight: 500;
      box-shadow: none;
    }

    .swal2-popup .swal2-styled:not([disabled]) {
      cursor: pointer;
    }

    .swal2-popup .swal2-styled.swal2-confirm {
      border: 0;
      border-radius: 0.25em;
      background: initial;
      background-color: #4361ee;
      color: #fff;
      font-size: 14px;
    }

    .swal2-popup .swal2-styled.swal2-cancel {
      background-color: #fff;
      color: #4361ee;
      font-weight: 700;
      border: 1px solid #e8e8e8;
    }

    .swal2-popup .swal2-styled:focus {
      outline: 0;
      box-shadow: 0 0 0 2px #fff, 0 0 0 4px rgba(50, 100, 150, 0.4);
    }

    .swal2-popup .swal2-styled::-moz-focus-inner {
      border: 0;
    }

    .swal2-popup .swal2-footer {
      justify-content: center;
      margin: 1.25em 0 0;
      padding-top: 1em;
      border-top: 1px solid #eee;
      color: #545454;
      font-size: 1em;
    }

    .swal2-popup .swal2-image {
      max-width: 100%;
      margin: 1.25em auto;
    }

    .swal2-popup .swal2-close {
      position: absolute;
      top: 0;
      right: 0;
      justify-content: center;
      width: 1.2em;
      height: 1.2em;
      padding: 0;
      transition: color 0.1s ease-out;
      border: none;
      border-radius: 0;
      background: 0 0;
      color: #ccc;
      font-family: serif;
      font-size: 2.5em;
      line-height: 1.2;
      cursor: pointer;
      overflow: hidden;
    }

    .swal2-popup .swal2-close:hover {
      -webkit-transform: none;
      transform: none;
      color: #f27474;
    }

    .swal2-popup>.swal2-checkbox,
    .swal2-popup>.swal2-file,
    .swal2-popup>.swal2-input,
    .swal2-popup>.swal2-radio,
    .swal2-popup>.swal2-select,
    .swal2-popup>.swal2-textarea {
      display: none;
    }

    .swal2-popup .swal2-content {
      justify-content: center;
      margin: 0;
      padding: 0;
      color: #545454;
      font-size: 1.125em;
      font-weight: 300;
      line-height: normal;
      word-wrap: break-word;
    }

    .swal2-popup #swal2-content {
      text-align: center;
    }

    .swal2-popup .swal2-checkbox,
    .swal2-popup .swal2-file,
    .swal2-popup .swal2-input,
    .swal2-popup .swal2-radio,
    .swal2-popup .swal2-select,
    .swal2-popup .swal2-textarea {
      margin: 1em auto;
    }

    .swal2-popup .swal2-file,
    .swal2-popup .swal2-input,
    .swal2-popup .swal2-textarea {
      width: 100%;
      transition: border-color 0.3s, box-shadow 0.3s;
      border: 1px solid #d9d9d9;
      border-radius: 0.1875em;
      font-size: 1.125em;
      box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.06);
      box-sizing: border-box;
    }

    .swal2-popup .swal2-file.swal2-inputerror,
    .swal2-popup .swal2-input.swal2-inputerror,
    .swal2-popup .swal2-textarea.swal2-inputerror {
      border-color: #f27474 !important;
      box-shadow: 0 0 2px #f27474 !important;
    }

    .swal2-popup .swal2-file:focus,
    .swal2-popup .swal2-input:focus,
    .swal2-popup .swal2-textarea:focus {
      border: 1px solid #b4dbed;
      outline: 0;
      box-shadow: 0 0 3px #c4e6f5;
    }

    .swal2-popup .swal2-file::-webkit-input-placeholder,
    .swal2-popup .swal2-input::-webkit-input-placeholder,
    .swal2-popup .swal2-textarea::-webkit-input-placeholder {
      color: #ccc;
    }

    .swal2-popup .swal2-file:-ms-input-placeholder,
    .swal2-popup .swal2-input:-ms-input-placeholder,
    .swal2-popup .swal2-textarea:-ms-input-placeholder {
      color: #ccc;
    }

    .swal2-popup .swal2-file::-ms-input-placeholder,
    .swal2-popup .swal2-input::-ms-input-placeholder,
    .swal2-popup .swal2-textarea::-ms-input-placeholder {
      color: #ccc;
    }

    .swal2-popup .swal2-file::placeholder,
    .swal2-popup .swal2-input::placeholder,
    .swal2-popup .swal2-textarea::placeholder {
      color: #ccc;
    }

    .swal2-popup .swal2-range input {
      width: 80%;
    }

    .swal2-popup .swal2-range output {
      width: 20%;
      font-weight: 600;
      text-align: center;
    }

    .swal2-popup .swal2-range input,
    .swal2-popup .swal2-range output {
      height: 2.625em;
      margin: 1em auto;
      padding: 0;
      font-size: 1.125em;
      line-height: 2.625em;
    }

    .swal2-popup .swal2-input {
      height: 2.625em;
      padding: 0.75em;
    }

    .swal2-popup .swal2-input[type="number"] {
      max-width: 10em;
    }

    .swal2-popup .swal2-file {
      font-size: 1.125em;
    }

    .swal2-popup .swal2-textarea {
      height: 6.75em;
      padding: 0.75em;
    }

    .swal2-popup .swal2-select {
      min-width: 50%;
      max-width: 100%;
      padding: 0.375em 0.625em;
      color: #545454;
      font-size: 1.125em;
    }

    .swal2-popup .swal2-checkbox,
    .swal2-popup .swal2-radio {
      align-items: center;
      justify-content: center;
    }

    .swal2-popup .swal2-checkbox label,
    .swal2-popup .swal2-radio label {
      margin: 0 0.6em;
      font-size: 1.125em;
    }

    .swal2-popup .swal2-checkbox input,
    .swal2-popup .swal2-radio input {
      margin: 0 0.4em;
    }

    .swal2-popup .swal2-validationerror {
      display: none;
      align-items: center;
      justify-content: center;
      padding: 0.625em;
      background: #f0f0f0;
      color: #666;
      font-size: 1em;
      font-weight: 300;
      overflow: hidden;
    }

    .swal2-popup .swal2-validationerror::before {
      display: inline-block;
      width: 1.5em;
      min-width: 1.5em;
      height: 1.5em;
      margin: 0 0.625em;
      border-radius: 50%;
      background-color: #f27474;
      color: #fff;
      font-weight: 600;
      line-height: 1.5em;
      text-align: center;
      content: "!";
      zoom: normal;
    }

    @supports (-ms-accelerator: true) {
      .swal2-range input {
        width: 100% !important;
      }

      .swal2-range output {
        display: none;
      }
    }

    @media all and (-ms-high-contrast: none),
    (-ms-high-contrast: active) {
      .swal2-range input {
        width: 100% !important;
      }

      .swal2-range output {
        display: none;
      }
    }

    @-moz-document url-prefix() {
      .swal2-close:focus {
        outline: 2px solid rgba(50, 100, 150, 0.4);
      }
    }

    .swal2-icon {
      position: relative;
      justify-content: center;
      width: 5em;
      height: 5em;
      margin: 1.25em auto 1.875em;
      border: 0.25em solid transparent;
      border-radius: 50%;
      line-height: 5em;
      cursor: default;
      box-sizing: content-box;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
      zoom: normal;
    }

    .swal2-icon-text {
      font-size: 3.75em;
    }

    .swal2-icon.swal2-error {
      border-color: #f27474;
    }

    .swal2-icon.swal2-error .swal2-x-mark {
      position: relative;
      flex-grow: 1;
    }

    .swal2-icon.swal2-error [class^="swal2-x-mark-line"] {
      display: block;
      position: absolute;
      top: 2.3125em;
      width: 2.9375em;
      height: 0.3125em;
      border-radius: 0.125em;
      background-color: #f27474;
    }

    .swal2-icon.swal2-error [class^="swal2-x-mark-line"][class$="left"] {
      left: 1.0625em;
      -webkit-transform: rotate(45deg);
      transform: rotate(45deg);
    }

    .swal2-icon.swal2-error [class^="swal2-x-mark-line"][class$="right"] {
      right: 1em;
      -webkit-transform: rotate(-45deg);
      transform: rotate(-45deg);
    }

    .swal2-icon.swal2-warning {
      border-color: #facea8;
      color: #f8bb86;
    }

    .swal2-icon.swal2-info {
      border-color: #9de0f6;
      color: #3fc3ee;
    }

    .swal2-icon.swal2-question {
      border-color: #c9dae1;
      color: #87adbd;
    }

    .swal2-icon.swal2-success {
      border-color: #a5dc86;
    }

    .swal2-icon.swal2-success [class^="swal2-success-circular-line"] {
      position: absolute;
      width: 3.75em;
      height: 7.5em;
      -webkit-transform: rotate(45deg);
      transform: rotate(45deg);
      border-radius: 50%;
    }

    .swal2-icon.swal2-success [class^="swal2-success-circular-line"][class$="left"] {
      top: -0.4375em;
      left: -2.0635em;
      -webkit-transform: rotate(-45deg);
      transform: rotate(-45deg);
      -webkit-transform-origin: 3.75em 3.75em;
      transform-origin: 3.75em 3.75em;
      border-radius: 7.5em 0 0 7.5em;
    }

    .swal2-icon.swal2-success [class^="swal2-success-circular-line"][class$="right"] {
      top: -0.6875em;
      left: 1.875em;
      -webkit-transform: rotate(-45deg);
      transform: rotate(-45deg);
      -webkit-transform-origin: 0 3.75em;
      transform-origin: 0 3.75em;
      border-radius: 0 7.5em 7.5em 0;
    }

    .swal2-icon.swal2-success .swal2-success-ring {
      position: absolute;
      top: -0.25em;
      left: -0.25em;
      width: 100%;
      height: 100%;
      border: 0.25em solid rgba(165, 220, 134, 0.3);
      border-radius: 50%;
      z-index: 2;
      box-sizing: content-box;
    }

    .swal2-icon.swal2-success .swal2-success-fix {
      position: absolute;
      top: 0.5em;
      left: 1.625em;
      width: 0.4375em;
      height: 5.625em;
      -webkit-transform: rotate(-45deg);
      transform: rotate(-45deg);
      z-index: 1;
    }

    .swal2-icon.swal2-success [class^="swal2-success-line"] {
      display: block;
      position: absolute;
      height: 0.3125em;
      border-radius: 0.125em;
      background-color: #a5dc86;
      z-index: 2;
    }

    .swal2-icon.swal2-success [class^="swal2-success-line"][class$="tip"] {
      top: 2.875em;
      left: 0.875em;
      width: 1.5625em;
      -webkit-transform: rotate(45deg);
      transform: rotate(45deg);
    }

    .swal2-icon.swal2-success [class^="swal2-success-line"][class$="long"] {
      top: 2.375em;
      right: 0.5em;
      width: 2.9375em;
      -webkit-transform: rotate(-45deg);
      transform: rotate(-45deg);
    }

    .swal2-progresssteps {
      align-items: center;
      margin: 0 0 1.25em;
      padding: 0;
      font-weight: 600;
    }

    .swal2-progresssteps li {
      display: inline-block;
      position: relative;
    }

    .swal2-progresssteps .swal2-progresscircle {
      width: 2em;
      height: 2em;
      border-radius: 2em;
      background: #3085d6;
      color: #fff;
      line-height: 2em;
      text-align: center;
      z-index: 20;
    }

    .swal2-progresssteps .swal2-progresscircle:first-child {
      margin-left: 0;
    }

    .swal2-progresssteps .swal2-progresscircle:last-child {
      margin-right: 0;
    }

    .swal2-progresssteps .swal2-progresscircle.swal2-activeprogressstep {
      background: #3085d6;
    }

    .swal2-progresssteps .swal2-progresscircle.swal2-activeprogressstep~.swal2-progresscircle {
      background: #add8e6;
    }

    .swal2-progresssteps .swal2-progresscircle.swal2-activeprogressstep~.swal2-progressline {
      background: #add8e6;
    }

    .swal2-progresssteps .swal2-progressline {
      width: 2.5em;
      height: 0.4em;
      margin: 0 -1px;
      background: #3085d6;
      z-index: 10;
    }

    [class^="swal2"] {
      -webkit-tap-highlight-color: transparent;
    }

    .swal2-show {
      -webkit-animation: swal2-show 0.3s;
      animation: swal2-show 0.3s;
    }

    .swal2-show.swal2-noanimation {
      -webkit-animation: none;
      animation: none;
    }

    .swal2-hide {
      -webkit-animation: swal2-hide 0.15s forwards;
      animation: swal2-hide 0.15s forwards;
    }

    .swal2-hide.swal2-noanimation {
      -webkit-animation: none;
      animation: none;
    }

    [dir="rtl"] .swal2-close {
      right: auto;
      left: 0;
    }

    .swal2-animate-success-icon .swal2-success-line-tip {
      -webkit-animation: swal2-animate-success-line-tip 0.75s;
      animation: swal2-animate-success-line-tip 0.75s;
    }

    .swal2-animate-success-icon .swal2-success-line-long {
      -webkit-animation: swal2-animate-success-line-long 0.75s;
      animation: swal2-animate-success-line-long 0.75s;
    }

    .swal2-animate-success-icon .swal2-success-circular-line-right {
      -webkit-animation: swal2-rotate-success-circular-line 4.25s ease-in;
      animation: swal2-rotate-success-circular-line 4.25s ease-in;
    }

    .swal2-animate-error-icon {
      -webkit-animation: swal2-animate-error-icon 0.5s;
      animation: swal2-animate-error-icon 0.5s;
    }

    .swal2-animate-error-icon .swal2-x-mark {
      -webkit-animation: swal2-animate-error-x-mark 0.5s;
      animation: swal2-animate-error-x-mark 0.5s;
    }

    @-webkit-keyframes swal2-rotate-loading {
      0% {
        -webkit-transform: rotate(0);
        transform: rotate(0);
      }

      100% {
        -webkit-transform: rotate(360deg);
        transform: rotate(360deg);
      }
    }

    @keyframes swal2-rotate-loading {
      0% {
        -webkit-transform: rotate(0);
        transform: rotate(0);
      }

      100% {
        -webkit-transform: rotate(360deg);
        transform: rotate(360deg);
      }
    }
  </style>
</head>

<body class="">
  <!-- BEGIN LOADER -->

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
    <div id="content" class="main-content">
      <div class="layout-px-spacing">
        <div class="row layout-top-spacing">
          <div class="col-md-8 offset-md-2">
            <div class="card component-card">
              <div class="card-body">
                <div class="user-profile">
                  <div class="row">
                    <div class="col-md-12">
                      <form method="POST" enctype="multipart/form-data" id="depositForm">

                        <div class="form-group mb-4 mt-4">
                          <label for="">Amount</label>
                          <div class="input-group">
                            <div class="input-group-prepend">
                              <span class="input-group-text" id="basic-addon1" style="font-size: 30px; font-weight: 600;color: blue;">
                               <?php echo  $currency_type  ?>
                              </span>
                            </div>

                            <input type="number" class="form-control" name="amount" placeholder="Amount"
                              aria-label="notification" aria-describedby="basic-addon1" />
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group mb-4 mt-4">
                              <label for="">Crypto Type</label>
                              <div class="input-group">
                                <div class="btn-group bootstrap-select input-group-btn" style="width: 100%">
                                  <select name="crypto_name" class="selectpicker" onchange="crypto_type(this.value)"
                                    data-width="100%" tabindex="-98">
                                    <option>Select</option>
                                    <?php 
                                      $query = "SELECT * FROM `payment_details_crypto`";
                                      $result = mysqli_query($connection, $query);
                                      if(mysqli_num_rows($result) > 0){
                                        while($data = mysqli_fetch_assoc($result)){
                                          $crypto_name = $data['name'];
                                          $crypto_id = $data['id'];
                                          echo "<option value='$crypto_id'>$crypto_name</option>";
                                        }
                                      }
                                    ?>
                                  </select>

                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group mb-4 mt-4">
                              <label for="">Wallet Address</label>
                              <div class="input-group">
                                <input type="text" class="form-control" name="wallet_address" id="wallet_address"
                                  placeholder="Wallet Address" aria-label="notification" aria-describedby="basic-addon1"
                                  readonly="" />
                                <a class="btn btn-primary sm-2" href="javascript:;" data-clipboard-action="copy"
                                  data-clipboard-target="#wallet_address"><svg xmlns="http://www.w3.org/2000/svg"
                                    width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                    class="feather feather-copy">
                                    <rect x="9" y="9" width="13" height="13" rx="2" ry="2"></rect>
                                    <path d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"></path>
                                  </svg>
                                  Copy</a>
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-md-12">
                            <div class="widget-content widget-content-area">
                              <div class="custom-file-container" data-upload-id="myFirstImage">
                                <label>Upload (Single File)
                                  <a href="javascript:void(0)" class="custom-file-container__image-clear"
                                    title="Clear Image">x</a></label>
                                <label class="custom-file-container__custom-file">
                                  <input type="file" class="custom-file-container__custom-file__custom-file-input"
                                    name="image" accept="image/*" />
                                  <input type="hidden" name="MAX_FILE_SIZE" value="10485760" />
                                  <span class="custom-file-container__custom-file__custom-file-control">Choose
                                    file...<span
                                      class="custom-file-container__custom-file__custom-file-control__button">
                                      Browse
                                    </span></span>
                                </label>
                                <div class="custom-file-container__image-preview" style="
                                      background-image: url('data:image/png;base64,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alQAAAAAgClIaAAAAABgChIaAAAAAJiChAYAAAAApiChAQAAAIApSGgAAAAAYAoSGgAAAACYgoQGAAAAAKYgoQEAAACAKUhoAAAAAGAKEhoAAAAAmIKEBgAAAACmIKEBAAAAgClIaAAAAABgChIaAAAAAJiChAYAAAAApiChAQAAAIApSGgAAAAAYAoSGgAAAACYgoQGAAAAAKYgoQEAAACAKUhoAAAAAGAKEhoAAAAAmIKEBgAAAACmIKEBAAAAgClIaAAAAABgChIaAAAAAJiChAYAAAAApiChAQAAAIApSGgAAAAAYAoSGgAAAACYgoQGAAAAAKYgoQEAAACAKUhoAAAAAGAKEhoAAAAAmIKEBgAAAACmIKEBAAAAgClIaAAAAABgChIaAAAAAJiChAYAAAAApiChAQAAAIApSGgAAAAAYAoSGgAAAACYgoQGAAAAAKYgoQEAAACAKUhoAAAAAGAKEhoAAAAAmIKEBgAAAACmIKEBAAAAgClIaAAAAABgChIaAAAAAJiChAYAAAAApiChAQAAAIApSGgAAAAAYAoSGgAAAACYgoQGAAAAAKYgoQEAAACAKUhoAAAAAGAKEhoAAAAAmIKEBgAAAACmIKEBAAAAgClIaAAAAABgChIaAAAAAJiChAYAAAAApiChAQAAAIApSGgAAAAAYAoSGgAAAACYgoQGAAAAAKYgoQEAAACAKUhoAAAAAGAKEhoAAAAAmIKEBgAAAACmIKEBAAAAgClIaAAAAABgChIaAAAAAJiChAYAAAAApiChAQAAAIApSGgAAAAAYAoSGgAAAACYgoQGAAAAAKYgoQEAAACAKUhoAAAAAGAKEhoAAAAAmIKEBgAAAACmIKEBAAAAgClIaAAAAABgChIaAAAAAJiChAYAAAAApiChAQAAAIApSGgAAAAAYAoSGgAAAACYgoQGAAAAAKYgoQEAAACAKf4/a+o6ARVh9YkAAAAASUVORK5CYII=');
                                    "></div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-12 text-center">
                            <button class="btn btn-primary mb-2 mr-2" name="deposit">
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-log-out">
                                <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                                <polyline points="16 17 21 12 16 7"></polyline>
                                <line x1="21" y1="12" x2="9" y2="12"></line>
                              </svg>
                              Deposit
                            </button>
                          </div>
                        </div>
                        <input type="text" value="" name="url" class="url" style="display: none;">
                        <input type="text" name="user" value="<?php echo $id ?>" style="display: none;">
                      </form>


                      <script>

                        document.querySelector('.url').value = window.location.href;

                        document.getElementById('depositForm').addEventListener('submit', function (e) {
                          e.preventDefault()
                          formData = new FormData(this);
                          fetch('<?php echo $domain; ?>server/api/client/deposit.php', {
                            method: 'POST',
                            body: formData
                          })
                            .then(response => {
                              if (!response.ok) {
                                throw new Error('Network response was not ok: ' + response.statusText);
                              }
                              return response.json(); // Or .json() if your API sends JSON
                            })
                            .then(data => {

                              console.log(data);
                              if (data.status == 'success') {


                                Swal.fire({
                                  icon: 'success',
                                  title: 'Success!',
                                  text: data.message,
                                  confirmButtonText: 'ok'
                                });


                                setTimeout(() => {

                                   location.href = '';
                                }, 5000);

                              }

                              if (data.status == 'error') {

                                Swal.fire({
                                  icon: 'error',
                                  title: 'Oops...',
                                  text: data.message,
                                  confirmButtonText: 'Got it'
                                });


                              }
                            })
                            .catch(error => {
                              console.error('Error:', error);
                              
                            });






                        });


                      </script>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="footer-wrapper">
        <div class="footer-section f-section-1">
          <p class="">
            Copyright ©    <?php  include('../includes/copywrite.php') ?> <?php echo  $sitename ?>, All rights reserved.
          </p>
        </div>
        <div class="footer-section f-section-2">
          <p class=""><?php echo  $sitename ?></p>
        </div>
      </div>
    </div>
    <!--  END CONTENT AREA  -->
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
        <?php 
          $query = "SELECT * FROM `payment_details_crypto`";
          $result = mysqli_query($connection, $query);
          $crypto_data = [];

          if (mysqli_num_rows($result) > 0) {
            while ($data = mysqli_fetch_assoc($result)) {
              $crypto_data[] = [
                'id' => $data['id'],
                'wallet_address' => $data['address']
              ];
            }
          }
        ?>

      var data = <?php echo json_encode($crypto_data); ?>;

    function crypto_type(id) {
      for (var i = 0; i < data.length; i++) {
        if (id == data[i].id) {
          document.getElementById('wallet_address').value = data[i].wallet_address;
          break;
        }
      }
    }
    var firstUpload = new FileUploadWithPreview("myFirstImage");
  </script>
  <!-- END GLOBAL MANDATORY SCRIPTS -->

  <!-- BEGIN PAGE LEVEL SCRIPTS -->
  <script src="../source/plugins/table/datatable/datatables.js"></script>
  <script>
    $("#default-ordering").DataTable({
      dom:
        "<'dt--top-section'<'row'<'col-12 col-sm-6 d-flex justify-content-sm-start justify-content-center'l><'col-12 col-sm-6 d-flex justify-content-sm-end justify-content-center mt-sm-0 mt-3'f>>>" +
        "<'table-responsive'tr>" +
        "<'dt--bottom-section d-sm-flex justify-content-sm-between text-center'<'dt--pages-count  mb-sm-0 mb-3'i><'dt--pagination'p>>",
      oLanguage: {
        oPaginate: {
          sPrevious:
            '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>',
          sNext:
            '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>',
        },
        sInfo: "Showing page _PAGE_ of _PAGES_",
        sSearch:
          '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
        sSearchPlaceholder: "Search...",
        sLengthMenu: "Results :  _MENU_",
      },
      //"order": [[ 3, "desc" ]],
      stripeClasses: [],
      lengthMenu: [7, 10, 20, 50],
      pageLength: 7,
      drawCallback: function () {
        $(".dataTables_paginate > .pagination").addClass(
          " pagination-style-13 pagination-bordered"
        );
      },
    });
  </script>
  <!-- END PAGE LEVEL SCRIPTS -->



  <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->

  <script src="../source/plugins/apex/apexcharts.min.js"></script>
  <script src="../source/assets/js/custom.js"></script>
  <script src="../source/assets/js/dashboard/dash_1.js"></script>

  
  
  <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->

  <script src="../source/plugins/notification/snackbar/snackbar.min.js"></script>
  <script src="../source/assets/js/clipboard/clipboard.min.js"></script>
  <script src="../source/assets/js/forms/custom-clipboard.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/imask/3.4.0/imask.min.js"></script>
  <script src="../source/assets/js/card/card.js"></script>
  <!-- END PAGE LEVEL PLUGINS -->

  <!--  BEGIN CUSTOM SCRIPTS FILE  -->
  <script src="../source/assets/js/components/notification/custom-snackbar.js"></script>




  <svg id="SvgjsSvg1001" width="2" height="0" xmlns="http://www.w3.org/2000/svg" version="1.1"
    xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" style="
        overflow: hidden;
        top: -100%;
        left: -100%;
        position: absolute;
        opacity: 0;
      ">
    <defs id="SvgjsDefs1002"></defs>
    <polyline id="SvgjsPolyline1003" points="0,0"></polyline>
    <path id="SvgjsPath1004" d="M0 0 "></path>
  </svg>
</body>

</html>