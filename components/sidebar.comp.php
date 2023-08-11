<!--                
				--><div id="sidebar">
                	<img src="/images/frozen_king_salmon_fillets.jpg" alt="Frozen King Salmon fillets" title="Frozen King Salmon fillets" />
                	<div class="subtitle">
                    	Excellent quality fresh produce including fish, poultry and game; that's what it's about!
                    </div>
                    <div class="soacer">
                    </div>
                    <h1>
                    	Like Us!
                    </h1>
                	<a href="http://www.facebook.com/hobbsfishmongers/" title="Like Hobbs Fishmongers On Facebook" target="_blank"><img src="/images/like_us_on_facebook.png" alt="Like us on facebook!" id="facebook_link" /></a>
                    <div class="spacer">
                    </div>
                    <p class="subtitle">
                    	Members of the Harborough Food Quarter
                    </p>
                    <a href="https://www.facebook.com/MarketHarboroughFoodQuarter"><img id="food_quarter" src="/images/like_the_food_quarter.png" title="Like The Food Quarter" alt="Like The Food Quarter" /></a>
                    <div class="spacer">
                    </div>
                    <p class="sidebartitle">
                    	Contact Us
                    </p>
                    <form id="contact_form" action="" method="post">
                    	<input id="full_name" name="full_name" class="contact_input input_focus" type="text" value="Your name" />
                        <input id="email_address" name="email_address" class="contact_input input_focus" type="text" value="Your e-mail address" />
                        <textarea id="message" name="message" class="contact_textarea input_focus">Your message</textarea>
                        <input id="contact_send" name="contact_submit" type="submit" value="Send" />
                    </form>
                    <?php
						if(isset($_POST['contact_submit'])) {
							if(!empty($_POST['full_name']) && !empty($_POST['email_address']) && !empty($_POST['message'])) {
								if(($_POST['full_name'] != 'Your name') || ($_POST['email_address'] != 'Your e-mail address') || ($_POST['message'] != 'Your message and additional details')) {
									if(!@mail('jenny@hobbsfishmongers.co.uk', 'Message From Website', htmlspecialchars($_POST['full_name'], ENT_QUOTES).' - '.$_POST['message'], 'FROM: '.htmlspecialchars($_POST['email_address'], ENT_QUOTES))) {
										$contact_return['type'] = 'error';
										$contact_return['message'] = 'Sorry, your message could not be sent. Please try again';
									} else {
										$contact_return['type'] = 'status';
										$contact_return['message'] = 'Your message was sent successfully, we will get back to you shortly';
									}
								} else {
									$contact_return['type'] = 'error';
									$contact_return['message'] = 'Please complete the form to send us a message';
								}
							} else {
								$contact_return['type'] = 'error';
								$contact_return['message'] = 'Please complete the form to send us a message';
							}
							if(isset($contact_return)) {
								if($contact_return['type'] == 'error') {
									$contact_return_colour = 'CC3300';
								} else {
									$contact_return_colour = '008000';
								}
								if(isset($contact_return['message'])) {
									echo '<p class="contact_return" style="color: #'.$contact_return_colour.';">'.$contact_return['message'].'</p>';
								}
							}
						}
					?>
                    <div class="spacer">
                    </div>
                    <p class="main" style="font-size: 24px; text-align: center; font-family: 'hfmiaso', 'Times New Roman', Times, serif;">
                    	Find us on <a target="_blank" style="color: #666666;" href="http://maps.google.co.uk/maps?f=q&source=s_q&hl=en&geocode=&q=hobbs+fishmongers+market+harborough&aq=&sll=52.8382,-2.327815&sspn=11.187645,33.815918&vpsrc=6&ie=UTF8&hq=hobbs+fishmongers&hnear=Market+Harborough,+Leicestershire,+United+Kingdom&ll=52.478736,-0.920926&spn=0.002751,0.008256&t=m&z=18&cid=2270202619236118051&iwloc=A">Google Earth</a>
                    </p>
                </div>