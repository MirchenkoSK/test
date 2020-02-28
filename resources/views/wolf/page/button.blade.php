@extends('wolf.base')
@section('title', 'Buttons')
@section('content')
    <h1 class="component-header">Buttons</h1>

    <div class="component">
        <button type="button" class="btn btn-primary">Primary</button>
        <button type="button" class="btn btn-secondary">Secondary</button>
        <button type="button" class="btn btn-success">Success</button>
        <button type="button" class="btn btn-info">Info</button>
        <button type="button" class="btn btn-warning">Warning</button>
        <button type="button" class="btn btn-danger">Danger</button>
        <button type="button" class="btn btn-link">Link</button>
    </div>

    <div class="component">
        <pre>&lt;button type="button" class="btn btn-primary"&gt;Primary&lt;/button&gt;
&lt;button type="button" class="btn btn-secondary"&gt;Secondary&lt;/button&gt;
&lt;button type="button" class="btn btn-success"&gt;Success&lt;/button&gt;
&lt;button type="button" class="btn btn-info"&gt;Info&lt;/button&gt;
&lt;button type="button" class="btn btn-warning"&gt;Warning&lt;/button&gt;
&lt;button type="button" class="btn btn-danger"&gt;Danger&lt;/button&gt;
&lt;button type="button" class="btn btn-link"&gt;Link&lt;/button&gt;</pre>
    </div>

    <div class="component">
        <button type="button" class="btn btn-primary disabled">Primary</button>
		<button type="button" class="btn btn-secondary disabled">Secondary</button>
		<button type="button" class="btn btn-success disabled">Success</button>
		<button type="button" class="btn btn-info disabled">Info</button>
		<button type="button" class="btn btn-warning disabled">Warning</button>
		<button type="button" class="btn btn-danger disabled">Danger</button>
		<button type="button" class="btn btn-link disabled">Link</button>
    </div>

    <div class="component">
        <pre>&lt;button type="button" class="btn btn-primary disabled"&gt;Primary&lt;/button&gt;
&lt;button type="button" class="btn btn-secondary disabled"&gt;Secondary&lt;/button&gt;
&lt;button type="button" class="btn btn-success disabled"&gt;Success&lt;/button&gt;
&lt;button type="button" class="btn btn-info disabled"&gt;Info&lt;/button&gt;
&lt;button type="button" class="btn btn-warning disabled"&gt;Warning&lt;/button&gt;
&lt;button type="button" class="btn btn-danger disabled"&gt;Danger&lt;/button&gt;
&lt;button type="button" class="btn btn-link disabled"&gt;Link&lt;/button&gt;</pre>
    </div>

    <div class="component">
        <button type="button" class="btn btn-outline-primary">Primary</button>
		<button type="button" class="btn btn-outline-secondary">Secondary</button>
		<button type="button" class="btn btn-outline-success">Success</button>
		<button type="button" class="btn btn-outline-info">Info</button>
		<button type="button" class="btn btn-outline-warning">Warning</button>
		<button type="button" class="btn btn-outline-danger">Danger</button>
    </div>

    <div class="component">
        <pre>&lt;button type="button" class="btn btn-outline-primary"&gt;Primary&lt;/button&gt;
&lt;button type="button" class="btn btn-outline-secondary"&gt;Secondary&lt;/button&gt;
&lt;button type="button" class="btn btn-outline-success"&gt;Success&lt;/button&gt;
&lt;button type="button" class="btn btn-outline-info"&gt;Info&lt;/button&gt;
&lt;button type="button" class="btn btn-outline-warning"&gt;Warning&lt;/button&gt;
&lt;button type="button" class="btn btn-outline-danger"&gt;Danger&lt;/button&gt;</pre>
    </div>

    <div class="component">
		<div class="btn-group" role="group" aria-label="Button group with nested dropdown">
			<button type="button" class="btn btn-primary">Primary</button>
			<div class="btn-group" role="group">
				<button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
				<div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
					<a class="dropdown-item" href="#">Dropdown link</a>
					<a class="dropdown-item" href="#">Dropdown link</a>
				</div>
			</div>
		</div>

		<div class="btn-group" role="group" aria-label="Button group with nested dropdown">
			<button type="button" class="btn btn-success">Success</button>
			<div class="btn-group" role="group">
				<button id="btnGroupDrop2" type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
				<div class="dropdown-menu" aria-labelledby="btnGroupDrop2">
					<a class="dropdown-item" href="#">Dropdown link</a>
					<a class="dropdown-item" href="#">Dropdown link</a>
				</div>
			</div>
		</div>

		<div class="btn-group" role="group" aria-label="Button group with nested dropdown">
			<button type="button" class="btn btn-info">Info</button>
			<div class="btn-group" role="group">
				<button id="btnGroupDrop3" type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
				<div class="dropdown-menu" aria-labelledby="btnGroupDrop3" style="">
					<a class="dropdown-item" href="#">Dropdown link</a>
					<a class="dropdown-item" href="#">Dropdown link</a>
				</div>
			</div>
		</div>

		<div class="btn-group" role="group" aria-label="Button group with nested dropdown">
			<button type="button" class="btn btn-danger">Danger</button>
			<div class="btn-group" role="group">
				<button id="btnGroupDrop4" type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
				<div class="dropdown-menu" aria-labelledby="btnGroupDrop4">
					<a class="dropdown-item" href="#">Dropdown link</a>
					<a class="dropdown-item" href="#">Dropdown link</a>
				</div>
			</div>
		</div>
    </div>

    <div class="component">
        <pre>&lt;div class="btn-group" role="group" aria-label="Button group with nested dropdown"&gt;
  &lt;button type="button" class="btn btn-primary"&gt;Primary&lt;/button&gt;
  &lt;div class="btn-group" role="group"&gt;
    &lt;button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"&gt;&lt;/button&gt;
    &lt;div class="dropdown-menu" aria-labelledby="btnGroupDrop1"&gt;
      &lt;a class="dropdown-item" href="#"&gt;Dropdown link&lt;/a&gt;
      &lt;a class="dropdown-item" href="#"&gt;Dropdown link&lt;/a&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;

&lt;div class="btn-group" role="group" aria-label="Button group with nested dropdown"&gt;
  &lt;button type="button" class="btn btn-success"&gt;Success&lt;/button&gt;
  &lt;div class="btn-group" role="group"&gt;
    &lt;button id="btnGroupDrop2" type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"&gt;&lt;/button&gt;
    &lt;div class="dropdown-menu" aria-labelledby="btnGroupDrop2"&gt;
      &lt;a class="dropdown-item" href="#"&gt;Dropdown link&lt;/a&gt;
      &lt;a class="dropdown-item" href="#"&gt;Dropdown link&lt;/a&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;

&lt;div class="btn-group" role="group" aria-label="Button group with nested dropdown"&gt;
  &lt;button type="button" class="btn btn-info"&gt;Info&lt;/button&gt;
  &lt;div class="btn-group" role="group"&gt;
    &lt;button id="btnGroupDrop3" type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"&gt;&lt;/button&gt;
    &lt;div class="dropdown-menu" aria-labelledby="btnGroupDrop3" style=""&gt;
      &lt;a class="dropdown-item" href="#"&gt;Dropdown link&lt;/a&gt;
      &lt;a class="dropdown-item" href="#"&gt;Dropdown link&lt;/a&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;

&lt;div class="btn-group" role="group" aria-label="Button group with nested dropdown"&gt;
  &lt;button type="button" class="btn btn-danger"&gt;Danger&lt;/button&gt;
  &lt;div class="btn-group" role="group"&gt;
    &lt;button id="btnGroupDrop4" type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"&gt;&lt;/button&gt;
    &lt;div class="dropdown-menu" aria-labelledby="btnGroupDrop4"&gt;
      &lt;a class="dropdown-item" href="#"&gt;Dropdown link&lt;/a&gt;
      &lt;a class="dropdown-item" href="#"&gt;Dropdown link&lt;/a&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;</pre>
    </div>

    <div class="component">
        <button type="button" class="btn btn-primary btn-lg">Large button</button>
		<button type="button" class="btn btn-primary">Default button</button>
		<button type="button" class="btn btn-primary btn-sm">Small button</button>
    </div>

    <div class="component">
        <pre>&lt;button type="button" class="btn btn-primary btn-lg"&gt;Large button&lt;/button&gt;
&lt;button type="button" class="btn btn-primary"&gt;Default button&lt;/button&gt;
&lt;button type="button" class="btn btn-primary btn-sm"&gt;Small button&lt;/button&gt;</pre>
    </div>

    <div class="component">
        <button type="button" class="btn btn-primary btn-lg btn-block">Block level button</button>
    </div>

    <div class="component">
        <pre>&lt;button type="button" class="btn btn-primary btn-lg btn-block"&gt;Block level button&lt;/button&gt;</pre>
    </div>

    <div class="component">
        <div class="btn-group btn-group-toggle" data-toggle="buttons">
			<label class="btn btn-primary active">
				<input type="checkbox" checked="" autocomplete="off"> Active
			</label>
			<label class="btn btn-primary active">
				<input type="checkbox" autocomplete="off"> Check
			</label>
			<label class="btn btn-primary">
				<input type="checkbox" autocomplete="off"> Check
			</label>
		</div>
    </div>

    <div class="component">
        <pre>&lt;div class="btn-group btn-group-toggle" data-toggle="buttons"&gt;
  &lt;label class="btn btn-primary active"&gt;
    &lt;input type="checkbox" checked="" autocomplete="off"&gt; Active
  &lt;/label&gt;
  &lt;label class="btn btn-primary active"&gt;
    &lt;input type="checkbox" autocomplete="off"&gt; Check
  &lt;/label&gt;
  &lt;label class="btn btn-primary"&gt;
    &lt;input type="checkbox" autocomplete="off"&gt; Check
  &lt;/label&gt;
&lt;/div&gt;</pre>
    </div>

    <div class="component">
        <div class="btn-group btn-group-toggle" data-toggle="buttons">
			<label class="btn btn-primary">
				<input type="radio" name="options" id="option1" autocomplete="off" checked=""> Active
			</label>
			<label class="btn btn-primary">
				<input type="radio" name="options" id="option2" autocomplete="off"> Radio
			</label>
			<label class="btn btn-primary active">
				<input type="radio" name="options" id="option3" autocomplete="off"> Radio
			</label>
		</div>
    </div>

    <div class="component">
        <pre>&lt;div class="btn-group btn-group-toggle" data-toggle="buttons"&gt;
  &lt;label class="btn btn-primary"&gt;
    &lt;input type="radio" name="options" id="option1" autocomplete="off" checked=""&gt; Active
  &lt;/label&gt;
  &lt;label class="btn btn-primary"&gt;
    &lt;input type="radio" name="options" id="option2" autocomplete="off"&gt; Radio
  &lt;/label&gt;
  &lt;label class="btn btn-primary active"&gt;
    &lt;input type="radio" name="options" id="option3" autocomplete="off"&gt; Radio
  &lt;/label&gt;
&lt;/div&gt;</pre>
    </div>

    <div class="component">
        <div class="btn-group-vertical">
			<button type="button" class="btn btn-primary">Button</button>
			<button type="button" class="btn btn-primary">Button</button>
			<button type="button" class="btn btn-primary">Button</button>
			<button type="button" class="btn btn-primary">Button</button>
			<button type="button" class="btn btn-primary">Button</button>
			<button type="button" class="btn btn-primary">Button</button>
		</div>
    </div>

    <div class="component">
        <pre>&lt;div class="btn-group-vertical"&gt;
  &lt;button type="button" class="btn btn-primary"&gt;Button&lt;/button&gt;
  &lt;button type="button" class="btn btn-primary"&gt;Button&lt;/button&gt;
  &lt;button type="button" class="btn btn-primary"&gt;Button&lt;/button&gt;
  &lt;button type="button" class="btn btn-primary"&gt;Button&lt;/button&gt;
  &lt;button type="button" class="btn btn-primary"&gt;Button&lt;/button&gt;
  &lt;button type="button" class="btn btn-primary"&gt;Button&lt;/button&gt;
&lt;/div&gt;</pre>
    </div>

    <div class="component">
        <div class="btn-group" role="group" aria-label="Basic example">
			<button type="button" class="btn btn-secondary">Left</button>
			<button type="button" class="btn btn-secondary">Middle</button>
			<button type="button" class="btn btn-secondary">Right</button>
		</div>
    </div>

    <div class="component">
        <pre>&lt;div class="btn-group" role="group" aria-label="Basic example"&gt;
  &lt;button type="button" class="btn btn-secondary"&gt;Left&lt;/button&gt;
  &lt;button type="button" class="btn btn-secondary"&gt;Middle&lt;/button&gt;
  &lt;button type="button" class="btn btn-secondary"&gt;Right&lt;/button&gt;
&lt;/div&gt;</pre>
    </div>

    <div class="component">
        <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
			<div class="btn-group mr-2" role="group" aria-label="First group">
				<button type="button" class="btn btn-secondary">1</button>
				<button type="button" class="btn btn-secondary">2</button>
				<button type="button" class="btn btn-secondary">3</button>
				<button type="button" class="btn btn-secondary">4</button>
			</div>
			<div class="btn-group mr-2" role="group" aria-label="Second group">
				<button type="button" class="btn btn-secondary">5</button>
				<button type="button" class="btn btn-secondary">6</button>
				<button type="button" class="btn btn-secondary">7</button>
			</div>
			<div class="btn-group" role="group" aria-label="Third group">
				<button type="button" class="btn btn-secondary">8</button>
			</div>
		</div>
    </div>

    <div class="component">
        <pre>&lt;div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups"&gt;
  &lt;div class="btn-group mr-2" role="group" aria-label="First group"&gt;
    &lt;button type="button" class="btn btn-secondary"&gt;1&lt;/button&gt;
    &lt;button type="button" class="btn btn-secondary"&gt;2&lt;/button&gt;
    &lt;button type="button" class="btn btn-secondary"&gt;3&lt;/button&gt;
    &lt;button type="button" class="btn btn-secondary"&gt;4&lt;/button&gt;
  &lt;/div&gt;
  &lt;div class="btn-group mr-2" role="group" aria-label="Second group"&gt;
    &lt;button type="button" class="btn btn-secondary"&gt;5&lt;/button&gt;
    &lt;button type="button" class="btn btn-secondary"&gt;6&lt;/button&gt;
    &lt;button type="button" class="btn btn-secondary"&gt;7&lt;/button&gt;
  &lt;/div&gt;
  &lt;div class="btn-group" role="group" aria-label="Third group"&gt;
    &lt;button type="button" class="btn btn-secondary"&gt;8&lt;/button&gt;
  &lt;/div&gt;
&lt;/div&gt;</pre>
    </div>
@endsection