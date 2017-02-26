
@extends('templates.home')
@section('content')
<article>
<center><div>
	<center><form>
	<center><table border="1" width="75%" align="center">
<tr>
<th><a href="tambah"><input type="button" value="Tambah"/></a>
</th>
</tr>
<tr>
	<td>No</td>
	<td>Nama</td>
	<td>Nim</td>
	<td>Alamat</td>
	<td>Aksi</td>
</tr>	
@foreach($dataList as $view)
<tr>
<td>{{$view->id}}</td>
<td>{{$view->nama}}</td>
<td>{{$view->nim}}</td>
<td>{{$view->alamat}}</td>
<td><a href="{{ URL::to('awal/edit/'.$view->id) }}"> Ubah</a>
<a href="{{ URL::to('awal/delete/'.$view->id) }}">Hapus</a></td>
</tr>
@endforeach
</table></center>
</form></center>
</div></center>
</article>

@stop