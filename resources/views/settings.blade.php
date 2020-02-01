<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Quizz</title>
    <link rel="stylesheet" href="{{asset('font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('style.css')}}">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 m-auto">
                <div class="block mt-5">
                    <div class="block__header d-flex">
                        <a href="{{route('home')}}" class="block__header-item block__header-item--active text-center">
                            <i class="fa fa-puzzle-piece" aria-hidden="true"></i>
                        </a>
                        <a href="{{route('settings')}}" class="block__header-item block__header-item text-center">
                            <i class="fa fa-cogs" aria-hidden="true"></i>
                        </a>
                    </div>
                    <div class="p-3">
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="radio" id="radio1" value="1" {{$binary->value ? 'checked' : ''}}>
                          <label class="form-check-label" for="radio1">
                            Binary mode
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="radio" id="radio2" value="2" {{$binary->value ? '' : 'checked'}}>
                          <label class="form-check-label" for="radio2">
                            Multiple choice mode
                          </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.js"
 integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" ></script>
    <script>
        
        $('input[type=radio][name=radio]').change(function() {
            //console.log(this.value);
            location.href = '/settings/update';
        });

    </script>
</body>
</html>