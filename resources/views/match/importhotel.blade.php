
<table>
    <tr>
        <td style="padding-right: 20px;"><p>Import Suites</p></td>
        <td width="50"><button class="btn btn-primary form-control " onclick="ImportSuitDetail('{{ $hotel_id }}');">Import</button></td>
    </tr>
    <tr>
        <td style="padding-right: 20px;"><p>Import Policies</p></td>
        <td width="50"><button class="btn btn-primary form-control " onclick="ImportHotelPolicies('{{ $hotel_id }}','{{ $property_id }}');">Import</button></td>
    </tr>
    <tr>
        <td style="padding-right: 20px;"><p>Import HotelReview</p></td>
        <td width="50"><button class="btn btn-primary form-control " onclick="ImportHotelReview('{{ $hotel_id }}','{{ $property_id }}');">Approve</button></td>
    </tr>
    <tr>
        <td style="padding-right: 20px;"><p>Import HotelSurroundings</p></td>
        <td width="50"><button class="btn btn-primary form-control " onclick="ImportHotelSurroundings('{{ $hotel_id }}');">Approve</button></td>
    </tr>
    <tr>
        <td style="padding-right: 20px;"><p>Import HotelFacilities</p></td>
        <td width="50"><button class="btn btn-primary form-control " onclick="ImportHotelFacilities('{{ $hotel_id }}');">Approve</button></td>
    </tr>
</table>
<script type="text/javascript">
    function ImportSuitDetail(id){
        alert(id);
        $.ajax({
            url: '/importsuites/'+id,   
            type: 'get',
            datatype: 'json',

            success:function(response){
                if(response.status === true){
                    alert("Data Inserted Successfully!");
                }else{
                    alert("Data already Inserted in Databade.");
                }
            }
        });
    }

    function ImportHotelPolicies(hotel_id,property_id){
        alert(hotel_id);
        alert(property_id);
        $.ajax({
            url: '/importpolicies',
            type: 'post',
            data: {  hotel_id: hotel_id,
                    property_id: property_id },
            datatype: 'json',
            success:function(response){
                if(response.status === true){
                    alert("Data Inserted Successfully!");
                }else{
                    alert("Data already Inserted in Databade.");
                }
            }
        });
    }

    function ImportHotelReview(hotel_id,property_id){
        alert(hotel_id);
        alert(property_id);

        $.ajax({
            url: '/importreview',
            type: 'post',
            data: {  hotel_id: hotel_id,
                    property_id: property_id },
            datatype: 'json',

            success:function(response){
                if(response.status === true){
                    alert("Data Inserted Successfully");
                }
            }
        });
    }

    function ImportHotelSurroundings(hotel_id){

        $.ajax({
            url: '/importsurrounding',
            type: 'post',
            data: { hotel_id: hotel_id },
            datatype: 'json',

            success:function(response){
                if(response.status === true){
                    alert("Data Inserted Successfully");
                }
            }
        });
    } 

    function ImportHotelFacilities(hotel_id){
        alert(hotel_id);
        $.ajax({
            url: '/importfacilities',
            type: 'post',
            data: { hotel_id: hotel_id },
            datatype: 'json',

            success:function(response){
                if(response.status === true){
                    alert("Data Inserted Successfully");
                }
            }
        });

    }

</script>