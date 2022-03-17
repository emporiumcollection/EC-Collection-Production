
<table>
    <tr>
        <td style="padding-right: 20px;"><p>Import Suites</p></td>
        <td width="50"><button class="btn btn-primary form-control " onclick="ImportSuitDetail('{{ $hotel_id }}','{{ $dest_id }}');">Import</button></td>
        <td><span id="suite" style="display: none; font-size: x-large;"></span></td>
    </tr>
    <tr>
        <td style="padding-right: 20px;"><p>Import Policies</p></td>
        <td width="50"><button class="btn btn-primary form-control " onclick="ImportHotelPolicies('{{ $hotel_id }}','{{ $dest_id }}');">Import</button></td>
        <td><span id="hotelpolicy" style="display: none; font-size: x-large;"></span></td>
    </tr>
    <tr>
        <td style="padding-right: 20px;"><p>Import HotelReview</p></td>
        <td width="50"><button class="btn btn-primary form-control " onclick="ImportHotelReview('{{ $hotel_id }}','{{ $dest_id }}');">Import</button></td>
        <td><span id="review" style="display: none; font-size: x-large;"></span></td>
    </tr>
    <tr>
        <td style="padding-right: 20px;"><p>Import HotelSurroundings</p></td>
        <td width="50"><button class="btn btn-primary form-control " onclick="ImportHotelSurroundings('{{ $hotel_id }}','{{ $dest_id }}');">Import</button></td>
        <td><span id="nearby" style="display: none; font-size: x-large;"></span></td>
    </tr>
    <tr>
        <td style="padding-right: 20px;"><p>Import HotelFacilities</p></td>
        <td width="50"><button class="btn btn-primary form-control " onclick="ImportHotelFacilities('{{ $hotel_id }}','{{ $dest_id }}');">Import</button></td>
        <td><span id="facility" style="display: none; font-size: x-large;"></span></td>
    </tr>
    <tr>
        <td style="padding-right: 20px;"><p>Import FAQS</p></td>
        <td width="50"><button class="btn btn-primary form-control " onclick="ImportQUestionAnswer('{{ $hotel_id }}','{{ $dest_id }}');">Import</button></td>
        <td><span id="faq" style="display: none; font-size: x-large;"></span></td>
    </tr>
    <tr>
        <td style="padding-right: 20px;"><p>Import ChildrenPolicies</p></td>
        <td width="50"><button class="btn btn-primary form-control " onclick="ImportChildrenPolicies('{{ $hotel_id }}','{{ $dest_id }}');">Import</button></td>
        <td><span id="childpolicy" style="display: none; font-size: x-large;"></span></td>
    </tr>
    <tr>
        <td style="padding-right: 20px;"><p>Import Tips</p></td>
        <td width="50"><button class="btn btn-primary form-control " onclick="ImportTips('{{ $hotel_id }}','{{ $dest_id }}');">Import</button></td>
        <td><span id="tips" style="display: none; font-size: x-large;"></span></td>
    </tr>
</table>
<script type="text/javascript">
    function ImportSuitDetail(hotel_id,dest_id){

        $.ajax({
            url: '/importsuites',   
            type: 'post',
            data: { hotel_id: hotel_id,
                    dest_id: dest_id },
            datatype: 'json',

            success:function(response){
                if(response.status === true){
                    alert("Data Inserted Successfully!");
                    $("#suite").html('✔');
                    $("#suite").show();
                }else{
                    alert("Data already Inserted in Databade.");
                }
            }
        });
    }

    function ImportHotelPolicies(hotel_id,dest_id){
        
        $.ajax({
            url: '/importpolicies',
            type: 'post',
            data: {  hotel_id: hotel_id,
                    dest_id: dest_id },
            datatype: 'json',
            success:function(response){
                if(response.status === true){
                    $("#hotelpolicy").html('✔');
                    $("#hotelpolicy").show();
                }else{
                    alert("Data already Inserted in Databade.");
                }
            }
        });
    }

    function ImportHotelReview(hotel_id,dest_id){
        
        $.ajax({
            url: '/importreview',
            type: 'post',
            data: {  hotel_id: hotel_id,
                    dest_id: dest_id },
            datatype: 'json',

            success:function(response){
                if(response.status === true){
                    $("#review").html('✔');
                    $("#review").show();
                }
            }
        });
    }

    function ImportHotelSurroundings(hotel_id,dest_id){

        $.ajax({
            url: '/importsurrounding',
            type: 'post',
            data: { hotel_id: hotel_id,
                    dest_id: dest_id },
            datatype: 'json',

            success:function(response){
                if(response.status === true){
                    $("#nearby").html('✔');
                    $("#nearby").show();
                }
            }
        });
    } 

    function ImportHotelFacilities(hotel_id,dest_id){

        $.ajax({
            url: '/importfacilities',
            type: 'post',
            data: { hotel_id: hotel_id ,
                    dest_id: dest_id },
            datatype: 'json',

            success:function(response){
                if(response.status === true){
                    $("#facility").html('✔');
                    $("#facility").show();
                }
            }
        });

    }

    function ImportQUestionAnswer(hotel_id,dest_id){

        $.ajax({
            url: '/faqs',
            type: 'post',
            data: { hotel_id: hotel_id ,
                dest_id: dest_id },
            datatype: 'json',

            success:function(response){ 
                if(response.status === true){
                    $("#faq").html('✔');
                    $("#faq").show();
                }else{
                    alert("Data already Inserted.");
                }
            }
        });
    }

    function ImportChildrenPolicies(hotel_id,dest_id){

        $.ajax({
            url: '/childpolicy',
            type: 'post',
            data: { hotel_id: hotel_id ,
                dest_id: dest_id },
            datatype: 'json',

            success:function(response){ 
                if(response.status === true){
                    $("#childpolicy").html('✔');
                    $("#childpolicy").show();
                }else{
                    alert("Data already Inserted.");
                }
            }
        });
    }
    function ImportTips(hotel_id,dest_id){

        $.ajax({
            url: '/tips',
            type: 'post',
            data: { hotel_id: hotel_id ,
                dest_id: dest_id },
            datatype: 'json',

            success:function(response){
                if(response.status == true){
                    $("#tips").html('✔');
                    $("#tips").show();
                }else{
                    alert('Data Already Inserted!');
                }
            }
        }) ;  
    }

</script>