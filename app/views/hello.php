<html ng-app>
    <head>
        <title>Welcome to the test</title>
        <link rel="stylesheet" href="/assets/css/foundation.css">
        <link rel="stylesheet" href="/assets/css/main.css">
        <script src="/assets/js/vendor/custom.modernizr.js"></script>
        <script src="/assets/js/libs/angular.js"></script>
    </head>
    <body>
        <div class="row">
             Search: <input ng-model="search" placeholder="enter words or subreddit">
        </div>
        <div id="entires" class="row" ng-controller='EntryCtrl'>
            <div class="entry large-3 columns" ng-repeat='entry in Entries | filter:search '>
                <div class="entryWrapper">
                     <div class="title"> {{entry.title}}</div>

                      <div class="votes">
                        <div class="ups">&#8657 {{entry.ups}}</div>
                        <div class="downs">&#8659{{entry.downs}}</div>
                    </div>
                </div>

            </div>
        </div>
    </body>
    
    <script type="text/javascript" src="/assets/js/main.js"></script>
    <script>
      document.write('<script src=' +
      ('__proto__' in {} ? '/assets/js/vendor/zepto' : '/assets/js/vendor/jquery') +
      '.js><\/script>')
    </script>
    <script src="/assets/js/foundation.min.js"></script>
    <script>
        $(document).foundation();
    </script>
</html>
