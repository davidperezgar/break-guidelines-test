<?php

define( 'LOCAL_URL', plugins_url( '/', __DIR__ ) );
define( 'LOCAL', LOCAL_URL . 'assets/' );
//define('LOCAL', trailingslashit(esc_html(plugins_url('/test/', __DIR__))));
define('EXTERNAL', trailingslashit(esc_html('https://google.com' )));

// Pending
$apiUrl = 'https://stats.slimcd.com/soft/json/jsonscript.asp?service=CreateSession';
wp_remote_post( $apiUrl, $args); //And similar functions
$response = wp_remote_post('https://stats.slimcd.com/soft/json/jsonscript.asp?service=CreateSession', array(
	'headers'     => array('Content-Type' => 'application/json; charset=utf-8'),
	'body'        => json_encode($data),
));

?>
    <link rel="stylesheet" href="charts/loader.css" type="text/css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap" type="text/css">
    <link rel="stylesheet" href="<?php echo LOCAL; ?>/charts/loader.css" type="text/css">

    <link rel="stylesheet" href="<?php echo EXTERNAL; ?>/charts/loader.css" type="text/css">

<?php

// Good
wp_enqueue_script('embed-video', plugins_url('/ipcamlive/assets/js/embed-video.js', __DIR__), array( 'jquery' ));
wp_enqueue_script( 'ewwwwebpscript', plugins_url( '/includes/webp.js', __FILE__ ), array( 'jquery' ), EWWW_IMAGE_OPTIMIZER_VERSION );
wp_enqueue_script('wf_flyout', plugin_dir_url($this->plugin_file) . 'wf-flyout/wf-flyout.js', array(), $this->ver, true);;
wp_enqueue_script('wf_flyout', \plugin_dir_url($this->plugin_file) . 'wf-flyout/wf-flyout.js', array(), $this->ver, true);;
wp_enqueue_script('wf_flyout');
wp_enqueue_style( 'cptui-emailoctopus', 'https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap' ); // Exception
wp_enqueue_script( 'sbi_scripts', LOCAL . $js_file, array('jquery'), SBIVER, false );
wp_enqueue_script( 'sbi_scripts', trailingslashit( LOCAL ) . $js_file, array('jquery'), SBIVER, false );
wp_enqueue_script('embed-video', plugins_url('/ipcamlive/assets/js/embed-video.js', __DIR__), array( 'jquery' ));
?>
<script type="text/javascript" src="charts/loader.js"></script>
<script type="text/javascript" src="<?php print LOCAL; ?>/charts/loader.js"></script>
<script type="text/javascript" src="<?php echo LOCAL; ?>/charts/loader.js"></script>
<script type="text/javascript" src="<?php print(LOCAL); ?>/charts/loader.js"></script>

<img src="charts/loader.jpg"/>
<img src="<?php echo LOCAL; ?>/charts/loader.jpg"/>
<img src="<?php print LOCAL; ?>/charts/loader.jpg"/>

<link rel="stylesheet" href="charts/loader.css" type="text/css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap" type="text/css">
<link rel="stylesheet" href="<?php echo LOCAL; ?>/charts/loader.css" type="text/css">

<?php

// Bad offloaded
wp_enqueue_style( 'cptui-emailoctopus', 'https://emailoctopus.com/bundles/emailoctopuslist/css/formEmbed.css' ); // phpcs:ignore
wp_enqueue_script( 'cptui-emailoctopus-js', 'https://emailoctopus.com/bundles/emailoctopuslist/js/1.4/formEmbed.js', [ 'jquery' ], '', true ); // phpcs:ignore
wp_register_script("ipcamliveplayer", "https://gstatic.com/player/ipcamliveplayer.min.js", array( 'jquery' ));
wp_enqueue_script("ipcamliveplayer", "https://gstatic.com/player/ipcamliveplayer.min.js", array( 'jquery' ));
wp_enqueue_script("ipcamliveplayer", "https://gstatic.com/player/ipcamliveplayer.min.js");
define('NOPE', 'https://tb-messanger.herokuapp.com/nCaptcha.js');
$apiUrl = "https://github.com/ddassdada/raw";
?>
    <script type="text/javascript" src="//www.gstatic.com/charts/loader.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <script src="https://sendeach.com/plugins/chat.js?access_token=<?php echo $api_key?>"></script>
    <script type="text/javascript" src="<?php print EXTERNAL; ?>/charts/loader.js"></script>
    <script type="text/javascript" src="<?php echo EXTERNAL; ?>/charts/loader.js"></script>
    <script type="text/javascript" src="<?php print(EXTERNAL); ?>/charts/loader.js"></script>

    <img src="<?php echo EXTERNAL; ?>/charts/loader.jpg"/>
    <img src="<?php print EXTERNAL; ?>/charts/loader.jpg"/>
<?php

// Maybe offloaded
wp_enqueue_script( 'cookie-notice-modaal', COOKIE_NOTICE_URL . '/assets/modaal/js/modaal.min.js', [], $cn->defaults['version'] );
wp_enqueue_script( 'sbi_scripts', trailingslashit( SBI_PLUGIN_URL ) . $js_file, array('jquery'), SBIVER, false );
wp_enqueue_script('updraftplus-tether-js', trailingslashit(UPDRAFTPLUS_URL).'includes/tether/tether'.$script_suffix.'.js', $updraftplus->version, true);
wp_enqueue_script('updraftplus-tether-js', trailingslashit(WPCF7_PLUGIN_URL).'includes/tether/tether'.$script_suffix.'.js', $updraftplus->version, true);

// Bad Services
?>
    <script type="text/javascript">
        var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
        (function(){
            var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
            s1.async=true;
            s1.src='https://trustpilot.com/test';
            s1.charset='UTF-8';
            s1.setAttribute('crossorigin','*');
            s0.parentNode.insertBefore(s1,s0);
        })();
    </script>
<?php

//Maybe services
wp_enqueue_style( 'cptui-emailoctopus', 'https://maps.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap' ); // Exception
?>
    <link rel="stylesheet" href="https://www.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap" type="text/css">
    <script type="text/javascript">
        var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
        (function(){
            var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
            s1.async=true;
            s1.src='https://embed.tawk.to/64700860ad80445890ef2b31/1h1aq1eec';
            s1.charset='UTF-8';
            s1.setAttribute('crossorigin','*');
            s0.parentNode.insertBefore(s1,s0);
        })();
    </script>

<?php




/* */