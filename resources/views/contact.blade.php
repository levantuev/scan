@extends('layouts.app')

@section('content')
<h1>contact new</h1>
<p>
  Quickly build an effective pricing table for your potential customers with this Bootstrap example. It’s built with default Bootstrap components and utilities with little customization.
</p>

@if($errors->any())
<div class="alert alert-danger">
 <ul>
   @foreach($errors->all() as $error)
    <li>{{ $error }}</li>
   @endforeach
 </ul>
</div>
@endif

  <form action="{{ route('contact-form') }}" method="post">
      @csrf
    <div class="form-group">
      <label for="name">Введите имя</label>
      <input type="text" name="name" placeholder="Введите имяs" id="name" class="form-control">
    </div>

    <div class="form-group">
      <label for="email">Email</label>
      <input type="text" name="email" placeholder="Введите почту" id="email" class="form-control">
    </div>

    <div class="form-group">
      <label for="subject">Тема сообщения</label>
      <input type="text" name="subject" placeholder="Введите тему сообщения" id="subject" class="form-control">
    </div>

    <div class="form-group">
      <label for="message">Сообщение</label>
      <textarea name="message" id="message" class="form-control"></textarea>
    </div>
    <button type="submit" class="btn btn-success">Отправить</button>
  </form>

@endsection
