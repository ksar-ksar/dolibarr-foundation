<?php // BEGIN PHP
$websitekey=basename(__DIR__);
if (! defined('USEDOLIBARRSERVER') && ! defined('USEDOLIBARREDITOR')) { require_once __DIR__.'/master.inc.php'; } // Load env if not already loaded
require_once DOL_DOCUMENT_ROOT.'/core/lib/website.lib.php';
require_once DOL_DOCUMENT_ROOT.'/core/website.inc.php';
ob_start();
if (! headers_sent()) {	/* because file is included inline when in edit mode and we don't want warning */ 
header('Cache-Control: max-age=3600, public, must-revalidate');
header('Content-type: text/css');
}
// END PHP ?>
/* CSS content (all pages) */
body.bodywebsite { margin: 0; font-family: 'Open Sans', sans-serif; }
.bodywebsite h1 { margin-top: 0; margin-bottom: 0; padding: 10px;}
@charset "UTF-8";
@import "//fonts.googleapis.com/css?family=Open+Sans";

.bodywebsite a,
.bodywebsite b,
.bodywebsite body,
.bodywebsite div,
.bodywebsite footer,
.bodywebsite form,
.bodywebsite h2,
.bodywebsite h3,
.bodywebsite h4,
.bodywebsite h5,
.bodywebsite header,
.bodywebsite html,
.bodywebsite i,
.bodywebsite img,
.bodywebsite li,
.bodywebsite nav,
.bodywebsite p,
.bodywebsite section,
.bodywebsite span,
.bodywebsite strong,
.bodywebsite ul {
  margin: 0;
  padding: 0;
  border: 0;
  font: inherit;
  font-size: 100%;
  vertical-align: baseline;
}
.bodywebsite html {
  line-height: 1;
  font-family: sans-serif;
  -webkit-text-size-adjust: 100%;
  -ms-text-size-adjust: 100%;
  font-size: 62.5%;
  -webkit-tap-highlight-color: transparent;
}
.bodywebsite ul {
  list-style: none;
  margin-top: 0;
  margin-bottom: 9px;
}
.bodywebsite a img {
  border: none;
}
.bodywebsite footer,
.bodywebsite header,
.bodywebsite nav,
.bodywebsite section {
  display: block;
}
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
  font-size: 13px;
  line-height: 1.42857;
  color: #111;
  background-color: #fff;
}
.bodywebsite a:focus {
  outline: thin dotted;
  outline: thin dotted #333;
  outline: 5px auto -webkit-focus-ring-color;
  outline-offset: -2px;
}
.bodywebsite a:active,
.bodywebsite a:hover {
  outline: 0;
}
.bodywebsite b,
.bodywebsite strong {
  font-weight: 700;
}
.bodywebsite img {
  border: 0;
  vertical-align: middle;
}
.bodywebsite button,
.bodywebsite input {
  font-size: 100%;
  margin: 0;
  line-height: normal;
  font-family: inherit;
  font-size: inherit;
  line-height: inherit;
  background-image: none;
}
.bodywebsite button {
  text-transform: none;
  -webkit-appearance: button;
  cursor: pointer;
}
.bodywebsite button::-moz-focus-inner,
.bodywebsite input::-moz-focus-inner {
  border: 0;
  padding: 0;
}
.bodywebsite *,
.bodywebsite :after,
.bodywebsite :before {
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}
.bodywebsite a {
  color: #dc7306;
  text-decoration: none;
}
.bodywebsite a:focus,
.bodywebsite a:hover {
  color: #515151;
  text-decoration: underline;
}
.bodywebsite .img-responsive {
  display: block;
  max-width: 100%;
  height: auto;
}
.bodywebsite p {
  margin: 0 0 9px;
}
.bodywebsite h2,
.bodywebsite h3,
.bodywebsite h4,
.bodywebsite h5 {
  font-family: Arial, Helvetica, sans-serif;
  font-weight: 500;
  line-height: 1.1;
}
.bodywebsite h2,
.bodywebsite h3 {
  margin-top: 2px;
  margin-bottom: 9px;
}
.bodywebsite h4,
.bodywebsite h5 {
  margin-top: 9px;
  margin-bottom: 9px;
}
.bodywebsite h2 {
  font-size: 27px;
}
.bodywebsite h3 {
  font-size: 23px;
}
.bodywebsite h4 {
  font-size: 17px;
}
.bodywebsite h5 {
  font-size: 13px;
}
.bodywebsite ul ul {
  margin-bottom: 0;
}
.bodywebsite .container {
  margin-right: auto;
  margin-left: auto;
  padding-left: 15px;
  padding-right: 15px;
}
.bodywebsite .row {
  margin-left: -15px;
  margin-right: -15px;
}
.bodywebsite .col-md-3,
.bodywebsite .col-md-6,
.bodywebsite .col-sm-12,
.bodywebsite .col-sm-2,
.bodywebsite .col-sm-3,
.bodywebsite .col-sm-4,
.bodywebsite .col-sm-9,
.bodywebsite .col-xs-12,
.bodywebsite header .row #header_logo {
  position: relative;
  min-height: 1px;
  padding-left: 15px;
  padding-right: 15px;
}
.bodywebsite .col-xs-12 {
  width: 100%;
}
.bodywebsite .container:after,
.bodywebsite .container:before,
.bodywebsite .row:after,
.bodywebsite .row:before {
  content: " ";
  display: table;
}
.bodywebsite .container:after,
.bodywebsite .row:after {
  clear: both;
}
@media (min-width: 768px) {
  .bodywebsite .container {
    max-width: 750px;
  }
  .bodywebsite .col-sm-2,
  .bodywebsite .col-sm-3,
  .bodywebsite .col-sm-4,
  .bodywebsite .col-sm-9,
  .bodywebsite header .row #header_logo {
    float: left;
  }
  .bodywebsite .col-sm-2 {
    width: 33%;
  }
  .bodywebsite .col-sm-9 {
    width: 75%;
  }
  .bodywebsite .col-sm-12 {
    width: 100%;
  }
  .bodywebsite .col-sm-3,
  .bodywebsite .col-sm-4,
  .bodywebsite header .row #header_logo {
    width: 25%;
  }
}
@media (min-width: 992px) {
  .bodywebsite .container {
    max-width: 970px;
  }
  .bodywebsite .col-md-3,
  .bodywebsite .col-md-6 {
    float: left;
  }
  .bodywebsite .col-md-3 {
    width: 25%;
  }
  .bodywebsite .col-md-6 {
    width: 50%;
  }
}
@media (min-width: 1200px) {
  .bodywebsite .container {
    max-width: 1170px;
  }
}
.bodywebsite .form-control {
  display: block;
  width: 100%;
  height: 32px;
  padding: 6px 12px;
  font-size: 13px;
  line-height: 1.42857;
  color: #9c9b9b;
  vertical-align: middle;
  background-color: #fff;
  border: 1px solid #d6d4d4;
  border-radius: 0;
  -webkit-box-shadow: inset 0 1px 1px #00000013;
  box-shadow: inset 0 1px 1px #00000013;
  -webkit-transition: border-color ease-in-out 0.15s, box-shadow ease-in-out 0.15s;
  transition: border-color ease-in-out 0.15s, box-shadow ease-in-out 0.15s;
}
.bodywebsite .form-control:focus {
  border-color: #66afe9;
  outline: 0;
  -webkit-box-shadow: inset 0 1px 1px #00000013 0 8px #66afe999;
  box-shadow: inset 0 1px 1px #00000013 0 8px #66afe999;
}
.bodywebsite .form-group {
  margin-bottom: 15px;
}
.bodywebsite .btn {
  display: inline-block;
  padding: 6px 12px;
  margin-bottom: 0;
  font-size: 13px;
  font-weight: 400;
  line-height: 1.42857;
  text-align: center;
  vertical-align: middle;
  cursor: pointer;
  border: 1px solid transparent;
  border-radius: 0;
  white-space: nowrap;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  -o-user-select: none;
  user-select: none;
}
.bodywebsite .btn:focus {
  outline: thin dotted #333;
  outline: 5px auto -webkit-focus-ring-color;
  outline-offset: -2px;
}
.bodywebsite .btn:focus,
.bodywebsite .btn:hover {
  color: #333;
  text-decoration: none;
}
.bodywebsite .btn:active {
  outline: 0;
  background-image: none;
  -webkit-box-shadow: inset 0 3px 5px #00000020;
  box-shadow: inset 0 3px 5px #00000020;
}
.bodywebsite .btn-default {
  color: #333;
  background-color: #fff;
  border-color: #ccc;
}
.bodywebsite .btn-default:active,
.bodywebsite .btn-default:focus,
.bodywebsite .btn-default:hover {
  color: #333;
  background-color: #ebebeb;
  border-color: #adadad;
}
.bodywebsite .btn-default:active {
  background-image: none;
}
.bodywebsite .nav {
  margin-bottom: 0;
  padding-left: 0;
  list-style: none;
}
.bodywebsite .form-control:-moz-placeholder,
.bodywebsite .form-control::-moz-placeholder,
.bodywebsite .form-control:-ms-input-placeholder,
.bodywebsite .form-control::-webkit-input-placeholder {
  color: #999;
}
.bodywebsite .nav:after,
.bodywebsite .nav:before,
.bodywebsite .clearfix:after,
.bodywebsite .clearfix:before {
  content: " ";
  display: table;
}
.bodywebsite .nav:after,
.bodywebsite .clearfix:after {
  clear: both;
}
@font-face {
  font-family: FontAwesome;
  src: url(https://www.dolistore.com/themes/dolibarr-bootstrap/font/fontawesome-webfont.eot?v=3.2.1);
  src: url(https://www.dolistore.com/themes/dolibarr-bootstrap/font/fontawesome-webfont.eot?#iefix&v=3.2.1) format("embedded-opentype"), url(https://www.dolistore.com/themes/dolibarr-bootstrap/font/fontawesome-webfont.woff?v=3.2.1) format("woff"), url(https://www.dolistore.com/themes/dolibarr-bootstrap/font/fontawesome-webfont.ttf?v=3.2.1) format("truetype"), url(https://www.dolistore.com/themes/dolibarr-bootstrap/font/fontawesome-webfont.svg#fontawesomeregular?v=3.2.1) format("svg");
  font-weight: 400;
  font-style: normal;
}
.bodywebsite [class^=icon-] {
  font-family: FontAwesome;
  font-weight: 400;
  font-style: normal;
  text-decoration: inherit;
  -webkit-font-smoothing: antialiased;
  display: inline;
  width: auto;
  height: auto;
  line-height: normal;
  vertical-align: baseline;
  background-image: none;
  background-position: 0 0;
  background-repeat: repeat;
  margin-top: 0;
}
.bodywebsite [class^=icon-]:before {
  text-decoration: inherit;
  display: inline-block;
  speak: none;
}
.bodywebsite a [class^=icon-] {
  display: inline;
}
.bodywebsite .icon-ok:before {
  content: "\f00c";
}
.bodywebsite .icon-chevron-left:before {
  content: "\f053";
}
.bodywebsite .icon-chevron-right:before {
  content: "\f054";
}
.bodywebsite a:hover {
  text-decoration: none;
}
@media only screen and (min-width: 1200px) {
  .bodywebsite .container {
    padding-left: 0;
    padding-right: 0;
  }
}
.bodywebsite body {
  min-width: 320px;
  height: 100%;
  line-height: 18px;
  font-size: 13px;
  color: #111;
}
.bodywebsite #header {
  z-index: 1;
}
.bodywebsite .columns-container {
  background: #fff;
}
.bodywebsite #columns {
  position: relative;
  padding-bottom: 50px;
  padding-top: 15px;
}
.bodywebsite header {
  z-index: 1;
  position: relative;
  background: #fff;
  padding-bottom: 15px;
}
.bodywebsite header .banner {
  background: #000;
  max-height: 100%;
}
.bodywebsite header .nav {
  background: #333;
}
.bodywebsite header .nav nav {
  width: 100%;
}
.bodywebsite header .row {
  position: relative;
}
.bodywebsite header .row #header_logo {
  padding-top: 15px;
}
.bodywebsite header .banner .row,
.bodywebsite header .nav .row {
  margin: 0;
}
@media (max-width: 992px) {
  .bodywebsite header .row #header_logo {
    padding-top: 40px;
  }
}
@media (max-width: 767px) {
  .bodywebsite header .row #header_logo {
    padding-top: 15px;
  }
  .bodywebsite header .row #header_logo img {
    margin: 0 auto;
  }
}
@media (min-width: 767px) {
  .bodywebsite header .row #header_logo + .col-sm-4 + .col-sm-4 {
    float: right;
  }
}
.bodywebsite .dark {
  color: #333;
}
.bodywebsite .unvisible {
  display: none;
}
.bodywebsite a.button,
.bodywebsite span.button {
  position: relative;
  display: inline-block;
  padding: 5px 7px;
  border: 1px solid #c90;
  font-weight: 700;
  color: #000;
  background: url(/dolibarr18/dolibarr/htdocs/viewimage.php?modulepart=medias&file=image/dolistore3/themes/dolibarr-bootstrap/img/bg_bt.gif) repeat-x 0 0 #f4b61b;
  cursor: pointer;
  white-space: normal;
  text-align: left;
}
.bodywebsite a.button:hover {
  text-decoration: none;
  background-position: left -50px;
}
.bodywebsite a.button:active {
  background-position: left -100px;
}
.bodywebsite .button.button-small {
  font: bold 13px/17px Arial, Helvetica, sans-serif;
  color: #fff;
  background: #6f6f6f;
  border: 1px solid;
  border-color: #666 #5f5f5f #292929;
  padding: 0;
  text-shadow: 1px 1px #0000003d;
  -webkit-border-radius: 0;
  -moz-border-radius: 0;
  border-radius: 0;
}
.bodywebsite .button.button-small span {
  display: block;
  padding: 3px 8px;
  border: 1px solid;
  border-color: #8b8a8a;
}
.bodywebsite .button.button-small span i {
  vertical-align: 0;
  margin-right: 5px;
}
.bodywebsite .button.button-small span i.right {
  margin-right: 0;
  margin-left: 5px;
}
.bodywebsite .button.button-small span:hover {
  background: #575757;
  border-color: #303030 #303030 #666 #444;
}
.bodywebsite .button.button-medium {
  font-size: 17px;
  line-height: 21px;
  color: #fff;
  padding: 0;
  font-weight: 700;
  background: #43b754;
  background: -moz-linear-gradient(top, #43b754 0, #41b757 2%, #41b854 4%, #43b756 6%, #41b354 38%, #44b355 40%, #45af55 66%, #41ae53 74%, #42ac52 91%, #41ae55 94%, #43ab54 96%, #42ac52 100%);
  background: -webkit-gradient(linear, left top, left bottom, color-stop(0, #43b754), color-stop(2%, #41b757), color-stop(4%, #41b854), color-stop(6%, #43b756), color-stop(38%, #41b354), color-stop(40%, #44b355), color-stop(66%, #45af55), color-stop(74%, #41ae53), color-stop(91%, #42ac52), color-stop(94%, #41ae55), color-stop(96%, #43ab54), color-stop(100%, #42ac52));
  background: -webkit-linear-gradient(top, #43b754 0, #41b757 2%, #41b854 4%, #43b756 6%, #41b354 38%, #44b355 40%, #45af55 66%, #41ae53 74%, #42ac52 91%, #41ae55 94%, #43ab54 96%, #42ac52 100%);
  background: -o-linear-gradient(top, #43b754 0, #41b757 2%, #41b854 4%, #43b756 6%, #41b354 38%, #44b355 40%, #45af55 66%, #41ae53 74%, #42ac52 91%, #41ae55 94%, #43ab54 96%, #42ac52 100%);
  background: -ms-linear-gradient(top, #43b754 0, #41b757 2%, #41b854 4%, #43b756 6%, #41b354 38%, #44b355 40%, #45af55 66%, #41ae53 74%, #42ac52 91%, #41ae55 94%, #43ab54 96%, #42ac52 100%);
  background: linear-gradient(to bottom, #43b754 0, #41b757 2%, #41b854 4%, #43b756 6%, #41b354 38%, #44b355 40%, #45af55 66%, #41ae53 74%, #42ac52 91%, #41ae55 94%, #43ab54 96%, #42ac52 100%);
  border: 1px solid;
  border-color: #399a49 #247f32 #1a6d27 #399a49;
  -webkit-border-radius: 0;
  -moz-border-radius: 0;
  border-radius: 0;
}
.bodywebsite .button.button-medium span {
  display: block;
  padding: 10px 10px 10px 14px;
  border: 1px solid;
  border-color: #74d578;
}
@media (max-width: 480px) {
  .bodywebsite .button.button-medium span {
    font-size: 15px;
    padding-right: 7px;
    padding-left: 7px;
  }
}
.bodywebsite .button.button-medium span i.right {
  margin-right: 0;
  margin-left: 9px;
}
@media (max-width: 480px) {
  .bodywebsite .button.button-medium span i.right {
    margin-left: 5px;
  }
}
.bodywebsite .button.button-medium:hover {
  background: #3aa04c;
  background: -moz-linear-gradient(top, #3aa04c 0, #3aa04a 100%);
  background: -webkit-gradient(linear, left top, left bottom, color-stop(0, #3aa04c), color-stop(100%, #3aa04a));
  background: -webkit-linear-gradient(top, #3aa04c 0, #3aa04a 100%);
  background: -o-linear-gradient(top, #3aa04c 0, #3aa04a 100%);
  background: -ms-linear-gradient(top, #3aa04c 0, #3aa04a 100%);
  background: linear-gradient(to bottom, #3aa04c 0, #3aa04a 100%);
  border-color: #196f28 #399a49 #399a49 #258033;
}
.bodywebsite .button.exclusive-medium {
  font-size: 17px;
  padding: 0;
  line-height: 21px;
  color: #333;
  font-weight: 700;
  border: 1px solid;
  border-color: #cacaca #b7b7b7 #9a9a9a;
  text-shadow: 1px 1px #fff;
}
.bodywebsite .button.exclusive-medium span {
  border: 1px solid;
  border-color: #fff;
  display: block;
  padding: 9px 10px 11px;
  background: #f7f7f7;
  background: -moz-linear-gradient(top, #f7f7f7 0, #ededed 100%);
  background: -webkit-gradient(linear, left top, left bottom, color-stop(0, #f7f7f7), color-stop(100%, #ededed));
  background: -webkit-linear-gradient(top, #f7f7f7 0, #ededed 100%);
  background: -o-linear-gradient(top, #f7f7f7 0, #ededed 100%);
  background: -ms-linear-gradient(top, #f7f7f7 0, #ededed 100%);
  background: linear-gradient(to bottom, #f7f7f7 0, #ededed 100%);
}
@media (max-width: 480px) {
  .bodywebsite .button.exclusive-medium span {
    font-size: 15px;
    padding-right: 7px;
    padding-left: 7px;
  }
}
.bodywebsite .button.exclusive-medium span:hover {
  border-color: #9e9e9e #c2c2c2 #c8c8c8;
}
.bodywebsite .button.ajax_add_to_cart_button {
  font: 700 17px/21px Arial, Helvetica, sans-serif;
  color: #fff;
  text-shadow: 1px 1px #0003;
  padding: 0;
  border: 1px solid;
  border-color: #0079b6 #006fa8 #012740;
}
.bodywebsite .button.ajax_add_to_cart_button span {
  color: #fff;
  border: 1px solid;
  border-color: #06b2e6;
  padding: 10px 14px;
  display: block;
  background: #009ad0;
  background: -moz-linear-gradient(top, #009ad0 0, #007ab7 100%);
  background: -webkit-gradient(linear, left top, left bottom, color-stop(0, #009ad0), color-stop(100%, #007ab7));
  background: -webkit-linear-gradient(top, #009ad0 0, #007ab7 100%);
  background: -o-linear-gradient(top, #009ad0 0, #007ab7 100%);
  background: -ms-linear-gradient(top, #009ad0 0, #007ab7 100%);
  background: linear-gradient(to bottom, #009ad0 0, #007ab7 100%);
}
.bodywebsite .button.ajax_add_to_cart_button:hover {
  border-color: #01314e #004b74 #0079b6;
}
.bodywebsite .button.ajax_add_to_cart_button:hover span {
  filter: none;
  background: #0084bf;
}
.bodywebsite .button.lnk_view {
  font: 700 17px/21px Arial, Helvetica, sans-serif;
  color: #333;
  text-shadow: 1px 1px #fff;
  padding: 0;
  border: 1px solid;
  border-color: #cacaca #b7b7b7 #9a9a9a;
}
.bodywebsite .button.lnk_view span {
  border: 1px solid;
  border-color: #fff;
  padding: 10px 14px;
  display: block;
  background: #f7f7f7;
  background: -moz-linear-gradient(top, #f7f7f7 0, #ededed 100%);
  background: -webkit-gradient(linear, left top, left bottom, color-stop(0, #f7f7f7), color-stop(100%, #ededed));
  background: -webkit-linear-gradient(top, #f7f7f7 0, #ededed 100%);
  background: -o-linear-gradient(top, #f7f7f7 0, #ededed 100%);
  background: -ms-linear-gradient(top, #f7f7f7 0, #ededed 100%);
  background: linear-gradient(to bottom, #f7f7f7 0, #ededed 100%);
}
.bodywebsite .button.lnk_view:hover {
  border-color: #9e9e9e #9e9e9e #c8c8c8;
}
.bodywebsite .button.lnk_view:hover span {
  filter: none;
  background: #e7e7e7;
}
.bodywebsite .form-control {
  padding: 3px 5px;
  height: 27px;
  -webkit-box-shadow: none;
  box-shadow: none;
}
.bodywebsite .form-control.grey {
  background: #fbfbfb;
}
.bodywebsite .product-name {
  font-size: 17px;
  line-height: 23px;
  color: #3a3939;
  margin-bottom: 0;
}
.bodywebsite .price {
  font-size: 13px;
  color: #777;
  white-space: nowrap;
}
.bodywebsite .price.product-price {
  font: 600 21px/26px "Open Sans", sans-serif;
  color: #333;
}
.bodywebsite .old-price {
  color: #6f6f6f;
  text-decoration: line-through;
}
.bodywebsite .special-price {
  color: #f13340;
}
.bodywebsite .price-percent-reduction {
  background: #f13340;
  border: 1px solid #d02a2c;
  font: 600 21px/24px "Open Sans", sans-serif;
  color: #fff;
  padding: 0 5px 0 3px;
  display: inline-block;
}
.bodywebsite .sale-box {
  position: absolute;
  top: -4px;
  overflow: hidden;
  height: 85px;
  width: 85px;
  text-align: center;
  z-index: 0;
  right: -5px;
}
.bodywebsite .sale-label {
  font: 700 14px/12px Arial, Helvetica, sans-serif;
  color: #fff;
  background: #f13340;
  text-transform: uppercase;
  padding: 9px 0 7px;
  text-shadow: 1px 1px #0000003d;
  width: 130px;
  text-align: center;
  display: block;
  position: absolute;
  right: -33px;
  top: 16px;
  z-index: 1;
  -webkit-transform: rotate(45deg);
  -ms-transform: rotate(45deg);
  transform: rotate(45deg);
}
.bodywebsite .sale-label:before {
  position: absolute;
  bottom: -3px;
  right: 4px;
  width: 0;
  height: 0;
  border-style: solid;
  border-width: 4px 4px 0;
  border-color: #ad2b34 transparent transparent;
  content: ".";
  text-indent: -5000px;
  -webkit-transform: rotate(225deg);
  -ms-transform: rotate(225deg);
  transform: rotate(225deg);
}
.bodywebsite .sale-label:after {
  position: absolute;
  bottom: -3px;
  left: 5px;
  width: 0;
  height: 0;
  border-style: solid;
  border-width: 4px 4px 0;
  border-color: #ad2b34 transparent transparent;
  content: ".";
  text-indent: -5000px;
  -webkit-transform: rotate(135deg);
  -ms-transform: rotate(135deg);
  transform: rotate(135deg);
}
.bodywebsite .block {
  margin-bottom: 30px;
}
@media (max-width: 767px) {
  .bodywebsite .block {
    margin-bottom: 0;
  }
  .bodywebsite .block .block_content {
    margin-bottom: 20px;
  }
}
.bodywebsite .block .title_block,
.bodywebsite .block h4 {
  font: 600 18px/22px "Open Sans", sans-serif;
  color: #555454;
  background: #f6f6f6;
  border-top: 5px solid #333;
  text-transform: uppercase;
  padding: 14px 5px 17px 20px;
  margin-bottom: 20px;
}
@media (min-width: 768px) and (max-width: 991px) {
  .bodywebsite .block .title_block,
  .bodywebsite .block h4 {
    font-size: 14px;
  }
}
@media (max-width: 767px) {
  .bodywebsite .block .title_block,
  .bodywebsite .block h4 {
    position: relative;
  }
  .bodywebsite .block .title_block:after,
  .bodywebsite .block h4:after {
    display: block;
    font-family: FontAwesome;
    content: "";
    position: absolute;
    right: 0;
    top: 15px;
    height: 36px;
    width: 36px;
    font-size: 26px;
    font-weight: 400;
  }
}
.bodywebsite .block .title_block a,
.bodywebsite .block h4 a {
  color: #555454;
}
.bodywebsite .block .title_block a:hover,
.bodywebsite .block h4 a:hover {
  color: #333;
}
.bodywebsite .block .products-block li {
  padding: 0 0 20px;
  margin-bottom: 20px;
  border-bottom: 1px solid #d6d4d4;
}
.bodywebsite .block .products-block li .products-block-image {
  float: left;
  border: 1px solid #d6d4d4;
  margin-right: 19px;
}
@media (min-width: 768px) and (max-width: 991px) {
  .bodywebsite .block .products-block li .products-block-image {
    float: none;
    display: inline-block;
    margin: 0 auto 10px;
    text-align: center;
  }
}
.bodywebsite .block .products-block li .product-content {
  overflow: hidden;
}
.bodywebsite .block .products-block li .product-content h5 {
  margin: -3px 0 0;
}
.bodywebsite .block .products-block .product-name {
  font-size: 15px;
  line-height: 18px;
}
.bodywebsite .block .products-block .product-description {
  margin-bottom: 14px;
}
.bodywebsite .block .products-block .price-percent-reduction {
  font: 700 14px/17px Arial, Helvetica, sans-serif;
  padding: 1px 6px;
}
.bodywebsite #page .rte {
  padding: 0!important;
  background: transparent none repeat scroll 0 0;
}
.bodywebsite .header-container {
  background: #fff;
}
.bodywebsite .footer-container {
  background-color: #333;
}
@media (min-width: 768px) {
  .bodywebsite .footer-container {
    background: 0 0 !important;
  }
}
.bodywebsite .footer-container .container {
  padding-bottom: 20px;
}
.bodywebsite .footer-container #footer {
  color: #777;
}
.bodywebsite .footer-container #footer .row {
  position: relative;
}
.bodywebsite .footer-container #footer .footer-block {
  margin-top: 45px;
}
@media (max-width: 767px) {
  .bodywebsite .footer-container #footer .footer-block {
    margin-top: 20px;
  }
}
.bodywebsite .footer-container #footer a {
  color: #777;
}
.bodywebsite .footer-container #footer a:hover {
  color: #fff;
}
.bodywebsite .footer-container #footer h4 {
  font: 600 18px/22px "Open Sans", sans-serif;
  color: #fff;
  margin: 0 0 13px;
  cursor: pointer;
}
@media (max-width: 767px) {
  .bodywebsite .footer-container #footer h4 {
    position: relative;
    margin-bottom: 0;
    padding-bottom: 13px;
  }
  .bodywebsite .footer-container #footer h4:after {
    display: block;
    content: "\f055";
    font-family: FontAwesome;
    position: absolute;
    right: 0;
    top: 1px;
  }
}
.bodywebsite .footer-container #footer h4 a {
  color: #fff;
}
.bodywebsite .footer-container #footer ul li {
  padding-bottom: 8px;
}
.bodywebsite .footer-container #footer ul li a {
  font-weight: 700;
  text-shadow: 1px 1px 0 #0006;
}
.bodywebsite .rte ul {
  list-style-type: disc;
  padding-left: 15px;
}
.bodywebsite .editorial_block .img-responsive {
  display: unset;
  width: 250px;
}
.bodywebsite .editorial_block {
  text-align: center;
  margin-bottom: 4em !important;
}
.bodywebsite .editorial_block .rte {
  text-align: justify;
}
.bodywebsite .product-image-container {
  height: 200px;
}
.bodywebsite .product-image-container .img-responsive {
  height: auto;
  width: auto;
  max-height: 180px;
}
.bodywebsite .button.ajax_add_to_cart_button span {
  border-color: #373d5a;
  background: #373d5a;
}
@media only screen and (-webkit-min-device-pixel-ratio: 2), only screen and (min-device-pixel-ratio: 2) {
  .bodywebsite .replace-2x {
    font-size: 1px;
  }
}
.bodywebsite #categories_block_left .block_content > ul {
  border-top: 1px solid #d6d4d4;
}
.bodywebsite #categories_block_left li {
  position: relative;
}
.bodywebsite #categories_block_left li a {
  font-weight: 700;
  color: #333;
  display: block;
  font-size: 13px;
  line-height: 30px;
  padding: 0 30px 0 19px;
  border-bottom: 1px solid #d6d4d4;
}
.bodywebsite #categories_block_left li span.grower {
  display: block;
  background: #f6f6f6;
  position: absolute;
  right: 0;
  top: 0;
  cursor: pointer;
  font-family: "FontAwesome";
  font-size: 14px;
}
.bodywebsite #categories_block_left li span.grower.OPEN:before,
.bodywebsite #categories_block_left li span.grower.CLOSE:before {
  content: "\f068";
  display: block;
  vertical-align: middle;
  width: 30px;
  height: 30px;
  color: #333333;
  line-height: 30px;
  text-align: center;
}
.bodywebsite #categories_block_left li span.grower.CLOSE:before {
  content: "\f067";
  color: silver;
}
.bodywebsite #categories_block_left li span.grower:hover + a,
.bodywebsite #categories_block_left li a:hover,
.bodywebsite #categories_block_left li a.selected {
  background: #f6f6f6;
}
.bodywebsite #categories_block_left li li a {
  font-weight: normal;
  color: #777777;
}
.bodywebsite #categories_block_left li li a:before {
  content: "\f105";
  font-family: "FontAwesome";
  line-height: 29px;
  padding-right: 8px;
}
.bodywebsite #categories_block_left li a:hover {
  background: #f6f6f6;
}
.bodywebsite #categories_block_left li li a {
  font-weight: 400;
  color: #777;
}
.bodywebsite #categories_block_left li li a:before {
  content: "\f105";
  font-family: FontAwesome;
  line-height: 29px;
  padding-right: 8px;
}
.bodywebsite .editorial_block {
  margin-bottom: 2em;
}
.bodywebsite .editorial_block .rte {
  background: transparent none repeat scroll 0 0;
}
.bodywebsite #editorial_block_center p {
  padding-left: 0;
}
.bodywebsite #editorial_block_center .rte p {
  color: #666;
}
.bodywebsite ul.product_list .product-name {
  display: inline-block;
  width: 100%;
  overflow: hidden;
}
.bodywebsite ul.product_list .product-image-container {
  text-align: center;
}
.bodywebsite ul.product_list .product-image-container img {
  margin: 0 auto;
}
.bodywebsite ul.product_list .product-name {
  display: inline-block;
  width: 100%;
  overflow: hidden;
}
.bodywebsite ul.product_list .availability span {
  display: inline-block;
  color: #fff;
  font-weight: 700;
  padding: 3px 8px 4px;
  margin-bottom: 20px;
}
.bodywebsite ul.product_list .availability span.available-now {
  background: #55c65e;
  border: 1px solid #36943e;
}
.bodywebsite ul.product_list .availability span.out-of-stock {
  background: #fe9126;
  border: 1px solid #e4752b;
}
.bodywebsite ul.product_list .availability span.available-dif {
  background: #fe9126;
  border: 1px solid #e4752b;
}
.bodywebsite ul.product_list .color-list-container {
  margin-bottom: 12px;
}
.bodywebsite ul.product_list .color-list-container ul li {
  display: inline-block;
  border: 1px solid #d6d4d4;
  width: 26px;
  height: 26px;
}
.bodywebsite ul.product_list .color-list-container ul li a {
  display: block;
  width: 22px;
  height: 22px;
  margin: 1px;
}
.bodywebsite ul.product_list .color-list-container ul li a img {
  display: block;
  width: 22px;
  height: 22px;
}
.bodywebsite ul.product_list .product-image-container {
  text-align: center;
}
.bodywebsite ul.product_list .product-image-container img {
  margin: 0 auto;
}
.bodywebsite ul.product_list .product-image-container .quick-view-wrapper-mobile {
  display: none;
}
.bodywebsite ul.product_list .product-image-container .quick-view-wrapper-mobile .quick-view-mobile {
  display: none;
}
@media (max-width: 1199px) {
  .bodywebsite ul.product_list .product-image-container .quick-view-wrapper-mobile .quick-view-mobile {
    display: block;
    position: relative;
    background-color: rgba(208, 208, 211, 0.57);
    height: 130px;
    width: 85px;
    top: 80px;
    right: -162px;
    -moz-transform: rotate(45deg);
    -o-transform: rotate(45deg);
    -webkit-transform: rotate(45deg);
    -ms-transform: rotate(45deg);
    transform: rotate(45deg);
    zoom: 1;
    pointer-events: all;
  }
  .bodywebsite ul.product_list .product-image-container .quick-view-wrapper-mobile .quick-view-mobile i {
    position: relative;
    top: 48px;
    left: -20px;
    font-size: x-large;
    color: #000;
  }
  .bodywebsite ul.product_list .product-image-container .quick-view-wrapper-mobile .quick-view-mobile i:before {
    -moz-transform: rotate(315deg);
    -o-transform: rotate(315deg);
    -webkit-transform: rotate(315deg);
    -ms-transform: rotate(315deg);
    transform: rotate(315deg);
  }
}
@media (max-width: 1199px) {
  .bodywebsite ul.product_list .product-image-container .quick-view-wrapper-mobile .quick-view-mobile:hover {
    background-color: rgba(167, 167, 167, 0.57);
  }
}
@media (max-width: 1199px) {
  .bodywebsite ul.product_list .product-image-container .quick-view-wrapper-mobile {
    display: block;
    background-color: transparent;
    height: 155px;
    width: 215px;
    position: absolute;
    overflow: hidden;
    pointer-events: none;
    bottom: 0;
    right: 0;
  }
}
.bodywebsite ul.product_list .product-image-container .quick-view {
  font: 700 13px/16px Arial, Helvetica, sans-serif;
  color: #777676;
  position: absolute;
  left: 50%;
  top: 50%;
  margin: -21px 0 0 -53px;
  padding: 13px 0 0;
  background: rgba(255, 255, 255, 0.82);
  width: 107px;
  height: 43px;
  text-align: center;
  -webkit-box-shadow: rgba(0, 0, 0, 0.16) 0 2px 8px;
  -moz-box-shadow: rgba(0, 0, 0, 0.16) 0 2px 8px;
  box-shadow: rgba(0, 0, 0, 0.16) 0 2px 8px;
}
@media (max-width: 1199px) {
  .bodywebsite ul.product_list .product-image-container .quick-view {
    display: none;
  }
}
@media (min-width: 1200px) {
  .bodywebsite ul.product_list .product-image-container .quick-view {
    display: none;
  }
}
@media (max-width: 767px) {
  .bodywebsite ul.product_list .product-image-container .quick-view {
    display: none;
  }
}
.bodywebsite ul.product_list .comments_note {
  text-align: left;
  overflow: hidden;
}
.bodywebsite ul.product_list .comments_note .star_content {
  float: left;
}
.bodywebsite ul.product_list .comments_note .nb-comments {
  overflow: hidden;
  font-style: italic;
}
.bodywebsite ul.product_list.grid > li .product-container .functional-buttons {
  padding: 0 !important;
}
.bodywebsite ul.product_list .functional-buttons div a,
.bodywebsite ul.product_list .functional-buttons div label {
  font-weight: 700;
  color: #777676;
  cursor: pointer;
}
.bodywebsite ul.product_list .functional-buttons div a:hover,
.bodywebsite ul.product_list .functional-buttons div label:hover {
  color: #000;
}
.bodywebsite ul.product_list .functional-buttons div.wishlist {
  border-right: 1px solid #d6d4d4;
}
.bodywebsite ul.product_list .functional-buttons div.wishlist a:before {
  display: inline-block;
  font-family: fontawesome;
  content: "\f08a";
  margin-right: 3px;
  padding: 0 3px;
}
.bodywebsite ul.product_list .functional-buttons div.wishlist a.checked:before {
  content: "\f004";
}
@media (min-width: 992px) and (max-width: 1199px) {
  .bodywebsite ul.product_list .functional-buttons div.wishlist {
    border-right: 0;
  }
  .bodywebsite ul.product_list .functional-buttons div.wishlist a:before {
    display: none;
  }
}
@media (min-width: 480px) and (max-width: 767px) {
  .bodywebsite ul.product_list .functional-buttons div.wishlist {
    border-right: 0;
  }
  .bodywebsite ul.product_list .functional-buttons div.wishlist a:before {
    display: none;
  }
}
.bodywebsite ul.product_list .functional-buttons div.compare a:before {
  content: "\f067";
  display: inline-block;
  font-family: fontawesome;
  margin-right: 3px;
}
@media (min-width: 992px) and (max-width: 1199px) {
  .bodywebsite ul.product_list .functional-buttons div.compare a:before {
    display: none;
  }
}
@media (min-width: 480px) and (max-width: 767px) {
  .bodywebsite ul.product_list .functional-buttons div.compare a:before {
    display: none;
  }
}
.bodywebsite ul.product_list .functional-buttons div.compare a.checked:before {
  content: "\f068";
}
.bodywebsite ul.product_list.grid > li {
  padding-bottom: 20px;
  text-align: center;
}
@media (min-width: 480px) and (max-width: 767px) {
  .bodywebsite ul.product_list.grid > li {
    width: 50%;
    float: left;
  }
}
.bodywebsite ul.product_list.grid > li .product-container {
  background: #fff;
  padding: 0;
  position: relative;
}
.bodywebsite ul.product_list.grid > li .product-container .product-image-container {
  border: 1px solid #d6d4d4;
  padding: 9px;
  margin-bottom: 13px;
  position: relative;
}
@media (max-width: 767px) {
  .bodywebsite ul.product_list.grid > li .product-container .product-image-container {
    max-width: 290px;
    margin-left: auto;
    margin-right: auto;
  }
}
.bodywebsite ul.product_list.grid > li .product-container .product-image-container .content_price {
  position: absolute;
  left: 0;
  bottom: -1px;
  width: 100%;
  background: url(https://www.dolistore.com/themes/dolibarr-bootstrap/img/price-container-bg.png);
  padding: 9px 0;
  display: none;
}
.bodywebsite ul.product_list.grid > li .product-container .product-image-container .content_price span {
  color: #fff;
}
.bodywebsite ul.product_list.grid > li .product-container .product-image-container .content_price span.old-price {
  color: #b1b0b0;
}
.bodywebsite ul.product_list.grid > li .product-container h5 {
  padding: 0 15px 7px;
  min-height: 53px;
}
@media (min-width: 1200px) {
  .bodywebsite ul.product_list.grid > li .product-container .comments_note {
    display: none;
  }
}
.bodywebsite ul.product_list.grid > li .product-container .comments_note .star_content {
  margin: 0 3px 12px 59px;
}
.bodywebsite ul.product_list.grid > li .product-container .product-desc {
  display: none;
}
.bodywebsite ul.product_list.grid > li .product-container .content_price {
  padding-bottom: 9px;
  line-height: 21px;
}
.bodywebsite ul.product_list.grid > li .product-container .old-price,
.bodywebsite ul.product_list.grid > li .product-container .price,
.bodywebsite ul.product_list.grid > li .product-container .price-percent-reduction {
  display: inline-block;
}
.bodywebsite ul.product_list.grid > li .product-container .product-flags {
  display: none;
}
.bodywebsite ul.product_list.grid > li .product-container .old-price {
  margin-right: 5px;
}
.bodywebsite ul.product_list.grid > li .product-container .button-container {
  margin-bottom: 14px;
}
@media (min-width: 1200px) {
  .bodywebsite ul.product_list.grid > li .product-container .button-container {
    display: none;
  }
}
.bodywebsite ul.product_list.grid > li .product-container .button-container .ajax_add_to_cart_button,
.bodywebsite ul.product_list.grid > li .product-container .button-container span.button,
.bodywebsite ul.product_list.grid > li .product-container .button-container .lnk_view {
  margin: 0 6px 10px;
}
.bodywebsite ul.product_list.grid > li .product-container .functional-buttons {
  background: url(https://www.dolistore.com/themes/dolibarr-bootstrap/img/functional-bt-shadow.png) repeat-x;
  padding: 11px 0 5px;
}
@media (min-width: 1200px) {
  .bodywebsite ul.product_list.grid > li .product-container .functional-buttons {
    display: none;
  }
}
.bodywebsite ul.product_list.grid > li .product-container .functional-buttons div {
  width: 50%;
  float: left;
  padding: 3px 0 4px;
}
@media (min-width: 1200px) {
  .bodywebsite ul.product_list.grid > li.hovered .product-container {
    -webkit-box-shadow: rgba(0, 0, 0, 0.17) 0 0 13px;
    -moz-box-shadow: rgba(0, 0, 0, 0.17) 0 0 13px;
    box-shadow: rgba(0, 0, 0, 0.17) 0 0 13px;
    position: relative;
    z-index: 10;
  }
  .bodywebsite ul.product_list.grid > li.hovered .product-container .content_price {
    display: none;
  }
  .bodywebsite ul.product_list.grid > li.hovered .product-container .product-image-container .content_price {
    display: block;
  }
  .bodywebsite ul.product_list.grid > li.hovered .product-container .product-image-container .quick-view {
    display: block;
  }
  .bodywebsite ul.product_list.grid > li.hovered .product-container .functional-buttons,
  .bodywebsite ul.product_list.grid > li.hovered .product-container .button-container,
  .bodywebsite ul.product_list.grid > li.hovered .product-container .comments_note {
    display: block;
  }
}
@media (min-width: 992px) {
  .bodywebsite ul.product_list.grid > li.first-in-line {
    clear: left;
  }
}
@media (min-width: 480px) and (max-width: 991px) {
  .bodywebsite ul.product_list.grid > li.first-item-of-tablet-line {
    clear: left;
  }
}
.bodywebsite ul.product_list.grid li.hovered h5 {
  min-height: 30px;
}
@media (min-width: 1200px) {
  .bodywebsite #blockpack ul > li.last-line {
    border: none;
    padding-bottom: 0;
    margin-bottom: 0;
  }
}
@media (min-width: 480px) and (max-width: 767px) {
  .bodywebsite #blockpack ul > li.first-item-of-tablet-line {
    clear: none;
  }
  .bodywebsite #blockpack ul > li.first-item-of-mobile-line {
    clear: left;
  }
}
@media (max-width: 479px) {
  .bodywebsite ul.product_list.list > li .left-block {
    width: 100%;
  }
}
.bodywebsite ul.product_list.list > li .product-container {
  border-top: 1px solid #d6d4d4;
  padding: 30px 0;
}
.bodywebsite ul.product_list.list > li .product-image-container {
  position: relative;
  border: 1px solid #d6d4d4;
  padding: 9px;
}
@media (max-width: 479px) {
  .bodywebsite ul.product_list.list > li .product-image-container {
    max-width: 290px;
    margin: 0 auto;
  }
}
.bodywebsite ul.product_list.list > li .product-image-container .content_price {
  display: none !important;
}
.bodywebsite ul.product_list.list > li .product-flags {
  color: #333;
  margin: -5px 0 10px;
}
.bodywebsite ul.product_list.list > li .product-flags .discount {
  color: #f13340;
}
.bodywebsite ul.product_list.list > li h5 {
  padding-bottom: 8px;
}
.bodywebsite ul.product_list.list > li .product-desc {
  margin-bottom: 15px;
}
@media (max-width: 479px) {
  .bodywebsite ul.product_list.list > li .center-block {
    width: 100%;
  }
}
.bodywebsite ul.product_list.list > li .center-block .comments_note {
  margin-bottom: 12px;
}
@media (min-width: 992px) {
  .bodywebsite ul.product_list.list > li .right-block .right-block-content {
    margin: 0;
    border-left: 1px solid #d6d4d4;
    padding-left: 15px;
    padding-bottom: 16px;
  }
}
@media (max-width: 991px) {
  .bodywebsite ul.product_list.list > li .right-block .right-block-content {
    padding-top: 20px;
  }
}
@media (max-width: 479px) {
  .bodywebsite ul.product_list.list > li .right-block .right-block-content {
    padding-top: 5px;
  }
}
.bodywebsite ul.product_list.list > li .right-block .right-block-content .content_price {
  padding-bottom: 10px;
}
@media (max-width: 991px) {
  .bodywebsite ul.product_list.list > li .right-block .right-block-content .content_price {
    padding-top: 13px;
    padding-bottom: 0;
  }
}
@media (max-width: 479px) {
  .bodywebsite ul.product_list.list > li .right-block .right-block-content .content_price {
    padding-top: 0;
    width: 100%;
  }
}
.bodywebsite ul.product_list.list > li .right-block .right-block-content .content_price span {
  display: inline-block;
  margin-top: -4px;
  margin-bottom: 14px;
}
.bodywebsite ul.product_list.list > li .right-block .right-block-content .content_price span.old-price {
  margin-right: 8px;
}
.bodywebsite ul.product_list.list > li .right-block .right-block-content .button-container {
  overflow: hidden;
  padding-bottom: 20px;
}
@media (max-width: 479px) {
  .bodywebsite ul.product_list.list > li .right-block .right-block-content .button-container {
    width: 100%;
  }
}
.bodywebsite ul.product_list.list > li .right-block .right-block-content .button-container .btn {
  margin-bottom: 10px;
}
@media (min-width: 992px) {
  .bodywebsite ul.product_list.list > li .right-block .right-block-content .button-container .btn {
    float: left;
    clear: both;
  }
}
@media (min-width: 992px) {
  .bodywebsite ul.product_list.list > li .right-block .right-block-content .functional-buttons {
    overflow: hidden;
  }
}
@media (max-width: 991px) {
  .bodywebsite ul.product_list.list > li .right-block .right-block-content .functional-buttons {
    clear: both;
  }
  .bodywebsite ul.product_list.list > li .right-block .right-block-content .functional-buttons > div {
    float: left;
    padding-top: 0!important;
    padding-right: 20px;
  }
}
@media (max-width: 479px) {
  .bodywebsite ul.product_list.list > li .right-block .right-block-content .functional-buttons {
    float: none;
    display: inline-block;
  }
  .bodywebsite ul.product_list.list > li .right-block .right-block-content .functional-buttons a i,
  .bodywebsite ul.product_list.list > li .right-block .right-block-content .functional-buttons a:before,
  .bodywebsite ul.product_list.list > li .right-block .right-block-content .functional-buttons label i,
  .bodywebsite ul.product_list.list > li .right-block .right-block-content .functional-buttons label:before {
    display: none !important;
  }
}
.bodywebsite ul.product_list.list > li .right-block .right-block-content .functional-buttons a {
  cursor: pointer;
}
.bodywebsite ul.product_list.list > li .right-block .right-block-content .functional-buttons .wishlist {
  border: none;
}
.bodywebsite ul.product_list.list > li .right-block .right-block-content .functional-buttons .compare {
  padding-top: 10px;
}
.bodywebsite ul.product_list.list > li .right-block .right-block-content .functional-buttons .compare a:before {
  margin-right: 10px;
}
@media (min-width: 1200px) {
  .bodywebsite ul.product_list.list > li:hover .product-image-container .quick-view {
    display: block;
  }
}
@media (max-width: 479px) {
  .bodywebsite ul.product_list.list > li {
    text-align: center;
  }
}
.bodywebsite #index ul.product_list.tab-pane > li {
  padding-bottom: 10px;
  margin-bottom: 10px;
}
@media (min-width: 1200px) {
  .bodywebsite #index ul.product_list.tab-pane > li {
    padding-bottom: 85px;
    margin-bottom: 0;
  }
}
.bodywebsite #index ul.product_list.tab-pane > li .availability {
  display: none;
}
@media (min-width: 1200px) {
  .bodywebsite #index ul.product_list.tab-pane > li.last-line {
    border: none;
    padding-bottom: 0;
    margin-bottom: 0;
  }
}
@media (min-width: 480px) and (max-width: 767px) {
  .bodywebsite #index ul.product_list.tab-pane > li.first-item-of-tablet-line {
    clear: none;
  }
  .bodywebsite #index ul.product_list.tab-pane > li.first-item-of-mobile-line {
    clear: left;
  }
}
.bodywebsite #index ul.product_list.tab-pane > li {
  padding-bottom: 10px;
  margin-bottom: 10px;
}
.bodywebsite #index ul.product_list.tab-pane > li.last-line {
  border: none;
  padding-bottom: 0;
  margin-bottom: 0;
}
@media (min-width: 480px) and (max-width: 767px) {
  .bodywebsite #index ul.product_list.tab-pane > li.first-item-of-tablet-line {
    clear: none;
  }
  .bodywebsite #index ul.product_list.tab-pane > li.first-item-of-mobile-line {
    clear: left;
  }
}
.bodywebsite #footer #newsletter_block_left {
  overflow: hidden;
  width: 50%;
  float: left;
  padding: 13px 15px 7px;
  margin-bottom: 0;
}
@media (max-width: 767px) {
  .bodywebsite #footer #newsletter_block_left {
    width: 100%;
  }
}
.bodywebsite #footer #newsletter_block_left h4 {
  background: 0 0;
  float: left;
  padding: 7px 16px 5px 0;
  text-transform: none;
  font-size: 21px;
  line-height: 25px;
  border: none;
}
.bodywebsite #footer #newsletter_block_left .form-group {
  margin-bottom: 0;
}
.bodywebsite #footer #newsletter_block_left .form-group .form-control {
  height: 45px;
  line-height: 30px;
  max-width: 267px;
  background: #3c3c3c;
  border-color: #515151;
  color: #fff;
  padding: 5px 43px 5px 12px;
  display: inline-block;
  float: left;
}
.bodywebsite #footer #newsletter_block_left .form-group .form-control:focus {
  -webkit-box-shadow: #000 0 0 0;
  -moz-box-shadow: #000 0 0 0;
  box-shadow: #000 0 0 0;
}
.bodywebsite #footer #newsletter_block_left .form-group .button-small {
  margin-left: -43px;
  border: none;
  background: 0 0;
  text-align: center;
  color: #908f8f;
  padding: 8px;
}
.bodywebsite #footer #newsletter_block_left .form-group .button-small:before {
  content: "\f138";
  font-family: FontAwesome;
  font-size: 28px;
  line-height: 28px;
}
.bodywebsite #footer #newsletter_block_left .form-group .button-small:hover {
  color: #fff !important;
}
.bodywebsite #footer #newsletter_block_left .newsletter-input {
  max-width: 300px !important;
}
.bodywebsite #search_block_top {
  padding-top: 30px;
}
.bodywebsite #search_block_top #searchbox {
  float: left;
  width: 100%;
}
.bodywebsite #search_block_top .btn.button-search {
  background: #333;
  display: block;
  position: absolute;
  top: 0;
  right: 0;
  border: none;
  color: #fff;
  width: 50px;
  text-align: center;
  padding: 10px 0 11px;
}
.bodywebsite #search_block_top .btn.button-search:before {
  content: "\f002";
  display: block;
  font-family: FontAwesome;
  font-size: 17px;
  width: 100%;
  text-align: center;
}
.bodywebsite #search_block_top .btn.button-search:hover {
  color: #6f6f6f;
}
.bodywebsite #search_block_top #search_query_top {
  display: inline;
  padding: 0 13px;
  height: 45px;
  line-height: 45px;
  background: #fbfbfb;
  margin-right: 1px;
}
.bodywebsite form#searchbox {
  position: relative;
}
.bodywebsite .tags_block .block_content a {
  display: inline-block;
  font-size: 13px;
  line-height: 16px;
  font-weight: 700;
  padding: 4px 9px 5px;
  border: 1px solid #d6d4d4;
  float: left;
  margin: 0 3px 3px 0;
}
.bodywebsite .tags_block .block_content a:hover {
  color: #333;
  background: #f6f6f6;
}
.bodywebsite body {
  background: #282828;
}
.bodywebsite #header #languages-block-top {
  border-color: #515151;
}
.bodywebsite #header #languages-block-top div.current:hover {
  background: #2b2b2b;
  color: #fff;
}
.bodywebsite #header #search_block_top .btn.button-search {
  background: #eea200;
  text-shadow: 0 1px #b57b00;
}
.bodywebsite #header #search_block_top .btn.button-search:hover {
  color: #fff;
  background: #333;
  text-shadow: 0 1px #333;
}
.bodywebsite #header #search_block_top #search_query_top {
  border-color: #e2dec8;
  background: #f8f8f8a1;
  color: #686666;
}
.bodywebsite ul.product_list.grid > li .product-container .product-image-container {
  border-color: #e2dec8;
  background: #fff;
}
.bodywebsite .sale-label:after,
.bodywebsite .sale-label:before {
  border-color: #eea200 transparent transparent;
}
.bodywebsite ul.product_list.grid > li .product-container {
  background: 0 0;
}
.bodywebsite .button.ajax_add_to_cart_button {
  border-color: #eea200;
}
.bodywebsite .button.ajax_add_to_cart_button span {
  border-color: #eea200;
  background: #eea200;
}
.bodywebsite .button.ajax_add_to_cart_button:hover {
  border-color: #333;
}
.bodywebsite .button.ajax_add_to_cart_button:hover span {
  border-color: #333;
  background: #333;
}
.bodywebsite .price-percent-reduction {
  background: #eea200;
  border-color: #eea200;
}
.bodywebsite .price,
.bodywebsite .price.product-price {
  color: #eea200;
}
.bodywebsite .old-price {
  color: #b1b0b0;
}
.bodywebsite ul.product_list.grid > li .product-container:hover {
  background: #fff;
  -webkit-box-shadow: 0 5px 13px #0000002b;
  -moz-box-shadow: 0 5px 13px #0000002b;
  box-shadow: 0 5px 13px #0000002b;
}
.bodywebsite .footer-container {
  background: #3f3f3f;
}
.bodywebsite #footer #newsletter_block_left h4:after,
.bodywebsite #footer #newsletter_block_left .form-group .button-small span,
.bodywebsite #search_block_top .btn.button-search span {
  display: none;
}
.bodywebsite #footer #newsletter_block_left .block_content,
.bodywebsite .tags_block .block_content {
  overflow: hidden;
}
.bodywebsite #header #languages-block-top div.current,
.bodywebsite #header #languages-block-top div.current:after {
  color: #fff;
}
.bodywebsite #header #languages-block-top ul li.selected,
.bodywebsite #header #languages-block-top ul li:hover a,
.bodywebsite .sale-label {
  background: #eea200;
}
.bodywebsite ul.product_list.grid > li .product-container .product-image-container .product_img_link,
.bodywebsite ul.product_list.grid > li .product-container .product-image-container .product_img_link img {
  background: #f1e8e3;
}
@media (min-width: 768px) {
  .bodywebsite .footer-container {
    /*background: url(/dolibarr18/dolibarr/htdocs/viewimage.php?modulepart=medias&file=image/dolistore3/modules/themeconfigurator/img/footer-bg.png) repeat-x;*/
    background-color: #3f3f3f !important;
  }
}
.bodywebsite #footer #newsletter_block_left .form-group .form-control {
  background: #3c3c3c;
}
.bodywebsite #footer #newsletter_block_left .form-group .button-small {
  color: #fff;
}
.bodywebsite #footer #newsletter_block_left .form-group .button-small:hover {
  color: #eea200;
}
.bodywebsite h2,
.bodywebsite h3,
.bodywebsite h4,
.bodywebsite h5 {
  font-family: 'Open Sans', sans-serif !important;
}
.bodywebsite .header_user_info {
  float: right;
  border-left: 1px solid #515151;
  border-right: 1px solid #515151;
}
.bodywebsite .header_user_info a {
  color: #fff;
  font-weight: 700;
  display: block;
  padding: 8px 9px 11px 8px;
  cursor: pointer;
  line-height: 18px;
}
@media (max-width: 479px) {
  .bodywebsite .header_user_info a {
    font-size: 11px;
  }
}
.bodywebsite .header_user_info a:hover {
  background: #2b2b2b;
}
.bodywebsite #languages-block-top {
  float: right;
  border-left: 1px solid #515151;
  position: relative;
}
@media (max-width: 479px) {
  .bodywebsite #languages-block-top {
    width: 25%;
  }
}
.bodywebsite #languages-block-top div.current {
  font-weight: 700;
  padding: 8px 10px 10px;
  line-height: 18px;
  color: #fff;
  text-shadow: 1px 1px #0003;
  cursor: pointer;
}
@media (max-width: 479px) {
  .bodywebsite #languages-block-top div.current {
    text-align: center;
    padding: 9px 5px 10px;
    font-size: 11px;
  }
}
.bodywebsite #languages-block-top div.current:after {
  content: "\f0d7";
  font-family: FontAwesome;
  font-size: 18px;
  line-height: 18px;
  color: #686666;
  vertical-align: -2px;
  padding-left: 12px;
}
@media (max-width: 479px) {
  .bodywebsite #languages-block-top div.current:after {
    padding-left: 2px;
    font-size: 13px;
    line-height: 13px;
    vertical-align: 0;
  }
}
.bodywebsite #languages-block-top ul {
  display: none;
  position: absolute;
  top: 37px;
  left: 0;
  width: 157px;
  background: #333;
  z-index: 2;
}
.bodywebsite #languages-block-top ul li {
  color: #fff;
  line-height: 35px;
  font-size: 13px;
}
.bodywebsite #languages-block-top ul li a,
.bodywebsite #languages-block-top ul li > span {
  padding: 0 10px 0 12px;
  display: block;
  color: #fff;
}
.bodywebsite #languages-block-top ul li.selected,
.bodywebsite #languages-block-top ul li:hover a {
  background: #484848;
}
.bodywebsite #header .shopping_cart {
  position: relative;
  float: right;
  padding-top: 30px;
}
.bodywebsite #header .shopping_cart > a:first-child:after {
  content: "\f0d7";
  font-family: FontAwesome;
  display: inline-block;
  float: right;
  font-size: 18px;
  color: #686666;
  padding: 6px 0 0;
}
.bodywebsite #header .shopping_cart > a:first-child:hover:after {
  content: "\f0d8";
  padding: 4px 0 2px;
}
.bodywebsite .shopping_cart {
  width: 270px;
}
@media (max-width: 480px) {
  .bodywebsite .shopping_cart {
    padding-top: 20px;
  }
}
@media (max-width: 1200px) {
  .bodywebsite .shopping_cart {
    margin: 0 auto;
    float: none;
    width: 100%;
  }
}
.bodywebsite .shopping_cart > a:first-child {
  padding: 7px 10px 14px 16px;
  background: #333;
  display: block;
  font-weight: 700;
  color: #777;
  text-shadow: 1px 1px #0003;
  overflow: hidden;
}
@media (min-width: 768px) and (max-width: 991px) {
  .bodywebsite .shopping_cart > a:first-child span.ajax_cart_product_txt,
  .bodywebsite .shopping_cart > a:first-child span.ajax_cart_product_txt_s {
    display: none !important;
  }
}
.bodywebsite .shopping_cart > a:first-child b {
  color: #fff;
  font: 600 18px/22px "Open Sans", sans-serif;
  padding-right: 5px;
}
.bodywebsite .shopping_cart > a:first-child:before {
  content: "\f07a";
  font-family: FontAwesome;
  display: inline-block;
  font-size: 23px;
  line-height: 23px;
  color: #fff;
  padding-right: 15px;
}
.bodywebsite .shopping_cart .ajax_cart_total {
  display: none !important;
}
.bodywebsite .cart_block .cart_block_no_products {
  margin: 0;
  padding: 10px 20px;
}
.bodywebsite .cart_block .cart-prices {
  border-top: 1px solid #d6d4d4;
  font-weight: 700;
  padding: 10px 20px 22px;
}
.bodywebsite .cart_block .cart-prices .cart-prices-line {
  overflow: hidden;
  border-bottom: 1px solid #515151;
  padding: 7px 0;
}
.bodywebsite .cart_block .cart-prices .cart-prices-line.last-line {
  border: none;
}
.bodywebsite .cart_block .cart-buttons {
  overflow: hidden;
  padding: 20px 20px 10px;
  margin: 0;
  background: #f6f6f6;
}
.bodywebsite .cart_block .cart-buttons a {
  width: 100%;
  float: left;
  text-align: center;
  margin-bottom: 10px;
  margin-right: 10px;
}
.bodywebsite .cart_block .cart-buttons a#button_order_cart {
  margin-right: 0;
  border: none;
}
.bodywebsite .cart_block .cart-buttons a#button_order_cart span {
  padding: 7px 0;
  font-size: 1.1em;
  border: solid 1px #63c473;
  background: #43b155;
}
.bodywebsite .cart_block .cart-buttons a#button_order_cart:hover span {
  border: solid 1px #358c43;
  background: #2e7a3a;
  color: #fff;
}
.bodywebsite #header .cart_block {
  position: absolute;
  top: 95px;
  right: 0;
  z-index: 100;
  display: none;
  height: auto;
  background: #484848;
  color: #fff;
  width: 270px;
}
@media (max-width: 480px) {
  .bodywebsite #header .cart_block {
    width: 100%;
  }
}
@media (max-width: 1200px) {
  .bodywebsite #header .cart_block {
    width: 100%;
  }
}
.bodywebsite #header .cart_block a:hover {
  color: #9c9b9b;
}
.bodywebsite #header .cart_block .cart-prices {
  border: none;
  background: url(/dolibarr18/dolibarr/htdocs/viewimage.php?modulepart=medias&file=image/dolistore3/themes/dolibarr-bootstrap/css/modules/img/cart-shadow.png) repeat-x #3d3d3d;
}
.bodywebsite #header .cart_block .cart-buttons {
  background: url(/dolibarr18/dolibarr/htdocs/viewimage.php?modulepart=medias&file=image/dolistore3/themes/dolibarr-bootstrap/css/modules/img/cart-shadow.png) repeat-x #333;
}
.bodywebsite #header .block_content {
  margin-bottom: 0;
}
.bodywebsite .cart_block .cart_block_shipping_cost,
.bodywebsite .cart_block .cart_block_tax_cost,
.bodywebsite .cart_block .cart_block_total {
  float: right;
}
.bodywebsite .layer_cart_overlay {
  background-color: #000;
  display: none;
  height: 100%;
  left: 0;
  position: fixed;
  top: 0;
  width: 100%;
  z-index: 98;
  opacity: 0.2;
}
.bodywebsite #layer_cart {
  background-color: #fff;
  position: absolute;
  display: none;
  z-index: 99;
  width: 84%;
  margin-right: 8%;
  margin-left: 8%;
  -webkit-border-radius: 4px;
  -moz-border-radius: 4px;
  -ms-border-radius: 4px;
  -o-border-radius: 4px;
  border-radius: 4px;
}
.bodywebsite #layer_cart .layer_cart_product {
  padding: 30px;
  overflow: hidden;
  position: static;
}
.bodywebsite #layer_cart .layer_cart_product h2 {
  font: 400 23px/29px Arial, Helvetica, sans-serif;
  color: #46a74e;
  margin-bottom: 22px;
  padding-right: 100px;
}
.bodywebsite #header .cart_block a,
.bodywebsite #header .cart_block .price {
  color: #fff;
}
@media (max-width: 767px) {
  .bodywebsite #layer_cart .layer_cart_product h2 {
    font-size: 18px;
    padding-right: 0;
    line-height: normal;
  }
}
.bodywebsite #layer_cart .layer_cart_product h2 i {
  font-size: 30px;
  line-height: 30px;
  float: left;
  padding-right: 8px;
}
@media (max-width: 767px) {
  .bodywebsite #layer_cart .layer_cart_product h2 i {
    font-size: 22px;
    line-height: 22px;
  }
}
.bodywebsite #layer_cart .layer_cart_product .product-image-container {
  max-width: 178px;
  border: 1px solid #d6d4d4;
  padding: 5px;
  float: left;
  margin-right: 30px;
}
@media (max-width: 480px) {
  .bodywebsite #layer_cart .layer_cart_product .product-image-container {
    float: none;
    margin-right: 0;
    margin-bottom: 10px;
  }
}
.bodywebsite #layer_cart .layer_cart_product .layer_cart_product_info {
  padding: 38px 0 0;
}
.bodywebsite #layer_cart .layer_cart_product .layer_cart_product_info #layer_cart_product_title {
  display: block;
  padding-bottom: 8px;
}
.bodywebsite #layer_cart .layer_cart_product .layer_cart_product_info > div {
  padding-bottom: 7px;
}
.bodywebsite #layer_cart .layer_cart_product .layer_cart_product_info > div strong {
  padding-right: 3px;
}
.bodywebsite #layer_cart .layer_cart_cart {
  background: #fafafa;
  border-left: 1px solid #d6d4d4;
  padding: 21px 30px 170px;
  -webkit-border-radius: 0 4px 4px 0;
  -moz-border-radius: 0 4px 4px 0;
  -ms-border-radius: 0 4px 4px 0;
  -o-border-radius: 0 4px 4px 0;
  border-radius: 0 4px 4px 0;
  position: relative;
}
@media (min-width: 1200px) {
  .bodywebsite #layer_cart .layer_cart_cart {
    min-height: 318px;
  }
}
@media (min-width: 992px) and (max-width: 1199px) {
  .bodywebsite #layer_cart .layer_cart_cart {
    min-height: 360px;
  }
}
@media (max-width: 991px) {
  .bodywebsite #layer_cart .layer_cart_cart {
    border-left: none;
    border-top: 1px solid #d6d4d4;
  }
}
.bodywebsite #layer_cart .layer_cart_cart h2 {
  font: 400 23px/29px Arial, Helvetica, sans-serif;
  color: #333;
  border-bottom: 1px solid #d6d4d4;
  padding-bottom: 13px;
  margin-bottom: 17px;
}
@media (max-width: 767px) {
  .bodywebsite #layer_cart .layer_cart_cart h2 {
    font-size: 18px;
  }
}
.bodywebsite #layer_cart .layer_cart_cart .layer_cart_row {
  padding: 0 0 7px;
}
.bodywebsite #layer_cart .layer_cart_cart .button-container {
  position: absolute;
  bottom: 0;
  left: 0;
  width: 100%;
  padding: 0 30px 20px;
}
.bodywebsite #layer_cart .layer_cart_cart .button-container .btn {
  margin-bottom: 10px;
}
.bodywebsite #layer_cart .layer_cart_cart .button-container span.exclusive-medium {
  margin-right: 5px;
}
.bodywebsite #layer_cart .layer_cart_cart .button-container span.exclusive-medium i {
  padding-right: 5px;
  color: #777;
}
.bodywebsite #layer_cart .cross {
  position: absolute;
  right: 7px;
  top: 8px;
  width: 25px;
  height: 25px;
  cursor: pointer;
  color: #333;
  z-index: 2;
}
.bodywebsite #layer_cart .cross:before {
  content: "\f057";
  display: block;
  font-family: FontAwesome;
  font-size: 25px;
  line-height: 25px;
}
.bodywebsite #layer_cart .cross:hover {
  color: #515151;
}
.bodywebsite #layer_cart .continue {
  cursor: pointer;
}
.bodywebsite .width98 {
  width: 98px !important;
}
.bodywebsite .truncate2 {
  overflow: hidden;
  display: -webkit-box;
  -webkit-line-clamp: 2;
  -webkit-box-orient: vertical;
}
.bodywebsite a,
.bodywebsite b,
.bodywebsite body,
.bodywebsite div,
.bodywebsite footer,
.bodywebsite form,
.bodywebsite h1,
.bodywebsite h2,
.bodywebsite h3,
.bodywebsite h4,
.bodywebsite h5,
.bodywebsite header,
.bodywebsite html,
.bodywebsite i,
.bodywebsite img,
.bodywebsite label,
.bodywebsite li,
.bodywebsite nav,
.bodywebsite p,
.bodywebsite section,
.bodywebsite span,
.bodywebsite strong,
.bodywebsite table,
.bodywebsite tbody,
.bodywebsite td,
.bodywebsite tr,
.bodywebsite ul {
  margin: 0;
  padding: 0;
  border: 0;
  font: inherit;
  font-size: 100%;
  vertical-align: baseline;
}
.bodywebsite html {
  line-height: 1;
  font-family: sans-serif;
  -webkit-text-size-adjust: 100%;
  -ms-text-size-adjust: 100%;
  font-size: 62.5%;
  -webkit-tap-highlight-color: transparent;
}
.bodywebsite ul {
  list-style: none;
  margin-top: 0;
  margin-bottom: 9px;
}
.bodywebsite table {
  border-collapse: collapse;
  border-spacing: 0;
}
.bodywebsite td {
  text-align: left;
  font-weight: 400;
  vertical-align: middle;
}
.bodywebsite a img {
  border: none;
}
.bodywebsite footer,
.bodywebsite header,
.bodywebsite nav,
.bodywebsite section {
  display: block;
}
.bodywebsite body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
  font-size: 13px;
  line-height: 1.42857;
  color: #111;
  background-color: #fff;
}
.bodywebsite a:focus {
  outline: thin dotted;
  outline: thin dotted #333;
  outline: 5px auto -webkit-focus-ring-color;
  outline-offset: -2px;
}
.bodywebsite a:active,
.bodywebsite a:hover {
  outline: 0;
}
.bodywebsite h1 {
  font-size: 2em;
  margin: 0.67em 0;
  font-size: 33px;
}
.bodywebsite b,
.bodywebsite strong {
  font-weight: 700;
}
.bodywebsite hr {
  -moz-box-sizing: content-box;
  box-sizing: content-box;
  height: 0;
  margin-top: 18px;
  margin-bottom: 18px;
  border: 0;
  border-top: 1px solid #eee;
}
.bodywebsite img {
  border: 0;
  vertical-align: middle;
}
.bodywebsite button,
.bodywebsite input {
  font-size: 100%;
  margin: 0;
  line-height: normal;
  font-family: inherit;
  font-size: inherit;
  line-height: inherit;
  background-image: none;
}
.bodywebsite button {
  text-transform: none;
  -webkit-appearance: button;
  cursor: pointer;
}
.bodywebsite button::-moz-focus-inner,
.bodywebsite input::-moz-focus-inner {
  border: 0;
  padding: 0;
}
.bodywebsite *,
.bodywebsite :after,
.bodywebsite :before {
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}
.bodywebsite a {
  color: #dc7306;
  text-decoration: none;
}
.bodywebsite a:focus,
.bodywebsite a:hover {
  color: #515151;
  text-decoration: underline;
}
.bodywebsite .img-responsive {
  display: block;
  max-width: 100%;
  height: auto;
}
.bodywebsite p {
  margin: 0 0 9px;
}
.bodywebsite h1,
.bodywebsite h2,
.bodywebsite h3,
.bodywebsite h4,
.bodywebsite h5 {
  font-family: Arial, Helvetica, sans-serif;
  font-weight: 500;
  line-height: 1.1;
}
.bodywebsite h1,
.bodywebsite h2,
.bodywebsite h3 {
  margin-top: 2px;
  margin-bottom: 9px;
}
.bodywebsite h4,
.bodywebsite h5 {
  margin-top: 9px;
  margin-bottom: 9px;
}
.bodywebsite h2 {
  font-size: 27px;
}
.bodywebsite h3 {
  font-size: 23px;
}
.bodywebsite h4 {
  font-size: 17px;
}
.bodywebsite h5 {
  font-size: 13px;
}
.bodywebsite ul ul {
  margin-bottom: 0;
}
.bodywebsite .container {
  margin-right: auto;
  margin-left: auto;
  padding-left: 15px;
  padding-right: 15px;
}
.bodywebsite .row {
  margin-left: -15px;
  margin-right: -15px;
}
.bodywebsite .col-md-3,
.bodywebsite .col-md-5,
.bodywebsite .col-md-6,
.bodywebsite .col-sm-12,
.bodywebsite .col-sm-2,
.bodywebsite .col-sm-3,
.bodywebsite .col-sm-4,
.bodywebsite .col-sm-9,
.bodywebsite .col-xs-12,
.bodywebsite header .row #header_logo {
  position: relative;
  min-height: 1px;
  padding-left: 15px;
  padding-right: 15px;
}
.bodywebsite .col-xs-12 {
  width: 100%;
}
.bodywebsite .container:after,
.bodywebsite .container:before,
.bodywebsite .row:after,
.bodywebsite .row:before {
  content: " ";
  display: table;
}
.bodywebsite .container:after,
.bodywebsite .row:after {
  clear: both;
}
@media (min-width: 768px) {
  .bodywebsite .container {
    max-width: 750px;
  }
  .bodywebsite .col-sm-2,
  .bodywebsite .col-sm-3,
  .bodywebsite .col-sm-4,
  .bodywebsite .col-sm-9,
  .bodywebsite header .row #header_logo {
    float: left;
  }
  .bodywebsite .col-sm-2 {
    width: 33%;
  }
  .bodywebsite .col-sm-9 {
    width: 75%;
  }
  .bodywebsite .col-sm-12 {
    width: 100%;
  }
  .bodywebsite .col-sm-3,
  .bodywebsite .col-sm-4,
  .bodywebsite header .row #header_logo {
    width: 25%;
  }
}
@media (min-width: 992px) {
  .bodywebsite .container {
    max-width: 970px;
  }
  .bodywebsite .col-md-3,
  .bodywebsite .col-md-5,
  .bodywebsite .col-md-6 {
    float: left;
  }
  .bodywebsite .col-md-3 {
    width: 25%;
  }
  .bodywebsite .col-md-5 {
    width: 41.66667%;
  }
  .bodywebsite .col-md-6 {
    width: 50%;
  }
}
@media (min-width: 1200px) {
  .bodywebsite .container {
    max-width: 1170px;
  }
}
.bodywebsite table {
  max-width: 100%;
  background-color: transparent;
}
.bodywebsite label {
  display: inline-block;
  margin-bottom: 5px;
  font-weight: 700;
}
.bodywebsite .form-control {
  display: block;
  width: 100%;
  height: 32px;
  padding: 6px 12px;
  font-size: 13px;
  line-height: 1.42857;
  color: #9c9b9b;
  vertical-align: middle;
  background-color: #fff;
  border: 1px solid #d6d4d4;
  border-radius: 0;
  -webkit-box-shadow: inset 0 1px 1px #00000013;
  box-shadow: inset 0 1px 1px #00000013;
  -webkit-transition: border-color ease-in-out 0.15s, box-shadow ease-in-out 0.15s;
  transition: border-color ease-in-out 0.15s, box-shadow ease-in-out 0.15s;
}
.bodywebsite .form-control:focus {
  border-color: #66afe9;
  outline: 0;
  -webkit-box-shadow: inset 0 1px 1px #00000013 0 8px #66afe999;
  box-shadow: inset 0 1px 1px #00000013 0 8px #66afe999;
}
.bodywebsite .form-group {
  margin-bottom: 15px;
}
.bodywebsite .btn {
  display: inline-block;
  padding: 6px 12px;
  margin-bottom: 0;
  font-size: 13px;
  font-weight: 400;
  line-height: 1.42857;
  text-align: center;
  vertical-align: middle;
  cursor: pointer;
  border: 1px solid transparent;
  border-radius: 0;
  white-space: nowrap;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  -o-user-select: none;
  user-select: none;
}
.bodywebsite .btn:focus {
  outline: thin dotted #333;
  outline: 5px auto -webkit-focus-ring-color;
  outline-offset: -2px;
}
.bodywebsite .btn:focus,
.bodywebsite .btn:hover {
  color: #333;
  text-decoration: none;
}
.bodywebsite .btn:active {
  outline: 0;
  background-image: none;
  -webkit-box-shadow: inset 0 3px 5px #00000020;
  box-shadow: inset 0 3px 5px #00000020;
}
.bodywebsite .btn-default {
  color: #333;
  background-color: #fff;
  border-color: #ccc;
}
.bodywebsite .btn-default:active,
.bodywebsite .btn-default:focus,
.bodywebsite .btn-default:hover {
  color: #333;
  background-color: #ebebeb;
  border-color: #adadad;
}
.bodywebsite .btn-default:active {
  background-image: none;
}
.bodywebsite .nav {
  margin-bottom: 0;
  padding-left: 0;
  list-style: none;
}
.bodywebsite .breadcrumb {
  padding: 8px 15px;
  margin-bottom: 18px;
  list-style: none;
  background-color: #f6f6f6;
  border-radius: 0;
}
.bodywebsite .form-control:-moz-placeholder,
.bodywebsite .form-control::-moz-placeholder,
.bodywebsite .form-control:-ms-input-placeholder,
.bodywebsite .form-control::-webkit-input-placeholder {
  color: #999;
}
.bodywebsite .nav:after,
.bodywebsite .nav:before,
.bodywebsite .clearfix:after,
.bodywebsite .clearfix:before {
  content: " ";
  display: table;
}
.bodywebsite .nav:after,
.bodywebsite .clearfix:after {
  clear: both;
}
.bodywebsite .hidden {
  display: none!important;
  visibility: hidden !important;
}
@font-face {
  font-family: fontawesome;
  src: url(https://www.dolistore.com/themes/dolibarr-bootstrap/font/fontawesome-webfont.eot?v=3.2.1);
  src: url(https://www.dolistore.com/themes/dolibarr-bootstrap/font/fontawesome-webfont.eot?#iefix&v=3.2.1) format("embedded-opentype"), url(https://www.dolistore.com/themes/dolibarr-bootstrap/font/fontawesome-webfont.woff?v=3.2.1) format("woff"), url(https://www.dolistore.com/themes/dolibarr-bootstrap/font/fontawesome-webfont.ttf?v=3.2.1) format("truetype"), url(https://www.dolistore.com/themes/dolibarr-bootstrap/font/fontawesome-webfont.svg#fontawesomeregular?v=3.2.1) format("svg");
  font-weight: 400;
  font-style: normal;
}
.bodywebsite [class^=icon-] {
  font-family: FontAwesome;
  font-weight: 400;
  font-style: normal;
  text-decoration: inherit;
  -webkit-font-smoothing: antialiased;
  display: inline;
  width: auto;
  height: auto;
  line-height: normal;
  vertical-align: baseline;
  background-image: none;
  background-position: 0 0;
  background-repeat: repeat;
  margin-top: 0;
}
.bodywebsite [class^=icon-]:before {
  text-decoration: inherit;
  display: inline-block;
  speak: none;
}
.bodywebsite a [class^=icon-] {
  display: inline;
}
.bodywebsite .icon-ok:before {
  content: "\f00c";
}
.bodywebsite .icon-home:before {
  content: "\f015";
}
.bodywebsite .icon-repeat:before {
  content: "\f01e";
}
.bodywebsite .icon-check:before {
  content: "\f046";
}
.bodywebsite .icon-chevron-left:before {
  content: "\f053";
}
.bodywebsite .icon-chevron-right:before {
  content: "\f054";
}
.bodywebsite .icon-plus:before {
  content: "\f067";
}
.bodywebsite .icon-minus:before {
  content: "\f068";
}
.bodywebsite .icon-warning-sign:before {
  content: "\f071";
}
.bodywebsite .icon-calendar:before {
  content: "\f073";
}
.bodywebsite .icon-save:before {
  content: "\f0c7";
}
.bodywebsite .icon-caret-right:before {
  content: "\f0da";
}
.bodywebsite .icon-puzzle-piece:before {
  content: "\f12e";
}
.bodywebsite a:hover {
  text-decoration: none;
}
@media only screen and (min-width: 1200px) {
  .bodywebsite .container {
    padding-left: 0;
    padding-right: 0;
  }
}
.bodywebsite body {
  min-width: 320px;
  height: 100%;
  line-height: 18px;
  font-size: 13px;
  color: #111;
}
.bodywebsite #header {
  z-index: 1001;
}
.bodywebsite .columns-container {
  background: #fff;
}
.bodywebsite #columns {
  position: relative;
  padding-bottom: 50px;
  padding-top: 15px;
}
.bodywebsite header {
  z-index: 1;
  position: relative;
  background: #fff;
  padding-bottom: 15px;
}
.bodywebsite header .banner {
  background: #000;
  max-height: 100%;
}
.bodywebsite header .nav {
  background: #333;
}
.bodywebsite header .nav nav {
  width: 100%;
}
.bodywebsite header .row {
  position: relative;
}
.bodywebsite header .row #header_logo {
  padding-top: 15px;
}
.bodywebsite header .banner .row,
.bodywebsite header .nav .row {
  margin: 0;
}
@media (max-width: 992px) {
  .bodywebsite header .row #header_logo {
    padding-top: 40px;
  }
}
@media (max-width: 767px) {
  .bodywebsite header .row #header_logo {
    padding-top: 15px;
  }
  .bodywebsite header .row #header_logo img {
    margin: 0 auto;
  }
}
@media (min-width: 767px) {
  .bodywebsite header .row #header_logo + .col-sm-4 + .col-sm-4 {
    float: right;
  }
}
.bodywebsite .unvisible {
  display: none;
}
.bodywebsite a.button,
.bodywebsite span.button {
  position: relative;
  display: inline-block;
  padding: 5px 7px;
  border: 1px solid #c90;
  font-weight: 700;
  color: #000;
  background: url(https://www.dolistore.com/themes/dolibarr-bootstrap/img/bg_bt.gif) repeat-x 0 0 #f4b61b;
  cursor: pointer;
  white-space: normal;
  text-align: left;
}
.bodywebsite a.button:hover {
  text-decoration: none;
  background-position: left -50px;
}
.bodywebsite a.button:active {
  background-position: left -100px;
}
.bodywebsite .button.button-small {
  font: bold 13px/17px Arial, Helvetica, sans-serif;
  color: #fff;
  background: #6f6f6f;
  border: 1px solid;
  border-color: #666 #5f5f5f #292929;
  padding: 0;
  text-shadow: 1px 1px #0000003d;
  -webkit-border-radius: 0;
  -moz-border-radius: 0;
  border-radius: 0;
}
.bodywebsite .button.button-small span {
  display: block;
  padding: 3px 8px;
  border: 1px solid;
  border-color: #8b8a8a;
}
.bodywebsite .button.button-small span i {
  vertical-align: 0;
  margin-right: 5px;
}
.bodywebsite .button.button-small span i.right {
  margin-right: 0;
  margin-left: 5px;
}
.bodywebsite .button.button-small span:hover {
  background: #575757;
  border-color: #303030 #303030 #666 #444;
}
.bodywebsite .button.button-medium {
  font-size: 17px;
  line-height: 21px;
  color: #fff;
  padding: 0;
  font-weight: 700;
  background: #43b754;
  background: -moz-linear-gradient(top, #43b754 0, #41b757 2%, #41b854 4%, #43b756 6%, #41b354 38%, #44b355 40%, #45af55 66%, #41ae53 74%, #42ac52 91%, #41ae55 94%, #43ab54 96%, #42ac52 100%);
  background: -webkit-gradient(linear, left top, left bottom, color-stop(0, #43b754), color-stop(2%, #41b757), color-stop(4%, #41b854), color-stop(6%, #43b756), color-stop(38%, #41b354), color-stop(40%, #44b355), color-stop(66%, #45af55), color-stop(74%, #41ae53), color-stop(91%, #42ac52), color-stop(94%, #41ae55), color-stop(96%, #43ab54), color-stop(100%, #42ac52));
  background: -webkit-linear-gradient(top, #43b754 0, #41b757 2%, #41b854 4%, #43b756 6%, #41b354 38%, #44b355 40%, #45af55 66%, #41ae53 74%, #42ac52 91%, #41ae55 94%, #43ab54 96%, #42ac52 100%);
  background: -o-linear-gradient(top, #43b754 0, #41b757 2%, #41b854 4%, #43b756 6%, #41b354 38%, #44b355 40%, #45af55 66%, #41ae53 74%, #42ac52 91%, #41ae55 94%, #43ab54 96%, #42ac52 100%);
  background: -ms-linear-gradient(top, #43b754 0, #41b757 2%, #41b854 4%, #43b756 6%, #41b354 38%, #44b355 40%, #45af55 66%, #41ae53 74%, #42ac52 91%, #41ae55 94%, #43ab54 96%, #42ac52 100%);
  background: linear-gradient(to bottom, #43b754 0, #41b757 2%, #41b854 4%, #43b756 6%, #41b354 38%, #44b355 40%, #45af55 66%, #41ae53 74%, #42ac52 91%, #41ae55 94%, #43ab54 96%, #42ac52 100%);
  border: 1px solid;
  border-color: #399a49 #247f32 #1a6d27 #399a49;
  -webkit-border-radius: 0;
  -moz-border-radius: 0;
  border-radius: 0;
}
.bodywebsite .button.button-medium span {
  display: block;
  padding: 10px 10px 10px 14px;
  border: 1px solid;
  border-color: #74d578;
}
.bodywebsite .dark,
.bodywebsite label {
  color: #333;
}
@media (max-width: 480px) {
  .bodywebsite .button.button-medium span {
    font-size: 15px;
    padding-right: 7px;
    padding-left: 7px;
  }
}
.bodywebsite .button.button-medium span i.right {
  margin-right: 0;
  margin-left: 9px;
}
@media (max-width: 480px) {
  .bodywebsite .button.button-medium span i.right {
    margin-left: 5px;
  }
}
.bodywebsite .button.button-medium:hover {
  background: #3aa04c;
  background: -moz-linear-gradient(top, #3aa04c 0, #3aa04a 100%);
  background: -webkit-gradient(linear, left top, left bottom, color-stop(0, #3aa04c), color-stop(100%, #3aa04a));
  background: -webkit-linear-gradient(top, #3aa04c 0, #3aa04a 100%);
  background: -o-linear-gradient(top, #3aa04c 0, #3aa04a 100%);
  background: -ms-linear-gradient(top, #3aa04c 0, #3aa04a 100%);
  background: linear-gradient(to bottom, #3aa04c 0, #3aa04a 100%);
  border-color: #196f28 #399a49 #399a49 #258033;
}
.bodywebsite .btn.button-minus,
.bodywebsite .btn.button-plus {
  font-size: 14px;
  line-height: 14px;
  color: silver;
  text-shadow: 1px -1px #0000000d;
  padding: 0;
  border: 1px solid;
  border-color: #dedcdc #c1bfbf #b5b4b4 #dad8d8;
  -webkit-border-radius: 0;
  -moz-border-radius: 0;
  border-radius: 0;
}
.bodywebsite .btn.button-minus span,
.bodywebsite .btn.button-plus span {
  display: block;
  border: 1px solid #fff;
  width: 25px;
  height: 25px;
  text-align: center;
  vertical-align: middle;
  padding: 4px 0 0;
  background: #1e5799;
  background: #fff;
  background: -moz-linear-gradient(top, #fff 0, #fbfbfb 100%);
  background: -webkit-gradient(linear, left top, left bottom, color-stop(0, #fff), color-stop(100%, #fbfbfb));
  background: -webkit-linear-gradient(top, #fff 0, #fbfbfb 100%);
  background: -o-linear-gradient(top, #fff 0, #fbfbfb 100%);
  background: -ms-linear-gradient(top, #fff 0, #fbfbfb 100%);
  background: linear-gradient(to bottom, #fff 0, #fbfbfb 100%);
}
.bodywebsite .btn.button-minus:hover,
.bodywebsite .btn.button-plus:hover {
  color: #333;
}
.bodywebsite .btn.button-minus:hover span,
.bodywebsite .btn.button-plus:hover span {
  filter: none;
  background: #f6f6f6;
}
.bodywebsite .button.exclusive-medium {
  font-size: 17px;
  padding: 0;
  line-height: 21px;
  color: #333;
  font-weight: 700;
  border: 1px solid;
  border-color: #cacaca #b7b7b7 #9a9a9a;
  text-shadow: 1px 1px #fff;
}
.bodywebsite .button.exclusive-medium span {
  border: 1px solid;
  border-color: #fff;
  display: block;
  padding: 9px 10px 11px;
  background: #f7f7f7;
  background: -moz-linear-gradient(top, #f7f7f7 0, #ededed 100%);
  background: -webkit-gradient(linear, left top, left bottom, color-stop(0, #f7f7f7), color-stop(100%, #ededed));
  background: -webkit-linear-gradient(top, #f7f7f7 0, #ededed 100%);
  background: -o-linear-gradient(top, #f7f7f7 0, #ededed 100%);
  background: -ms-linear-gradient(top, #f7f7f7 0, #ededed 100%);
  background: linear-gradient(to bottom, #f7f7f7 0, #ededed 100%);
}
@media (max-width: 480px) {
  .bodywebsite .button.exclusive-medium span {
    font-size: 15px;
    padding-right: 7px;
    padding-left: 7px;
  }
}
.bodywebsite .button.exclusive-medium span:hover {
  border-color: #9e9e9e #c2c2c2 #c8c8c8;
}
.bodywebsite .form-control {
  padding: 3px 5px;
  height: 27px;
  -webkit-box-shadow: none;
  box-shadow: none;
}
.bodywebsite .form-control.grey {
  background: #fbfbfb;
}
.bodywebsite .product-name {
  font-size: 17px;
  line-height: 23px;
  color: #3a3939;
  margin-bottom: 0;
}
.bodywebsite .price {
  font-size: 13px;
  color: #777;
  white-space: nowrap;
}
.bodywebsite .old-price {
  color: #6f6f6f;
  text-decoration: line-through;
}
.bodywebsite .special-price {
  color: #f13340;
}
.bodywebsite .price-percent-reduction {
  background: #f13340;
  border: 1px solid #d02a2c;
  font: 600 21px/24px "Open Sans", sans-serif;
  color: #fff;
  padding: 0 5px 0 3px;
  display: inline-block;
}
.bodywebsite .sale-box {
  position: absolute;
  top: -4px;
  overflow: hidden;
  height: 85px;
  width: 85px;
  text-align: center;
  z-index: 0;
  right: -5px;
}
.bodywebsite .sale-label {
  font: 700 14px/12px Arial, Helvetica, sans-serif;
  color: #fff;
  background: #f13340;
  text-transform: uppercase;
  padding: 9px 0 7px;
  text-shadow: 1px 1px #0000003d;
  width: 130px;
  text-align: center;
  display: block;
  position: absolute;
  right: -33px;
  top: 16px;
  z-index: 1;
  -webkit-transform: rotate(45deg);
  -ms-transform: rotate(45deg);
  transform: rotate(45deg);
}
.bodywebsite .sale-label:before {
  position: absolute;
  bottom: -3px;
  right: 4px;
  width: 0;
  height: 0;
  border-style: solid;
  border-width: 4px 4px 0;
  border-color: #ad2b34 transparent transparent;
  content: ".";
  text-indent: -5000px;
  -webkit-transform: rotate(225deg);
  -ms-transform: rotate(225deg);
  transform: rotate(225deg);
}
.bodywebsite .sale-label:after {
  position: absolute;
  bottom: -3px;
  left: 5px;
  width: 0;
  height: 0;
  border-style: solid;
  border-width: 4px 4px 0;
  border-color: #ad2b34 transparent transparent;
  content: ".";
  text-indent: -5000px;
  -webkit-transform: rotate(135deg);
  -ms-transform: rotate(135deg);
  transform: rotate(135deg);
}
.bodywebsite .page-product-box {
  padding-bottom: 10px;
}
.bodywebsite .block {
  margin-bottom: 30px;
}
@media (max-width: 767px) {
  .bodywebsite .block {
    margin-bottom: 0;
  }
  .bodywebsite .block .block_content {
    margin-bottom: 20px;
  }
}
.bodywebsite .block .title_block,
.bodywebsite .block h4 {
  font: 600 18px/22px "Open Sans", sans-serif;
  color: #555454;
  background: #f6f6f6;
  border-top: 5px solid #333;
  text-transform: uppercase;
  padding: 14px 5px 17px 20px;
  margin-bottom: 20px;
}
@media (min-width: 768px) and (max-width: 991px) {
  .bodywebsite .block .title_block,
  .bodywebsite .block h4 {
    font-size: 14px;
  }
}
@media (max-width: 767px) {
  .bodywebsite .block .title_block,
  .bodywebsite .block h4 {
    position: relative;
  }
  .bodywebsite .block .title_block:after,
  .bodywebsite .block h4:after {
    display: block;
    font-family: fontawesome;
    content: "ï§";
    position: absolute;
    right: 0;
    top: 15px;
    height: 36px;
    width: 36px;
    font-size: 26px;
    font-weight: 400;
  }
}
.bodywebsite .block .title_block a,
.bodywebsite .block h4 a {
  color: #555454;
}
.bodywebsite .block .title_block a:hover,
.bodywebsite .block h4 a:hover {
  color: #333;
}
.bodywebsite .block .products-block li {
  padding: 0 0 20px;
  margin-bottom: 20px;
  border-bottom: 1px solid #d6d4d4;
}
.bodywebsite .block .products-block li .products-block-image {
  float: left;
  border: 1px solid #d6d4d4;
  margin-right: 19px;
}
@media (min-width: 768px) and (max-width: 991px) {
  .bodywebsite .block .products-block li .products-block-image {
    float: none;
    display: inline-block;
    margin: 0 auto 10px;
    text-align: center;
  }
}
.bodywebsite .block .products-block li .product-content {
  overflow: hidden;
}
.bodywebsite .block .products-block li .product-content h5 {
  margin: -3px 0 0;
}
.bodywebsite .block .products-block .product-name {
  font-size: 15px;
  line-height: 18px;
}
.bodywebsite .block .products-block .product-description {
  margin-bottom: 14px;
}
.bodywebsite .block .products-block .price-percent-reduction {
  font: 700 14px/17px Arial, Helvetica, sans-serif;
  padding: 1px 6px;
}
.bodywebsite h3.page-product-heading {
  color: #555454;
  text-transform: uppercase;
  font-family: open sans, sans-serif;
  font-weight: 600;
  font-size: 18px;
  line-height: 20px;
  padding: 14px 20px 17px;
  margin: 0 0 20px;
  position: relative;
  border: 1px solid #d6d4d4;
  background: #fbfbfb;
}
.bodywebsite #page .rte {
  padding: 0!important;
  background: transparent none repeat scroll 0 0;
}
.bodywebsite .header-container {
  background: #fff;
}
.bodywebsite .breadcrumb {
  display: inline-block;
  padding: 0 11px;
  border: 1px solid #d6d4d4;
  font-weight: 700;
  font-size: 12px;
  line-height: 24px;
  min-height: 6px;
  -webkit-border-radius: 3px;
  -moz-border-radius: 3px;
  border-radius: 3px;
  overflow: hidden;
  margin-bottom: 16px;
  position: relative;
  z-index: 1;
}
.bodywebsite .breadcrumb .navigation-pipe {
  width: 18px;
  display: inline-block;
  text-indent: -5000px;
}
.bodywebsite .breadcrumb a {
  display: inline-block;
  background: #fff;
  padding: 0 15px 0 22px;
  margin-left: -26px;
  position: relative;
  z-index: 2;
  color: #333;
}
.bodywebsite .breadcrumb a.home {
  font-size: 20px;
  color: #777;
  width: 38px;
  text-align: center;
  padding: 0;
  margin: 0 1px 0 -11px;
  -moz-border-radius-topleft: 3px;
  -webkit-border-top-left-radius: 3px;
  border-top-left-radius: 3px;
  -moz-border-radius-bottomleft: 3px;
  -webkit-border-bottom-left-radius: 3px;
  border-bottom-left-radius: 3px;
  z-index: 99;
  line-height: 20px;
  display: inline-block;
  height: 24px;
}
.bodywebsite .breadcrumb a.home i {
  vertical-align: -1px;
}
.bodywebsite .breadcrumb a.home:before {
  border: none;
}
.bodywebsite .breadcrumb a:after {
  display: inline-block;
  content: ".";
  position: absolute;
  right: -10px;
  top: 3px;
  width: 18px;
  height: 18px;
  background: #fff;
  border-right: 1px solid #d6d4d4;
  border-top: 1px solid #d6d4d4;
  border-radius: 2px;
  text-indent: -5000px;
  z-index: -1;
  -webkit-transform: rotate(45deg);
  -ms-transform: rotate(45deg);
  transform: rotate(45deg);
}
.bodywebsite .breadcrumb a:before {
  display: inline-block;
  content: ".";
  position: absolute;
  left: -10px;
  top: 3px;
  width: 18px;
  height: 18px;
  background: 0 0;
  border-right: 1px solid #d6d4d4;
  border-top: 1px solid #d6d4d4;
  border-radius: 2px;
  text-indent: -5000px;
  z-index: -1;
  -webkit-transform: rotate(45deg);
  -ms-transform: rotate(45deg);
  transform: rotate(45deg);
}
.bodywebsite .breadcrumb a:hover {
  color: #777;
}
.bodywebsite .footer-container {
  background-color: #333;
}
@media (min-width: 768px) {
  .bodywebsite .footer-container {
    background: 0 0 !important;
  }
}
.bodywebsite .footer-container .container {
  padding-bottom: 20px;
}
.bodywebsite .footer-container #footer {
  color: #777;
}
.bodywebsite .footer-container #footer .row {
  position: relative;
}
.bodywebsite .footer-container #footer .footer-block {
  margin-top: 45px;
}
@media (max-width: 767px) {
  .bodywebsite .footer-container #footer .footer-block {
    margin-top: 20px;
  }
}
.bodywebsite .footer-container #footer a {
  color: #777;
}
.bodywebsite .footer-container #footer a:hover {
  color: #fff;
}
.bodywebsite .footer-container #footer h4 {
  font: 600 18px/22px "Open Sans", sans-serif;
  color: #fff;
  margin: 0 0 13px;
  cursor: pointer;
}
@media (max-width: 767px) {
  .bodywebsite .footer-container #footer h4 {
    position: relative;
    margin-bottom: 0;
    padding-bottom: 13px;
  }
  .bodywebsite .footer-container #footer h4:after {
    display: block;
    content: "\f055";
    font-family: fontawesome;
    position: absolute;
    right: 0;
    top: 1px;
  }
}
.bodywebsite .footer-container #footer h4 a {
  color: #fff;
}
.bodywebsite .footer-container #footer ul li {
  padding-bottom: 8px;
}
.bodywebsite .footer-container #footer ul li a {
  font-weight: 700;
  text-shadow: 1px 1px 0 #0006;
}
.bodywebsite .page-product-box > div > table {
  width: 100% !important;
}
.bodywebsite .page-product-box img {
  max-width: 100%;
  height: auto;
}
.bodywebsite div.primary_block div#views_block {
  float: right;
  width: 56%;
}
@media (max-width: 767px) {
  .bodywebsite div.primary_block div#views_block {
    margin-top: 25px;
    float: unset;
    width: unset;
  }
}
.bodywebsite #thumbs_list li a.shown,
.bodywebsite #thumbs_list li a:hover {
  border-color: transparent !important;
}
.bodywebsite .product-image-container {
  height: 200px;
}
@media only screen and (-webkit-min-device-pixel-ratio: 2), only screen and (min-device-pixel-ratio: 2) {
  .bodywebsite .replace-2x {
    font-size: 1px;
  }
}
.bodywebsite table td {
  padding: 9px 10px;
  text-align: left;
}
.bodywebsite .primary_block {
  margin-bottom: 40px;
}
.bodywebsite .top-hr {
  background: #000;
  height: 5px;
  margin: 2px 0 31px;
}
.bodywebsite .primary_block .pb-left-column img {
  max-width: 100%;
  height: auto;
}
.bodywebsite .pb-left-column #image-block {
  position: relative;
  display: block;
  cursor: pointer;
  padding: 5px;
  border: 1px solid #dbdbdb;
  background: #fff;
}
@media (max-width: 767px) {
  .bodywebsite .pb-left-column #image-block {
    width: 280px;
    margin: 0 auto;
  }
}
.bodywebsite .pb-left-column #image-block img {
  background: #fbfbfb;
  width: 100%;
}
.bodywebsite .pb-left-column #image-block #view_full_size .span_link {
  position: absolute;
  bottom: 20px;
  left: 50%;
  margin-left: -68px;
  display: block;
  padding: 10px 0;
  line-height: 22px;
  color: #777676;
  width: 136px;
  text-align: center;
  font-weight: 700;
  background: #ffffff80;
  -webkit-box-shadow: 0 2px 8px #00000029;
  -moz-box-shadow: 0 2px 8px #00000029;
  box-shadow: 0 2px 8px #00000029;
}
.bodywebsite .pb-left-column #image-block #view_full_size .span_link:after {
  font-family: fontawesome;
  color: silver;
  font-size: 20px;
  line-height: 22px;
  content: "\f00e";
  font-weight: 400;
  margin: 0 0 0 4px;
}
.bodywebsite .pb-left-column #image-block #view_full_size .span_link:hover:after {
  color: #333;
}
.bodywebsite .pb-left-column #image-block .sale-box {
  z-index: 1000;
}
.bodywebsite #thumbs_list {
  overflow: hidden;
  float: left;
  width: 393px;
}
@media (min-width: 992px) and (max-width: 1199px) {
  .bodywebsite #thumbs_list {
    width: 290px;
  }
}
@media (min-width: 768px) and (max-width: 991px) {
  .bodywebsite #thumbs_list {
    width: 164px;
  }
}
@media (max-width: 767px) {
  .bodywebsite #thumbs_list {
    width: 194px;
  }
}
.bodywebsite #thumbs_list ul#thumbs_list_frame {
  list-style-type: none;
  padding-left: 0;
  overflow: hidden;
  height: 90px;
}
.bodywebsite #thumbs_list li {
  float: left;
  height: 90px;
  width: 90px;
  cursor: pointer;
  border: 1px solid #dbdbdb;
  margin-right: 8px;
  line-height: 0;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}
@media (min-width: 768px) and (max-width: 991px) {
  .bodywebsite #thumbs_list li {
    width: 76px;
    height: 76px;
  }
}
.bodywebsite #thumbs_list li:first-child {
  margin: 0 9px 0 0;
}
.bodywebsite #thumbs_list li.last {
  margin-right: 0;
}
.bodywebsite #thumbs_list li a {
  display: block;
  border: 3px solid #fff;
  -webkit-transition: all 0.3s ease;
  -moz-transition: all 0.3s ease;
  -o-transition: all 0.3s ease;
  transition: all 0.3s ease;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  background: #fbfbfb;
}
.bodywebsite #thumbs_list li a.shown,
.bodywebsite #thumbs_list li a:hover {
  border-color: #dbdbdb;
}
.bodywebsite #thumbs_list li img {
  border: 1px solid #fff;
  width: 100%;
  height: 100%;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}
@media (min-width: 768px) and (max-width: 991px) {
  .bodywebsite #thumbs_list li img {
    width: 68px;
    height: 68px;
  }
}
.bodywebsite span.view_scroll_spacer {
  float: left;
  width: 39px;
  padding-left: 12px;
}
@media (min-width: 768px) and (max-width: 991px) {
  .bodywebsite span.view_scroll_spacer {
    padding-left: 6px;
    width: 28px;
  }
}
.bodywebsite #view_scroll_left,
.bodywebsite #view_scroll_right {
  margin-top: 38px;
  height: 20px;
  width: 20px;
  line-height: 0;
  font-size: 0;
  overflow: hidden;
}
@media (min-width: 768px) and (max-width: 991px) {
  .bodywebsite #view_scroll_left,
  .bodywebsite #view_scroll_right {
    margin-top: 28px;
  }
}
.bodywebsite #view_scroll_left:before,
.bodywebsite #view_scroll_right:before {
  padding-left: 2px;
  color: silver;
  font-family: fontawesome;
  font-size: 20px;
  line-height: 22px;
}
.bodywebsite #view_scroll_left:hover:before,
.bodywebsite #view_scroll_right:hover:before {
  color: #333;
}
.bodywebsite #view_scroll_right {
  float: left;
}
.bodywebsite #view_scroll_right:before {
  content: "\f138";
}
.bodywebsite #view_scroll_left {
  margin-top: 0;
}
.bodywebsite #view_scroll_left:before {
  content: "\f137";
  padding-right: 2px;
}
.bodywebsite .resetimg {
  padding: 10px 0 0;
}
.bodywebsite .view_scroll_spacer {
  margin-top: 38px;
}
@media (min-width: 768px) and (max-width: 991px) {
  .bodywebsite .view_scroll_spacer {
    margin-top: 28px;
  }
}
.bodywebsite #usefull_link_block {
  list-style-type: none;
}
.bodywebsite #usefull_link_block li {
  margin: 0 0 8px;
}
@media (min-width: 768px) and (max-width: 991px) {
  .bodywebsite #usefull_link_block li {
    float: none !important;
  }
}
.bodywebsite #usefull_link_block li:first-child {
  margin: 0 0 8px;
  border: none;
  padding: 0;
}
.bodywebsite #usefull_link_block li a {
  color: #777676;
  font-weight: 700;
  position: relative;
  padding-left: 30px;
  line-height: 22px;
  display: inline-block;
}
.bodywebsite #usefull_link_block li a:before {
  font-family: fontawesome;
  color: #333;
  font-size: 19px;
  line-height: 24px;
  position: absolute;
  top: -2px;
  left: 0;
  font-weight: 400;
}
.bodywebsite #usefull_link_block li a:hover {
  color: #000;
}
@media (min-width: 768px) and (max-width: 991px) {
  .bodywebsite #usefull_link_block li.print {
    margin: 8px 0 0;
    padding: 0;
    border: none;
  }
}
.bodywebsite #usefull_link_block li.print a:before {
  content: "\f02f";
}
.bodywebsite #usefull_link_block li#left_share_fb {
  clear: both;
  float: none;
}
.bodywebsite #usefull_link_block li#left_share_fb a {
  padding-left: 18px;
}
.bodywebsite #usefull_link_block li#left_share_fb a:before {
  content: "\f09a";
}
.bodywebsite .pb-center-column {
  margin-bottom: 30px;
}
.bodywebsite .pb-center-column h1 {
  padding-bottom: 16px;
  font-size: 20px;
  color: #3a3939;
}
.bodywebsite .pb-center-column p {
  margin-bottom: 10px;
}
.bodywebsite .pb-center-column #product_reference {
  margin-bottom: 6px;
}
.bodywebsite .pb-center-column #product_reference span {
  font-weight: 700;
  color: #333;
}
.bodywebsite .pb-center-column #short_description_block {
  color: #666;
}
.bodywebsite .pb-center-column #short_description_block .buttons_bottom_block {
  display: none;
}
.bodywebsite .pb-center-column #short_description_block #short_description_content {
  padding: 0 0 15px;
  word-wrap: break-word;
}
.bodywebsite .pb-center-column #short_description_block #short_description_content p {
  line-height: 18px;
}
.bodywebsite #page .rte {
  padding: 0 20px 20px;
  word-wrap: break-word;
}
.bodywebsite #page .rte p {
  margin-bottom: 1em;
  min-height: 1px;
}
.bodywebsite .box-cart-bottom,
.bodywebsite .product_attributes {
  -webkit-box-shadow: inset 0 6px 6px #0000000d;
  -moz-box-shadow: inset 0 6px 6px #0000000d;
  box-shadow: inset 0 6px 6px #0000000d;
  padding: 19px 19px 17px;
}
.bodywebsite .box-cart-bottom {
  padding: 0;
}
.bodywebsite .page-product-box a {
  color: #333;
  text-decoration: underline;
}
.bodywebsite .page-product-box a.btn {
  text-decoration: none;
}
.bodywebsite .box-info-product {
  background: #f6f6f6;
  border: 1px solid #d2d0d0;
  border-top: 1px solid #b0afaf;
  border-bottom: 1px solid #b0afaf;
}
.bodywebsite .box-info-product p {
  margin-bottom: 7px;
}
.bodywebsite .box-info-product .exclusive {
  padding: 0;
  border-top: 1px solid #0079b6;
  border-right: 1px solid #006fa8;
  border-left: 1px solid #006fa8;
  border-bottom: 1px solid #012740;
  -webkit-border-radius: 5px;
  -moz-border-radius: 5px;
  -ms-border-radius: 5px;
  -o-border-radius: 5px;
  border-radius: 5px;
  position: relative;
  display: block;
  background-image: -webkit-gradient(linear, 50% 0, 50% 100%, color-stop(0, #009ad0), color-stop(100%, #007ab7));
  background-image: -webkit-linear-gradient(#009ad0, #007ab7);
  background-image: -moz-linear-gradient(#009ad0, #007ab7);
  background-image: -o-linear-gradient(#009ad0, #007ab7);
  background-image: linear-gradient(#009ad0, #007ab7);
}
.bodywebsite .box-info-product .exclusive:before {
  font-family: fontawesome;
  position: absolute;
  top: 0;
  left: 0;
  bottom: 0;
  color: #fff;
  font-size: 25px;
  line-height: 47px;
  text-shadow: 0 1px #015883;
  content: "\f07a";
  z-index: 2;
  width: 51px;
  text-align: center;
  border: 1px solid #06b2e6;
  -webkit-border-radius: 5px 0 0 5px;
  -moz-border-radius: 5px 0 0 5px;
  -ms-border-radius: 5px 0 0 5px;
  -o-border-radius: 5px 0 0 5px;
  border-radius: 5px 0 0 5px;
}
@media (max-width: 991px) {
  .bodywebsite .box-info-product .exclusive:before {
    display: none;
  }
}
.bodywebsite .box-info-product .exclusive:after {
  background: url(https://www.dolistore.com/themes/dolibarr-bootstrap/img/border-1.gif) repeat-y 0 0;
  position: absolute;
  top: 0;
  bottom: 0;
  left: 51px;
  content: "";
  width: 1px;
  z-index: 2;
}
@media (max-width: 991px) {
  .bodywebsite .box-info-product .exclusive:after {
    display: none;
  }
}
.bodywebsite .box-info-product .exclusive span {
  -webkit-border-radius: 5px;
  -moz-border-radius: 5px;
  -ms-border-radius: 5px;
  -o-border-radius: 5px;
  border-radius: 5px;
  font-weight: 700;
  font-size: 20px;
  line-height: 22px;
  border-top: 1px solid #06b2e6;
  border-right: 1px solid #06b2e6;
  border-left: 1px solid #06b2e6;
  border-bottom: 1px solid #06b2e6;
  text-shadow: 0 1px #015883;
  padding: 12px 36px 14px 60px;
  color: #fff;
  display: block!important;
  -webkit-transition: all 0.3s ease;
  -moz-transition: all 0.3s ease;
  -o-transition: all 0.3s ease;
  transition: all 0.3s ease;
}
@media (max-width: 1199px) {
  .bodywebsite .box-info-product .exclusive span {
    padding: 12px 22px 14px 55px;
    font-size: 14px;
  }
}
@media (max-width: 991px) {
  .bodywebsite .box-info-product .exclusive span {
    padding: 8px 12px 10px;
    text-align: left;
  }
}
.bodywebsite .box-info-product .exclusive:hover {
  background-image: -webkit-gradient(linear, 50% 0, 50% 100%, color-stop(0, #007ab7), color-stop(100%, #009ad0));
  background-image: -webkit-linear-gradient(#007ab7, #009ad0);
  background-image: -moz-linear-gradient(#007ab7, #009ad0);
  background-image: -o-linear-gradient(#007ab7, #009ad0);
  background-image: linear-gradient(#007ab7, #009ad0);
  background-position: 0 0;
}
.bodywebsite #center_column.col-sm-9 .col-md-3 .box-info-product {
  background: #f6f6f6;
  border: 1px solid #d2d0d0;
  border-top: 1px solid #b0afaf;
  border-bottom: 1px solid #b0afaf;
}
.bodywebsite #center_column.col-sm-9 .col-md-3 .box-info-product p {
  margin-bottom: 7px;
  padding: 15px 10px 0;
}
.bodywebsite #center_column.col-sm-9 .col-md-3 .box-info-product .exclusive {
  padding: 0;
  border-top: 1px solid #0079b6;
  border-right: 1px solid #006fa8;
  border-left: 1px solid #006fa8;
  border-bottom: 1px solid #012740;
  -webkit-border-radius: 5px;
  -moz-border-radius: 5px;
  -ms-border-radius: 5px;
  -o-border-radius: 5px;
  border-radius: 5px;
  position: relative;
  display: block;
  background-image: -webkit-gradient(linear, 50% 0, 50% 100%, color-stop(0, #009ad0), color-stop(100%, #007ab7));
  background-image: -webkit-linear-gradient(#009ad0, #007ab7);
  background-image: -moz-linear-gradient(#009ad0, #007ab7);
  background-image: -o-linear-gradient(#009ad0, #007ab7);
  background-image: linear-gradient(#009ad0, #007ab7);
}
.bodywebsite #center_column.col-sm-9 .col-md-3 .box-info-product .exclusive:before {
  font-family: fontawesome;
  position: relative;
  top: 0;
  left: 0;
  bottom: 0;
  color: #fff;
  font-size: 25px;
  line-height: 47px;
  text-shadow: 0 1px #015883;
  content: "\f07a";
  z-index: 2;
  width: 51px;
  text-align: center;
  border: none;
  -webkit-border-radius: 0;
  -moz-border-radius: 0;
  -ms-border-radius: 0;
  -o-border-radius: 0;
  border-radius: 0;
}
@media (max-width: 991px) {
  .bodywebsite #center_column.col-sm-9 .col-md-3 .box-info-product .exclusive:before {
    display: none;
  }
}
.bodywebsite #center_column.col-sm-9 .col-md-3 .box-info-product .exclusive:after {
  background: 0 0;
  position: absolute;
  top: 0;
  bottom: 0;
  left: 51px;
  content: "";
  width: 1px;
  z-index: 2;
}
@media (max-width: 991px) {
  .bodywebsite #center_column.col-sm-9 .col-md-3 .box-info-product .exclusive:after {
    display: none;
  }
}
.bodywebsite #center_column.col-sm-9 .col-md-3 .box-info-product .exclusive span {
  font-weight: 500;
  font-size: 18px;
  line-height: 22px;
  border: none;
  border-top: 1px solid #006fa8;
  text-shadow: 0 1px #015883;
  padding: 12px 16px 14px;
  color: #fff;
  display: block!important;
  -webkit-border-radius: 0;
  -moz-border-radius: 0;
  -ms-border-radius: 0;
  -o-border-radius: 0;
  border-radius: 0;
  -webkit-transition: all 0.3s ease;
  -moz-transition: all 0.3s ease;
  -o-transition: all 0.3s ease;
  transition: all 0.3s ease;
}
@media (max-width: 1199px) {
  .bodywebsite #center_column.col-sm-9 .col-md-3 .box-info-product .exclusive span {
    font-size: 16px;
  }
}
@media (max-width: 991px) {
  .bodywebsite #center_column.col-sm-9 .col-md-3 .box-info-product .exclusive span {
    padding: 8px 12px 10px;
    text-align: center;
  }
}
.bodywebsite #center_column.col-sm-9 .col-md-3 .box-info-product .exclusive:hover {
  background-image: -webkit-gradient(linear, 50% 0, 50% 100%, color-stop(0, #007ab7), color-stop(100%, #009ad0));
  background-image: -webkit-linear-gradient(#007ab7, #009ad0);
  background-image: -moz-linear-gradient(#007ab7, #009ad0);
  background-image: -o-linear-gradient(#007ab7, #009ad0);
  background-image: linear-gradient(#007ab7, #009ad0);
  background-position: 0 0;
}
.bodywebsite #quantity_wanted_p input {
  width: 58px;
  height: 27px;
  padding: 0 6px;
  float: left;
  border: 1px solid #d6d4d4;
  line-height: 27px;
}
.bodywebsite #quantity_wanted_p .btn {
  float: left;
  margin-left: 3px;
}
.bodywebsite #quantity_wanted_p label {
  display: block;
  margin-bottom: 7px;
}
.bodywebsite #availability_date_label {
  display: inline-block;
  width: 125px;
  font-weight: 700;
  font-size: 12px;
  text-align: right;
}
.bodywebsite .content_prices {
  padding: 13px 19px;
}
.bodywebsite .our_price_display {
  font-weight: 600;
  font-size: 29px;
  line-height: 32px;
  font-family: open sans, sans-serif;
  color: #333;
}
@media (max-width: 991px) {
  .bodywebsite .our_price_display {
    font-size: 26px;
    line-height: 28px;
  }
}
.bodywebsite #old_price {
  padding-bottom: 15px;
  font-size: 17px;
  text-decoration: line-through;
  display: inline-block;
  font-family: open sans, sans-serif;
  line-height: 23px;
}
.bodywebsite #reduction_amount,
.bodywebsite #reduction_percent {
  display: inline-block;
  margin-right: 10px;
  padding: 1px 2px;
  font-weight: 600;
  font-family: open sans, sans-serif;
  font-size: 21px;
  line-height: 23px;
  color: #fff;
  background: #f13340;
  border: 1px solid #d02a2c;
}
.bodywebsite #reduction_amount span,
.bodywebsite #reduction_percent span {
  display: block;
}
.bodywebsite .buttons_bottom_block {
  clear: both;
  padding: 13px 19px 0;
}
.bodywebsite #categories_block_left .block_content > ul {
  border-top: 1px solid #d6d4d4;
}
.bodywebsite #categories_block_left li {
  position: relative;
}
.bodywebsite #categories_block_left li a {
  font-weight: 700;
  color: #333;
  display: block;
  font-size: 13px;
  line-height: 30px;
  padding: 0 30px 0 19px;
  border-bottom: 1px solid #d6d4d4;
}
.bodywebsite #categories_block_left li a.selected,
.bodywebsite #categories_block_left li a:hover {
  background: #f6f6f6;
}
.bodywebsite #categories_block_left li li a {
  font-weight: 400;
  color: #777;
}
.bodywebsite #categories_block_left li li a:before {
  content: "\f105";
  font-family: fontawesome;
  line-height: 29px;
  padding-right: 8px;
}
.bodywebsite #footer #newsletter_block_left {
  overflow: hidden;
  width: 50%;
  float: left;
  padding: 13px 15px 7px;
  margin-bottom: 0;
}
@media (max-width: 767px) {
  .bodywebsite #footer #newsletter_block_left {
    width: 100%;
  }
}
.bodywebsite #footer #newsletter_block_left h4 {
  background: 0 0;
  float: left;
  padding: 7px 16px 5px 0;
  text-transform: none;
  font-size: 21px;
  line-height: 25px;
  border: none;
}
.bodywebsite #footer #newsletter_block_left .form-group {
  margin-bottom: 0;
}
.bodywebsite #footer #newsletter_block_left .form-group .form-control {
  height: 45px;
  line-height: 30px;
  max-width: 267px;
  background: #3c3c3c;
  border-color: #515151;
  color: #fff;
  padding: 5px 43px 5px 12px;
  display: inline-block;
  float: left;
}
.bodywebsite #footer #newsletter_block_left .form-group .form-control:focus {
  -webkit-box-shadow: #000 0 0 0;
  -moz-box-shadow: #000 0 0 0;
  box-shadow: #000 0 0 0;
}
.bodywebsite #footer #newsletter_block_left .form-group .button-small {
  margin-left: -43px;
  border: none;
  background: 0 0;
  text-align: center;
  color: #908f8f;
  padding: 8px;
}
.bodywebsite #footer #newsletter_block_left .form-group .button-small:before {
  content: "\f138";
  font-family: fontawesome;
  font-size: 28px;
  line-height: 28px;
}
.bodywebsite #footer #newsletter_block_left .form-group .button-small:hover {
  color: #fff !important;
}
.bodywebsite #footer #newsletter_block_left .newsletter-input {
  max-width: 300px !important;
}
.bodywebsite #search_block_top {
  padding-top: 30px;
}
.bodywebsite #search_block_top #searchbox {
  float: left;
  width: 100%;
}
.bodywebsite #search_block_top .btn.button-search {
  background: #333;
  display: block;
  position: absolute;
  top: 0;
  right: 0;
  border: none;
  color: #fff;
  width: 50px;
  text-align: center;
  padding: 10px 0 11px;
}
.bodywebsite #search_block_top .btn.button-search:before {
  content: "\f002";
  display: block;
  font-family: fontawesome;
  font-size: 17px;
  width: 100%;
  text-align: center;
}
.bodywebsite #search_block_top .btn.button-search:hover {
  color: #6f6f6f;
}
.bodywebsite #search_block_top #search_query_top {
  display: inline;
  padding: 0 13px;
  height: 45px;
  line-height: 45px;
  background: #fbfbfb;
  margin-right: 1px;
}
.bodywebsite form#searchbox {
  position: relative;
}
.bodywebsite .tags_block .block_content a {
  display: inline-block;
  font-size: 13px;
  line-height: 16px;
  font-weight: 700;
  padding: 4px 9px 5px;
  border: 1px solid #d6d4d4;
  float: left;
  margin: 0 3px 3px 0;
}
.bodywebsite .tags_block .block_content a:hover {
  color: #333;
  background: #f6f6f6;
}
.bodywebsite #viewed-products_block_left li.last_item {
  padding-bottom: 0;
  margin-bottom: 0;
  border-bottom: none;
}
.bodywebsite body {
  background: #282828;
}
.bodywebsite #header #languages-block-top {
  border-color: #515151;
}
.bodywebsite #header #languages-block-top div.current:hover {
  background: #2b2b2b;
  color: #fff;
}
.bodywebsite #header #search_block_top .btn.button-search {
  background: #eea200;
  text-shadow: 0 1px #b57b00;
}
.bodywebsite #header #search_block_top .btn.button-search:hover {
  color: #fff;
  background: #333;
  text-shadow: 0 1px #333;
}
.bodywebsite #header #search_block_top #search_query_top {
  border-color: #e2dec8;
  background: #f8f8f8a1;
  color: #686666;
}
.bodywebsite .sale-label:after,
.bodywebsite .sale-label:before {
  border-color: #eea200 transparent transparent;
}
.bodywebsite .price-percent-reduction {
  background: #eea200;
  border-color: #eea200;
}
.bodywebsite .price {
  color: #eea200;
}
.bodywebsite .old-price {
  color: #b1b0b0;
}
.bodywebsite .footer-container {
  background: #3f3f3f;
}
.bodywebsite #footer #newsletter_block_left h4:after,
.bodywebsite #footer #newsletter_block_left .form-group .button-small span,
.bodywebsite #search_block_top .btn.button-search span {
  display: none;
}
.bodywebsite #footer #newsletter_block_left .block_content,
.bodywebsite .tags_block .block_content {
  overflow: hidden;
}
.bodywebsite #header #languages-block-top div.current,
.bodywebsite #header #languages-block-top div.current:after {
  color: #fff;
}
.bodywebsite #header #languages-block-top ul li.selected,
.bodywebsite #header #languages-block-top ul li:hover a,
.bodywebsite .sale-label {
  background: #eea200;
}
@media (min-width: 768px) {
  .bodywebsite .footer-container {
    /*background: url(https://www.dolistore.com/modules/themeconfigurator/img/footer-bg.png) repeat-x;*/
    background-color: #3f3f3f !important;
  }
}
.bodywebsite #footer #newsletter_block_left .form-group .form-control {
  background: #3c3c3c;
}
.bodywebsite #footer #newsletter_block_left .form-group .button-small {
  color: #fff;
}
.bodywebsite #footer #newsletter_block_left .form-group .button-small:hover {
  color: #eea200;
}
.bodywebsite h1,
.bodywebsite h2,
.bodywebsite h3,
.bodywebsite h4,
.bodywebsite h5 {
  font-family: open sans, sans-serif !important;
}
.bodywebsite .header_user_info {
  float: right;
  border-left: 1px solid #515151;
  border-right: 1px solid #515151;
}
.bodywebsite .header_user_info a {
  color: #fff;
  font-weight: 700;
  display: block;
  padding: 8px 9px 11px 8px;
  cursor: pointer;
  line-height: 18px;
}
@media (max-width: 479px) {
  .bodywebsite .header_user_info a {
    font-size: 11px;
  }
}
.bodywebsite .header_user_info a:hover {
  background: #2b2b2b;
}
.bodywebsite #languages-block-top {
  float: right;
  border-left: 1px solid #515151;
  position: relative;
}
@media (max-width: 479px) {
  .bodywebsite #languages-block-top {
    width: 25%;
  }
}
.bodywebsite #languages-block-top div.current {
  font-weight: 700;
  padding: 8px 10px 10px;
  line-height: 18px;
  color: #fff;
  text-shadow: 1px 1px #0003;
  cursor: pointer;
}
@media (max-width: 479px) {
  .bodywebsite #languages-block-top div.current {
    text-align: center;
    padding: 9px 5px 10px;
    font-size: 11px;
  }
}
.bodywebsite #languages-block-top div.current:after {
  content: "\f0d7";
  font-family: fontawesome;
  font-size: 18px;
  line-height: 18px;
  color: #686666;
  vertical-align: -2px;
  padding-left: 12px;
}
@media (max-width: 479px) {
  .bodywebsite #languages-block-top div.current:after {
    padding-left: 2px;
    font-size: 13px;
    line-height: 13px;
    vertical-align: 0;
  }
}
.bodywebsite #languages-block-top ul {
  display: none;
  position: absolute;
  top: 37px;
  left: 0;
  width: 157px;
  background: #333;
  z-index: 2;
}
.bodywebsite #languages-block-top ul li {
  color: #fff;
  line-height: 35px;
  font-size: 13px;
}
.bodywebsite #languages-block-top ul li a,
.bodywebsite #languages-block-top ul li > span {
  padding: 0 10px 0 12px;
  display: block;
  color: #fff;
}
.bodywebsite #languages-block-top ul li.selected,
.bodywebsite #languages-block-top ul li:hover a {
  background: #484848;
}
.bodywebsite #header .shopping_cart {
  position: relative;
  float: right;
  padding-top: 30px;
}
.bodywebsite #header .shopping_cart > a:first-child:after {
  content: "\f0d7";
  font-family: fontawesome;
  display: inline-block;
  float: right;
  font-size: 18px;
  color: #686666;
  padding: 6px 0 0;
}
.bodywebsite #header .shopping_cart > a:first-child:hover:after {
  content: "\f0d8";
  padding: 4px 0 2px;
}
.bodywebsite .shopping_cart {
  width: 270px;
}
@media (max-width: 480px) {
  .bodywebsite .shopping_cart {
    padding-top: 20px;
  }
}
@media (max-width: 1200px) {
  .bodywebsite .shopping_cart {
    margin: 0 auto;
    float: none;
    width: 100%;
  }
}
.bodywebsite .shopping_cart > a:first-child {
  padding: 7px 10px 14px 16px;
  background: #333;
  display: block;
  font-weight: 700;
  color: #777;
  text-shadow: 1px 1px #0003;
  overflow: hidden;
}
@media (min-width: 768px) and (max-width: 991px) {
  .bodywebsite .shopping_cart > a:first-child span.ajax_cart_product_txt,
  .bodywebsite .shopping_cart > a:first-child span.ajax_cart_product_txt_s {
    display: none !important;
  }
}
.bodywebsite .shopping_cart > a:first-child b {
  color: #fff;
  font: 600 18px/22px "Open Sans", sans-serif;
  padding-right: 5px;
}
.bodywebsite .shopping_cart > a:first-child:before {
  content: "\f07a";
  font-family: fontawesome;
  display: inline-block;
  font-size: 23px;
  line-height: 23px;
  color: #fff;
  padding-right: 15px;
}
.bodywebsite .shopping_cart .ajax_cart_total {
  display: none !important;
}
.bodywebsite .cart_block .cart_block_no_products {
  margin: 0;
  padding: 10px 20px;
}
.bodywebsite .cart_block .cart-prices {
  border-top: 1px solid #d6d4d4;
  font-weight: 700;
  padding: 10px 20px 22px;
}
.bodywebsite .cart_block .cart-prices .cart-prices-line {
  overflow: hidden;
  border-bottom: 1px solid #515151;
  padding: 7px 0;
}
.bodywebsite .cart_block .cart-prices .cart-prices-line.last-line {
  border: none;
}
.bodywebsite .cart_block .cart-buttons {
  overflow: hidden;
  padding: 20px 20px 10px;
  margin: 0;
  background: #f6f6f6;
}
.bodywebsite .cart_block .cart-buttons a {
  width: 100%;
  float: left;
  text-align: center;
  margin-bottom: 10px;
  margin-right: 10px;
}
.bodywebsite .cart_block .cart-buttons a#button_order_cart {
  margin-right: 0;
  border: none;
}
.bodywebsite .cart_block .cart-buttons a#button_order_cart span {
  padding: 7px 0;
  font-size: 1.1em;
  border: solid 1px #63c473;
  background: #43b155;
}
.bodywebsite .cart_block .cart-buttons a#button_order_cart:hover span {
  border: solid 1px #358c43;
  background: #2e7a3a;
  color: #fff;
}
.bodywebsite #header .cart_block {
  position: absolute;
  top: 95px;
  right: 0;
  z-index: 100;
  display: none;
  height: auto;
  background: #484848;
  color: #fff;
  width: 270px;
}
@media (max-width: 480px) {
  .bodywebsite #header .cart_block {
    width: 100%;
  }
}
@media (max-width: 1200px) {
  .bodywebsite #header .cart_block {
    width: 100%;
  }
}
.bodywebsite #header .cart_block a:hover {
  color: #9c9b9b;
}
.bodywebsite #header .cart_block .cart-prices {
  border: none;
  background: url(https://www.dolistore.com/themes/dolibarr-bootstrap/img/cart-shadow.png) repeat-x #3d3d3d;
}
.bodywebsite #header .cart_block .cart-buttons {
  background: url(https://www.dolistore.com/themes/dolibarr-bootstrap/img/cart-shadow.png) repeat-x #333;
}
.bodywebsite #header .block_content {
  margin-bottom: 0;
}
.bodywebsite .cart_block .cart_block_shipping_cost,
.bodywebsite .cart_block .cart_block_tax_cost,
.bodywebsite .cart_block .cart_block_total {
  float: right;
}
.bodywebsite .layer_cart_overlay {
  background-color: #000;
  display: none;
  height: 100%;
  left: 0;
  position: fixed;
  top: 0;
  width: 100%;
  z-index: 98;
  opacity: 0.2;
}
.bodywebsite #layer_cart {
  background-color: #fff;
  position: absolute;
  display: none;
  z-index: 99;
  width: 84%;
  margin-right: 8%;
  margin-left: 8%;
  -webkit-border-radius: 4px;
  -moz-border-radius: 4px;
  -ms-border-radius: 4px;
  -o-border-radius: 4px;
  border-radius: 4px;
}
.bodywebsite #layer_cart .layer_cart_product {
  padding: 30px;
  overflow: hidden;
  position: static;
}
.bodywebsite #layer_cart .layer_cart_product h2 {
  font: 400 23px/29px Arial, Helvetica, sans-serif;
  color: #46a74e;
  margin-bottom: 22px;
  padding-right: 100px;
}
.bodywebsite #header .cart_block a,
.bodywebsite #header .cart_block .price {
  color: #fff;
}
@media (max-width: 767px) {
  .bodywebsite #layer_cart .layer_cart_product h2 {
    font-size: 18px;
    padding-right: 0;
    line-height: normal;
  }
}
.bodywebsite #layer_cart .layer_cart_product h2 i {
  font-size: 30px;
  line-height: 30px;
  float: left;
  padding-right: 8px;
}
@media (max-width: 767px) {
  .bodywebsite #layer_cart .layer_cart_product h2 i {
    font-size: 22px;
    line-height: 22px;
  }
}
.bodywebsite #layer_cart .layer_cart_product .product-image-container {
  max-width: 178px;
  border: 1px solid #d6d4d4;
  padding: 5px;
  float: left;
  margin-right: 30px;
}
@media (max-width: 480px) {
  .bodywebsite #layer_cart .layer_cart_product .product-image-container {
    float: none;
    margin-right: 0;
    margin-bottom: 10px;
  }
}
.bodywebsite #layer_cart .layer_cart_product .layer_cart_product_info {
  padding: 38px 0 0;
}
.bodywebsite #layer_cart .layer_cart_product .layer_cart_product_info #layer_cart_product_title {
  display: block;
  padding-bottom: 8px;
}
.bodywebsite #layer_cart .layer_cart_product .layer_cart_product_info > div {
  padding-bottom: 7px;
}
.bodywebsite #layer_cart .layer_cart_product .layer_cart_product_info > div strong {
  padding-right: 3px;
}
.bodywebsite #layer_cart .layer_cart_cart {
  background: #fafafa;
  border-left: 1px solid #d6d4d4;
  padding: 21px 30px 170px;
  -webkit-border-radius: 0 4px 4px 0;
  -moz-border-radius: 0 4px 4px 0;
  -ms-border-radius: 0 4px 4px 0;
  -o-border-radius: 0 4px 4px 0;
  border-radius: 0 4px 4px 0;
  position: relative;
}
@media (min-width: 1200px) {
  .bodywebsite #layer_cart .layer_cart_cart {
    min-height: 318px;
  }
}
@media (min-width: 992px) and (max-width: 1199px) {
  .bodywebsite #layer_cart .layer_cart_cart {
    min-height: 360px;
  }
}
@media (max-width: 991px) {
  .bodywebsite #layer_cart .layer_cart_cart {
    border-left: none;
    border-top: 1px solid #d6d4d4;
  }
}
.bodywebsite #layer_cart .layer_cart_cart h2 {
  font: 400 23px/29px Arial, Helvetica, sans-serif;
  color: #333;
  border-bottom: 1px solid #d6d4d4;
  padding-bottom: 13px;
  margin-bottom: 17px;
}
@media (max-width: 767px) {
  .bodywebsite #layer_cart .layer_cart_cart h2 {
    font-size: 18px;
  }
}
.bodywebsite #layer_cart .layer_cart_cart .layer_cart_row {
  padding: 0 0 7px;
}
.bodywebsite #layer_cart .layer_cart_cart .button-container {
  position: absolute;
  bottom: 0;
  left: 0;
  width: 100%;
  padding: 0 30px 20px;
}
.bodywebsite #layer_cart .layer_cart_cart .button-container .btn {
  margin-bottom: 10px;
}
.bodywebsite #layer_cart .layer_cart_cart .button-container span.exclusive-medium {
  margin-right: 5px;
}
.bodywebsite #layer_cart .layer_cart_cart .button-container span.exclusive-medium i {
  padding-right: 5px;
  color: #777;
}
.bodywebsite #layer_cart .cross {
  position: absolute;
  right: 7px;
  top: 8px;
  width: 25px;
  height: 25px;
  cursor: pointer;
  color: #333;
  z-index: 2;
}
.bodywebsite #layer_cart .cross:before {
  content: "\f057";
  display: block;
  font-family: fontawesome;
  font-size: 25px;
  line-height: 25px;
}
.bodywebsite #layer_cart .cross:hover {
  color: #515151;
}
.bodywebsite #layer_cart .continue {
  cursor: pointer;
}
.bodywebsite .info-table-box {
  padding: 14px 20px 17px;
  margin: 0 0 20px;
  border: 1px solid #d6d4d4;
  background: #fbfbfb;
}
.bodywebsite .info-list-box li b::before {
  content: "\f105";
  font-family: fontawesome;
  padding-right: 8px;
}
.bodywebsite .content_scene_cat {
  border-top: 5px solid #333333;
  color: #d7d7d7;
  line-height: 19px;
  margin: 0 0 26px 0;
}
.bodywebsite .content_scene_cat .content_scene_cat_bg {
  padding: 18px 10px 10px 42px;
  background-color: #464646 !important;
}
@media (max-width: 1199px) {
  .bodywebsite .content_scene_cat .content_scene_cat_bg {
    padding: 10px 10px 10px 15px;
  }
}
.bodywebsite .content_scene_cat span.category-name {
  font: 600 42px/51px "Open Sans", sans-serif;
  color: white;
  margin-bottom: 12px;
}
@media (max-width: 1199px) {
  .bodywebsite .content_scene_cat span.category-name {
    font-size: 25px;
    line-height: 30px;
  }
}
.bodywebsite .content_scene_cat p {
  margin-bottom: 0;
}
.bodywebsite .content_scene_cat a {
  color: white;
}
.bodywebsite .content_scene_cat a:hover {
  text-decoration: underline;
}
.bodywebsite .content_scene_cat .content_scene {
  color: #777777;
}
.bodywebsite .content_scene_cat .content_scene .cat_desc {
  padding-top: 20px;
}
.bodywebsite .content_scene_cat .content_scene .cat_desc a {
  color: #777777;
}
.bodywebsite .content_scene_cat .content_scene .cat_desc a:hover {
  color: #515151;
}
.bodywebsite .page-heading {
  font: 600 18px/22px "Open Sans", sans-serif;
  color: #555454;
  text-transform: uppercase;
  padding: 0 0 17px 0;
  margin-bottom: 30px;
  border-bottom: 1px solid #d6d4d4;
  overflow: hidden;
}
.bodywebsite .page-heading span.heading-counter {
  font: bold 13px/22px Arial, Helvetica, sans-serif;
  float: right;
  color: #333333;
  text-transform: none;
  margin-bottom: 10px;
}
@media (max-width: 480px) {
  .bodywebsite .page-heading span.heading-counter {
    float: none;
    display: block;
    padding-top: 5px;
  }
}
.bodywebsite .page-heading span.lighter {
  color: #9c9c9c;
}
.bodywebsite .page-heading.bottom-indent {
  margin-bottom: 16px;
}
.bodywebsite .page-heading.product-listing {
  border-bottom: none;
  margin-bottom: 0;
  padding: 0px;
}
.bodywebsite .content_sortPagiBar .sortPagiBar {
  border-bottom: 1px solid #d6d4d4;
  clear: both;
}
.bodywebsite .content_sortPagiBar .sortPagiBar #productsSortForm {
  float: left;
  margin-right: 20px;
  margin-bottom: 10px;
}
.bodywebsite .content_sortPagiBar .sortPagiBar #productsSortForm select {
  max-width: 192px;
  float: left;
}
@media (max-width: 991px) {
  .bodywebsite .content_sortPagiBar .sortPagiBar #productsSortForm select {
    max-width: 160px;
  }
}
.bodywebsite .content_sortPagiBar .sortPagiBar #productsSortForm .selector {
  float: left;
}
.bodywebsite .content_sortPagiBar .sortPagiBar .nbrItemPage {
  float: left;
}
.bodywebsite .content_sortPagiBar .sortPagiBar .nbrItemPage select {
  max-width: 59px;
  float: left;
}
.bodywebsite .content_sortPagiBar .sortPagiBar .nbrItemPage .clearfix > span {
  padding: 3px 0 0 12px;
  display: inline-block;
  float: left;
}
.bodywebsite .content_sortPagiBar .sortPagiBar .nbrItemPage #uniform-nb_item {
  float: left;
}
.bodywebsite .content_sortPagiBar .sortPagiBar label,
.bodywebsite .content_sortPagiBar .sortPagiBar select {
  float: left;
}
.bodywebsite .content_sortPagiBar .sortPagiBar label {
  padding: 3px 6px 0 0;
}
.bodywebsite .content_sortPagiBar .sortPagiBar.instant_search #productsSortForm {
  display: none;
}
.bodywebsite .content_sortPagiBar .display,
.bodywebsite .content_sortPagiBar .display_m {
  float: right;
  margin-top: -4px;
}
.bodywebsite .content_sortPagiBar .display li,
.bodywebsite .content_sortPagiBar .display_m li {
  float: left;
  padding-left: 12px;
  text-align: center;
}
.bodywebsite .content_sortPagiBar .display li a,
.bodywebsite .content_sortPagiBar .display_m li a {
  color: gray;
  font-size: 11px;
  line-height: 14px;
  cursor: pointer;
}
.bodywebsite .content_sortPagiBar .display li a i,
.bodywebsite .content_sortPagiBar .display_m li a i {
  display: block;
  font-size: 24px;
  height: 24px;
  line-height: 24px;
  margin-bottom: -3px;
  color: #e1e0e0;
}
.bodywebsite .content_sortPagiBar .display li a:hover i,
.bodywebsite .content_sortPagiBar .display_m li a:hover i {
  color: gray;
}
.bodywebsite .content_sortPagiBar .display li.selected a,
.bodywebsite .content_sortPagiBar .display_m li.selected a {
  cursor: default;
}
.bodywebsite .content_sortPagiBar .display li.selected i,
.bodywebsite .content_sortPagiBar .display_m li.selected i {
  color: #333333;
}
.bodywebsite .content_sortPagiBar .display li.display-title,
.bodywebsite .content_sortPagiBar .display_m li.display-title {
  font-weight: bold;
  color: #333333;
  padding: 7px 6px 0 0;
}
.bodywebsite .top-pagination-content,
.bodywebsite .bottom-pagination-content {
  text-align: center;
  padding: 12px 0 12px 0;
  position: relative;
}
.bodywebsite .top-pagination-content div.pagination,
.bodywebsite .bottom-pagination-content div.pagination {
  margin: 0;
  float: right;
  width: 530px;
  text-align: center;
}
@media (min-width: 992px) and (max-width: 1199px) {
  .bodywebsite .top-pagination-content div.pagination,
  .bodywebsite .bottom-pagination-content div.pagination {
    width: 380px;
  }
}
@media (max-width: 991px) {
  .bodywebsite .top-pagination-content div.pagination,
  .bodywebsite .bottom-pagination-content div.pagination {
    float: left;
    width: auto;
  }
}
.bodywebsite .top-pagination-content div.pagination .showall,
.bodywebsite .bottom-pagination-content div.pagination .showall {
  float: right;
  margin: 8px 53px 8px 14px;
}
@media (min-width: 992px) and (max-width: 1199px) {
  .bodywebsite .top-pagination-content div.pagination .showall,
  .bodywebsite .bottom-pagination-content div.pagination .showall {
    margin-right: 11px;
  }
}
@media (max-width: 991px) {
  .bodywebsite .top-pagination-content div.pagination .showall,
  .bodywebsite .bottom-pagination-content div.pagination .showall {
    margin-right: 0;
  }
}
.bodywebsite .top-pagination-content div.pagination .showall .btn span,
.bodywebsite .bottom-pagination-content div.pagination .showall .btn span {
  font-size: 13px;
  padding: 3px 5px 4px 5px;
  line-height: normal;
}
.bodywebsite .top-pagination-content ul.pagination,
.bodywebsite .bottom-pagination-content ul.pagination {
  margin: 8px 0 8px 0;
}
@media (max-width: 991px) {
  .bodywebsite .top-pagination-content ul.pagination,
  .bodywebsite .bottom-pagination-content ul.pagination {
    float: left;
  }
}
.bodywebsite .top-pagination-content ul.pagination li,
.bodywebsite .bottom-pagination-content ul.pagination li {
  display: inline-block;
  float: left;
}
.bodywebsite .top-pagination-content ul.pagination li > a,
.bodywebsite .top-pagination-content ul.pagination li > span,
.bodywebsite .bottom-pagination-content ul.pagination li > a,
.bodywebsite .bottom-pagination-content ul.pagination li > span {
  margin: 0 1px 0 0;
  padding: 0;
  font-weight: bold;
  border: 1px solid;
  border-color: #dfdede #d2d0d0 #b0afaf #d2d0d0;
  display: block;
}
.bodywebsite .top-pagination-content ul.pagination li > a span,
.bodywebsite .top-pagination-content ul.pagination li > span span,
.bodywebsite .bottom-pagination-content ul.pagination li > a span,
.bodywebsite .bottom-pagination-content ul.pagination li > span span {
  border: 1px solid white;
  padding: 2px 8px;
  display: block;
  background: url(https://www.dolistore.com/themes/dolibarr-bootstrap/img/pagination-li.gif) 0 0 repeat-x #fbfbfb;
}
.bodywebsite .top-pagination-content ul.pagination li > a:hover span,
.bodywebsite .bottom-pagination-content ul.pagination li > a:hover span {
  background: #f6f6f6;
}
.bodywebsite .top-pagination-content ul.pagination li.pagination_previous,
.bodywebsite .top-pagination-content ul.pagination li.pagination_next,
.bodywebsite .bottom-pagination-content ul.pagination li.pagination_previous,
.bodywebsite .bottom-pagination-content ul.pagination li.pagination_next {
  color: #777676;
  font-weight: bold;
}
.bodywebsite .top-pagination-content ul.pagination li.pagination_previous > a,
.bodywebsite .top-pagination-content ul.pagination li.pagination_previous > span,
.bodywebsite .top-pagination-content ul.pagination li.pagination_next > a,
.bodywebsite .top-pagination-content ul.pagination li.pagination_next > span,
.bodywebsite .bottom-pagination-content ul.pagination li.pagination_previous > a,
.bodywebsite .bottom-pagination-content ul.pagination li.pagination_previous > span,
.bodywebsite .bottom-pagination-content ul.pagination li.pagination_next > a,
.bodywebsite .bottom-pagination-content ul.pagination li.pagination_next > span {
  border: none;
  background: none;
  display: block;
  padding: 4px 0;
}
@media (max-width: 767px) {
  .bodywebsite .top-pagination-content ul.pagination li.pagination_previous > a b,
  .bodywebsite .top-pagination-content ul.pagination li.pagination_previous > span b,
  .bodywebsite .top-pagination-content ul.pagination li.pagination_next > a b,
  .bodywebsite .top-pagination-content ul.pagination li.pagination_next > span b,
  .bodywebsite .bottom-pagination-content ul.pagination li.pagination_previous > a b,
  .bodywebsite .bottom-pagination-content ul.pagination li.pagination_previous > span b,
  .bodywebsite .bottom-pagination-content ul.pagination li.pagination_next > a b,
  .bodywebsite .bottom-pagination-content ul.pagination li.pagination_next > span b {
    display: none;
  }
}
.bodywebsite .top-pagination-content ul.pagination li.pagination_previous > a span,
.bodywebsite .top-pagination-content ul.pagination li.pagination_previous > span span,
.bodywebsite .top-pagination-content ul.pagination li.pagination_next > a span,
.bodywebsite .top-pagination-content ul.pagination li.pagination_next > span span,
.bodywebsite .bottom-pagination-content ul.pagination li.pagination_previous > a span,
.bodywebsite .bottom-pagination-content ul.pagination li.pagination_previous > span span,
.bodywebsite .bottom-pagination-content ul.pagination li.pagination_next > a span,
.bodywebsite .bottom-pagination-content ul.pagination li.pagination_next > span span {
  border: none;
  padding: 0;
  background: none;
}
.bodywebsite .top-pagination-content ul.pagination li.pagination_previous > a span b,
.bodywebsite .top-pagination-content ul.pagination li.pagination_previous > span span b,
.bodywebsite .top-pagination-content ul.pagination li.pagination_next > a span b,
.bodywebsite .top-pagination-content ul.pagination li.pagination_next > span span b,
.bodywebsite .bottom-pagination-content ul.pagination li.pagination_previous > a span b,
.bodywebsite .bottom-pagination-content ul.pagination li.pagination_previous > span span b,
.bodywebsite .bottom-pagination-content ul.pagination li.pagination_next > a span b,
.bodywebsite .bottom-pagination-content ul.pagination li.pagination_next > span span b {
  font-weight: bold;
}
.bodywebsite .top-pagination-content ul.pagination li.pagination_previous,
.bodywebsite .bottom-pagination-content ul.pagination li.pagination_previous {
  margin-right: 10px;
}
.bodywebsite .top-pagination-content ul.pagination li.pagination_next,
.bodywebsite .bottom-pagination-content ul.pagination li.pagination_next {
  margin-left: 10px;
}
.bodywebsite .top-pagination-content ul.pagination li.active > span,
.bodywebsite .bottom-pagination-content ul.pagination li.active > span {
  color: #333333;
  border-color: #dfdede #d2d0d0 #b0afaf #d2d0d0;
}
.bodywebsite .top-pagination-content ul.pagination li.active > span span,
.bodywebsite .bottom-pagination-content ul.pagination li.active > span span {
  background: #f6f6f6;
}
.bodywebsite .top-pagination-content .compare-form,
.bodywebsite .bottom-pagination-content .compare-form {
  float: right;
}
@media (max-width: 479px) {
  .bodywebsite .top-pagination-content .compare-form,
  .bodywebsite .bottom-pagination-content .compare-form {
    float: left;
    width: 100%;
    text-align: left;
    padding-bottom: 10px;
    clear: both;
  }
}
.bodywebsite .top-pagination-content .product-count,
.bodywebsite .bottom-pagination-content .product-count {
  padding: 11px 0 0 0;
  float: left;
}
@media (max-width: 991px) {
  .bodywebsite .top-pagination-content .product-count,
  .bodywebsite .bottom-pagination-content .product-count {
    clear: left;
  }
}
.bodywebsite .icon-th-large:before {
  content: "\f009";
}
.bodywebsite .icon-th-list::before {
  content: "\f00b";
}
.bodywebsite .col-xs-1,
.bodywebsite .col-xs-2,
.bodywebsite .col-xs-3,
.bodywebsite .col-xs-4,
.bodywebsite .col-xs-5,
.bodywebsite .col-xs-6,
.bodywebsite .col-xs-7,
.bodywebsite .col-xs-8,
.bodywebsite .col-xs-9,
.bodywebsite .col-xs-10,
.bodywebsite .col-xs-11,
.bodywebsite .col-xs-12,
.bodywebsite .col-sm-1,
.bodywebsite .col-sm-2,
.bodywebsite .col-sm-3,
.bodywebsite .col-sm-4,
.bodywebsite header .row #header_logo,
.bodywebsite .col-sm-5,
.bodywebsite .col-sm-6,
.bodywebsite .col-sm-7,
.bodywebsite .col-sm-8,
.bodywebsite .col-sm-9,
.bodywebsite .col-sm-10,
.bodywebsite .col-sm-11,
.bodywebsite .col-sm-12,
.bodywebsite .col-md-1,
.bodywebsite .col-md-2,
.bodywebsite .col-md-3,
.bodywebsite .col-md-4,
.bodywebsite .col-md-5,
.bodywebsite .col-md-6,
.bodywebsite .col-md-7,
.bodywebsite .col-md-8,
.bodywebsite .col-md-9,
.bodywebsite .col-md-10,
.bodywebsite .col-md-11,
.bodywebsite .col-md-12,
.bodywebsite .col-lg-1,
.bodywebsite .col-lg-2,
.bodywebsite .col-lg-3,
.bodywebsite .col-lg-4,
.bodywebsite .col-lg-5,
.bodywebsite .col-lg-6,
.bodywebsite .col-lg-7,
.bodywebsite .col-lg-8,
.bodywebsite .col-lg-9,
.bodywebsite .col-lg-10,
.bodywebsite .col-lg-11,
.bodywebsite .col-lg-12 {
  position: relative;
  min-height: 1px;
  padding-left: 15px;
  padding-right: 15px;
}
.bodywebsite .col-xs-1,
.bodywebsite .col-xs-2,
.bodywebsite .col-xs-3,
.bodywebsite .col-xs-4,
.bodywebsite .col-xs-5,
.bodywebsite .col-xs-6,
.bodywebsite .col-xs-7,
.bodywebsite .col-xs-8,
.bodywebsite .col-xs-9,
.bodywebsite .col-xs-10,
.bodywebsite .col-xs-11 {
  float: left;
}
.bodywebsite .col-xs-1 {
  width: 8.33333%;
}
.bodywebsite .col-xs-2 {
  width: 16.66667%;
}
.bodywebsite .col-xs-3 {
  width: 25%;
}
.bodywebsite .col-xs-4 {
  width: 33.33333%;
}
.bodywebsite .col-xs-5 {
  width: 41.66667%;
}
.bodywebsite .col-xs-6 {
  width: 50%;
}
.bodywebsite .col-xs-7 {
  width: 58.33333%;
}
.bodywebsite .col-xs-8 {
  width: 66.66667%;
}
.bodywebsite .col-xs-9 {
  width: 75%;
}
.bodywebsite .col-xs-10 {
  width: 83.33333%;
}
.bodywebsite .col-xs-11 {
  width: 91.66667%;
}
.bodywebsite .col-xs-12 {
  width: 100%;
}
@media (min-width: 768px) {
  .bodywebsite .container {
    max-width: 750px;
  }
  .bodywebsite .col-sm-1,
  .bodywebsite .col-sm-2,
  .bodywebsite .col-sm-3,
  .bodywebsite .col-sm-4,
  .bodywebsite header .row #header_logo,
  .bodywebsite .col-sm-5,
  .bodywebsite .col-sm-6,
  .bodywebsite .col-sm-7,
  .bodywebsite .col-sm-8,
  .bodywebsite .col-sm-9,
  .bodywebsite .col-sm-10,
  .bodywebsite .col-sm-11 {
    float: left;
  }
  .bodywebsite .col-sm-1 {
    width: 8.33333%;
  }
  .bodywebsite .col-sm-2 {
    width: 33%;
  }
  .bodywebsite .col-sm-3 {
    width: 25%;
  }
  .bodywebsite .col-sm-4,
  .bodywebsite header .row #header_logo {
    width: 25%;
  }
  .bodywebsite .col-sm-5 {
    width: 41.66667%;
  }
  .bodywebsite .col-sm-6 {
    width: 50%;
  }
  .bodywebsite .col-sm-7 {
    width: 58.33333%;
  }
  .bodywebsite .col-sm-8 {
    width: 66.66667%;
  }
  .bodywebsite .col-sm-9 {
    width: 75%;
  }
  .bodywebsite .col-sm-10 {
    width: 83.33333%;
  }
  .bodywebsite .col-sm-11 {
    width: 91.66667%;
  }
  .bodywebsite .col-sm-12 {
    width: 100%;
  }
  .bodywebsite .col-sm-push-1 {
    left: 8.33333%;
  }
  .bodywebsite .col-sm-push-2 {
    left: 16.66667%;
  }
  .bodywebsite .col-sm-push-3 {
    left: 25%;
  }
  .bodywebsite .col-sm-push-4 {
    left: 33.33333%;
  }
  .bodywebsite .col-sm-push-5 {
    left: 41.66667%;
  }
  .bodywebsite .col-sm-push-6 {
    left: 50%;
  }
  .bodywebsite .col-sm-push-7 {
    left: 58.33333%;
  }
  .bodywebsite .col-sm-push-8 {
    left: 66.66667%;
  }
  .bodywebsite .col-sm-push-9 {
    left: 75%;
  }
  .bodywebsite .col-sm-push-10 {
    left: 83.33333%;
  }
  .bodywebsite .col-sm-push-11 {
    left: 91.66667%;
  }
  .bodywebsite .col-sm-pull-1 {
    right: 8.33333%;
  }
  .bodywebsite .col-sm-pull-2 {
    right: 16.66667%;
  }
  .bodywebsite .col-sm-pull-3 {
    right: 25%;
  }
  .bodywebsite .col-sm-pull-4 {
    right: 33.33333%;
  }
  .bodywebsite .col-sm-pull-5 {
    right: 41.66667%;
  }
  .bodywebsite .col-sm-pull-6 {
    right: 50%;
  }
  .bodywebsite .col-sm-pull-7 {
    right: 58.33333%;
  }
  .bodywebsite .col-sm-pull-8 {
    right: 66.66667%;
  }
  .bodywebsite .col-sm-pull-9 {
    right: 75%;
  }
  .bodywebsite .col-sm-pull-10 {
    right: 83.33333%;
  }
  .bodywebsite .col-sm-pull-11 {
    right: 91.66667%;
  }
  .bodywebsite .col-sm-offset-1 {
    margin-left: 8.33333%;
  }
  .bodywebsite .col-sm-offset-2 {
    margin-left: 16.66667%;
  }
  .bodywebsite .col-sm-offset-3 {
    margin-left: 25%;
  }
  .bodywebsite .col-sm-offset-4 {
    margin-left: 33.33333%;
  }
  .bodywebsite .col-sm-offset-5 {
    margin-left: 41.66667%;
  }
  .bodywebsite .col-sm-offset-6 {
    margin-left: 50%;
  }
  .bodywebsite .col-sm-offset-7 {
    margin-left: 58.33333%;
  }
  .bodywebsite .col-sm-offset-8 {
    margin-left: 66.66667%;
  }
  .bodywebsite .col-sm-offset-9 {
    margin-left: 75%;
  }
  .bodywebsite .col-sm-offset-10 {
    margin-left: 83.33333%;
  }
  .bodywebsite .col-sm-offset-11 {
    margin-left: 91.66667%;
  }
}
@media (min-width: 992px) {
  .bodywebsite .container {
    max-width: 970px;
  }
  .bodywebsite .col-md-1,
  .bodywebsite .col-md-2,
  .bodywebsite .col-md-3,
  .bodywebsite .col-md-4,
  .bodywebsite .col-md-5,
  .bodywebsite .col-md-6,
  .bodywebsite .col-md-7,
  .bodywebsite .col-md-8,
  .bodywebsite .col-md-9,
  .bodywebsite .col-md-10,
  .bodywebsite .col-md-11 {
    float: left;
  }
  .bodywebsite .col-md-1 {
    width: 8.33333%;
  }
  .bodywebsite .col-md-2 {
    width: 16.66667%;
  }
  .bodywebsite .col-md-3 {
    width: 25%;
  }
  .bodywebsite .col-md-4 {
    width: 33.33333%;
  }
  .bodywebsite .col-md-5 {
    width: 41.66667%;
  }
  .bodywebsite .col-md-6 {
    width: 50%;
  }
  .bodywebsite #HOOK_PAYMENT .row .col-md-6 {
    width: 100%;
  }
  .bodywebsite .col-md-7 {
    width: 58.33333%;
  }
  .bodywebsite .col-md-8 {
    width: 66.66667%;
  }
  .bodywebsite .col-md-9 {
    width: 75%;
  }
  .bodywebsite .col-md-10 {
    width: 83.33333%;
  }
  .bodywebsite .col-md-11 {
    width: 91.66667%;
  }
  .bodywebsite .col-md-12 {
    width: 100%;
  }
  .bodywebsite .col-md-push-0 {
    left: auto;
  }
  .bodywebsite .col-md-push-1 {
    left: 8.33333%;
  }
  .bodywebsite .col-md-push-2 {
    left: 16.66667%;
  }
  .bodywebsite .col-md-push-3 {
    left: 25%;
  }
  .bodywebsite .col-md-push-4 {
    left: 33.33333%;
  }
  .bodywebsite .col-md-push-5 {
    left: 41.66667%;
  }
  .bodywebsite .col-md-push-6 {
    left: 50%;
  }
  .bodywebsite .col-md-push-7 {
    left: 58.33333%;
  }
  .bodywebsite .col-md-push-8 {
    left: 66.66667%;
  }
  .bodywebsite .col-md-push-9 {
    left: 75%;
  }
  .bodywebsite .col-md-push-10 {
    left: 83.33333%;
  }
  .bodywebsite .col-md-push-11 {
    left: 91.66667%;
  }
  .bodywebsite .col-md-pull-0 {
    right: auto;
  }
  .bodywebsite .col-md-pull-1 {
    right: 8.33333%;
  }
  .bodywebsite .col-md-pull-2 {
    right: 16.66667%;
  }
  .bodywebsite .col-md-pull-3 {
    right: 25%;
  }
  .bodywebsite .col-md-pull-4 {
    right: 33.33333%;
  }
  .bodywebsite .col-md-pull-5 {
    right: 41.66667%;
  }
  .bodywebsite .col-md-pull-6 {
    right: 50%;
  }
  .bodywebsite .col-md-pull-7 {
    right: 58.33333%;
  }
  .bodywebsite .col-md-pull-8 {
    right: 66.66667%;
  }
  .bodywebsite .col-md-pull-9 {
    right: 75%;
  }
  .bodywebsite .col-md-pull-10 {
    right: 83.33333%;
  }
  .bodywebsite .col-md-pull-11 {
    right: 91.66667%;
  }
  .bodywebsite .col-md-offset-0 {
    margin-left: 0;
  }
  .bodywebsite .col-md-offset-1 {
    margin-left: 8.33333%;
  }
  .bodywebsite .col-md-offset-2 {
    margin-left: 16.66667%;
  }
  .bodywebsite .col-md-offset-3 {
    margin-left: 25%;
  }
  .bodywebsite .col-md-offset-4 {
    margin-left: 33.33333%;
  }
  .bodywebsite .col-md-offset-5 {
    margin-left: 41.66667%;
  }
  .bodywebsite .col-md-offset-6 {
    margin-left: 50%;
  }
  .bodywebsite .col-md-offset-7 {
    margin-left: 58.33333%;
  }
  .bodywebsite .col-md-offset-8 {
    margin-left: 66.66667%;
  }
  .bodywebsite .col-md-offset-9 {
    margin-left: 75%;
  }
  .bodywebsite .col-md-offset-10 {
    margin-left: 83.33333%;
  }
  .bodywebsite .col-md-offset-11 {
    margin-left: 91.66667%;
  }
}
@media (min-width: 1200px) {
  .bodywebsite .container {
    max-width: 1170px;
  }
  .bodywebsite .col-lg-1,
  .bodywebsite .col-lg-2,
  .bodywebsite .col-lg-3,
  .bodywebsite .col-lg-4,
  .bodywebsite .col-lg-5,
  .bodywebsite .col-lg-6,
  .bodywebsite .col-lg-7,
  .bodywebsite .col-lg-8,
  .bodywebsite .col-lg-9,
  .bodywebsite .col-lg-10,
  .bodywebsite .col-lg-11 {
    float: left;
  }
  .bodywebsite .col-lg-1 {
    width: 8.33333%;
  }
  .bodywebsite .col-lg-2 {
    width: 16.66667%;
  }
  .bodywebsite .col-lg-3 {
    width: 25%;
  }
  .bodywebsite .col-lg-4 {
    width: 36%;
  }
  .bodywebsite .col-lg-5 {
    width: 41.66667%;
  }
  .bodywebsite .col-lg-6 {
    width: 50%;
  }
  .bodywebsite .col-lg-7 {
    width: 58.33333%;
  }
  .bodywebsite .col-lg-8 {
    width: 66.66667%;
  }
  .bodywebsite .col-lg-9 {
    width: 75%;
  }
  .bodywebsite .col-lg-10 {
    width: 83.33333%;
  }
  .bodywebsite .col-lg-11 {
    width: 91.66667%;
  }
  .bodywebsite .col-lg-12 {
    width: 100%;
  }
  .bodywebsite .col-lg-push-0 {
    left: auto;
  }
  .bodywebsite .col-lg-push-1 {
    left: 8.33333%;
  }
  .bodywebsite .col-lg-push-2 {
    left: 16.66667%;
  }
  .bodywebsite .col-lg-push-3 {
    left: 25%;
  }
  .bodywebsite .col-lg-push-4 {
    left: 33.33333%;
  }
  .bodywebsite .col-lg-push-5 {
    left: 41.66667%;
  }
  .bodywebsite .col-lg-push-6 {
    left: 50%;
  }
  .bodywebsite .col-lg-push-7 {
    left: 58.33333%;
  }
  .bodywebsite .col-lg-push-8 {
    left: 66.66667%;
  }
  .bodywebsite .col-lg-push-9 {
    left: 75%;
  }
  .bodywebsite .col-lg-push-10 {
    left: 83.33333%;
  }
  .bodywebsite .col-lg-push-11 {
    left: 91.66667%;
  }
  .bodywebsite .col-lg-pull-0 {
    right: auto;
  }
  .bodywebsite .col-lg-pull-1 {
    right: 8.33333%;
  }
  .bodywebsite .col-lg-pull-2 {
    right: 16.66667%;
  }
  .bodywebsite .col-lg-pull-3 {
    right: 25%;
  }
  .bodywebsite .col-lg-pull-4 {
    right: 33.33333%;
  }
  .bodywebsite .col-lg-pull-5 {
    right: 41.66667%;
  }
  .bodywebsite .col-lg-pull-6 {
    right: 50%;
  }
  .bodywebsite .col-lg-pull-7 {
    right: 58.33333%;
  }
  .bodywebsite .col-lg-pull-8 {
    right: 66.66667%;
  }
  .bodywebsite .col-lg-pull-9 {
    right: 75%;
  }
  .bodywebsite .col-lg-pull-10 {
    right: 83.33333%;
  }
  .bodywebsite .col-lg-pull-11 {
    right: 91.66667%;
  }
  .bodywebsite .col-lg-offset-0 {
    margin-left: 0;
  }
  .bodywebsite .col-lg-offset-1 {
    margin-left: 8.33333%;
  }
  .bodywebsite .col-lg-offset-2 {
    margin-left: 16.66667%;
  }
  .bodywebsite .col-lg-offset-3 {
    margin-left: 25%;
  }
  .bodywebsite .col-lg-offset-4 {
    margin-left: 33.33333%;
  }
  .bodywebsite .col-lg-offset-5 {
    margin-left: 41.66667%;
  }
  .bodywebsite .col-lg-offset-6 {
    margin-left: 50%;
  }
  .bodywebsite .col-lg-offset-7 {
    margin-left: 58.33333%;
  }
  .bodywebsite .col-lg-offset-8 {
    margin-left: 66.66667%;
  }
  .bodywebsite .col-lg-offset-9 {
    margin-left: 75%;
  }
  .bodywebsite .col-lg-offset-10 {
    margin-left: 83.33333%;
  }
  .bodywebsite .col-lg-offset-11 {
    margin-left: 91.66667%;
  }
}
@media (min-width: 1200px) {
  .bodywebsite ul.grid.tab-pane > li {
    padding-bottom: 85px;
    margin-bottom: 0;
  }
}
.bodywebsite .bottom-pagination-content {
  border-top: 1px solid #d6d4d4;
}
.bodywebsite .alert {
  padding: 15px;
  margin-bottom: 18px;
  border: 1px solid transparent;
  border-radius: 0;
}
.bodywebsite .alert h4 {
  margin-top: 0;
  color: inherit;
}
.bodywebsite .alert .alert-link {
  font-weight: 700;
}
.bodywebsite .alert > p,
.bodywebsite .alert > ul {
  margin-bottom: 0;
}
.bodywebsite .alert > p + p {
  margin-top: 5px;
}
.bodywebsite .alert-dismissable {
  padding-right: 35px;
}
.bodywebsite .alert-dismissable .close {
  position: relative;
  top: -2px;
  right: -21px;
  color: inherit;
}
.bodywebsite .alert-success {
  background-color: #55c65e;
  border-color: #48b151;
  color: #fff;
}
.bodywebsite .alert-success hr {
  border-top-color: #419f49;
}
.bodywebsite .alert-success .alert-link {
  color: #e6e6e6;
}
.bodywebsite .alert-info {
  background-color: #5192f3;
  border-color: #4b80c3;
  color: #fff;
}
.bodywebsite .alert-info hr {
  border-top-color: #3d73b7;
}
.bodywebsite .alert-info .alert-link {
  color: #e6e6e6;
}
.bodywebsite .alert-warning {
  background-color: #fe9126;
  border-color: #e4752b;
  color: #fff;
}
.bodywebsite .alert-warning hr {
  border-top-color: #da681c;
}
.bodywebsite .alert-warning .alert-link {
  color: #e6e6e6;
}
.bodywebsite .alert-danger {
  background-color: #f3515c;
  border-color: #d4323d;
  color: #fff;
}
.bodywebsite .alert-danger hr {
  border-top-color: #c32933;
}
.bodywebsite .alert-danger .alert-link {
  color: #e6e6e6;
}
.bodywebsite #lightbox {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, 0.7);
  text-align: center;
  z-index: 10000;
}
.bodywebsite #lightbox p {
  text-align: center;
  color: #fff;
  font-size: 12px;
}
.bodywebsite #lightbox img {
  box-shadow: 0 0 25px #111;
  max-width: 700px;
}
.bodywebsite #facebook_block,
.bodywebsite #cmsinfo_block {
  overflow: hidden;
  background: #f2f2f2;
  min-height: 344px;
  padding-right: 29px;
  padding-left: 29px;
}
@media (max-width: 991px) {
  .bodywebsite #facebook_block,
  .bodywebsite #cmsinfo_block {
    min-height: 348px;
    padding-left: 13px;
    padding-right: 13px;
  }
}
@media (max-width: 767px) {
  .bodywebsite #facebook_block,
  .bodywebsite #cmsinfo_block {
    width: 100%;
    min-height: 1px;
  }
}
.bodywebsite #cmsinfo_block {
  border-left: 1px solid #d9d9d9;
}
@media (max-width: 767px) {
  .bodywebsite #cmsinfo_block {
    border: none;
    margin-top: 10px;
  }
}
.bodywebsite #cmsinfo_block > div {
  padding: 35px 10px 0 0;
}
@media (max-width: 767px) {
  .bodywebsite #cmsinfo_block > div {
    padding-top: 20px;
  }
}
@media (max-width: 479px) {
  .bodywebsite #cmsinfo_block > div {
    width: 100%;
    border-top: 1px solid #d9d9d9;
  }
}
.bodywebsite #cmsinfo_block > div + div {
  border-left: 1px solid #d9d9d9;
  min-height: 344px;
  padding-left: 29px;
}
@media (max-width: 479px) {
  .bodywebsite #cmsinfo_block > div + div {
    border-left: none;
    padding-left: 10px;
    min-height: 1px;
    padding-bottom: 15px;
  }
}
.bodywebsite #cmsinfo_block em {
  float: left;
  width: 60px;
  height: 60px;
  margin: 3px 10px 0 0;
  font-size: 30px;
  color: #fff;
  line-height: 60px;
  text-align: center;
  background: #6f6d6d;
  -webkit-border-radius: 100px;
  -moz-border-radius: 100px;
  border-radius: 100px;
}
@media (max-width: 991px) {
  .bodywebsite #cmsinfo_block em {
    width: 30px;
    height: 30px;
    line-height: 30px;
    font-size: 20px;
  }
}
.bodywebsite #cmsinfo_block .type-text {
  overflow: hidden;
}
.bodywebsite #cmsinfo_block h3 {
  margin: 0 0 5px;
  font: 300 21px/25px "Open Sans", sans-serif;
  color: #6f6d6d;
}
@media (max-width: 1199px) {
  .bodywebsite #cmsinfo_block h3 {
    font-size: 18px;
  }
}
.bodywebsite #cmsinfo_block ul li {
  padding-bottom: 22px;
}
@media (max-width: 1199px) {
  .bodywebsite #cmsinfo_block ul li {
    padding-bottom: 10px;
  }
}
@media (max-width: 991px) {
  .bodywebsite #cmsinfo_block ul li {
    padding-bottom: 0;
  }
}
.bodywebsite #cmsinfo_block p em {
  background: 0 0;
  -webkit-border-radius: 0;
  -moz-border-radius: 0;
  border-radius: 0;
  margin: 0;
  font-size: 13px;
  color: #777;
  float: none;
  height: inherit;
  line-height: inherit;
  text-align: left;
  font-style: italic;
}
.bodywebsite .ie8 #facebook_block,
.bodywebsite .ie8 #cmsinfo_block {
  height: 344px;
}
.bodywebsite #cmsinfo_block em {
  background: #eea200;
  text-shadow: 0 1px #b57b00;
}
.bodywebsite #facebook_block,
.bodywebsite #cmsinfo_block {
  background: rgba(219, 213, 185, 0.5);
}
.bodywebsite #cmsinfo_block,
.bodywebsite #cmsinfo_block > div + div {
  border-color: #dbd5b9;
}
.bodywebsite #cms #center_column .block-cms {
  padding-bottom: 20px;
}
.bodywebsite #cms #center_column h1 {
  margin-bottom: 25px;
}
.bodywebsite #cms #center_column h3 {
  font-size: 16px;
  border-bottom: none;
  margin: 0;
  padding: 0 0 17px 0;
}
.bodywebsite #cms #center_column p {
  line-height: 18px;
}
.bodywebsite #cms #center_column .list-1 li {
  padding: 4px 0 6px 0;
  font-weight: bold;
  color: #46a74e;
  border-top: 1px solid #d6d4d4;
}
.bodywebsite #cms #center_column .list-1 li:first-child {
  border: none;
}
.bodywebsite #cms #center_column .list-1 li em {
  font-size: 20px;
  line-height: 20px;
  padding-right: 15px;
  vertical-align: -2px;
}
.bodywebsite #cms #center_column img {
  margin: 4px 0 17px;
  max-width: 100%;
  height: auto;
}
.bodywebsite #cms #center_column .testimonials {
  border: 1px solid;
  border-color: #dfdede #d2d0d0 #b0afaf #d2d0d0;
  margin: 4px 0 13px 0;
  position: relative;
}
.bodywebsite #cms #center_column .testimonials .inner {
  border: 1px solid white;
  padding: 19px 18px 11px 18px;
  background: #fbfbfb;
  background: -moz-linear-gradient(top, #fbfbfb 0, #fefefe 100%);
  background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #fbfbfb), color-stop(100%, #fefefe));
  background: -webkit-linear-gradient(top, #fbfbfb 0, #fefefe 100%);
  background: -o-linear-gradient(top, #fbfbfb 0, #fefefe 100%);
  background: -ms-linear-gradient(top, #fbfbfb 0, #fefefe 100%);
  background: linear-gradient(to bottom, #fbfbfb 0, #fefefe 100%);
}
.bodywebsite #cms #center_column .testimonials .inner span {
  text-indent: -5000px;
  display: inline-block;
  width: 20px;
  height: 15px;
}
.bodywebsite #cms #center_column .testimonials .inner span.before {
  background: url(https://www.dolistore.com/themes/dolibarr-bootstrap/img/bl-before-bg.png) no-repeat;
  margin-right: 8px;
}
.bodywebsite #cms #center_column .testimonials .inner span.after {
  background: url(https://www.dolistore.com/themes/dolibarr-bootstrap/img/bl-after-bg.png) no-repeat;
  margin-left: 8px;
}
.bodywebsite #cms #center_column .testimonials:after {
  content: ".";
  display: block;
  text-indent: -5000px;
  position: absolute;
  bottom: -16px;
  left: 21px;
  width: 15px;
  height: 16px;
  background: url(https://www.dolistore.com/themes/dolibarr-bootstrap/img/testimon-after.gif) no-repeat;
}
.bodywebsite #cms #center_column .testimonials + p {
  padding-left: 45px;
  margin-bottom: 18px;
}
.bodywebsite #cms #center_column p.bottom-indent {
  margin-bottom: 18px;
}
.bodywebsite #cms #center_column #admin-action-cms {
  background: none repeat 0 0 #F6F6F6;
  border: 1px solid #d2d0d0;
  padding: 10px;
}
.bodywebsite #cms #center_column #admin-action-cms p {
  margin: 0;
}
.bodywebsite #cms #center_column #admin-action-cms p span {
  display: block;
  padding-bottom: 10px;
  font-size: 14px;
  font-weight: bold;
  color: #333333;
}
.bodywebsite #cms #center_column #admin-action-cms p .button {
  font: 700 17px/21px Arial, Helvetica, sans-serif;
  padding: 0;
  border: 1px solid;
  padding: 10px 14px;
  display: inline-block;
}
.bodywebsite #cms #center_column #admin-action-cms p .button.publish_button {
  color: white;
  text-shadow: 1px 1px rgba(0, 0, 0, 0.2);
  border-color: #0079b6 #006fa8 #012740 #006fa8;
  background: #009ad0;
  background: -moz-linear-gradient(top, #009ad0 0, #007ab7 100%);
  background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #009ad0), color-stop(100%, #007ab7));
  background: -webkit-linear-gradient(top, #009ad0 0, #007ab7 100%);
  background: -o-linear-gradient(top, #009ad0 0, #007ab7 100%);
  background: -ms-linear-gradient(top, #009ad0 0, #007ab7 100%);
  background: linear-gradient(to bottom, #009ad0 0, #007ab7 100%);
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#009ad0', endColorstr='#007ab7', GradientType=0);
}
.bodywebsite #cms #center_column #admin-action-cms p .button.publish_button:hover {
  border-color: #01314e #004b74 #0079b6 #004b74;
  filter: none;
  background: #0084bf;
}
.bodywebsite #cms #center_column #admin-action-cms p .button.lnk_view {
  color: #333333;
  text-shadow: 1px 1px white;
  border-color: #cacaca #b7b7b7 #9a9a9a #b7b7b7;
  background: #f7f7f7;
  background: -moz-linear-gradient(top, #f7f7f7 0, #ededed 100%);
  background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #f7f7f7), color-stop(100%, #ededed));
  background: -webkit-linear-gradient(top, #f7f7f7 0, #ededed 100%);
  background: -o-linear-gradient(top, #f7f7f7 0, #ededed 100%);
  background: -ms-linear-gradient(top, #f7f7f7 0, #ededed 100%);
  background: linear-gradient(to bottom, #f7f7f7 0, #ededed 100%);
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#f7f7f7', endColorstr='#ededed', GradientType=0);
}
.bodywebsite #cms #center_column #admin-action-cms p .button.lnk_view:hover {
  border-color: #9e9e9e #9e9e9e #c8c8c8 #9e9e9e;
  filter: none;
  background: #e7e7e7;
}
<?php // BEGIN PHP
$tmp = ob_get_contents(); ob_end_clean(); dolWebsiteOutput($tmp, "css");
// END PHP ?>
