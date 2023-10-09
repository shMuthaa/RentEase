@extends('layouts.dashboard')

@section('template_title')
    {{ $payment->name ?? "{{ __('Show') Payment" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="page-header">
                <h1> {{ __('Show') }} Payment </h1>
                @include('layouts.gadget-welcome')
            </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('payments.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Roomid:</strong>
                            {{ $payment->roomid }}
                        </div>
                        <div class="form-group">
                            <strong>Tenantid:</strong>
                            {{ $payment->tenantid }}
                        </div>
                        <div class="form-group">
                            <strong>Datepaid:</strong>
                            {{ $payment->datepaid }}
                        </div>
                        <div class="form-group">
                            <strong>Amountpaid:</strong>
                            {{ $payment->amountpaid }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
