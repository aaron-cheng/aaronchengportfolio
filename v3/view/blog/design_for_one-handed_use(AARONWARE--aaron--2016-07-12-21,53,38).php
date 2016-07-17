<!DOCTYPE html>
<html>
<head>
	<title>Design for One-handed Use</title>

<?php include '../component/head.php';?>

<?php include '../component/style.php';?>

</head>

<body>

<?php include '../component/nav.php';?>

<article>
	<div class="container padding--element_lg">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="row">
					<div class="col-md-12">
						<h1 class="txt--regular txt--xxl txt--primary_on_light">Design for One-handed Use</h1>
					</div>
				</div>


			</div>
		</div>
	</div>

	<div class="work__background--differentiator">
		<div class="container padding--element_top_lg">
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<p>I remember before the smart phone was invented, I could use only one hand to type text messages and make calls. But now I have to use two hands to finish some tasks on my iPhone. The main reason is that the screen gets bigger and it is hard to reach the upper part. It sounds like an obvious problem, but why do we still insist putting those buttons at those awkward locations? I guess the answer from most people is ‘because everybody is doing that.‘ Well, I think now it is time to break the rule and start doing the right thing. I happen to be redesigning an e-commerce app recently and it is the perfect opportunity to explore the possibility of creating a one-handed use design pattern for mobile apps. </p>
				</div>
			</div>
			<div class="row margin--element_top">
				<div class="col-md-3">
					<img src="/img/blog/one_handed_use/new_discovery.jpg" class="img-responsive center-block" alt="Selected work samples">			
					<p class="text-center">Discovery Page</p>
				</div>
				<div class="col-md-3">
					<img src="/img/blog/one_handed_use/new_search.jpg" class="img-responsive center-block" alt="Selected work samples">			
					<p class="text-center">Research Page</p>
				</div>
				<div class="col-md-3">
					<img src="/img/blog/one_handed_use/new_shopping_bag.jpg" class="img-responsive center-block" alt="Selected work samples">			
					<p class="text-center">Shopping Bag</p>
				</div>
				<div class="col-md-3">
					<img src="/img/blog/one_handed_use/new_me.jpg" class="img-responsive center-block" alt="Selected work samples">			
					<p class="text-center">Me Page</p>
				</div>				
			</div>
		</div>	
	</div>

	<div class="work__background--differentiator">
		<div class="container padding--element_lg">
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<h2 class="txt--bold txt--lg txt--primary_on_light">Identify the ‘safe zone‘</h2>
					<p class="margin--element_top_xs">Before we jump into the design, we need to figure out the ‘safe zone‘ on the screen. I use iPhone 6 for the test. Because if the design works on iPhone 6 and it should work better on smaller screens. Those smart phones bigger than iPhone 6 are designed for two-handed use and there is no need to worry about them. </br></br>

The green color indicates the ‘safe zone‘ in which it is easy to move my thumb around. Within the blue area, it gets a little bit harder, but I am still able to reach any spot. The red zone is the area that is impossible for me to reach without moving my other fingers. So in our design, we should put all the buttons and other interactive elements within the green and blue area and stay away from the red zone.</p>
				</div>
			</div>
			<div class="row margin--element_top">
				<div class="col-md-4">
					<img src="/img/blog/one_handed_use/green_zone.jpg" class="img-responsive center-block" alt="Selected work samples">			
					<p class="text-center">Easy</p>
				</div>
				<div class="col-md-4">
					<img src="/img/blog/one_handed_use/blue_zone.jpg" class="img-responsive center-block" alt="Selected work samples">			
					<p class="text-center">Ok</p>
				</div>
				<div class="col-md-4">
					<img src="/img/blog/one_handed_use/red_zone.jpg" class="img-responsive center-block" alt="Selected work samples">			
					<p class="text-center">Hard</p>
				</div>
			</div>

			<div class="row margin--element_top_lg">
				<div class="col-md-8 col-md-offset-2">
					<h2 class="txt--bold txt--lg txt--primary_on_light">Find the problems</h2>
					<p class="margin--element_top_xs">Now let’s take a look at some examples and find the problems we are gonna solve. Basically, there are 4 types of interactive elements often being used in the red zone: List of items, Back button, Sub navigation and Action buttons.</p>
				</div>
			</div>
			<div class="row margin--element_top">
				<div class="col-md-3">
					<img src="/img/blog/one_handed_use/facebook_screenshot.jpg" class="img-responsive center-block" alt="Selected work samples">			
					<p class="text-center">List of items (Facebook: More)</p>
				</div>
				<div class="col-md-3">
					<img src="/img/blog/one_handed_use/fancy_screenshot.jpg" class="img-responsive center-block" alt="Selected work samples">			
					<p class="text-center">Back button (Fancy: Detail)</p>
				</div>
				<div class="col-md-3">
					<img src="/img/blog/one_handed_use/spring_screenshot.jpg" class="img-responsive center-block" alt="Selected work samples">			
					<p class="text-center">Sub Navigation (Spring: Shop)</p>
				</div>
				<div class="col-md-3">
					<img src="/img/blog/one_handed_use/facebook_new_feed_screenshot.jpg" class="img-responsive center-block" alt="Selected work samples">			
					<p class="text-center">Buttons (Facebook: News Feed)</p>
				</div>				
			</div>

			<div class="row margin--element_top_lg">
				<div class="col-md-8 col-md-offset-2">
					<h2 class="txt--bold txt--lg txt--primary_on_light">Solution for ‘list of items’: Make the first item bigger or add informative content</h2>
					<p class="margin--element_top_xs">List items stack from top to bottom. To avoid placing them in the red zone, we need to push them down. There are 2 ways of doing this without leaving an empty space: 

1. Make the first item big enough so the bottom part can reach the safe zone. In the redesigned ‘Me‘ page, the user’s avatar is enlarged and the user can click its bottom part to edit the profile image. 

2. Add informative content to the top. In the new shopping cart design, I moved shipping and tax fees on the top of the page to push the first item to the safe zone. However, you can notice that only the bottom part of the item is in the safe zone, to make it easy for users to click the ‘X‘ icon, I move it to the bottom and change it to ‘REMOVE‘.</p>
				</div>
			</div>
			<div class="row margin--element_top">
				<div class="col-md-6">
					<img src="/img/blog/one_handed_use/old_me_overlay.png" class="img-responsive center-block zone_overlay" alt="Selected work samples">
					<img src="/img/blog/one_handed_use/old_me.jpg" class="img-responsive center-block zone_base" alt="Selected work samples">
					<p class="text-center">Previous</p>
				</div>
				<div class="col-md-6">
					<img src="/img/blog/one_handed_use/new_me.jpg" class="img-responsive center-block" alt="Selected work samples">			
					<p class="text-center">New</p>
				</div>			
			</div>
			<div class="row margin--element_top">
				<div class="col-md-8 col-md-offset-2">
					<p class="margin--element_top_xs">From the data above, we can easily see the weight of each action and the conclusion of the design: ‘delete items‘ and ‘view item detail‘ are commonly-used actions and users should use less clicks to accomplish the task; ‘Edit quantity‘ button is rarely used and it is ok to take extra steps. Looks like Wish is the winner? Yes and no. Yes, because it is easier to use functionality wise, and no, because its design can still be improved.</p>
				</div>
			</div>

			<div class="row margin--element_top_lg">
				<div class="col-md-8 col-md-offset-2">
					<h2 class="txt--bold txt--lg txt--primary_on_light">Bieyang: Data + innovation</h2>
					<p class="margin--element_top_xs">Based on the data and aesthetic requirement, I want the page to be both easy to use and cleanlooking. Here is my solution: I keep the ‘delete’ button on the page, so users can delete any item with one click. However, I removed the ‘edit quantity‘ button to keep the layout less noisy. Users can edit the quantity in the detail page after they click the item.</p>
				</div>
			</div>
			<div class="row margin--element_top">
				<div class="col-md-12">
					<img src="/img/blog/one_handed_use/shopping_cart_bieyang.png" class="img-responsive center-block" alt="Selected work samples">			
				</div>
			</div>
		</div>	
	</div>

</article>

<!-- <div class="work__background--differentiator"> -->
	<div class="container padding--element_lg">

<?php include '../component/social.php';?>

	</div>
<!-- </div> -->

<?php include '../component/footer.php';?>

<?php include '../component/script.php';?>

</body>
</html>