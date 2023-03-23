@extends('layouts.main')

@section('title', 'Criar Evento')

@section('content')

<div id="event-create-container" class="col-md-6 offset-md-3">
  <h1>Crie seu evento</h1>
  <form action="/events" method="post">
    @csrf
    <div class="form-group">
      <label for="title">Nome do evento:</label>
      <input placeholder="Nome" type="text" name="title" id="title" class="form-control">
    </div>
    <div class="form-group">
      <label for="city">Local do evento:</label>
      <input placeholder="Cidade" type="text" name="city" id="city" class="form-control">
    </div>
    <div class="form-group">
      <label for="private">Privado?</label>
      <select name="private" id="private">
        <option value="0">Não</option>
        <option value="1">Sim</option>
      </select>
    </div>
    <div class="form-group">
      <label for="description">Evento:</label>
      <textarea name="description" id="description"></textarea>
    </div>
    <input type="submit" class="btn btn-primary">
  </form>
</div>

@endsection
