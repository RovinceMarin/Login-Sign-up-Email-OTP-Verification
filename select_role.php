<?php include 'header.php'; ?>


<div class="container mt-5">
    <div class="card shadow rounded-4 p-4" style="max-width: 500px; margin: auto;">
        <h4 class="text-center mb-4 fw-bold">Select Your Role</h4>

        <form action="set_role.php" method="POST" id="roleForm">
            <input type="hidden" name="role" id="selectedRole">

            <div class="row justify-content-center g-4">
                <div class="col-6 text-center">
                    <div class="role-box" data-role="owner" onclick="selectRole(this)">
                        <img src="img/owner.png" alt="Owner" class="role-image mb-2">
                        <div class="fw-bold">
                            <h4>Owner</h4>
                        </div>
                    </div>
                </div>
                <div class="col-6 text-center">
                    <div class="role-box" data-role="user" onclick="selectRole(this)">
                        <img src="img/user.png" alt="User" class="role-image mb-2">
                        <div class="fw-bold">
                            <h4>User</h4>
                        </div>
                    </div>
                </div>
            </div>

            <div class="d-grid mt-5">
                <button type="submit" class="btn btn-dark" id="continueBtn" disabled>Continue</button>
            </div>
        </form>
    </div>
</div>

<script>
    function selectRole(box) {
        document.querySelectorAll('.role-box').forEach(el => el.classList.remove('selected'));
        box.classList.add('selected');

        document.getElementById('selectedRole').value = box.getAttribute('data-role');
        document.getElementById('continueBtn').disabled = false;
    }
</script>