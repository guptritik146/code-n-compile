<section class="about-us py-5" style="padding-top: 6rem !important;">
   <div class="container">
   <div class="inner-sec-w3ls py-lg-5 py-3">
   <div class="heading">
      <h1 class="section-title"><?php echo $tutorials[0]->tutorial_title;?></h1>
   </div>
   <div class="row">
   <div class="col-lg-9 col-md-12 " id = "tutorial_body">
      <div class="container py-md-3">
         <div class="heading mb-5">
           <?php echo $tutorials[0]->tutorial_body;?>
      </div>
   </div>
   <!--- END COL -->		
   <!-- Categories Widget -->
   <div class="col-lg-3 col-md-12 col-xs-12 page-sidebar">
      <aside>
         <!-- Categories Widget -->
         <div class="widget categories">
            <h4 class="widget-title" style="font-weight: bold;"> <?php echo $currentPrimaryTopic[0]->topic_name; ?></h4>
            <ul class="categories-list" style="padding: 5px 15px 15px 15px;">
               <?php foreach($childTopics as $childTopic){ if($childTopic->topic_type == 'PRIMARY_TOPIC'){continue;} $color= '#000';?>
				<?php if($childTopic->topic_type == 'TOPIC'){?>			   
			   <li>
                  <a href="/tutorials/<?php echo $childTopic->topic_code; ?>" style="color:#000;font-weight:bold"><i class="lni-book"></i><?php echo $childTopic->topic_name; ?></a>
               </li>
			   <?php } else if($childTopic->topic_type == 'SUB_TOPIC'){  if($childTopic->topic_id == $tutorials[0]->tutorial_topic_id){$color="#00cc67";}?>
				<li>
                  <a href="/tutorials/<?php echo $childTopic->topic_code; ?>" style="color:<?php echo $color;?>; padding-left: 30px; padding-top: 1px;"><i class="lni-angle-double-right"></i><?php echo $childTopic->topic_name; ?></a>
				</li>
			   <?php } }?>
            </ul>
         </div>
         <div class="widget categories">
            <h4 class="widget-title">Related Categories</h4>
            <ul class="categories-list">
               <li>
                  <a href="#" style="color:#000;font-weight:bold">
                  <i class="lni-dinner"></i>
                  OOP concepts <span class="category-counter">(5)</span>
                  </a>
               </li>
               <li>
                  <a href="#" style="color:#000;font-weight:bold">
                  <i class="lni-control-panel"></i>
                  Inheritance <span class="category-counter">(8)</span>
                  </a>
               </li>
               <li>
                  <a href="#" style="color:#000;font-weight:bold">
                  <i class="lni-github"></i>
                  Operators <span class="category-counter">(2)</span>
                  </a>
               </li>
               <li>
                  <a href="#" style="color:#000;font-weight:bold">
                  <i class="lni-coffee-cup"></i>
                  Strings in Java <span class="category-counter">(3)</span>
                  </a>
               </li>
               <li>
                  <a href="#" style="color:#000;font-weight:bold">
                  <i class="lni-home"></i>
                  Arrays in Java <span class="category-counter">(4)</span>
                  </a>
               </li>
               <li>
                  <a href="#" style="color:#000;font-weight:bold">
                  <i class="lni-pencil"></i>
                  Stream in Java <span class="category-counter">(5)</span>
                  </a>
               </li>
               <li>
                  <a href="#" style="color:#000;font-weight:bold">
                  <i class="lni-display"></i>
                  Methods in Java <span class="category-counter">(9)</span>
                  </a>
               </li>
               <li>
                  <a href="#" style="color:#000;font-weight:bold">
                  <i class="lni-display"></i>
                  Constructors <span class="category-counter">(9)</span>
                  </a>
               </li>
               <li>
                  <a href="#" style="color:#000;font-weight:bold">
                  <i class="lni-display"></i>
                  Exception Handling <span class="category-counter">(9)</span>
                  </a>
               </li>
               <li>
                  <a href="#" style="color:#000;font-weight:bold">
                  <i class="lni-display"></i>
                  Interfaces and Abstract Classes <span class="category-counter">(9)</span>
                  </a>
               </li>
               <li>
                  <a href="#" style="color:#000;font-weight:bold">
                  <i class="lni-display"></i>
                  Apache in Java <span class="category-counter">(9)</span>
                  </a>
               </li>
               <li>
                  <a href="#" style="color:#000;font-weight:bold">
                  <i class="lni-display"></i>
                  Networking in Java <span class="category-counter">(9)</span>
                  </a>
               </li>
            </ul>
         </div>
      </aside>
   </div>
   <!-- Start Pagination -->
   <div class="pagination-bar" style = "align:center">
      <nav>
         <ul class="pagination">
            <li class="page-item"><a class="page-link active" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item"><a class="page-link" href="#">Next</a></li>
         </ul>
      </nav>
   </div>
   <!-- End Pagination -->
</section>