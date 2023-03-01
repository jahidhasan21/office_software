<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
    <form method="post" action="/login" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="form-group row">
            <label>Email</label>
            <div>
                <input name="email" type="email" id="email" placeholder="Email">
            </div>
        </div>
        <div class="form-group row">
            <label>password</label>
            <div>
                <input name="password" type="password" id="password" placeholder="password">
            </div>
        </div>
        <div>
            <div>
                <button type="submit">Login</button>
            </div>
        </div>
    </form>
    </div>
</body>
</html>