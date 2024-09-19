<!-- Categories Start -->
<div class="container-xxl py-5 category">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="section-title bg-white text-center text-primary px-3">Categories</h6>
            <h1 class="mb-5">Courses Categories</h1>
        </div>
        <div class="row g-3">
            <div class="col-lg-7 col-md-6">
                <div class="row g-3">
                    @foreach ($categories as $category)
                        @if ($loop->last)
                            {{-- do no thing --}}
                        @else
                            <div class="col-lg-12 col-md-12 wow zoomIn" data-wow-delay="{{ $loop->first ? '0.1s' : '0.3s' }}">
                                <a class="position-relative d-block overflow-hidden" href="">
                                    <img class="img-fluid" src="{{ asset('assets/images/category/' . $category->image) }}" alt="{{  $category->title }}">
                                    <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3"
                                        style="margin: 1px;">
                                        <h5 class="m-0">{{ $category->title }}</h5>
                                        <small class="text-primary">{{ $category->courses->count() }} Courses</small>
                                    </div>
                                </a>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
            @foreach ($categories as $category)
                @if ($loop->last)
                    <div class="col-lg-5 col-md-6 wow zoomIn" data-wow-delay="0.7s" style="min-height: 350px;">
                        <a class="position-relative d-block h-100 overflow-hidden" href="">
                            <img class="img-fluid position-absolute w-100 h-100"
                                src="{{ asset('assets/images/category/' . $category->image) }}" alt=""
                                style="object-fit: cover;">
                            <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3"
                                style="margin:  1px;">
                                <h5 class="m-0">{{ $category->title }}</h5>
                                <small class="text-primary">{{ $category->courses->count() }} Courses</small>
                            </div>
                        </a>
                    </div>
                @endif
            @endforeach
        </div>
    </div>
</div>
<!-- Categories Start -->
