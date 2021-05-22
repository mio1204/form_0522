@extends('layouts.form')
<style>
  th {
    padding: 5px 30px;
  }

  td {
    padding: 5px 30px;
  }

  button {
    padding: 5px 10px;
  }

  .txtwin {
    width: 400px;
    line-height: 2;
  }
</style>
@section('title', 'index.blade.php')

<!-- 入力＋＋＋＋＋＋＋＋＋＋＋＋＋＋＋＋＋＋＋＋＋＋＋＋＋＋＋＋ -->
@section('form')
<form action="thanks" method="POST">
  <table>
    @csrf
    <tr>
      <td>
        氏名<br>
        <input type="text" name="name" class="txtwin">
      </td>
    </tr>
    <tr>
      <td>
        メールアドレス<br>
        <input type="text" name="email" class="txtwin">
      </td>
    </tr>
    <tr>
      <td>
        <button>送信する</button>
      </td>
    </tr>
  </table>
</form>
@endsection