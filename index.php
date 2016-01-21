
<!DOCTYPE html>
<html>
<head>
	<title>Including Ninjas</title>
</head>
<body>
	<!-- WELCOME TO INCLUDING NINJAS!
		After you've forked this repository and opened the files in your text editor,complete the following tasks:

			*Create another file in the 'ninjas' directory called "your_name".php (replace "your_name" with your name)
			*In your new file, code some HTML and CSS (using the &lt;style&gt; tags) content that explains who you are and why you've decided to learn to code. Wrap all your content in a div with the class "ninja-info".*
			*Include your file in this page's 'container' &lt;div&gt; by using php's include() command.*

		Once your done, add and commit your changes to your local repository, push them to your forked Github repository and send us a pull request!

	-->
	<h1>Meet your fellow PHP ninjas:</h1>
	<div class="container">
		<?php include('ninjas/charlie_mead.php'); ?>
		<?php include('ninjas/todd_enders.php'); ?>
	</div>
</body>

</html>

<style>
	.ninja-info {
		margin: 20px auto;
		padding: 10px;
		width: 600px;
		height: 200px;
		overflow: scroll;
		border: 1px solid black;
	}
</style>