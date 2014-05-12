<?php $page_title = "Elements"; include("header.php"); ?>

<div class="page-top">
	<div class="container">	
		<h1 class="page-top-header">Elements</h1>		
		<ol class="breadcrumb">
		  <li><a href="/">Home</a></li>
		  <li class="active">Elements</li>
		</ol>
	</div>	
</div>

<div class="container" id="main">

<div class="row">

	<div class="col-md-3">
		<div id="sidebar" class="affix" role="complementary">
			<ul class="nav">
				<li><a href="#intro">Intro</a></li>
				<li><a href="#buttons">Buttons</a></li>
				<li><a href="#labels">Labels</a></li>
				<li><a href="#badges">Badges</a></li>
				<li><a href="#tabs">Tabs</a></li>
				<li><a href="#accordion">Accordion</a></li>
				<li><a href="#images">Images</a></li>
				<li><a href="#custom-content">Custom Content</a></li>
				<li><a href="#well">Well</a></li>
				<li><a href="#jumbotron">Jumbotron</a></li>
				<li><a href="#pagination">Pagination + Pager</a></li>
				<li><a href="#alerts">Alerts</a></li>
				<li><a href="#progress-bars">Progress Bars</a></li>
				<li><a href="#tooltip">Tooltip + Popovers</a></li>
				<li><a href="#forms">Forms</a></li>
				<li><a href="#affix">Affix</a></li>
				<li><a href="#modal">Modal</a></li>
				<li><a href="#iconbox">Iconbox</a></li>
				<li><a href="#slider">Carousel</a></li>
				<li><a href="#multislider">Multislider</a></li>
				<li><a href="#lightbox">Lightbox</a></li>
			</ul>
		</div><!-- .affix -->
	</div>

	<div class="col-md-9">

		<div class="row">
		
			<h2 id="intro"></h2>
		
			<p class="lead">
				<strong>Olin</strong> comes with the full arsenal of Bootstrap 3 components plus some more fancy jQuery plugins, so your website will WOW your visitors and convert them into long-term customers.
			</p>
			<p class="lead">
			If you are already familiar with Twitter Bootstrap you will hit the ground running. But even if you never heard of Bootstrap before you can make this awesome toolkit your own within minutes. Head over to the <a href="http://getbootstrap.com/getting-started/" target="_blank">Bootstrap - Getting Started</a> guide to learn more about Bootstrap.
			</p>
			
			<hr />
		
			<h2 id="buttons">Buttons</h2>
			<p>
				Buttons are pure CSS3 with gradients and fallbacks. In six styles (+ disabled state), four sizes, groupable and much <a href="http://getbootstrap.com/css/#buttons" target="_blank">more</a>.
			</p>
			<p>
				<button type="button" class="btn btn-default">Default</button>
				<button type="button" class="btn btn-primary">Primary</button>
				<button type="button" class="btn btn-success">Success</button>
				<button type="button" class="btn btn-info">Info</button>
				<button type="button" class="btn btn-warning">Warning</button>
				<button type="button" class="btn btn-danger">Danger</button>
				<button type="button" class="btn btn-danger" disabled="disabled">Disabled button</button>
			</p>
			
			<div class="row margin-top-base">							
				<div class="col-sm-6">					
					<h6>Buttons Sizes</h6>
					<p>
					  <button type="button" class="btn btn-primary btn-lg">Large button</button>
					  <button type="button" class="btn btn-default btn-lg">Large button</button>
					</p>
					<p>
					  <button type="button" class="btn btn-primary">Default button</button>
					  <button type="button" class="btn btn-default">Default button</button>
					</p>
					<p>
					  <button type="button" class="btn btn-primary btn-sm">Small button</button>
					  <button type="button" class="btn btn-default btn-sm">Small button</button>
					</p>
					<p>
					  <button type="button" class="btn btn-primary btn-xs">Extra small button</button>
					  <button type="button" class="btn btn-default btn-xs">Extra small button</button>
					</p>
				</div>						
				<div class="col-md-6">				
					<h6>Button Group</h6>					
					<p>
						<div class="btn-group btn-group-lg">
						  <button type="button" class="btn btn-default">Left</button>
						  <button type="button" class="btn btn-default">Middle</button>
						  <button type="button" class="btn btn-default">Right</button>
						</div>
					</p>
					
					<p>
						<div class="btn-group">
						  <button type="button" class="btn btn-default">Left</button>
						  <button type="button" class="btn btn-default">Middle</button>
						  <button type="button" class="btn btn-default">Right</button>
						</div>
					</p>
					
					<p>
						<div class="btn-group btn-group-sm">
						  <button type="button" class="btn btn-default">Left</button>
						  <button type="button" class="btn btn-default">Middle</button>
						  <button type="button" class="btn btn-default">Right</button>
						</div>
					</p>
					
					<p>
						<div class="btn-group btn-group-xs">
						  <button type="button" class="btn btn-default">Left</button>
						  <button type="button" class="btn btn-default">Middle</button>
						  <button type="button" class="btn btn-default">Right</button>
						</div>
					</p>
					
				</div>						
			</div>
			
		</div>
		
		<hr />

		<h2 id="labels">Labels</h2>
		<p>
			<span class="label label-default">Default</span>
			<span class="label label-primary">Primary</span>
			<span class="label label-success">Success</span>
			<span class="label label-info">Info</span>
			<span class="label label-warning">Warning</span>
			<span class="label label-danger">Danger</span>
		</p>

		<hr />

		<h2 id="badges">Badges</h2>
		
		<p>
			Highlight new or unread items by adding a <code>&lt;span class="badge">&lt;/span></code> to all kinds of elements.
		</p>
		
		<p><span class="badge">12</span></p>
		<p><button type="button" class="btn btn-default">Button with badge <span class="badge">99</span></button></p>
		
		<hr />

		<h2 id="tabs">Tabs</h2>
		<ul class="nav nav-tabs tab-header">
		  <li class="active"><a href="#home" data-toggle="tab"><i class="icon-home"></i> Home</a></li>
		  <li><a href="#profile" data-toggle="tab"><i class="icon-user"></i> Profile</a></li>
		  <li><a href="#messages" data-toggle="tab"><i class="icon-envelope"></i> Messages</a></li>
		  <li><a href="#settings" data-toggle="tab"><i class="icon-gears"></i> Settings</a></li>
		</ul>
		
		<div class="tab-content">
		  <div class="tab-pane active" id="home">
			  <p>
				  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel, voluptates, cum, atque, minima soluta architecto quisquam assumenda saepe ea ad maiores nulla sapiente impedit aspernatur provident nesciunt asperiores. Quis, fugit nisi soluta facilis rerum fugiat pariatur consectetur beatae ipsa. Ex optio cum eligendi rerum adipisci. Aperiam explicabo fugiat vero saepe?
			  </p>
		  </div>
		  <div class="tab-pane" id="profile">
			  <p>
				  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit, autem, tenetur, earum suscipit repellendus est iusto reprehenderit iure rem eveniet totam culpa ipsa libero odio ratione similique quasi laudantium officia. Expedita, provident ex quod vitae eos asperiores facilis modi. Neque, accusamus, asperiores odit distinctio maxime fugiat vitae! Sunt, sint, cum rerum exercitationem itaque officiis dolorum odio amet ratione suscipit nemo doloremque officia provident iure repudiandae nam veniam voluptates temporibus vitae fugit nostrum dicta omnis eaque.
			  </p>
		  </div>
		  <div class="tab-pane" id="messages">
			  <p>
				  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat, laborum, eius, quasi, labore asperiores sint vitae accusamus dicta ad quidem alias officia iusto magnam dolorum neque aut repudiandae officiis error quos possimus deserunt in expedita adipisci perspiciatis incidunt quia eos animi sit debitis distinctio. Sunt et quod unde obcaecati doloribus.
			  </p>
		  </div>
		  <div class="tab-pane" id="settings">
			  <p>
				  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint, id nulla quo consequuntur unde dolores facilis inventore vel natus aut provident deserunt in enim at voluptatum architecto quos dolor corrupti earum error officia repudiandae alias quis! Accusamus, hic maiores eius.
			  </p>
		  </div>
		</div>
		
		<hr />
			
		<h2 id="accordion">Accordion</h2>
		<div class="panel-group" id="accordion">
		  <div class="panel panel-default">
		    <div class="panel-heading">
		      <h4 class="panel-title"><a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">Collapsible Group Item #1</a></h4>
		    </div>
		    <div id="collapseOne" class="panel-collapse collapse in">
		      <div class="panel-body">
		        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
		      </div>
		    </div>
		  </div>
		  <div class="panel panel-default">
		    <div class="panel-heading">
		      <h4 class="panel-title">
		        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
		          Collapsible Group Item #2
		        </a>
		      </h4>
		    </div>
		    <div id="collapseTwo" class="panel-collapse collapse">
		      <div class="panel-body">
		        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo.
		      </div>
		    </div>
		  </div>
		  <div class="panel panel-default">
		    <div class="panel-heading">
		      <h4 class="panel-title">
		        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
		          Collapsible Group Item #3
		        </a>
		      </h4>
		    </div>
		    <div id="collapseThree" class="panel-collapse collapse">
		      <div class="panel-body">
		        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
		      </div>
		    </div>
		  </div>
		</div><!-- ACCORDION -->
				
		<hr />

		<h2 id="images">Images</h2>
		<div class="row">
			<div class="col-md-4">
				<img src="http://placehold.it/120x120&text=rounded" alt="" class="img-rounded">
			</div>
			<div class="col-md-4 text-center">
				<img src="http://placehold.it/120x120&text=circle" alt="" class="img-circle">
			</div>
			<div class="col-md-4 text-right">
				<img src="http://placehold.it/120x120&text=thumbnail" alt="" class="img-thumbnail">
			</div>
		</div>
		
		<hr />
	
		<h2 id="custom-content">Custom Content</h2>
    <div class="thumbnail">
      <img src="http://placehold.it/1200x200&text=Custom+Image" alt="" />
      <div class="caption">
        <h4>Thumbnail label</h4>
        <p>
	        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis, officiis, omnis rerum qui tempora cum suscipit eum quidem dolorum laboriosam nisi repellendus nobis maxime voluptas.
        </p>
        <p><a href="" class="btn btn-default">Button</a></p>
      </div>
    </div>
		
		<hr />
			
		<h2 id="well">Well</h2>
		
		<div class="well">
			<div class="row">
		  	<div class="col-md-9">
		  		<h3>The Perfect Highlighter</h3>
		  		<p>Well with inset box shadow and light gray background.</p>
		  	</div>
		  	<div class="col-md-3">
			  	<button class="btn btn-lg btn-default btn-block">Sign Up</button>
			  	<p class="text-center text-muted"><small>Add a little note..</small></p>
		  	</div>
			</div>
		</div>
			
		<div class="well gradient">
  		<h3>Well with background gradient</h3>
  		<p class="lead">For a background gradient add <code>.gradient</code> to your well. Same with Jumbotron or any other element.</p>
		</div>
		
		<hr />

		<h2 id="jumbotron">Jumbotron</h2>
		<div class="jumbotron text-center gradient">
	    <h1>Big News</h1>
	    <p>Got something big to announce?</p>
	    <p><a class="btn btn-primary btn-lg">Learn more</a></p>
		</div>
		
		<hr />
		
		<div class="row">
		
		<div class="col-md-6">
			<h2 id="pagination">Pagination</h2>
			<ul class="pagination">
			  <li><a href=""><i class="icon-angle-left"></i></a></li>
			  <li><a href="">1</a></li>
			  <li><a href="">2</a></li>
			  <li><a href="">3</a></li>
			  <li><a href="">4</a></li>
			  <li><a href="">5</a></li>
			  <li><a href=""><i class="icon-angle-right"></i></a></li>
			</ul>
		</div>
		
		<div class="col-md-6">
			<h2>Pager</h2>
			<ul class="pager" style="text-align:left">
			  <li><a href=""><i class="icon-angle-left"></i> Previous</a></li>
			  <li><a href="">Next <i class="icon-angle-right"></i></a></li>
			</ul>
		</div>
		
		</div>
		<hr />
		
		<h2 id="alerts">Alerts <small>with close button</small></h2>
		<div class="row">
			<div class="col-md-6">
				<div class="alert alert-success alert-dismissable">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<strong>Success!</strong> Hi, I'm a dismissable alert for success messages.
				</div>
				<div class="alert alert-info alert-dismissable">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<strong>Info!</strong> Hi, I'm a dismissable alert for info messages.
				</div>
			</div>
			<div class="col-md-6">
				<div class="alert alert-warning alert-dismissable">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<strong>Warning!</strong> Hi, I'm a dismissable alert for warning messages.
				</div>
				<div class="alert alert-danger alert-dismissable">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<strong>Danger!</strong> Hi, I'm a dismissable alert for danger messages.
				</div>	
			</div>
		</div>
		
		<hr />
		
		<h2 id="progress-bars">Progress Bars</h2>
		
		<div class="progress">
		  <div class="progress-bar" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%;">
		    <span class="sr-only">40% Complete</span>
		  </div>
		</div>
		
		<div class="progress progress-striped">
		  <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
		    <span class="sr-only">60% Complete (success)</span>
		  </div>
		</div>
		
		<div class="progress progress-striped active">
		  <div class="progress-bar"  role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
		    <span class="sr-only">80% Complete</span>
		  </div>
		</div>
		
		<div class="progress">
		  <div class="progress-bar progress-bar-success" style="width: 40%">
		    <span class="sr-only">40% Complete (success)</span>
		  </div>
		  <div class="progress-bar progress-bar-warning" style="width: 30%">
		    <span class="sr-only">30% Complete (warning)</span>
		  </div>
		  <div class="progress-bar progress-bar-danger" style="width: 30%">
		    <span class="sr-only">30% Complete (danger)</span>
		  </div>
		</div>
		
		<hr />
		
		<div class="col-md-6">
			<h2 id="tooltip">Tooltip</h2>
			<p>Add the <code>data-toggle="tooltip"</code> and <code>title=".."</code> attribute to the element you want the tooltip to apply to. The title attribute contain your tooltip's text.</p>
			<p><strong>Example:</strong> <a href="http://getbootstrap.com/javascript/#tooltips" data-toggle="tooltip" title="Bootstrap Documentation: Tooltip" target="_blank">http://getbootstrap.com/javascript/#tooltips</a></p>
		</div>
		
		<div class="col-md-6">
			<h2 id="popovers">Popovers</h2>
			<p>Add small overlays of content, like those on the iPad, to any element for housing secondary information.</p>
			<p><strong>"On Hover" Example</strong> - <code>class="popover"</code>:<br>
			<a href="http://getbootstrap.com/javascript/#popovers" data-toggle="popover-hover" data-original-title="Bootstrap Documentation: Popovers" data-content="Learn more about the popover." target="_blank">http://getbootstrap.com/javascript/#popovers</a></p>
			
			<p><strong>"On Click"" Example</strong> - <code>class="popover"</code>:<br>
			<a class="btn btn-default" data-toggle="popover" data-original-title="Custom Popover Title" data-content="<p>Here goes your custom popover body. <strong>HTML</strong> allowed. A button for example:</p><button type='button' class='btn btn-primary btn-sm'>more</button>" target="_blank">Click to toggle the popover</a></p>
		</div>
		
		<hr />
		
		<h2 id="forms">Forms</h2>
		<p>
			Create beautiful forms <strong>without any extra markup</strong>. Either with labels & form controls, like the example below, or even more minimal by adding a <code>placeholder</code> text to your inputs, instead of labels.
		</p>
		
		<p>
			<strong>Hint:</strong> Screen readers will have trouble with your forms if you don't include a label for every input. For these inline forms, you can hide the labels using the <code>.sr-only</code> class.
		</p>

		<form action="" role="form" class="contactform">					
			<div class="row">
				<div class="form-group col-md-6">
					<label for="name">Name</label>
					<input type="text" id="name" placeholder="" class="form-control" />
				</div>
				<div class="form-group col-md-6">
					<label for="email">Email <span class="text-warning">*</span></label>
					<input type="text" id="email" placeholder="" class="form-control" />
				</div>
			</div>
			<div class="form-group">
				<label for="subject">Subject</label>
				<input type="text" id="message" class="form-control" placeholder="" />
			</div>
			<div class="form-group">
				<label for="message">Message <span class="text-warning">*</span></label>
				<textarea name="message" id="message" cols="30" rows="10" class="form-control" placeholder=""></textarea>
			</div>
			<button type="submit" class="btn btn-primary">Submit</button>
			<small class="pull-right text-muted">* required</small>
		</form>
		
		<hr />
		
		<h2 id="affix">Affix</h2>
		<p>
			The sidebar on the left is a live demo of the <a href="http://getbootstrap.com/javascript/#affix" target="_blank">Affix plugin</a>. 
		</p>
		
		<hr />
		
		<h2 id="modal">Modal</h2>
		<p>
			<a href="http://getbootstrap.com/javascript/#modals" target="_blank">Modals</a> are streamlined, but flexible, dialog prompts with the minimum required functionality and smart defaults.
		</p>
		
		<!-- Button trigger modal -->
	  <a data-toggle="modal" href="#contact" class="btn btn-primary btn-lg"><strong>Example:</strong> Show "Contact Us" Modal</a>
	  
	  <hr />
	  
	  <h2 id="iconbox">Iconbox</h2>
	  
	  <div class="iconbox">
	    <div class="row">
        <div class="col-lg-4">
          <i class="icon-cogs icon-2x"></i>
          <h5 class="header">Title 1</h5>
          <p class="content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt, provident.</p>
        </div>
        <div class="col-lg-4">
          <i class="icon-magic icon-2x"magic></i>
          <h5 class="header">Title 2</h5>
          <p class="content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt, provident.</p>
        </div>
        <div class="col-lg-4">
          <i class="icon-bullhorn icon-2x"></i>
          <h5 class="header">Title 3</h5>
          <p class="content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt, provident.</p>
        </div>
	    </div>
	  </div>
	
	<hr />
	  
	  <h2 id="slider">Carousel</h2>
		<p>
			Retina-Ready Bootstrap 3 slideshow with pure CSS3 controls.
		</p>
		
		<p>
			<strong>Learn more:</strong> <small><a href="http://getbootstrap.com/javascript/#carousel">http://getbootstrap.com/javascript/#carousel</a></small>
		</p>
		
		<div id="carousel" class="carousel slide home">

		  <!-- Wrapper for slides -->
		  <div class="carousel-inner">
		    
		    <div class="item active">
		      <img src="http://placehold.it/1920x500&text=Slide+1" class="animated fadeIn 050s" alt="" />
		      <div class="carousel-content">
			      <div class="container">
				      <h1 class="carousel-header color animated bounceInDown delay075s">Ultra Responsive HTML5 Template</h1>
				      <div class="carousel-body">
					      <ul>
						      <li class="light animated bounceInLeft delay2s"><strong>Bootstrap 3</strong> Framework</li>
					      <li class="light animated bounceInRight delay250s">Great CSS3 Animations</li>
					      <li class="light animated bounceInDown delay3s">Smooth Font Scaling</li>				      
					      <li class="light animated bounceInUp delay3s"><strong>361</strong> Vector Icons</li>
					      </ul>
				      </div>
			      </div>
		      </div>
		    </div>
		    
		    <div class="item">
		      <img src="http://placehold.it/1920x500&text=Slide+2" alt="" class="animated fadeInUpBig" />
		      <div class="carousel-caption animated fadeInUp delay050s">
		        <div class="container">
		        	<h3 class="carousel-header">Put your Business in the Spotlight.</h3>
			        <p class="carousel-body">Skills, Profiles, Testimonials.</p>
		        </div>
		      </div>
		    </div>
		    
		    <div class="item">
		      <img src="http://placehold.it/1920x500&text=Slide+3" class="random" alt="" />
		    </div>
		    
		  </div>
		
		  <!-- Controls -->
		  <a class="left carousel-control" href="#carousel" data-slide="prev">
		    <i class="icon-angle-left"></i>
		  </a>
		  <a class="right carousel-control" href="#carousel" data-slide="next">
		    <i class="icon-angle-right"></i>
		  </a>
		  
		  <!-- Indicators -->
		  <ol class="carousel-indicators hide">
		    <li data-target="#carousel" data-slide-to="0" class="active"></li>
		    <li data-target="#carousel" data-slide-to="1"></li>
		    <li data-target="#carousel" data-slide-to="2"></li>
		  </ol>
		  
		</div><!-- .carousel -->
		
		<hr />
		
		<h2 id="multislider">Multislider</h2>
		<p>
			Show between two and eight browseable slides at once utilizing the great <a href="http://bxslider.com/" target="_blank">BxSlider</a> from Steven Wanderski. Perfect to showcase some of the clients you worked with.
		</p>
		
		<ul class="bxslider5">
			<li><img src="http://placehold.it/330x220&text=Client+1" alt="" /></li>
			<li><img src="http://placehold.it/330x220&text=Client+2" alt="" /></li>
			<li><img src="http://placehold.it/330x220&text=Client+3" alt="" /></li>
			<li><img src="http://placehold.it/330x220&text=Client+4" alt="" /></li>
			<li><img src="http://placehold.it/330x220&text=Client+5" alt="" /></li>
			<li><img src="http://placehold.it/330x220&text=Client+6" alt="" /></li>
			<li><img src="http://placehold.it/330x220&text=Client+7" alt="" /></li>
			<li><img src="http://placehold.it/330x220&text=Client+8" alt="" /></li>
			<li><img src="http://placehold.it/330x220&text=Client+9" alt="" /></li>
			<li><img src="http://placehold.it/330x220&text=Client+10" alt="" /></li>
		</ul>
		
		<hr />
	  
	  <h2 id="lightbox">Lightbox</h2>
	  <p>
		  Highly customized, fast, light and responsive <a href="http://dimsemenov.com/plugins/magnific-popup/" target="_blank">Magnific Popup lightbox</a> plugin by Dmitry Semenov. Displays all kind of content such as single images, galleries, videos, Google Maps, Ajax content and forms.
	  </p>
	  <h4>Gallery</h4>
	  
	  <div class="gallery">
		  <div class="row">
			  <div class="col-sm-4">
					<a href="http://placehold.it/1200x800&text=Gallery+Image+1" title="<h3>Easily browse through a gallery with your keyboard (left & right), close with ESC</h3>"><img src="http://placehold.it/600x400&text=Gallery+Image+1" alt="" /></a>
				</div>
			  <div class="col-sm-4">
			  	<a href="http://placehold.it/1200x800&text=Gallery+Image+2" title="Use the <code>title</code> attribute to add a caption like this one. "><img src="http://placehold.it/600x400&text=Gallery+Image+2" alt="" /></a>
			  </div>
			  <div class="col-sm-4">
			  	<a href="http://placehold.it/1200x800&text=Gallery+Image+3" title="HTML content works as well, see: <button class='btn btn-primary'><i class='icon-heart'></i> .. I'm a lovely button</button>"><img src="http://placehold.it/600x400&text=Gallery+Image+3" alt="" /></a>
			  </div>
		  </div>
	  </div>
	  
	  <p>
		  The <code>title</code> attribute holds the content for your image's caption. Simply add a title to your <code>img</code> to add a caption.
	  </p>
	  
	  <h4>iFrame - Google Maps or videos such as YouTube, Vimeo etc.</h4>
	  <a class="lightbox-iframe" href="http://www.youtube.com/watch?v=0O2aH4XLbto">Open YouTube video <i class="icon-film"></i></a><br>
		<a class="lightbox-iframe" href="https://vimeo.com/45830194">Open Vimeo video  <i class="icon-film"></i></a><br>
		<a class="lightbox-iframe" href="https://maps.google.com/maps?q=Main+Street,+New+York+City,+New+York&amp;hl=en&amp;t=v&amp;hnear=Main+Street,+New+York+City,+New+York">Open Google Map  <i class="icon-map-marker"></i></a>
	  
	  

	</div><!-- .col-md-9 -->
	
</div><!-- .row -->

</div><!-- .container -->

<?php include("footer.php"); ?>