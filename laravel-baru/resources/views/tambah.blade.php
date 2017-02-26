@extends('templates.home')
@section('content')
<article>
<center><div>
	<center><table width="60&" align="center">
<form  action="{{url('add/action')}}" method="post" >
    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
        <table>
		<center>
		<td colspan="3">TAMBAH DATA</td>
		</center>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>Nim</td>
                <td>:</td>
                <td><input type="text" name="nim"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td><textarea name="alamat"></textarea></td>
            </tr>
            <tr>
                <td colspan="3">
                    <button type="submit">Simpan</button>
                    <button type="reset">Batal</button>
                </td>
            </tr>

        </table>
    </form>
</div></center>
<article>
@stop

