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

                    <form method="POST" action="{{ route('contact.store') }}">
                    @csrf
                        <label for="name">氏名</label>
                        <input type="text" name="name" id="name">
                        <br>
                        <label for="title">件名</label>
                        <input type="text" name="title" id="title">
                        <br>
                        <label for="email">メールアドレス</label>
                        <input type="email" name="email" id="email">
                        <br>
                        <label for="url">ホームページ</label>
                        <input type="url" name="url" id="url">
                        <br>
                        <label for="gender">性別</label>
                        <input type="radio" name="gender" id="man" value="0">
                        <label for="man">男性</label>
                        <input type="radio" name="gender" id="woman" value="1">
                        <label for="woman">女性</label>
                        <br>
                        <label for="age">年齢</label>
                        <select name="age" id="age">
                            <option value="">選択してください</option>
                            <option value="1">~19歳</option>
                            <option value="2">20歳~29歳</option>
                            <option value="3">30歳~39歳</option>
                            <option value="4">40歳~49歳</option>
                            <option value="5">50歳~59歳</option>
                            <option value="6">60歳~</option>
                        </select>
                        <br>
                        <label for="contact">お問い合わせ内容</label>
                        <textarea name="contact"></textarea>
                        <br>
                        <input type="checkbox" name="caution" id="1">
                        <label for="caution">注意事項にチェック入れてください。</label>
                        <br>
                        <input class="btn btn-info" type="submit" value="登録">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
