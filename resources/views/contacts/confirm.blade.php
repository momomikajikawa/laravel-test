<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>お問い合わせ - 確認</title>
</head>

<body>
    <div class="container">
        <h1>内容確認</h1>
        <div class="container">
            {!! Form::open(['route' => 'process', 'method' => 'POST']) !!}
                {{ csrf_field() }}
                <div class="form-group">
                    <p class="tytle"">お名前</p>
                </div>

                <div class="form-group">
                    <p class="tytle">性別</p>
                </div>

                <div class="form-group">
                    <p class="tytle">メールアドレス</p>
                </div>

                <div class="form-group">
                    <p class="tytle">郵便番号</p>
                </div>

                <div class="form-group">
                    <p class="tytle">住所</p>
                </div>

                <div class="form-group">
                    <p class="tytle">建物名</p>
                </div>

                <div class="form-group">
                    <p class="tytle">ご意見</p>
                </div>



                <div class="btn-container">
                  <div class="btn">
                    <button name="action" type="submit" value="submit" class="btn btn-primary">送信</button>
                    <br>
                    <button name="action" type="submit" value="return" class="btn btn-dark">修正する</button>
                    </div>            
                </div>
            {!! Form::close() !!}
        </div>
    </div>
</body>
</html>