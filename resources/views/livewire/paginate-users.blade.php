
<div>
    <table>
    @foreach ($users as $user)
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
    </table>
        {{ $users->links() }}
</div>
