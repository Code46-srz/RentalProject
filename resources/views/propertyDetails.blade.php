<div class="row g-2">
    @foreach ($propertyImg as $img)
        @if ($img->image_type == 'main')
            <div class="col-12">
                <img class="detailsMainImage mx-auto"
                    src="https://macbuckets46.s3.us-west-2.amazonaws.com/property_{{ $img->image_property_id }}_{{ $img->image_type }}{{ $img->image_type_id }}.{{ $img->image_format }}"
                    alt="Main Image">
            </div>
        @endif
    @endforeach
    <div class="col-12">
        <div class="row g-2">
            @php
                $sideImages = $propertyImg->where('image_type_id', '2')->values();
                $sideImagesCount = $sideImages->count();
                //dd($sideImagesCount);
            @endphp
            {{-- @dd($sideImagesCount) --}}
            @for ($i = 0; $i <= 3; $i++)
                <div class="col-6 mb-2">
                    @if ($i < $sideImagesCount)
                        {{-- Use $i directly and ensure it's less than $sideImagesCount --}}
                        <img class="sideImages"
                            src="https://macbuckets46.s3.us-west-2.amazonaws.com/property_{{ $sideImages[$i]->image_property_id }}_{{ $sideImages[$i]->image_type }}{{ $sideImages[$i]->image_type_id }}.{{ $sideImages[$i]->image_format }}"
                            alt="Side Image {{ $i }}">
                    @else
                        <img class="sideImages"
                            src="https://macbuckets46.s3.us-west-2.amazonaws.com/system/no-Image.png"
                            alt="No image found">
                    @endif
                </div>
            @endfor


        </div>
    </div>
</div>


<div class="row mt-8" id="secondRowDetails">
    <!-- section1 -->
    <div class="col-12 col-md-8 col-lg-8" id="mainC1">
        <div class="row g-2" id="row1">
            <div class="col-12 col-md-6 col-lg-6 " id="detailsSection1">
                <h1><strong>${{ number_format($property->property_price) }}</strong></h1>
                <br>
                <h2>{{ $property->property_address }}</h2>
                <span class="badge mt-4" id="estimate">
                    <strong> ${{ number_format(floor(intval($property->property_price) / 12)) }}/mo Get
                        pre-qualified</strong>

                </span>
                {{-- $property->agent->agent_lastname --}}
            </div>
            <div class="class-12 col-md-6 col-lg-6" id="detailsSection2">
                <h2 class="modalDetails">{{ $property->detail->detail_num_bed }} beds |
                    {{ $property->detail->detail_num_bath }} baths |
                    {{ $property->detail->detail_sqft }} sqft</h2>
                <h2 class="modalAdType">House for {{ $property->detail->detail_property_ad_type }}</h2>
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
        <h2 class="detailsPropertyACompany">{{ $property->agent->agent_company }}</h2>
    </div>


</div>
