<div id="content">
   <div class="container">
      <div class="row justify-content-md-center">
         <div class="col-lg-10 col-md-12 col-xs-12">
            <form data-toggle="validator">
               <div class="form-group row" style="margin-bottom:0rem;" style="margin-bottom:0rem;">
                  <label class="col-sm-3 col-form-label text-label-alignment"><strong></strong></label>
                  <div class="col-sm-9"  style="padding:110px 0 30px 0;">
					<h1 class="section-title" style="color:#ff6670;">Add Tutorial</h1>
                  </div>
               </div>
               <div class="form-group row" style="margin-bottom:0rem;" style="margin-bottom:0rem;">
                  <label  class="col-sm-3 col-form-label text-right" style="font-size: 18px; font-family: sans-serif;"><strong>Parent Topic :</strong></label>
                  <div class="col-sm-9">
                     <select name="primary_topic" id="primary_topic" class="form-control" style="margin-bottom:20px;">
                        <option value="">Select</option>
                        <?php foreach($primaryTopics as $primaryTopic){?>
                        	<option value="<?php echo $primaryTopic->topic_id; ?>"><?php echo $primaryTopic->topic_name; ?></option>
                        <?php }?>
                        
                     </select>
                     <div class="help-block with-errors"></div>
                  </div>
               </div>
               <div class="form-group row" style="margin-bottom:0rem;">
                  <label  class="col-sm-3 col-form-label text-right" style="font-size: 18px; font-family: sans-serif;"><strong>Topic Name :</strong></label>
                  <div class="col-sm-9">
                     <select name="topic" id="topic" class="form-control"  data-error="Please select this field" style="margin-bottom:20px;">
                        <option value="">Select</option>
                     </select>
                     <div class="help-block with-errors"></div>
                  </div>
               </div>
               <div class="form-group row" style="margin-bottom:0rem;">
                  <label  class="col-sm-3 col-form-label text-right" style="font-size: 18px; font-family: sans-serif;"><strong>Sub Topic :</strong></label>
                  <div class="col-sm-9">
                     <select name="sub_topic" id="sub_topic" class="form-control"  data-error="Please select this field" style="margin-bottom:20px;">
                        <option value="">Select</option>
                     </select>
                     <div class="help-block with-errors"></div>
                  </div>
               </div>
               <div class="form-group row" style="margin-bottom:0rem;">
                  <label  class="col-sm-3 col-form-label text-right" style="font-size: 18px; font-family: sans-serif;"><strong>Tutorial :</strong></label>
                  <div class="col-sm-9">
                     <textarea id="tutorial" class="form-control" rows="7"  required  data-error="Please fill out this field" style="margin-bottom:20px;"></textarea>
                     <div class="help-block with-errors"></div>
                  </div>
               </div>
               <div class="form-group row" style="margin-bottom:0rem;">
                  <div class="col-sm-3"></div>
                  <div class="col-sm-9">
                     <div class="text-center" >
                                             <button class="btn btn-common log-btn" style="border-radius:23px">Submit</button>
                                          </div>
                     <br/><br/>
                     <div class="alert alert-danger" role="alert" id='error_msg' style="display:none;"></div>
                     <div class="alert alert-success" id='success_msg' style="display:none;"></div>
                  </div>
               </div>
            </form>
         </div>
      </div>
   </div>
</div>