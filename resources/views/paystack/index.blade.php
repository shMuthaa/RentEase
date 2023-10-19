@extends('layouts.dashboard')


@section('content')
    <section class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="page-header">
                    <h1>{{ __('Make') }} Payment </h1>
                    @include('layouts.gadget-welcome')
                </div>

                @includeif('partials.errors')

                <div class="card card-default">

                    <div class="card-body">

                        @include('paystack.form')

                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://js.paystack.co/v1/inline.js"></script>

    <script>
        function payWithPaystack(e) {
            e.preventDefault();
            let handler = PaystackPop.setup({
                key: 'pk_test_682de89b9fabda6698a1b67c98d2909ce7de5fb7', // Replace with your public key
                email: document.getElementById("email-address").value,
                amount: document.getElementById("amount").value * 100,
                currency: "KES",
                ref: '' + Math.floor((Math.random() * 1000000000) +
                    1
                    ), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
                // label: "Optional string that replaces customer email"
                onClose: function() {
                    alert('Window closed.');
                },
                callback: function(response) {
                    // let message = 'Payment complete! Reference: ' + response.reference;
                    // alert(message);
                    var baseURL = window.location.origin;
                    var endpoint = baseURL + "/paystackcallback";
                    var csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
                    var housenumber = document.getElementById("house-number").value;
                    var email = document.getElementById("email-address").value;
                    var amount = document.getElementById("amount").value * 100;
                    var tenantid = document.getElementById("tenantid").value;
                    
                    console.log(endpoint);

                    response.roomid = housenumber;
                    response.email = email;
                    response.amount = amount;
                    response.tenantid = tenantid;

                    console.log(response);

                    // Send the payload to the /paystackcallback endpoint
                    fetch(endpoint, {
                            method: 'POST',
                            headers: {
                                "Content-Type": "application/json",
                                "Accept": "application/json",
                                "X-CSRF-TOKEN": csrfToken
                            },
                            body: JSON.stringify(response),
                        })
                        .then(response => response.json())
                        .then(data => {
                            // Handle the response here
                            console.log(data);
                            window.location.href = baseURL + "/home";
                        })
                        .catch((error) => {
                            console.error('Error:', error);
                        });
                }
            });

            handler.openIframe();
        }
    </script>
@endsection
