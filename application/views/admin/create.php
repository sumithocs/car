<form name="frmVehicle" enctype="multipart/form-data" method="post" action="<?php echo base_url();?>index.php/admin/crud/create">
<table>
<tr>
	<td>Make</td>
	<td>
		<select name="cmbMake">
			<?php foreach($makes as $make){?>
			<option value="<?php echo $make['makeid'];?>"><?php echo $make['name'];?></option>
			<?php } ?>
		</select>
	</td>
</tr><tr>
<td>Price</td><td><input type="text" size="25" name="txtPrice" placeholder="Expected price"></td>
</tr><tr>
<td>Negotiatable</td><td><input type="checkbox" name="chkNego" value="1"></td>
</tr><tr>
<td>Image</td><td><input type="file" size="25" name="flImage"></td>
</tr><tr>
<td colspan="2"><input type="submit" value="Save" name="btnSubmit"></td>
</tr>
</table>
</form>