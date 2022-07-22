# MacPaw_Internship_2022
Back-End PHP Intern

Необхідно: php version 8.0+, mySql version 8.0+, Composer version 2.3.8+,git

Інструкція налаштування проекту:
* Для завантаження проекту потрібно ввести команду в терміналі: 
`git clone -b master https://github.com/KlimKosenko/MacPaw_Internship_2022.git`
* Після завантаження, перейдіть в папку проекте та введіть команду в терміналі: `composer install`
* Змініть файл `.env.example` на `.env`
* Виконайте команду `php artisan key:generate`
* Створіть базу даних
* Налаштуйте файл `.env`
    * З'єднання з базою даних
    * nasa api key `NASA_API_ACCESS_TOKEN=`
* Виконайте міграцію командою `php artisan migrate`
* Для запуску додатку виконайте команду `php artisan serve` та перейдіть за посиланням.
