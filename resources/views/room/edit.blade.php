@extends('layouts.dashboard')

@section('template_title')
    {{ __('Update') }} Room
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">
                
                <div class="page-header">
                    <h1> {{ __('Update') }} Room </h1>
                    @include('layouts.gadget-welcome')
                </div>

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-body">
                        <form method="POST" action="{{ route('rooms.update', $room->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('room.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
