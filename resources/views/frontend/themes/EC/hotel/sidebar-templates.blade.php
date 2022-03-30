@include('frontend.themes.EC.layouts.subsections.priceinfo')
@include('frontend.themes.EC.layouts.subsections.quick_info')
@include('frontend.themes.EC.layouts.subsections.reviews')
@include('frontend.themes.EC.layouts.subsections.share')
@include('frontend.themes.EC.layouts.subsections.suiteinfo')
@include('frontend.themes.EC.layouts.subsections.faqs')  
@include('frontend.themes.EC.layouts.subsections.surrounding')
@include('frontend.themes.EC.layouts.subsections.facilities')  
@include('frontend.themes.EC.layouts.subsections.property_gallery')
@include('frontend.themes.EC.layouts.subsections.channel_popup')
@include('frontend.themes.EC.layouts.subsections.location_info')
@include('frontend.themes.EC.layouts.subsections.channel_popup')
@include('frontend.themes.EC.layouts.subsections.policies_info')

@include('frontend.themes.EC.hotel.mobile_sidebar_nav')
<?php if(isset($restaurant)):?>
  @include('frontend.themes.EC.hotel.subtemplates.detailrestaurant')
<?php endif;?>

@include('frontend.themes.EC.reservation.partials.privacy_model.terms_and_conditions')