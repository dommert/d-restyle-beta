<DIV id="login_form">
  <div class="row">
    <div class="large-6 columns" id="form_sex">
    <form method="post" action="<?php echo GLOBALS['url'] . '/login' ?>" data-abide> 
    <div class="user-field" id="username"> 
    <label>Username (Email) <small>required</small></label> 
    <input type="email" name="username" required> 
    <small class="error">Email address is Required</small> </div> 
    <div class="password-field" id="password"> 
    <label>Password <small>required</small></label> 
    <input type="password" name="password" required> <small class="error">Alpha-Numeric password is required.</small> </div> 
    <button type="submit" name="submit">Submit</button> 
    </form>
    </div>
  </div>
</DIV>