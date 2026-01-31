<!DOCTYPE html>
<html>
<head>
    <title>Send SMS</title>
</head>
<body>
    <h2>Send SMS</h2>

    @if(session('message'))
        <p>{{ session('message') }}</p>
    @endif

        {{-- Mobile number entry and OTP sending --}}
        <form method="post" action="{{ route('send-sms') }}">
            @csrf
            <label for="mobile">Enter Mobile Number:</label>
            <input type="text" id="mobile" name="mobile" required>
            <button type="submit">Send OTP</button>
        </form>
    
</body>
</html>
