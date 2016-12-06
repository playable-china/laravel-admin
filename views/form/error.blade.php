@if($errors->has($name))
    @foreach($errors->get($name) as $message)
        <label class="control-label" for="inputError"><i class="fa fa-times-circle-o"></i>{{$message}}</label></br>
    @endforeach
@endif
