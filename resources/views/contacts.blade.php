@php
    $myContact = [
        'name' => 'Marco',
        'surname' => 'Pisani',
        'email' => 'marco.pisani@email.com',
    ];
    
@endphp



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MY PORFOLIO</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <script src="	https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body class="bg-dark">
    <div class="container mt-5">

        <h1 class="mb-5 text-center text-info fw-bold">MY CONTACTS</h1>

        <table class="table table-success table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">cognome </th>
                    <th scope="col">Email</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td class="text-danger fw-bold">{{ $myContact['name'] }}</td>
                    <td class="text-danger fw-bold">{{ $myContact['surname'] }}</td>
                    <td class="text-danger fw-bold">{{ $myContact['email'] }}</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>auhasaddfaffahaa@gmail.it</td>
                </tr>

            </tbody>
        </table>



    </div>
</body>

</html>

@php
    
@endphp
