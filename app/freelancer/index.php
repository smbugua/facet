<?php
include('layout/nav.php');
$userid=get_userid($user);
?>

      <!-- end head top -->
      <!-- start head bottom -->
      <div class="bottom">
        <div class="left">
          <h1>dashboard</h1>
        </div>
        <div class="right">
          <h1>dashboard /</h1>
          <a href="#">page name</a>
        </div>
      </div>
      <!-- end head bottom -->
    </div>
    <!-- end content head -->
    <!-- start with the real content -->
    <div id="real">
      <div class="row">
        <!-- start head content         -->
        <div class="col-lg-4">
          <!-- avtive -->
          <div class="activeMode">
            <div class="card">
              <h1>Deactivate Mode</h1>
              <a href="" class="btn btn-info">Activate now</a>
            </div>
          </div>
          <!-- end active -->
          <!-- Regster Users -->
          <div class="regsterUsers">
            <div class="card">
              <div class="card-top">
                <h1><?php echo get_jobs_assigned($userid)?></h1>
                <i class="fa fa-users"></i>
              </div>
              <div class="card-bottom">
                <p>Jobs Assigned To Me</p>
              </div>
            </div>
          </div>
          <!-- end  Regster Users-->
        </div>
        <div class="col-lg-8">
          <div id="money">
            <div class="card">
              <div id="chart" style="width:100%; height:270px;"></div>
            </div>
          </div>
        </div>
        <!-- end head content -->
        <!-- start analytics -->
        <div class="col-lg-3">
          <div class="analytics">
            <div class="card">
              <div class="icon"><i class="fa fa-video"></i></div>
              <div class="text">
                <h1>984</h1>
                <p>Total Movies</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="analytics">
            <div class="card">
              <div class="icon"><i class="fab fa-vimeo-v"></i></div>
              <div class="text">
                <h1>1455</h1>
                <p>Total Tv-Series</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="analytics">
            <div class="card">
              <div class="icon"><i class="fa fa-users"></i></div>
              <div class="text">
                <h1>32</h1>
                <p>Total users</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="analytics">
            <div class="card">
              <div class="icon"><i class="fa fa-envelope"></i></div>
              <div class="text">
                <h1>43</h1>
                <p>Total emails</p>
              </div>
            </div>
          </div>
        </div>
        <!-- end analytics -->
        <!-- start user -->
        <div class="col-lg-6">
          <div class="users">
            <div class="card">
              <h1 class="head">Users</h1>
              <div class="user">
                <div class="uImg"><img src="img/act/1.jpg" alt=""></div>
                <div class="info">
                  <h1>Josephine Walker</h1>
                  <p>Apple Iwork 08 Review</p>
                </div>
                <div class="type">
                  <div class="btn btn-info">Free</div>
                </div>
              </div>
              <div class="user">
                <div class="uImg"><img src="img/act/2.jpg" alt=""></div>
                <div class="info">
                  <h1>Josephine Walker</h1>
                  <p>Apple Iwork 08 Review</p>
                </div>
                <div class="type">
                  <div class="btn btn-success">pro</div>
                </div>
              </div>
              <div class="user">
                <div class="uImg"><img src="img/act/3.jpg" alt=""></div>
                <div class="info">
                  <h1>Josephine Walker</h1>
                  <p>Apple Iwork 08 Review</p>
                </div>
                <div class="type">
                  <div class="btn btn-info">Free</div>
                </div>
              </div>
              <div class="user">
                <div class="uImg"><img src="img/act/4.jpg" alt=""></div>
                <div class="info">
                  <h1>Josephine Walker</h1>
                  <p>Apple Iwork 08 Review</p>
                </div>
                <div class="type">
                  <div class="btn btn-info">Free</div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- end user -->
        <!-- start user -->
        <div class="col-lg-6">
          <div class="users">
            <div class="card">
              <h1 class="head">messages</h1>
              <div class="user">
                <div class="uImg"><img src="img/act/5.jpg" alt=""></div>
                <div class="info">
                  <h1>Josephine Walker</h1>
                  <p>Apple Iwork 08 Review</p>
                </div>
                <div class="type">
                  <div class="btn btn-primary">read</div>
                </div>
              </div>
              <div class="user">
                <div class="uImg"><img src="img/act/6.jpg" alt=""></div>
                <div class="info">
                  <h1>Josephine Walker</h1>
                  <p>Apple Iwork 08 Review</p>
                </div>
                <div class="type">
                  <div class="btn btn-primary">read</div>
                </div>
              </div>
              <div class="user">
                <div class="uImg"><img src="img/act/7.jpg" alt=""></div>
                <div class="info">
                  <h1>Josephine Walker</h1>
                  <p>Apple Iwork 08 Review</p>
                </div>
                <div class="type">
                  <div class="btn btn-primary">read</div>
                </div>
              </div>
              <div class="user">
                <div class="uImg"><img src="img/act/8.jpg" alt=""></div>
                <div class="info">
                  <h1>Josephine Walker</h1>
                  <p>Apple Iwork 08 Review</p>
                </div>
                <div class="type">
                  <div class="btn btn-primary">read</div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- end user -->

        <!-- start Active Leads -->
        <div class="col-lg-7">
          <div id="leads">
            <div class="card">
              <h1 class="head">Active Leads</h1>
              <table class="table">
                <!-- start head -->
                <thead>
                  <tr>
                    <th>type</th>
                    <th>lead number</th>
                    <th>views</th>
                    <th>Favorites</th>
                    <th>Visit</th>
                    <th>Last Action</th>
                  </tr>
                </thead>
                <!-- end head -->
                <!-- start body -->
                <tbody>
                  <!-- start rows -->
                  <tr>
                    <td class="text-primary">Seller</td>
                    <td>mohamed said</td>
                    <td>532</td>
                    <td>864</td>
                    <td>12:23 AM</td>
                    <td><span class="table-icon fa fa-envelope"></span> 42/6/2018</td>
                  </tr>
                  <tr>
                    <td class="text-info">Buyer</td>
                    <td>Denise Ann</td>
                    <td>150</td>
                    <td>150</td>
                    <td>9:23 AM</td>
                    <td><span class="table-icon fa fa-envelope"></span> 11/9/2015</td>
                  </tr>
                  <tr>
                    <td class="text-info">Buyer</td>
                    <td>Denise Ann</td>
                    <td>150</td>
                    <td>150</td>
                    <td>9:23 AM</td>
                    <td><span class="table-icon fa fa-envelope"></span> 11/9/2015</td>
                  </tr>
                  <tr>
                    <td class="text-primary">Seller</td>
                    <td>mohamed said</td>
                    <td>532</td>
                    <td>864</td>
                    <td>12:23 AM</td>
                    <td><span class="table-icon fa fa-envelope"></span> 42/6/2018</td>
                  </tr>
                  <tr>
                    <td class="text-primary">Seller</td>
                    <td>mohamed said</td>
                    <td>532</td>
                    <td>864</td>
                    <td>12:23 AM</td>
                    <td><span class="table-icon fa fa-envelope"></span> 42/6/2018</td>
                  </tr>
                  <tr>
                    <td class="text-info">Buyer</td>
                    <td>Denise Ann</td>
                    <td>150</td>
                    <td>150</td>
                    <td>9:23 AM</td>
                    <td><span class="table-icon fa fa-envelope"></span> 11/9/2015</td>
                  </tr>
                  <!-- end rows -->
                </tbody>
                <!-- end body -->
              </table>
            </div>
          </div>
        </div>
        <!-- end Active Leads -->

        <!-- start task card -->
        <div class="col-lg-5">
          <div id="active">
            <div class="card">
              <p class="head">Active user right now</p>
              <div class="info">
                <div class="col">
                  <h1>937</h1>
                  <p>users</p>
                </div>
                <div class="col">
                  <h1>82</h1>
                  <p>guests</p>
                </div>
              </div>
              <p class="head">Page view per aria</p>
              <div class="aria">
                <p>22 from the United States of America</p>
                <p>96 from the egypt</p>
                <p>667 from the canada</p>
              </div>
            </div>
          </div>
        </div>
        <!-- end task card -->

        <!-- start Questions per Product -->
        <div class="col-lg-4">
          <div id="questions">
            <div class="card">
              <h1 class="head">Questions per Product</h1>

              <div class="pro">
                <!-- start top -->
                <div class="proTop">
                  <div class="left">
                    <p>apple store</p>
                  </div>
                  <div class="right">
                    <p>29215 Tickets / 1041 Pending</p>
                  </div>
                </div>
                <!-- end top -->

                <!-- start bottom -->
                <div class="progress">
                  <div class="progress-bar" style="width: 60%;"></div>
                </div>
                <!-- end bottom -->
              </div>
              <div class="pro">
                <!-- start top -->
                <div class="proTop">
                  <div class="left">
                    <p>google play</p>
                  </div>
                  <div class="right">
                    <p>9271 Tickets / 1220 Pending</p>
                  </div>
                </div>
                <!-- end top -->

                <!-- start bottom -->
                <div class="progress">
                  <div class="progress-bar" style="width: 10%;"></div>
                </div>
                <!-- end bottom -->
              </div>
              <div class="pro">
                <!-- start top -->
                <div class="proTop">
                  <div class="left">
                    <p>codecanyon</p>
                  </div>
                  <div class="right">
                    <p>235 Tickets / 101 Pending</p>
                  </div>
                </div>
                <!-- end top -->

                <!-- start bottom -->
                <div class="progress">
                  <div class="progress-bar" style="width: 40%;"></div>
                </div>
                <!-- end bottom -->
              </div>
              <div class="pro">
                <!-- start top -->
                <div class="proTop">
                  <div class="left">
                    <p>themeforest</p>
                  </div>
                  <div class="right">
                    <p>18 Tickets / 7 Pending</p>
                  </div>
                </div>
                <!-- end top -->

                <!-- start bottom -->
                <div class="progress">
                  <div class="progress-bar" style="width: 80%;"></div>
                </div>
                <!-- end bottom -->
              </div>
              <div class="pro">
                <!-- start top -->
                <div class="proTop">
                  <div class="left">
                    <p>google play</p>
                  </div>
                  <div class="right">
                    <p>9271 Tickets / 1220 Pending</p>
                  </div>
                </div>
                <!-- end top -->

                <!-- start bottom -->
                <div class="progress">
                  <div class="progress-bar" style="width: 10%;"></div>
                </div>
                <!-- end bottom -->
              </div>
              <div class="pro">
                <!-- start top -->
                <div class="proTop">
                  <div class="left">
                    <p>google play</p>
                  </div>
                  <div class="right">
                    <p>9271 Tickets / 1220 Pending</p>
                  </div>
                </div>
                <!-- end top -->

                <!-- start bottom -->
                <div class="progress">
                  <div class="progress-bar" style="width: 10%;"></div>
                </div>
                <!-- end bottom -->
              </div>
            </div>
          </div>
        </div>
        <!-- end Questions per Product -->

        <!-- start chatts -->
        <div class="col-lg-4">
          <div class="card">
            <div id="IndexChartOne" style="height: 320px;" ></div>
          </div>
        </div>
        <!-- end charts -->

        <!-- start chatts -->
        <div class="col-lg-4">
          <div class="card">
            <div id="IndexChartTwo" style="height: 320px;" ></div>
          </div>
        </div>
        <!-- end charts -->

      </div>
    </div>
    <!-- end the real content -->
  </div>
  <!-- end content -->
</section>
<!-- end admin -->
<!-- start screpting -->
<script src="js/jquery.min.js"></script>
<script src="js/tether.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/highcharts.js"></script>
<script src="js/chart.js"></script>
<script src="js/app.js"></script>
<!-- end screpting -->
</body>
</html>
