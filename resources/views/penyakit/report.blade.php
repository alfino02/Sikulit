<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        #penyakit {
          font-family: Arial, Helvetica, sans-serif;
          border-collapse: collapse;
          width: 100%;
        }
        
        #penyakit td, #penyakit th {
          border: 1px solid #ddd;
          padding: 8px;
        }
        
        #penyakit tr:nth-child(even){background-color: #f2f2f2;}
        
        #penyakit tr:hover {background-color: #ddd;}
        
        #penyakit th {
          padding-top: 12px;
          padding-bottom: 12px;
          text-align: left;
          background-color: #04AA6D;
          color: white;
        }
        </style>
</head>

<body>
    <table id="penyakit">
        <th>Nama Penyakit</th>
        <th>Deskripsi Penyakit</th>
        <th>Id Obat</th>
        @foreach ($penyakit as $report)
            
        
        <tr>
            <td>{{ $report->nama_penyakit }}</td>
            <td>{{ $report->deskripsi_penyakit}}</td>
            <td>{{ $report->id_obat}}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>