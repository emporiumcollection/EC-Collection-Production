
<div class="row">
    <?php 
        if(!empty($seasondate->toArray())){ 
            $a = "";
        ?>
            <div class="col-sm-6">

                <table>
                    <tr>
                        <th>From Date</th>
                        <th>To Date</th>
                        <th>View Price</th>
                    </tr>
                     <?php foreach ($seasondate as $key => $value) {
                        
                        $sdate = date_create($value->dates[0]->season_from_date); 
                        $fdate = date_create($value->dates[0]->season_from_date); 
                        $cdate = date_create(date("Y-m-d")); 

                        if($fdate < $cdate){
                            $sdate = clone $cdate;
                            date_add($sdate, date_interval_create_from_date_string("30 days"));
                            $fdate = clone $cdate;
                            date_add($fdate, date_interval_create_from_date_string("33 days"));
                        }else{
                            date_add($fdate, date_interval_create_from_date_string("3 days"));
                        }

                        $a = 'https://secure.booking.com/book.html?hotel_id='. $hotel_id .'&checkin='. date_format($sdate,"Y-m-d") .'&checkout=' . date_format($fdate,"Y-m-d") . '&interval=2&stage=1&nr_rooms_729233401_325315371_3_0_0=1'; 
                     ?>
                        <tr>
                            <td>
                                <span class="form-control">{{ $value->dates[0]->season_from_date }}</span>
                            </td>
                            <td>
                                <span class="form-control">{{ $value->dates[0]->season_to_date }}</span>
                            </td>
                            <td style="padding-left: 20px;">
                                <a href="{{ $a }}" class="text-secondary" target="blank">View Price</a>
                            </td>
                        </tr>
                    <?php } ?>    
                </table>
            </div>
             <?php } else { 
                        $cdate = date_create(date("Y-m-d")); 

                        $sdate = clone $cdate;
                        date_add($sdate, date_interval_create_from_date_string("30 days"));
                        $fdate = clone $cdate;
                        date_add($fdate, date_interval_create_from_date_string("33 days"));

                        $a = 'https://secure.booking.com/book.html?hotel_id='. $hotel_id .'&checkin='. date_format($sdate,"Y-m-d") .'&checkout=' . date_format($fdate,"Y-m-d") . '&interval=2&stage=1&nr_rooms_729233401_325315371_3_0_0=1'; 
            ?>
                <div class="row">
                    <div class="col-sm-6">
                        <table>
                            <tr>
                                <th>From Date</th>
                                <th>To Date</th>
                                <th>View Price</th>
                            </tr>
                             <tr>
                                <td>
                                    <span class="form-control">{{ date_format($sdate,"Y-m-d") }}</span>
                                </td>
                                <td>
                                    <span class="form-control">{{ date_format($fdate,"Y-m-d") }}</span>
                                </td>
                                <td style="padding-left: 20px;">
                                    <a href="{{ $a }}" class="text-secondary" target="blank">View Price</a>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            <?php }
    ?> 
</div>