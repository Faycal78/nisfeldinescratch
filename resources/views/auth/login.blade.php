<!-- resources/views/auth/login.blade.php -->

<form method="POST" action="{{ route('login') }}">
    <div style="background-color: #eee; padding: 10px; margin-bottom: 20px;">
        <strong>Session Data:</strong>
        @dump(session()->all())
    </div>
    
<!-- Afficher toutes les données de session -->


    @csrf
    
    <div>
        <label for="email">Email</label>
        <input type="email" id="email" name="email" value="{{ old('email') }}" required autofocus>
        
        <!-- Afficher les erreurs de validation pour l'email -->
        @error('email')
            <div style="color: red;">{{ $message }}</div>
        @enderror
    </div>
    
    <div>
        <label for="password">Password</label>
        <input type="password" id="password" name="password" required autocomplete="current-password">

        <!-- Afficher les erreurs de validation pour le mot de passe -->
        @error('password')
            <div style="color: red;">{{ $message }}</div>
        @enderror
    </div>

    <div>
        <button type="submit">Login</button>
    </div>
</form>

@if(session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif

<!-- Afficher les anciennes entrées (old input) -->
<div style="background-color: #eee; padding: 10px; margin-top: 20px;">
    <strong>Old Input Data:</strong>
    @dump(old())
</div>
