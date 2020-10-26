<section>
  <?
  $form = array(
    'title' => 'Welcome back!',,
    'method' => 'POST',
    'action' => 'sign_in'
    'elements' => array(
      'Pseudo, email or phone number' => array(
        'type' => 'text',
        'name' => 'input_userid',
        'placeholder' => 'Pseudo, email or phone number',
        'required' => true
      ),
      'Password' => array(
        'type' => 'password',
        'name' => 'input_password',
        'placeholder' => 'Password',
        'required' => true
      ),
      'Sign In' => array(
        'form_item' => 'button',
        'type' => 'submit',
      ),
      'Forgot password?' => array(
        'action' => ''
      ),
      "Don't have an account?",
      'Sign Up' => array(
        'action' => 'sign_up'
      )
    )
  );

  require 'helper/class/form.php';
  write_form($form);
  ?>
</section>
