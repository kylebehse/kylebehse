<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Company - Contact Us</title>
<link href="/css/styles-contact.css" rel="stylesheet" type="text/css">
<?php include($_SERVER['DOCUMENT_ROOT']."/includes/en/"."head.php"); ?>

<!--START GOOGLE MAPS-->

<meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
<script src="http://maps.google.com/maps/api/js?sensor=false" type="text/javascript"></script>
<script type="text/javascript">
  function initialize() {
    var latlng = new google.maps.LatLng(50.4998682, -116.0447687);
    var myOptions = {
      zoom: 8,
      center: latlng,
      mapTypeId: google.maps.MapTypeId.ROADMAP
    };
    var map = new google.maps.Map(document.getElementById("map_canvas"),
        myOptions);
  }

</script>
</head>

<body id="contact" onLoad="initialize()">
<div id="container">

    <?php	include($_SERVER['DOCUMENT_ROOT']."/includes/en/"."header.php"); ?>
    
    <div id="content_container" class="">
    <div id="content" class="container_12">
      <h2>Contact</h2>
      <div id="column_1" class="grid_6 omega">
        <div id="contact_form" class="">
          <form id=contact_form action="/scripts/contact_parse.php" method="post">
            <fieldset>
              <legend>Send Us an Email</legend>
              <ol>
                <li>
                  <label for=name>Name</label>
                  <input id=name name=userName type=text placeholder="First and last name" required autofocus>
                </li>
                <li>
                  <label for=email>Email</label>
                  <input id=email name=userEmail type=email placeholder="example@domain.com" required>
                </li>
                <li>
                  <label for=phone>Phone</label>
                  <input id=phone name=userPhone type=tel placeholder="Eg. +1-475-527-0000" required>
                </li>
                <li>
                  <label for=address>Message</label>
                  <textarea id=address name=userMsg rows=7 required></textarea>
                </li>
              </ol>
            </fieldset>
            <fieldset>
              <button type=submit>Submit!</button>
            </fieldset>
          </form>
        </div><!--END CONTACT_FORM-->
      </div><!--END_COLUMN_1-->
      <div id="column_2" class="grid_8 push_1 omega">
        <div id="company_info">
          <p>Company Name<br />
            1234 Address Street City Provience, PoS tAl<br />
            ph: 555.555.5555</p>
        </div><!--END COMPANY_INFO-->
        <div id="map_container">
          <div id="map_canvas"></div>
        </div><!--END MAP_CONTAINER-->
      </div><!--END_COLUMN_2-->
      <div class="clear"></div>
    </div><!--END CONTENT-->
  </div><!--END CONTENT_CONTAINER-->
<?php include($_SERVER['DOCUMENT_ROOT']."/includes/en/"."footer.php"); ?>
</div> <!--END CONTAINER-->
</body>
</html>
