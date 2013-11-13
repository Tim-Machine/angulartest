var EntryCtrl, subreddit;

subreddit = '';

EntryCtrl = function($scope, $http) {
  $scope.Entries = [];
  $scope.addEntries = function() {
    var request;
    request = $http({
      method: 'GET',
      url: '/api'
    });
    return request.success(function(data, status, headers, config) {
      var entries;
      entries = data.data.children;
      return angular.forEach(entries, function(value, key) {
        return $scope.Entries.push({
          title: value.data.title,
          author: value.data.author,
          clicked: value.data.clicked,
          downs: value.data.downs,
          over_18: value.data.over_18,
          score: value.data.score,
          subreddit: value.data.subreddit,
          thumbnail: value.data.thumbnail,
          ups: value.data.ups,
          url: value.data.url,
          visited: value.data.visited
        });
      });
    });
  };
  return $scope.addEntries();
};
