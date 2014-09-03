 @extends('layouts.pro')


@section('getPro')
    <Div class="heading">
    </Div>
    <div>
    	@if(isset($message))
			<p class="notify">
				{{$message}}
			</p>
		@endif

		<h2 class="center_align">Membership</h2>
		@if(Auth::user()->role=='Company')
		<div class="section-title row text-center">
			<div class="divider-vertical"></div>
			<h2>For Companies</h2>
			<h4 class="sub-title">Benefits</h4>
			<div class="space"></div>
			<h2>Highlighted Job Posting</h2>
			<p class="small-pwide">
			I'm a paragraph. Click here to add your own text and edit me. It’s easy. Just click “Edit Text” or double click me to add your own content and make changes to the font. I’m a great place for you to tell a story and let your users know a little more about you.</p>
			<h2>Priority Support</h2>
			<p class="small-pwide">
			I'm a paragraph. Click here to add your own text and edit me. It’s easy. Just click “Edit Text” or double click me to add your own content and make changes to the font. I’m a great place for you to tell a story and let your users know a little more about you.</p>
			<h2>Become Pro</h2>
			<p class="small-pwide">
				<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
				<input type="hidden" name="cmd" value="_s-xclick">
				<input type="hidden" name="hosted_button_id" value="GBUQCKDJTQTVW">
				<input type="hidden" name="on0" value="Premium Member Payment Options">Premium Member Payment Options<br><select name="os0"><br>
				<option value="Monthly">Monthly : $20.00 USD - monthly</option>
				<option value="Yearly">Yearly : $200.00 USD - monthly</option>
				</select> <br>
				<input type="hidden" name="currency_code" value="USD">
				<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_subscribeCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
				<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
				</form>
			</p>

			<h2>Don't Like The Service?</h2>
			<p>
				<A HREF="https://www.paypal.com/cgi-bin/webscr?cmd=_subscr-find&alias=RVUAR4BPK6S9L">
				<IMG SRC="https://www.paypalobjects.com/en_US/i/btn/btn_unsubscribe_LG.gif" BORDER="0">
				</A>
			</p>
			<div class="space"></div>
			<!-- <div class="divider"></div> -->
		</div>


		
		@elseif(Auth::user()->role=='User')


		<div class="section-title row text-center">
			<div class="divider-vertical"></div>
			<h2>For Users</h2>
			<h4 class="sub-title">Benefits</h4>
			<div class="space"></div>
			<h2>Access To Forum</h2>
			<p class="small-pwide">
			I'm a paragraph. Click here to add your own text and edit me. It’s easy. Just click “Edit Text” or double click me to add your own content and make changes to the font. I’m a great place for you to tell a story and let your users know a little more about you.</p>
			<h2>Access To Job List</h2>
			<p class="small-pwide">
			I'm a paragraph. Click here to add your own text and edit me. It’s easy. Just click “Edit Text” or double click me to add your own content and make changes to the font. I’m a great place for you to tell a story and let your users know a little more about you.</p>
			<!-- <div class="divider"></div> -->

			<h2>Become Pro</h2>
			<p class="small-pwide">
				<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
				<input type="hidden" name="cmd" value="_s-xclick">
				<input type="hidden" name="hosted_button_id" value="856U5AHZ3FPCY">
				<input type="hidden" name="on0" value="Subscription Options">Subscription Options<br><select name="os0">
				<option value="Monthly">Monthly : $5.00 USD - monthly</option>
				<option value="Yearly">Yearly : $50.00 USD - monthly</option>
				</select><br>
				<input type="hidden" name="currency_code" value="USD">
				<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_subscribeCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
				<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
				</form>
			</p>
			<h2>Don't Like The Service?</h2>
			<p>
				<A HREF="https://www.paypal.com/cgi-bin/webscr?cmd=_subscr-find&alias=RVUAR4BPK6S9L">
				<IMG SRC="https://www.paypalobjects.com/en_US/i/btn/btn_unsubscribe_LG.gif" BORDER="0">
				</A>
			</p>
			
		
		</div>
		@endif
    </div>
@stop