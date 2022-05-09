<section class="section-content bg padding-y-sm">
    <div class="container">
        <div class="card">
            <div class="card-body">
                <form>
                    <div class="form-group">
                        <label for="email-register">Email address</label>
                        <input type="email" class="form-control" id="email-register" aria-describedby="emailHelp" placeholder="Enter email">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    <div class="form-group">
                        <label for="password-register">Password</label>
                        <input type="password" class="form-control" id="password-register" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <label for="confirm-password">Confirm Password</label>
                        <input type="password" class="form-control" id="confirm-password" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <label for="provinces">Select your province</label>
                        <select class="form-control" id="provinces" onchange="showDistrict()">
                            <option selected hidden>Select your province</option>
                            <?php
                            $sqlProvinces = "SELECT * FROM provinces";
                            $resultProvinces = $conn->query($sqlProvinces);
                            while ($row = $resultProvinces->fetch_assoc()) {
                            ?>
                                <option value="<?php echo $row['id']; ?>"><?php echo $row['name_th']; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group" id="form-district" style="display: none;">
                        <label for="districts">Select your district</label>
                        <select class="form-control" id="districts">
                            <option selected hidden>Select your district</option>
                        </select>
                    </div>
                    <div class="form-group" id="form-sub-district" style="display: none;">
                        <label for="sub-districts">Select your sub-district</label>
                        <select class="form-control" id="sub-districts">
                            <option selected hidden>Select your sub-district</option>
                        </select>
                    </div>
                    <div class="form-group" id="form-zip-code" >
                        <label for="zip-code">Zip Code</label>
                        <input type="text" class="form-control" id="zip-code" placeholder="Zip Code">
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input type="text" class="form-control" id="phone" placeholder="08x-xxx-xxxx">
                    </div>

                    <div class="text-center ">
                        <button type="submit" class="btn btn-primary col-3">Register</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>