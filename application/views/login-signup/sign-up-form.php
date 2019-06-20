<div id="content">
               <div class="container">
                  <div class="page-header-title">
                  </div>
                  <div class="row justify-content-md-center">
                     <div class="col-lg-6 col-md-10 col-xs-12">
						<form data-toggle="validator" role="form" id="registration-form">
                        <div id="register-form">
                           <h2 class="heading-title" style="color:#EB586F;">Register</h2>
                           <h3 class="log-title" style="font-size:15px;">Start your preparation with Interview Mania</h3>
                           <div class="form-group">
                              <input type="text" class="form-control" id="full-name" placeholder="&#xf007;     Full Name" required data-error="Please fill out your full name.">
                              <div class="help-block with-errors" id="full-name-error"></div>
                           </div>
                           <div class="form-group">
                              <input type="email" class="form-control" id="email-id" placeholder="&#xf0e0;     Email" required data-error="Please enter a valid email id.">
                              <div class="help-block with-errors" id="email-id-error"></div>
                           </div>
                           <div class="form-group">
                              <input type="tel" class="form-control" id="mobile-number" placeholder="&#xf095;     Mobile Number"  pattern="^\d{10}$" required data-error="Please enter a valid 10 digit mobile number.">
                              <div class="help-block with-errors" id="mobile-number-error"></div>
                           </div>
                           <div class="form-group">
                              <input type="password" class="form-control" id="password" placeholder="&#xf13e;     Password" data-minlength="6" required data-error="Minimum of 6 characters.">
                              <div class="help-block with-errors" id="password-error"></div>
                           </div>
                           <div class="form-group">
                              <input type="password" class="form-control" id="confirm-password" placeholder="&#xf023;     Confirm Password" required data-match="#password" data-error="Oops, password don't match.">
                              <div class="help-block with-errors" id="confirm-password-error"></div>
                           </div>
                           <div class="log-line">
                              <div class="pull-left">
                                 <div class="checkbox checkbox-primary space-bottom">
                                    <label class="hide"><input type="checkbox"></label>
                                    <input id="terms-and-conditions" type="checkbox" checked="">
                                    <label for="terms-and-conditions"><span><a href="/terms-and-conditions">Terms & Conditions</a></span></label>
                                 </div>
                              </div>
                           </div>
                           <div>
                              <button type="submit" id="registration-form-submit-button" class="btn btn-filled btn-log margin-right"><i class="fa fa-sign-in"></i> <span>Register</span></button><br/>
                              <button type="button" class="btn-social btn-facebook-filled btn-log margin-right"><i class="fa fa-facebook"></i> <span> Register with Facebook</span></button>
                              <button type="button" class="btn-social btn-twitter-filled btn-log margin-right"><i class="fa fa-google"></i> <span> Register with Google</span></button>
                           </div>
                           <div>
                              <h5>
                                 <span>Already have an account ?<span>
                                 <span><a href="/login">Login</a></span>
                              </h5>
                           </div>
                        </div>
						</form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>