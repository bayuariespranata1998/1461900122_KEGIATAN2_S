<!DOCTYPE html>
<html>
<head>
<title>
    DATA siswa
</title>
<link rel="stylesheet" type="text/css" href="/CSS/main.css">
</head>
<body>
<table align="center" border="1">
    <tr>
    <th> NIS </th>
    <th> NAMA </th>
    <th> ID_Kelas </th>
    <th> KELAS </th>
    </tr>
    @foreach($users as $user)
        <tr>
            <td>{{$user->nis}}</td>
            <td>{{$user->nama}}</td>
            <td>{{$user->id_kelas}}</td>
            <td>{{$user->kelas}}</td>
        </tr>
    
    <@endforeach
 


</table>
</body>
</html>