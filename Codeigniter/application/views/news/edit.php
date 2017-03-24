<h2><?php echo $title; ?></h2>
 
<?php echo validation_errors(); ?>
 
<?php echo form_open('news/edit/'.$news_item['id']); ?>
    <table>
		<tr>
            <td><label for="Complete_Name">Full Name</label></td>
            <td><input type="text" name="Complete_Name" size="32" value="<?php echo $news_item['Complete_Name'] ?>" /></td>
        </tr>
		 <tr>
            <td><label for="Nickname">Nickname</label></td>
            <td><input type="text" name="Nickname" size="8" value="<?php echo $news_item['Nickname'] ?>" /></td>
        </tr>
		 <tr>
            <td><label for="Email_Address">Email</label></td>
            <td><input type="email" name="Email_Address" size="32" value="<?php echo $news_item['Email_Address'] ?>" /></td>
        </tr>
		 <tr>
            <td><label for="Home_Address">Home Address</label></td>
            <td><input type="text" name="Home_Address" size="36" value="<?php echo $news_item['Home_Address'] ?>" /></td>
        </tr>
		<tr>
            <td><label for="Gender">Gender</label></td>
            <td><input type="radio" name="Gender" value="Female" required
				<?php if (isset($news_item['Gender']) && $news_item['Gender']=="Female") echo 'checked';?>>Female
				<input type="radio" name="Gender" value="Male" required 
				<?php if (isset($news_item['Gender']) && $news_item['Gender']=="Male") echo 'checked';?>>Male
			</td>
        </tr>
		 <tr>
            <td><label for="Cell_phone_number">Cellphone Number</label></td>
            <td><input type="tel" name="Cell_phone_number" size="11" value="<?php echo $news_item['Cell_phone_number'] ?>" /></td>
        </tr>
		 <tr>
            <td><label for="Comments">Comments</label></td>
            <td><textarea name="Comments" rows="10" cols="40" size="300"><?php echo $news_item['Comments'] ?></textarea></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="submit" value="Edit news item" /></td>
        </tr>
    </table>
</form>