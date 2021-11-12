<style>
.reviews .reviews_list:nth-child(2n + 1) {
    border-right: 1px #e4e4e4 solid;
}
</style>
<div class="sidebar-main" id="reviews">
    <a href="#" class="close-sidebar">
        <svg fill="currentColor" focusable="false" height="20px" viewBox="0 0 24 24" width="24"
            xmlns="http://www.w3.org/2000/svg">
            <title>Close</title>
            <path
                d="M10.586 12L3.793 5.206a1 1 0 1 1 1.413-1.413L12 10.586l6.794-6.793a1 1 0 1 1 1.413 1.413L13.414 12l6.793 6.794a1 1 0 1 1-1.413 1.413L12 13.414l-6.794 6.793a1 1 0 1 1-1.413-1.413L10.586 12z">
            </path>
        </svg>
    </a>
    <div class="sidebar-scroller">
        <div class="d-flex align-items-center mb-5">
            <a href="#" class="sidebar-back">
                <i class="ico ico-back"></i>
            </a>
            <h3 class="title-second title-line mb-0">
                The Ludlow Hotel
                {{-- {{  $hotel_data[0]->property_name }} --}}
            </h3>
            <!-- <div>
                <a href="#" class="btn btn-primary">Add Review</a>
            </div> -->
        </div>
        <div class="row reviews" id="reviews_list">
            
            @if(isset($reviews))
                @foreach($reviews as $review)
            <div class="col-lg-6 reviews_list reviews-sidebar" style="display: none;">
                <div class="row">
                    <div class="col-3 pl-5">
                        <p><b>{{ $review->fname }} {{ $review->lname }}</b></p>
                        <p>{{ $review->country }}</p>
                    </div>
                    <div class="col pr-5">
                        <div class="rate mb-1">
                            <span class="mr-4">
                               
                                @for ($x = 0; $x < $review->rating ; $x++)
                                    <i class="fa fa-star mr-2" aria-hidden="true"></i>
                                @endfor
                               
                            </span>
                            <span>
                                <b>{{ $review->rating }}/10</b>
                            </span>
                        </div>
                        <div class="review-content">
                            <p>
                                {{ $review->comment }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            @endif
            {{-- <div class="col-lg-6 reviews-list reviews-sidebar">
                <div class="row">
                    <div class="col-3 pl-5">
                        <p><b>G.P</b></p>
                        <p>United Kingdom</p>
                    </div>
                    <div class="col pr-5">
                        <div class="rate mb-1">
                            <span class="mr-4">
                                <i class="fa fa-star mr-2" aria-hidden="true"></i>
                                <i class="fa fa-star mr-2" aria-hidden="true"></i>
                                <i class="fa fa-star mr-2" aria-hidden="true"></i>
                                <i class="fa fa-star mr-2" aria-hidden="true"></i>
                                <i class="fa fa-star mr-2" aria-hidden="true"></i>
                                <i class="fa fa-star mr-2" aria-hidden="true"></i>
                            </span>
                            <span>
                                <b>9.68/10</b>
                            </span>
                        </div>
                        <div class="review-content">
                            <p>
                                Probably the best City hotel weve stayed at. Alal Gogo was particularly outstanding. He
                                managed to arrange for us to attend the Woody Allan Band show with our guest (who is a
                                musician) even when it had been booked out and was very courteous throughout. Thank you
                                so muclh. A wonderful stay.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 reviews-list reviews-sidebar">
                <div class="row">
                    <div class="col-3 pl-5">
                        <p><b>C.M</b></p>
                        <p>United States</p>
                    </div>
                    <div class="col pr-5">
                        <div class="rate mb-1">
                            <span class="mr-4">
                                <i class="fa fa-star mr-2" aria-hidden="true"></i>
                                <i class="fa fa-star mr-2" aria-hidden="true"></i>
                                <i class="fa fa-star mr-2" aria-hidden="true"></i>
                                <i class="fa fa-star mr-2" aria-hidden="true"></i>
                            </span>
                            <span>
                                <b>8.68/10</b>
                            </span>
                        </div>
                        <div class="review-content">
                            <p>
                                We love the hotel and its location. The front desk staff was extremely pleasant. The
                                breakfast staff are very friendly and efficient.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 reviews-list reviews-sidebar">
                <div class="row">
                    <div class="col-3 pl-5">
                        <p><b>C.M</b></p>
                        <p>United States</p>
                    </div>
                    <div class="col pr-5">
                        <div class="rate mb-1">
                            <span class="mr-4">
                                <i class="fa fa-star mr-2" aria-hidden="true"></i>
                                <i class="fa fa-star mr-2" aria-hidden="true"></i>
                                <i class="fa fa-star mr-2" aria-hidden="true"></i>
                                <i class="fa fa-star mr-2" aria-hidden="true"></i>
                            </span>
                            <span>
                                <b>8.68/10</b>
                            </span>
                        </div>
                        <div class="review-content">
                            <p>
                                We love the hotel and its location. The front desk staff was extremely pleasant. The
                                breakfast staff are very friendly and efficient.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 reviews-list reviews-sidebar">
                <div class="row">
                    <div class="col-3 pl-5">
                        <p><b>P.M</b></p>
                        <p>United Kingdom</p>
                    </div>
                    <div class="col pr-5">
                        <div class="rate mb-1">
                            <span class="mr-4">
                                <i class="fa fa-star mr-2" aria-hidden="true"></i>
                                <i class="fa fa-star mr-2" aria-hidden="true"></i>
                                <i class="fa fa-star mr-2" aria-hidden="true"></i>
                                <i class="fa fa-star mr-2" aria-hidden="true"></i>
                                <i class="fa fa-star mr-2" aria-hidden="true"></i>
                            </span>
                            <span>
                                <b>9.03/10</b>
                            </span>
                        </div>
                        <div class="review-content">
                            <p>
                                Fantastic hotel, great atmosphere, room upgrade was much appreciated. All the staff I
                                interacted with were great. One of the best hotel experiences I have ever had I would
                                unreservedly recommend the hotel and will return.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 reviews-list reviews-sidebar">
                <div class="row">
                    <div class="col-3 pl-5">
                        <p><b>G.P</b></p>
                        <p>United Kingdom</p>
                    </div>
                    <div class="col pr-5">
                        <div class="rate mb-1">
                            <span class="mr-4">
                                <i class="fa fa-star mr-2" aria-hidden="true"></i>
                                <i class="fa fa-star mr-2" aria-hidden="true"></i>
                                <i class="fa fa-star mr-2" aria-hidden="true"></i>
                                <i class="fa fa-star mr-2" aria-hidden="true"></i>
                                <i class="fa fa-star mr-2" aria-hidden="true"></i>
                                <i class="fa fa-star mr-2" aria-hidden="true"></i>
                            </span>
                            <span>
                                <b>9.68/10</b>
                            </span>
                        </div>
                        <div class="review-content">
                            <p>
                                Probably the best City hotel weve stayed at. Alal Gogo was particularly outstanding. He
                                managed to arrange for us to attend the Woody Allan Band show with our guest (who is a
                                musician) even when it had been booked out and was very courteous throughout. Thank you
                                so muclh. A wonderful stay.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 reviews-list reviews-sidebar">
                <div class="row">
                    <div class="col-3 pl-5">
                        <p><b>C.M</b></p>
                        <p>United States</p>
                    </div>
                    <div class="col pr-5">
                        <div class="rate mb-1">
                            <span class="mr-4">
                                <i class="fa fa-star mr-2" aria-hidden="true"></i>
                                <i class="fa fa-star mr-2" aria-hidden="true"></i>
                                <i class="fa fa-star mr-2" aria-hidden="true"></i>
                                <i class="fa fa-star mr-2" aria-hidden="true"></i>
                            </span>
                            <span>
                                <b>8.68/10</b>
                            </span>
                        </div>
                        <div class="review-content">
                            <p>
                                We love the hotel and its location. The front desk staff was extremely pleasant. The
                                breakfast staff are very friendly and efficient.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 reviews-list reviews-sidebar">
                <div class="row">
                    <div class="col-3 pl-5">
                        <p><b>C.M</b></p>
                        <p>United States</p>
                    </div>
                    <div class="col pr-5">
                        <div class="rate mb-1">
                            <span class="mr-4">
                                <i class="fa fa-star mr-2" aria-hidden="true"></i>
                                <i class="fa fa-star mr-2" aria-hidden="true"></i>
                                <i class="fa fa-star mr-2" aria-hidden="true"></i>
                                <i class="fa fa-star mr-2" aria-hidden="true"></i>
                            </span>
                            <span>
                                <b>8.68/10</b>
                            </span>
                        </div>
                        <div class="review-content">
                            <p>
                                We love the hotel and its location. The front desk staff was extremely pleasant. The
                                breakfast staff are very friendly and efficient.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 reviews-list reviews-sidebar">
                <div class="row">
                    <div class="col-3 pl-5">
                        <p><b>P.M</b></p>
                        <p>United Kingdom</p>
                    </div>
                    <div class="col pr-5">
                        <div class="rate mb-1">
                            <span class="mr-4">
                                <i class="fa fa-star mr-2" aria-hidden="true"></i>
                                <i class="fa fa-star mr-2" aria-hidden="true"></i>
                                <i class="fa fa-star mr-2" aria-hidden="true"></i>
                                <i class="fa fa-star mr-2" aria-hidden="true"></i>
                                <i class="fa fa-star mr-2" aria-hidden="true"></i>
                            </span>
                            <span>
                                <b>9.03/10</b>
                            </span>
                        </div>
                        <div class="review-content">
                            <p>
                                Fantastic hotel, great atmosphere, room upgrade was much appreciated. All the staff I
                                interacted with were great. One of the best hotel experiences I have ever had I would
                                unreservedly recommend the hotel and will return.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 reviews-list reviews-sidebar">
                <div class="row">
                    <div class="col-3 pl-5">
                        <p><b>G.P</b></p>
                        <p>United Kingdom</p>
                    </div>
                    <div class="col pr-5">
                        <div class="rate mb-1">
                            <span class="mr-4">
                                <i class="fa fa-star mr-2" aria-hidden="true"></i>
                                <i class="fa fa-star mr-2" aria-hidden="true"></i>
                                <i class="fa fa-star mr-2" aria-hidden="true"></i>
                                <i class="fa fa-star mr-2" aria-hidden="true"></i>
                                <i class="fa fa-star mr-2" aria-hidden="true"></i>
                                <i class="fa fa-star mr-2" aria-hidden="true"></i>
                            </span>
                            <span>
                                <b>9.68/10</b>
                            </span>
                        </div>
                        <div class="review-content">
                            <p>
                                Probably the best City hotel weve stayed at. Alal Gogo was particularly outstanding. He
                                managed to arrange for us to attend the Woody Allan Band show with our guest (who is a
                                musician) even when it had been booked out and was very courteous throughout. Thank you
                                so muclh. A wonderful stay.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 reviews-list reviews-sidebar">
                <div class="row">
                    <div class="col-3 pl-5">
                        <p><b>C.M</b></p>
                        <p>United States</p>
                    </div>
                    <div class="col pr-5">
                        <div class="rate mb-1">
                            <span class="mr-4">
                                <i class="fa fa-star mr-2" aria-hidden="true"></i>
                                <i class="fa fa-star mr-2" aria-hidden="true"></i>
                                <i class="fa fa-star mr-2" aria-hidden="true"></i>
                                <i class="fa fa-star mr-2" aria-hidden="true"></i>
                            </span>
                            <span>
                                <b>8.68/10</b>
                            </span>
                        </div>
                        <div class="review-content">
                            <p>
                                We love the hotel and its location. The front desk staff was extremely pleasant. The
                                breakfast staff are very friendly and efficient.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 reviews-list reviews-sidebar">
                <div class="row">
                    <div class="col-3 pl-5">
                        <p><b>C.M</b></p>
                        <p>United States</p>
                    </div>
                    <div class="col pr-5">
                        <div class="rate mb-1">
                            <span class="mr-4">
                                <i class="fa fa-star mr-2" aria-hidden="true"></i>
                                <i class="fa fa-star mr-2" aria-hidden="true"></i>
                                <i class="fa fa-star mr-2" aria-hidden="true"></i>
                                <i class="fa fa-star mr-2" aria-hidden="true"></i>
                            </span>
                            <span>
                                <b>8.68/10</b>
                            </span>
                        </div>
                        <div class="review-content">
                            <p>
                                We love the hotel and its location. The front desk staff was extremely pleasant. The
                                breakfast staff are very friendly and efficient.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 reviews-list reviews-sidebar">
                <div class="row">
                    <div class="col-3 pl-5">
                        <p><b>P.M</b></p>
                        <p>United Kingdom</p>
                    </div>
                    <div class="col pr-5">
                        <div class="rate mb-1">
                            <span class="mr-4">
                                <i class="fa fa-star mr-2" aria-hidden="true"></i>
                                <i class="fa fa-star mr-2" aria-hidden="true"></i>
                                <i class="fa fa-star mr-2" aria-hidden="true"></i>
                                <i class="fa fa-star mr-2" aria-hidden="true"></i>
                                <i class="fa fa-star mr-2" aria-hidden="true"></i>
                            </span>
                            <span>
                                <b>9.03/10</b>
                            </span>
                        </div>
                        <div class="review-content">
                            <p>
                                Fantastic hotel, great atmosphere, room upgrade was much appreciated. All the staff I
                                interacted with were great. One of the best hotel experiences I have ever had I would
                                unreservedly recommend the hotel and will return.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 reviews-list reviews-sidebar">
                <div class="row">
                    <div class="col-3 pl-5">
                        <p><b>G.P</b></p>
                        <p>United Kingdom</p>
                    </div>
                    <div class="col pr-5">
                        <div class="rate mb-1">
                            <span class="mr-4">
                                <i class="fa fa-star mr-2" aria-hidden="true"></i>
                                <i class="fa fa-star mr-2" aria-hidden="true"></i>
                                <i class="fa fa-star mr-2" aria-hidden="true"></i>
                                <i class="fa fa-star mr-2" aria-hidden="true"></i>
                                <i class="fa fa-star mr-2" aria-hidden="true"></i>
                                <i class="fa fa-star mr-2" aria-hidden="true"></i>
                            </span>
                            <span>
                                <b>9.68/10</b>
                            </span>
                        </div>
                        <div class="review-content">
                            <p>
                                Probably the best City hotel weve stayed at. Alal Gogo was particularly outstanding. He
                                managed to arrange for us to attend the Woody Allan Band show with our guest (who is a
                                musician) even when it had been booked out and was very courteous throughout. Thank you
                                so muclh. A wonderful stay.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 reviews-list reviews-sidebar">
                <div class="row">
                    <div class="col-3 pl-5">
                        <p><b>C.M</b></p>
                        <p>United States</p>
                    </div>
                    <div class="col pr-5">
                        <div class="rate mb-1">
                            <span class="mr-4">
                                <i class="fa fa-star mr-2" aria-hidden="true"></i>
                                <i class="fa fa-star mr-2" aria-hidden="true"></i>
                                <i class="fa fa-star mr-2" aria-hidden="true"></i>
                                <i class="fa fa-star mr-2" aria-hidden="true"></i>
                            </span>
                            <span>
                                <b>8.68/10</b>
                            </span>
                        </div>
                        <div class="review-content">
                            <p>
                                We love the hotel and its location. The front desk staff was extremely pleasant. The
                                breakfast staff are very friendly and efficient.
                            </p>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
        <div class="text-center mb-3">
            <div class="mb-3">
                <a href="javascript:void(0);" class="underline" id="loadMore">SEE MORE COMMENTS</a>
            </div>
            <!-- <a href="#" class="btn btn-dark btn-lg px-5 rounded-0">BOOK</a> -->
        </div>

        <div class="row">
            <div class="col-md-6">
                <h4 class="my-4">Add Review</h4>
                <form method="POST" name="addreview" id="review_form" action="">
                    <input type="hidden" name="hotelid" id="hotelid" value="{{ isset($hotel_data[0]->id)?$hotel_data[0]->id:'' }}">
                    <div id="error-msg"></div>
                    <label for="crate">Rating</label>
                    <div class="form-group">
                        <div class="rate-input">
                            
                            <input type="radio" id="star10" name="rate" value="10" />
                            <label for="star10" title="text">10 stars</label>
                            <input type="radio" id="star9" name="rate" value="9" />
                            <label for="star9" title="text">9 stars</label>
                            <input type="radio" id="star8" name="rate" value="8" />
                            <label for="star8" title="text">8 stars</label>
                            <input type="radio" id="star7" name="rate" value="7" />
                            <label for="star7" title="text">7 stars</label>
                            <input type="radio" id="star6" name="rate" value="6" />
                            <label for="star6" title="text">6 stars</label>
                            <input type="radio" id="star5" name="rate" value="5" />
                            <label for="star5" title="text">5 stars</label>
                            <input type="radio" id="star4" name="rate" value="4" />
                            <label for="star4" title="text">4 stars</label>
                            <input type="radio" id="star3" name="rate" value="3" />
                            <label for="star3" title="text">3 stars</label>
                            <input type="radio" id="star2" name="rate" value="2" />
                            <label for="star2" title="text">2 stars</label>
                            <input type="radio" id="star1" name="rate" value="1" />
                            <label for="star1" title="text">1 star</label>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="form-group">
                        <label for="fname">First Name</label>
                        <input type="text" name="fname" id="fname" class="form-control" minlength="2" required >
                    </div>
                    <div class="form-group">
                        <label for="lname">Last Name</label>
                        <input type="text" name="lname" id="lname" class="form-control" minlength="2" required>
                    </div>
                    <div class="form-group">
                        <label for="country">Country</label>
                        <input type="text" id="country" name="country" class="form-control" minlength="2" required>
                    </div>
                    <div class="form-group">
                        <label for="comment">Comment</label>
                        <textarea id="comment" class="form-control" name="comment" cols="30" rows="4" minlength="2" required></textarea>
                    </div>
                    <div class="form-group text-right">
                        <button type="submit" class="btn btn-primary" id="btn-review-save">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
