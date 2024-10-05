@extends('layouts.app')

@section('content')
    <div class="container">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
        <form action="{{ route('animals.create') }}" method="post" enctype="multipart/form-data">
            @csrf
            <label for="species">Разновидность животного:</label>
            <input type="text" name="species" required>
            <label for="species">Имя животного:</label>
            <input type="text" name="name" required>
            <label for="species">Возраст:</label>
            <input type="text" name="age" required>
            <label for="species">Описание:</label>
            <input type="text" name="description" required>
            <button type="submit">Отправить</button>
        </form>
    </div>
    
@endsection