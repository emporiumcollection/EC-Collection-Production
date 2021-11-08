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