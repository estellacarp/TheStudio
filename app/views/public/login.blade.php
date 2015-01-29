<!DOCTYPE html>
<html>
	<body>
		<div>
			<ul class="nav nav-tabs" role="tablist">
				<li class="active"><a href = "#">Home</a></li>
				<li class="active"><a href=#>Themes</a>
				</li>
				<li class="active"><a href = "#">Lesson Plans</a></li>
				<li class="active"><a href = "#">Art Activites</a></li>
			</ul>
		</div>
		<form action="{{ URL::to('login') }}" method="post">
			<button type ="submit"> Login </button>
		</form>
	</body>
</html>
