@extends('wolf.base')
@section('title', 'Dialogs')
@section('content')
    <h1 class="component-header">Dialogs</h1>

    <div class="component">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
            Launch demo modal
        </button>
        <div class="modal" id="myModal">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>Modal body text goes here.</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary">Save changes</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="component">
        <pre>&lt;div class="modal" id="myModal"&gt;
  &lt;div class="modal-dialog" role="document"&gt;
    &lt;div class="modal-content"&gt;
      &lt;div class="modal-header"&gt;
        &lt;h5 class="modal-title"&gt;Modal title&lt;/h5&gt;
        &lt;button type="button" class="close" data-dismiss="modal" aria-label="Close"&gt;
          &lt;span aria-hidden="true"&gt;&amp;times;&lt;/span&gt;
        &lt;/button&gt;
      &lt;/div&gt;
      &lt;div class="modal-body"&gt;
        &lt;p&gt;Modal body text goes here.&lt;/p&gt;
      &lt;/div&gt;
      &lt;div class="modal-footer"&gt;
        &lt;button type="button" class="btn btn-primary"&gt;Save changes&lt;/button&gt;
        &lt;button type="button" class="btn btn-secondary" data-dismiss="modal"&gt;Close&lt;/button&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;</pre>
    </div>

    <div class="component">
        <button type="button" class="btn btn-secondary" title="" data-container="body" data-toggle="popover" data-placement="left" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-original-title="Popover Title">Left</button>

        <button type="button" class="btn btn-secondary" title="" data-container="body" data-toggle="popover" data-placement="top" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-original-title="Popover Title">Top</button>

        <button type="button" class="btn btn-secondary" title="" data-container="body" data-toggle="popover" data-placement="bottom" data-content="Vivamus
        sagittis lacus vel augue laoreet rutrum faucibus." data-original-title="Popover Title">Bottom</button>

        <button type="button" class="btn btn-secondary" title="" data-container="body" data-toggle="popover" data-placement="right" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-original-title="Popover Title">Right</button>
    </div>

    <div class="component">
        <pre>&lt;button type="button" class="btn btn-secondary" title="" data-container="body" data-toggle="popover" data-placement="left" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-original-title="Popover Title"&gt;Left&lt;/button&gt;

&lt;button type="button" class="btn btn-secondary" title="" data-container="body" data-toggle="popover" data-placement="top" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-original-title="Popover Title"&gt;Top&lt;/button&gt;

&lt;button type="button" class="btn btn-secondary" title="" data-container="body" data-toggle="popover" data-placement="bottom" data-content="Vivamus
sagittis lacus vel augue laoreet rutrum faucibus." data-original-title="Popover Title"&gt;Bottom&lt;/button&gt;

&lt;button type="button" class="btn btn-secondary" title="" data-container="body" data-toggle="popover" data-placement="right" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-original-title="Popover Title"&gt;Right&lt;/button&gt;</pre>
    </div>

    <div class="component">
        <button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="left" title="" data-original-title="Tooltip on left">Left</button>

        <button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Tooltip on top">Top</button>

        <button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Tooltip on bottom">Bottom</button>

        <button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="right" title="" data-original-title="Tooltip on right">Right</button> 
    </div>

    <div class="component">
        <pre>&lt;button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="left" title="" data-original-title="Tooltip on left"&gt;Left&lt;/button&gt;

&lt;button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Tooltip on top"&gt;Top&lt;/button&gt;

&lt;button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Tooltip on bottom"&gt;Bottom&lt;/button&gt;

&lt;button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="right" title="" data-original-title="Tooltip on right"&gt;Right&lt;/button&gt;</pre>
    </div>
@endsection