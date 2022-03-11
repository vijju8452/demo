<section id="post_job">
    <div class="vertical-space-100"></div>
    <div class="vertical-space-101"></div>
    <div class="container">
        <div class="list-box">
            <a href="#" class="font-color-black margin-right">Job </a> > <a href="#" class="font-color-orange margin-left"> Post job</a>
        </div>
         
        <div class="vertical-space-60"></div>
        <div class="job-post-box">
            <form>
                <div class="form-group">
                    <label for="exampleInputJobtitle">Job title</label>
                    <input type="text" class="form-control" id="title" placeholder="Enter your job title" required />
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label for="exampleInputCompany">Company</label>
                            <input type="text" class="form-control" id="company" placeholder="Full name of company" required />
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label for="exampleInputLoction">Location</label>
                            <input type="text" class="form-control" id="location" placeholder="Company Address" required />
                        </div>
                    </div>
                </div>
                 
                <div class="form-group">
                    <label for="exampleInputShortDescription">Short Description</label>
                    <textarea class="form-control small" id="short_desc" placeholder="Write short description" rows="3" required></textarea>
                </div>
                <div class="form-group">
                    <label for="exampleInputLongDescription">Write full description</label>
                    <textarea class="form-control large" id="full_desc" placeholder="Write short description" rows="3" required></textarea>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <div class="form-group">
                            <label for="sel1">Job Nature:</label>
                            <select class="form-control" id="job_nature" name="">
                                <option value="Contract">Contract</option>
                                <option value="Contract to Hire">Contract to Hire</option>
                                <option value="On Role">On Role</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="form-group">
                            <label for="sel1">Salary Range:</label>
                            <select class="form-control" id="salary" name="">
                                <option value="5,000 - 10,000">5,000 - 10,000</option>
                                <option value="11,000 - 20,000">11,000 - 20,000</option>
                                <option value="21,000 - 30,000">21,000 - 30,000</option>
                                <option value="31,000 - 40,000">31,000 - 40,000</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label>Agree with term and conditions</label>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input " id="exampleCheck1" required />
                        <label class="form-check-label text-left" for="exampleCheck1">Lorem ipsum tempus amet conubia adipiscing fermentum viverra gravida, mollis suspendisse pretium dictumst inceptos mattis euismod lorem nulla magna duis nostra sodales luctus nulla</label>
                    </div>
                </div>
                <button onclick="transactions.saveJob(); return false;" class="btn Post-Job-Offer">Post Job Offer</button>
            </form>
        </div>
    </div>
</section>

<script src="<?php echo site_url(); ?>js/transactions.js"></script>