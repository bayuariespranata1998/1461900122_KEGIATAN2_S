<!DOCTYPE html>
<html>
<head>
<title>
    DATA siswa
</title>
</head>
<link rel="stylesheet" type="text/css" href="/CSS/main.css">
<body>
<table align="center" border="1">
    <tr>
    <th> NIS </th>
    <th> NAMA </th>
    <th> ID_Kelas </th>
    <th> KELAS </th>
    </tr>
    @foreach($Jws as $Jw)
        <tr>
            <td>{{$Jw->nis}}</td>
            <td>{{$Jw->nama}}</td>
            <td>{{$Jw->id_kelas}}</td>
            <td>{{$Jw->kelas}}</td>
        </tr>
    
    <@endforeach
 


</table>
</body>
</html>