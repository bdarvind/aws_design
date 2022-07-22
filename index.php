  <?php include('includes/header.php'); ?>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        
        <?php include ('includes/sidebar.php'); ?>

        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="row">


              <div class="col-md-3 stretch-card grid-margin">
                <div class="card bg-gradient-danger card-img-holder text-white" style="height:150px;">
                  <div class="card-body">
                    <h3 class="mb-2">278</h3>
                    <h5 class="font-weight-normal mb-1">Active Listing
                    </h5>

                   <!-- <i class="mdi mdi-chart-line mdi-24px float-right"></i> -->

                  </div>
                </div>
              </div>
              <div class="col-md-3 stretch-card grid-margin">
                <div class="card bg-gradient-success card-img-holder text-white" style="height:150px;">
                  <div class="card-body">
                  
                    <h3 class="mb-2">3490</h3>

                    <h5 class="font-weight-normal mb-1">Hotels to Stay</h5> <!--<i class="mdi mdi-bookmark-outline mdi-24px float-right"></i>-->
                    

                  </div>
                </div>
              </div>
              <div class="col-md-3 stretch-card grid-margin">
                <div class="card bg-gradient-warning card-img-holder text-white" style="height:150px;">
                  <div class="card-body">

                  
                  <h3 class="mb-2">4500</h3>

                    <h5 class="font-weight-normal mb-1">Airlines to Travel</h5> <!-- <i class="mdi mdi-diamond mdi-24px float-right"></i> -->
                    
                  </div>
                </div>
              </div>

              <div class="col-md-3 stretch-card grid-margin">
                <div class="card bg-gradient-info card-img-holder text-white" style="height:150px;">
                  <div class="card-body">

                  <h3 class="mb-2">1500</h3>

                    <h5 class="font-weight-normal mb-1">VIP Transports</h5> <!-- <i class="mdi mdi-diamond mdi-24px float-right"></i>-->
                
                    
                  </div>
                </div>
              </div>

            </div>
            <div class="row">
              <div class="col-md-9 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">


                    <div class="template-demo d-flex justify-content-between flex-nowrap">
                          <img src="images/icons/icon1.png">

                          <img src="images/icons/icon2.png">

                          <img src="images/icons/icon3.png">
                          <img src="images/icons/icon4.png">
                          <img src="images/icons/icon5.png">
                    </div> <br />

                    <div class="template-demo d-flex justify-content-between flex-nowrap">
                          <img src="images/icons/icon6.png">

                          <img src="images/icons/icon7.png">

                          <img src="images/icons/icon8.png">
                          <img src="images/icons/icon9.png">
                          <img src="images/icons/icon10.png">
                    </div> <br />

                    <div class="template-demo d-flex justify-content-between flex-nowrap">
                          <img src="images/icons/icon11.png">

                          <img src="images/icons/icon12.png">

                          <img src="images/icons/icon13.png">
                          <img src="images/icons/icon14.png">
                          <img src="images/icons/icon1.png">
                    </div>



                  </div>
                </div>
              </div>
              <div class="col-md-3 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Traffic Sources</h4>
                    <canvas id="traffic-chart"></canvas>
                    <canvas id="visit-sale-chart" class="mt-4 chartjs-render-monitor" style="display: block; height: 111px; width: 223px;" width="446" height="222">
                  </canvas>  
                </div>
              </div>
            </div>
            
            <div class="row">
              <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Latest Report</h4>
                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr>
                            <th> # </th>
                            <th> Name </th>
                            <th> Due Date </th>
                            <th> Progress </th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td> 1 </td>
                            <td> Name </td>
                            <td> July 22, 2022 </td>
                            <td>
                              <div class="progress">
                                <div class="progress-bar bg-gradient-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td> 2 </td>
                            <td> Name </td>
                            <td> July 22, 2022 </td>
                            <td>
                              <div class="progress">
                                <div class="progress-bar bg-gradient-danger" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td> 3 </td>
                            <td> Name </td>
                            <td> July 22, 2022 </td>
                            <td>
                              <div class="progress">
                                <div class="progress-bar bg-gradient-warning" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td> 4 </td>
                            <td> Name </td>
                            <td> July 22, 2022 </td>
                            <td>
                              <div class="progress">
                                <div class="progress-bar bg-gradient-primary" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td> 5 </td>
                            <td> Name </td>
                            <td> July 22, 2022 </td>
                            <td>
                              <div class="progress">
                                <div class="progress-bar bg-gradient-danger" role="progressbar" style="width: 35%" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td> 5 </td>
                            <td> Name </td>
                            <td> July 22, 2022 </td>
                            <td>
                              <div class="progress">
                                <div class="progress-bar bg-gradient-info" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
              
            </div>
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          <footer class="footer">
            <div class="container-fluid d-flex justify-content-between">
              <span class="text-muted d-block text-center text-sm-start d-sm-inline-block">Copyright © ashidigitalpay.in 2022</span>
              <span class="float-none float-sm-end mt-1 mt-sm-0 text-end"> Developed By: <a href="https://ashidigitalpay.in/" target="_blank">ashidigitalpay.in</a></span>
            </div>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="assets/vendors/chart.js/Chart.min.js"></script>
    <script src="assets/js/jquery.cookie.js" type="text/javascript"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="assets/js/off-canvas.js"></script>
    <script src="assets/js/hoverable-collapse.js"></script>
    <script src="assets/js/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="assets/js/dashboard.js"></script>
    <script src="assets/js/todolist.js"></script>
    <!-- End custom js for this page -->
  </body>
</html>