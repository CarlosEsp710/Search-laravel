<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Busqueda y Filtrado</title>

    <!--Styles-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!--Scripts-->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous">
    </script>

</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="page-header">
                    <h1>
                        Búsqueda de usuarios
                        {!! Form::open(['route' => 'users', 'method' => 'GET', 'class' => 'form-inline pull-right']) !!}
                        <div class="form-group">
                            {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nombre']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'Email']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::text('bio', null, ['class' => 'form-control', 'placeholder' => 'Bio']) !!}
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-default">
                                <span class="glyphicon glyphicon-search"></span>
                            </button>
                        </div>
                        {!! Form::close() !!}
                    </h1>
                </div>
            </div>
            <div class="col-md-8">
                <table class="table table-hover table-striped">
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->bio }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $users->links('pagination::bootstrap-4') }}
            </div>
        </div>
    </div>
</body>

</html>
