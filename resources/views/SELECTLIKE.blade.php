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
    @foreach($filterDatas as $filterData)
        <tr>
            <td>{{$filterData->nis}}</td>
            <td>{{$filterData->nama}}</td>
            <td>{{$filterData->id_kelas}}</td>
        </tr>
    
    <@endforeach
 


</table>
</body>
</html>