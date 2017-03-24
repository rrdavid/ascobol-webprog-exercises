<h2><?php echo $title; ?></h2>
 
<?php echo validation_errors(); ?>
 
<?php echo form_open('news/create'); ?>    
    <table>
		 <tr>
            <td><label for="Complete_Name">Complete Name</label></td>
            <td><input type="text" name="Complete_Name" size="32" /></td>
        </tr>
		 <tr>
            <td><label for="Nickname">Nickname</label></td>
            <td><input type="text" name="Nickname" size="8" /></td>
        </tr>
		 <tr>
            <td><label for="Email_Address">Email</label></td>
            <td><input type="email" name="Email_Address" size="32" /></td>
        </tr>
		 <tr>
            <td><label for="Home_Address">Home Address</label></td>
            <td><input type="text" name="Home_Address" size="36" /></td>
        </tr>
		<tr>
            <td><label for="Gender">Gender</label></td>
            <td><input type="radio" name="Gender" value="Female" required>Female
				<input type="radio" name="Gender" value="Male" required>Male 
			</td>
        </tr>
		 <tr>
            <td><label for="Cell_phone_number">Cellphone Number</label></td>
            <td><input type="number" name="Cell_phone_number" size="11"/></td>
        </tr>
		 <tr>
            <td><label for="Comments">Comments</label></td>
            <td><textarea name="Comments" rows="10" cols="40" size="300"></textarea></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="submit" value="Create news item" /></td>
        </tr>
    </table>    
</form>