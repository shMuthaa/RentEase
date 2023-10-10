@extends('layouts.dashboard')

@section('content')
    <main>
        <div class="dashboard">
            <h1>Dashboard</h1>

            <div class="dashboard__date">
                <input class="dashboard__input-date"type="month" name="" id="">
            </div>

            <!-- Insights -->
            <div class="dashboard__insights">

                <!-- CARD OF SALES -->
                <div class="card">
                    <span class="material-icons-sharp card__icon card__icon--danger">analytics</span>
                    <div class="card__middle">

                        <div class="card__left">
                            <h3 class="card__label">Total Rent</h3>
                            <h2 class="card__title">Ksh 125,024</h2>
                        </div>

                        <div class="card__right">
                            <div class="progress">
                                <svg class="progress_svg">
                                    <circle class="progress_circle progress_circle--sales" cx="38" cy="38"
                                        r="36"></circle>
                                </svg>
                                <div class="progress__number">
                                    <p>89%</p>
                                </div>
                            </div>
                        </div>

                    </div>

                    <small class="card__text-small">Last 20 days</small>
                </div>

                <!-- CARD OF  EXPENSES-->
                <div class="card">
                    <span class="material-icons-sharp card__icon card__icon--success">bar_chart</span>
                    <div class="card__middle">

                        <div class="card__left">
                            <h3 class="card__label">Total Expenses</h3>
                            <h2 class="card__title">Ksh 14,160</h2>
                        </div>

                        <div class="card__right">
                            <div class="progress">
                                <svg class="progress_svg">
                                    <circle class="progress_circle progress_circle--expenses" cx="38" cy="38"
                                        r="36"></circle>
                                </svg>
                                <div class="progress__number">
                                    <p>62%</p>
                                </div>
                            </div>
                        </div>

                    </div>

                    <small class="card__text-small">Last 24 Hours</small>
                </div>

                <!-- CARD OF INCOME -->
                <div class="card">
                    <span class="material-icons-sharp card__icon">stacked_line_chart</span>
                    <div class="card__middle">

                        <div class="card__left">
                            <h3 class="card__label">Total Income</h3>
                            <h2 class="card__title">Ksh 170,864</h2>
                        </div>

                        <div class="card__right">
                            <div class="progress">
                                <svg class="progress_svg">
                                    <circle class="progress_circle progress_circle--income" cx="38" cy="38"
                                        r="36"></circle>
                                </svg>
                                <div class="progress__number">
                                    <p>82%</p>
                                </div>
                            </div>
                        </div>

                    </div>

                    <small class="card__text-small">Last 2 months</small>
                </div>

            </div>

            <!-- Recent Orders -->

            {{-- <div class="recent-order">
                <h2 class="recent-order__title">Recent Orders</h2>
                <table class="recent-order__table">
                    <thead>
                        <tr>
                            <th>Tenant Name</th>
                            <th>Tenant Contact</th>
                            <th>Tenat Room No.</th>
                            <th>Payment status</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody class="recent-order__table-body">
                        <tr class="recent-order__row">
                            <td class="recent-order__colum">Mia Khalifa</td>
                            <td class="recent-order__colum">0714856310</td>
                            <td class="recent-order__colum">A1</td>
                            <td class="recent-order__colum text--warning">Pending</td>
                            <td class="recent-order__colum text--primary">Details</td>
                        </tr>
                        <tr class="recent-order__row">
                            <td class="recent-order__colum">Moses Mwatha</td>
                            <td class="recent-order__colum">0714585631</td>
                            <td class="recent-order__colum">A2</td>
                            <td class="recent-order__colum text--warning">Pending</td>
                            <td class="recent-order__colum text--primary">Details</td>
                        </tr>
                        <tr class="recent-order__row">
                            <td class="recent-order__colum">Collins Guantai</td>
                            <td class="recent-order__colum">0711785631</td>
                            <td class="recent-order__colum">A3</td>
                            <td class="recent-order__colum text--warning">Pending</td>
                            <td class="recent-order__colum text--primary">Details</td>
                        </tr>
                        <tr class="recent-order__row">
                            <td class="recent-order__colum">Jua Kali</td>
                            <td class="recent-order__colum">0712585631</td>
                            <td class="recent-order__colum">B1</td>
                            <td class="recent-order__colum text--warning">Pending</td>
                            <td class="recent-order__colum text--primary">Details</td>
                        </tr>
                        <tr class="recent-order__row">
                            <td class="recent-order__colum">John Jones</td>
                            <td class="recent-order__colum">0716785631</td>
                            <td class="recent-order__colum">B2</td>
                            <td class="recent-order__colum text--warning">Pending</td>
                            <td class="recent-order__colum text--primary">Details</td>
                        </tr>
                    </tbody>

                </table>
                <a href="#" class="recent-order__show-all">Show All</a>
            </div> --}}
        </div>
    </main>

    </div>
    </div>
@endsection
