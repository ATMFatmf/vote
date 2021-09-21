<?php include 'includes/session.php'; ?>
<?php include 'includes/header.php'; ?>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <?php include 'navbar.php'; ?>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       ADD YOUR CANDIDACY
      </h1>
      <h5>
      Please Add YOUR Personal Information in order to participate in this Election 
      </h5>

      
    </section>
    <!-- Main content -->
    <section class="content">
      <?php
       
        
        if(isset($_SESSION['success'])){
          echo "
            <div class='alert alert-success alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4><i class='icon fa fa-check'></i> Success!</h4>
              ".$_SESSION['success']."
            </div>
          ";
          unset($_SESSION['success']);
        }
      ?>
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header with-border">
              <a href="#addnew" data-toggle="modal" class="btn btn-primary btn-sm btn-flat"><i class="fa fa-plus"></i> New</a>
            </div>
            
            <tbody>
                <div class="box-body">
              <table id="example1" class="table table-bordered">
                <thead>
                  <th class="hidden"></th>
                  <th>Firstname</th>
                  <th>Lastname</th>
                  <th>Position</th>
                  <th>C.V </th>
                
                </thead>
      </tbody>       
    
 
  <?php include 'candidates_modal.php'; ?>
</div>
<?php include 'includes/scripts.php'; ?>
<script>


function getRow(id){
  $.ajax({
    type: 'POST',
    url: 'candidates_row.php',
    data: {id:id},
    dataType: 'json',
    success: function(response){
      $('.id').val(response.canid);
      $('#edit_firstname').val(response.firstname);
      $('#edit_lastname').val(response.lastname);
      $('#posselect').val(response.position_id).html(response.description);      
      $('#edit_platform').val(response.platform);
      $('.fullname').html(response.firstname+' '+response.lastname);
      $('#desc').html(response.platform);
    }
  });
}
</script>

</body>
</html>
