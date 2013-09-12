<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Flatplan - Administration</title>
    <meta name="author" content="SuggeElson" />
    <meta name="description" content="Supr admin template - new premium responsive admin template. This template is designed to help you build the site administration without losing valuable time.Template contains all the important functions which must have one backend system.Build on great twitter boostrap framework" />
    <meta name="keywords" content="admin, admin template, admin theme, responsive, responsive admin, responsive admin template, responsive theme, themeforest, 960 grid system, grid, grid theme, liquid, masonry, jquery, administration, administration template, administration theme, mobile, touch , responsive layout, boostrap, twitter boostrap" />
    <meta name="application-name" content="Supr admin template" />

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Le styles -->
    <!-- Use new way for google web fonts 
    http://www.smashingmagazine.com/2012/07/11/avoiding-faux-weights-styles-google-web-fonts -->
    <!-- Headings -->
    <!-- <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css' />  -->
    <!-- Text -->
    <!-- <link href='http://fonts.googleapis.com/css?family=Droid+Sans:400,700' rel='stylesheet' type='text/css' /> --> 
    <!--[if lt IE 9]>
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400" rel="stylesheet" type="text/css" />
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:700" rel="stylesheet" type="text/css" />
    <link href="http://fonts.googleapis.com/css?family=Droid+Sans:400" rel="stylesheet" type="text/css" />
    <link href="http://fonts.googleapis.com/css?family=Droid+Sans:700" rel="stylesheet" type="text/css" />
    <![endif]-->

    <!-- Core stylesheets do not remove -->
    <link href="{{ URL::asset( 'css/admin/bootstrap.min.css') }}" media='screen' rel='stylesheet' type='text/css'>
    <link href="{{ URL::asset( 'css/admin/bootstrap-responsive.min.css' ) }}" media='screen' rel='stylesheet' type='text/css'>
    <link href="{{ URL::asset( 'css/admin/jquery.ui.supr.css' ) }}" media='screen' rel='stylesheet' type='text/css'>
    <link href="{{ URL::asset( 'css/admin/icons.css' ) }}" media='screen' rel='stylesheet' type='text/css'>
    <link href="{{ URL::asset( 'css/admin/jquery.qtip.css' ) }}" media='screen' rel='stylesheet' type='text/css'>
    <link href="{{ URL::asset( 'css/admin/fullcalendar.css' ) }}" media='screen' rel='stylesheet' type='text/css'>
    <link href="{{ URL::asset( 'css/admin/tipuesearch.css' ) }}" media='screen' rel='stylesheet' type='text/css'>
    <link href="{{ URL::asset( 'css/admin/uniform.default.css' ) }}" media='screen' rel='stylesheet' type='text/css'>
    <link href="{{ URL::asset( 'css/admin/select2.css' ) }}" media='screen' rel='stylesheet' type='text/css'>
    <link href="{{ URL::asset( 'css/admin/toggle-buttons.css' ) }}" media='screen' rel='stylesheet' type='text/css'>
    <link href="{{ URL::asset( 'css/admin/main.css' ) }}" media='screen' rel='stylesheet' type='text/css'>
    <link href="{{ URL::asset( 'css/admin/custom.css' ) }}" media='screen' rel='stylesheet' type='text/css'>

    
    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="img/admin/favicon.ico" />
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="img/admin/apple-touch-icon-144-precomposed.png" />
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="img/admin/apple-touch-icon-114-precomposed.png" />
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/admin/apple-touch-icon-72-precomposed.png" />
    <link rel="apple-touch-icon-precomposed" href="img/admin/apple-touch-icon-57-precomposed.png" />
    
    <script type="text/javascript">
        //adding load class to body and hide page
        document.documentElement.className += 'loadstate';
    </script>

    </head>
      
    <body>
    <!-- loading animation -->
    <div id="qLoverlay"></div>
    <div id="qLbar"></div>
        
    <div id="header">

        <div class="navbar">
            <div class="navbar-inner">
              <div class="container-fluid">
                <a class="brand" href="">Flatplan Dashboard</a>
                <div class="nav-no-collapse">
                    <ul class="nav">
                        <li class="active"><a href="{{ URL::route('admin') }}"><span class="icon16 icomoon-icon-screen-2"></span> Dashboard</a></li>
                        
                    <!--<li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <span class="icon16 icomoon-icon-cog"></span> Settings
                                <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="menu">
                                    <ul>
                                        <li>                                                    
                                            <a href="#"><span class="icon16 icomoon-icon-equalizer"></span>Site config</a>
                                        </li>
                                        <li>                                                    
                                            <a href="#"><span class="icon16 icomoon-icon-wrench"></span>Plugins</a>
                                        </li>
                                        <li>
                                            <a href="#"><span class="icon16 icomoon-icon-picture-2"></span>Themes</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <span class="icon16 icomoon-icon-mail-3"></span>Messages <span class="notification">8</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="menu">
                                    <ul class="messages">    
                                        <li class="header"><strong>Messages</strong> (10) emails and (2) PM</li>
                                        <li>
                                           <span class="icon"><span class="icon16 icomoon-icon-user-3"></span></span>
                                            <span class="name"><a data-toggle="modal" href="#myModal1"><strong>Sammy Morerira</strong></a><span class="time">35 min ago</span></span>
                                            <span class="msg">I have question about new function ...</span>
                                        </li>
                                        <li>
                                           <span class="icon avatar"><img src="img/admin/avatar.jpg" alt="" /></span>
                                            <span class="name"><a data-toggle="modal" href="#myModal1"><strong>George Michael</strong></a><span class="time">1 hour ago</span></span>
                                            <span class="msg">I need to meet you urgent please call me ...</span>
                                        </li>
                                        <li>
                                            <span class="icon"><span class="icon16 icomoon-icon-mail-3"></span></span>
                                            <span class="name"><a data-toggle="modal" href="#myModal1"><strong>Ivanovich</strong></a><span class="time">1 day ago</span></span>
                                            <span class="msg">I send you my suggestion, please look and ...</span>
                                        </li>
                                        <li class="view-all"><a href="#">View all messages <span class="icon16 icomoon-icon-arrow-right-8"></span></a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>-->
                    </ul>
                  
                    <ul class="nav pull-right usernav">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <span class="icon16 icomoon-icon-bell"></span><span class="notification">3</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="menu">
                                    <ul class="notif">
                                        <li class="header"><strong>Notifications</strong> (3) items</li>
                                        <li>
                                            <a href="#">
                                                <span class="icon"><span class="icon16 icomoon-icon-user-3"></span></span>
                                                <span class="event">1 User is registred</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="icon"><span class="icon16 icomoon-icon-comments-4"></span></span>
                                                <span class="event">Jony add 1 comment</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="icon"><span class="icon16 icomoon-icon-new-2"></span></span>
                                                <span class="event">admin Julia added post with a long description</span>
                                            </a>
                                        </li>
                                        <li class="view-all"><a href="#">View all notifications <span class="icon16 icomoon-icon-arrow-right-8"></span></a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle avatar" data-toggle="dropdown">
                                <img src="img/admin/avatar.jpg" alt="" class="image" /> 
                                <span class="txt">{{ Auth::user()->username }}</span>
                                <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="menu">
                                    <ul>
                                        <li>
                                            <a href="{{ URL::route('admin') }}"><span class="icon16 icomoon-icon-user-3"></span>Edit profile</a>
                                        </li>
                                        <li>
                                            <a href="#"><span class="icon16 icomoon-icon-comments-2"></span>Approve comments</a>
                                        </li>
                                        <li>
                                            <a href="#"><span class="icon16 icomoon-icon-plus-2"></span>Add user</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li><a href="{{ Url::route('logout') }}"><span class="icon16 icomoon-icon-exit"></span> Logout</a></li>
                    </ul>
                </div><!-- /.nav-collapse -->
              </div>
            </div><!-- /navbar-inner -->
          </div><!-- /navbar --> 

    </div><!-- End #header -->

    <div id="wrapper">

        <!--Responsive navigation button-->  
        <div class="resBtn">
            <a href="#"><span class="icon16 minia-icon-list-3"></span></a>
        </div>
        
        <!--Left Sidebar collapse button-->  
        <div class="collapseBtn leftbar">
             <a href="#" class="tipR" title="Hide Left Sidebar"><span class="icon12 minia-icon-layout"></span></a>
        </div>

        <!--Sidebar background-->
        <div id="sidebarbg"></div>
        <!--Sidebar content-->
        <div id="sidebar">

            <div class="shortcuts">
                <ul>
                    <li><a href="{{ Url::route('settings') }}" title="Settings section" class="tip"><span class="icon24 icomoon-icon-cog"></span></a></li>
                    <li><a href="#" title="Database backup" class="tip"><span class="icon24 icomoon-icon-database"></span></a></li>
                    <li><a href="charts.html" title="Sales statistics" class="tip"><span class="icon24 icomoon-icon-pie-2"></span></a></li>
                    <li><a href="#" title="Write post" class="tip"><span class="icon24 icomoon-icon-pencil"></span></a></li>
                </ul>
            </div><!-- End search -->            

            <div class="sidenav">

                <div class="sidebar-widget" style="margin: -1px 0 0 0;">
                    <h5 class="title" style="margin-bottom:0">Navigation</h5>
                </div><!-- End .sidenav-widget -->

                <div class="mainnav">
                    <ul>
                        <li><a href="charts.html"><span class="icon16 icomoon-icon-stats-up"></span>Charts</a></li>
                        <li><a href=""><span class="icon16 icomoon-icon-list-view"></span>Categories</a></li>
                    </ul>
                </div>
            </div><!-- End sidenav -->

            <div class="sidebar-widget">
                <h5 class="title">Monthly Bandwidth Transfer</h5>
                <div class="content">
                    <span class="icon16 icomoon-icon-loop left"></span>
                    <div class="progress progress-mini progress-danger left tip" title="87%">
                      <div class="bar" style="width: 87%;"></div>
                    </div>
                    <span class="percent">87%</span>
                    <div class="stat">19419.94 / 12000 MB</div>
                </div>

            </div><!-- End .sidenav-widget -->

            <div class="sidebar-widget">
                <h5 class="title">Disk Space Usage</h5>
                <div class="content">
                    <span class="icon16 icomoon-icon-drive left"></span>
                    <div class="progress progress-mini progress-success left tip" title="16%">
                      <div class="bar" style="width: 16%;"></div>
                    </div>
                    <span class="percent">16%</span>
                    <div class="stat">304.44 / 8000 MB</div>
                </div>

            </div><!-- End .sidenav-widget -->

            <div class="sidebar-widget">
                <h5 class="title">Ad sense stats</h5>
                <div class="content">
                    
                    <div class="stats">
                        <div class="item">
                            <div class="head clearfix">
                                <div class="txt">Advert View</div>
                            </div>
                            <span class="icon16 icomoon-icon-eye left"></span>
                            <div class="number">21,501</div>
                            <div class="change">
                                <span class="icon24 icomoon-icon-arrow-up-2 green"></span>
                                5%
                            </div>
                            <span id="stat1" class="spark"></span>
                        </div>
                        <div class="item">
                            <div class="head clearfix">
                                <div class="txt">Clicks</div>
                            </div>
                            <span class="icon16 icomoon-icon-thumbs-up left"></span>
                            <div class="number">308</div>
                            <div class="change">
                                <span class="icon24 icomoon-icon-arrow-down-2 red"></span>
                                8%
                            </div>
                            <span id="stat2" class="spark"></span>
                        </div>
                        <div class="item">
                            <div class="head clearfix">
                                <div class="txt">Page CTR</div>
                            </div>
                            <span class="icon16 icomoon-icon-heart left"></span>
                            <div class="number">4%</div>
                            <div class="change">
                                <span class="icon24 icomoon-icon-arrow-down-2 red"></span>
                                1%
                            </div>
                            <span id="stat3" class="spark"></span>
                        </div>
                        <div class="item">
                            <div class="head clearfix">
                                <div class="txt">Earn money</div>
                            </div>
                            <span class="icon16 icomoon-icon-coin left"></span>
                            <div class="number">$376</div>
                            <div class="change">
                                <span class="icon24 icomoon-icon-arrow-up-2 green"></span>
                                26%
                            </div>
                            <span id="stat4" class="spark"></span>
                        </div>
                    </div>

                </div>

            </div><!-- End .sidenav-widget -->

            <div class="sidebar-widget">
                <h5 class="title">Right now</h5>
                <div class="content">
                    <div class="rightnow">
                        <ul class="unstyled">
                            <li><span class="number">34</span><span class="icon16 icomoon-icon-new-2"></span>Posts</li>
                            <li><span class="number">7</span><span class="icon16 icomoon-icon-file"></span>Pages</li>
                            <li><span class="number">14</span><span class="icon16 icomoon-icon-list-view"></span>Categories</li>
                            <li><span class="number">201</span><span class="icon16 icomoon-icon-tag"></span>Tags</li>
                        </ul>
                    </div>
                </div>

            </div><!-- End .sidenav-widget -->

        </div><!-- End #sidebar -->

        <!--Body content-->
        <div id="content" class="clearfix">
            <div class="contentwrapper"><!--Content wrapper-->

                <div class="heading">

                    <h3>@yield('pageTitle')</h3>                    

                    <div class="resBtnSearch">
                        <a href="#"><span class="icon16 icomoon-icon-search-3"></span></a>
                    </div>

                    <div class="search">

                        <form id="searchform" action="search.html">
                            <input type="text" id="tipue_search_input" class="top-search" placeholder="Search here ..." />
                            <input type="submit" id="tipue_search_button" class="search-btn" value=""/>
                        </form>
                
                    </div><!-- End search -->
                    
                    <ul class="breadcrumb">
                        <li>You are here:</li>
                        <li>
                            <a href="{{ Url::route('admin') }}" class="tip" title="back to dashboard">
                                <span class="icon16 icomoon-icon-screen-2"></span>
                            </a> 
                            <span class="divider">
                                <span class="icon16 icomoon-icon-arrow-right-2"></span>
                            </span>
                        </li>
                        <li class="active">@yield('pageTitle')</li>
                    </ul>

                </div><!-- End .heading-->

                <!-- Build page from here: -->
                <div class="row-fluid">

                    <!--<div class="span8">
                        <div class="centerContent">-->
                  
                           @yield('container-main')

                        <!--</div>
                    </div><!-- End .span8 -->

                </div>
                
            </div><!-- End contentwrapper -->
        </div><!-- End #content -->
    
    </div><!-- End #wrapper -->
    
    <!-- Le javascript
    ================================================== -->
    <!-- Important plugins put in all pages -->
    <?php

    echo '<script src="'.Url::asset( 'js/vendors/jquery.js').'"></script>' ;
    echo '<script src="'.Url::asset( 'js/admin/bootstrap.min.js' ).'"></script>' ;
    echo '<script src="'.Url::asset( 'js/admin/jquery.flot.js' ).'"></script>' ;
    echo '<script src="'.Url::asset( 'js/admin/jquery.sparkline.min.js' ).'"></script>' ;
    echo '<script src="'.Url::asset( 'js/admin/main.js' ).'"></script>' ;
    //Url::asset( 'js/admin/jquery.flot.js' ).'"></script>' ;
    //Url::asset( 'js/admin/jquery.flot.grow.js' ).'"></script>' ;
    //Url::asset( 'js/admin/jquery.flot.resize.js' ).'"></script>' ;
    //Url::asset( 'js/admin/jquery.flot.tooltip_0.4.4.js' ).'"></script>' ;
   //Url::asset( 'js/admin/jquery.flot.orderBars.js' ).'"></script>' ;
    echo '<script src="'.Url::asset( 'js/admin/jquery.knob.js' ).'"></script>' ;
    echo '<script src="'.Url::asset( 'js/admin/fullcalendar.min.js' ).'"></script>' ;
    echo '<script src="'.Url::asset( 'js/admin/jquery.qtip.min.js' ).'"></script>' ;
    echo '<script src="'.Url::asset( 'js/admin/jquery.ui.totop.min.js' ).'"></script>' ;
    echo '<script src="'.Url::asset( 'js/admin/tipuesearch_set.js' ).'"></script>' ;
    echo '<script src="'.Url::asset( 'js/admin/tipuesearch_data.js' ).'"></script>' ;
    echo '<script src="'.Url::asset( 'js/admin/tipuesearch.js' ).'"></script>' ;
    echo '<script src="'.Url::asset( 'js/admin/jquery.uniform.min.js' ).'"></script>' ;
    echo '<script src="'.Url::asset( 'js/admin/ios-orientationchange-fix.js' ).'"></script>' ;
    echo '<script src="'.Url::asset( 'js/admin/jquery.ui.touch-punch.min.js' ).'"></script>' ;
    // Url::asset( 'http://code.jquery.com/ui/1.10.3/jquery-ui.js' ).'"></script>' ;

    //FORMS
    echo '<script src="'.Url::asset( 'js/admin/dashboard.js' ).'"></script>' ;
    echo '<script src="'.Url::asset( 'js/admin/jquery.watermark.min.js' ).'"></script>' ;
    echo '<script src="'.Url::asset( 'js/admin/jquery.elastic.js' ).'"></script>' ;
    echo '<script src="'.Url::asset( 'js/admin/jquery.inputlimiter.1.3.min.js' ).'"></script>' ;
    echo '<script src="'.Url::asset( 'js/admin/jquery.maskedinput-1.3.min.js' ).'"></script>' ;
    echo '<script src="'.Url::asset( 'js/admin/jquery.toggle.buttons.js' ).'"></script>' ;
    echo '<script src="'.Url::asset( 'js/admin/globalize.js' ).'"></script>' ;
    echo '<script src="'.Url::asset( 'js/admin/colorpicker.js' ).'"></script>' ;
    echo '<script src="'.Url::asset( 'js/admin/jquery.timeentry.min.js' ).'"></script>' ;
    echo '<script src="'.Url::asset( 'js/admin/select2.min.js' ).'"></script>' ;
    echo '<script src="'.Url::asset( 'js/admin/jquery.dualListBox-1.3.min.js' ).'"></script>' ;
    echo '<script src="'.Url::asset( 'js/admin/jquery.tinymce.js' ).'"></script>' ;
    echo '<script src="'.Url::asset( 'js/admin/jquery.smartWizard-2.0.min.js' ).'"></script>' ;
    //Url::asset( 'js/admin/file.js' ).'"></script>' ;
    //Url::asset( 'js/admin/elfinder.min.js' ).'"></script>' ;
    echo '<script src="'.Url::asset( 'js/admin/fileuploader.js' ).'"></script>' ;
    echo '<script src="'.Url::asset( 'js/admin/forms.js' ).'"></script>' ;

    ?>

    </body>
</html>
