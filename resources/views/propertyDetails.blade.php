<div class="row g-2">
    <div class="col-12 col-md-6 col-lg-6">
        <img class="detailsMainImage" src="{{ route('image.displayImage', ['id' => $property->images[0]->image_id]) }} ">
    </div>
    <div class="col-12 col-md-6 col-lg-6 gx-2">
        <div class="row g-2">
            <div class="col-6 mb-2">
                <img class="sideImages"
                    src="{{ route('image.displayImage', ['id' => $property->images[0]->image_id]) }} ">
            </div>
            <div class="col-6  mb-2">
                <img class="sideImages"
                    src="{{ route('image.displayImage', ['id' => $property->images[0]->image_id]) }} ">

            </div>
        </div>
        <div class="row g-2">
            <div class="col-6 ">
                <img class="sideImages"
                    src="{{ route('image.displayImage', ['id' => $property->images[0]->image_id]) }} ">
            </div>
            <div class="col-6 gx-2">
                <img class="sideImages"
                    src="{{ route('image.displayImage', ['id' => $property->images[0]->image_id]) }} ">
            </div>
        </div>
    </div>
</div>



<div class="row mt-8" id="secondRowDetails">
    <!-- section1 -->
    <div class="col-12 col-md-8 col-lg-8" id="mainC1">
        <div class="row g-2" id="row1">
            <div class="col-12 col-md-6 col-lg-6 " id="detailsSection1">
                <h1>${{ number_format($property->property_price) }}</h1>
                <h2>{{ $property->property_address }}</h2>
                <span class="badge mt-4" id="estimate">
                    ${{ number_format(floor(intval($property->property_price) / 12)) }}/mo
                    Get pre-qualified
                </span>
            </div>
            <div class="class-12 col-md-6 col-lg-6" id="detailsSection2">
                <h2>{{ $property->detail->detail_num_bed }} beds | {{ $property->detail->detail_num_bath }} baths |
                    {{ $property->detail->detail_sqft }} sqft</h2>
                <h2>House for {{ $property->detail->detail_property_ad_type }}</h2>
            </div>
        </div>
        <!-- mainC1 section2 -->
        <div class="row mt-4" id="thirdRowDetails">
            <div class="col-12 col-md-4 col-lg-4 ">
                <h1><span class="alert   detailBadge d-flex justify-content-center align-items-center">
                        A/C {{ $property->detail->detail_ac_type }}
                    </span></h1>
            </div>
            <div class="col-12 col-md-4 col-lg-4">
                <h1><span class="alert detailBadge d-flex
                justify-content-center align-items-center">
                        Built in {{ $property->detail->detail_year_built }}
                    </span></h1>
            </div>
            <div class="col-12 col-md-4 col-lg-4">
                <h1><span class="alert   detailBadge d-flex justify-content-center align-items-center">
                        HOA {{ $property->detail->detail_hoa }}
                    </span></h1>
            </div>
            <div class="col-12 col-md-4 col-lg-4">
                <h1><span class="alert   detailBadge d-flex justify-content-center align-items-center">
                        HomeZestimate® ${{ intVal($property->property_price) - 50000 }}
                    </span></h1>
            </div>
            <div class="col-12 col-md-4 col-lg-4">
                <h1><span class="alert   detailBadge d-flex justify-content-center align-items-center">
                        Num CarPorts {{ $property->detail->detail_num_carport }}
                    </span></h1>
            </div>
            <div class="col-12 col-md-4 col-lg-4">
                <h1>
                    <span class="alert   detailBadge d-flex justify-content-center align-items-center">

                        ${{ number_format(intVal($property->property_price) / intVal($property->detail->detail_sqft)) }}
                        /Sqft
                    </span>
                </h1>
            </div>
        </div>
    </div>
    <!-- MainC2 -->
    <div class="class-12 col-md-4 col-lg-4" id="mainC2">
        <div class="card">
            <div class="card-body">
                <!-- make center -->
                <a href="#" class="btn btn-primary d-flex justify-content-center">Request a tour</a>
                <a href="#" class="btn btn-outline-primary d-flex justify-content-center mt-2">Contact a
                    agent</a>

            </div>
        </div>
        <h2>{{ $property->agent->agent_company }}</h2>
        {{ $property->agent->agent_lastname }}</h2>
    </div>


</div>
