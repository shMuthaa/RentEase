@extends('layouts.dashboard')

@section('content')
    <main>
        <div class="dashboard">
            <h1>Dashboard</h1>

            <div class="dashboard__date">
                <input class="dashboard__input-date"type="date" name="" id="">
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

            <div class="recent-order">
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
            </div>
        </div>
    </main>

    <!-- Right Side -->
        <div class="gadgets-side">

            <div class="gadgets-side__header">
                <button class="menu-button" id="menu-btn">
                    <span class="material-icons-sharp menu-button__icon">menu</span>
                </button>

                <div class="theme-toggler">
                    <span
                        class="
                        material-icons-sharp 
                        theme-toggler__button
                        theme-toggler__button--light
                        theme-toggler__button--active">light_mode</span>
                    <span
                        class="
                        material-icons-sharp 
                        theme-toggler__button--dark
                        theme-toggler__button">dark_mode</span>
                </div>

                <div class="profile">
                    <div class="profile__info">
                        <p>Hey, <b>{{ Auth::user()->name }}</b></p>
                        <small class="text-muted">Admin</small>
                    </div>
                    <div>
                        <img class="profile__photo" src="{{ asset('assets/images/profile-1.jpg') }}" alt="profile-picture">
                    </div>
                </div>
            </div>

            {{-- @section('gadgets')
                <!-- Recents Updates -->
                <div class="recent-updates">
                    <h2 class="recent-updates__title">Recent Updates</h2>

                    <div class="recent-updates__container">

                        <div class="recent-updates__update">

                            <div class="profile__photo-container-container">
                                <img class="profile__photo" src="{{ asset('assets/images/profile-2.jpg') }}" alt="photo2">
                            </div>

                            <div class="recent-updates__message">
                                <p><b>Stanley Ngugi</b> Payment for April 20th received
                                </p>
                                <small class="text-muted"> 42 Minutes Ago</small>
                            </div>

                        </div>

                        <div class="recent-updates__update">

                            <div>
                                <img class="profile__photo" src="{{ asset('assets/images/profile-3.jpg') }}" alt="photo2">
                            </div>

                            <div class="recent-updates__message">
                                <p><b>Wendy Karambu</b> Payment for March 20th received</p>
                                <small class="text-muted"> 8 Minutes Ago</small>
                            </div>

                        </div>

                        <div class="recent-updates__update">

                            <div>
                                <img class="profile__photo" src="{{ asset('assets/images/profile-4.jpg') }}" alt="photo2">
                            </div>

                            <div class="recent-updates__message">
                                <p><b>Patricia Ndwaru</b> Payment for April 21st received</p>
                                <small class="text-muted"> 2 Minutes Ago</small>
                            </div>

                        </div>

                    </div>
                </div>

                <!-- Sales Analytics -->
                <div class="sales-analytics">
                    <h2 class="sales-analytics__title">Rent Analytics</h2>


                    <div class="sales-analytics__item">
                        <div class="sales-analytics__icon">
                            <span class="material-icons-sharp">shopping_cart</span>
                        </div>

                        <div class="sales-analytics__content">
                            <div class="sales-analytics__info">
                                <h3 class="sales-analytics__label">RECENT PAYMENTS</h3>
                                <small class="text-muted">Last 24 Hours</small>
                            </div>
                            <h5 class="text--success">+39%</h5>
                            <h3>19</h3>

                        </div>
                    </div>

                    <div class="sales-analytics__item">
                        <div class="sales-analytics__icon sales-analytics__icon--offline">
                            <span class="material-icons-sharp ">local_mall</span>
                        </div>

                        <div class="sales-analytics__content">
                            <div class="sales-analytics__info">
                                <h3 class="sales-analytics__label">BALANCES</h3>
                                <small class="text-muted">Last 24 Hours</small>
                            </div>

                            <h5 class="text--danger">-17%</h5>
                            <h3>ksh 11,100</h3>

                        </div>
                    </div>

                    <div class="sales-analytics__item">
                        <div class="sales-analytics__icon sales-analytics__icon--customers">
                            <span class="material-icons-sharp">person</span>
                        </div>

                        <div class="sales-analytics__content">
                            <div class="sales-analytics__info">
                                <h3 class="sales-analytics__label">RECENTLY VACCATED</h3>
                                <small class="text-muted">Last 24 Hours</small>
                            </div>
                            <h5 class="text--success">+2%</h5>
                            <h3>1</h3>

                        </div>
                    </div>

                    <div class="sales-analytics__item sales-analytics__item--add-product">
                        <div class="sales-analytics__content sales-analytics__content--add-product">
                            <span class="material-icons-sharp">add</span>
                            <h3 class="sales-analytics__title-product">Add Tenant</h3>
                        </div>
                    </div>

                </div>
            @endsection --}}
        </div>
    </div>
@endsection
