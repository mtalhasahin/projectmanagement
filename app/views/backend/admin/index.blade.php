@extends('backend.admin.layout.master')
@section('content')

<div class="span9">
					
					<div class="well summary">
						<ul>
							<li>
								<a href="#"><span class="count">3</span> Projects</a>
							</li>
							<li>
								<a href="#"><span class="count">27</span> Tasks</a>
							</li>
							<li>
								<a href="#"><span class="count">7</span> Messages</a>
							</li>
							<li class="last">
								<a href="#"><span class="count">5</span> Files</a>
							</li>
						</ul>
					</div>
					<h2>
						Recent Activity
					</h2>
					<table class="table table-bordered table-striped">
						<thead>
							<tr>
								<th>
									Project
								</th>
								<th>
									Client
								</th>
								<th>
									Type
								</th>
								<th>
									Date
								</th>
								<th>
									View
								</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>
									Nike.com Redesign
								</td>
								<td>
									Monsters Inc
								</td>
								<td>
									New Task
								</td>
								<td>
									4 days ago
								</td>
								<td>
									<a href="#" class="view-link">View</a>
								</td>
							</tr>
						</tbody>
					</table>
					<ul class="pager">
						<li class="next">
							<a href="activity.htm">More &rarr;</a>
						</li>
					</ul>
				</div>

@stop

