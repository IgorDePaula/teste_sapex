<html>
<head>
    <title>Relatorio de phone</title>
</head>
<body>
<div>
    <form action="">
        <input type="text" name="name">
        <button>Buscar</button>
    </form>
</div>
<div>
    <table>
        <thead>
        <tr>
            <th>Nome</th>
            <th>Email</th>
            <th>Telefone</th>
            <th>Data</th>
            <th>CPF</th>
        </tr>
        </thead>
        <tbody>
        @foreach($data as $phone)
            <tr>
                <td>{{ $phone->name }}
                </td>
                <td>{{ $phone->email }}
                </td>
                <td>{{ $phone->telephone }}
                </td>
                <td>{{ $phone->birthday }}
                </td>
                <td>{{ $phone->cpf }}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
</body>
</html>
