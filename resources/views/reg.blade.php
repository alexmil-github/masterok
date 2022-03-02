@extends("layouts.main")

@section("content")

<div class="head" id="register">Регистрация</div>
<form action="/reg" method="POST">
    @csrf
    <input type="text" name="fio" placeholder="ФИО (кириллица, дефис, пробел, до 32 символов)" pattern="[а-яА-ЯёЁ\-\s]{1,32}" required>
    <input type="text" name="login" placeholder="Логин (латиница, до 16 символов)" pattern="[a-zA-Z]{1,16}" required>
    <input type="email" name="email" pattern=".{1,32}" placeholder="Email (наличие @, до 32 символов)" required>
    <input type="password" name="password" pattern=".{1,32}" placeholder="Пароль (до 32 символов)" required>
    <input type="password" name="password_check" placeholder="Повтор пароля" required>
    <div class="line">
        <input type="checkbox" required>
        <p>Согласие на обработку персональных данных</p>
    </div>
    <button>Зарегистрироваться</button>
</form>

@endsection

