
<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }
        
        td, th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }
        
        tr:nth-child(even) {
            background-color: #dddddd;
        }
    </style>
</head>
<body>
    Beste <strong>{{ $name }}</strong>,
    <br><br>
    <h3>Bestelling:</h3> 
        <table class="table">
            <thead>
                <tr>
                <th scope="col">Productnaam</th>
                <th scope="col">Aantal</th>
                <th scope="col">Prijs</th>
                </tr>
            </thead>
            <tbody>
                @foreach($products  as $id => $product)
                    <tr>
                        <th>{{ $product['naam'] }}</th>
                        <td>{{ $product['aantal'] }}</td>
                        <td>€ {{ $product['prijs'] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    <p>{{$body}}</p>
        
</body>
</html>
