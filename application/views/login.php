<html>
<?php echo validation_errors(); ?>
<?php echo form_open('login/formsubmit'); ?>
<table>
<tr>
<td>�û���</td>
<td><input type="text" name="username"></td>
</tr>
<tr>
<td>����</td>
<td><input type="password" name="password"></td>
</tr>
<tr>
<td>
<input type="submit" name="submit" value="login">
</td>
<td>
<input type="submit" name="submit" value="register">
</td>
</tr>
</table>
</form>
</html>