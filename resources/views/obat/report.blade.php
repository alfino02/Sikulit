<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        #obat {
          font-family: Arial, Helvetica, sans-serif;
          border-collapse: collapse;
          width: 100%;
        }
        
        #obat td, #obat th {
          border: 1px solid #ddd;
          padding: 8px;
        }
        
        #obat tr:nth-child(even){background-color: #f2f2f2;}
        
        #obat tr:hover {background-color: #ddd;}
        
        #obat th {
          padding-top: 12px;
          padding-bottom: 12px;
          text-align: left;
          background-color: #04AA6D;
          color: white;
        }
        </style>
</head>

<body>
    <table id="obat">
        <th>Nama Obat</th>
        <th>Deskripsi Obat</th>
        @foreach ($obat as $report)
            
        
        <tr>
            <td>{{ $report->nama_obat }}</td>
            <td>{{ $report->deskripsi_obat}}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>