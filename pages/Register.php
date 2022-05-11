<section class="section-content bg padding-y-sm">
    <div class="container">
        <div class="card">
            <div class="card-body">
                <form action="services/account.service.php?request=register" method="POST">
                    <div class="form-group">
                        <label for="email-register">Email address</label>
                        <input type="email" class="form-control" name="email-register" onchange="InputValidation()" id="email-register" aria-describedby="emailHelp" placeholder="Enter email" required>
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    <div class="form-group">
                        <label for="password-register">Password</label>
                        <input type="password" class="form-control" name="password-register" id="password-register" placeholder="Password" required>
                    </div>
                    <div class="form-group">
                        <label for="confirm-password">Confirm Password</label>
                        <input type="password" class="form-control" id="confirm-password" placeholder="Confirm Password" required>
                    </div>
                    <div class="form-group">
                        <label for="address">Address</label>
                        <textarea class="form-control" name="address" id="address" rows="3" placeholder="ระบุที่อยู่ จังหวัด อำเภอ เขต" required></textarea>
                    </div>
                    <div class="form-group" id="form-zip-code">
                        <label for="zip-code">Zip Code</label>
                        <input type="text" maxlength="5" class="form-control" id="zip-code" name="zip-code" placeholder="Zip Code" required>
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input type="text" class="form-control" name="phone" id="phone" placeholder="08x-xxx-xxxx" required>
                    </div>
                    <div class="alert alert-danger" id="alert-validate">
                        <span id="header-alert-register"><strong>Error!</strong> กรุณาทำตามข้อความนี้<br /></span>
                        <ul>
                            <li id="alert-email" style="display: none;"></li>
                            <li id="alert-password" style="display: none;"></li>
                            <li id="alert-confirm-password" style="display: none;"></li>
                            <li id="alert-address" style="display: none;"></li>
                            <li id="alert-zip-code" style="display: none;"></li>
                            <li id="alert-phone" style="display: none;"></li>
                        </ul>
                    </div>
                    <div class="text-center ">
                        <button type="submit" class="btn btn-primary col-3" id="submit-register" disabled>Register</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>