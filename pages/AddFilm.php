<?
require_once "../core/start.php";
require_once "../core/config.php";
require_once "../core/DBEngine.php";

?>

<!DOCTYPE html>
<html>

<head>
	<meta charset=<?=ENCODING ?>>
</head>
<body>

	<table border="1" width="100%" cellpadding="5">
		<tr>
			<td>

			</td>
		</tr>
		<tr>
			<td>
				<form method="post" action="../core/login.php">
				<table border="1" width="100%" cellpadding="1">
					<tr>
						<td width="10%">Жанр:</td>
						<td >
							<input type="" name="typeFilm">
						</td>
						<td></td>
					</tr>
					<tr>
						<td>Название:</td>
						<td>
							<input type="text" name="nameFilm" placeholder="Кинг-Конг" size="20">
						</td>
						<td></td>
					</tr>
					<tr>
						<td>Оценка:</td>
						<td>
							<input type="range" name="rateFilm">
						</td>
						<td></td>
					</tr>
					<tr>
						<td>Количество серий:</td>
						<td>
							<input type="text" name="episodesFilm">
						</td>
						<td></td>
					</tr>
					<tr>
						<td>Год выпуска:</td>
						<td>
							<input type="range" name="releaseFilm">
						</td>
						<td></td>
					</tr>
					<tr>
						<td>Комментарий:</td>
						<td>
							<input type="test" name="commentFilm">
						</td>
						<td></td>
					</tr>
					<tr>
						<td>
							
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