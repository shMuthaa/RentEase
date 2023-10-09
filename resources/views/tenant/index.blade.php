@extends('layouts.dashboard')

@section('content')
<main>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="page-header">
                    <h1> Tenants </h1>
                    @include('layouts.gadget-welcome')
                </div>
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">
 

                             <div class="float-right">
                                <a href="{{ route('tenants.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                        <div class="table-responsive">
                            <table class="recent-order__table table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
										<th>Fullname</th>
										<th>Phonenumber</th>
										<th>Email</th>
										<th>Roomid</th>
										<th>Rentdue</th>
										<th>Rentpaid</th>
										<th>Balance</th>
										<th>Datemovedin</th>
										<th>Datemovedout</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($tenants as $tenant)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $tenant->fullname }}</td>
											<td>{{ $tenant->phonenumber }}</td>
											<td>{{ $tenant->email }}</td>
											<td>{{ $tenant->roomid }}</td>
											<td>{{ $tenant->rentdue }}</td>
											<td>{{ $tenant->rentpaid }}</td>
											<td>{{ $tenant->balance }}</td>
											<td>{{ $tenant->datemovedin }}</td>
											<td>{{ $tenant->datemovedout }}</td>

                                            <td>
                                                <form action="{{ route('tenants.destroy',$tenant->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('tenants.show',$tenant->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('tenants.edit',$tenant->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $tenants->links() !!}
            </div>
        </div>
    </div>
</main>
@endsection
