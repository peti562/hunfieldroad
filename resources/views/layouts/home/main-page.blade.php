@extends('layouts.master')

@section('main-content')
    <div class="row">
        @include('layouts.home.news_slider')

    </div>

            @include('layouts.home.news_box_horizontal')

    <div class="row">
        @include('layouts.home.news_box_vertical')
        @include('layouts.home.news_box_vertical')
        @include('layouts.home.news_box_vertical')
        @include('layouts.home.news_box_vertical')
    </div>

    <div class="row">
        @include('layouts.home.news_ribbon')
    </div>







    <section class="section">
        <div class="row">
            <div class="col l3 col m6 col s12">
                <div class="col l12 col m12 col s12 no-padding">
                    <!--  Vertical News Box -->
                    <div class="news vertical z-depth-1 margin-bottom-20">
                        <!-- News Image -->
                        <div class="news-image">
                            <img src="http://placehold.it/350x235?text=News Image" class="responsive-img" alt="news Image">
                        </div>
                        <!-- News Description -->
                        <div class="news-description">
                            <div class="news-time">
                                <i class="fa fa-clock-o"></i> 9 min ago
                            </div>
                            <div class="news-title"><a href="javascript:void(0);"> Nam erat nulla, auctor a eros vitae, hendrerit efficitur. </a></div>
                            <div class="news-content"><p>et bibendum leo metus vel magna. In dapibus ac tellus non rutrum. Integer ut nisi risus.</p></div>
                        </div>
                    </div>
                </div>
                <div class="col l12 col m12 col s12 no-padding">
                    <!-- Vertical News Box -->
                    <div class="news vertical z-depth-1">
                        <!-- News Image -->
                        <div class="news-image">
                            <img src="http://placehold.it/350x235?text=News Image" class="responsive-img" alt="news Image">
                        </div>
                        <!-- News Description -->
                        <div class="news-description">
                            <div class="news-time">
                                <i class="fa fa-clock-o"></i> 9 min ago
                            </div>
                            <div class="news-title"><a href="javascript:void(0);"> Nam erat nulla, auctor a eros vitae, hendrerit efficitur magna leo metus vel magna. </a></div>
                            <div class="news-content"><p>et bibendum leo metus vel magna. In dapibus ac tellus non rutrum. Integer ut nisi risus.</p></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col l6 col m6 col s12">
                <!-- Vertical News Box -->
                <div class="news vertical z-depth-1">
                    <!-- News Image -->
                    <div class="news-image">
                        <img src="http://placehold.it/350x236?text=News Image" class="responsive-img" alt="news Image">
                    </div>
                    <!-- News Description -->
                    <div class="news-description">
                        <div class="news-time">
                            <i class="fa fa-clock-o"></i> 9 min ago
                        </div>
                        <div class="news-title large-font"><a href="javascript:void(0);"> Nam erat nulla, auctor a eros vitae, hendrerit efficitur magna leo metus vel magna. </a></div>
                        <div class="news-content">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur erat velit, tristique eu molestie vitae, malesuada eget est. Vestibulum ut aliquam libero. Nunc nec risus dolor. Aliquam pellentesque eget lectus vel lobortis. Donec gravida nec tortor ac semper. Aliquam dapibus dolor et metus feugiat porta. Sed in mauris lorem. Quisque ultrices nulla dui. Praesent sollicitudin consectetur tincidunt.</p>
                            <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. In lobortis dignissim eros sed convallis. Donec et quam eros. Suspendisse a enim sit amet nisl accumsan malesuada. Maecenas sodales velit at molestie blandit. Nullam maximus tellus ante, vitae finibus lorem luctus vel. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>

                        </div>
                    </div>
                </div>
            </div>

            <div class="col l3 col m12 col s12 no-padding">
                <div class="col l12 col m6 col s12">
                    <!-- Vertical News Box -->
                    <div class="news vertical z-depth-1 margin-bottom-20">
                        <!-- News Image -->
                        <div class="news-image">
                            <img src="http://placehold.it/350x235?text=News Image" class="responsive-img" alt="news Image">
                        </div>
                        <!-- News Description -->
                        <div class="news-description">
                            <div class="news-time">
                                <i class="fa fa-clock-o"></i> 9 min ago
                            </div>
                            <div class="news-title"><a href="javascript:void(0);"> Nam erat nulla, auctor a eros vitae, hendrerit efficitur. </a></div>
                            <div class="news-content"><p>et bibendum leo metus vel magna. In dapibus ac tellus non rutrum. Integer ut nisi risus.</p></div>
                        </div>
                    </div>
                </div>
                <div class="col l12 col m6 col s12">
                    <!-- Vertical News Box -->
                    <div class="news vertical z-depth-1">
                        <!-- News Image -->
                        <div class="news-image">
                            <img src="http://placehold.it/350x235?text=News Image" class="responsive-img" alt="news Image">
                        </div>
                        <!-- News Description -->
                        <div class="news-description">
                            <div class="news-time">
                                <i class="fa fa-clock-o"></i> 9 min ago
                            </div>
                            <div class="news-title"><a href="javascript:void(0);"> Nam erat nulla, auctor a eros vitae, hendrerit efficitur magna leo metus vel magna. </a></div>
                            <div class="news-content"><p>et bibendum leo metus vel magna. In dapibus ac tellus non rutrum. Integer ut nisi risus.</p></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endsection