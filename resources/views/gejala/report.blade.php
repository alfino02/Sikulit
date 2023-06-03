<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        #gejala {
          font-family: Arial, Helvetica, sans-serif;
          border-collapse: collapse;
          width: 100%;
        }
        
        #gejala td, #gejala th {
          border: 1px solid #ddd;
          padding: 8px;
        }
        
        #gejala tr:nth-child(even){background-color: #f2f2f2;}
        
        #gejala tr:hover {background-color: #ddd;}
        
        #gejala th {
          padding-top: 12px;
          padding-bottom: 12px;
          text-align: left;
          background-color: #04AA6D;
          color: white;
        }
        </style>
</head>

<body>
    <table id="gejala">
        <th>Kode Gejala</th>
        <th>Nama Gejala</th>
        @foreach ($gejala as $report)
            
        
        <tr>
            <td>{{ $report->kode_gejala }}</td>
            <td>{{ $report->gejala }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>