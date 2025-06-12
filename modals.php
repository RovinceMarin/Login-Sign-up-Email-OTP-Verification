<!-- Sign Up Modal -->

<div class="modal fade" id="signupModal" tabindex="-1" aria-labelledby="signupModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content border-0 shadow-lg">

            <!-- Modal Header with Centered Titles -->
            <div class="modal-header bg-light flex-column align-items-center text-center position-relative">
                <h4 class="modal-title fw-bold w-100" id="signupModalLabel">Create an Account</h4>
                <h6 class="modal-title w-100 text-muted" id="signupSubLabel">Enter your email to sign up for this app
                </h6>
                <button type="button" class="btn-close position-absolute end-0 top-0 m-3" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>

            <!-- Modal Body -->
            <form action="signup.php" method="post">
                <div class="modal-body">

                    <!-- Username -->
                    <div class="mb-3">
                        <label for="username" class="form-label fw-bold">Username</label>
                        <input type="text" name="username" class="form-control" id="username" required>
                    </div>

                    <!-- Email -->
                    <div class="mb-3">
                        <label for="email" class="form-label fw-bold">Email address</label>
                        <input type="email" name="email" class="form-control" id="email" required>
                    </div>

                    <!-- Password -->
                    <div class="mb-3">
                        <label for="password" class="form-label fw-bold">Password</label>
                        <input type="password" name="password" class="form-control" id="password" required>
                    </div>

                    <!-- Confirm Password -->
                    <div class="mb-3">
                        <label for="confirm_password" class="form-label fw-bold">Confirm Password</label>
                        <input type="password" name="confirm_password" class="form-control" id="confirm_password"
                            required>
                    </div>
                    <div class="modal-footer border-0 justify-content-center">
                        <button type="submit" class="btn btn-dark" style="width: 250px;">Sign Up</button>
                    </div>

                    <!-- OR Divider -->
                    <div class="text-center mt-4 mb-3 position-relative">
                        <hr>
                        <span
                            class="position-absolute top-50 start-50 translate-middle px-2 bg-white text-muted">or</span>
                    </div>

                    <!-- Google Sign In -->
                    <div class="d-flex justify-content-center mb-3">
                        <a href="#" class="btn btn-outline-dark d-flex align-items-center justify-content-center gap-2"
                            style="width: 250px; height: 45px;">
                            <img src="https://www.gstatic.com/firebasejs/ui/2.0.0/images/auth/google.svg" alt="Google"
                                style="width: 20px; height: 20px;">
                            <span>Sign in with Google</span>
                        </a>
                    </div>
                </div>
                <!-- Submit Button -->

                <!-- Disclaimer -->
                <div class="text-center mt-3 mb-4" style="font-size: 0.875rem; color: #6c757d;">
                    By clicking Sign Up, you agree to our
                    <a href="#" class="text-decoration-none text-black" data-bs-toggle="modal"
                        data-bs-target="#termsModal">Terms</a>
                    and
                    <a href="#" class="text-decoration-none text-black" data-bs-toggle="modal"
                        data-bs-target="#privacyModal">Privacy Policy</a>.
                </div>

        </div>

        </form>
    </div>
</div>
</div>


<!-- Log In Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content border-0 shadow-lg">

            <!-- Modal Header -->
            <div class="modal-header bg-light flex-column align-items-center text-center position-relative">
                <h4 class="modal-title fw-bold w-100" id="loginModalLabel">Welcome Back</h4>
                <h6 class="modal-title w-100 text-muted" id="loginSubLabel">Log in to your FlexiDesk account</h6>
                <button type="button" class="btn-close position-absolute end-0 top-0 m-3" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>

            <!-- Modal Body -->
            <form action="login.php" method="post">
                <div class="modal-body">

                    <!-- Email -->
                    <div class="mb-3">
                        <label for="login_email" class="form-label fw-bold">Email address</label>
                        <input type="email" name="email" class="form-control" id="login_email" required>
                    </div>

                    <!-- Password -->
                    <div class="mb-3">
                        <label for="login_password" class="form-label fw-bold">Password</label>
                        <input type="password" name="password" class="form-control" id="login_password" required>
                    </div>

                    <!-- Login Button -->
                    <div class="modal-footer border-0 justify-content-center">
                        <button type="submit" class="btn btn-dark" style="width: 250px;">Log In</button>
                    </div>

                    <!-- OR Divider -->
                    <div class="text-center mt-4 mb-3 position-relative">
                        <hr>
                        <span
                            class="position-absolute top-50 start-50 translate-middle px-2 bg-white text-muted">or</span>
                    </div>

                    <!-- Google Login -->
                    <div class="d-flex justify-content-center mb-3">
                        <a href="#" class="btn btn-outline-dark d-flex align-items-center justify-content-center gap-2"
                            style="width: 250px; height: 45px;">
                            <img src="https://www.gstatic.com/firebasejs/ui/2.0.0/images/auth/google.svg" alt="Google"
                                style="width: 20px; height: 20px;">
                            <span>Sign in with Google</span>
                        </a>
                    </div>

                    <!-- Forgot Password -->
                    <div class="text-center mt-3">
                        <a href="#" class="text-decoration-none text-muted" style="font-size: 0.875rem;">Forgot your
                            password?</a>
                    </div>

                </div>
            </form>

        </div>
    </div>
</div>


<!-- Terms Modal -->
<div class="modal fade" id="termsModal" tabindex="-1" aria-labelledby="termsModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="termsModalLabel">Terms & Conditions</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Insert your terms here -->
                <p>Welcome to FlexiDesk. By using our website and services, you agree to comply with and be bound by the
                    following terms and conditions. Please read them carefully.</p>

                <h6>1. Use of the Site</h6>
                <p>You agree to use this website only for lawful purposes. You must not use this site in any way that
                    breaches any applicable laws or regulations, or is fraudulent or harmful.</p>

                <h6>2. Account Registration</h6>
                <p>When registering an account, you agree to provide accurate and complete information. You are
                    responsible for maintaining the confidentiality of your account credentials.</p>

                <h6>3. Intellectual Property</h6>
                <p>All content on this site, including logos, text, graphics, and software, is the property of FlexiDesk
                    and protected by copyright and trademark laws.</p>

                <h6>4. Limitation of Liability</h6>
                <p>FlexiDesk is not liable for any indirect, incidental, or consequential damages arising from your use
                    of the site or services.</p>

                <h6>5. Changes to Terms</h6>
                <p>We reserve the right to update or change these terms at any time without notice. Continued use of the
                    site constitutes your acceptance of any modifications.</p>

                <h6>6. Termination</h6>
                <p>We reserve the right to terminate your access to the website if we believe you have violated these
                    terms.</p>

                <h6>7. Contact Us</h6>
                <p>If you have any questions about these Terms & Conditions, please contact us at <a
                        href="mailto:support@flexidesk.com">support@flexidesk.com</a>.</p>
            </div>
        </div>
    </div>
</div>

<!-- Privacy Policy Modal -->
<div class="modal fade" id="privacyModal" tabindex="-1" aria-labelledby="privacyModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="privacyModalLabel">Privacy Policy</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Insert your privacy policy here -->
                <p>At FlexiDesk, your privacy is important to us. This Privacy Policy explains how we collect, use, and
                    protect your personal information when you use our services.</p>

                <h6>1. Information We Collect</h6>
                <p>We may collect personal information such as your name, email address, contact number, and usage data
                    when you register or interact with our services.</p>

                <h6>2. How We Use Your Information</h6>
                <p>We use your information to:</p>
                <ul>
                    <li>Provide and improve our services</li>
                    <li>Personalize user experience</li>
                    <li>Communicate with you</li>
                    <li>Ensure security and compliance</li>
                </ul>

                <h6>3. Data Protection</h6>
                <p>We implement appropriate security measures to protect your information from unauthorized access,
                    alteration, or disclosure.</p>

                <h6>4. Sharing Information</h6>
                <p>We do not sell, trade, or rent your personal data. We may share data with trusted third parties who
                    help operate our website or services, provided they agree to keep it confidential.</p>

                <h6>5. Cookies</h6>
                <p>Our website uses cookies to enhance user experience. You can disable cookies in your browser settings
                    if you prefer.</p>

                <h6>6. Your Rights</h6>
                <p>You have the right to access, correct, or delete your personal data. You can also object to certain
                    processing activities.</p>

                <h6>7. Changes to this Policy</h6>
                <p>We may update this policy occasionally. Any changes will be posted on this page with a revised date.
                </p>

                <h6>8. Contact Us</h6>
                <p>If you have any questions about this Privacy Policy, please contact us at <a
                        href="mailto:privacy@flexidesk.com">privacy@flexidesk.com</a>.</p>
            </div>
        </div>
    </div>
</div>