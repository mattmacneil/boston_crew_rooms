<?php
    include "head.php";
?>

<div style="width: 100%; height: 100px; border-bottom: 1px solid lightgrey;">


	<nav>

		<div class="nav-inner">

			<div class="nav-left">
				<a href="index.php" class="noline">
				<img src="images/logo.png" alt="Boston Crew Rooms Home Link." />
				</a>
			</div><!-- nav logo div -->

			<div class="nav-right">

				<span><a href="#_about">About</a></span>

				<span><a href="#_amenities">Amenities</a></span>

				<span><a href="#_property">The Property</a></span>

				<span><a href="#_contact">Contact</a></span>

				<a href="booking.php" class="noline">
				<div class="nav-right-booking">

					<i class="fa fa-calendar-o fa-fw"></i>

				</div><!-- nav right booking -->
				</a>

			</div><!-- nav right -->

		</div><!-- nav inner -->

	</nav><!-- nav -->

</div><!-- booking nav -->

	<div id="contact-confirm">

		<span>We Got Your Message!</span>

		<p>We'll get back to you as soon as possible - Boston Crew Rooms is managed by a fellow flight attendant so there may be some delays due to working hours, but you can usually expect a reply within one day.
		</p>

	</div><!-- contact confirm -->

<section id="bottombooking">

	<div class="bottombooking-plane"></div><!-- bottom booking plane -->

	<div class="bottombooking-left">

		<div class="bottombooking-left-topline">

			<div class="bottombooking-left-topline-buffer">
				<span>.</span><span>.</span><span>.</span>
			</div><!-- bottombooking left top line buffer --> 

			<div class="bottombooking-left-topline-content">
				Ready to Go?
			</div><!-- bottom booking left topline content -->

			<div class="clearfix"></div>

		</div><!-- bottom booking left top line -->

		<div class="bottombooking-left-bottomline">

			<div class="bottombooking-left-topline-buffer">&nbsp;
			</div><!-- bottombooking left top line buffer --> 

			<div class="bottombooking-left-topline-content">
				Book Online!
			</div><!-- bottom booking left topline content -->

		</div><!-- bottom booking left bottom line -->

	</div><!-- bottombooking left -->

	<div class="bottombooking-right">

		<div class="bottombooking-right-snipe">
			<i class="fa fa-calendar fa-fw"></i>
		</div><!-- bottom booking right snipe -->

		<a href="booking.php" class="noline">
		<div class="bottombooking-right-button">
			Book a Room Now
		</div><!-- bottom booking right button -->
		</a>

	</div><!-- bottombooking right -->

</section><!-- bottom booking section -->

<?php 

	include "footer.php";

?>