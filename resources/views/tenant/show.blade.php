@extends('layouts.dashboard')

@section('content')
  <main>
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                <div class="page-header">
                    <h1> {{ __('Show') }} Tenant </h1>
                    @include('layouts.gadget-welcome')
                </div>
                
                <div class="card">
                    <div class="card-header">
                      
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('tenants.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Fullname:</strong>
                            {{ $tenant->fullname }}
                        </div>
                        <div class="form-group">
                            <strong>Phonenumber:</strong>
                            {{ $tenant->phonenumber }}
                        </div>
                        <div class="form-group">
                            <strong>Email:</strong>
                            {{ $tenant->email }}
                        </div>
                        <div class="form-group">
                            <strong>Roomid:</strong>
                            {{ $tenant->roomid }}
                        </div>
                        <div class="form-group">
                            <strong>Rentdue:</strong>
                            {{ $tenant->rentdue }}
                        </div>
                        <div class="form-group">
                            <strong>Rentpaid:</strong>
                            {{ $tenant->rentpaid }}
                        </div>
                        <div class="form-group">
                            <strong>Balance:</strong>
                            {{ $tenant->balance }}
                        </div>
                        <div class="form-group">
                            <strong>Datemovedin:</strong>
                            {{ $tenant->datemovedin }}
                        </div>
                        <div class="form-group">
                            <strong>Datemovedout:</strong>
                            {{ $tenant->datemovedout }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
  </main>
@endsection
