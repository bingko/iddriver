<section id="content">
    <div class="container">
        <div class="row">
            <div class="col-lg-8" style="min-width:400px">
                <?php 
				for($i=0;$i<count($content);$i++){
					echo '<h3>'.$content[$i][ 'title']. '</h3>'; 
					if($content[$i]['image']==NULL){ 
						echo '<span style="text-align:center"><img src="'.base_url(). '/img/idd_logo1a.gif" style="width:50%"/></span>'; }
					else{ 
						echo '<div style="text-align:center"><img src="'.base_url(). "img/uploads/".$content[$i][ 'image']. '"></div>'; 
					} 
					echo '<p style="word-wrap: break-word;">'.nl2br($content[$i]['description']). '</p>';
					echo '<hr>';
				}
				?>
			</div>
            
            
            <div class="col-lg-4">
                <aside class="right-sidebar">
                    <div class="widget">
                        <h5 class="widgetheading">ข่าวล่าสุด</h5>
                        <ul class="cat">
                           <?php 
							 $allnews =$this->model->getNews(null);
                            $count = count($allnews);
                            if($count>5){
                                $count = 5;
                            }
								for($i=0;$i<$count;$i++){
									echo '<li>';
									echo '<i class="icon-angle-right"></i>';
									echo '<a class="icon-angle-right"></a>';
									echo '<a href="'.site_url("main/news").'/'.$allnews[$i]["ID"].'">'.$allnews[$i]['title'].'</a>';
									echo '</li>';
								}
							?>
                            </li>
                        </ul>
                    </div>
                    <!--
                    <div class="widget">
                        <h5 class="widgetheading">บทความน่าสนใจ</h5>
                        <ul class="recent">
                            <li>
                                <img src="<?php echo base_url()?>/img/dummies/blog/65x65/thumb1.jpg" class="pull-left" alt="" />
                                <h6><a href="#">Lorem ipsum dolor sit</a></h6>
                                <p>
                                    Mazim alienum appellantur eu cu ullum officiis pro pri
                                </p>
                            </li>
                            <li>
                                <a href="#"><img src="<?php echo base_url()?>/img/dummies/blog/65x65/thumb2.jpg" class="pull-left" alt="" /></a>
                                <h6><a href="#">Maiorum ponderum eum</a></h6>
                                <p>
                                    Mazim alienum appellantur eu cu ullum officiis pro pri
                                </p>
                            </li>
                            <li>
                                <a href="#"><img src="<?php echo base_url()?>/img/dummies/blog/65x65/thumb3.jpg" class="pull-left" alt="" /></a>
                                <h6><a href="#">Et mei iusto dolorum</a></h6>
                                <p>
                                    Mazim alienum appellantur eu cu ullum officiis pro pri
                                </p>
                            </li>
                        </ul>
                    </div>-->
                </aside>
            </div>
        </div>
    </div>
</section>