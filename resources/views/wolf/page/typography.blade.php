@extends('wolf.base')
@section('title', 'Typography')
@section('content')
    <h1 class="component-header">Typography</h1>

    <div class="component">
    	<h1>Heading 1</h1>
		<h2>Heading 2</h2>
		<h3>Heading 3</h3>
		<h4>Heading 4</h4>
		<h5>Heading 5</h5>
		<h6>Heading 6</h6>
		<h3>
		  Heading
		  <small class="text-muted">with muted text</small>
		</h3>
		<p class="lead">Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
    </div>

    <div class="component">
    	<pre>&lt;h1&gt;Heading 1&lt;/h1&gt;
&lt;h2&gt;Heading 2&lt;/h2&gt;
&lt;h3&gt;Heading 3&lt;/h3&gt;
&lt;h4&gt;Heading 4&lt;/h4&gt;
&lt;h5&gt;Heading 5&lt;/h5&gt;
&lt;h6&gt;Heading 6&lt;/h6&gt;
&lt;h3&gt;
  Heading
  &lt;small class="text-muted"&gt;with muted text&lt;/small&gt;
&lt;/h3&gt;
&lt;p class="lead"&gt;Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.&lt;/p&gt;</pre>
    </div>

    <div class="component">
    	<h2>Example body text</h2>
		<p>Nullam quis risus eget <a href="#">urna mollis ornare</a> vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam id dolor id nibh ultricies vehicula.</p>
		<p><small>This line of text is meant to be treated as fine print.</small></p>
		<p>The following is <strong>rendered as bold text</strong>.</p>
		<p>The following is <em>rendered as italicized text</em>.</p>
		<p>An abbreviation of the word attribute is <abbr title="attribute">attr</abbr>.</p>
    </div>

    <div class="component">
    	<pre>&lt;h2&gt;Example body text&lt;/h2&gt;
&lt;p&gt;Nullam quis risus eget &lt;a href="#"&gt;urna mollis ornare&lt;/a&gt; vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam id dolor id nibh ultricies vehicula.&lt;/p&gt;
&lt;p&gt;&lt;small&gt;This line of text is meant to be treated as fine print.&lt;/small&gt;&lt;/p&gt;
&lt;p&gt;The following is &lt;strong&gt;rendered as bold text&lt;/strong&gt;.&lt;/p&gt;
&lt;p&gt;The following is &lt;em&gt;rendered as italicized text&lt;/em&gt;.&lt;/p&gt;
&lt;p&gt;An abbreviation of the word attribute is &lt;abbr title="attribute"&gt;attr&lt;/abbr&gt;.&lt;/p&gt;</pre>
    </div>

    <div class="component">
    	<h2>Emphasis classes</h2>
		<p class="text-muted">Fusce dapibus, tellus ac cursus commodo, tortor mauris nibh.</p>
		<p class="text-primary">Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
		<p class="text-secondary">Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>
		<p class="text-warning">Etiam porta sem malesuada magna mollis euismod.</p>
		<p class="text-danger">Donec ullamcorper nulla non metus auctor fringilla.</p>
		<p class="text-success">Duis mollis, est non commodo luctus, nisi erat porttitor ligula.</p>
		<p class="text-info">Maecenas sed diam eget risus varius blandit sit amet non magna.</p>
    </div>

    <div class="component">
    	<pre>&lt;h2&gt;Emphasis classes&lt;/h2&gt;
&lt;p class="text-muted"&gt;Fusce dapibus, tellus ac cursus commodo, tortor mauris nibh.&lt;/p&gt;
&lt;p class="text-primary"&gt;Nullam id dolor id nibh ultricies vehicula ut id elit.&lt;/p&gt;
&lt;p class="text-secondary"&gt;Pellentesque ornare sem lacinia quam venenatis vestibulum.&lt;/p&gt;
&lt;p class="text-warning"&gt;Etiam porta sem malesuada magna mollis euismod.&lt;/p&gt;
&lt;p class="text-danger"&gt;Donec ullamcorper nulla non metus auctor fringilla.&lt;/p&gt;
&lt;p class="text-success"&gt;Duis mollis, est non commodo luctus, nisi erat porttitor ligula.&lt;/p&gt;
&lt;p class="text-info"&gt;Maecenas sed diam eget risus varius blandit sit amet non magna.&lt;/p&gt;</pre>
    </div>
@endsection