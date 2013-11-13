
subreddit = ''

EntryCtrl =  ($scope, $http) ->
	$scope.Entries = []

	$scope.addEntries = ()->
		request = $http 
			method: 'GET' ,
			url : '/api'
		request.success (data , status , headers, config)->
				entries = data.data.children
				angular.forEach entries, (value, key)->
					# console.log value
					$scope.Entries.push
						title : value.data.title
						author : value.data.author
						clicked : value.data.clicked
						downs : value.data.downs
						over_18 : value.data.over_18
						score : value.data.score
						subreddit : value.data.subreddit
						thumbnail : value.data.thumbnail
						ups : value.data.ups
						url : value.data.url
						visited : value.data.visited
		

	$scope.addEntries()