<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Laravel')
<img src="{{asset('dist/img/logo.png')}}" class="logo" style="height: auto !important; width: 100% !important;" alt="Laravel Logo">
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
