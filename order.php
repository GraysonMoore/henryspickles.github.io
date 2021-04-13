<!DOCTYPE>
<html>
	<head>
		<meta charset="utf-8">
		<title>Henry's Dill Pickles</title>
		<link rel="stylesheet" href="main.css">
	</head>

	<body>
		<div class="body">
			<section>
				<a href="index.html"><img src="Images/Logo2.png"></a>
				<h1 class="head">Henry's Dill Pickles</h1>
				<div class="links">
					<ul>
						<li id="l"><a href="index.html">HOME</a></li>
						<li id="l">ORDER</li>
						<li id="l"><a href="review.html">REVIEWS</a></li>
						<li id="l"><a href="survey.html">SURVEY</a></li>
					</ul>
				</div>
			</section>
			<br>
			<h2 class="orderhead">Cost per Pint Jar: $5</h2>
			<p class="optional2">Payment collected upon pickup or delivery</p><br>
			
			
			
			<form action="formspree.io/ghmmoore@gmail.com" method="post">
				<div class="emailInfo">

					<label for="emailTo" class="name">Full Name:</label><br>
					<input type="text" id="emailTo" name="name"><br><br>

					<label for="emailFrom" class="email">Your Email:</label><br>
					<input type="email" id="emailFrom" name="email"><br><br>

					<label for="address">Street Address:</label><br>
					<input type="text" id="address" name="address"><br>
					
					<label for="city">City:</label><br>
					<input type="text" id="city" name="city"><br>
					
					<label for="state">State:</label><br>
					<input type="text" id="state" name="state"><br><br>
					<br><br>

					<label for="comments">Comments or Questions?</label><br>
					<textarea id="comments" name="comments" cols="30" rows="8"></textarea><br><br><br>

					<label for="pickup" class="pickup">Pickup or Delivery?</label><br>
					<p class="optional">Local Deliveries Only!</p>
					<p class="optional">$1 Extra For Delivery</p>
					
					<div class="selector">
						<select name="pickup" id="pickup">
							<option id="pickup1" name="pickuptot" value="1">Pickup</option>
							<option id="delivery" name="delivery" value="2">Delivery</option>
						</select>
					</div>
				</div><br><br>

				<div class="orders">
					<div class="order1">
						<center>
							<label for="amount1" class="amount1title">Order #1:</label>
							<p class="optional">*required</p>
							<label for="amount1">Qty: </label>
							<input type="number" id="amount1" name="amount1" min="1"max="20"><br><br>

							<label for="type1">Type: </label>
							<select id="type1" name="type1">
								<option>Original</option>
								<option>Garlic</option>
								<option>Spicy</option>
							</select>
						</center>
					</div><br><br>

					<div class="order2">
						<center>
							<label for="amount2" class="amount2title">Order #2:</label>
							<p class="optional">*optional</p>
							<label for="amount2">Qty: </label>
							<input type="number" id="amount2" name="amount2" min="1"max="20"><br><br>

							<label for="type2">Type: </label>
							<select id="type2" name="type2">
								<option>Original</option>
								<option>Garlic</option>
								<option>Spicy</option>
							</select>
						</center>
					</div><br><br>

					<div class="order3">
						<center>
							<label for="amount3" class="amount3title">Order #3:</label>
							<p class="optional">*optional</p>
							<label for="amount3">Qty: </label>
							<input type="number" id="amount3" name="amount3" min="1"max="20"><br><br>

							<label for="type3">Type: </label>
							<select id="type3" name="type3">
								<option>Original</option>
								<option>Garlic</option>
								<option>Spicy</option>
							</select>
						</center>
					</div>
				</div><br>
				<svg height="20" width="750">
  					<line x1="30" y1="0" x2="750" y2="0" style="stroke:rgb(0,0,0);stroke-width:5" />
				</svg>
				
				
				
				<br><br>
				<input formmethod="post" type="submit" value="Send!" name="submit" class="sendButton" id="sendButton">
			</form>
			<div class="cost">
				<button id="calculate">Calculate Cost</button><br>
				<h2 id="total">Total Cost: $0</h2>
			</div>
			
			<footer>&copy; 2021 Grayson Moore</footer>
		</div>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="script.js"></script>
		
	</body>

</html>
