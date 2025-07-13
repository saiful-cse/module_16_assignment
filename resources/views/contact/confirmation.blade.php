<!DOCTYPE html>
<html>
<head>
    <title>Confirmation</title>
</head>
<body>
    @if (session('success'))
        <div style="color:green;">
            <strong>{{ session('success') }}</strong>
        </div>
    @endif

    <h3>Your Submitted Information:</h3>
    <ul>
        <li><strong>Name:</strong> {{ $data['name'] ?? '' }}</li>
        <li><strong>Email:</strong> {{ $data['email'] ?? '' }}</li>
        <li><strong>Message:</strong> {{ $data['message'] ?? '' }}</li>
    </ul>
</body>
</html>
