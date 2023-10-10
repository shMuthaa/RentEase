@extends('layouts.dashboard')

@section('template_title')
    Room
@endsection

@section('content')
    <div class="container-fluid">
        <div class="page-header">
            <h1> Rooms </h1>
            @include('layouts.gadget-welcome')
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">
                             <div class="float-right">
                                <a href="{{ route('rooms.create') }}" class="btn btn-primary btn-sm float-right custom-button"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive custom-table">
                            <table class="recent-order__table table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Roomnumber</th>
										<th>Floor</th>
										<th>Rentpermonth</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($rooms as $room)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $room->roomnumber }}</td>
											<td>{{ $room->floor }}</td>
											<td>{{ $room->rentpermonth }}</td>

                                            <td>
                                                <form action="{{ route('rooms.destroy',$room->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('rooms.show',$room->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('rooms.edit',$room->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $rooms->links() !!}
            </div>
        </div>
    </div>
@endsection
