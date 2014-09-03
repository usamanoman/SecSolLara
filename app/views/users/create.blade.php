@extends('layouts.form')


@section('content')
    <div>
		@if(isset($message))
			<p class="notfiy">
				{{$message}}
			</p>
		@endif

		<h2 class="center_align">SIGN UP</h2>
		
    	<ul class="notfiy">
    	@foreach($errors->all() as $error)
            <li >{{ $error }}</li>
        @endforeach
    	</ul>
		{{Form::open(array('action' => 'UsersController@store', 'method' => 'post','class'=>'well'))}}
		  

		  <div class="form-group">
		    <label for="firstname">First Name</label>
		   {{ Form::text('firstname', null, array('class'=>'form-control', 'placeholder'=>'First Name')) }}
		  </div>
		  <div class="form-group">
		    <label for="lastname">Last Name</label>
		   {{ Form::text('lastname', null, array('class'=>'form-control', 'placeholder'=>'Last Name')) }}
		  </div>
		  <div class="form-group">
		    <label for="email">Email address</label>
		   {{ Form::email('email', null, array('class'=>'form-control', 'placeholder'=>'Email Address')) }}
		  </div>
		  <div class="form-group">
		    <label for="password">Password</label>
		    {{ Form::password('password', array('class'=>'form-control', 'placeholder'=>'Password')) }}
		  </div>
		  <div class="form-group">
		    <label for="userrole">I am</label>
		    <select class="form-control" id="userrole" name="role" >
				<option>Company</option>
				<option>Contractor</option>
		    </select>
		  </div>
		
		  <div class="form-group">
		    <label for="userrole">By clicking this check, I agree with the privacy policies.</label>
		    {{Form::checkbox('privacy_policy',null,array('class'=>'form-control'))}}
		    <a class="fancybox" href="#inline1" title="Privacy Policy and Terms of Service">Read Privacy Policy and Terms of Service</a>
		  </div>



		  
		  

		   {{ Form::submit('Register', array('class'=>'btn btn-large btn-primary btn-block'))}}
		{{Form::close()}}


    </div>


    <div id="inline1" style="width:700px;display: none; height:400px; overflow-x: hidden; overflow-y: scroll;">
		<h3><b>Privacy Policy</b></h3>

		<p>This privacy policy discloses the privacy practices for http://www.securitysolutionsworldwide.com/. This privacy policy applies solely to information collected by this web site. It will notify you of the following:</p>

		<p>1. What personally identifiable information is collected from you through the web site, how it is used and with whom it may be shared with.</p>

		<p>2. What choices are available to you regarding the use of your data.</p>

		<p>3. The security procedures in place to protect the misuse of your information.</p>

		<p>4. How you can correct any inaccuracies in the information.</p>

		<p><b>Information Collection, Use, and Sharing</b> <br />
		<br />
		We are the sole owners of the information collected on this site. We only have access to/collect information that you voluntarily give us via email or other direct contact from you. We will not sell or rent this information to anyone.</p>

		<p>We will use your information to respond to you, regarding the reason you contacted us. We will not share your information with any third party outside of our organization, other than as necessary to fulfill your request, e.g. to ship an order.</p>

		<p>Unless you ask us not to, we may contact you via email in the future to tell you about specials, new products or services, or changes to this privacy policy.</p>

		<p><b>Your Access to and Control Over Information</b> <br />
		<br />
		</p>

		<p>You may opt out of any future contacts from us at any time. You can do the following at any time by contacting us via the email address given on our website to:</p>

		<p>• See what data we have about you, if any.</p>

		<p>• Change/correct any data we have about you.</p>

		<p>• Have us delete any data we have about you.</p>

		<p>• Express any concern you have about our use of your data.</p>

		<p><b>Security</b> <br />
		<br />
		</p>

		<p>We take precautions to protect your information. When you submit sensitive information via the http://www.securitysolutionsworldwide.com/, your information is protected both online and offline.</p>

		<p>Wherever we collect sensitive information (such as credit card data), that information is encrypted and transmitted to us in a secure way. You can verify this by looking for a closed lock icon at the bottom of your web browser, or looking for "https" at the beginning of the address of the web page.</p>

		<p>While we use encryption to protect sensitive information transmitted online, we also protect your information offline. </p>

		<p>Only employees who need the information to perform a specific job (for example, billing or customer service) are granted access to personally identifiable information. The computers/servers in which we store personally identifiable information are kept in a secure environment.</p>

		<p><p><b>Registration</b> <br />
		<br />
		In order to use this website, a user must first complete the registration form. During registration a user is required to give certain information (such as name and email address). This information is used to contact you about the products/services on our site in which you have expressed interest. At your option, you may also provide demographic information (such as gender or age) about yourself, but it is not required.</p></p>

		<p><p><b>Orders</b> <br />
		<br />
		We request information from you on our order form. To buy from us, you must provide contact information (like name and shipping address) and financial information (like credit card number, expiration date). This information is used for billing purposes and to fill your orders. If we have trouble processing an order, we'll use this information to contact you.</p></p>

		<p><p><b>Cookies</b> <br />
		<br />
		We use "cookies" on this site. A cookie is a piece of data stored on a site visitor's hard drive to help us improve your access to our site and identify repeat visitors to our site. For instance, when we use a cookie to identify you, you would not have to log in a password more than once, thereby saving time while on our site. Cookies can also enable us to track and target the interests of our users to enhance the experience on our site. Usage of a cookie is in no way linked to any personally identifiable information on our site.</p>

		<p>Some of our business partners may use cookies on our site (for example, advertisers). However, we have no access to or control over these cookies.</p></p>

		<p><p><b>Sharing</b> <br />
		<br />
		We share aggregated demographic information with our partners and advertisers. This is not linked to any personal information that can identify any individual person.</p>

		<p>And/or: <br />
		We use an outside shipping company to ship orders, and a credit card processing company to bill users for goods and services. These companies do not retain, share, store or use personally identifiable information for any secondary purposes beyond filling your order.</p>

		<p>And/or: <br />
		We partner with another party to provide specific services. When the user signs up for these services, we will share names, or other contact information that is necessary for the third party to provide these services. These parties are not allowed to use personally identifiable information except for the purpose of providing these services.</p></p>

		<p><p><b>Links</b> <br />
		<br />
		This web site contains links to other sites. Please be aware that we are not responsible for the content or privacy practices of such other sites. We encourage our users to be aware when they leave our site and to read the privacy statements of any other site that collects personally identifiable information.</p></p>

		<p><p><b>Surveys &amp; Contests</b> <br />
		<br />
		From time-to-time our site requests information via surveys or contests. Participation in these surveys or contests is completely voluntary and you may choose whether or not to participate and therefore disclose this information. Information requested may include contact information (such as name and shipping address), and demographic information (such as zip code, age level). Contact information will be used to notify the winners and award prizes. Survey information will be used for purposes of monitoring or improving the use and satisfaction of this site.</p></p>

		<p><b>Updates</b></p>

		<p>Our Privacy Policy may change from time to time and all updates will be posted on this page.</p>

		<p><b>If you feel that we are not abiding by this privacy policy, you should contact us immediately.</b></p>

		<p><b>Security Solutions Worldwide’s Details</b></p>

		<p>Security Solutions Worldwide’s official website is http://www.securitysolutionsworldwide.com/</p>

		<p>Security Solutions Worldwide’s registered address is 381 Bryant Road, Buckfield, Maine, 04220. </p>

		<p>You can contact Security Solutions Worldwide by email at admin@securitysolutionsworldwide.com. </p>

		<hr>


		<h3><b>Terms of Service</b></h3>

		<p><b>Introduction</b></p>

		<p>These terms and conditions govern your use of this website; by using this website, you accept these terms and conditions in full. If you disagree with these terms and conditions or any part of these terms and conditions, you must not use this website. </p>

		<p></p>

		<p>This website uses cookies.  By using this website and agreeing to these terms and conditions, you consent to Security Solutions Worldwide's use of cookies in accordance with the terms of Security Solutions Worldwide's privacy policy.</p>

		<p><b>License to Use Website</b></p>

		<p>Unless otherwise stated, Security Solutions Worldwide and/or its licensors own the intellectual property rights in the website and material on the website. Subject to the license below, all these intellectual property rights are reserved.</p>

		<p>You may view, download for caching purposes only, and print pages from the website for your own personal use, subject to the restrictions set out below and elsewhere in these terms and conditions. </p>

		<p>You must not:</p>

		<p>· republish material from this website (including republication on another website);</p>

		<p>· sell, rent or sub-license material from the website;</p>

		<p>· show any material from the website in public;</p>

		<p>· reproduce, duplicate, copy or otherwise exploit material on this website for a commercial purpose;</p>

		<p>· edit or otherwise modify any material on the website; or</p>

		<p>· redistribute material from this website (except for content specifically and expressly made available for redistribution).</p>

		<p><b>Acceptable Use</b></p>

		<p>You must not use this website in any way that causes, or may cause, damage to the website or impairment of the availability or accessibility of the website; or in any way which is unlawful, illegal, fraudulent or harmful, or in connection with any unlawful, illegal, fraudulent or harmful purpose or activity.</p>

		<p>You must not use this website to copy, store, host, transmit, send, use, publish or distribute any material which consists of (or is linked to) any spyware, computer virus, Trojan horse, worm, keystroke logger, rootkit or other malicious computer software.</p>

		<p>You must not conduct any systematic or automated data collection activities (including without limitation scraping, data mining, data extraction and data harvesting) on or in relation to this website without Security Solutions Worldwide’s express written consent.</p>

		<p>You must not use this website to transmit or send unsolicited commercial communications.</p>

		<p>You must not use this website for any purposes related to marketing without Security Solutions Worldwide’s express written consent.</p>

		<p>Restricted Access

		Access to certain areas of this website is restricted.  Security Solutions Worldwide reserves the right to restrict access to areas of this website, or indeed this entire website, at Security Solutions Worldwide’s discretion.

		If Security Solutions Worldwide provides you with a user ID and password to enable you to access restricted areas of this website or other content or services, you must ensure that the user ID and password are kept confidential.  

		Security Solutions Worldwide may disable your user ID and password in Security Solutions Worldwide’s sole discretion without notice or explanation.
		</p>

		<p>User Content

		In these terms and conditions, “your user content” means material (including without limitation text, images, audio material, video material and audio-visual material) that you submit to this website, for whatever purpose.

		You grant to Security Solutions Worldwide a worldwide, irrevocable, non-exclusive, royalty-free license to use, reproduce, adapt, publish, translate and distribute your user content in any existing or future media.  You also grant to Security Solutions Worldwide the right to sub-license these rights, and the right to bring an action for infringement of these rights.

		Your user content must not be illegal or unlawful, must not infringe any third party's legal rights, and must not be capable of giving rise to legal action whether against you or Security Solutions Worldwide or a third party (in each case under any applicable law).  

		You must not submit any user content to the website that is or has ever been the subject of any threatened or actual legal proceedings or other similar complaint.

		Security Solutions Worldwide reserves the right to edit or remove any material submitted to this website, or stored on Security Solutions Worldwide’s servers, or hosted or published upon this website.
		</p>

		<p><b>No Warranties</b></p>

		<p>This website is provided “as is” without any representations or warranties, express or implied. Security Solutions Worldwide makes no representations or warranties in relation to this website or the information and materials provided on this website. </p>

		<p>Without prejudice to the generality of the foregoing paragraph, Security Solutions Worldwide does not warrant that:</p>

		<p>· this website will be constantly available, or available at all; or</p>

		<p>· the information on this website is complete, true, accurate or non-misleading.</p>

		<p>Nothing on this website constitutes, or is meant to constitute, advice of any kind. If you require advice in relation to any legal, financial or medical matter you should consult an appropriate professional.</p>

		<p><b>Limitations of Liability</b></p>

		<p>Security Solutions Worldwide will not be liable to you (whether under the law of contact, the law of torts or otherwise) in relation to the contents of, or use of, or otherwise in connection with, this website:</p>

		<p>· to the extent that the website is provided free-of-charge, for any direct loss;</p>

		<p>· for any indirect, special or consequential loss; or</p>

		<p>· for any business losses, loss of revenue, income, profits or anticipated savings, loss of contracts or business relationships, loss of reputation or goodwill, or loss or corruption of information or data.</p>

		<p>These limitations of liability apply even if Security Solutions Worldwide has been expressly advised of the potential loss.</p>

		<p><b>Exceptions</b></p>

		<p>Nothing in this website disclaimer will exclude or limit any warranty implied by law that it would be unlawful to exclude or limit; and nothing in this website disclaimer will exclude or limit Security Solutions Worldwide’s liability in respect of any:</p>

		<p>· death or personal injury caused by Security Solutions Worldwide’s negligence;</p>

		<p>· fraud or fraudulent misrepresentation on the part of Security Solutions Worldwide; or</p>

		<p>· matter which it would be illegal or unlawful for Security Solutions Worldwide to exclude or limit, or to attempt or purport to exclude or limit, its liability. </p>

		<p><b>Reasonableness</b></p>

		<p>By using this website, you agree that the exclusions and limitations of liability set out in this website disclaimer are reasonable. </p>

		<p>If you do not think they are reasonable, you must not use this website.</p>

		<p><b>Other Parties</b></p>

		<p>You accept that, as a limited liability entity, Security Solutions Worldwide has an interest in limiting the personal liability of its officers and employees. You agree that you will not bring any claim personally against Security Solutions Worldwide’s officers or employees in respect of any losses you suffer in connection with the website.</p>

		<p>Without prejudice to the foregoing paragraph, you agree that the limitations of warranties and liability set out in this website disclaimer will protect Security Solutions Worldwide’s officers, employees, agents, subsidiaries, successors, assigns and sub-contractors as well as Security Solutions Worldwide. </p>

		<p><b>Unenforceable Provisions</b></p>

		<p>If any provision of this website disclaimer is, or is found to be, unenforceable under applicable law, that will not affect the enforceability of the other provisions of this website disclaimer.</p>

		<p><b>Indemnity</b></p>

		<p>You hereby indemnify Security Solutions Worldwide and undertake to keep Security Solutions Worldwide indemnified against any losses, damages, costs, liabilities and expenses (including without limitation legal expenses and any amounts paid by Security Solutions Worldwide to a third party in settlement of a claim or dispute on the advice of Security Solutions Worldwide legal advisers) incurred or suffered by Security Solutions Worldwide arising out of any breach by you of any provision of these terms and conditions[, or arising out of any claim that you have breached any provision of these terms and conditions].</p>

		<p><b>Breaches of these Terms and Conditions</b></p>

		<p>Without prejudice to Security Solutions Worldwide’s other rights under these terms and conditions, if you breach these terms and conditions in any way, Security Solutions Worldwide may take such action as Security Solutions Worldwide deems appropriate to deal with the breach, including suspending your access to the website, prohibiting you from accessing the website, blocking computers using your IP address from accessing the website, contacting your internet service provider to request that they block your access to the website and/or bringing court proceedings against you.</p>

		<p><b>Variation</b></p>

		<p>Security Solutions Worldwide may revise these terms and conditions from time-to-time. Revised terms and conditions will apply to the use of this website from the date of the publication of the revised terms and conditions on this website. Please check this page regularly to ensure you are familiar with the current version.</p>

		<p><b>Assignment</b></p>

		<p>Security Solutions Worldwide may transfer, sub-contract or otherwise deal with Security Solutions Worldwide’s rights and/or obligations under these terms and conditions without notifying you or obtaining your consent.</p>

		<p>You may not transfer, sub-contract or otherwise deal with your rights and/or obligations under these terms and conditions. </p>

		<p><b>Severability</b></p>

		<p>If a provision of these terms and conditions is determined by any court or other competent authority to be unlawful and/or unenforceable, the other provisions will continue in effect. If any unlawful and/or unenforceable provision would be lawful or enforceable if part of it were deleted, that part will be deemed to be deleted, and the rest of the provision will continue in effect. </p>

		<p><b>Law and Jurisdiction</b></p>

		<p>These terms and conditions will be governed by and construed in accordance with the United State Federal Law, and any disputes relating to these terms and conditions will be subject to the exclusive jurisdiction of the courts of the United States.</p>

		<p><b>Security Solutions Worldwide’s Details</b></p>

		<p>Security Solutions Worldwide’s official website is http://www.securitysolutionsworldwide.com/</p>

		<p>Security Solutions Worldwide’s registered address is 381 Bryant Road, Buckfield, Maine, 04220. </p>

		<p>You can contact Security Solutions Worldwide by email at admin@securitysolutionsworldwide.com. </p>

	</div>

		<!-- Add fancyBox -->
	{{HTML::style('css/jquery.fancybox.css')}}
	{{HTML::script('js/jquery.fancybox.js')}}
	{{HTML::script('js/jquery.fancybox.pack.js')}}
	
	
	
	<!-- Optionally add helpers - button, thumbnail and/or media -->
	<!--<link rel="stylesheet" href="/fancybox/source/helpers/jquery.fancybox-buttons.css?v=1.0.5" type="text/css" media="screen" />
	<script type="text/javascript" src="/fancybox/source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>
	<script type="text/javascript" src="/fancybox/source/helpers/jquery.fancybox-media.js?v=1.0.6"></script>

	<link rel="stylesheet" href="/fancybox/source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" type="text/css" media="screen" />
	<script type="text/javascript" src="/fancybox/source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>
-->
    <script type="text/javascript">
		$('.fancybox').fancybox();

	</script>
@stop