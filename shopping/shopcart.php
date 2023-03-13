<!DOCTYPE html>
<html>
<head>
	<title>Grab - Billed</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"">
	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="shortcut icon" href="assets/img/icon/icon-bar-1.png" type="">

	<!-- font awesome style -->
	<link href="css/font-awesome.min.css" rel="stylesheet" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />  
	<!-- font thai -->
	<link rel="preconnect" href="https://fonts.googleapis.com/%22%3E" >
	<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Kanit&display=swap" rel="stylesheet">
</head>
<body>
	<main class="page">
	 	<section class="shopping-cart dark">
	 		<div class="container">
				<div class="iconback">
					<a href="shopcart.html">
						<i class="fa-solid fa-circle-chevron-left"></i>&nbsp; Back
					</a>
				</div>
		        <div class="block-heading">
		          	<h2>Shopping Cart</h2>
		          	<p>รายการสินค้าทั้งหมด</p>
					
		        </div>	
				

		        <div class="content">
	 				<div class="row">
	 					<div class="col-md-12 col-lg-8">
							<!-- Items -->
	 						<div class="items">
							<!-- Product Mask 1 -->
				 				<div class="product">
									<a href=""><i class="fa-sharp fa-solid fa-circle-xmark"></i></a>
				 					<div class="row">
					 					<div class="col-md-3">
					 						<img class="img-fluid mx-auto d-block image" src="assets/img/f6.png">
					 					</div>
					 					<div class="col-md-8">
					 						<div class="info">
						 						<div class="row">
							 						<div class="col-md-4 product-name">
							 							<div class="product-name">
								 							<span>ชื่อสินค้า</span>
								 							<div class="product-info">
									 							<span class="value"> Detail</span>
									 						</div>
									 					</div>
							 						</div>
							 						<div class="col-md-4 quantity">
							 							<label for="quantity">จำนวน :</label>
							 							<input id="quantity" type="number" value ="1" class="form-control quantity-input">
							 						</div>
							 						<div class="col-md-4 price">
							 							<span>120 ฿</span>
							 						</div>
							 					</div>
							 				</div>
					 					</div>
					 				</div>
				 				</div>

								 <div class="product">
									<a href=""><i class="fa-sharp fa-solid fa-circle-xmark"></i></a>
				 					<div class="row">
					 					<div class="col-md-3">
					 						<img class="img-fluid mx-auto d-block image" src="assets/img/f6.png">
					 					</div>
					 					<div class="col-md-8">
					 						<div class="info">
						 						<div class="row">
							 						<div class="col-md-4 product-name">
							 							<div class="product-name">
								 							<span>ชื่อสินค้า</span>
								 							<div class="product-info">
									 							<span class="value"> Detail</span>
									 						</div>
									 					</div>
							 						</div>
							 						<div class="col-md-4 quantity">
							 							<label for="quantity">จำนวน :</label>
							 							<input id="quantity" type="number" value ="1" class="form-control quantity-input">
							 						</div>
							 						<div class="col-md-4 price">
							 							<span>120 ฿</span>
							 						</div>
							 					</div>
							 				</div>
					 					</div>
					 				</div>
				 				</div>


		
								

				 			</div><!-- End Items -->

			 			</div>
			 			<div class="col-md-12 col-lg-4">
			 				<div class="summary">		
								<img src="assets/img/logo-grab-3.png" class="img-fluid mx-auto d-block">	
			 					<!-- <h3>Total Prices</h3> -->
			 					<div class="summary-item"><span class="text">Total Prices</span><span class="price">360 ฿</span></div>
								 	<div class="contbutt">
										<form>
											<label>
												<input type="radio" name="radio" id="text1" checked/>
												<span>ชำระเงินปลายทาง</span>
											</label>
											<br>
											<label>
												<input type="radio" name="radio" id="text2"/>
												<span>บัตรเครดิต</span>
											</label>
											<button type="submit" name="submit" value="Submit" id="submit" class="btn btn-primary btn-block">ชำระเงิน</button>

										</form>
							
										<!--	<div class="p-2">
										<form onsubmit="return handleData()" method="post" action="https://postman-echo.com/post">
											<div>
												<input type="checkbox" name="send_newsletter" id="send_newsletter" />
												<label class="textletter" for="send_newsletter">ชำระเงินปลายทาง</label>
											</div>
											<div>
												<input type="checkbox" name="agree" id="agree" value="yes agree"/>
												<label class="textletter2"for="agree">บัตรเครดิต</label>
											</div>
											<div> 
											  	
											</div> -->


										</form>
									</div>
								</div>
				 			</div>
			 			</div>
		 			</div> 
		 		</div>
	 		</div>
		</section>
	</main>
</body>
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <!-- fontawesome -->
  <script src="https://kit.fontawesome.com/9e7e14cf3d.js" crossorigin="anonymous"></script>
</body>
</html>
