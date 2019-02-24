var app3 = new Vue({
	el:'#create',
	data:{
		auto_password: true,
	}
})

var app4 = new Vue({
	el:'#dashboard',
	data:{
		message:''
	}
})

var app2 = new Vue({
	el: '#dashboard',
	data: {
	message: 'You loaded this page on ' + new Date().toLocaleString()
	}
})