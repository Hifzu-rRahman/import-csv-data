<!-- <style>
	div.dataTables_wrapper div.dataTables_length select {
		width: auto;
		display: none;
	}

	table,
	td,
	th {
		border: 5px solid white;
		font-size: 12px;
	}

	thead {
		background-color: rgba(240, 90, 100, 0.1);
		padding-top: 15px;
		color: #38424C;
	}

	.table {
		--bs-table-hover-color: #38424C;
		--bs-table-hover-bg: #f2f2f2;
	}

	table {
		border-width: 0px;
	}

	.table> :not(caption)>*>* {
		border-bottom-width: 0px;
	}

	.page-item.active .page-link {
		background-color: #F05A64;
		border-color: #F05A64;
	}

	.btn-primary {
		background: #F05A64;
		border-color: #F05A64;
	}

	.btn-primary:hover {
		color: #fff;
		background-color: #F05A64;
		border-color: #F05A64;
	}

	.card-header {
		padding-top: 20px;
		border-bottom: 0px solid rgba(0, 0, 0, 0.125);
	}

	.bg-smp {
		background: #F05A64;
	}
</style> -->
@php
// $this->notificationsModel = model(NotificationModel::class);
// $notifications = $this->notificationsModel->get_unread_data();
$notifications = [];
// $counter = $this->notificationsModel->get_total_count();
$counter = 0;
@endphp

<header>
	<div class="page-wrapper">
		<div class="topbar d-flex align-items-center" style="background:#EFEFF7;">
			<nav class="navbar navbar-expand">
				<div class="mobile-toggle-menu"><i class='bx bx-menu'></i>
				</div>
				<h4 style="margin-left:10px;margin-top:20px;">{{ __('message.Hello'). ' '. ucfirst($admin['name']).' !' }}</h4>
				<div class="top-menu ms-auto">
					<ul class="navbar-nav align-items-center">

						@php
						$lang = session()->get('locale');
						empty($lang)?$lang ="en":$lang;
						$flag = ($lang == "de") ? "de.svg" : "uk.svg";
						@endphp

						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle dropdown-toggle-nocaret position-relative" role="button" data-bs-toggle="dropdown" aria-expanded="false">
								<img src="{{  url('public/assets/flags/1x1/' . $flag) }}" width="28" height="28" /> {{ strtoupper($lang) }}
							</a>
							<ul class="dropdown-menu dropdown-menu-end">
								<li class="{{ ($lang == 'en') ? 'active' : ''; }} language" id="en">
									<a class="btn_lang" data-id="en" style="cursor: pointer;padding:10px">
										<img src="{{ url('public/assets/flags/1x1/uk.svg'); }}" width="28" height="28" />
										<span style="padding-left: 10px;">{{ __('message.English') }}</span>
									</a>
								</li>
								<div class="dropdown-divider"></div>
								<li class="{{ ($lang == 'de') ? 'active' : ''; }}language" id="de">
									<a class="btn_lang" data-id="de" style="cursor: pointer;padding:10px">
										<img src="{{ url('public/assets/flags/1x1/de.svg'); }}" width="24" height="24" />
										<span style="padding-left: 10px;">{{ __('message.German') }}</span>
									</a>
								</li>
							</ul>
						</li>

						<!-- <li class="nav-item dropdown dropdown-large">
							<a class="nav-link dropdown-toggle dropdown-toggle-nocaret position-relative" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
								<i class='bx bx-bell text-white text-center' style="background:#38424C; border-radius:10px; width:35px;"><span class="alert-count">{{ $counter }}</span></i>
							</a>
							<div class="dropdown-menu dropdown-menu-end">
								<a href="javascript:;">
									<div class="msg-header">
										<p class="msg-header-title">Notifications</p>
										<a href="" id="notification" class="msg-header-clear ms-auto">Marks all as read</a>
									</div>
								</a>
								<div class="header-message-list">
									@if (!empty($notifications))
									@foreach ($notifications as $value)
									<a id="read" class="dropdown-item" data-id="{{ $value['id'] }}" href="">
										<div class="d-flex align-items-center">
											<div class="user-online">
												<img src="{{ !empty($value['avatar_url']) ? url($value['avatar_url']) : url('public/assets/images/avatars/user.jpg'); }}" class="msg-avatar" alt="user avatar">
											</div>
											<div class="flex-grow-1">
												<h6 class="msg-name">{{ $value['title'] }}<span class="msg-time float-end"> $expiry_time = new DateTime($value['created_at']) $current_date = new DateTime() $diff = $expiry_time->diff($current_date) echo $diff->format('%H:%I:%S ') .' '.'ago' </span></h6>
												<p class="msg-info">{{ $value['message'] }}</p>
											</div>
										</div>
									</a>
									@endforeach
									@else
									<div class="header-notifications-list">
										<a class="dropdown-item" href="javascript:;">
											<div class="alert-empty-table-wrapper">
												<div class="alert-empty-table-icon"><i class="bx bx-bell"></i></div>
												<div class="alert-empty-info alert-empty-bot-info">
													<span>{{ __('message.No Notifications') }}</span>
												</div>
											</div>
										</a>
									</div>
									@endif
								</div>
								<a href="{{ url('admin/manage-notifications') }}">
									<div class="text-center msg-footer">View All Notifications</div>
								</a>
							</div>
						</li>

						<li class="nav-item dropdown dropdown-large d-none">
							<a class="nav-link dropdown-toggle dropdown-toggle-nocaret position-relative" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> <span class="alert-count">8</span>
								<i class='bx bx-comment'></i>
							</a>
							<div class="dropdown-menu dropdown-menu-end">
								<a href="javascript:;">
									<div class="msg-header">
										<p class="msg-header-title">Messages</p>
										<p class="msg-header-clear ms-auto">Marks all as read</p>
									</div>
								</a>
								<div class="header-message-list">
									<a class="dropdown-item" href="javascript:;">
										<div class="d-flex align-items-center">
											<div class="user-online">
												<img src="#" class="msg-avatar" alt="user avatar">
											</div>
											<div class="flex-grow-1">
												<h6 class="msg-name">Daisy Anderson <span class="msg-time float-end">5 sec
														ago</span></h6>
												<p class="msg-info">The standard chunk of lorem</p>
											</div>
										</div>
									</a>
									<a class="dropdown-item" href="javascript:;">
										<div class="d-flex align-items-center">
											<div class="user-online">
												<img src="#" class="msg-avatar" alt="user avatar">
											</div>
											<div class="flex-grow-1">
												<h6 class="msg-name">Althea Cabardo <span class="msg-time float-end">14
														sec ago</span></h6>
												<p class="msg-info">Many desktop publishing packages</p>
											</div>
										</div>
									</a>
									<a class="dropdown-item" href="javascript:;">
										<div class="d-flex align-items-center">
											<div class="user-online">
												<img src="#" class="msg-avatar" alt="user avatar">
											</div>
											<div class="flex-grow-1">
												<h6 class="msg-name">Oscar Garner <span class="msg-time float-end">8 min
														ago</span></h6>
												<p class="msg-info">Various versions have evolved over</p>
											</div>
										</div>
									</a>
									<a class="dropdown-item" href="javascript:;">
										<div class="d-flex align-items-center">
											<div class="user-online">
												<img src="#" class="msg-avatar" alt="user avatar">
											</div>
											<div class="flex-grow-1">
												<h6 class="msg-name">Katherine Pechon <span class="msg-time float-end">15
														min ago</span></h6>
												<p class="msg-info">Making this the first true generator</p>
											</div>
										</div>
									</a>
									<a class="dropdown-item" href="javascript:;">
										<div class="d-flex align-items-center">
											<div class="user-online">
												<img src="#" class="msg-avatar" alt="user avatar">
											</div>
											<div class="flex-grow-1">
												<h6 class="msg-name">Amelia Doe <span class="msg-time float-end">22 min
														ago</span></h6>
												<p class="msg-info">Duis aute irure dolor in reprehenderit</p>
											</div>
										</div>
									</a>
									<a class="dropdown-item" href="javascript:;">
										<div class="d-flex align-items-center">
											<div class="user-online">
												<img src="#" class="msg-avatar" alt="user avatar">
											</div>
											<div class="flex-grow-1">
												<h6 class="msg-name">Cristina Jhons <span class="msg-time float-end">2 hrs
														ago</span></h6>
												<p class="msg-info">The passage is attributed to an unknown</p>
											</div>
										</div>
									</a>
									<a class="dropdown-item" href="javascript:;">
										<div class="d-flex align-items-center">
											<div class="user-online">
												<img src="#" class="msg-avatar" alt="user avatar">
											</div>
											<div class="flex-grow-1">
												<h6 class="msg-name">James Caviness <span class="msg-time float-end">4 hrs
														ago</span></h6>
												<p class="msg-info">The point of using Lorem</p>
											</div>
										</div>
									</a>
									<a class="dropdown-item" href="javascript:;">
										<div class="d-flex align-items-center">
											<div class="user-online">
												<img src="#" class="msg-avatar" alt="user avatar">
											</div>
											<div class="flex-grow-1">
												<h6 class="msg-name">Peter Costanzo <span class="msg-time float-end">6 hrs
														ago</span></h6>
												<p class="msg-info">It was popularised in the 1960s</p>
											</div>
										</div>
									</a>
									<a class="dropdown-item" href="javascript:;">
										<div class="d-flex align-items-center">
											<div class="user-online">
												<img src="#" class="msg-avatar" alt="user avatar">
											</div>
											<div class="flex-grow-1">
												<h6 class="msg-name">David Buckley <span class="msg-time float-end">2 hrs
														ago</span></h6>
												<p class="msg-info">Various versions have evolved over</p>
											</div>
										</div>
									</a>
									<a class="dropdown-item" href="javascript:;">
										<div class="d-flex align-items-center">
											<div class="user-online">
												<img src="#" class="msg-avatar" alt="user avatar">
											</div>
											<div class="flex-grow-1">
												<h6 class="msg-name">Thomas Wheeler <span class="msg-time float-end">2 days
														ago</span></h6>
												<p class="msg-info">If you are going to use a passage</p>
											</div>
										</div>
									</a>
									<a class="dropdown-item" href="javascript:;">
										<div class="d-flex align-items-center">
											<div class="user-online">
												<img src="#" class="msg-avatar" alt="user avatar">
											</div>
											<div class="flex-grow-1">
												<h6 class="msg-name">Johnny Seitz <span class="msg-time float-end">5 days
														ago</span></h6>
												<p class="msg-info">All the Lorem Ipsum generators</p>
											</div>
										</div>
									</a>
								</div>
								<a href="javascript:;">
									<div class="text-center msg-footer">View All Messages</div>
								</a>
							</div>
						</li> -->
					</ul>
				</div>
				<div class="user-box dropdown">
					<a class="d-flex align-items-center nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
						<img src="{{ !empty($admin['avatar_url']) ? url($admin['avatar_url'])  : url('public/assets/images/avatars/user.jpg'); }}" class="user-img" alt="user avatar">
						<div class="user-info ps-3">
							<p class="user-name mb-0">{{ ucfirst($admin['name']) }}</p>
							<p class="designation mb-0">{{ ucfirst($admin['user_role']) }}</p>
						</div>
					</a>
					<ul class="dropdown-menu dropdown-menu-end">
						<!-- <li><a class="dropdown-item" href="{{ url('admin/edit-profile') }}"><i class="bx bx-user"></i><span>{{ __('message.Profile') }}</span></a>
						</li>
						<li><a class="dropdown-item" href="{{ url('admin/change-password') }}"><i class="bx bx-cog"></i><span>{{ __('message.Change Password'); }}</span></a>
						</li>
						<li>
							<div class="dropdown-divider mb-0"></div>
						</li> -->
						<li><a class="dropdown-item" href="{{ route('logout') }}"><i class='bx bx-log-out-circle'></i><span>{{ __('message.Logout') }}</span></a>
						</li>
					</ul>
				</div>
			</nav>
		</div>
	</div>
</header>

<script>
	$(document).on('click', '#notification', function(e) {
		e.preventDefault();
		$.ajax({
			type: "GET",
			url: "{{ url('admin/notification-status') }}",
			success: function(response) {
				window.location.reload();
			}
		});
	});
</script>

<script>
	$(document).on('click', '#read', function(e) {
		e.preventDefault();
		let id = $(this).data('id');
		$.ajax({
			type: "GET",
			url: "{{ url('admin/notification-read') }}" + '/' + id,
			success: function(response) {
				window.location.reload();
			}
		});
	});
</script>