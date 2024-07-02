<x-app-layout>

    <div class="container-fluid p-0 mb-0" id="homePageContainer">
        <div class="row mb-4 mb-4 p-0 m-0 justify-content-center" id="searchForHomeRow" style="height: 600px">
            <div class="col-12 col-sm-12 col-md-12 col-lg-8 align-self-center" style="max-width:800px">
                <form action="#">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Search for a home"
                            aria-label="Recipient's username" aria-describedby="button-addon2">
                        <button class="btn btn  -outline-secondary" type="button" id="button-addon2">Search</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Gridview of Renta properties -->
    <div class="container">
        <div class="row mx-auto mt-4" id="rentalProperties">

            @foreach ($properties as $property)
                <div id="mainPCol" class="col-12 col-md-3 col-lg-2 mb-5">
                    <a href="{{ route('city.property', ['id' => $property->property_id]) }}">
                        <figure class="figure shadow bg-body rounded">
                            <img src="https://macbuckets46.s3.us-west-2.amazonaws.com/property_{{ $property->images[0]->image_property_id }}_{{ $property->images[0]->image_location }}{{ $property->images[0]->image_type }}{{ $property->images[0]->image_type_count }}.{{ $property->images[0]->image_format }}"
                                class="fig-img-fluid">

                            <figcaption class="figure-caption p-0 text-end " id="fig-big-screen">
                                <p class="text-end">
                                    House for {{ $property->detail->detail_property_ad_type }}
                                </p>
                                <!-- make this h5 float to the left -->
                                <h5 class="float-start">
                                    <p class="price">${{ number_format($property->property_price) }}
                                    </p>
                                </h5>
                                <br>
                                <p> <strong>{{ $property->detail->detail_num_bed }}</strong> beds |
                                    <strong>{{ $property->detail->detail_num_bath }}</strong> baths |
                                    {{ $property->detail->detail_sqft }} sqft
                                </p>

                                <p class="pAddress">{{ $property->property_address }}</p>

                                <small>{{ $property->agent->agent_company }},
                                    {{ $property->agent->agent_firstname }}
                                    {{ $property->agent->agent_lastname }}</small>

                            </figcaption>
                        </figure>
                    </a>
                </div>
            @endforeach
        </div>

        {{--         <div class="row">
            <div class="col col-sm-12 col-md-3">

            </div>
            <div class="col col-sm-12 col-md-3"></div>
            <div class="col col-sm-12 col-md-3"></div>
        </div>
    </div> --}}

</x-app-layout>
