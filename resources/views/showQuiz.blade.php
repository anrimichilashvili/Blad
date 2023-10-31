<!DOCTYPE html>
<html>
<head>
    <title>Show Quiz</title>
</head>
<body>
    <h1>Show All Quizzes</h1>
    
    @if(count($quizzes) > 0)
        <ul>
            @foreach ($quizzes as $quiz)
                <li>
                    <h2>{{ $quiz->title }}</h2>
                    <p>{{ $quiz->description }}</p>
                </li>
            @endforeach
        </ul>
    @else
        <p>No quizzes found.</p>
    @endif
</body>
</html>
