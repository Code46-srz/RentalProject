<x-app-layout>
    <div id="cityViewerContainer" class="row m-0">
        <div id="mapContainer" class="col-12 col-md-6 col-lg-8 pr-0 pl-0"> {{-- style="height: 100vh"> --}}
            <div id="map" style="height: 100%;"></div>
        </div>

        <div id = "propertiesSide" class="col-12 col-md-6 col-lg-4">
            <div class="row">
                @foreach ($properties as $property)
                    <div id="mainPCol" class="col-xs-12 col-md-6 col-lg-6 col-xl-6 no-gutters mx-auto mb-1"
                        style="overflow-y:hidden;">
                        <a href="javascript:void(0);" onclick="initProperty({{ $property->property_id }})">
                            <figure class="figure shadow bg-body rounded">
                                <img src="https://macbuckets46.s3.us-west-2.amazonaws.com/property_{{ $property->images[0]->image_property_id }}_{{ $property->images[0]->image_location }}{{ $property->images[0]->image_type }}{{ $property->images[0]->image_type_id}}.{{ $property->images[0]->image_format }}"
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
                            {{-- <figure id="city" class="figure shadow p-3 mb-5 bg-body rounded">
                                <img
                                    src="https://macbuckets46.s3.us-west-2.amazonaws.com/property_{{ $property->images[0]->image_property_id }}_{{ $property->images[0]->image_type }}{{ $property->images[0]->image_type_count }}.{{ $property->images[0]->image_format }}">
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
                            </figure> --}}
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {

            initProperty({{ $initialProperty->property_id }});
        });

        function initProperty(id) {
            $.ajax({
                url: '/property/' + id + '/details',
                type: 'GET',
                dataType: 'json',
                success: function(response) {
                    console.log(response.success);
                    $('.modal-body').html(response.data.property);
                    $('#propertyModal').modal('show');
                },
                error: function(error) {
                    console.log(response.success);
                    $('.modal-body').html(response.data.property);
                    $('#propertyModal').modal('show');
                }
            });
        }

        (g => {
            var h, a, k, p = "The Google Maps JavaScript API",
                c = "google",
                l = "importLibrary",
                q = "__ib__",
                m = document,
                b = window;
            b = b[c] || (b[c] = {});
            var d = b.maps || (b.maps = {}),
                r = new Set,
                e = new URLSearchParams,
                u = () => h || (h = new Promise(async (f, n) => {
                    await (a = m.createElement("script"));
                    e.set("libraries", [...r] + "");
                    for (k in g) e.set(k.replace(/[A-Z]/g, t => "_" + t[0].toLowerCase()), g[k]);
                    e.set("callback", c + ".maps." + q);
                    a.src = `https://maps.${c}apis.com/maps/api/js?` + e;
                    d[q] = f;
                    a.onerror = () => h = n(Error(p + " could not load."));
                    a.nonce = m.querySelector("script[nonce]")?.nonce || "";
                    m.head.append(a)
                }));
            d[l] ? console.warn(p + " only loads once. Ignoring:", g) : d[l] = (f, ...n) => r.add(f) && u()
                .then(() =>
                    d[l](f, ...n))
        })
        ({
            key: "AIzaSyBAxPTSLa3M4z89gaQh4LqI1m1DBjiOotA",
            v: "beta"
        });
    </script>
</x-app-layout>
