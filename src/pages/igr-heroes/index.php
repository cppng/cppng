<?php
    include_once PAGE_PARTIALS_PATH . DS . 'header.php';
?>
<div class="row">
    <div class="col-12">
        <div class="card mb-2">
            <div class="card-body">
                <div class="row justify-content-between">
                    <div class="col-auto">
                        <form class="d-flex flex-wrap align-items-center">
                            <label for="inputPassword2" class="visually-hidden">Search</label>
                            <div class="me-3">
                                <input type="search" class="form-control my-1 my-md-0" id="inputPassword2" placeholder="Search...">
                            </div>
                            <label for="status-select" class="me-2">Sort By</label>
                            <div class="me-sm-3">
                                <select class="form-select my-1 my-md-0" id="status-select">
                                    <option selected="">All</option>
                                    <option value="1">Hot</option>
                                    <option value="2">Cold</option>
                                    <option value="3">In Progress</option>
                                    <option value="4">Lost</option>
                                    <option value="5">Won</option>
                                </select>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-4">
                        <div class="text-md-end mt-3 mt-md-0">
                            <button type="button" class="btn btn-success waves-effect waves-light me-1"><i class="mdi mdi-cog"></i></button>
                            <button type="button" class="btn btn-danger waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#custom-modal"><i class="mdi mdi-plus-circle me-1"></i> Add New</button>
                        </div>
                    </div><!-- end col-->
                </div> <!-- end row -->
            </div> <!-- end card-body-->
        </div>
    </div>
</div>

</div>
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <form class="form-inline">
                    <div class="form-group">
                        <div class="input-group input-group-sm">
                            <input type="text" class="form-control border-0 shadow" id="dash-daterange">
                            <div class="input-group-append">
                                <span class="input-group-text bg-blue border-blue text-white">
                                    <i class="mdi mdi-calendar-range"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                    <a href="javascript: void(0);" class="btn btn-blue btn-sm ml-2">
                        <i class="mdi mdi-autorenew"></i>
                    </a>
                    <a href="javascript: void(0);" class="btn btn-blue btn-sm ml-1">
                        <i class="mdi mdi-filter-variant"></i>
                    </a>
                </form>
            </div>
            <h4 class="page-title">REVENUE CHAMPIONS</h4>
        </div>
    </div>
</div>     
<!-- end page title --> 



<div class="row">
    <div class="col-xl-12">
        <div class="card-box">
            <div class="dropdown float-right">
                <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown" aria-expanded="false">
                    <i class="mdi mdi-dots-vertical"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right">
                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item">Edit Report</a>
                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item">Export Report</a>
                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item">Action</a>
                </div>
            </div>

            <h4 class="header-title mb-3">PLATEAU STATE REVENUE CHAMPIONS</h4>

            <div class="table-responsive">
                <table class="table table-borderless table-hover table-nowrap table-centered m-0">

                    <thead class="thead-light">
                        <tr>
                            <th class="font-weight-medium">S/N</th>
                            <th class="font-weight-medium"></th>
                            <th class="font-weight-medium">Name</th>
                            <th class="font-weight-medium">MDA</th>
                            <th class="font-weight-medium">Reward Disbursed</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="bg-soft-success">
                            <td style="width: 36px;">1</td>
                            <td style="width: 36px;">
                                <img src="./assets/images/person.jpeg" alt="contact-img" title="contact-img" class="rounded-circle avatar-sm">
                            </td>
                            <td><h5 class="m-0 font-weight-normal">Nani Paul</h5></td>
                            <td><h5 class="m-0 font-weight-normal">PLATEAU STATE MUSLIM PILGRIMS WELFARE</h5></td>    
                            <td>Car</td>    
                            
                            
                        </tr>

                        <tr class="bg-soft-success">
                            <td style="width: 36px;">
                                2
                            </td>
                            <td style="width: 36px;">
                                <img src="./assets/images/person.jpeg" alt="contact-img" title="contact-img" class="rounded-circle avatar-sm">
                            </td>
                            <td><h5 class="m-0 font-weight-normal">Plantok Larry</h5></td>
                            <td>
                                <h5 class="m-0 font-weight-normal">PLATEAU STATE AUDIT DEPARTMENT</h5>
                            </td>

                            <td>
                                House	
                            </td>

                            
                        </tr>
                        <tr class="bg-soft-success">
                            <td style="width: 36px;">
                                3	
                            </td>
                            <td style="width: 36px;">
                                <img src="./assets/images/person.jpeg" alt="contact-img" title="contact-img" class="rounded-circle avatar-sm">
                            </td>
                            
                            <td><h5 class="m-0 font-weight-normal">Gyang Choji</h5></td>
                            <td>
                                <h5 class="m-0 font-weight-normal">KABONG MARKET	</h5>
                            </td>
                            <td>
                                Land
                            </td>

                            

                        </tr>
                        <tr class="bg-soft-danger">
                            <td style="width: 36px;">
                                4
                            </td>
                            <td style="width: 36px;">
                                <img src="./assets/images/person.jpeg" alt="contact-img" title="contact-img" class="rounded-circle avatar-sm">
                            </td>
                            
                            <td><h5 class="m-0 font-weight-normal">Sunday Izang</h5></td>

                            <td>
                                <h5 class="m-0 font-weight-normal">PLATEAU STATE FIRE SERVICE DIRECTORATE	</h5>
                                
                            </td>

                            <td>
                                TV Set	
                            </td>


                            
                        </tr>
                        <tr class="bg-soft-danger">
                            <td style="width: 36px;">
                                5
                            </td>

                            <td style="width: 36px;">
                                <img src="./assets/images/person.jpeg" alt="contact-img" title="contact-img" class="rounded-circle avatar-sm">
                            </td>
                            
                            <td>
                                <h5 class="m-0 font-weight-normal">Paulina Bitrus</h5>
                            </td>
                            <td>
                                <h5 class="m-0 font-weight-normal">PLATEAU STATE INTERNAL REVENUE SERVICE</h5>
                            </td>

                            <td>
                                Generator	
                            </td>

                            
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


<?php
    include_once PAGE_PARTIALS_PATH . DS . 'footer.php';
?>