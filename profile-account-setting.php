<?php include('header.php') ?>

 <section class="profile-account-setting">
			<div class="container">
				<div class="account-tabs-setting">
					<div class="row">
						<div class="col-lg-3">
							<div class="acc-leftbar">
								<div class="nav nav-tabs" id="nav-tab" role="tablist">
								    <a class="nav-item nav-link active" id="nav-acc-tab" data-toggle="tab" href="#nav-acc" role="tab" aria-controls="nav-acc" aria-selected="true"><i class="la la-cogs"></i>Account Setting</a>
								    <a class="nav-item nav-link" id="nav-status-tab" data-toggle="tab" href="#nav-status" role="tab" aria-controls="nav-status" aria-selected="false"><i class="fa fa-line-chart"></i>Status</a>
								    <a class="nav-item nav-link" id="nav-password-tab" data-toggle="tab" href="#nav-password" role="tab" aria-controls="nav-password" aria-selected="false"><i class="fa fa-lock"></i>Change Password</a>
								    <a class="nav-item nav-link" id="nav-notification-tab" data-toggle="tab" href="#nav-notification" role="tab" aria-controls="nav-notification" aria-selected="false"><i class="fa fa-flash"></i>Notifications</a>
								   <!-- <a class="nav-item nav-link" id="nav-privcy-tab" data-toggle="tab" href="#privcy" role="tab" aria-controls="privacy" aria-selected="false"><i class="fa fa-group"></i>Requests</a>-->
								    <a class="nav-item nav-link" id="security" data-toggle="tab" href="#security-login" role="tab" aria-controls="security-login" aria-selected="false"><i class="fa fa-user-secret"></i>Security and Login</a>
								    <a class="nav-item nav-link" id="nav-privacy-tab" data-toggle="tab" href="#privacy" role="tab" aria-controls="privacy" aria-selected="false"><i class="fa fa-paw"></i>Privacy</a>
								    <a class="nav-item nav-link" id="nav-blockking-tab" data-toggle="tab" href="#blockking" role="tab" aria-controls="blockking" aria-selected="false"><i class="fa fa-cc-diners-club"></i>Blocking</a>
								    <a class="nav-item nav-link" id="nav-deactivate-tab" data-toggle="tab" href="#nav-deactivate" role="tab" aria-controls="nav-deactivate" aria-selected="false"><i class="fa fa-random"></i>Deactivate Account</a>
								  </div>
							</div><!--acc-leftbar end-->
						</div>
						<div class="col-lg-9">
							<div class="tab-content" id="nav-tabContent">
								<div class="tab-pane fade show active" id="nav-acc" role="tabpanel" aria-labelledby="nav-acc-tab">
									<div class="acc-setting">
										<h3>Account Setting</h3>
										<form>
											<div class="notbar">
												<h4>Notification Sound</h4>
												<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus pretium nulla quis erat dapibus, varius hendrerit neque suscipit. Integer in ex euismod, posuere lectus id</p>
												<div class="toggle-btn">
													<div class="custom-control custom-switch">
														<input type="checkbox" class="custom-control-input" id="customSwitch1">
														<label class="custom-control-label" for="customSwitch1"></label>
													</div>
												</div>
											</div><!--notbar end-->
											<div class="notbar">
												<h4>Notification Email</h4>
												<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus pretium nulla quis erat dapibus, varius hendrerit neque suscipit. Integer in ex euismod, posuere lectus id</p>
												<div class="toggle-btn">
													<div class="custom-control custom-switch">
														<input type="checkbox" class="custom-control-input" id="customSwitch2">
														<label class="custom-control-label" for="customSwitch2"></label>
													</div>
												</div>
											</div><!--notbar end-->
											<div class="notbar">
												<h4>Chat Message Sound</h4>
												<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus pretium nulla quis erat dapibus, varius hendrerit neque suscipit. Integer in ex euismod, posuere lectus id</p>
												<div class="toggle-btn">
													<div class="custom-control custom-switch">
														<input type="checkbox" class="custom-control-input" id="customSwitch3">
														<label class="custom-control-label" for="customSwitch3"></label>
													</div>
												</div>
											</div><!--notbar end-->
											<div class="save-stngs">
												<ul>
													<li><button type="submit">Save Setting</button></li>
													<li><button type="submit">Restore Setting</button></li>
												</ul>
											</div><!--save-stngs end-->
										</form>
									</div><!--acc-setting end-->
								</div>
							  	<div class="tab-pane fade" id="nav-status" role="tabpanel" aria-labelledby="nav-status-tab">
							  		<div class="acc-setting">
							  			<h3>Profile Status</h3>
							  			<div class="profile-bx-details">
							  				<div class="row">
							  					<div class="col-lg-3 col-md-6 col-sm-12">
							  						<div class="profile-bx-info">
							  							<div class="pro-bx">
							  								<img src="images/pro-icon1.png" alt="">
							  								<div class="bx-info">
							  									<h3>$5,145</h3>
							  									<h5>Total Income</h5>
							  								</div><!--bx-info end-->
							  							</div><!--pro-bx end-->
							  							<p>Lorem ipsum dolor sit amet, consectetur adipiscing.</p>
							  						</div><!--profile-bx-info end-->
							  					</div>
							  					<div class="col-lg-3 col-md-6 col-sm-12">
							  						<div class="profile-bx-info">
							  							<div class="pro-bx">
							  								<img src="images/pro-icon2.png" alt="">
							  								<div class="bx-info">
							  									<h3>$4,745</h3>
							  									<h5>Widthraw</h5>
							  								</div><!--bx-info end-->
							  							</div><!--pro-bx end-->
							  							<p>Lorem ipsum dolor sit amet, consectetur adipiscing.</p>
							  						</div><!--profile-bx-info end-->
							  					</div>
							  					<div class="col-lg-3 col-md-6 col-sm-12">
							  						<div class="profile-bx-info">
							  							<div class="pro-bx">
							  								<img src="images/pro-icon3.png" alt="">
							  								<div class="bx-info">
							  									<h3>$1,145</h3>
							  									<h5>Sent</h5>
							  								</div><!--bx-info end-->
							  							</div><!--pro-bx end-->
							  							<p>Lorem ipsum dolor sit amet, consectetur adipiscing.</p>
							  						</div><!--profile-bx-info end-->
							  					</div>
							  					<div class="col-lg-3 col-md-6 col-sm-12">
							  						<div class="profile-bx-info">
							  							<div class="pro-bx">
							  								<img src="images/pro-icon4.png" alt="">
							  								<div class="bx-info">
							  									<h3>130</h3>
							  									<h5>Total Projects</h5>
							  								</div><!--bx-info end-->
							  							</div><!--pro-bx end-->
							  							<p>Lorem ipsum dolor sit amet, consectetur adipiscing.</p>
							  						</div><!--profile-bx-info end-->
							  					</div>
							  				</div>
							  			</div><!--profile-bx-details end-->
							  			<div class="pro-work-status">
							  				<!-- <h4>Work Status  -  Last Months Working Status</h4> -->
							  			</div><!--pro-work-status end-->
							  		</div><!--acc-setting end-->
							  	</div>
							  	<div class="tab-pane fade" id="nav-password" role="tabpanel" aria-labelledby="nav-password-tab">
							  		<div class="acc-setting">
										<h3>Account Setting</h3>
										<span id="p_error" style="color: red; padding: 15px; display: inline-block;"></span>
										<form name="" id="" method="post">
											<div class="cp-field">
												<h5>Old Password</h5>
												<div class="cpp-fiel">
													<input type="text" name="oldpassword" id="oldpassword" placeholder="Old Password" required>
													<i class="fa fa-lock"></i>
												</div>
											</div>
											<div class="cp-field">
												<h5>New Password</h5>
												<div class="cpp-fiel">
													<input type="password" name="newpassword" id="newpassword" placeholder="New Password" required>
													<i class="fa fa-lock"></i>
												</div>
											</div>
											<div class="cp-field">
												<h5>Repeat Password</h5>
												<div class="cpp-fiel">
													<input type="text" name="renewpassword" id="renewpassword" placeholder="Repeat Password" required>
													<i class="fa fa-lock"></i>
												</div>
											</div>
											<div class="cp-field">
												<h5><a href="forget_password.php" title="">Forgot Password?</a></h5>
											</div>
											<div class="save-stngs pd2">
												<ul>
													<li><button type="button" id="changepassword">Save Setting</button></li>
													<li><button type="submit">Restore Setting</button></li>
												</ul>
											</div><!--save-stngs end-->
										</form>
									</div><!--acc-setting end-->
							  	</div>
							  	<div class="tab-pane fade" id="nav-notification" role="tabpanel" aria-labelledby="nav-notification-tab">
							  		<div class="acc-setting">
							  			<h3>Notifications</h3>
							  			<div class="notifications-list">
							  				<div class="notfication-details">
								  				<div class="noty-user-img">
								  					<img src="images/resources/ny-img1.png" alt="">
								  				</div>
								  				<div class="notification-info">
								  					<h3><a href="#" title="">Jassica William</a> Comment on your project.</h3>
								  					<span>2 min ago</span>
								  				</div><!--notification-info -->
							  				</div><!--notfication-details end-->
							  				<div class="notfication-details">
								  				<div class="noty-user-img">
								  					<img src="images/resources/ny-img2.png" alt="">
								  				</div>
								  				<div class="notification-info">
								  					<h3><a href="#" title="">Poonam Verma</a> Bid on your Latest project.</h3>
								  					<span>2 min ago</span>
								  				</div><!--notification-info -->
							  				</div><!--notfication-details end-->
							  				<div class="notfication-details">
								  				<div class="noty-user-img">
								  					<img src="images/resources/ny-img3.png" alt="">
								  				</div>
								  				<div class="notification-info">
								  					<h3><a href="#" title="">Tonney Dhman</a> Comment on your project.</h3>
								  					<span>2 min ago</span>
								  				</div><!--notification-info -->
							  				</div><!--notfication-details end-->
							  				<div class="notfication-details">
								  				<div class="noty-user-img">
								  					<img src="images/resources/ny-img1.png" alt="">
								  				</div>
								  				<div class="notification-info">
								  					<h3><a href="#" title="">Jassica William</a> Comment on your project.</h3>
								  					<span>2 min ago</span>
								  				</div><!--notification-info -->
							  				</div><!--notfication-details end-->
							  				<div class="notfication-details">
								  				<div class="noty-user-img">
								  					<img src="images/resources/ny-img1.png" alt="">
								  				</div>
								  				<div class="notification-info">
								  					<h3><a href="#" title="">Jassica William</a> Comment on your project.</h3>
								  					<span>2 min ago</span>
								  				</div><!--notification-info -->
							  				</div><!--notfication-details end-->
							  				<div class="notfication-details">
								  				<div class="noty-user-img">
								  					<img src="images/resources/ny-img2.png" alt="">
								  				</div>
								  				<div class="notification-info">
								  					<h3><a href="#" title="">Poonam Verma </a> Bid on your Latest project.</h3>
								  					<span>2 min ago</span>
								  				</div><!--notification-info -->
							  				</div><!--notfication-details end-->
							  				<div class="notfication-details">
								  				<div class="noty-user-img">
								  					<img src="images/resources/ny-img3.png" alt="">
								  				</div>
								  				<div class="notification-info">
								  					<h3><a href="#" title="">Tonney Dhman</a> Comment on your project</h3>
								  					<span>2 min ago</span>
								  				</div><!--notification-info -->
							  				</div><!--notfication-details end-->
							  				<div class="notfication-details">
								  				<div class="noty-user-img">
								  					<img src="images/resources/ny-img1.png" alt="">
								  				</div>
								  				<div class="notification-info">
								  					<h3><a href="#" title="">Jassica William</a> Comment on your project.</h3>
								  					<span>2 min ago</span>
								  				</div><!--notification-info -->
							  				</div><!--notfication-details end-->
							  			</div><!--notifications-list end-->
							  		</div><!--acc-setting end-->
							  	</div>
							  	<div class="tab-pane fade" id="privcy" role="tabpanel" aria-labelledby="nav-privcy-tab">
							  		<div class="acc-setting">
							  			<h3>Requests</h3>
							  			<div class="requests-list">
							  				<div class="request-details">
							  					<div class="noty-user-img">
							  						<img src="images/resources/r-img1.png" alt="">
							  					</div>
							  					<div class="request-info">
							  						<h3>Jessica William</h3>
							  						<span>Graphic Designer</span>
							  					</div>
							  					<div class="accept-feat">
							  						<ul>
							  							<li><button type="submit" class="accept-req">Accept</button></li>
							  							<li><button type="submit" class="close-req"><i class="la la-close"></i></button></li>
							  						</ul>
							  					</div><!--accept-feat end-->
							  				</div><!--request-detailse end-->
							  				<div class="request-details">
							  					<div class="noty-user-img">
							  						<img src="images/resources/r-img2.png" alt="">
							  					</div>
							  					<div class="request-info">
							  						<h3>John Doe</h3>
							  						<span>PHP Developer</span>
							  					</div>
							  					<div class="accept-feat">
							  						<ul>
							  							<li><button type="submit" class="accept-req">Accept</button></li>
							  							<li><button type="submit" class="close-req"><i class="la la-close"></i></button></li>
							  						</ul>
							  					</div><!--accept-feat end-->
							  				</div><!--request-detailse end-->
							  				<div class="request-details">
							  					<div class="noty-user-img">
							  						<img src="images/resources/r-img3.png" alt="">
							  					</div>
							  					<div class="request-info">
							  						<h3>Poonam</h3>
							  						<span>Wordpress Developer</span>
							  					</div>
							  					<div class="accept-feat">
							  						<ul>
							  							<li><button type="submit" class="accept-req">Accept</button></li>
							  							<li><button type="submit" class="close-req"><i class="la la-close"></i></button></li>
							  						</ul>
							  					</div><!--accept-feat end-->
							  				</div><!--request-detailse end-->
							  				<div class="request-details">
							  					<div class="noty-user-img">
							  						<img src="images/resources/r-img4.png" alt="">
							  					</div>
							  					<div class="request-info">
							  						<h3>Bill Gates</h3>
							  						<span>C & C++ Developer</span>
							  					</div>
							  					<div class="accept-feat">
							  						<ul>
							  							<li><button type="submit" class="accept-req">Accept</button></li>
							  							<li><button type="submit" class="close-req"><i class="la la-close"></i></button></li>
							  						</ul>
							  					</div><!--accept-feat end-->
							  				</div><!--request-detailse end-->
							  				<div class="request-details">
							  					<div class="noty-user-img">
							  						<img src="images/resources/r-img5.png" alt="">
							  					</div>
							  					<div class="request-info">
							  						<h3>Jessica William</h3>
							  						<span>Graphic Designer</span>
							  					</div>
							  					<div class="accept-feat">
							  						<ul>
							  							<li><button type="submit" class="accept-req">Accept</button></li>
							  							<li><button type="submit" class="close-req"><i class="la la-close"></i></button></li>
							  						</ul>
							  					</div><!--accept-feat end-->
							  				</div><!--request-detailse end-->
							  				<div class="request-details">
							  					<div class="noty-user-img">
							  						<img src="images/resources/r-img6.png" alt="">
							  					</div>
							  					<div class="request-info">
							  						<h3>John Doe</h3>
							  						<span>PHP Developer</span>
							  					</div>
							  					<div class="accept-feat">
							  						<ul>
							  							<li><button type="submit" class="accept-req">Accept</button></li>
							  							<li><button type="submit" class="close-req"><i class="la la-close"></i></button></li>
							  						</ul>
							  					</div><!--accept-feat end-->
							  				</div><!--request-detailse end-->
							  			</div><!--requests-list end-->
							  		</div><!--acc-setting end-->
							  	</div>
							  	<div class="tab-pane fade" id="security-login" role="tabpanel" aria-labelledby="security">
							  		<div class="privacy security">
			                     <div class="row">
			                     	<div class="col-12">
			                     		<h3>Security and Login</h3>
			                     		<hr>
			                     		<h3>Two - Step Verification</h3>
			                     		<p>Help protect your account by enabling extra layers of security.</p>
			                     		<hr>
			                     		<h3>Security question</h3><i class="la la-edit"></i>
			                     		<div class="custom-control custom-checkbox">
											<input type="checkbox" class="custom-control-input" id="customCheck1">
											<label class="custom-control-label" for="customCheck1">Conform your identity with a question only you know the answer to</label>
										</div>
			                     		<hr>
			                     		<h3>Security question</h3>
			                     		<p>Before can you set a new security question,</p>
			                     		<hr>
			                     		<h3>Current Question</h3>
			                     		<p>Q: Your favorite actor?</p>
			                     		<br>
			                     		<h3>New Question</h3>
			                     		<form>
                                        <div class="form-group">
                                          <select class="form-control" id="exampleFormControlSelect1" style="-webkit-appearance: menulist-button;">
                                            <option>Please Select New Question</option>
                                            <option>Select Second Queston</option>
                                          </select>
                                        </div>
                                      </form>                                    
			                     		<h3>Answer</h3>
			                     		<form>
 
                                       <div class="form-group">
                                         <input type="text" class="form-control" id="exampleInputPassword1" placeholder=" Answer here">
                                       </div>
                                     </form>                                    
										<div class="checkbox">
											<div class="form-check">
												<div class="custom-control custom-radio">
													<input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
													<label class="custom-control-label" for="customRadio1">I understand my account will be locked if I am unable to answer this question</label>
												</div>                                                                      
											</div>
											<div class="form-check">
												<div class="custom-control custom-radio">
													<input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
													<label class="custom-control-label" for="customRadio2">Remember this device</label>
												</div>                                                   												  												
											</div>
										</div>
									<hr>
			                     	</div>
			                     </div>
			                     <div class="btns">
			                     	<a href="#">Save</a>
			                     	<a href="#">Cancel</a>
			                     </div>
								</div> 
							  	</div>
							  	<div class="tab-pane fade" id="blockking" role="tabpanel" aria-labelledby="nav-blockking-tab">
							  		<div class="helpforum">
			                     <div class="row">
			                     	<div class="col-12 security">
			                     		<h3>Blocking</h3>
			                     		<hr>
			                     	</div>
			                     	<div class="row">
			                     		<div class="col-12">
			                     	<h4>Blocking</h4>
			                     	<p>See your list,and make changes if you'd like</p>
			                     	<div class="bloktext">
			                     		<p>You are not bloking anyone</p>
			                     		<p>Need to blok or report someone? Go to the profile of the person you want to blok and select "Blok or Report" from the drowp-down menu at the top of the profile summery</p>
			                     		<p>Note: After you have blocked the person, Any previous profile views of yours and of the other person will disappear from each of your "Who's viewed your profile" sections. </p>
			                     	</div>
			                     </div>
			                     </div>
			                     </div>
								</div> 
							  	</div>	
							  	<div class="tab-pane fade" id="privciy" role="tabpanel" aria-labelledby="nav-privcy-tab">
							  		<div class="acc-setting">
							  			<h3>Requests</h3>
							  			<div class="requests-list">
							  				<div class="request-details">
							  					<div class="noty-user-img">
							  						<img src="images/resources/r-img1.png" alt="">
							  					</div>
							  					<div class="request-info">
							  						<h3>Jessica William</h3>
							  						<span>Graphic Designer</span>
							  					</div>
							  					<div class="accept-feat">
							  						<ul>
							  							<li><button type="submit" class="accept-req">Accept</button></li>
							  							<li><button type="submit" class="close-req"><i class="la la-close"></i></button></li>
							  						</ul>
							  					</div><!--accept-feat end-->
							  				</div><!--request-detailse end-->
							  				<div class="request-details">
							  					<div class="noty-user-img">
							  						<img src="images/resources/r-img2.png" alt="">
							  					</div>
							  					<div class="request-info">
							  						<h3>John Doe</h3>
							  						<span>PHP Developer</span>
							  					</div>
							  					<div class="accept-feat">
							  						<ul>
							  							<li><button type="submit" class="accept-req">Accept</button></li>
							  							<li><button type="submit" class="close-req"><i class="la la-close"></i></button></li>
							  						</ul>
							  					</div><!--accept-feat end-->
							  				</div><!--request-detailse end-->
							  				<div class="request-details">
							  					<div class="noty-user-img">
							  						<img src="images/resources/r-img3.png" alt="">
							  					</div>
							  					<div class="request-info">
							  						<h3>Poonam</h3>
							  						<span>Wordpress Developer</span>
							  					</div>
							  					<div class="accept-feat">
							  						<ul>
							  							<li><button type="submit" class="accept-req">Accept</button></li>
							  							<li><button type="submit" class="close-req"><i class="la la-close"></i></button></li>
							  						</ul>
							  					</div><!--accept-feat end-->
							  				</div><!--request-detailse end-->
							  				<div class="request-details">
							  					<div class="noty-user-img">
							  						<img src="images/resources/r-img4.png" alt="">
							  					</div>
							  					<div class="request-info">
							  						<h3>Bill Gates</h3>
							  						<span>C & C++ Developer</span>
							  					</div>
							  					<div class="accept-feat">
							  						<ul>
							  							<li><button type="submit" class="accept-req">Accept</button></li>
							  							<li><button type="submit" class="close-req"><i class="la la-close"></i></button></li>
							  						</ul>
							  					</div><!--accept-feat end-->
							  				</div><!--request-detailse end-->
							  				<div class="request-details">
							  					<div class="noty-user-img">
							  						<img src="images/resources/r-img5.png" alt="">
							  					</div>
							  					<div class="request-info">
							  						<h3>Jessica William</h3>
							  						<span>Graphic Designer</span>
							  					</div>
							  					<div class="accept-feat">
							  						<ul>
							  							<li><button type="submit" class="accept-req">Accept</button></li>
							  							<li><button type="submit" class="close-req"><i class="la la-close"></i></button></li>
							  						</ul>
							  					</div><!--accept-feat end-->
							  				</div><!--request-detailse end-->
							  				<div class="request-details">
							  					<div class="noty-user-img">
							  						<img src="images/resources/r-img6.png" alt="">
							  					</div>
							  					<div class="request-info">
							  						<h3>John Doe</h3>
							  						<span>PHP Developer</span>
							  					</div>
							  					<div class="accept-feat">
							  						<ul>
							  							<li><button type="submit" class="accept-req">Accept</button></li>
							  							<li><button type="submit" class="close-req"><i class="la la-close"></i></button></li>
							  						</ul>
							  					</div><!--accept-feat end-->
							  				</div><!--request-detailse end-->
							  			</div><!--requests-list end-->
							  		</div><!--acc-setting end-->
							  	</div>
							  	<div class="tab-pane fade" id="privacy" role="tabpanel" aria-labelledby="nav-privacy-tab">
							  		<div class="privac">
									<div class="row">
										<div class="col-12">
			                     		<h3>Privacy</h3>
			                     	</div>
			                     	</div>
			                     	<hr>
			                     	<div class="row">
			                     		<div class="col-12">
			                     	<div class="dropdown privacydropd">
                                                   <a href="#" class="dropdown-toggle" data-toggle="dropdown">Who can see your email address</a>
                                                   <div class="dropdown-menu">
                                                       		<p>Choose who can see your email address on your profile</p>
                                                       		 <div class="row">
                                                       	<div class="col-md-9 col-sm-12">
                                                       		<form class="radio-form">
																<div class="custom-control custom-checkbox">
																	<input type="checkbox" class="custom-control-input" id="customCheck1">
																	<label class="custom-control-label" for="customCheck1">Everyone</label>
																</div>
																<div class="custom-control custom-checkbox">
																	<input type="checkbox" class="custom-control-input" id="customCheck2">
																	<label class="custom-control-label" for="customCheck2">Friends</label>
																</div>
																<div class="custom-control custom-checkbox">
																	<input type="checkbox" class="custom-control-input" id="customCheck3">
																	<label class="custom-control-label" for="customCheck3">Only Me</label>
																</div>
                                                            </form>
                                                       	</div>
                                                       	<div class="col-md-3 col-sm-12">
                                                       		<p style="float: right;">Everyone</p>
                                                       	</div>
                                                       </div>
                                                   </div>
                                               </div>
			                                </div>
			                                </div>
			                                <hr>
			                                <div class="row">
			                     		<div class="col-12">
			                     	<div class="dropdown privacydropd">
                                                   <a href="#" class="dropdown-toggle" data-toggle="dropdown">Who can see your Friends</a>
                                                   <div class="dropdown-menu">
                                                       		<p>Choose who can see your list of connections</p>
                                                       		 <div class="row">
                                                       	<div class="col-md-9 col-sm-12">
                                                       		<form class="radio-form">
																<div class="custom-control custom-checkbox">
																	<input type="checkbox" class="custom-control-input" id="customCheck4">
																	<label class="custom-control-label" for="customCheck4">Everyone</label>
																</div>
																<div class="custom-control custom-checkbox">
																	<input type="checkbox" class="custom-control-input" id="customCheck5">
																	<label class="custom-control-label" for="customCheck5">Friends</label>
																</div>
																<div class="custom-control custom-checkbox">
																	<input type="checkbox" class="custom-control-input" id="customCheck6">
																	<label class="custom-control-label" for="customCheck6">Only Me</label>
																</div>
                                                            </form>
                                                       	</div>
                                                       	<div class="col-md-3 col-sm-12">
                                                       		<p style="float: right;">Everyone</p>
                                                       	</div>
                                                       </div>
                                                   </div>
                                               </div>
			                                </div>
			                                </div>
			                                <hr>
			                                <div class="row">
			                     		<div class="col-12">
			                     	<div class="dropdown privacydropd">
                                                   <a href="#" class="dropdown-toggle" data-toggle="dropdown">Manage who can discover your profile from your email address</a>
                                                   <div class="dropdown-menu">
                                                       		<p>Choose who can discover your profile if they are not connected to you but have your email address</p>
                                                       		 <div class="row">
                                                       	<div class="col-md-9 col-sm-12">
                                                       		<form class="radio-form">
																<div class="custom-control custom-checkbox">
																	<input type="checkbox" class="custom-control-input" id="customCheck7">
																	<label class="custom-control-label" for="customCheck7">Everyone</label>
																</div>
																<div class="custom-control custom-checkbox">
																	<input type="checkbox" class="custom-control-input" id="customCheck8">
																	<label class="custom-control-label" for="customCheck8">Friends</label>
																</div>
																<div class="custom-control custom-checkbox">
																	<input type="checkbox" class="custom-control-input" id="customCheck9">
																	<label class="custom-control-label" for="customCheck9">Only Me</label>
																</div>
                                                            </form>
                                                       	</div>
                                                       	<div class="col-md-3 col-sm-12">
                                                       		<p style="float: right;">Everyone</p>
                                                       	</div>
                                                       </div>
                                                   </div>
                                               </div>
			                                </div>
			                                </div>
			                                <hr>
			                                <div class="row">
			                     		<div class="col-12">
			                     	<div class="dropdown privacydropd">
                                                   <a href="#" class="dropdown-toggle" data-toggle="dropdown">Search history</a>
                                                   <div class="dropdown-menu">
                                                       		<p>Clear all previous searches performed on LinkedIn</p>
                                                       		 <div class="row">
                                                       	<div class="col-12">
                                                       		<form class="radio-form">
																<div class="custom-control custom-checkbox">
																	<input type="checkbox" class="custom-control-input" id="customCheck10">
																	<label class="custom-control-label" for="customCheck10">Clear All History</label>
																</div>															
                                                            </form>
                                                             <div class="privabtns">
                                                             <a href="#">Clear All History</a>
                                                         </div>
                                                       	</div>
                                                       </div>
                                                   </div>
                                               </div>
			                                </div>
			                                </div>
			                                <hr>
			                                <div class="row">
			                     		<div class="col-12">
			                     	<div class="dropdown privacydropd">
                                                   <a href="#" class="dropdown-toggle" data-toggle="dropdown">Sharing your profile when you click apply</a>
                                                   <div class="dropdown-menu">
                                                       		<p>Chose if you want to share your full profile with the job poster when you're taken off linkedin after clicking apply </p>
                                                       		 <div class="row">
                                                       	<div class="col-md-9 col-sm-12">
                                                       		<form class="radio-form">
																<div class="custom-control custom-radio">
																	<input type="radio" id="customRadio5" name="customRadio" class="custom-control-input">
																	<label class="custom-control-label" for="customRadio5">Yes</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="customRadio6" name="customRadio" class="custom-control-input">
																	<label class="custom-control-label" for="customRadio6">Yes</label>
																</div>
                                                            </form>
                                                       	</div>
                                                       	<div class="col-md-3 col-sm-12">
                                                       		<p style="float: right;">Yes</p>
                                                       	</div>
                                                       </div>
                                                   </div>
                                               </div>
			                                </div>
			                                </div>
			                                <hr>
			                                <div class="row">
			                                	<div class="col-12">
			                                		<div class="privabtns">
			                                			<a href="#">Save</a>
			                                			<a href="#">Cancel</a>
			                                		</div>
			                                	</div>
			                                </div>
			                                </div>
							  	</div>
							  	<div class="tab-pane fade" id="nav-deactivate" role="tabpanel" aria-labelledby="nav-deactivate-tab">
							  		<div class="acc-setting">
										<h3>Deactivate Account</h3>
										<form>
											<div class="cp-field">
												<h5>Email</h5>
												<div class="cpp-fiel">
													<input type="text" name="email" placeholder="Email">
													<i class="fa fa-envelope"></i>
												</div>
											</div>
											<div class="cp-field">
												<h5>Password</h5>
												<div class="cpp-fiel">
													<input type="password" name="password" placeholder="Password">
													<i class="fa fa-lock"></i>
												</div>
											</div>
											<div class="cp-field">
												<h5>Please Explain Further</h5>
												<textarea></textarea>
											</div>
											<div class="cp-field">
												<div class="fgt-sec">
													<input type="checkbox" name="cc" id="c4">
													<label for="c4">
														<span></span>
													</label>
													<small>Email option out</small>
												</div>
												<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus pretium nulla quis erat dapibus, varius hendrerit neque suscipit. Integer in ex euismod, posuere lectus id,</p>
											</div>
											<div class="save-stngs pd3">
												<ul>
													<li><button type="submit">Save Setting</button></li>
													<li><button type="submit">Restore Setting</button></li>
												</ul>
											</div><!--save-stngs end-->
										</form>
									</div><!--acc-setting end-->
							  	</div>
							</div>
						</div>
					</div>
				</div><!--account-tabs-setting end-->
			</div>
		</section>
		
		



<?php include('footer.php') ?>