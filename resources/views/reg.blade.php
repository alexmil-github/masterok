<form method="POST" action="reg" style="text-align: center; margin: auto;">
    {!! csrf_field() !!}

    <div>
        ФИО
        <input style="margin: 10px;" type="text" name="fio" id="fio">
    </div>
    <div>
        email
        <input style="margin: 10px;" type="email" name="email" id="email">
    </div>

    <div>
        login
        <input style="margin: 10px;" type="text" name="login" id="login">
    </div>

    <div>
        Пароль
        <input style="margin: 10px;" type="password" name="password" id="password">
    </div>


    <div>
        <button style="margin: 10px;" type="submit">Зарегистрироваться</button>
    </div>
</form>
