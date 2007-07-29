<?php
/*

 Copyright (c) 2001 - 2007 Ampache.org
 All rights reserved.

 This program is free software; you can redistribute it and/or
 modify it under the terms of the GNU General Public License v2
 as published by the Free Software Foundation.

 This program is distributed in the hope that it will be useful,
 but WITHOUT ANY WARRANTY; without even the implied warranty of
 MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 GNU General Public License for more details.

 You should have received a copy of the GNU General Public License
 along with this program; if not, write to the Free Software
 Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA  02111-1307, USA.

*/
// Because this is a reset of the persons password make the form a little more secure
$form_string = generate_password('32'); 
$_SESSION['forms']['account'] = $form_string; 
?>
<?php Error::display('general'); ?>
<table class="tabledata">
<tr>
	<td><?php echo _('Name'); ?>:</td>
	<td>
		<input type="text" name="fullname" size="27" value="<?php echo scrub_out($client->fullname); ?>" />
	</td>
</tr>
<tr>
	<td><?php echo _('E-mail'); ?>:</td>
	<td>
		<input type="text" name="email" size="27" value="<?php echo scrub_out($client->email); ?>" />
	</td>
</tr>
<tr>
	<td><?php echo _('New Password'); ?>:</td>
	<td>
		<?php Error::display('password'); ?>
		<input type="password" name="password1" size="27" />
	</td>
</tr>
<tr>
	<td><?php echo _('Confirm Password'); ?>:</td>
	<td>
		<input type="password" name="password2" size="27" />
	</td>
</tr>
<tr>
	<td><?php echo _('Clear Stats'); ?>:</td>
	<td>
		<input type="checkbox" name="clear_stats" value="1" />
	</td>
</tr>
<tr>
	<td colspan="2">
		<input type="hidden" name="user_id" value="<?php echo scrub_out($client->id); ?>" />
		<input type="hidden" name="action" value="update_user" />
		<input type="hidden" name="tab" value="<?php echo scrub_out($_REQUEST['tab']); ?>" />
		<input type="hidden" name="form_string" value="<?php echo $form_string; ?>" />
		<input class="button" type="submit" value="<?php echo _('Update Account'); ?>" />
	</td>
</tr>
</table>
