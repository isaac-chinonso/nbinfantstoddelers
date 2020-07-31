@extends('Layout.master1')    
@section('title')
Post Review || Nbinfants&toddlers
@endsection
@include('Layout.header1')
@section('content')

<!-- CONTENT AREA -->    

            <article class="container theme-container">

                <!-- Single Products Start -->
                <section id="product-fullwidth" class="space-bottom-45"> 
                    <div class="single-product-wrap">      
                        <div class="list-category-details">
                            <div class="row" style="padding-top: 50px;">
                              <button class="btn btn-info btn-sm" style="background-color: #aaa; "><a href="{{ route('productdetail',$productdetail->slug) }}" style="color: #fff;"><< GO BACK TO PRODUCT</a></button><hr>
                                <div class="col-md-4 thumbnail">
                                    <h3>Your review of this product</h3>
                                    <div class="white-bg">
                                        <img alt="product-img" src="../upload/images//{{ $productdetail->image->first()->source }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div>
                                       <h3 style="text-transform: capitalize;">{{ $productdetail->title }}</h3>
                                        <small style="color: #bbb;">{{ $productdetail->category->title }}</small><br><br>
                                          @include('include.success')
                                          @include('include.warning')
                                          @include('include.error')
                                          <form method="POST" action="{{ route('postreview',$productdetail->id) }}">
                                                <div class="form-group">
                                                  <label>Rate it</label>
                                                  <div class="form-control">
                                                    <fieldset class="rating">
                                                      <input type="radio" id="star5" name="rate" value="5" />
                                                        <label class="full" for="star5" title="Awesome - 5 stars"></label>
                                                      <input type="radio" id="star4half" name="rate" value="4.5" />
                                                        <label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
                                                      <input type="radio" id="star4" name="rate" value="4" />
                                                        <label class="full" for="star4" title="Pretty good - 4 stars"></label>
                                                      <input type="radio" id="star3half" name="rate" value="3.5" />
                                                        <label class="half" for="star3half" title="Meh - 3.5 stars"></label>
                                                      <input type="radio" id="star3" name="rate" value="3" />
                                                        <label class="full" for="star3" title="Meh - 3 stars"></label>
                                                      <input type="radio" id="star2half" name="rate" value="2.5" />
                                                        <label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
                                                      <input type="radio" id="star2" name="rate" value="2" />
                                                        <label class="full" for="star2" title="Kinda bad - 2 stars"></label>
                                                      <input type="radio" id="star1half" name="rate" value="1.5" />
                                                        <label class="half" for="star1half" title="Meh - 1.5 stars"></label>
                                                      <input type="radio" id="star1" name="rate" value="1" />
                                                        <label class="full" for="star1" title="Sucks big time - 1 star"></label>
                                                      <input type="radio" id="starhalf" name="rate" value="0.5" />
                                                        <label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
                                                    </fieldset> 
                                                  </div>
                                                </div>
                                                <div class="form-group">
                                                  <label>Reviews</label>
                                                    <textarea class="form-control" name="comment"></textarea>
                                                </div>
                                            <div class="pull-right">
                                              <button class="btn btn-success btn-sm waves-effect waves-light">SEND MY REVIEW</button>
                                            </div>
                                            <input type="hidden" name="_token" value="{{ Session::token() }}"> 
                                          </form>
                                    </div>

                            </div>                
                        </div>  
                    </div>            
                </section>
                <!-- Single Products Ends -->

                
                
            </article>

            <!-- / CONTENT AREA -->
        @endsection