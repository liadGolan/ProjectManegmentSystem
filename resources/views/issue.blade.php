<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Project Manegment Software</title>
  <!-- Bootstrap core CSS-->
  <link href="./vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="./vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="./vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="./css/sb-admin.css" rel="stylesheet">
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="/">Project Manegment Software</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Home">
          <a class="nav-link" href="/">
            <i class="fa fa-fw fa-home"></i>
            <span class="nav-link-text">Go Home</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="New Deliverable">
          <a class="nav-link" href="/createDeliverable">
            <i class="fa fa-fw fa-list-ul"></i>
            <span class="nav-link-text">New Deliverable</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="New Task">
          <a class="nav-link" href="/createTask">
            <i class="fa fa-fw fa-check-square"></i>
            <span class="nav-link-text">New Task</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="New Resource">
          <a class="nav-link" href="/createResource">
            <i class="fa fa-fw fa-user"></i>
            <span class="nav-link-text">New Resource</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="New Action Item">
          <a class="nav-link" href="/createActionItem">
            <i class="fa fa-fw fa-bolt"></i>
            <span class="nav-link-text">New Action Item</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="New Issue">
          <a class="nav-link" href="/createIssue">
            <i class="fa fa-fw fa-exclamation"></i>
            <span class="nav-link-text">New Issue</span>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
        </li>
      </ul>
    </div>
  </nav>
  <div class="content-wrapper">
    <div class="container-fluid">

          <ul class="deliverablesLinks"><a href=""></a></ul>
          <div class="row">
            <div class="col-xl-12 col-sm-12 mb-3 text-center">
              <h1>
                  Issue Creation
              </h1>
            </div>
          </div>
      <div class="row">
        <div class="col-xl-6 col-sm-6 mb-3">
            {{Form::open()}}
            Issue Name
            <br />
            {{Form::text('name', null, array('class' => 'form-control'))}}
            <br />
            Issue Description
            <br />
            {{Form::text('description', null, array('class' => 'form-control'))}}
            <br />
            Task Affected
            <br />
            {{Form::select('task', $task_array,null, array('class' => 'custom-select'))}}
            <br />
            <br />
            Action Item Affected
            <br />
            {{Form::select('action_item', $action_item_array,null, array('class' => 'custom-select'))}}
            <br />
            <br />
            Priority
            <br />
            {{Form::text('priority', null, array('class' => 'form-control'))}}
            <br />
            <br />
          </div>
            <div class="col-xl-6 col-sm-6 mb-3">
            Severity
            <br />
            {{Form::text('severity', null, array('class' => 'form-control'))}}
            <br />
            Date Raised
            <br />
            {{Form::date('date_raised', \Carbon\Carbon::now(), array('class' => 'form-control'))}}
            <br />
            Estimated Completion Date
            <br />
            {{Form::date('estimated_completion_date',\Carbon\Carbon::now(), array('class' => 'form-control'))}}
            <br />
            Status
            <br />
            {{Form::text('status', null, array('class' => 'form-control'))}}
            <br />
            Status Description
            <br />
            {{Form::text('status_description', null, array('class' => 'form-control'))}}
      </div>
      </div>
      <div class="row">
        <div class="col-xl-12 col-sm-12 mb-3 text-center">
          {{Form::submit('submit',array('class' => 'btn btn-success'))}}
          {{Form::close()}}
        </div>
      </div>
    </div>
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright © Your Website 2018</small>
        </div>
      </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="login.html">Logout</a>
          </div>
        </div>
      </div>
    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="./vendor/jquery/jquery.min.js"></script>
    <script src="./vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="./vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="./vendor/chart.js/Chart.min.js"></script>
    <script src="./vendor/datatables/jquery.dataTables.js"></script>
    <script src="./vendor/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="./js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="./js/sb-admin-datatables.min.js"></script>
    <script src="./js/sb-admin-charts.min.js"></script>
  </div>
</body>

</html>
