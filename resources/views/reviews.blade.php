@foreach($reviews as $review)
<ul>
    <li>
        {{ $review->id }}
         <a href="/review/{{ $review->id }}" >{{ $review->name_author }}</a> (имя)<br>
         {{ $review->text_review }} (текст обзора) 
    </li>
</ul>
@endforeach

{{ $reviews->links() }}