@extends('layouts.dashboard')

@section('template_title')
    {{ __('Create') }} Room
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="page-header">
                    <h1> {{ __('Create') }} Room </h1>
                    @include('layouts.gadget-welcome')
                </div>

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-body">
                        <form method="POST" action="{{ route('rooms.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('room.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
