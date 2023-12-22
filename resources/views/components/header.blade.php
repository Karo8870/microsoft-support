<header>
    <div>
        <img src="img/logo.png" alt="logo">
        <a href="{{ url('/') }}">Home</a>
        <a href="{{ url('/contact') }}">Contact</a>
        <a href="{{ url('/about') }}">About</a>
        <a href="{{ url('/give-info') }}">Computer repair</a>
    </div>
    <button onclick="window.location.href = `{{ url('/home') }}`">ADMIN (not click)</button>
</header>
