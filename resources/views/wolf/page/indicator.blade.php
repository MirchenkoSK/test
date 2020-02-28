@extends('wolf.base')
@section('title', 'Indicators')
@section('content')
    <h1 class="component-header">Indicators</h1>

    <div class="component">
    	<div class="alert alert-dismissible alert-warning">
			<button type="button" class="close" data-dismiss="alert">&times;</button>
			<h4 class="alert-heading">Warning!</h4>
			<p class="mb-0">Best check yo self, you're not looking too good. Nulla vitae elit libero, a pharetra augue. Praesent commodo cursus magna, <a href="#" class="alert-link">vel scelerisque nisl consectetur et</a>.</p>
		</div>
    </div>

    <div class="component">
    	<pre>&lt;div class="alert alert-dismissible alert-warning"&gt;
  &lt;button type="button" class="close" data-dismiss="alert"&gt;&amp;times;&lt;/button&gt;
  &lt;h4 class="alert-heading"&gt;Warning!&lt;/h4&gt;
  &lt;p class="mb-0"&gt;Best check yo self, you're not looking too good. Nulla vitae elit libero, a pharetra augue. Praesent commodo cursus magna, &lt;a href="#" class="alert-link"&gt;vel scelerisque nisl consectetur et&lt;/a&gt;.&lt;/p&gt;
&lt;/div&gt;</pre>
    </div>

    <div class="component">
    	<div class="alert alert-dismissible alert-danger">
			<button type="button" class="close" data-dismiss="alert">&times;</button>
			<strong>Oh snap!</strong> <a href="#" class="alert-link">Change a few things up</a> and try submitting again.
		</div>
    </div>

    <div class="component">
    	<pre>&lt;div class="alert alert-dismissible alert-danger"&gt;
  &lt;button type="button" class="close" data-dismiss="alert"&gt;&amp;times;&lt;/button&gt;
  &lt;strong&gt;Oh snap!&lt;/strong&gt; &lt;a href="#" class="alert-link"&gt;Change a few things up&lt;/a&gt; and try submitting again.
&lt;/div&gt;</pre>
    </div>

    <div class="component">
    	<div class="alert alert-dismissible alert-success">
			<button type="button" class="close" data-dismiss="alert">&times;</button>
			<strong>Well done!</strong> You successfully read <a href="#" class="alert-link">this important alert message</a>.
		</div>
    </div>

    <div class="component">
    	<pre>&lt;div class="alert alert-dismissible alert-success"&gt;
  &lt;button type="button" class="close" data-dismiss="alert"&gt;&amp;times;&lt;/button&gt;
  &lt;strong&gt;Well done!&lt;/strong&gt; You successfully read &lt;a href="#" class="alert-link"&gt;this important alert message&lt;/a&gt;.
&lt;/div&gt;</pre>
    </div>

    <div class="component">
    	<div class="alert alert-dismissible alert-info">
			<button type="button" class="close" data-dismiss="alert">&times;</button>
			<strong>Heads up!</strong> This <a href="#" class="alert-link">alert needs your attention</a>, but it's not super important.
		</div>
    </div>

    <div class="component">
    	<pre>&lt;div class="alert alert-dismissible alert-info"&gt;
  &lt;button type="button" class="close" data-dismiss="alert"&gt;&amp;times;&lt;/button&gt;
  &lt;strong&gt;Heads up!&lt;/strong&gt; This &lt;a href="#" class="alert-link"&gt;alert needs your attention&lt;/a&gt;, but it's not super important.
&lt;/div&gt;</pre>
    </div>

    <div class="component">
    	<div class="alert alert-dismissible alert-primary">
			<button type="button" class="close" data-dismiss="alert">&times;</button>
			<strong>Oh snap!</strong> <a href="#" class="alert-link">Change a few things up</a> and try submitting again.
		</div>
    </div>

    <div class="component">
    	<pre>&lt;div class="alert alert-dismissible alert-primary"&gt;
  &lt;button type="button" class="close" data-dismiss="alert"&gt;&amp;times;&lt;/button&gt;
  &lt;strong&gt;Oh snap!&lt;/strong&gt; &lt;a href="#" class="alert-link"&gt;Change a few things up&lt;/a&gt; and try submitting again.
&lt;/div&gt;</pre>
    </div>

    <div class="component">
    	<div class="alert alert-dismissible alert-secondary">
			<button type="button" class="close" data-dismiss="alert">&times;</button>
			<strong>Well done!</strong> You successfully read <a href="#" class="alert-link">this important alert message</a>.
		</div>
    </div>

    <div class="component">
    	<pre>&lt;div class="alert alert-dismissible alert-secondary"&gt;
  &lt;button type="button" class="close" data-dismiss="alert"&gt;&amp;times;&lt;/button&gt;
  &lt;strong&gt;Well done!&lt;/strong&gt; You successfully read &lt;a href="#" class="alert-link"&gt;this important alert message&lt;/a&gt;.
&lt;/div&gt;</pre>
    </div>

    <div class="component">
    	<div class="alert alert-dismissible alert-light">
			<button type="button" class="close" data-dismiss="alert">&times;</button>
			<strong>Heads up!</strong> This <a href="#" class="alert-link">alert needs your attention</a>, but it's not super important.
		</div>
    </div>

    <div class="component">
    	<pre>&lt;div class="alert alert-dismissible alert-light"&gt;
  &lt;button type="button" class="close" data-dismiss="alert"&gt;&amp;times;&lt;/button&gt;
  &lt;strong&gt;Heads up!&lt;/strong&gt; This &lt;a href="#" class="alert-link"&gt;alert needs your attention&lt;/a&gt;, but it's not super important.
&lt;/div&gt;</pre>
    </div>

    <div class="component">
    	<span class="badge badge-primary">Primary</span>
		<span class="badge badge-secondary">Secondary</span>
		<span class="badge badge-success">Success</span>
		<span class="badge badge-danger">Danger</span>
		<span class="badge badge-warning">Warning</span>
		<span class="badge badge-info">Info</span>
		<span class="badge badge-light">Light</span>
		<span class="badge badge-dark">Dark</span>
    </div>

    <div class="component">
    	<pre>&lt;span class="badge badge-primary"&gt;Primary&lt;/span&gt;
&lt;span class="badge badge-secondary"&gt;Secondary&lt;/span&gt;
&lt;span class="badge badge-success"&gt;Success&lt;/span&gt;
&lt;span class="badge badge-danger"&gt;Danger&lt;/span&gt;
&lt;span class="badge badge-warning"&gt;Warning&lt;/span&gt;
&lt;span class="badge badge-info"&gt;Info&lt;/span&gt;
&lt;span class="badge badge-light"&gt;Light&lt;/span&gt;
&lt;span class="badge badge-dark"&gt;Dark&lt;/span&gt;</pre>
    </div>

    <div class="component">
    	<span class="badge badge-pill badge-primary">Primary</span>
	<span class="badge badge-pill badge-secondary">Secondary</span>
	<span class="badge badge-pill badge-success">Success</span>
	<span class="badge badge-pill badge-danger">Danger</span>
	<span class="badge badge-pill badge-warning">Warning</span>
	<span class="badge badge-pill badge-info">Info</span>
	<span class="badge badge-pill badge-light">Light</span>
	<span class="badge badge-pill badge-dark">Dark</span>
    </div>

    <div class="component">
    	<pre>&lt;span class="badge badge-pill badge-primary"&gt;Primary&lt;/span&gt;
&lt;span class="badge badge-pill badge-secondary"&gt;Secondary&lt;/span&gt;
&lt;span class="badge badge-pill badge-success"&gt;Success&lt;/span&gt;
&lt;span class="badge badge-pill badge-danger"&gt;Danger&lt;/span&gt;
&lt;span class="badge badge-pill badge-warning"&gt;Warning&lt;/span&gt;
&lt;span class="badge badge-pill badge-info"&gt;Info&lt;/span&gt;
&lt;span class="badge badge-pill badge-light"&gt;Light&lt;/span&gt;
&lt;span class="badge badge-pill badge-dark"&gt;Dark&lt;/span&gt;</pre>
    </div>
@endsection