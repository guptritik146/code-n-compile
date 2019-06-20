<div id="content">
   <div class="container">
      <div class="page-header-title" style="padding-top:90px">
      </div>
      <div class="row justify-content-md-center">
         <div class="col-lg-6 col-md-10 col-xs-12">
            <form data-toggle="validator">
               <div id="register-form">
                  <h2 class="heading-title" style="font-size:25px; color:#EB586F;">Password assistance</h2>
                  <h3 class="log-title" style="font-size:15px; color:#444;">Create new password</h3>
                  <div class="form-group">
                        <input type="password" class="form-control" id="password" placeholder="&#xf13e;     Password" minlength="8" pattern="^(?=.*[!@#\$%\^\&*?+=._-])(?=.*[A-Z]).{8,}$" required data-error="*Please fill out this field">
                     <div class="help-block with-errors"></div>
                  </div>
                  <div class="form-group">
                        <input type="password" class="form-control" id="cpassword" placeholder="&#xf023;     Confirm Password"  data-match="#password" data-error="Oops, password don't match." required>
                     <div class="help-block with-errors"></div>
                  </div>
                  <div>
                     <button type="submit" id="password-change-button" class="btn btn-filled btn-log margin-right"><i class="fa fa-sign-in"></i> <span>Change Password</span></button></br>
                  </div>
                  <div>
                     <h5><a href ="#">Skip</h5>
                     </a>
                  </div>
            </form>
            </div>
         </div>
      </div>
   </div>
</div>
</div>