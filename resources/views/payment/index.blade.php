@extends('layouts.dashboard')

@section('template_title')
    Payment
@endsection

@section('content')
    <div class="container-fluid">
        <div class="page-header">
            <h1> {{ __('Show') }} Payment </h1>
            @include('layouts.gadget-welcome')
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                             <div class="float-right">
                                <a href="{{ route('payments.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Roomid</th>
										<th>Tenantid</th>
										<th>Datepaid</th>
										<th>Amountpaid</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($payments as $payment)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $payment->roomid }}</td>
											<td>{{ $payment->tenantid }}</td>
											<td>{{ $payment->datepaid }}</td>
											<td>{{ $payment->amountpaid }}</td>

                                            <td>
                                                <form action="{{ route('payments.destroy',$payment->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('payments.show',$payment->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('payments.edit',$payment->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $payments->links() !!}
            </div>
        </div>
    </div>
@endsection


