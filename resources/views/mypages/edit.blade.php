@extends('layouts.mypage')
@section('title', 'DailyUseItems')
@section('content')
<div class="container">
    <form action="/item/{{ $item->id }}/edit" method="POST">
        @csrf
        <legend class="shadow-sm p-2 mb-2 bg-white rounded">Edit Item</legend>
        <fieldset>
            <div class="form-group col-md-4">
                <label for="category">カテゴリー</label>
                <input class="form-control is-valid" id="category" name="category" type="text" placeholder="category" value="{{ $item->category }}" required>
            </div>
            <div class="form-group col-md-4">
                <label for="name">品名</label>
                <input class="form-control is-valid" id="name" name="name" type="text" placeholder="name" value="{{ $item->name }}" required>
            </div>
            <div class="form-group col-md-2">
                <label for="stock">ストック</label>
                <input class="form-control is-valid" id="stock" name="stock" type="number" min="0" max="999" placeholder="stock" value="{{ $item->stock }}" aria-describedby="stockHelpBlock" required>
                <small id="stockHelpBlock" class="form-text text-muted">
                    0-999
                </small>
            </div>
            <div class="form-group">
                <div class="col-md-3">
                    <label for="dateopen">開封日</label>
                    <input class="form-control is-valid" id="dateopen" name="dateopen" type="date" placeholder="dateopen" value="{{ $item->dateopen->format('Y-m-d') }}" required>
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-3">
                    <label for="datelastopen">前回開封日</label>
                    <input class="form-control" id="datelastopen" name="datelastopen" type="date" placeholder="datelastopen" value="{{ $item->datelastopen->format('Y-m-d') }}">
                </div>
            </div>
            <button type="submit" class="btn btn-success col-md-2 mb-1">
                <i class="fas fa-edit"></i>更新
            </button>
            <a class="btn btn-secondary col-md-2 mb-1" href="/">
               <i class="fas fa-window-close"></i>キャンセル
            </a>
        </fieldset>
    </form>
</div>
@endsection
