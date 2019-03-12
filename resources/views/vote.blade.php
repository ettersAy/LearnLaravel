@extends('template')

@section('contenu')
    <br>
    <div class="col-sm-offset-4 col-sm-4">
        <div class="panel panel-info">
            <div class="panel-heading">{{ $survey['title'] }}</div>
            <div class="panel-body">
                {!! Form::open(['url' => 'sondage/vote/' . $idSurvey]) !!}
                    <div class="form-group {!! $errors->has('email') ? 'has-error' : '' !!}">
                        {!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Votre email']) !!}
                        {!! $errors->first('email', '<small class="help-block">:message</small>') !!}
                    </div>

                    @foreach ($survey['choices'] as $idChoice => $choice)
                        {!! Form::radio('idChoice', $idChoice, false) !!}
                        {!! Form::label($choice, ucfirst($choice)) !!}<br>
                    @endforeach

                    {!! Form::submit('Envoyer !', ['class' => 'btn btn-info pull-right']) !!}
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection