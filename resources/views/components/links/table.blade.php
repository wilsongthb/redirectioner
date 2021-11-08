<table class="table table-bordered table-responsive">
  <tr>
    <th>NAMESPACE</th>
    <th>LINK</th>
    <th>SHORTLINK</th>
  </tr>
  @foreach($list as $item)
  <tr>
    <td>{{$item->namespace}}</td>
    <td title="{{$item->target}}">{{substr($item->target, 0, 24)}}</td>
    <td><a href="{{$item->generateShortLink()}}">{{ $item->generateShortLink() }}</a></td>
  </tr>
  @endforeach
</table>
