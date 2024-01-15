<x-app-layout>

    <div class="container-fluid g-0 mb-4" id="homePageContainer">
        <div class="row mb-4 justify-content-center" id="searchForHomeRow" style="height: 600px">
            <div class="col-12 col-sm-12 col-md-12 col-lg-8 align-self-center" style="max-width:800px">
                <form action="#">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Search for a home"
                            aria-label="Recipient's username" aria-describedby="button-addon2">
                        <button class="btn btn-outline-secondary" type="button" id="button-addon2">Search</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Gridview of Renta properties -->
    <div class="container">
        <div class="row mx-auto mt-4" id="rentalProperties">

            @foreach ($properties as $property)
                <div id="mainPCol" class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-3 col-xxl-3  mb-5">
                    <a href={{ 'city/' . $property->property_id . '/property' }}>{{-- "{{ route('city.property', ['id' => $property->property_id]) }}"> --}}
                        <figure class="figure shadow p-3 mb-5 bg-body rounded">
                            <img src="{{ route('image.displayImage', ['id' => $property->images[0]->image_id]) }}"
                                alt="Image" class="figure-img img-fluid rounded w-100" style="height: 15vh;">
                            <figcaption class="figure-caption text-end">
                                <p class="text-end">
                                    House for {{ $property->detail->detail_property_ad_type }}
                                </p>
                                <!-- make this h5 float to the left -->
                                <h5 class="float-start">
                                    ${{ $property->property_price }}
                                </h5>
                                <br>

                                <strong>{{ $property->detail->detail_num_bed }}</strong> beds |
                                <strong>{{ $property->detail->detail_num_bath }}</strong> baths |
                                {{ $property->detail->detail_sqft }} sqft

                                {{ $property->property_address }}

                                {{ $property->agent->agent_company }},
                                {{ $property->agent->agent_firstname }}
                                {{ $property->agent->agent_lastname }}

                            </figcaption>
                        </figure>
                    </a>
                </div>
            @endforeach
        </div>

        <div class="row">
            <div class="col col-sm-12 col-md-3">

            </div>
            <div class="col col-sm-12 col-md-3"></div>
            <div class="col col-sm-12 col-md-3"></div>
        </div>
    </div>

</x-app-layout>
