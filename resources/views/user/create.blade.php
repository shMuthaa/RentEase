@extends('layouts.dashboard')

@section('content')
<section class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="page-header">
                <h1>{{ __('Create') }} User </h1>
                @include('layouts.gadget-welcome')
            </div>
           
            @includeif('partials.errors')
            
            <div class="card card-default">
               
                <div class="card-body">
                    <form class="custom-form" method="POST" action="{{ route('users.store') }}"  role="form" enctype="multipart/form-data" >
                        @csrf

                        @include('user.form')

                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
