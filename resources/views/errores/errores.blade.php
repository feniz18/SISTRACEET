@if($errors->any())
  <div class="alert alert-danger" role="alert">
      <p> @lang('sistra.corrijaErrores') </p>
      <ul>
        @foreach ($errors->all() as $error)

          <li>{{$error}}</li>

        @endforeach
      </ul>


  </div>


@endif
