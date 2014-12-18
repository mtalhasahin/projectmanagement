@extends('backend.admin.layout.master')
@section('content')
<div class="span9">
					<h1>
						Files
					</h1>
					<ul class="files zebra-list">
						<li>
							<i class="icon-file"></i> <a class="title" href="#">List of Customer Emails</a> <span class="meta">Uploaded <em>2 days ago</em> by <em>John</em></span>
						</li>
						<li>
							<i class="icon-file"></i> <a class="title" href="#">Weekly Stat Report</a> <span class="meta">Uploaded <em>5 days ago</em> by <em>John</em></span>
						</li>
						<li>
							<i class="icon-file"></i> <a class="title" href="#">Company Newsletter - Jan 2012</a> <span class="meta">Uploaded <em>2 weeks ago</em> by <em>Jill</em></span>
						</li>
					</ul>
					<a class="toggle-link" href="#new-file"><i class="icon-plus"></i> New File</a>
					<form id="new-file" class="form-horizontal hidden">
						<fieldset>
							<legend>New File</legend>
							<div class="control-group">
								<label class="control-label" for="textarea">Title</label>
								<div class="controls">
									<input type="text" class="input-xlarge" id="input01" />
								</div>
							</div>
							<div class="control-group">
								<label class="control-label" for="fileInput">File</label>
								<div class="controls">
									<input class="input-file" id="fileInput" type="file" />
								</div>
							</div>
							<div class="form-actions">
								<button type="submit" class="btn btn-primary">Upload</button> <button class="btn">Cancel</button>
							</div>
						</fieldset>
					</form>
				</div>

@stop