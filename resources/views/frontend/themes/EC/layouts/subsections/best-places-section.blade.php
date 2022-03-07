<div class="row">
    @if(!empty($places))
        @foreach($places as $place)
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        @if(isset($place->image) )
                            <img src="{{ $place->image }}" usemap="#map" >
                        @endif
                        <h4>{{ substr($place->name, 0,20) }}</h4>
                        <?php if(isset($place->address)){ ?>
                        <a href="https://www.google.com/maps/search/?api=1&query=<?=$place->address?>" target="_blank">{{ substr($place->address, 0,30) }}</a>
                        <map name="map">
                            <area href="https://www.google.com/maps/search/?api=1&query=<?=$place->address?>" alt="emporium-voyage" target="_blank" shape=poly coords="30,100, 140,50, 290,220, 180,280">
                        </map> 
                        <?php } ?>
                    </div>
                </div>
            </div>
        @endforeach
    @else
        <div class="col-md-12">No records found.</div>
    @endif
</div>
