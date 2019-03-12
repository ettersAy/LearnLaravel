@extends('template')

@section('contenu')
    <br>
    <div class="col-sm-offset-4 col-sm-4">
        <div class="panel panel-info">
            <div class="panel-heading">Liste des sondages</div>
            <div class="panel-body">
                <a href="http://monblog.local/sondage/vote/evaluation"
                   class="btn btn-primary btn-lg btn-block"
                   role="button" aria-pressed="true">
                    Que pensez vous de ce site?
                </a>
                <a href="http://monblog.local/sondage/vote/preference"
                   class="btn btn-primary btn-lg btn-block"
                   role="button" aria-pressed="true">
                    Quel est votre langage prefere?
                </a>
            </div>
        </div>
    </div>
@endsection