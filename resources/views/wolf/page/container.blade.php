@extends('wolf.base')
@section('title', 'Containers')
@section('content')
    <h1 class="component-header">Containers</h1>

    <div class="component">
    	<div class="jumbotron">
			<h1 class="display-3">Hello, world!</h1>
			<p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
			<hr class="my-4">
			<p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
			<p class="lead">
				<a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
			</p>
		</div>
    </div>

    <div class="component">
    	<pre>&lt;div class="jumbotron"&gt;
  &lt;h1 class="display-3"&gt;Hello, world!&lt;/h1&gt;
  &lt;p class="lead"&gt;This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.&lt;/p&gt;
  &lt;hr class="my-4"&gt;
  &lt;p&gt;It uses utility classes for typography and spacing to space content out within the larger container.&lt;/p&gt;
  &lt;p class="lead"&gt;
    &lt;a class="btn btn-primary btn-lg" href="#" role="button"&gt;Learn more&lt;/a&gt;
  &lt;/p&gt;
&lt;/div&gt;</pre>
    </div>

    <div class="component">
    	<ul class="list-group">
			<li class="list-group-item d-flex justify-content-between align-items-center">
				Cras justo odio
				<span class="badge badge-primary badge-pill">14</span>
			</li>
			<li class="list-group-item d-flex justify-content-between align-items-center">
				Dapibus ac facilisis in
				<span class="badge badge-primary badge-pill">2</span>
			</li>
			<li class="list-group-item d-flex justify-content-between align-items-center">
				Morbi leo risus
				<span class="badge badge-primary badge-pill">1</span>
			</li>
		</ul>
    </div>

    <div class="component">
    	<pre>&lt;ul class="list-group"&gt;
  &lt;li class="list-group-item d-flex justify-content-between align-items-center"&gt;
    Cras justo odio
    &lt;span class="badge badge-primary badge-pill"&gt;14&lt;/span&gt;
  &lt;/li&gt;
  &lt;li class="list-group-item d-flex justify-content-between align-items-center"&gt;
    Dapibus ac facilisis in
    &lt;span class="badge badge-primary badge-pill"&gt;2&lt;/span&gt;
  &lt;/li&gt;
  &lt;li class="list-group-item d-flex justify-content-between align-items-center"&gt;
    Morbi leo risus
    &lt;span class="badge badge-primary badge-pill"&gt;1&lt;/span&gt;
  &lt;/li&gt;
&lt;/ul&gt;</pre>
    </div>

    <div class="component">
    	<div class="list-group">
			<a href="#" class="list-group-item list-group-item-action active">Cras justo odio</a>
			<a href="#" class="list-group-item list-group-item-action">Dapibus ac facilisis in</a>
			<a href="#" class="list-group-item list-group-item-action disabled">Morbi leo risus</a>
		</div>
    </div>

    <div class="component">
    	<pre>&lt;div class="list-group"&gt;
  &lt;a href="#" class="list-group-item list-group-item-action active"&gt;
    Cras justo odio
  &lt;/a&gt;
  &lt;a href="#" class="list-group-item list-group-item-action"&gt;Dapibus ac facilisis in
  &lt;/a&gt;
  &lt;a href="#" class="list-group-item list-group-item-action disabled"&gt;Morbi leo risus
  &lt;/a&gt;
&lt;/div&gt;</pre>
    </div>

    <div class="component">
		<div class="list-group">
			<a href="#" class="list-group-item list-group-item-action flex-column align-items-start active">
				<div class="d-flex w-100 justify-content-between">
					<h5 class="mb-1">List group item heading</h5>
					<small>3 days ago</small>
				</div>
				<p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
				<small>Donec id elit non mi porta.</small>
			</a>
			<a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
				<div class="d-flex w-100 justify-content-between">
					<h5 class="mb-1">List group item heading</h5>
					<small class="text-muted">3 days ago</small>
				</div>
				<p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
				<small class="text-muted">Donec id elit non mi porta.</small>
			</a>
		</div>
    </div>

    <div class="component">
    	<pre>&lt;div class="list-group"&gt;
  &lt;a href="#" class="list-group-item list-group-item-action flex-column align-items-start active"&gt;
    &lt;div class="d-flex w-100 justify-content-between"&gt;
      &lt;h5 class="mb-1"&gt;List group item heading&lt;/h5&gt;
      &lt;small&gt;3 days ago&lt;/small&gt;
    &lt;/div&gt;
    &lt;p class="mb-1"&gt;Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.&lt;/p&gt;
    &lt;small&gt;Donec id elit non mi porta.&lt;/small&gt;
  &lt;/a&gt;
  &lt;a href="#" class="list-group-item list-group-item-action flex-column align-items-start"&gt;
    &lt;div class="d-flex w-100 justify-content-between"&gt;
      &lt;h5 class="mb-1"&gt;List group item heading&lt;/h5&gt;
      &lt;small class="text-muted"&gt;3 days ago&lt;/small&gt;
    &lt;/div&gt;
    &lt;p class="mb-1"&gt;Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.&lt;/p&gt;
    &lt;small class="text-muted"&gt;Donec id elit non mi porta.&lt;/small&gt;
  &lt;/a&gt;
&lt;/div&gt;</pre>
    </div>

    <div class="component">
		<div class="card text-white bg-primary mb-3" style="max-width: 20rem;">
			<div class="card-header">Header</div>
			<div class="card-body">
				<h4 class="card-title">Primary card title</h4>
				<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
			</div>
		</div>
		<div class="card bg-secondary mb-3" style="max-width: 20rem;">
			<div class="card-header">Header</div>
			<div class="card-body">
				<h4 class="card-title">Secondary card title</h4>
				<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
			</div>
		</div>
		<div class="card text-white bg-success mb-3" style="max-width: 20rem;">
			<div class="card-header">Header</div>
			<div class="card-body">
				<h4 class="card-title">Success card title</h4>
				<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
			</div>
		</div>
		<div class="card text-white bg-danger mb-3" style="max-width: 20rem;">
			<div class="card-header">Header</div>
			<div class="card-body">
				<h4 class="card-title">Danger card title</h4>
				<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
			</div>
		</div>
		<div class="card text-white bg-warning mb-3" style="max-width: 20rem;">
			<div class="card-header">Header</div>
			<div class="card-body">
				<h4 class="card-title">Warning card title</h4>
				<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
			</div>
		</div>
		<div class="card text-white bg-info mb-3" style="max-width: 20rem;">
			<div class="card-header">Header</div>
			<div class="card-body">
				<h4 class="card-title">Info card title</h4>
				<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
			</div>
		</div>
		<div class="card bg-light mb-3" style="max-width: 20rem;">
			<div class="card-header">Header</div>
			<div class="card-body">
				<h4 class="card-title">Light card title</h4>
				<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
			</div>
		</div>
		<div class="card text-white bg-dark mb-3" style="max-width: 20rem;">
			<div class="card-header">Header</div>
			<div class="card-body">
				<h4 class="card-title">Dark card title</h4>
				<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
			</div>
		</div>
    </div>

    <div class="component">
    	<pre>&lt;div class="card text-white bg-primary mb-3" style="max-width: 20rem;"&gt;
  &lt;div class="card-header"&gt;Header&lt;/div&gt;
  &lt;div class="card-body"&gt;
    &lt;h4 class="card-title"&gt;Primary card title&lt;/h4&gt;
    &lt;p class="card-text"&gt;Some quick example text to build on the card title and make up the bulk of the card's content.&lt;/p&gt;
  &lt;/div&gt;
&lt;/div&gt;
&lt;div class="card bg-secondary mb-3" style="max-width: 20rem;"&gt;
  &lt;div class="card-header"&gt;Header&lt;/div&gt;
  &lt;div class="card-body"&gt;
    &lt;h4 class="card-title"&gt;Secondary card title&lt;/h4&gt;
    &lt;p class="card-text"&gt;Some quick example text to build on the card title and make up the bulk of the card's content.&lt;/p&gt;
  &lt;/div&gt;
&lt;/div&gt;
&lt;div class="card text-white bg-success mb-3" style="max-width: 20rem;"&gt;
  &lt;div class="card-header"&gt;Header&lt;/div&gt;
  &lt;div class="card-body"&gt;
    &lt;h4 class="card-title"&gt;Success card title&lt;/h4&gt;
    &lt;p class="card-text"&gt;Some quick example text to build on the card title and make up the bulk of the card's content.&lt;/p&gt;
  &lt;/div&gt;
&lt;/div&gt;
&lt;div class="card text-white bg-danger mb-3" style="max-width: 20rem;"&gt;
  &lt;div class="card-header"&gt;Header&lt;/div&gt;
  &lt;div class="card-body"&gt;
    &lt;h4 class="card-title"&gt;Danger card title&lt;/h4&gt;
    &lt;p class="card-text"&gt;Some quick example text to build on the card title and make up the bulk of the card's content.&lt;/p&gt;
  &lt;/div&gt;
&lt;/div&gt;
&lt;div class="card text-white bg-warning mb-3" style="max-width: 20rem;"&gt;
  &lt;div class="card-header"&gt;Header&lt;/div&gt;
  &lt;div class="card-body"&gt;
    &lt;h4 class="card-title"&gt;Warning card title&lt;/h4&gt;
    &lt;p class="card-text"&gt;Some quick example text to build on the card title and make up the bulk of the card's content.&lt;/p&gt;
  &lt;/div&gt;
&lt;/div&gt;
&lt;div class="card text-white bg-info mb-3" style="max-width: 20rem;"&gt;
  &lt;div class="card-header"&gt;Header&lt;/div&gt;
  &lt;div class="card-body"&gt;
    &lt;h4 class="card-title"&gt;Info card title&lt;/h4&gt;
    &lt;p class="card-text"&gt;Some quick example text to build on the card title and make up the bulk of the card's content.&lt;/p&gt;
  &lt;/div&gt;
&lt;/div&gt;
&lt;div class="card bg-light mb-3" style="max-width: 20rem;"&gt;
  &lt;div class="card-header"&gt;Header&lt;/div&gt;
  &lt;div class="card-body"&gt;
    &lt;h4 class="card-title"&gt;Light card title&lt;/h4&gt;
    &lt;p class="card-text"&gt;Some quick example text to build on the card title and make up the bulk of the card's content.&lt;/p&gt;
  &lt;/div&gt;
&lt;/div&gt;
&lt;div class="card text-white bg-dark mb-3" style="max-width: 20rem;"&gt;
  &lt;div class="card-header"&gt;Header&lt;/div&gt;
  &lt;div class="card-body"&gt;
    &lt;h4 class="card-title"&gt;Dark card title&lt;/h4&gt;
    &lt;p class="card-text"&gt;Some quick example text to build on the card title and make up the bulk of the card's content.&lt;/p&gt;
  &lt;/div&gt;
&lt;/div&gt;</pre>
    </div>

    <div class="component">
		<div class="card border-primary mb-3" style="max-width: 20rem;">
			<div class="card-header">Header</div>
			<div class="card-body">
				<h4 class="card-title">Primary card title</h4>
				<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
			</div>
		</div>
		<div class="card border-secondary mb-3" style="max-width: 20rem;">
			<div class="card-header">Header</div>
			<div class="card-body">
				<h4 class="card-title">Secondary card title</h4>
				<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
			</div>
		</div>
		<div class="card border-success mb-3" style="max-width: 20rem;">
			<div class="card-header">Header</div>
			<div class="card-body">
				<h4 class="card-title">Success card title</h4>
				<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
			</div>
		</div>
		<div class="card border-danger mb-3" style="max-width: 20rem;">
			<div class="card-header">Header</div>
			<div class="card-body">
				<h4 class="card-title">Danger card title</h4>
				<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
			</div>
		</div>
		<div class="card border-warning mb-3" style="max-width: 20rem;">
			<div class="card-header">Header</div>
			<div class="card-body">
				<h4 class="card-title">Warning card title</h4>
				<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
			</div>
		</div>
		<div class="card border-info mb-3" style="max-width: 20rem;">
			<div class="card-header">Header</div>
			<div class="card-body">
				<h4 class="card-title">Info card title</h4>
				<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
			</div>
		</div>
		<div class="card border-light mb-3" style="max-width: 20rem;">
			<div class="card-header">Header</div>
			<div class="card-body">
				<h4 class="card-title">Light card title</h4>
				<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
			</div>
		</div>
		<div class="card border-dark mb-3" style="max-width: 20rem;">
			<div class="card-header">Header</div>
			<div class="card-body">
				<h4 class="card-title">Dark card title</h4>
				<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
			</div>
		</div>
    </div>

    <div class="component">
    	<pre>&lt;div class="card border-primary mb-3" style="max-width: 20rem;"&gt;
  &lt;div class="card-header"&gt;Header&lt;/div&gt;
  &lt;div class="card-body"&gt;
    &lt;h4 class="card-title"&gt;Primary card title&lt;/h4&gt;
    &lt;p class="card-text"&gt;Some quick example text to build on the card title and make up the bulk of the card's content.&lt;/p&gt;
  &lt;/div&gt;
&lt;/div&gt;
&lt;div class="card border-secondary mb-3" style="max-width: 20rem;"&gt;
  &lt;div class="card-header"&gt;Header&lt;/div&gt;
  &lt;div class="card-body"&gt;
    &lt;h4 class="card-title"&gt;Secondary card title&lt;/h4&gt;
    &lt;p class="card-text"&gt;Some quick example text to build on the card title and make up the bulk of the card's content.&lt;/p&gt;
  &lt;/div&gt;
&lt;/div&gt;
&lt;div class="card border-success mb-3" style="max-width: 20rem;"&gt;
  &lt;div class="card-header"&gt;Header&lt;/div&gt;
  &lt;div class="card-body"&gt;
    &lt;h4 class="card-title"&gt;Success card title&lt;/h4&gt;
    &lt;p class="card-text"&gt;Some quick example text to build on the card title and make up the bulk of the card's content.&lt;/p&gt;
  &lt;/div&gt;
&lt;/div&gt;
&lt;div class="card border-danger mb-3" style="max-width: 20rem;"&gt;
  &lt;div class="card-header"&gt;Header&lt;/div&gt;
  &lt;div class="card-body"&gt;
    &lt;h4 class="card-title"&gt;Danger card title&lt;/h4&gt;
    &lt;p class="card-text"&gt;Some quick example text to build on the card title and make up the bulk of the card's content.&lt;/p&gt;
  &lt;/div&gt;
&lt;/div&gt;
&lt;div class="card border-warning mb-3" style="max-width: 20rem;"&gt;
  &lt;div class="card-header"&gt;Header&lt;/div&gt;
  &lt;div class="card-body"&gt;
    &lt;h4 class="card-title"&gt;Warning card title&lt;/h4&gt;
    &lt;p class="card-text"&gt;Some quick example text to build on the card title and make up the bulk of the card's content.&lt;/p&gt;
  &lt;/div&gt;
&lt;/div&gt;
&lt;div class="card border-info mb-3" style="max-width: 20rem;"&gt;
  &lt;div class="card-header"&gt;Header&lt;/div&gt;
  &lt;div class="card-body"&gt;
    &lt;h4 class="card-title"&gt;Info card title&lt;/h4&gt;
    &lt;p class="card-text"&gt;Some quick example text to build on the card title and make up the bulk of the card's content.&lt;/p&gt;
  &lt;/div&gt;
&lt;/div&gt;
&lt;div class="card border-light mb-3" style="max-width: 20rem;"&gt;
  &lt;div class="card-header"&gt;Header&lt;/div&gt;
  &lt;div class="card-body"&gt;
    &lt;h4 class="card-title"&gt;Light card title&lt;/h4&gt;
    &lt;p class="card-text"&gt;Some quick example text to build on the card title and make up the bulk of the card's content.&lt;/p&gt;
  &lt;/div&gt;
&lt;/div&gt;
&lt;div class="card border-dark mb-3" style="max-width: 20rem;"&gt;
  &lt;div class="card-header"&gt;Header&lt;/div&gt;
  &lt;div class="card-body"&gt;
    &lt;h4 class="card-title"&gt;Dark card title&lt;/h4&gt;
    &lt;p class="card-text"&gt;Some quick example text to build on the card title and make up the bulk of the card's content.&lt;/p&gt;
  &lt;/div&gt;
&lt;/div&gt;</pre>
    </div>

    <div class="component">
		<div class="card mb-3">
			<h3 class="card-header">Card header</h3>
			<div class="card-body">
				<h5 class="card-title">Special title treatment</h5>
				<h6 class="card-subtitle text-muted">Support card subtitle</h6>
			</div>
			<img style="height: 200px; width: 100%; display: block;" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22318%22%20height%3D%22180%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20318%20180%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_158bd1d28ef%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A16pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_158bd1d28ef%22%3E%3Crect%20width%3D%22318%22%20height%3D%22180%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22129.359375%22%20y%3D%2297.35%22%3EImage%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" alt="Card image">
			<div class="card-body">
				<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
			</div>
			<ul class="list-group list-group-flush">
				<li class="list-group-item">Cras justo odio</li>
				<li class="list-group-item">Dapibus ac facilisis in</li>
				<li class="list-group-item">Vestibulum at eros</li>
			</ul>
			<div class="card-body">
				<a href="#" class="card-link">Card link</a>
				<a href="#" class="card-link">Another link</a>
			</div>
			<div class="card-footer text-muted">
				2 days ago
			</div>
		</div>
		<div class="card">
			<div class="card-body">
				<h4 class="card-title">Card title</h4>
				<h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
				<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
				<a href="#" class="card-link">Card link</a>
				<a href="#" class="card-link">Another link</a>
			</div>
		</div>
    </div>

    <div class="component">
    	<pre>&lt;div class="card mb-3"&gt;
  &lt;h3 class="card-header"&gt;Card header&lt;/h3&gt;
  &lt;div class="card-body"&gt;
    &lt;h5 class="card-title"&gt;Special title treatment&lt;/h5&gt;
    &lt;h6 class="card-subtitle text-muted"&gt;Support card subtitle&lt;/h6&gt;
  &lt;/div&gt;
  &lt;img style="height: 200px; width: 100%; display: block;" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22318%22%20height%3D%22180%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20318%20180%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_158bd1d28ef%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A16pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_158bd1d28ef%22%3E%3Crect%20width%3D%22318%22%20height%3D%22180%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22129.359375%22%20y%3D%2297.35%22%3EImage%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" alt="Card image"&gt;
  &lt;div class="card-body"&gt;
    &lt;p class="card-text"&gt;Some quick example text to build on the card title and make up the bulk of the card's content.&lt;/p&gt;
  &lt;/div&gt;
  &lt;ul class="list-group list-group-flush"&gt;
    &lt;li class="list-group-item"&gt;Cras justo odio&lt;/li&gt;
    &lt;li class="list-group-item"&gt;Dapibus ac facilisis in&lt;/li&gt;
    &lt;li class="list-group-item"&gt;Vestibulum at eros&lt;/li&gt;
  &lt;/ul&gt;
  &lt;div class="card-body"&gt;
    &lt;a href="#" class="card-link"&gt;Card link&lt;/a&gt;
    &lt;a href="#" class="card-link"&gt;Another link&lt;/a&gt;
  &lt;/div&gt;
  &lt;div class="card-footer text-muted"&gt;
    2 days ago
  &lt;/div&gt;
&lt;/div&gt;
&lt;div class="card"&gt;
  &lt;div class="card-body"&gt;
    &lt;h4 class="card-title"&gt;Card title&lt;/h4&gt;
    &lt;h6 class="card-subtitle mb-2 text-muted"&gt;Card subtitle&lt;/h6&gt;
    &lt;p class="card-text"&gt;Some quick example text to build on the card title and make up the bulk of the card's content.&lt;/p&gt;
    &lt;a href="#" class="card-link"&gt;Card link&lt;/a&gt;
    &lt;a href="#" class="card-link"&gt;Another link&lt;/a&gt;
  &lt;/div&gt;
&lt;/div&gt;</pre>
    </div>
@endsection