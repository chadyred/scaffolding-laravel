
<div class="col-sm-offset-4 col-sm-4 mt-4">
    <div class="panel panel-info">
        <div class="panel-heading">Enregistrement</div>
        <div class="panel-body">
            @if(session()->has('error'))
                <div class="alert alert-danger">{!! session('error') !!}</div>
            @endif
            {!! Form::open(['route' => 'register_post', 'files' => false]) !!}
                <div class="form-group {!! $errors->has('image') ? 'has-error' : '' !!}">
                    {!! Form::email('email', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('email', '<small class="help-block">:message</small>') !!}
                </div>
                {!! Form::submit('S\'enregistrer !', ['class' => 'btn btn-info pull-right']) !!}
            {!! Form::close() !!}
        </div>
    </div>
</div>
