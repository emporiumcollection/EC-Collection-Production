      <div class="mt-5">
        <div class="row align-items-center">
          <div class="col-md-6 mt-xs-5">
            <div class="d-flex align-items-center nav-desc main-title-heading">
              <?php
                $full_url = Request::fullUrl();
                $path_count = count($path);
              ?>
              @if($path_count > 1)
                <a href="{{ str_replace( $keyword, $path[$path_count - 2], urldecode($full_url)) }}"  title="Go back to previous page" data-toggle="tooltip">
                  <i class="ico ico-back"></i>
                </a>
              @else
                <a href="/"  title="Go back to previous page" data-toggle="tooltip">
                  <i class="ico ico-back"></i>
                </a>
              @endif
              <div class="title-main pl-0">
                <h2><span data-toggle="tooltip" title="Your selected destination experience">{{$keyword}}</span> <a
                    href="javascript:void(0)" onclick="resetSearch();" data-toggle="collapse"><i class="ico ico-reload reload-offset"
                      title="Reset your search result" data-toggle="tooltip"></i></a>
                </h2>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <ul class="nav nav-pills nav-clr nav-breadcrumb dedicated-breadcrumb justify-content-end">
              <li class="nav-item">
                <p class="nav-link mb-0">Home</p>
              </li>
              @foreach($path as $cid => $cat)
                <li class="nav-item">
                  @if(count($path) > 3)
                    @if(count($path) - 1 == $cid || count($path) - 2 == $cid)
                      <a class="nav-link" href="/globalsearchavailability?s={{ $cat }}">{{ $cat }}</a>
                    @else
                      <p class="nav-link mb-0">{{ $cat }}</p>
                    @endif
                  @else
                    @if(count($path) - 1 == $cid)
                      <a class="nav-link" href="/globalsearchavailability?s={{ $cat }}">{{ $cat }}</a>
                    @else
                      <p class="nav-link mb-0">{{ $cat }}</p>
                    @endif
                  @endif
                </li>
              @endforeach
            </ul>
            <div class="dropdown mobile-breadcrumb dropdown-block mobile-on">
              <button class="btn btn-block dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                Home
              </button>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(-493px, -300px, 0px);" x-out-of-boundaries="">
                @foreach($path as $cid => $cat)
                  @if(count($path) > 3)
                    @if(count($path) - 1 == $cid || count($path) - 2 == $cid)
                    <a class="dropdown-item" href="/globalsearchavailability?s={{ $cat }}">{{ $cat }}</a>
                    @else
                      <a class="dropdown-item" class="nav-link mb-0">{{ $cat }}</a>
                    @endif
                  @else
                    @if(count($path) - 1 == $cid)
                      <a class="dropdown-item" href="/globalsearchavailability?s={{ $cat }}">{{ $cat }}</a>
                    @else
                      <a class="dropdown-item" class="nav-link mb-0">{{ $cat }}</a>
                    @endif
                  @endif
              @endforeach
              </div>
            </div>
          </div>
        </div>
        <div class="mobile-off">          
          <ul class="nav nav-pills tabs-w3" id="myTab" role="tablist">
            <?php if (!empty($propertyResultsForView['lifestyle']) || !empty($editorsProperties) || !empty($featureProperties)) : ?>
              <li class="nav-item" role="presentation">
                <?php 
                  $total_editors = count($editorsProperties);
                  $total_feature = count($featureProperties);
                  $total_properties= $total_editors + $total_feature;
                ?>
                <a class="nav-link active" id="lifestyle-tab" data-toggle="pill" href="#lifestyle" role="tab" aria-controls="lifestyle" aria-selected="true">LIFESTYLE (<?php print count($propertyResultsForView['lifestyle']) + $total_properties ?>)</a>
              </li>
            <?php endif; ?>
            <?php if (!empty($propertyResultsForView['dedicated'])) : ?>
              <li class="nav-item" role="presentation">
                <a class="nav-link" id="dedicated-tab" data-toggle="pill" href="#dedicated" role="tab" aria-controls="dedicated" aria-selected="false">DEDICATED (<?php print count($propertyResultsForView['dedicated'])?>)</a>
              </li>
            <?php endif; ?>
            <?php if (!empty($propertyResultsForView['bespoke'])) : ?>
              <li class="nav-item" role="presentation">
                <a class="nav-link" id="bespoke-tab" data-toggle="pill" href="#bespoke" role="tab" aria-controls="bespoke" aria-selected="false">BESPOKE (<?php print count($propertyResultsForView['bespoke'])?>)</a>
              </li>
            <?php endif; ?>
          </ul>
        </div>
        <div class="dropdown dropdown-block mobile-on">
          <button class="btn btn-outline-dark btn-block dropdown-toggle" type="button" id="dropdownMenuButton"
            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Lifestyle
          </button>
          <div class="dropdown-menu w-100" aria-labelledby="dropdownMenuButton">
            <?php if (!empty($propertyResultsForView['lifestyle'])) : ?>
              <a class="dropdown-item" data-toggle="tab" href="#lifestyle">Lifestyle</a>
            <?php endif; ?>
            <?php if (!empty($propertyResultsForView['dedicated'])) : ?>
              <a class="dropdown-item" data-toggle="tab" href="#dedicated">Dedicated</a>
            <?php endif; ?>
            <?php if (!empty($propertyResultsForView['bespoke'])) : ?>
              <a class="dropdown-item" data-toggle="tab" href="#bespoke">Bespoke</a>
            <?php endif; ?>
          </div>
        </div>
        <ul class="nav nav-tags my-4" id="Exp">
            @if(!empty(request()->get('experience')))
            <li class="nav-item" id="experienced">
              <span class="nav-link">
                <a class="" href="javascript:void(0);">
                  <span class="taxonomyTags-roundedArrow">
                    <svg width="20" height="26" viewBox="0 0 20 26" xmlns="http://www.w3.org/2000/svg"
                      style="vertical-align: auto;">
                      <path
                        d="M14.874 26c-.957.012-2.011-.227-3.167-.711-1.155-.484-2.07-1.068-2.747-1.752l-7.964-8.05C.332 14.814 0 13.988 0 13.008c0-.98.332-1.807.996-2.477L8.96 2.48c.677-.684 1.592-1.267 2.747-1.751C12.863.245 13.925 0 14.895 0h5.106v26h-5.127z"
                        fill="currentColor" fill-rule="evenodd"></path>
                    </svg>
                  </span>
                  <span class="taxonomyTags-tagTitle">
                    {{ request()->get('experience') }}
                  </span>
                  {{-- <span class="ml-1">85</span> --}}
                </a>
                <a href="javascript:void(0);" id="delete_exp" class="delete delete_exp">
                  <svg fill="currentColor" focusable="false" height="20px" viewBox="0 0 24 24" width="24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                      d="M10.586 12L3.793 5.206a1 1 0 1 1 1.413-1.413L12 10.586l6.794-6.793a1 1 0 1 1 1.413 1.413L13.414 12l6.793 6.794a1 1 0 1 1-1.413 1.413L12 13.414l-6.794 6.793a1 1 0 1 1-1.413-1.413L10.586 12z">
                    </path>
                  </svg>
                </a>
              </span>
            </li>
          @endif
          @if(!empty($atmosphere_data))

            @foreach($atmosphere_data as $atm)
              <li class="nav-item" id="atmosphere">
                <span class="nav-link">
                  <a class="" href="#">
                    <span class="taxonomyTags-roundedArrow">
                      <svg width="20" height="26" viewBox="0 0 20 26" xmlns="http://www.w3.org/2000/svg"
                        style="vertical-align: auto;">
                        <path
                          d="M14.874 26c-.957.012-2.011-.227-3.167-.711-1.155-.484-2.07-1.068-2.747-1.752l-7.964-8.05C.332 14.814 0 13.988 0 13.008c0-.98.332-1.807.996-2.477L8.96 2.48c.677-.684 1.592-1.267 2.747-1.751C12.863.245 13.925 0 14.895 0h5.106v26h-5.127z"
                          fill="currentColor" fill-rule="evenodd"></path>
                      </svg>
                    </span> 
                    <span class="taxonomyTags-tagTitle">
                      {{ $atm[0]->category_name }}
                    </span>delete
                    {{-- <span class="ml-1">85</span> --}}
                  </a>
                  <a href="javascript:void(0);" class="delete" onclick="removeMe(this,'setting1{{ $atm[0]->id }}')">
                    <svg fill="currentColor" focusable="false" height="20px" viewBox="0 0 24 24" width="24"
                      xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M10.586 12L3.793 5.206a1 1 0 1 1 1.413-1.413L12 10.586l6.794-6.793a1 1 0 1 1 1.413 1.413L13.414 12l6.793 6.794a1 1 0 1 1-1.413 1.413L12 13.414l-6.794 6.793a1 1 0 1 1-1.413-1.413L10.586 12z">
                      </path>
                    </svg>
                  </a>
                </span>
              </li>
            @endforeach
          @endif
          @if(!empty($facility_data))
            @foreach($facility_data as $fac)
              <li class="nav-item">
                <span class="nav-link">
                  <a class="" href="#">
                    <span class="taxonomyTags-roundedArrow">
                      <svg width="20" height="26" viewBox="0 0 20 26" xmlns="http://www.w3.org/2000/svg"
                        style="vertical-align: auto;">
                        <path
                          d="M14.874 26c-.957.012-2.011-.227-3.167-.711-1.155-.484-2.07-1.068-2.747-1.752l-7.964-8.05C.332 14.814 0 13.988 0 13.008c0-.98.332-1.807.996-2.477L8.96 2.48c.677-.684 1.592-1.267 2.747-1.751C12.863.245 13.925 0 14.895 0h5.106v26h-5.127z"
                          fill="currentColor" fill-rule="evenodd"></path>
                      </svg>
                    </span>
                    <span class="taxonomyTags-tagTitle">
                      {{ $fac[0]->category_name }}
                    </span>
                    {{-- <span class="ml-1">85</span> --}}
                  </a>
                  <a href="javaScript:void();" class="delete" onclick="removeMe(this,'fasilities{{ $fac[0]->id }}')">
                    <svg fill="currentColor" focusable="false" height="20px" viewBox="0 0 24 24" width="24"
                      xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M10.586 12L3.793 5.206a1 1 0 1 1 1.413-1.413L12 10.586l6.794-6.793a1 1 0 1 1 1.413 1.413L13.414 12l6.793 6.794a1 1 0 1 1-1.413 1.413L12 13.414l-6.794 6.793a1 1 0 1 1-1.413-1.413L10.586 12z">
                      </path>
                    </svg>
                  </a>
                </span>
              </li>
            @endforeach
          @endif
          @if(!empty($selected_style))
            @foreach($selected_style as $sty)
              <li class="nav-item">
                <span class="nav-link">
                  <a class="" href="#">
                    <span class="taxonomyTags-roundedArrow">
                      <svg width="20" height="26" viewBox="0 0 20 26" xmlns="http://www.w3.org/2000/svg"
                        style="vertical-align: auto;">
                        <path
                          d="M14.874 26c-.957.012-2.011-.227-3.167-.711-1.155-.484-2.07-1.068-2.747-1.752l-7.964-8.05C.332 14.814 0 13.988 0 13.008c0-.98.332-1.807.996-2.477L8.96 2.48c.677-.684 1.592-1.267 2.747-1.751C12.863.245 13.925 0 14.895 0h5.106v26h-5.127z"
                          fill="currentColor" fill-rule="evenodd"></path>
                      </svg>
                    </span>
                    <span class="taxonomyTags-tagTitle">
                      {{ $sty[0]->category_name }}
                    </span>
                    {{-- <span class="ml-1">85</span> --}}
                  </a>
                  <a href="javaScript:void();" class="delete" onclick="removeMe(this,'style{{ $sty[0]->id }}')">
                    <svg fill="currentColor" focusable="false" height="20px" viewBox="0 0 24 24" width="24"
                      xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M10.586 12L3.793 5.206a1 1 0 1 1 1.413-1.413L12 10.586l6.794-6.793a1 1 0 1 1 1.413 1.413L13.414 12l6.793 6.794a1 1 0 1 1-1.413 1.413L12 13.414l-6.794 6.793a1 1 0 1 1-1.413-1.413L10.586 12z">
                      </path>
                    </svg>
                  </a>
                </span>
              </li>
            @endforeach
          @endif
          @if(!empty($selected_style) || !empty($facility_data) || !empty($atmosphere_data) || !empty(request()->get('experience')))
            
              <li class="nav-item">
                <span class="nav-link">
                  <a class="" href="#">
                    <span class="taxonomyTags-roundedArrow">
                      <svg width="20" height="26" viewBox="0 0 20 26" xmlns="http://www.w3.org/2000/svg"
                        style="vertical-align: auto;">
                        <path
                          d="M14.874 26c-.957.012-2.011-.227-3.167-.711-1.155-.484-2.07-1.068-2.747-1.752l-7.964-8.05C.332 14.814 0 13.988 0 13.008c0-.98.332-1.807.996-2.477L8.96 2.48c.677-.684 1.592-1.267 2.747-1.751C12.863.245 13.925 0 14.895 0h5.106v26h-5.127z"
                          fill="currentColor" fill-rule="evenodd"></path>
                      </svg>
                    </span>
                    <span class="taxonomyTags-tagTitle">
                      Clear All
                    </span>
                    {{-- <span class="ml-1">85</span> --}}
                  </a>
                  <a href="/globalsearchavailability?s={{$keyword}}" class="delete">
                    <svg fill="currentColor" focusable="false" height="20px" viewBox="0 0 24 24" width="24"
                      xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M10.586 12L3.793 5.206a1 1 0 1 1 1.413-1.413L12 10.586l6.794-6.793a1 1 0 1 1 1.413 1.413L13.414 12l6.793 6.794a1 1 0 1 1-1.413 1.413L12 13.414l-6.794 6.793a1 1 0 1 1-1.413-1.413L10.586 12z">
                      </path>
                    </svg>
                  </a>
                </span>
              </li>
            
          @endif 
        </ul>
        <div class="tab-content pt-lg-5 pt-xl-5">
          <?php if (!empty($propertyResultsForView['lifestyle']) || !empty($editorsProperties) || !empty($featureProperties)) : ?>
  <div class="tab-pane fade active show" id="lifestyle" role="tabpanel" aria-labelledby="lifestyle-tab">
      <?php
      foreach ($editorsProperties as $editorChoice) :
      ?>
        @include('frontend.themes.EC.properties.subtemplates.left_aligned_hotel', ['editorChoice' => $editorChoice, 'propertyImages' => $editorChoice->propertyImages, 'block_title' => 'Editor\'s Choice'])
      <?php
      endforeach;
      ?>
      <?php
      foreach ($featureProperties as $featureProp) :
      ?>
        @include('frontend.themes.EC.properties.subtemplates.left_aligned_hotel',
        ['editorChoice' => $featureProp, 'propertyImages' => $featureProp->propertyImages, 'block_title' => 'Featured'])
      <?php
      endforeach;
      ?>
      <div class="row">
      <?php
      foreach ($propertyResultsForView['lifestyle'] as $lifestyleProp) :
      ?>
        @include('frontend.themes.EC.properties.subtemplates.result_card',
        ['property' => $lifestyleProp, 'propertyImages' => $lifestyleProp->propertyImages])
      <?php
      endforeach;
      ?>
    </div>
  </div>
  <?php endif; ?>
  <?php if (!empty($propertyResultsForView['dedicated'])) : ?>
  <div class="tab-pane fade" id="dedicated" role="tabpanel" aria-labelledby="dedicated-tab">
      <?php
      foreach ($editorsProperties as $editorChoice) :
      ?>
        @include('frontend.themes.EC.properties.subtemplates.left_aligned_hotel', ['editorChoice' => $editorChoice, 'propertyImages' => $editorChoice->propertyImages, 'block_title' => 'Editor\'s Choice'])
      <?php
      endforeach;
      ?>
      <?php
      foreach ($featureProperties as $featureProp) :
      ?>
        @include('frontend.themes.EC.properties.subtemplates.left_aligned_hotel',
        ['editorChoice' => $featureProp, 'propertyImages' => $featureProp->propertyImages, 'block_title' => 'Featured'])
      <?php
      endforeach;
      ?>
      <div class="row">
      <?php
      foreach ($propertyResultsForView['dedicated'] as $lifestyleProp) :
      ?>
        @include('frontend.themes.EC.properties.subtemplates.result_card',
        ['property' => $lifestyleProp, 'propertyImages' => $lifestyleProp->propertyImages])
      <?php
      endforeach;
      ?>
    </div>
  </div>
  <?php endif; ?>
  <?php if (!empty($propertyResultsForView['bespoke'])) : ?>
  <div class="tab-pane fade" id="bespoke" role="tabpanel" aria-labelledby="bespoke-tab">
      <?php
      foreach ($editorsProperties as $editorChoice) :
      ?>
        @include('frontend.themes.EC.properties.subtemplates.left_aligned_hotel', ['editorChoice' => $editorChoice, 'propertyImages' => $editorChoice->propertyImages, 'block_title' => 'Editor\'s Choice'])
      <?php
      endforeach;
      ?>
      <?php
      foreach ($featureProperties as $featureProp) :
      ?>
        @include('frontend.themes.EC.properties.subtemplates.left_aligned_hotel',
        ['editorChoice' => $featureProp, 'propertyImages' => $featureProp->propertyImages, 'block_title' => 'Featured'])
      <?php
      endforeach;
      ?>
      <div class="row">
      <?php
      foreach ($propertyResultsForView['bespoke'] as $lifestyleProp) :
      ?>
        @include('frontend.themes.EC.properties.subtemplates.result_card',
        ['property' => $lifestyleProp, 'propertyImages' => $lifestyleProp->propertyImages])
      <?php
      endforeach;
      ?>      
      <!--<div class="col-lg-12 col-md-12 mb-5" style="text-align:center;">
        <input type="hidden" page="1" name="page" id="currentPage" />
        <button id="resultsLoadMore" class="btn btn-primary">Load More</button>
      </div>-->
    </div>
  </div>
  <?php endif; ?>        
  </div>
</div>
<script>
  function getattribute(e)
  {
    var href = $(e).attr("href");  
    var url = $(location).attr('href');

    url = url.replace('#lifestyle', '');
    url = url.replace('#dedicated', '');
    url = url.replace('#bespoke', '');

    var fullurl = url + href;
    window.history.pushState({}, '', fullurl);
  }

  $(document).ready(function () {
    var hash = window.location.hash;
    if(hash){
        $('#search-results-content #myTab ' + hash + '-tab').trigger('click');
    }

    $(document).on('click', '#search-results-content #myTab a', function(e){
      getattribute(e.target);
      return true;
    })
  });
</script>
