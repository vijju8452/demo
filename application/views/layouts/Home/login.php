<section id="post_job">
    <div class="vertical-space-100"></div>
    <div class="vertical-space-101"></div>
    <div class="container">
        <div class="list-box">
            <a href="#" class="font-color-black margin-right">Job </a> > <a href="#" class="font-color-orange margin-left"> Login</a>
        </div>
        <a href="#" class="Save">Save</a>
        <div class="vertical-space-60"></div>
        <div class="job-post-box">
             
                 
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label for="exampleInputCompany">User Name</label>
                            <input type="text" class="form-control" id="username" name="username" placeholder="Username" required autofocus>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label for="exampleInputLoction">Password</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                        </div>
                    </div>
                </div>
                 
                 
                 
                 
                <button onclick="login.checklogin(); return false;" class="btn Post-Job-Offer" type="">SIGN IN</button>
             
        </div>
    </div>
</section>

<script src="<?php echo site_url(); ?>js/login.js"></script>