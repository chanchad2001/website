<?php ob_start(); ?>

<div class="fh5co-pricing">
    <div class="container">
        <div class="animate-box">
            <div class="col-md-6 col-md-offset-3 text-center fh5co-explore">
                <h3>Page en Development !</h3>
            </div>
        </div>
    </div>
</div>

<div id="fh5co-pricing">
		<div class="container">
			<div class="row">
				<div class="pricing">
					<div class="col-md-3 animate-box">
						<div class="price-box">
							<h2 class="pricing-plan">Starter</h2>
							<div class="price"><sup class="currency">$</sup>9<small>/month</small></div>
							<ul class="classes">
								<li>15 English 101</li>
								<li class="color">10 Web Development</li>
								<li>10 Yoga Classes</li>
								<li class="color">20 Virtual Assistant</li>
								<li>10 System Analyst</li>
								<li class="color">5 WordPress</li>
								<li>10 Programming</li>
							</ul>
							<a href="#" class="btn btn-select-plan btn-sm">Select Plan</a>
						</div>
					</div>

					<div class="col-md-3 animate-box">
						<div class="price-box">
							<h2 class="pricing-plan">Basic</h2>
							<div class="price"><sup class="currency">$</sup>27<small>/month</small></div>
							<ul class="classes">
								<li>15 English 101</li>
								<li class="color">10 Web Development</li>
								<li>10 Yoga Classes</li>
								<li class="color">20 Virtual Assistant</li>
								<li>10 System Analyst</li>
								<li class="color">5 WordPress</li>
								<li>10 Programming</li>
							</ul>
							<a href="#" class="btn btn-select-plan btn-sm">Select Plan</a>
						</div>
					</div>

					<div class="col-md-3 animate-box">
						<div class="price-box popular">
							<h2 class="pricing-plan pricing-plan-offer">Pro <span>Best Offer</span></h2>
							<div class="price"><sup class="currency">$</sup>74<small>/month</small></div>
							<ul class="classes">
								<li>15 English 101</li>
								<li class="color">10 Web Development</li>
								<li>10 Yoga Classes</li>
								<li class="color">20 Virtual Assistant</li>
								<li>10 System Analyst</li>
								<li class="color">5 WordPress</li>
								<li>10 Programming</li>
							</ul>
							<a href="#" class="btn btn-select-plan btn-sm">Select Plan</a>
						</div>
					</div>

					<div class="col-md-3 animate-box">
						<div class="price-box">
							<h2 class="pricing-plan">Unlimited</h2>
							<div class="price"><sup class="currency">$</sup>140<small>/month</small></div>
							<ul class="classes">
								<li>15 English 101</li>
								<li class="color">10 Web Development</li>
								<li>10 Yoga Classes</li>
								<li class="color">20 Virtual Assistant</li>
								<li>10 System Analyst</li>
								<li class="color">5 WordPress</li>
								<li>10 Programming</li>
							</ul>
							<a href="#" class="btn btn-select-plan btn-sm">Select Plan</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

<?php $content = ob_get_clean(); 
include('template.php');