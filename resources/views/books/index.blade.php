<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
		
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            thead a {
            	color: #fff;
            }

        </style>
    </head>
    <body>
            <div class="content container">
                <div class="title m-b-md">
                    Список книг
                </div>
				<div>
                	<table class="table table-bordered">
                		<thead class="thead-dark">

                			<tr>
                				<th>id <br> <a href="/books/sorted/asc/id">&#9650</a> <br> <a href="/books/sorted/desc/id">&#9660</a></th>
                				<th>Name <br> <a href="/books/sorted/asc/name">&#9650</a> <br> <a href="/books/sorted/desc/name">&#9660</a></th>
                				<th>Publish year <br> <a href="/books/sorted/asc/publish_year">&#9650</a> <br> <a href="/books/sorted/desc/publish_year">&#9660</a></th>
								<th>Author <br> <a href="/books/sorted/asc/author">&#9650</a> <br> <a href="/books/sorted/desc/author">&#9660</a></th>
                				<th>Delete</th>
                				<th>Update</th>
                			</tr>
                		</thead>
                		<tbody>
                			<?php 
                				foreach ($books as $book) {
                					?>
                					<tr>
                						<td><?=$book->id?></td>
                						<td><?=$book->name?></td>
                						<td><?=$book->publish_year?></td>
                						<td><?=$book->author->name?></td>
                						<td><a href="/books/<?php echo $book->id; ?>/delete" class="btn btn-danger">Удалить</a></td>
                						<td>
                							<form action="/books/<?php echo $book->id?>/update" method="POST">
                								<input type="text" name="name" placeholder="Наименование" required>
                								<input type="text" name="publish_year" placeholder="Год" required>
                								<select name="author_id">
						                			<?php foreach ($authors as $author) {
						                				?>

						                				<option value="<?=$author->id; ?>"><?=$author->name; ?></option>
						                			<?php	
						                			} ?>	
                								</select>
                								<input type="submit" value="Изменить" class="btn btn-warning">
                							</form>
                						</td>
                					</tr>
                				<?php }
                			?>
                		</tbody>
                	</table>
                </div>
            </div>
        </div>
    </body>
</html>