<!-- AUI Framework -->
<!DOCTYPE html>
    <html>
    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>..:: Welcome ::..</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <link rel="shortcut icon" href="<?php echo base_url();?>assets/images/icons/favicon.png"/>

        <!-- Favicons -->

        <!--[if lt IE 9]>
          <script src="assets/js/minified/core/html5shiv.min.js"></script>
          <script src="assets/js/minified/core/respond.min.js"></script>
        <![endif]-->

        <!-- AgileUI CSS Core -->

        <link rel="stylesheet" type="text/css" href="assets/css/minified/aui-production.min.css">

        <!-- <link rel="stylesheet" type="text/css" href="../_assets/css/widgets/theme-switcher.css"> -->

        <!-- Theme UI -->

        <link id="layout-theme" rel="stylesheet" type="text/css" href="assets/themes/minified/agileui/color-schemes/layouts/default.min.css">
        <link id="elements-theme" rel="stylesheet" type="text/css" href="assets/themes/minified/agileui/color-schemes/elements/default.min.css">


        <link rel="stylesheet" type="text/css" href="assets/themes/minified/agileui/responsive.min.css">

        <!-- AgileUI Animations -->

        <link rel="stylesheet" type="text/css" href="assets/themes/minified/agileui/animations.min.css">

        <!-- AgileUI JS -->

        <script type="text/javascript" src="assets/js/minified/aui-production.min.js"></script>

    </head>
    <body>

        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

        <div id="login-page" class="mrg25B">

            <div id="page-header" class="clearfix">
                <div id="page-header-wrapper" class="clearfix">
                    <div id="header-logo">
                        Padamas <i class="opacity-80"></i>

                        <a href="#" class="tooltip-button" data-placement="bottom" title="Close sidebar" id="close-sidebar">
                            <i class="glyph-icon icon-align-justify"></i>
                        </a>
                        <a href="#" class="tooltip-button hidden" data-placement="bottom" title="Open sidebar" id="rm-close-sidebar">
                            <i class="glyph-icon icon-align-justify"></i>
                        </a>
                        <a href="#" class="tooltip-button hidden" title="Navigation Menu" id="responsive-open-menu">
                            <i class="glyph-icon icon-align-justify"></i>
                        </a>
                    </div>


                </div>
            </div><!-- #page-header -->

        </div>
        <div class="pad20A">

            <div class="row">

                <div class="clear"></div>
                <form class="col-md-3 center-margin form-vertical mrg25T" action="<?php echo base_url(); ?>login/ceklogin" method="post">
                    <div id="login-form" class="content-box drop-shadow">
                        <h3 class="content-box-header ui-state-default">
                            <div class="glyph-icon icon-separator">
                                <i class="glyph-icon icon-user"></i>
                            </div>
                            <span>Login</span>
                        </h3>
                        <div class="content-box-wrapper pad20A pad0B">
                            <div class="form-row">
                                <div class="form-label col-md-2">
                                    <label for="login_email">
                                        Username:
                                        <span class="required">*</span>
                                    </label>
                                </div>
                                <div class="form-input col-md-10">
                                    <div class="form-input-icon">
                                        <i class="glyph-icon icon-envelope-o ui-state-default"></i>
                                        <input placeholder="Username" data-type="email" data-trigger="change" data-required="true" type="text" name="name" id="login_email">
                                    </div>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-label col-md-2">
                                    <label for="login_pass">
                                        Password:
                                    </label>
                                </div>
                                <div class="form-input col-md-10">
                                    <div class="form-input-icon">
                                        <i class="glyph-icon icon-unlock-alt ui-state-default"></i>
                                        <input placeholder="Password" data-trigger="keyup" data-rangelength="[3,25]" type="password" name="pass" id="login_pass">
                                    </div>
                                </div>
                            </div>
     
                        </div>
                        <div class="button-pane">
                            <button type="submit" class="btn large primary-bg text-transform-upr font-bold font-size-11 radius-all-4" id="demo-form-valid" title="Validate!">
                                <span class="button-content">
                                    Login
                                </span>
                            </button>
                        </div>
                    </div>

                    <div class="divider"></div>
                    <div class="form-row text-center">
                       
                            <span class="button-content pad20L pad20R">
                              <?php echo  $alert ; ?>
                            </span>
                      
                    </div>
             
                </form>

            </div>

        </div>


        <div id="page-footer-wrapper" class="login-footer">
            <div id="page-footer">
        	    Copyright &copy; 2014 - xxx
        	    
            </div>
        </div><!-- #page-footer-wrapper -->

    </body>
</html>
