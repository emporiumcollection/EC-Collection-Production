
<div style="text-align:center;"><span id="loading"><h3><b>Wait while importing...</b><h3></span></div>
<table>
    <tr>
        <td style="padding-right: 20px;"><p>Import Suites</p></td>
        <td width="50"><button class="btn btn-primary form-control" id="suites" onclick="ImportSuitDetail('{{ $hotel_id }}');">Import</button>
            <span id="suites-span" style="display: none; font-size: 13px;"></span>
        </td>
        <td><span id="suiteimp" style="display: none; font-size: x-large;"></span>
        </td>
        <td>
            <input type="text" class="form-control range_date" name="daterange" style="display: none;"/>
        </td>
        <td>
            <button class="btn btn-primary form-control " id="select_date" style="display:none;" onclick="selectdate('{{ $hotel_id }}')">Submit</button>
        </td>
    </tr>
    <tr>
        <td style="padding-right: 20px;"><p>Import Policies</p></td>
        <td width="50"><button class="btn btn-primary form-control " id="policy" onclick="ImportHotelPolicies('{{ $hotel_id }}','{{ $dest_id }}');">Import</button>
            <span id="policy-span" style="display: none; font-size: 13px;"></span>
        </td>
        <td><span id="hotelpolicyimp" style="display: none; font-size: x-large;"></span></td>
    </tr>
    <tr>
        <td style="padding-right: 20px;"><p>Import HotelReview</p></td>
        <td width="50"><button class="btn btn-primary form-control" id="review" onclick="ImportHotelReview('{{ $hotel_id }}','{{ $dest_id }}');">Import</button>
            <span id="review-span" style="display: none; font-size: 13px;"></span>
        </td>
        <td><span id="reviewimp" style="display: none; font-size: x-large;"></span></td>
    </tr>
    <tr>
        <td style="padding-right: 20px;"><p>Import HotelSurroundings</p></td>
        <td width="50"><button class="btn btn-primary form-control" id="surrounding" onclick="ImportHotelSurroundings('{{ $hotel_id }}','{{ $dest_id }}');">Import</button>
            <span id="surrounding-span" style="display: none; font-size: 13px;"></span>
        </td>
        <td><span id="surroundingimp" style="display: none; font-size: x-large;"></span></td>
    </tr>
    <tr>
        <td style="padding-right: 20px;"><p>Import HotelFacilities</p></td>
        <td width="50"><button class="btn btn-primary form-control" id="facilities" onclick="ImportHotelFacilities('{{ $hotel_id }}','{{ $dest_id }}');">Import</button>
        <span id="facilities-span" style="display: none; font-size: 13px;"></span>
        </td>
        <td><span id="facilityimp" style="display: none; font-size: x-large;"></span></td>
    </tr>
    <tr>
        <td style="padding-right: 20px;"><p>Import FAQS</p></td>
        <td width="50"><button class="btn btn-primary form-control" id="faqs" onclick="ImportQUestionAnswer('{{ $hotel_id }}','{{ $dest_id }}');">Import</button>
            <span id="faqs-span" style="display: none; font-size: 13px;"></span>
        </td>
        <td><span id="faqimp" style="display: none; font-size: x-large;"></span></td>
    </tr>
    <tr>
        <td style="padding-right: 20px;"><p>Import ChildrenPolicies</p></td>
        <td width="50"><button class="btn btn-primary form-control" id="children" onclick="ImportChildrenPolicies('{{ $hotel_id }}','{{ $dest_id }}');">Import</button>
            <span id="children-span" style="display: none; font-size: 13px;"></span>
        </td>
        <td><span id="childpolicyimp" style="display: none; font-size: x-large;"></span></td>
    </tr>
    <tr>
        <td style="padding-right: 20px;"><p>Import Tips</p></td>
        <td width="50"><button class="btn btn-primary form-control" id="tips" onclick="ImportTips('{{ $hotel_id }}','{{ $dest_id }}');">Import</button>
            <span id="tips-span" style="display: none; font-size: 13px;"></span>
        </td>
        <td><span id="tipsimp" style="display: none; font-size: x-large;"></span></td>
        <input type="hidden" name="property_id" id="property_id" value="{{ $property_id }}">
    </tr>
</table>


<script type="text/javascript">
    
    var importedentity = "";
    <?php if(isset($importedentity) && !empty($importedentity)){ ?>    
        var importedentity = '<?php echo json_encode($importedentity) ?>'; 
        var booking_hotel_id = '<?php echo ($hotel_id) ?>';
    <?php } ?>

    if(importedentity != ''){
        var importedentity1 = jQuery.parseJSON(importedentity);
        $.each(importedentity1, function (key, value) {
            if(value.hotel_id == booking_hotel_id){
                $("#"+value.entity).hide();
                $("#"+value.entity+"-span").html('Imported');
                $("#"+value.entity+"-span").show();
            }
        });  
    }    

   
    $(document).ready(function(){
        $(document).ajaxStart(function() {
          $("#loading").show();
        }).ajaxStop(function() {
          $("#loading").hide();
        });

        $(document).on('click','#select_date',function(){
            
        });
    });   

    function selectdate(hotel_id){
        var date = $(".range_date").val().split('-');
        var arrival_date = date[0];
        var departure_date = date[1];
        var property_id = $("#property_id").val();
        $.ajax({
            url: '/select_date',
            type: 'get',
            data: { arrival_date: arrival_date,
                departure_date: departure_date,
                hotel_id: hotel_id ,
                property_id: property_id  },
            datatype: 'json',

            success:function(response){
                if(response.status == true){
                    alert("Data Inserted Successfully!");
                    $(".range_date").hide();
                    $("#select_date").hide();  
                }else{
                    alert("Suites Not Found Please select date again!");
                }
            }
        });
    }

    function ImportSuitDetail(hotel_id){
        var suite = 'suites';
        
        var property_id = $("#property_id").val();
        $.ajax({
            url: '/importsuites',   
            type: 'post',
            data: { hotel_id: hotel_id,
                    property_id: property_id },
            datatype: 'json',

            success:function(response){
                if(response.status === true){
                    alert("Data Inserted Successfully!");
                    $("#suiteimp").html('✔');
                    $("#suiteimp").show();
                    ImportEntity(hotel_id,suite);
                }if(response.status === false){
                    alert("Suites Not Found Please select date again!");
                    $(".range_date").show();
                    $("#select_date").show();
                }
            }
        });
    }

    function ImportHotelPolicies(hotel_id,dest_id){
        var policy = 'policy';

        $.ajax({
            url: '/importpolicies',
            type: 'post',
            data: {  hotel_id: hotel_id,
                    dest_id: dest_id },
            datatype: 'json',
            success:function(response){
                if(response.status === true){
                    $("#hotelpolicyimp").html('✔');
                    $("#hotelpolicyimp").show();
                    ImportEntity(hotel_id,policy);
                }else{
                    alert("Policy Not Found.");
                }
            }
        });
    }

    function ImportHotelReview(hotel_id,dest_id){
        var review = 'review';
        
        $.ajax({
            url: '/importreview',
            type: 'post',
            data: {  hotel_id: hotel_id,
                    dest_id: dest_id },
            datatype: 'json',

            success:function(response){
                if(response.status === true){
                    $("#reviewimp").html('✔');
                    $("#reviewimp").show();
                    ImportEntity(hotel_id,review);
                }else{
                    alert("Review Not Found.");
                }
            }
        });
    }

    function ImportHotelSurroundings(hotel_id,dest_id){
        var surrounding = 'surrounding';
        $.ajax({
            url: '/importsurrounding',
            type: 'post',
            data: { hotel_id: hotel_id,
                    dest_id: dest_id },
            datatype: 'json',

            success:function(response){
                if(response.status === true){
                    $("#surroundingimp").html('✔');
                    $("#surroundingimp").show();
                    ImportEntity(hotel_id,surrounding);
                }else{
                    alert("Data Not Found.");
                }
            }
        });
    } 

    function ImportHotelFacilities(hotel_id,dest_id){
        var facilities = 'facilities';
        
        $.ajax({
            url: '/importfacilities',
            type: 'post',
            data: { hotel_id: hotel_id ,
                    dest_id: dest_id    },
            datatype: 'json',

            success:function(response){
                if(response.status === true){
                    $("#facilityimp").html('✔');
                    $("#facilityimp").show();
                    ImportEntity(hotel_id,facilities);
                }else{
                    alert("Facilities Not Found.");
                }
            }
        });

    }

    function ImportQUestionAnswer(hotel_id,dest_id){
        var faqs = 'faqs';
        
        $.ajax({
            url: '/faqs',
            type: 'post',
            data: { hotel_id: hotel_id ,
                dest_id: dest_id },
            datatype: 'json',

            success:function(response){ 
                if(response.status === true){
                    $("#faqimp").html('✔');
                    $("#faqimp").show();
                    ImportEntity(hotel_id,faqs);
                }else{
                    alert("FAQs Not found!.");
                }
            }
        });
    }

    function ImportChildrenPolicies(hotel_id,dest_id){
        var children = 'children';
        
        $.ajax({
            url: '/childpolicy',
            type: 'post',
            data: { hotel_id: hotel_id ,
                dest_id: dest_id },
            datatype: 'json',

            success:function(response){ 
                if(response.status === true){
                    $("#childpolicyimp").html('✔');
                    $("#childpolicyimp").show();
                    ImportEntity(hotel_id,children);
                }else{
                    alert("Children Policies Not found.");
                }
            }
        });
    }
    function ImportTips(hotel_id,dest_id){
        var tips = 'tips';
        
        $.ajax({
            url: '/tips',
            type: 'post',
            data: { hotel_id: hotel_id ,
                dest_id: dest_id },
            datatype: 'json',

            success:function(response){
                if(response.status == true){
                    $("#tipsimp").html('✔');
                    $("#tipsimp").show();
                    ImportEntity(hotel_id,tips);
                }else{
                    alert('Data Already Inserted!');
                }
            }
        }) ;  
    }
    function ImportEntity(hotel_id,entity){
        $.ajax({
            url: '/entity',
            type: 'get',
            data: { hotel_id: hotel_id,
                    entity: entity },
            datatype: 'json',
            
            success:function(response){

            }        
        });
    }
    $(function() {
        $('input[name="daterange"]').daterangepicker({
          opens: 'true',
        }, function(start, end, label) {
          console.log("A new date selection was made: " + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD'));
        });
    });

</script>