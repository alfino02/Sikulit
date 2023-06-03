<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        #user {
          font-family: Arial, Helvetica, sans-serif;
          border-collapse: collapse;
          width: 100%;
        }
        
        #user td, #user th {
          border: 1px solid #ddd;
          padding: 8px;
        }
        
        #user tr:nth-child(even){background-color: #f2f2f2;}
        
        #user tr:hover {background-color: #ddd;}
        
        #user th {
          padding-top: 12px;
          padding-bottom: 12px;
          text-align: left;
          background-color: #04AA6D;
          color: white;
        }
        </style>
</head>

<body>
    <table id="user">
        <th>Nama</th>
        <th>Email</th>
        <th>Password</th>
        @foreach ($user as $report)
            
        
        <tr>
            <td>{{ $report->nama_user }}</td>
            <td>{{ $report->email }}</td>
            <td>{{ $report->password }}</td>
            <td>{{ $report->id_role }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>