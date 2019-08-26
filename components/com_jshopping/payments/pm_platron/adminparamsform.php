<div class="col100">
<fieldset class="adminform">
<table class="admintable" width = "100%" >
	<tr>
		<td style="width:250px;" class="key">
		<?php echo _JSHOP_TESTMODE;?>
		</td>
		<td>
		<?php              
		print JHTML::_('select.booleanlist', 'pm_params[test_mode]', 'class = "inputbox" size = "1"', $params['test_mode']);
		echo " ".JHTML::tooltip(_JSHOP_PLATRON_TEST_MODE_DESCRIPTION);
		?>
		</td>
	</tr>
	<tr>
		<td  class="key">
		<?php echo _JSHOP_PLATRON_MERCHANT_ID;?>
		</td>
		<td>
		<input type = "text" class = "inputbox" name = "pm_params[merchant_id]" size="5" value = "<?php echo $params['merchant_id']?>" />
		<?php echo JHTML::tooltip(_JSHOP_PLATRON_MERCHANT_ID_DESCRIPTION);?>
		</td>
	</tr>
	<tr>
		<td  class="key">
		<?php echo _JSHOP_PLATRON_SECRET_KEY;?>
		</td>
		<td>
		<input type = "text" class = "inputbox" name = "pm_params[secret_key]" size="30" value = "<?php echo $params['secret_key']?>" />
		<?php echo JHTML::tooltip(_JSHOP_PLATRON_SECRET_KEY_DESCRIPTION);?>
		</td>
	</tr>
	<tr>
		<td  class="key">
		<?php echo _JSHOP_PLATRON_LIFETIME;?>
		</td>
		<td>
		<input type = "text" class = "inputbox" name = "pm_params[lifetime]" size="30" value = "<?php echo $params['lifetime']?>" />
		<?php echo JHTML::tooltip(_JSHOP_PLATRON_LIFETIME_DESCRIPTION);?>
		</td>
	</tr>
	<tr>
		<td class="key">
		<?php echo _JSHOP_TRANSACTION_END;?>
		</td>
		<td>
		<?php              
		print JHTML::_('select.genericlist', $orders->getAllOrderStatus(), 'pm_params[transaction_end_status]', 'class = "inputbox" size = "1"', 'status_id', 'name', $params['transaction_end_status'] );
		echo " ".JHTML::tooltip(_JSHOP_PLATRON_TRANSACTION_END_DESCRIPTION);
		?>
		</td>
	</tr>
	<tr>
		<td class="key">
		<?php echo _JSHOP_TRANSACTION_PENDING;?>
		</td>
		<td>
		<?php 
		echo JHTML::_('select.genericlist',$orders->getAllOrderStatus(), 'pm_params[transaction_pending_status]', 'class = "inputbox" size = "1"', 'status_id', 'name', $params['transaction_pending_status']);
		echo " ".JHTML::tooltip(_JSHOP_PLATRON_TRANSACTION_PENDING_DESCRIPTION);
		?>
		</td>
	</tr>
	<tr>
		<td class="key">
		<?php echo _JSHOP_TRANSACTION_FAILED;?>
		</td>
		<td>
		<?php 
		echo JHTML::_('select.genericlist',$orders->getAllOrderStatus(), 'pm_params[transaction_failed_status]', 'class = "inputbox" size = "1"', 'status_id', 'name', $params['transaction_failed_status']);
		echo " ".JHTML::tooltip(_JSHOP_PLATRON_TRANSACTION_FAILED_DESCRIPTION);
		?>
		</td>
	</tr>

	<tr>
		<td style="width:250px;" class="key">
		<?php echo _JSHOP_PLATRON_TRANSACTION_CREATE_OFD_CHECK;?>
		</td>
		<td>
		<?php              
		print JHTML::_('select.booleanlist', 'pm_params[create_ofd_check]', 'class = "inputbox" size = "1"', $params['create_ofd_check']);
		echo " ".JHTML::tooltip(_JSHOP_PLATRON_TRANSACTION_CREATE_OFD_CHECK_DESCRIPTION);
		?>
		</td>
	</tr>

	<tr>
		<td style="width:250px;" class="key">
		<?php echo _JSHOP_PLATRON_TRANSACTION_CREATE_OFD_VAT;?>
		</td>
		<td>
		<?php              
		print JHTML::_('select.genericlist', array(
			'none' => 'none',
			'0' => '0%',
			'10' => '10%',
			'20' => '20%',
			'110' => '10/110',
			'120' => '20/120',
		), 'pm_params[ofd_check_vat]', 'class = "inputbox" size = "1"', $params['ofd_check_vat']);
		echo " ".JHTML::tooltip(_JSHOP_PLATRON_TRANSACTION_CREATE_OFD_VAT_DESCRIPTION);
		?>
		</td>
	</tr>
</table>
</fieldset>   
<div class="clr"></div>