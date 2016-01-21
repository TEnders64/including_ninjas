
<!DOCTYPE html>
<html>
<head>
	<title>Including Ninjas</title>
</head>
<body>
	<h1>Welcome to Including Ninjas</h1>
	<p>After you've forked this repository and opened the files in your text editor, complete the following tasks:</p>
	<ul>
		<li>Create another file in the 'ninjas' directory called "your_name".php</li>
		<li>Add html content that explains who you are and why you've decided to learn to code. [BONUS: Include a photo of yourself by using the &lt;img&gt; tag. Save the photo in the /ninjas/images directory.]</li>
		<li>Feel free to style your content by using &lt;style&gt; tags </li>
		<li>Include your file in this page's 'container' &lt;div&gt; by using php's include() command.</li>
	</ul>
	<div class="container">
		<?php include('example.php'); ?>
	</div>
</body>
</html>