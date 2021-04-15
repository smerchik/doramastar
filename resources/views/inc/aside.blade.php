
<div class="sidebar_container">
    <div class="sidebar">
        <h2>Поиск</h2>
        <form method="post" action="#" id="search_form">
            <input type="search" name="search_field" placeholder="ваш запрос" />
            <input type="submit" class="bth" value="найти" />
        </form>
    </div>

    <div class="sidebar">
        <h2>Вход</h2>
        <form method="post" action="#" id="logim">
            <input type="text" name="logind_field" placeholder="логин">
            <input type="password" name="password_field" placeholder="пароль">
            <input type="submit" class="btn" value="вход">
            <div class="labless_passreg_text">
                <span><a href="#">забыли пароль? |</a></span><span><a href="#">регистрация</a></span></span>
            </div>
        </form>
    </div>
    <div class="sidebar">
        <h2>Новости</h2>
        <span>31.03.2020</span>
        <p>Мы запустили расширенный поиск</p>
        <a href="#">читать</a>
    </div>
    <div class="sidebar">
        <h2><a href="{{ route('rating') }}">Рейтинг дорам</a></h2>
        <ul>
            <li><a href="{{ route('show') }}">Итэвон класс</a><span class="rating_sidebar">8.2</span></li>
            <li><a href="#">Потомки солнца</a><span class="rating_sidebar">8.4</span></li>
            <li><a href="#">Псих, но все в порядке</a><span class="rating_sidebar">8.3</span></li>
            <li><a href="#">Цветок зла</a><span class="rating_sidebar">8.4</span></li>
        </ul>

    </div>
    @include('inc.aside-add')
</div>

