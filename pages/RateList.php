<?
require_once "../core/config.php";
require_once "../core/navigate.php";


?>
<!DOCTYPE html>
<html>

<head>
	<meta charset=<?=ENCODING ?>>
	<style type="text/css">
		.scroll-table-body {
			height: 300px;
			overflow-x: auto;
			margin-top: 0px;
			margin-bottom: 20px;
			border-bottom: 1px solid #eee;
		}
		.scroll-table table {
			width:100%;
			table-layout: fixed;
			border: none;
		}
		.scroll-table thead th {
			font-weight: bold;
			text-align: left;
			border: none;
			padding: 10px 15px;
			background: #d8d8d8;
			font-size: 14px;
			border-left: 1px solid #ddd;
			border-right: 1px solid #ddd;
		}
		.scroll-table tbody td {
			text-align: left;
			border-left: 1px solid #ddd;
			border-right: 1px solid #ddd;
			padding: 10px 15px;
			font-size: 14px;
			vertical-align: top;
		}
		.scroll-table tbody tr:nth-child(even){
			background: #f3f3f3;
		}
		 
		/* Стили для скролла */
		::-webkit-scrollbar {
			width: 6px;
		} 
		::-webkit-scrollbar-track {
			box-shadow: inset 0 0 6px rgba(0,0,0,0.3); 
		} 
		::-webkit-scrollbar-thumb {
			box-shadow: inset 0 0 6px rgba(0,0,0,0.3); 
		}
	</style>
</head>
<body>

	<table border="1" width="100%" cellpadding="5">
		<tr>
			<td>
				<table border="1" width="100%" cellpadding="5">
				<form method="post" action="RateList.php">
					<tr>
						<td width="10%" align="right">
							<input type="submit" name="filterFilms" value="Фильмы">
						</td>
						<td width="10%">
							<input type="submit" name="gotoMain" value="На главную">
						</td>
						<td></td>
					</tr>
					<tr>
						<td align="right">
							<input type="submit" name="filterSerials" value="Сериалы">
						</td>
						<td>
							<input type="submit" name="gotoExtandedRateList" value="К расширенному списку">
						</td>
					</tr>
					<tr>
						<td align="right">
							<input type="submit" name="filterAnime" value="Аниме">
						</td>
					</tr>
				</form>
				</table>
			</td>
		</tr>
		
		<tr>
			<td>
				различные фильтры для таблицы
			</td>
		</tr>
		<tr>
			<td>
				сама таблица фильмов
				<div class="scroll-table">
					<table>
						<thead>
							<tr>
								<th>Название фильма</th>
								<th>Оценка</th>
								<th>Комментарий</th>
							</tr>
						</thead>
					</table>	
					<div class="scroll-table-body">
						<table>
							<tbody>

								<tr>
									<td>Кинг-Конг</td>
									<td>6</td>
									<td>Хуё-мое</td>
								</tr>
								<tr>
									<td>Конг-Кинг</td>
									<td>9</td>
									<td>Мое-хуё</td>
								</tr>
								<tr>
									<td>-К-</td>
									<td>8</td>
									<td>Ёмх-уое</td>
								</tr>

								<?

								

								?>
								
							</tbody>
						</table>
					</div>	
				</div>
			</td>
		</tr>
	</table>
</body>

</html>