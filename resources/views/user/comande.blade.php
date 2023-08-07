<!DOCTYPE html>
<html lang="en">
<head>
    <base href="/public">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
@import url("reset.min.css");

body {
	font-family: "PT Mono", sans-serif;
	font-size: 16px;
	-webkit-font-smoothing: antialiased;
	-moz-osx-font-smoothing: grayscale;
	background-color: #7d8595;
}

#l-constrained {
	width: 100%;
	max-width: 1440px;
	margin: 0 auto;
}
#l-content {
	width: 100%;
	height: 100vh;
}

.page-title {
	margin-bottom: 2em;
	width: 100%;
}
.page-title h1 {
	font-size: 4em;
	font-weight: 600;
}
.credit-card__container {
	padding: 0 1em;
	width: 100%;
	height: 100vh;
	display: flex;
	justify-content: center;
	align-items: center;
	flex-direction: column;
}
.credit-card {
	position: relative;
	overflow-x: hidden;
	overflow-y: auto;
	padding: 35px;
	margin: 0 auto;
	width: 600px;
	border-radius: 15px;
	background: linear-gradient(
			45deg,
			rgb(25, 27, 34) 25%,
			hsl(217, 28%, 16%) 50%,
			hsl(219, 22%, 25%) 70%
		)
		0 0;
	background-color: rgb(0, 0, 0);
	display: flex;
	flex-direction: column;
	transform: rotate3d(1, 1, -1, 25deg);
	box-shadow: -50px 50px 50px 0px rgb(0 0 0 / 50%);
	border: 1px solid rgb(25, 30, 50);
	border-left: 5px solid rgb(25, 30, 50);
	border-bottom: 3px solid rgb(25, 30, 50);
	transition: 0.375s ease-out;
}
.credit-card::before {
	position: absolute;
	content: "";
	inset: 0;
	background: linear-gradient(
		65deg,
		rgba(255, 255, 255, 0) 20%,
		rgba(255, 255, 255, 0.1) 50%,
		rgba(255, 255, 255, 0) 80%
	);
	transform: translateX(-70%);
	transition: 0.375s ease-out;
}
.credit-card:hover,
.credit-card:focus-within {
	transform: rotate3d(0, 0, 0, 0deg);
	box-shadow: 0px 30px 20px 0px rgb(0 0 0 / 50%);
	border-left: 1px solid rgb(25, 30, 50);
	border-bottom: 1px solid rgb(25, 30, 50);
}
.credit-card:hover::before,
.credit-card:focus-within::before {
	transform: translateX(70%);
}
.credit-card .credit-card__header {
	display: flex;
	justify-content: space-between;
}
.credit-card .credit-card__header img {
	width: 100px;
	height: auto;
	object-fit: contain;
}
.credit-card .credit-card__header img.ship-card {
	width: 70px;
	filter: contrast(1.3);
}
.credit-card__form {
	position: relative;
	padding-top: 2em;
	font-family: "PT Mono";
}
.field {
	margin: 1em 0;
}
.field label {
	margin-bottom: 5px;
	display: block;
	color: #c8c8c8;
	font-size: 1em;
	letter-spacing: 1px;
	text-transform: uppercase;
}
.field input[type="text"],
.field input[type="number"],
.field input[type="date"],
.field select {
	font-family: "PT Mono";
	padding: 7px 15px;
	width: 100%;
	border-radius: 5px;
	font-size: 0.8em;
	color: #fff;
	background: transparent;
	border: 1px solid #484b58;
	transition: 0.275s ease-out;
}
.field input[type="text"]:focus,
.field input[type="number"]:focus,
.field input[type="date"]:focus,
.field select:focus {
	outline: none;
	border: 1px solid #7d8295;
}
.field option {
	background-color: rgb(25, 27, 34);
}
.fields {
	display: flex;
	gap: 1em;
}
.fields .field {
	width: 50%;
}
.flex-input {
	display: flex;
	justify-content: start;
	gap: 1em;
}

@media screen and (max-width: 1200px) {
}
@media screen and (max-width: 1024px) {
	.fields {
		flex-direction: column;
		gap: 0;
	}
	.fields .field {
		width: 100%;
	}
}
@media screen and (max-width: 768px) {
	.credit-card {
		width: 100%;
	}
	.credit-card .credit-card__header img {
		width: 90px;
	}
	.credit-card .credit-card__header img.ship-card {
		width: 60px;
	}
	.field {
		margin: 0.5em 0;
	}
}
@media screen and (max-width: 480px) {
}



    </style>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=PT+Mono&display=swap" rel="stylesheet">
</head>
@include('user.css')
<body>
    @include('user.navbar')
<br>
<main id="l-content">
	<div id="l-constrained">
		<div class="credit-card__container">
			<div class="credit-card">
				<div class="credit-card__header">
					<img class="ship-card" src="https://xgjzloifyvgpbmyonaya.supabase.co/storage/v1/object/public/files/7cjpV_BXbz/original" alt="ship card">
					<img class="master-card" src="https://xgjzloifyvgpbmyonaya.supabase.co/storage/v1/object/public/files/wROkdug6ax/original" alt="ship card">
				</div>
				<div class="credit-card__form">
					<!-- form -->
					<form action="">
						@csrf
						<div class="field">
							<label for="card-number-1">Numéro de carte</label>
							<div class="flex-input card-number__numbers">
								<input type="text" name="card-number-1" id="card-number-1" maxlength="4">
								<input type="text" name="card-number-2" id="card-number-2" maxlength="4">
								<input type="text" name="card-number-3" id="card-number-3" maxlength="4">
								<input type="text" name="card-number-4" id="card-number-4" maxlength="4">
							</div>
						</div>
						<div class="field">
							<label for="card-holder-name">Nom du propriétaire</label>
							<input type="text" name="card-holder-name" id="card-holder-name">
						</div>
						<div class="fields">
							<div class="field">
								<label for="expiration-date-1">Date d'expiration</label>
								<div class="flex-input">
									<select name="expiration-date-1" id="expiration-date-1">
										<option value="">Mois</option>
										<option value="01">01</option>
										<option value="02">02</option>
										<option value="03">03</option>
										<option value="04">04</option>
										<option value="05">05</option>
										<option value="06">06</option>
										<option value="07">07</option>
										<option value="08">08</option>
										<option value="09">09</option>
										<option value="10">10</option>
										<option value="11">11</option>
										<option value="12">12</option>
									</select>
									<select name="expiration-date-2" id="expiration-date-2">
										<option value="">Année</option>
										<option value="2020">2020</option>
										<option value="2021">2021</option>
										<option value="2021">2022</option>
										<option value="2023">2023</option>
										<option value="2024">2024</option>
										<option value="2025">2025</option>
										<option value="2026">2026</option>
										<option value="2027">2027</option>
										<option value="2028">2028</option>
										<option value="2028">2029</option>
										<option value="2028">2030</option>
									</select>
								</div>
							</div>
							<div class="field">
								<label for="cvv">Code CVV</label>
								<input type="text" name="cvv" id="cvv" maxlength="3">
							</div>
                            <button class="btn btn-outline-secondary" >Payer</button>
						</div>
					</form>
				</div>
			</div>
            
		</div>
	</div>
</main>
@include('user.script')
<br>
@include('user.footer')
</body>
</html>