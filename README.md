# list_of_films

Задание

Разработать CRUD приложение для управления списком фильмов и их жанров.
Требования:
•	Приложение должно быть написано на фреймворке Laravel. - DONE
•	Приложение должно использовать миграции для создания таблиц. - DONE

Должна быть реализована валидация данных
(что и как валидировать - на свое усмотрение, главное чтобы она была).

База данных должна быть MySQL, а отношения фильмов и жанров должны быть many-to-many.

•   Структура таблиц должна быть следующей:

•	movies: DONE
•	id: integer (primary key, auto increment)
•	title: string (255), unique, index
•	description: text
•	release_date: date
•	created_at: timestamp
•	updated_at: timestamp

•	genres: DONE
•	id: integer (primary key, auto increment)
•	name: string (255), unique, index
•	created_at: timestamp
•	updated_at: timestamp

•	genre_movie: DONE
•	genre_id: integer (foreign key)
•	movie_id: integer (foreign key)

•	Приложение должно иметь Rest API с двумя методами:
•	GET /movies - выводит все фильмы в формате JSON
•	GET /movies/{id} - выводит фильм с указанным id в формате JSON

•	Фронтенд для страниц с CRUD операциями может быть любым.
