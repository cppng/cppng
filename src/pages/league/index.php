<?php
include_once PAGE_PARTIALS_PATH . DS . 'header.php';
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
                            <input type="text" class="form-control border-0 shadow" id="dash-daterange">
                            <div class="input-group-append">
                                <span class="input-group-text bg-blue border-blue text-white">
                                    <i class="mdi mdi-calendar-range"></i>
                                </span>
                            </div>
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
                        <tr class="text-white" style="background-color: #3e6551;">
                            <td style="width: 36px;">1</td>    
                            <td><h5 class="m-0 font-weight-normal text-white">PLATEAU STATE MUSLIM PILGRIMS WELFARE</h5></td>    
                            <td class="text-right">213,750</td>    
                            <td class="text-right">1,934,000</td>    
                            <td class="text-right">90.5</td>    
                            <!-- <td>904.80%</td> -->
                        </tr>

                        <tr class="bg-success">
                            <td style="width: 36px;">
                                2
                            </td>

                            <td>
                                <h5 class="m-0 font-weight-normal">PLATEAU STATE AUDIT DEPARTMENT</h5>
                            </td>

                            <td class="text-right">
                                35,174,466
                            </td>

                            <td class="text-right">
                                237,279,147
                            </td>

                            <td class="text-right">
                                67.5
                            </td>

                            <!-- <td>
                                674.58%

                            </td> -->
                        </tr>
                        <tr class="bg-soft-success">
                            <td style="width: 36px;">
                                3	
                            </td>
                            

                            <td>
                                <h5 class="m-0 font-weight-normal">KABONG MARKET	</h5>
                            </td>
                            <td class="text-right">
                                41,666
                            </td>

                            <td class="text-right">
                                149,700
                            </td>

                            <td class="text-right">
                                35.9
                            </td>

                            <!-- <td>
                                359.28%

                            </td> -->

                        </tr>
                        <tr>
                            <td style="width: 36px;">
                                4
                            </td>

                            <td>
                                <h5 class="m-0 font-weight-normal">PLATEAU STATE FIRE SERVICE DIRECTORATE	</h5>
                                
                            </td>

                            <td class="text-right">
                                3,925,000	
                            </td>

                            <td class="text-right">
                                11,380,048	
                            </td>

                            <td class="text-right">
                                28.9
                            </td>

                            <!-- <td>
                                289.94%

                            </td> -->
                        </tr>
                        <tr>
                            <td style="width: 36px;">
                                5
                            </td>

                            <td>
                                <h5 class="m-0 font-weight-normal">PLATEAU STATE INTERNAL REVENUE SERVICE	</h5>
                            </td>

                            <td class="text-right">
                                166,666
                            </td>

                            <td class="text-right">
                                340,000	
                            </td>

                            <td class="text-right">
                                20.4
                            </td>

                            <!-- <td>
                                204.00%

                            </td> -->
                        </tr>
                        <tr>
                            <td style="width: 36px;">
                                6
                            </td>

                            <td>
                                <h5 class="m-0 font-weight-normal">MINITRY OF BUDGET AND ECONOMIC PLANNING</h5>
                            </td>

                            <td class="text-right">
                                9,835,000
                            </td>

                            <td class="text-right">
                                16,471,817
                            </td>

                            <td class="text-right">
                                16.8
                            </td>

                            <!-- <td>
                                167.48%
                            </td> -->
                        </tr>
                        <tr>
                            <td style="width: 36px;">
                                7
                            </td>

                            <td>
                                <h5 class="m-0 font-weight-normal">MINISTRY OF YOUTH AND SPORTS DEVELOPMENT</h5>
                            </td>

                            <td class="text-right">
                                25,195,958
                            </td>

                            <td class="text-right">
                                41,346,010	
                            </td>

                            <td class="text-right">
                                16.4
                            </td>

                            <!-- <td>
                                164.10%
                            </td> -->
                        </tr>
                        <tr>
                            <td style="width: 36px;">
                                8
                            </td>

                            <td>
                                <h5 class="m-0 font-weight-normal">MINISTRY OF HEALTH - PLATEAU STATE</h5>
                            </td>

                            <td class="text-right">
                                4,583,333
                            </td>

                            <td class="text-right">
                                7,044,000	
                            </td>

                            <td class="text-right">
                                15.4
                            </td>

                            <!-- <td>
                                153.69%
                            </td> -->
                        </tr>
                        <tr>
                            <td style="width: 36px;">
                                9
                            </td>

                            <td>
                                <h5 class="m-0 font-weight-normal">PLATEAU STATE TEACHERS SERVICE COMMISSION</h5>
                            </td>

                            <td class="text-right">
                                229,166
                            </td>

                            <td class="text-right">
                                332,000	
                            </td>

                            <td class="text-right">
                                14.5
                            </td>

                            <!-- <td>
                                144.87%
                            </td> -->
                        </tr>
                        <tr>
                            <td style="width: 36px;">
                                10
                            </td>

                            <td>
                                <h5 class="m-0 font-weight-normal">PLATEAU RADIO TELEVISION CORPORATION-TV	</h5>
                            </td>

                            <td class="text-right">
                                16,666,666
                            </td>

                            <td class="text-right">
                                22,969,290	
                            </td>

                            <td class="text-right">
                                13.8
                            </td>

                            <!-- <td>
                                137.82%
                            </td> -->
                        </tr>
                        
                        <tr>
                            <td style="width: 36px;">
                                11
                            </td>

                            <td>
                                <h5 class="m-0 font-weight-normal">MINISTRY OF MINERAL DEVELOPMENT</h5>
                            </td>

                            <td class="text-right">
                                125,000
                            </td>

                            <td class="text-right">
                                118,000	
                            </td>

                            <td class="text-right">
                                9.4
                            </td>

                            <!-- <td>
                                94.40%
                            </td> -->
                        </tr>
                        
                        <tr>
                            <td style="width: 36px;">
                                12
                            </td>

                            <td>
                                <h5 class="m-0 font-weight-normal">HIGH COURT OF JUSTICE - PLATEAU STATE	</h5>
                            </td>

                            <td class="text-right">
                                10,458,333	
                            </td>

                            <td class="text-right">
                                9,094,900
                            </td>

                            <td class="text-right">
                                9.0
                            </td>

                            <!-- <td>
                                86.96%
                            </td> -->
                        </tr>
                        <tr>
                            <td style="width: 36px;">
                                13
                            </td>

                            <td>
                                <h5 class="m-0 font-weight-normal">PLATEAU STATE LOCAL GOVERNMENT SERVICE		</h5>
                            </td>

                            <td class="text-right">
                                1,361,970,114	
                            </td>

                            <td class="text-right">
                                998,284,596
                            </td>

                            <td class="text-right">
                                7.3
                            </td>

                            <!-- <td>
                                73.30%
                            </td> -->
                        </tr>
                        <tr>
                            <td style="width: 36px;">
                                14
                            </td>

                            <td>
                                <h5 class="m-0 font-weight-normal">MINISTRY FOR LOCAL GOVERNMENT AND CHIFTANCY</h5>
                            </td>

                            <td class="text-right">
                                184,166	
                            </td>

                            <td class="text-right">
                                121,250	
                            </td>

                            <td class="text-right">
                                6.6
                            </td>

                            <!-- <td>
                                65.84%
                            </td> -->
                        </tr>
                        <tr>
                            <td style="width: 36px;">
                                15
                            </td>

                            <td>
                                <h5 class="m-0 font-weight-normal">MINISTRY OF EDU. SCI & TECH - (HIGHER EDUCATION)	</h5>
                            </td>

                            <td class="text-right">
                                33,333
                            </td>

                            <td class="text-right">
                                21,600
                            </td>

                            <td class="text-right">
                                6.5	
                            </td>

                            <!-- <td>
                                64.80%
                            </td> -->
                        </tr>
                        <tr>
                            <td style="width: 36px;">
                                16
                            </td>

                            <td>
                                <h5 class="m-0 font-weight-normal">COLLEGE OF ARTS, SCIENCE AND TECHNOLOGY, KURGWI    </h5>
                            </td>
                            <td class="text-right">
                                209,166
                            </td>

                            <td class="text-right">
                                135,000	
                            </td>

                            <td class="text-right">
                                6.5	
                            </td>

                            <!-- <td>
                                64.54%
                            </td> -->
                        </tr>
                        <tr>
                            <td style="width: 36px;">
                                17
                            </td>

                            <td>
                                <h5 class="m-0 font-weight-normal">PLATEAU STATE UNIVERSITY, BOKKOS	</h5>   
                            </td>
                            <td class="text-right">
                                4,708,333	
                            </td>

                            <td class="text-right">
                                2,905,000	
                            </td>

                            <td class="text-right">
                                6.2
                            </td>

                            <!-- <td>
                                61.70%
                            </td> -->
                        </tr>
                        <tr>
                            <td style="width: 36px;">
                                18
                            </td>

                            <td>
                                <h5 class="m-0 font-weight-normal">MINISTRY OF JUSTICE - PLATEAU STATE		</h5>   
                            </td>
                            <td class="text-right">
                                233,333
                            </td>

                            <td class="text-right">
                                144,500
                            </td>

                            <td class="text-right">
                                6.2
                            </td>

                            <!-- <td>
                                61.93%
                            </td> -->
                        </tr>
                        
                        <tr>
                            <td style="width: 36px;">
                                19
                            </td>

                            <td>
                                <h5 class="m-0 font-weight-normal">PLATEAU STATE CIVIL SERVICE COMMISSION</h5>   
                            </td>
                            <td class="text-right">
                                12,425,000
                            </td>

                            <td class="text-right">
                                7,627,720	
                            </td>

                            <td class="text-right">
                                6.1
                            </td>

                            <!-- <td>
                                61.39%
                            </td> -->
                        </tr>
                        
                        <tr>
                            <td style="width: 36px;">
                                20
                            </td>

                            <td>
                                <h5 class="m-0 font-weight-normal">PLATEAU STATE INDEPENDENT ELECTORAL		</h5>   
                            </td>
                            <td class="text-right">
                                1,250,000	
                            </td>

                            <td class="text-right">
                                725,284
                            </td>

                            <td class="text-right">
                                5.8
                            </td>

                            <!-- <td>
                                58.02%
                            </td> -->
                        </tr>
                        <tr>
                            <td style="width: 36px;">
                                21
                            </td>

                            <td>
                                <h5 class="m-0 font-weight-normal">MINISTRY OF EDUCATION AND ERC PLATEAU STATE		</h5>   
                            </td>
                            <td class="text-right">
                                45,833
                            </td>

                            <td class="text-right">
                                23,400
                            </td>

                            <td class="text-right">
                                5.1
                            </td>

                            <!-- <td>
                                51.05%
                            </td> -->
                        </tr>
                        <tr>
                            <td style="width: 36px;">
                                22
                            </td>

                            <td>
                                <h5 class="m-0 font-weight-normal">COLLEGE OF NURSING AND MIDWIFERY, VOM</h5>   
                            </td>
                            <td class="text-right">
                                1,850,000	
                            </td>

                            <td class="text-right">
                                921,075
                            </td>

                            <td class="text-right">
                                5.0
                            </td>

                            <!-- <td>
                                49.79%
                            </td> -->
                        </tr>
                        
                        <tr>
                            <td style="width: 36px;">
                                23
                            </td>

                            <td>
                                <h5 class="m-0 font-weight-normal">PLATEAU STATE WATER BOARD	</h5>   
                            </td>
                            <td class="text-right">
                                20,833
                            </td>

                            <td class="text-right">
                                10,000
                            </td>

                            <td class="text-right">
                                4.8
                            </td>

                            <!-- <td>
                                48.00%
                            </td> -->
                        </tr>
                        <tr>
                            <td style="width: 36px;">
                                24
                            </td>

                            <td>
                                <h5 class="m-0 font-weight-normal">OFFICE OF THE SECRETARY TO THE GOVERNMENT</h5>   
                            </td>
                            <td class="text-right">
                                104,166
                            </td>

                            <td class="text-right">
                                47,210	
                            </td>

                            <td class="text-right">
                                4.5
                            </td>

                            <!-- <td>
                                45.32%
                            </td> -->
                        </tr>
                        <tr>
                            <td style="width: 36px;">
                                25
                            </td>

                            <td>
                                <h5 class="m-0 font-weight-normal">SHARIA COURT OF APPEAL - PLATEAU STATE	</h5>   
                            </td>
                            <td class="text-right">
                                20,302,083	
                            </td>

                            <td class="text-right">
                                7,976,490	
                            </td>

                            <td class="text-right">
                                3.9
                            </td>

                            <!-- <td>
                                39.29%

                            </td> -->
                        </tr>
                        <tr>
                            <td style="width: 36px;">
                                26
                            </td>

                            <td>
                                <h5 class="m-0 font-weight-normal">MINISTRY OF INFORMATION AND COMMUNICATION	</h5>   
                            </td>
                            <td class="text-right">
                                4,515,083	
                            </td>

                            <td class="text-right">
                                1,637,000	
                            </td>

                            <td class="text-right">
                                3.6
                            </td>

                            <!-- <td class="text-right">
                                36.26%
                            </td> -->
                        </tr>
                        
                        <tr>
                            <td style="width: 36px;">
                                27
                            </td>

                            <td>
                                <h5 class="m-0 font-weight-normal">CUSTOMARY COURT OF APPEAL</h5>   
                            </td>
                            <td class="text-right">
                                35,045,833	
                            </td>

                            <td class="text-right">
                                12,191,585
                            </td>

                            <td class="text-right">
                                3.5
                            </td>

                            <!-- <td>
                                34.79%
                            </td> -->
                        </tr>
                        <tr>
                            <td style="width: 36px;">
                                28
                            </td>

                            <td>
                                <h5 class="m-0 font-weight-normal">PLATEAU STATE POLYTECHNIC, BARKIN LADI (MAIN/HRDC	</h5>   
                            </td>
                            <td class="text-right">
                                6,686,250		
                            </td>

                            <td class="text-right">
                                1,899,800	
                            </td>

                            <td class="text-right">
                                2.8
                            </td>

                            <!-- <td>
                                28.41%
                            </td> -->
                        </tr>
                        <tr>
                            <td style="width: 36px;">
                                29
                            </td>

                            <td>
                                <h5 class="m-0 font-weight-normal">MINISTRY OF TRANSPORT - PLATEAU STATE</h5>   
                            </td>
                            <td class="text-right">
                                30,000	
                            </td>

                            <td class="text-right">
                                8,400	
                            </td>

                            <td class="text-right">
                                2.8
                            </td>

                            <!-- <td>
                                28.00%
                            </td> -->
                        </tr>
                        <tr>
                            <td style="width: 36px;">
                                30
                            </td>

                            <td>
                                <h5 class="m-0 font-weight-normal">COLLEGE OF AGRICULTURE, GARKAWA - PLATEAU</h5>   
                            </td>
                            <td class="text-right">
                                88,583,333
                            </td>

                            <td class="text-right">
                                23,208,807
                            </td>

                            <td class="text-right">
                                2.6
                            </td>

                            <!-- <td>
                                26.20%
                            </td> -->
                        </tr>
                        <tr>
                            <td style="width: 36px;">
                                31
                            </td>

                            <td>
                                <h5 class="m-0 font-weight-normal">PLATEAU STATE PUBLISHING CORPORATION	</h5>   
                            </td>
                            <td class="text-right">
                                742,500	
                            </td>

                            <td class="text-right">
                                191,200	
                            </td>

                            <td class="text-right">
                                2.6
                            </td>

                            <!-- <td>
                                25.75%
                            </td> -->
                        </tr>
                        <tr>
                            <td style="width: 36px;">
                                32
                            </td>

                            <td>
                                <h5 class="m-0 font-weight-normal">JUDICIAL SERVICE COMMISSION	</h5>   
                            </td>
                            <td class="text-right">
                                3,750,000
                            </td>

                            <td class="text-right">
                                830,450	
                            </td>

                            <td class="text-right">
                                2.2
                            </td>

                            <!-- <td>
                                22.15%

                            </td> -->
                        </tr>
                        <tr>
                            <td style="width: 36px;">
                                33
                            </td>

                            <td>
                                <h5 class="m-0 font-weight-normal">PLATEAU STATE ROAD MAINTENANCE AGENCY</h5>   
                            </td>
                            <td class="text-right">
                                362,500	
                            </td>

                            <td class="text-right">
                                65,000	
                            </td>

                            <td class="text-right">
                                1.8
                            </td>

                            <!-- <td>
                                17.93%
                            </td> -->
                        </tr>
                        <tr>
                            <td style="width: 36px;">
                                34
                            </td>

                            <td>
                                <h5 class="m-0 font-weight-normal">MINISTRY OF FINANCE - BUREAU FOR BUDGET PLATEAU STATE	</h5>   
                            </td>
                            <td class="text-right">
                                2,920,833	
                            </td>

                            <td class="text-right">
                                530,100
                            </td>

                            <td class="text-right">
                                1.8	
                            </td>

                            <!-- <td>
                                18.15%
                            </td> -->
                        </tr>
                        <tr>
                            <td style="width: 36px;">
                                35
                            </td>

                            <td>
                                <h5 class="m-0 font-weight-normal">PLATAEU AGRICULTURAL MECHANIZATION</h5>   
                            </td>
                            <td class="text-right">
                                433,333
                            </td>

                            <td class="text-right">
                                80,000	
                            </td>

                            <td class="text-right">
                                1.9
                            </td>

                            <!-- <td>
                                18.46%
                            </td> -->
                        </tr>
                        <tr>
                            <td style="width: 36px;">
                                36
                            </td>

                            <td>
                                <h5 class="m-0 font-weight-normal">PLATEAU STATE LIBRARY BOARD	</h5>   
                            </td>
                            <td class="text-right">
                                8,765,844	
                            </td>

                            <td class="text-right">
                                1,503,590	
                            </td>

                            <td class="text-right">
                                1.7
                            </td>

                            <!-- <td>
                                17.15%
                            </td> -->
                        </tr>
                        <tr>
                            <td style="width: 36px;">
                                37
                            </td>

                            <td>
                                <h5 class="m-0 font-weight-normal">PLATEAU STATE LIBRARY BOARD	</h5>   
                            </td>
                            <td class="text-right">
                                8,765,844
                            </td>

                            <td class="text-right">
                                1,503,590	
                            </td>

                            <td class="text-right">
                                1.7
                            </td>

                            <!-- <td>
                                17.15%
                            </td> -->
                        </tr>
                        <tr>
                            <td style="width: 36px;">
                                38
                            </td>

                            <td>
                                <h5 class="m-0 font-weight-normal">PLATEAU STATE HOSPITALS MANAGEMENT BOARD	</h5>   
                            </td>
                            <td class="text-right">
                                1,728,333
                            </td>

                            <td class="text-right">
                                183,012.88
                            </td>

                            <td class="text-right">
                                1.1
                            </td>

                            <!-- <td>
                                10.59%
                            </td> -->
                        </tr>
                        <tr>
                            <td style="width: 36px;">
                                39
                            </td>

                            <td>
                                <h5 class="m-0 font-weight-normal">COLLEGE OF EDUCATION, GINDIRI - PLATEAU		</h5>   
                            </td>
                            <td class="text-right">
                                21,591,666
                            </td>

                            <td class="text-right">
                                2,233,510	
                            </td>

                            <td class="text-right">
                                1.0
                            </td>

                            <!-- <td>
                                10.34%
                            </td> -->
                        </tr>
                        <tr>
                            <td style="width: 36px;">
                                40
                            </td>

                            <td>
                                <h5 class="m-0 font-weight-normal">JOS MAIN MARKET AUTHORITY - PLATEAU STATE	</h5>   
                            </td>
                            <td class="text-right">
                                845,833
                            </td>

                            <td class="text-right">
                                60,000	
                            </td>

                            <td class="text-right">
                                0.7	
                            </td>

                            <!-- <td class="text-right">
                                7.09%
                            </td> -->
                        </tr>
                        <tr>
                            <td style="width: 36px;">
                                41
                            </td>

                            <td>
                                <h5 class="m-0 font-weight-normal">OFFICE OF THE HEAD OF CIVIL SERVICE - PLATEAU</h5>   
                            </td>
                            <td class="text-right">
                                16,416,666
                            </td>

                            <td class="text-right">
                                1,093,200	
                            </td>

                            <td class="text-right">
                                0.7
                            </td>

                            <!-- <td>
                                6.66%
                            </td> -->
                        </tr>
                        <tr>
                            <td style="width: 36px;">
                                42
                            </td>

                            <td>
                                <h5 class="m-0 font-weight-normal">JOS METROPOLITAN DEVELOPMENT BOARD</h5>   
                            </td>
                            <td class="text-right">
                                175,000
                            </td>

                            <td class="text-right">
                                10,000	
                            </td>

                            <td class="text-right">
                                0.6
                            </td>

                            <!-- <td>
                                5.71%
                            </td> -->
                        </tr>
                        <tr>
                            <td style="width: 36px;">
                                43
                            </td>

                            <td>
                                <h5 class="m-0 font-weight-normal">MINISTRY OF LANDS, SURVEY AND TOWN	</h5>   
                            </td>
                            <td class="text-right">
                                5,000,000	
                            </td>

                            <td class="text-right">
                                284,852
                            </td>

                            <td class="text-right">
                                0.6
                            </td>

                            <!-- <td>
                                5.70%
                            </td> -->
                        </tr>
                        
                        <tr>
                            <td style="width: 36px;">
                                44
                            </td>

                            <td>
                                <h5 class="m-0 font-weight-normal">PLATEAU UNITED FOOTBALL CLUB</h5>   
                            </td>
                            <td class="text-right">
                                1,887,500
                            </td>

                            <td class="text-right">
                                116,200	
                            </td>

                            <td class="text-right">
                                0.6	
                            </td>

                            <!-- <td>
                                6.16%
                            </td> -->
                        </tr>
                        <tr>
                            <td style="width: 36px;">
                                45
                            </td>

                            <td>
                                <h5 class="m-0 font-weight-normal">COLLEGE OF HEALTH TECHNOLOGY, PANKSHIN</h5>   
                            </td>
                            <td class="text-right">
                                347,916
                            </td>

                            <td class="text-right">
                                12,000
                            </td>

                            <td class="text-right">
                                0.3
                            </td>

                            <!-- <td>
                                3.45%
                            </td> -->
                        </tr>
                        
                        <tr>
                            <td style="width: 36px;">
                                46
                            </td>

                            <td>
                                <h5 class="m-0 font-weight-normal">MINISTRY OF AGRICULTURE AND RURAL	</h5>   
                            </td>
                            <td class="text-right">
                                25,887,500
                            </td>

                            <td class="text-right">
                                589,700
                            </td>

                            <td class="text-right">
                                0.2
                            </td>

                            <!-- <td>
                                2.28%
                            </td> -->
                        </tr>
                        
                        <tr>
                            <td style="width: 36px;">
                                47
                            </td>

                            <td>
                                <h5 class="m-0 font-weight-normal">PLATEAU STATE BUREAU OF PUBLIC PROCUREMENT</h5>   
                            </td>
                            <td class="text-right">
                                808,333
                            </td>

                            <td class="text-right">
                                10,000
                            </td>

                            <td class="text-right">
                                0.1
                            </td>

                            <!-- <td>
                                1.24%
                            </td> -->
                        </tr>
                        
                        <tr>
                            <td style="width: 36px;">
                                48
                            </td>

                            <td>
                                <h5 class="m-0 font-weight-normal">PLATEAU STATE SCHOLARSHIP BOARD	</h5>   
                            </td>
                            <td class="text-right">
                                3,308,333
                            </td>

                            <td class="text-right">
                                40,000
                            </td>

                            <td class="text-right">
                                0.1
                            </td>

                            <!-- <td>
                                1.21%
                            </td> -->
                        </tr>
                        <tr>
                            <td style="width: 36px;">
                                49
                            </td>

                            <td>
                                <h5 class="m-0 font-weight-normal">MINISTRY OF HOUSING - PLATEAU STATE		</h5>   
                            </td>
                            <td class="text-right">
                                1,925,000
                            </td>

                            <td class="text-right">
                                6,500
                            </td>

                            <td class="text-right">
                                0.0
                            </td>

                            <!-- <td>
                                0.34%
                            </td> -->
                        </tr>

                        <tr>
                            <td style="width: 36px;">
                                50
                            </td>

                            <td>
                                <h5 class="m-0 font-weight-normal">PLATEAU STATE ENVIRONMENTAL PROTECTION</h5>   
                            </td>
                            <td class="text-right">
                                4,254,166
                            </td>

                            <td class="text-right">
                                6,000	
                            </td>

                            <td class="text-right">
                                0.0
                            </td>

                            <!-- <td>
                                0.14%
                            </td> -->
                        </tr>
                        <tr>
                            <td style="width: 36px;">
                                51
                            </td>

                            <td>
                                <h5 class="m-0 font-weight-normal">MINISTRY OF ENVIRONMENT	</h5>   
                            </td>
                            <td class="text-right">
                                6,257,125	
                            </td>

                            <td class="text-right">
                                11,000
                            </td>

                            <td class="text-right">
                                0.0
                            </td>

                            <!-- <td>
                                0.18%
                            </td> -->
                        </tr>
                        <tr>
                            <td style="width: 36px;">
                                52
                            </td>

                            <td>
                                <h5 class="m-0 font-weight-normal">PLATEAU STATE UNIVERSAL BASIC EDUCATION		</h5>   
                            </td>
                            <td class="text-right">
                                1,750,000			
                            </td>

                            <td class="text-right">
                                -
                            </td>

                            <td class="text-right">
                                0.0
                            </td>

                            <!-- <td>
                                -
                            </td> -->
                        </tr>
                        <tr>
                            <td style="width: 36px;">
                                53
                            </td>

                            <td>
                                <h5 class="m-0 font-weight-normal">PLATEAU STATE SPECIALIST HOSPITAL</h5>   
                            </td>
                            <td class="text-right">
                                40,000			
                            </td>

                            <td class="text-right">
                                -
                            </td>

                            <td class="text-right">
                                0.0
                            </td>

                            <!-- <td>
                                -
                            </td> -->
                        </tr>
                        <tr>
                            <td style="width: 36px;">
                                54
                            </td>

                            <td>
                                <h5 class="m-0 font-weight-normal">MINISTRY OF TOURISM, CULTURE AND HOSPT.	</h5>   
                            </td>
                            <td class="text-right">
                                87,500			
                            </td>

                            <td class="text-right">
                                -
                            </td>

                            <td class="text-right">
                                0.0
                            </td>

                            <!-- <td>
                                -
                            </td> -->
                        </tr>
                        <tr>
                            <td style="width: 36px;">
                                55
                            </td>

                            <td>
                                <h5 class="m-0 font-weight-normal">PLATEAU STATE TOURISM CORPORATION		</h5>   
                            </td>
                            <td class="text-right">
                                250,000
                            </td>

                            <td class="text-right">
                                -
                            </td>

                            <td class="text-right">
                                0.0
                            </td>

                            <!-- <td>
                                -
                            </td> -->
                        </tr>
                        <tr>
                            <td style="width: 36px;">
                                56
                            </td>

                            <td>
                                <h5 class="m-0 font-weight-normal">MINISTRY OF WATER RESOURCES AND ENERGY 	</h5>   
                            </td>
                            <td class="text-right">
                                9,166,666
                            </td>

                            <td class="text-right">
                                -
                            </td>

                            <td class="text-right">
                                0.0
                            </td>

                            <!-- <td>
                                -
                            </td> -->
                        </tr>
                        <tr>
                            <td style="width: 36px;">
                                57
                            </td>

                            <td>
                                <h5 class="m-0 font-weight-normal">MINISTRY OF PHYSICAL PLANNING AND URBAN DEVELOPMENT		</h5>   
                            <td class="text-right">
                                6,666,666
                            </td>

                            <td class="text-right">
                                -
                            </td>

                            <td class="text-right">
                                0.0
                            </td>

                            <!-- <td>
                                -
                            </td> -->
                        </tr>
                        <tr>
                            <td style="width: 36px;">
                                58
                            </td>

                            <td>
                                <h5 class="m-0 font-weight-normal">PLATEAU STATE LOCAL GOVERNMENT AUDIT</h5>   
                            <td class="text-right">
                                4,583,333
                            </td>

                            <td class="text-right">
                                -
                            </td>

                            <td class="text-right">
                                0.0
                            </td>

                            <!-- <td>
                                -
                            </td> -->
                        </tr>
                        <tr>
                            <td style="width: 36px;">
                                59
                            </td>

                            <td>
                                <h5 class="m-0 font-weight-normal">MINISTRY OF WOMEN AFFAIRS AND SOCIAL	</h5>   
                            <td class="text-right">
                                3,541,666	
                            </td>

                            <td class="text-right">
                                -
                            </td>

                            <td class="text-right">
                                0.0
                            </td>

                            <!-- <td>
                                -
                            </td> -->
                        </tr>
                        <tr>
                            <td style="width: 36px;">
                                60
                            </td>

                            <td>
                                <h5 class="m-0 font-weight-normal">PLATEAU RADIO TELEVISION CORPORATION-RADIO	</h5>   
                            <td class="text-right">
                                2,608,333
                            </td>

                            <td class="text-right">
                                -
                            </td>

                            <td class="text-right">
                                0.0
                            </td>

                            <!-- <td>
                                -
                            </td> -->
                        </tr>
                        <tr>
                            <td style="width: 36px;">
                                61
                            </td>

                            <td>
                                <h5 class="m-0 font-weight-normal">COLLEGE OF HEALTH TECHNOLOGY, ZAWAN</h5>   
                            <td class="text-right">
                                2,504,166
                            </td>

                            <td class="text-right">
                                -
                            </td>

                            <td class="text-right">
                                0.0
                            </td>

                            <!-- <td>
                                -
                            </td> -->
                        </tr>
                        <tr>
                            <td style="width: 36px;">
                                62
                            </td>

                            <td>
                                <h5 class="m-0 font-weight-normal">MINISTRY OF WORKS - PLATEAU STATE	</h5>   
                            <td class="text-right">
                                1,750,000
                            </td>

                            <td class="text-right">
                                -
                            </td>

                            <td class="text-right">
                                0.0
                            </td>

                            <!-- <td>
                                -
                            </td> -->
                        </tr>
                        <tr>
                            <td style="width: 36px;">
                                63
                            </td>

                            <td>
                                <h5 class="m-0 font-weight-normal">PLATEAU STATE RURAL WATER SUP & SAN AGENCY</h5>   
                            <td class="text-right">
                                1,670,833
                            </td>

                            <td class="text-right">
                                -
                            </td>

                            <td class="text-right">
                                0.0
                            </td>

                            <!-- <td>
                                -
                            </td> -->
                        </tr>
                        <tr>
                            <td style="width: 36px;">
                                64
                            </td>

                            <td>
                                <h5 class="m-0 font-weight-normal">PLATEAU STATE MICROFINANCE DEV AGENCY	</h5>   
                            <td class="text-right">
                                521,916
                            </td>

                            <td class="text-right">
                                -
                            </td>

                            <td class="text-right">
                                0.0
                            </td>

                            <!-- <td>
                                -
                            </td> -->
                        </tr>
                        <tr>
                            <td style="width: 36px;">
                                65
                            </td>

                            <td>
                                <h5 class="m-0 font-weight-normal">PLATEAU AGRICULTURAL DEVELOPMENT PROGRAMME</h5>   
                            <td class="text-right">
                                333,333
                            </td>

                            <td class="text-right">
                                -
                            </td>

                            <td class="text-right">
                                0.0
                            </td>

                            <!-- <td>
                                -
                            </td> -->
                        </tr>
                        <tr>
                            <td style="width: 36px;">
                                66
                            </td>

                            <td>
                                <h5 class="m-0 font-weight-normal">PLATEAU STATE CHRISTIAN PILGRIMS WELFARE	</h5>   
                            <td class="text-right">
                                295,833
                            </td>

                            <td class="text-right">
                                -
                            </td>

                            <td class="text-right">
                                0.0
                            </td>

                            <!-- <td>
                                -
                            </td> -->
                        </tr>
                        <tr>
                            <td style="width: 36px;">
                                67
                            </td>

                            <td>
                                <h5 class="m-0 font-weight-normal">PLATEAU STATE LOCAL GOVERNMENT STAFF PENSION BOARD</h5>   
                            <td class="text-right">
                                166,666
                            </td>

                            <td class="text-right">
                                -
                            </td>

                            <td class="text-right">
                                0.0
                            </td>

                            <!-- <td>
                                -
                            </td> -->
                        </tr>
                        <tr>
                            <td style="width: 36px;">
                                68
                            </td>

                            <td>
                                <h5 class="m-0 font-weight-normal">PLATEAU STATE RELEVANT TECH BOARD	</h5>   
                            <td class="text-right">
                                112,916
                            </td>

                            <td class="text-right">
                                -
                            </td>

                            <td class="text-right">
                                0.0
                            </td>

                            <!-- <td>
                                -
                            </td> -->
                        </tr>
                        <tr>
                            <td style="width: 36px;">
                                69
                            </td>

                            <td>
                                <h5 class="m-0 font-weight-normal">PLATEAU STATE HOUSE OF ASSEMBLY COMMISSION	</h5>   
                            <td class="text-right">
                                41,666
                            </td>

                            <td class="text-right">
                                -
                            </td>

                            <td class="text-right">
                                0.0
                            </td>

                            <!-- <td>
                                -
                            </td> -->
                        </tr>
                        <tr>
                            <td style="width: 36px;">
                                70
                            </td>

                            <td>
                                <h5 class="m-0 font-weight-normal">PLATEAU STATE DISABILITY RIGHTS COMMISSION</h5>   
                            <td class="text-right">
                                33,750
                            </td>

                            <td class="text-right">
                                -
                            </td>

                            <td class="text-right">
                                0.0
                            </td>

                            <!-- <td>
                                -
                            </td> -->
                        </tr>
                        <tr>
                            <td style="width: 36px;">
                                71
                            </td>

                            <td>
                                <h5 class="m-0 font-weight-normal">PLATEAU STATE AIDS CONTROL AGENCY	</h5>   
                            <td class="text-right">
                                27,083
                            </td>

                            <td class="text-right">
                                -
                            </td>

                            <td class="text-right">
                                0.0
                            </td>

                            <!-- <td>
                                -
                            </td> -->
                        </tr>
                        <tr>
                            <td style="width: 36px;">
                                72
                            </td>

                            <td>
                                <h5 class="m-0 font-weight-normal">PRIMARY HEALTH CARE DEVELOPMENT</h5>   
                            <td class="text-right">
                                25,000
                            </td>

                            <td class="text-right">
                                -
                            </td>

                            <td class="text-right">
                                0.0
                            </td>

                            <!-- <td>
                                -
                            </td> -->
                        </tr>
                        <tr>
                            <td style="width: 36px;">
                                73
                            </td>

                            <td>
                                <h5 class="m-0 font-weight-normal">PLATEAU STATE ADULT AND NON FORMAL.	</h5>   
                            <td class="text-right">
                                22,500
                            </td>

                            <td class="text-right">
                                -
                            </td>

                            <td class="text-right">
                                0.0
                            </td>

                            <!-- <td>
                                -
                            </td> -->
                        </tr>
                        <tr class="bg-soft-danger">
                            <td style="width: 36px;">
                                74
                            </td>

                            <td>
                                <h5 class="m-0 font-weight-normal">PLATEAU STATE AFORESTATION PROGRAMME	</h5>   
                            <td class="text-right">
                                16,666
                            </td>

                            <td class="text-right">
                                -
                            </td>

                            <td class="text-right">
                                0.0
                            </td>

                            <!-- <td>
                                -
                            </td> -->
                        </tr>
                        <tr class="bg-danger text-white">
                            <td style="width: 36px;">
                                75
                            </td>

                            <td>
                                <h5 class="m-0 font-weight-normal text-white">OFFICE OF THE ACCOUNTANT GENERAL - PLATEAU</h5>   
                            <td class="text-right">
                                4,166	
                            </td>

                            <td class="text-right">
                                -
                            </td>

                            <td class="text-right">
                                0.0
                            </td>

                            <!-- <td>
                                -
                            </td> -->
                        </tr>
                        <tr class="text-white" style="background-color: #a72626;">
                            <td style="width: 36px;">
                                76
                            </td>

                            <td>
                                <h5 class="m-0 font-weight-normal text-white">PLATEAU STATE BUREAU OF STATISTICS</h5>   
                            <td class="text-right">
                                833
                            </td>

                            <td class="text-right">
                                -
                            </td>

                            <td class="text-right">
                                0.0
                            </td>

                            <!-- <td>
                                -
                            </td> -->
                        </tr>
                        

                    </tbody>
                </table>
            </div>
        </div>
    </div> <!-- end col -->

</div>
<?php
include_once PAGE_PARTIALS_PATH . DS . 'footer.php';
?>