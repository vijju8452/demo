





<section id="job-Details">
    <div class="container background-color-full-white job-Details">
        <div class="Exclusive-Product">
            <h3><?php echo $job['title']; ?></h3>
            <?php
            if($role == 2){ ?>
            <a href='#' onclick="transactions.applyJob(<?php echo $job['id'];?>,<?php echo $userid;?>); return false;" class="Apply-Now"> <?php echo $appliedtext; ?></a>
            <?php } else{ ?>
                <a href="<?php echo site_url().'login';?>" class="Apply-Now"><?php echo $appliedtext; ?></a>
            <?php }
            ?>
            
            <h6 class="font-color-orange"><?php echo $job['company']; ?></h6>
             
            <i class="material-icons">place</i>
            <span class="text"><?php echo $job['location']; ?></span>
            <h4>Short description</h4>
            <p><?php echo $job['short_desc']; ?></p>
        </div>
        <img src="imags/job-detail.jpg" alt="" class="job-detail-img">
        <div class="Job-Description">
            <h4>Job Description / Responsibility</h4>
            <ul>
                <li class="list-style"><?php echo $job['full_desc']; ?></li>
                 
            </ul>
            <div class="vertical-space-20"></div>
            <h4>Experience & Requirement</h4>
            <p class="margin-bottom">Suspendisse augue pulvinar placerat himenaeos odio nec turpis augue sem maecenas, faucibus erat lacinia consectetur sapien suscipit vestibulum venenatis himenaeos elit etiam lobortis luctus tempor phasellus vitae aliquam aenean tincidunt suscipit rhoncus mauris, lectus duis aenean fermentum aptent laoreet habitant suspendisse donec malesuada lectus quisque primis tristique donec mattis, per euismod quisque urna proin ornare, convallis litora curae dictumst.</p>
            <ul>
                <li class="list-style">Et vestibulum ullamcorper curae tellus consectetur erat pharetra et cubilia Nibh est auctor lacus nam lacinia aptent</li>
                <li class="list-style">
                    Et vestibulum ullamcorper curae tellus consectetur erat pharetra et cubilia Nibh est auctor lacus nam lacinia aptent</li>
                <li class="list-style">
                    Vitae sociosqu a nisi cubilia vulputate aliquam vulputate imperdiet tempor arcu fames</li>
                <li class="list-style">
                    Odio habitasse senectus morbi dapibus mauris non primis, nisl ante hendrerit consectetur nulla phasellus eleifend, ad at scelerisque vulputate habitant temmollis</li>
            </ul>
        </div>
    </div>
</section>
<section id="comment" class="background-color-full-white-light">
    <div class="container">
        <div class="max-width-80">
            <h4>comment</h4>
            <a href="#" class="Share">Share</a>
            <div class="media border p-3">
                <img src="imags/comment1.png" alt="John Doe" class="mr-3 rounded-circle imagess" style="width:60px;">
                <div class="media-body">
                    <h6>Rehmatun Nisal</h6>
                    <p>Suspendisse augue pulvinar placerat himenaeos odio nec turpis augue sem maecenas, faucibus erat lacinia consectetur sapien suscipit vestibulum venenatis himenaeos.</p>
                </div>
            </div>
            <div class="media border p-3 ">
                <img src="imags/comment2.png" alt="John Doe" class="mr-3 rounded-circle imagess" style="width:60px;">
                <div class="media-body">
                    <h6>Rehmatun Nisal</h6>
                    <p>Suspendisse augue pulvinar placerat himenaeos odio nec turpis augue sem maecenas, faucibus erat lacinia consectetur sapien suscipit vestibulum venenatis himenaeos.</p>
                </div>
            </div>
            <div class="media border p-3 padding-none border-none">
                <img src="imags/comment3.png" alt="John Doe" class="mr-3 rounded-circle imagess" style="width:60px;">
                <div class="media-body">
                    <form>
                        <textarea placeholder="Type commeny" required></textarea>
                        <button class="Post">Post</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<script src="<?php echo site_url(); ?>js/transactions.js"></script>

