<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reporte de Categorías</title>
    <style>
        body {
            font-family: 'Georgia', serif;
            margin: 0;
            padding: 0;
            background-color: #f8f9fa;
            color: #2c3e50;
            line-height: 1.6;
            font-size: 16px;
        }

        header {
            background-color: #4a4a4a;
            color: white;
            padding: 20px 0;
            text-align: center;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
        }

        h1 {
            margin: 0;
            font-size: 2em;
        }

        main {
            padding: 40px 20px;
            max-width: 1000px;
            margin: 0 auto;
        }

        #currentDateTime {
            text-align: center;
            font-size: 1.1em;
            margin-bottom: 25px;
            color: #4a4a4a;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background-color: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }

        thead {
            background-color: #4a4a4a;
            color: white;
        }

        th,
        td {
            padding: 15px;
            text-align: left;
            border-bottom: 1px solid #dddddd;
        }

        th {
            text-transform: uppercase;
            font-weight: bold;
            font-size: 1em;
        }

        tr:hover {
            background-color: #f1f1f1;
            transition: background-color 0.3s ease;
        }

        footer {
            background-color: #4a4a4a;
            color: white;
            text-align: center;
            padding: 15px 0;
            position: fixed;
            width: 100%;
            bottom: 0;
            box-shadow: 0 -2px 4px rgba(0, 0, 0, 0.2);
            font-size: 1em;
        }

        @media screen and (max-width: 600px) {
            body {
                font-size: 14px;
            }

            th,
            td {
                padding: 10px;
            }
        }
    </style>
</head>

<body>
    <header>
        <h1>Reporte de Categorías</h1>
    </header>
    <main>
        <div id="currentDateTime"></div>
        <table>
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Descripción</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categorias as $item)
                    <tr>
                        <td>{{ $item->nombre }}</td>
                        <td>{{ $item->descripcion }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </main>
    @push('js')
        <script>
            function updateDateTime() {
                var now = new Date();
                var options = {
                    weekday: 'long',
                    year: 'numeric',
                    month: 'long',
                    day: 'numeric',
                    hour: '2-digit',
                    minute: '2-digit',
                    second: '2-digit',
                    hour12: true
                };
                var formattedDateTime = now.toLocaleDateString('es-ES', options);
                document.getElementById('currentDateTime').textContent = formattedDateTime;
            }

            updateDateTime();
            setInterval(updateDateTime, 1000);
        </script>
    @endpush
</body>

</html>
