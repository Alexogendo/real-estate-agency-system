@extends('frontend.layouts.app')

@section('styles')

@endsection

@section('content')

    <section class="section">
        <div class="container">
            <div class="row">
                <h4 class="section-heading">Featured Properties</h4>
            </div>
            <div class="row">

                
                    <div class="col s12 m4">
                        <div class="card">
                            <div class="card-image">
                                
                                    <span class="card-image-bg" style="background-image: url({{asset('frontend/images/real-estate2.jpg')}}) " href="#1!">With a parking lane</span>
                                
                                    <span class="card-image-bg"> Better House<span>
                               
                                    <a class="btn-floating halfway-fab waves-effect waves-light indigo" title="Featured"><i class="small material-icons">star</i></a>
                                
                            </div>
                            <div class="card-content property-content">
                                <a href="">
                                    <span class="card-title tooltipped" data-position="bottom" data-tooltip=""> House</span>
                                </a>

                                <div class="address">
                                    <i class="small material-icons left">location_town</i>
                                    <span>Nakuru</span>
                                </div>
                                <div class="address">
                                    <i class="small material-icons left">place</i>
                                    <span>Njoro</span>
                                </div>
                                <div class="address">
                                    <i class="small material-icons left">check_box</i>
                                    <span>140 </span>
                                </div>

                                <h5>
                    
                                    <div class="right" id=""></div>
                                </h5>
                            </div>
                            <div class="card-action property-action">
                                <span class="btn-flat">
                                    <i class="material-icons">check_box</i>
                                    Bedroom: <strong>4</strong> 
                                </span>
                                <span class="btn-flat">
                                    <i class="material-icons">check_box</i>
                                    Bathroom: <strong>2</strong> 
                                </span>
                                <span class="btn-flat">
                                    <i class="material-icons">check_box</i>
                                    Area: <strong>3522</strong>Meters square
                                </span>
                                <span class="btn-flat">
                                    <i class="material-icons">comment</i> 
                                    <strong>Great</strong>
                                </span>
                            </div>
                        </div>
                    </div>



                    <div class="col s12 m4">
                        <div class="card">
                            <div class="card-image">
                                
                                    <span class="card-image-bg" style="background-image: url({{asset('frontend/images/real_estate.jpg')}}) " href="#1!">With a soccer and hockey fields</span>
                                
                                    <span class="card-image-bg">Altitude Apartment<span>
                               
                                    <a class="btn-floating halfway-fab waves-effect waves-light indigo" title="Featured"><i class="small material-icons">star</i></a>
                                
                            </div>
                            <div class="card-content property-content">
                                <a href="">
                                    <span class="card-title tooltipped" data-position="bottom" data-tooltip="">Apartment</span>
                                </a>

                                <div class="address">
                                    <i class="small material-icons left">location_town</i>
                                    <span>Kisii</span>
                                </div>
                                <div class="address">
                                    <i class="small material-icons left">place</i>
                                    <span>Jogoo</span>
                                </div>
                                <div class="address">
                                    <i class="small material-icons left">check_box</i>
                                    <span>620</span>
                                </div>

                                <h5>
                    
                                    <div class="right" id=""></div>
                                </h5>
                            </div>
                            <div class="card-action property-action">
                                <span class="btn-flat">
                                    <i class="material-icons">check_box</i>
                                    Bedroom: <strong>250</strong> 
                                </span>
                                <span class="btn-flat">
                                    <i class="material-icons">check_box</i>
                                    Bathroom: <strong>152</strong> 
                                </span>
                                <span class="btn-flat">
                                    <i class="material-icons">check_box</i>
                                    Area: <strong>8566</strong>Meters square
                                </span>
                                <span class="btn-flat">
                                    <i class="material-icons">comment</i> 
                                    <strong>Excellent</strong>
                                </span>
                            </div>
                        </div>
                    </div>


                    <div class="col s12 m4">
                        <div class="card">
                            <div class="card-image">
                                
                                    <span class="card-image-bg" style="background-image: url({{asset('frontend/images/property_8.jpg')}}) " href="#1!">Swimming pool Available</span>
                                
                                    <span class="card-image-bg">Great Rentals<span>
                               
                                    <a class="btn-floating halfway-fab waves-effect waves-light indigo" title="Featured"><i class="small material-icons">star</i></a>
                                
                            </div>
                            <div class="card-content property-content">
                                <a href="">
                                    <span class="card-title tooltipped" data-position="bottom" data-tooltip="">Rental</span>
                                </a>

                                <div class="address">
                                    <i class="small material-icons left">location_town</i>
                                    <span>Kisumu</span>
                                </div>
                                <div class="address">
                                    <i class="small material-icons left">place</i>
                                    <span>Lake side</span>
                                </div>
                                <div class="address">
                                    <i class="small material-icons left">check_box</i>
                                    <span>200</span>
                                </div>

                                <h5>
                    
                                    <div class="right" id=""></div>
                                </h5>
                            </div>
                            <div class="card-action property-action">
                                <span class="btn-flat">
                                    <i class="material-icons">check_box</i>
                                    Bedroom: <strong>40</strong> 
                                </span>
                                <span class="btn-flat">
                                    <i class="material-icons">check_box</i>
                                    Bathroom: <strong>80</strong> 
                                </span>
                                <span class="btn-flat">
                                    <i class="material-icons">check_box</i>
                                    Area: <strong>7844</strong>Meters square
                                </span>
                                <span class="btn-flat">
                                    <i class="material-icons">comment</i> 
                                    <strong>Smart Rooms</strong>
                                </span>
                            </div>
                        </div>
                    </div>

            </div>
        </div>
    </section>
@endsection

@section('scripts')

<script>

    $(function(){
        var js_properties = <?php echo json_encode($properties);?>;
        js_properties.data.forEach(element => {
            if(element.rating){
                var elmt = element.rating;
                var sum = 0;
                for( var i = 0; i < elmt.length; i++ ){
                    sum += parseFloat( elmt[i].rating ); 
                }
                var avg = sum/elmt.length;
                if(isNaN(avg) == false){
                    $("#propertyrating-"+element.id).rateYo({
                        rating: avg,
                        starWidth: "20px",
                        readOnly: true
                    });
                }else{
                    $("#propertyrating-"+element.id).rateYo({
                        rating: 0,
                        starWidth: "20px",
                        readOnly: true
                    });
                }
            }
        });
    })
</script>
@endsection