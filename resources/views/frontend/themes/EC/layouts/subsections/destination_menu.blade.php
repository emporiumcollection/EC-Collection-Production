<?php
$destinationTabContent = '';
$destinationTemplate = '
<div class="tab-pane fade show" id="<!--LEVEL1-CATALIAS-->">
    <div class="row">
        <div class="col-2 br-001 col--01920">
            <nav class="nav flex-column nav-dest">
                <!--LEVEL1-LINKS-->
            </nav>
        </div>
        <div class="col-10">
            <div class="tab-content">
                <!--LEVEL1-TABS-->
            </div>
        </div>
    </div>
</div>';

$level1TabTemplate = '<div class="tab-pane fade show" id="<!--LEVEL2-CATALIAS-->">
                    <div class="row">
                        <div class="col-2 col--1223 br-001">
                            <nav class="nav flex-column nav-dest">
                                <!--LEVEL2-LINKS-->
                            </nav>
                        </div>
                        <div class="col-10 col--12929">
                            <div class="tab-content h-100">
                                <!--LEVEL2-TABS-->
                            </div>
                        </div>
                    </div>
                </div>';
$level2TabTemplate = '<div class="tab-pane fade show h-100" id="<!--LEVEL3-CATALIAS-->">
                        <div class="row h-100">
                            <div class="col-3 col--819281 br-001 ">
                                <div class="destination-img">
                                    <img src="<!--LEVEL3-IMAGE-LINK-->" class="img-fluid"
                                        alt="">
                                    <div class="destinatios-cntay--00">
                                        <p class="mb-0"><!--LEVEL3-NAME--></p>
                                        <p class="mb-0"><!--LEVEL3-TAG--></p>
                                    </div>
                                </div>
                                <a href="/globalsearchavailability?s=<!--LEVEL3-NAME-->">   <button class="btn btn-primary" style="width:100%; margin-top:10px;">View <!--LEVEL3-NAME--> Collection</button>
                                </a>
                            </div>
                            <div class="col-9 col--71812 h-100">
                                <div class="row h-100">
                                    <div class="col-3 col--98121 br-001 h-100">
                                        <nav class="nav flex-column nav-dest">
                                            <!--LEVEL3-LINKS-->
                                        </nav>
                                    </div>
                                    <div class="col-4 col--9819281">
                                        <div class="tab-content">
                                            <!--LEVEL4-TABS-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>';
$level4TabTemplate = '<div class="tab-pane fade" id="<!--LEVEL4-CATALIAS-->">
                            <div class="destination-img">
                                <a href="/globalsearchavailability?s=<!--LEVEL4-NAME-->"><img src="<!--LEVEL4-IMAGE-LINK-->" class="img-fluid" alt=""></a>
                                <div class="destinatios-cntay--00">
                                    <p class="mb-0"><!--LEVEL4-NAME--></p>
                                    <p class="mb-0"><!--LEVEL4-TAG-->
                                    </p>
                                </div>
                            </div>
                            <a href="/globalsearchavailability?s=<!--LEVEL4-NAME-->"><button class="btn btn-primary" style="width:100%; margin-top:10px;">View <!--LEVEL4-NAME--> Collection</button></a>
                        </div>';                    
?>
<div class="desktop-view ">
                    <?php
                    $destinationLevel1 = '';
                    foreach($destinationMenu as $destination):
                        $destinationLevel1 .= '<li class="nav-item">
                            <a class="nav-link" href="#'.$destination['category_alias'].'" data-toggle="tab" role="tab">'.$destination['category_name'].'</a>
                        </li>';

                        $level2TabContent = '';
                        $destinationLevel2 = '';
                        foreach($destination['children'] as $level2){
                            $destinationLevel2 .= '
                            <a class="nav-link" href="#'.$level2['category_alias'].'" data-toggle="tab" role="tab">
                                '.$level2['category_name'].'
                            </a>'; 

                            
                            $destinationLevel3 = '';
                            $level3TabContent= '';
                            foreach($level2['children'] as $level3){
                                $destinationLevel3 .= '<a class="nav-link " href="#'.$level3['category_alias'].'" data-toggle="tab" role="tab">'.$level3['category_name'].'</a>';
                                
                                $destinationLevel4 = '';
                                $level4TabContent = '';
                                foreach($level3['children'] as $level4){
                                    $destinationLevel4 .= '<a class="nav-link " href="#'.$level4['category_alias'].'" data-toggle="tab" role="tab">'.$level4['category_name'].'</a>';

                                    $level4Content = str_replace('<!--LEVEL4-NAME-->', $level4['category_name'], $level4TabTemplate);
                                    $level4Content = str_replace('<!--LEVEL4-CATALIAS-->', $level4['category_alias'], $level4Content);
                                    $level4Content = str_replace('<!--LEVEL4-TAG-->', $level4['category_instagram_tag'], $level4Content);

                                    $link = '/property-image/resize/187x244/category_imgs/'.$level4['category_image'] . '/category-image';
                                    $level4Content = str_replace('<!--LEVEL4-IMAGE-LINK-->', $link, $level4Content);

                                    $level4TabContent .= $level4Content;
                                }

                                $level3Content = str_replace('<!--LEVEL3-CATALIAS-->', $level3['category_alias'], $level2TabTemplate);

                                $link = '/property-image/resize/270x315/category_imgs/'.$level3['category_image'] . '/category-image';
                                $level3Content = str_replace('<!--LEVEL3-IMAGE-LINK-->', $link, $level3Content);
                                $level3Content = str_replace('<!--LEVEL3-NAME-->', $level3['category_name'], $level3Content);
                                $level3Content = str_replace('<!--LEVEL3-TAG-->', $level3['category_instagram_tag'], $level3Content);
                                $level3Content = str_replace('<!--LEVEL3-LINKS-->', $destinationLevel4, $level3Content);
                                $level3Content = str_replace('<!--LEVEL4-TABS-->', $level4TabContent, $level3Content);

                                $level3TabContent .= $level3Content;
                            }

                            $level2Content = str_replace('<!--LEVEL2-CATALIAS-->', $level2['category_alias'], $level1TabTemplate);
                            $level2Content = str_replace('<!--LEVEL2-LINKS-->', $destinationLevel3, $level2Content);
                            $level2Content = str_replace('<!--LEVEL2-TABS-->', $level3TabContent, $level2Content);
                            
                            $level2TabContent .= $level2Content;        
                        }
                    
                        $tabContent = str_replace('<!--LEVEL1-CATALIAS-->', $destination['category_alias'], $destinationTemplate);

                        $tabContent = str_replace('<!--LEVEL1-LINKS-->', $destinationLevel2, $tabContent);

                        $tabContent = str_replace('<!--LEVEL1-TABS-->', $level2TabContent, $tabContent);

                        $destinationTabContent .= $tabContent;
                    endforeach;
                    ?>
    <ul class="nav nav-pills nav-clr mb-5">
        <?php echo $destinationLevel1;?>
    </ul>
    <p><b>Current Destination : <?php echo $keyword;?></b></p>
    <div class="tab-content">
        <!-- Europe tab content -->
        <?php echo $destinationTabContent;?>
        <!-- Europe tab content End -->

        <div class="tab-pane fade" id="indian">
            Indian Ocean
        </div>
        <div class="tab-pane fade" id="oceania">
            Oceania
        </div>
        <div class="tab-pane fade" id="asia">
            Asia
        </div>
        <div class="tab-pane fade" id="america">
            The Americas
        </div>
    </div>
</div>

<div class="ipad-view">
    <p><b>Current Destination : New York</b></p>
    <div class="row">
        <div class="col-lg-3 col-md-4">
            <ul class="nav nav-columns nav-clr nav-des no-bdr mb-5">
                <li class="nav-item">
                    <a class="nav-link active" href="#designH" data-toggle="tab" role="tab">Design Hotels</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#boutiqueH" data-toggle="tab" role="tab">Boutique Hotels</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#spaH" data-toggle="tab" role="tab">Spa and Wellness Hotels</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#cullinaryH" data-toggle="tab" role="tab">Cullinary Delights</a>
                </li>
            </ul>
        </div>
        <div class="col-lg-9 col-md-8">
            <div class="tab-content">
                <div class="tab-pane fade show active" id="designH">
                    <div class="row">
                        <div class="col-lg-4 mb-4 col-md-7">
                            <a href="#"><img src="images/Emporium-Collection_129.jpg" class="img-fluid" alt=""></a>
                        </div>
                        <div class="col-lg-4 mb-1">
                            <h6><b>Design Hotel</b></h6>
                        </div>
                        <div class="col-lg-4 mb-4">
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Provident sint perspiciatis
                            similique. Iste
                            beatae
                            assumenda laboriosam id accusantium, aliquam harum quasi esse non, sequi est mollitia
                            quisquam in
                            ducimus
                            perspiciatis!

                            <div class="text-left mt-3">
                                <a href="#" class="confirm-room">View Design Hotel</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="boutiqueH">
                    <div class="row">
                        <div class="col-lg-4 mb-4 col-md-6">
                            <a href="#"><img src="images/Emporium-Collection_129.jpg" class="img-fluid" alt=""></a>
                        </div>
                        <div class="col-lg-4 mb-2">
                            <h6><b>Boutique Hotels</b></h6>
                        </div>
                        <div class="col-lg-4 mb-2">
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Provident sint perspiciatis
                            similique.
                            Iste
                            beatae
                            assumenda laboriosam id accusantium, aliquam harum quasi esse non, sequi est mollitia
                            quisquam in
                            ducimus
                            perspiciatis!

                            <div class="text-left mt-3">
                                <a href="#" class="confirm-room">View Boutique Hotels</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="spaH">
                    <div class="row">
                        <div class="col-lg-4 mb-4 col-md-6">
                            <a href="#"><img src="images/Emporium-Collection_129.jpg" class="img-fluid" alt=""></a>
                        </div>
                        <div class="col-lg-4 mb-2">
                            <h6><b>Spa and Wellness Hotels</b></h6>
                        </div>
                        <div class="col-lg-4 mb-2">
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Provident sint perspiciatis
                            similique.
                            Iste
                            beatae
                            assumenda laboriosam id accusantium, aliquam harum quasi esse non, sequi est mollitia
                            quisquam in
                            ducimus
                            perspiciatis!

                            <div class="text-left mt-3">
                                <a href="#" class="confirm-room">View Spa and Wellness Hotels</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="cullinaryH">
                    <div class="row">
                        <div class="col-lg-4 mb-4 col-md-6">
                            <a href="#"><img src="images/Emporium-Collection_129.jpg" class="img-fluid" alt=""></a>
                        </div>
                        <div class="col-lg-4 mb-2">
                            <h6><b>Cullinary Delights</b></h6>
                        </div>
                        <div class="col-lg-4 mb-2">
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Provident sint perspiciatis
                            similique.
                            Iste
                            beatae
                            assumenda laboriosam id accusantium, aliquam harum quasi esse non, sequi est mollitia
                            quisquam in
                            ducimus
                            perspiciatis!

                            <div class="text-left mt-3">
                                <a href="#" class="confirm-room">View Cullinary Delights</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>