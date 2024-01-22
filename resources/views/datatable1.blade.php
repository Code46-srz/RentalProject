<!-- bring in the layout file -->
@extends('layout.app')

<!-- define the content section -->
@section('content')
    <table id="property" class="display">
        <!-- define a table with the customers from my database -->
        <thead>
            <tr>
                <th>Customer ID</th>
                <th>Customer Name</th>
                <th>Customer Lastname</th>
                <th>Customer Phone #</th>
                <th>Customer Address</th>
                <th>Customer CardInfo</th>
            </tr>
        </thead>

    </table>


    <script>
        // get document ready
        $(document).ready(function() {

            // call the function to get the table data
            getTable();
            loadGlobalModal('hello')
            showGlobalModal();

        });

        function getTable() {
            rhGetRequest('/datatable/getdata', displayTableData)
        }

        function displayTableData(response) {
            $('#property').DataTable({
                data: response.data,
                columns: [{
                        data: 'customer_id',

                    },
                    {
                        data: 'cusomer_name',
                    },
                    {
                        data: 'customer_lastname',

                    },
                    {
                        data: 'customer_phone',
                        render: function(data, type, row, meta) {
                            if (type === 'display') {
                                data = '<i class="fa-solid fa-phone"></i><a href="tel:' + data + '">' +
                                    data + '</a>'
                            }
                            return data;
                        }

                    },
                    {
                        data: 'customer_address',

                    },

                    {
                        data: 'customer_cardinfo',

                    },
                ]
            });
        }
    </script>
@endsection
