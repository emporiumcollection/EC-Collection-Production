@extends('layouts.app')

@section('content')
<script src="{{ asset('sximo/js/typeahead.bundle.js')}}"></script>
<link href="{{ asset('sximo/assets/css/custom_ps.css')}}" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" type="text/css" href="{{ asset('sximo/css/m-popup.css')}}">
<style>
.modal-dialog { width:500px !important; }
</style>

  
	
	<div class="page-content-wrapper m-t">
    <div id="formerrors"></div>

    	
	</div>	  
</div>	


<!--Email popup end-->

<script src="{{ asset('sximo/instajs/instashow/elfsight-instagram-feed.js')}}"></script>
<script>
$(document).ready(function(){

	$('.do-quick-search').click(function(){
		$('#SximoTable').attr('action','{{ URL::to("core/users/multisearch")}}');
		$('#SximoTable').submit();
	});
	$(".popup-close-btn").click(function (event) {
        event.preventDefault();
        $(this).parent().parent().fadeOut("slow");
        $("body").removeClass("fixed");
    });
    $(".em-tab").on("click", function(){
        $(".email-pop-up-tabs li").removeClass('active');
        $(".tab-content .tab-pane").hide();
        var tab_id = $(this).attr('href');
        $(tab_id).addClass('in active');
        $(tab_id).show();
        $(this).closest('li').addClass('active');
    });
    
});
function sendemails_crmhotels(crmid)
{
    var sList = "";
	$('input[type=checkbox].ids').each(function () {
		if(this.checked)
		{
			sList += (sList=="" ? $(this).val() : "," + $(this).val());
		}
		
	});
	if(crmid > 0 && crmid!='')
	{
		$.ajax({
		  url: "{{ URL::to('fetch_user_info')}}",
		  type: "post",
		  data: {crmuid:crmid, ids:sList},
		  dataType: "json",
		  success: function(data){
			if(data.status!='error')
			{
				$('#crm_email_popup').val(data.crm.email);
				$('#propertyid_email_popup').val(data.crm.id);
				$('#crmId_email_popup').val(crmid);
				$('#crmmap_popup').attr('src','https://www.google.com/maps?q='+data.crm.address+'&output=embed');
				$('#crmemaillist').html('');
				if(data.crmemails.length)
				{
					var lhtml = '';
					$(data.crmemails).each(function(index,obj) {
					    lhtml +='<tr>';
						lhtml +='<td style="width:50%">'+obj.email_subject+'</td>';
						lhtml +='<td>Project</td>';
						lhtml +='<td>'+obj.created_at+'</td>';
						lhtml +='<td data-toggle="collapse" data-target="#collapse-row'+obj.id+'" class="accordion-toggle collapsed"><div class="collapse-pannel-btn"></div></td>';
						lhtml +='</tr>';
						lhtml +='<tr>';
						lhtml +='<td colspan="4" class="hiddenRow collapse-row" style="background: #fff;">';
						lhtml +='<div class="accordian-body collapse" id="collapse-row'+obj.id+'"> ';
						lhtml +='<div class="accordian-pannel-inner"> '+obj.email_message+' </div>';
						lhtml +='</div>'; 
						lhtml +='</td>';
						lhtml +='</tr>';
					});
					$('#crmemaillist').html(lhtml);
                    $('.collapse').collapse();
				}else{
				    var lhtml = 'There is no communication.';
                    $('#crmemaillist').html(lhtml);
				}
				
				$("#email-page").fadeIn("slow");
				$("body").addClass("fixed");
			}
		  }
		});
	}
}
function submitcrmemail()
{
	$('#message_email_popup').val($('.note-editable').html());
	var form_data = new FormData(document.getElementById('emailcrm'));
	$.ajax({
	  method: "post",
	  url: "{{URL::to('emailInviteCRM')}}",
	  cache : false,
	  contentType: false, // Important.
	  processData: false,
	  data: form_data,
	  mimeType: "multipart/form-data",
	  dataType: "json",
	  success: function (data)
	  {
		  if(data.status=='success'){
			$("#email-page").fadeOut("slow");
			$("body").removeClass("fixed");
			html ='<div class="alert alert-danger fade in block-inner">';
			html +='<button data-dismiss="alert" class="close" type="button">×</button>';
			html +='<i class="icon-checkmark-circle"></i> Email Sent! </div>';
			$('.page-content-wrapper #formerrors').html(html);
		  }
	  }
	});
}
var substringMatcher = function(strs) {
  return function findMatches(q, cb) {
    var matches, substringRegex;

    // an array that will be populated with substring matches
    matches = [];

    // regex used to determine if a string contains the substring `q`
    substrRegex = new RegExp(q, 'i');

    // iterate through the pool of strings and for any string that
    // contains the substring `q`, add it to the `matches` array
    $.each(strs, function(i, str) {
      if (substrRegex.test(str)) {
        matches.push(str);
      }
    });

    cb(matches);
  };
};	
var states = [{!! TagsFinder::findLeadListing() !!}];

$('.searchform-navbar .typeahead').typeahead({
  hint: true,
  highlight: true,
  minLength: 1
},
{
  name: 'states',
  source: substringMatcher(states)
});
$('.search-navbar').on('typeahead:selected', function (e, datum) {
	var propname = $(this);
	var sname = propname.val();
	window.location.href = "{{URL::to('crmhotel/leadlisting')}}?search=first_name:equal:" + sname + "|";
});
</script>		
@stop