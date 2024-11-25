<!-- Sidebar -->
<aside class="bg-dark text-white p-3" style="width: 250px; height: 100vh; position: fixed;">
    <div class="text-center mb-4">
        <!-- Profile Picture -->
        <img src="{{ asset('uploads/users/01.jpg') }}" alt="Profile" class="rounded-circle" width="135" height="130">

        <h4 class="mt-3">Admin Name</h4>
        <p>admin@example.com</p>
    </div>

    <!-- Sidebar Links -->
    <ul class="nav flex-column">
        <li class="nav-item">
            <a href="{{ route('dashboard.home') }}" class="nav-link text-white">Tasks</a>
        </li>
        <li class="nav-item">
            <a href="{{ route('dashboard.create') }}" class="nav-link text-white">Add Task</a>
        </li>
        <li class="nav-item">
            <a href="settings.html" class="nav-link text-white">Settings</a>
        </li>
        <li class="nav-item">
            <a href="profile.html" class="nav-link text-white">Profile</a>
        </li>
        <li class="nav-item">
            <a href="login.html" class="nav-link text-white">Logout</a>
        </li>
    </ul>
</aside>


