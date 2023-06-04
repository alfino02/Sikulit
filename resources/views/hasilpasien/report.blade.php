<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        #hasilpasien {
          font-family: Arial, Helvetica, sans-serif;
          border-collapse: collapse;
          width: 100%;
        }
        
        #hasilpasien td, #hasilpasien th {
          border: 1px solid #ddd;
          padding: 8px;
        }
        
        #hasilpasien tr:nth-child(even){background-color: #f2f2f2;}
        
        #hasilpasien tr:hover {background-color: #ddd;}
        
        #hasilpasien th {
          padding-top: 12px;
          padding-bottom: 12px;
          text-align: left;
          background-color: #04AA6D;
          color: white;
        }
        </style>
</head>

<body>
    <table id="hasilpasien">
        <th>Id User</th>
        <th>Id Penyakit</th>
        @forelse ($hasilpasien as $item)
                        <tr>
                            <td>{{$item->user->nama_user }}</td>
                            <td>{{ $item->penyakit->nama_penyakit}}</td>
                        </tr>
                    @empty
                    @endforelse
    </table>
</body>
</html>