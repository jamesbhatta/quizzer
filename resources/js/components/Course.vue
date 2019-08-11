<template>
	<div class="row">
		<div class="col-md-4">
			<div class="card">
				<div class="card-header secondary-color waves-effect text-white">
					<h5>Add New Course</h5>
				</div>
				<div class="card-body">
					<form action="" class="form needs-validation"">
						<div class="alert alert-danger alert-dismissible fade show " v-bind:class="{ 'd-none': hasError }" role="alert">
							Please Fill Name Field.
							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="form-group">
							<label for="name">Name:</label>
							<input type="text" name="name" id="name" v-model="newItem.name" class="form-control rounded-0" value="">
						</div>
						<div class="form-group">
							<label>Description</label>
							<textarea name="description" class="form-control rounded-0" id="" cols="30" rows="10"></textarea>
						</div>
						<div class="form-group">
							<button type="submit" @click.prevent="addCourse()" class="btn btn-secondary rounded-0 waves-effect float-right">Add Course</button>
						</div>
					</form>
				</div>
			</div>
		</div>
		<div class="col-md-8">
			<div class="card">
				<div class="card-body">
					<table class="table table-hover">
						<!-- Table head -->
						<thead class="secondary-color lighten-4 text-white">
							<tr>
								<th>#</th>
								<th>Name</th>
								<th>Published</th>
								<th>Action</th>
							</tr>
						</thead>
						<!-- Table head -->

						<!-- Table body -->
						<tbody>
							<tr v-if="courses.length == 0">
								<td colspan="5" class="text-center font-italic">No Data found</td>
							</tr>
							<tr v-for="( course, index ) in courses">
								<th scope="row">{{ index + 1 }}</th>
								<td>{{ course.name }}</td>
								<td v-if="course.visible">Yes</td>
								<td v-else>No</td>
								<td>
									<a class="btn-link text-danger" v-on:click="removeCourse(course)"><i class="fa fa-trash"></i></a>
								</td>
							</tr>
						</tbody>
						<!-- Table body -->
					</table>
					<!-- Table  -->
				</div>
			</div>
		</div>
	</div>
</template>

<script>
	export default{
		data: function () {
			return {
				hasError: true,
				courses: [
				{
					name: 'Course One',
					description: 'Description of Course One',
					visible: 1
				},
				{
					name: 'Course Two',
					description: 'Description of Course Twox',
					visible: 1
				},
				{
					name: 'Course Three',
					description: '',
					visible: 0
				},
				{
					name: 'Course Four',
					description: '',
					visible:1
				},
				{
					name: 'Course Five',
					description: '',
					visible: 0
				}
				],
				newItem: { 'name': '', 'description': 'Random Description', 'visible': 1},
			}
		},
		methods: {
			addCourse: function () {
				console.log('Add course called')
				if (this.newItem.name == '') {
					this.hasError= false
				}else{
					this.hasError= true
					this.courses.push({
						'name': this.newItem.name,
						'description': this.newItem.description,
						'visible': 1
					})
					this.newItem.name= ''
				}
			},

			removeCourse: function (course) {
				console.log('Course Removed')
				this.courses.splice(this.courses.indexOf(course), 1)
				console.log(this.hasError)
			}
		}
	}
</script>