<?php
    include_once PAGE_PARTIALS_PATH . DS . 'header.php';
?>
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">        
                <h4 class="page-title">Dashboard</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-md-6 col-xl-6">
            <div class="widget-rounded-circle card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-6">
                            <div class="avatar-lg rounded-circle bg-soft-pink border-pink border" >
                                <i class="fe-bar-chart font-22 avatar-title text-pink"></i>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="text-end">
                                <h3 class="text-dark mt-1">
                                    <span>₦947,292,040</span>
                                </h3>
                                <p class="text-muted mb-1 text-truncate">Target IGR</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
         </div>

        <div class="col-md-6 col-xl-6">
            <div class="widget-rounded-circle card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-6">
                            <div class="avatar-lg rounded-circle bg-soft-blue border-blue border">
                                <i class="fe-arrow-down-left font-22 avatar-title text-blue"></i>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="text-end">
                                <h3 class="text-dark mt-1">
                                    <span>₦1,026,353,980</span>
                                </h3>
                                <p class="text-muted mb-1 text-truncate">Cumulative Shortfall</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>  

        <div class="col-md-6 col-xl-6">
            <div class="widget-rounded-circle card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-6">
                            <div class="avatar-lg rounded-circle bg-soft-pink border-pink border" >
                                <i class="fe-bar-chart font-22 avatar-title text-pink"></i>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="text-end">
                                <h3 class="text-dark mt-1">
                                    <span>₦947,292</span>
                                </h3>
                                <p class="text-muted mb-1 text-truncate">Current IGR</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
         </div>

        <div class="col-md-6 col-xl-6">
            <div class="widget-rounded-circle card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-6">
                            <div class="avatar-lg rounded-circle bg-soft-blue border-blue border">
                                <i class="fe-arrow-down-left font-22 avatar-title text-blue"></i>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="text-end">
                                <h3 class="text-dark mt-1">
                                    <span>₦1,026,353</span>
                                </h3>
                                <p class="text-muted mb-1 text-truncate">Current Shortfall</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>  

        <div class="col-md-6 col-xl-6">
            <div class="widget-rounded-circle card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-6">
                            <div class="avatar-lg rounded-circle bg-soft-success border-success border">
                                <i class="fe-bar-chart-line- font-22 avatar-title text-success"></i>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="text-end">
                                <h3 class="text-dark mt-1">
                                    <span>₦22,735,008,960</span>
                                </h3>
                                <p class="text-muted mb-1 text-truncate">Total IGR</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-xl-6">
            <div class="widget-rounded-circle card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-6">
                            <div class="avatar-lg rounded-circle bg-soft-warning border-warning border">
                                <i class="fe-users font-22 avatar-title text-warning"></i>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="text-end">
                                <h3 class="text-dark mt-1"><span>557,435 </span></h3>
                                <p class="text-muted mb-1 text-truncate">
                                    Total Tax Payers
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end row-->

    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title mb-0">Contribution to IGRs</h4>
                    <div class="widget-chart text-center " dir="ltr">
                        <div id="total-revenue" class="mt-0" data-colors="green"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="card">
                <div class="card-body pb-2">
                    <div class="float-end d-none d-md-inline-block">
                        <div class="btn-group mb-2">
                            <button type="button" class="btn btn-xs btn-secondary">
                                Monthly
                            </button>
                        </div>
                    </div>
                    <h4 class="header-title mb-3">IGR Chart</h4>

                    <div dir="ltr">
                        <div id="sales-analytics" class="mt-4" data-colors="#43bfe5,#6c757d"></div>
                    </div>
                </div>
            </div>        
        </div>
    </div> 
    
    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title mb-0">Top 5 MDAs March</h4>
                    <div class="table-responsive">
                        <table class="table table-borderless table-hover table-nowrap table-centered m-0">
                            <thead class="thead-light">
                                <tr>
                                    <th class="font-weight-medium">S/N</th>
                                    <th class="font-weight-medium">MDA</th>
                                    <th class="font-weight-medium">Target(N)</th>
                                    <th class="font-weight-medium">Actual IGR</th>
                                    <th class="font-weight-medium">Point</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="text-white" style="background-color: #3e6551;">
                                    <td style="width: 36px;">1</td>    
                                    <td><h5 class="m-0 font-weight-normal text-white">PLATEAU STATE MUSLIM PILGRIMS WELFARE</h5></td>    
                                    <td>213,750</td>    
                                    <td>1,934,000</td>    
                                    <td>90.5</td>    
                                </tr>

                                <tr class="bg-success">
                                    <td style="width: 36px;">2</td>
                                    <td><h5 class="m-0 font-weight-normal">PLATEAU STATE AUDIT DEPARTMENT</h5></td>
                                    <td>35,174,466</td>
                                    <td>237,279,147</td>
                                    <td>67.5 </td>
                                </tr>
                                <tr class="bg-soft-success">
                                    <td style="width: 36px;">3</td>
                                    <td><h5 class="m-0 font-weight-normal">KABONG MARKET</h5></td>
                                    <td>41,666</td>
                                    <td>149,700</td>
                                    <td>35.9</td>
                                </tr>
                                <tr>
                                    <td style="width: 36px;">4</td>
                                    <td><h5 class="m-0 font-weight-normal">PLATEAU STATE FIRE SERVICE DIRECTORATE</h5></td>
                                    <td>3,925,000</td>
                                    <td>11,380,048</td>
                                    <td>28.9</td>
                                </tr>
                                <tr>
                                    <td style="width: 36px;">5</td>
                                    <td><h5 class="m-0 font-weight-normal">PLATEAU STATE INTERNAL REVENUE SERVICE</h5></td>
                                    <td>166,666</td>
                                    <td>340,000</td>
                                    <td>20.4</td>
                                </tr>                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                <h4 class="header-title mb-0">Top 5 MDAs Cummulative</h4>
                    <div class="table-responsive">
                        <table class="table table-borderless table-hover table-nowrap table-centered m-0">
                            <thead class="thead-light">
                                <tr>
                                    <th class="font-weight-medium">S/N</th>
                                    <th class="font-weight-medium">MDA</th>
                                    <th class="font-weight-medium">Target(N)</th>
                                    <th class="font-weight-medium">Actual IGR</th>
                                    <th class="font-weight-medium">Point</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="text-white" style="background-color: #3e6551;">
                                    <td style="width: 36px;">1</td>    
                                    <td><h5 class="m-0 font-weight-normal text-white">PLATEAU STATE MUSLIM PILGRIMS WELFARE</h5></td>    
                                    <td>213,750</td>    
                                    <td>1,934,000</td>    
                                    <td>90.5</td>    
                                </tr>

                                <tr class="bg-success">
                                    <td style="width: 36px;">2</td>
                                    <td><h5 class="m-0 font-weight-normal">PLATEAU STATE AUDIT DEPARTMENT</h5></td>
                                    <td>35,174,466</td>
                                    <td>237,279,147</td>
                                    <td>67.5 </td>
                                </tr>
                                <tr class="bg-soft-success">
                                    <td style="width: 36px;">3</td>
                                    <td><h5 class="m-0 font-weight-normal">KABONG MARKET</h5></td>
                                    <td>41,666</td>
                                    <td>149,700</td>
                                    <td>35.9</td>
                                </tr>
                                <tr>
                                    <td style="width: 36px;">4</td>
                                    <td><h5 class="m-0 font-weight-normal">PLATEAU STATE FIRE SERVICE DIRECTORATE</h5></td>
                                    <td>3,925,000</td>
                                    <td>11,380,048</td>
                                    <td>28.9</td>
                                </tr>
                                <tr>
                                    <td style="width: 36px;">5</td>
                                    <td><h5 class="m-0 font-weight-normal">PLATEAU STATE INTERNAL REVENUE SERVICE</h5></td>
                                    <td>166,666</td>
                                    <td>340,000</td>
                                    <td>20.4</td>
                                </tr>                                
                            </tbody>
                        </table>
                    </div>
                    
                </div>
            </div>        
        </div>
    </div> 

<?php
    include_once PAGE_PARTIALS_PATH . DS . 'footer.php';
?>