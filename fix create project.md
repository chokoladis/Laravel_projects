*****
Если ошибка создания проекта
<br>———<br>
<i>vi ~/.bashrc</i><br>
<i>i</i><br>
<i>export PATH="$PATH:$HOME/.composer/vendor/bin"</i><br>
<i>:wq </i><br>
<i>cd ~/.composer</i><br>
<i>echo $PATH</i><br>
*****

composer create-project laravel/laravel example-app <br>
cd example-app<br>
php artisan serve<br>
