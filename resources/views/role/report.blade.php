<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        #role {
          font-family: Arial, Helvetica, sans-serif;
          border-collapse: collapse;
          width: 100%;
        }
        
        #role td, #role th {
          border: 1px solid #ddd;
          padding: 8px;
        }
        
        #role tr:nth-child(even){background-color: #f2f2f2;}
        
        #role tr:hover {background-color: #ddd;}
        
        #role th {
          padding-top: 12px;
          padding-bottom: 12px;
          text-align: left;
          background-color: #04AA6D;
          color: white;
        }
        </style>
</head>

<body>
    <table id="role">
        <th>Role</th>
        @foreach ($role as $report)
            
        
        <tr>
            <td>{{ $report->role }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>