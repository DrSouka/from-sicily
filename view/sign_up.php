<section>
  <form method='POST' action="index.php?action=sign_up">
    <h2>Welcome !</h2>
    <div>
      <div>
        <div>
          <label>Firstname</label>
          <input type="text" name="input_firstname" placeholder="Firstname" required>
        </div>
        <div>
          <label>Lastname</label>
          <input type="text" name="input_lastname" placeholder="Lastname" required>
        </div>
        <div>
          <label>Pseudo</label>
          <input type="text" name="input_pseudo" placeholder="Pseudo" required>
        </div>
        <div>
          <label>Email</label>
          <input type="email" name="input_email" placeholder="Email" required>
        </div>
        <div>
          <label>Phone Number</label>
          <input type="text" name="input_phoneNumber" placeholder="Phone number" required>
        </div>
        <div>
          <label>Password</label>
          <input type="password" name="input_password" placeholder="Password" required>
        </div>
        <div>
          <label>Confirm</label>
          <input type="password" name="input_confirm" placeholder="Confirm" required>
        </div>
      </div>
      <button type="submit">Sign Up</button></br>
      <div>
        Already have an account ?
        <a href="index.php?action=sign_in">Sign In</a>
      </div>
    </div>
  </form>
</section>
