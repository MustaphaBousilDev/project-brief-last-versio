<?php include 'scripts.php'; ?>

<?php

    session_start();
?>

<!DOCTYPE html>
<html lang="en" >
<head>
	<meta charset="utf-8" />
	<title>YouCode | Scrum Board</title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	
	<!-- ================== BEGIN core-css ================== -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
	<link href="assets/css/vendor.min.css" rel="stylesheet" />
	<link href="assets/css/default/app.min.css" rel="stylesheet" />
	<!-- ================== END core-css ================== -->
</head>
<body>
<?php 
	
	#echo $do;
?>
	<!-- BEGIN #loader -->
	<div id="loader" class="app-loader">
		<span class="spinner"></span>
	</div>
	<!-- END #loader -->

	<!-- BEGIN #app -->
	<div id="app" class="app app-header-fixed app-sidebar-fixed">
		<!-- BEGIN #header -->
		<div id="header" class="app-header">
			<!-- BEGIN navbar-header -->
			<div class="navbar-header">
				<a href="index.html" class="navbar-brand"><span class="navbar-logo"></span> <b class="me-1">YouCode</b> Projects</a>
				<button type="button" class="navbar-mobile-toggler" data-toggle="app-sidebar-mobile">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>
			<!-- END navbar-header -->
			<!-- BEGIN header-nav -->
			<div class="navbar-nav">
				<div class="navbar-item navbar-form">
					<form action="" method="POST" name="search">
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Enter keyword" />
							<button type="submit" class="btn btn-search"><i class="fa fa-search"></i></button>
						</div>
					</form>
				</div>
				<div class="navbar-item dropdown">
					<a href="#" data-bs-toggle="dropdown" class="navbar-link dropdown-toggle icon">
						<i class="fa fa-bell"></i>
						<span class="badge">5</span>
					</a>
					<div class="dropdown-menu media-list dropdown-menu-end">
						<div class="dropdown-header">NOTIFICATIONS (5)</div>
						<a href="javascript:;" class="dropdown-item media">
							<div class="media-left">
								<i class="fa fa-bug media-object bg-gray-500"></i>
							</div>
							<div class="media-body">
								<h6 class="media-heading">Server Error Reports <i class="fa fa-exclamation-circle text-danger"></i></h6>
								<div class="text-muted fs-10px">3 minutes ago</div>
							</div>
						</a>
						<a href="javascript:;" class="dropdown-item media">
							<div class="media-left">
								<img src="assets/img/user/user-1.jpg" class="media-object" alt="" />
								<i class="fab fa-facebook-messenger text-blue media-object-icon"></i>
							</div>
							<div class="media-body">
								<h6 class="media-heading">John Smith</h6>
								<p>Quisque pulvinar tellus sit amet sem scelerisque tincidunt.</p>
								<div class="text-muted fs-10px">25 minutes ago</div>
							</div>
						</a>
						<a href="javascript:;" class="dropdown-item media">
							<div class="media-left">
								<img src="assets/img/user/user-2.jpg" class="media-object" alt="" />
								<i class="fab fa-facebook-messenger text-blue media-object-icon"></i>
							</div>
							<div class="media-body">
								<h6 class="media-heading">Olivia</h6>
								<p>Quisque pulvinar tellus sit amet sem scelerisque tincidunt.</p>
								<div class="text-muted fs-10px">35 minutes ago</div>
							</div>
						</a>
						<a href="javascript:;" class="dropdown-item media">
							<div class="media-left">
								<i class="fa fa-plus media-object bg-gray-500"></i>
							</div>
							<div class="media-body">
								<h6 class="media-heading"> New User Registered</h6>
								<div class="text-muted fs-10px">1 hour ago</div>
							</div>
						</a>
						<a href="javascript:;" class="dropdown-item media">
							<div class="media-left">
								<i class="fa fa-envelope media-object bg-gray-500"></i>
								<i class="fab fa-google text-warning media-object-icon fs-14px"></i>
							</div>
							<div class="media-body">
								<h6 class="media-heading"> New Email From John</h6>
								<div class="text-muted fs-10px">2 hour ago</div>
							</div>
						</a>
						<div class="dropdown-footer text-center">
							<a href="javascript:;" class="text-decoration-none">View more</a>
						</div>
					</div>
				</div>
				
				<div class="navbar-item navbar-user dropdown">
					<a href="#" class="navbar-link dropdown-toggle d-flex align-items-center" data-bs-toggle="dropdown">
						<img src="assets/img/user/user-13.jpg" alt="" /> 
						<span>
							<span class="d-none d-md-inline">Jilali Smith</span>
							<b class="caret"></b>
						</span>
					</a>
					<div class="dropdown-menu dropdown-menu-end me-1">
						<a href="javascript:;" class="dropdown-item">Edit Profile</a>
						<a href="javascript:;" class="dropdown-item d-flex align-items-center">
							Inbox
							<span class="badge bg-danger rounded-pill ms-auto pb-4px">2</span> 
						</a>
						<a href="javascript:;" class="dropdown-item">Calendar</a>
						<a href="javascript:;" class="dropdown-item">Setting</a>
						<div class="dropdown-divider"></div>
						<a href="javascript:;" class="dropdown-item">Log Out</a>
					</div>
				</div>
			</div>
			<!-- END header-nav -->
		</div>
		<!-- END #header -->
	
		<!-- BEGIN #sidebar -->
		<div id="sidebar" class="app-sidebar">
			<!-- BEGIN scrollbar -->
			<div class="app-sidebar-content" data-scrollbar="true" data-height="100%">
				<!-- BEGIN menu -->
				<div class="menu">
					<div class="menu-profile">
						<a href="javascript:;" class="menu-profile-link" data-toggle="app-sidebar-profile" data-target="#appSidebarProfileMenu">
							<div class="menu-profile-cover with-shadow"></div>
							<div class="menu-profile-image">
								<img src="assets/img/user/user-13.jpg" alt="" />
							</div>
							<div class="menu-profile-info">
								<div class="d-flex align-items-center">
									<div class="flex-grow-1">
										Jilali Smith
									</div>
									<div class="menu-caret ms-auto"></div>
								</div>
								<small>Front end developer</small>
							</div>
						</a>
					</div>
					<div id="appSidebarProfileMenu" class="collapse">
						<div class="menu-item pt-5px">
							<a href="javascript:;" class="menu-link">
								<div class="menu-icon"><i class="fa fa-cog"></i></div>
								<div class="menu-text">Settings</div>
							</a>
						</div>
						<div class="menu-item">
							<a href="javascript:;" class="menu-link">
								<div class="menu-icon"><i class="fa fa-pencil-alt"></i></div>
								<div class="menu-text"> Send Feedback</div>
							</a>
						</div>
						<div class="menu-item pb-5px">
							<a href="javascript:;" class="menu-link">
								<div class="menu-icon"><i class="fa fa-question-circle"></i></div>
								<div class="menu-text"> Helps</div>
							</a>
						</div>
						<div class="menu-divider m-0"></div>
					</div>
					<div class="menu-header">Navigation</div>
					
					<div class="menu-item">
						<a href="index.html" class="menu-link">
							<div class="menu-icon">
								<i class="fa fa-list-check"></i>
							</div>
							<div class="menu-text">Scrum Board</div>
						</a>
					</div>

					<!-- BEGIN minify-button -->
					<div class="menu-item d-flex">
						<a href="javascript:;" class="app-sidebar-minify-btn ms-auto" data-toggle="app-sidebar-minify"><i class="fa fa-angle-double-left"></i></a>
					</div>
					<!-- END minify-button -->
				</div>
				<!-- END menu -->
			</div>
			<!-- END scrollbar -->
		</div>
		<div class="app-sidebar-bg"></div>
		<div class="app-sidebar-mobile-backdrop"><a href="#" data-dismiss="app-sidebar-mobile" class="stretched-link"></a></div>
		<!-- END #sidebar -->
		
		<!-- BEGIN #content -->
		<div id="content" class="app-content" style="min-height: 100vh; background: url(assets/img/cover/cover-scrum-board.png) no-repeat fixed; background-size: 360px; background-position: right bottom;">
			<div class="d-flex align-items-center mb-3">
				<div>
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="javascript:;">Home</a></li>
						<li class="breadcrumb-item active">Scrum Board </li>
					</ol>
					<!-- BEGIN page-header -->
					<h1 class="page-header mb-0">
						Scrum Board 
					</h1>
					<!-- END page-header -->
				</div>
				
				<div class="ms-auto">
				<a href="#modal-task" id="add" data-bs-toggle="modal" class="btn btn-success btn-rounded px-4 rounded-pill"><i class="fa fa-plus fa-lg me-2 ms-n2 text-success-900"></i> Add Task</a>
				</div>
			</div>
			
			<div class="mb-3 d-md-flex fw-bold">
				<div class="dropdown-toggle">
					<a href="#" data-bs-toggle="dropdown" class="text-decoration-none text-dark"><i class="far fa-folder fa-fw text-dark text-opacity-50 me-1"></i> project/sprint-2 <b class="caret"></b></a>
					<div class="dropdown-menu dropdown-menu-start">
						<a href="#" class="dropdown-item"><i class="far fa-folder fa-fw fa-lg text-gray-500 me-1"></i> project/mobile-app-dev</a>
						<a href="#" class="dropdown-item"><i class="far fa-folder fa-fw fa-lg text-gray-500 me-1"></i> project/bootstrap-5</a>
						<a href="#" class="dropdown-item"><i class="far fa-folder fa-fw fa-lg text-gray-500 me-1"></i> project/mvc-version</a>
						<a href="#" class="dropdown-item"><i class="far fa-folder fa-fw fa-lg text-gray-500 me-1"></i> project/ruby-version</a>
					</div>
				</div>
				<div class="ms-md-4 mt-md-0 mt-2"><i class="fa fa-code-branch fa-fw me-1 text-dark text-opacity-50"></i> 1,392 pull request</div>
				<div class="ms-md-4 mt-md-0 mt-2"><i class="fa fa-users-cog fa-fw me-1 text-dark text-opacity-50"></i> 52 participant</div>
				<div class="ms-md-4 mt-md-0 mt-2"><i class="far fa-clock fa-fw me-1 text-dark text-opacity-50"></i> 14 day(s)</div>
			</div>

			
				
			<?php
					if(isset($_SESSION) && !empty($_SESSION)){
						foreach($_SESSION as $err){
						if(isset($_SESSION['success'])){
							
						}else{
							echo "<div class='alert alert-danger'>".$err."</div>";
						}
					}
					if(isset($_SESSION['success'])){
						echo "<div class='alert alert-success'>".$_SESSION['success']."</div>";
					}
					session_unset();
                    session_destroy();
				    
				}
					?>
		
			
			<div class="row">
					
				<div class="col-xl-4 col-lg-6">
					<div class="panel panel-inverse">
						<div class="panel-heading">
						<?php 
                                    $stmt_add_done=$conn->prepare("SELECT tasks.* ,statu_s.name AS status__name ,priorities.name AS 
									priority__name , types.name AS type__name FROM tasks INNER JOIN statu_s 
									ON statu_s.id=tasks.status_id INNER JOIN priorities ON priorities.id=tasks.priority_id 
									INNER JOIN types ON types.id=tasks.type_id WHERE status_id=1");
									$stmt_add_done->execute();
									$todo_all_done=$stmt_add_done->fetchAll();
									$counter=$stmt_add_done->rowCount();
									?>
							<h4 class="panel-title">To do (<span id="to-do-tasks-count"><?=$counter?></span>)</h4>
							<div class="panel-heading-btn">
								<a href="javascript:;" class="btn btn-xs btn-icon btn-default" data-toggle="panel-expand"><i class="fa fa-expand"></i></a>
								<a href="javascript:;" class="btn btn-xs btn-icon btn-success" data-toggle="panel-reload"><i class="fa fa-redo"></i></a>
								<a href="javascript:;" class="btn btn-xs btn-icon btn-warning" data-toggle="panel-collapse"><i class="fa fa-minus"></i></a>
								<a href="javascript:;" class="btn btn-xs btn-icon btn-danger" data-toggle="panel-remove"><i class="fa fa-times"></i></a>
							</div>
						</div>
						<div class="list-group list-group-flush rounded-bottom overflow-hidden panel-body p-0" id="to-do-tasks">
							<!-- TO DO TASKS HERE -->
							
								<?php if(!empty($todo_all_done)):?>
                                    <?php foreach($todo_all_done as $todo): ?>
										<button data-task="<?=$todo['status_id']?>"  type="button" data-bs-toggle="modal" data-bs-target="#modal-task" onclick="get_id('<?=$todo['id']?>')" id="<?=$todo['id']?>" data-index="<?=$todo['id']?>" class="task border-0 bg-white text-start d-flex border-bottom w-100 p-10px">
								        <div class="col-1">
									    <i style="font-size: 20px;" class="bi bi-question-circle text-success"></i>
								        </div>
								        <div class="col-11">
									    <h6 class="card-title mt-1 title-button" data-task="<?=$todo['title']?>"><?=$todo['title']?></h6>
									    <div class="">
										<div style="font-size:10px;" class="text-gray" data-task="<?=$todo['task_datetime']?>"># created in <?=$todo['task_datetime']?></div>
										<div data-task="<?=$todo['description']?>"  style="font-size: 11px;" class="text-dark description-button" title="There is hardly anything more frustrating than having to look for current requirements in tens of comments under the actual description or having to decide which commenter is actually authorized to change the requirements. The goal here is to keep all the up-to-date requirements and details in the main/primary description of a task. Even though the information in comments may affect initial criteria, just update this primary description accordingly.">
								        <?=$todo['description']?>
									    </div>
									    </div>
									    <div class="d-flex justify-content-between">
									    <div class="">
										<span id="<?=$todo['id']?>type" style="font-size: 8px;" class="btn-xs btn-primary py-1 px-2 rounded type-button" data-task="<?=$todo['type_id']?>">
										    <?=$todo['type__name']?>
									    </span>
										<span style="font-size: 8px;" class="btn-xs btn-light text-black py-1 px-2 rounded priority-button" data-task="<?=$todo['priority_id']?>">
										    <?=$todo['priority__name'] ?>
									    </span>
									    </div>
									    </div>
								        </div>
							            </button>
									<?php endforeach ?>
								<?php endif ?>
								
						</div>
					</div>
				</div>
				<div class="col-xl-4 col-lg-6">
					<div class="panel panel-inverse">
						<div class="panel-heading">
						<?php 
                                    $stmt_add_done=$conn->prepare("SELECT tasks.* ,statu_s.name AS status__name ,priorities.name AS 
									priority__name , types.name AS type__name FROM tasks INNER JOIN statu_s 
									ON statu_s.id=tasks.status_id INNER JOIN priorities ON priorities.id=tasks.priority_id 
									INNER JOIN types ON types.id=tasks.type_id WHERE status_id=2");
									$stmt_add_done->execute();
									$todo_all_done=$stmt_add_done->fetchAll();
									$counter=$stmt_add_done->rowCount();

									?>
							<h4 class="panel-title">In Progress (<span id="in-progress-tasks-count"><?=$counter?></span>)</h4>
							<div class="panel-heading-btn">
								<a href="javascript:;" class="btn btn-xs btn-icon btn-default" data-toggle="panel-expand"><i class="fa fa-expand"></i></a>
								<a href="javascript:;" class="btn btn-xs btn-icon btn-success" data-toggle="panel-reload"><i class="fa fa-redo"></i></a>
								<a href="javascript:;" class="btn btn-xs btn-icon btn-warning" data-toggle="panel-collapse"><i class="fa fa-minus"></i></a>
								<a href="javascript:;" class="btn btn-xs btn-icon btn-danger" data-toggle="panel-remove"><i class="fa fa-times"></i></a>
							</div>
						</div>
						<div class="list-group list-group-flush rounded-bottom overflow-hidden panel-body p-0" id="in-progress-tasks">
							<!-- IN PROGRESS TASKS HERE -->
							
								<?php if(!empty($todo_all_done)):?>
                                    <?php foreach($todo_all_done as $todo): ?>
                                        <button data-task="<?=$todo['status_id']?>"  type="button" data-bs-toggle="modal" data-bs-target="#modal-task" onclick="get_id('<?=$todo['id']?>')" id="<?=$todo['id']?>" data-index="<?=$todo['id']?>" class="task border-0 bg-white text-start d-flex border-bottom w-100 p-10px">
								        <div class="col-1">
									    <i style="font-size: 20px;" class="bi bi-question-circle text-success"></i>
								        </div>
								        <div class="col-11">
									    <h6 class="card-title mt-1 title-button" data-task="<?=$todo['title']?>"><?=$todo['title']?></h6>
									    <div class="">
										<div style="font-size:10px;" class="text-gray" data-task="<?=$todo['task_datetime']?>"># created in <?=$todo['task_datetime']?></div>
										<div data-task="<?=$todo['description']?>"  style="font-size: 11px;" class="text-dark description-button" title="There is hardly anything more frustrating than having to look for current requirements in tens of comments under the actual description or having to decide which commenter is actually authorized to change the requirements. The goal here is to keep all the up-to-date requirements and details in the main/primary description of a task. Even though the information in comments may affect initial criteria, just update this primary description accordingly.">
								        <?=$todo['description']?>
									    </div>
									    </div>
									    <div class="d-flex justify-content-between">
									    <div class="">
										<span id="<?=$todo['id']?>type" style="font-size: 8px;" class="btn-xs btn-primary py-1 px-2 rounded type-button" data-task="<?=$todo['type_id']?>">
										    <?=$todo['type__name']?>
									    </span>
										<span style="font-size: 8px;" class="btn-xs btn-light text-black py-1 px-2 rounded priority-button" data-task="<?=$todo['priority_id']?>">
										    <?=$todo['priority__name'] ?>
									    </span>
									    </div>
									    </div>
								        </div>
							            </button>
									<?php endforeach ?>
								<?php endif ?>
						</div>
					</div>
				</div>
				<div class="col-xl-4 col-lg-6">
					<div class="panel panel-inverse">
						<div class="panel-heading">
						<?php 
                                    $stmt_add_done=$conn->prepare("SELECT tasks.* ,statu_s.name AS status__name ,priorities.name AS 
									priority__name , types.name AS type__name FROM tasks INNER JOIN statu_s 
									ON statu_s.id=tasks.status_id INNER JOIN priorities ON priorities.id=tasks.priority_id 
									INNER JOIN types ON types.id=tasks.type_id WHERE status_id=3");
									$stmt_add_done->execute();
									$todo_all_done=$stmt_add_done->fetchAll();
									$counter=$stmt_add_done->rowCount();
									?>
							<h4 class="panel-title">Done (<span id="done-tasks-count"><?=$counter?></span>)</h4>
							<div class="panel-heading-btn">
								<a href="javascript:;" class="btn btn-xs btn-icon btn-default" data-toggle="panel-expand"><i class="fa fa-expand"></i></a>
								<a href="javascript:;" class="btn btn-xs btn-icon btn-success" data-toggle="panel-reload"><i class="fa fa-redo"></i></a>
								<a href="javascript:;" class="btn btn-xs btn-icon btn-warning" data-toggle="panel-collapse"><i class="fa fa-minus"></i></a>
								<a href="javascript:;" class="btn btn-xs btn-icon btn-danger" data-toggle="panel-remove"><i class="fa fa-times"></i></a>
							</div>
						</div>
						<div class="list-group list-group-flush rounded-bottom overflow-hidden panel-body p-0" id="done-tasks">
							<!-- DONE TASKS HERE -->
							
								<?php if(!empty($todo_all_done)):?>
                                    <?php foreach($todo_all_done as $todo): ?>
                                        <button data-task="<?=$todo['status_id']?>"  type="button" data-bs-toggle="modal" data-bs-target="#modal-task" onclick="get_id('<?=$todo['id']?>')" id="<?=$todo['id']?>" data-index="<?=$todo['id']?>" class="task border-0 bg-white text-start d-flex border-bottom w-100 p-10px">
								        <div class="col-1">
									    <i style="font-size: 20px;" class="bi bi-question-circle text-success"></i>
								        </div>
								        <div class="col-11">
									    <h6 class="card-title mt-1 title-button" data-task="<?=$todo['title']?>"><?=$todo['title']?></h6>
									    <div class="">
										<div style="font-size:10px;" class="text-gray" data-task="<?=$todo['task_datetime']?>"># created in <?=$todo['task_datetime']?></div>
										<div data-task="<?=$todo['description']?>"  style="font-size: 11px;" class="text-dark description-button" title="There is hardly anything more frustrating than having to look for current requirements in tens of comments under the actual description or having to decide which commenter is actually authorized to change the requirements. The goal here is to keep all the up-to-date requirements and details in the main/primary description of a task. Even though the information in comments may affect initial criteria, just update this primary description accordingly.">
								        <?=$todo['description']?>
									    </div>
									    </div>
									    <div class="d-flex justify-content-between">
									    <div class="">
										<span id="<?=$todo['id']?>type" style="font-size: 8px;" class="btn-xs btn-primary py-1 px-2 rounded type-button" data-task="<?=$todo['type_id']?>">
										    <?=$todo['type__name']?>
									    </span>
										<span style="font-size: 8px;" class="btn-xs btn-light text-black py-1 px-2 rounded priority-button" data-task="<?=$todo['priority_id']?>">
										    <?=$todo['priority__name'] ?>
									    </span>
									    </div>
									    </div>
								        </div>
							            </button>
									<?php endforeach ?>
								<?php endif ?>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- END #content -->
		
		
		<!-- BEGIN scroll-top-btn -->
		<a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top" data-toggle="scroll-to-top"><i class="fa fa-angle-up"></i></a>
		<!-- END scroll-top-btn -->
	</div>
	<!-- END #app -->
	
	<!-- TASK MODAL -->
	<div class="modal fade" id="modal-task">
		<div class="modal-dialog">
			<div class="modal-content">
				<form  method="POST" id="form-task" action="scripts.php">
					<div class="modal-header">
						<h5 class="modal-title">Add Task</h5>
						<a href="#" class="btn-close" data-bs-dismiss="modal"></a>
					</div>
					<div class="modal-body">
							<!-- This Input Allows Storing Task Index  -->
							<input name="id" type="hidden" id="task-id">
							<div class="mb-3">
								<label class="form-label">Title</label>
								<input name="title" type="text" class="form-control" id="task-title"/>
							</div>
							<div class="mb-3">
								<label class="form-label">Type</label>
								<div class="ms-3">
									<div class="form-check mb-1">
										<input  class="form-check-input" name="task-type" type="radio" value="1" id="task-type-feature"/>
										<label class="form-check-label" for="task-type-feature">Feature</label>
									</div>
									<div class="form-check">
										<input class="form-check-input" name="task-type" type="radio" value="2" id="task-type-bug"/>
										<label class="form-check-label" for="task-type-bug">Bug</label>
									</div>
								</div>
								
							</div>
							<div class="mb-3">
								<label class="form-label">Priority</label>
								<select name="task-priority" class="form-select" id="task-priority">
									<option value="">Please select</option>
									<option value="1">Low</option>
									<option value="2">Medium</option>
									<option value="3">High</option>
									<option value="4">Critical</option>
								</select>
							</div>
							<div class="mb-3">
								<label class="form-label">Status</label>
								<select name="status" class="form-select" id="task-status">
									<option value="">Please select</option>
									<option value="1">To Do</option>
									<option value="2">In Progress</option>
									<option value="3">Done</option>
								</select>
							</div>
							<div class="mb-3">
								<label class="form-label">Date</label>
								<input value="YYYY-MM-DD" name="date" type="date" class="form-control" id="task-date"/>
							</div>
							<div class="mb-0">
								<label class="form-label">Description</label>
								<textarea name="description" class="form-control" rows="10" id="task-description"></textarea>
							</div>
						
					</div>
					<div class="modal-footer">
						<a class="btn btn-white" data-bs-dismiss="modal">Cancel</a>
						<button type="submit" name="delete" class="btn btn-danger task-action-btn btn_delete" id="task-delete-btn">Delete</button>
						<button type="submit" name="update" class="btn btn-warning task-action-btn update" id="task-update-btn">Update</button>
						<button type="submit" name="save" class="btn btn-primary task-action-btn" id="task-save-btn">Save</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	
	<!-- ================== BEGIN core-js ================== -->
	<script src="assets/js/vendor.min.js"></script>
	<script src="assets/js/app.min.js"></script>
	<!-- ================== END core-js ================== -->
	<script src="scripts.js"></script>

	<script type="text/javascript">
		//reloadTasks();
        var v;
		var type;
		function get_id(id){
            let id_btn=document.getElementById(`${id}`).getAttribute('id');
			//console.log(id_btn)
			//document.querySelector('#form-task').setAttribute('action','index.php')
			console.log(document.querySelector('#form-task'));
			document.getElementById('task-id').value=id_btn;
			//console.log("ggg")
			//console.log(document.getElementById('task-id'))
			//v=id_btn;
			type = document.getElementById(`${id}type`).dataset.task;
			type=parseInt(type)
            document.getElementById("task-update-btn").style.display="block" 
			document.getElementById("task-delete-btn").style.display="block"
			document.getElementById("task-save-btn").style.display="none"
  			if(type==1){
				document.getElementById('task-type-feature').checked=true
			}
			
			 else{
                document.getElementById('task-type-bug').checked=true
			 } 
			//console.log(`dmlfdfmldfmldfldmfld${type}`)
            document.getElementById('task-status').value=document.getElementById(`${id}`).dataset.task 
			document.getElementById('task-priority').value=document.querySelector('.priority-button').dataset.task
			document.getElementById('task-title').value=document.querySelector('.title-button').dataset.task;
			document.getElementById('task-description').value=document.querySelector('.description-button').dataset.task;
			document.getElementById('task-date')=document.querySelector('.date-button').dataset.task;
			console.log(document.getElementById('task-title').value)
		}
		document.getElementById('add').addEventListener('click',function(e){
			//document.querySelector('#form-task').setAttribute('action','index.php')
			document.querySelector('#form-task').reset()
			//console.log(document.querySelector('form'))
			document.getElementById("task-update-btn").style.display="none" 
			document.getElementById("task-delete-btn").style.display="none"
			document.getElementById("task-save-btn").style.display="block"

		})

		console.log("ldglfllfgllg");
       


		
		
	</script>
</body>
</html>