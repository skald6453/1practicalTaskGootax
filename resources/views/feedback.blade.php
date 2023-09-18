@extends('layouts.app')

@section('content')
    <div class="container text-center">
        <div class="card">
            <div class="card-header">Feedback</div>


                <div class="card-body">
                    <form method="POST" action="{{route('submitted')}}">
                        @csrf
                    <div class="row align-items-start">

                    <div class="col">

                        <label class="text p-4" style="font-family: 'Nunito', sans-serif; font-size: 18px;">Ваш e-mail</label>
                        <input class="form-control w-50" name="email" style="margin-left: 25%;">

                        <label class="text-dark p-4" style="font-family: 'Nunito', sans-serif; font-size: 18px;">Пол</label>
                        <div class="col">
                        <input type="radio" value="Мужской" name="sex" class="btn-check" id="option1" autocomplete="off" checked>
                        <label class="btn btn-secondary" for="option1" >Мужской</label>

                        <input type="radio" value="Женский" name="sex" class="btn-check" id="option2" autocomplete="off">
                        <label class="btn btn-secondary" for="option2">Женский</label>
                        </div>
                        <label class="text-dark p-4" style="font-family: 'Nunito', sans-serif; font-size: 18px;">Способ доставки</label>
                        <select class="form-select" name="delivery">
                            <option selected>Курьер</option>
                            <option value="Самовывоз">Самовывоз</option>
                            <option value="Доставка на пункт выдачи">Доставка на пункт выдачи</option>
                        </select>
                        <div class="form-check p-5">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                            <label class="form-check-label" for="flexCheckChecked">
                                Вы принимаете политику конфиденциальности и условия использования
                            </label>
                        </div>
                        <div class="btn">
                            <button type="submit" class="btn btn-outline-success">Отправить форму</button>

                            <a class="btn btn-outline-danger" href="{{route('feedback')}}">Сбросить форму</a>
                        </div>
                    </div>

                        <div class="col">
                            <label>Напишите отзыв</label>
                            <textarea class="form-control" name="feedback" placeholder="Введите текст..."></textarea>
                        </div>


                    </div>
                    </form>
                </div>

            </div>
        </div>
    </div>


@endsection
