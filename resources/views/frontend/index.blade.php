@extends('frontend.landing_master')
@section('content')

    <section class="our_activity">


        @php
        $activities=\App\Models\Activity::with('user','foundation')->get();
        $foundations=\App\Models\Foundation::with('user')->get();
        @endphp

        <h2>OUR ACTIVITY</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor <br> incididunt ut labore et dolore magna aliqua. </p>
        <div class="container">
            <div class="row">
                @foreach($activities as $activity)
                <div class="col-md-4 col-xs-12">
                    <div class="single-Promo" >
                        <div class="promo-icon">
                            <img src="{{asset($activity->image)}}" style="height: 70px; width: 100px">
                        </div>
                        <h2 class="text-center"><a href="{{url('activities/details/'.$activity->id)}}">{{$activity->title}}</a></h2>
                        <p>
                            {{Illuminate\Support\Str::of($activity->description)->words(15, '...')}}
                        </p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>





    <section class="our_cuauses">
        <h2>OUR Foundations</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor <br> incididunt ut labore et dolore magna aliqua. </p>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="our_cuauses_single owl-carousel owl-theme">
                        @foreach($foundations as $foundation)
                        <div class="item">
                            <img src="{{asset($foundation->image)}}" href="{{url('foundations/details/'.$foundation->id)}}" style="height: 250px; width: 436px" alt="">
                            <div class="for_padding">
                                <h2 class="text-center">{{$foundation->name}}</h2>
                                <p class="text-center text-dark" style="margin-top: 0px !important;">{{$foundation->motto}}</p>
                                <p style="margin-top: 10px !important;">
                                    {{Illuminate\Support\Str::of($foundation->description)->words(15, '...')}}
                                </p>

                                <h2 class="borderes"><a href="{{url('foundations/details/'.$foundation->id)}}">DONATE NOW</a></h2>
                            </div>
                        </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="clear"></div>


    <section class="carosal_bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="carosal_bottom_single owl-carousel owl-theme">
                        <div class="item">
                            <img src="img/volanteer_1.jpg" alt="">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit.</p>
                            <h5><i class="material-icons">format_quote</i></h5>
                            <h4>Florence M. Cofer</h4>
                            <h6>Designer</h6>
                        </div>
                        <div class="item">
                            <img src="img/volanteer_2.jpg" alt="">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit.</p>
                            <h5><i class="material-icons">format_quote</i></h5>
                            <h4>Florence M. Cofer</h4>
                            <h6>Designer</h6>
                        </div>
                        <div class="item">
                            <img src="img/volanteer_3.jpg" alt="">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit.</p>
                            <h5><i class="material-icons">format_quote</i></h5>
                            <h4>Florence M. Cofer</h4>
                            <h6>Designer</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="letast_news">
        <h2>latest news</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor <br> incididunt ut labore et dolore magna aliqua. </p>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="single_news">
                        <img src="img/news_images_1.jpg" alt="">
                        <div class="texts">
                            <p class="date"><a href="#">30 May, 2017</a></p>
                            <h3>Wood Work Adds Value To <br> Your Property Five</h3>
                            <p class="test">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                            <h3><a href="#">READ MORE</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single_news">
                        <img src="img/news_images_2.jpg" alt="">
                        <div class="texts">
                            <p class="date"><a href="#">30 May, 2017</a></p>
                            <h3>Wood Work Adds Value To <br> Your Property Five</h3>
                            <p class="test">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                            <h3><a href="#">READ MORE</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single_news">
                        <img src="img/news_images_3.jpg" alt="">
                        <div class="texts">
                            <p class="date"><a href="#">30 May, 2017</a></p>
                            <h3>Wood Work Adds Value To <br> Your Property Five</h3>
                            <p class="test">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                            <h3><a href="#">READ MORE</a></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        let p = document.querySelector('p');
        let maxLength = 100;

        if (p.textContent.length > maxLength) {
            p.textContent = p.textContent.slice(0, maxLength) + '...';
        }
    </script>






@endsection
