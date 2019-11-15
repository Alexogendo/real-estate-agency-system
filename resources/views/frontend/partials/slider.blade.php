<section class="carousel carousel-slider center">
    @if($sliders)
        @foreach($sliders as $slider)
            <div class="carousel-item" style="background-image: url({{Storage::url('slider/'.$slider->image)}})" href="#{{$slider->id}}!">
                <div class="slider-content">
                    <h2 class="white-text">{{ $slider->title }}</h2>
                    <p class="white-text">{{ $slider->description }}</p>
                </div>
            </div>
        @endforeach
    @else 
        <div class="carousel-item amber indigo-text" style="background-image: url({{ asset('frontend/images/real_estate.jpg') }})" href="#1!">
            <h2>Bernadette Real Estate</h2>
            <p class="indigo-text">Exceptional services for agents and users.</p>
        </div>
    @endif
</section>