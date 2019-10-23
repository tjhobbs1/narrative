
<?php
$base = $_POST["base"];
$sending = $_POST["sending"];
$ifrVfr = $_POST['ifrVfr'];
$sceneHosp = $_POST['sceneHosp'];
$ptDescrp = $_POST['ptDescription'];
$airway = $_POST['airway'];
$ett = $_POST['ett'];
$ettDepth = $_POST['ettDepth'];
$securedAt = $_POST['securedAt'];
$device = $_POST['device'];
$ett = $_POST['ett'];
$airwayText =$_POST['airwayText'];
$breathing = $_POST['breathing'];
$breathingText = $_POST['breathingText'];
$circ = $_POST['circ'];
$circText = $_POST['circText'];
$loc = $_POST['loc'];



?>

<div class="">
  MercyOne AirMed <?php echo $base; ?> was dispatched to <?php echo $sending." " .$ifrVfr. " " ?>
  for a <?php echo $sceneHosp; ?> flight for a <?php echo $ptDescrp   ?>

</div>


<div class="primary">
  <h3>Primary Assessment</h3>
Airway:
  <?php if($airway =='Secured'){
    echo "Secured with a ".$ett. "mm
    ".$device. " secure at
    ".$ettDepth."cm
    at the ".$securedAt.". ".$airwayText;
  }else{
    echo $airway." ".$airwayText;
  } ?>
<br>
Breathing: <?php echo $breathing?> <?php echo $breathingText?>
<br>
Circulation: <?php echo $circ?> <?php echo $circText?>
<br>
Level of Consciousness: <?php echo $loc?>


</div><!--End Primary-->

<div class="secondary">
  <h3>Secondary Assessment</h3>


</div>
