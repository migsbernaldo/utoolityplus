@include('nav')

<div class="container mt-4">

    @if(session('success_message_profile'))
        <div class="alert alert-success">
            {{ session('success_message_profile') }}
        </div>
    @endif

    @if(session('info_message_profile'))
        <div class="alert alert-danger">
            {{ session('info_message_profile') }}
        </div>
    @endif

    <form id="updateProfileForm" action="{{ route('profile.update') }}" method="POST" class="border-box-form">
    <h2>Your Profile</h2>

        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" name="name" class="form-control" value="{{ old('name', $user->name) }}" required>
        </div>

        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" name="email" class="form-control" value="{{ old('email', $user->email) }}" required>
        </div>

        @error('name')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        @error('email')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <button type="submit" class="btn btn-primary">Update Profile</button>
    </form>




    <form id="changePasswordForm" action="{{ route('password.update') }}" method="POST" class="border-box-form">
    <h2>Change Password</h2>

        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="old_password">Old Password:</label>
            <input type="password" name="old_password" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="new_password">New Password:</label>
            <input type="password" name="new_password" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="new_password_confirmation">Confirm New Password:</label>
            <input type="password" name="new_password_confirmation" class="form-control" required>
        </div>

        @error('old_password')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        @error('new_password')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        @error('new_password_confirmation')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        @if(session('success_message_password'))
        <div class="alert alert-success">
            {{ session('success_message_password') }}
        </div>
        @endif

        <button type="submit" class="btn btn-danger">Change Password</button>
    </form>
</div>



<style>
    .border-box-form {
    border: 1px solid #ced4da; /* Border color */
    border-radius: 10px; /* Border radius for rounded corners */
    padding: 20px; /* Adjust padding as needed */
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Box shadow for floating effect */
    background-color: #FFFFFF;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
    margin-bottom: 20px
}

body {
    background-color: #ecedee;
}
</style>
