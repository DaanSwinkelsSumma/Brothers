Beste <strong>{{ $name }}</strong>,
<br><br>
@if ($aantal > 1)
    Ik wil graag {{ $aantal }} van {{ $productname }} bestellen.
@else
    Ik wil graag {{ $productname }} bestellen.
@endif
<p>{{$body}}</p>
