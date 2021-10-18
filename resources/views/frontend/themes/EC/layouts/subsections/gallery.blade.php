<div class="sidebar-main pt-4 " id="gallery">
    <a href="#" class="close-sidebar">
        <svg fill="currentColor" focusable="false" height="20px" viewBox="0 0 24 24" width="24"
            xmlns="http://www.w3.org/2000/svg">
            <title>Close</title>
            <path
                d="M10.586 12L3.793 5.206a1 1 0 1 1 1.413-1.413L12 10.586l6.794-6.793a1 1 0 1 1 1.413 1.413L13.414 12l6.793 6.794a1 1 0 1 1-1.413 1.413L12 13.414l-6.794 6.793a1 1 0 1 1-1.413-1.413L10.586 12z">
            </path>
        </svg>
    </a>
    <div class="nav-gallery-wrapper">
        <div class="d-flex align-items-center mb-3">
            <a href="#" class="sidebar-back">
                <i class="ico ico-back"></i>
            </a>
            <h3 class="title-second title-line mb-0">
                <?php echo isset($location[0]['category_name'])?$location[0]['category_name']:''; ?>
            </h3>
        </div>
    </div>

    <div class="tab-content h-100">
        <div id="location_gallery" class="tab-pane fade show active" role="tabpanel" aria-labelledby="hotel_gallery-tab">
            <div class="sidebar-scroller pt-2 is-gallery">
                <div class="gallery-wrapper">
                    <div class="row justify-content-center">
                        <div class="col-8">
                            <div class="grid-layout" id="location_gallery_hotel">
                                <?php 
                                $spanid = 1;
                                $grid = 1;
                                if(!empty($photos->results)):
                                foreach($photos->results as $photo):?>
                                <a href="<?php echo $photo->urls->regular; ?>"
                                    data-sub-html="<?php echo $photo->alt_description; ?>" class="grid-item grid-row-<?php echo $grid;?> span-<?php echo $spanid;?>">
                                    <img src="<?php echo $photo->urls->regular; ?>" alt="">
                                </a>
                                <?php 
                                $spanid=2;
                                $grid++;
                                endforeach;
                                endif;?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        </div>
    </div>
</div>