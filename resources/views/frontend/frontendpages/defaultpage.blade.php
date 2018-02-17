@extends('frontend.layouts.ev.pages')
@section('content')
	<!-- start contact form section -->
	<section class="wow fadeIn big-section cstmaiclass" id="align-to-top">
		<div class="container-fluid">
			<div class="row equalize sm-equalize-auto">
				<div class="col-md-12 sm-clear-both wow fadeInLeft no-padding">
					<div class="padding-ten-half-all bg-light-gray md-padding-seven-all xs-padding-30px-all contentstyle">
						{!! nl2br($pagecontent) !!}
					</div>
				</div>
			</div>
		</div>
	</section>  
@endsection

@section('css')

<!-- swiper carousel -->
<link rel="stylesheet" href="{{ asset('sximo/assets/memform/css/swiper.min.css')}}">
<!-- style -->
<link rel="stylesheet" href="{{ asset('sximo/assets/memform/css/style.css')}}" />
<!-- responsive css -->
<link rel="stylesheet" href="{{ asset('sximo/assets/memform/css/responsive.css')}}" />
<!-- Custom style -->
<link href="{{ asset('sximo/assets/memform/css/custom-ai.css')}}" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" href="{{ asset('sximo/css/hotel-membership/style.css')}}">
<style> 
.padding-ten-half-all {
    padding: 9% !important;
}

.contentstyle h5
{
	color: #ABA07C;
    font-size: 36px;
    line-height: 51.33px;
    text-transform: capitalize;
    font-family: ACaslonPro-Regular;
    font-weight: 700;
	margin-bottom: 20px;
}

.contentstyle p
{
	font-family: geomanist-light !important;
	font-size: 14px;
    line-height: normal;
}
</style>
@endsection

@section('script')

<script type="text/javascript" src="{{ asset('sximo/assets/memform/js/smooth-scroll.js')}}"></script>
<!-- animation -->
<script type="text/javascript" src="{{ asset('sximo/assets/memform/js/wow.min.js')}}"></script>
<!-- swiper carousel -->
<script type="text/javascript" src="{{ asset('sximo/assets/memform/js/swiper.min.js')}}"></script>

<!-- images loaded -->
<script type="text/javascript" src="{{ asset('sximo/assets/memform/js/imagesloaded.pkgd.min.js')}}"></script>
 <script src="{{ asset('sximo/js/parsley.min.js')}}" type="text/javascript"></script>
         
@endsection