@extends('layouts.app')

@section('title', __('Page not found'))

@section('content')
<!-- Sub-Header -->
<section class="hero sub-header">
	<div class="container inactive">
		<div class="sh-title-wrapper">
			<h1>@lang('Page not found')</h1>
			<a href="/" target="blank" class="button border round cta">@lang('Go Home')</a>
		</div>
	</div>
</section>
@endsection
