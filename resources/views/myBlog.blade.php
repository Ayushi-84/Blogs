<x-layout title="My Blogs">
    @if ($blogs->count() > 0)
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
                        <div
                            style="display:flex;align-self:flex-end;justify-content: space-between;margin-right:10px;width:100%">
                            <a href={{ '/' . $blog->user->username . '/' . $blog->slug }}>Know
                                more</a>
                            <div>
                                <a href={{ '/' . $blog->user->username . '/edit' . '/' . $blog->slug }}
                                    style="font-size:16px;"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                <a href={{ '/' . $blog->user->username . '/delete' . '/' . $blog->slug }}
                                    style="font-size:16px;margin-left:10px"><i class="fa fa-trash"
                                        aria-hidden="true"></i></a>
                            </div>
                        </div>
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
