<!DOCTYPE html>
 
<head>
<meta charset="UTF-8" />
<title>jQuery UI</title>
<link rel="stylesheet"
  href="http://code.jquery.com/ui/1.10.4/themes/redmond/jquery-ui.min.css" />
<style>
</style>
</head>
 
<form>
  <input type="text" id="date" size="10"/>
</form>
<span id="details"></span>
<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<script src="http://code.jquery.com/ui/1.10.4/jquery-ui.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/i18n/jquery-ui-i18n.min.js"></script>
<script>
$(function() {
  $.datepicker.setDefaults($.datepicker.regional['ko']);
  $('#date').datepicker(
          {
            showOn:'button',
            buttonImage : 'icon/image.png',
            buttonImageOnly:false
          }
  );
});
</script>