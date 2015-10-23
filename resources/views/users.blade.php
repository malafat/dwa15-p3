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
                font-family: 'times';
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
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title">'User Data' Generator</div>
				<h4>
					Indicate a number of users (99 max)...<br>
					Select the desired options... <br>
					And click Generate!<br>
				</h4>
				<br>
				<form method='POST'>
					<input type='hidden' name='_token' value='{{ csrf_token() }}'>
					<input type='number' name='num_users' min='0' max='99'><br>
					<input type="checkbox" name='include_birthday' > Birth Date<br>
					<input type="checkbox" name='include_address'> Address<br>
					<input type='submit' value='Generate'>
				</form>
				<br>
				<br>
				<a href='/'>Home Base!</a>
            </div>
        </div>
		<section class='output'>

		<pre><?php
				if (isset($_POST['num_users'])){
					$faker = Faker\Factory::create();
					$num_users = $_POST['num_users'];
					for($i=0; $i < $num_users; $i++){
						echo "Name:    ".$faker->name."<br />";
						if(isset($_POST['include_birthday'])){
							echo "Born:    ".$faker->monthName(12)." ".$faker->dayOfMonth(30).", ".$faker->year(2003)."<br />";
						}
						if(isset($_POST['include_address'])){
							echo "Address: ".$faker->streetAddress.", ".$faker->city.", ".$faker->stateAbbr." ".$faker->postcode."<br />";
						}
						echo "<br>";
					}
				}
			?>
		</pre>
		</section>
    </body>
</html>
