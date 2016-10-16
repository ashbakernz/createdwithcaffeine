@extends('layouts.app')

@section('styles')
<style type="text/css">
  .showme{
  display: none;
  }
  .showhim:hover .showme{
  display : block;
  }

</style>
@endsection

@section('content')
<section class="hero is-primary">
  <div class="hero-body">
    <div class="container">
      <div class="columns is-vcentered">
        <div class="column">
          <p class="title">
            Discussions
          </p>
          <p class="subtitle">
            If your having <strong>trouble </strong> try ask for help
          </p>
        </div>
      </div>
    </div>
  </div>

  <div class="hero-foot">
    <div class="container">
      <nav class="tabs is-boxed is-centered">
        <ul>
          <li>
            <a href="{{ url('/home') }}">
              <span class="icon">
                  <i class="ion-clock"></i>
              </span>
              Activity
            </a>
          </li>
          <li>
            <a href="{{ url('/categories') }}">
              <span class="icon">
                  <i class="ion-ios-list"></i>
              </span>
              Categories
            </a>
          </li>
          <li class="is-active">
            <a href="{{ url('/discussions') }}">
              <span class="icon">
                  <i class="ion-chatboxes"></i>
              </span>
              Discussions
            </a>
          </li>
        </ul>
      </nav></div>
    </div>
    </div>
</section>
<section class="section main">
    <div class="container">

    <ul class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{{ url('/discussions') }}">
                Discussions
            </a>
        </li>

        <li class="breadcrumb-item">
            <a href="{{ url('/discussion/' . $discussion->id) }}">
                {{ $discussion-> title }}
            </a>
        </li>
    </ul>
      <div class="columns">
<!--         <div class="column is-4">
          <div class="box">
            <aside class="menu">
              <p class="menu-label">
                Channels
              </p>
              <ul class="menu-list">
                <li><a class="is-active" href="url('/discussions')">All</a></li>
                <li><a href="#">CSS</a></li>
                <li><a href="#">Laravel</a></li>
                <li><a href="#">Vuejs</a></li>
                <li><a href="#">Misc</a></li>
              </ul>
            </aside>
          </div>
        </div> -->
        <div class="column is-1">
        </div>
        <div class="column is-10">
          <div class="card is-fullwidth">
            <header class="card-header">
              <p class="card-header-title">
                {{ $discussion-> title }}
              </p>

              @if($discussion->channels == 'Not Selected')
              <!-- echo nothing -->
              @else
              <a class="card-header-text">
                <span class="tag is-{{ $discussion->channels }}">{{ $discussion-> channels }}
                </span>
              </a>
              @endif

              <div class="dropdown pull-right">
                <a href="javascript:void(0)" class="card-header-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="ion-arrow-down-b" aria-hidden="true"></i>
                </a>
                <div class="dropdown-menu" aria-labelledby="dLabel">
                  <a class="dropdown-item" href="#">
                    <span class="icon is-primary">
                      <i class="ion-edit"></i>
                    </span>
                    Edit
                  </a>
                  <a class="dropdown-item" href="{{ url('/discussion/delete/' . $discussion->id) }}">
                    <span class="icon is-primary">
                      <i class="ion-ios-close"></i>
                    </span>
                    Delete
                  </a>
                </div>
              </div>
            </header>
            <div class="card-content">
              <div class="content">
                {{ $discussion-> content }}s
                <br>
                <small>{{ $discussion->created_at->diffForHumans() }}</small>
              </div>
            </div>
          </div>
        </div>

        <div class="column is-1">
        </div>
        </a>
        </div>
        <div class="columns">
          <div class="column is-1">

          </div>
          <div class="column is 10">

            @foreach($discussion->discussionReplies as $reply)
              <div class="box">
                @if($reply->user_id == Auth::User()->id)
                <div class="head">
                  <div class="options">

                    <div class="dropdown pull-right">
                      <a href="javascript:void(0)" class="card-header-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="ion-arrow-down-b" aria-hidden="true"></i>
                      </a>
                      <div class="dropdown-menu" aria-labelledby="dLabel">
                        <a class="dropdown-item" href="#">
                          <span class="icon is-primary">
                            <i class="ion-edit"></i>
                          </span>
                          Edit
                        </a>
                        <a class="dropdown-item" href="{{ url('/reply/delete/' . $reply->id . '/' . $discussion->id) }}">
                          <span class="icon is-primary">
                            <i class="ion-ios-close"></i>
                          </span>
                          Delete
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
                @else
                @endif
                    <article class="media">
                      <div class="media-content">
                        <div class="content">
                          <p>
                            <strong>{{ $reply->user_name }}</strong>
                            </small>
                            <br>
                            {{ $reply->content }}
                            <br>
                            <small>{{ $reply->created_at->diffForHumans() }}</small>
                          </p>
                        </div>
                      </div>
                    </article>
              </div>
            @endforeach
          </div>
          <div class="column is-1">

          </div>
        </div>
        <div class="columns">
          <div class="column is-1"></div>
          <div class="column is-10">
          <div class="box">
          <form action="/reply/add" method="POST">
            {{ csrf_field() }}
            <article class="media">
              <figure class="media-left">
                <p class="image is-64x64 circular-square">
                  <img src="../uploads/avatars/{{ Auth::user()->avatar }}">
                </p>
              </figure>
              <div class="media-content">
                <p>
                  <input type="hidden" name="discussion_id" value="{{ $discussion-> id }}">
                </p>
                <p class="control">
                  <textarea required name="content" class="textarea" placeholder="Add a comment..."></textarea>
                </p>
                <p class="control">
                  <button type="submit" class="button">Post comment</button>
                </p>
              </div>
            </article>
            </form>
            </div>
          </div>
          <div class="column is-1"></div>
        </div>

      </div>
    </div>
  </section>
@endsection

@section('scripts')



@endsection
