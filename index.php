<!DOCTYPE html>
<html lang="ru">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

    <form action="action.php" method="post">
        <div class="form-group" >
            <h3>Подзаголовок</h3>
            <textarea class="form-control" id="main-subtitle" name="main-subtitle" rows="7"></textarea>
        <div class="form-group" >
            <h3>Новость 1</h3>
            <label for="exampleInputEmail1">Ссылка</label>
            <input  class="form-control" id="link1" name="arts['art1']['link']" placeholder="Ссылка">
            <label for="exampleFormControlTextarea1">Описание</label>
            <textarea class="form-control" id="text1" name="arts['art1']['text']" rows="7"></textarea>
            <label>Подзаголовок</label>
            <textarea class="form-control" id="subtitle1" name="arts['art1']['subtitle']" rows="3"></textarea>
        </div>
            <hr>
        <div class="form-group" >
            <h3>Новость 2</h3>
            <label for="exampleInputEmail2">Ссылка</label>
            <input  class="form-control" id="link2" name="arts['art2']['link']" placeholder="Ссылка">
            <label for="exampleFormControlTextarea2">Описание</label>
            <textarea class="form-control" id="text2" name="arts['art2']['text']" rows="7"></textarea>
            <label>Подзаголовок</label>
            <textarea class="form-control" id="subtitle2" name="arts['art2']['subtitle']" rows="3"></textarea>
        </div>
            <hr>
        <div class="form-group" >
            <h3>Новость 3</h3>
            <label for="exampleInputEmail3">Ссылка</label>
            <input  class="form-control" id="link3" name="arts['art3']['link']" placeholder="Ссылка">
            <label for="exampleFormControlTextarea3">Описание</label>
            <textarea class="form-control" id="text3" name="arts['art3']['text']" rows="7"></textarea>
            <label>Подзаголовок</label>
            <textarea class="form-control" id="subtitle3" name="arts['art3']['subtitle']" rows="3"></textarea>
        </div>
        <hr>
        <div class="form-group" >
            <h3>Новость 4</h3>
            <label for="exampleInputEmail4">Ссылка</label>
            <input  class="form-control" id="link4" name="arts['art4']['link']" placeholder="Ссылка">
            <label for="exampleFormControlTextarea4">Описание</label>
            <textarea class="form-control" id="text4" name="arts['art4']['text']" rows="7"></textarea>
            <label>Подзаголовок</label>
            <textarea class="form-control" id="subtitle4" name="arts['art4']['subtitle']" rows="3"></textarea>
        </div>
        <hr>
        <div class="form-group" >
            <h3>Новость 5</h3>
                <label for="exampleInputEmail5">Ссылка</label>
                <input  class="form-control" id="link5" name="arts['art5']['link']" placeholder="Ссылка">
                <label for="exampleFormControlTextarea5">Описание</label>
                <textarea class="form-control" id="text5" name="arts['art5']['text']" rows="7"></textarea>
                <label>Подзаголовок</label>
                <textarea class="form-control" id="subtitle5" name="arts['art5']['subtitle']" rows="3"></textarea>
        </div>
        <hr>
        <div class="form-group" >
            <h3>Новость 6</h3>
            <label for="exampleInputEmail6">Ссылка</label>
            <input  class="form-control" id="link6" name="arts['art6']['link']" placeholder="Ссылка">
            <label for="exampleFormControlTextarea6">Описание</label>
            <textarea class="form-control" id="text6" name="arts['art6']['text']" rows="7"></textarea>
            <label>Подзаголовок</label>
            <textarea class="form-control" id="subtitle6" name="arts['art6']['subtitle']" rows="3"></textarea>
        </div>
        <hr>
        <button type="submit" class="btn btn-primary">Готово</button>
    </form>
</div>




<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.2.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
</body>
</html>