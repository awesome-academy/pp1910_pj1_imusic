@extends ('web.layout')
@section('content')
	<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Document</title>
	</head>
	<body>
		<div class="container">
			<div class="row">
				<div class="col-md-12" >
					<?php
						$url = asset('uploads/')."/"; 
					 ?>
					<div class="col-md-5" style="border: ridge";>
							<div class="row" style="margin-top: 5px;">
									<img src="{{ URL::asset('img/g1.gif') }}" class="img-responsive" alt="Cinque Terre" width="100%" height="280px" >
							</div>
							<hr style="margin: 0px;">
							<div class="row">
								<div id="player">
									   <audio controls autoplay style="width: 470px;height: 40px;">
									    <source src="{!! $url !!}" type="audio/mpeg">
									               unsupported !! 
									   </audio>
								</div>
							</div>
							<div class="row" style="margin-top: 15px;">
								<table class="table table-hover">
									<thead>
										
									</thead>
									<tbody>
										<tr>
											<th style="color: blue;">Song :</th>
											
										</tr>
										<tr>
											<th style="color: blue;">Singser :</th>
								
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					<div class="col-md-6" style="border: ridge;margin-left: 50px;">
							<table class="table table-hover"  >
								<thead>
									<tr>
										<td colspan="3" style="font-weight: bold; text-align: center;color: blue;background-color: white;">Track information</td>
									</tr>
								</thead>
								<tbody >
									<tr>
											
										<th>Tên bài hát</th>
										
									
									</tr>
									<tr>
										
										<th>Sáng tác</th>
									
										
									</tr>
									<tr>
										
										<th>Ca sĩ</th>
									
									</tr>
									<tr>
										<th>Thể loại</th>
									
									</tr>
									<tr>
										<th>Quốc gia</th>
									
									</tr>
									<tr>
										<th>Năm</th>
										
									</tr>
								</tbody>
						</table>
					</div>
				</div>
			</div>
			<hr style="color: #698B22 ">
			<h3 ><a href="">NGHE TIẾP</a></h3>
			<div class="row">
				<div class="col-md-5"><hr style="margin: 0px;border-color: #698B22"></div>
			</div>
			<div class="row">
				<div class="col-md-5">
					<table class="table table-hover">
						<thead>
						</thead>
						
					</table>
			
				</div>
			</div>
		</div>
	</body>
	</html>
@stop