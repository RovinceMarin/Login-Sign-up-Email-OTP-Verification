<link rel="stylesheet" href="/FlexiDesk/css/style.css">
<?php include 'modals.php'; ?>
<?php session_start(); ?>

<nav class="navbar navbar-expand-lg bg-light shadow-sm">
    <div class="container-fluid custom-navbar-container">

        <!-- Logo -->
        <a class="navbar-brand d-flex align-items-center" href="index.php">
            <img src="/FlexiDesk/img/FlexiDesk-icon.png" alt="Logo" width="60" height="60">
            <span class="fw-bold text-dark">FLEXIDESK</span>
        </a>

        <!-- Right-side content -->
        <div class="ms-auto">
            <?php if (isset($_SESSION['username'])): ?>
                <!-- User Logged In -->
                <div class="dropdown">
                    <button class="btn btn-outline-dark dropdown-toggle d-flex align-items-center" type="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-person-circle me-2"></i>
                        <?= htmlspecialchars($_SESSION['username']) ?>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end mt-2">
                        <?php if ($_SESSION['role'] === 'owner'): ?>
                            <li><a class="dropdown-item" href="owner_dashboard.php">Dashboard</a></li>
                        <?php elseif ($_SESSION['role'] === 'admin'): ?>
                            <li><a class="dropdown-item" href="admin_dashboard.php">Admin Panel</a></li>
                        <?php else: ?>
                            <li><a class="dropdown-item" href="user_dashboard.php">Dashboard</a></li>
                        <?php endif; ?>
                        <li><a class="dropdown-item" href="profile.php">Profile</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item text-danger" href="../logout.php">Log Out</a></li>
                    </ul>
                </div>
            <?php else: ?>
                <!-- Not Logged In -->
                <div class="dropdown">
                    <button class="navbar-toggler d-flex align-items-center" type="button" data-bs-toggle="dropdown"
                        aria-expanded="false" style="border: 1px solid #000; border-radius: 10px;">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end mt-2" style="border-radius: 10px;">
                        <li><a href="#" class="dropdown-item text-dark" data-bs-toggle="modal"
                                data-bs-target="#signupModal">Sign Up</a></li>
                        <li><a class="dropdown-item text-dark" href="#" data-bs-toggle="modal"
                                data-bs-target="#loginModal">Log In</a></li>
                        <li><a class="dropdown-item text-dark" href="login.php">FlexiDesk your Space</a></li>
                    </ul>
                </div>
            <?php endif; ?>
        </div>
    </div>
</nav>