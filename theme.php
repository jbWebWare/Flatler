<?php

if ( ! defined('e107_INIT')) { exit(); }

define("VIEWPORT", "width=device-width, initial-scale=1.0");
define("BODYTAG", '<body class="preview" id="top" data-spy="scroll" data-target=".subnav" data-offset="80">');

e107::css('theme', 'css/flatly/bootstrap.min.css');
e107::css('core', 'bootstrap/css/bootstrap-responsive.min.css');
e107::js('core', 'bootstrap/js/bootstrap.min.js');
e107::js('theme', 'js/bootstrap/bootstrap-collapse.js');

function tablestyle($caption, $text, $mode='') 
{
    global $style;
    
    $type = $style;
    
    if(empty($caption))
    {
        $type = 'box';
    }
    
    if($style == 'navdoc')
    {
        echo $text;
        return;
    }
    
    if($mode == 'wm') // Welcome Message Style. 
    {
        echo '
        <div class="hero-unit">
            <h1>'.$caption.'</h1>
            <p>'.$text.'</p>
        </div>';  
        
        return;
    }
    
    if($mode == 'loginbox') // Login Box Style. 
    {
        echo '
        <div class="well sidebar-nav">
            <ul class="nav nav-list">
                <li class="nav-header">'.$caption.'</li>
            </ul>
         
           '.$text.'
            
        </div><!--/.well -->';
        return;
    }
    
    if($mode == 'login_page')
    {
        $type = 'no_caption';   
    }
    
    switch($type) 
    {
        // Default Menu/Side-Panel Style
        case 'menu' :
            echo '
            <div class="well sidebar-nav">
                <ul class="nav nav-list">
                    <li class="nav-header">'.$caption.'</li>
                </ul>
         
                '.$text.'
            
            </div><!--/.well -->';
            break;
        
        case 'span4' :
            echo $text; 
        break;
        
        case 'box':
            echo '
            <div class="block">
                <div class="block-text">
                    '.$text.'
                </div>
            </div>';
            break;
        
        case 'no_caption':
            echo $text;
        break;
    
        default: // Main Content Style. 
            echo '
            <h2>'.$caption.'</h2>
            <p>
                '.$text.'
            </p>';
        break;
    }
}

$SC_WRAPPER['NAVIGATION|s'] = '<div class="well sidebar-nav">{---}</div><!--/.well -->';

//*
$HEADER['default'] = '
<div class="navbar navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container">
            <!-- .btn-navbar is used as the toggle for collapsed navbar content -->
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
             
            <!-- Be sure to leave the brand out there if you want it shown -->
            <!-- <a class="brand" href="'.SITEURL.'">{SITENAME}</a> -->
             
            <!-- Everything you want hidden at 940px or less, place within here -->
            <div class="nav-collapse collapse">
                <!-- .nav, .navbar-search, .navbar-form, etc -->
                <div class="nav-collapse collapse">
                    <p class="navbar-text pull-right">
                        '.(!USERID ? '<a class="navbar-link" href="'.e_LOGIN.'">Sign in</a>': 'Logged in as <a href="user.php?id.'.USERID.'" class="navbar-link">'.USERNAME.'</a>').'
                    </p>
                    {NAVIGATION=main}
                    <p class="navbar-text text-center">
                        '.(XURL_FACEBOOK ? '<a href="'.XURL_FACEBOOK.'"><img src="'.THEME.'images/facebook_32.png"></img></a>' : '').' '
                        .(XURL_GOOGLE ? '<a href="'.XURL_GOOGLE.'"><img src="'.THEME.'images/google_plus_32.png"></img></a>' : '').' '
                        .(XURL_TWITTER ? '<a href="'.XURL_TWITTER.'"><img src="'.THEME.'images/twitter_32.png"></img></a>' : '').' '
                        .(XURL_YOUTUBE ? '<a href="'.XURL_YOUTUBE.'"><img src="'.THEME.'images/youtube_32.png"></img></a>' : '').' '
                        .(XURL_FLICKR ? '<a href="'.XURL_FLICKR.'"><img src="'.THEME.'images/flickr_32.png"></img></a>' : '').' '
                        .(XURL_INSTAGRAM ? '<a href="'.XURL_INSTAGRAM.'"><img src="'.THEME.'images/instagram_32.png"></img></a>' : '').' '
                        .(XURL_LINKEDIN ? '<a href="'.XURL_LINKEDIN.'"><img src="'.THEME.'images/linkedin_32.png"></img></a>' : '').' '
                        .(XURL_GITHUB ? '<a href="'.XURL_GITHUB.'"><img src="'.THEME.'images/github_light_32.png"></img></a>' : '').'
                    </p>
                </div><!--/.nav-collapse -->
            </div>
        </div>
    </div>
</div>
<header class="jumbotron subhead" id="overview">
    <div class="row-fluid">
        <div class="span1 offset1 right">
            <p>
            {LOGO}
            </p>
        </div>
        <div class="span7">
            <h1>{SITENAME}</h1>
            <p>{SITETAG}</p>
        </div>
        <div class="span2">
            {MENU=3}
        </div>
</header>
<div class="container-fluid make-margin">
    <div class="row-fluid">
        <div class="span3">
            {NAVIGATION|s=side}          
            {SETSTYLE=menu}
            {MENU=1}
            {MENU=2}
        </div>
        <div class="span8">
            {SETSTYLE=default}
            {WMESSAGE}
        <!-- </div> /span -->
';

$FOOTER['default'] = '
        </div>
    </div>
</div>
<div class="container-fluid grey-background make-padding">
    <div class="row-fluid">
        <div class="span3 offset2">
            {MENU=4}
        </div>
        <div class="span3">
            {MENU=5}
        </div>
        <div class="span3">
            {MENU=6}
        </div>
    </div>
</div>
<footer class="center grey-background"> 
    '.SITEDISCLAIMER.'
</footer>
';

$HEADER['default-home'] = $HEADER['default'];

$FOOTER['default-home'] = $FOOTER['default'];
