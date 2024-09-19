<!-- Service Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-4">
            @foreach ($services as $service)

            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item text-center pt-3">
                    <div class="p-4">
                        @if ($service->icon == null)
                        <i class="fa fa-3x  fa-globe  text-primary mb-4"></i>
                        @else
                        <i class="{{ $service->icon }}"></i>
                        @endif
                        <h5 class="mb-3">{{ $service->title }}</h5>
                        <p>{{ Str::limit($service->description , 100, '...') }}</p>
                    </div>
                </div>
            </div>
            @endforeach


        </div>
    </div>
</div>
<!-- Service End -->
