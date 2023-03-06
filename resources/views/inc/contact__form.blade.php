<form action={{ route('contact-form') }} method="POST">
    @csrf
    <div class="form-group">
        <label for="name">Введите Имя</label>
        <input type="text" name="name" placeholder="Введите имя" id="name" class="form-control">
    </div>
    <div class="form-group">
        <label for="email">Введите email</label>
        <input type="text" name="email" placeholder="Введите email" id="email" class="form-control">
    </div>
    <div class="form-group">
        <label for="subject">Тема сообщения</label>
        <input type="text" name="subject" placeholder="Тема сообщения" id="subject" class="form-control">
    </div>
    <div class="form-group">
        <label for="message">Сообщение</label>
        <textarea name="message" id="message" placeholder="Введите сообщение" class="form-control"></textarea>
    </div>

    @if($errors->any())
        <div class='alert alert-danger mt-3'>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>
                        {{$error}}
                    </li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="form-group mt-3">
        <button type="submit" class="btn btn-success">Отправить</button>
    </div>
</form>