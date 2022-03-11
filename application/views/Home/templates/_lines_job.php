<div class="detail width-100">
    <div class="media display-inline text-align-center">
        <img src="imags/job-post-icone-5.png" alt="John Doe" class="mr-3 ">
        <div class="media-body text-left text-align-center">
            <h6><a href="<?php echo site_url().'jobdetails?id='.$data['id'];?>" class="font-color-black"><?php echo $data['title']; ?></a></h6>
            <i class="large material-icons">account_balance</i>
            <span class="text"><?php echo $data['company']; ?></span>
            <br />
            <i class="large material-icons">place</i>
            <span class="text font-size"><?php echo $data['location']; ?></span>
            <div class="float-right margin-top text-align-center">
                <a href="#" class="part-full-time"><?php echo $data['job_nature']; ?></a>
                <p class="date-time">Salary : <?php echo $data['salary']; ?></p>
            </div>
        </div>
    </div>
</div>