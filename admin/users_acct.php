<?php 

  session_start(); 
  include('controllers/config.php');
  $id2 = $_SESSION['id'];
 //$user = $_SESSION['users'];
  
  $sql = "SELECT * FROM admin WHERE id='$id2'";
  $result1 = mysqli_query($db, $sql);
  if(mysqli_num_rows($result1) == 1){
	  while($rows = mysqli_fetch_assoc($result1)){
		  $fname = $rows['fname'];
		  $uname = $rows['uname'];
		  
		  
	  }
  }

  if (!isset($_SESSION['admin'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }  
  
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['admin']);
  	header("location: login.php");
  }
?>
<?php include('controllers/config.php'); 
//include('controllers/dashboard.php');
?>
<!DOCTYPE html>
<html>
                                                                                                <head>
    <title>Home | Digital Asset Hub - Systematic Cryptocurrency trading platform</title>
<meta charset="utf-8">
<meta content="ie=edge" http-equiv="x-ua-compatible">

<meta content="width=device-width, initial-scale=1" name="viewport">
<link href="../wp-content/uploads/fevicon.png" rel="shortcut icon">
<link href="../wp-content/uploads/fevicon.png" rel="apple-touch-icon">
<link href="../fast.fonts.net/cssapi/487b73f1-c2d1-43db-8526-db577e4c822b.css" rel="stylesheet" type="text/css">
<link href="bower_components/select2/dist/css/select2.min.css" rel="stylesheet">
<link href="bower_components/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
<link href="bower_components/dropzone/dist/dropzone.css" rel="stylesheet">
<link href="bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
<link href="bower_components/fullcalendar/dist/fullcalendar.min.css" rel="stylesheet">
<link href="bower_components/perfect-scrollbar/css/perfect-scrollbar.min.css" rel="stylesheet">
<link href="bower_components/slick-carousel/slick/slick.css" rel="stylesheet">
<link href="css/main.css" rel="stylesheet">
</head>
<body class="menu-position-side menu-side-left full-screen with-content-panel color-scheme-dark">
<div class="all-wrapper with-side-panel solid-bg-all">


<div class="layout-w">
<!--------------------
START - Mobile Menu
-------------------->
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5ec3ffde6f7d401ccbb7fdd1/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script--><div class="menu-mobile menu-activated-on-click color-scheme-dark">
<div class="mm-logo-buttons-w">
    <a class="mm-logo" href="../index.php">
        <img width="100px" height="auto" src="../image/logo.png">
    <span></span>
</a>
<div class="mm-buttons">

<div class="mobile-menu-trigger">
<div class="os-icon os-icon-hamburger-menu-1">
</div>
</div>
</div>
</div>
<div class="menu-and-user">
<div class="logged-user-w">
<div class="avatar-w">
<img alt="" src="img/avatar1.jpg">
</div>
 <!-- logged in user information -->
    <?php  if (isset($_SESSION['admin'])) : ?>
	<div class="logged-user-info-w">
		<div class="logged-user-name"><strong><?php echo $_SESSION['admin']; ?></strong></div>
		<div class="logged-user-role"><strong><?php echo $_SESSION['admin']; ?></strong></div>
	</div>
    
    	<?php endif ?>

</div>
<!--------------------
START - Mobile Menu List
-------------------->
<ul class="main-menu">
<li class="selected active">
    <a href="index.php">
<div class="icon-w">
<div class="os-icon os-icon-layout">
</div>
</div>
<span>Dashboard</span>
</a>
</li>
<li class="selected ">
    <a href="invest.php">
<div class="icon-w">
<div class="os-icon os-icon-wallet-loaded">
</div>
</div>
<span>Create Investment</span>
</a>
</li>
<li class="selected ">
    <a href="investments.php">
<div class="icon-w">
<div class="os-icon os-icon-wallet-loaded">
</div>
</div>
<span>Investment History</span>
</a>
</li>
<li class="selected ">
<a href="deposit.php">
<div class="icon-w">
<div class="os-icon os-icon-list">
</div>
</div>
<span>Deposit</span>
</a>
</li>
<li class="selected ">
<a href="deposit_history.php">
<div class="icon-w">
<div class="os-icon os-icon-list">
</div>
</div>
<span>Deposit History</span>
</a>
</li>
<li class="selected ">
    <a href="earnings.php">
<div class="icon-w">
<div class="os-icon os-icon-list">
</div>
</div>
<span>Earnings History</span>
</a>
</li>


<li class="selected ">
    <a href="withdrawal.php">
<div class="icon-w">
<div class="os-icon os-icon-email-forward">
</div>
</div>
<span>Request Withdrawal</span>
</a>
</li>
<li class="selected ">
    <a href="withdrawal_list.php">
<div class="icon-w">
<div class="os-icon os-icon-list">
</div>
</div>
<span>Withdraw History</span>
</a>
</li>


<li class="sub-header">
<span>User Account Options</span>
</li>

<li class="selected ">
<a href="profile.php">
<div class="icon-w">
<div class="os-icon os-icon-user-male-circle2">
</div>
</div>
<span>My Profile</span>
</a>
</li>
<li class="selected ">
    <a href="referrer.php">
<div class="icon-w">
<div class="os-icon os-icon-users">
</div>
</div>
<span>My Referrals</span>
</a>
</li>


<li class="sub-header">
<span>Other Links</span>
</li>
<li class="">
    <a href="../contact.html">
<div class="icon-w">
<div class="os-icon os-icon-phone-15">
</div>
</div>
<span>Contact Support</span>
</a>
</li>
<li class="">
    <a href="../index.php">
<div class="icon-w">
<div class="os-icon os-icon-link-3">
</div>
</div>
<span>Back to Homepage</span>
</a>
</li>

<li class="">
    <a href="index.php?logout='1'">
<div class="icon-w">
<div class="os-icon os-icon-log-out">
</div>
</div>
<span>Logout</span>
</a>
</li>
</ul>
<!--------------------
END - Mobile Menu List
-------------------->
<div class="mobile-menu-magic">
    <h4>Digital Asset Hub</h4>
<p>Your very best investment platform</p>
<div class="btn-w">
    <a class="btn btn-white btn-rounded" href="../contact.html">Contact us</a>
</div>
</div>
</div>
</div>

<!--------------------
START - Main Menu
<?php include('sidebar.php');?>
<!--------------------
END - Main Menu
-------------------->
<!--------------------
END - Mobile Menu
-------------------->

<div class="content-w">
<!--------------------
START - Top Bar
-------------------->
<div class="top-bar color-scheme-transparent">
<!--------------------
START - Top Menu Controls
-------------------->
<div class="top-menu-controls">
<!--------------------
START - Messages Link in secondary top menu
-------------------->


<!--------------------
START - User avatar and menu in secondary top menu
-------------------->
<div class="logged-user-w">
<div class="logged-user-i">
<div class="avatar-w">
<img alt="" src="img/avatar1.jpg">
</div>
<div class="logged-user-menu color-style-bright">
<div class="logged-user-avatar-info">
<div class="avatar-w">
<img alt="" src="img/avatar1.jpg">
</div>
 <!-- logged in user information -->
    <?php  if (isset($_SESSION['admin'])) : ?>
	<div class="logged-user-info-w">
		<div class="logged-user-name"><strong><?php echo $_SESSION['admin']; ?></strong></div>
		<div class="logged-user-role"><strong><?php echo $_SESSION['admin']; ?></strong></div>
	</div>
    
    	<?php endif ?>
</div>
<div class="bg-icon">
<i class="os-icon os-icon-wallet-loaded">
</i>
</div>
<ul>

<li>
    <a href="profile.php">
<i class="os-icon os-icon-user-male-circle2">
</i>
<span>Profile Details</span>
</a>
</li>
<li>
    <a href="referrer.php">
<i class="os-icon os-icon-coins-4">
</i>
<span>My Referrals</span>
</a>
</li>
<li>
    <a href="../contact.html">
<i class="os-icon os-icon-others-43">
</i>
<span>Contact Support</span>
</a>
</li>
<li>
    <a href="index.php?logout='1'" >
<i class="os-icon os-icon-signs-11">
</i>
<span>Logout</span>
</a>
</li>
</ul>
</div>
</div>
</div>
<!--------------------
END - User avatar and menu in secondary top menu
-------------------->
</div>
<!--------------------
END - Top Menu Controls
-------------------->
</div>
<!--------------------
END - Top Bar
-------------------->
<!--------------------
START - Breadcrumbs
-------------------->
<ul class="breadcrumb">
<li class="breadcrumb-item">
<a href="../">Home</a>
</li>
<li class="breadcrumb-item">
<a href="#">User</a>
</li>
<li class="breadcrumb-item">
<span>Dashboard</span>
</li>
</ul>
<!--------------------
END - Breadcrumbs
-------------------->
<div class="content-panel-toggler">
<i class="os-icon os-icon-grid-squares-22">
</i>
<span>Sidebar</span>
</div>

<!----------\\\\\\\\\\ STATRT ....SPACE FOR INNER CONTENT /////////////----------->

<div class="content-i">
<div class="content-box">
<div class="row">
<div class="col-sm-12">
    
<div class="element-wrapper">

<h6 class="element-header">Users Account Details</h6>
<div class="element-content">
<div class="row">

<div class="col-md-12">
<div class="element-box">


<div class="table-responsive">
<div id="dataTable1_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer">


<div class="col-sm-12">
<table id="dataTable1" width="100%" class="table table-striped table-lightfont dataTable no-footer" role="grid" aria-describedby="dataTable1_info" style="width: 100%;">
<thead>
<tr role="row">

<th class="sorting" tabindex="0" aria-controls="dataTable1" rowspan="1" colspan="1" aria-label="User: activate to sort column ascending" style="width: 270px;">User</th>
<th class="sorting" tabindex="0" aria-controls="dataTable1" rowspan="1" colspan="1" aria-label="Email: activate to sort column ascending" style="width: 270px;">Email</th>
<th class="sorting" tabindex="0" aria-controls="dataTable1" rowspan="1" colspan="1" aria-label="BTC Wallet: activate to sort column ascending" style="width: 270px;">BTC Wallet</th>
<th class="sorting" tabindex="0" aria-controls="dataTable1" rowspan="1" colspan="1" aria-label="Amount: activate to sort column ascending" style="width: 270px;">Currently Invested ($)</th>
<th class="sorting" tabindex="0" aria-controls="dataTable1" rowspan="1" colspan="1" aria-label="Amount: activate to sort column ascending" style="width: 270px;">Total Investment ($)</th>
<th class="sorting" tabindex="0" aria-controls="dataTable1" rowspan="1" colspan="1" aria-label="Available Balance: activate to sort column ascending" style="width: 270px;">Total Withdrawal</th>
<th class="sorting" tabindex="0" aria-controls="dataTable1" rowspan="1" colspan="1" aria-label="Available Balance: activate to sort column ascending" style="width: 270px;">Total Earnings</th>
<th class="sorting" tabindex="0" aria-controls="dataTable1" rowspan="1" colspan="1" aria-label="Available Balance: activate to sort column ascending" style="width: 270px;">Total Ref Bonus</th>
<th class="sorting" tabindex="0" aria-controls="dataTable1" rowspan="1" colspan="1" aria-label="Amount: activate to sort column ascending" style="width: 270px;">Available Balance($)</th>



</tr>
</thead>

<tbody>
 <?php 
$query3 = mysqli_query($db, "SELECT users.fname, users.email, users.bit_wallet, acct_details.currently_invested, acct_details.total_withdrawal, acct_details.ref_bonus, acct_details.available_bal FROM users, acct_details WHERE acct_details.user_id = users.id ORDER BY acct_details.id DESC");
$result3 = mysqli_num_rows($query3);

$query4 = mysqli_query($db, "SELECT * FROM investment, users WHERE investment.user_id=users.id ");
$result4 = mysqli_num_rows($query4);
$details4 = mysqli_fetch_assoc($query4);
$investment_sum = $details4['amount'];

$query5 = mysqli_query($db, "SELECT SUM(amount) AS withdrawal_sum FROM withdrawal, users WHERE withdrawal.user_id=users.id AND status='confirmed'");
$result5 = mysqli_num_rows($query5);
$details5 = mysqli_fetch_assoc($query5);
$withdrawal_sum = $details5['withdrawal_sum'];

$query6 = mysqli_query($db, "SELECT SUM(amount) AS earnings_sum FROM earnings, users WHERE earnings.user_id=users.id");
$result6 = mysqli_num_rows($query6);
$details6 = mysqli_fetch_assoc($query6);
$earnings_sum = $details6['earnings_sum'];

while( $details3 = mysqli_fetch_assoc($query3)){

?> 
<?php if ($result3 > 0){ ?>
<tr class="odd">

	
	<td> <?php echo $details3['fname']; ?></td>
	<td> <?php echo $details3['email'];?></td>
	<td> <?php echo $details3['bit_wallet']; ?></td>
	<td> <?php echo '$'.$details3['currently_invested']; ?></td>
	<td> <?php echo '$'.$details4['amount']; ?></td>
	<td> <?php echo '$'.$details5['withdrawal_sum']; ?></td>
	<td> <?php echo '$'.$details6['earnings_sum']; ?></td>
	<td> <?php echo '$'.$details3['ref_bonus']; ?></td>
	<td> <?php echo '$'.$details3['available_bal']; ?></td>

	<?php }else { ?>
<td valign="top" colspan="3" class="dataTables_empty">No data available in table</td></tr>
	<?php }};?>        

 
</tbody>
</table></div>




</div>
</div>


</div>
</div>


</div>
</div>
</div>
</div>
</div>



</div>
<!--------------------
START - Sidebar
-------------------->

<!--------------------
END - Sidebar
-------------------->
</div>









<!----------\\\\\\\\\\ END ....SPACE FOR INNER CONTENT /////////////----------->

</div>
</div>
<div class="display-type">
</div>
</div>
<script src="bower_components/jquery/dist/jquery.min.js">
</script>
<script src="bower_components/popper.js/dist/umd/popper.min.js">
</script>
<script src="bower_components/moment/moment.js">
</script>
<script src="bower_components/chart.js/dist/Chart.min.js">
</script>
<script src="bower_components/select2/dist/js/select2.full.min.js">
</script>
<script src="bower_components/jquery-bar-rating/dist/jquery.barrating.min.js">
</script>
<script src="bower_components/ckeditor/ckeditor.js">
</script>
<script src="bower_components/bootstrap-validator/dist/validator.min.js">
</script>
<script src="bower_components/bootstrap-daterangepicker/daterangepicker.js">
</script>
<script src="bower_components/ion.rangeSlider/js/ion.rangeSlider.min.js">
</script>
<script src="bower_components/dropzone/dist/dropzone.js">
</script>
<script src="bower_components/editable-table/mindmup-editabletable.js">
</script>
<script src="bower_components/datatables.net/js/jquery.dataTables.min.js">
</script>
<script src="bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js">
</script>
<script src="bower_components/fullcalendar/dist/fullcalendar.min.js">
</script>
<script src="bower_components/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js">
</script>
<script src="bower_components/tether/dist/js/tether.min.js">
</script>
<script src="bower_components/slick-carousel/slick/slick.min.js">
</script>
<script src="bower_components/bootstrap/js/dist/util.js">
</script>
<script src="bower_components/bootstrap/js/dist/alert.js">
</script>
<script src="bower_components/bootstrap/js/dist/button.js">
</script>
<script src="bower_components/bootstrap/js/dist/carousel.js">
</script>
<script src="bower_components/bootstrap/js/dist/collapse.js">
</script>
<script src="bower_components/bootstrap/js/dist/dropdown.js">
</script>
<script src="bower_components/bootstrap/js/dist/modal.js">
</script>
<script src="bower_components/bootstrap/js/dist/tab.js">
</script>
<script src="bower_components/bootstrap/js/dist/tooltip.js">
</script>
<script src="bower_components/bootstrap/js/dist/popover.js">
</script>
<script src="js/demo_customizerce5a.js?version=4.4.1">
</script>





<script src="js/maince5a.js?version=1589676240">
</script>


    <script type='text/javascript' src='../tawto.js'></script>
</body>
<!-- Mirrored from light.pinsupreme.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 30 Oct 2019 01:10:57 GMT -->
</html>

















