


         


        <div id="search-box" class="margin-none">
            <div class="container search-box">
                <form action="#" id="search-box_search_form_3" class="search-box_search_form d-flex flex-lg-row flex-column align-items-center justify-content-between ">
                    <div class="d-flex flex-row align-items-center justify-content-start inline-block">
                        <span class="large material-icons search">search</span>
                        <input class="search-box_search_input" placeholder="Search Keyword" required="required" type="search">
                        <select class="dropdown_item_select search-box_search_input">
                            <option>Category</option>
                            <option>Category1</option>
                            <option>Category2</option>
                        </select>
                        <span class="large material-icons margin-top search">place</span>
                        <input class="search-box_search_input " placeholder="Location" required="required" type="search">
                    </div>
                    <button type="submit" class="search-box_search_button">Search Jobs</button>
                </form>
            </div>
        </div>


        <section id="resent-job-post" class="background-color-white-drak">
            <div class="vertical-space-85"></div>
            <div class="container text-center">
                <h4 class="text-left">Filter Jobs Result</h4>
                <div class="vertical-space-30"></div>
                <div class="row">
                    <div class="col-lg-4 col-md-12">
                        <div class="Job-Category-box">
                            <p class="title">Job Category</p>
                            <ul>
                                <li class="list-item1 "><a href="#" class="font-color-black">Web Developer (54)</a></li>
                                <li class="list-item1 "><a href="#" class="font-color-black">User Experience Design (21)</a></li>
                                <li class="list-item1 "><a href="#" class="font-color-black">Digital Marketer (72)</a></li>
                                <li class="list-item1 "><a href="#" class="font-color-black">Branding and promotion (54)</a></li>
                                <li class="list-item1 "><a href="#" class="font-color-black">User Experience Design (21)</a></li>
                                <li class="list-item1 "><a href="#" class="font-color-black">Digital Marketer (72)</a></li>
                            </ul>
                        </div>
                        <div class="Job-Nature-box">
                            <p class="title">Job Nature</p>
                            <ul>
                                <li class="list-item1 "><a href="#" class="font-color-black">Full Time jobs</a></li>
                                <li class="list-item1 "><a href="#" class="font-color-black">Part Time jobs</a></li>
                                <li class="list-item1 "><a href="#" class="font-color-black">Hourly</a></li>
                            </ul>
                        </div>
                        <div class="Salary-Range-box">
                            <p class="title">Salary Range</p>
                            <p>
                                <input type="text" id="amount1" class="salery-range"> <i class="fa fa-minus minus"></i>
                                <input type="text" id="amount2" class="salery-range">
                            </p>
                            <div id="slider-range"></div>
                            <p class="small-title">Experience Level</p>
                            <form action="#" class="search-box_search_form">
                                <select class="dropdown_item_select search-box_search_input">
                                    <option>Select experience level</option>
                                    <option>Select experience level1</option>
                                    <option>Select experience level2</option>
                                </select>
                                <p class="small-title">Location</p>
                                <input class="search-box_search_input Location " placeholder="Location" required="required" type="search">
                                <span class="fa fa-map-marker location-icone"></span>
                            </form>
                        </div>
                        <div class="Industry-box">
                            <p class="title">Industry</p>
                            <ul>
                                <li class="deactivate"><a href="#" class="font-color-black">Full Time jobs</a></li>
                                <li class="list-item1 "><a href="#" class="font-color-black">Part Time jobs</a></li>
                                <li class="list-item1 "><a href="#" class="font-color-black">Hourly</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-12">
                        <?php echo $jobs_list; ?>
                         
                         
                         
                         
                        
                         
                         
                         
                        
                        <div class="vertical-space-20"></div>
                        <div class="vertical-space-25"></div>
                        <div class="job-list width-100">
                            <ul class="pagination justify-content-end margin-auto">
                                <li class="page-item"><a class="page-link pdding-none" href="javascript:void(0);"><i class=" material-icons keyboard_arrow_left_right">keyboard_arrow_left</i></a></li>
                                <li class="page-item"><a class="page-link active" href="javascript:void(0);">1</a></li>
                                <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
                                <li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>
                                <li class="page-item"><a class="page-link" href="javascript:void(0);">4</a></li>
                                <li class="page-item">
                                    <a class="page-link pdding-none" href="javascript:void(0);"> <i class=" material-icons keyboard_arrow_left_right">keyboard_arrow_right</i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vertical-space-60"></div>
        </section>


        