<!DOCTYPE html>
<html>
<head>
    <title>Testing Route</title>
</head>
<body>
    <h1>Testing HTTP Method</h1>
    <hr>
    <h2>GET</h2>
    <a href="{{ route('landing.index') }}">
        GET /landing
    </a>
    <hr>
    <h2>POST</h2>
    <form action="{{ route('landing.store') }}" method="POST">
        @csrf
        <button type="submit">
            POST /landing
        </button>
    </form>
    <hr>
    <h2>PUT</h2>
    <form action="{{ route('landing.update', 1) }}" method="POST">
        @csrf
        @method('PUT')
        <button type="submit">
            PUT /landing/1
        </button>
    </form>
    <hr>
    <h2>PATCH</h2>
    <form action="{{ route('landing.patch', 1) }}" method="POST">
        @csrf
        @method('PATCH')
        <button type="submit">
            PATCH /landing/1
        </button>
    </form>
    <hr>
    <h2>DELETE</h2>
    <form action="{{ route('landing.delete', 1) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">
            DELETE /landing/1
        </button>
    </form>
</body>
</html>
