{{-- resources\views\layout\sidebar.blade.php --}}
<div class="sidebar">
    <!-- Profile Header -->
    <div class="profile-header p-3">
        <!-- Title -->
        <div class="text-center mb-3">
            <h4 class="mb-0 fw-bold profile-title">BizmaTech POS</h4>
        </div>

        <!-- Horizontal Separator -->
        <hr class="my-2">

        <!-- User Avatar, Username, and Role -->
        <div class="profile-contents">
            <div class="row">
                <div class="col-md-4 d-flex justify-content-center align-items-center">
                    <!-- User Avatar -->
                    <i class="fa-solid fa-user fa-lg"></i>
                </div>
                <div class="col-md-6 d-flex justify-content-center align-items-center">
                    <!-- Username and Role -->
                    <div style="line-height: 1.3rem;">
                        <p class="mb-0 fw-bold">John Doe</p>
                        <small class="text-muted">Admin</small>
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
                <a href="#" class="sidebar-items text-decoration-none text-dark d-block p-2 rounded">
                    <i class="fas fa-box me-2"></i> Item Category
                </a>
            </li>

            <!-- Sidebar Item -->
            <li class="sidebar-item mb-2">
                <a href="#" class="sidebar-items text-decoration-none text-dark d-block p-2 rounded">
                    <i class="fas fa-address-book me-2"></i> Contacts
                </a>
            </li>
        </ul>
    </div>
</div>