<!DOCTYPE html> 
<html lang="en"> 
<head> 
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Daftar Mahasiswa</title> 
</head> 
<body> 
    <table border="1"> 
        <tr> 
            <th>Nama</th> 
            <th>NIM</th> 
            <th>Jurusan</th> 
        </tr> 
        @foreach ($data as $mhs) 
            <tr> 
                <td>{{ $mhs->nama }}</td> 
                <td>{{ $mhs->nim }}</td> 
                <td>{{ $mhs->jurusan }}</td> 
            </tr> 
        @endforeach 
    </table> 
</body> 
</html>
