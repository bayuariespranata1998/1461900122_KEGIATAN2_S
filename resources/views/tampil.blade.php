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
    </tr>
    @foreach($siswas as $siswa)
        <tr>
            <td>{{$siswa->nis}}</td>
            <td>{{$siswa->nama}}</td>
            <td>{{$siswa->id_kelas}}</td>
        </tr>
    
    <@endforeach
 


</table>
</body>
</html>