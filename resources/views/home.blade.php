@extends('layouts.dashboard')

@section('content')
    <main>
            <div class="dashboard">
                <h1>Dashboard</h1>

                {{-- <div class="dashboard__date">
                    <input class="dashboard__input-date"type="date" name="" id="">
                </div> --}}

                @if(auth()->check())
                
                    @if(auth()->user()->usertype == 'administrator')

                          <!-- Insights -->
                <div class="dashboard__insights">

                    <!-- CARD OF SALES -->
                    <div class="card">
                        <span class="material-icons-sharp card__icon card__icon--danger">analytics</span>
                        <div class="card__middle">

                            <div class="card__left">
                                <h3 class="card__label">Total Rent Paid</h3>
                                <h2 class="card__title">Ksh {{ number_format($payments, 0) }}</h2>
                            </div>

                            <div class="card__right">
                                {{-- <div class="progress">
                                    <svg class="progress_svg">
                                        <circle class="progress_circle progress_circle--sales" cx="38" cy="38"
                                            r="36"></circle>
                                    </svg>
                                    <div class="progress__number">
                                        <p>89%</p>
                                    </div>
                                </div> --}}
                            </div>

                        </div>

                        {{-- <small class="card__text-small">Since Inception</small> --}}
                    </div>

                    <!-- CARD OF  EXPENSES-->
                    <div class="card">
                        <span class="material-icons-sharp card__icon card__icon--success">bar_chart</span>
                        <div class="card__middle">

                            <div class="card__left">
                                <h3 class="card__label">Number of Tenants</h3>
                                <h2 class="card__title">{{ $tenants}} </h2>
                            </div>

                            {{-- <div class="card__right">
                                <div class="progress">
                                    <svg class="progress_svg">
                                        <circle class="progress_circle progress_circle--expenses" cx="38" cy="38"
                                            r="36"></circle>
                                    </svg>
                                    <div class="progress__number">
                                        <p>62%</p>
                                    </div>
                                </div>
                            </div> --}}

                        </div>

                        {{-- <small class="card__text-small">Real Time</small> --}}
                    </div>

                    <!-- CARD OF INCOME -->
                    <div class="card">
                        <span class="material-icons-sharp card__icon">stacked_line_chart</span>
                        <div class="card__middle">

                            <div class="card__left">
                                <h3 class="card__label">Number of Rooms</h3>
                                <h2 class="card__title">{{ $rooms }}</h2>
                            </div>

                            {{-- <div class="card__right">
                                <div class="progress">
                                    <svg class="progress_svg">
                                        <circle class="progress_circle progress_circle--income" cx="38" cy="38"
                                            r="36"></circle>
                                    </svg>
                                    <div class="progress__number">
                                        <p>82%</p>
                                    </div>
                                </div>
                            </div> --}}

                        </div>

                        {{-- <small class="card__text-small"></small> --}}
                    </div>

                </div>

                    @elseif(auth()->user()->usertype == 'tenant')
                    <div class="recent-order">
                        <h2 class="recent-order__title">Payments</h2>
                        @foreach ($payments as $payment)
    <p>Payment ID: {{ $payment->id }}</p>
    <p>Amount: {{ $payment->amount }}</p>
    <!-- Add other properties as needed -->
@endforeach
                        <table class="recent-order__table">
                            <thead>
                                <tr>
                                    <th>Payment ID</th>
                                    <th>Amount Paid</th>
                                    <th>Date Paid</th>
                                </tr>
                            </thead>
                            <tbody class="recent-order__table-body">
                                
                                @if (count($payments) > 0)
                         @foreach ($payments as $payment)
                         <tr class="recent-order__row">
                            <td class="recent-order__colum">{{ $payment->id }}</td>
                            <td class="recent-order__colum">{{ $payment->amountpaid }}</td>
                            <td class="recent-order__colum">{{ $payment->datepaid }}</td>
                        </tr>                        
                         @endforeach   
                        @endif
                            </tbody>
    
                        </table>
                        {{-- <a href="#" class="recent-order__show-all">Show All</a> --}}
                    </div>
                    
                    @endif

                @endif
                <!-- Recent Orders -->

              
            </div>
        </main>

        </div>
    </div>
@endsection
