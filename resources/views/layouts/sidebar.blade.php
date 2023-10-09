@extends('home')

@section('sidebar')
     <!-- content sidebar -->
     <div class="sidebar__content">

        <a class="sidebar__item sidebar__item--active" href="#">
            <span class="material-icons-sharp sidebar__item-icon sidebar__item-icon--active">grid_view</span>
            <h3 class="sidebar__item-text">Overview</h3>
        </a>
        
        <a class="sidebar__item" href="#">
            <span class="material-icons-sharp sidebar__item-icon">person_outline</span>
            <h3 class="sidebar__item-text">Tenants</h3>
        </a>

        <a class="sidebar__item" href="#">
            <span class="material-icons-sharp sidebar__item-icon">receipt_long</span>
            <h3 class="sidebar__item-text">Payments</h3>
        </a>

        <a class="sidebar__item" href="#">
            <span class="material-icons-sharp sidebar__item-icon">insights</span>
            <h3 class="sidebar__item-text">Analytics</h3>
        </a>

        <a class="sidebar__item" href="#">
            <span class="material-icons-sharp sidebar__item-icon">mail_outline</span>
            <h3 class="sidebar__item-text">Messages</h3>
            <span class="sidebar__message-count">26</span>
        </a>

        <a class="sidebar__item" href="#">
            <span class="material-icons-sharp sidebar__item-icon">inventory</span>
            <h3 class="sidebar__item-text">Rooms</h3>
        </a>

        <a class="sidebar__item" href="#">
            <span class="material-icons-sharp sidebar__item-icon">report_gmailerrorred</span>
            <h3 class="sidebar__item-text">Reports</h3>
        </a>

        <a class="sidebar__item" href="#">
            <span class="material-icons-sharp sidebar__item-icon">settings</span>
            <h3 class="sidebar__item-text">Settings</h3>
        </a>

        <a class="sidebar__item" href="#">
            <span class="material-icons-sharp sidebar__item-icon">add</span>
            <h3 class="sidebar__item-text">Add Tenant</h3>
        </a>

        <a class="sidebar__item" href="#">
            <span class="material-icons-sharp sidebar__item-icon">logout</span>
            <h3 class="sidebar__item-text">Logout</h3>
        </a>

    </div>
@endsection