<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
    <a href="{{route('course.index')}}" class="navbar-brand d-flex align-items-center text-center py-0 px-4 px-lg-5">
        <h1 class="m-0 text-primary">E-learning</h1>
    </a>
    <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto p-4 p-lg-0">

            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Categories</a>
                <div class="dropdown-menu rounded-0 m-0">
                    <a href="{{route('category.index')}}" class="dropdown-item">All Categories</a>
                    <a href="{{route('category.create')}}" class="dropdown-item">Create Category</a>
                </div>
            </div>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Courses</a>
                <div class="dropdown-menu rounded-0 m-0">
                    <a href="{{route('course.index')}}" class="dropdown-item">All Courses</a>
                    <a href="{{route('course.create')}}" class="dropdown-item">Create Course</a>
                </div>
            </div>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Contact</a>
                <div class="dropdown-menu rounded-0 m-0">
                    <a href="{{route('contact.index')}}" class="dropdown-item">All Contact</a>
                    
                </div>
            </div>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Instructor</a>
                <div class="dropdown-menu rounded-0 m-0">
                    <a href="{{route('instructor.index')}}" class="dropdown-item">All Instructors</a>
                    <a href="{{route('instructor.create')}}" class="dropdown-item">Create Instructor</a>
                </div>
            </div>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Service</a>
                <div class="dropdown-menu rounded-0 m-0">
                    <a href="{{route('service.index')}}" class="dropdown-item">All Services</a>
                    <a href="{{route('service.create')}}" class="dropdown-item">Create Service</a>
                </div>
            </div>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Testimonial</a>
                <div class="dropdown-menu rounded-0 m-0">
                    <a href="{{route('testimonial.index')}}" class="dropdown-item">All Testimonials</a>
                    <a href="{{route('testimonial.create')}}" class="dropdown-item">Create Testimonial</a>
                </div>
            </div>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">User</a>
                <div class="dropdown-menu rounded-0 m-0">
                    <a href="{{route('user.index')}}" class="dropdown-item">All Users</a>
                    <a href="{{route('user.create')}}" class="dropdown-item">Create User</a>
                </div>
            </div>


        </div>
    </div>
</nav>
<!-- Navbar End -->
