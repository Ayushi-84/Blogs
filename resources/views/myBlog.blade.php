<x-layout title="My Blogs">
    @if($blogs->count()>0)
    <div class="middle-body">
        <div class="grid-div">
            @foreach ($blogs as $blog)
                <div class="sub-grid">
                    <div class="img-head">
                        <img src="/images/language.jpg" style="width: 80%;height:90%" />
                    </div>
                    <div class="title-head">
                        {{ $blog->title }}
                    </div>
                    <div class="excerpt-head">
                        {{ $blog->excerpt }}
                    </div>
                    <a href={{ '/' . $blog->user->username . '/' . $blog->slug }}
                        style="display:flex;align-self:flex-end;justify-self: flex-end;margin-right:10px;">Know more</a>
                </div>
            @endforeach
        </div>
    </div>
    <div style="height: 100px;margin:50px">
        {{ $blogs->links() }}
    </div>
    @else
    <div class="no-post">
        <div>
       Oops! There is no post to show.
        </div>
       <div>
        Click on the plus button to add new post.
       </div>
    </div>
    @endif
</x-layout>
