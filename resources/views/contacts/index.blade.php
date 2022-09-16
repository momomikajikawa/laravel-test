<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>お問い合わせ</title>
    
</head>
<body>
    <div class="container">
        <h1>お問い合わせ</h1>
        <div class="container">
            {!! Form::open(['route' => 'confirm', 'method' => 'POST']) !!}
                {{ csrf_field() }}

        <div class="form-group">
            <p class="tytle">お名前<span>*</span></p>
            <div class="col-sm-8">
                {{ Form::text('name', null, ['class' => 'form-control']) }}
            </div>
            <div class="col-sm-8">
                {{ Form::text('name', null, ['class' => 'form-control']) }}
            </div>
        </div>

            @if ($errors->has('name'))
                <p class="alert alert-danger">{{ $errors->first('name') }}</p>
            @endif


        <div class="example">
            <div class="flex">
                <p class="xeample">例）山田</p>
                <p class="xeample">例）太郎</p>
            </div>
        </div>

        <div class="form-group">
            <p class="tytle">性別<span>＊</span></p>
            <div class="col-sm-8">
                <label>{{ Form::radio('gender', "男性") }}男性</label>
                <label>{{ Form::radio('gender', "女性") }}女性</label>
            </div>
        </div>

            <div class="form-group">
            <p class="tytle">メールアドレス<span>＊</span></p>
            <div class="col-sm-8">
                {{ Form::text('email', null, ['class' => 'form-control']) }}
            </div>
        </div>

        <div class="example">
            <p class="xeample">例）test＠example.com</p>
        </div>

        <div class="form-group">
            <p class="tytle">郵便番号<span>＊</span></p>
            <div class="col-sm-8">
                {{ Form::text('postcode', null, ['class' => 'form-control']) }}
            </div>
        </div>

        <div class="example">
            <p class="xeample">例）123-4567</p>
        </div>

        <div class="form-group">
            <p class="tytle">住所<span>＊</span></p>
            <p>〒</p>
            <div class="col-sm-8">
                {{ Form::text('address', null, ['class' => 'form-control']) }}
            </div>
        </div>

        <div class="example">
            <p class="xeample">例）東京都渋谷区千駄ヶ谷1-2-3</p>
        </div>

        <div class="form-group">
            <p class="tytle">建物名</p>
            <div class="col-sm-8">
                {{ Form::text('building', null, ['class' => 'form-control']) }}
            </div>
        </div>

        <div class="example">
            <p class="xeample">例）千駄ヶ谷マンション101
            </p>
        </div>

        <div class="form-group">
            <p class="tytle">ご意見<span>＊</span></p>
            <div class="col-sm-8">
                {{ Form::textarea('contents', null, ['class' => 'form-control']) }}
            </div>
        </div>
                
        <div class="btn-container">
            <div class="btn">
                {{ Form::submit('確認', ['class' => 'btn btn-primary']) }}
            </div>
        </div>


        {!! Form::close() !!}
        </div>
    </div>
</body>
</html>
