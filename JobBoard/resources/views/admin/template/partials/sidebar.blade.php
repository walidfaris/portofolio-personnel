<div class="bg-white" id="sidebar-wrapper">
    <div class="sidebar-heading text-center py-4 primary-text fs-4 fw-bold text-uppercase border-bottom"><i
            class="fas fa-user-secret me-2"></i>Epitech</div>
    <div class="list-group list-group-flush my-3">
        <a href="#" class="list-group-item list-group-item-action bg-transparent second-text active"><i
                class="fas fa-tachometer-alt me-2"></i>Dashboard</a>
        <a href="/" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                 class="fas fa-home me-2"></i>Home</a>
        <a href="{{route('advertisements.index')}}" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                class="fas fa-project-diagram me-2"></i>advertisement</a>

        <a href="{{route('informations.index')}}" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                class="fas fa-project-diagram me-2"></i>information</a>
       
        <a href="{{ route('signout') }}" class="list-group-item list-group-item-action bg-transparent text-danger fw-bold"><i
                class="fas fa-power-off me-2"></i>Logout</a>
</div>
</div>
