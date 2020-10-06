<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item nav-profile">
            <a href="#" class="nav-link">
                <div class="nav-profile-image">
                    <img src="vendor/assets/images/faces/pp.jpg" alt="profile">
                    <span class="login-status online"></span>
                    <!--change to offline or busy as needed-->
                </div>
                <div class="nav-profile-text d-flex flex-column">
                    <span class="font-weight-bold mb-2">Muflikhah Isna</span>
                    <span class="text-secondary text-small">WEB Developer</span>
                </div>
                <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url(''); ?>#!/">
                <span class="menu-title">Dashboard</span>
                <i class="mdi mdi-home menu-icon"></i>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url('mahasiswa'); ?>#!/">
                <span class="menu-title">Mahasiswa</span>
                <i class="mdi mdi-account-settings menu-icon"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url('staff'); ?>#!/">
                <span class="menu-title">Staff</span>
                <i class="mdi mdi-account-switch menu-icon"></i>
            </a>
        </li>
    </ul>
</nav>