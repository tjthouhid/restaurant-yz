   <!-- ******************************************************* -->
    <!-- ************  Instagram Section  ************** -->
    <!-- ******************************************************* -->
    <section class="instagram_sec">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="instagram_div">
                        <h2 class="header-2 text-center">Instagram</h2>
                        <p class="p-text-1">
                            Share your moments with us, Follow us on Instagram
                        </p>
                        <div class="row instra-images">
                          <?php  foreach ($result_ins->data as $post) { 
                          //$post->likes->count
                          //standard_resolution
                          //thumbnail
                          ?>
                          <div class="col-md-3 col-xs-6">
                              <div class="instra-img-show">
                                  <a href="<?php echo $post->link;?>" target="_blank"><img src="<?php echo $post->images->standard_resolution->url;?>"></a>
                              </div>
                          </div>
                          <?php }?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
            
    </section>