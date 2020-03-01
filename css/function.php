<?php 
    header("Content-type:text/css; charset: UTF-8");
?>
@charset "utf-8";

.message {
    padding: 14px 26px 14px 13px;
    position: fixed;
    top: 16px;
    right: 0;
    margin-right: 16px;
    z-index: 2000;
    width: 300px;
    background-color: #fff;
    overflow: hidden;
    border: 1px solid #ebeef5;
    border-radius: 8px;
    box-shadow: 0 2px 12px 0 rgba(0,0,0,.1);
    animation-duration: .3s!important;
}

.message__title {
    font-weight: 400;
    font-size: 15px;
    color: #1f2d3d;
    margin: 0;
}

.message__icon {
    position: absolute;
    color: #fff;
    height: 32px;
    width: 32px;
    font-size: 25px;
    top: 8px;
}

.message__close {
    position: absolute;
    top: 0;
    right: 10px;
    color: #999;
    text-decoration: none;
    cursor: pointer;
    font-weight: 100;
    font-size: 25px;
    line-height: 34px;
    height: 20px;
}

.message__close:hover {
    color: #666;
}

.message a {
    border-bottom: 1px solid rgba(131, 145, 165, .8);
}

.message a:hover {
    border-bottom: 1px solid #5c6775;
}

.message__container {
    margin-left: 45px;
}

.message__content {
    font-size: 13px;
    line-height: 21px;
    margin: 10px 0 0;
    color: #8391a5;
    text-align: justify;
}

.message__success {
    background: 
        url(data:image/svg+xml;base64,<?php echo base64_encode(file_get_contents("../img/success-32.svg"))?>)
        no-repeat;
}

.message__info {
    background: 
        url(data:image/svg+xml;base64,<?php echo base64_encode(file_get_contents("../img/info.svg"))?>)
        no-repeat;
}

.message__warning {
    background: 
        url(data:image/svg+xml;base64,<?php echo base64_encode(file_get_contents("../img/warning.svg"))?>)
        no-repeat;
}

.message__error {
    background: 
        url(data:image/svg+xml;base64,<?php echo base64_encode(file_get_contents("../img/error.svg"))?>)
        no-repeat;
}

/*
   Animation example, for spinners
*/
.animate-spin {
  -moz-animation: spin 2s infinite linear;
  -o-animation: spin 2s infinite linear;
  -webkit-animation: spin 2s infinite linear;
  animation: spin 2s infinite linear;
  display: inline-block;
}
@-moz-keyframes spin {
  0% {
    -moz-transform: rotate(0deg);
    -o-transform: rotate(0deg);
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg);
  }

  100% {
    -moz-transform: rotate(359deg);
    -o-transform: rotate(359deg);
    -webkit-transform: rotate(359deg);
    transform: rotate(359deg);
  }
}
@-webkit-keyframes spin {
  0% {
    -moz-transform: rotate(0deg);
    -o-transform: rotate(0deg);
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg);
  }

  100% {
    -moz-transform: rotate(359deg);
    -o-transform: rotate(359deg);
    -webkit-transform: rotate(359deg);
    transform: rotate(359deg);
  }
}
@-o-keyframes spin {
  0% {
    -moz-transform: rotate(0deg);
    -o-transform: rotate(0deg);
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg);
  }

  100% {
    -moz-transform: rotate(359deg);
    -o-transform: rotate(359deg);
    -webkit-transform: rotate(359deg);
    transform: rotate(359deg);
  }
}
@-ms-keyframes spin {
  0% {
    -moz-transform: rotate(0deg);
    -o-transform: rotate(0deg);
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg);
  }

  100% {
    -moz-transform: rotate(359deg);
    -o-transform: rotate(359deg);
    -webkit-transform: rotate(359deg);
    transform: rotate(359deg);
  }
}
@keyframes spin {
  0% {
    -moz-transform: rotate(0deg);
    -o-transform: rotate(0deg);
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg);
  }

  100% {
    -moz-transform: rotate(359deg);
    -o-transform: rotate(359deg);
    -webkit-transform: rotate(359deg);
    transform: rotate(359deg);
  }
}