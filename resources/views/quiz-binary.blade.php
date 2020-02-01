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
    <div class="modal fade" id="confirmModal" tabindex="-1" role="dialog" aria-labelledby="confirmModal" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <!-- <h5 class="modal-title" id="exampleModalLabel">Modal title</h5> -->
                <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button> -->
            </div>
            <div class="modal-body">
                Lorem ipsum dolor sit amet consectetur adipisicing.
            </div>
            <div class="modal-footer">
                <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
                <button id="nextQuestion" type="button" class="btn btn-primary">next</button>
            </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-4 m-auto">
                <div class="block mt-5">
                    <div class="block__header d-flex">
                        <a href="{{route('home')}}" class="block__header-item {{isset($binary) ? 'block__header-item--active' : 'block__header-item'}} text-center">
                            <i class="fa fa-puzzle-piece" aria-hidden="true"></i>
                        </a>
                        <a href="{{route('settings')}}" class="block__header-item {{!isset($binary) ? 'block__header-item--active' : 'block__header-item'}} text-center">
                            <i class="fa fa-cogs" aria-hidden="true"></i>
                        </a>
                    </div>
                    @for($i = 0; $i < count($questions); $i++) <!--for $i = 0 (first) question to be active -->
                    @php $answer = $questions[$i]->getRandomAnswer(); @endphp
                    <div class="block__content {{$i == 0 ? 'active' : ''}}" data-id="{{$questions[$i]->id}}">
                        <div>
                            <h2 class="block__title">{{$questions[$i]->title}}</h2>
                            <div class="block__question">
                                {!! $questions[$i]->text !!}
                            </div>
                            <h2 class="block__answer">{{$answer->text}}?</h2>
                        </div>
                        
                        <div class="d-flex justify-content-between">
                            <button class="btn-yes-no block__answer-item" type="button" data-toggle="modal" data-target="#confirmModal" data-correct="1" data-question-id="{{$questions[$i]->id}}" data-answer-id="{{$answer->id}}">
                                Yes
                            </button>
                            <button class="btn-yes-no block__answer-item block__answer-item--no" type="button" data-toggle="modal" data-target="#confirmModal" data-correct="0" data-question-id="{{$questions[$i]->id}}" data-answer-id="{{$answer->id}}">
                                No
                            </button>
                        </div>
                    </div>
                    @endfor
                    <div class="block__content result">
                        <div class="d-flex flex-column justify-content-center">
                            <div id="final-result" class="pb-2 text-center">Final Result</div>
                            <button class="try-btn">Try Again</button>
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
        $(function() {
            let nextBtn = $('#nextQuestion');

            nextBtn.click(function() {
                const currentActive = $('.block__content.active');
                currentActive.removeClass('active');
                currentActive.next().addClass('active');
                $('#confirmModal').modal('toggle');
                
            });

            $('.try-btn').click(function() {
                //console.log('asd')
                location.reload();
            })

        })
    </script>
    <script>
      let counter = 0;
      $(document).on('click', '.btn-yes-no', function(){
            $.ajax({
              type: "POST",
              url: "{{route('check_binary')}}",
              data: {
                    "question_id": $(this).data('question-id'),
                    "answer_id": $(this).data('answer-id'),
                    "correct": $(this).data('correct'),
                    "_token": "{{ csrf_token() }}"
                },
              success: function(data){
                $('.modal-body').html(data.content);
                if(data.isCorrect) counter++;
                $('#final-result').html('You have ' + counter + ' correct answers from 10')
              }
            });
          });
    </script>
</body>
</html>