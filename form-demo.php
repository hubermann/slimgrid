<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" media="all" href="assets/SlimGrid.css" />
	<link rel="stylesheet" type="text/css" media="all" href="assets/forms.css" />
	<!-- charset -->
	<meta charset="utf-8">
	<!-- Mobile Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	<!-- Description -->
	<meta name="description" content="">

	<style type="text/css">
	header, footer{background: url('bg-header-footer.png');overflow:hidden; }
	div{background: url('bg-div.png');}
	</style>


</head>
<body>
<header class="block">
	<div class="one_3"><h1>Header</h1><p>This a example with the form.css file.</p></div>	
	<div class="two_3">
		<nav>
			<ul>
				<li><a href="index.php">Main demo</a></li>
				<li><a href="footer-bottom.php">Footer bottom</a></li>
				<li><a href="form-demo.php">Form demo</a></li>
				<li><a href="blog.php">Blog style</a></li>
			</ul>
		</nav>
	</div>

</header>

<div class="block">
	<div class="one_3"><h5>The name of this class is [<span>.one_3</span>]</h5>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
	</div>
	<div class="two_3">
		<h5>The name of this class is [<span>.two_3</span>]</h5>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		<p><strong>Please -> Resize the windows!</strong></p>
	</div>
</div>

<div class="block">

	<div class="half">
	<h5>The name of this class is [<span>.half</span>] </h5><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
	<h5>Lorem ipsum dolor sit amet - H2</h5><img src="demo-image.jpg" alt="demo" class="auto-image">
	</div>

	<div class="half">
		<form id="simpleform" action="/" method="post">	
		
		<fieldset>
		<legend> <strong>&nbsp; Send Us a Message &nbsp;</strong> </legend>

		<div class="form-item">
			<label for="name">First name:</label>
			<input type="text" name="name" id="name" placeholder="Provide your first name." required />
		</div>

		<div class="form-item">
			<label for="lastname">Lastname:</label>
			<input type="text" name="lastname" id="lastname" placeholder="Provide your lastname." required />
		</div>

		<div class="form-item">
			<label for="message">Message:</label>
			<textarea name="message" id="message" cols="30" rows="10"></textarea>
		</div>

		<div class="form-item">
			<label for="demo">Option drop down:</label>
			<select name="demo" id="demo">
				<option value="1">One option</option>
				<option value="2">Two option</option>
				<option value="2">Three option</option>
			</select>
			<hr>
		</div>
		
		<div class="form-item">
			<label for="demo1">Checkboxs options</label>
			<div class="boxradio"><input type="checkbox" name="demo1" id="demo1" class="no-margin-left">check one</div>
			<div class="boxradio"><input type="checkbox" name="demo2" id="demo2">check two</div>
			<div class="boxradio"><input type="checkbox" name="demo3" id="demo3">check three	</div>
			<hr>
		</div>

		<div class="form-item">
			<label for="demo4">Radio options</label>
			<div class="boxradio"><input type="radio" name="demo4" id="demo4" class="no-margin-left">radio 1</div>
			<div class="boxradio"><input type="radio" name="demo5" id="demo5">radio 2</div>
			<div class="boxradio"><input type="radio" name="demo6" id="demo6">radio 3</div>
		</div>

		<button class="form_button">Submit form</button>
		</fieldset>								
		</form>
	</div>
	
</div>

<div class="block">
	<div class="one_4">
		<h5>This is [<span>.one_4</span>]</h5>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
	</div>
	<div class="three_4">
		<h5>This is [<span>.three_4</span>]</h5>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
	</div>
</div>



	<footer class="block">
	
		<div class="one_3"><h2>This is the footer!</h2>
	<blockquote>and this is a good bye! into a blockquote.</blockquote></div>
		<div class="one_3"><h2>This is the footer!</h2>
	<blockquote>and this is a good bye! into a blockquote.</blockquote></div>
		<div class="one_3"><h2>This is the footer!</h2>
	<blockquote>and this is a good bye! into a blockquote.</blockquote></div>
	</footer>


<!-- JQuery -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>

</body>
</html>