<form method='post' action=''>
<input name='name' type='text' value='' />
<?php echo wp_nonce_field('handle_custom_form', 'rb_custom_form') ?>
<input type='submit' value='Submit'/>
</form>
