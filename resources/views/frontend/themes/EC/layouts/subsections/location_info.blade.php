<div class="sidebar-main" id="info_sidebar">
    <a href="#" class="close-sidebar">
        <svg fill="currentColor" focusable="false" height="20px" viewBox="0 0 24 24" width="24"
            xmlns="http://www.w3.org/2000/svg">
            <title>Close</title>
            <path
                d="M10.586 12L3.793 5.206a1 1 0 1 1 1.413-1.413L12 10.586l6.794-6.793a1 1 0 1 1 1.413 1.413L13.414 12l6.793 6.794a1 1 0 1 1-1.413 1.413L12 13.414l-6.794 6.793a1 1 0 1 1-1.413-1.413L10.586 12z">
            </path>
        </svg>
    </a>


    <div class="sidebar-scroller">
        <div class="d-flex align-items-center mb-5">
            <a href="#" class="sidebar-back">
                <i class="ico ico-back"></i>
            </a>
            <h3 class="title-second title-line mb-0">
                <?php echo isset($location[0]['category_name'])?$location[0]['category_name']:''; ?>
            </h3>
        </div>
        <div class="row">
            <div class="col-12">
                <ul class="nav nav-tab-main nav-pills nav-justified mb-2">
                    <li class="nav-item">
                        <a class="nav-link active" href="#galleryTab" data-toggle="tab" role="tab" aria-selected="true">
                            Gallery
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#infoTab" data-toggle="tab" role="tab" aria-selected="false">
                            Info
                        </a>
                    </li>
                    <!--<li class="nav-item">
                        <a class="nav-link" href="#videosTab" data-toggle="tab" role="tab" aria-selected="false" onclick="getDefaultChannel('<?php echo strtolower(str_replace(" ", "-", $keyword)); ?>')">
                            Videos
                        </a>
                    </li>-->
                </ul>
                <div class="tab-content pt-4">
                    <div class="tab-pane fade show active" id="galleryTab">
                        <div class="sidebar-scroller pt-2 is-gallery">
                            <div class="gallery-wrapper">
                                <div class="row justify-content-center">
                                    <div class="col-8">
                                        <div class="grid-layout" id="location_gallery_hotel">
                                            <?php 
                                            // $spanid = 1;
                                            // $grid = 1;
                                            if(!empty($photos)):
                                                foreach($photos as $key => $photo):
                                                if($key == 0){
                                                ?>
                                                    <a href="/cached-images/container_user_files/locations/<?php echo str_slug(\Session::get('keyword'));  ?>/<?php echo $photo['image'];  ?>"
                                                        data-sub-html="<?php echo \Session::get('keyword');?> image" class="grid-item grid-row-1 span-1">
                                                        <img data-src="/cached-images/container_user_files/locations/<?php echo str_slug(\Session::get('keyword'));  ?>/<?php echo $photo['image'];  ?>" alt="" class="location-photos">
                                                    </a>
                                                <?php
                                                } else { ?>
                                                    <a href="/cached-images/container_user_files/locations/<?php echo str_slug(\Session::get('keyword'));  ?>/<?php echo $photo['image'];  ?>"
                                                        data-sub-html="<?php echo \Session::get('keyword');?> image" class="grid-item grid-row-2 span-2">
                                                        <img data-src="/cached-images/container_user_files/locations/<?php echo str_slug(\Session::get('keyword'));  ?>/<?php echo $photo['image'];  ?>" alt="" class="location-photos">
                                                    </a>
                                                <?php }
                                                endforeach;
                                            endif;
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="infoTab">
                        <?php if(isset($location_info->latitude) && isset($location_info->longitude)) { ?>
                        <?php echo isset($location[0]['category_description'])?$location[0]['category_description']:'';?>
                        <?php echo "<br> latitude :-". $location_info->latitude; ?>
                        <?php echo "<br> longitude :-". $location_info->longitude; ?>
                        <?php echo "<br> destination type :-". $location_info->destination_type; ?>
                        <?php echo "<br> average rating :-". $location_info->average_rating; ?>
                        <?php } ?>
                    </div>
                    <div class="tab-pane fade" id="videosTab">
                        <div class="title-main mb-4">
                            <h2>Channel</h2>
                            <a href="#" class="print-btn">
                                <i class="ico ico-print"></i>
                            </a>
                        </div>
                        <div class="yt-rvideos-2">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

