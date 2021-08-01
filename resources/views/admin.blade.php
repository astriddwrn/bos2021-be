<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{route('logout')}}" method="POST" >
        @csrf
        <button>LOGOUT</button>
    </form>
    <table>
    <thead>
        <tr>
          <th >#</th>
          <th >Nama</th>
          <th >Kampus</th>
          <th >Jurusan</th>
          <th >No HP</th>
          <th >Line ID</th>
          <th >Jadwal BL</th>
          <th >Materi LnT</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($datas as $user)
          <tr>
              <td>{{($user->id)}}</td>
              <td>{{($user->name)}}</td>
              <td>{{($user->nim)}}</td>
              <td>{{($user->campus)}}</td>
              <td>{{($user->major)}}</td>
              <td>{{($user->whatsapp)}}</td>
              <td>{{($user->line_id)}}</td>
              {{-- <td>{{($user->schedule->date)}}</td> --}}
              <td>{{($user->lnt_course)}}</td>
              <td>
                <form action="{{route('download_payment', $user->id)}}"method="GET">
                    @csrf
                    <button type="submit" class="btn btn-outline-primary" style="width:100%">Download</button>
                </form>
              </td>
          </tr>
        @endforeach
      </tbody>
    </table>
</body>
</html>

</body>
</html>
