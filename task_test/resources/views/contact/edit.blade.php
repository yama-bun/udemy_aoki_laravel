@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    edit
                    <form method="POST" action="{{ route('contact.update', ['id' => $contact->id]) }}">
                        <label for="name">氏名</label>
                        <input type="text" name="name" id="name" value="{{ $contact->name }}">
                        <br>
                        <label for="title">件名</label>
                        <input type="text" name="title" id="title" value="{{ $contact->title }}">
                        <br>
                        <label for="email">メールアドレス</label>
                        <input type="email" name="email" id="email" value="{{ $contact->email }}">
                        <br>
                        <label for="url">ホームページ</label>
                        <input type="url" name="url" id="url" value="{{ $contact->url }}">
                        <br>
                        <label for="gender">性別</label>
                        <input type="radio" name="gender" id="man" value="0" @if ($contact->gender === 0) checked @endif>
                        <label for="man">男性</label>
                        <input type="radio" name="gender" id="woman" value="1" @if ($contact->gender === 1) checked @endif>
                        <label for="woman">女性</label>
                        <br>
                        <label for="age">年齢</label>
                        <select name="age" id="age">
                            <option value="">選択してください</option>
                            <option value="1" @if ($contact->age === 1) selected @endif>~19歳</option>
                            <option value="2" @if ($contact->age === 2) selected @endif>20歳~29歳</option>
                            <option value="3" @if ($contact->age === 3) selected @endif>30歳~39歳</option>
                            <option value="4" @if ($contact->age === 4) selected @endif>40歳~49歳</option>
                            <option value="5" @if ($contact->age === 5) selected @endif>50歳~59歳</option>
                            <option value="6" @if ($contact->age === 6) selected @endif>60歳~</option>
                        </select>
                        <br>
                        <label for="contact">お問い合わせ内容</label>
                        <textarea name="contact">{{ $contact->contact }}</textarea>
                        <br>
                        @csrf
                        <input class="btn btn-info" type="submit" value="更新">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
