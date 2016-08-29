@if (count($errors) > 0)
    <div class="alert alert-danger">
        <div class="text-center">
            <strong>¡Hubo un problema con tus datos!</strong><br><br>
        </div>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
