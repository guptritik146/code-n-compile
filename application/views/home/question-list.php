    <!-- Main container Start -->  
    <div class="main-container section-padding">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-12 col-xs-12 page-sidebar">
            <aside>
              <!-- Searcg Widget -->
              <div class="widget widget_search">
                <form role="search" id="search-form">
                  <input type="search" class="form-control" autocomplete="off" name="s" placeholder="Search..." id="search-input" value="">
                  <button type="submit" id="search-submit" class="search-btn"><i class="lni-search"></i></button>
                </form>
              </div>
              <!-- Categories Widget -->
              <div class="widget categories">
                <h4 class="widget-title">Popular Questions</h4>
                <ul class="categories-list">
                <?php foreach($primaryTopics as $primaryTopic){?>
                  <li>
                    <a href="/questions/<?php echo $primaryTopic->topic_code;?>" style="color:#000;font-weight:bold;">
                      <i class="lni-dinner"></i>
                      <?php echo $primaryTopic->topic_name;?> <span class="category-counter">(<?php echo $primaryTopic->question_answer_count; ?>)</span>
                    </a>
                  </li>
                  <?php } ?>
                </ul>
              </div>
              <div class="widget">
                <h4 class="widget-title">Advertisement</h4>
                <div class="add-box">
                  <img class="img-fluid" src="/web-resource/assets/img/img1.jpg" alt="">
                </div>
              </div>
            </aside>
          </div>
          <div class="col-lg-9 col-md-12 col-xs-12 page-content">
            <!-- Product filter Start -->
            <div class="product-filter">
              <div class="short-name">
                <span>Showing (1 - 10 questions of <?php echo $questionCount;?> questions)</span>
              </div>
              <div class="Show-item">
                <span>Filter</span>
                <form class="woocommerce-ordering" method="post">
                  <label>
                    <select name="order" class="orderby">
                      <option value="latest">Latest</option>
                      <?php foreach($primaryTopics as $primaryTopic){?>
					  	<option value="<?php echo $primaryTopic->topic_code;?>"><?php echo $primaryTopic->topic_name;?></option>
                      <?php } ?>
                    </select>
                  </label>
                </form>
              </div>
              <ul class="nav nav-tabs">
                <li class="nav-item">
                  <a class="nav-link active" data-toggle="tab" href="#list-view"><i class="lni-list"></i></a>
                </li>
              </ul>
            </div>
            <!-- Product filter End -->

            <!-- Adds wrapper Start -->
            <div class="adds-wrapper">
              <div class="tab-content">
                <div id="grid-view" class="tab-pane fade">
                  <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                      <div class="featured-box">
                       
                        <div class="feature-content"   style="width: 100.00%;">
                          <div class="tg-product">
                            <a href="#">Mobiles > Accessories</a>
                          </div>
                          <h4><a href="ads-details.html" style="font-size:22px;">Python program to find all possible pairs with given sum</a></h4>
                          <span>Last Updated: 4 hours ago</span>
                          <ul class="address">
                            <li>
                              <a href="#"><i class="lni-map-marker"></i>New York</a>
                            </li>
                            <li>
                              <a href="#"><i class="lni-alarm-clock"></i> 7 Jan, 10:10 pm</a>
                            </li>
                            <li>
                              <a href="#"><i class="lni-user"></i> John Smith</a>
                            </li>
                            <li> 
                              <a href="#"><i class="lni-tag"></i> Mobile</a>
                            </li>
                          </ul>
                          <div class="btn-list">
                            <a class="btn-price" href="#">$ 25</a>
                            <a class="btn btn-common" href="ads-details.html">
                              <i class="lni-list"></i>
                              View Details
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                      <div class="featured-box">
                       
                        <div class="feature-content"   style="width: 100.00%;">
                          <div class="tg-product">
                            <a href="#">Loptop > Accessories</a>
                          </div>
                          <h4><a href="ads-details.html" style="font-size:22px;">Brand New Macbook Pro</a></h4>
                          <span>Last Updated: 4 hours ago</span>
                          <ul class="address">
                            <li>
                              <a href="#"><i class="lni-map-marker"></i>New York</a>
                            </li>
                            <li>
                              <a href="#"><i class="lni-alarm-clock"></i> 7 Jan, 10:10 pm</a>
                            </li>
                            <li>
                              <a href="#"><i class="lni-user"></i> John Smith</a>
                            </li>
                            <li>
                              <a href="#"><i class="lni-tag"></i> Loptop</a>
                            </li>
                          </ul>
                          <div class="btn-list">
                            <a class="btn-price" href="#">$ 25</a>
                            <a class="btn btn-common" href="ads-details.html">
                              <i class="lni-list"></i>
                              View Details
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                      <div class="featured-box">
                       
                        <div class="feature-content"   style="width: 100.00%;">
                          <div class="tg-product">
                            <a href="#">Electronics > Accessories</a>
                          </div>
                          <h4><a href="ads-details.html" style="font-size:22px;">Canon Photography Camera</a></h4>
                          <span>Last Updated: 4 hours ago</span>
                          <ul class="address">
                            <li>
                              <a href="#"><i class="lni-map-marker"></i>New York</a>
                            </li>
                            <li>
                              <a href="#"><i class="lni-alarm-clock"></i> 7 Jan, 10:10 pm</a>
                            </li>
                            <li>
                              <a href="#"><i class="lni-user"></i> John Smith</a>
                            </li>
                            <li>
                              <a href="#"><i class="lni-tag"></i> Electronics</a>
                            </li>
                          </ul>
                          <div class="btn-list">
                            <a class="btn-price" href="#">$ 25</a>
                            <a class="btn btn-common" href="ads-details.html">
                              <i class="lni-list"></i>
                              View Details
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                      <div class="featured-box">
                        
                        <div class="feature-content"   style="width: 100.00%;">
                          <div class="tg-product">
                            <a href="#">Photography > Accessories</a>
                          </div>
                          <h4><a href="ads-details.html" style="font-size:22px;">Photography Services In USA</a></h4>
                          <span>Last Updated: 4 hours ago</span>
                          <ul class="address">
                            <li>
                              <a href="#"><i class="lni-map-marker"></i>New York</a>
                            </li>
                            <li>
                              <a href="#"><i class="lni-alarm-clock"></i> 7 Jan, 10:10 pm</a>
                            </li>
                            <li>
                              <a href="#"><i class="lni-user"></i> John Smith</a>
                            </li>
                            <li>
                              <a href="#"><i class="lni-tag"></i>Photography</a>
                            </li>
                          </ul>
                          <div class="btn-list">
                            <a class="btn-price" href="#">$ 25</a>
                            <a class="btn btn-common" href="ads-details.html">
                              <i class="lni-list"></i>
                              View Details
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div id="list-view" class="tab-pane fade active show">
                  <div class="row">
                    
                    <?php foreach($questions as $question){?>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                      <div class="featured-box">
                       
                        <div class="feature-content"   style="width: 100.00%;">
                          <div class="tg-product">
                            <a href="#">Mobiles > Accessories</a>
                             <span style="float: right;font-size: 14px;">Last Updated: 4 hours ago</span>
                          </div>
                          <h4><a href="ads-details.html" style="font-size:22px;"><?php echo $question->question_title;?></a></h4>
                          <p style="font-size: 18px;line-height: 28px;"><?php echo $question->answer;?></p>
         				 
                          <div class="btn-list text-right">
                            <a class="btn-price" href="/try-out/question-<?php echo $question->question_id?>">Try Out</a>
                            <a class="btn btn-common" href="/question-details-<?php echo $question->question_id?>">
                              <i class="lni-list"></i>
                              View More
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                    
                    <?php } ?>
                  </div>
                </div>
              </div>
            </div>
            <!-- Adds wrapper End -->
      
            <!-- Start Pagination -->
            <div class="pagination-bar">
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
            
          </div>
        </div>
      </div>
    </div>
    <!-- Main container End -->  