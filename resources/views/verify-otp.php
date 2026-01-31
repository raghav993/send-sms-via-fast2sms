<!DOCTYPE html>
<html>
<head>
    <title>OTP Verification</title>
</head>
<body>
    <h2>OTP Verification</h2>

    @if(session('message'))
        <p>{{ session('message') }}</p>
    @endif

    @if(empty(session('verification')))
        {{-- Mobile number entry and OTP sending --}}
        <form method="post" action="{{ route('send-otp') }}">
            @csrf
            <label for="mobile">Enter Mobile Number:</label>
            <input type="text" id="mobile" name="mobile" required>
            <button type="submit">Send OTP</button>
        </form>
    @else
        {{-- OTP verification --}}
        <form method="post" action="{{ route('verify-otp') }}">
            @csrf
            <label for="otp">Enter OTP:</label>
            <input type="text" id="otp" name="otp" required>
            <input type="hidden" name="mobile" value="{{ session('verification')['mobile'] }}">
            <button type="submit">Verify OTP</button>
        </form>
    @endif
</body>
</html>
