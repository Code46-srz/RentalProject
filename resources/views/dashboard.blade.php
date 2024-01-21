<x-app-layout>
    <div class="row d-flex justify-center">
        <div class="col-12" id="dashboardContainer" border:1px solid black">
            <div class="row">
                <div class="col-9" id="propertyListView">
                    <button type="button" class="btn btn-primary float-right" data-bs-toggle="modal"
                        data-bs-target="#propertyCreate">Add Property</button>
                    <table id="example" class="table table-striped" onclick="#" style="width:100%">
                        <thead>
                            <tr>
                                <th>Property Id</th>
                                <th>Property Address</th>
                                <th>Property Price</th>
                                <th>Market Age</th>
                                <th>Property Details Action</th>
                                <th>Remove Property</th>
                            </tr>
                        </thead>
                        <tbody>
                            text
                        </tbody>
                    </table>
                </div>
                <div class="col-3 d-flex justify-content-center align-items-center" id="profileView">
                    <div class="card" style="width: 18rem;">
                        <img src="https://macbuckets46.s3.us-west-2.amazonaws.com/system/image-break.png"
                            class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Agents Name</h5>
                            <p class="card-text">AGENT DESCRIPTION"Some quick example text to build on the card title
                                and make up the bulk
                                of the card's content."</p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Location</li>
                            <li class="list-group-item">phone number</li>
                            <li class="list-group-item">email</li>
                            <li class="list-group-item">agent type</li>
                        </ul>
                        <div class="card-body">
                            <p>unkown yet </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <script>
        $(document).ready(function() {

            addProperty();
        });

        function addProperty(id) {
            //we will use this function to send creation data to the server not for any modal viewing
            $.ajax({
                url: '/property/create',
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

        function triggerFileInput() {
            document.getElementById('myFileInput').click();
        }
    </script>
</x-app-layout>
