
<HTML>
<HEAD>
<TITLE> Hari eka oone na </TITLE>

</HEAD>
<BODY>
<?php if(isset($vehicles) && !empty($vehicles)){print_r($vehicles);?>
<?php foreach($vehicles as $vehicle){?>
	<table align="center" style="border: solid 1px; width: 600px;">
		<tr>
			<td style="width: 175px"><img alt="" src="<?php echo base_url();?>assets/vehicle/1.jpg"></td>
			<td valign="top" align="left">
				<table>
					<tr><td>Make</td><td><?php echo $vehicle['name'];?></td></tr>
					<tr><td>Year</td><td><?php echo $vehicle['year'];?></td></tr>
					<tr><td>Price</td><td><?php echo number_format($vehicle['price']);?></td></tr>					
				</table>
			</td>
		</tr>
		<tr>
			<td colspan="2"><?php echo $vehicle['description'];?></td>
		</tr>
	</table>
<?php }?>
<?php }else{?>
<table align="center" style="border: solid 1px;">		
		<tr>
			<td>No vehicles found!!</td>
		</tr>
	</table>
<?php }?>
</BODY>

</HTML>

<?php ?>