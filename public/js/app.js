new Vue({

	 el: '#app-layout',

	 data: {
	 	enrollee: {
	 		first_name: '',
	 		middle_name: '',
	 		last_name: '',
	 		id_no: ''
	 	},
	 	enrollees: []
	 },

	 ready: function(){
	 	this.fetchEvents();
	 },

	 methods:{
	 	fetchEvents: function(){
	 		this.$http.get('http://localhost/mitienrollment/public/student').then(function(students){
		 		this.$set('enrollees', students.data);
		 		console.log(students);
		 	},function(response){
		 		console.log('error response');
		 	});
	 	}	 	
	 }
});