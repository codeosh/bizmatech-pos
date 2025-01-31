{{-- resources\views\layout\sidebar.blade.php --}}
<div class="sidebar">
    <!-- Profile Header -->
    <div class="profile-header p-2">
        <!-- Title -->
        <div class="text-center mb-3">
            <h4 class="mb-0 fw-bold profile-title">BizmaTech POS</h4>
        </div>

        <!-- Horizontal Separator -->
        <hr class="my-2">

        <!-- User Avatar, Username, and Role -->
        <div class="profile-contents card">
            <div class="row g-0">
                <!-- User Avatar -->
                <div class="col-md-3 d-flex justify-content-center align-items-center">
                    <i class="fa-solid fa-user fa-lg"></i>
                </div>

                <!-- Username and Role -->
                <div class="col-md-8 d-flex justify-content-center align-items-center">
                    <div style="line-height: 1.2rem; white-space: nowrap; width: 100%;">
                        <p class="mb-0 fw-bold user-name text-truncate">Derek Joshua T.
                            Catigan</p>
                        <small class="text-muted user-role text-truncate">Admin</small>
                    </div>
                </div>

                <!-- Dropdown Button -->
                <div class="col-md-1 d-flex justify-content-center align-items-center">
                    <div class="dropdown">
                        <!-- Dropdown Toggle Button -->
                        <button class="btn btn-link text-dark" type="button" id="dropdownMenuButton"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fas fa-sort-down text-secondary mb-3"></i>
                        </button>

                        <!-- Dropdown Menu -->
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton">
                            <li><a class="dropdown-item" href="{{route('profile.page')}}">Profile</a></li>
                            <li><a class="dropdown-item" href="#">Settings</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item text-danger" href="#">Logout</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Sidebar Links -->
    <div class="sidebar-container p-3">
        <ul class="list-unstyled">
            <!-- Sidebar Item -->
            <li class="sidebar-item mb-2">
                <a href="{{ route('dashboard.page') }}"
                    class="sidebar-items text-decoration-none text-dark d-block p-2 rounded {{ request()->routeIs('dashboard.page') ? 'active' : '' }}">
                    <i class="fa-solid fa-desktop me-2"></i> Dashboard
                </a>
            </li>

            <!-- Sidebar Item -->
            <li class="sidebar-item mb-2">
                <a href="{{ route('item-category.page') }}"
                    class="sidebar-items text-decoration-none text-dark d-block p-2 rounded {{ request()->routeIs('item-category.page') ? 'active' : '' }}">
                    <i class="fas fa-address-book me-2"></i> Items Category
                </a>
            </li>

            <!-- Sidebar Item -->
            <li class="sidebar-item mb-2">
                <a href="{{ route('contact-page.page') }}"
                    class="sidebar-items text-decoration-none text-dark d-block p-2 rounded {{ request()->routeIs('contact-page.page') ? 'active' : '' }}">
                    <i class="fas fa-address-book me-2"></i> Contacts
                </a>
            </li>
        </ul>
    </div>

</div>