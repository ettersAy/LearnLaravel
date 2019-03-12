@extends('template')

@section('contenu')
    <br>
    <div class="col-sm-offset-3 col-sm-6">
        <div class="panel panel-info">
            <div class="panel-heading">{{ $survey['title'] }}</div>
            <div class="panel-body">
                Merci d'avoir participer a ce sondage. Voici les resultats actuels:<br>

            @foreach($survey['choices'] as $idChoice => $choice )
                    <br> {{ $choice }}
                    <div class="progress">
                        <div class="progress-bar" role="progressbar"
                             style="width: {{ $survey['results'][$idChoice] }}%;"
                             aria-valuenow="{{ $survey['results'][$idChoice] }}"
                             aria-valuemin="0" aria-valuemax="100">{{ $survey['results'][$idChoice] }}%</div>
                    </div>
                @endforeach
            </div>
        </div>
        <a href="http://monblog.local/sondage/"
           class="btn btn-primary btn-lg"
           role="button" aria-pressed="true">
            Retour Accueil
        </a>
    </div>
@endsection