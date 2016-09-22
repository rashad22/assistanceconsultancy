<div class="section services">
    <div class="container">
        <div class="row"> 
            <div class="max_400_767 col-xs-12 col-sm-6 col-md-4">
                <div class="thumbnail bg-primary">
                    <h3>buy or sale flat</h3>
                    <img src="images/index-1.jpg" alt="Index 1">
                    <div class="caption">
                        <ol>
                            <li>Assist with proper documentation so the clients are not in trouble.</li>
                            <li>Assist to find out if the property is made or developed asper the law of government.</li>
                        </ol>
                        <p class="btn_cont">
                            <a href="service_details.php" class="btn btn-default btn-raised" role="button">Read More</a>
                        </p>
                    </div>
                </div>
            </div> 
            <div class="max_400_767 col-xs-12 col-sm-6 col-md-4">
                <div class="thumbnail bg-danger">
                    <h3>disputes with developers</h3>
                    <img src="images/index-2.jpg" alt="Index 1">
                    <div class="caption">
                        <ol>
                            <li>Assist if there is any dispute between buyer and seller even after the agreement is made.</li>
                            <li>Assist our Clint to ensure sell and purchase as per the agreement between both parties.</li>
                        </ol>
                        <p class="btn_cont">
                            <a href="service_details_disputs.php" class="btn btn-default btn-raised" role="button">Read More</a>
                        </p>
                    </div>
                </div>
            </div> 
            <div class="max_400_767 col-xs-12 col-sm-6 col-md-4">
                <div class="thumbnail bg-primary">
                    <h3>accurate documentation</h3>
                    <img src="images/index-3.jpg" alt="Index 1">
                    <div class="caption">
                        <ol> 
                            <li>Assist with sequence of step to be taken before making any agreement.</li>
                            <li>Assist with sequence of step to be taken after deal is made.</li>
                        </ol> 
                        <p class="btn_cont">
                            <a href="service_details_accurate_documentation.php" class="btn btn-default btn-raised" role="button">Read More</a>
                        </p>
                    </div>
                </div>
            </div> 
            <?php
            $file_name = basename($_SERVER['REQUEST_URI'], '?' . $_SERVER['QUERY_STRING']);
            if ($file_name == 'services.php') {
                ?>
                <div class="max_400_767 col-xs-12 col-sm-6 col-md-4">
                    <div class="thumbnail bg-success">
                        <h3>Assistance to find developer</h3>
                        <img src="images/index-7.jpg" alt="Index 1">
                        <div class="caption"> 
                            <ol>
                                <li>Assist for initial agreement.</li>
                                <li>Assistance to follow the agreement in the process.</li>
                            </ol> 
                            <p class="btn_cont">
                                <a href="service_details_find_developers.php" class="btn btn-default btn-raised" role="button">Read More</a>
                            </p>
                        </div>
                    </div>
                </div> 
                <?php
            }
            ?>
            <div class="max_400_767 col-xs-12 col-sm-6 col-md-4">
                <div class="thumbnail bg-success">
                    <h3>Collection of money</h3>
                    <img src="images/index-4.jpg" alt="Index 1">
                    <div class="caption"> 
                        <ol>
                            <li>Assist property sold amount legally to USA.</li>
                            <li>Collection of money in Bangladesh and legally send to USA.</li>
                        </ol> 
                        <p class="btn_cont">
                            <a href="service_details_collection_of_money.php" class="btn btn-default btn-raised" role="button">Read More</a>
                        </p>
                    </div>
                </div>
            </div> 
            <div class="max_400_767 col-xs-12 col-sm-6 col-md-4">
                <div class="thumbnail bg-danger">
                    <h3>Rental and Property MAINTENANCE</h3>
                    <img src="images/index-5.jpg" alt="Index 1">
                    <div class="caption">
                        <ol>
                            <li>Provide security service for house and maintenance </li>
                        </ol> 
                        <p class="btn_cont">
                            <a href="service_details_property_maintanance.php" class="btn btn-default btn-raised" role="button">Read More</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="max_400_767 col-xs-12 col-sm-6 col-md-4 <?php if ($file_name == 'services.php') { ?>col-md-offset-4<?php } ?>">
                <div class="thumbnail bg-success">
                    <h3>Personal Services</h3>
                    <img src="images/index-6.jpg" alt="Index 1">
                    <div class="caption">
                        <ol>
                            <li>Birth Certificate </li>
                            <li>Passport</li>
                            <li>National ID card</li>
                            <li>Power of attorney </li> 
                        </ol>
                        <p class="btn_cont">
                            <a href="service_details_personal_services.php" class="btn btn-info btn-raised"><i class="fa fa-download"></i> Dowload</a>
                        </p>
                    </div>
                </div>
            </div> 
        </div>
    </div>
</div>