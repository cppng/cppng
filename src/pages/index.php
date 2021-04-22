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
                            <div class="avatar-lg rounded-circle bg-soft-danger border-red border">
                                <i class="fe-arrow-down-left font-22 avatar-title text-white"></i>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="text-end">
                                <h3 class="text-dark mt-1">
                                    <span>₦1,026,353,980</span>
                                </h3>
                                <p class="text-muted mb-1 text-truncate">Shortfall</p>
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

<?php
include_once PAGE_PARTIALS_PATH . DS . 'footer.php';
?>