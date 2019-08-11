Sidebar --}}
<div class="sidebar-fixed position-fixed h-100 white z-depth-1" style="z-index: 1031; min-width: 200px;">

  <div class="list-group list-group-flush">
    <a class="list-group-item  waves-effect navbar-brand">
      <h3>Quizzer</h3>
    </a>
    {{-- <a href="{{ route('dashboard') }}" class="list-group-item list-group-item-action waves-effect border-0 {{ request()->routeIs('dashboard*') ? 'active bg-secondary' : '' }}"> --}}
    <a href="{{ route('dashboard') }}" class="list-group-item list-group-item-action waves-effect border-0 {{ setActive('dashboard') }}">
      <i class="fas fa-chart-bar mr-3"></i>Dashboard
    </a>
    <a href="{{ route('course.index') }}" class="list-group-item list-group-item-action waves-effect border-0 {{ setActive('course.*') }}">
      <i class="fas fa-book-reader mr-3"></i>Courses
    </a>
    <a href="{{ route('chapter.index') }}" class="list-group-item list-group-item-action waves-effect border-0 {{ setActive('chapter*') }}">
      <i class="far fa-sticky-note mr-3"></i>Chapters
    </a>
     <a href="{{ route('chapter.index') }}" class="list-group-item list-group-item-action waves-effect border-0">
      <i class="far fa-file-alt mr-3"></i>Content
    </a>
    <a href="{{ route('questions.index') }}" class="list-group-item list-group-item-action waves-effect border-0 {{ setActive('questions*') }}">
      <i class="far fa-question-circle mr-3"></i>Questions
    </a>
     <a href="{{ route('dashboard') }}" class="list-group-item list-group-item-action waves-effect border-0">
      <i class="fas fa-tools mr-3"></i>Settings
    </a>
    <a href="{{ route('trash') }}" class="list-group-item list-group-item-action waves-effect border-0 {{ setActive('trash') }}">
      <i class="far fa-trash-alt mr-3"></i>Trash Can
    </a>
{{--     <a href="#" class="list-group-item list-group-item-action waves-effect border-0">
      <i class="fas fa-user mr-3"></i>Profile
    </a>
    <a href="#" class="list-group-item list-group-item-action waves-effect border-0">
      <i class="fas fa-table mr-3"></i>Tables
    </a>
    <a href="#" class="list-group-item list-group-item-action waves-effect border-0">
      <i class="fas fa-map mr-3"></i>Maps
    </a>
    <a href="#" class="list-group-item list-group-item-action waves-effect border-0">
      <i class="fas fa-money-bill-alt mr-3"></i>Orders
    </a> --}}
  </div>

</div>
{{-- Sidebar