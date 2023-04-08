<table class="table table-bordered table-responsive">
  <tr>
    <th>NAMESPACE</th>
    <th>VISITAS</th>
    <th>LINK</th>
    <th>SHORTLINK</th>
    <th></th>
  </tr>
  @foreach($list as $item)
  <tr>
    <td>{{$item->namespace}}</td>
    <td>{{$item->visits->count()}}</td>
    <td title="{{$item->target}}">{{substr($item->target, 0, 24)}}</td>
    <td><a href="{{$item->generateShortLink()}}">{{ $item->generateShortLink() }}</a></td>
    <td>
      <form method="POST" action="{{ url('/links/'.$item->id) }}">
        @method("DELETE")
        @csrf

        <input type="hidden" value="{{$item->id}}" name="id">
        <button type="submit">Eliminar</button>
      </form>
    </td>
  </tr>
  @endforeach
</table>
