<?
/*
TODO:
Реализовать сеты фильмов
Либо брать сеты готовых фильмов из БД
*/

require_once "../core/start.php";
require_once "../core/config.php";
require_once "../core/DBEngine.php";
require_once "../core/userEngine.php";

function wrapToQuotes($string)
{
	return '"'.$string.'"';
}

function randFilmName()
{
	$film_names = [
		"Кинг-Конг"
		,"Соник"
		,"И грянул гром"
		,"Области тьмы"
		,"Бойцовский клуб"
		,"Мертвое поле"
		,"Пушки Акимбо"
		,"Напролом"
		,"Не грози южному централу"
		,"Птичий короб"
	];
	$film_name_id = rand(0, count($film_names) - 1);
	$random_film_name = $film_names[$film_name_id];
	return wrapToQuotes($random_film_name);
}

$current_year = 2021;
$default_rate = rand(1, 10);
$placeholder_name_film = randFilmName();

?>

<!DOCTYPE html>
<html>

<head>
	<meta charset=<?=ENCODING ?>>

	<style>
		textarea
		{
			resize: none;
		}
		input[type="range"] {
			width:290px;
		}
	</style>
	<script>
		function redirectToMain()
		{
			window.location = 'http://MyMediaRateProject/pages/Main.php';
		}
	</script>

</head>
<body>

	<table border="0" width="100%" cellpadding="5">
		<tr>
			<td>

			</td>
		</tr>
		<tr>
			<td>
				<form method="post" action="../core/userEngine.php">
				<table border="0" width="100%" cellpadding="1">
					<tr>
						<td width="10%">Жанр:</td>
						<td width="10%">
							<select name="typeFilm" size="1" required="">
								<option>Фильм</option>
								<option>Сериал</option>
								<option>Аниме</option>
							</select>
						</td>
						<td></td>
					</tr>
					<tr>
						<td>Название:</td>
						<td>
							<input type="text" name="nameFilm" size="40" placeholder=<?=$placeholder_name_film?> >
						</td>
						<td></td>
					</tr>
					<tr>
						<td>Оценка:</td>
						<td>
							<table border="0" width="100%" cellpadding="0">
								<tr>
									<td>
										<input type="range" id="rateFilm" name="rateFilm" min="0" max="10" step="1" oninput="printRate();" value=<?=$default_rate?> size="20">
									</td>
									<td align="right" width="10%">
										<div id="printedValue">
								<?=$default_rate?>
							</div>
									</td>
								</tr>
							</table>
							<script>

								function printRate() {
									rangeValue = document.getElementById("rateFilm").value;
									document.getElementById("printedValue").innerHTML = rangeValue;
								}
							</script>
						</td>
					</tr>
					<tr>
						<td>Количество серий:</td>
						<td>
							<input type="text" size="5" name="episodesFilm">
						</td>
						<td></td>
					</tr>
					<tr>
						<td>Год выпуска:</td>
						<td>
							<input type="number" name="releaseFilm" min="1895" max=<?=$current_year?> step="1" size="4" maxlength="4" value="2010">
						</td>
						<td></td>
					</tr>
					<tr>
						<td>Комментарий:</td>
						<td>
							<textarea cols="40" rows="5" placeholder="Комментарий" maxlength="2048" name="commentFilm" ></textarea>
						</td>
						<td></td>
					</tr>
					<tr>
						<td>
							
							<input type="submit" name="backToMain" value="На главную">
							
							<?/*
							<button onclick="redirectToMain()">
								На главную
							</button>
							*/?>
						</td>
						<td align="right">
							<input type="submit" name="acceptFilm" value="Подтвердить">
						</td>
						<td></td>
					</tr>
				</table>
				</form>

				
			</td>
			<td>

			</td>
		</tr>
		<tr>
			<td>
				
			</td>
		</tr>
	</table>

	
</body>
</html>