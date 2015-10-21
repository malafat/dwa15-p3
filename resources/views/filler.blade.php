<!DOCTYPE html>
<html>
    <head>
        <title>Lorem Ipsum!</title>
        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Arial';
				background: #AFD4CE;
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: top;
				background: #999966;
				width: 32em;
				min-width: 32em;
            }
			.output{
				margin-top: 40px;
				margin-left: 20px;
				font-family: 'Courier';
			}
            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 46px;
				font-family: 'times';
				
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title">Lorem Ipsum</div>
				<br>
				Enter the number of paragraphs you would like to generate below<br>
			    between 1 and 99 and then submit!
				<br><br>
				<form method='POST'>
					<input type='hidden' name='_token' value='{{ csrf_token() }}'>
					<input type='number' name='length' value='' min='0' max='99'><br>
					<input type='submit' value='Generate tasty filling...'>
				</form>
				<br>
				Oooh... It even almost looks like a language...<br>Copy and paste as you please!<br><br>
				<a href='/'>Home Base!</a>
            </div>
        </div>
		<section class='output'>
		<?php 
			if (isset($_POST['length'])){
				$length = $_POST['length'];	
				$generator = new Badcow\LoremIpsum\Generator();
				$paragraphs = $generator->getParagraphs($length);
				echo implode('<p>', $paragraphs);
			}
			
		?>
		</section>
    </body>
</html>


