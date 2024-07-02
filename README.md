## Deploy
- Clone project
- Copy env.example to .env, fill WEATHER_API_KEY and WEATHER_CITY
- run `docker-compose up`
- run `composer install` and `php artisan migrate` in project-php container
## Notes
- Page slug is automatically set when created 
- I leave `home` route as closure, but it is not good practice
- Game service can be rolled only once, to prevent occasional overwriting game result.
- We can store only game number and calculate score in runtime to save db size, but if score logic is changed - all user total score became incorrect. 

## Task

1) На главной странице необходимо вывести форму регистрации с такими полями: Username,
Phonenumber и кнопку Register.
После того как пользователь заполнил поля и нажал кнопку Register, происходит следующее:
Пользователь получает сгенерированный уникальный линк на специальную страницу (страница А),
доступ к которой будет доступен по уникальной ссылке в течении 7 дней. После истечении
времени, линк становится недействительным.
2) Функционал страницы А:
 Возможность сгенерировать новый уникальный линк
 Возможность деактивировать данный уникальный линк
 Кнопка Imfeelinglucky
 Кнопка History
 По нажатию на кнопку "Imfeelinglucky" пользователю выводится:
 Рандомное число от 1 до 1000. Результат Win/Lose. Сумма выиграша (0 если проигрыш)
 Если рандомное число четное- выводить пользователю результат Win. В противном случае
результат Lose.
 Сумма Win. Если рандомное число более 900, сумма выигрыша должна составлять 70% от
рандомного числа. Если рандомное число более 600, сумма выигрыша должна составлять
50% от рандомного числа. Если рандомное число более 300, сумма выигрыша должна
составлять 30% от рандомного числа. Если рандомное число меньше или равно 300, сумма
выигрыша должна составлять 10% от рандомного числа.
 По нажатию на кнопку "History" пользователю выводиться:
 Информация о последних 3х результатах нажатия на кнопку "Imfeelinglucky"
