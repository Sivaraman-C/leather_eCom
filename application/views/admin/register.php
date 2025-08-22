<?php
	$this->load->view('master_pages/header');
?>
<style type="text/css">
    input[type=number]::-webkit-inner-spin-button, 
    input[type=number]::-webkit-outer-spin-button { 
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
        margin: 0; 
    }
</style>

		<!-- Main Content -->
		<div class="mn-main-content">
			<div class="mn-breadcrumb m-b-30">
				<div class="row">
					<div class="col-12">
						<div class="row gi_breadcrumb_inner">
							<div class="col-md-6 col-sm-12">
								<h2 class="mn-breadcrumb-title">Register Page</h2>
							</div>
							<div class="col-md-6 col-sm-12">
								<!-- mn-breadcrumb-list start -->
								<ul class="mn-breadcrumb-list">
									<li class="mn-breadcrumb-item"><a href="index.html">Home</a></li>
									<li class="mn-breadcrumb-item active">Register Page</li>
								</ul>
								<!-- mn-breadcrumb-list end -->
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- Register section -->
			<section class="mn-register p-b-15">
				<div class="mn-title d-none">
					<h2>Register<span></span></h2>
					<p>Best place to buy and sell digital products.</p>
				</div>
				<div class="row">
					<div class="mn-register-wrapper">
						<div class="mn-register-container">
							<div class="mn-register-form">
								<form action="<?php echo base_url('registerUser') ?>" method="POST">
									<span class="mn-register-wrap mn-register-half">
										<label>Name*</label>
										<input type="text" name="name" placeholder="Enter your first name"
											required>
									</span>
									<span class="mn-register-wrap mn-register-half">
									  <label>Phone Number*</label>
									  <input type="number" id="phone" name="phone" placeholder="Enter your phone number" required>
									  <small id="phone-error" style="color: red; top : -10px; display: none;">Please enter a valid 10-digit phone number</small>
									</span>
									<span class="mn-register-wrap mn-register-half">
										<label>Email*</label>
										<input type="email" name="email" placeholder="Enter your email add..." required>
									</span>
									<span class="mn-register-wrap mn-register-half" style="position: relative;">
									  <label>Password*</label>
									  <input type="password" id="password" name="password" placeholder="Enter your password" required>
									  <span class="toggle-password" onclick="togglePassword()" style="position: absolute; right: 20px; top: 40px; cursor: pointer;">
									    👁️
									  </span>
									</span>
									<span class="mn-register-wrap">
										<label>Address</label>
										<input type="text" name="address" placeholder="Address Line 1">
									</span>
									<span class="mn-register-wrap mn-register-half">
										<label>City*</label>
										<input type="text" name="city" placeholder="City"
											required>
									</span>

									<span class="mn-register-wrap mn-register-half">
										<label>Post Code</label>
										<input type="text" name="postalcode" placeholder="Post Code">
									</span>
									<span class="mn-register-wrap mn-register-half">
									  <label>Country *</label>
									  <span class="mn-rg-select-inner">
									    <select id="mn-select-country" name="country" class="mn-register-select">
									      <option selected disabled>Country</option>
									    </select>
									  </span>
									</span>
									<span class="mn-register-wrap mn-register-half">
									  <label>Region State</label>
									  <span class="mn-rg-select-inner">
									    <select id="mn-select-state" name="state" class="mn-register-select">
									      <option selected disabled>Region/State</option>
									    </select>
									  </span>
									</span>
									<span class="mn-register-wrap mn-register-btn">
										<span>Have an account?<a href="login.html">Login</a></span>
										<button class="mn-btn-1" type="submit" name="registerUser"><span>Register</span></button>
									</span>
								</form>
							</div>
						</div>
					</div>
				</div>
			</section>
		</div>



<?php
	$this->load->view('master_pages/footer');
?>