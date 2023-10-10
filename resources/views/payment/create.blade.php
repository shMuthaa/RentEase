@extends('layouts.dashboard')

@section('template_title')
    {{ __('Create') }} Payment
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                <div class="page-header">
                    <h1> {{ __('Create') }} Payment </h1>
                    @include('layouts.gadget-welcome')
                </div>
                @includeif('partials.errors')

                <div class="card card-default">
               
                    <div class="card-body">
                        <form class="custom-form" method="POST" action="{{ route('payments.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('payment.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
