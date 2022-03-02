@extends('layouts.master') 

@section('content') 



			<!-- begin breadcrumb -->
			<ol class="breadcrumb pull-right">
				<li class="breadcrumb-item"><a href="javascript:;">Home</a></li>
				<li class="breadcrumb-item active">Dashboard</li>
			</ol>
			<!-- end breadcrumb -->
			<!-- begin page-header -->
			<h1 class="page-header">Dashboard <small>Krisanthium Offsite Printing, PT.</small></h1>
			<!-- end page-header -->
			
			<!-- begin row -->
			<div class="row">
				<!-- begin col-3 -->
				<!-- begin col-3 -->
				<div class="col-lg-12 col-md-4">
					<div class="widget widget-stats bg-black-lighter">
						<div class="stats-icon"><i class="fa fa-clock"></i></div>
						<div class="stats-info">
							<h4>TIME ON SITE</h4>
							<p><?php
								$tanggal= mktime(date("m"),date("d"),date("Y"));
								echo "<b>".date("l, d-M-Y", $tanggal)."</b> ";
								date_default_timezone_set('Asia/Jakarta');
								
								$jam=date("H:i:s");
								echo $jam."<br>";
								$a = date ("H");
								if (($a>=6) && ($a<=11)){
									echo "Selamat Pagi !!";
								}
								else if(($a>11) && ($a<=15))
								{
									echo "Selamat Siang !!";}
								else if (($a>15) && ($a<=18)){
									echo "Selamat Sore !!";}
								else { echo "<b>Selamat Malam </b>";}
							?> </p>	
						</div>
						<div class="stats-link">
							<a href='modul/mod_manual/manual.php' target='_blank'>Download Manual <b>Calculate Web App</b></a>
						</div>
					</div>
				</div>
				<!-- end col-3 -->
				
				<!-- end col-3 -->
				<!-- begin col-3 -->
				
				
			</div>
			<!-- end row -->
			


    @endsection