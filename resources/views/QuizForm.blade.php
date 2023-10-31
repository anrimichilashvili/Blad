<form method="POST" action="{{ route('quizzes.store', isset($quiz) ? $quiz->id : null) }}">
    @csrf
    @if(isset($quiz))
        @method('PUT')
    @endif

    <input type="text" name="title" value="{{ isset($quiz) ? $quiz->title : '' }}" placeholder="Quiz Title">
    <textarea name="description" placeholder="Description">{{ isset($quiz) ? $quiz->description : '' }}</textarea>
    <button type="submit">{{ isset($quiz) ? 'Update Quiz' : 'Create Quiz' }}</button>
</form>