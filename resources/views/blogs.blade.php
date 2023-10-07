<x-layout title="All Blogs">
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
                     <a href={{"/$blog->slug"}} style="display:flex;align-self:flex-end;justify-self: flex-end;margin-right:10px;">Know more</a>
                    </div>
                @endforeach
            </div>
        </div>
</x-layout>
