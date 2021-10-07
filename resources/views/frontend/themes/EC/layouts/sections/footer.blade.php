<footer>
    <div class="container mb-0">
        <div class="footer-top pb-4">
            <div class="row">
                <?php foreach($footer_menus as $menu):?>
                <div class="col-md-3 mmb-4">
                    <h4><?php echo $menu['menu_name'];?></h4>
                    <nav class="nav flex-column">
                        <?php foreach($menu['childs'] as $child):?>
                        <a class="nav-link pl-0" href="<?php echo $child['url'];?>"><?php echo $child['menu_name'];?></a>
                        <?php endforeach;?>
                    </nav>
                </div>
                <?php endforeach;?>                
            </div>
        </div>
        <hr>
        <div class="footer-bottom pb-4 ">
            <div class="row align-items-center">
                <div class="col-lg-9 mmb-4">
                    <div>
                        <nav class="nav">
                            <a class="nav-link py-0 pl-0" href="#">© Emporium Collection</a>
                            <a class="nav-link py-0" href="#">Privacy</a>
                            <a class="nav-link py-0" href="#">Terms</a>
                            <a class="nav-link py-0" href="#">Sitemap</a>
                        </nav>
                    </div>
                </div>
                <div class="col-lg-3 mmb-4">
                    <nav class="nav justify-content-end sosmed">
                        <a class="nav-link py-0" href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                        <a class="nav-link py-0" href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        <a class="nav-link py-0" href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a>
                        <a class="nav-link py-0" href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                    </nav>
                </div>
            </div>
        </div>

    </div>
</footer>