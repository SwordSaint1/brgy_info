<?php include 'plugins/navbar.php';?>
<?php include 'plugins/sidebar/dashboardbar.php';?>
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1><b>Dashboard</b></h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-lg-12 col-md-12 col-sm-12">
            <!-- jquery validation -->
            <div class="card card-secondary">
              <div class="card-header">
                <h3 class="card-title"></h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form id="quickForm">
                <div class="card-body">
                  <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-12">
                      <div class="card card-info">
                      <div class="card-header">
                        <h3 class="card-title">Cards</h3>
                      </div>
                      </div>

                      <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="info-box bg-secondary">
                          <a href="dashboard.php" class="btn btn">
                          <div class="info-box-content">
                            <span class="info-box-text text-center text-muted"><b style="color:white; font-size:20px;">Home&ensp;<i class="fas fa-home"></i></a></b></span>
                          </div>
                        </div>
                      </div>

                      <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="info-box bg-info">
                          <a href="resident.php" class="btn btn">
                          <div class="info-box-content">
                            <span class="info-box-text text-center text-muted"><b style="color:white; font-size:20px;">Resident Details&ensp;<i class="far fa-address-card"></i></a></b></span>
                          </div>
                        </div>
                      </div>

                      <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="info-box bg-primary">
                          <a href="accounts.php" class="btn btn">
                          <div class="info-box-content">
                            <span class="info-box-text text-center text-muted"><b style="color:white; font-size:17px;">Account Management&ensp;<i class="fas fa-user-cog"></i></a></b></span>
                          </div>
                        </div>
                      </div>

                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-12">
                      <div class="card card-secondary">
                      <div class="card-header">
                        <h3 class="card-title">Vacination Status</h3>
                      </div>
                      </div>
                      <table class="centered z-depth-5 responsive-table" style="display:none;">
                      <thead>
                      <th>Vacinnated</th>
                      <th>Not Vacinnated</th>
                      </thead>
                      <tbody id="vacination_status"></tbody>
                    </table>
                      <canvas id="myChart"></canvas>&ensp;
                    </div>
                    <div class="col-lg-5 col-md-4 col-sm-12">
                       <div class="card card-info">
                          <div class="card-header">
                            <h3 class="card-title">Voters Status</h3>
                          </div>
                        </div>
                       <table class="centered z-depth-5 responsive-table" style="display:none;">
                      <thead>
                      <th>Voter</th>
                      <th>Not Voter</th>
                      </thead>
                      <tbody id="voters_status"></tbody>
                      </table>
                      <canvas id="myChart2"></canvas>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
              </form>
            </div>
            <!-- /.card -->
            </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php include 'plugins/footer.php';?>
<?php include 'plugins/javascript/dashboard_script.php';?>