@extends('layouts.form')
<style>
  th {
    padding: 5px 30px;
  }

  td {
    padding: 5px 30px;
    text-align: center;
  }

  button {
    padding: 10px 20px;
  }

  .txtwin {
    width: 400px;
    line-height: 2;
  }
</style>
@section('title', 'index.blade.php')

<!-- 入力＋＋＋＋＋＋＋＋＋＋＋＋＋＋＋＋＋＋＋＋＋＋＋＋＋＋＋＋ -->
@section('form')
<form action="/create" method="POST">
  <table>
    @csrf
    <tr>
      <td>
        <input type="text" name="name" class="txtwin">
      </td>
      <td>
        <input type="text" name="email" class="txtwin">
      </td>
      <td>
        <button>送信</button>
      </td>
    </tr>
  </table>
</form>
@endsection