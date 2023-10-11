<x-layout title="{!! $blog->title !!}">
    <div class="middle-body-detail">
        <div class="details-body">
            <div class="title-head">
                {!! $blog->title !!}
            </div>
            <div class="excerpt-head">
                {!! $blog->content !!}
            </div>
        </div>
        <div class="comments">
            <div class="comment-head">
                Comments
            </div>
            @auth
            <form method="POST" action="/comment/{{$blog->id}}" style="display: flex;flex-direction:column;align-items:flex-start">
                @csrf
                <textarea name="comment" id="comment" class="details-t" required placeholder="Write comment..." rows="3"></textarea>
                @error('comment')
                    <div class="message">{{ $message }}</div>
                @enderror
                <button
                    style="margin-top: 10px;margin-left:5px;width:150px;height:40px;background-color:rgb(236, 232, 232);border-radius:20px;"
                    type="submit">Add Comment</button>
            </form>
            @endauth
            @if ($comment->count() > 0)
                <ul style="list-style:disc;">
                    @foreach ($comment as $review)
                        <li class="comment-head">
                            <div style="display:flex;flex-direction:row;width:100%;">
                                By {{ $review->user->firstName }} {{ $review->user->lastName }}
                                @auth
                                    @if ($review->user->id === auth()->id())
                                        <span style="display:flex;flex-direction:row;">
                                            <a href={{ '/' . $review->user->username . '/editComment' . '/' . $review->id }}
                                                style="font-size:14px;margin-left:20px"><i class="fa fa-pencil"
                                                    aria-hidden="true"></i></a>
                                            <form method="POST" action="/deleteComment/{{ $review->id }}"
                                                style="font-size:14px;margin-left:10px;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"> <i class="fa fa-trash" aria-hidden="true"></i>
                                                </button>
                                            </form>
                                        </span>
                                    @endif
                                @endauth
                            </div>
                            <div class="comment-data">
                                {!! $review->comment !!}
                            </div>
                        </li>
                    @endforeach
                </ul>
                <div style="height: 100px;margin-top:50px">
                    {{ $comment->links() }}
                </div>
            @endif
        </div>
    </div>

</x-layout>
