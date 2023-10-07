<x-layout title="{{$blog->title}}">
        <div class="middle-body">
            <div class="details-body">
            <div class="title-head">
                {{$blog->title}}
            </div>
            <div class="excerpt-head">
                {{$blog->content}}
            </div>
            </div>
        </div>
</x-layout>
