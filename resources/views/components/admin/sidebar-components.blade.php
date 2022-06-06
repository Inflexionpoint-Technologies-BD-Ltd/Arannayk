{{-- ---------------------------------------------------------------------------- Home ---------------------------------------------------------------------------------------- --}}

{{-- -------------------------------------------------- Services ------------------------------------------------------- --}}

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
    Home
</div>

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
       aria-expanded="true" aria-controls="collapseTwo">
        <i class="fas fa-fw fa-cog"></i>
        <span>Services</span>
    </a>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Components:</h6>
            <a class="collapse-item" href="{{ route('service.create') }}">Add Services</a>
            <a class="collapse-item" href="{{ route('service.index') }}">View All Services</a>
        </div>
    </div>
</li>


{{-- -------------------------------------------------- Services ------------------------------------------------------- --}}

{{-- -------------------------------------------------- Project ------------------------------------------------------- --}}

<!-- Heading -->
{{--<div class="sidebar-heading">--}}
{{--    Current Projects--}}
{{--</div>--}}

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseProjects"
       aria-expanded="true" aria-controls="collapseProjects">
        <i class="fas fa-fw fa-cog"></i>
        <span>Current Projects</span>
    </a>
    <div id="collapseProjects" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Components:</h6>
            <a class="collapse-item" href="{{ route('project.create') }}">Add Projects</a>
            <a class="collapse-item" href="{{ route('project.index') }}">View All Projects</a>
        </div>
    </div>
</li>

{{-- -------------------------------------------------- Project ------------------------------------------------------- --}}


{{-- ---------------------------------------------------------------------------- Home ---------------------------------------------------------------------------------------- --}}
