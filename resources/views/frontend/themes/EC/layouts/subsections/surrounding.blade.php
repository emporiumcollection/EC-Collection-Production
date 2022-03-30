<div class="sidebar-main" id="sourounding">
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
          <h3 class="title-second title-line mb-0" data-place="property">
            <b>Surrounding</b>  
          </h3>
      </div>
      @if(isset($surroundings) && !empty($surroundings))
        <div class="row mb-5">
            <div class="col-md-12">
            </div>
            <?php foreach($surroundings as $val) {  ?>
                <?php 
                    if($val->type == 'location_highlights'){
                        $info = json_decode($val->info);                                
                        foreach($info as $key => $value){ ?>

                        <div class="col-md-4 col-sm-6 mb-4">
                        <?php if($key == 'has_restaurant' ){ ?>
                            <p><b>Restaurant</b></p>
                        <?php }elseif($key == 'popular_landmarks') {?>
                            <p><b>Landmark</b></p>
                        <?php }elseif($key == 'nearby_stations'){ ?>
                            <p><b>Nearby Station</b></p>
                        <?php }
                        foreach($value as $data){

                                if(isset($data->name)){ ?>
                                    <p class="mb-0">{{ $data->name }}</p>
                                <?php }elseif($key == 'popular_landmarks'){ ?>
                                    <p class="mb-0"><?php  print_r($data); ?></p>
                        <?php   }elseif($key == 'nearby_stations'){ 
                                    foreach($data as $key => $near){
                        ?>  <table><tr><td>
                                {{ ucwords(str_replace("_"," ",$key)) }} : </td><td>{{ $near }}</td></tr>
                                </table>
                        <?php        }
                            }
                            
                        }?> 
                        </div> <?php 
                    }
                ?>
                <?php } } ?>
        </div>
    @endif
    </div>
</div>