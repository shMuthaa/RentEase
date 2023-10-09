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
</div>