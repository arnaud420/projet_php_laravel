@extends('template')

@section('titre')
    Ajout de commentaire
@endsection

@section('contenu')

    <div class="row">
        <div class="form-horizontal col-md-8 col-md-offset-2">
            {!! Form::open(['route' => ['users.commentaires.store', $user]]) !!}
            <fieldset>
                <legend>Laisse un commentaire à {!! $user->prenom !!}</legend>
            </fieldset>

            <div class="form-group">
                {!! Form::label('auteur', 'Entre ton nom : ')  !!}
                {!! Form::text('auteur', null, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('contenu', 'Entre ton commentaire : ') !!}
                {!! Form::text('contenu', null, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::submit('Envoyer', ['class' => 'btn btn-primary pull-right']) !!}
            </div>

            {!! Form::close() !!}
        </div>
    </div>
@endsection