<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<script type="text/javascript" src="http://ecn.dev.virtualearth.net/mapcontrol/mapcontrol.ashx?v=7.0"></script>
      <script type="text/javascript">
      var map = null;
            
      function getMap()
      {
        map = new Microsoft.Maps.Map(document.getElementById('myMap'), {credentials: 'AnsoNgDYugeywNKNb-_TyLVU-Z9ilZw35CwB6b7p3wBzri47TligkJGFtuG-t1Wt', center: new Microsoft.Maps.Location(<?=$event['mbapi']['loc']['lat'];?>,<?=$event['mbapi']['loc']['lng'];?>), mapTypeId: Microsoft.Maps.MapTypeId.birdseye, zoom: 18});  
      }   
      </script>

<div class="container-fliud">
	<div class="row-fliud">
		<div class="span10 well">
			<h2><?php echo($event['mbapi']['name']);?></h2>
			<p><?php echo($event['mbapi']['description']);?></p>
			<div id='myMap' style="position:relative; width:600px; height:300px;"></div>
		</div>
		<div class="span2 well">
			<p>This event is being hosted by <em><?=$event['host'];?></em></p>
			<a href="#" class="btn btn-primary">Request an Invite</a>
			<a href="#" class="btn btn-success">Checkin</a>
		</div>
	</div>
</div>
<script type="text/javascript">getMap();</script>
