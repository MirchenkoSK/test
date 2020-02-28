@extends('wolf.base')
@section('title', 'Tables')
@section('content')
    <h1 class="component-header">Tables</h1>

    <div class="component">
		<table class="table table-hover">
			<thead>
				<tr>
					<th scope="col">Type</th>
					<th scope="col">Column heading</th>
					<th scope="col">Column heading</th>
					<th scope="col">Column heading</th>
				</tr>
			</thead>
			<tbody>
				<tr class="table-active">
					<th scope="row">Active</th>
					<td>Column content</td>
					<td>Column content</td>
					<td>Column content</td>
				</tr>
				<tr>
					<th scope="row">Default</th>
					<td>Column content</td>
					<td>Column content</td>
					<td>Column content</td>
				</tr>
				<tr class="table-primary">
					<th scope="row">Primary</th>
					<td>Column content</td>
					<td>Column content</td>
					<td>Column content</td>
				</tr>
				<tr class="table-secondary">
					<th scope="row">Secondary</th>
					<td>Column content</td>
					<td>Column content</td>
					<td>Column content</td>
				</tr>
				<tr class="table-success">
					<th scope="row">Success</th>
					<td>Column content</td>
					<td>Column content</td>
					<td>Column content</td>
				</tr>
				<tr class="table-danger">
					<th scope="row">Danger</th>
					<td>Column content</td>
					<td>Column content</td>
					<td>Column content</td>
				</tr>
				<tr class="table-warning">
					<th scope="row">Warning</th>
					<td>Column content</td>
					<td>Column content</td>
					<td>Column content</td>
				</tr>
				<tr class="table-info">
					<th scope="row">Info</th>
					<td>Column content</td>
					<td>Column content</td>
					<td>Column content</td>
				</tr>
				<tr class="table-light">
					<th scope="row">Light</th>
					<td>Column content</td>
					<td>Column content</td>
					<td>Column content</td>
				</tr>
				<tr class="table-dark">
					<th scope="row">Dark</th>
					<td>Column content</td>
					<td>Column content</td>
					<td>Column content</td>
				</tr>
			</tbody>
		</table> 
    </div>

    <div class="component">
    	<pre>&lt;table class="table table-hover"&gt;
  &lt;thead&gt;
    &lt;tr&gt;
      &lt;th scope="col"&gt;Type&lt;/th&gt;
      &lt;th scope="col"&gt;Column heading&lt;/th&gt;
      &lt;th scope="col"&gt;Column heading&lt;/th&gt;
      &lt;th scope="col"&gt;Column heading&lt;/th&gt;
    &lt;/tr&gt;
  &lt;/thead&gt;
  &lt;tbody&gt;
    &lt;tr class="table-active"&gt;
      &lt;th scope="row"&gt;Active&lt;/th&gt;
      &lt;td&gt;Column content&lt;/td&gt;
      &lt;td&gt;Column content&lt;/td&gt;
      &lt;td&gt;Column content&lt;/td&gt;
    &lt;/tr&gt;
    &lt;tr&gt;
      &lt;th scope="row"&gt;Default&lt;/th&gt;
      &lt;td&gt;Column content&lt;/td&gt;
      &lt;td&gt;Column content&lt;/td&gt;
      &lt;td&gt;Column content&lt;/td&gt;
    &lt;/tr&gt;
    &lt;tr class="table-primary"&gt;
      &lt;th scope="row"&gt;Primary&lt;/th&gt;
      &lt;td&gt;Column content&lt;/td&gt;
      &lt;td&gt;Column content&lt;/td&gt;
      &lt;td&gt;Column content&lt;/td&gt;
    &lt;/tr&gt;
    &lt;tr class="table-secondary"&gt;
      &lt;th scope="row"&gt;Secondary&lt;/th&gt;
      &lt;td&gt;Column content&lt;/td&gt;
      &lt;td&gt;Column content&lt;/td&gt;
      &lt;td&gt;Column content&lt;/td&gt;
    &lt;/tr&gt;
    &lt;tr class="table-success"&gt;
      &lt;th scope="row"&gt;Success&lt;/th&gt;
      &lt;td&gt;Column content&lt;/td&gt;
      &lt;td&gt;Column content&lt;/td&gt;
      &lt;td&gt;Column content&lt;/td&gt;
    &lt;/tr&gt;
    &lt;tr class="table-danger"&gt;
      &lt;th scope="row"&gt;Danger&lt;/th&gt;
      &lt;td&gt;Column content&lt;/td&gt;
      &lt;td&gt;Column content&lt;/td&gt;
      &lt;td&gt;Column content&lt;/td&gt;
    &lt;/tr&gt;
    &lt;tr class="table-warning"&gt;
      &lt;th scope="row"&gt;Warning&lt;/th&gt;
      &lt;td&gt;Column content&lt;/td&gt;
      &lt;td&gt;Column content&lt;/td&gt;
      &lt;td&gt;Column content&lt;/td&gt;
    &lt;/tr&gt;
    &lt;tr class="table-info"&gt;
      &lt;th scope="row"&gt;Info&lt;/th&gt;
      &lt;td&gt;Column content&lt;/td&gt;
      &lt;td&gt;Column content&lt;/td&gt;
      &lt;td&gt;Column content&lt;/td&gt;
    &lt;/tr&gt;
    &lt;tr class="table-light"&gt;
      &lt;th scope="row"&gt;Light&lt;/th&gt;
      &lt;td&gt;Column content&lt;/td&gt;
      &lt;td&gt;Column content&lt;/td&gt;
      &lt;td&gt;Column content&lt;/td&gt;
    &lt;/tr&gt;
    &lt;tr class="table-dark"&gt;
      &lt;th scope="row"&gt;Dark&lt;/th&gt;
      &lt;td&gt;Column content&lt;/td&gt;
      &lt;td&gt;Column content&lt;/td&gt;
      &lt;td&gt;Column content&lt;/td&gt;
    &lt;/tr&gt;
  &lt;/tbody&gt;
&lt;/table&gt;</pre>
    </div>
@endsection