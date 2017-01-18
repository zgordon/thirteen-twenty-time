<div class="wrap">


	<div id="icon-options-general" class="icon32"></div>
	<h2>13:20 Time WordPress Plugin</h2>
	

	<div id="poststuff">
	
		<div id="post-body" class="metabox-holder columns-2">
		
			<!-- main content -->
			<div id="post-body-content">
				
				<div class="meta-box-sortables ui-sortable">

					<div class="postbox">
						<h3><span>Setup</span></h3>
						<div class="inside">

						<?php if( $kin_added != true  ): ?>
							
							<form name="add_kin_form" method="post" action="">							
							<input type="hidden" name="add_kin_form_submitted" value="true">

							<p>Click on the button below to add the basic information for 
								all 260 into your site under the "260 Kin" custom post type.</p>
							<p>You will then have the option to add custom descriptions for 
								each kin if you like.</p>

							<p>
								<input class="button-primary" type="submit" name="add_kin_submit" value="Add Kin" /> 
							</p>

							</form>

						<?php else: ?>

							<form name="add_kin_form" method="post" action="">							
							<input type="hidden" name="remove_kin_form_submitted" value="true">

							<p>The option below will delete all of the kin posts added under 260 Kin.</p>
							<p><strong>Warning:</strong> this will remove any custom descriptions you have added.</p>

							<p>
								<input class="button-primary" type="submit" name="add_kin_submit" value="Remove Kin" /> 
							</p>

							</form>


						<?php endif; ?>


						<?php get_all_kin(); ?>

						</div>
					</div>


				</div>
			
			</div>

		</div>

	</div>

</div>