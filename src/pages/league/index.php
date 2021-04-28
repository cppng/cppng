<?php
include_once PAGE_PARTIALS_PATH . DS . 'header.php';

$month = "jan";

if(isset($_GET['month'])){

    if(file_exists("../src/data/".$_GET['month'].".json")){

        $month = $_GET['month'];
    }
    else{
         $month = 'jan_cumm';
    }
        

}
 
$string = file_get_contents("../src/data/".$month.".json");

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
                            <select class="form-control my-1 my-md-0" id='month' onchange="monthChanged()">
                                <option value="">Select Month</option>
                                <option <?php if($month == "jan") echo "selected" ?>>January</option>
                                <option <?php if($month == "feb") echo "selected" ?>>Febuary</option>
                                <option <?php if($month == "mar") echo "selected" ?>>March</option>
                                <option> <?php if($month == "apr") echo "selected" ?>April</option>
                                <option <?php if($month == "may") echo "selected" ?>>May</option>
                                <option <?php if($month == "jun") echo "selected" ?>>June</option>
                                <option <?php if($month == "jul") echo "selected" ?>>July</option>
                                <option <?php if($month == "aug") echo "selected" ?>>August</option>
                                <option <?php if($month == "sep") echo "selected" ?>>September</option>
                                <option <?php if($month == "oct") echo "selected" ?>>October</option>
                                <option <?php if($month == "nov") echo "selected" ?>>November</option>
                                <option <?php if($month == "dec") echo "selected" ?>>December</option>
                            </select>
                        </div>
                    </div>

                    <?php echo ' <a href="/league/cummulative?month='.$month.'" class="btn btn-blue btn-sm ml-2">
                    Cummulative
                    </a>'; ?>
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
                            <th class="font-weight-medium text-right">Budget </th>
                            <th class="font-weight-medium text-right">Target(N)</th>
                            <th class="font-weight-medium text-right">Actual IGR</th>
                            <th class="font-weight-medium text-right">Point</th>
                            <!-- <th class="font-weight-medium">IGR%</th> -->
                        </tr>
                    </thead>
                    <tbody>

                        <?php echo sizeof($json_data) < 1 ? '<tr><td Colspan="6"><h1 style="text-align:center;"> No Data Available</h1></td></tr>':"";?>

                        <?php  $index = 0; foreach($json_data as $obj){ 
                            
                            $index++; ?>

                        <?php if($index==1){ ?>
                        <tr class="text-white" style="<?php echo getRevenueLeagueClass($index, count($json_data)); ?> ">
                            <td style="width: 36px;"><?php echo $index?></td>
                            <td>
                                <h5 class="m-0 font-weight-normal text-white text-left">
                                    <?php echo $obj['FIELD2'] ;?></h5>
                            </td>
                            <td>
                                <h5 class="m-0 font-weight-normal text-white text-right">
                                    <?php echo number_format(intval($obj['FIELD3'])); ?></h5>
                            </td>
                            <td>
                                <h5 class="m-0 font-weight-normal text-white text-right">
                                    <?php echo number_format(intval($obj['FIELD4']))?></h5>
                            </td>
                            <td>
                                <h5 class="m-0 font-weight-normal text-white text-right">
                                    <?php echo number_format(intval($obj['FIELD5']))?></h5>
                            </td>
                            <td>
                                <h5 class="m-0 font-weight-normal text-white text-right">
                                    <?php echo number_format(intval($obj['FIELD6']))?></h5>
                            </td>
                            <!-- <td>904.80%</td> -->
                        </tr>
                        <?php 
                        }
                        
                        else if($index > 1)  { ?>


                        <tr class="text-dark" style="<?php echo getRevenueLeagueClass($index, count($json_data)); ?> ">
                            <td style="width: 36px;"><?php echo $index?></td>
                            <td>
                                <h5 class="m-0 font-weight-normal text-dark">
                                    <?php echo $obj['FIELD2']?></h5>
                            </td>
                            <td>
                                <h5 class="m-0 font-weight-normal text-dark text-right">
                                    <?php echo number_format($obj['FIELD3'])?>
                                </h5>
                            </td>
                            <td>
                                <h5 class="m-0 font-weight-normal text-dark text-right">
                                    <?php echo number_format($obj['FIELD4'])?>
                                </h5>
                            </td>
                            <td>
                                <h5 class="m-0 font-weight-normal text-dark text-right">
                                    <?php echo number_format(intval($obj['FIELD5']));   ?>
                                </h5>
                            </td>
                            <td>
                                <h5 class="m-0 font-weight-normal text-dark text-right">
                                    <?php echo number_format(intval($obj['FIELD6']))?></h5>
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

<script>
function monthChanged() {


    var selected = document.getElementById("month").value;

    if (selected) {

        selected = selected.toLowerCase();

        selected = selected.substring(0, 3);



        var host = window.location.href;

        var url = host;

        if (host.indexOf("?") > 0) {

            url = url.split("?")[0];
        }

        var url = url + "?month=" + selected;


        window.location.href = url;
    }



}
</script>