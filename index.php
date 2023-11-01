<?php
	require_once 'Bill.php';

	session_start();
?>

<!DOCTYPE html>
<html lang="pt-BR">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Calculadora de Gorjeta</title>

		<link rel="preconnect" href="https://fonts.googleapis.com" />
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
		<link
			href="https://fonts.googleapis.com/css2?family=Fira+Sans:wght@400;500&family=Roboto:wght@400;700&display=swap"
			rel="stylesheet"
		/>
		<script src="https://cdn.tailwindcss.com"></script>
		<script>
			tailwind.config = {
				theme: {
					fontFamily: {
						sans: ["Roboto", "sans-serif"],
					},
				},
			};
		</script>
		<style type="text/tailwindcss">
			label {
				@apply mb-2 font-bold;
			}

			input,
			select {
				@apply p-2 border border-gray-200 rounded-sm;
			}
		</style>
	</head>
	<body
		class="min-h-screen w-full flex flex-col justify-center items-center font-sans"
	>
		<div
			class="w-3/5 px-6 py-8 bg-white rounded-sm drop-shadow-xl border border-gray-200"
		>
			<h1 class="text-2xl text-center font-bold">
				Calculadora de Gorjeta
			</h1>

			<form action="form.php" method="post" class="flex flex-col gap-2">
				<label for="acc-value">Valor da conta:</label>
				<input type="number" name="acc-value" id="acc-value" />

				<label for="service-quality">Qualidade do serviço:</label>
				<select name="service-quality" id="service-quality">
					<option value="<?php echo Quality::Excellent->value ?>">Excelente - 10%</option>
					<option value="<?php echo Quality::Great->value ?>">Ótimo - 8%</option>
					<option value="<?php echo Quality::Good->value ?>">Bom - 5%</option>
					<option value="<?php echo Quality::Bad->value ?>">Ruim - 2%</option>
				</select>

				<button
					type="submit"
					class="my-4 px-4 py-2 bg-green-600 rounded-sm text-white"
				>
					Calcular Gorjeta
				</button>
			</form>
			<div class="flex flex-col gap-2">
				<label for="tip">Valor da gorjeta:</label>
				<input type="text" disabled
				value=" <?php echo $_SESSION['tipValue']?>" />
				<label for="total">Valor total:</label>
				<input type="text" disabled
				value="<?php echo $_SESSION['totalValue'] ?>" />
			</div>
		</div>
	</body>
</html>
