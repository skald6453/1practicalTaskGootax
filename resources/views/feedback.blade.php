@extends('layouts.app')

@section('content')
    <div class="container text-center">
        <div class="card">
            <div class="card-header">Feedback</div>


                <div class="card-body">
                    <div class="row align-items-start">
                    <div class="col">
                        <label>Ваше имя</label>

                        <input class="form-control" style="width: 30%;">

                        <div class="form-check p-5">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                            <label class="form-check-label" for="flexCheckChecked">
                                Выбранный флажок
                            </label>
                        </div>

                        <div class="form-check p-3">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">
                                Радио по умолчанию
                            </label>
                        </div>

                        <div class="form-check p-3">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                            <label class="form-check-label" for="flexRadioDefault2">
                                Радио выбранное по умолчанию
                            </label>
                        </div>

                        <select class="form-select" aria-label="Пример выбора по умолчанию">
                            <option selected>Откройте это меню выбора</option>
                            <option value="1">Один</option>
                            <option value="2">Два</option>
                            <option value="3">Три</option>
                        </select>
                        <div class="btn">
                            <button type="button" class="btn btn-outline-dark">Отправить форму</button>
                            <button type="button" class="btn btn-outline" style="color:red;">Сбросить форму</button>
                        </div>
                    </div>

                        <div class="col">
                            <label>Напишите отзыв</label>
                            <textarea class="form-control" placeholder="Введите текст..."></textarea>
                        </div>

                    
                    </div>
                </div>

            </div>
        </div>
    </div>


@endsection
