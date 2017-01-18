<style>
	iframe {border: none; overflow: visible; padding-bottom: 10px; height: 400px;}
	p.date-format {margin: 0 10px;font-size: 11px; padding: 0; font-family: Arial, Helvetica; color: #999}
	em {padding: 0 13px 0 2px; visibility: hidden;}
</style>
<script src="http://code.jquery.com/jquery.min.js"></script>
<script src="http://1320time.net/assets/js/jquery.autotab.js"></script>
<script>
	$(document).ready(function(){
		var today = new Date();
		var day = today.getDate();
		var month = today.getMonth()+1;
		var year = today.getFullYear();
		$("#day").val(day);
		//$("#day").select();				
		$("#month").val(month);
		$("#year").val(year);

		//$("#day, #month, #year").autotab_magic().autotab_filter('numeric');
		$("#day, #month, #year").focus(function(){$(this).select()});	
		var url = 'http://api.1320time.net/widgets/simple_kin/' + day + '/' + month + '/' + year + '/';		
		updateiFrame(url);			
		
		$("#kinpicker").submit(function(e){ 
			e.preventDefault();
			day = $("#day").val();
			month = $("#month").val();
			year = $("#year").val();
			url = 'http://api.1320time.net/widgets/simple_kin/' + day + '/' + month + '/' + year + '/';			
			updateiFrame(url);
			$("#day").select();
		})		
		
		function updateiFrame(url) {
			$('#kin').attr('src', url);
		}
	})
</script>
<?php 
	$form_attributes = array('id' => 'kinpicker');
	echo form_open('widgets/kin_lookup', $form_attributes);

	$data = array(
              'name'        => 'day',
              'id'          => 'day',
              'placeholder'   => 'dd',              
              'maxlength'   => '2',
              'size'        => '2',
              'required'   => 'required',              
			  'autofocus'   => 'autofocus'
            );

	print form_input($data);
	
	$data = array(
              'name'        => 'month',
              'id'          => 'month',
              'placeholder'   => 'mm',              
              'maxlength'   => '2',
              'size'        => '2',
              'required'   => 'required'              
            );

	print form_input($data);

	$data = array(
              'name'        => 'year',
              'id'          => 'year',
              'placeholder'   => 'yyyy',              
              'maxlength'   => '4',
              'size'        => '4',
              'required'   => 'required'              
            );

	print form_input($data);
	
	print form_submit('submit', 'Find kin');
?>
<p class="date-format">dd <em>.</em> mm <em>.</em>yyyy</p>
</form>
<iframe id="kin" src="" scrolling="no">