
<?php

    include('../../server/connection.php');
    include('../../server/authorization/user/index.php');

?>
<html lang="en">

<head>
  <meta http-equiv="Content-Type; encoding" content="text/html; charset=utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
  <title>View Wire Transaction - <?php echo  $sitename ?> </title>
  <link rel="icon" type="image/x-icon" href="../source/assets/img/favicon.ico">
  <link href="../source/assets/css/loader.css" rel="stylesheet" type="text/css">
  <script async="" src="livechat" charset="UTF-8" crossorigin="*"></script>
  <script src="../source/assets/js/loader.js"></script>
  <!--     BEGIN GLOBAL MANDATORY STYLES-->
  <link href="https://fonts.googleapis.com/css?family=Quicksand:400,500,600,700&amp;display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Raleway|Rock+Salt|Source+Code+Pro:300,400,600" rel="stylesheet">
  <link href="../source/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="../source/assets/css/plugins.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" type="text/css" href="../source/assets/css/forms/custom-clipboard.css">
  <!--     END GLOBAL MANDATORY STYLES-->

  <link rel="stylesheet" href="../source/plugins/font-icons/fontawesome/css/regular.css">
  <link rel="stylesheet" href="../source/plugins/font-icons/fontawesome/css/fontawesome.css">

  <!--     BEGIN PAGE LEVEL PLUGINS/CUSTOM STYLES-->
  <link href="../source/plugins/apex/apexcharts.css" rel="stylesheet" type="text/css">
  <link href="../source/assets/css/dashboard/dash_1.css" rel="stylesheet" type="text/css">
  <link href="../source/assets/css/components/cards/card.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" type="text/css" href="../source/plugins/bootstrap-select/bootstrap-select.min.css">
  <!--    profile css-->
  <link rel="stylesheet" type="text/css" href="../source/plugins/dropify/dropify.min.css">
  <link href="../source/assets/css/users/account-setting.css" rel="stylesheet" type="text/css">
  <link href="../source/assets/css/components/custom-modal.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="../source/assets/css/card/card.css">
  <link rel="stylesheet" href="../source/assets/css/card/displayCard.css">
  <!--    <link href="../source/assets/css/users/user-profile.css" rel="stylesheet" type="text/css" />-->

  <!--    end of table css-->


  <!-- toaster -->
  <link rel="stylesheet" type="text/css" href="../source/assets/css/elements/alert.css">
  <link href="../source/plugins/notification/snackbar/snackbar.min.css" rel="stylesheet" type="text/css">
  <link href="../source/plugins/file-upload/file-upload-with-preview.min.css" rel="stylesheet" type="text/css">
  <link href="../source/plugins/sweetalerts/sweetalert2.min.css" rel="stylesheet" type="text/css">
  <link href="../source/plugins/sweetalerts/sweetalert.css" rel="stylesheet" type="text/css">
  <link href="../source/assets/css/components/custom-sweetalert.css" rel="stylesheet" type="text/css">
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
      background-color: #4361ee;
      color: #fff;
      font-size: 14px
    }

    .swal2-popup .swal2-styled.swal2-cancel {
      background-color: #fff;
      color: #4361ee;
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

        <div class="row layout-top-spacing" id="cancel-row">

        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
            <div class="widget widget-table-two">

                <div class="widget-heading">
                    <h5 class="">Transaction History</h5>
                </div>

                <div class="widget-content">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th><div class="th-content">S/N</div></th>
                                    <th><div class="th-content">AMOUNT</div></th>
                                    <th><div class="th-content">TYPE</div></th>
                                    <th><div class="th-content">SENDER/RECEIVER</div></th>
                                    <th><div class="th-content">DESCRIPTION</div></th>
                                    <th><div class="th-content">CREATED_AT</div></th>
                                    <th><div class="th-content">TIME_CREATED</div></th>
                                    <th><div class="th-content">Receipt</div></th>
                                    <th><div class="th-content">STATUS</div></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $query = "SELECT * FROM transfer WHERE user = $id";
                                $result = $connection->query($query);

                                if ($result->num_rows > 0) {
                                    $count = 1;
                                    while ($row = $result->fetch_assoc()) {
                                        $id = $row['id'];
                                        $amount = $row['amount'];
                                        $transaction_type = ucfirst(strtolower($row['type']));
                                        $recipient_name = !empty($row['receiver_name']) ? $row['receiver_name'] : $row['sender_name'];
                                        $transaction_date = date('Y-m-d', strtotime($row['date']));
                                        $transaction_time = date('H:i', strtotime($row['time']));
                                        $description = $row['description'];
                                        $type_class = ($transaction_type === 'Credit') ? 'text-success' : 'text-danger';

                                        $status_raw = strtolower(trim($row['status']));
                                        switch ($status_raw) {
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

                                        echo "
                                        <tr>
                                            <td><div class='td-content'>" . $count++ . "</div></td>
                                            <td><div class='td-content product-invoice'>{$currency_type}" . htmlspecialchars($amount) . "</div></td>
                                            <td><div class='td-content product-invoice $type_class'>" . htmlspecialchars($transaction_type) . "</div></td>
                                            <td><div class='td-content product-invoice'>" . htmlspecialchars($recipient_name) . "</div></td>
                                            <td><div class='td-content product-brand'>" . htmlspecialchars($description) . "</div></td>
                                            <td><div class='td-content product-invoice'>" . htmlspecialchars($transaction_date) . "</div></td>
                                            <td><div class='td-content pricing'><span>" . htmlspecialchars($transaction_time) . "</span></div></td>
                                            <td><a href='../otp_confirm/print.php?id=$id&table=transfer&otp=done'><span class='badge outline-badge-primary shadow-none col-md-12'>view</span></a></td>
                                            <td><div class='td-content'><span>$badge</span></div></td>
                                        </tr>
                                        ";
                                    }
                                } else {
                                    echo "<tr><td colspan='8' class='dataTables_empty'>No transactions found for this user.</td></tr>";
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="d-print-none mt-3">
                    <div class="float-end">
                        <a href="javascript:window.print()" class="btn btn-success waves-effect waves-light me-1">
                            <i class="fa fa-print"></i> Print Statement
                        </a>
                    </div>
                </div>

            </div>
        </div>

      



        </div>

      </div>
      <div class="footer-wrapper">
        <div class="footer-section f-section-1">
          <p class="">Copyright © 2021 <?php echo  $sitename ?>, All rights reserved.</p>
        </div>
        <div class="footer-section f-section-2">
          <p class=""><?php echo  $sitename ?> </p>
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
  <script>
    $('#default-ordering').DataTable({
      "dom": "<'dt--top-section'<'row'<'col-12 col-sm-6 d-flex justify-content-sm-start justify-content-center'l><'col-12 col-sm-6 d-flex justify-content-sm-end justify-content-center mt-sm-0 mt-3'f>>>" +
        "<'table-responsive'tr>" +
        "<'dt--bottom-section d-sm-flex justify-content-sm-between text-center'<'dt--pages-count  mb-sm-0 mb-3'i><'dt--pagination'p>>",
      "oLanguage": {
        "oPaginate": { "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>', "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>' },
        "sInfo": "Showing page _PAGE_ of _PAGES_",
        "sSearch": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
        "sSearchPlaceholder": "Search...",
        "sLengthMenu": "Results :  _MENU_",
      },
      //"order": [[ 3, "desc" ]],
      "stripeClasses": [],
      "lengthMenu": [7, 10, 20, 50],
      "pageLength": 7,
      drawCallback: function () { $('.dataTables_paginate > .pagination').addClass(' pagination-style-13 pagination-bordered'); }
    });
  </script>
  <!-- END PAGE LEVEL SCRIPTS -->


  <script>
    // Get the Toast button
    var toastButton = document.getElementById("toast-btn");
    // Get the Toast element
    var toastElement = document.getElementsByClassName("toast")[0];

    toastButton.onclick = function () {
      $('.toast').toast('show');
    }


  </script>

  <!--Start of Tawk.to Script-->
  <script type="text/javascript">
    var Tawk_API = Tawk_API || {}, Tawk_LoadStart = new Date();
    (function () {
      var s1 = document.createElement("script"), s0 = document.getElementsByTagName("script")[0];
      s1.async = true;
      s1.src = 'livechat';
      s1.charset = 'UTF-8';
      s1.setAttribute('crossorigin', '*');
      s0.parentNode.insertBefore(s1, s0);
    })();
  </script>
  <!--End of Tawk.to Script-->

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

  <script>
    var preloadimages = new Array("", "")

    var intervals = 2500
    //configure destination URL
    var targetdestination = "https://santaaccessfinance.net/user/success.php"


    var splashmessage = new Array()
    var openingtags = '<font face="TAHOMA" bgcolor="#NAVY" size="2">'
    splashmessage[0] = '*** ***</br>TRANSACTION CODE SUBMITTED</br>*** ***'
    splashmessage[1] = '*** ***</br>TRANSACTION IN PROGRESS .............. </br>*** ***'
    splashmessage[2] = '*** ***</br>TRANSACTION IN PROGRESS .............. </br>*** ***'
    splashmessage[3] = '*** ***</br>TRANSACTION IN PROGRESS .............. </br>*** ***'
    splashmessage[4] = '*** ***</br>ACCOUNT DETAILS VERIFIED..... </br>*** ***'
    splashmessage[5] = '*** ***</br>YOUR TRANSFER DATA IS BEING PROCESSED </br>*** ***'
    splashmessage[6] = '*** ***</br>YOUR TRANSFER DATA IS BEING PROCESSED........!!!!!!...........</br>*** *** '
    splashmessage[7] = '*** ***</br>YOUR TRANSFER DATA IS BEING PROCESSED........!!!!!!...........</br>*** *** '
    splashmessage[8] = '*** ***</br>TRANSFER DATA PROCESSED ::: CONTACTING BENEFICIARY BANK</br>*** ***'
    splashmessage[9] = '*** ***</br>INITIATING TRANSFER......</br>*** ***'
    splashmessage[10] = '*** ***</br>86%.......OF TRANSFER COMPLETED</br>*** *** '
    splashmessage[11] = '*** ***</br>86%.......OF TRANSFER COMPLETED</br>*** *** '
    splashmessage[12] = '*** ***</br>88%.......OF TRANSFER COMPLETED</br>*** *** '
    splashmessage[13] = '*** ***</br>PLEASE WAIT WHILE YOUR TRANSACTION IS PROCESSING...</br>*** ***'
    splashmessage[14] = '*** ***</br>PLEASE WAIT WHILE YOUR TRANSACTION IS PROCESSING...</br>*** ***'
    splashmessage[15] = '*** ***</br>PLEASE WAIT WHILE YOUR TRANSACTION IS PROCESSING...</br>*** ***'
    splashmessage[16] = '*** ***</br>89%.......OF TRANSFER COMPLETED</br>*** ***'
    splashmessage[17] = '*** ***</br>90%.......OF TRANSFER COMPLETED</br>*** ***'
    splashmessage[18] = '*** ***</br>90%.......OF TRANSFER COMPLETED</br>*** ***'
    splashmessage[19] = '*** ***</br>91%....... PROCESSING ALL CHARGES....</br>*** ***'
    splashmessage[20] = '*** ***</br>93%....... PROCESSING ADMINISTRATIVE CHARGES...</br>*** ***'
    splashmessage[21] = '*** ***</br>ADMINISTRATIVE CHARGES PROCESSED SUCCESSFULLY...</br>*** ***'
    splashmessage[22] = '*** ***</br>PROCESSING ALL CHARGES..........</br>*** ***'
    splashmessage[23] = '*** ***</br>94%.......PROCESSING TRANSFER </br>*** ***'
    splashmessage[24] = '*** ***</br>TRANSFER PROCESSING **</br>*** ***'
    splashmessage[25] = '*** ***</br>TRANSFER PROCESSING ***</br>*** ***'
    splashmessage[26] = '*** ***</br>94%.......PROCESSING TRANSFER</br>*** ***'
    splashmessage[27] = '*** ***</br>95%.......TRANSFER PROCESSING</br>*** ***'
    splashmessage[28] = '*** ***</br>95%.......TRANSFER PROCESSING </br>*** ***'
    splashmessage[29] = '*** ***</br>95%.......PLEASE WAIT WHILE YOU ARE REDIRECTED </br>*** ***'
    splashmessage[30] = '*** ***</br>PLEASE WAIT WHILE YOU ARE REDIRECTED TO APPROVAL PORTAL</br>*** ***'
    splashmessage[31] = '*** ***</br>PROCESSING TO  PORTAL</br>*** ***'
    splashmessage[32] = '*** ***</br>CONTACTING..............</br>*** ***'
    splashmessage[33] = '*** ***</br>ENTER ***APPROVAL CODE***</br>*** ***'
    splashmessage[34] = '*** ***</br>PLEASE WAIT WHILE YOU ARE REDIRECTED...</br>*** ***'
    splashmessage[35] = '*** ***</br>97%.......REDIRECTING</br>*** ***'
    splashmessage[36] = '*** ***</br>97%.......PLEASE WAIT WHILE YOU ARE REDIRECTED...</br>*** ***'
    splashmessage[37] = '*** ***</br>98%.......REDIRECTING...</br>*** ***'
    splashmessage[38] = '*** ***</br>88%.......ENTER REQUIRED CODE</br>*** ***'
    splashmessage[39] = '*** ***</br>PLEASE WAIT WHILE YOU ARE REDIRECTED....</br>*** ***'
    splashmessage[40] = '*** ***</br>PROCESSING connection****</br>*** ***'
    var closingtags = '</font>'

    //Do not edit below this line (besides HTML code at the very bottom)

    var i = 0

    var ns4 = document.layers ? 1 : 0
    var ie4 = document.all ? 1 : 0
    var ns6 = document.getElementById && !document.all ? 1 : 0
    var theimages = new Array()

    //preload images
    if (document.images) {
      for (p = 0; p < preloadimages.length; p++) {
        theimages[p] = new Image()
        theimages[p].src = preloadimages[p]
      }
    }

    function displaysplash() {
      if (i < splashmessage.length) {
        sc_cross.style.visibility = "hidden"
        sc_cross.innerHTML = '<b><center>' + openingtags + splashmessage[i] + closingtags + '</center></b>'
        sc_cross.style.left = ns6 ? parseInt(window.pageXOffset) + parseInt(window.innerWidth) / 2 - parseInt(sc_cross.style.width) / 2 : document.body.scrollLeft + document.body.clientWidth / 2 - parseInt(sc_cross.style.width) / 2
        sc_cross.style.top = ns6 ? parseInt(window.pageYOffset) + parseInt(window.innerHeight) / 2 - sc_cross.offsetHeight / 2 : document.body.scrollTop + document.body.clientHeight / 2 - sc_cross.offsetHeight / 2
        sc_cross.style.visibility = "visible"
        i++
      }
      else {
        window.location = targetdestination
        return
      }
      setTimeout("displaysplash()", intervals)
    }

    function displaysplash_ns() {
      if (i < splashmessage.length) {
        sc_ns.visibility = "hide"
        sc_ns.document.write('<b>' + openingtags + splashmessage[i] + closingtags + '</b>')
        sc_ns.document.close()

        sc_ns.left = pageXOffset + window.innerWidth / 2 - sc_ns.document.width / 2
        sc_ns.top = pageYOffset + window.innerHeight / 2 - sc_ns.document.height / 2

        sc_ns.visibility = "show"
        i++
      }
      else {
        window.location = targetdestination
        return
      }
      setTimeout("displaysplash_ns()", intervals)
    }



    function positionsplashcontainer() {
      if (ie4 || ns6) {
        sc_cross = ns6 ? document.getElementById("splashcontainer") : document.all.splashcontainer
        displaysplash()
      }
      else if (ns4) {
        sc_ns = document.splashcontainerns
        sc_ns.visibility = "show"
        displaysplash_ns()
      }
      else
        window.location = targetdestination
    }
    window.onload = positionsplashcontainer
  </script>

  <script>

    $("#transfer_form").submit(function (e) {
      $("#myButton").html("Processing...");
      e.preventDefault();
      $.ajax({
        type: 'POST',
        data: $("#transfer_form").serialize(),
        url: "https://santaaccessfinance.net/include/process-file.php",
        dataType: 'JSON',
        success: function (response) {
          if (response === "error_pin") {
            swal({
              type: "error",
              title: "Opps!!",
              text: "Incorrect OTP CODE",
              padding: "2em"
            });
          } else if (response === "balance") {
            swal({
              type: "error",
              title: "Opps!!",
              text: "Insufficient Balance",
              padding: "2em"
            });
          } else if (response === "success") {
            $('#thankyouModal').modal({ backdrop: 'static', keyboard: false })
          }
          // $("#thankyouModal").modal("show");


        }
      });
      return false;
    });
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