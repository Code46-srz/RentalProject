<x-app-layout>
    <div class="row" style="overflow-y:hidden">
        <div id="mapContainer" class="col-7">
            <div id="map" style="height: 100vh;"></div>
        </div>

        <div class="col-12 col-md-5 col-lg-5 col-xl-5 col-xxl-5 " style="height: 100vh; overflow-y: auto;">
            <div class="row">
                @foreach ($properties as $property)
                    <div id="mainPCol" class="col-xs-12 col-md-12 col-lg-12 col-xl-6 no-gutters ">
                        <a href="javascript:void(0);" onclick="initProperty({{ $property->property_id }})">
                            <figure id="city" class="figure shadow p-3 mb-5 bg-body rounded">
                                <img src="{{ route('image.displayImage', ['id' => $property->images[0]->image_id]) }}"
                                    alt="Image" class="figure-img img-fluid rounded w-100" style="height: 12vh;">
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
