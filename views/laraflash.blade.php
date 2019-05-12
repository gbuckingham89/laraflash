@if(Session::has('laraflash.message'))
    <div class="alert alert-{{ Session::get('laraflash.level') }}">
        <button title="Hide" type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        {!! Session::get('laraflash.message') !!}
    </div>
@endif