<x-layout title="{{ $blog->title }}">
    <div class="middle-body-detail">
        <div class="details-body">
            <div class="title-head">
                {{ $blog->title }}
            </div>
            <div class="excerpt-head">
                {{ $blog->content }}
            </div>
        </div>
        <div class="comments">
            <div class="comment-head">
                Comments
            </div>
            <form method="POST" action="/comment" style="display: flex;flex-direction:column;align-items:flex-start">
                @csrf
                <input name="user_id" id="user_id" hidden value={{ auth()->id() }} />
                <input name="posts_id" id="posts_id" hidden value={{ $blog->id }} />
                <textarea name="comment" id="comment" class="details-t" required placeholder="Write comment..." rows="3"></textarea>
                @error('comment')
                    <div class="message">{{ $message }}</div>
                @enderror
                <button
                    style="margin-top: 10px;margin-left:5px;width:150px;height:40px;background-color:rgb(236, 232, 232);border-radius:20px;"
                    type="submit">Add Comment</button>
            </form>
            @if ($blog->comments->count() > 0)
                <ul style="list-style:disc;">
                    @foreach ($blog->comments as $review)
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
                                {{ $review->comment }}
                            </div>
                        </li>
                    @endforeach
                </ul>
            @endif
        </div>
    </div>

</x-layout>
