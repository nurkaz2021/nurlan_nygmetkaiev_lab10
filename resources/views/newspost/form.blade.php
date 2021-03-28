@extends('layouts.app')

@section('content')
    <form style="width: 300px; margin: 10px auto" method="post" action="{{route('save_newspost', ['lang' => \App::getLocale()])}}">
        {{ csrf_field() }}
        <div class="form-control">
        <select style="margin:10px; padding:0px; width: 100%" id="lang" name="lang">
            <option value="en" @if (\App::getLocale() == 'en')selected="selected" @endif >En</option>
            <option value="fr" @if (\App::getLocale() == 'fr')selected="selected" @endif>Fr</option>
        </select>
        </div>
        <div class="form-control">
            <input style="margin:10px; padding:0px; width: 100%" id="title" placeholder="@lang("content.title")" type="text" name="title">
        </div>
        <div class="form-control">
            <textarea style="margin:10px; padding:0px; width: 100%" id="teaser" placeholder="@lang("content.teaser")" name="teaser" rows="3"></textarea>
        </div>
        <div class="form-control">
            <textarea style="margin:10px; padding:0px;  width: 100%" id="content" placeholder="@lang("content.content")" name="content" rows="3"></textarea>
        </div>
        <div class="form-control">
            <input style="margin:10px auto; padding:0px;  width: 30%" id="content" type="submit" value="@lang("content.submit")">
        </div>
    </form>
@endsection