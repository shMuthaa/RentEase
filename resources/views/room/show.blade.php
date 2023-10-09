@extends('layouts.dashboard')

@section('template_title')
    {{ $room->name ?? "{{ __('Show') Room" }}
@endsection

@section('content')
    <section class="content container-fluid">
            <div class="page-header">
                <h1> {{ __('Show') }} Room </h1>
                @include('layouts.gadget-welcome')
            </div>
            <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Room</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('rooms.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Roomnumber:</strong>
                            {{ $room->roomnumber }}
                        </div>
                        <div class="form-group">
                            <strong>Floor:</strong>
                            {{ $room->floor }}
                        </div>
                        <div class="form-group">
                            <strong>Rentpermonth:</strong>
                            {{ $room->rentpermonth }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
