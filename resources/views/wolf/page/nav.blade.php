@extends('wolf.base')
@section('title', 'Navs')
@section('content')
    <h1 class="component-header">Navs</h1>

    <div class="component">
		<ul class="nav nav-tabs">
			<li class="nav-item">
				<a class="nav-link" data-toggle="tab" href="#home">Home</a>
			</li>
			<li class="nav-item">
				<a class="nav-link active" data-toggle="tab" href="#profile">Profile</a>
			</li>
			<li class="nav-item">
				<a class="nav-link disabled" href="#">Disabled</a>
			</li>
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Dropdown</a>
				<div class="dropdown-menu" style="">
					<a class="dropdown-item" href="#">Action</a>
					<a class="dropdown-item" href="#">Another action</a>
					<a class="dropdown-item" href="#">Something else here</a>
					<div class="dropdown-divider"></div>
					<a class="dropdown-item" href="#">Separated link</a>
				</div>
			</li>
		</ul>
		<div id="myTabContent" class="tab-content">
			<div class="tab-pane fade" id="home">
				<p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui.</p>
			</div>
			<div class="tab-pane fade active show" id="profile">
				<p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit.</p>
			</div>
			<div class="tab-pane fade" id="dropdown1">
				<p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork.</p>
			</div>
			<div class="tab-pane fade" id="dropdown2">
				<p>Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party before they sold out master cleanse gluten-free squid scenester freegan cosby sweater. Fanny pack portland seitan DIY, art party locavore wolf cliche high life echo park Austin. Cred vinyl keffiyeh DIY salvia PBR, banh mi before they sold out farm-to-table VHS viral locavore cosby sweater.</p>
			</div>
		</div>
    </div>

    <div class="component">
    	<pre>&lt;ul class="nav nav-tabs"&gt;
  &lt;li class="nav-item"&gt;
    &lt;a class="nav-link" data-toggle="tab" href="#home"&gt;Home&lt;/a&gt;
  &lt;/li&gt;
  &lt;li class="nav-item"&gt;
    &lt;a class="nav-link active" data-toggle="tab" href="#profile"&gt;Profile&lt;/a&gt;
  &lt;/li&gt;
  &lt;li class="nav-item"&gt;
    &lt;a class="nav-link disabled" href="#"&gt;Disabled&lt;/a&gt;
  &lt;/li&gt;
  &lt;li class="nav-item dropdown"&gt;
    &lt;a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"&gt;Dropdown&lt;/a&gt;
    &lt;div class="dropdown-menu" style=""&gt;
      &lt;a class="dropdown-item" href="#"&gt;Action&lt;/a&gt;
      &lt;a class="dropdown-item" href="#"&gt;Another action&lt;/a&gt;
      &lt;a class="dropdown-item" href="#"&gt;Something else here&lt;/a&gt;
      &lt;div class="dropdown-divider"&gt;&lt;/div&gt;
      &lt;a class="dropdown-item" href="#"&gt;Separated link&lt;/a&gt;
    &lt;/div&gt;
  &lt;/li&gt;
&lt;/ul&gt;
&lt;div id="myTabContent" class="tab-content"&gt;
  &lt;div class="tab-pane fade" id="home"&gt;
    &lt;p&gt;Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui.&lt;/p&gt;
  &lt;/div&gt;
  &lt;div class="tab-pane fade active show" id="profile"&gt;
    &lt;p&gt;Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit.&lt;/p&gt;
  &lt;/div&gt;
  &lt;div class="tab-pane fade" id="dropdown1"&gt;
    &lt;p&gt;Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork.&lt;/p&gt;
  &lt;/div&gt;
  &lt;div class="tab-pane fade" id="dropdown2"&gt;
    &lt;p&gt;Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party before they sold out master cleanse gluten-free squid scenester freegan cosby sweater. Fanny pack portland seitan DIY, art party locavore wolf cliche high life echo park Austin. Cred vinyl keffiyeh DIY salvia PBR, banh mi before they sold out farm-to-table VHS viral locavore cosby sweater.&lt;/p&gt;
  &lt;/div&gt;
&lt;/div&gt;</pre>
    </div>

    <div class="component">
		<ol class="breadcrumb">
			<li class="breadcrumb-item active">Home</li>
		</ol>
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="#">Home</a></li>
			<li class="breadcrumb-item active">Library</li>
		</ol>
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="#">Home</a></li>
			<li class="breadcrumb-item"><a href="#">Library</a></li>
			<li class="breadcrumb-item active">Data</li>
		</ol>
    </div>

    <div class="component">
    	<pre>&lt;ol class="breadcrumb"&gt;
  &lt;li class="breadcrumb-item active"&gt;Home&lt;/li&gt;
&lt;/ol&gt;
&lt;ol class="breadcrumb"&gt;
  &lt;li class="breadcrumb-item"&gt;&lt;a href="#"&gt;Home&lt;/a&gt;&lt;/li&gt;
  &lt;li class="breadcrumb-item active"&gt;Library&lt;/li&gt;
&lt;/ol&gt;
&lt;ol class="breadcrumb"&gt;
  &lt;li class="breadcrumb-item"&gt;&lt;a href="#"&gt;Home&lt;/a&gt;&lt;/li&gt;
  &lt;li class="breadcrumb-item"&gt;&lt;a href="#"&gt;Library&lt;/a&gt;&lt;/li&gt;
  &lt;li class="breadcrumb-item active"&gt;Data&lt;/li&gt;
&lt;/ol&gt;</pre>
    </div>

    <div class="component">
		<ul class="nav nav-pills">
			<li class="nav-item">
				<a class="nav-link active" href="#">Active</a>
			</li>
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Dropdown</a>
				<div class="dropdown-menu">
					<a class="dropdown-item" href="#">Action</a>
					<a class="dropdown-item" href="#">Another action</a>
					<a class="dropdown-item" href="#">Something else here</a>
					<div class="dropdown-divider"></div>
					<a class="dropdown-item" href="#">Separated link</a>
				</div>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#">Link</a>
			</li>
			<li class="nav-item">
				<a class="nav-link disabled" href="#">Disabled</a>
			</li>
		</ul>
    </div>

    <div class="component">
    	<pre>&lt;ul class="nav nav-pills"&gt;
  &lt;li class="nav-item"&gt;
    &lt;a class="nav-link active" href="#"&gt;Active&lt;/a&gt;
  &lt;/li&gt;
  &lt;li class="nav-item dropdown"&gt;
    &lt;a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"&gt;Dropdown&lt;/a&gt;
    &lt;div class="dropdown-menu"&gt;
      &lt;a class="dropdown-item" href="#"&gt;Action&lt;/a&gt;
      &lt;a class="dropdown-item" href="#"&gt;Another action&lt;/a&gt;
      &lt;a class="dropdown-item" href="#"&gt;Something else here&lt;/a&gt;
      &lt;div class="dropdown-divider"&gt;&lt;/div&gt;
      &lt;a class="dropdown-item" href="#"&gt;Separated link&lt;/a&gt;
    &lt;/div&gt;
  &lt;/li&gt;
  &lt;li class="nav-item"&gt;
    &lt;a class="nav-link" href="#"&gt;Link&lt;/a&gt;
  &lt;/li&gt;
  &lt;li class="nav-item"&gt;
    &lt;a class="nav-link disabled" href="#"&gt;Disabled&lt;/a&gt;
  &lt;/li&gt;
&lt;/ul&gt;</pre>
    </div>

    <div class="component">
		<ul class="nav nav-pills flex-column">
			<li class="nav-item">
				<a class="nav-link active" href="#">Active</a>
			</li>
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Dropdown</a>
				<div class="dropdown-menu">
					<a class="dropdown-item" href="#">Action</a>
					<a class="dropdown-item" href="#">Another action</a>
					<a class="dropdown-item" href="#">Something else here</a>
					<div class="dropdown-divider"></div>
					<a class="dropdown-item" href="#">Separated link</a>
				</div>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#">Link</a>
			</li>
			<li class="nav-item">
				<a class="nav-link disabled" href="#">Disabled</a>
			</li>
		</ul>
    </div>

    <div class="component">
    	<pre>&lt;ul class="nav nav-pills flex-column"&gt;
  &lt;li class="nav-item"&gt;
    &lt;a class="nav-link active" href="#"&gt;Active&lt;/a&gt;
  &lt;/li&gt;
  &lt;li class="nav-item dropdown"&gt;
    &lt;a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"&gt;Dropdown&lt;/a&gt;
    &lt;div class="dropdown-menu"&gt;
      &lt;a class="dropdown-item" href="#"&gt;Action&lt;/a&gt;
      &lt;a class="dropdown-item" href="#"&gt;Another action&lt;/a&gt;
      &lt;a class="dropdown-item" href="#"&gt;Something else here&lt;/a&gt;
      &lt;div class="dropdown-divider"&gt;&lt;/div&gt;
      &lt;a class="dropdown-item" href="#"&gt;Separated link&lt;/a&gt;
    &lt;/div&gt;
  &lt;/li&gt;
  &lt;li class="nav-item"&gt;
    &lt;a class="nav-link" href="#"&gt;Link&lt;/a&gt;
  &lt;/li&gt;
  &lt;li class="nav-item"&gt;
    &lt;a class="nav-link disabled" href="#"&gt;Disabled&lt;/a&gt;
  &lt;/li&gt;
&lt;/ul&gt;</pre>
    </div>

    <div class="component">
		<div>
			<ul class="pagination">
				<li class="page-item disabled">
					<a class="page-link" href="#">&laquo;</a>
				</li>
				<li class="page-item active">
					<a class="page-link" href="#">1</a>
				</li>
				<li class="page-item">
					<a class="page-link" href="#">2</a>
				</li>
				<li class="page-item">
					<a class="page-link" href="#">3</a>
				</li>
				<li class="page-item">
					<a class="page-link" href="#">4</a>
				</li>
				<li class="page-item">
					<a class="page-link" href="#">5</a>
				</li>
				<li class="page-item">
					<a class="page-link" href="#">&raquo;</a>
				</li>
			</ul>
		</div>

		<div>
			<ul class="pagination pagination-lg">
				<li class="page-item disabled">
					<a class="page-link" href="#">&laquo;</a>
				</li>
				<li class="page-item active">
					<a class="page-link" href="#">1</a>
				</li>
				<li class="page-item">
					<a class="page-link" href="#">2</a>
				</li>
				<li class="page-item">
					<a class="page-link" href="#">3</a>
				</li>
				<li class="page-item">
					<a class="page-link" href="#">4</a>
				</li>
				<li class="page-item">
					<a class="page-link" href="#">5</a>
				</li>
				<li class="page-item">
					<a class="page-link" href="#">&raquo;</a>
				</li>
			</ul>
		</div>

		<div>
			<ul class="pagination pagination-sm">
				<li class="page-item disabled">
					<a class="page-link" href="#">&laquo;</a>
				</li>
				<li class="page-item active">
					<a class="page-link" href="#">1</a>
				</li>
				<li class="page-item">
					<a class="page-link" href="#">2</a>
				</li>
				<li class="page-item">
					<a class="page-link" href="#">3</a>
				</li>
				<li class="page-item">
					<a class="page-link" href="#">4</a>
				</li>
				<li class="page-item">
					<a class="page-link" href="#">5</a>
				</li>
				<li class="page-item">
					<a class="page-link" href="#">&raquo;</a>
				</li>
			</ul>
		</div>
    </div>

    <div class="component">
    	<pre>&lt;div&gt;
  &lt;ul class="pagination"&gt;
    &lt;li class="page-item disabled"&gt;
      &lt;a class="page-link" href="#"&gt;&amp;laquo;&lt;/a&gt;
    &lt;/li&gt;
    &lt;li class="page-item active"&gt;
      &lt;a class="page-link" href="#"&gt;1&lt;/a&gt;
    &lt;/li&gt;
    &lt;li class="page-item"&gt;
      &lt;a class="page-link" href="#"&gt;2&lt;/a&gt;
    &lt;/li&gt;
    &lt;li class="page-item"&gt;
      &lt;a class="page-link" href="#"&gt;3&lt;/a&gt;
    &lt;/li&gt;
    &lt;li class="page-item"&gt;
      &lt;a class="page-link" href="#"&gt;4&lt;/a&gt;
    &lt;/li&gt;
    &lt;li class="page-item"&gt;
      &lt;a class="page-link" href="#"&gt;5&lt;/a&gt;
    &lt;/li&gt;
    &lt;li class="page-item"&gt;
      &lt;a class="page-link" href="#"&gt;&amp;raquo;&lt;/a&gt;
    &lt;/li&gt;
  &lt;/ul&gt;
&lt;/div&gt;

&lt;div&gt;
  &lt;ul class="pagination pagination-lg"&gt;
    &lt;li class="page-item disabled"&gt;
      &lt;a class="page-link" href="#"&gt;&amp;laquo;&lt;/a&gt;
    &lt;/li&gt;
    &lt;li class="page-item active"&gt;
      &lt;a class="page-link" href="#"&gt;1&lt;/a&gt;
    &lt;/li&gt;
    &lt;li class="page-item"&gt;
      &lt;a class="page-link" href="#"&gt;2&lt;/a&gt;
    &lt;/li&gt;
    &lt;li class="page-item"&gt;
      &lt;a class="page-link" href="#"&gt;3&lt;/a&gt;
    &lt;/li&gt;
    &lt;li class="page-item"&gt;
      &lt;a class="page-link" href="#"&gt;4&lt;/a&gt;
    &lt;/li&gt;
    &lt;li class="page-item"&gt;
      &lt;a class="page-link" href="#"&gt;5&lt;/a&gt;
    &lt;/li&gt;
    &lt;li class="page-item"&gt;
      &lt;a class="page-link" href="#"&gt;&amp;raquo;&lt;/a&gt;
    &lt;/li&gt;
  &lt;/ul&gt;
&lt;/div&gt;

&lt;div&gt;
  &lt;ul class="pagination pagination-sm"&gt;
    &lt;li class="page-item disabled"&gt;
      &lt;a class="page-link" href="#"&gt;&amp;laquo;&lt;/a&gt;
    &lt;/li&gt;
    &lt;li class="page-item active"&gt;
      &lt;a class="page-link" href="#"&gt;1&lt;/a&gt;
    &lt;/li&gt;
    &lt;li class="page-item"&gt;
      &lt;a class="page-link" href="#"&gt;2&lt;/a&gt;
    &lt;/li&gt;
    &lt;li class="page-item"&gt;
      &lt;a class="page-link" href="#"&gt;3&lt;/a&gt;
    &lt;/li&gt;
    &lt;li class="page-item"&gt;
      &lt;a class="page-link" href="#"&gt;4&lt;/a&gt;
    &lt;/li&gt;
    &lt;li class="page-item"&gt;
      &lt;a class="page-link" href="#"&gt;5&lt;/a&gt;
    &lt;/li&gt;
    &lt;li class="page-item"&gt;
      &lt;a class="page-link" href="#"&gt;&amp;raquo;&lt;/a&gt;
    &lt;/li&gt;
  &lt;/ul&gt;
&lt;/div&gt;
</pre>
    </div>
@endsection