<div>
    <h3>{!! $question->question !!}</h3>
    <hr/>

    @if($question->questionType->description == 'Rating (1-5)')
        <div class="alert alert-info">
            <div class="form-inline">
                @foreach($choices as $choice)
                    <label class="radio-inline">
                        {{--{!! Form::radio($fieldname.$question->id, Input::old($fieldname.$question->id) == $choice) !!} {!! $choice !!}--}}
                        <input type="radio" name="{!! $fieldname.$question->id !!}" value="{!! $choice !!}" @if(Input::old($fieldname.$question->id) == $choice) checked @endif>{!!$choice!!}
                    </label>
                @endforeach
            </div>
        </div>

    @elseif($question->questionType->description == 'Essay')
    <div class="alert alert-info">
        <div class="form-inline">
                <!-- Question_type Form Input -->
                <div class="form-group">
                    {!! Form::textarea($fieldname.$question->id, null, ['class' => 'form-control', 'size' => '128x10']) !!}
                </div>
        </div>
    </div>

    @endif


</div>