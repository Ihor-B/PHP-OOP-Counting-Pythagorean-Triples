<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content-type: "application/json">
    <title>counting Pythagorean Triples</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="assets/css/normalize.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

    <section id="pythagorean">
        <div class="container">
            <div class="row">
                <h1>Counting Pythagorean Triples</h1>
                <div class="col-12">
					<form id="triples" accept-charset="utf-8">
						<label class="input_label" for="integers">String of Integers:</label>
						<input type="text" name="integers" id="integers" placeholder="Integers separated by spaces" required><br>

						<button id="count" type="submit">Count</button>
					</form>                    
               </div>
            </div>
            <div class="row">
                <div class="col-12 result">
                    <p><span class="label">Result:</span><span id="result">&nbsp;</span></p>
                </div>
            </div>
        </div>
    </section>

	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="http://jqueryvalidation.org/files/dist/jquery.validate.min.js"></script>
	<script src="http://jqueryvalidation.org/files/dist/additional-methods.min.js"></script>
	<script src="assets/js/main.js"></script>

</body>
</html>
