
<x-layout>
  <x-slot name="title">
    <title>All Blogs</title>
  </x-slot>
  <section> 
    @foreach ($blogs as $blog)
      <div class="bg-dark">
        <h2>
          <a href="/blogs/{{ $blog->slug }}">
            {{ $blog->title }}
          </a>
        </h2>
        <p class="data">
          Category : <a class="cate" href="categories/{{ $blog->category->slug }}">
            {{ $blog->category->name }}
          </a><br>
          Published at : <span class="time">
            {{ $blog->created_at->format('d M Y') }}
          </span><br>
          Author : <a class="name" href="users/{{ $blog->user->name }}">
            {{ $blog->user->name }}
          </a>
        </p>
        <p class="para">{{ $blog->body }}</p>
      </div>
    @endforeach
  </section>
</x-layout>
