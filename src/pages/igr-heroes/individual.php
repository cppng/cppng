<?php
    include_once PAGE_PARTIALS_PATH . DS . 'header.php';
?>


</div>
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <h4 class="page-title">REVENUE CHAMPIONS</h4>
        </div>
    </div>
</div>
<!-- end page title -->

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="row justify-content-between">
                    <div class="col-md-8">
                        <form class="d-flex flex-wrap align-items-center">
                            <label class="form-label">Previous Month</label>
                            <div class="me-sm-3">
                                <select class="form-control my-1 my-md-0" id="hero_month" onchange="showTable()">
                                    <option>Select</option>
                                    <option value="january">January</option>
                                    <option value="february">February</option>
                                    <option value="march">March</option>
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
                        </form>
                    </div>
                    <div class="col-md-4">
                        <div class="text-md-end mt-3 mt-md-0">
                            <!-- <button type="button" class="btn btn-success waves-effect waves-light me-1"><i class="mdi mdi-cog"></i></button> -->
                            <a href="/igr-heroes" class="btn btn-primary waves-effect waves-light me-1"><i
                                    class="mdi mdi-users me-1"></i> MDA Rewards</a>
                            <a href="/igr-heroes/individual" class="btn btn-info waves-effect waves-light me-1"><i
                                    class="mdi mdi-users me-1"></i> Individual Rewards</a>
                        </div>
                    </div><!-- end col-->
                </div> <!-- end row -->
            </div>
        </div> <!-- end card -->
    </div><!-- end col-->
</div>


<div class="row">
    <div class="col-xl-12">
        <div class="card-box">

            <h4 class="header-title mb-3">PLATEAU STATE REVENUE CHAMPIONS</h4>

            <div class="table-responsive">
                <table class="table table-borderless table-hover table-nowrap table-centered m-0" id="month_january"
                    style="display:table">

                    <thead class="thead-light">
                        <tr>
                            <th class="font-weight-medium">S/N</th>
                            <th class="font-weight-medium"></th>
                            <th class="font-weight-medium">Name</th>
                            <th class="font-weight-medium">DEPARTMENT</th>
                            <th class="font-weight-medium">Reward Disbursed</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="bg-soft-success">
                            <td style="width: 36px;">1</td>
                            <td style="width: 36px;">
                                <img src="/assets/images/nani.jpeg" alt="contact-img" title="contact-img"
                                    class="rounded-circle avatar-sm" style="height: auto !important">
                            </td>
                            <td>
                                <h5 class="m-0 font-weight-normal">NANI PAUL</h5>
                            </td>
                            <td>
                                <h5 class="m-0 font-weight-normal">Plateau State Muslim Pilgrims Welfare</h5>
                            </td>
                            <td>Car</td>
                        </tr>

                        <tr class="bg-soft-success">
                            <td style="width: 36px;">2</td>
                            <td style="width: 36px;">
                                <img src="/assets/images/person1.jpeg" alt="contact-img" title="contact-img"
                                    class="rounded-circle avatar-sm" style="height: auto !important">
                            </td>
                            <td>
                                <h5 class="m-0 font-weight-normal">PLANTOK LARRY</h5>
                            </td>
                            <td>
                                <h5 class="m-0 font-weight-normal">Plateau State Audit Department</h5>
                            </td>
                            <td>House</td>
                        </tr>
                        <tr class="bg-soft-success">
                            <td style="width: 36px;">3</td>
                            <td style="width: 36px;">
                                <img src="/assets/images/person2.jpg" alt="contact-img" title="contact-img"
                                    class="rounded-circle avatar-sm" style="height: auto !important">
                            </td>

                            <td>
                                <h5 class="m-0 font-weight-normal">GYANG CHOJI</h5>
                            </td>
                            <td>
                                <h5 class="m-0 font-weight-normal">Kabong Market</h5>
                            </td>
                            <td>Land</td>
                        </tr>
                        <tr class="bg-soft-danger">
                            <td style="width: 36px;">4</td>
                            <td style="width: 36px;">
                                <img src="/assets/images/person.png" alt="contact-img" title="contact-img"
                                    class="rounded-circle avatar-sm" style="height: auto !important">
                            </td>
                            <td>
                                <h5 class="m-0 font-weight-normal">SUNDAY IZANG</h5>
                            </td>
                            <td>
                                <h5 class="m-0 font-weight-normal">Plateau State Fire Service Directorate </h5>
                            </td>
                            <td>TV Set</td>
                        </tr>
                        <tr class="bg-soft-danger">
                            <td style="width: 36px;">5</td>
                            <td style="width: 36px;"><img src="/assets/images/person3.jpg" alt="contact-img"
                                    title="contact-img" class="rounded-circle avatar-sm"
                                    style="height: auto !important"></td>
                            <td>
                                <h5 class="m-0 font-weight-normal">PAULINA BITRUS</h5>
                            </td>
                            <td>
                                <h5 class="m-0 font-weight-normal">Plateau State Internal Revenue Service</h5>
                            </td>
                            <td>Generator</td>
                        </tr>
                    </tbody>
                </table>

                <table class="table table-borderless table-hover table-nowrap table-centered m-0" id="month_february"
                    style="display:none">

                    <thead class="thead-light">
                        <tr>
                            <th class="font-weight-medium">S/N</th>
                            <th class="font-weight-medium"></th>
                            <th class="font-weight-medium">Name</th>
                            <th class="font-weight-medium">DEPARTMENT</th>
                            <th class="font-weight-medium">Reward Disbursed</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="bg-soft-success">
                            <td style="width: 36px;">1</td>
                            <td style="width: 36px;">
                                <img src="/assets/images/person4.jpg" alt="contact-img" title="contact-img"
                                    class="rounded-circle avatar-sm" style="height: auto !important">
                            </td>
                            <td>
                                <h5 class="m-0 font-weight-normal">CHUWANG DUSU</h5>
                            </td>
                            <td>
                                <h5 class="m-0 font-weight-normal">Plateau State Muslim Pilgrims Welfare</h5>
                            </td>
                            <td>Car</td>
                        </tr>

                        <tr class="bg-soft-success">
                            <td style="width: 36px;">2</td>
                            <td style="width: 36px;">
                                <img src="/assets/images/person5.jpeg" alt="contact-img" title="contact-img"
                                    class="rounded-circle avatar-sm" style="height: auto !important">
                            </td>
                            <td>
                                <h5 class="m-0 font-weight-normal">GYANG CHOJI</h5>
                            </td>
                            <td>
                                <h5 class="m-0 font-weight-normal">Plateau State Audit Department</h5>
                            </td>
                            <td>House</td>
                        </tr>
                        <tr class="bg-soft-success">
                            <td style="width: 36px;">3</td>
                            <td style="width: 36px;">
                                <img src="/assets/images/person6.jpg" alt="contact-img" title="contact-img"
                                    class="rounded-circle avatar-sm" style="height: auto !important">
                            </td>

                            <td>
                                <h5 class="m-0 font-weight-normal">PLANTOK LARRY</h5>
                            </td>
                            <td>
                                <h5 class="m-0 font-weight-normal">Kabong Market</h5>
                            </td>
                            <td>Land</td>
                        </tr>
                        <tr class="bg-soft-danger">
                            <td style="width: 36px;">4</td>
                            <td style="width: 36px;">
                                <img src="/assets/images/person.png" alt="contact-img" title="contact-img"
                                    class="rounded-circle avatar-sm" style="height: auto !important">
                            </td>
                            <td>
                                <h5 class="m-0 font-weight-normal">JULNA DURFA</h5>
                            </td>
                            <td>
                                <h5 class="m-0 font-weight-normal">Plateau State Fire Service Directorate </h5>
                            </td>
                            <td>TV Set</td>
                        </tr>
                        <tr class="bg-soft-danger">
                            <td style="width: 36px;">5</td>
                            <td style="width: 36px;"><img src="/assets/images/person7.jpg" alt="contact-img"
                                    title="contact-img" class="rounded-circle avatar-sm"
                                    style="height: auto !important"></td>
                            <td>
                                <h5 class="m-0 font-weight-normal">PAULINA BITRUS</h5>
                            </td>
                            <td>
                                <h5 class="m-0 font-weight-normal">Plateau State Internal Revenue Service</h5>
                            </td>
                            <td>Generator</td>
                        </tr>
                    </tbody>
                </table>

                <table class="table table-borderless table-hover table-nowrap table-centered m-0" id="month_march"
                    style="display:none">

                    <thead class="thead-light">
                        <tr>
                            <th class="font-weight-medium">S/N</th>
                            <th class="font-weight-medium"></th>
                            <th class="font-weight-medium">Name</th>
                            <th class="font-weight-medium">DEPARTMENT</th>
                            <th class="font-weight-medium">Reward Disbursed</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="bg-soft-success">
                            <td style="width: 36px;">1</td>
                            <td style="width: 36px;">
                                <img src="/assets/images/person8.jpeg" alt="contact-img" title="contact-img"
                                    class="rounded-circle avatar-sm" style="height: auto !important">
                            </td>
                            <td>
                                <h5 class="m-0 font-weight-normal">RETNA GOAR</h5>
                            </td>
                            <td>
                                <h5 class="m-0 font-weight-normal">Plateau State Muslim Pilgrims Welfare</h5>
                            </td>
                            <td>Car</td>
                        </tr>

                        <tr class="bg-soft-success">
                            <td style="width: 36px;">2</td>
                            <td style="width: 36px;">
                                <img src="/assets/images/person9.jpg" alt="contact-img" title="contact-img"
                                    class="rounded-circle avatar-sm" style="height: auto !important">
                            </td>
                            <td>
                                <h5 class="m-0 font-weight-normal">JOYCE MUSA</h5>
                            </td>
                            <td>
                                <h5 class="m-0 font-weight-normal">Plateau State Internal Revenue Service</h5>
                            </td>
                            <td>House</td>
                        </tr>
                        <tr class="bg-soft-success">
                            <td style="width: 36px;">3</td>
                            <td style="width: 36px;">
                                <img src="/assets/images/person11.png" alt="contact-img" title="contact-img"
                                    class="rounded-circle avatar-sm" style="height: auto !important">
                            </td>

                            <td>
                                <h5 class="m-0 font-weight-normal">GYANG CHOJI</h5>
                            </td>
                            <td>
                                <h5 class="m-0 font-weight-normal">Kabong Market</h5>
                            </td>
                            <td>Land</td>
                        </tr>
                        <tr class="bg-soft-danger">
                            <td style="width: 36px;">4</td>
                            <td style="width: 36px;">
                                <img src="/assets/images/person10.jpg" alt="contact-img" title="contact-img"
                                    class="rounded-circle avatar-sm" style="height: auto !important">
                            </td>
                            <td>
                                <h5 class="m-0 font-weight-normal">BENITA PAM</h5>
                            </td>
                            <td>
                                <h5 class="m-0 font-weight-normal">Plateau State Fire Service Directorate </h5>
                            </td>
                            <td>TV Set</td>
                        </tr>
                        <tr class="bg-soft-danger">
                            <td style="width: 36px;">5</td>
                            <td style="width: 36px;"><img src="/assets/images/person12.jpg" alt="contact-img"
                                    title="contact-img" class="rounded-circle avatar-sm"
                                    style="height: auto !important"></td>
                            <td>
                                <h5 class="m-0 font-weight-normal">PARLONG DAVID</h5>
                            </td>
                            <td>
                                <h5 class="m-0 font-weight-normal">Plateau State Audit Department</h5>
                            </td>
                            <td>Generator</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
function showTable() {
    var selected = document.getElementById("hero_month").value;
    console.log(selected)
    if (selected == 'january') {
        document.getElementById('month_january').style.display = "table";
    } else {
        document.getElementById('month_january').style.display = "none";
    }

    if (selected == 'february') {
        document.getElementById('month_february').style.display = "table";
    } else {
        document.getElementById('month_february').style.display = "none";
    }

    if (selected == 'march') {
        document.getElementById('month_march').style.display = "table";
    } else {
        document.getElementById('month_march').style.display = "none";
    }
}

if (!exists) {
    alert("Month not available");
}
</script>

<?php
    include_once PAGE_PARTIALS_PATH . DS . 'footer.php';
?>