<html>
<head>
<link type='text/css'  href='http://earlyiq.dev/sites/all/libraries/modal/css/osx.css' rel='stylesheet' media='screen' />
</head>
<body>
<p>no param test</p>

<?php
$types='rc-id-001';
if (isset($_GET['suffix'])) {
    $x =  $_GET['suffix'];
} else { 
    $x =  date('mdhis'); 
}
?>

<a href='#' 
  id="getstarted" 
  class='osx demo-button'  
  data-iframe-height="690"
  data-iframe-src="http://earlyiq.dev/partner/realconnex/cert/getstarted?page_template=modal&first_name=John<?php echo $x; ?>
  &type=<?php echo $types; ?>
  &last_name=Smith
  &email=modal%2B<?php echo $x; ?>%40earlyiq.com
  &api_key1=C2kwXvd4cN3wa642GvwMVMPfeWaozmpm1jLPBxT9uKo%3D
  &no_password=1
  &dob=MTk4MDAxMzE%3D
  &gender=M
  &ssn=NTU1NDQzMzMz
  &country=&address1=777 DeYeeWee St
  &city=&state=&postal=92024
">Get Verified</a>


<p>&nbsp;</p>
<p>&nbsp;</p>
<a href='http://www.earlyiq.com/terms-use' target="new">See our terms of use</a>

<!-- actual div that should be inserted at bottom of page -->
<div id="osx-modal-content">
    <div id="osx-modal-title">Verification</div>
    <div class="close"><a href="#" class="simplemodal-close">x</a></div>
    <div id="osx-loading"></div>
    <div id="osx-modal-data"></div>
</div>  

<!-- javascript that should be inserted at bottom of page -->
<script type="text/javascript" src="http://earlyiq.dev/sites/all/modules/contrib/jquery_update/replace/jquery/1.8/jquery.min.js?v=1.8.2"></script>
<script type='text/javascript' src='http://earlyiq.dev/sites/all/libraries/modal/js/jquery.simplemodal.js'></script>
<script type='text/javascript' src='http://earlyiq.dev/sites/all/libraries/modal/js/earlyiq.min.js'></script>
<script type='text/javascript' src='http://earlyiq.dev/sites/all/libraries/modal/js/jquery.ba-postmessage.min.js'></script>


</body>
</html>
