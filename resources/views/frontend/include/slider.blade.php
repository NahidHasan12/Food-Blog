
<div style="height: 450px" class="banner-carousel banner-carousel-1 mb-0">

    @forelse ($slider as $slider)
        <div class="banner-carousel-item" style="height: 450px; background-image:url({{ asset('backend/post_img/'.$slider->image) }})">
            <div class="slider-content text-right">
                <div class="container h-100">
                    <div class="row align-items-center h-100">
                        <div class="col-md-12">
                        <h2 class="slide-title" data-animation-in="slideInDown">{{ $slider->category->name }}</h2>
                        <h3 class="slide-sub-title" data-animation-in="fadeIn">{{ $slider->title }}</h3>
                        <div data-animation-in="slideInLeft">
                            <a href="about.html" class="slider btn btn-primary border" aria-label="learn-more-about-us">Read More</a>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @empty
        <div class="banner-carousel-item" style="height: 450px; background-image:url({{ asset('frontend') }}/images/slider-main/sss.jpg)">
            <div class="slider-content text-right">
                <div class="container h-100">
                    <div class="row align-items-center h-100">
                        <div class="col-md-12">
                        <h2 class="slide-title" data-animation-in="slideInDown">Slider Image Not Found</h2>
                        <h3 class="slide-sub-title" data-animation-in="fadeIn">We are extremly sorry</h3>
                        <p class="slider-description lead" data-animation-in="slideInRight">Slider image are coming soon</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforelse

</div>
