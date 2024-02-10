<?php

$form_data = get_option('afs_form_data');

?>


<form id="afs-form" action="afs_form_submit">
    <label for="name">Name</label>
    <input class="form-control" type="text" id="name" name="name" value="<?php echo $form_data['name'];?>" placeholder="Enter Your Name">
    <br>
    <br>
    <label for="email">Email</label>
    <input class="form-control" type="email" name="email"  id="email"  value="<?php echo $form_data['email'];?>" placeholder="Enter Your Email">
    <br>
    <br>
    <label for="phone">Phone</label>
    <input class="form-control" type="number" id="phone" name="phone" value="<?php echo $form_data['phone'];?>"  placeholder="Your phone number">
    <br>
    <br>
    <label for="password">Password</label>
    <input class="form-control" type="password" id="password" name="password"  value="<?php echo $form_data['password'];?>"  placeholder="Your Password">
    <br>
    <br>
    <label for="subject">Subject</label>
    <label for="subject">Choose Your Subject</label>
    <select class="form-control" id="subject" name="subject">
        <option value="bangle" <?php echo $form_data['subject'] == 'bangle' ? 'selected' : ''; ?>>bangla</option>
        <option value="english" <?php echo $form_data['subject'] == 'english' ? 'selected' : ''; ?>>english</option>
        <option value="sociology" <?php echo $form_data['subject'] == 'sociology' ? 'selected' : ''; ?>>socilogy</option>
        <option value="history" <?php echo $form_data['subject'] == 'history' ? 'selected' : ''; ?>>history</option>
    </select>
    <br>
    <br>
    <input type="submit" name="submit" id="afs_form_submit" value="submit">
</form>
