@extends('layouts.app')

@section('content')
	<filter>
		<form method="get" action="{{ route('studentengids') }}">
			{{ csrf_field() }}
			<h5>Categorieën</h5>
			<label>
                <input type="checkbox" class="category" name="drinken" @if(isset($selectedCategories[0])) checked @endif>
				Drinken
            </label>
			<label>
                <input type="checkbox" class="category" name="eten" @if(isset($selectedCategories[1])) checked @endif>
				Eten
            </label>
			<label>
                <input type="checkbox" class="category" name="ontspanning" @if(isset($selectedCategories[2])) checked @endif>
				Ontspanning
            </label>
            {{--<input type="submit" id="submit" style="display:none;">--}}
		</form>
	</filter>
	<ul>
        @foreach($studentGuideItems as $studentGuideItem)
            <li>
                <a href="{{ $studentGuideItem->item_url }}">
                    <h5>{{ $studentGuideItem->name }}</h5>
                    <h5>{{ $studentGuideItem->category }}</h5>
					@php
						$words = explode(' ', $studentGuideItem->description);
					@endphp
					@if(count($words) > 25)
						@php
							array_splice($words, 25);
							$kort = implode(' ', $words);
						@endphp
						<p>{{ $kort }} ...</p>
					@else
						<p>{{ $studentGuideItem->description }}</p>
					@endif
                </a>
            </li>
        @endforeach
	</ul>
	{{ $studentGuideItems->links() }}
    {{--<script>--}}
        {{--let categories = document.getElementsByClassName('category');--}}

        {{--for(let i = 0; i < categories.length; i++) {--}}
            {{--categories[i].addEventListener('click', submitForm);--}}
        {{--}--}}

        {{--function submitForm(event) {--}}
            {{--document.getElementById('submit').click();--}}
        {{--}--}}
    {{--</script>--}}
@endsection
