@extends('layouts.app')

@section('content')
	<filter>
		<form action="">
			{{ csrf_field() }}
			<h5>Categorieën</h5>
			<label><input type="checkbox" name="category" value="drinken">Drinken</label>
			<label><input type="checkbox" name="category" value="eten">Eten</label>
			<label><input type="checkbox" name="category" value="ontspanning">Ontspanning</label>
		</form>
	</filter>
	<ul>
        @foreach($studentGuideItems as $studentGuideItem)
            <li>
                <a href="{{ $studentGuideItem->item_url }}">
                    <h5>{{ $studentGuideItem->name }}</h5>
                </a>
            </li>
        @endforeach
        {{ $studentGuideItems->links() }}
	</ul>
@endsection
