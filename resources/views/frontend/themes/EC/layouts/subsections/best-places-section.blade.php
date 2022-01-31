<div class="row">
    @if(!empty($places))
        @foreach($places as $key => $place)
            <?php
                $address = '';
                if(isset($place->location->address) && $place->location->address != ''){
                    $address .= $place->location->address.', ';
                }
                if(isset($place->location->locality) && $place->location->locality != ''){
                    $address .= $place->location->locality.', ';
                }
                if(isset($place->location->postcode) && $place->location->postcode != ''){
                    $address .= $place->location->postcode.', ';
                }
                if(isset($place->location->country) && $place->location->country != ''){
                    $address .= $place->location->country;
                }
            ?>
            <div class="col-md-3 mb-3">
                <div class="card">
                    <div class="card-body">
                        @if(isset($place->image))
                            <img src="{{ $place->image }}" usemap="#map">
                        @endif
                        <h4>{{ substr($place->name, 0,15) }}</h4>
                        <a href="https://www.google.com/maps/search/?api=1&query=<?=$address?>" target="_blank">{{ substr($address, 0,20) }}</a>
                        <map name="map">
                            <area href="https://www.google.com/maps/search/?api=1&query=<?=$address?>" alt="emporium-voyage" target="_blank" shape=poly coords="30,100, 140,50, 290,220, 180,280">
                        </map> 
                    </div>
                </div>
            </div>
        @endforeach
    @else
        <div class="col-md-12">No records found.</div>
    @endif
</div>