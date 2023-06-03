<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        #aturan {
          font-family: Arial, Helvetica, sans-serif;
          border-collapse: collapse;
          width: 100%;
        }
        
        #aturan td, #aturan th {
          border: 1px solid #ddd;
          padding: 8px;
        }
        
        #aturan tr:nth-child(even){background-color: #f2f2f2;}
        
        #aturan tr:hover {background-color: #ddd;}
        
        #aturan th {
          padding-top: 12px;
          padding-bottom: 12px;
          text-align: left;
          background-color: #04AA6D;
          color: white;
        }
        </style>
</head>

<body>
    <table id="aturan">
        <th>Id Penyakit</th>
        <th>Id Gejala</th>
        @foreach ($aturan as $report)
            
        
        <tr>
            <td>{{ $report->nama_penyakit }}</td>
            <td>
                @foreach ($report->gejala as $item)
                <ul>
                    <li>{{ $item->gejala }}</li>
                </ul>
                @endforeach
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>