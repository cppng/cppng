<?php
include_once PAGE_PARTIALS_PATH . DS . 'header.php';
 
$string = file_get_contents("../src/data/jan.json");
$json_data = json_decode($string, true);
 

function getRevenueLeagueClass($index, $count){

     $style = ""; 
     

    switch($index){

        case 1:
            $style .= "background-color: #3e6551;";
            break;

        case 2:

            $style .= "background-color: #11ca6d!important;";
            break;

        case 3: 
            $style .= "background-color:rgba(17,202,109,.25)!important;";
            break;

         case $count - 2: 
            $style .= "background-color:rgba(243,93,93,.25)!important;";
            break;
        case $count - 1 :
            $style .= "background-color:#f35d5d!important;";
            break;
         case $count: 
            $style .= "background-color:#a72626 !important;";
            break;
          default:
           $style = "color:#000";
           break;

        

    }

    return $style;
}
 
?>


<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <form class="form-inline">
                    <a href="" class="btn btn-blue btn-sm mr-2">
                        Current
                    </a>
                    <div class="form-group">
                        <div class="input-group input-group-sm">
                            <select class="form-control my-1 my-md-0">
                                <option>Select Month</option>
                                <option>January</option>
                                <option>Febuary</option>
                                <option selected>March</option>
                                <option>April</option>
                                <option>May</option>
                                <option>June</option>
                                <option>July</option>
                                <option>August</option>
                                <option>September</option>
                                <option>October</option>
                                <option>November</option>
                                <option>December</option>
                            </select>
                        </div>
                    </div>
                    <a href="/league/cummulative" class="btn btn-blue btn-sm ml-2">
                        Cummulative
                    </a>
                </form>
            </div>
            <h4 class="page-title">Revenue League</h4>
        </div>
    </div>
</div>

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

            <h4 class="header-title mb-3">PLATEAU STATE REVENUE LEAGUE
            </h4>

            <div class="table-responsive">
                <table class="table table-borderless table-hover table-nowrap table-centered m-0">

                    <thead class="thead-light">
                        <tr>
                            <th class="font-weight-medium">S/N</th>
                            <th class="font-weight-medium">MDA</th>
                            <th class="font-weight-medium text-right">Target(N)</th>
                            <th class="font-weight-medium text-right">Actual IGR</th>
                            <th class="font-weight-medium text-right">Point</th>
                            <!-- <th class="font-weight-medium">IGR%</th> -->
                        </tr>
                    </thead>
                    <tbody>

                        <?php  $index = 0; foreach($json_data as $obj){ 
                            
                            $index++; ?>

                        <?php if($index==1){ ?>
                        <tr class="text-white" style="<?php echo getRevenueLeagueClass($index, count($json_data)); ?> ">
                            <td style="width: 36px;"><?php echo $index?></td>
                            <td>
                                <h5 class="m-0 font-weight-normal text-white">
                                    <?php echo $obj['FIELD2']?></h5>
                            </td>
                            <td>
                                <h5 class="m-0 font-weight-normal text-white"> <?php echo $obj['FIELD3']?></h5>
                            </td>
                            <td>
                                <h5 class="m-0 font-weight-normal text-white"> <?php echo $obj['FIELD4']?></h5>
                            </td>
                            <td>
                                <h5 class="m-0 font-weight-normal text-white"> <?php echo $obj['FIELD5']?></h5>
                            </td>
                            <!-- <td>904.80%</td> -->
                        </tr>
                        <?php 
                        }
                        
                        else  { ?>


                        <tr class="text-dark" style="<?php echo getRevenueLeagueClass($index, count($json_data)); ?> ">
                            <td style="width: 36px;"><?php echo $index?></td>
                            <td>
                                <h5 class="m-0 font-weight-normal text-dark">
                                    <?php echo $obj['FIELD2']?></h5>
                            </td>
                            <td>
                                <h5 class="m-0 font-weight-normal text-dark"> <?php echo $obj['FIELD3']?></h5>
                            </td>
                            <td>
                                <h5 class="m-0 font-weight-normal text-dark"> <?php echo $obj['FIELD4']?></h5>
                            </td>
                            <td>
                                <h5 class="m-0 font-weight-normal text-dark"> <?php echo $obj['FIELD5']?></h5>
                            </td>
                            <!-- <td>904.80%</td> -->
                        </tr>


                        <?php } } ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div> <!-- end col -->
</div>

<?php
include_once PAGE_PARTIALS_PATH . DS . 'footer.php';
?>