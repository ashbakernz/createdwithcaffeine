@extends('layouts.app')

@section('styles')

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
            <a>
                Add Discussion
            </a>
        </li>
    </ul>
          <div class="columns">

          <!-- DISPLAY USERS -->
          <div class="column is-10">
            <div class="card is-fullwidth">
              <header class="card-header">
                <p class="card-header-title">Add new video</p>
              </header>
              <div class="card-content">
                <form action="/discussions/save" method="POST">
                {{ csrf_field() }}
                  <div class="control is-horizontal">
                    <div class="control">
                      <input required name="discussionTitle" class="input" placeholder="Please enter discussion title"></input>
                    </div>
                  </div>
                  <div class="control is-horizontal">
                    <div class="control">
                      <div class="select is-fullwidth">
                        <select required name="discussionChannel">
                          <option value="Not Selected">Select Channel</option>
                          <option value="CSS">CSS</option>
                          <option value="laravel">Laravel</option>
                          <option value="misc">Misc</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="control is-horizontal">
                    <div class="control">
                      <textarea required name="discussionContent" class="textarea" placeholder="What do you need to discuss?"></textarea>
                    </div>
                  </div>
                  <div class="control is-horizontal">
                    <button type="submit" style="color: #69707a;" class="button-add-task">
                      <span class="icon"><i class="ion-ios-checkmark-outline"></i></span>
                      <span>Save</span>
                    </button>
                  </div>
              </div>
            </div>
          </div>
            <div class="column">
             <aside class="menu">
               <div class="box">
                 <ul class="menu-list">
                  </form>
                   <li style="padding-top: 5px;">
                    <a style="color: #69707a;" href="{{ url('/discussions') }}" class="button-add-task">
                      <span class="icon"><i class="ion-ios-close-outline"></i></span>
                      <span>Cancel</span>
                    </a>
                  </li>
                </ul>
              </ul>
            </div>
          </aside>
        </div>
      </div>
    </div>
  </section>

@endsection
